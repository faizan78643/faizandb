$(document).ready(function(){
	$.ajax({
		url: "http://localhost/faizandb/data.php",
		method: "GET",
		success: function(data) {//going in data.php and getting pcode and quantity, callas data.php
			console.log(data);
			var item = [];
			var quantity = [];

			for(var i in data) {
				item.push(data[i].PCODE);// made two arrays and adding values in it 
				quantity.push(data[i].QUANTITY);//both data.php and and app.js are used in chart.php
			}

			var chartdata = {
				labels: item,
				datasets : [
					{
						label: 'QUANTITY',
						backgroundColor: 'green',
						borderColor: 'rgba(200, 200, 200, 0.75)',
						hoverBackgroundColor: 'black',
						hoverBorderColor: 'rgba(200, 200, 200, 1)',
						data: quantity
					}
				]
			};

			var ctx = $("#mycanvas");

			var barGraph = new Chart(ctx, {
				type: 'bar',// can make any graph pie line etc
				data: chartdata,
				options: {
  					scales: {
    					yAxes: [{
      						scaleLabel: {
        						display: true,
        						labelString: 'SOLD QUANTITY'
      						}
    					}],
    					xAxes: [{
    						scaleLabel: {
        						display: true,
        						labelString: 'ITEMS'
      						}
    					}]
  					}     
				}
			});
		},
		error: function(data) {
			console.log(data);
		}
	});
});
