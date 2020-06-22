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
<title>Jeres connected accounting-resultater</title>
<style type="text/css">
@font-face {font-family: 'Cera Pro'; src: url('{{asset('/fonts/CeraPro-Light.ttf')}}') format('truetype'); font-weight: 300; font-style: normal; }
@font-face {font-family: 'Cera Pro'; src: url('{{asset('/fonts/CeraPro-Regular.otf')}}') format('truetype'); font-weight: 400; font-style: normal; }
@font-face {font-family: 'Cera Pro'; src: url('{{asset('/fonts/CeraPro-Medium.ttf')}}') format('truetype'); font-weight: 500; font-style: normal; }
@font-face {font-family: 'Cera Pro'; src: url('{{asset('/fonts/CeraPro-Black.ttf')}}') format('truetype'); font-weight: 900; font-style: normal; }
@font-face {font-family: 'Cera Pro'; src: url('{{asset('/fonts/CeraPro-Bold.otf')}}') format('truetype'); font-weight: 700; font-style: normal; }
body { font-family: 'Cera Pro'; font-weight: 400; }
@page {padding: 0; margin: 0; padding-top: 0px; padding-bottom: 0px; border: none; border-collapse: collapse; font-family: 'Cera Pro'; font-weight: 400;  page-break-after: always;
        page-break-inside: avoid; }
div.page {page-break-after: always; page-break-inside: avoid; margin: 0; }
html, body, div, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, font, img, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, b, u, i, center, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, caption {margin: 0; padding: 0; border: 0; outline: 0; font-size: 100%; vertical-align: baseline; background: transparent; }
* { border: 0; box-sizing: content-box; color: inherit;  line-height: inherit; list-style: none; margin: 0; padding: 0; text-decoration: none; vertical-align: top; letter-spacing: 0; }
html { font-family: 'Cera Pro'; font-weight: 400; font-size: 16px; line-height: 22px; overflow: auto; background: #fff; cursor: default; padding: 0; margin: 0; }
body { box-sizing: border-box; margin:0; padding: 0; background: #FFF; font-family: 'Cera Pro'; font-weight: 400;}
h1 { font-family: 'Cera Pro'; font-weight: 400; }
h2 span,
h2 {font-size: 33px; line-height: 35px; font-family: 'Cera Pro'; font-weight: 700; color: #012e44; }
h2 strong {font-family: 'Cera Pro'; color: #012e44; font-weight: 700; } 
h3, h3 span {font-size: 22px; font-family: 'Cera Pro'; font-weight: 700;}
p {font-family: 'Cera Pro'; font-weight: 400; color: #708ea8; font-size: 16px; line-height: 24px; padding-bottom: 10px; }
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
.services-box p {font-family: 'Cera Pro'; font-weight: 400;  color: #012e44; font-size: 18px; }
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
.here-where-text h3 { display: block; width: 100%; text-align: center; font-family: 'Cera Pro'; font-weight: 400;  color: #01355c; padding-top: 10px; padding-bottom: 8px; }
.here-where-text .down-arrow { display: block; width: 100%; text-align: center; margin: 0 auto; padding-bottom: 5px; }
.here-where-text .down-arrow img { display: block; text-align: center; margin: 0 auto; }
.chart-section { padding: 25px 0; padding-top: 0; }
header .logo img { width: 145px; }
header .right p { font-size: 20px;  font-family: 'Cera Pro'; font-weight: 400;  color: #012e44; width: 100%; text-align: right; }
.left-right-space { padding-left: 66px; padding-right: 66px; }
img { max-width: 100%; }
html{width: 100%; height: 100%; padding: 0; margin: 0; }
@page {margin: 0cm 0cm;}
.service-box h2 {  font-family: 'Cera Pro'; font-weight: 700; }
.service-box p {  font-family: 'Cera Pro'; font-weight: 400; font-size: 15px !important; line-height: 20px !important; }
.chart-box p { font-size: 15px !important; line-height: 24px !important; }
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
</head>
<body>
<div class="banner-box" style="background-color: #01355c; background-size: cover; background-repeat: repeat; background-position: top right; margin: 0; padding: 0; position: relative; margin-top: -10px; background-image: url({{asset('/icons/header-image.jpg')}});">
    <!-- Top Banner Background image size width:1340px and height:650px -->
     <div class="header left-right-space" style="padding-top: 50px; padding-bottom: 0; margin: 0;">
        <table  cellpadding="0" cellpadding="0" style="padding-top: 30px; padding-bottom: 0; margin: 0;">
            <tr>
                <td class="logo" style="width: 100%; padding-top: 0; margin-top: 0; ">
                    <img style="width: 190px;height:100px; display: block;" src="{{asset('/icons/colour-logo.svg')}}" />
                </td>
            </tr>
        </table>
    </div>
        <table cellpadding="0" cellpadding="0">
            <tr>
                <td class="left-right-space" style="padding-top: 80px; padding-bottom: 80px; text-align: left;">
                    <h1 style="color: #012e44; font-size: 24px; line-height: 40px; padding-bottom: 15px; font-family: 'Cera Pro'; letter-spacing: -0.5px; letter-spacing: 0; font-weight: 400;">Jeres connected accounting-resultater</h1>
                    <h2 style="color: #012e44; font-family: 'Cera Pro';  font-weight: 700; font-size: 48px; letter-spacing: 0.5px; line-height: 52px;">
                    <?php if ( $total > 47 ) {
                        echo "Tillykke, I er »connected«";
                    } elseif ( $total < 21 ) {
                        echo "Tid til forandring";
                    } else {
                        echo "I er på rette vej";
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
                <h2 style="padding: 0; margin: 0; padding-bottom: 20px; font-size: 36px;  font-family: 'Cera Pro'; font-weight: 700; letter-spacing: 0.5px;">Jeres resultater uddybet</h2>
            </td>
        </tr>
        <tr>
            <?php if( $total > 47 ) : ?>
                <td style="padding: 0; margin: 0; width: 48%; padding-right: 4%;">
                    <p style="padding-bottom: 0; color: #012e44; padding-top: 10px; margin-top: 0; font-size: 19px; line-height: 28px; margin-bottom: 0; font-weight: 400;">Tillykke, vores research viser, at I er foran konkurrenterne, når det kommer til jeres brug af cloudteknologi.</p>
                    <p style="padding-bottom: 0; padding-top: 20px; margin-top: 0; font-size: 18px; line-height: 28px; margin-bottom: 0;">Jeres brug af connected accounting giver jer og jeres kunder adgang til én version af sandheden, når som helst, fra en hvilken som helst forbundet enhed.</p>
                </td>
                <td style="padding: 0; margin: 0; width: 48%;">
                    <p style="padding-bottom: 0; padding-top: 10px; margin-top: 0; font-size: 18px; line-height: 28px; margin-bottom: 0; padding-right: 10px;">Ved at have automatiseret compliancearbejde er I perfekt stillet til at spare tid og bruge data til at levere værdiskabende rådgivningsservices og gøre jeres firma fremtidssikret. Men med teknologiens hurtige fremgang må I ikke stå stille. I skal holde jer ajour med de nyeste fremskridt for at forblive forrest.</p>
                </td>
            <?php elseif( $total < 21 ) : ?>
                <td style="padding: 0; margin: 0; width: 48%; padding-right: 4%;">
                    <p style="padding-bottom: 0; color: #012e44; padding-top: 10px; margin-top: 0; font-size: 19px; line-height: 28px; margin-bottom: 0; font-weight: 400;">I risikerer at blive hægtet af konkurrencen med jeres kunder og konkurrenter.</p>
                    <p style="padding-bottom: 0; padding-top: 20px; margin-top: 0; font-size: 18px; line-height: 28px; margin-bottom: 0;">I mangler realtids-adgang til alle de finansdata, I skal bruge for at kunne lave jeres arbejde. I er afhængige af for mange manuelle processer og systemer, og nøgleopgaver inden for rapportering og compliance er tidskrævende.</p>
                </td>
                <td style="padding: 0; margin: 0; width: 48%;">
                    <p style="padding-bottom: 0; padding-top: 10px; margin-top: 0; font-size: 18px; line-height: 28px; margin-bottom: 0; padding-right: 10px;">Manglende sammenhæng på tværs af firmaet øger muligvis også risikoen for fejl. </p>
                    <p style="padding-bottom: 0; padding-top: 20px; margin-top: 0; font-size: 18px; line-height: 28px; margin-bottom: 0; padding-right: 10px;">Fremtiden er connected accounting, men på mange måder føler I det nok, som om I arbejder alene. I finder det vanskeligt at samarbejde med kollegaer, kundekommunikation er ineffektiv og svær, og der findes ingen (eller kun få) standardiserede arbejdsprocesser på tværs af firmaet, som I kan følge.</p>
                </td>
            <?php else : ?>
                <td style="padding: 0; margin: 0; width: 48%; padding-right: 4%;">
                    <p style="padding-bottom: 0; color: #012e44; padding-top: 10px; margin-top: 0; font-size: 19px; line-height: 28px; margin-bottom: 0; font-weight: 400;">Jeres brug af teknologi er med til at strømline meget af jeres daglige arbejde.</p>
                    <p style="padding-bottom: 0; padding-top: 20px; margin-top: 0; font-size: 18px; line-height: 28px; margin-bottom: 0;">Eksempelvis har I adgang til nogle real-time data, men nok ikke på tværs af hele jeres kundeportefølje – eller I kan integrere med mange bogføringsløsninger, men ikke alle. Det betyder måske, at der er forskel på leverancerne mellem kunderne, hvilket gør det svært</p>
                </td>
                <td style="padding: 0; margin: 0; width: 48%;">
                    <p style="padding-bottom: 0; padding-top: 10px; margin-top: 0; font-size: 18px; line-height: 28px; margin-bottom: 0; padding-right: 10px;">at standardisere og automatisere processer. Og uden datakonsolidering og konsekvens på tværs af firmaet er det umuligt at identificere trends i jeres kundeportefølje eller få øje på, hvor rådgivningsydelser kan bruges. I mangler nogle skridt for at kunne overgå helt fra at være compliance-reporter til betroet rådgiver.</p>
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
                                        <h3 style="font-size: 18px;  font-family: 'Cera Pro'; font-weight: 700; color: #01355c;">I er her</h3>
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
                                        <h3 style="font-size: 18px; color: #01355c; font-family: 'Cera Pro'; font-weight: 700;">I er her</h3>
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
                                        <h3 style="font-size: 18px; color: #01355c; font-family: 'Cera Pro'; font-weight: 700;">I er her</h3>
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
                                        <h3 style="font-size: 18px; color: #01355c; font-family: 'Cera Pro'; font-weight: 700;">I er her</h3>
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
                                                    I har alle jeres data på ét sted, og det er standardiseret på tværs af jeres portefølje. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </p>
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
                                                    <p style="{{ $wfclassp }}">I har alle jeres rapportering- og arbejdspapirer automatiseret i realtid. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>
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
                                                    <p style="{{ $revclassp }}">I er i stand til at skabe dybtgående indsigter på tværs af jeres portefølje og benchmarke med best practice.</p>
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
                                                    <p style="{{ $advclassp }}">Med jeres forudseende handlinger kan I give jeres kunder proaktiv rådgivning. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
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
    <div class="chart-title" style="padding-top: 0; margin-top: 0; padding-bottom: 5px; text-align: left;">
        <h2 style="padding-top:0; font-size: 26px; margin-top: 0; padding-bottom: 25px; font-weight: 700; ">Jeres resultater i detaljer – og hvor I står i forhold til jeres fagfæller</h2>
        <p style="padding-top: 5px; line-height: 26px; font-size: 18px; padding-bottom: 20px; padding-right: 15px;">Vi har kortlagt jeres svar i forhold til gennemsnittet af de svar vi indsamlede, gennem vores undersøgelse af teknologitrends i regnskab, så vi kan sammenligne jeres evner med jeres konkurrenter.</p>
    </div>

    <div class="chart-box" style="height:530px;">
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
                                                <td style="padding: 0; padding-left: 0px; width: 85%;" class="carttitle"><h2 style="font-size: 38px !important; font-weight: 700; ">Data</h2></td>
                                            </tr>
                                        </table>            
                                    </div>
                                    <?php if( $full > 11 ) : ?>
                                        <p style="text-align: left; font-size: 16px">Tillykke, I har styr på jeres datastrategi. Jeres implementering af teknologi til nøglefunktioner betyder, at I kan levere hurtig og effektiv service til jeres kunder. Vigtigst af alt har I givet jer selv enhver chance for succes i dagens konkurrenceprægede regnskabssektor.</p>
                                        <p style="text-align: left; font-size: 16px; padding-top: 10px;">I vores nylige research pegede respondenterne på adgang til den rigtige teknologi og teamets færdigheder som de største trusler mod fremtidig succes. Udfordringen bliver nu at holde jer ajour med industritrends og sikre, at I kan foregribe ny teknologi, ikke bare reagere på den. Efterhånden som jeres kunders forretninger udvikler sig, er I nødt til udvikle jer i takt og sikre, at I altid kan skaffe de rettidige og indsigtsfulde oplysninger, de har brug for.</p>
                                    <?php elseif( $full < 5 ) : ?>
                                        <p style="text-align: left; font-size: 16px">I er en del af de 24 % af regnskabsprofessionelle, som fortalte os, at deres data endnu ikke er konsolideret på ét centralt sted. Jeres finansdata bliver ikke opdateret automatisk, hvilket betyder, at jeres rapporter tit er forældede, så snart de færdige. Selvom I ikke er alene, er den dårlige nyhed, at over en tredjedel af respondenterne i vores nylige undersøgelse svarede, at de har adgang til live data. Selvom I gør fremskridt, er der stadig noget at gøre.</p>
                                        <p style="text-align: left; font-size: 16px; padding-top: 10px;">At have succes i regnskab i dag afhænger af en integreret datastrategi, hvor det er muligt at få et hurtigt overblik over kundernes samlede økonomiske præstation, således at man kan give indsigtsfulde råd baseret på, hvad man kan se. Ved at samle jeres data på én platform, kan I garantere ensartethed i leveringen på tværs af jeres team og sikre, at ingen kritiske oplysninger forsvinder.</p>
                                    <?php else : ?>
                                        <p style="text-align: left; font-size: 16px">I har taget nogle skridt til at modernisere jeres datastrategi og nogle kritiske oplysninger er tilgængelige i realtid, så I kan levere en begrænset mængde opdateret analyse til jeres kunder. Men jeres strategi er fortsat ufuldstændig, hvilket betyder, at jeres levering af services vil forblive inkonsekvent, og I vil ikke altid have de nødvendige oplysninger ved hånden.</p>
                                        <p style="text-align: left; font-size: 16px; padding-top: 10px;">I vores research svarede 37 % af regnskabsprofessionelle, at den største trussel mod deres fremtidige succes var deres manglende evne til at tilpasse sig kundernes behov. Professionelle i dag skal kunne give proaktive råd, når der mest er behov for det for at holde kunderne tilfredse. Det er altafgørende at skabe en integreret datastrategi, hvori alle oplysninger automatisk bliver opdateret, uden at der er brug for en manuel indsats.</p>
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
                                                <td style="padding: 0; padding-left: 2px; width: 75%" class="carttitle"><h2 style="font-size: 38px !important; font-weight: 700;">Workflow</h2></td>
                                            </tr>
                                        </table>            
                                    </div>
                                    <?php if( $wf > 11 ) : ?>
                                        <p style="text-align: left; font-size: 16px">Flot klaret! I har implementeret standardiserede og automatiserede workflows, som allerede strømliner jeres daglige opgaver, hvilket reducerer rapporteringsbyrden og giver jeres kunder mere nøjagtige resultater.</p>
                                        <p style="padding-top: 10px; text-align: left; font-size: 16px">Ved at implementere en konsekvent tilgang til workflows har I givet jer selv gode muligheder for fremtidig succes. Nu skal I fortsætte med at bevæge jer fremad og gøre brug af nye teknologier for at fortsætte med at forbedre disse workflows og automatisere de nye.</p>
                                    <?php elseif( $wf < 5 ) : ?>
                                        <p style="text-align: left; font-size: 16px">I mangler konsekvente workflows og processer på tværs af jeres firma, hvilket betyder, at almindelige opgaver tager for lang tid, og der er måske en tilbøjelighed til at lave fejl. Hvert teammedlem har deres egen måde at arbejde på, så det er sandsynligt, at jeres kunder får forskellige niveauer af service. Dette bør være en presserende bekymring for jer, eftersom to tredjedele af respondenterne til vores spørgeskema svarede, at de allerede havde standardiserede arbejdsgange på tværs af deres firma.</p>
                                        <p style="padding-top: 10px; text-align: left; font-size: 16px">Standardisering af workflows gør det muligt for jer at oprette skabeloner for daglig rapportering og compliancearbejde, og på den måde kan teamet bruge tid på mere givende (for ikke at tale om indtægtsgenererende) opgaver. Efterhånden som jeres firma vokser, er det også altafgørende at sikre, at hele teamet arbejder med de samme høje standarder.</p>
                                    <?php else : ?>
                                        <p style="text-align: left; font-size: 16px">Den gode nyhed er, I har taget vigtige skidt til at adressere standardiseringen og automatiseringen af jeres workflows, hvilket kun kommer til at hjælpe jeres firma med at vokse. Jeres daglige arbejdsgange er solide, og jeres teams kan samarbejde.</p>
                                        <p style="padding-top: 10px; text-align: left; font-size: 16px">Det er dog vigtigt, at I fortsætter med at forbedrede jer for at kunne imødekomme udfordringerne fra jeres konkurrenter og jeres kunder. I vores undersøgelse af regnskabsprofessionelle svarede 21 %, at de kan oprette deres egne workflows, rapporter og services gennem deres teknologiplatform. Ved at følge deres eksempel vil I kunne optimere jeres services og garantere best practice hele tiden.</p>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div class="chart-box" style="padding-bottom: 0; padding-top: 80px;height:590px;">
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
                                                <td style="padding: 0; padding-left: 0px; width: 75%;" class="carttitle"><h2 style="font-size: 38px !important; font-weight: 700; ">Gennemgang</h2></td>
                                            </tr>
                                        </table>            
                                    </div>
                                    <?php if( $rev > 11 ) : ?>
                                        <p style="text-align: left; font-size: 16px">Jeres evner i forhold til analyse og rapportering er imponerende. I konsoliderer data på en effektiv måde, hvilket betyder, at I kan trække vigtige indsigter ud og give fremsynede forretningsråd til jeres kunder. De skridt, I har taget, gør jer til en del af det innovative mindretal – kun 7 % of vores respondenter var meget enig i påstanden om, at de får indsigt i deres kundebase ved at benchmarke data på tværs af deres portefølje.</p>
                                        <p style="text-align: left; font-size: 16px; padding-top: 10px;">Efterhånden som ny teknologi kommer frem, vil det være muligt for jer at fortsætte med at forbedre jeres services og gøre jeres dataanalyse endnu mere brugbar. Dette muliggør nem deling af data med jeres kunder. I kan samarbejde om at løse vigtige problemer og hjælpe dem med at træffe bedre beslutninger, baseret på hvad I kan se bag tallene – hvilket til gengæld fører til gladere kunder og nye muligheder for indtægter fra rådgivningsservices.</p>
                                    <?php elseif( $rev < 5 ) : ?>
                                        <p style="text-align: left; font-size: 16px">På nuværende tidspunkt er I ikke i stand til at maksimere værdien af jeres kunders data. De data, I har, er ikke samlet ét sted, og der findes ingen nem måde at udtrække de indsigter, som ligger skjult. I har masser af tal, men kun lidt værdi. Den gode nyhed er, at I ikke er alene – kun 9 % af vores respondenter svarede, at de kan bruge deres systemer til at foretage en detaljeret analyse af hver konto eller hele deres kundeportefølje.</p>
                                        <p style="text-align: left; font-size: 16px; padding-top: 10px;">Det er tid til at starte med at forbedre jeres virksomheds analytiske evner ved at forbinde jeres data på en klar og letforståelig måde. Det vil hjælpe jer til at se, hvordan I kan råde kunder i forhold til industritrends og hjælpe dem med at opnå vigtige milepæle.</p>
                                    <?php else : ?>
                                        <p style="text-align: left; font-size: 16px">I har taget klare skridt til at forbedre jeres virksomheds analytiske evner. Ved at benchmarke data mod best practice og forbedre samarbejdsværktøjer har I bygget et solidt fundament, som firmaet kan bygge videre på.</p>
                                        <p style="text-align: left; font-size: 16px; padding-top: 10px;">Nu er I klar til at gå videre og skabe rådgivningsydelser i verdensklasse, bygget på stærk dataanalyse. I kan se ud over tallene til Insights, som hjælper jeres kunder, og skaber markant forandring i jeres forhold med dem.</p>
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
    <div class="chart-box" style="padding-top: 28px;height:670px;">
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
                                                <td style="padding: 0; padding-left: 10px; width: 85%" class="carttitle"><h2 style="font-size: 38px !important; font-weight: 700; ">Rådgivning</h2></td>
                                            </tr>
                                        </table>            
                                    </div>
                                    <?php if( $adv > 11 ) : ?>
                                        <p style="text-align: left; font-size: 16px; padding-top:0;">I er allerede godt i gang med at transformere jeres firma. I er gået videre fra regnskabets kernetjenester og har taget rollen som betroet partner på jer. I bruger kunders data til at kunne tilbyde en bred vifte af værdiskabende services.</p>
                                        <p style="padding-top: 10px; text-align: left; font-size: 16px">Men tempoet af teknologisk forandring går kun hurtigere, og hver ny innovation øger jeres evne til at kunne tilbyde rådgivningsydelser i verdensklasse. Eller øge evnerne hos jeres konkurrenter. Så hold øje med nye udviklinger og sørg for at reagere på dem.</p>
                                    <?php elseif( $adv < 5 ) : ?>
                                        <p style="text-align: left; font-size: 16px; padding-top:0;">Det virker, som om I sidder fast i traditionelle regnskabsydelser og leveringen af complianceservices. I har nok ikke gjort store fremskridt i opbygningen af en konsekvent – og markant indtægtskilde fra rådgivningsydelser. Selvom I ikke er alene på det punkt – f.eks. pegede kun 14 % af respondenterne i vores research på rådgivningsydelser som deres primære indtægtskilde – er den hurtige udvikling af disse services med hjælp af teknologi hurtigt ved at blive et presserende emne. 76 % af vores respondenter ser rådgivning som den største bidragyder til deres indtægter over de næste fem år.</p>
                                        <p style="padding-top: 10px; text-align: left; font-size: 16px">I kan hurtigt forbedre situationen ved at gøre bedre brug af jeres kundedata. Saml dem på ét datalagringssted, og gør dem tilgængelige for jeres team. Giv dem dernæst analyseværktøjer, så de kan se på tværs af jeres kundeportefølje efter trends og problemer, som fører til en rådgivningsdiskussion. Men det er ikke det hele. Bevæbnet med opdaterede data og værktøjerne til nemt at analysere dem, kan jeres team give kunder indsigter og råd, som forandrer deres forretninger.</p>
                                    <?php else : ?>
                                        <p style="text-align: left; font-size: 16px; padding-top:0;">I har taget skridt i retning mod konsolidering af kundedata, endda automatisering af regnskabsworkflows. I er godt på vej til at transformere jeres complianceservices. Men I har stadig noget at gøre, inden I kan forvandle disse data til nye rådgivningsydelser og indtægter.</p>
                                        <p style="padding-top: 10px; text-align: left; font-size: 16px">Bevæbnet med de rigtige analyser, rapporteringsværktøjer og konsoliderede kundedata placerer I jer selv det bedst mulige sted, så I kan se trends, efterhånden som de kommer frem, og være i stand til at respondere med råd i realtid, som har en positiv virkning på jeres kunders forretninger. Denne transformation fra for det meste at tilbyde complianceservices til at være førende inden for rådgivning er noget, som kun 13 % af respondenterne i vores research siger, at de har opnået, så det gælder bare om at slå til. Ændringer, I foretager jer i dag i forhold til jeres services, færdigheder, og teknologiske investeringer, betyder, at I er bedst stillet for at kunne udvide jeres tjenester til rådgivningsydelser før jeres konkurrenter.</p>
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
<div class="full-width" style="background-color: #ffffff; padding-top: 0; margin-top: 0;height:410px;">
    <table cellpadding="0" cellpadding="0" style="padding-left: 66px; padding-right: 66px; padding-top: 0; margin-top: 0px;">
        <tr>
            <td style="padding-top: 50px; padding-bottom: 30px; text-align: left;">
                <table  cellpadding="0" cellpadding="0" style="padding: 0; margin: 0;">
                    <tr>
                        <td>
                            <h2 style="color: #012e44; padding-top: 0; margin-top: 0; padding-bottom: 28px;  font-size: 34px; margin-bottom: 0px; line-height: 36px; font-weight: 700;">Hvad nu?</h2>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <table class="chart-title" cellpadding="0" cellpadding="0" style="padding: 0; margin: 0;">
                                <tr>
                                <?php if( $total > 47 ) : ?>
                                    <td style="width: 48%; padding-right: 4%;">
                                        <p style="color: #012e44; padding-bottom: 19px; font-size: 19px; line-height: 26px; font-weight: 400;">I har nået dette niveau af digital modenhed ved at være kloge, når det kommer til jeres teknologistrategi, implementering og investeringer.</p>
                                        <p style="color: #708ea8; padding-bottom: 10px; font-size: 16px; line-height: 26px; font-weight: 400;">Det har gjort det muligt for jer at forblive forrest og åbne op for indtægtskilder fra de rådgivningsydelser, som så mange firmaer leder efter.</p></td>
                                    <td style="width: 48%;">
                                        <p style="color: #708ea8; padding-bottom: 0px; font-size: 16px; line-height: 26px; padding-left: 10px; font-weight: 400;">Så hvorfor stå stille nu og lade de andre indhente jer? Det er der Silverfin kan hjælpe. Vores prisvindende cloudplatform driver connected accounting ved nogle af verdens førende firmaer. Og vores kraftige analyse- og rapporteringsværktøjer giver jer de data og indsigter, I skal bruge for at kunne være den mest betroede rådgiver for jeres kunder.</p>
                                    </td>
                                <?php elseif( $total < 21 ) : ?>
                                    <td style="width: 48%; padding-right: 4%;">
                                        <p style="color: #012e44; padding-bottom: 19px; font-size: 19px; line-height: 26px; font-weight: 400;">Med connected accounting får man adgang til de data, værktøjer og folk, I skal bruge for at kunne arbejde hurtigt, effektivt og nøjagtigt – og for at kunne transformere jeres compliancearbejde.</p>
                                        <p style="color: #708ea8; padding-bottom: 10px; font-size: 16px; line-height: 26px; font-weight: 400;">Det betyder, at finansdata ikke længere er lagret i siloer eller usammenhængende processer på tværs af firmaet. Jeres succes med connected accounting afhænger af den teknologi, I bruger.</p></td>
                                    <td style="width: 48%;">
                                        <p style="color: #708ea8; padding-bottom: 19px; font-size: 16px; line-height: 26px; padding-left: 10px; font-weight: 400;">Silverfins cloudplatform integrerer med alle jeres kunders regnskabs- og finanssystemer for at indsamle vigtige data, uanset hvad kilden er. Med Silverfin arbejder I altid med den eneste version af sandheden, og I deler real-time data med kunder og kolleger. Nar I har standardiseret jeres data og processer, kan I automatisere rapportering og workflows og være på vej til at blive connected accountants.</p>
                                    </td>
                                <?php else : ?>
                                    <td style="width: 48%; padding-right: 4%;">
                                        <p style="color: #012e44; padding-bottom: 19px; font-size: 19px; line-height: 26px; font-weight: 400;">Jeres kunders krav ændrer sig. Det er ikke nok blot at tilbyde compliance services.</p>
                                        <p style="color: #708ea8; padding-bottom: 10px; font-size: 16px; line-height: 26px; font-weight: 400;">Kunderne vil i højere og højere grad have værdiskabende rådgivningsservices. Selvom I viser en fornuftig grad af digital modenhed, er den dårlige nyhed, at jeres konkurrenter i øjeblikket er bedre stillet til at imødekomme kundernes ønsker, efterhånden som de udvikler sig.</p></td>
                                    <td style="width: 48%;">
                                        <p style="color: #708ea8; padding-bottom: 0px; font-size: 16px; line-height: 26px; padding-left: 10px; font-weight: 400;">Silverfins cloudbaserede platform forbinder med alle jeres kunders regnskabs- og finanssystemer for at bringe jer alle de data, I har brug for – uanset hvad kilden er. Vi automatiserer jeres complianceregnskab-workflows, hvilket forbedrer jeres hastighed, nøjagtighed og rentabilitet. Dernæst giver vores kraftige analyse- og rapporteringsværktøjer jer de data og de indsigter, I skal bruge for at kunne være den mest betroede rådgiver for jeres kunder.</p>
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
<div class="full-width" style="background-size: cover;background-color: #01355c; background-repeat: repeat; background-position: left bottom; text-align: center; padding: 0; margin: 0;  background-image: url({{asset('/icons/footer-image.jpg')}}); ">
    <table cellpadding="0" cellpadding="0" style="padding-left: 66px; padding-right: 66px; margin-top: 20px;">
        <tr>
            <td style="padding-top: 250px; padding-bottom: 250px; text-align: center;">
                <table  cellpadding="0" cellpadding="0" style="padding: 0; margin: 0;">
                    <tr>
                        <td>
                            <div class="chart-title" style="height:186px;max-width:680px;margin:0 auto;">
                                <h2 style="color: #012e44; padding-top: 0px; margin-top: 20px; font-size: 38px; line-height: 46px; text-align: center;"> <strong style="color: #012e44; margin-top: 20px; letter-spacing: 0.5px !important; margin-bottom: 20px; font-weight: 700;">
                                <?php if ( $total > 47 ) {
                                    echo "Book en gratis connected accounting-workshop, og identificer nye muligheder for at kapitalisere på jeres teknologiinvestering.";
                                } else {
                                    echo "Book en gratis connected accounting-workshop, og lav en plan for jeres forandring i dag.";
                                }?>
                                </strong></h2>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <table cellpadding="0" cellpadding="0" style="padding-left: 0px; padding-right: 0px; padding-top: 20px;padding-bottom: 22px; text-align: center;">
                                <tr>
                                    <td>
                                        <table style="background: #057ee1; padding: 0 20px; width: 300px; height: 68px; margin: 10px auto 0 auto; border-radius: 0;"  cellpadding="0" cellpadding="0">
                                            <tr>
                                                <td>
                                                    <a style="color: #ffffff; line-height: 68px; font-size: 20px; font-weight:400; text-decoration: none;" href="https://www.silverfin.com/demo" title="Book a free workshop" target="_blank"> <strong>Book en gratis workshop</strong> </a>
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
                "labels":['Live Data','Konsolidering','Samarbejde'],
                
                "datasets":[
                    {
                        'label': 'Dine resultater', 'data': [<?php echo $chart1;?>],'backgroundColor': 'rgba(77, 192, 222, 0.3)','borderColor': 'rgba(77, 192, 222, 1)'
                    }, 
                    {
                        'label': 'Gennemsnitlig score',  'data': [3.1,2.9,4.1],'backgroundColor': 'rgba(5,125,224, 0.3)','borderColor': 'rgba(5,125,224, 1)'
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
                "labels":[['Automatiserede workflows'],['Elektronisk','kommunikation'],['Realtids','rapportering']],
                "datasets":[
                    {
                        'label': 'Dine resultater', 'data': [<?php echo $chart2;?>],'backgroundColor': 'rgba(77, 192, 222, 0.3)','borderColor': 'rgba(77, 192, 222, 1)'
                    }, 
                    {
                        'label': 'Gennemsnitlig score',  'data': [3.7,3.9,3.4],'backgroundColor': 'rgba(5,125,224, 0.3)','borderColor': 'rgba(5,125,224, 1)'
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
                "labels":['Workflowstatus','Benchmarking','Analyse'],
                "datasets":[{
                        'label': 'Dine resultater', 'data': [<?php echo $chart3;?>],'backgroundColor': 'rgba(77, 192, 222, 0.3)','borderColor': 'rgba(77, 192, 222, 1)'
                    }, 
                    {
                        'label': 'Gennemsnitlig score',  'data': [3.4,2.7,2.9],'backgroundColor': 'rgba(5,125,224, 0.3)','borderColor': 'rgba(5,125,224, 1)'
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
                "labels":[['Automatiserede alarmer'],['Forretnings-', 'administration'],['Rådgivning']],
                "datasets":[
                    {
                        'label': 'Dine resultater', 'data': [<?php echo $chart4;?>],'backgroundColor': 'rgba(77, 192, 222, 0.3)','borderColor': 'rgba(77, 192, 222, 1)'
                    }, 
                    {
                        'label': 'Gennemsnitlig score',  'data': [2.5,2.9,3.3],'backgroundColor': 'rgba(5,125,224, 0.3)','borderColor': 'rgba(5,125,224, 1)'
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