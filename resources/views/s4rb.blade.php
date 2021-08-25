<?php
$fullclass = "background-color: #ebeff0;";
$wfclass = "background-color: #ebeff0;";
$revclass = "background-color: #ebeff0;";
$advclass = "background-color: #ebeff0;";
$fullclassh2 = $wfclassh2 = $revclassh2 = $advclassh2 = "line-height: 30px; font-size: 22px;";
$fullclassp = $wfclassp = $revclassp = $advclassp = "color: #012e44; font-size: 16px;";
$fullstatus = $wfstatus =  $revstatus =$advstatus = 0;
$st = 0;

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Your Sustainability Supplier Engagement Assessment results</title>
<style type="text/css">
@font-face {font-family: 'Source Sans Pro'; src: url('{{asset('/fonts/SourceSansPro/SourceSansPro-Regular.ttf')}}') format('truetype'); font-weight: 400; font-style: normal; }
@font-face {font-family: 'Source Sans Pro'; src: url('{{asset('/fonts/SourceSansPro/SourceSansPro-SemiBold.ttf')}}') format('truetype'); font-weight: 600; font-style: normal; }
@font-face {font-family: 'Source Sans Pro'; src: url('{{asset('/fonts/SourceSansPro/SourceSansPro-Bold.ttf')}}') format('truetype'); font-weight: 700; font-style: normal; } 
body { font-family: 'Source Sans Pro'; font-weight: 400; }
@page {padding: 0; margin: 0; padding-top: 0px; padding-bottom: 0px; border: none; border-collapse: collapse; font-family: 'Source Sans Pro'; font-weight: 400;  page-break-after: always;
        page-break-inside: avoid; }
div.page {page-break-after: always; page-break-inside: avoid; margin: 0; }
html, body, div, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, font, img, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, b, u, i, center, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, caption {margin: 0; padding: 0; border: 0; outline: 0; font-size: 100%; vertical-align: baseline; background: transparent; }
* { border: 0; box-sizing: content-box; color: inherit;  line-height: inherit; list-style: none; margin: 0; padding: 0; text-decoration: none; vertical-align: top; letter-spacing: 0; }
html { font-family: 'Source Sans Pro'; font-weight: 400; font-size: 16px; line-height: 22px; overflow: auto; background: #fff; cursor: default; padding: 0; margin: 0; }
body { box-sizing: border-box; margin:0; padding: 0; background: #FFF; font-family: 'Source Sans Pro'; font-weight: 400;}
h1 { font-family: 'Source Sans Pro'; font-weight: 400; }
h2 span,
h2 {font-size: 33px; line-height: 35px; font-family: 'Source Sans Pro'; font-weight: 700; color: #012e44; }
h2 strong {font-family: 'Source Sans Pro'; color: #012e44; font-weight: 700; }
h3, h3 span {font-size: 22px; font-family: 'Source Sans Pro'; font-weight: 700;}
p {font-family: 'Source Sans Pro'; font-weight: 400; color: #2e2d2c; font-size: 16px; line-height: 24px; padding-bottom: 10px; }
li {list-style-type: disc;display: list-item;font-family: 'Source Sans Pro'; font-weight: 700; color: #2e2d2c; font-size: 18px; line-height: 26px; padding-bottom: 10px; }
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
.services-box p {font-family: 'Source Sans Pro'; font-weight: 400;  color: #012e44; font-size: 18px; }
.services-box td.min-wrapper { border: 2px solid #fff; padding: 10px 15px;  background-color: #ebeff0; width: 50%;  }
.services-box .left-side-icon, .services-box .left-side-icon * { vertical-align: middle; }
.title-box *{ vertical-align: middle; }
.services-box .left-side-icon { padding: 10px 0; }
.services-box .left-side-icon .lefticon { width: 35px; padding: 0; padding-right: 5px; }
.services-box .left-side-icon .lefticon img { width: 30px }
.content-info p { padding: 10px 0; font-family: 'Source Sans Pro';
 font-size: 18px !important; color: #012e44 !important; }
.services-box .left-side-icon h2 { padding-left: 10px; font-size: 26px !important; }
.min-wrapper.hightlight-box h2, .min-wrapper.hightlight-box p { color: #ffffff !important; }
.here-where-text { width: 50%; padding-top: 10px; }
.here-where-text h3 { display: block; width: 100%; text-align: center; font-family: 'Source Sans Pro'; font-weight: 400;  color: #01355c; padding-top: 10px; padding-bottom: 8px; }
.here-where-text .down-arrow { display: block; width: 100%; text-align: center; margin: 0 auto; padding-bottom: 5px; }
.here-where-text .down-arrow img { display: block; text-align: center; margin: 0 auto; }
.chart-section { padding:0; padding-top: 0; }
header .logo img { width: 145px; }
header .right p { font-size: 20px;  font-family: 'Source Sans Pro'; font-weight: 400;  color: #012e44; width: 100%; text-align: right; }
.left-right-space { padding-left: 66px; padding-right: 66px; }
img { max-width: 100%; }
html{width: 100%; height: 100%; padding: 0; margin: 0; }
@page {margin: 0cm 0cm;}
.service-box h2 {  font-family: 'Source Sans Pro'; font-weight: 700; }
.service-box p {  font-family: 'Source Sans Pro'; font-weight: 400; font-size: 15px !important; line-height: 20px !important; }
.chart-box p { font-size: 15px !important; line-height: 24px !important; }
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
</head>
<body>
<div class="banner-box" style="background-color: #01355c; background-size: cover; background-repeat: repeat; background-position: top right; margin: 0; padding: 0; position: relative; background-image: url({{asset('/icons/s4rb/report-header.jpg')}});height:775px;">
    <!-- Top Banner Background image size width:1340px and height:650px -->
     <div class="header left-right-space" style="padding-top: 70px; padding-bottom: 0; margin: 0;">
        <table  cellpadding="0" cellpadding="0" style="padding-top: 30px; padding-bottom: 0; margin: 0;">
            <tr>
                <td class="logo" style="width: 100%; padding-top: 0; margin-top: 0; ">
                    <img style="width: 190px;height:62px; display: block;" src="{{asset('/icons/s4rb/s4rb.png')}}" />
                </td>
            </tr>
        </table>
    </div>
        <table cellpadding="0" cellpadding="0">
            <tr>
                <td class="left-right-space" style="width: 57%; padding-right: 4%!important;padding-top: 80px; padding-bottom: 48px; text-align: left;">
                    <h1 style="color: #74aa50; font-family: 'Source Sans Pro'; font-weight: 600; font-size: 30px; line-height: 32px; padding-bottom: 15px;">Your results:</h1>
                    <h2 style="color: #0086ca; font-family: 'Source Sans Pro'; font-weight: 700; font-size: 54px; line-height: 66px;">
                    The Sustainability Supplier Engagement Assessment
                    </h2>
                </td>
                <td style="padding: 0; margin: 0; width: 39%;">&nbsp;</td>
            </tr>
        </table>
</div>
<div class="chart-title left-right-space" style="margin: 0;height:180px;">
    <table cellpadding="0" cellpadding="0">
        <tr>
            <td style="padding-top: 50px;">
                <p style="color: #2e2d2c; padding:0; margin:0; font-size: 24px; line-height: 28px; font-weight: 600;">Based on the answers you gave, here are your personalised results and recommended next steps to enhance your supplier engagement as a route to achieving your sustainability goals.</p>
            </td>
        </tr>
    </table>
</div>
<div class="chart-title left-right-space" style="padding-top: 0; margin: 0;height:448px;">
    <table cellpadding="0" cellpadding="0">
        <tr>
            <td style="width:48%;padding-right:4%;">
                    <?php if( $total > 135 ) : ?>
                        <h2 style="color: #0086ca; font-family: 'Source Sans Pro'; font-weight: 700; font-size: 32px; line-height: 38px;margin:0 0 20px;">Sustanability Supplier Engagement Level: High</h2>
                        <p style="color: #2e2d2c; padding:0; margin:0; font-size: 16px; line-height: 24px; font-weight: 400;">As an organisation, it appears your supplier engagement efforts are maturing well with some good success and wins already. However, maintaining effective supplier relationships for sustainability is an ongoing process, so there is always room to grow. Retailers with advanced capabilities are already realizing value from applications around smarter communications, automation and information sharing.</p>
                    <?php elseif( $total < 69 ) : ?>
                        <h2 style="color: #0086ca; font-family: 'Source Sans Pro'; font-weight: 700; font-size: 32px; line-height: 38px;margin:0 0 20px;">Sustanability Supplier Engagement Level: Low</h2>
                        <p style="color: #2e2d2c; padding:0; margin:0; font-size: 16px; line-height: 24px; font-weight: 400;">Your supplier engagement processes and systems are holding you back, making it harder to  deliver on your sustainability goals. Building your capabilities will mean you can maximise the benefits of data transparency and closer working relationships—helping to improve the sustainability of your supply chain. Currently, your score is low compared to the benchmark.</p>
                    <?php else : ?>
                        <h2 style="color: #0086ca; font-family: 'Source Sans Pro'; font-weight: 700; font-size: 32px; line-height: 38px;margin:0 0 20px;">Sustanability Supplier Engagement Level: Medium</h2>
                        <p style="color: #2e2d2c; padding:0; margin:0; font-size: 16px; line-height: 24px; font-weight: 400;">It looks like you’ve made a bit of headway with supplier engagement, but there is still plenty of room to grow and pushing on to improve capabilities further will allow you to better leverage the relationship for the benefit of both parties–and your customers. Retailers with advanced engagement capabilities are already benefiting from improved supply chain transparency, allowing them to pursue shared goals with their suppliers and to strengthen sustainability credentials.</p>
                    <?php endif; ?>
            </td>
            <td style="padding: 0; margin: 0; width:48%;">
                <canvas id="overallChart" width="390" height="380"></canvas>
            </td>
        </tr>
    </table>
</div>
<div class="chart-section" style="margin-top: 0;height:1402px;">
    <div class="chart-box left-right-space" style="padding-top: 75px;height:540px;">
        <div class="full-width">
            <table cellpadding="0" cellpadding="0">
                <tr>
                    <td style="padding: 0; padding-bottom: 15px; width: 48%; padding-right: 4%;">
                        <table cellpadding="0" cellpadding="0" style="width: 100%;">
                            <tr>
                                <td style="padding: 0;">
                                    <div class="title-box">
                                        <table cellpadding="0" cellpadding="0">
                                            <tr>
                                                <td style="padding: 0;" class="carttitle">
                                                    <h2 style="color: #0086ca; font-family: 'Source Sans Pro'; font-weight: 700; font-size: 34px; line-height: 40px;margin:0 0 20px;padding:0;">Accuracy</h2>
                                                    <p style="color: #74aa50; padding:0; margin:0; font-size: 19px!important; line-height: 23px!important; font-weight: 600;">
                                                    <?php if( $accuracy > 71 ) : ?>
                                                        Sustanability Supplier Engagement Level: High
                                                    <?php elseif( $accuracy < 33 ) : ?>
                                                        Sustanability Supplier Engagement Level: Low
                                                    <?php else : ?>
                                                        Sustanability Supplier Engagement Level: Medium
                                                    <?php endif; ?>
                                                    </p>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <?php if( $accuracy > 71 ) : ?>
                                        <p style="text-align: left; font-size: 16px">Your business is doing a good job of identifying the correct supplier contact for any situation. It also seems you’re maintaining accurate contact records, proactively reaching out to your suppliers to ensure that you’re ahead of any changes in roles and responsibilities.</p>
                                        <p style="text-align: left; font-size: 16px; padding-top: 10px;">You have already automated some, if not all, of these data capture processes, perhaps with self-service dashboards that allow suppliers to update their own information. You may also use proactive reviews of how suppliers engage with your communications to identify where there have been organisational changes.</p>
                                    <?php elseif( $accuracy < 33 ) : ?>
                                        <p style="text-align: left; font-size: 16px">Knowing the correct contact for different topics within your supplier companies is essential to improving engagement. However, your business can struggle to make contact with the right people consistently. Your messages can bounce around the supplier’s organisation, delaying responses and slowing supply chain operations. Getting a rapid response to your queries is sometimes difficult.</p>
                                        <p style="text-align: left; font-size: 16px; padding-top: 10px;">You may also find that suppliers are unsure about what you expect from them. It is entirely possible that your specific requirements have not always been well explained to them. And unless you liaise with suppliers regularly to discuss changing needs, they may struggle to keep pace with your climate change goals.</p>
                                    <?php else : ?>
                                        <p style="text-align: left; font-size: 16px">Your business has been taking steps to better connect with suppliers, so you know the key contacts who can help resolve problems and queries quickly. You have also had some discussions with suppliers about your expectations, helping them to serve you in the way you want.</p>
                                        <p style="text-align: left; font-size: 16px; padding-top: 10px;">You have made efforts to ensure your contact data is up-to-date and accurate, but this tends to be a manual process. You probably do not yet have a system in place that allows suppliers to manage and update their own contact information for you. If you do have a system, it may have low engagement and completion rates, resulting in outdated or inaccurate data. Discussions about changing expectations tend to be infrequent or inconsistent across the organisation. This means services and projects occasionally suffer when contacts forget what you need them to do.</p>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td style="padding: 0; width: 48%;">
                        <table cellpadding="0" cellpadding="0">
                            <tr>
                                <td style="padding: 10px; padding-top: 50px; padding-bottom: 50px;">
                                    <canvas id="chart1" width="390" height="380"></canvas>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div class="chart-box left-right-space" style="padding-top: 30px;height:749px;">
        <div class="full-width">
            <table cellpadding="0" cellpadding="0" style="padding: 0; margin: 0; padding-bottom: 70px;">
                <tr>
                    <td style="padding: 0; width: 48%;">
                        <table cellpadding="0" cellpadding="0">
                            <tr>
                                <td style="padding: 10px;padding-top: 10px; padding-bottom: 10px;">
                                    <?php if( $accuracy > 71 ) : ?>
                                        <img style="width: 380px;height:152px; display: block;" src="{{asset('/icons/s4rb/s4rb-High.png')}}" />
                                    <?php elseif( $accuracy < 33 ) : ?>
                                        <img style="width: 380px;height:152px; display: block;" src="{{asset('/icons/s4rb/s4rb-Low.png')}}" />
                                    <?php else : ?>
                                        <img style="width: 380px;height:152px; display: block;" src="{{asset('/icons/s4rb/s4rb-Medium.png')}}" />
                                    <?php endif; ?>
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td style="padding: 0; padding-bottom: 15px; width: 48%; padding-left: 4%;">
                        <table cellpadding="0" cellpadding="0" style="width: 100%;">
                            <tr>
                                <td>
                                    <div class="title-box">
                                        <table cellpadding="0" cellpadding="0">
                                            <tr>
                                                <td style="padding: 0;" class="carttitle">
                                                    <h2 style="color: #0086ca; font-family: 'Source Sans Pro'; font-weight: 700; font-size: 34px; line-height: 40px;padding:0;">Recommended actions to consider</h2>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <?php if( $accuracy > 71 ) : ?>
                                        <ul style="margin:0;list-style-type: disc;padding-left:20px;">
                                            <li style="text-align: left; font-size: 16px">Look for new ways to further reduce administrative overheads on your team, such as online dashboards for your suppliers.</li>
                                            <li style="text-align: left; font-size: 16px">Ensure suppliers are contacted regularly to capture changes as quickly as possible.</li>
                                            <li style="text-align: left; font-size: 16px">Automate as much of the contact accuracy process as possible. Tools like <a href="https://info.s4rb.com/affinity" target="_blank">S4RB Affinity</a> offer native tools for just this task.</li>
                                        </ul>
                                    <?php elseif( $accuracy < 33 ) : ?>
                                        <ul style="margin:0;list-style-type: disc;padding-left:20px;">
                                            <li style="text-align: left; font-size: 16px">Proactively maintain a list of supplier contacts so you always speak to the most relevant person first time, every time.</li>
                                            <li style="text-align: left; font-size: 16px">Keep your suppliers regularly updated so they know what you expect from them, especially when your needs change.</li>
                                            <li style="text-align: left; font-size: 16px">Monitor your communications to ensure your supplier contact details are correct–and that your messages are being received.</li>
                                            <li style="text-align: left; font-size: 16px">Investigate solutions like <a href="https://info.s4rb.com/affinity" target="_blank">S4RB Affinity</a> that can automate supplier contact accuracy, reducing the administrative burden on your team.</li>
                                            <li style="text-align: left; font-size: 16px">Make sure that your internal teams understand the communication flows towards suppliers.</li>
                                        </ul>
                                    <?php else : ?>
                                        <ul style="margin:0;list-style-type: disc;padding-left:20px;">
                                            <li style="text-align: left; font-size: 16px">Formalise your supplier contact data collection and update routines.</li>
                                            <li style="text-align: left; font-size: 16px">Implement an online dashboard which can be used by suppliers to view and update their own contact information.</li>
                                            <li style="text-align: left; font-size: 16px">Proactively message suppliers quarterly to confirm contact details and restate your expectations of service.</li>
                                            <li style="text-align: left; font-size: 16px">Deploy technology like <a href="https://info.s4rb.com/affinity" target="_blank">S4RB Affinity</a> that monitors your messaging and responses to automate supplier contact accuracy.</li>
                                        </ul>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div style="padding: 0; margin: 0; background: #011f2d;height:9px;">
        <img style="width: 100%;height:9px; display: block;" src="{{asset('/icons/s4rb/s4rb-border.png')}}" />
    </div>
</div>
<div class="chart-section" style="margin-top: 0;height:1403px;">
    <div class="chart-box left-right-space" style="padding-top: 75px;height:540px;">
        <div class="full-width">
            <table cellpadding="0" cellpadding="0">
                <tr>
                    <td style="padding: 0; padding-bottom: 15px; width: 48%; padding-right: 4%;">
                        <table cellpadding="0" cellpadding="0" style="width: 100%;">
                            <tr>
                                <td style="padding: 0;">
                                    <div class="title-box">
                                        <table cellpadding="0" cellpadding="0">
                                            <tr>
                                                <td style="padding: 0;" class="carttitle">
                                                    <h2 style="color: #0086ca; font-family: 'Source Sans Pro'; font-weight: 700; font-size: 34px; line-height: 40px;margin:0 0 20px;padding:0;">Alignment</h2>
                                                    <p style="color: #74aa50; padding:0; margin:0; font-size: 19px!important; line-height: 23px!important; font-weight: 600;">
                                                    <?php if( $alignment > 53 ) : ?>
                                                        Sustanability Supplier Engagement Level: High
                                                    <?php elseif( $alignment < 25 ) : ?>
                                                        Sustanability Supplier Engagement Level: Low
                                                    <?php else : ?>
                                                        Sustanability Supplier Engagement Level: Medium
                                                    <?php endif; ?>
                                                    </p>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <?php if( $alignment > 71 ) : ?>
                                        <p style="text-align: left; font-size: 16px">Your business is forging ahead when it comes to driving engagement and ensuring every supplier relationship is aligned to your corporate and sustainability goals. You seem to have a clearly defined communications plan and your messaging is clear, linking strategy, programs of activity and specific calls-to-action.</p>
                                        <p style="text-align: left; font-size: 16px; padding-top: 10px;">You seem to test your messaging with your suppliers to ensure it gives them what they need to better serve you. And by using a range of content formats you have more ways to get your message across. Working closely with suppliers is the secret to making your supply chain more transparent and effective.</p>
                                    <?php elseif( $alignment < 33 ) : ?>
                                        <p style="text-align: left; font-size: 16px">Communications with suppliers can be ad hoc and reactive, with little or no proactive engagement. This also means that messaging gets loose and unfocused, creating ambiguity that makes it harder for suppliers to give you what you want.</p>
                                        <p style="text-align: left; font-size: 16px; padding-top: 10px;">Most or all of your messaging is currently designed and tested in-house. It might not be sense-checked by anyone outside the sustainability team nor by a senior leader. Without soliciting advice or feedback from suppliers, it’s hard to be sure what they need from you. Your communications tend to be mainly in text format. But taking advantage of rich content like video, graphics and podcasts may better resonate with suppliers.</p>
                                    <?php else : ?>
                                        <p style="text-align: left; font-size: 16px">You have worked to improve the way you work with suppliers, and you are becoming more proactive in the way that expectations are communicated. Messaging tends to be clear, linking back to relevant strategy, by individual supplier requests sitting within clear programmes of activity. You may even seek input from some of your suppliers to ensure they are getting what they need.</p>
                                        <p style="text-align: left; font-size: 16px; padding-top: 10px;">Have you begun to experiment with rich content to make your messaging more compelling and to extend its reach? You may be starting to use graphics and video to engage supplier contacts. You are well on your way to building stronger, more effective partnerships with your suppliers, but there is still some work to be done.</p>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td style="padding: 0; width: 48%;">
                        <table cellpadding="0" cellpadding="0">
                            <tr>
                                <td style="padding: 10px; padding-top: 50px; padding-bottom: 50px;">
                                    <canvas id="chart2" width="390" height="380"></canvas>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div class="chart-box left-right-space" style="padding-top: 30px;height:749px;">
        <div class="full-width">
            <table cellpadding="0" cellpadding="0" style="padding: 0; margin: 0; padding-bottom: 70px;">
                <tr>
                    <td style="padding: 0; width: 48%;">
                        <table cellpadding="0" cellpadding="0">
                            <tr>
                                <td style="padding: 10px;padding-top: 10px; padding-bottom: 10px;">
                                    <?php if( $alignment > 53 ) : ?>
                                        <img style="width: 380px;height:152px; display: block;" src="{{asset('/icons/s4rb/s4rb-High.png')}}" />
                                    <?php elseif( $alignment < 25 ) : ?>
                                        <img style="width: 380px;height:152px; display: block;" src="{{asset('/icons/s4rb/s4rb-Low.png')}}" />
                                    <?php else : ?>
                                        <img style="width: 380px;height:152px; display: block;" src="{{asset('/icons/s4rb/s4rb-Medium.png')}}" />
                                    <?php endif; ?>
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td style="padding: 0; padding-bottom: 15px; width: 48%; padding-left: 4%;">
                        <table cellpadding="0" cellpadding="0" style="width: 100%;">
                            <tr>
                                <td>
                                    <div class="title-box">
                                        <table cellpadding="0" cellpadding="0">
                                            <tr>
                                                <td style="padding: 0;" class="carttitle">
                                                    <h2 style="color: #0086ca; font-family: 'Source Sans Pro'; font-weight: 700; font-size: 34px; line-height: 40px;padding:0;">Recommended actions to consider</h2>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <?php if( $alignment > 53 ) : ?>
                                        <ul style="margin:0;list-style-type: disc;padding-left:20px;">
                                            <li style="text-align: left; font-size: 16px">Keep your suppliers up-to-date with your business goals and how they can help you achieve them.</li>
                                            <li style="text-align: left; font-size: 16px">Seek feedback from your suppliers, using their comments to refine and target messaging.</li>
                                            <li style="text-align: left; font-size: 16px">Investigate new content formats as they are developed, considering how they could be used to better engage with your suppliers.</li>
                                            <li style="text-align: left; font-size: 16px">Consolidate your existing systems using a tool like <a href="https://info.s4rb.com/affinity" target="_blank">S4RB Affinity</a> which has been designed specifically for overcoming the complexities of engaging with suppliers within a modern supply chain.</li>
                                        </ul>
                                    <?php elseif( $alignment < 25 ) : ?>
                                        <ul style="margin:0;list-style-type: disc;padding-left:20px;">
                                            <li style="text-align: left; font-size: 16px">Build an “air traffic control” communications plan that manages the flow of messaging to your suppliers.</li>
                                            <li style="text-align: left; font-size: 16px">Be proactive in your messaging and ensure it all links back to relevant strategy by individual supplier requests sitting within clear programmes of activity.</li>
                                            <li style="text-align: left; font-size: 16px">Nurture a small network of trusted suppliers who can feed into your engagement strategy and ensure messaging delivers what they need to better help you.</li>
                                            <li style="text-align: left; font-size: 16px">Leverage rich content formats such as videos or even podcasts to better engage supplier contacts.</li>
                                            <li style="text-align: left; font-size: 16px">Consider deploying centralised tools like <a href="https://info.s4rb.com/affinity" target="_blank">S4RB Affinity</a> that have been designed specifically for the complexities of engaging supplier contacts within the modern supply chain.</li>
                                        </ul>
                                    <?php else : ?>
                                        <ul style="margin:0;list-style-type: disc;padding-left:20px;">
                                            <li style="text-align: left; font-size: 16px">Ensure you have a formalised plan to manage the flow of communications to your suppliers–and don’t forget to revise and improve it as needs change.</li>
                                            <li style="text-align: left; font-size: 16px">Be proactive in telling suppliers what you expect and how you see their role in your business goals.</li>
                                            <li style="text-align: left; font-size: 16px">Formalise your messaging tests with a small group of trusted supplier partners.</li>
                                            <li style="text-align: left; font-size: 16px">Keep introducing new content formats to better engage with the learning preferences and styles of your supplier contacts.</li>
                                            <li style="text-align: left; font-size: 16px">Enhance your capabilities with a tool like <a href="https://info.s4rb.com/affinity" target="_blank">S4RB Affinity</a> that can engage all your supplier contacts from a single platform.</li>
                                        </ul>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div style="padding: 0; margin: 0; background: #011f2d;height:9px;">
        <img style="width: 100%;height:9px; display: block;" src="{{asset('/icons/s4rb/s4rb-border.png')}}" />
    </div>
</div>
<div class="chart-section" style="margin-top: 0;height:1402px;">
    <div class="chart-box left-right-space" style="padding-top: 75px;height:540px;">
        <div class="full-width">
            <table cellpadding="0" cellpadding="0">
                <tr>
                    <td style="padding: 0; padding-bottom: 15px; width: 48%; padding-right: 4%;">
                        <table cellpadding="0" cellpadding="0" style="width: 100%;">
                            <tr>
                                <td style="padding: 0;">
                                    <div class="title-box">
                                        <table cellpadding="0" cellpadding="0">
                                            <tr>
                                                <td style="padding: 0;" class="carttitle">
                                                    <h2 style="color: #0086ca; font-family: 'Source Sans Pro'; font-weight: 700; font-size: 34px; line-height: 40px;margin:0 0 20px;padding:0;">Activation</h2>
                                                    <p style="color: #74aa50; padding:0; margin:0; font-size: 19px!important; line-height: 23px!important; font-weight: 600;">
                                                    <?php if( $activation > 26 ) : ?>
                                                        Sustanability Supplier Engagement Level: High
                                                    <?php elseif( $activation < 13 ) : ?>
                                                        Sustanability Supplier Engagement Level: Low
                                                    <?php else : ?>
                                                        Sustanability Supplier Engagement Level: Medium
                                                    <?php endif; ?>
                                                    </p>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <?php if( $activation > 26 ) : ?>
                                        <p style="text-align: left; font-size: 16px">Communications with suppliers can be ad hoc and reactive, with little or no proactive engagement. This also means that messaging gets loose and unfocused, creating ambiguity that makes it harder for suppliers to give you what you want.</p>
                                        <p style="text-align: left; font-size: 16px; padding-top: 10px;">Most or all of your messaging is currently designed and tested in-house. It might not be sense-checked by anyone outside the sustainability team nor by a senior leader. Without soliciting advice or feedback from suppliers, it’s hard to be sure what they need from you. Your communications tend to be mainly in text format. But taking advantage of rich content like video, graphics and podcasts may better resonate with suppliers.</p>
                                    <?php elseif( $activation < 13 ) : ?>
                                        <p style="text-align: left; font-size: 16px">You often find that suppliers fail to deliver on expectations because they have no way to track their own progress. Similarly, your lack of knowledge base and supplier self-help content means that suppliers cannot educate and improve themselves independently. This increases the disruptive, low-value admin overheads on your team.</p>
                                        <p style="text-align: left; font-size: 16px; padding-top: 10px;">Without a centralised knowledge base, you are constantly answering the same queries and addressing the same issues manually. Neither you nor your suppliers are able to drive continuous improvement and operations, engagement and sustainability performance suffers as a result.</p>
                                    <?php else : ?>
                                        <p style="text-align: left; font-size: 16px">You work hard to ensure that suppliers are delivering on expectations and you are looking for ways to formalise and refine messaging. You have begun implementing a knowledge base and your team is better equipped to answer supplier questions. You are also investigating how to make that information available as part of a self-service program for suppliers.</p>
                                        <p style="text-align: left; font-size: 16px; padding-top: 10px;">Sharing information is still one of your biggest challenges however. Suppliers still struggle to gauge their performance against expectations without contacting you, which takes your team away from other important tasks. You are also spending more time than you should fielding low-level questions or providing basic, ad hoc training to new supplier contacts.</p>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td style="padding: 0; width: 48%;">
                        <table cellpadding="0" cellpadding="0">
                            <tr>
                                <td style="padding: 10px; padding-top: 50px; padding-bottom: 50px;">
                                    <canvas id="chart3" width="390" height="380"></canvas>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div class="chart-box left-right-space" style="padding-top: 30px;height:749px;">
        <div class="full-width">
            <table cellpadding="0" cellpadding="0" style="padding: 0; margin: 0; padding-bottom: 70px;">
                <tr>
                    <td style="padding: 0; width: 48%;">
                        <table cellpadding="0" cellpadding="0">
                            <tr>
                                <td style="padding: 10px;padding-top: 10px; padding-bottom: 10px;">
                                    <?php if( $activation > 26 ) : ?>
                                        <img style="width: 380px;height:152px; display: block;" src="{{asset('/icons/s4rb/s4rb-High.png')}}" />
                                    <?php elseif( $activation < 13 ) : ?>
                                        <img style="width: 380px;height:152px; display: block;" src="{{asset('/icons/s4rb/s4rb-Low.png')}}" />
                                    <?php else : ?>
                                        <img style="width: 380px;height:152px; display: block;" src="{{asset('/icons/s4rb/s4rb-Medium.png')}}" />
                                    <?php endif; ?>
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td style="padding: 0; padding-bottom: 15px; width: 48%; padding-left: 4%;">
                        <table cellpadding="0" cellpadding="0" style="width: 100%;">
                            <tr>
                                <td>
                                    <div class="title-box">
                                        <table cellpadding="0" cellpadding="0">
                                            <tr>
                                                <td style="padding: 0;" class="carttitle">
                                                    <h2 style="color: #0086ca; font-family: 'Source Sans Pro'; font-weight: 700; font-size: 34px; line-height: 40px;padding:0;">Recommended actions to consider</h2>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <?php if( $activation > 26 ) : ?>
                                        <ul style="margin:0;list-style-type: disc;padding-left:20px;">
                                            <li style="text-align: left; font-size: 16px">Increase transparency with suppliers across more performance metrics using online KPI dashboards tailored to your specific business goals.</li>
                                            <li style="text-align: left; font-size: 16px">Give suppliers secure access to more business data to generate more customer and operational insights.</li>
                                            <li style="text-align: left; font-size: 16px">Extend your knowledge base and ensure contacts use it as their first point of reference to answer their questions.</li>
                                            <li style="text-align: left; font-size: 16px">Collate supplier queries across more departments to better see how you could improve the supplier experience and across the rest of the supply chain.</li>
                                            <li style="text-align: left; font-size: 16px">Incorporate your suppliers as part of your customer feedback process.</li>
                                            <li style="text-align: left; font-size: 16px">Leverage supplier stories within marketing to establish a clear point of difference.</li>
                                            <li style="text-align: left; font-size: 16px">Use technology like <a href="https://info.s4rb.com/affinity" target="_blank">S4RB Affinity</a> to quickly integrate KPI data from your core business systems to be shared securely with your trusted supplier partners.</li>
                                        </ul>
                                    <?php elseif( $activation < 13 ) : ?>
                                        <ul style="margin:0;list-style-type: disc;padding-left:20px;">
                                            <li style="text-align: left; font-size: 16px">Plan your calls to action to keep engaging suppliers and strengthening relationships.</li>
                                            <li style="text-align: left; font-size: 16px">Provide suppliers with online KPI dashboards tailored to your business goals so they can track their progress against your expectations.</li>
                                            <li style="text-align: left; font-size: 16px">Use supplier queries to build a centralised knowledge base, then make that information available for self-help and training.</li>
                                            <li style="text-align: left; font-size: 16px">Investigate a platform like <a href="https://info.s4rb.com/affinity" target="_blank">S4RB Affinity</a> that can integrate KPI data from your core business systems, sharing it safely and securely with your partners so they can measure (and improve) their performance.</li>
                                        </ul>
                                    <?php else : ?>
                                        <ul style="margin:0;list-style-type: disc;padding-left:20px;">
                                            <li style="text-align: left; font-size: 16px">Build supplier communications around the rule of five (Expectation setting, Call-to-action, Reminder, Due today and Overdue) to better plan and automate operations.</li>
                                            <li style="text-align: left; font-size: 16px">Implement an online KPI dashboard that suppliers can use to see how well they are performing for your business.</li>
                                            <li style="text-align: left; font-size: 16px">Finish your knowledge base and make it available externally for suppliers, allowing them to answer their own questions. Keep adding new questions as they are asked.</li>
                                            <li style="text-align: left; font-size: 16px">Improve information visibility for all stakeholders by using a platform like <a href="https://info.s4rb.com/affinity" target="_blank">S4RB Affinity</a> to integrate KPI data from core business systems to create a secure, interactive online supplier scorecard.</li>
                                        </ul>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div style="padding: 0; margin: 0; background: #011f2d;height:9px;">
        <img style="width: 100%;height:9px; display: block;" src="{{asset('/icons/s4rb/s4rb-border.png')}}" />
    </div>
</div>
<div class="full-width" style="height:1393px;background-size: cover;background-color: #0086ca; background-repeat: repeat; background-position: left bottom; text-align: center; padding: 0; margin: 0; ">
    <table cellpadding="0" cellpadding="0" style="padding-left: 66px; padding-right: 66px;">
        <tr>
            <td style="padding-top: 450px; padding-bottom: 450px; text-align: center;vertical-align:middle;">
                <table  cellpadding="0" cellpadding="0" style="padding: 0; margin: 0;">
                    <tr>
                        <td>
                            <div class="chart-title" style="max-width:680px;margin:0 auto; text-align: center;">
                                <h2 style="color: #ffffff; font-size: 48px; line-height: 58px; text-align: center;margin-bottom:20px;"> <strong style="color: #ffffff;font-weight: 700;">
                                <?php if( $total > 135 ) : ?>
                                    HIGH CTA - tbc
                                <?php elseif( $total < 69 ) : ?>
                                    LOW CTA - tbc
                                <?php else : ?>
                                    MEDIUM CTA - tbc
                                <?php endif; ?>
                                </strong></h2>
                                <p style="text-align: center;color: #ffffff; padding:0; margin:0; font-size: 28px!important; line-height: 34px!important; font-weight: 400;">Get in touch with us to discuss your results and how you can start putting your recommended actions into practice.</p>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <table cellpadding="0" cellpadding="0" style="padding-left: 0px; padding-right: 0px; padding-top: 20px;padding-bottom: 22px; text-align: center;">
                                <tr>
                                    <td>
                                        <table style="background: #ffffff; padding: 0 20px; width: 300px; height: 68px; margin: 10px auto 0 auto; border-radius: 12px;"  cellpadding="0" cellpadding="0">
                                            <tr>
                                                <td>
                                                    <a style="color: #0086c9; line-height: 68px; font-size: 24px; font-weight:700; text-decoration: none;" href="https://info.s4rb.com/contact-us" title="Book a free workshop" target="_blank"> <strong>Get in touch now</strong> </a>
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
<footer style="padding: 0; margin: 0; background: #011f2d;height:9px;">
<img style="width: 100%;height:9px; display: block;" src="{{asset('/icons/s4rb/s4rb-border.png')}}" />
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
        document.getElementById("overallChart"), {
         "responsive": false,
            "type":"bar",
            "data":{
                "labels":['Accuracy','Alignment','Activation'],

                "datasets":[
                    {
                        'label': 'Your results', 'data': [<?php echo $accuracyPercent.",".$alignmentPercent.",".$activationPercent;?>],
                        'backgroundColor': 'rgba(0, 133, 201, 1)',
                        'borderColor': 'rgba(0, 133, 201, 1)'
                    },
                    {
                        'label': 'Benchmark',  'data': [90,90,90],
                        'backgroundColor': 'rgba(116,170,80, 1)',
                        'borderColor': 'rgba(116,170,80, 1)'
                    }
                ]
            },
            "options":{
                'legend': {
                    'position': 'top',
                    'align': 'start',
                    'labels': {
                        'fontFamily': 'Source Sans Pro',
                        'fontColor':'#000000',
                        'fontSize': 14,
                        'usePointStyle': true,
                        'boxWidth': 6,
                        'fontStyle': '700'
                    }
                },
                'maintainAspectRatio': true,
                'scales': {
                    'xAxes': [{
                        'stacked': true,
                        'ticks': {
                            'fontFamily': 'Source Sans Pro',
                            'fontColor': '#000000',
                            'fontSize': 14,
                            'fontStyle': '700'
                        },
                        'gridLines': {
                            'zeroLineColor': '#000000'
                        }
                    }],
                    'yAxes': [{
                        'ticks': {
                            'beginAtZero': true,
                            'stepSize': 25,
                            'suggestedMax': 100,
                            'fontFamily': 'Source Sans Pro',
                            'fontColor': '#000000',
                            'fontStyle': '700'
                        },
                        'gridLines': {
                            'zeroLineColor': '#000000'
                        }
                    }]
                }
            }
        }
    );
    new Chart(
        document.getElementById("chart1"), {
         "responsive": false,
            "type":"horizontalBar",
            "data":{
                "labels":['Q1','Q2','Q3','Q4','Q5','Q6','Q7','Q8'],

                "datasets":[
                    {
                        'label': 'Your results', 'data': [<?php echo $chart1;?>],
                        'backgroundColor': 'rgba(0, 133, 201, 1)',
                        'borderColor': 'rgba(0, 133, 201, 1)'
                    },
                    {
                        'label': 'Benchmark',  'data': [9,9,9,9,9,9,9,9],
                        'backgroundColor': 'rgba(116,170,80, 1)',
                        'borderColor': 'rgba(116,170,80, 1)'
                    }
                ]
            },
            "options":{
                'legend': {
                    'position': 'top',
                    'align': 'start',
                    'labels': {
                        'fontFamily': 'Source Sans Pro',
                        'fontColor':'#000000',
                        'fontSize': 14,
                        'usePointStyle': true,
                        'boxWidth': 6,
                        'fontStyle': '700'
                    }
                },
                'maintainAspectRatio': true,
                'scales': {
                    'xAxes': [{
                        'ticks': {
                            'beginAtZero': true,
                            'stepSize': 1,
                            'suggestedMax': 10,
                            'fontFamily': 'Source Sans Pro',
                            'fontColor': '#000000',
                            'fontStyle': '700'
                        },
                        'gridLines': {
                            'zeroLineColor': '#000000'
                        }
                    }],
                    'yAxes': [{
                        'stacked': true,
                        'ticks': {
                            'fontFamily': 'Source Sans Pro',
                            'fontColor': '#000000',
                            'fontSize': 14,
                            'fontStyle': '700'
                        },
                        'gridLines': {
                            'zeroLineColor': '#000000'
                        }
                    }]
                }
            }
        }
    );
    new Chart(
        document.getElementById("chart2"), {
         "responsive": false,
            "type":"horizontalBar",
            "data":{
                "labels":['Q1','Q2','Q3','Q4','Q5','Q6'],

                "datasets":[
                    {
                        'label': 'Your results', 'data': [<?php echo $chart2;?>],
                        'backgroundColor': 'rgba(0, 133, 201, 1)',
                        'borderColor': 'rgba(0, 133, 201, 1)'
                    },
                    {
                        'label': 'Benchmark',  'data': [9,9,9,9,9,9],
                        'backgroundColor': 'rgba(116,170,80, 1)',
                        'borderColor': 'rgba(116,170,80, 1)'
                    }
                ]
            },
            "options":{
                'legend': {
                    'position': 'top',
                    'align': 'start',
                    'labels': {
                        'fontFamily': 'Source Sans Pro',
                        'fontColor':'#000000',
                        'fontSize': 14,
                        'usePointStyle': true,
                        'boxWidth': 6,
                        'fontStyle': '700'
                    }
                },
                'maintainAspectRatio': true,
                'scales': {
                    'xAxes': [{
                        'ticks': {
                            'beginAtZero': true,
                            'stepSize': 1,
                            'suggestedMax': 10,
                            'fontFamily': 'Source Sans Pro',
                            'fontColor': '#000000',
                            'fontStyle': '700'
                        },
                        'gridLines': {
                            'zeroLineColor': '#000000'
                        }
                    }],
                    'yAxes': [{
                        'stacked': true,
                        'ticks': {
                            'fontFamily': 'Source Sans Pro',
                            'fontColor': '#000000',
                            'fontSize': 14,
                            'fontStyle': '700'
                        },
                        'gridLines': {
                            'zeroLineColor': '#000000'
                        }
                    }]
                }
            }
        }
    );
    new Chart(
        document.getElementById("chart3"), {
         "responsive": false,
            "type":"horizontalBar",
            "data":{
                "labels":['Q1','Q2','Q3'],

                "datasets":[
                    {
                        'label': 'Your results', 'data': [<?php echo $chart3;?>],
                        'backgroundColor': 'rgba(0, 133, 201, 1)',
                        'borderColor': 'rgba(0, 133, 201, 1)'
                    },
                    {
                        'label': 'Benchmark',  'data': [9,9,9],
                        'backgroundColor': 'rgba(116,170,80, 1)',
                        'borderColor': 'rgba(116,170,80, 1)'
                    }
                ]
            },
            "options":{
                'legend': {
                    'position': 'top',
                    'align': 'start',
                    'labels': {
                        'fontFamily': 'Source Sans Pro',
                        'fontColor':'#000000',
                        'fontSize': 14,
                        'usePointStyle': true,
                        'boxWidth': 6,
                        'fontStyle': '700'
                    }
                },
                'maintainAspectRatio': true,
                'scales': {
                    'xAxes': [{
                        'ticks': {
                            'beginAtZero': true,
                            'stepSize': 1,
                            'suggestedMax': 10,
                            'fontFamily': 'Source Sans Pro',
                            'fontColor': '#000000',
                            'fontStyle': '700'
                        },
                        'gridLines': {
                            'zeroLineColor': '#000000'
                        }
                    }],
                    'yAxes': [{
                        'stacked': true,
                        'ticks': {
                            'fontFamily': 'Source Sans Pro',
                            'fontColor': '#000000',
                            'fontSize': 14,
                            'fontStyle': '700'
                        },
                        'gridLines': {
                            'zeroLineColor': '#000000'
                        }
                    }]
                }
            }
        }
    );
}
window.onload = function() {drawGraphs(); };
</script>
</body>
</html>
