<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
<div>
	<!-- <div style="width:350px;margin:0 auto; float:left ;">
  <canvas id="myChart"></canvas>
</div> -->
<div style="width:850px;height: 550px;margin:0 auto;">
  <canvas id="myChart2"></canvas>
</div>
</div>

</body>
<script>
 

  /*const data = {
  labels: [
    'Red',
    'Blue',
    'Yellow'
  ],
  datasets: [{
    label: 'My First Dataset',
    data: [300, 50, 100],
    backgroundColor: [
      'rgb(255, 99, 132)',
      'rgb(54, 162, 235)',
      'rgb(255, 205, 86)'
    ],
    hoverOffset: 4
  }]
};

  const config = {
    type: 'pie',
    data: data,
    options: {}
  };*/
</script>
<script>
  /*const myChart = new Chart(
    document.getElementById('myChart'),
    config
  );*/
</script>

<script>
        $(document).ready(function () {
            //showGraph();
        });


        function showGraph(){
        	$.ajax({ //Process the form using $.ajax()
            type      : 'POST', //Method type
            url       : 'data.php', //Your form processing file URL
            //data      : postForm, //Forms name
            dataType  : 'json',
            success   : function(result) {
            	var dataTest=result.Data;
            	var labels = [];
                var result = [];
                var color = [];
            	//console.log(dataTest);
            	var dynamicColors = function() {
		            var r = Math.floor(Math.random() * 255);
		            var g = Math.floor(Math.random() * 255);
		            var b = Math.floor(Math.random() * 255);
		            return "rgb(" + r + "," + g + "," + b + ")";
		         };
            	dataTest=JSON.parse(JSON.stringify(dataTest));
            	$.each(dataTest, function(i, item) {
				    labels.push(item.ten + '-' + item.total);
                    result.push(item.total);
                    color.push(dynamicColors());
				});

				var pie = $("#myChart");
                var myChart = new Chart(pie, {
                    type: 'pie',
                    data: {
                        labels: labels,
                        datasets: [
                            {
                                data: result,
                                borderColor: ["rgba(217, 83, 79,1)","rgba(240, 173, 78, 1)","rgba(92, 184, 92, 1)"],
                                backgroundColor: color,
                            }
                        ]
                    },
                    options: {
                        title: {
                            display: true,
                            text: "Chuyên ngành"
                        },
                     	layout: {
					            padding: {
					            }
					        },
					    responsive: true,
    					maintainAspectRatio: false
                    }
                });
            }             
        	});
                
        }
        </script>

    </script>
    <script>
        $(document).ready(function () {
            showGraph2();
        });


        function showGraph2(){
        	$.ajax({ //Process the form using $.ajax()
            type      : 'POST', //Method type
            url       : 'data.php', //Your form processing file URL
            //data      : postForm, //Forms name
            dataType  : 'json',
            success   : function(result) {
            	var dataTest=result.Data;
            	var formStatusVar = [];
                var total = []; 
                var color = [];
            	//console.log(dataTest);
            	dataTest=JSON.parse(JSON.stringify(dataTest));
            	var dynamicColors = function() {
		            var r = Math.floor(Math.random() * 255);
		            var g = Math.floor(Math.random() * 255);
		            var b = Math.floor(Math.random() * 255);
		            return "rgb(" + r + "," + g + "," + b + ")";
		         };
            	$.each(dataTest, function(i, item) {
				    formStatusVar.push(item.ten + '-' + item.total);
                    total.push(item.total);
                    color.push(dynamicColors());
				});

				var options2 = {
                        legend: {
                            display: false
                        },
                        scales: {
                            xAxes: [{
                                display: true
                            }],
                        yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                        }
                    };

                 var myChart2 = {
                        labels: formStatusVar,
                        datasets: [
                            {
                                label: 'Tổng số',
                                backgroundColor:color,
                                borderColor: '#46d5f1',
                                hoverBackgroundColor: '#0ec2b6',
                                hoverBorderColor: '#42f5ef',
                                data: total
                            }
                        ]
                    };
                 var bar = $("#myChart2"); 
                    var barGraph = new Chart(bar, {
                        type: 'bar',
                        data: myChart2,
                         options: {
						    indexAxis: 'y',
						    responsive: true,
    						maintainAspectRatio: false,
    						aspectRatio: 1, 
						  }
                    });



            }             
        	});
                
        }
        </script>
        
    </script>
</html>
