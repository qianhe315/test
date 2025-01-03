<?php /* Smarty version 2.6.22, created on 2015-11-26 16:53:27
         compiled from customer_orders_proportion/index.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>客户下单比例</title>
<script type="text/javascript">
$(function () {
    var chart;
	
	var o_2013_1 = <?php echo $this->_tpl_vars['o_2013_1']; ?>
;
	var o_2013_2 = <?php echo $this->_tpl_vars['o_2013_2']; ?>
;
	var o_2013_3 = <?php echo $this->_tpl_vars['o_2013_3']; ?>
;
	var o_2013_4 = <?php echo $this->_tpl_vars['o_2013_4']; ?>
;
	var o_2013_5 = <?php echo $this->_tpl_vars['o_2013_5']; ?>
;
	
	var o_2014_1 = <?php echo $this->_tpl_vars['o_2014_1']; ?>
;
	var o_2014_2 = <?php echo $this->_tpl_vars['o_2014_2']; ?>
;
	var o_2014_3 = <?php echo $this->_tpl_vars['o_2014_3']; ?>
;
	var o_2014_4 = <?php echo $this->_tpl_vars['o_2014_4']; ?>
;
	var o_2014_5 = <?php echo $this->_tpl_vars['o_2014_5']; ?>
;
	
	var o_2015_1 = <?php echo $this->_tpl_vars['o_2015_1']; ?>
;
	var o_2015_2 = <?php echo $this->_tpl_vars['o_2015_2']; ?>
;
	var o_2015_3 = <?php echo $this->_tpl_vars['o_2015_3']; ?>
;
	var o_2015_4 = <?php echo $this->_tpl_vars['o_2015_4']; ?>
;
	var o_2015_5 = <?php echo $this->_tpl_vars['o_2015_5']; ?>
;
	
	
    $(document).ready(function() {
        chart = new Highcharts.Chart({
            chart: {
                renderTo: 'customer_orders_proportion',
                type: 'line',
                marginRight: 130,
                marginBottom:50
            },
			plotOptions:{ //设置数据点 
				line:{ 
					dataLabels:{ 
						enabled:true  //在数据点上显示对应的数据值 
					}, 
					//enableMouseTracking: false //取消鼠标滑向触发提示框 
				} 
			}, 
            title: {
                text: '13、14、15年客户下单比例',
                x: -20 //center
            },
            subtitle: {
                text: '',
                x: -20
            },
            xAxis: {
                categories:  ['第一次','第二次','第三次','第四次','第五次和五次以上']
            },
            yAxis: {
                title: {
                    text: '客户数量（个）'
                },
                plotLines: [{
                    value: 0,
                    width: 1,
                    color: '#808080'
                }]
            },
            tooltip: {
                formatter: function() {
                        return "<b><a href='http://www.baidu.com' target='navTab' >"+ this.series.name +"</a></b><br/>"+   //加HTML代码
                        this.x +": "+this.y+"个";
                }
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'top',
                x: -10,
                y: 50,
                borderWidth: 0
            },
            series: [
			{
                name: '13年客户下单比例',
                data: [o_2013_1, o_2013_2, o_2013_3, o_2013_4,o_2013_5]
            },
			{
                name: '14年客户下单比例',
                data: [o_2014_1, o_2014_2, o_2014_3, o_2014_4,o_2014_5]
            },{
                name: '15年客户下单比例',
                data: [o_2015_1, o_2015_2, o_2015_3, o_2015_4,o_2015_5]
            }
			]
        });
    });
    
});
</script>
</head>

<body>
<div id="customer_orders_proportion" style=" float:left; display:block; margin:10px; overflow: auto; width:1020px; height:500px;  line-height:21px; background:#FFF; overflow-x:hidden; overflow-y:hidden;">
</div>
</body>
</html>