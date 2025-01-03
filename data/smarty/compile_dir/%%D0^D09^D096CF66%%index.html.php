<?php /* Smarty version 2.6.22, created on 2014-02-10 14:12:12
         compiled from enquiries_new_customers/index.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=7" />
<title>询盘与新客户</title>


<script type="text/javascript">
$(function () {
   		data = <?php echo $this->_tpl_vars['data']; ?>
;
		data2 = <?php echo $this->_tpl_vars['data2']; ?>
;
    	$('#index_container03').highcharts({
    		
		    chart: {
		        type: 'arearange',
		        zoomType: 'x'
		    },
		    
		    title: {
		        text: '询盘&新客户成交'
		    },
		
		    xAxis: {
		        type: 'datetime'
		    },
		    
		    yAxis: {
		        title: {
		            text: null
		        }
		    },
		
		    tooltip: {
		        crosshairs: true,
		        shared: true,
		        valueSuffix: '个 '
		    },
		    
		   
		
		    series: [{
		        name: '询盘',
		        data: data
		    },{
		        name: '新客户',
		        data: data2
		    }
			]
		
		});

    
});
</script>

</head>

<body>

<div id="index_container03" style=" float:left; display:block; margin:10px; overflow: auto; width:1000px; height:500px; line-height:21px; background:#FFF; overflow-x:hidden; overflow-y:hidden;">
              </div>
</body>


</html>