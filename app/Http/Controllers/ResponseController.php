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

        $response_id = $request->form_response["hidden"]["response_id"];
        $scores = $request->form_response["hidden"]["scores"];
        $calculated = $request->form_response["calculated"];
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
          return new ResponseResource($response);
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

        $full = (float)$res[0]->number+(float)$res[1]->number+(float)$res[2]->number;
        $wf = (float)$res[3]->number+(float)$res[4]->number+(float)$res[5]->number;
        $rev = (float)$res[6]->number+(float)$res[7]->number+(float)$res[8]->number;
        $adv = (float)$res[9]->number+(float)$res[10]->number+(float)$res[11]->number;
        
        $res_data= [
            'chart1' => $res[0]->number.",".$res[1]->number.",".$res[2]->number,
            'chart2' => $res[3]->number.",".$res[4]->number.",".$res[5]->number,
            'chart3' => $res[6]->number.",".$res[7]->number.",".$res[8]->number,
            'chart4' => $res[9]->number.",".$res[10]->number.",".$res[11]->number,
            'full'=>$full,
            'wf'=>$wf,
            'rev'=>$rev,
            'adv'=>$adv,
        ];

        // echo "<pre>";
        // print_r($res_data);
        // die;
        
        $filename= "chartjs";
        if($lang == 'nl'){
            $filename= "chartjs-nl";
        }else{
            $filename = $filename;
        }

        $pdf = \PDF::loadView($filename,$res_data);
        $pdf->setOption('enable-javascript',true);
        $pdf->setOption('javascript-delay',20000);
        $pdf->setOption('enable-smart-shrinking', true);
        $pdf->setOption('no-stop-slow-scripts', true)                  
        ->setOption('footer-spacing', 20 )
        ->setPaper('a4')
        ->setOption('margin-top', 2)
        ->setOption('margin-bottom',1)
        ->setOption('margin-left', 0)
        ->setOption('margin-right',0);
        return $pdf->inline();

        // return view('chartjs',$res_data);

      }
      
      die;
    }
}
