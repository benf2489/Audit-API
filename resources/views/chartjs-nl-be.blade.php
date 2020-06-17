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
<title>Jouw connected accountant resultaten</title>
<style type="text/css">
@font-face {font-family: 'Cera Pro'; src: url('{{asset('/fonts/CeraPro-Light.ttf')}}') format('truetype'); font-weight: 300; font-style: normal; }
@font-face {font-family: 'Cera Pro'; src: url('{{asset('/fonts/CeraPro-Regular.ttf')}}') format('truetype'); font-weight: 400; font-style: normal; }
@font-face {font-family: 'Cera Pro'; src: url('{{asset('/fonts/CeraPro-Medium.ttf')}}') format('truetype'); font-weight: 500; font-style: normal; }
@font-face {font-family: 'Cera Pro'; src: url('{{asset('/fonts/CeraPro-Black.ttf')}}') format('truetype'); font-weight: 900; font-style: normal; }
@font-face {font-family: 'Cera Pro'; src: url('{{asset('/fonts/CeraPro-Bold.ttf')}}') format('truetype'); font-weight: 700; font-style: normal; }
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
.chart-box p { font-size: 14px !important; line-height: 22px !important; }
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
</head>
<body>
<div class="banner-box" style="background-color: #01355c; background-size: cover; background-repeat: repeat; background-position: bottom right; margin: 0; padding: 0; position: relative; margin-top: -10px; background-image: url({{asset('/icons/header-image.jpg')}});">
    <!-- Top Banner Background image size width:1340px and height:650px -->
     <div class="header left-right-space" style="padding-top: 50px; padding-bottom: 0; margin: 0;">
        <table  cellpadding="0" cellpadding="0" style="padding-top: 30px; padding-bottom: 0; margin: 0;">
            <tr>
                <td class="logo" style="width: 100%; padding-top: 0; margin-top: 0; ">
                    <img style="width: 190px; height:100px;display: block;" src="{{asset('/icons/colour-logo.svg')}}" />
                </td>
            </tr>
        </table>
    </div>
        <table cellpadding="0" cellpadding="0">
            <tr>
                <td class="left-right-space" style="padding-top: 80px; padding-bottom: 80px; text-align: left;">
                    <h1 style="color: #012e44; font-size: 24px; line-height: 40px; padding-bottom: 15px; font-family: 'Cera Pro'; letter-spacing: -0.5px; letter-spacing: 0; font-weight: 400;">Jouw connected accountant resultaten</h1>
                    <h2 style="color: #012e44; font-family: 'Cera Pro';  font-weight: 700; font-size: 48px; letter-spacing: 0.5px; line-height: 52px;">
                    <?php if ( $total > 47 ) {
                        echo "Proficiat, jij bent connected";
                    } elseif ( $total < 21 ) {
                        echo "Tijd voor verandering";
                    } else {
                        echo "Je bent op goede weg";
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
                <h2 style="padding: 0; margin: 0; padding-bottom: 20px; font-size: 36px;  font-family: 'Cera Pro'; font-weight: 700; letter-spacing: 0.5px;">Jouw resultaten toegelicht</h2>
            </td>
        </tr>
        <tr>
            <?php if( $total > 47 ) : ?>
                <td style="padding: 0; margin: 0; width: 48%; padding-right: 4%;">
                    <p style="padding-bottom: 0; color: #012e44; padding-top: 10px; margin-top: 0; font-size: 17px; line-height: 27px; margin-bottom: 0; font-weight: 400;">Proficiat, ons onderzoek toont aan dat je de concurrentie voor bent als het gaat om je gebruik van cloud technologie.</p>
                    <p style="padding-bottom: 0; padding-top: 20px; margin-top: 0; font-size: 16px; line-height: 26px; margin-bottom: 0;">Als connected accountant hebben jij en je klanten toegang tot één versie van de waarheid, op ieder moment, vanaf elk apparaat. Door het automatiseren van compliance-werkzaamheden</p>
                </td>
                <td style="padding: 0; margin: 0; width: 48%;">
                    <p style="padding-bottom: 0; padding-top: 10px; margin-top: 0; font-size: 16px; line-height: 26px; margin-bottom: 0; padding-right: 10px;">sta je in de perfecte positie om tijd te winnen en je data te gebruiken om waardevolle adviesverlening te leveren en je bedrijf toekomstbestendig te maken. Maar nu de technologie aan een razend tempo verandert, is stilstaan geen optie. Je moet steeds op de hoogte blijven van de laatste ontwikkelingen om deze voorsprong te blijven uitbouwen.</p>
                </td>
            <?php elseif( $total < 21 ) : ?>
                <td style="padding: 0; margin: 0; width: 48%; padding-right: 4%;">
                    <p style="padding-bottom: 0; color: #012e44; padding-top: 10px; margin-top: 0; font-size: 17px; line-height: 27px; margin-bottom: 0; font-weight: 400;">Je loopt het risico ingehaald te worden door jouw klanten en concurrenten.</p>
                    <p style="padding-bottom: 0; padding-top: 20px; margin-top: 0; font-size: 16px; line-height: 26px; margin-bottom: 0;">Je hebt geen realtime toegang tot al de financiële gegevens die je nodig hebt om je werk te doen, je vertrouwt op te veel handmatige processen en systemen, en de belangrijkste reporting en compliance taken zijn nog steeds tijdrovend.</p>
                </td>
                <td style="padding: 0; margin: 0; width: 48%;">
                    <p style="padding-bottom: 0; padding-top: 10px; margin-top: 0; font-size: 16px; line-height: 26px; margin-bottom: 0; padding-right: 10px;">Inconsistentie binnen het bedrijf kan ook de kans op fouten vergroten. De toekomst is connected accounting, maar in veel opzichten moet je nu wellicht nog het gevoel hebben dat je op je zelf werkt en niet connected. Het is moeilijk om samen te werken met collega’s, communicatie met de klant is ondoeltreffend en weinig tot geen van je processen zijn gestandaardiseerd.</p>
                </td>
            <?php else : ?>
                <td style="padding: 0; margin: 0; width: 48%; padding-right: 4%;">
                    <p style="padding-bottom: 0; color: #012e44; padding-top: 10px; margin-top: 0; font-size: 17px; line-height: 27px; margin-bottom: 0; font-weight: 400;">Het gebruik van technologie helpt je bij het stroomlijnen van heel wat van je dagelijks werk.</p>
                    <p style="padding-bottom: 0; padding-top: 20px; margin-top: 0; font-size: 16px; line-height: 26px; margin-bottom: 0;">Je hebt bijvoorbeeld toegang tot enkele realtime gegevens, maar waarschijnlijk nog niet over het hele portfolio heen. Of je kan integreren met een aantal boekhoudoplossingen, maar nog niet met allemaal.Dit zorgt ervoor dat je niet elke klant op dezelfde manier kan behandelen, </p>
                </td>
                <td style="padding: 0; margin: 0; width: 48%;">
                    <p style="padding-bottom: 0; padding-top: 10px; margin-top: 0; font-size: 16px; line-height: 26px; margin-bottom: 0; padding-right: 10px;">waardoor het moeilijk is om processen te standaardiseren en automatiseren. En zonder geconsolideerde data, en consistentie over het kantoor heen, is het niet mogelijk om trends te identificeren in je klantenportefeuille of te zien waar adviesverlening nodig is. Je zal nog enkele stappen moeten ondernemen om de volledige overgang te maken van “compliance reporter” naar “trusted advisor”.</p>
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
                                        <h3 style="font-size: 16px;  font-family: 'Cera Pro'; font-weight: 700; color: #01355c;">Hier is waar je je nu bevindt.</h3>
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
                                        <h3 style="font-size: 16px; color: #01355c; font-family: 'Cera Pro'; font-weight: 700;">Hier is waar je je nu bevindt.</h3>
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
                                        <h3 style="font-size: 16px; color: #01355c; font-family: 'Cera Pro'; font-weight: 700;">Hier is waar je je nu bevindt.</h3>
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
                                        <h3 style="font-size: 16px; color: #01355c; font-family: 'Cera Pro'; font-weight: 700;">Hier is waar je je nu bevindt.</h3>
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
                                                </td><td style="width: 0px;"></td>
                                                <td><h2 style="{{ $fullclassh2 }}">fullsight</h2></td>
                                            </tr>
                                        </table>
                                        <table  cellpadding="0" cellpadding="0" class="content-info">
                                            <tr>
                                                <td style="padding-top: 5px;"> 
                                                    <p style="{{ $fullclassp }}">
                                                    U hebt al uw gegevens op één plaats, en het is gestandaardiseerd in uw hele portefeuille. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </p>
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
                                                </td><td style="width: 0px;"></td>
                                                <td><h2 style="{{ $wfclassh2 }}">hindsight</h2></td>
                                            </tr>
                                        </table>
                                        <table  cellpadding="0" cellpadding="0" class="content-info">
                                            <tr>
                                                <td style="padding-top: 5px;"> 
                                                    <p style="{{ $wfclassp }}">U heeft al uw rapportages en werkdocumenten geautomatiseerd in real-time.&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>
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
                                                </td><td style="width: 0px;"></td>
                                                <td><h2 style="{{ $revclassh2 }}">insight</h2></td>
                                            </tr>
                                        </table>
                                        <table  cellpadding="0" cellpadding="0" class="content-info">
                                            <tr>
                                                <td style="padding-top: 5px;">  
                                                    <p style="{{ $revclassp }}">U bent in staat om diepgaand inzicht in uw portefeuille te creëren en te benchmarken ten opzichte van de best practices.</p>
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
                                                </td><td style="width: 0px;"></td>
                                                <td><h2 style="{{ $advclassh2 }}">foresight</h2></td>
                                            </tr>
                                        </table>
                                        <table  cellpadding="0" cellpadding="0" class="content-info">
                                            <tr>
                                                <td style="padding-top: 5px;"> 
                                                    <p style="{{ $advclassp }}">U kunt met voorspellende acties worden aangezet om klanten proactief te adviseren.&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
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
        <h2 style="padding-top:0; font-size: 28px; margin-top: 0; padding-bottom: 25px; font-weight: 700; ">Uw resultaten in detail - en hoe u zich verhoudt ten opzichte van uw collega's</h2>
        <p style="padding-top: 5px; line-height: 28px; font-size: 19px; padding-bottom: 20px; padding-right: 15px;">We hebben uw antwoorden vergeleken met de gemiddelde scores die we tijdens onze technologische trends in het boekhoudkundig onderzoek hebben meegedeeld, zodat u uw capaciteiten kunt vergelijken met die van uw concurrenten.</p>
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
                                        <p style="text-align: left; font-size: 16px">Proficiat, je hebt de perfecte datastrategie. Je past technologie toe op de belangrijkste punten waardoor je in staat bent om je klanten snel en efficiënt van dienst te zijn. Bovendien heb je jezelf alle kansen gegeven om succesvol te worden in de huidige competitieve accountancysector.</p>
                                        <p style="text-align: left; font-size: 16px; padding-top: 10px;">In ons recente onderzoek zeggen de respondenten dat de twee grootste bedreigingen voor hun toekomstig succes de toegang tot de juiste technologie en de vaardigheden van het team zijn. Jouw uitdaging is nu om op gelijke hoogte te blijven met trends in de sector en ervoor te zorgen dat je anticipeert en niet reageert op nieuwe technologieën. Naarmate de bedrijven van je klanten evolueren, moet je samen met hen evolueren en ervoor zorgen dat je altijd de tijdige en inzichtelijke informatie kan verstrekken die zij nodig hebben.</p>
                                    <?php elseif( $full < 5 ) : ?>
                                        <p style="text-align: left; font-size: 16px">Je maakt deel uit van de 24% van de accounting professionals die ons hebben verteld dat hun gegevens nog niet geconsolideerd zijn in één centrale hub. Jouw financiële informatie wordt niet automatisch bijgewerkt, wat betekent dat je rapporten vaak een verouderde versie van de realiteit is. Hoewel je niet alleen bent, is het minder goede nieuws voor jou dat meer dan een derde van de respondenten in onze recente onderzoeksenquête ons vertelde dat ze wél toegang hebben tot live gegevens. Terwijl je concurrenten vooruitgang boeken, heb jij nog wat werk te doen.</p>
                                        <p style="text-align: left; font-size: 16px; padding-top: 10px;">Het succes in accounting vandaag hangt af van een goede datastrategie, waarbij je de volledige financiële prestaties van je klanten in één oogopslag kan zien en op basis daarvan inzichtelijk advies kan geven. Door je gegevens op één enkel platform te brengen, garandeer je consistentie voor het hele team en zorg je ervoor dat er geen cruciale informatie uit het oog wordt verloren.</p>
                                    <?php else : ?>
                                        <p style="text-align: left; font-size: 16px">Je hebt stappen ondernomen om je datastrategie te moderniseren en je hebt sommige cruciale informatie in realtime beschikbaar, waardoor je jouw klanten in beperkte mate actuele analyses bieden. Maar je strategie blijft dus nog onvolledig, waardoor ook je dienstverlening inconsistent blijft en je niet altijd over de nodige informatie beschikt.</p>
                                        <p style="text-align: left; font-size: 16px; padding-top: 10px;">In ons recente onderzoek vertelde 37% van de accounting professionals dat hun grootste bedreiging voor toekomstig succes is dat ze de veranderende eisen van hun klanten niet kunnen bijbenen. De accountants van vandaag moeten proactief advies geven op de momenten wanneer dat het meest nodig is. Enkel zo kunnen ze klanten tevreden houden. Daarom is het van vitaal belang om een samenhangende datastrategie te creëren waarbij alle belangrijke informatie onmiddellijk wordt bijgewerkt en steeds ter beschikking is zonder enige manuele inspanning.</p>
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
                                        <p style="text-align: left; font-size: 16px">Goed gedaan, je hebt gestandaardiseerde en geautomatiseerde workflows ingevoerd. Dit kan dagelijkse taken stroomlijnen, de reporting last aanzienlijk verminderen en de resultaten voor de klanten nauwkeuriger maken.</p>
                                        <p style="padding-top: 10px; text-align: left; font-size: 16px">Door op een consistente manier te werken met workflows heb je jezelf een grote kans gegeven op toekomstig succes. Nu moet je steeds verder ontwikkelen, nieuwe technologieën inzetten om deze workflows te blijven optimaliseren en daarnaast ook extra workflows automatiseren.</p>
                                    <?php elseif( $wf < 5 ) : ?>
                                        <p style="text-align: left; font-size: 16px">Je hebt geen consistente workflows en processen binnen je bedrijf, wat betekent dat routinetaken te veel tijd in beslag nemen en vatbaar zijn voor fouten. Elk teamlid heeft een andere manier van werken, waardoor de soort dienstverlening aan de klant wellicht inconsistent is. Dit zou een onmiddellijke zorg voor jou moeten zijn, aangezien meer dan twee derde van de respondenten in ons recente onderzoek vertelden dat ze wel al een gestandaardiseerde manier van werken hadden.</p>
                                        <p style="padding-top: 10px; text-align: left; font-size: 16px">Door je workflows te standaardiseren, kan je sjablonen maken voor dagelijkse reporting- en compliance-werkzaamheden, zodat je team tijd heeft voor meer dankbare - en niet te vergeten commercieel waardevolle - taken. Naarmate je bedrijf groeit, is het ook van vitaal belang om ervoor te zorgen dat het hele team volgens dezelfde normen werkt.</p>
                                    <?php else : ?>
                                        <p style="text-align: left; font-size: 16px">Het goede nieuws is dat je de belangrijke stappen hebt gezet om je workflows te standaardiseren en automatiseren, wat je kantoor helpt groeien. Je dagelijkse taken verlopen degelijk en je team is in staat om goed samen te werken.</p>
                                        <p style="padding-top: 10px; text-align: left; font-size: 16px">Het is echter belangrijk dat je blijft verbeteren zodat je steeds het hoofd kan bieden aan uitdagingen die komen van je concurrenten of klanten. Uit ons recente onderzoek bij accounting professionals bleek dat 21% hun eigen workflows, rapporten en diensten kunnen ontwikkelen met behulp van hun technologieplatform. Door hun voorbeeld te volgen, kan je jouw diensten optimaliseren en te allen tijde de beste service garanderen.</p>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div class="chart-box" style="padding-bottom: 0; padding-top: 80px;height:610px;">
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
                                                <td style="padding: 0; padding-left: 0px; width: 75%;" class="carttitle"><h2 style="font-size: 38px !important; font-weight: 700; ">Review</h2></td>
                                            </tr>
                                        </table>            
                                    </div>
                                    <?php if( $rev > 11 ) : ?>
                                        <p style="text-align: left; font-size: 16px">Je data-analyse en reporting mogelijkheden zijn indrukwekkend. Je consolideert gegevens op een efficiënte manier, zodat je belangrijke inzichten kan verkrijgen en je klanten vooruitstrevend advies kan geven. Doordat je deze stappen nam, behoor je tot de kleine minderheid van innovatieve accountants. Slechts 7% van onze respondenten is het sterk eens met de stelling dat ze inzicht kunnen krijgen in hun klantenbestand door het benchmarken van gegevens over hun gehele portfolio.</p>
                                        <p style="text-align: left; font-size: 16px; padding-top: 10px;">Naarmate er nieuwe technologie ontstaat, zal jij in staat zijn om je dienstverlening te blijven verbeteren en je data-analyse nog krachtiger te maken. Dit zorgt ervoor dat je moeiteloos gegevens kan delen met je klanten, kan samenwerken met hen om belangrijke problemen op te lossen en hen kan helpen om betere beslissingen te nemen op basis van wat je achter de cijfers ziet - wat op zijn beurt zal leiden tot meer tevreden klanten en opportuniteiten om extra inkomsten uit adviesverlening te halen.</p>
                                    <?php elseif( $rev < 5 ) : ?>
                                        <p style="text-align: left; font-size: 16px">Op dit moment slaag je er nog niet in om nuttig om te springen met de data van je klanten en er het maximale uit te halen. De gegevens die je nu hebt, staan niet op één plek en er is geen eenvoudige manier om de onderliggende inzichten te achterhalen. Je hebt veel getallen, maar weinig waarde. Het goede nieuws is dat je niet de enige bent - slechts 9% van onze respondenten zegt dat ze in staat zijn om hun systemen te gebruiken om een gedetailleerde analyse van een account of hun hele klantenportefeuille te voltooien.</p>
                                        <p style="text-align: left; font-size: 16px; padding-top: 10px;">Het is tijd om te beginnen met het verbeteren van de analytische mogelijkheden van je kantoor door je gegevens in een duidelijke, gemakkelijk te begrijpen vorm samen te brengen. Dit zal jou helpen om te zien waar je klanten kan adviseren over trends in de sector en hen kan ondersteunen om belangrijke mijlpalen te bereiken.</p>
                                    <?php else : ?>
                                        <p style="text-align: left; font-size: 16px">Je hebt zeker al enkele goede stappen gezet om de analytische capaciteiten van je kantoor te verbeteren. Door data te vergelijken met best practices en de samenwerkingstools voor klanten te verbeteren, heb je een solide basis gelegd voor de ontwikkeling van je kantoor.</p>
                                        <p style="text-align: left; font-size: 16px; padding-top: 10px;">Nu ben je klaar om verder te bouwen aan adviesdiensten van wereldklasse, gebaseerd op een sterke data-analyse. Diensten waarbij je verder kijkt dan de cijfers om je klant inzicht te verwerven en waarbij je de aard van je relatie met hen fundamenteel kan veranderen.</p>
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
    <div class="chart-box" style="padding-top: 0;height:650px;">
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
                                                <td style="padding: 0; padding-left: 10px; width: 85%" class="carttitle"><h2 style="font-size: 38px !important; font-weight: 700; ">Advisering</h2></td>
                                            </tr>
                                        </table>            
                                    </div>
                                    <?php if( $adv > 11 ) : ?>
                                        <p style="text-align: left; font-size: 16px; padding-top:0;">De transformatie van je kantoor is in volle gang. Je bent reeds verder gegaan dan de alledaagse boekhoudpraktijken en hebt de rol van ‘trusted advisor’ omarmd, waarbij je nu de data van klanten gebruikt om een reeks waardevolle diensten aan te bieden.</p>
                                        <p style="padding-top: 10px; text-align: left; font-size: 16px">Maar het tempo van de technologische veranderingen neemt alleen maar toe en elke nieuwe innovatie zal je vermogen om adviesverlening van wereldklasse te leveren vergroten. Of het vermogen van je concurrenten verminderen. Houd dus een oogje in het zeil voor nieuwe ontwikkelingen en reageer er zeker op.</p>
                                    <?php elseif( $adv < 5 ) : ?>
                                        <p style="text-align: left; font-size: 16px; padding-top:0;">Het lijkt erop dat je vast geworteld zit in de traditionele boekhoud praktijken en het leveren van compliance diensten. Je hebt waarschijnlijk nog geen significante vooruitgang geboekt bij het opbouwen van een consistente en aanzienlijke inkomstenbron uit adviesverlening. Hoewel je in dit opzicht niet de enige bent - zo gaf slechts 14% van onze respondenten aan dat adviesverlening hun belangrijkste bron van inkomsten is - wordt het wel belangrijk om deze diensten en de ondersteuning ervan door technologie te ontwikkelen. 76% van onze respondenten ziet adviesverlening namelijk als hun grootste inkomstenbron in de komende vijf jaar.</p>
                                        <p style="padding-top: 10px; text-align: left; font-size: 16px">Je kan de situatie snel verbeteren door beter gebruik te maken van de data van je klanten. Breng alle gegevens samen in één data opslag en maak dit toegankelijk voor heel je team. Geef hen dan de analysetools om over het hele klanten portfolio op zoek te gaan naar trends en issues om zo een adviserend gesprek op gang te brengen. Maar dat is nog niet alles. Gewapend met actuele gegevens en de tools om deze eenvoudig te analyseren, kan je team klanten inzicht en advies geven dat hun bedrijf echt verandert.</p>
                                    <?php else : ?>
                                        <p style="text-align: left; font-size: 16px; padding-top:0;">Je hebt stappen ondernomen om je klantgegevens te consolideren en zelfs je accounting workflows te automatiseren. Je bent goed op weg om je compliance diensten te transformeren. Maar er is nog werk aan de winkel vooraleer je deze data ook echt kan omzetten in innovatieve adviesverlening en hier inkomsten kan uithalen.</p>
                                        <p style="padding-top: 10px; text-align: left; font-size: 16px">Gewapend met de juiste analyse en reporting tools én geconsolideerde klantgegevens, stel je jezelf in de beste positie om trends te zien wanneer ze zich voordoen en ben je in staat om te reageren met realtime advies dat een positieve impact heeft op de activiteiten van je klanten. Deze transformatie van het leveren van grotendeels compliance diensten naar adviserende diensten is iets wat slechts 13% van de respondenten van onze enquête zegt te hebben bereikt. Veranderingen die je vandaag doorvoert in je dienstverlening, skills en technologie investeringen, zullen je in de beste positie brengen om je dienstenaanbod uit te breiden naar adviserende diensten vooraleer je concurrenten dit doen.</p>
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
<div class="full-width" style="background-color: #ffffff; padding-top: 0; margin-top: 0;height:465px;">
    <table cellpadding="0" cellpadding="0" style="padding-left: 66px; padding-right: 66px; padding-top: 0; margin-top: 0px;">
        <tr>
            <td style="padding-top: 50px; padding-bottom: 30px; text-align: left;">
                <table  cellpadding="0" cellpadding="0" style="padding: 0; margin: 0;">
                    <tr>
                        <td>
                            <h2 style="color: #012e44; padding-top: 0; margin-top: 0; padding-bottom: 28px;  font-size: 34px; margin-bottom: 0px; line-height: 36px; font-weight: 700;">Wat moet ik nu doen?</h2>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <table class="chart-title" cellpadding="0" cellpadding="0" style="padding: 0; margin: 0;">
                                <tr>
                                <?php if( $total > 47 ) : ?>
                                    <td style="width: 48%; padding-right: 4%;">
                                        <p style="color: #012e44; padding-bottom: 19px; font-size: 18px; line-height: 26px; font-weight: 400;">Je hebt deze hoge mate van digitale maturiteit bereikt door slim te zijn in je technologie strategie, adoptie en investeringen.</p>
                                        <p style="color: #708ea8; padding-bottom: 10px; font-size: 16px; line-height: 26px; font-weight: 400;">Het stelt je in staat je concurrentie voor te blijven en inkomsten te genereren uit de adviesdiensten die veel bedrijven zoeken.</p></td>
                                    <td style="width: 48%;">
                                        <p style="color: #708ea8; padding-bottom: 0px; font-size: 16px; line-height: 26px; padding-left: 10px; font-weight: 400;">Dus waarom zou je nu stilstaan en de rest jouw achterstand laten inhalen? Silverfin kan je helpen. Ons cloud-platform is de drijvende kracht achter connected accounting bij een aantal van 's werelds toonaangevende kantoren. En onze krachtige analyse- en reporting tools geven je de data en het inzicht dat je nodig hebt om de meest betrouwbare adviseur van je klanten te zijn.</p>
                                    </td>
                                <?php elseif( $total < 21 ) : ?>
                                    <td style="width: 48%; padding-right: 4%;">
                                        <p style="color: #012e44; padding-bottom: 19px; font-size: 18px; line-height: 26px; font-weight: 400;">Als een connected accountant heb je toegang tot de gegevens, tools en mensen die je nodig hebt om snel, efficiënt en accuraat te werken - bovendien kan je ook eenvoudig compliance werk transformeren.</p>
                                        <p style="color: #708ea8; padding-bottom: 10px; font-size: 16px; line-height: 26px; font-weight: 400;">Het betekent dat er geen financiële gegevens meer worden opgeslagen in silo’s of inconsistente processen binnen je kantoor. Jouw succes als connected account hangt af van de technologie die je gebruikt.</p></td>
                                    <td style="width: 48%;">
                                        <p style="color: #708ea8; padding-bottom: 0px; font-size: 16px; line-height: 26px; padding-left: 10px; font-weight: 400;">Het cloud platform van Silverfin maakt een connectie met alle boekhoud- en financiële systemen van je klanten en brengt de belangrijkste data automatisch binnen, ongeacht de bron. Met Silverfin werk je altijd vanuit een “single version of the truth” en kun je realtime data delen met klanten en collega’s. Zodra je data en processen gestandaardiseerd zijn, kan je ook jouw reporting en workflows automatiseren en aan je reis beginnen om een connected accountant te worden.</p>
                                    </td>
                                <?php else : ?>
                                    <td style="width: 48%; padding-right: 4%;">
                                        <p style="color: #012e44; padding-bottom: 19px; font-size: 18px; line-height: 26px; font-weight: 400;">De eisen van je klanten veranderen. Enkel en alleen compliance diensten aanbieden is niet langer voldoende.</p>
                                        <p style="color: #708ea8; padding-bottom: 10px; font-size: 16px; line-height: 26px; font-weight: 400;">Je klanten vragen steeds vaker naar diensten met toegevoegde waarde, zoals advies. Hoewel je al een redelijke mate van digitale maturiteit vertoont, is het minder goede nieuws dat je concurrenten momenteel beter in staat zijn om aan de veranderende eisen van de klant te voldoen.</p></td>
                                    <td style="width: 48%;">
                                        <p style="color: #708ea8; padding-bottom: 0px; font-size: 16px; line-height: 26px; padding-left: 10px; font-weight: 400;">Het cloud platform van Silverfin maakt een connectie met de boekhoudkundige en financiële systemen van je klanten om alle gegevens te leveren die je nodig hebt - ongeacht de oorsprong. We automatiseren je compliance accounting workflows waardoor je snelheid, nauwkeurigheid en winstgevendheid toenemen. Vervolgens geven onze krachtige analyse- en reporting tools je de gegevens en het inzicht dat je nodig hebt om de meest betrouwbare adviseur van je klant te zijn.</p>
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
            <td style="padding-top: 240px; padding-bottom: 240px; text-align: center;">
                <table  cellpadding="0" cellpadding="0" style="padding: 0; margin: 0;">
                    <tr>
                        <td>
                            <div class="chart-title" style="height:138px;max-width:640px;margin:0 auto;">
                                <h2 style="color: #012e44; padding-top: 0px; margin-top: 20px; font-size: 38px; line-height: 46px; text-align: center;"> <strong style="color: #012e44; margin-top: 20px; letter-spacing: 0.5px !important; margin-bottom: 20px; font-weight: 700;">
                                <?php if ( $total > 47 ) {
                                    echo "Identificeer nieuwe opportuniteiten om te profiteren van je technologie-investering";
                                } else {
                                    echo "Bouw vandaag nog je eigen plan voor verandering";
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
                                        <table style="background: #057ee1; padding: 0 20px; width: 400px; height: 90px; margin: 10px auto 0 auto; border-radius: 8px;"  cellpadding="0" cellpadding="0">
                                            <tr>
                                                <td>
                                                    <a style="color: #ffffff; line-height: 90px; font-size: 28px; font-weight:400; text-decoration: none;" href="https://www.silverfin.com/nl/demo" title="Book a free workshop" target="_blank"> <strong>Boek een gratis workshop</strong> </a>
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
                "labels":['Live Data','Consolidatie','Samenwerking'],
                
                "datasets":[
                    {
                        'label': 'Jouw resultaten', 'data': [<?php echo $chart1;?>],'backgroundColor': 'rgba(77, 192, 222, 0.3)','borderColor': 'rgba(77, 192, 222, 1)'
                    }, 
                    {
                        'label': 'Gemiddelde score',  'data': [3.1,2.9,4.1],'backgroundColor': 'rgba(5,125,224, 0.3)','borderColor': 'rgba(5,125,224, 1)'
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
                "labels":[['Geautomatiseerde', 'Workflows'],['Elektronische','communicatie'],['Realtime','reporting']],
                "datasets":[
                    {
                        'label': 'Jouw resultaten', 'data': [<?php echo $chart2;?>],'backgroundColor': 'rgba(77, 192, 222, 0.3)','borderColor': 'rgba(77, 192, 222, 1)'
                    }, 
                    {
                        'label': 'Gemiddelde score',  'data': [3.7,3.9,3.4],'backgroundColor': 'rgba(5,125,224, 0.3)','borderColor': 'rgba(5,125,224, 1)'
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
                "labels":['Workflows Status','Benchmarking','Analyse'],
                "datasets":[{
                        'label': 'Jouw resultaten', 'data': [<?php echo $chart3;?>],'backgroundColor': 'rgba(77, 192, 222, 0.3)','borderColor': 'rgba(77, 192, 222, 1)'
                    }, 
                    {
                        'label': 'Gemiddelde score',  'data': [3.4,2.7,2.9],'backgroundColor': 'rgba(5,125,224, 0.3)','borderColor': 'rgba(5,125,224, 1)'
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
                "labels":[['Automatische', 'Alerts'],['Businesses','Management'],['Adviesverlening']],
                "datasets":[
                    {
                        'label': 'Jouw resultaten', 'data': [<?php echo $chart4;?>],'backgroundColor': 'rgba(77, 192, 222, 0.3)','borderColor': 'rgba(77, 192, 222, 1)'
                    }, 
                    {
                        'label': 'Gemiddelde score',  'data': [2.5,2.9,3.3],'backgroundColor': 'rgba(5,125,224, 0.3)','borderColor': 'rgba(5,125,224, 1)'
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