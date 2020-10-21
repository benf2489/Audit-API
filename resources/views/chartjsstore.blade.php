<?php
    
    
    //Request data from endpoint
    $response = $request; 
    
    // print_r($response);
    // die;


    /* set vars */
    $industry = "other";
    $industry_label = "Other";
    $industry_front_image = asset("/public/image/main_image_other.png");
    $score_level = "low";
    
    // Check if null received
    if ($response == NULL || $response == false) {

      echo "<h1>Data from server is not received. Try refreshing the page or try again later.</h1>";
      exit;

    //Check if data is received  
    } elseif ( (isset($response['code']) && $response['code'] == "frmapi_not_found") || (isset($response['code']) && $response['status']) == 409 ) {

        echo "<h1>".$response['message']."</h1>";
        exit;

    //check if question meta is set
    } elseif ( isset($response['meta']) && count($response['meta']) ) {

        forEach ($response['meta'] as $ky=>$val) {

            

            if (in_array($ky,array("ques_2","ques_3","ques_6","ques_7","ques_8","ques_11","ques_12")) ){

              ${$ky} = intval($val);  
            } 

            if ( in_array($ky,array("ques_4","ques_5","ques_9","ques_10")) ) {

              continue;

            }

            if ( in_array($ky,array("ques_4-value","ques_5-value","ques_10-value")) ) {

              ${str_replace("-value","",$ky)} = array_sum($val);

            } 

            if  ($ky == "ques_9-value") {

              $ques_9 = intval($val);
            }

        }

        $industry_label = $response['meta']['ques_1-value'];
        $industry = trim($response['meta']['ques_1-value']);

        if ( $industry == "Financial Services" ) {
            $industry = "Finance Services";
        }

        $industry = strtolower(str_replace(array(" &amp; " ," & "," "),array("-","-"), $industry));


        if ( $industry ) {
          
          $industry_front_image = asset("/public/image/main_image_$industry.png");  
        
        } 

        $total_score = 0;                        
        $total_score = $ques_2 + $ques_3 + $ques_4 + $ques_5 + $ques_6 + $ques_7 + $ques_8 + $ques_9 + $ques_10 + $ques_11 + $ques_12;

        if ($total_score <= 33 ) {

            $score_level = "low";
        
        } elseif ($total_score <= 66) {

            $score_level = "medium";

        } elseif ($total_score <= 99) {

            $score_level = "high";
            
        }

        $technology_score_full = 36;
        $methodology_score_full = 18;
        $department_alignment_score_full = 27;
        $stakeholder_buy_in_score_full = 18;
        
        $technology_score_benchmark = 18;
        $methodology_score_benchmark = 10;
        $department_alignment_score_benchmark = 12;
        $stakeholder_buy_in_score_benchmark = 9;

        $technology_score_user = $ques_4 + $ques_5 + $ques_6 + $ques_8;
        $methodology_score_user = $ques_7 + $ques_9;
        $department_alignment_score_user = $ques_10 + $ques_11 + $ques_12;
        $stakeholder_buy_in_score_user = $ques_2 + $ques_3;


        $technology_score_benchmark_per = ceil(($technology_score_benchmark / $technology_score_full ) * 100);
        $methodology_score_benchmark_per = ceil(($methodology_score_benchmark / $methodology_score_full ) * 100);
        $department_alignment_score_benchmark_per = ceil(($department_alignment_score_benchmark / $department_alignment_score_full ) * 100);
        $stakeholder_buy_in_score_benchmark_per = ceil(($stakeholder_buy_in_score_benchmark / $stakeholder_buy_in_score_full ) * 100);

        $technology_score_user_per = ceil(($technology_score_user / $technology_score_full ) * 100);
        $methodology_score_user_per = ceil(($methodology_score_user / $methodology_score_full ) * 100);
        $department_alignment_score_user_per = ceil(($department_alignment_score_user / $department_alignment_score_full ) * 100);
        $stakeholder_buy_in_score_user_per = ceil(($stakeholder_buy_in_score_user / $stakeholder_buy_in_score_full ) * 100);
    }

?>
<!DOCTYPE html>
<html>
<head>
<title>Self Assesment PDF</title>    
<style>
  /* vietnamese */
  @font-face {font-family: 'Nunito Sans'; src: url("{{asset('public/fonts/nunitosans-regular-webfont.ttf')}}") format('truetype'); font-weight: normal; font-style: normal; }

*,
::after,
::before {
    box-sizing: inherit;
}
p{
    margin-bottom: 25px;
}
body {
    padding: 0px;
    margin: 0px;
    font-family: "Nunito Sans";
    font-size: 10px;
}


body { font-family: 'Nunito Sans'; font-weight: 400; }
@page {padding: 0; margin: 0; padding-top: 0px; padding-bottom: 0px; border: none; border-collapse: collapse; font-family: 'Nunito Sans'; font-weight: 400;  page-break-after: always;
        page-break-inside: avoid; }

div.page-wrapper {page-break-after: always; page-break-inside: avoid; margin: 0; width:1000px;height:1415px; position: relative; }

</style>
<link rel="stylesheet" href="{{ asset('/public/css/allpdfstyles.css') }}" />
<script src="{{ asset('/public/js/chart.js') }}"></script>

</head>
<body>
    
    <div class="page-wrapper A41 front_page" style="width:1000px;height:1415px;">
        <div class="header">
            <img src="<?php echo @$industry_front_image; ?>" class="header-img" />
            <img src="<?php echo asset('/public/image/A41-Logo.svg'); ?>" class="logo" />
        </div>
        <div class="main-contenter">
            <div class="content">
                <br>
                <p >
                    <span class="green-head">
                        YOUR RESULTS
                    </span>
                    <br>
                    <span class="heading">
                        Digital Experience <br>Self-Assessment
                    </span>
                    <br>
                    <br>
                    <span class="inside">
                         Inside:
                    </span>
                    <br>
                    <span class="point">
                       <i><img src="{{ asset('/public/image/point.svg') }}" alt=""></i> Find out how your organization scores on the key aspects of digital experience 
                    </span>
                    <br>
                    <span class="point">
                        <i><img src="{{ asset('/public/image/point.svg') }}" alt=""></i> See how your performance compares to other organizations
                    </span>
                    <br>
                    <span class="point">
                        <i><img src="{{ asset('/public/image/point.svg') }}" alt=""></i> Get actionable guidance on what to do next
                    </span>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                </p>
                <img src="{{ asset('/public/image/dimond.svg') }}" class="dimond" alt="">
                <img src="{{ asset('/public/image/footer-img-left-down.svg') }}" class="fimg-right-top" alt="">
                <img src="{{ asset('/public/image/shadow-left-img.svg') }}" class="shadow" alt="">
            </div>
        </div>
    </div>
    <!-- Result Page -->
    <?php include(resource_path("views/pdfhtml/result_pages/".$industry.".php")); ?>
    <!-- Work to be done page -->
    <?php include(resource_path("views/pdfhtml/".$score_level."_pages/work_to_be_done.php")); ?>
    <!-- Technology -->
    <?php include(resource_path("views/pdfhtml/".$score_level."_pages/technology.php")); ?>
    <!-- Methodology -->
    <?php include(resource_path("views/pdfhtml/".$score_level."_pages/methodology.php")); ?>
     <!-- Department -->
    <?php include(resource_path("views/pdfhtml/".$score_level."_pages/department.php")); ?>
    <!-- Stakeholder -->
    <?php include(resource_path("views/pdfhtml/".$score_level."_pages/stakeholder.php")); ?>
    <!-- Conclusion -->
    <?php include(resource_path("views/pdfhtml/".$score_level."_pages/conclusion.php")); ?>
    <!-- back bage -->
    <div class="page-wrapper end_page">
        <div class="header">
            <div class="title">
                <div class="sub"></div>
                <div class="main"></div>
            </div>
        </div>
        <img src="{{ asset('/public/image/2345.svg') }}" class="blue-ring" alt="">
        <img src="{{ asset('/public/image/46456.svg') }}" alt="" class="shadow-over">
        <img src="{{ asset('/public/image/46456.svg') }}" alt="" class="shadow-right">
        <img src="{{ asset('/public/image/A41-Logo.svg') }}" alt="" class="logo-center">
        <p class="logo-text">decibel.com</p>        
        <img src="{{ asset('/public/image/4645633.svg') }}" alt="" class="blue-ring-down">
   </div>




    
<script  type="text/javascript">
/*
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

// draws a rectangle with a rounded top
Chart.helpers.drawRoundedTopRectangle = function(ctx, x, y, width, height, radius) {
  ctx.beginPath();
  ctx.moveTo(x + radius, y);
  // top right corner
  ctx.lineTo(x + width - radius, y);
  ctx.quadraticCurveTo(x + width, y, x + width, y + radius);
  // bottom right corner
  ctx.lineTo(x + width, y + height);
  // bottom left corner
  ctx.lineTo(x, y + height);
  // top left 
  ctx.lineTo(x, y + radius);
  ctx.quadraticCurveTo(x, y, x + radius, y);
  ctx.closePath();
};

Chart.elements.RoundedTopRectangle = Chart.elements.Rectangle.extend({
  draw: function() {
    var ctx = this._chart.ctx;
    var vm = this._view;
    var left, right, top, bottom, signX, signY, borderSkipped;
    var borderWidth = vm.borderWidth;

    if (!vm.horizontal) {
      // bar
      left = vm.x - vm.width / 2;
      right = vm.x + vm.width / 2;
      top = vm.y;
      bottom = vm.base;
      signX = 1;
      signY = bottom > top? 1: -1;
      borderSkipped = vm.borderSkipped || 'bottom';
    } else {
      // horizontal bar
      left = vm.base;
      right = vm.x;
      top = vm.y - vm.height / 2;
      bottom = vm.y + vm.height / 2;
      signX = right > left? 1: -1;
      signY = 1;
      borderSkipped = vm.borderSkipped || 'left';
    }

    // Canvas doesn't allow us to stroke inside the width so we can
    // adjust the sizes to fit if we're setting a stroke on the line
    if (borderWidth) {
      // borderWidth shold be less than bar width and bar height.
      var barSize = Math.min(Math.abs(left - right), Math.abs(top - bottom));
      borderWidth = borderWidth > barSize? barSize: borderWidth;
      var halfStroke = borderWidth / 2;
      // Adjust borderWidth when bar top position is near vm.base(zero).
      var borderLeft = left + (borderSkipped !== 'left'? halfStroke * signX: 0);
      var borderRight = right + (borderSkipped !== 'right'? -halfStroke * signX: 0);
      var borderTop = top + (borderSkipped !== 'top'? halfStroke * signY: 0);
      var borderBottom = bottom + (borderSkipped !== 'bottom'? -halfStroke * signY: 0);
      // not become a vertical line?
      if (borderLeft !== borderRight) {
        top = borderTop;
        bottom = borderBottom;
      }
      // not become a horizontal line?
      if (borderTop !== borderBottom) {
        left = borderLeft;
        right = borderRight;
      }
    }

    // calculate the bar width and roundess
    var barWidth = Math.abs(left - right);
    var roundness = this._chart.config.options.barRoundness || 0.5;
    var radius = barWidth * roundness * 0.5;
    
    // keep track of the original top of the bar
    var prevTop = top;
    
    // move the top down so there is room to draw the rounded top
    top = prevTop + radius;
    var barRadius = top - prevTop;

    ctx.beginPath();
    ctx.fillStyle = vm.backgroundColor;
    ctx.strokeStyle = vm.borderColor;
    ctx.lineWidth = borderWidth;

    // draw the rounded top rectangle
    Chart.helpers.drawRoundedTopRectangle(ctx, left, (top - barRadius + 1), barWidth, bottom - prevTop, barRadius);

    ctx.fill();
    if (borderWidth) {
      ctx.stroke();
    }

    // restore the original top value so tooltips and scales still work
    top = prevTop;
  },
});

Chart.defaults.roundedBar = Chart.helpers.clone(Chart.defaults.bar);

Chart.controllers.roundedBar = Chart.controllers.bar.extend({
  dataElementType: Chart.elements.RoundedTopRectangle
});


function drawGraphs() {
    
    //chart1-results
    new Chart( document.getElementById("myChart1") , {
        "type": "roundedBar",
        "data": {
            "labels": ["Technology", "Methodology", "Department alignment", "Stakeholder buy-in"],
            "datasets": [
                {
                    "label": "Your Results",
                    "data": [ <?=$technology_score_user_per?>, <?=$methodology_score_user_per?>, <?=$department_alignment_score_user_per?>, <?=$stakeholder_buy_in_score_user_per?>],
                    "backgroundColor": ["#263A68", "#263A68", "#263A68", "#263A68"],
                    "borderWidth": 0,
                },

                {
                    "label": "Comparison",
                    "data": [<?=$technology_score_benchmark_per?>, <?=$methodology_score_benchmark_per?>, <?=$department_alignment_score_benchmark_per?>, <?=$stakeholder_buy_in_score_benchmark_per?>],
                    "backgroundColor": ["#0DE578", "#0DE578", "#0DE578", "#0DE578"],
                    "borderWidth": 0,
                },
            ],

        },
        "options": {

            'maintainAspectRatio': true, 
            "barRoundness": 0.7,
            "responsive":true,
            "scales": {
                "yAxes": [
                    {
                        "ticks": {
                            "beginAtZero": true,
                            "max": 95,
                            "display": false
                        },
                        "offset": false,
                        "gridLines": {
                            "display": true,
                            "color": '#fff',
                        },
                    },
                ],
                "xAxes": [
                    {
                        "gridLines": {
                            "display": false,

                        },
                        "ticks": {
                            "fontSize": 13,
                            "color":"#000"

                        },
                        categoryPercentage:0.7,
                        barPercentage: 0.7
                    },
                ],
            },
            "legend": {
                "display": false,
                "labels": {
                    "fontColor": '#263A68',
                },
                "position": 'bottom',
                "align": 'start',
            },
            "tooltips": {
                "enabled":false
            },
            hover: {
              animationDuration: 0
            },
            animation: {
              duration: 1,
              onComplete: function() {
                var chartInstance = this.chart,
                  ctx = chartInstance.ctx;

                ctx.font = Chart.helpers.fontString(16, Chart.defaults.global.defaultFontStyle, Chart.defaults.global.defaultFontFamily);
                ctx.textAlign = 'center';
                ctx.textBaseline = 'bottom';
                ctx.fillStyle = "#263A68"

                this.data.datasets.forEach(function(dataset, i) {
                  var meta = chartInstance.controller.getDatasetMeta(i);
                  meta.data.forEach(function(bar, index) {
                    var data = dataset.data[index];

                    ctx.fillText(data+"%", bar._model.x, bar._model.y - 10);
                  });
                });
              }
            },
        },
    });

    
    //chart2-technology
    new Chart( document.getElementById("myChart2"), {
        type: "roundedBar",
        data: {
            labels: ["Your results", "Comparison"],
            datasets: [
                {
                    label: "Your Result",
                    data: [<?=$technology_score_user_per?>, <?=$technology_score_benchmark_per?>],
                    backgroundColor: ["#263A68", "#0DE578"],
                    borderWidth: 0,
                },
            ],
        },
        options: {
            tooltips: {enabled: false},
            barRoundness: 0.7,
            hover: {
              animationDuration: 0
            },
            animation: {
              duration: 1,
              onComplete: function() {
                var chartInstance = this.chart,
                  ctx = chartInstance.ctx;

                ctx.font = Chart.helpers.fontString(16, Chart.defaults.global.defaultFontStyle, Chart.defaults.global.defaultFontFamily);
                ctx.textAlign = 'center';
                ctx.textBaseline = 'bottom';
                ctx.fillStyle = "#263A68"

                this.data.datasets.forEach(function(dataset, i) {
                  var meta = chartInstance.controller.getDatasetMeta(i);
                  meta.data.forEach(function(bar, index) {
                    var data = dataset.data[index];

                    ctx.fillText(data+"%", bar._model.x, bar._model.y - 10);
                  });
                });
              }
            },
            responsive:true,
            curvature: 1,
            scales: {
                yAxes: [
                    {
                        ticks: {
                            beginAtZero: true,
                            max: 95,
                            display: false,
                        },
                        offset: false,
                        gridLines: {
                            display: true,
                            color: '#fff',
                        },
                    },
                ],
                xAxes: [
                    {
                        gridLines: {
                            display: false,
                        },
                        "ticks": {
                            "fontSize": 13,
                            "color":"#000"

                        },
                        categoryPercentage:0.6,
                        barPercentage: 0.9
                    },
                ],
            },
            legend: {
                display: false,
                labels: {
                    fontColor: '#263A68',
                    fontStyle:"bold",
                },
                position: 'bottom',
                align: 'start',
            },
        },
    });

    //chart3-methodology 
    new Chart( document.getElementById("myChart3"), {
        type: "roundedBar",
        data: {
            labels: ["Your results", "Comparison"],
            datasets: [
                {
                    label: "Your Result",
                    data: [<?=$methodology_score_user_per?>, <?=$methodology_score_benchmark_per?>],
                    backgroundColor: ["#263A68", "#0DE578"],
                    borderWidth: 0,
                },
            ],
        },
        options: {
            tooltips: {enabled: false},
            barRoundness: 0.7,
            hover: {
              animationDuration: 0
            },
            animation: {
              duration: 1,
              onComplete: function() {
                var chartInstance = this.chart,
                  ctx = chartInstance.ctx;

                ctx.font = Chart.helpers.fontString(16, Chart.defaults.global.defaultFontStyle, Chart.defaults.global.defaultFontFamily);
                ctx.textAlign = 'center';
                ctx.textBaseline = 'bottom';
                ctx.fillStyle = "#263A68"

                this.data.datasets.forEach(function(dataset, i) {
                  var meta = chartInstance.controller.getDatasetMeta(i);
                  meta.data.forEach(function(bar, index) {
                    var data = dataset.data[index];

                    ctx.fillText(data+"%", bar._model.x, bar._model.y - 10);
                  });
                });
              }
            },
            responsive:true,
            curvature: 1,
            scales: {
                yAxes: [
                    {
                        ticks: {
                            beginAtZero: true,
                            max: 95,
                            display: false,
                        },
                        offset: false,
                        gridLines: {
                            display: true,
                            color: '#fff',
                        },
                    },
                ],
                xAxes: [
                    {
                        gridLines: {
                            display: false,
                        },
                        "ticks": {
                          "fontSize": 13,
                          "color":"#000"

                        },
                        categoryPercentage:0.6,
                        barPercentage: 0.9
                    },
                    
                ],
            },
            legend: {
                display: false,
                labels: {
                    fontColor: '#263A68',
                    fontStyle:"bold",
                },
                position: 'bottom',
                align: 'start',
            },
        },
    });

    //chart4-department 
    new Chart( document.getElementById("myChart4"), {
        type: "roundedBar",
        data: {
            labels: ["Your results", "Comparison"],
            datasets: [
                {
                    label: "Your Result",
                    data: [<?=$department_alignment_score_user_per?>, <?=$department_alignment_score_benchmark_per?>],
                    backgroundColor: ["#263A68", "#0DE578"],
                    borderWidth: 0,
                },
            ],
        },
        options: {
            tooltips: {enabled: false},
            barRoundness: 0.7,
            hover: {
              animationDuration: 0
            },
            animation: {
              duration: 1,
              onComplete: function() {
                var chartInstance = this.chart,
                  ctx = chartInstance.ctx;

                ctx.font = Chart.helpers.fontString(16, Chart.defaults.global.defaultFontStyle, Chart.defaults.global.defaultFontFamily);
                ctx.textAlign = 'center';
                ctx.textBaseline = 'bottom';
                ctx.fillStyle = "#263A68"

                this.data.datasets.forEach(function(dataset, i) {
                  var meta = chartInstance.controller.getDatasetMeta(i);
                  meta.data.forEach(function(bar, index) {
                    var data = dataset.data[index];

                    ctx.fillText(data+"%", bar._model.x, bar._model.y - 10);
                  });
                });
              }
            },
            responsive:true,
            curvature: 1,
            scales: {
                yAxes: [
                    {
                        ticks: {
                            beginAtZero: true,
                            max: 95,
                            display: false,
                        },
                        offset: false,
                        gridLines: {
                            display: true,
                            color: '#fff',
                        },
                    },
                ],
                xAxes: [
                    {
                        gridLines: {
                            display: false,
                        },
                        "ticks": {
                            "fontSize": 13,
                            "color":"#000"

                        },
                        categoryPercentage:0.6,
                        barPercentage: 0.9
                    },
                ],
            },
            legend: {
                display: false,
                labels: {
                    fontColor: '#263A68',
                    fontStyle:"bold",
                },
                position: 'bottom',
                align: 'start',
            },
        },
    });

    

    //chart5-stakeholder
    new Chart( document.getElementById("myChart5"), {
        type: "roundedBar",
        data: {
            labels: ["Your results", "Comparison"],
            datasets: [
                {
                    label: "Your Result",
                    data: [<?=$stakeholder_buy_in_score_user_per?>, <?=$stakeholder_buy_in_score_benchmark_per?>],
                    backgroundColor: ["#263A68", "#0DE578"],
                    borderWidth: 0,
                },
            ],
        },
        options: {
            tooltips: {enabled: false},
            barRoundness: 0.7,
            hover: {
              animationDuration: 0
            },
            animation: {
              duration: 1,
              onComplete: function() {
                var chartInstance = this.chart,
                  ctx = chartInstance.ctx;

                ctx.font = Chart.helpers.fontString(16, Chart.defaults.global.defaultFontStyle, Chart.defaults.global.defaultFontFamily);
                ctx.textAlign = 'center';
                ctx.textBaseline = 'bottom';
                ctx.fillStyle = "#263A68"

                this.data.datasets.forEach(function(dataset, i) {
                  var meta = chartInstance.controller.getDatasetMeta(i);
                  meta.data.forEach(function(bar, index) {
                    var data = dataset.data[index];

                    ctx.fillText(data+"%", bar._model.x, bar._model.y - 10);
                  });
                });
              }
            },
            responsive:true,
            curvature: 1,
            scales: {
                yAxes: [
                    {
                        ticks: {
                            beginAtZero: true,
                            max: 95,
                            display: false,
                        },
                        offset: false,
                        gridLines: {
                            display: true,
                            color: '#fff',
                        },
                    },
                ],
                xAxes: [
                    {
                        gridLines: {
                            display: false,
                        },
                        "ticks": {
                            "fontSize": 13,
                            "color":"#000"

                        },
                        categoryPercentage:0.6,
                        barPercentage: 0.9
                    },
                ],
            },
            legend: {
                display: false,
                labels: {
                    fontColor: '#263A68',
                    fontStyle:"bold",
                },
                position: 'bottom',
                align: 'start',
            },
        },
    });
}
window.onload = function() { drawGraphs(); }; */

</script>
<script type="text/javascript">
/*
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

// draws a rectangle with a rounded top
Chart.helpers.drawRoundedTopRectangle = function(ctx, x, y, width, height, radius) {
  ctx.beginPath();
  ctx.moveTo(x + radius, y);
  // top right corner
  ctx.lineTo(x + width - radius, y);
  ctx.quadraticCurveTo(x + width, y, x + width, y + radius);
  // bottom right corner
  ctx.lineTo(x + width, y + height);
  // bottom left corner
  ctx.lineTo(x, y + height);
  // top left 
  ctx.lineTo(x, y + radius);
  ctx.quadraticCurveTo(x, y, x + radius, y);
  ctx.closePath();
};

Chart.elements.RoundedTopRectangle = Chart.elements.Rectangle.extend({
  draw: function() {
    var ctx = this._chart.ctx;
    var vm = this._view;
    var left, right, top, bottom, signX, signY, borderSkipped;
    var borderWidth = vm.borderWidth;

    if (!vm.horizontal) {
      // bar
      left = vm.x - vm.width / 2;
      right = vm.x + vm.width / 2;
      top = vm.y;
      bottom = vm.base;
      signX = 1;
      signY = bottom > top? 1: -1;
      borderSkipped = vm.borderSkipped || 'bottom';
    } else {
      // horizontal bar
      left = vm.base;
      right = vm.x;
      top = vm.y - vm.height / 2;
      bottom = vm.y + vm.height / 2;
      signX = right > left? 1: -1;
      signY = 1;
      borderSkipped = vm.borderSkipped || 'left';
    }

    // Canvas doesn't allow us to stroke inside the width so we can
    // adjust the sizes to fit if we're setting a stroke on the line
    if (borderWidth) {
      // borderWidth shold be less than bar width and bar height.
      var barSize = Math.min(Math.abs(left - right), Math.abs(top - bottom));
      borderWidth = borderWidth > barSize? barSize: borderWidth;
      var halfStroke = borderWidth / 2;
      // Adjust borderWidth when bar top position is near vm.base(zero).
      var borderLeft = left + (borderSkipped !== 'left'? halfStroke * signX: 0);
      var borderRight = right + (borderSkipped !== 'right'? -halfStroke * signX: 0);
      var borderTop = top + (borderSkipped !== 'top'? halfStroke * signY: 0);
      var borderBottom = bottom + (borderSkipped !== 'bottom'? -halfStroke * signY: 0);
      // not become a vertical line?
      if (borderLeft !== borderRight) {
        top = borderTop;
        bottom = borderBottom;
      }
      // not become a horizontal line?
      if (borderTop !== borderBottom) {
        left = borderLeft;
        right = borderRight;
      }
    }

    // calculate the bar width and roundess
    var barWidth = Math.abs(left - right);
    var roundness = this._chart.config.options.barRoundness || 0.5;
    var radius = barWidth * roundness * 0.5;
    
    // keep track of the original top of the bar
    var prevTop = top;
    
    // move the top down so there is room to draw the rounded top
    top = prevTop + radius;
    var barRadius = top - prevTop;

    ctx.beginPath();
    ctx.fillStyle = vm.backgroundColor;
    ctx.strokeStyle = vm.borderColor;
    ctx.lineWidth = borderWidth;

    // draw the rounded top rectangle
    Chart.helpers.drawRoundedTopRectangle(ctx, left, (top - barRadius + 1), barWidth, bottom - prevTop, barRadius);

    ctx.fill();
    if (borderWidth) {
      ctx.stroke();
    }

    // restore the original top value so tooltips and scales still work
    top = prevTop;
  },
});

Chart.defaults.roundedBar = Chart.helpers.clone(Chart.defaults.bar);

Chart.controllers.roundedBar = Chart.controllers.bar.extend({
  dataElementType: Chart.elements.RoundedTopRectangle
});

function drawGraphs() {
    
    new Chart(
        document.getElementById("chart1"),{
                type: "roundedBar",
                data: {
                    labels: ["Your results", "Comparison"],
                    datasets: [
                        {
                            label: "Your Result",
                            data: [80, 65],
                            backgroundColor: ["#263A68", "#0DE578"],
                            borderWidth: 0,
                        },
                    ],
                },
                options: {
                    tooltips: {enabled: false},
                    barRoundness: 0.7,
                    hover: {
                      animationDuration: 0
                    },
                    animation: {
                      duration: 1,
                      onComplete: function() {
                        var chartInstance = this.chart,
                          ctx = chartInstance.ctx;

                        ctx.font = Chart.helpers.fontString(16, Chart.defaults.global.defaultFontStyle, Chart.defaults.global.defaultFontFamily);
                        ctx.textAlign = 'center';
                        ctx.textBaseline = 'bottom';
                        ctx.fillStyle = "#263A68"

                        this.data.datasets.forEach(function(dataset, i) {
                          var meta = chartInstance.controller.getDatasetMeta(i);
                          meta.data.forEach(function(bar, index) {
                            var data = dataset.data[index];

                            ctx.fillText(data+"%", bar._model.x, bar._model.y - 10);
                          });
                        });
                      }
                    },
                    responsive:true,
                    curvature: 1,
                    scales: {
                        yAxes: [
                            {
                                ticks: {
                                    beginAtZero: true,
                                    max: 95,
                                    display: false,
                                },
                                offset: false,
                                gridLines: {
                                    display: true,
                                    color: '#fff',
                                },
                            },
                        ],
                        xAxes: [
                            {
                                gridLines: {
                                    display: false,
                                },
                            },
                        ],
                    },
                    legend: {
                        display: false,
                        labels: {
                            fontColor: '#263A68',
                        },
                        position: 'bottom',
                        align: 'start',
                    },
                },
            }
    );
}
window.onload = function() {drawGraphs(); };
*/

</script>
</body>
</html>