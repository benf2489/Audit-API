<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Response;
use App\Http\Resources\Response as ResponseResource;


class ResponseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get responses
        $responses = Response::paginate(15);

        // Return collection of responses as a resource
        return ResponseResource::collection($responses);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(isset($request->form_response["hidden"]["scores"])) {
          $scores = $request->form_response["hidden"]["scores"];
        };
        if(isset($request->form_response["calculated"]["score"])) {
          $calculated = $request->form_response["calculated"]["score"];
        };
        // if(isset($request->form_response["variables"])) {
        //   $variables = $request->form_response["variables"];
        // };
        $response_id = $request->form_response["hidden"]["response_id"];
        $formId = $request->form_response["form_id"];
        $questions = $request->form_response["definition"]["fields"];
        $answers = $request->form_response["answers"];

        // Store a response
        $response = $request->isMethod('put') ? Response::where('response_id', '=', $response_id)->firstOrFail() : new Response;



        if(isset($request->form_response["hidden"]["scores"])) {
          $response->scores = $scores;
        };
        if(isset($request->form_response["calculated"]["score"])) {
          $response->calculated = $calculated;
        };
        // if(isset($request->form_response["variables"])) {
        //   $response->variables = json_encode($variables);
        // };
        $response->response_id = $response_id;
        $response->typeform_id = $formId;
        $response->questions = json_encode($questions);
        $response->answers     = json_encode($answers);

        if($response->save()) {
          return new ResponseResource($response);
        }

    }

    /**
     * Store a newly created pdf report in public.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storePDF(Request $request,$lang=null)
    {

        $response_id = $request->form_response["hidden"]["response_id"];
        if(isset($request->form_response["hidden"]["lang"])) {
          $lang = $request->form_response["hidden"]["lang"];
        }
        $questions = $request->form_response["definition"]["fields"];
        $formId = $request->form_response["form_id"];
        $answers = $request->form_response["answers"];

        // Store a response
        $response = $request->isMethod('put') ? Response::where('response_id', '=', $response_id)->firstOrFail() : new Response;

        $response->response_id = $response_id;
        $response->typeform_id = $formId;
        $response->questions = json_encode($questions);
        $response->answers     = json_encode($answers);

        if($response->save()) {

          $res = json_decode($response->answers);

          $typeformId = $formId;

          $full = (float)$res[0]->number+(float)$res[1]->number+(float)$res[2]->number;
          $wf = (float)$res[3]->number+(float)$res[4]->number+(float)$res[5]->number;
          $rev = (float)$res[6]->number+(float)$res[7]->number+(float)$res[8]->number;
          $adv = (float)$res[9]->number+(float)$res[10]->number+(float)$res[11]->number;
          $total = (float)$res[0]->number+(float)$res[1]->number+(float)$res[2]->number+(float)$res[3]->number+(float)$res[4]->number+(float)$res[5]->number+(float)$res[6]->number+(float)$res[7]->number+(float)$res[8]->number+(float)$res[9]->number+(float)$res[10]->number+(float)$res[11]->number;

          $res_data= [
              'chart1' => $res[0]->number.",".$res[1]->number.",".$res[2]->number,
              'chart2' => $res[3]->number.",".$res[4]->number.",".$res[5]->number,
              'chart3' => $res[6]->number.",".$res[7]->number.",".$res[8]->number,
              'chart4' => $res[9]->number.",".$res[10]->number.",".$res[11]->number,
              'full'=>$full,
              'wf'=>$wf,
              'rev'=>$rev,
              'adv'=>$adv,
              'total'=>$total
          ];
          $filename= "chartjs";

          if(isset($request->form_response["hidden"]["lang"])) {

            if($lang == 'nl-nl'){
              $filename= "chartjs-nl-nl";
            } else if ($lang == 'nl'){
              $filename = "chartjs-nl-be";
            } else if ($lang == 'fr'){
              $filename = "chartjs-fr";
            } else if ($lang == 'da'){
              $filename = "chartjs-dk";
            } else if ($lang == 'dk'){
              $filename = "chartjs-dk";
            }  else if ($lang == 'en'){
                $filename = "chartjs";
            } else{
                $filename = "chartjs";
            }

          } else {
            $filename = "chartjs";
          }

          $pdf = \PDF::loadView($filename,$res_data);
          $pdf->setOption('enable-javascript',true);
          $pdf->setOption('javascript-delay',3000);
          $pdf->setOption('enable-smart-shrinking', true);
          $pdf->setOption('no-stop-slow-scripts', true)
          ->setOption('footer-spacing', 20 )
          ->setPaper('a4')
          ->setOption('margin-top', 0)
          ->setOption('margin-bottom',0)
          ->setOption('margin-left', 0)
          ->setOption('margin-right',0);

          $filename = 'response/'.$formId.'/'.$response_id.'.pdf';
          $pdf->save(public_path($filename),true);

          return ('Filename: '.$response_id.'.pdf');

        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

      // Get a single response from an audit
      $response = Response::where('response_id', '=', $id)->firstOrFail();

      // Return this reponse as a resource
      return new ResponseResource($response);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $formId
     * @return \Illuminate\Http\Response
     */
     public function formShow($formId)
     {
         // Get responses
         $responses = Response::where('typeform_id', '=', $formId)->paginate(15);

         // Return collection of responses as a resource
         return ResponseResource::collection($responses);
     }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      // Get a single response from an audit
      $response = Response::where('response_id', '=', $id)->firstOrFail();

      if($response->delete()) {
        // Return this reponse as a resource
        return new ResponseResource($response);
      }
    }

    public function pdf($response_id,$lang=null){
         $response = Response::where('response_id','=', $response_id)->firstOrFail();

        if(isset($response))
        {

        $res = json_decode($response->answers);
        $formId = $response->typeform_id;

        $full = (float)$res[0]->number+(float)$res[1]->number+(float)$res[2]->number;
        $wf = (float)$res[3]->number+(float)$res[4]->number+(float)$res[5]->number;
        $rev = (float)$res[6]->number+(float)$res[7]->number+(float)$res[8]->number;
        $adv = (float)$res[9]->number+(float)$res[10]->number+(float)$res[11]->number;
        $total = (float)$res[0]->number+(float)$res[1]->number+(float)$res[2]->number+(float)$res[3]->number+(float)$res[4]->number+(float)$res[5]->number+(float)$res[6]->number+(float)$res[7]->number+(float)$res[8]->number+(float)$res[9]->number+(float)$res[10]->number+(float)$res[11]->number;

        $res_data= [
            'chart1' => $res[0]->number.",".$res[1]->number.",".$res[2]->number,
            'chart2' => $res[3]->number.",".$res[4]->number.",".$res[5]->number,
            'chart3' => $res[6]->number.",".$res[7]->number.",".$res[8]->number,
            'chart4' => $res[9]->number.",".$res[10]->number.",".$res[11]->number,
            'full'=>$full,
            'wf'=>$wf,
            'rev'=>$rev,
            'adv'=>$adv,
            'total'=>$total
        ];

        // echo $lang;

        // echo "<pre>";
        // print_r($res_data);
        // die;

        $filename= "chartjs";

        if(isset($lang)) {

          if($lang == 'nl-nl'){
            $filename= "chartjs-nl-nl";
          } else if ($lang == 'nl'){
            $filename = "chartjs-nl-be";
          } else if ($lang == 'fr'){
            $filename = "chartjs-fr";
          } else if ($lang == 'da'){
            $filename = "chartjs-dk";
          } else if ($lang == 'dk'){
            $filename = "chartjs-dk";
          }  else if ($lang == 'en'){
              $filename = "chartjs";
          } else{
              $filename = "chartjs";
          }

        } else {
          $filename = "chartjs";
        }

        $pdf = \PDF::loadView($filename,$res_data);
        $pdf->setOption('enable-javascript',true);
        $pdf->setOption('javascript-delay',3000);
        $pdf->setOption('enable-smart-shrinking', true);
        $pdf->setOption('no-stop-slow-scripts', true)
        ->setOption('footer-spacing', 20 )
        ->setPaper('a4')
        ->setOption('margin-top', 0)
        ->setOption('margin-bottom',0)
        ->setOption('margin-left', 0)
        ->setOption('margin-right',0);

        $filename = 'response/'.$formId.'/'.$response_id.'.pdf';
        $pdf->save(public_path($filename),true);

        return $pdf->inline();


        // if($lang == 'nl-nl'){
        //   return view('chartjs-nl-nl',$res_data);
        // } else if ($lang == 'nl-be'){
        //   return view('chartjs-nl-be',$res_data);
        // } else if ($lang == 'fr'){
        //   return view('chartjs-fr',$res_data);
        // } else{
        //   return view('chartjs',$res_data);
        // }

      }

      die;
    }

    public function s4rbPdf($response_id,$lang=null){
      $response = Response::where('response_id','=', $response_id)->firstOrFail();

      if(isset($response))
      {

      $res = json_decode($response->answers);
      $formId = $response->typeform_id;

      $accuracy = (float)$res[2]->number+(float)$res[3]->number+(float)$res[4]->number+(float)$res[5]->number+(float)$res[6]->number+(float)$res[7]->number+(float)$res[8]->number+(float)$res[9]->number;
      $accuracyPercent = ($accuracy/80) * 100;
      $alignment = (float)$res[10]->number+(float)$res[11]->number+(float)$res[12]->number+(float)$res[13]->number+(float)$res[14]->number+(float)$res[15]->number;
      $alignmentPercent = ($alignment/60) * 100;
      $activation = (float)$res[16]->number+(float)$res[17]->number+(float)$res[18]->number;
      $activationPercent = ($activation/30) * 100;
      $total = (float)$res[2]->number+(float)$res[3]->number+(float)$res[4]->number+(float)$res[5]->number+(float)$res[6]->number+(float)$res[7]->number+(float)$res[8]->number+(float)$res[9]->number+(float)$res[10]->number+(float)$res[11]->number+(float)$res[12]->number+(float)$res[13]->number+(float)$res[14]->number+(float)$res[15]->number+(float)$res[16]->number+(float)$res[17]->number+(float)$res[18]->number;

      $res_data= [
          'chart1' => $res[2]->number.",".$res[3]->number.",".$res[4]->number.",".$res[5]->number.",".$res[6]->number.",".$res[7]->number.",".$res[8]->number.",".$res[9]->number,
          'chart2' => $res[10]->number.",".$res[11]->number.",".$res[12]->number.",".$res[13]->number.",".$res[14]->number.",".$res[15]->number,
          'chart3' => $res[16]->number.",".$res[17]->number.",".$res[18]->number,
          'accuracy'=>$accuracy,
          'alignment'=>$alignment,
          'activation'=>$activation,
          'accuracyPercent'=>$accuracyPercent,
          'alignmentPercent'=>$alignmentPercent,
          'activationPercent'=>$activationPercent,
          'total'=>$total
      ];

      // echo $lang;

      // echo "<pre>";
      // print_r($res_data);
      // die;

      $filename= "s4rb";

      $pdf = \PDF::loadView($filename,$res_data);
      $pdf->setOption('enable-javascript',true);
      $pdf->setOption('javascript-delay',3000);
      $pdf->setOption('enable-smart-shrinking', true);
      $pdf->setOption('no-stop-slow-scripts', true)
      ->setOption('footer-spacing', 20 )
      ->setPaper('a4')
      ->setOption('margin-top', 0)
      ->setOption('margin-bottom',0)
      ->setOption('margin-left', 0)
      ->setOption('margin-right',0);

      $filename = 'response/s4rb/'.$formId.'/'.$response_id.'.pdf';
      $pdf->save(public_path($filename),true);

      return $pdf->inline();

    }

    die;
  }

  public function point6Pdf($response_id){

    $response = Response::where('response_id','=', $response_id)->firstOrFail();

    if(isset($response)) {

      $res = json_decode($response->answers);
      $formId = $response->typeform_id;

      $all_answers = [];

      $efficiency_score = 0;
      $decisions_score = 0;
      $risk_score = 0;
      $customer_score = 0;

      $efficiency_q1 = $res[0]->choice->label;
      $efficiency_q2 = $res[1]->choice->label;
      $efficiency_q3 = $res[2]->choice->label;

      if($efficiency_q1 == 'We are in the process of getting a modern underwriting workbench.'){
        $efficiency_score += 20;
        array_push($all_answers, 20);
      } else if($efficiency_q1 == 'Our workbench lets underwriters view submissions and risk assessments in one place, and we have some workflow logic or optimisation to speed up processing.'){
        $efficiency_score += 40;
        array_push($all_answers, 40);
      } else if($efficiency_q1 == 'Digital Risk Assessment scans documents and captures data via machine learning, feeding it into risk models for analysis against quantitative sources.'){
        $efficiency_score += 100;
        array_push($all_answers, 100);
      } else {
        array_push($all_answers, 0);
      }

      if($efficiency_q2 == 'We are getting a modern policy administration platform to embed rules-based logic for more efficient case handling.'){
        $efficiency_score += 20;
        array_push($all_answers, 20);
      } else if($efficiency_q2 == 'We view document scans in one place. We have some workflow logic to speed processing and trigger review alerts. We’re starting to automate policy administration.'){
        $efficiency_score += 40;
        array_push($all_answers, 40);
      } else if($efficiency_q2 == 'Scanned document data automatically populates downstream screens. External data feeds integrate with internal policy data to spot changes that trigger policy review.'){
        $efficiency_score += 100;
        array_push($all_answers, 100);
      } else {
        array_push($all_answers, 0);
      }

      if($efficiency_q3 == 'Fixing issues involves major manual effort, time and resources. The whole business works from a defined data schema or dictionary that sets out format requirements.'){
        $efficiency_score += 20;
        array_push($all_answers, 20);
      } else if($efficiency_q3 == 'Data quality tooling profiles data and scrubs non-compliant values. We review for anomalies, run investigations and generate platform change requests if needed.'){
        $efficiency_score += 40;
        array_push($all_answers, 40);
      } else if($efficiency_q3 == 'We can detect semantic outliers at row and column level: line items inconsistent with logic or when compared to placement histories and other live data sources.'){
        $efficiency_score += 100;
        array_push($all_answers, 100);
      } else {
        array_push($all_answers, 0);
      }

      $decisions_q1 = $res[3]->choice->label;
      $decisions_q2 = $res[4]->choice->label;
      $decisions_q3 = $res[5]->choice->label;

      if($decisions_q1 == 'We categorise our clients into buckets (e.g. \'A\', \'B\', \'C\') and use spreadsheet analysis to understand historic and projected performance, and make decisions about the clients/risks within the buckets as a whole.'){
        $decisions_score += 20;
        array_push($all_answers, 20);
      } else if($decisions_q1 == 'We are in the buy/build/rent process for a modern underwriting workbench and setting up analytics to inform decisions about portfolios. Data quality can be an issue.'){
        $decisions_score += 40;
        array_push($all_answers, 40);
      } else if($decisions_q1 == 'We integrate exposure and claims data, using reporting and data science to analyse portfolios and clients, including machine learning (ML) and graphML.'){
        $decisions_score += 100;
        array_push($all_answers, 100);
      } else {
        array_push($all_answers, 0);
      }

      if($decisions_q2 == 'We rely on spreadsheets to combine ratings we purchase from data brokers into aggregate models, to make decisions about broad categories of clients.'){
        $decisions_score += 20;
        array_push($all_answers, 20);
      } else if($decisions_q2 == 'We use broker performance and risk assessment analytics. Straight-through processing of simpler risks gives underwriters more time to assess complex risks.'){
        $decisions_score += 40;
        array_push($all_answers, 40);
      } else if($decisions_q2 == 'We work with partners to gather underlying data. We want to build multi-faceted views of firms to assess risk profile, lifetime value and our all-round risk exposure.'){
        $decisions_score += 100;
        array_push($all_answers, 100);
      } else {
        array_push($all_answers, 0);
      }

      if($decisions_q3 == 'We map data snapshots of product line performance against an exposure risk register to plan our future offering. An underwriting workbench for fewer, more automated product lines.'){
        $decisions_score += 20;
        array_push($all_answers, 20);
      } else if($decisions_q3 == 'Underwriters can view product suite and risk assessments together. We process-mine submission-to-bind behaviour data to spot which products aren\'t working for us and our clients.'){
        $decisions_score += 40;
        array_push($all_answers, 40);
      } else if($decisions_q3 == 'With detailed views of real exposure, we evaluate complex relationships between policy terms, hazard events and portfolio. We use ML to match candidate clients.'){
        $decisions_score += 100;
        array_push($all_answers, 100);
      } else {
        array_push($all_answers, 0);
      }

      $risk_q1 = $res[6]->choice->label;
      $risk_q2 = $res[7]->choice->label;
      $risk_q3 = $res[8]->choice->label;

      if($risk_q1 == 'Location data is only relevant to specific questions in some business lines. Claims handlers and underwriters often search online maps to find locations and properties.'){
        $risk_score += 20;
        array_push($all_answers, 20);
      } else if($risk_q1 == 'We are leveraging geospatial analytics strategically. We see a lot of value, but impact is limited to a single line of business and we struggle to get read-across.'){
        $risk_score += 40;
        array_push($all_answers, 40);
      } else if($risk_q1 == 'Our reusable modules combine multi-level external geospatial data with business data to build unique risk profiles, informing models and processes across the firm.'){
        $risk_score += 100;
        array_push($all_answers, 100);
      } else {
        array_push($all_answers, 0);
      }

      if($risk_q2 == 'We regularly do account-based planning and stakeholder mapping. We pull data, seek sources and curate views/analytics manually. We lack deep participant data.'){
        $risk_score += 20;
        array_push($all_answers, 20);
      } else if($risk_q2 == 'We can see data on key players and links between participants. We’re starting to use \'graph\' data analytics to identify entities of interest using real-life relationships.'){
        $risk_score += 40;
        array_push($all_answers, 40);
      } else if($risk_q2 == 'Our enterprise knowledge graph finds real and hidden relationships between entities, connecting similarly behaving customers; this improves their journey and experience.'){
        $risk_score += 100;
        array_push($all_answers, 100);
      } else {
        array_push($all_answers, 0);
      }

      if($risk_q3 == 'We capture aggregate data on our performance (which can require some manual work to piece together) and regularly review our progress.'){
        $risk_score += 20;
        array_push($all_answers, 20);
      } else if($risk_q3 == 'We have repeatable data pipelines and curated reports. We plan to embed ESG in our product offering. We’re working out what data we need and how to report it.'){
        $risk_score += 40;
        array_push($all_answers, 40);
      } else if($risk_q3 == 'We drive ESG data agenda on what to collect, how to process it into risk factors and how to communicate insights to policyholders, underwriters and claims handlers.'){
        $risk_score += 100;
        array_push($all_answers, 100);
      } else {
        array_push($all_answers, 0);
      }

      $customer_q1 = $res[9]->choice->label;
      $customer_q2 = $res[10]->choice->label;
      $customer_q3 = $res[11]->choice->label;

      if($customer_q1 == 'We use data to improve the buying experience in specific areas, for example by digitising our risk profile questionnaire and auto-populating based on reference data.'){
        $customer_score += 20;
        array_push($all_answers, 20);
      } else if($customer_q1 == 'CX in underwriting is a defined and measured objective. We will soon enable omnichannel; digital infrastructure will integrate data from different interaction tools.'){
        $customer_score += 40;
        array_push($all_answers, 40);
      } else if($customer_q1 == 'CX improvements are enabled by data and analytics techniques e.g. machine learning can recommend policies and coverage to prevent under-insurance issues.'){
        $customer_score += 100;
        array_push($all_answers, 100);
      } else {
        array_push($all_answers, 0);
      }

      if($customer_q2 == 'We mass-communicate safety advice information to our customers, triggered by static rules e.g. “time of year”. This falls under marketing, not strategic loss reduction.'){
        $customer_score += 20;
        array_push($all_answers, 20);
      } else if($customer_q2 == 'Enabling risk prevention is defined, measured and optimised with analytics and A/B testing. Comms involve manual setup. Personalisation isn’t updated with live data.'){
        $customer_score += 40;
        array_push($all_answers, 40);
      } else if($customer_q2 == 'We use real-time geospatial data to predict and send helpful info before hazards occur. Or, we use knowledge graphs to find and communicate with at-risk customers.'){
        $customer_score += 100;
        array_push($all_answers, 100);
      } else {
        array_push($all_answers, 0);
      }

      if($customer_q3 == 'We use data/digital in specific areas e.g. chatbots field basic queries, but humans handle anything more complex or requiring live data lookups.'){
        $customer_score += 20;
        array_push($all_answers, 20);
      } else if($customer_q3 == 'Cutting failure demand is defined and measured. We are enabling transparency in the processes, leveraging digital infrastructure to make info available to customers.'){
        $customer_score += 40;
        array_push($all_answers, 40);
      } else if($customer_q3 == 'We enable automated updates on policy or claims progress. Data flows between customers, opponents and suppliers, enabled by digital platform APIs and pub/sub.'){
        $customer_score += 100;
        array_push($all_answers, 100);
      } else {
        array_push($all_answers, 0);
      }

      $efficiency_percent_raw = ($efficiency_score/300) * 100;
      $decisions_percent_raw = ($decisions_score/300) * 100;
      $risk_percent_raw = ($risk_score/300) * 100;
      $customer_percent_raw = ($customer_score/300) * 100;

      $efficiency_percent = number_format((float)$efficiency_percent_raw, 2, '.', '');
      $decisions_percent = number_format((float)$decisions_percent_raw, 2, '.', '');
      $risk_percent = number_format((float)$risk_percent_raw, 2, '.', '');
      $customer_percent = number_format((float)$customer_percent_raw, 2, '.', '');

      if(isset(array_count_values($all_answers)[0])) {
        $count_zero = array_count_values($all_answers)[0];
      } else {
        $count_zero = 0;
      }
      if(isset(array_count_values($all_answers)[20])) {
        $count_twen = array_count_values($all_answers)[20];
      } else {
        $count_twen = 0;
      }
      if(isset(array_count_values($all_answers)[40])) {
        $count_fort = array_count_values($all_answers)[40];
      } else {
        $count_fort = 0;
      }
      if(isset(array_count_values($all_answers)[100])) {
        $count_hund = array_count_values($all_answers)[100];
      } else {
        $count_hund = 0;
      }

      $varp = ((($count_zero-3)*($count_zero-3))/4)+((($count_twen-3)*($count_twen-3))/4)+((($count_fort-3)*($count_fort-3))/4)+((($count_hund-3)*($count_hund-3))/4);
      $consistencyFactor1 = 27 - $varp;
      $consistencyFactor2 = (abs(0-$count_zero))+(abs($count_zero-$count_twen))+(abs($count_twen-$count_fort))+(abs($count_fort-$count_hund))+(abs($count_hund-0));
      $consistency_score = 42-($consistencyFactor1 + $consistencyFactor2);

      $digProdScore = $all_answers[0] + $all_answers[1]+ $all_answers[5];
      $dataOpsScore = $all_answers[2] + $all_answers[8]+ $all_answers[10];
      $scienceScore = $all_answers[3] + $all_answers[4]+ $all_answers[11];
      $featureScore = $all_answers[6] + $all_answers[7]+ $all_answers[9];

      $total = $efficiency_score + $decisions_score + $risk_score + $customer_score;

      $res_data= [
          'total'=>$total,
          'consistency_score'=>$consistency_score,
          'efficiency_percent'=>$efficiency_percent,
          'decisions_percent'=>$decisions_percent,
          'risk_percent'=>$risk_percent,
          'customer_percent'=>$customer_percent,
          'digProdScore'=>$digProdScore,
          'dataOpsScore'=>$dataOpsScore,
          'scienceScore'=>$scienceScore,
          'featureScore'=>$featureScore
      ];

      // echo $lang;

      // echo "<pre>";
      // print_r($res_data);
      // die;

      $filename= "6p6";

      $pdf = \PDF::loadView($filename,$res_data);
      $pdf->setOption('enable-javascript',true);
      $pdf->setOption('javascript-delay',3000);
      $pdf->setOption('enable-smart-shrinking', true);
      $pdf->setOption('no-stop-slow-scripts', true)
      ->setOption('footer-spacing', 20 )
      ->setPaper('a4')
      ->setOption('margin-top', 0)
      ->setOption('margin-bottom',0)
      ->setOption('margin-left', 0)
      ->setOption('margin-right',0);

      $filename = 'response/6p6/'.$formId.'/'.$response_id.'.pdf';
      $pdf->save(public_path($filename),true);

      // $pathToFile = public_path('result').'/6p6/'.$response_id.'.pdf';
      // $pdf->save($pathToFile);
      // return $pathToFile;

      return $pdf->inline();

    }

    die;
  }

    /**
     * Store a newly created pdf report in public.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function point6PdfStore(Request $request,$lang=null)
    {

      $response_id = $request->form_response["hidden"]["response_id"];
      $formId = $request->form_response["form_id"];
      $questions = $request->form_response["definition"]["fields"];
      $answers = $request->form_response["answers"];

      // Store a response
      $response = $request->isMethod('put') ? Response::where('response_id', '=', $response_id)->firstOrFail() : new Response;

      $response->response_id = $response_id;
      $response->typeform_id = $formId;
      $response->questions = json_encode($questions);
      $response->answers     = json_encode($answers);

      if($response->save()) {

        $res = json_decode($response->answers);
      $formId = $response->typeform_id;

      $all_answers = [];

      $efficiency_score = 0;
      $decisions_score = 0;
      $risk_score = 0;
      $customer_score = 0;

      $efficiency_q1 = $res[0]->choice->label;
      $efficiency_q2 = $res[1]->choice->label;
      $efficiency_q3 = $res[2]->choice->label;

      if($efficiency_q1 == 'We are in the process of getting a modern underwriting workbench.'){
        $efficiency_score += 20;
        array_push($all_answers, 20);
      } else if($efficiency_q1 == 'Our workbench lets underwriters view submissions and risk assessments in one place, and we have some workflow logic or optimisation to speed up processing.'){
        $efficiency_score += 40;
        array_push($all_answers, 40);
      } else if($efficiency_q1 == 'Digital Risk Assessment scans documents and captures data via machine learning, feeding it into risk models for analysis against quantitative sources.'){
        $efficiency_score += 100;
        array_push($all_answers, 100);
      } else {
        array_push($all_answers, 0);
      }

      if($efficiency_q2 == 'We are getting a modern policy administration platform to embed rules-based logic for more efficient case handling.'){
        $efficiency_score += 20;
        array_push($all_answers, 20);
      } else if($efficiency_q2 == 'We view document scans in one place. We have some workflow logic to speed processing and trigger review alerts. We’re starting to automate policy administration.'){
        $efficiency_score += 40;
        array_push($all_answers, 40);
      } else if($efficiency_q2 == 'Scanned document data automatically populates downstream screens. External data feeds integrate with internal policy data to spot changes that trigger policy review.'){
        $efficiency_score += 100;
        array_push($all_answers, 100);
      } else {
        array_push($all_answers, 0);
      }

      if($efficiency_q3 == 'Fixing issues involves major manual effort, time and resources. The whole business works from a defined data schema or dictionary that sets out format requirements.'){
        $efficiency_score += 20;
        array_push($all_answers, 20);
      } else if($efficiency_q3 == 'Data quality tooling profiles data and scrubs non-compliant values. We review for anomalies, run investigations and generate platform change requests if needed.'){
        $efficiency_score += 40;
        array_push($all_answers, 40);
      } else if($efficiency_q3 == 'We can detect semantic outliers at row and column level: line items inconsistent with logic or when compared to placement histories and other live data sources.'){
        $efficiency_score += 100;
        array_push($all_answers, 100);
      } else {
        array_push($all_answers, 0);
      }

      $decisions_q1 = $res[3]->choice->label;
      $decisions_q2 = $res[4]->choice->label;
      $decisions_q3 = $res[5]->choice->label;

      if($decisions_q1 == 'We categorise our clients into buckets (e.g. \'A\', \'B\', \'C\') and use spreadsheet analysis to understand historic and projected performance, and make decisions about the clients/risks within the buckets as a whole.'){
        $decisions_score += 20;
        array_push($all_answers, 20);
      } else if($decisions_q1 == 'We are in the buy/build/rent process for a modern underwriting workbench and setting up analytics to inform decisions about portfolios. Data quality can be an issue.'){
        $decisions_score += 40;
        array_push($all_answers, 40);
      } else if($decisions_q1 == 'We integrate exposure and claims data, using reporting and data science to analyse portfolios and clients, including machine learning (ML) and graphML.'){
        $decisions_score += 100;
        array_push($all_answers, 100);
      } else {
        array_push($all_answers, 0);
      }

      if($decisions_q2 == 'We rely on spreadsheets to combine ratings we purchase from data brokers into aggregate models, to make decisions about broad categories of clients.'){
        $decisions_score += 20;
        array_push($all_answers, 20);
      } else if($decisions_q2 == 'We use broker performance and risk assessment analytics. Straight-through processing of simpler risks gives underwriters more time to assess complex risks.'){
        $decisions_score += 40;
        array_push($all_answers, 40);
      } else if($decisions_q2 == 'We work with partners to gather underlying data. We want to build multi-faceted views of firms to assess risk profile, lifetime value and our all-round risk exposure.'){
        $decisions_score += 100;
        array_push($all_answers, 100);
      } else {
        array_push($all_answers, 0);
      }

      if($decisions_q3 == 'We map data snapshots of product line performance against an exposure risk register to plan our future offering. An underwriting workbench for fewer, more automated product lines.'){
        $decisions_score += 20;
        array_push($all_answers, 20);
      } else if($decisions_q3 == 'Underwriters can view product suite and risk assessments together. We process-mine submission-to-bind behaviour data to spot which products aren\'t working for us and our clients.'){
        $decisions_score += 40;
        array_push($all_answers, 40);
      } else if($decisions_q3 == 'With detailed views of real exposure, we evaluate complex relationships between policy terms, hazard events and portfolio. We use ML to match candidate clients.'){
        $decisions_score += 100;
        array_push($all_answers, 100);
      } else {
        array_push($all_answers, 0);
      }

      $risk_q1 = $res[6]->choice->label;
      $risk_q2 = $res[7]->choice->label;
      $risk_q3 = $res[8]->choice->label;

      if($risk_q1 == 'Location data is only relevant to specific questions in some business lines. Claims handlers and underwriters often search online maps to find locations and properties.'){
        $risk_score += 20;
        array_push($all_answers, 20);
      } else if($risk_q1 == 'We are leveraging geospatial analytics strategically. We see a lot of value, but impact is limited to a single line of business and we struggle to get read-across.'){
        $risk_score += 40;
        array_push($all_answers, 40);
      } else if($risk_q1 == 'Our reusable modules combine multi-level external geospatial data with business data to build unique risk profiles, informing models and processes across the firm.'){
        $risk_score += 100;
        array_push($all_answers, 100);
      } else {
        array_push($all_answers, 0);
      }

      if($risk_q2 == 'We regularly do account-based planning and stakeholder mapping. We pull data, seek sources and curate views/analytics manually. We lack deep participant data.'){
        $risk_score += 20;
        array_push($all_answers, 20);
      } else if($risk_q2 == 'We can see data on key players and links between participants. We’re starting to use \'graph\' data analytics to identify entities of interest using real-life relationships.'){
        $risk_score += 40;
        array_push($all_answers, 40);
      } else if($risk_q2 == 'Our enterprise knowledge graph finds real and hidden relationships between entities, connecting similarly behaving customers; this improves their journey and experience.'){
        $risk_score += 100;
        array_push($all_answers, 100);
      } else {
        array_push($all_answers, 0);
      }

      if($risk_q3 == 'We capture aggregate data on our performance (which can require some manual work to piece together) and regularly review our progress.'){
        $risk_score += 20;
        array_push($all_answers, 20);
      } else if($risk_q3 == 'We have repeatable data pipelines and curated reports. We plan to embed ESG in our product offering. We’re working out what data we need and how to report it.'){
        $risk_score += 40;
        array_push($all_answers, 40);
      } else if($risk_q3 == 'We drive ESG data agenda on what to collect, how to process it into risk factors and how to communicate insights to policyholders, underwriters and claims handlers.'){
        $risk_score += 100;
        array_push($all_answers, 100);
      } else {
        array_push($all_answers, 0);
      }

      $customer_q1 = $res[9]->choice->label;
      $customer_q2 = $res[10]->choice->label;
      $customer_q3 = $res[11]->choice->label;

      if($customer_q1 == 'We use data to improve the buying experience in specific areas, for example by digitising our risk profile questionnaire and auto-populating based on reference data.'){
        $customer_score += 20;
        array_push($all_answers, 20);
      } else if($customer_q1 == 'CX in underwriting is a defined and measured objective. We will soon enable omnichannel; digital infrastructure will integrate data from different interaction tools.'){
        $customer_score += 40;
        array_push($all_answers, 40);
      } else if($customer_q1 == 'CX improvements are enabled by data and analytics techniques e.g. machine learning can recommend policies and coverage to prevent under-insurance issues.'){
        $customer_score += 100;
        array_push($all_answers, 100);
      } else {
        array_push($all_answers, 0);
      }

      if($customer_q2 == 'We mass-communicate safety advice information to our customers, triggered by static rules e.g. “time of year”. This falls under marketing, not strategic loss reduction.'){
        $customer_score += 20;
        array_push($all_answers, 20);
      } else if($customer_q2 == 'Enabling risk prevention is defined, measured and optimised with analytics and A/B testing. Comms involve manual setup. Personalisation isn’t updated with live data.'){
        $customer_score += 40;
        array_push($all_answers, 40);
      } else if($customer_q2 == 'We use real-time geospatial data to predict and send helpful info before hazards occur. Or, we use knowledge graphs to find and communicate with at-risk customers.'){
        $customer_score += 100;
        array_push($all_answers, 100);
      } else {
        array_push($all_answers, 0);
      }

      if($customer_q3 == 'We use data/digital in specific areas e.g. chatbots field basic queries, but humans handle anything more complex or requiring live data lookups.'){
        $customer_score += 20;
        array_push($all_answers, 20);
      } else if($customer_q3 == 'Cutting failure demand is defined and measured. We are enabling transparency in the processes, leveraging digital infrastructure to make info available to customers.'){
        $customer_score += 40;
        array_push($all_answers, 40);
      } else if($customer_q3 == 'We enable automated updates on policy or claims progress. Data flows between customers, opponents and suppliers, enabled by digital platform APIs and pub/sub.'){
        $customer_score += 100;
        array_push($all_answers, 100);
      } else {
        array_push($all_answers, 0);
      }

      $efficiency_percent_raw = ($efficiency_score/300) * 100;
      $decisions_percent_raw = ($decisions_score/300) * 100;
      $risk_percent_raw = ($risk_score/300) * 100;
      $customer_percent_raw = ($customer_score/300) * 100;

      $efficiency_percent = number_format((float)$efficiency_percent_raw, 2, '.', '');
      $decisions_percent = number_format((float)$decisions_percent_raw, 2, '.', '');
      $risk_percent = number_format((float)$risk_percent_raw, 2, '.', '');
      $customer_percent = number_format((float)$customer_percent_raw, 2, '.', '');

      if(isset(array_count_values($all_answers)[0])) {
        $count_zero = array_count_values($all_answers)[0];
      } else {
        $count_zero = 0;
      }
      if(isset(array_count_values($all_answers)[20])) {
        $count_twen = array_count_values($all_answers)[20];
      } else {
        $count_twen = 0;
      }
      if(isset(array_count_values($all_answers)[40])) {
        $count_fort = array_count_values($all_answers)[40];
      } else {
        $count_fort = 0;
      }
      if(isset(array_count_values($all_answers)[100])) {
        $count_hund = array_count_values($all_answers)[100];
      } else {
        $count_hund = 0;
      }

      $varp = ((($count_zero-3)*($count_zero-3))/4)+((($count_twen-3)*($count_twen-3))/4)+((($count_fort-3)*($count_fort-3))/4)+((($count_hund-3)*($count_hund-3))/4);
      $consistencyFactor1 = 27 - $varp;
      $consistencyFactor2 = (abs(0-$count_zero))+(abs($count_zero-$count_twen))+(abs($count_twen-$count_fort))+(abs($count_fort-$count_hund))+(abs($count_hund-0));
      $consistency_score = 42-($consistencyFactor1 + $consistencyFactor2);

      $digProdScore = $all_answers[0] + $all_answers[1]+ $all_answers[5];
      $dataOpsScore = $all_answers[2] + $all_answers[8]+ $all_answers[10];
      $scienceScore = $all_answers[3] + $all_answers[4]+ $all_answers[11];
      $featureScore = $all_answers[6] + $all_answers[7]+ $all_answers[9];

      $total = $efficiency_score + $decisions_score + $risk_score + $customer_score;

      $res_data= [
          'total'=>$total,
          'consistency_score'=>$consistency_score,
          'efficiency_percent'=>$efficiency_percent,
          'decisions_percent'=>$decisions_percent,
          'risk_percent'=>$risk_percent,
          'customer_percent'=>$customer_percent,
          'digProdScore'=>$digProdScore,
          'dataOpsScore'=>$dataOpsScore,
          'scienceScore'=>$scienceScore,
          'featureScore'=>$featureScore
      ];

      // echo $lang;

      // echo "<pre>";
      // print_r($res_data);
      // die;

      $filename= "6p6";

        $pdf = \PDF::loadView($filename,$res_data);
        $pdf->setOption('enable-javascript',true);
        $pdf->setOption('javascript-delay',3000);
        $pdf->setOption('enable-smart-shrinking', true);
        $pdf->setOption('no-stop-slow-scripts', true)
        ->setOption('footer-spacing', 20 )
        ->setPaper('a4')
        ->setOption('margin-top', 0)
        ->setOption('margin-bottom',0)
        ->setOption('margin-left', 0)
        ->setOption('margin-right',0);

        $filename = 'response/6point6/'.$response_id.'.pdf';
        $pdf->save(public_path($filename),true);

        return ('Filename: '.$response_id.'.pdf');

      }

    }

    /**
     * Display stored 6point6 PDF 
     *
     * @param  int  $id
     * @return pdffile
     */
    public function point6Display($response_id)
    {
        $path = public_path().'/response/6point6/'.$response_id.'.pdf';
        if(file_exists($path)){
            return response()->file($path);
        }else{
            abort(404);
        }
    }

    /**
     * Generate Decibel PDF 
     *
     * @param  Request $request , int  $id
     * @return path to pdf file
     */
    public function deciblestorePdf(Request $request,$id)
    {
        // dd(json_decode($request->getContent(), true));

        $pdf = \PDF::loadView('decibelchartjsstore',array("request"=>$request));
        $pdf->setOption('enable-javascript',true);
        $pdf->setOption('javascript-delay',500);
        $pdf->setOption('enable-smart-shrinking', true);
        $pdf->setOption('no-stop-slow-scripts', true)                  
        ->setOption('footer-spacing', 20 )
        ->setPaper('a4')
        ->setOption('margin-top', 0)
        ->setOption('margin-bottom',0)
        ->setOption('margin-left', 0)
        ->setOption('margin-right',0);

        $pathToFile = public_path('result').'/'.$id.'.pdf';
        $pdf->save($pathToFile);
        return   $pathToFile;   
    }

    /**
     * Display Decibel PDF 
     *
     * @param  int  $id
     * @return pdffile
     */
    public function deciblechartpdf($id)
    {
        $path = public_path().'/result/'.$id.'.pdf';
        if(file_exists($path)){
            return response()->file($path);
        }else{
            abort(404);
        }
    }
}
