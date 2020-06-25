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
<title>Les résultats de votre comptable connecté</title>
<style type="text/css">
@font-face {font-family: 'Cera Pro'; src: url('{{asset('/fonts/CeraPro-Light.ttf')}}') format('truetype'); font-weight: 300; font-style: normal; }
@font-face {font-family: 'Cera Pro'; src: url('{{asset('/fonts/CeraPro-Regular.otf')}}') format('opentype'); font-weight: 400; font-style: normal; }
@font-face {font-family: 'Cera Pro'; src: url('{{asset('/fonts/CeraPro-Medium.ttf')}}') format('truetype'); font-weight: 500; font-style: normal; }
@font-face {font-family: 'Cera Pro'; src: url('{{asset('/fonts/CeraPro-Black.ttf')}}') format('truetype'); font-weight: 900; font-style: normal; }
@font-face {font-family: 'Cera Pro'; src: url('{{asset('/fonts/CeraPro-Bold.otf')}}') format('opentype'); font-weight: 700; font-style: normal; }
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
                <td class="left-right-space" style="padding-top: 70px; padding-bottom: 48px; text-align: left;">
                    <h1 style="color: #012e44; font-size: 22px; line-height: 40px; padding-bottom: 15px; font-family: 'Cera Pro'; letter-spacing: -0.5px; letter-spacing: 0; font-weight: 400;">Les résultats de votre comptable connecté</h1>
                    <h2 style="color: #012e44; font-family: 'Cera Pro';  font-weight: 700; font-size: 48px; letter-spacing: 0.5px; line-height: 52px; height:104px;">
                    <?php if ( $total > 47 ) {
                        echo "Félicitations,<br>vous êtes connecté";
                    } elseif ( $total < 21 ) {
                        echo "Il est temps de changer";
                    } else {
                        echo "Vous êtes sur la bonne voie";
                    }?>
                    </h2>
                </td>
            </tr>           
        </table>
</div>
<div class="chart-title left-right-space" style="padding-top: 40px; padding-bottom: 15px; margin: 0;height:350px;">
    <table cellpadding="0" cellpadding="0">
        <tr>
            <td>
                <h2 style="padding: 0; margin: 0; padding-bottom: 20px; font-size: 36px;  font-family: 'Cera Pro'; font-weight: 700; letter-spacing: 0.5px;">Vos résultats expliqués</h2>
            </td>
        </tr>
        <tr>
            <?php if( $total > 47 ) : ?>
                <td style="padding: 0; margin: 0; width: 48%; padding-right: 4%;">
                    <p style="padding-bottom: 0; color: #012e44; padding-top: 10px; margin-top: 0; font-size: 17px; line-height: 27px; margin-bottom: 0; font-weight: 400;">Félicitations, nos recherches montrent que vous avez une avance sur vos concurrents lorsqu'il s'agit d'utiliser la technologie cloud.</p>
                    <p style="padding-bottom: 0; padding-top: 20px; margin-top: 0; font-size: 16px; line-height: 26px; margin-bottom: 0;">Le fait d'être un comptable connecté vous permet, à vous et à vos clients, d'accéder à une version de la vérité, quand vous en avez besoin, à partir de n'importe quel appareil connecté.</p>
                </td>
                <td style="padding: 0; margin: 0; width: 48%;">
                    <p style="padding-bottom: 0; padding-top: 10px; margin-top: 0; font-size: 16px; line-height: 26px; margin-bottom: 0; padding-right: 10px;">En automatisant le travail de conformité, vous êtes dans une position idéale pour récupérer du temps et utiliser vos données pour fournir des services de conseil à valeur ajoutée et assurer la pérennité de votre entreprise. Mais avec l'évolution rapide de la technologie, l'immobilisme n'est pas une option. Vous devez rester au courant des dernières innovations pour garder une avance.</p>
                </td>
            <?php elseif( $total < 21 ) : ?>
                <td style="padding: 0; margin: 0; width: 48%; padding-right: 4%;">
                    <p style="padding-bottom: 0; color: #012e44; padding-top: 10px; margin-top: 0; font-size: 17px; line-height: 27px; margin-bottom: 0; font-weight: 400;">Vous risquez d'être laissé pour compte par vos clients et vos concurrents.</p>
                    <p style="padding-bottom: 0; padding-top: 20px; margin-top: 0; font-size: 16px; line-height: 26px; margin-bottom: 0;">Vous n'avez pas accès en temps réel à toutes les données financières dont vous avez besoin pour faire votre travail, vous vous appuyez sur un trop grand nombre de processus et de systèmes manuels, et les tâches essentielles de reporting et de conformité prennent du temps. Le manque d'uniformité au sein de</p>
                </td>
                <td style="padding: 0; margin: 0; width: 48%;">
                    <p style="padding-bottom: 0; padding-top: 10px; margin-top: 0; font-size: 16px; line-height: 26px; margin-bottom: 0; padding-right: 10px;">l'entreprise peut également augmenter le risque que des erreurs soient commises. L'avenir est la comptabilité connectée, mais à de nombreux points de vue, vous devez avoir l'impression de travailler de façon autonome. Vous avez du mal à collaborer avec vos collègues, la communication avec vos clients est inefficace et difficile, et il n'y a pas (ou peu) de processus de travail standardisés au sein de votre entreprise que vous pouvez suivre.</p>
                </td>
            <?php else : ?>
                <td style="padding: 0; margin: 0; width: 48%; padding-right: 4%;">
                    <p style="padding-bottom: 0; color: #012e44; padding-top: 10px; margin-top: 0; font-size: 17px; line-height: 27px; margin-bottom: 0; font-weight: 400;">Votre utilisation de la technologie vous aide à rationaliser une grande partie de votre travail quotidien.</p>
                    <p style="padding-bottom: 0; padding-top: 20px; margin-top: 0; font-size: 16px; line-height: 26px; margin-bottom: 0;">Par exemple, vous avez accès à certaines données en temps réel, mais probablement pas à l'ensemble de votre portefeuille de clients ; ou vous pouvez intégrer un certain nombre de solutions comptables, mais pas toutes. Par conséquent, il peut y avoir des </p>
                </td>
                <td style="padding: 0; margin: 0; width: 48%;">
                    <p style="padding-bottom: 0; padding-top: 10px; margin-top: 0; font-size: 16px; line-height: 26px; margin-bottom: 0; padding-right: 10px;">incohérences dans la prestation des services entre les clients, ce qui rend la normalisation et l'automatisation des processus difficiles à réaliser. Et sans données consolidées et cohérentes à l'échelle de l'entreprise, vous êtes incapable d'identifier les tendances dans votre portefeuille de clients ou de voir où les services de conseil sont nécessaires. Il vous reste encore quelques étapes à franchir pour passer du statut de rapporteur de conformité à celui de conseiller de confiance.</p>
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
                                        <h3 style="font-size: 14px;  font-family: 'Cera Pro'; font-weight: 700; color: #01355c;">Voilà où vous vous trouvez.</h3>
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
                                        <h3 style="font-size: 14px; color: #01355c; font-family: 'Cera Pro'; font-weight: 700;">Voilà où vous vous trouvez.</h3>
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
                                        <h3 style="font-size: 14px; color: #01355c; font-family: 'Cera Pro'; font-weight: 700;">Voilà où vous vous trouvez.</h3>
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
                                        <h3 style="font-size: 14px; color: #01355c; font-family: 'Cera Pro'; font-weight: 700;">Voilà où vous vous trouvez.</h3>
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
                                                    Vous disposez de toutes vos données en un seul endroit, et elles sont standardisées pour l'ensemble de votre portefeuille. &nbsp; &nbsp; &nbsp; </p>
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
                                                    <p style="{{ $wfclassp }}">
                                                    Vous avez tous vos rapports et documents de travail automatisés en temps réel. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>
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
                                                    <p style="{{ $revclassp }}">
                                                    Vous êtes en mesure de créer un aperçu approfondi de votre portefeuille et d'effectuer une analyse comparative par rapport aux meilleures pratiques.</p>
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
                                                    <p style="{{ $advclassp }}">
                                                    Des actions prédictives peuvent vous être proposées pour conseiller les clients de manière proactive.  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
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
        <h2 style="padding-top:0; font-size: 26px; margin-top: 0; padding-bottom: 20px; font-weight: 700; ">Vos résultats en détail - et comment vous vous comparez à vos pairs</h2>
        <p style="padding-top: 5px; line-height: 26px; font-size: 19px; padding-bottom: 20px; padding-right: 15px;">Nous avons comparé vos réponses aux notes moyennes fournies lors de notre enquête sur les tendances technologiques en comptabilité, afin que vous puissiez comparer vos capacités à celles de vos concurrents.</p>
    </div>

    <div class="chart-box" style="height:520px;">
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
                                                <td style="padding: 0; padding-left: 0px; width: 85%;" class="carttitle"><h2 style="font-size: 38px !important; font-weight: 700; ">Données</h2></td>
                                            </tr>
                                        </table>            
                                    </div>
                                    <?php if( $full > 11 ) : ?>
                                        <p style="text-align: left; font-size: 16px">Félicitations, vous êtes au sommet de votre stratégie de données. Votre adoption de la technologie à des points clés signifie que vous êtes en mesure de fournir un service rapide et efficace à vos clients. Plus important encore, vous vous êtes donné toutes les chances de réussir dans le secteur concurrentiel de la comptabilité d'aujourd'hui.</p>
                                        <p style="text-align: left; font-size: 16px; padding-top: 10px;">Dans notre recherche récente, les deux plus grandes menaces à la réussite future citées par les répondants étaient l'accès à la bonne technologie et les compétences de l'équipe. Votre défi consiste maintenant à suivre les tendances de l'industrie et à vous assurer que vous anticipez les nouvelles technologies sans y réagir. Au fur et à mesure que les activités de vos clients évoluent, vous devez évoluer avec eux et vous assurer que vous pouvez toujours leur fournir l'information opportune et pertinente dont ils ont besoin.</p>
                                    <?php elseif( $full < 5 ) : ?>
                                        <p style="text-align: left; font-size: 16px">Vous faites partie des 24 % de professionnels de la comptabilité qui nous ont dit que leurs données ne sont pas encore consolidées dans un centre central. Vos informations financières ne sont pas mises à jour automatiquement, ce qui signifie que vos rapports sont souvent périmés dès qu'ils sont complets. Bien que vous ne soyez pas seul, la mauvaise nouvelle est que plus d'un tiers des répondants à notre récent sondage de recherche nous ont dit avoir accès à des données en direct. Pendant que vos concurrents progressent, vous avez encore du travail à faire.</p>
                                        <p style="text-align: left; font-size: 16px; padding-top: 10px;">Aujourd'hui, le succès de la comptabilité repose sur une stratégie de données unifiée qui vous permet de voir en un coup d'œil l'ensemble de la performance financière de vos clients et de leur fournir des conseils éclairés en fonction de ce que vous voyez. En regroupant vos données sur une plateforme unique, vous pouvez garantir la cohérence de la livraison au sein de votre équipe et vous assurer qu'aucune information cruciale ne soit perdue de vue.</p>
                                    <?php else : ?>
                                        <p style="text-align: left; font-size: 16px">Vous avez pris des mesures pour moderniser votre stratégie de données et vous disposez d'informations cruciales en temps réel, ce qui vous permet de fournir une quantité limitée d'analyses actualisées à vos clients. Mais votre stratégie demeure incomplète, ce qui signifie que votre prestation de services demeurera incohérente et que vous n'aurez pas toujours l'information nécessaire sous la main.</p>
                                        <p style="text-align: left; font-size: 16px; padding-top: 10px;">Dans notre récente recherche, 37 % des professionnels de la comptabilité nous ont dit que le fait de ne pas suivre l'évolution des demandes des clients constitue la principale menace à leur succès futur. Les professionnels d'aujourd'hui doivent fournir des conseils proactifs au moment où ils en ont le plus besoin pour satisfaire leurs clients. Il est essentiel de créer une stratégie de données connectées dans laquelle toutes les informations clés sont mises à jour instantanément, sans aucun effort manuel.</p>
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
                                                <td style="padding: 0; padding-left: 2px; width: 75%" class="carttitle"><h2 style="font-size: 38px !important; font-weight: 700;">Flux de travail</h2></td>
                                            </tr>
                                        </table>            
                                    </div>
                                    <?php if( $wf > 11 ) : ?>
                                        <p style="text-align: left; font-size: 16px">Bravo, vous avez adopté des workflows standardisés et automatisés, qui vous permettront de rationaliser vos tâches quotidiennes, de réduire considérablement la charge de travail liée aux rapports et de fournir des résultats plus précis à vos clients.</p>
                                        <p style="padding-top: 10px; text-align: left; font-size: 16px">En adoptant une approche cohérente des flux de travail, vous vous donnez de grandes chances de succès pour l'avenir. Maintenant, vous devez continuer de progresser, en exploitant les nouvelles technologies pour continuer à optimiser ces flux de travail et à en automatiser de nouveaux.</p>
                                    <?php elseif( $wf < 5 ) : ?>
                                        <p style="text-align: left; font-size: 16px">Vous n’avez pas de flux de travail et de processus cohérents au sein de votre entreprise, ce qui signifie que les tâches de routine prennent trop de temps et peuvent être sujettes à des erreurs. Chaque membre de l’équipe a une façon différente de travailler, de sorte que vos clients sont susceptibles de recevoir des prestations incohérantes.</p>
                                        <p style="padding-top: 10px; text-align: left; font-size: 16px">Cela devrait être une préoccupation immédiate pour vous, car plus des deux tiers des répondants à notre récent sondage nous ont dit qu’ils avaient déjà une façon normalisée de travailler. Il est important que vous continuiez à vous améliorer pour relever les défis posés par vos concurrents et vos clients. Dans notre récent sondage auprès des professionnels de la comptabilité, 21 % d’entre eux nous ont dit qu’ils peuvent développer leurs propres flux de travail, rapports et services en utilisant leur plateforme technologique. En suivant leur exemple, vous serez en mesure d’optimiser vos services de garantir les meilleures pratiques.</p>
                                    <?php else : ?>
                                        <p style="text-align: left; font-size: 16px">La bonne nouvelle, c'est que vous avez pris des mesures importantes pour normaliser et automatiser vos flux de travail, ce qui ne peut qu'aider votre entreprise à croître. Vos pratiques de travail quotidiennes sont saines et vos équipes sont capables de collaborer.</p>
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
                                                <td style="padding: 0; padding-left: 0px; width: 75%;" class="carttitle"><h2 style="font-size: 38px !important; font-weight: 700; ">Revue</h2></td>
                                            </tr>
                                        </table>            
                                    </div>
                                    <?php if( $rev > 11 ) : ?>
                                        <p style="text-align: left; font-size: 16px">Vos capacités d'analyse de données et de reporting sont impressionnantes. Vous consolidez les données de manière efficace, ce qui vous permet d'extraire des informations clés et de fournir des conseils d'affaires avant-gardistes à vos clients. Les mesures que vous avez prises font de vous une minorité innovatrice - seulement 7 % de nos répondants sont tout à fait d'accord avec l'énoncé selon lequel ils peuvent obtenir un aperçu de leur clientèle en comparant les données de leur portefeuille.</p>
                                        <p style="text-align: left; font-size: 16px; padding-top: 10px;">Au fur et à mesure de nouvelles technologies, vous serez en mesure d'améliorer sans cesse vos services et de rendre votre analyse de données encore plus puissante. Cela vous permettra de partager sans effort des données avec vos clients, de collaborer avec eux pour résoudre des problèmes clés et de les aider à prendre de meilleures décisions en fonction de ce que vous voyez derrière les chiffres - ce qui, à son tour, mènera à des clients plus heureux et de nouvelles opportunités de revenus de services de conseil.</p>
                                    <?php elseif( $rev < 5 ) : ?>
                                        <p style="text-align: left; font-size: 16px">En ce moment, vous ne parvenez pas à maximiser la valeur des données de vos clients. Les données que vous avez ne se trouvent pas au même endroit et il n'y a pas de moyen facile d'extraire les informations cachées qui se trouvent en dessous. Vous avez beaucoup de chiffres, mais peu de valeur. La bonne nouvelle, c'est que vous n'êtes pas seul - seulement 9 % des répondants à notre sondage ont dit qu'ils peuvent utiliser leurs systèmes pour effectuer une analyse détaillée de chaque compte ou de l'ensemble de leur portefeuille client.</p>
                                        <p style="text-align: left; font-size: 16px; padding-top: 10px;">Il est temps de commencer à améliorer les capacités analytiques de votre entreprise en rassemblant vos données sous une forme claire et facile à comprendre. Cela vous aidera à voir où vous pouvez conseiller vos clients sur les tendances de l'industrie et les aider à franchir des étapes clés.</p>
                                    <?php else : ?>
                                        <p style="text-align: left; font-size: 16px">Vous avez certainement fait des progrès pour améliorer les capacités analytiques de votre entreprise. En comparant les données aux meilleures pratiques et en améliorant les outils de collaboration avec les clients, vous avez établi une base solide sur laquelle l'entreprise peut se développer.</p>
                                        <p style="text-align: left; font-size: 16px; padding-top: 10px;">Vous êtes maintenant prêt à aller de l'avant et à bâtir des services de conseil de classe mondiale fondés sur une solide analyse des données. Vous pouvez regarder au-delà des chiffres pour trouver les idées qui aident vos clients et changent fondamentalement la nature de votre relation avec eux.</p>
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
                                                <td style="padding: 0; padding-left: 10px; width: 85%" class="carttitle"><h2 style="font-size: 38px !important; font-weight: 700; ">Conseil</h2></td>
                                            </tr>
                                        </table>            
                                    </div>
                                    <?php if( $adv > 11 ) : ?>
                                        <p style="text-align: left; font-size: 16px; padding-top:0;">La transformation de votre société est déjà bien engagée. Vous avez dépassé les pratiques comptables de base et adopté le rôle de partenaire de confiance, en utilisant les données de vos clients pour fournir une gamme de services à valeur ajoutée.</p>
                                        <p style="padding-top: 10px; text-align: left; font-size: 16px">Mais le rythme de l'évolution technologique ne fait que s'accélérer, et chaque nouvelle innovation augmentera votre capacité à fournir des services consultatifs de classe mondiale. Ou augmentez la capacité de vos concurrents. Gardez donc un œil sur les nouveaux développements et assurez-vous d'y réagir.</p>
                                    <?php elseif( $adv < 5 ) : ?>
                                        <p style="text-align: left; font-size: 16px; padding-top:0;">Vous semblez enraciné dans les pratiques comptables traditionnelles et la prestation de services de conformité. Vous n'avez probablement pas fait de progrès significatifs dans l'établissement d'une source de revenus constante - et importante - provenant des services-conseils. Bien que vous ne soyez pas le seul à cet égard - par exemple, seulement 14 % de nos répondants ont identifié les services consultatifs comme leur principale source de revenu - le développement rapide de ces services et l'utilisation de la technologie pour aider devient rapidement une question urgente. 76 % de nos répondants considèrent les services-conseils comme leur principale source de revenus au cours des cinq prochaines années.</p>
                                        <p style="padding-top: 10px; text-align: left; font-size: 16px">Vous pouvez rapidement améliorer la situation en faisant un meilleur usage de vos données clients. Regroupez le tout dans une seule base de données et rendez-la accessible à votre équipe. Donnez-leur ensuite les outils d'analyse qui leur permettront d'examiner votre portefeuille de clients à la recherche de tendances et d'enjeux qui suscitent une discussion consultative. Mais ce n'est pas tout. Munie de données à jour et d'outils permettant de les analyser facilement, votre équipe peut donner à vos clients des conseils et des informations qui transforment leur entreprise.</p>
                                    <?php else : ?>
                                        <p style="text-align: left; font-size: 16px; padding-top:0;">Vous avez pris des mesures pour consolider les données de vos clients et même automatiser vos processus comptables. Vous êtes sur la bonne voie pour transformer vos services de conformité. Mais il reste encore du travail à faire avant de transformer ces données en nouveaux services de conseil et en revenus.</p>
                                        <p style="padding-top: 10px; text-align: left; font-size: 16px">Grâce à des analyses, des outils de reporting et des données clients consolidées, vous serez en mesure de voir les tendances au fur et à mesure qu'elles se dessinent et de réagir avec des conseils en temps réel qui auront un impact positif sur l'activité de vos clients. Cette transformation de la prestation de services de conformité à la prestation de services de conseils est quelque chose que seulement 13 % des répondants de notre sondage disent avoir réussi à réaliser, alors tout est à jouer. Les changements que vous apportez aujourd'hui à vos investissements dans les services, les compétences et la technologie vous placeront dans la meilleure position pour étendre votre offre de services aux services de conseil avant vos concurrents.</p>
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
<div class="full-width" style="background-color: #ffffff; padding-top: 20px; margin-top: 0;height:454px;">
    <table cellpadding="0" cellpadding="0" style="padding-left: 66px; padding-right: 66px; padding-top: 0; margin-top: 0px;">
        <tr>
            <td style="padding-top: 50px; padding-bottom: 40px; text-align: left;">
                <table  cellpadding="0" cellpadding="0" style="padding: 0; margin: 0;">
                    <tr>
                        <td>
                            <h2 style="color: #012e44; padding-top: 0; margin-top: 0; padding-bottom: 30px;  font-size: 36px; margin-bottom: 0px; line-height: 40px; font-weight: 700;">Que dois-je faire maintenant ?</h2>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <table class="chart-title" cellpadding="0" cellpadding="0" style="padding: 0; margin: 0;">
                                <tr>
                                <?php if( $total > 47 ) : ?>
                                    <td style="width: 48%; padding-right: 4%;">
                                        <p style="color: #012e44; padding-bottom: 19px; font-size: 18px; line-height: 26px; font-weight: 400;">Vous avez atteint ce haut niveau de maturité numérique en faisant preuve d'intelligence dans votre stratégie technologique, votre adoption et vos investissements.</p>
                                        <p style="color: #708ea8; padding-bottom: 10px; font-size: 17px; line-height: 26px; font-weight: 400;">Cela vous a permis de garder une longueur d'avance sur vos concurrents et de tirer des revenus des services-conseils que tant d'entreprises recherchent.</p></td>
                                    <td style="width: 48%;">
                                        <p style="color: #708ea8; padding-bottom: 0px; font-size: 17px; line-height: 26px; padding-left: 10px; font-weight: 400;">Alors pourquoi ne pas bouger maintenant et laisser les autres vous rattraper ? C'est là que Silverfin peut vous aider. Notre plateforme de cloud computing primée alimente la comptabilité connectée dans certaines des plus grandes entreprises du monde. Et nos puissants outils d'analyse et de reporting vous fournissent les données et les informations dont vous avez besoin pour devenir le conseiller le plus fiable de vos clients.</p>
                                    </td>
                                <?php elseif( $total < 21 ) : ?>
                                    <td style="width: 48%; padding-right: 4%;">
                                        <p style="color: #012e44; padding-bottom: 16px; font-size: 17px; line-height: 26px; font-weight: 400;">En tant que comptable connecté, vous avez accès aux données, aux outils et aux personnes dont vous avez besoin pour travailler rapidement, efficacement et avec précision - et pour transformer votre travail de conformité. Cela signifie qu'il n'y a plus de données financières stockées en silos ou de processus incohérents au sein de votre entreprise.</p>
                                        <p style="color: #708ea8; padding-bottom: 8px; font-size: 17px; line-height: 26px; font-weight: 400;">Votre succès en tant que comptable connecté dépend de la technologie que vous utilisez.</p></td>
                                    <td style="width: 48%;">
                                        <p style="color: #708ea8; padding-bottom: 0px; font-size: 17px; line-height: 26px; padding-left: 10px; font-weight: 400;">La plateforme cloud de Silverfin s'intègre à tous les systèmes comptables et financiers de vos clients pour extraire les données critiques, quelle que soit leur source. Avec Silverfin, vous travaillez toujours à partir d'une seule version de la réalité, partageant des données en temps réel avec vos clients et collègues. Une fois que vous avez normalisé vos données et vos processus, vous pouvez automatiser le reporting et les workflows, et commencer votre parcours pour devenir un comptable connecté.</p>
                                    </td>
                                <?php else : ?>
                                    <td style="width: 48%; padding-right: 4%;">
                                        <p style="color: #012e44; padding-bottom: 19px; font-size: 18px; line-height: 26px; font-weight: 400;">Les besoins de vos clients changent. Il ne suffit pas d'offrir des services de conformité.</p>
                                        <p style="color: #708ea8; padding-bottom: 10px; font-size: 17px; line-height: 26px; font-weight: 400;">De plus en plus, vos clients exigent des services de conseil à valeur ajoutée. Bien que vous démontriez un degré raisonnable de maturité numérique, la mauvaise nouvelle est que vos concurrents sont actuellement mieux placés pour répondre aux besoins changeants de vos clients.</p></td>
                                    <td style="width: 48%;">
                                        <p style="color: #708ea8; padding-bottom: 0px; font-size: 17px; line-height: 26px; padding-left: 10px; font-weight: 400;">La plateforme cloud de Silverfin se connecte aux systèmes comptables et financiers de vos clients pour vous apporter toutes les données dont vous avez besoin, quelle que soit leur source. Nous automatisons vos workflows de comptabilité de conformité, améliorant ainsi votre rapidité, votre précision et votre rentabilité. Ensuite, nos puissants outils d'analyse et de reporting vous fournissent les données et les informations dont vous avez besoin pour devenir le conseiller le plus fiable de vos clients.</p>
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
            <td style="padding-top: 273px; padding-bottom: 273px; text-align: center;">
                <table  cellpadding="0" cellpadding="0" style="padding: 0; margin: 0;">
                    <tr>
                        <td>
                            <div class="chart-title" style="height:138px;max-width:680px;margin:0 auto;">
                                <h2 style="color: #012e44; padding-top: 0px; margin-top: 20px; font-size: 38px; line-height: 46px; text-align: center;"> <strong style="color: #012e44; margin-top: 20px; letter-spacing: 0.5px !important; margin-bottom: 20px; font-weight: 700;">
                                <?php if ( $total > 47 ) {
                                    echo "Identifiez de nouvelles opportunités pour capitaliser sur votre investissement technologique.";
                                } else {
                                    echo "Construisez votre propre plan pour le changement dès aujourd'hui.";
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
                                        <table style="background: #057ee1; padding: 0 20px; width: 400px; height: 68px; margin: 10px auto 0 auto; border-radius: 0;"  cellpadding="0" cellpadding="0">
                                            <tr>
                                                <td>
                                                    <a style="color: #ffffff; line-height: 68px; font-size: 20px; font-weight:400; text-decoration: none;" href="https://www.silverfin.com/fr/demo" title="Réservez un workshop gratuit" target="_blank"> <strong>Réservez un workshop gratuit</strong> </a>
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
                "labels":['Données','Consolidation','Collaboration'],
                
                "datasets":[
                    {
                        'label': 'Vos résultats', 'data': [<?php echo $chart1;?>],'backgroundColor': 'rgba(77, 192, 222, 0.3)','borderColor': 'rgba(77, 192, 222, 1)'
                    }, 
                    {
                        'label': 'Score moyen',  'data': [3.1,2.9,4.1],'backgroundColor': 'rgba(5,125,224, 0.3)','borderColor': 'rgba(5,125,224, 1)'
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
                "labels":[['Flux de travail', 'automatisés'],['Communications','électroniques'],['Rapports','en temps','réel']],
                "datasets":[
                    {
                        'label': 'Vos résultats', 'data': [<?php echo $chart2;?>],'backgroundColor': 'rgba(77, 192, 222, 0.3)','borderColor': 'rgba(77, 192, 222, 1)'
                    }, 
                    {
                        'label': 'Score moyen',  'data': [3.7,3.9,3.4],'backgroundColor': 'rgba(5,125,224, 0.3)','borderColor': 'rgba(5,125,224, 1)'
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
                "labels":[['Statut des flux', 'de travail'],['Analyse', 'comparative'],['Analyse']],
                "datasets":[{
                        'label': 'Vos résultats', 'data': [<?php echo $chart3;?>],'backgroundColor': 'rgba(77, 192, 222, 0.3)','borderColor': 'rgba(77, 192, 222, 1)'
                    }, 
                    {
                        'label': 'Score moyen',  'data': [3.4,2.7,2.9],'backgroundColor': 'rgba(5,125,224, 0.3)','borderColor': 'rgba(5,125,224, 1)'
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
                "labels":[['Alertes', 'automatisées'],['Gestion des','affaires'],['Conseil']],
                "datasets":[
                    {
                        'label': 'Vos résultats', 'data': [<?php echo $chart4;?>],'backgroundColor': 'rgba(77, 192, 222, 0.3)','borderColor': 'rgba(77, 192, 222, 1)'
                    }, 
                    {
                        'label': 'Score moyen',  'data': [2.5,2.9,3.3],'backgroundColor': 'rgba(5,125,224, 0.3)','borderColor': 'rgba(5,125,224, 1)'
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