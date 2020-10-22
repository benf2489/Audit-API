
    <div class="page-wrapper work_to_be_done">
        <div class="header">
            <div class="logo"><img src="<?php echo asset('/public/image/whited.svg'); ?>"/></div>
            <img src="<?php echo asset('/public/image/dna.svg')?>" alt="" class="dna">
            <div class="title">
                <br>
                <h1></h1>
                <br>
                <div class="sub">Overall results</div>
                <div class="main">Work to be done</div>
            </div>
        </div>
        <div class="main-contenter">
            <div class="content">
                <h2 class="blue-head">How you compare</h2>
                <p class="top-content">
                    We asked you to rate your level of agreement with a series of statements across four key aspects of your digital testing capabilities. With your answers, we can assess your current capability, and provide recommendations on how to improve your ability to deliver outstanding digital experience.
                </p>
          </div>  
        </div> 
        <div class="main-contenter">
            <div class="content">

                <div class="flexis">
                    <div style="padding:50px 20px 70px;border:1px solid #DDD;" >
                        <div class="graph-section">
                            <div class="chart-group">
                                <div  class="bar1" style="height: <?=$technology_score_user_per?>%; width: 35px; background: #263A68"><span><?=$technology_score_user_per?>%</span></div>
                                <div class="bar2" style="height: <?=$technology_score_benchmark_per?>%; width: 35px; background: #0DE578"><span><?=$technology_score_benchmark_per?>%</span></div>
                                <p>Technology</p>
                            </div>

                            <div class="chart-group">
                                <div  class="bar1" style="height: <?=$methodology_score_user_per?>%; width: 35px; background: #263A68"><span><?=$methodology_score_user_per?>%</span></div>
                                <div class="bar2" style="height: <?=$methodology_score_benchmark_per?>%; width: 35px; background: #0DE578"><span><?=$methodology_score_benchmark_per?>%</span></div>
                                <p>Methodology</p>
                            </div>

                            <div class="chart-group">
                                <div  class="bar1" style="height: <?=$department_alignment_score_user_per?>%; width: 35px; background: #263A68"><span><?=$department_alignment_score_user_per?>%</span></div>
                                <div class="bar2" style="height: <?=$department_alignment_score_benchmark_per?>%; width: 35px; background: #0DE578"><span><?=$department_alignment_score_benchmark_per?>%</span></div>
                                <p>Department <br /> alignment</p>
                            </div>

                            <div class="chart-group">
                                <div  class="bar1" style="height: <?=$stakeholder_buy_in_score_user_per?>%; width: 35px; background: #263A68"><span><?=$stakeholder_buy_in_score_user_per?>%</span></div>
                                <div class="bar2" style="height: <?=$stakeholder_buy_in_score_benchmark_per?>%; width: 35px; background: #0DE578"><span><?=$stakeholder_buy_in_score_benchmark_per?>%</span></div>
                                <p>Stakeholder <br />
                                    buy-in</p>
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
                <p class="blue-head-seperated">Work to be done</p>
                <div class="left">
                    <p>You are not yet ready to deliver an optimized, effective digital experience to customers. Unlike high scorers, your CX efforts are uncoordinated and reactive.</p>
                    <p>Without a program of formalized testing and development you cannot deliver proactive improvements. </p> 
                </div>
              <div class="right">
                    <p>Digital customer experience is not a strategic priority, so your program is under-funded, under-resourced and under-appreciated.</p>

                    <p>Just <a target="_blank" href="https://decibel.com/resources/reports/econsultancy-state-conversion-digital-experience-2020/"><span>29%</span></a> of companies accurately quantify the impact of user experience initiatives, so you're not alone.</p>
              </div>
          </div>  
        </div> 
        <div class="footer">
            <div class="flogo"><img src="<?php echo asset('/public/image/flogo.svg'); ?>" /></div>
            <div class="text">Digital Experience Self-Assessment</div>
            <div class="pageno"><span>02</span> <img src="<?php echo asset('/public/image/footer-pageno.png'); ?>" /></div>
        </div>
    </div>
</body>
</html>
