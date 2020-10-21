
        <div class="page-wrapper technology_page">
            <div class="header">
                <div class="logo"><img src="<?php echo asset('/public/image/logo.svg') ?>" /></div>
                <div class="title">
                    <div class="sub">YOUR RESULT FOR</div>
                    <div class="main">Technology</div>
                </div>
            </div>
            <div class="main-contenter">
                <div class="content">
                    <div class="bg-lite flexis">
                        <div class="left bg-lite">
                            <p class="stat-head">
                                <i><img src="<?php echo asset('/public/image/aev.svg'); ?>" alt="" /></i>
                                <span>Summary</span>
                            </p>
                            <p class="stat-text">
                                You have clearly spent time and effort choosing a combination of tools that provide a 360&deg; view of the customer experience. You can track experiences on the level of the individual or as part of a much larger target group.
                            </p>
                        </div>
                        <div class="right">
                            <div class="graph-section">
                                <div class="chart-group">
                                    <div  class="bar1" style="height: <?=$technology_score_user_per?>%; width: 45px; background: #263A68"><span><?=$technology_score_user_per?>%</span></div>
                                    <div class="bar2" style="height: <?=$technology_score_benchmark_per?>%; width: 45px; background: #0DE578"><span><?=$technology_score_benchmark_per?>%</span></div>
                                </div>
                                <div style="clear:both;"></div> 
                            </div>
                            <!-- graph-section-->

                            <ul class="keys"> <strong> Key : </strong>
                                <li><span class="circle-blue"></span> &nbsp;Your results</li>
                                <li><span class="circle-green"></span> &nbsp;Industry Average</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-contenter">
                <div class="content">
                    <div class="left">
                        <p>
                            Your technology is configured to provide highly personalized experiences to your visitors - and to help you measure the commercial benefits of each.
                        </p>
                        <p>
                            Your choice of technology also ensures that all your stakeholders are able to share and use metrics to enhance your customer-facing operations at every opportunity.</p>
                        <p>
                             You are not only collecting reactive metrics (e.g. conversions, bounce rates), but also paying close attention to advanced performance indicators like behavior detection and the results of session recording.
                        </p>
                        <p class="percentage-number">11<span>%</span></p>
                        <br>
                        <p class="percentage-number-text">
                            of businesses are using machine learning (ML) to automate optimization
                        </p>
                        <p>
                            <a target="_blank" href="https://decibel.com/resources/reports/econsultancy-state-conversion-digital-experience-2020/"><span>The State of Digital Experience and Conversion</span></a>
                        </p>
                    </div>
                    <div class="right">
                        <p>To maintain your position as a high-performing organization, it's essential to stay up to date with new developments and capabilities. </p>

                        <p>Customer experience is a constantly evolving field, so you should investigate new tools as they become available, adding them to your portfolio as required. 
                        </p>
                        <p>You should also be ready to replace any system that no longer delivers the predictive, proactive results you need.
                        </p>

                    </div>
                </div>
            </div>
            <div class="footer">
                <div class="flogo"><img src="<?php echo asset('/public/image/flogo.svg');?>" /></div>
                <div class="text">Digital Experience Self-Assessment</div>
                <div class="pageno">
                    <span>03</span><img src="<?php echo asset('/public/image/footer-pageno.png');?>" />
                </div>
            </div>
        </div>
    </body>
</html>
