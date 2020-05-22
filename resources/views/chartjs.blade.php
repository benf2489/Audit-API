<?php
$fullclass = "background-color: #ebeff0;";
$wfclass = "background-color: #ebeff0;";
$revclass = "background-color: #ebeff0;";
$advclass = "background-color: #ebeff0;";

$fullclassh2 = $wfclassh2 = $revclassh2 = $advclassh2 = "line-height: 30px; font-size: 20px;";
$fullclassp = $wfclassp = $revclassp = $advclassp = "color: #012e44; font-size: 16px;";
$fullstatus = $wfstatus =  $revstatus =$advstatus = 0;

$st = 0;
if ( $full < 10 ) 
{
    $fullclass = 'background-color: #024364 !important;';
    $fullclassh2 = "line-height: 30px; font-size: 20px;color:#fff!important";
    $fullclassp = "color: #fff !important; font-size: 16px !important;";
    $fullstatus = 1;

}
else if( $full > 9 && $wf < 10){
    $fullclass = 'background-color: #024364 !important;';
    $fullclassh2 = "line-height: 30px; font-size: 20px;color:#fff!important";
    $fullclassp = "color: #fff !important; font-size: 16px !important;";
    $fullstatus = 1;
    
}
else if ( $full > 9 && $wf > 9 && $rev < 10) {
    $wfclass="background-color: #024364 !important;";
    $wfclassh2 = "line-height: 30px; font-size: 20px;color:#fff!important";
    $wfclassp = "color: #fff !important; font-size: 16px !important;";
    $wfstatus = 1;
    
}
else if ( $full > 9 && $wf > 9 && $rev > 9 && $adv < 10) {
    $revclass="background-color: #024364 !important;";
    $revclassh2 = "line-height: 30px; font-size: 20px;color:#fff!important";
    $revclassp = "color: #fff !important; font-size: 16px !important;";
    $revstatus = 1;
    
}
else if ( $full > 9 && $wf > 9 && $rev > 9 && $adv > 9) {
    $advclass ="background-color: #024364 !important;"; 
     $advclassh2 = "line-height: 30px; font-size: 20px;color:#fff!important";
    $advclassp = "color: #fff !important; font-size: 16px !important;";
    $advstatus = 1;
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<style type="text/css">
@font-face {font-family: 'Cera Pro'; src: url('{{asset('public/fonts/CeraPro-Light.ttf')}}') format('truetype'); font-weight: 300; font-style: normal; }
@font-face {font-family: 'Cera Pro'; src: url('{{asset('public/fonts/CeraPro-Regular.ttf')}}') format('truetype'); font-weight: normal; font-style: normal; }
@font-face {font-family: 'Cera Pro'; src: url('{{asset('public/fonts/CeraPro-Medium.ttf')}}') format('truetype'); font-weight: 500; font-style: normal; }
body { font-family: 'freesans'; font-weight: 400; }
@page {padding: 0; margin: 0; padding-top: 50px; padding-bottom: 50px; border: none; border-collapse: collapse; font-family: 'freesans'; font-weight: 400;  page-break-after: always;
        page-break-inside: avoid; }
div.page {page-break-after: always; page-break-inside: avoid; }
body {font-family: 'freesans'; font-weight: 400;}
* { border: 0; box-sizing: content-box; color: inherit;  line-height: inherit; list-style: none; margin: 0; padding: 0; text-decoration: none; vertical-align: top; }
html { font-family: 'freesans'; font-weight: 400; font-size: 16px; line-height: 22px; overflow: auto; background: #fff; cursor: default; padding: 0; margin: 0; }
body { box-sizing: border-box; margin:0; background: #FFF; font-family: 'freesans'; font-weight: 400;}
h1 { font-family: 'freesans'; font-weight: 500; }
h2 span,
h2 {font-size: 30px; line-height: 35px; font-family: 'freesans';
 font-weight: 500; color: #012e44; }
h2 strong {font-family: 'freesans'; color: #012e44; } 
h3, h3 span {font-size: 22px; font-family: 'freesans'; font-weight: 500;}
p {font-family: 'freesans'; font-weight: 500; color: #708ea8; font-size: 16px; line-height: 1.4; padding-bottom: 10px; }
.chart-box { text-align: center; padding-bottom: 20px; padding-top: 20px; }
.full-width {width: 100%; display: block; }
.iconimage { width: 50px; display: inline-block; vertical-align: middle; }
.title-box img {width: 42px; padding-right: 15px; display: inline-block; vertical-align: middle; }
.title-box h2 span,
.title-box h2 { padding: 0; margin: 0; line-height: 30px; display: inline-block; color: #012e44; }
.title-box h2 { margin: 0; }
.title-box h2 { display: inline-block; margin-bottom: 0px; vertical-align: middle; line-height: 40px; }
.title-box h2 { display: inline-block; vertical-align: middle; }
.chart-title { text-align: center; }
table tr,table td,table th,
table { border: none; padding: 0; margin: 0; }
table { width: 100%; }
.info-section { width: 100%; }
.info-section table tr td { width: 50%; }
.imgbox h2,
.carttitle { text-align: left; }
.imgbox { text-align: right;  }
.imgbox img { padding-right: 10px; }
.title-box tr td { padding: 8px; }
.imgbox { width: 45%; }
.carttitle { width: 55%; }
.services-box { padding: 30px 0; }
.services-box h2{ color: #012e44; }
.services-box p {font-family:'freesans';
 font-weight: 400;  color: #012e44; font-size: 18px; }
.services-box td.min-wrapper { border: 2px solid #fff; padding: 10px 15px;  background-color: #ebeff0; width: 50%;  }
.services-box .left-side-icon,
.services-box .left-side-icon * { vertical-align: middle; }
.title-box *{ vertical-align: middle; }
.services-box .left-side-icon { padding: 10px 0; }
.services-box .left-side-icon .lefticon { width: 35px; padding: 0; padding-right: 5px; }
.services-box .left-side-icon .lefticon img { width: 30px }
.content-info p { padding: 10px 0; font-family: 'freesans';
 font-size: 18px !important; color: #012e44 !important; }
.services-box .left-side-icon h2 { padding-left: 10px; font-size: 26px !important; }
.min-wrapper.hightlight-box h2,
.min-wrapper.hightlight-box p { color: #ffffff !important; }
.here-where-text { width: 50%; padding-top: 10px; }
.here-where-text h3 { display: block; width: 100%; text-align: center; font-family: 'freesans'; font-weight: 500;  color: #01355c; padding-top: 10px; padding-bottom: 8px; }
.here-where-text .down-arrow { display: block; width: 100%; text-align: center; margin: 0 auto; padding-bottom: 5px; }
.here-where-text .down-arrow img { display: block; text-align: center; margin: 0 auto; }
.chart-section { padding: 25px 0; padding-top: 0; }  

header .logo img { width: 145px; }
header .right p { font-size: 20px;  font-family: 'freesans';
    font-weight: 500;  color: #012e44; width: 100%; text-align: right; }
.left-right-space { padding-left: 50px; padding-right: 50px; }
img { max-width: 100%; }
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
</head>
<body>
<div class="header left-right-space" style="padding-top: 30px; padding-bottom: 0;">
    <table  cellpadding="0" cellpadding="0" style="padding-top: 0; padding-bottom: 20px;">
        <tr>
            <td class="logo" style="width: 150px; padding-top: 0; margin-top: 0; ">
                <img style="width: 145px; display: block;" src="{{asset('public/icons/logo_header.svg')}}" />
            </td>
            <td align="right" style="padding-top: 0; margin-top: 0;">
                <p style="font-size: 18px; color: #012e44; width: 100%; text-align: right;"><strong>connected accounting</strong></p>
            </td>
        </tr>
    </table>
</div>
<div class="banner-box" style="background-color: #01355c; background-size: contain; background-repeat: no-repeat; background-position: bottom center; background-image: url({{asset('public/icons/banner-image.jpg')}});">
     
        <table cellpadding="0" cellpadding="0">
            <tr>
                <td style="padding-top: 120px; padding-bottom: 120px; text-align: center;">
                    <h1 style="color: #ffffff; font-size: 27px; line-height: 40px; padding-bottom: 15px;">Your connected accountant result</h1>
                    <h2 style="color: #ffffff; font-size: 36px; line-height: 40px;"><strong style="color: #ffffff;">You’re on the right track</strong></h2>
                </td>
            </tr>           
        </table>
     
</div>

<div class="chart-title left-right-space" style="padding-top: 50px; padding-bottom: 15px; margin: 0;">
    <h2 style="padding: 0; margin: 0; padding-bottom: 10px; font-size: 26px"><strong>Your results explained</strong></h2>
    <p style="padding-bottom: 0; padding-top: 10px; margin-top: 0; font-size: 15px; line-height: 28px; margin-bottom: 0;">Your use of technology is helping you streamline a lot of your day-to-day work. For example, you have access to some real-time data, but probably not across your whole client portfolio; or you can integrate with a number of bookkeeping solutions, but not all. As a result, there may be inconsistencies in service delivery between clients, which makes standardising and automating processes difficult to achieve. And without consolidated data, and consistency across the firm, you’re unable to identify trends in your client portfolio or see where advisory services are needed. You still have some steps to take to make the full transition from compliance reporter to trusted advisor.</p>
</div>

<div>
<table style="padding-left: 50px; padding-right: 50px; padding-top: 0;">
        <tr>
            <td style="width: 25%;">
                <table  <?php if($fullstatus == 1) { echo 'style="display: table;"';} else { echo 'style="display: none;"';}?>>
                    <tr>
                        <td>
                            <table cellpadding="0" cellpadding="0">
                                <tr>
                                    <td style="width: 100%; text-align: center; padding-top: 15px;">
                                        <h3 style="font-size: 16px; color: #01355c;"><strong style="color: #01355c;">Here’s where you are</strong></h3>
                                    </td>
                                </tr>
                            </table>

                            <table cellpadding="0" cellpadding="0">
                                <tr>
                                    <td style="width: 100%; text-align: center; padding-top: 6px; padding-bottom: 5px;">
                                        <span class="down-arrow" style="width: 100%; text-align: center; margin: 0 auto;">
                                            <img src="{{ asset('public/icons/down-arrow.svg')}}" />             
                                        </span>                         
                                    </td>
                                </tr>
                            </table>
                           
                        </td>
                    </tr>
                </table>
            </td>
            <td style="width: 25%;">
                 <table <?php if($wfstatus == 1) { echo 'style="display: table;"';} else { echo 'style="display: none;"';}?>>
                    <tr>
                        <td>
                
                      
                            <table cellpadding="0" cellpadding="0">
                                <tr>
                                    <td style="width: 100%; text-align: center; padding-top: 15px;">
                                        <h3 style="font-size: 16px; color: #01355c;"><strong style="color: #01355c;">Here’s where you are</strong></h3>
                                    </td>
                                </tr>
                            </table>

                            <table cellpadding="0" cellpadding="0">
                                <tr>
                                    <td style="width: 100%; text-align: center; padding-top: 6px; padding-bottom: 5px;">
                                        <span class="down-arrow" style="width: 100%; text-align: center; margin: 0 auto;">
                                            <img src="{{ asset('public/icons/down-arrow.svg')}}" />             
                                        </span>                         
                                    </td>
                                </tr>
                            </table>
                           
                        </td>
                    </tr>
                </table>
            </td>
            
            <td class="here-where-text" align="top" style="width: 25%;">
                <table <?php if($revstatus == 1) { echo 'style="display: table;"';} else { echo 'style="display: none;"';}?>>
                    <tr>
                        <td>
                
                      
                            <table cellpadding="0" cellpadding="0">
                                <tr>
                                    <td style="width: 100%; text-align: center; padding-top: 15px;">
                                        <h3 style="font-size: 16px; color: #01355c;"><strong style="color: #01355c;">Here’s where you are</strong></h3>
                                    </td>
                                </tr>
                            </table>

                            <table cellpadding="0" cellpadding="0">
                                <tr>
                                    <td style="width: 100%; text-align: center; padding-top: 6px; padding-bottom: 5px;">
                                        <span class="down-arrow" style="width: 100%; text-align: center; margin: 0 auto;">
                                            <img src="{{ asset('public/icons/down-arrow.svg')}}" />             
                                        </span>                         
                                    </td>
                                </tr>
                            </table>
                           
                        </td>
                    </tr>
                </table> 
                
            </td>
            <td style="width: 25%;">
                <table <?php if($advstatus == 1) { echo 'style="display: table;"';} else { echo 'style="display: none;"';}?>>
                    <tr>
                        <td>
                
                      
                            <table cellpadding="0" cellpadding="0">
                                <tr>
                                    <td style="width: 100%; text-align: center; padding-top: 15px;">
                                        <h3 style="font-size: 16px; color: #01355c;"><strong style="color: #01355c;">Here’s where you are</strong></h3>
                                    </td>
                                </tr>
                            </table>

                            <table cellpadding="0" cellpadding="0">
                                <tr>
                                    <td style="width: 100%; text-align: center; padding-top: 6px; padding-bottom: 5px;">
                                        <span class="down-arrow" style="width: 100%; text-align: center; margin: 0 auto;">
                                            <img src="{{ asset('public/icons/down-arrow.svg')}}" />             
                                        </span>                         
                                    </td>
                                </tr>
                            </table>
                           
                        </td>
                    </tr>
                </table> 
            </td>
        </tr>
    </table>

    <table style="padding-left: 50px; padding-right: 50px; padding-top: 0;">
        <tr>
            <td style="width: 25%; border: 2px solid #fff; padding: 10px 15px; {{ $fullclass }}  background-repeat: no-repeat; background-size: contain; background-position: bottom left; background-image: url({{asset('public/icons/shape-1.png')}});">
                <table cellpadding="0" cellpadding="0" align="top">
                    <tr>
                        <td style="padding: 0;">
                            <table cellpadding="0" cellpadding="0" align="top">
                                <tr>
                                    <td class="min-wrapper" align="top" style="padding: 0;" >
                                        <table  cellpadding="0" cellpadding="0" class="left-side-icon">
                                            <tr>
                                                <td class="lefticon" style="width: 30px; padding: 0;">
                                                    <?php if($fullstatus ==1){ ?>
                                                        <img src="{{ asset('public/icons/fullsight-active.svg')}}" />
                                                    <?php } else { ?>
                                                        <img src="{{ asset('public/icons/fullsight.svg')}}" />
                                                    <?php } ?>                                                    
                                                </td><td style="width: 5px;"></td>
                                                <td><h2><strong style="{{ $fullclassh2 }}">fullsight</strong></h2></td>
                                            </tr>
                                        </table>
                                        <table  cellpadding="0" cellpadding="0" class="content-info">
                                            <tr>
                                                <td style="padding-top: 10px;"> 
                                                    <p style="{{ $fullclassp }}"><strong>
                                                    You have all your data in one place, and it is standardised across your portfolio. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                                </strong></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="height: 250px;"></td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>

            <td style="width: 25%; border: 2px solid #fff; padding: 10px 15px; {{ $wfclass }} background-size: contain; background-repeat: no-repeat; background-position: bottom left; background-image: url({{asset('public/icons/shape-2.png')}});">
                <table cellpadding="0" cellpadding="0" align="top">
                    <tr>
                        <td style="padding: 0;">
                            <table cellpadding="0" cellpadding="0" align="top">
                                <tr>
                                    <td class="min-wrapper" align="top"  style="padding: 0;">
                                        <table  cellpadding="0" cellpadding="0" class="left-side-icon">
                                            <tr>
                                                <td class="lefticon" style="width: 30px; padding: 0;">
                                                    <?php if($wfstatus == 1){?>
                                                        <img src="{{ asset('public/icons/hindsight-active.svg')}}" />
                                                    <?php } else { ?>
                                                        <img src="{{ asset('public/icons/hindsight.svg')}}" />
                                                    <?php } ?>                                                    

                                                </td><td style="width: 5px;"></td>
                                                <td><h2><strong style="{{ $wfclassh2 }}">hindsight</strong></h2></td>
                                            </tr>
                                        </table>
                                        <table  cellpadding="0" cellpadding="0" class="content-info">
                                            <tr>
                                                <td style="padding-top: 10px;"> 
                                                    <p style="{{ $wfclassp }}"><strong>You have all your reporting and working papers automated in real-time. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</strong></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="height: 250px;"></td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>

            <td style="width: 25%; border: 2px solid #fff; padding: 10px 15px; {{ $revclass }}  background-size: contain;  background-repeat: no-repeat; background-position: bottom left; background-image: url({{asset('public/icons/shape-3.png')}});">
                <table cellpadding="0" cellpadding="0" align="top">
                    <tr>
                        <td style="padding: 0;">
                            <table cellpadding="0" cellpadding="0">
                                <tr>
                                    <td class="min-wrapper" align="top" >
                                        <table  cellpadding="0" cellpadding="0" class="left-side-icon">
                                            <tr>
                                                <td class="lefticon" style="width: 30px;">
                                                    <?php if($revstatus == 1){?>
                                                        <img src="{{ asset('public/icons/insight-active.svg')}}" />
                                                    <?php } else { ?>
                                                        <img src="{{ asset('public/icons/insight-regular.svg')}}" />
                                                    <?php } ?>
                                                    <!-- <img src="{{ asset('public/icons/insight-regular.svg')}}" /> -->
                                                </td><td style="width: 5px;"></td>
                                                <td><h2><strong style="{{ $revclassh2 }}">insight</strong></h2></td>
                                            </tr>
                                        </table>
                                        <table  cellpadding="0" cellpadding="0" class="content-info">
                                            <tr>
                                                <td style="padding-top: 10px;">  
                                                    <p style="{{ $revclassp }}"><strong>You are able to create deep insight across your portfolio and benchmark against best practice.</strong></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="height: 250px;"></td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>

            <td style="width: 25%; border: 2px solid #fff; padding: 10px 15px; {{ $advclass }} background-size: contain;  background-repeat: no-repeat; background-position: bottom left; background-image: url({{asset('public/icons/shape-4.png')}});">
                <table cellpadding="0" cellpadding="0" align="top">
                    <tr>
                        <td style="padding: 0;">
                            <table cellpadding="0" cellpadding="0" align="top">
                                <tr>
                                    <td class="min-wrapper" align="top" >
                                        <table  cellpadding="0" cellpadding="0" class="left-side-icon">
                                            <tr>
                                                <td class="lefticon" style="width: 30px;">
                                                    
                                                    <?php if($advstatus == 1){?>
                                                        <img src="{{ asset('public/icons/foresight-active.svg')}}" />
                                                    <?php } else { ?>
                                                        <img src="{{ asset('public/icons/foresight.svg')}}" />
                                                    <?php } ?>
                                                </td><td style="width: 5px;"></td>
                                                <td><h2><strong style="{{ $advclassh2 }}">foresight</strong></h2></td>
                                            </tr>
                                        </table>
                                        <table  cellpadding="0" cellpadding="0" class="content-info">
                                            <tr>
                                                <td style="padding-top: 10px;"> 
                                                    <p style="{{ $advclassp }}"><strong>You can be prompted with predictive actions to proactively advise clients.  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</strong>
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="height: 250px;"></td>
                                            </tr>
                                             
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</div>

<div class="chart-section  left-right-space" style="padding-top: 120px; margin-top: 0;">
    <div class="chart-title" style="padding-top: 0; margin-top: 0;">
        <h2 style="padding-top:0; font-size: 28px; margin-top: 0; padding-bottom: 15px; "><strong>Your results in detail – and how you compare with your peers</strong></h2>
        <p style="padding-top: 5px; line-height: 28px; font-size: 15px; padding-bottom: 30px;">We’ve mapped your answers against the average scores supplied during our technology trends in accounting survey, so you can compare your capabilities against your competitors.</p>
    </div>

    <div class="chart-box">
        
        <div class="full-width">
            <table cellpadding="0" cellpadding="0">
                <tr>
                    <td style="padding: 0; padding-bottom: 15px;">
                        <table cellpadding="0" cellpadding="0" style="width: 100%;">
                            <tr>
                                <td style="padding: 0">
                                    <div class="title-box">
                                        <table cellpadding="0" cellpadding="0">
                                            <tr>
                                                <td class="imgbox" style="width: 100%; text-align: left; padding: 0 10px 0 0;"><img src="{{ asset('public/icons/data.svg')}}" /></td>
                                            </tr>
                                            <tr>
                                                <td style="padding:10px 0;" class="carttitle"><h2> <strong>Data</strong></h2></td>
                                            </tr>
                                        </table>            
                                    </div>
                                    <p style="text-align: left; font-size: 15px">Congratulations, you’re on top of your data strategy. Your adoption of technology at key points means you’re capable of providing a fast, efficient service to your clients. Most importantly, you’ve given yourself every chance of success in today’s competitive accountancy sector.</p>
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td style="padding: 0;">                         
                        <table cellpadding="0" cellpadding="0">
                            <tr>
                                <td style="padding: 0;">
                                    <canvas id="chart1" width="360" height="250"></canvas>                           
                                </td>
                            </tr>
                        </table>
                    </td>                   
                </tr>
            </table>
            
            <p style="text-align: left; font-size: 15px">In our recent research, the two biggest threats to future success cited by respondents were access to the right technology and the skills of the team. Your challenge now is to keep up with industry trends and ensure you’re anticipating new technologies, not reacting to them. As your clients’ businesses evolve, you need to evolve with them and ensure that you can always provide the timely and insightful information they need.</p>
        </div>
    </div>



    <div class="chart-box">
        
        <div class="full-width">
            <table cellpadding="0" cellpadding="0">
                <tr>
                    <td  style="padding: 0;">                       
                        <table cellpadding="0" cellpadding="0">
                            <tr>
                                <td style="padding: 0">
                                    <canvas id="chart2" width="360" height="250"></canvas>                              
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td style="padding: 0; padding-bottom: 15px;">
                        <table cellpadding="0" cellpadding="0" style="width: 100%;">
                            <tr>
                                <td>
                                    <div class="title-box">
                                        <table cellpadding="0" cellpadding="0">
                                            <tr>
                                                <td class="imgbox" style="width: 100%; text-align: left; padding: 10px 0;"><img src="{{ asset('public/icons/workflow.svg')}}" /></td>
                                            </tr>
                                            <tr>
                                                <td style="padding:10px 0;" class="carttitle"><h2> <strong>Workflow</strong></h2></td>
                                            </tr>
                                        </table>            
                                    </div>
                                    <p style="text-align: left; font-size: 15px">Well done, you’ve adopted standardised and automated workflows, which will already be streamlining your everyday tasks, significantly reducing the reporting burden, and providing more accurate results for your clients.</p>
                                </td>
                            </tr>
                        </table>
                    </td>
                                        
                </tr>
            </table>
            
            <p style="text-align: left; font-size: 15px">By adopting a consistent approach to workflows you’ve given yourself a great chance of future success. Now you need to keep moving forward, harnessing new technologies to keep optimising these workflows and automating new ones.</p>
        </div>
    </div>

     
    <div class="chart-box">
        
        <div class="full-width">
            <table cellpadding="0" cellpadding="0">
                <tr>
                    <td style="padding: 0; padding-bottom: 15px;">
                        <table cellpadding="0" cellpadding="0" style="width: 100%;">
                            <tr>
                                <td style="padding: 0">
                                    <div class="title-box">
                                        <table cellpadding="0" cellpadding="0">
                                            <tr>
                                                <td class="imgbox" style="width: 100%; text-align: left; padding: 0 10px 0 0;"><img src="{{ asset('public/icons/review_ic.svg')}}" /></td>
                                            </tr>
                                            <tr>
                                                <td style="padding:10px 0;" class="carttitle"><h2> <strong>Review</strong></h2></td>
                                            </tr>
                                        </table>            
                                    </div>
                                    <p style="text-align: left; font-size: 15px">Your data analysis and reporting capabilities are impressive. You’re consolidating data in an efficient way, enabling you to extract key insights and provide forward-thinking business advice to your clients. The steps you’ve taken make you one of the innovative minority – only 7% of our research respondents strongly agreed with the statement that they can gain insight into their client base by benchmarking data across their portfolio.</p>
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td style="padding: 0;">                         
                        <table cellpadding="0" cellpadding="0">
                            <tr>
                                <td style="padding: 0;">
                                   <canvas id="chart3" width="360" height="250"></canvas>                              
                                </td>
                            </tr>
                        </table>
                    </td>                   
                </tr>
            </table>
            
            <p style="text-align: left; font-size: 15px">As new technology emerges, you’ll be able to keep improving your services and make your data analysis even more powerful. This will allow you to effortlessly share data with your clients, collaborating with them to solve key problems and helping them make better decisions based on what you see behind the numbers – which in turn will lead to happier clients and new advisory service revenue opportunities.</p>
        </div>
    </div>

<div class="chart-box">
        
        <div class="full-width">
            <table cellpadding="0" cellpadding="0" style="padding-top: 40px;">
                <tr>
                    <td  style="padding: 0; padding-top: 10px;">                       
                        <table cellpadding="0" cellpadding="0">
                            <tr>
                                <td style="padding: 0; padding-top: 30px;">
                                   <canvas id="chart4" width="360" height="250"></canvas>                           
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td style="padding: 0; padding-bottom: 15px; padding-top: 20px;">
                        <table cellpadding="0" cellpadding="0" style="width: 100%;">
                            <tr>
                                <td>
                                    <div class="title-box">
                                        <table cellpadding="0" cellpadding="0">
                                            <tr>
                                                <td class="imgbox" style="width: 100%; text-align: left; padding: 10px 0;"><img src="{{ asset('public/icons/advisory_ic.svg')}}" /></td>
                                            </tr>
                                            <tr>
                                                <td style="padding:10px 0;" class="carttitle"><h2> <strong>Advisory</strong></h2></td>
                                            </tr>
                                        </table>            
                                    </div>
                                    <p style="text-align: left; font-size: 15px">You’ve taken steps to consolidate your client data, even automate your accounting workflows. You’re well on the way to transforming your compliance services. But there’s still work to do before you turn this data into new advisory services and revenue.</p>
                                </td>
                            </tr>
                        </table>
                    </td>
                                        
                </tr>
            </table>
            <p style="text-align: left; font-size: 15px; padding-bottom: 20px;">Armed with the right analytics, reporting tools, and consolidated client data, you will put yourself in the best position to see trends as they emerge and be able to respond with real-time advice that has a positive impact on your clients’ businesses. This transformation from providing largely compliance services to leading with advisory is something that only 13% of our survey’s respondents say they’ve successfully achieved, so it is all to play for. Changes you make today to your services, skills, and technology investments, will put you in the best position to extend your service offering into advisory services before your competitors do.</p>
             
        </div>
    </div>
</div>

<div class="full-width" style="background-color: #ffffff; padding-top: 0;">
    <table cellpadding="0" cellpadding="0" style="padding-left: 50px; padding-right: 50px; padding-top: 0; margin-top: 0px;">
        <tr>
            <td style="padding-top: 0px; padding-bottom: 40px; text-align: center;">
                <table  cellpadding="0" cellpadding="0" style="padding: 0; margin: 0;">
                    <tr>
                        <td>
                            <div class="chart-title">
                                <h2 style="color: #012e44; padding-top: 0; margin-top: 0; padding-bottom: 30px;  font-size: 28px; margin-bottom: 0px; line-height: 40px; "> <strong style="color: #012e44;">What should I do now?</strong></h2>
                                <p style="color: #708ea8; padding-bottom: 10px; font-size: 15px; line-height: 28px; font-weight: 400;">Your clients’ demands are changing. Offering just compliance services isn’t enough. Increasingly, your clients are demanding value-added advisory services. While you demonstrate a reasonable degree of digital maturity, the bad news is that your competitors are currently better placed to serve your clients’ evolving requirements.</p><br/>
                                <p style="color: #708ea8; padding-bottom: 0px; font-size: 15px; line-height: 28px; font-weight: 400;">Silverfin’s cloud-based platform connects with your clients’ bookkeeping and financial systems to bring you all the data you need – whatever the source. We automate your compliance accounting workflows, improving your speed, accuracy and profitability. Then our powerful analytics and reporting tools give you the data and insight you need to be your clients’ most trusted advisor.</p><br/>
                            </div>
                        </td>
                    </tr>
                     
                </table>
                
            </td>
        </tr>
    </table>
</div>

<div class="full-width" style="background-color: #01355c; background-size: contain; background-repeat: repeat; background-position: center center; padding: 0; margin: 0;  background-image: url({{asset('public/icons/bookbg-image.jpg')}}); ">
    <table cellpadding="0" cellpadding="0" style="padding-left: 50px; padding-right: 50px; margin-top: 20px;">
        <tr>
            <td style="padding-top: 30px; padding-bottom: 40px; text-align: center;">
                <table  cellpadding="0" cellpadding="0" style="padding: 0; margin: 0;">
                    <tr>
                        <td>
                            <div class="chart-title">
                                <h2 style="color: #fff; padding-top: 0px; margin-top: 20px; font-size: 28px; line-height: 40px; "> <strong style="color: #fff; margin-top: 20px; margin-bottom: 20px;"> Book a free connected accounting workshop and build your own plan for change today</strong></h2>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <table cellpadding="0" cellpadding="0" style="padding-left: 0px; padding-right: 0px; padding-top: 10px; text-align: center;">
                                <tr>
                                    <td>
                                        <table style="background: #13c5e2; padding: 12px 15px 15px 15px; width: 220px; height: 24px; margin: 10px auto 0 auto; border-radius: 5px;"  cellpadding="0" cellpadding="0">
                                            <tr>
                                                <td>
                                                    <a style="color: #ffffff; line-height: 24px; font-size: 16px; text-decoration: none;" href="https://www.silverfin.com/demo" target="_blank"> Book a free workshop </a>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
                
            </td>
        </tr>
    </table>
</div>

<footer style="padding: 0; margin: 0; background: #011f2d;">
    <table style="padding: 0; margin: 0 auto; width: 240px; border: none;" cellpadding="0" cellpadding="0">
        <tr>
            <td>
                <table  cellpadding="0" cellpadding="0" style="width: 80px; text-align: center; border-right: 1px solid #304150; border-left: 1px solid #304150;">
                    <tr>
                        <td style="padding: 15px 0;">
                            <a style="padding: 15px 10px; display:block;" href="https://www.linkedin.com/company/silverfin/" target="_blank"><img style="width: 24px;" src="{{ asset('public/icons/linkedin-icon.svg')}}"/></a>
                        </td>
                    </tr>
                </table>
            </td>
            <td>
                <table  cellpadding="0" cellpadding="0" style="width: 80px; text-align: center; border-right: 1px solid #304150;">
                    <tr>
                        <td style="padding: 15px 0;">
                            <a style="padding: 15px 10px; display:block;"  href="https://twitter.com/getsilverfin" target="_blank"><img style="width: 24px;" src="{{ asset('public/icons/twitter-icon.svg')}}"/></a>
                        </td>
                    </tr>
                </table>
            </td>
            <td>
                <table  cellpadding="0" cellpadding="0" style="width: 80px; text-align: center;  border-right: 1px solid #304150;">
                    <tr>
                        <td style="padding: 15px 0;">
                            <a style="padding: 15px 10px; display:block;"  href="https://www.facebook.com/getsilverfin/" target="_blank"><img style="width: 24px;" src="{{ asset('public/icons/facebook-icon.svg')}}"/></a>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</footer>

<script type="text/javascript">
// wkhtmltopdf 0.12.5 crash fix.
// https://github.com/wkhtmltopdf/wkhtmltopdf/issues/3242#issuecomment-518099192
'use strict';
(function(setLineDash) {
    CanvasRenderingContext2D.prototype.setLineDash = function() {
        if(!arguments[0].length){
            arguments[0] = [1,0];
        }
        // Now, call the original method
        return setLineDash.apply(this, arguments);
    };
})(CanvasRenderingContext2D.prototype.setLineDash);
Function.prototype.bind = Function.prototype.bind || function (thisp) {
    var fn = this;
    return function () {
        return fn.apply(thisp, arguments);
    };
};

function drawGraphs() {
    new Chart(
        document.getElementById("chart1"), { 
         "responsive": false,           
            "type":"radar",
            "data":{
                "labels":['Live Data','Collaboration','Consolidation'],
                "datasets":[
                    {
                        'label': 'Your results', 'data': [<?php echo $chart1;?>],'backgroundColor': 'rgba(77, 192, 222, 0.3)','borderColor': 'rgba(77, 192, 222, 1)'
                    }, 
                    {
                        'label': 'Average Score',  'data': [3.1,2.9,4.1],'backgroundColor': 'rgba(5,125,224, 0.3)','borderColor': 'rgba(5,125,224, 1)'
                    }
                ]
            },
            "options":{
                'legend': {
                    'labels': {
                        'fontColor':'#57758f',
                        'padding': 16,
                    }
                },
                'maintainAspectRatio': true,
                'scale':{
                    'ticks': {
                        'display': false,
                        'maxTicksLimit': 6,
                        'beginAtZero':true,
                        'stepSize': 1,
                        'suggestedMax': 5
                    }, 
                }
            }
        }
    );


    new Chart(
        document.getElementById("chart2"), { 
         "responsive": false,           
            "type":"radar",
            "data":{
                "labels":['Live Data','Collaboration','Consolidation'],
                "datasets":[
                    {
                        'label': 'Your results', 'data': [<?php echo $chart2;?>],'backgroundColor': 'rgba(77, 192, 222, 0.3)','borderColor': 'rgba(77, 192, 222, 1)'
                    }, 
                    {
                        'label': 'Average Score',  'data': [3.7,3.9,3.4],'backgroundColor': 'rgba(5,125,224, 0.3)','borderColor': 'rgba(5,125,224, 1)'
                    }
                ]
            },
            "options":{
                'legend': {
                    'labels': {
                        'fontColor':'#57758f',
                        'padding': 16,
                    }
                },
                'maintainAspectRatio': true,
                'scale':{
                    'ticks': {
                        'display': false,
                        'maxTicksLimit': 6,
                        'beginAtZero':true,
                        'stepSize': 1,
                        'suggestedMax': 5
                    }, 
                }
            }
        }
    );


    new Chart(
        document.getElementById("chart3"), { 
         "responsive": false,           
            "type":"radar",
            "data":{
                "labels":['Live Data','Collaboration','Consolidation'],
                "datasets":[
                    {
                        'label': 'Your results', 'data': [<?php echo $chart3;?>],'backgroundColor': 'rgba(77, 192, 222, 0.3)','borderColor': 'rgba(77, 192, 222, 1)'
                    }, 
                    {
                        'label': 'Average Score',  'data': [3.4,2.7,2.9],'backgroundColor': 'rgba(5,125,224, 0.3)','borderColor': 'rgba(5,125,224, 1)'
                    }
                ]
            },
            "options":{
                'legend': {
                    'labels': {
                        'fontColor':'#57758f',
                        'padding': 16,
                    }
                },
                'maintainAspectRatio': true,
                'scale':{
                    'ticks': {
                        'display': false,
                        'maxTicksLimit': 6,
                        'beginAtZero':true,
                        'stepSize': 1,
                        'suggestedMax': 5
                    }, 
                }
            }
        }
    );

    new Chart(
        document.getElementById("chart4"), { 
         "responsive": false,           
            "type":"radar",
            "data":{
                "labels":['Live Data','Collaboration','Consolidation'],
                "datasets":[
                    {
                        'label': 'Your results', 'data': [<?php echo $chart4;?>],'backgroundColor': 'rgba(77, 192, 222, 0.3)','borderColor': 'rgba(77, 192, 222, 1)'
                    }, 
                    {
                        'label': 'Average Score',  'data': [2.5,2.9,3.3],'backgroundColor': 'rgba(5,125,224, 0.3)','borderColor': 'rgba(5,125,224, 1)'
                    }
                ]
            },
            "options":{
                'legend': {
                    'labels': {
                        'fontColor':'#57758f',
                        'padding': 16,
                    }
                },
                'maintainAspectRatio': true,
                'scale':{
                    'ticks': {
                        'display': false,
                        'maxTicksLimit': 6,
                        'beginAtZero':true,
                        'stepSize': 1,
                        'suggestedMax': 5
                    }, 
                }
            }
        }
    );

    
}
window.onload = function() {
    drawGraphs();
};
</script>
</body>
</html>