$(document).ready(function(){lineChart();donutChart();pieChart();$(window).resize(function(){window.lineChart.redraw();window.donutChart.redraw();window.pieChart.redraw();});});
function lineChart(){window.lineChart=Morris.Line({element:'line-chart',data:[{y:'January',a:100},{y:'February',a:75},{y:'March',a:50},{y:'April',a:75},{y:'May',a:50},{y:'June',a:75},{y:'July',a:100}],xkey:'y',ykeys:['a'],labels:['Series A'],lineColors:['#009688'],lineWidth:'3px',resize:true,redraw:true});}
function donutChart(){window.donutChart=Morris.Donut({element:'donut-chart',data:[{label:"Normal Room",value:50},{label:"Ac Room",value:25},{label:"Special Room",value:5},{label:"DoubleBed room",value:10},{label:"Video Room",value:10},],backgroundColor:'#f2f5fa',labelColor:'#009688',colors:['#0BA462','#39B580','#67C69D','#95D7BB'],resize:true,redraw:true});}