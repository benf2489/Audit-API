<?php
$fullclass = "background-color: #ebeff0;";
$wfclass = "background-color: #ebeff0;";
$revclass = "background-color: #ebeff0;";
$advclass = "background-color: #ebeff0;";
$fullclassh2 = $wfclassh2 = $revclassh2 = $advclassh2 = "line-height: 30px; font-size: 22px;";
$fullclassp = $wfclassp = $revclassp = $advclassp = "color: #012e44; font-size: 16px;";
$fullstatus = $wfstatus =  $revstatus =$advstatus = 0;
$st = 0;
if ( $full < 10 ) {
    $fullclass = 'background-color: #024364 !important;';
    $fullclassh2 = "line-height: 30px; font-size: 22px;color:#fff!important";
    $fullclassp = "color: #fff !important; font-size: 16px !important;";
    $fullstatus = 1;
}
else if( $full > 9 && $wf < 10){
    $fullclass = 'background-color: #024364 !important;';
    $fullclassh2 = "line-height: 30px; font-size: 22px;color:#fff!important";
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
@font-face {font-family: 'Cera Pro'; src: url('{{asset('/fonts/CeraPro-Light.ttf')}}') format('truetype'); font-weight: 300; font-style: normal; }
@font-face {font-family: 'Cera Pro'; src: url('{{asset('/fonts/CeraPro-Regular.ttf')}}') format('truetype'); font-weight: normal; font-style: normal; }
@font-face {font-family: 'Cera Pro'; src: url('{{asset('/fonts/CeraPro-Medium.ttf')}}') format('truetype'); font-weight: 500; font-style: normal; }
@font-face {font-family: 'Cera Pro'; src: url('{{asset('/fonts/CeraPro-Black.ttf')}}') format('truetype'); font-weight: 900; font-style: normal; }
@font-face {font-family: 'Cera Pro'; src: url('{{asset('/fonts/CeraPro-Bold.ttf')}}') format('truetype'); font-weight: bold; font-style: normal; }
body { font-family: 'Cera Pro'; font-weight: normal; }
@page {padding: 0; margin: 0; padding-top: 0px; padding-bottom: 0px; border: none; border-collapse: collapse; font-family: 'Cera Pro'; font-weight: normal;  page-break-after: always;
        page-break-inside: avoid; }
div.page {page-break-after: always; page-break-inside: avoid; margin: 0; }
html, body, div, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, font, img, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, b, u, i, center, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, caption {margin: 0; padding: 0; border: 0; outline: 0; font-size: 100%; vertical-align: baseline; background: transparent; }
* { border: 0; box-sizing: content-box; color: inherit;  line-height: inherit; list-style: none; margin: 0; padding: 0; text-decoration: none; vertical-align: top; letter-spacing: 0; }
html { font-family: 'Cera Pro'; font-weight: normal; font-size: 16px; line-height: 22px; overflow: auto; background: #fff; cursor: default; padding: 0; margin: 0; }
body { box-sizing: border-box; margin:0; padding: 0; background: #FFF; font-family: 'Cera Pro'; font-weight: normal;}
h1 { font-family: 'Cera Pro'; font-weight: 500; }
h2 span,
h2 {font-size: 33px; line-height: 35px; font-family: 'Cera Pro'; font-weight: bold; color: #012e44; }
h2 strong {font-family: 'Cera Pro'; color: #012e44; font-weight: bold; } 
h3, h3 span {font-size: 22px; font-family: 'Cera Pro'; font-weight: bold;}
p {font-family: 'Cera Pro'; font-weight: 500; color: #708ea8; font-size: 16px; line-height: 24px; padding-bottom: 10px; }
.chart-box { text-align: center; padding-bottom: 20px; padding-top: 20px; }
.full-width {width: 100%; display: block; }
.iconimage { width: 50px; display: inline-block; vertical-align: middle; }
.title-box { padding-bottom: 20px; }
.title-box img {width: 42px; padding-right: 15px; display: inline-block; vertical-align: middle; }
.title-box h2 span,
.title-box h2 { padding: 0; margin: 0; line-height: 30px; display: inline-block; color: #012e44; }
.title-box h2 { margin: 0; }
.title-box h2 { display: inline-block; margin-bottom: 0px; vertical-align: middle; line-height: 40px; }
.title-box h2 { display: inline-block; vertical-align: middle; }
.chart-title { text-align: left; }
table tr,table td,table th,
table { border: none; padding: 0; margin: 0; }
table { width: 100%; }
.info-section { width: 100%; }
.info-section table tr td { width: 50%; }
.imgbox h2, .carttitle { text-align: left; }
.imgbox { text-align: right;  }
.imgbox img { padding-right: 10px; }
.title-box tr td { padding: 8px; }
.imgbox { width: 45%; }
.carttitle { width: 55%; }
.services-box { padding: 30px 0; }
.services-box h2{ color: #012e44; }
.services-box p {font-family: 'Cera Pro'; font-weight: normal;  color: #012e44; font-size: 18px; }
.services-box td.min-wrapper { border: 2px solid #fff; padding: 10px 15px;  background-color: #ebeff0; width: 50%;  }
.services-box .left-side-icon, .services-box .left-side-icon * { vertical-align: middle; }
.title-box *{ vertical-align: middle; }
.services-box .left-side-icon { padding: 10px 0; }
.services-box .left-side-icon .lefticon { width: 35px; padding: 0; padding-right: 5px; }
.services-box .left-side-icon .lefticon img { width: 30px }
.content-info p { padding: 10px 0; font-family: 'Cera Pro';
 font-size: 18px !important; color: #012e44 !important; }
.services-box .left-side-icon h2 { padding-left: 10px; font-size: 26px !important; }
.min-wrapper.hightlight-box h2, .min-wrapper.hightlight-box p { color: #ffffff !important; }
.here-where-text { width: 50%; padding-top: 10px; }
.here-where-text h3 { display: block; width: 100%; text-align: center; font-family: 'Cera Pro'; font-weight: 500;  color: #01355c; padding-top: 10px; padding-bottom: 8px; }
.here-where-text .down-arrow { display: block; width: 100%; text-align: center; margin: 0 auto; padding-bottom: 5px; }
.here-where-text .down-arrow img { display: block; text-align: center; margin: 0 auto; }
.chart-section { padding: 25px 0; padding-top: 0; }
header .logo img { width: 145px; }
header .right p { font-size: 20px;  font-family: 'Cera Pro'; font-weight: 500;  color: #012e44; width: 100%; text-align: right; }
.left-right-space { padding-left: 66px; padding-right: 66px; }
img { max-width: 100%; }
html{width: 100%; height: 100%; padding: 0; margin: 0; }
@page {margin: 0cm 0cm;}
.service-box h2 {  font-family: 'Cera Pro'; font-weight: bold; }
.service-box p {  font-family: 'Cera Pro'; font-weight: 500; font-size: 15px !important; line-height: 20px !important; }
.chart-box p { font-size: 15px !important; line-height: 24px !important; }
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
</head>
<body>
<div class="banner-box" style="background-color: #01355c; background-size: contain; background-repeat: repeat; background-position: bottom right; margin: 0; padding: 0; position: relative; margin-top: -10px; background-image: url({{asset('/icons/bookbg-image.jpg')}});">
    <!-- Top Banner Background image size width:1340px and height:650px -->
     <div class="header left-right-space" style="padding-top: 50px; padding-bottom: 0; margin: 0;">
        <table  cellpadding="0" cellpadding="0" style="padding-top: 30px; padding-bottom: 20px; margin: 0;">
            <tr>
                <td class="logo" style="width: 100%; padding-top: 0; margin-top: 0; ">
                    <img style="width: 190px; display: block;" src="{{asset('/icons/white-logo.svg')}}" />
                </td>
            </tr>
        </table>
    </div>
        <table cellpadding="0" cellpadding="0">
            <tr>
                <td class="left-right-space" style="padding-top: 80px; padding-bottom: 100px; text-align: left;">
                    <h1 style="color: #ffffff; font-size: 24px; line-height: 40px; padding-bottom: 15px; font-family: 'Cera Pro'; letter-spacing: -0.5px; letter-spacing: 0; font-weight: normal;">Your connected accountant result</h1>
                    <h2 style="color: #ffffff; font-family: 'Cera Pro';  font-weight: 900; font-size: 48px; letter-spacing: 0.5px; line-height: 52px;">
                    <?php if ( $total > 47 ) {
                        echo "Congratulations you’re connected";
                    } elseif ( $total < 21 ) {
                        echo "Time to make a change";
                    } else {
                        echo "You’re on the right track";
                    }?>
                    </h2>
                </td>
            </tr>           
        </table>
</div>
<div class="chart-title left-right-space" style="padding-top: 50px; padding-bottom: 15px; margin: 0;height:350px;">
    <table cellpadding="0" cellpadding="0">
        <tr>
            <td>
                <h2 style="padding: 0; margin: 0; padding-bottom: 20px; font-size: 36px;  font-family: 'Cera Pro'; font-weight: 900; letter-spacing: 0.5px;">Your results explained</h2>
            </td>
        </tr>
        <tr>
            <?php if( $total > 47 ) : ?>
                <td style="padding: 0; margin: 0; width: 48%; padding-right: 4%;">
                    <p style="padding-bottom: 0; color: #012e44; padding-top: 10px; margin-top: 0; font-size: 19px; line-height: 28px; margin-bottom: 0; font-weight: 500;">Congratulations, our research shows that you’re ahead of the competition when it comes to your use of cloud technology.</p>
                    <p style="padding-bottom: 0; padding-top: 20px; margin-top: 0; font-size: 18px; line-height: 28px; margin-bottom: 0;">Being a connected accountant gives you and your clients access to one version of the truth, whenever you need it, from any connected device.</p>
                </td>
                <td style="padding: 0; margin: 0; width: 48%;">
                    <p style="padding-bottom: 0; padding-top: 10px; margin-top: 0; font-size: 18px; line-height: 28px; margin-bottom: 0; padding-right: 10px;">By automating compliance work you’re in the perfect position to recover time and use your data to deliver value-added advisory services and future-proof your firm. But with technology changing at a rapid pace, standing still isn’t an option. You need to keep on top of the latest advances to keep ahead.</p>
                </td>
            <?php elseif( $total < 21 ) : ?>
                <td style="padding: 0; margin: 0; width: 48%; padding-right: 4%;">
                    <p style="padding-bottom: 0; color: #012e44; padding-top: 10px; margin-top: 0; font-size: 19px; line-height: 28px; margin-bottom: 0; font-weight: 500;">You risk being left behind by your clients and competitors.</p>
                    <p style="padding-bottom: 0; padding-top: 20px; margin-top: 0; font-size: 18px; line-height: 28px; margin-bottom: 0;">You lack real-time access to all the financial data you need to do your job, rely on too many manual processes and systems, and core reporting and compliance tasks are time-consuming. Inconsistency across the firm may</p>
                </td>
                <td style="padding: 0; margin: 0; width: 48%;">
                    <p style="padding-bottom: 0; padding-top: 10px; margin-top: 0; font-size: 18px; line-height: 28px; margin-bottom: 0; padding-right: 10px;">also be increasing the risk of mistakes being made. The future is connected accounting, but in many ways you must feel as though you’re working on your own. You find it difficult to collaborate with colleagues, client communication is ineffective and hard, and there are no (or few) standardised working processes across your firm for you to follow.</p>
                </td>
            <?php else : ?>
                <td style="padding: 0; margin: 0; width: 48%; padding-right: 4%;">
                    <p style="padding-bottom: 0; color: #012e44; padding-top: 10px; margin-top: 0; font-size: 19px; line-height: 28px; margin-bottom: 0; font-weight: 500;">Your use of technology is helping you streamline a lot of your day-to-day work.</p>
                    <p style="padding-bottom: 0; padding-top: 20px; margin-top: 0; font-size: 18px; line-height: 28px; margin-bottom: 0;"> For example, you have access to some real-time data, but probably not across your whole client portfolio; or you can integrate with a number of bookkeeping solutions, but not all. As a result, there may be inconsistencies in service delivery between</p>
                </td>
                <td style="padding: 0; margin: 0; width: 48%;">
                    <p style="padding-bottom: 0; padding-top: 10px; margin-top: 0; font-size: 18px; line-height: 28px; margin-bottom: 0; padding-right: 10px;">clients, which makes standardising and automating processes difficult to achieve. And without consolidated data, and consistency across the firm, you’re unable to identify trends in your client portfolio or see where advisory services are needed. You still have some steps to take to make the full transition from compliance reporter to trusted advisor.</p>
                </td>
            <?php endif; ?>
        </tr>
    </table>    
</div>
<div style="height:450px;">
    <table style="padding-left: 66px; padding-right: 66px; padding-top: 15px;">
        <tr>
            <td style="width: 25%;">
                <table  <?php if($fullstatus == 1) { echo 'style="display: table;"';} else { echo 'style="display: none;"';}?>>
                    <tr>
                        <td>
                            <table cellpadding="0" cellpadding="0">
                                <tr>
                                    <td style="width: 100%; text-align: center; padding-top: 15px;">
                                        <h3 style="font-size: 18px;  font-family: 'Cera Pro'; font-weight: bold; color: #01355c;">Here’s where you are</h3>
                                    </td>
                                </tr>
                            </table>
                            <table cellpadding="0" cellpadding="0">
                                <tr>
                                    <td style="width: 100%; text-align: center; padding-top: 6px; padding-bottom: 5px;">
                                        <span class="down-arrow" style="width: 100%; text-align: center; margin: 0 auto;">
                                            <img src="{{ asset('/icons/down-arrow.svg')}}" />             
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
                                        <h3 style="font-size: 18px; color: #01355c; font-family: 'Cera Pro'; font-weight: bold;">Here’s where you are</h3>
                                    </td>
                                </tr>
                            </table>
                            <table cellpadding="0" cellpadding="0">
                                <tr>
                                    <td style="width: 100%; text-align: center; padding-top: 6px; padding-bottom: 5px;">
                                        <span class="down-arrow" style="width: 100%; text-align: center; margin: 0 auto;">
                                            <img src="{{ asset('/icons/down-arrow.svg')}}" />             
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
                                        <h3 style="font-size: 18px; color: #01355c; font-family: 'Cera Pro'; font-weight: bold;">Here’s where you are</h3>
                                    </td>
                                </tr>
                            </table>
                            <table cellpadding="0" cellpadding="0">
                                <tr>
                                    <td style="width: 100%; text-align: center; padding-top: 6px; padding-bottom: 5px;">
                                        <span class="down-arrow" style="width: 100%; text-align: center; margin: 0 auto;">
                                            <img src="{{ asset('/icons/down-arrow.svg')}}" />
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
                                        <h3 style="font-size: 18px; color: #01355c; font-family: 'Cera Pro'; font-weight: bold;"> Here’s where you are</h3>
                                    </td>
                                </tr>
                            </table>
                            <table cellpadding="0" cellpadding="0">
                                <tr>
                                    <td style="width: 100%; text-align: center; padding-top: 6px; padding-bottom: 5px;">
                                        <span class="down-arrow" style="width: 100%; text-align: center; margin: 0 auto;">
                                            <img src="{{ asset('/icons/down-arrow.svg')}}" />             
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
    <table class="service-box" style="padding-left: 66px; padding-right: 66px; padding-top: 0;">
        <tr>
            <td style="width: 25%; border: 2px solid #fff; padding: 20px 20px 0 20px; {{ $fullclass }}  background-repeat: no-repeat; background-size: contain; background-position: bottom left; background-image: url({{asset('/icons/shape-1.png')}});">
                <table cellpadding="0" cellpadding="0" align="top">
                    <tr>
                        <td style="padding: 0;">
                            <table cellpadding="0" cellpadding="0" align="top">
                                <tr>
                                    <td class="min-wrapper" align="top" style="padding: 0;" >
                                        <table  cellpadding="0" cellpadding="0" class="left-side-icon">
                                            <tr>
                                                <td class="lefticon" style="width: 30px;height:30px; padding: 0;">
                                                    <?php if($fullstatus ==1){ ?>
                                                        <img src="{{ asset('/icons/fullsight-active.svg')}}" />
                                                    <?php } else { ?>
                                                        <img src="{{ asset('/icons/fullsight.svg')}}" />
                                                    <?php } ?>                                                    
                                                </td><td style="width: 5px;"></td>
                                                <td><h2 style="{{ $fullclassh2 }}">fullsight</h2></td>
                                            </tr>
                                        </table>
                                        <table  cellpadding="0" cellpadding="0" class="content-info">
                                            <tr>
                                                <td style="padding-top: 5px;"> 
                                                    <p style="{{ $fullclassp }}">
                                                    You have all your data in one place, and it is standardised across your portfolio. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="height: 150px;"></td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
            <td style="width: 25%; border: 2px solid #fff; padding: 20px 20px 0 20px; {{ $wfclass }} background-size: contain; background-repeat: no-repeat; background-position: bottom left; background-image: url({{asset('/icons/shape-2.png')}});">
                <table cellpadding="0" cellpadding="0" align="top">
                    <tr>
                        <td style="padding: 0;">
                            <table cellpadding="0" cellpadding="0" align="top">
                                <tr>
                                    <td class="min-wrapper" align="top"  style="padding: 0;">
                                        <table  cellpadding="0" cellpadding="0" class="left-side-icon">
                                            <tr>
                                                <td class="lefticon" style="width: 30px;height:30px; padding: 0;">
                                                    <?php if($wfstatus == 1){?>
                                                        <img src="{{ asset('/icons/hindsight-active.svg')}}" />
                                                    <?php } else { ?>
                                                        <img src="{{ asset('/icons/hindsight.svg')}}" />
                                                    <?php } ?>
                                                </td><td style="width: 5px;"></td>
                                                <td><h2 style="{{ $wfclassh2 }}">hindsight</h2></td>
                                            </tr>
                                        </table>
                                        <table  cellpadding="0" cellpadding="0" class="content-info">
                                            <tr>
                                                <td style="padding-top: 5px;"> 
                                                    <p style="{{ $wfclassp }}">You have all your reporting and working papers automated in real-time. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="height: 150px;"></td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
            <td style="width: 25%; border: 2px solid #fff; padding: 20px 20px 0 20px; {{ $revclass }}  background-size: contain;  background-repeat: no-repeat; background-position: bottom left; background-image: url({{asset('/icons/shape-3.png')}});">
                <table cellpadding="0" cellpadding="0" align="top">
                    <tr>
                        <td style="padding: 0;">
                            <table cellpadding="0" cellpadding="0">
                                <tr>
                                    <td class="min-wrapper" align="top" >
                                        <table  cellpadding="0" cellpadding="0" class="left-side-icon">
                                            <tr>
                                                <td class="lefticon" style="width: 30px;height:30px; padding: 0;">
                                                    <?php if($revstatus == 1){?>
                                                        <img src="{{ asset('/icons/insight-active.svg')}}" />
                                                    <?php } else { ?>
                                                        <img src="{{ asset('/icons/insight-regular.svg')}}" />
                                                    <?php } ?>
                                                    <!-- <img src="{{ asset('/icons/insight-regular.svg')}}" /> -->
                                                </td><td style="width: 5px;"></td>
                                                <td><h2 style="{{ $revclassh2 }}">insight</h2></td>
                                            </tr>
                                        </table>
                                        <table  cellpadding="0" cellpadding="0" class="content-info">
                                            <tr>
                                                <td style="padding-top: 5px;">  
                                                    <p style="{{ $revclassp }}">You are able to create deep insight across your portfolio and benchmark against best practice.</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="height: 150px;"></td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
            <td style="width: 25%; border: 2px solid #fff; padding: 20px 20px 0 20px; {{ $advclass }} background-size: contain;  background-repeat: no-repeat; background-position: bottom left; background-image: url({{asset('/icons/shape-4.png')}});">
                <table cellpadding="0" cellpadding="0" align="top">
                    <tr>
                        <td style="padding: 0;">
                            <table cellpadding="0" cellpadding="0" align="top">
                                <tr>
                                    <td class="min-wrapper" align="top" >
                                        <table  cellpadding="0" cellpadding="0" class="left-side-icon">
                                            <tr>
                                                <td class="lefticon" style="width: 30px;height:30px; padding: 0;">
                                                    
                                                    <?php if($advstatus == 1){?>
                                                        <img src="{{ asset('/icons/foresight-active.svg')}}" />
                                                    <?php } else { ?>
                                                        <img src="{{ asset('/icons/foresight.svg')}}" />
                                                    <?php } ?>
                                                </td><td style="width: 5px;"></td>
                                                <td><h2 style="{{ $advclassh2 }}">foresight</h2></td>
                                            </tr>
                                        </table>
                                        <table  cellpadding="0" cellpadding="0" class="content-info">
                                            <tr>
                                                <td style="padding-top: 5px;"> 
                                                    <p style="{{ $advclassp }}">You can be prompted with predictive actions to proactively advise clients.  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="height: 150px;"></td>
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
<div class="chart-section  left-right-space" style="padding-top: 170px; margin-top: 0;">
    <div class="chart-title" style="padding-top: 0; margin-top: 0; padding-bottom: 10px; text-align: left;">
        <h2 style="padding-top:0; font-size: 28px; margin-top: 0; padding-bottom: 25px; font-weight: 900; ">Your results in detail – and how you compare with your peers</h2>
        <p style="padding-top: 5px; line-height: 28px; font-size: 19px; padding-bottom: 30px; padding-right: 15px;">We’ve mapped your answers against the average scores supplied during our technology trends in accounting survey, so you can compare your capabilities against your competitors.</p>
    </div>

    <div class="chart-box" style="height:550px;">
        <div class="full-width">
            <table cellpadding="0" cellpadding="0">
                <tr>
                    <td style="padding: 0; padding-bottom: 15px; width: 55%; padding-right: 20px;">
                        <table cellpadding="0" cellpadding="0" style="width: 100%;">
                            <tr>
                                <td style="padding: 0;">
                                    <div class="title-box">
                                        <table cellpadding="0" cellpadding="0">
                                            <tr>
                                                <td class="imgbox" style="width: 18%; text-align: left; padding: 0 5px 0 0;"><img style="width: 45px;" src="{{ asset('/icons/data.svg')}}" /></td>
                                                <td style="padding: 0; padding-left: 0px; width: 85%;" class="carttitle"><h2 style="font-size: 38px !important; font-weight: 900; ">Data</h2></td>
                                            </tr>
                                        </table>            
                                    </div>
                                    <?php if( $full > 11 ) : ?>
                                        <p style="text-align: left; font-size: 16px">Congratulations, you’re on top of your data strategy. Your adoption of technology at key points means you’re capable of providing a fast, efficient service to your clients. Most importantly, you’ve given yourself every chance of success in today’s competitive accountancy sector.</p>
                                        <p style="text-align: left; font-size: 16px; padding-top: 10px;">In our recent research, the two biggest threats to future success cited by respondents were access to the right technology and the skills of the team. Your challenge now is to keep up with industry trends and ensure you’re anticipating new technologies, not reacting to them. As your clients’ businesses evolve, you need to evolve with them and ensure that you can always provide the timely and insightful information they need.</p>
                                    <?php elseif( $full < 5 ) : ?>
                                        <p style="text-align: left; font-size: 16px">You’re part of the 24% of accounting professionals who told us that their data is not yet consolidated in one central hub. Your financial information doesn’t update automatically, which means that your reports are often out of date as soon as they’re complete. While you are not alone, the bad news is that over a third of respondents in our recent research survey told us they do have access to live data. While your competitors are making progress, you still have work to do.</p>
                                        <p style="text-align: left; font-size: 16px; padding-top: 10px;">Success in accounting today depends on a joined-up data strategy, allowing you to see your clients’ entire financial performance at a glance and provide insightful advice based on what you see. By bringing your data onto a single platform, you can guarantee consistency of delivery across your team and ensure no crucial information slips out of sight.</p>
                                    <?php else : ?>
                                        <p style="text-align: left; font-size: 16px">You’ve taken steps to modernise your data strategy and you’ve got some crucial information available in real time, allowing you to provide a limited amount of up-to-date analysis to your clients. But your strategy remains incomplete, which means your service delivery will remain inconsistent and you won’t always have the necessary information to hand.</p>
                                        <p style="text-align: left; font-size: 16px; padding-top: 10px;">In our recent research, 37% of accounting professionals told us that not keeping up with changes in client demands is the main threat to their future success. Today’s practitioners need to provide proactive advice when it’s most needed to keep clients happy. It’s vital to create a connected data strategy in which all key information updates instantly, without any manual effort required.</p>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td style="padding: 0; width: 45%;">                         
                        <table cellpadding="0" cellpadding="0">
                            <tr>
                                <td style="padding: 10px; background: #f0f3f8; padding-top: 50px; padding-bottom: 50px;">                                    
                                    <canvas id="chart1" width="420" height="380"></canvas>
                                </td>
                            </tr>
                        </table>
                    </td>                   
                </tr>
            </table>
        </div>
    </div>
    <div class="chart-box" style="padding-top: 28px;height:550px;">
        <div class="full-width">
            <table cellpadding="0" cellpadding="0" style="padding: 0; margin: 0; padding-bottom: 70px;">
                <tr>
                    <td style="padding: 0; width: 45%;">        
                        <table cellpadding="0" cellpadding="0">
                            <tr>
                                <td style="padding: 10px; background: #f0f3f8; padding-top: 50px; padding-bottom: 50px;">
                                    <canvas id="chart2" width="420" height="380"></canvas>
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td style="padding: 0; padding-bottom: 15px; width: 55%; padding-left: 20px;">
                        <table cellpadding="0" cellpadding="0" style="width: 100%;">
                            <tr>
                                <td>
                                    <div class="title-box">
                                        <table cellpadding="0" cellpadding="0">
                                            <tr>
                                                <td class="imgbox" style="width: 15%; text-align: left; padding: 0;"><img style="width: 45px;" src="{{ asset('/icons/workflow.svg')}}" /></td>
                                                <td style="padding: 0; padding-left: 2px; width: 75%" class="carttitle"><h2 style="font-size: 38px !important; font-weight: 900;">Workflow</h2></td>
                                            </tr>
                                        </table>            
                                    </div>
                                    <?php if( $wf > 11 ) : ?>
                                        <p style="text-align: left; font-size: 16px">Well done, you’ve adopted standardised and automated workflows, which will already be streamlining your everyday tasks, significantly reducing the reporting burden, and providing more accurate results for your clients.</p>
                                        <p style="padding-top: 10px; text-align: left; font-size: 16px">By adopting a consistent approach to workflows you’ve given yourself a great chance of future success. Now you need to keep moving forward, harnessing new technologies to keep optimising these workflows and automating new ones.</p>
                                    <?php elseif( $wf < 5 ) : ?>
                                        <p style="text-align: left; font-size: 16px">You don’t have consistent workflows and processes across your firm, which means routine tasks take up too much time and may be prone to mistakes. Each team member has a different way of working, so your clients are likely to receive inconsistent levels of delivery. This should be an immediate concern for you, as over two-thirds of respondents in our recent survey told us they already had a standardised way of working across their firm.</p>
                                        <p style="padding-top: 10px; text-align: left; font-size: 16px">Standardising your workflows will allow you to create templates for everyday reporting and compliance work, freeing your team up for more rewarding (not to mention commercially valuable) tasks. As your business grows, it’s also vital to ensure that all your team are working to the same high standards.</p>
                                    <?php else : ?>
                                        <p style="text-align: left; font-size: 16px">The good news is that you’ve taken important steps to address standardising and automating your workflows, which can only help your firm grow. Your day-to-day working practices are sound and your teams are capable of collaboration.</p>
                                        <p style="padding-top: 10px; text-align: left; font-size: 16px">However, it’s important you keep improving to meet the challenges posed by your competitors as well as your clients. In our recent survey of accounting professionals, 21% told us that they can develop their own workflows, reports and services using their technology platform. By following their lead, you’ll be able to optimise your services and guarantee best practice at all times.</p>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div class="chart-box" style="padding-bottom: 0; padding-top: 40px;height:650px;">
        <div class="full-width">
            <table cellpadding="0" cellpadding="0">
                <tr>
                    <td style="padding: 0; padding-bottom: 15px; width: 55%; padding-right: 20px;">
                        <table cellpadding="0" cellpadding="0" style="width: 100%;">
                            <tr>
                                <td style="padding: 0;">
                                    <div class="title-box">
                                        <table cellpadding="0" cellpadding="0">
                                            <tr>
                                                <td class="imgbox" style="width: 15%; text-align: left; padding: 0;"><img style="width: 45px;" src="{{ asset('/icons/review_ic.svg')}}" /></td>
                                                <td style="padding: 0; padding-left: 0px; width: 75%;" class="carttitle"><h2 style="font-size: 38px !important; font-weight: 900; ">Review</h2></td>
                                            </tr>
                                        </table>            
                                    </div>
                                    <?php if( $rev > 11 ) : ?>
                                        <p style="text-align: left; font-size: 16px">Your data analysis and reporting capabilities are impressive. You’re consolidating data in an efficient way, enabling you to extract key insights and provide forward-thinking business advice to your clients. The steps you’ve taken make you one of the innovative minority – only 7% of our research respondents strongly agreed with the statement that they can gain insight into their client base by benchmarking data across their portfolio.</p>
                                        <p style="text-align: left; font-size: 16px; padding-top: 10px;">As new technology emerges, you’ll be able to keep improving your services and make your data analysis even more powerful. This will allow you to effortlessly share data with your clients, collaborating with them to solve key problems and helping them make better decisions based on what you see behind the numbers – which in turn will lead to happier clients and new advisory service revenue opportunities. </p>
                                    <?php elseif( $rev < 5 ) : ?>
                                        <p style="text-align: left; font-size: 16px">At the moment you’re failing to maximise the value of your clients’ data. The data you do have is not in one place and there’s no easy way of extracting the hidden insights that lie beneath. You’ve got plenty of numbers, but little value. The good news is that you’re not alone – only 9% of our survey respondents said that they can use their systems to complete a detailed analysis of each account or their whole client portfolio.</p>
                                        <p style="text-align: left; font-size: 16px; padding-top: 10px;">It’s time to start improving your company’s analytical capabilities by bringing your data together in a clear, easily understandable form. This will help you see where you can advise clients on industry trends and help them reach key milestones.</p>
                                    <?php else : ?>
                                        <p style="text-align: left; font-size: 16px">You’ve certainly taken strides to improve your company’s analytical capabilities. By benchmarking data against best practice and improving client collaboration tools, you’ve built a solid foundation for the firm to develop on.</p>
                                        <p style="text-align: left; font-size: 16px; padding-top: 10px;">Now you’re ready to push on and build world-class advisory services founded on strong data analysis. Where you can look beyond the numbers to find the insights that help your clients and fundamentally change the nature of your relationship with them.</p>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td style="padding: 0; width: 45%;">                         
                        <table cellpadding="0" cellpadding="0">
                            <tr>
                                <td style="padding: 10px; background: #f0f3f8; padding-top: 50px; padding-bottom: 50px;">
                                    <canvas id="chart3" width="420" height="380"></canvas>
                                </td>
                            </tr>
                        </table>
                    </td>                   
                </tr>
            </table>
        </div>
    </div>
    <div class="chart-box" style="padding-top: 28px;height:650px;">
        <div class="full-width">
            <table cellpadding="0" cellpadding="0" style="padding: 0; margin: 0; padding-bottom: 0px;">
                <tr>
                    <td style="padding: 0; width: 45%;">
                        <table cellpadding="0" cellpadding="0">
                            <tr>
                                <td style="padding: 10px; background: #f0f3f8; padding-top: 50px; padding-bottom: 50px;">
                                    <canvas id="chart4" width="420" height="380"></canvas>
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td style="padding: 0; padding-bottom: 15px; width: 55%; padding-left: 20px;">
                        <table cellpadding="0" cellpadding="0" style="width: 100%;">
                            <tr>
                                <td>
                                    <div class="title-box">
                                        <table cellpadding="0" cellpadding="0">
                                            <tr>
                                                <td class="imgbox" style="width: 15%; text-align: left; padding:0;"><img style="width: 100%;" src="{{ asset('/icons/advisory_ic.svg')}}" /></td>
                                                <td style="padding: 0; padding-left: 10px; width: 85%" class="carttitle"><h2 style="font-size: 38px !important; font-weight: 900; ">Advisory</h2></td>
                                            </tr>
                                        </table>            
                                    </div>
                                    <?php if( $adv > 11 ) : ?>
                                        <p style="text-align: left; font-size: 16px; padding-top:0;">The transformation of your business is already well underway. You’ve moved beyond core accounting practices and embraced the role of trusted partner, using your clients’ data to provide a range of value-added services.</p>
                                        <p style="padding-top: 10px; text-align: left; font-size: 16px">But the pace of technological change is only increasing, and each new innovation will increase your ability to provide world-class advisory services. Or increase the ability of your competitors. So keep an eye out for new developments and be sure to react to them.</p>
                                    <?php elseif( $adv < 5 ) : ?>
                                        <p style="text-align: left; font-size: 16px; padding-top:0;">You seem rooted in traditional accounting practices and the provision of compliance services. You probably haven’t made significant progress building a consistent – and significant – revenue stream from advisory services. While you’re not alone in this respect – for example, just 14% of our research respondents identified advisory services as their main source of income – developing these services quickly, and using technology to help, is quickly becoming a pressing issue. 76% of our respondents see advisory as their biggest revenue contributor in the next five years.</p>
                                        <p style="padding-top: 10px; text-align: left; font-size: 16px">You can quickly improve the situation by making better use of your client data. Pull it all together into one data store and make it accessible to your team. Then give them the analytics tools to look across your client portfolio for trends and issues that provoke an advisory discussion. But that’s not all. Armed with up-to-date data, and the tools to analyse it easily, your team can give clients insight and advice that transforms their businesses.</p>
                                    <?php else : ?>
                                        <p style="text-align: left; font-size: 16px; padding-top:0;">You’ve taken steps to consolidate your client data, even automate your accounting workflows. You’re well on the way to transforming your compliance services. But there’s still work to do before you turn this data into new advisory services and revenue.</p>
                                        <p style="padding-top: 10px; text-align: left; font-size: 16px">Armed with the right analytics, reporting tools, and consolidated client data, you will put yourself in the best position to see trends as they emerge and be able to respond with real-time advice that has a positive impact on your clients’ businesses. This transformation from providing largely compliance services to leading with advisory is something that only 13% of our survey’s respondents say they’ve successfully achieved, so it is all to play for. Changes you make today to your services, skills, and technology investments, will put you in the best position to extend your service offering into advisory services before your competitors do. </p>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>
<div class="full-width" style="background-color: #ffffff; padding-top: 0; margin-top: 0;">
    <table cellpadding="0" cellpadding="0" style="padding-left: 66px; padding-right: 66px; padding-top: 0; margin-top: 0px;">
        <tr>
            <td style="padding-top: 50px; padding-bottom: 30px; text-align: left;">
                <table  cellpadding="0" cellpadding="0" style="padding: 0; margin: 0;">
                    <tr>
                        <td>
                            <h2 style="color: #012e44; padding-top: 0; margin-top: 0; padding-bottom: 28px;  font-size: 34px; margin-bottom: 0px; line-height: 36px; font-weight: 900;">What should I do now?</h2>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <table class="chart-title" cellpadding="0" cellpadding="0" style="padding: 0; margin: 0;">
                                <tr>
                                <?php if( $total > 47 ) : ?>
                                    <td style="width: 48%; padding-right: 4%;">
                                        <p style="color: #012e44; padding-bottom: 19px; font-size: 19px; line-height: 26px; font-weight: 500;">You’ve reached this high level of digital maturity by being smart about your technology strategy, adoption and investments.</p>
                                        <p style="color: #708ea8; padding-bottom: 10px; font-size: 16px; line-height: 26px; font-weight: normal;">It’s allowed you to stay ahead of your competition and unlock revenue from the advisory services that so many firms are seeking.</p></td>
                                    <td style="width: 48%;">
                                        <p style="color: #708ea8; padding-bottom: 0px; font-size: 16px; line-height: 26px; padding-left: 10px; font-weight: normal;">So why stand still now and let the rest catch you up? That’s where Silverfin can help. Our award-winning cloud platform powers connected accounting at some of the world’s leading firms. And our powerful analytics and reporting tools give you the data and insight you need to be your clients’ most trusted advisor.</p>
                                    </td>
                                <?php elseif( $total < 21 ) : ?>
                                    <td style="width: 48%; padding-right: 4%;">
                                        <p style="color: #012e44; padding-bottom: 19px; font-size: 19px; line-height: 26px; font-weight: 500;">Being a connected accountant gives you access to the data, tools and people you need to work quickly, efficiently, and accurately – and to transform your compliance work.</p>
                                        <p style="color: #708ea8; padding-bottom: 10px; font-size: 16px; line-height: 26px; font-weight: normal;">That means no more financial data stored in silos or inconsistent processes across your firm. Your success as a connected accountant depends on the technology you use.</p></td>
                                    <td style="width: 48%;">
                                        <p style="color: #708ea8; padding-bottom: 0px; font-size: 16px; line-height: 26px; padding-left: 10px; font-weight: normal;">Silverfin’s cloud platform integrates with all your clients’ accounting and finance systems to pull in critical data, no matter what the source. With Silverfin you’re always working from a single version of the truth, sharing real-time data with clients and colleagues. Once you standardise your data and processes you can automate reporting and workflows, and begin your journey to becoming a connected accountant.</p>
                                    </td>
                                <?php else : ?>
                                    <td style="width: 48%; padding-right: 4%;">
                                        <p style="color: #012e44; padding-bottom: 19px; font-size: 19px; line-height: 26px; font-weight: 500;">Your clients’ demands are changing. Offering just compliance services isn’t enough.</p>
                                        <p style="color: #708ea8; padding-bottom: 10px; font-size: 16px; line-height: 26px; font-weight: normal;"> Increasingly, your clients are demanding value-added advisory services. While you demonstrate a reasonable degree of digital maturity, the bad news is that your competitors are currently better placed to serve your clients’ evolving requirements.</p></td>
                                    <td style="width: 48%;">
                                        <p style="color: #708ea8; padding-bottom: 0px; font-size: 16px; line-height: 26px; padding-left: 10px; font-weight: normal;">Silverfin’s cloud-based platform connects with your clients’ bookkeeping and financial systems to bring you all the data you need – whatever the source. We automate your compliance accounting workflows, improving your speed, accuracy and profitability. Then our powerful analytics and reporting tools give you the data and insight you need to be your clients’ most trusted advisor.</p>
                                    </td>
                                <?php endif; ?>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</div>
<div class="full-width" style="background-color: #01355c; background-repeat: repeat; background-position: left bottom; text-align: center; padding: 0; margin: 0;  background-image: url({{asset('/icons/book-bg-image2.jpg')}}); ">
    <table cellpadding="0" cellpadding="0" style="padding-left: 66px; padding-right: 66px; margin-top: 20px;">
        <tr>
            <td style="padding-top: 239px; padding-bottom: 239px; text-align: center;">
                <table  cellpadding="0" cellpadding="0" style="padding: 0; margin: 0;">
                    <tr>
                        <td>
                            <div class="chart-title">
                                <h2 style="color: #fff; padding-top: 0px; margin-top: 20px; font-size: 46px; line-height: 55px; text-align: center;"> <strong style="color: #fff; margin-top: 20px; letter-spacing: 0.5px !important; margin-bottom: 20px; font-weight: 900;">
                                <?php if ( $total > 47 ) {
                                    echo "Book a free connected accounting workshop and identify new opportunities to capitalise on your technology investment";
                                } else {
                                    echo "Book a free connected accounting workshop and build your own plan for change today";
                                }?>
                                </strong></h2>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <table cellpadding="0" cellpadding="0" style="padding-left: 0px; padding-right: 0px; padding-top: 20px; text-align: center;">
                                <tr>
                                    <td>
                                        <table style="background: #13c5e2; padding: 0 20px; width: 400px; height: 90px; margin: 10px auto 0 auto; border-radius: 8px;"  cellpadding="0" cellpadding="0">
                                            <tr>
                                                <td>
                                                    <a style="color: #ffffff; line-height: 90px; font-size: 28px; text-decoration: none;" href="https://www.silverfin.com/demo" title="Book a free workshop" target="_blank"> <strong>Book a free workshop</strong> </a>
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
    <table style="padding: 0; margin: 0 auto; width: 250px; border: none;" cellpadding="0" cellpadding="0">
        <tr>
            <td>
                <table  cellpadding="0" cellpadding="0" style="width: 80px; text-align: center; border-right: 1px solid #304150; border-left: 1px solid #304150;">
                    <tr>
                        <td style="padding: 15px 0;">
                            <a style="padding: 15px 10px; width: 80px; display:block;" href="https://www.linkedin.com/company/silverfin/" target="_blank"><img style="width: 34px;" src="{{ asset('/icons/linkedin-icon.svg')}}"/></a>
                        </td>
                    </tr>
                </table>
            </td>
            <td>
                <table  cellpadding="0" cellpadding="0" style="width: 80px; text-align: center; border-right: 1px solid #304150;">
                    <tr>
                        <td style="padding: 15px 0;">
                            <a style="padding: 15px 10px; width: 80px; display:block;"  href="https://twitter.com/getsilverfin" target="_blank"><img style="width: 34px;" src="{{ asset('/icons/twitter-icon.svg')}}"/></a>
                        </td>
                    </tr>
                </table>
            </td>
            <td>
                <table  cellpadding="0" cellpadding="0" style="width: 80px; text-align: center;  border-right: 1px solid #304150;">
                    <tr>
                        <td style="padding: 15px 0;">
                            <a style="padding: 15px 10px; width: 80px; display:block;"  href="https://www.facebook.com/getsilverfin/" target="_blank"><img style="width: 34px;" src="{{ asset('/icons/facebook-icon.svg')}}"/></a>
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
                "labels":['Live Data','Consolidation','Collaboration'],
                
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
                    'labels': {'fontColor':'#57758f', 'padding': 25, 'fontSize': 16, }
                },
                'maintainAspectRatio': true,
                'scale':{
                    'ticks': {'display': false, 'maxTicksLimit': 6, 'beginAtZero':true, 'stepSize': 1, 'suggestedMax': 5, 'minRotation': 90 // angle in degrees
                    },
                    'pointLabels': { 'fontSize':14, },
                    yAxes: [{
                        gridLines: {display: false, drawBorder: false },
                        scaleLabel: {display: false,fontSize:30 },
                        ticks: {display: false,},
                    }],
                    xAxes: [{
                        gridLines: {
                            color: 'rgba(255, 255, 255, 0)',
                            zeroLineColor: 'rgba(255, 255, 255, 0)', // hide the zero line by making it white
                            zeroLineWidth: 0,
                        },
                        scaleLabel: {display: false },
                        ticks: {
                            // Only display time line with a 5 year span
                            callback: function(dataLabel, index) {
                                return (index+1) % 5 === 0 ? dataLabel : '';
                            },
                        }
                    }],
                }
            }
        }
    );
    new Chart(
        document.getElementById("chart2"), { 
         "responsive": false,           
            "type":"radar",
            "data":{
                "labels":[['Automated Workflows'],['Electronic','Comms'],['Real Time','Workflows']],
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
                    'labels': {'fontColor':'#57758f', 'padding': 25, 'fontSize': 14, }
                },
                'maintainAspectRatio': true,
                'scale':{
                    'ticks': {'display': false, 'maxTicksLimit': 6, 'beginAtZero':true, 'stepSize': 1, 'suggestedMax': 5 },
                    'pointLabels': { 'fontSize':14, },
                },
            }
        }
    );
    new Chart(
        document.getElementById("chart3"), { 
         "responsive": false,           
            "type":"radar",
            "data":{
                "labels":['Workflows Status','Benchmarking','Analysis'],
                "datasets":[{
                        'label': 'Your results', 'data': [<?php echo $chart3;?>],'backgroundColor': 'rgba(77, 192, 222, 0.3)','borderColor': 'rgba(77, 192, 222, 1)'
                    }, 
                    {
                        'label': 'Average Score',  'data': [3.4,2.7,2.9],'backgroundColor': 'rgba(5,125,224, 0.3)','borderColor': 'rgba(5,125,224, 1)'
                    }]
            },
            "options":{
                'legend': {
                    'labels': {'fontColor':'#57758f', 'padding': 25, 'fontSize': 14, }
                },
                'maintainAspectRatio': true,
                'scale':{
                    'ticks': {'display': false, 'maxTicksLimit': 6, 'beginAtZero':true, 'stepSize': 1, 'suggestedMax': 5
                    }, 
                    'pointLabels': { 'fontSize':14, },
                }
            }
        }
    );
    new Chart(
        document.getElementById("chart4"), { 
         "responsive": false,           
            "type":"radar",
            "data":{
                "labels":[['Automated Alerts'],['Businesses','Management'],['Advisory']],
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
                    'labels': {'fontColor':'#57758f', 'padding': 25, 'fontSize': 14, }
                },
                'maintainAspectRatio': true,
                'scale':{
                    'ticks': {'display': false, 'maxTicksLimit': 6, 'beginAtZero':true, 'stepSize': 1, 'suggestedMax': 5
                    }, 
                    'pointLabels': { 'fontSize':14, },
                }
            }
        }
    );
}
window.onload = function() {drawGraphs(); };
</script>
</body>
</html>