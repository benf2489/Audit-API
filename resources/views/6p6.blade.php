<?php
$fullclass = "background-color: #ebeff0;";
$wfclass = "background-color: #ebeff0;";
$revclass = "background-color: #ebeff0;";
$advclass = "background-color: #ebeff0;";
$fullclassh2 = $wfclassh2 = $revclassh2 = $advclassh2 = "line-height: 30px; font-size: 22px;";
$fullclassp = $wfclassp = $revclassp = $advclassp = "color: #012e44; font-size: 16px;";
$fullstatus = $wfstatus =  $revstatus =$advstatus = 0;
$st = 0;

$efficiency_percent_spacer = 100 - $efficiency_percent;
$decisions_percent_spacer = 100 - $decisions_percent;
$risk_percent_spacer = 100 - $risk_percent;
$customer_percent_spacer = 100 - $customer_percent;

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Your Self-Assessment results</title>
<style type="text/css">
@font-face{font-family:'DMSans';src:url('{{asset('/fonts/DMSans/DMSans-Regular.ttf')}}') format("truetype");font-style:normal;font-weight:400}
@font-face{font-family:'DMSans';src:url('{{asset('/fonts/DMSans/DMSans-Medium.ttf')}}') format("truetype");font-style:normal;font-weight:500}
@font-face{font-family:'DMSans';src:url('{{asset('/fonts/DMSans/DMSans-Bold.ttf')}}') format("truetype");font-style:normal;font-weight:700}
body { font-family: 'DMSans'; font-weight: 400; }
@page {padding: 0; margin: 0; padding-top: 0px; padding-bottom: 0px; border: none; border-collapse: collapse; font-family: 'DMSans'; font-weight: 400;  page-break-after: always;
        page-break-inside: avoid; }
div.page {page-break-after: always; page-break-inside: avoid; margin: 0; }
html, body, div, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, font, img, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, b, u, i, center, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, caption {margin: 0; padding: 0; border: 0; outline: 0; font-size: 100%; vertical-align: baseline; background: transparent; }
* { border: 0; box-sizing: content-box; color: inherit;  line-height: inherit; list-style: none; margin: 0; padding: 0; text-decoration: none; vertical-align: top; letter-spacing: 0; }
html { font-family: 'DMSans'; font-weight: 400; overflow: auto; background: #fff; cursor: default; padding: 0; margin: 0; }
body { box-sizing: border-box; margin:0; padding: 0; background: #FFF; font-family: 'DMSans'; font-weight: 400;font-size: 16px; line-height: 22px;}
h1 { font-family: 'DMSans'; font-weight: 400; }
h2 span,
h2 {font-size: 33px; line-height: 35px; font-family: 'DMSans'; font-weight: 700; color: #012e44; }
h2 span {
    color:#46bab8;
}
h2 strong {font-family: 'DMSans'; color: #012e44; font-weight: 700; }
h3, h3 span {font-size: 22px; font-family: 'DMSans'; font-weight: 700;}
p {font-family: 'DMSans'; font-weight: 400; color: #2e2d2c; font-size: 16px; line-height: 24px; padding-bottom: 10px; }
li {list-style-type: disc;display: list-item;font-family: 'DMSans'; font-weight: 700; color: #2e2d2c; font-size: 18px; line-height: 26px; padding-bottom: 10px; }
.chart-box { text-align: center; padding:0; }
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
.services-box p {font-family: 'DMSans'; font-weight: 400;  color: #012e44; font-size: 18px; }
.services-box td.min-wrapper { border: 2px solid #fff; padding: 10px 15px;  background-color: #ebeff0; width: 50%;  }
.services-box .left-side-icon, .services-box .left-side-icon * { vertical-align: middle; }
.title-box *{ vertical-align: middle; }
.services-box .left-side-icon { padding: 10px 0; }
.services-box .left-side-icon .lefticon { width: 35px; padding: 0; padding-right: 5px; }
.services-box .left-side-icon .lefticon img { width: 30px }
.content-info p { padding: 10px 0; font-family: 'DMSans';
 font-size: 18px !important; color: #012e44 !important; }
.services-box .left-side-icon h2 { padding-left: 10px; font-size: 26px !important; }
.min-wrapper.hightlight-box h2, .min-wrapper.hightlight-box p { color: #ffffff !important; }
.here-where-text { width: 50%; padding-top: 10px; }
.here-where-text h3 { display: block; width: 100%; text-align: center; font-family: 'DMSans'; font-weight: 400;  color: #01355c; padding-top: 10px; padding-bottom: 8px; }
.here-where-text .down-arrow { display: block; width: 100%; text-align: center; margin: 0 auto; padding-bottom: 5px; }
.here-where-text .down-arrow img { display: block; text-align: center; margin: 0 auto; }
.chart-section { padding:0; padding-top: 0; }
header .logo img { width: 145px; }
header .right p { font-size: 20px;  font-family: 'DMSans'; font-weight: 400;  color: #012e44; width: 100%; text-align: right; }
.left-right-space { padding-left: 66px; padding-right: 66px; }
.left-space { padding-left: 66px;position:relative; }
.left-space:before { content:'';position:absolute;height:40%;width:100%;background-color:#000000;top:61%;left:0; }
.left-space--none:before { content:none; }
img { max-width: 100%; }
html{width: 100%; height: 100%; padding: 0; margin: 0; }
@page {margin: 0cm 0cm;}
.service-box h2 {  font-family: 'DMSans'; font-weight: 700; }
.service-box p {  font-family: 'DMSans'; font-weight: 400; font-size: 15px !important; line-height: 20px !important; }
.chart-box p { font-size: 15px !important; line-height: 24px !important; }
.key-item {
    font-size: .8125rem;
    font-weight: 500;
    letter-spacing: .12em;
    text-transform: uppercase;
    color: #21303e;
    line-height: 1em;
}
.key-item:before {
    content:'';
    width: 32px;
    height: 10px;
    background: #00cec3;
    position: absolute;
    left: 0;
    top: 45%;
    -webkit-transform: translatey(-50%);
    transform: translatey(-50%);
}
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
</head>
<body>
<div class="banner-box" style="background-color: #00cec3; background-size: cover; background-repeat: no-repeat; background-position: top right; background-image: url({{asset('/icons/6point6/6P_Self_Assessment_PDF_cover.jpg')}}); margin: 0; padding: 0; position: relative; height:1403px;">
    <!-- Top Banner Background image size width:1340px and height:650px -->
     <div class="header left-right-space" style="padding-top: 76px; padding-bottom: 0; margin: 0;">
        <table  cellpadding="0" cellpadding="0" style="padding-top: 30px; padding-bottom: 0; margin: 0;">
            <tr>
                <td class="logo" style="width: 85%; padding-top: 0; margin-top: 0; ">
                    <img style="width: 150px;height:32px; display: block;" src="{{asset('/icons/6point6/6P_Logo_White.png')}}" />
                </td>
                <td class="logo" style="width: 15%; padding-top: 0; margin-top: 0; ">
                    <p>
                        <a style="color: #ffffff; line-height: 32px; font-size: 20px; font-weight:400; text-decoration: none;" href="https://6point6.co.uk/" title="Visit our website" target="_blank">
                            6point6.co.uk
                        </a>
                    </p>
                </td>
            </tr>
        </table>
    </div>
    <table cellpadding="0" cellpadding="0">
        <tr>
            <td class="left-right-space" style="width: 75%; padding-right: 4%!important;padding-top: 168px; padding-bottom: 48px; text-align: left;">
                <h1 style="color: #ffffff; font-family: 'DMSans'; font-weight: 400; font-size: 26px; line-height: 32px; padding-bottom: 35px;">Self-assessment - results:</h1>
                <h2 style="color: #ffffff; font-family: 'DMSans'; font-weight: 700; font-size: 76px; line-height: 86px; padding-bottom:53px;">
                How data-enabled are your underwriters?
                </h2>
                <p style="color: #ffffff; font-family: 'DMSans'; font-weight: 400; font-size: 30px; line-height: 40px;">Based on the answers given, here are the results of your assessment along with your recommended next steps.</p>
            </td>
            <td style="padding: 0; margin: 0; width: 21%;">&nbsp;</td>
        </tr>
    </table>
</div>
<div class="page" style="height:1403px;">
    <div class="chart-title left-right-space" style="padding-top: 104px;padding-bottom:32px; margin: 0;height:468px;">
        <table cellpadding="0" cellpadding="0">
            <tr>
                <td style="width:42%;padding-right:4%;">
                    <table cellpadding="0" cellpadding="0">
                        <tr>
                            <td style="padding-top: 30px;">
                                <?php if( $total > 799 ) : ?>
                                    <h2 style="color: #000000; font-family: 'DMSans'; font-weight: 700; font-size: 34px; line-height: 40px;margin:0 0 20px;">Overall - High</h2>
                                    <p style="color: #000000; padding:0; margin:0; font-size: 18px; line-height: 24px; font-weight: 400;">Your business is showing all the signs of becoming truly world-class in terms of data enablement and data-driven operations, and you are definitely ahead of many of your competitors. But digital transformation is a process of continuous improvement, so there is always room to grow and further reduce your risks, enhancing both operations and the service you offer to customers.</p>
                                <?php elseif( $total < 400 ) : ?>
                                    <h2 style="color: #000000; font-family: 'DMSans'; font-weight: 700; font-size: 34px; line-height: 40px;margin:0 0 20px;">Overall - Low</h2>
                                    <p style="color: #000000; padding:0; margin:0; font-size: 18px; line-height: 24px; font-weight: 400;">Your business is still at the beginning of its journey towards data enablement and there is much work yet to be done. Several factors are holding you back, limiting operational efficiency and decision-making, increasing your exposure to risk and impeding your ability to provide customers with an excellent quality of service.</p>
                                <?php else : ?>
                                    <h2 style="color: #000000; font-family: 'DMSans'; font-weight: 700; font-size: 34px; line-height: 40px;margin:0 0 20px;">Overall - Medium</h2>
                                    <p style="color: #000000; padding:0; margin:0; font-size: 18px; line-height: 24px; font-weight: 400;">Your business has made some positive progress towards data enablement and you are seeing some significant benefits as a result. However, there is still work to be done before you can achieve the world-class outcomes realised by your market-leading competitors.</p>
                                <?php endif; ?>
                            </td>
                        </tr>
                    </table>
                </td>
                <td style="padding: 0; margin: 0; width:54%;">
                    <canvas id="overallChart" width="438" height="438"></canvas>
                </td>
            </tr>
        </table>
    </div>
    <div class="chart-box left-space" style="padding-top:32px;height:575px;">
        <div class="full-width">
            <table cellpadding="0" cellpadding="0" style="background-color:#F8F9FA;position:relative;z-index:2;">
                <tr>
                    <td style="padding: 0; width: 48%; padding-right: 4%;">
                        <table cellpadding="0" cellpadding="0">
                            <tr>
                                <td style="padding: 10px; padding-top: 50px; padding-bottom: 50px;padding-left:30px;">
                                    <div width="390" height="390" style="position:relative;background-image: url({{asset('/icons/6point6/chart-bg.png')}});background-size: cover; background-repeat: no-repeat; background-position: center;width:390px;height:390px;padding-top:15px;padding-left:5px;boz-sizing:border-box;"></canvas>
                                        <canvas id="chart1" width="360" height="360"></canvas>
                                    </div>
                                    <table cellpadding="0" cellpadding="0">
                                        <tr>
                                            <td style="padding: 0; width: 28%; padding-top:40px;padding-right:4%;">
                                                <p style="color: #454553;font-weight: 400;margin: 0;text-align: left;">Key:</p>
                                            </td>
                                            <td style="padding: 0; width: 68%;padding-top:40px;">
                                                <p class="key-item" style="list-style-type: none;padding-left: 20px;margin: 0 20px 0 0;font-size: .8125rem;font-weight: 500;letter-spacing: .12em;text-transform: uppercase;color: #21303e;position: relative;line-height: 1em;">Your results</p>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td style="padding: 0; width: 48%;vertical-align:middle;">
                        <table cellpadding="0" cellpadding="0" style="width: 100%;">
                            <tr>
                                <td style="padding: 0;padding-top: 75px; padding-bottom: 50px;padding-right: 66px;">
                                    <div class="title-box">
                                        <table cellpadding="0" cellpadding="0">
                                            <tr>
                                                <td style="padding: 0;" class="carttitle">
                                                    <h2 style="color: #000000; font-family: 'DMSans'; font-weight: 700; font-size: 34px; line-height: 40px;margin:0 0 20px;padding:0;">Underwriting Business Goals</h2>
                                                    <h3 style="color: #000000; font-family: 'DMSans'; font-weight: 700; font-size: 24px; line-height: 32px;margin:0 0 20px;padding:0;">Being more efficient</h3>
                                                    <p style="color: #000000; padding:0; margin:0; font-size: 18px!important; line-height: 23px!important; font-weight: 400;">
                                                    <?php if( $efficiency_percent > 66.67 ) : ?>
                                                        You have a mature underwriting workbench in place, with the ability to capture data automatically, feeding it into AI for processing. You have automated workflows that cross teams and functions to maximise the value of your data, and your algorithms have been tuned to identify outliers and highlight faulty information early.
                                                    <?php elseif( $efficiency_percent < 33.34 ) : ?>
                                                        Your operations may be heavily reliant on manual data processing. Relevant policy and risk-related information may be spread across paper and various systems, making it hard for employees to find the information they need to be effective. The time and cost of administering policies remain stubbornly high.
                                                    <?php else : ?>
                                                        You have begun the process of adopting a modern underwriting workbench and are already seeing the benefits of enhanced data visibility. You are now able to begin using rules-based logic and automation to speed up some processing activities, allowing your employees to be more productive.
                                                    <?php endif; ?>
                                                    </p>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div class="banner-box" style="background-color: #000000; margin: 0; padding: 0; position: relative; height:192px;">
        <!-- Top Banner Background image size width:1340px and height:650px -->
        <div class="header left-right-space" style="padding-top: 80px; padding-bottom: 80px; margin: 0;">
            <table  cellpadding="0" cellpadding="0" style="padding-top: 30px; padding-bottom: 0; margin: 0;">
                <tr>
                    <td class="logo" style="width: 85%; padding-top: 0; margin-top: 0; ">
                        <img style="width: 150px;height:32px; display: block;" src="{{asset('/icons/6point6/6P_Logo_White.png')}}" />
                    </td>
                    <td class="logo" style="width: 15%; padding-top: 0; margin-top: 0; ">
                        <p>
                            <a style="color: #ffffff; line-height: 32px; font-size: 20px; font-weight:400; text-decoration: none;" href="https://6point6.co.uk/" title="Visit our website" target="_blank">
                                6point6.co.uk
                            </a>
                        </p>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>
<div class="page" style="height:1403px;">
    <div class="chart-box left-space left-space--none" style="padding-top:61px;height:575px;">
        <div class="full-width">
            <table cellpadding="0" cellpadding="0" style="background-color:#F8F9FA;position:relative;z-index:2;">
                <tr>
                    <td style="padding: 0; width: 48%; padding-right: 4%;">
                        <table cellpadding="0" cellpadding="0">
                            <tr>
                                <td style="padding: 10px; padding-top: 50px; padding-bottom: 50px;padding-left:30px;">
                                    <div width="390" height="390" style="position:relative;background-image: url({{asset('/icons/6point6/chart-bg.png')}});background-size: cover; background-repeat: no-repeat; background-position: center;width:390px;height:390px;padding-top:15px;padding-left:5px;boz-sizing:border-box;"></canvas>
                                        <canvas id="chart2" width="360" height="360"></canvas>
                                    </div>
                                    <table cellpadding="0" cellpadding="0">
                                        <tr>
                                            <td style="padding: 0; width: 28%; padding-top:40px;padding-right:4%;">
                                                <p style="color: #454553;font-weight: 400;margin: 0;text-align: left;">Key:</p>
                                            </td>
                                            <td style="padding: 0; width: 68%;padding-top:40px;">
                                                <p class="key-item" style="list-style-type: none;padding-left: 20px;margin: 0 20px 0 0;font-size: .8125rem;font-weight: 500;letter-spacing: .12em;text-transform: uppercase;color: #21303e;position: relative;line-height: 1em;">Your results</p>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td style="padding: 0; width: 48%;vertical-align:middle;">
                        <table cellpadding="0" cellpadding="0" style="width: 100%;">
                            <tr>
                                <td style="padding: 0;padding-top: 75px; padding-bottom: 50px;padding-right: 66px;">
                                    <div class="title-box">
                                        <table cellpadding="0" cellpadding="0">
                                            <tr>
                                                <td style="padding: 0;" class="carttitle">
                                                    <h3 style="color: #000000; font-family: 'DMSans'; font-weight: 700; font-size: 24px; line-height: 32px;margin:0 0 20px;padding:0;">Making better decisions</h3>
                                                    <p style="color: #000000; padding:0; margin:0; font-size: 18px!important; line-height: 23px!important; font-weight: 400;">
                                                    <?php if( $decisions_percent > 66.67 ) : ?>
                                                        You augment the skills and knowledge of your people using analytics to inform your market approach and accelerate decision-making. Your workbench allows you to integrate third-party data sources to offer additional context to your analysis as you identify new markets, personalise service and refine your operations.
                                                    <?php elseif( $decisions_percent < 33.34 ) : ?>
                                                        The information used for decision-making is relatively high-level and based on relatively small subsets of data. Almost all your decisions are manual and taken on a qualitative basis that prevents you from fully optimising your portfolio.
                                                    <?php else : ?>
                                                        Your underwriting workbench is already delivering value, helping you move away from restrictive spreadsheets and enabling your people to view product and risk assessments in one place. You are now in a position to begin process mining to identify products that are not delivering for you and your clients.
                                                    <?php endif; ?>
                                                    </p>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div class="chart-box left-space" style="height:575px;">
        <div class="full-width">
            <table cellpadding="0" cellpadding="0" style="background-color:#F8F9FA;position:relative;z-index:2;">
                <tr>
                    <td style="padding: 0; width: 48%; padding-right: 4%;">
                        <table cellpadding="0" cellpadding="0">
                            <tr>
                                <td style="padding: 10px; padding-top: 50px; padding-bottom: 50px;padding-left:30px;">
                                    <div width="390" height="390" style="position:relative;background-image: url({{asset('/icons/6point6/chart-bg.png')}});background-size: cover; background-repeat: no-repeat; background-position: center;width:390px;height:390px;padding-top:15px;padding-left:5px;boz-sizing:border-box;"></canvas>
                                        <canvas id="chart3" width="360" height="360"></canvas>
                                    </div>
                                    <table cellpadding="0" cellpadding="0">
                                        <tr>
                                            <td style="padding: 0; width: 28%; padding-top:40px;padding-right:4%;">
                                                <p style="color: #454553;font-weight: 400;margin: 0;text-align: left;">Key:</p>
                                            </td>
                                            <td style="padding: 0; width: 68%;padding-top:40px;">
                                                <p class="key-item" style="list-style-type: none;padding-left: 20px;margin: 0 20px 0 0;font-size: .8125rem;font-weight: 500;letter-spacing: .12em;text-transform: uppercase;color: #21303e;position: relative;line-height: 1em;">Your results</p>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td style="padding: 0; width: 48%;vertical-align:middle;">
                        <table cellpadding="0" cellpadding="0" style="width: 100%;">
                            <tr>
                                <td style="padding: 0;padding-top: 75px; padding-bottom: 50px;padding-right: 66px;">
                                    <div class="title-box">
                                        <table cellpadding="0" cellpadding="0">
                                            <tr>
                                                <td style="padding: 0;" class="carttitle">
                                                    <h3 style="color: #000000; font-family: 'DMSans'; font-weight: 700; font-size: 24px; line-height: 32px;margin:0 0 20px;padding:0;">Understanding the world of risk</h3>
                                                    <p style="color: #000000; padding:0; margin:0; font-size: 18px!important; line-height: 23px!important; font-weight: 400;">
                                                    <?php if( $risk_percent > 66.67 ) : ?>
                                                        Your use of third-party datasets also provides additional detail for automated risk analysis. Your AI has been tuned to identify ‘hidden’ links that indicate fraudulent activity, helping to reduce losses and strengthen profit margins. You also have a relatively mature ESG capture and reporting function that allows for better strategic planning.
                                                    <?php elseif( $risk_percent < 33.34 ) : ?>
                                                        You are heavily reliant on the institutional knowledge and experience of your people to calculate risk. Data analysis is conducted manually using basic tools like spreadsheets and lists. You may also have little or no ESG provision beyond what is legally required.
                                                    <?php else : ?>
                                                        You are increasingly using location data to better understand risk, but applications remain limited and there is still a high degree of manual processing required. Your insights into linkages between participants are improving as is your ability to detect fraud rings. You are also seeing advances in your ability to monitor and exceed ESG performance targets.
                                                    <?php endif; ?>
                                                    </p>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div class="banner-box" style="background-color: #000000; margin: 0; padding: 0; position: relative; height:192px;">
        <!-- Top Banner Background image size width:1340px and height:650px -->
        <div class="header left-right-space" style="padding-top: 80px; padding-bottom: 80px; margin: 0;">
            <table  cellpadding="0" cellpadding="0" style="padding-top: 30px; padding-bottom: 0; margin: 0;">
                <tr>
                    <td class="logo" style="width: 85%; padding-top: 0; margin-top: 0; ">
                        <img style="width: 150px;height:32px; display: block;" src="{{asset('/icons/6point6/6P_Logo_White.png')}}" />
                    </td>
                    <td class="logo" style="width: 15%; padding-top: 0; margin-top: 0; ">
                        <p>
                            <a style="color: #ffffff; line-height: 32px; font-size: 20px; font-weight:400; text-decoration: none;" href="https://6point6.co.uk/" title="Visit our website" target="_blank">
                                6point6.co.uk
                            </a>
                        </p>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>
<div class="page" style="height:1403px;">
    <div class="chart-box left-space" style="padding-top:61px;height:577px;">
        <div class="full-width">
            <table cellpadding="0" cellpadding="0" style="background-color:#F8F9FA;position:relative;z-index:2;">
                <tr>
                    <td style="padding: 0; width: 48%; padding-right: 4%;">
                        <table cellpadding="0" cellpadding="0">
                            <tr>
                                <td style="padding: 10px; padding-top: 50px; padding-bottom: 50px;padding-left:30px;">
                                    <div width="390" height="390" style="position:relative;background-image: url({{asset('/icons/6point6/chart-bg.png')}});background-size: cover; background-repeat: no-repeat; background-position: center;width:390px;height:390px;padding-top:15px;padding-left:5px;boz-sizing:border-box;"></canvas>
                                        <canvas id="chart4" width="360" height="360"></canvas>
                                    </div>
                                    <table cellpadding="0" cellpadding="0">
                                        <tr>
                                            <td style="padding: 0; width: 28%; padding-top:40px;padding-right:4%;">
                                                <p style="color: #454553;font-weight: 400;margin: 0;text-align: left;">Key:</p>
                                            </td>
                                            <td style="padding: 0; width: 68%;padding-top:40px;">
                                                <p class="key-item" style="list-style-type: none;padding-left: 20px;margin: 0 20px 0 0;font-size: .8125rem;font-weight: 500;letter-spacing: .12em;text-transform: uppercase;color: #21303e;position: relative;line-height: 1em;">Your results</p>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td style="padding: 0; width: 48%;vertical-align:middle;">
                        <table cellpadding="0" cellpadding="0" style="width: 100%;">
                            <tr>
                                <td style="padding: 0;padding-top: 75px; padding-bottom: 50px;padding-right: 66px;">
                                    <div class="title-box">
                                        <table cellpadding="0" cellpadding="0">
                                            <tr>
                                                <td style="padding: 0;" class="carttitle">
                                                    <h3 style="color: #000000; font-family: 'DMSans'; font-weight: 700; font-size: 24px; line-height: 32px;margin:0 0 20px;padding:0;">Improving customers’ lives</h3>
                                                    <p style="color: #000000; padding:0; margin:0; font-size: 18px!important; line-height: 23px!important; font-weight: 400;">
                                                    <?php if( $customer_percent > 66.67 ) : ?>
                                                        You actively use data and analytics to improve the customer experience for both sales and claims processes. Your insights allow you to tailor, personalise and automate your offering, giving customers more of what they want, faster.
                                                    <?php elseif( $customer_percent < 33.34 ) : ?>
                                                        Your efforts to improve the customer experience are heavily geared towards better training for your people. Monitoring of the CX is extremely basic and you have difficulty assessing performance because your underwriting and claims platforms do not capture the granular metrics you need to drive improvement.
                                                    <?php else : ?>
                                                        You are now using data to improve the buying experience for customers, digitising key elements of the purchasing process for instance. You have also begun to formalise the process of capturing and analysing customer experience metrics to drive automation, integrate data sources and make insights available to customers as well as employees.
                                                    <?php endif; ?>
                                                    </p>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div class="chart-box left-right-space" style="height:615px; background-color:#000000;">
        <div class="full-width">
            <table cellpadding="0" cellpadding="0" style="background-color:#000000;">
                <tr>
                    <td style="padding: 0; width: 90%; padding-right: 10%;">
                        <table cellpadding="0" cellpadding="0">
                            <tr>
                                <td style="padding-top: 110px; padding-bottom: 50px;text-align:left;">
                                    <h2 style="color: #ffffff; font-family: 'DMSans'; font-weight: 700; font-size: 34px; line-height: 40px;margin:0 0 30px;padding:0;">Data capabilities: <span><?php if( $total > 799 ) : ?>
                                        High maturity level
                                    <?php elseif( $total < 400 ) : ?>
                                        Basic maturity level
                                    <?php else : ?>
                                        Medium maturity level
                                    <?php endif; ?></span></h2>
                                    <p style="color: #ffffff; padding:0; margin:0; font-size: 20px!important; line-height: 30px!important; font-weight: 400;">
                                    <?php if( $total > 799 ) : ?>
                                        Our 6point6 Data Capability framework covers the key functional attributes required in the operating model of any organisation aiming to be successfully data-driven. It is organised by three high-level pillars, with a breakdown into thirteen key capabilities. In this assessment, we have asked questions about your underwriting goals, to give you a view on your maturity in a sample of <strong>four</strong> data capabilities relevant to them. This aligns to our approach to digital transformation—starting with your business objectives and working back to design to deliver the right level of capability to unlock value at each phase of your journey.
                                    <?php elseif( $total < 400 ) : ?>
                                        Our 6point6 Data Capability framework covers the key functional attributes required in the operating model of any organisation aiming to be successfully data-driven. It is organised by three high-level pillars, with a breakdown into thirteen key capabilities. In this assessment, we have asked questions about your underwriting goals, to give you a view on your maturity in a sample of <strong>four</strong> data capabilities relevant to them. This aligns to our approach to digital transformation—starting with your business objectives and working back to design to deliver the right level of capability to unlock value at each phase of your journey.
                                    <?php else : ?>
                                        Our 6point6 Data Capability framework covers the key functional attributes required in the operating model of any organisation aiming to be successfully data-driven. It is organised by three high-level pillars, with a breakdown into thirteen key capabilities. In this assessment, we have asked questions about your underwriting goals, to give you a view on your maturity in a sample of <strong>four</strong> data capabilities relevant to them. This aligns to our approach to digital transformation—starting with your business objectives and working back to design to deliver the right level of capability to unlock value at each phase of your journey.
                                    <?php endif; ?>
                                    <br><br><em>These evaluations are based on a sample, so are indicative, get in touch for a fuller evaluation. Don’t agree? <a href="https://6point6.co.uk/contact-us/" target="_blank" style="color:#ffffff;text-decoration:underline;">contact us</a>.</em>
                                    </p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div class="banner-box" style="background-color: #000000; margin: 0; padding: 0; position: relative; height:152px;">
        <!-- Top Banner Background image size width:1340px and height:650px -->
        <div class="header left-right-space" style="padding-top: 40px; padding-bottom: 80px; margin: 0;">
            <table  cellpadding="0" cellpadding="0" style="padding-top: 30px; padding-bottom: 0; margin: 0;">
                <tr>
                    <td class="logo" style="width: 85%; padding-top: 0; margin-top: 0; ">
                        <img style="width: 150px;height:32px; display: block;" src="{{asset('/icons/6point6/6P_Logo_White.png')}}" />
                    </td>
                    <td class="logo" style="width: 15%; padding-top: 0; margin-top: 0; ">
                        <p>
                            <a style="color: #ffffff; line-height: 32px; font-size: 20px; font-weight:400; text-decoration: none;" href="https://6point6.co.uk/" title="Visit our website" target="_blank">
                                6point6.co.uk
                            </a>
                        </p>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>
<div class="page" style="height:1403px;background-color:#000000;">
    <div class="chart-box left-right-space" style="padding-top:61px;height:356px;position: relative;z-index:2;">
        <div class="full-width">
            <table cellpadding="0" cellpadding="0" style="position:relative;">
                <tr>
                    <td style="padding: 0; width: 42%; padding-right: 4%;">
                        <table cellpadding="0" cellpadding="0">
                            <tr>
                                <td style="padding: 10px;">
                                    <img style="width: 306px;height:306px; display: block;" src="{{asset('/icons/6point6/dig-prod.png')}}" />
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td style="padding: 0; width: 54%;vertical-align:middle;">
                        <table cellpadding="0" cellpadding="0" style="width: 100%;">
                            <tr>
                                <td style="padding: 0;">
                                    <div class="title-box">
                                        <table cellpadding="0" cellpadding="0">
                                            <tr>
                                                <td style="padding: 0;" class="carttitle">
                                                    <h2 style="color: #ffffff; font-family: 'DMSans'; font-weight: 700; font-size: 24px; line-height: 32px;margin:0 0 20px;padding:0;">Digital Products: <span style="font-size: 24px; line-height: 32px;color:#46bab8;"><?php if( $digProdScore > 199 ) : ?>
                                                        High Maturity
                                                    <?php elseif( $digProdScore < 100 ) : ?>
                                                        Low Maturity
                                                    <?php else : ?>
                                                        Medium Maturity
                                                    <?php endif; ?></span></h2>
                                                    <p style="color: #ffffff; padding:0; margin:0; font-size: 17px!important; line-height: 22px!important; font-weight: 400;">
                                                    <?php if( $digProdScore > 199 ) : ?>
                                                        Data becomes useful only when it is analysed, and analysis becomes valuable only when it arrives where it can be used. A mature ‘Digital Product’ capability allows the organisation to deliver insights to colleagues and customers across various always-on tools and channels. High maturity in this capability means that investments in data talent and technology are consistently achieving value across multiple areas like operations or decision-making, enabled by a strategic data programme to achieve read-across.
                                                    <?php elseif( $digProdScore < 100 ) : ?>
                                                        Data becomes useful only when it is analysed, and analysis becomes valuable only when it arrives where it can be used. A mature ‘Digital Product’ capability allows the organisation to deliver insights to colleagues and customers across various always-on tools and channels. Low maturity in this capability can mean that investments in data talent and technology fail to realise value, because analytics outputs are not able to impact operations and decisions affecting customers and colleagues.
                                                    <?php else : ?>
                                                        Data becomes useful only when it is analysed, and analysis becomes valuable only when it arrives where it can be used. A mature ‘Digital Product’ capability allows the organisation to deliver insights to colleagues and customers across various always-on tools and channels. Medium maturity in this capability suggests that investments in data talent and technology are starting to realise value—perhaps in one area like operations or decision-making, and your objective should now be to put in place a strategic data programme to achieve read-across.
                                                    <?php endif; ?>
                                                    </p>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div class="chart-box left-right-space" style="padding-top:40px;height:356px;position: relative;z-index:2;">
        <div class="full-width">
            <table cellpadding="0" cellpadding="0" style="position:relative;">
                <tr>
                    <td style="padding: 0; width: 42%; padding-right: 4%;">
                        <table cellpadding="0" cellpadding="0">
                            <tr>
                                <td style="padding: 10px;">
                                    <img style="width: 306px;height:306px; display: block;" src="{{asset('/icons/6point6/dataops.png')}}" />
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td style="padding: 0; width: 54%;vertical-align:middle;">
                        <table cellpadding="0" cellpadding="0" style="width: 100%;">
                            <tr>
                                <td style="padding: 0;">
                                    <div class="title-box">
                                        <table cellpadding="0" cellpadding="0">
                                            <tr>
                                                <td style="padding: 0;" class="carttitle">
                                                    <h2 style="color: #ffffff; font-family: 'DMSans'; font-weight: 700; font-size: 24px; line-height: 32px;margin:0 0 20px;padding:0;">DataOps: <span style="font-size: 24px; line-height: 32px;color:#46bab8;"><?php if( $dataOpsScore > 199 ) : ?>
                                                        High Maturity
                                                    <?php elseif( $dataOpsScore < 100 ) : ?>
                                                        Low Maturity
                                                    <?php else : ?>
                                                        Medium Maturity
                                                    <?php endif; ?></span></h2>
                                                    <p style="color: #ffffff; padding:0; margin:0; font-size: 17px!important; line-height: 22px!important; font-weight: 400;">
                                                    <?php if( $dataOpsScore > 199 ) : ?>
                                                        Being successful at data requires not only the right people and technology, it also needs a way of working that promotes speed, reusability, traceability and control. A mature ‘DataOps’ capability equips the organisation with the working practices and facilities to rapidly and continuously build, test, automate and manage data pipelines that turn raw data into analysis-ready data. High maturity in this capability suggests you are now a data-led organisation with good foundations in place, using code to standardise patterns and automate practices.
                                                    <?php elseif( $dataOpsScore < 100 ) : ?>
                                                        Being successful at data requires not only the right people and technology, it also needs a way of working that promotes speed, reusability, traceability and control. A mature ‘DataOps’ capability equips the organisation with the working practices and facilities to rapidly and continuously build, test, automate and manage data pipelines that turn raw data into analysis-ready data. Low maturity in this capability can mean that entire data objectives and use cases break down—resulting in quality issues, audit failings and expensive remediation.
                                                    <?php else : ?>
                                                        Being successful at data requires not only the right people and technology, it also needs a way of working that promotes speed, reusability, traceability and control. A mature ‘DataOps’ capability equips the organisation with the working practices and facilities to rapidly and continuously build, test, automate and manage data pipelines that turn raw data into analysis-ready data. Medium maturity in this capability suggests that you are on the road to developing a data-led organisation with good foundations in place, and your objective should now be using code to standardise patterns and automate practices.
                                                    <?php endif; ?>
                                                    </p>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div class="chart-box left-right-space" style="padding-top:40px;height:356px;position: relative;z-index:2;">
        <div class="full-width">
            <table cellpadding="0" cellpadding="0" style="position:relative;">
                <tr>
                    <td style="padding: 0; width: 42%; padding-right: 4%;">
                        <table cellpadding="0" cellpadding="0">
                            <tr>
                                <td style="padding: 10px;">
                                    <img style="width: 306px;height:306px; display: block;" src="{{asset('/icons/6point6/data-science.png')}}" />
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td style="padding: 0; width: 54%;vertical-align:middle;">
                        <table cellpadding="0" cellpadding="0" style="width: 100%;">
                            <tr>
                                <td style="padding: 0;">
                                    <div class="title-box">
                                        <table cellpadding="0" cellpadding="0">
                                            <tr>
                                                <td style="padding: 0;" class="carttitle">
                                                    <h2 style="color: #ffffff; font-family: 'DMSans'; font-weight: 700; font-size: 24px; line-height: 32px;margin:0 0 20px;padding:0;">Data Science: <span style="font-size: 24px; line-height: 32px;color:#46bab8;"><?php if( $scienceScore > 199 ) : ?>
                                                        High Maturity
                                                    <?php elseif( $scienceScore < 100 ) : ?>
                                                        Low Maturity
                                                    <?php else : ?>
                                                        Medium Maturity
                                                    <?php endif; ?></span></h2>
                                                    <p style="color: #ffffff; padding:0; margin:0; font-size: 17px!important; line-height: 22px!important; font-weight: 400;">
                                                    <?php if( $scienceScore > 199 ) : ?>
                                                        Predictive modelling has long been a mainstay of pricing. Now, underwriting teams are looking for data science methods and tools to enable predictive insights to plug into operations and benefit their clients. A mature data science capability allows the organisation to apply machine learning to big data, real-time events and geospatial data, blending the best of data science with actuarial science. High maturity in this capability indicates that you have developed an ecosystem of partners and a talent pipeline for unlocking value from real-time, geospatial and decision intelligence to deploy data science across the value chain.
                                                    <?php elseif( $scienceScore < 100 ) : ?>
                                                        Predictive modelling has long been a mainstay of pricing. Now, underwriting teams are looking for data science methods and tools to enable predictive insights to plug into operations and benefit their clients. A mature data science capability allows the organisation to apply machine learning to big data, realtime events and geospatial data, blending the best of data science with actuarial science. Low maturity in this capability can mean falling behind competitors and brokers in terms of offering insightful value-add services across the value chain.
                                                    <?php else : ?>
                                                        Predictive modelling has long been a mainstay of pricing. Now, underwriting teams are looking for data science methods and tools to enable predictive insights to plug into operations and benefit their clients. A mature data science capability allows the organisation to apply machine learning to big data, real-time events, and geospatial data, blending the best of data science with actuarial science. Medium maturity in this capability suggests that you have access to the right skills (either as a service or your own small team) and have good ideas for use cases, potentially completing some proof-of-concept tests. Your objective should now be to develop an ecosystem of partners and a talent pipeline for unlocking value from real-time, geospatial and decision intelligence to deploy data science across the value chain.
                                                    <?php endif; ?>
                                                    </p>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div class="banner-box" style="background-color: #000000; margin: 0; padding: 0; position: relative; height:192px;z-index:1;">
        <!-- Top Banner Background image size width:1340px and height:650px -->
        <div class="header left-right-space" style="padding-top: 80px; padding-bottom: 80px; margin: 0;">
            <table  cellpadding="0" cellpadding="0" style="padding-top: 30px; padding-bottom: 0; margin: 0;">
                <tr>
                    <td class="logo" style="width: 85%; padding-top: 0; margin-top: 0; ">
                        <img style="width: 150px;height:32px; display: block;" src="{{asset('/icons/6point6/6P_Logo_White.png')}}" />
                    </td>
                    <td class="logo" style="width: 15%; padding-top: 0; margin-top: 0; ">
                        <p>
                            <a style="color: #ffffff; line-height: 32px; font-size: 20px; font-weight:400; text-decoration: none;" href="https://6point6.co.uk/" title="Visit our website" target="_blank">
                                6point6.co.uk
                            </a>
                        </p>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>
<div class="page" style="height:1403px;">
    <div class="chart-box left-right-space" style="padding-top:61px;height:453px;position: relative;z-index:2;background-color:#000000;padding-bottom:61px;">
        <div class="full-width">
            <table cellpadding="0" cellpadding="0" style="position:relative;">
                <tr>
                    <td style="padding: 0; width: 42%; padding-right: 4%;padding-top:41px;">
                        <table cellpadding="0" cellpadding="0">
                            <tr>
                                <td style="padding: 10px;">
                                    <img style="width: 306px;height:306px; display: block;" src="{{asset('/icons/6point6/feature.png')}}" />
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td style="padding: 0; width: 54%;padding-top:41px;vertical-align:middle;">
                        <table cellpadding="0" cellpadding="0" style="width: 100%;">
                            <tr>
                                <td style="padding: 0;">
                                    <div class="title-box">
                                        <table cellpadding="0" cellpadding="0">
                                            <tr>
                                                <td style="padding: 0;" class="carttitle">
                                                    <h2 style="color: #ffffff; font-family: 'DMSans'; font-weight: 700; font-size: 24px; line-height: 32px;margin:0 0 20px;padding:0;">Feature Engineering: <span style="font-size: 24px; line-height: 32px;color:#46bab8;"><?php if( $featureScore > 199 ) : ?>
                                                        High Maturity
                                                    <?php elseif( $featureScore < 100 ) : ?>
                                                        Low Maturity
                                                    <?php else : ?>
                                                        Medium Maturity
                                                    <?php endif; ?></span></h2>
                                                    <p style="color: #ffffff; padding:0; margin:0; font-size: 17px!important; line-height: 22px!important; font-weight: 400;">
                                                    <?php if( $featureScore > 199 ) : ?>
                                                        It’s often said that the outcomes of analytics, data science and machine learning are only as good as the data that goes in. A mature feature engineering capability equips the organisation with the know-how to transform raw data into analysis-ready data. It codifies both logic and the results into ‘stores’ so that they can be scaled into a production line in a data science factory. High maturity in this capability indicates that you are a leader in using cloud-native technology to store curated data and code libraries, enabling data science to scale at an enterprise level through containerisation techniques (e.g. Docker, Kubernetes), so that insights can be deployed throughout the value chain.
                                                    <?php elseif( $featureScore < 100 ) : ?>
                                                        It’s often said that the outcomes of analytics, data science and machine learning are only as good as the data that goes in. A mature feature engineering capability equips the organisation with the know-how to transform raw data into analysis-ready data. It codifies both the logic and the results into ‘stores’ so that they can be scaled into a production line in a data science factory. Low maturity in this capability can mean that data science investments fail to realise value, because the upstream work to generate usable insights for data science models cannot be industrialised.
                                                    <?php else : ?>
                                                        It’s often said that the outcomes of analytics, data science and machine learning are only as good as the data that goes in. A mature feature engineering capability equips the organisation with the know-how to transform raw data into analysis-ready data. It codifies both logic and the results into ‘stores’ so that they can be scaled into a production line in a data science factory. Medium maturity in this capability suggests that you have started to use cloud-native technology to store some curated data and code libraries, and your objective should now be focused on industrialisation of data science through containerisation techniques (e.g. Docker, Kubernetes) so that insights can be deployed throughout the value chain at enterprise scale.
                                                    <?php endif; ?>
                                                    </p>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div class="chart-box left-right-space" style="height:676px; background-color:#ffffff;">
        <div class="full-width">
            <table cellpadding="0" cellpadding="0" style="background-color:#ffffff;">
                <tr>
                    <td style="padding: 0; width: 90%; padding-right: 10%;">
                        <table cellpadding="0" cellpadding="0">
                            <tr>
                                <td style="padding-top: 70px; padding-bottom: 40px;text-align:left;">
                                    <h2 style="color: #000000; font-family: 'DMSans'; font-weight: 700; font-size: 34px; line-height: 40px;margin:0 0 30px;padding:0;">What to do next</h2>
                                    <?php if( $total > 799 ) : ?>
                                        <p style="color: #000000; padding:0; margin:0; font-size: 17px!important; line-height: 23px!important; font-weight: 400;">
                                        It sounds like you are leading the way in terms of data-enabled underwriting, so how do you build on your successful track record, and continue to manage risk?<br /><br />It may be worth refreshing your data mission and vision - now focus on use cases that impact not just your colleagues and the organisation, but use cases that provide long-term sustainable value for the customer, broker, and ecosystem. You can optimise your data operations and retain competitive advantage by bringing some assets and functions in-house. These include your enterprise knowledge graph (encoding how your data is connected to other data and to the real world), your feature store (your reusable library of insight-generating recipes), and your use case factory (your team and way of working for turning ideas into real-world interventions). Perhaps now is the right time to transition from a transactional to a partner relationship with the big cloud and data providers. You may be able to drive additional value from commodising the data services, solutions, and enablers that you have created along the way, and distributing them within your organisation or ecosystem.<br /><br />Ensure you have a solid business case and sponsorship for continuous monitoring and improvement of your data services and functions. For example, predictive analytics and machine learning need to constantly re-train models on new data, to reflect changes in the real world. There is a real risk of ‘drift’ in the way their outputs are used - either by users ‘gaming the system’ or simply overriding the recommendations without recourse to a consistent decisioning framework. If this results in big losses or other severe negative consequences, the fallout can hit the whole data mission.
                                        </p>
                                    <?php elseif( $total < 400 ) : ?>
                                        <p style="color: #000000; padding:0; margin:0; font-size: 20px!important; line-height: 30px!important; font-weight: 400;">
                                        Many organisations getting started with digital tend to focus on software to manage and automate parts of your operational workflow, such as low-code platforms. Even this requires you to have an executive-level view over your business through a ‘data lens’, so that scope data governance and management, and so you can plan and budget for the work to migrate, integrate and improve the quality of data needed for the expected user stories.<br /><br />You can future-proof your processes and get more value from the effort by using this as an opportunity to develop an enterprise underwriting data strategy that includes strategic value propositions for data in underwriting. This can be done in partnership with underwriting and data leaders, and will define your ambitions to generate value for your colleagues, customers, clients, and your ecosystem of partners. Turning these into business objectives—brought to life with a portfolio of use cases—is the first step towards understanding what data capabilities you need to develop and improve upon in the next 1-3 years.
                                        </p>
                                    <?php else : ?>
                                        <p style="color: #000000; padding:0; margin:0; font-size: 18px!important; line-height: 24px!important; font-weight: 400;">
                                        It looks like you have had some success with data-enabled underwriting and are on the way to being cloud-native, and are now looking for read-across on what you’ve achieved, and how to get to the next level. <br /><br />We recommend refreshing your data mission and vision - bring underwriters and data leaders together to look again at who the key beneficiaries will be for your efforts in data. This might mean looking again at use cases that impact not just your colleagues and the organisation, but use cases that provide long-term sustainable value for the customer, broker, and ecosystem. You will need to look at what 21st-century data capabilities you need and how to embed them into your operating model. Meanwhile, to build momentum and support for this next stage of development, see if you can share any assets or services across the business - for example, any enabling tools you have produced to solve problems.<br /><br />To get to the next level you will need to develop a few critical data functions and assets that will unlock value from your analytics environment or data lake - supported by tech but ideally owned by you so you retain competitive advantage. These include your enterprise knowledge graph (encoding how your data is connected to other data and to the real world), your feature store (your reusable library of insight-generating recipes), and your use case factory (your team and way of working for turning ideas into real-world interventions).
                                        </p>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div class="banner-box" style="background-color: #ffffff; margin: 0; padding: 0; position: relative; height:152px;z-index:1;">
        <!-- Top Banner Background image size width:1340px and height:650px -->
        <div class="header left-right-space" style="padding-top: 40px; padding-bottom: 80px; margin: 0;">
            <table  cellpadding="0" cellpadding="0" style="padding-top: 30px; padding-bottom: 0; margin: 0;">
                <tr>
                    <td class="logo" style="width: 85%; padding-top: 0; margin-top: 0; ">
                        <img style="width: 150px;height:32px; display: block;" src="{{asset('/icons/6point6/6P_Logo_Black.png')}}" />
                    </td>
                    <td class="logo" style="width: 15%; padding-top: 0; margin-top: 0; ">
                        <p>
                            <a style="color: #000000; line-height: 32px; font-size: 20px; font-weight:400; text-decoration: none;" href="https://6point6.co.uk/" title="Visit our website" target="_blank">
                                6point6.co.uk
                            </a>
                        </p>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>
<div class="full-width" style="height:1211px; text-align: center; padding: 0; margin: 0;background-color: #000000;">
    <table cellpadding="0" cellpadding="0" style="padding-left: 66px; padding-right: 66px;">
        <tr>
            <td style="padding-top: 250px; padding-bottom: 250px; text-align: left;vertical-align:middle;">
                <table  cellpadding="0" cellpadding="0" style="padding: 0; margin: 0;">
                    <tr>
                        <td style="padding: 0; width: 90%; padding-right: 10%;">
                            <div class="chart-title" style="text-align: left;">
                                <h3 style="color: #5f6562; font-size: 20px; line-height: 24px; text-align: left;margin-bottom:20px;">Self-assessment</h3>
                                <h2 style="color: #ffffff; font-size: 58px; line-height: 76px; text-align: left;margin-bottom:20px;">
                                    <?php if( $total > 799 ) : ?>
                                        Contact us to discuss your results in more depth and for more ideas on how to accelerate your data enablement efforts.
                                    <?php elseif( $total < 400 ) : ?>
                                        Contact us to discuss your results in more depth and for more ideas on how to accelerate your data enablement efforts.
                                    <?php else : ?>
                                        Contact us to discuss your results in more depth and for more ideas on how to accelerate your data enablement efforts.
                                    <?php endif; ?>
                                </h2>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <table cellpadding="0" cellpadding="0" style="padding-left: 0px; padding-right: 0px; padding-top: 20px;padding-bottom: 22px; text-align: left;">
                                <tr>
                                    <td>
                                        <table style="margin: 10px 0 0;"  cellpadding="0" cellpadding="0">
                                            <tr>
                                                <td>
                                                    <a style="color: #ffffff; line-height: 68px; font-size: 24px; font-weight:700; text-decoration: none;display:inline-block; border-radius: 12px;background: #CE0099;padding-left:30px;padding-right:30px;" href="https://6point6.co.uk/contact-us/" title="Get in touch" target="_blank"><strong>Get in touch</strong></a>
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
<div class="banner-box" style="background-color: #000000; margin: 0; padding: 0; position: relative; height:192px;">
    <!-- Top Banner Background image size width:1340px and height:650px -->
    <div class="header left-right-space" style="padding-top: 80px; padding-bottom: 70px; margin: 0;">
        <table  cellpadding="0" cellpadding="0" style="padding-top: 0; padding-bottom: 0; margin: 0;">
            <tr>
                <td class="logo" style="width: 85%; padding: 0; margin: 0; ">
                    <img style="width: 150px;height:32px; display: block;margin:0;padding:0;" src="{{asset('/icons/6point6/6P_Logo_White.png')}}" />
                </td>
                <td class="logo" style="width: 15%; padding: 0; margin: 0; ">
                    <p style="padding: 0; margin: 0;">
                        <a style="margin:0;padding:0;color: #ffffff; line-height: 32px; font-size: 20px; font-weight:400; text-decoration: none;" href="https://6point6.co.uk/" title="Visit our website" target="_blank">
                            6point6.co.uk
                        </a>
                    </p>
                </td>
            </tr>
        </table>
    </div>
</div>
<footer style="height:0px;margin:0;padding:0;"></footer><script type="text/javascript">
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
        document.getElementById("overallChart"), {
         "responsive": false,
            "type":"radar",
            "data":{
                "labels":[[['Being'], ['more efficent']], [['Making'], ['better'], ['decisions']],[['Understanding the'], ['world of risk']],[['Improving'], ['customers'], ['lives']]],

                "datasets":[
                    {
                        'label': 'Your results',
                        'data': [<?php echo $efficiency_percent.",".$decisions_percent.",".$risk_percent.",".$customer_percent;?>],
                        'borderColor': 'rgba(0, 206, 195, 1)',
                        'backgroundColor': 'rgba(255, 255, 255, 0)',
                        'borderWidth': 4,
                        'pointBackgroundColor': 'rgba(0, 206, 195, 1)',
                        'pointBorderColor': 'rgba(0, 206, 195, 1)',
                        'pointRadius': 3,
                        'pointHoverBackgroundColor':'rgba(0, 206, 195, 1)',
                        'pointHoverBorderColor':'rgba(0, 206, 195, 1)',
                        'pointHoverRadius': 4
                    }
                ]
            },
            "options":{
                'legend': {
                    'display': false
                },
                'maintainAspectRatio': true,
                'scale': {
                    'ticks': {
                      'display': false,
                      'maxTicksLimit': 6,
                      'beginAtZero': true,
                      'stepSize': 10,
                      'suggestedMax': 100
                    }, 
                    'pointLabels':{
                      'display': true,
                      'fontColor': '#666C69',
                      'fontSize': 11,
                      'fontFamily': 'DMSans',
                      'fontStyle': 'normal'
                    },
                    'gridLines': {
                      'color': 'rgba(211, 215, 214, 1)',
                      'circular': true
                    },
                    'angleLines': {
                        'color': 'rgba(211, 215, 214, 1)'
                    }
                }
            }
        }
    );
    new Chart(
        document.getElementById("chart1"), {
         "responsive": false,
            "type":"doughnut",
            "data":{
                "datasets":[
                    {
                        'label': 'Your results',
                        'data': [<?php echo $efficiency_percent.",".$efficiency_percent_spacer;?>],
                        'backgroundColor': ['rgba(0, 206, 195, 1)', 'rgba(255, 255, 255, 0)'],
                        'borderColor': ['rgba(0, 206, 195, 1)', 'rgba(255, 255, 255, 0)'],
                        'borderAlign': 'inner',
                        'borderWidth': 40
                    }
                ]
            },
            "options":{
                'cutoutPercentage': 75,
                'legend': {
                    'display':false
                },
                'maintainAspectRatio': true
            }
        }
    );
    new Chart(
        document.getElementById("chart2"), {
         "responsive": false,
            "type":"doughnut",
            "data":{
                "datasets":[
                    {
                        'label': 'Your results',
                        'data': [<?php echo $decisions_percent.",".$decisions_percent_spacer;?>],
                        'backgroundColor': ['rgba(0, 206, 195, 1)', 'rgba(255, 255, 255, 0)'],
                        'borderColor': ['rgba(0, 206, 195, 1)', 'rgba(255, 255, 255, 0)'],
                        'borderAlign': 'inner',
                        'borderWidth': 40
                    }
                ]
            },
            "options":{
                'cutoutPercentage': 75,
                'legend': {
                    'display':false
                },
                'maintainAspectRatio': true
            }
        }
    );
    new Chart(
        document.getElementById("chart3"), {
         "responsive": false,
            "type":"doughnut",
            "data":{
                "datasets":[
                    {
                        'label': 'Your results',
                        'data': [<?php echo $risk_percent.",".$risk_percent_spacer;?>],
                        'backgroundColor': ['rgba(0, 206, 195, 1)', 'rgba(255, 255, 255, 0)'],
                        'borderColor': ['rgba(0, 206, 195, 1)', 'rgba(255, 255, 255, 0)'],
                        'borderAlign': 'inner',
                        'borderWidth': 40
                    }
                ]
            },
            "options":{
                'cutoutPercentage': 75,
                'legend': {
                    'display':false
                },
                'maintainAspectRatio': true
            }
        }
    );
    new Chart(
        document.getElementById("chart4"), {
         "responsive": false,
            "type":"doughnut",
            "data":{
                "datasets":[
                    {
                        'label': 'Your results',
                        'data': [<?php echo $customer_percent.",".$customer_percent_spacer;?>],
                        'backgroundColor': ['rgba(0, 206, 195, 1)', 'rgba(255, 255, 255, 0)'],
                        'borderColor': ['rgba(0, 206, 195, 1)', 'rgba(255, 255, 255, 0)'],
                        'borderAlign': 'inner',
                        'borderWidth': 40
                    }
                ]
            },
            "options":{
                'cutoutPercentage': 75,
                'legend': {
                    'display':false
                },
                'maintainAspectRatio': true
            }
        }
    );
}
window.onload = function() {drawGraphs(); };
</script></body></html>