<?php /* Smarty version 2.6.22, created on 2015-11-26 16:01:14
         compiled from customer_orders_price_proportion/index.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>客户下单金额比例</title>
<script type="text/javascript">
$(function () {
    var chart;
	
	var ave_2013_price_1 = <?php echo $this->_tpl_vars['ave_2013_price_1']; ?>
;
	var ave_2013_price_2 = <?php echo $this->_tpl_vars['ave_2013_price_2']; ?>
;
	var ave_2013_price_3 = <?php echo $this->_tpl_vars['ave_2013_price_3']; ?>
;
	var ave_2013_price_4 = <?php echo $this->_tpl_vars['ave_2013_price_4']; ?>
;
	var ave_2013_price_5 = <?php echo $this->_tpl_vars['ave_2013_price_5']; ?>
;
	
	var ave_2014_price_1 = <?php echo $this->_tpl_vars['ave_2014_price_1']; ?>
;
	var ave_2014_price_2 = <?php echo $this->_tpl_vars['ave_2014_price_2']; ?>
;
	var ave_2014_price_3 = <?php echo $this->_tpl_vars['ave_2014_price_3']; ?>
;
	var ave_2014_price_4 = <?php echo $this->_tpl_vars['ave_2014_price_4']; ?>
;
	var ave_2014_price_5 = <?php echo $this->_tpl_vars['ave_2014_price_5']; ?>
;
	
	var ave_2015_price_1 = <?php echo $this->_tpl_vars['ave_2015_price_1']; ?>
;
	var ave_2015_price_2 = <?php echo $this->_tpl_vars['ave_2015_price_2']; ?>
;
	var ave_2015_price_3 = <?php echo $this->_tpl_vars['ave_2015_price_3']; ?>
;
	var ave_2015_price_4 = <?php echo $this->_tpl_vars['ave_2015_price_4']; ?>
;
	var ave_2015_price_5 = <?php echo $this->_tpl_vars['ave_2015_price_5']; ?>
;
	
	
    $(document).ready(function() {
        chart = new Highcharts.Chart({
            chart: {
                renderTo: 'customer_orders_price_proportion',
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
                text: '13、14、15客户下单金额比例',
                x: -20 //center
            },
            subtitle: {
                text: '',
                x: -20
            },
            xAxis: {
                categories:  ['第一次','第二次','第三次','第四次','第五次']
            },
            yAxis: {
                title: {
                    text: '金额（美元）'
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
                        this.x +": "+this.y+"美元";
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
                name: '13年客户下单金额比例',
                data: [ave_2013_price_1, ave_2013_price_2, ave_2013_price_3, ave_2013_price_4,ave_2013_price_5]
            },
			{
                name: '14年客户下单金额比例',
                data: [ave_2014_price_1, ave_2014_price_2, ave_2014_price_3, ave_2014_price_4,ave_2014_price_5]
            },{
                name: '15年客户下单金额比例',
                data: [ave_2015_price_1, ave_2015_price_2, ave_2015_price_3, ave_2015_price_4,ave_2015_price_5]
            }
			]
        });
    });
    
});
</script>
</head>

<body>
<div id="customer_orders_price_proportion" style=" float:left; display:block; margin:10px; overflow: auto; width:1020px; height:500px;  line-height:21px; background:#FFF; overflow-x:hidden; overflow-y:hidden;">
</div>
</body>
</html>