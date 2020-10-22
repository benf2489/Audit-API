
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
                                Your personalization and content testing platforms are working well, and you may now be starting to deploy more advanced monitoring technologies like user journey flow mapping, bottleneck detection, and behavior detection.
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
                            Your business is using a collection of tools that provide a moderately good understanding of the customer journey.
                        </p>
                        <p>
                            There are still gaps in visibility, however, as your use of heatmaps and session recording continues to be minimal. You are also limited when it comes to automating analysis, modelling customer behaviour, or identifying new opportunities for improvement.
                        </p>
                        <p class="percentage-number-text">Just</p>
                        <p class="percentage-number">11<span>%</span></p>
                        <br>
                        <p class="percentage-number-text">
                            of companies have a fully automated approach to customer experience improvement, powered by AI
                        </p>
                        <p>
                            <a target="_blank" href="https://decibel.com/resources/reports/econsultancy-state-conversion-digital-experience-2020/"><span>The State of Digital Experience and Conversion</span></a>
                        </p>
                    </div>
                    <div class="right">
                        <p>Your high-performing competitors have assembled a suite of tools that allow them to see the customer experience from every angle.</p>
                        <p>This is backed by Machine Learning and artificial intelligence systems that are capable of analyzing vast amounts of data, accurately modeling user behavior, and recommending potential improvements.
                        </p>
                        <p>Effective use of advanced technology allows these businesses to better allocate time, resources, and funding, avoiding the trial-and-error developments common in low- and medium-scoring organizations.
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
