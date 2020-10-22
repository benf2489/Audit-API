
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
                                Your approach to digital experience improvement is still in its infancy. You currently measure a small number of possible metrics which means that your understanding of the customer experience is incomplete. 
                            </p>
                        </div>
                        <div class="right bg-lite">
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
                            It's likely that your testing currently relies on manual processes, while analysis of data is limited by time and resources.
                        </p>
                        <p>
                            You rely on individual tools like web analytics dashboards to track conversion and bounce rates, but without a defined strategy, technology investments lack direction. You probably do not use behaviour detection technologies, nor have ways of properly tracking the individual user's journey through your site.
                        </p>
                        <p class="percentage-number">25<span>%</span></p>
                        <br>
                        <p class="percentage-number-text">
                            of organizations have conversion rates that are
                            limited by legacy technology
                        </p>
                        <p>
                            <a target="_blank" href="https://decibel.com/resources/reports/econsultancy-state-conversion-digital-experience-2020/"><span>The State of Digital Experience and Conversion</span></a>
                        </p>
                    </div>
                    <div class="right">
                        <p>Your high-scoring competitors have automated much of their testing and use an integrated platform and artificial intelligence to automate and improve analysis, helping them generate more granular, meaningful results.
                        </p>
                        <p>They also rely on more advanced technologies like session replays and behavioral heatmaps to see exactly how individuals use their website, exposing even minor factors that confuse or frustrate users.
                        </p>
                        <p>As a result, they are better able to direct resources for the greatest effect when improving their websites and apps because there are no gaps in their portfolio. They can 'see' everything. And they have an integrated customer experience strategy to help them align every new development with the wider business goals.
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
