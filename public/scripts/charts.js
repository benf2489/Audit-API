var ctx = document.getElementById("myChart").getContext("2d");
Chart.defaults.global.defaultFontStyle = 'Bold'
            var myChart = new Chart(ctx, {
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
                            fontStyle:"bold",
                        },
                        position: 'bottom',
                        align: 'start',
                    },
                },
            });