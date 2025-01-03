<?php /* Smarty version 2.6.22, created on 2015-11-26 16:00:58
         compiled from client_orde_table/index.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>14年和15年每月下单客户数</title>
<script type="text/javascript">
$(function () {
    var chart;
	var year_2014_1 = <?php echo $this->_tpl_vars['year_2014_01']; ?>
;
	var year_2014_2 = <?php echo $this->_tpl_vars['year_2014_02']; ?>
;
	var year_2014_3 = <?php echo $this->_tpl_vars['year_2014_03']; ?>
;
	var year_2014_4 = <?php echo $this->_tpl_vars['year_2014_04']; ?>
;
	var year_2014_5 = <?php echo $this->_tpl_vars['year_2014_05']; ?>
;
	var year_2014_6 = <?php echo $this->_tpl_vars['year_2014_06']; ?>
;
	var year_2014_7 = <?php echo $this->_tpl_vars['year_2014_07']; ?>
;
	var year_2014_8 = <?php echo $this->_tpl_vars['year_2014_08']; ?>
;
	var year_2014_9 = <?php echo $this->_tpl_vars['year_2014_09']; ?>
;
	var year_2014_10 = <?php echo $this->_tpl_vars['year_2014_10']; ?>
;
	var year_2014_11 = <?php echo $this->_tpl_vars['year_2014_11']; ?>
;
	var year_2014_12 = <?php echo $this->_tpl_vars['year_2014_12']; ?>
;
	
	var year_2015_1 = <?php echo $this->_tpl_vars['year_2015_01']; ?>
;
	var year_2015_2 = <?php echo $this->_tpl_vars['year_2015_02']; ?>
;
	var year_2015_3 = <?php echo $this->_tpl_vars['year_2015_03']; ?>
;
	var year_2015_4 = <?php echo $this->_tpl_vars['year_2015_04']; ?>
;
	var year_2015_5 = <?php echo $this->_tpl_vars['year_2015_05']; ?>
;
	var year_2015_6 = <?php echo $this->_tpl_vars['year_2015_06']; ?>
;
	var year_2015_7 = <?php echo $this->_tpl_vars['year_2015_07']; ?>
;
	var year_2015_8 = <?php echo $this->_tpl_vars['year_2015_08']; ?>
;
	var year_2015_9 = <?php echo $this->_tpl_vars['year_2015_09']; ?>
;
	var year_2015_10 = <?php echo $this->_tpl_vars['year_2015_10']; ?>
;
	var year_2015_11 = <?php echo $this->_tpl_vars['year_2015_11']; ?>
;
	var year_2015_12 = <?php echo $this->_tpl_vars['year_2015_12']; ?>
;
	
    $(document).ready(function() {
        chart = new Highcharts.Chart({
            chart: {
                renderTo: 'client_orde_table',
                type: 'line',
                marginRight: 100,
                marginBottom: 25
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
                text: '14年和15年RBVL的下单客户数',
                x: -20 //center
            },
            subtitle: {
                text: '',
                x: -20
            },
            xAxis: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
                    'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
            },
            yAxis: {
                title: {
                    text: '下单客户数量（个）'
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
                y: 100,
                borderWidth: 0
            },
            series: [{
                name: '2015',
                data: [year_2015_1, year_2015_2, year_2015_3, year_2015_4, year_2015_5, year_2015_6, year_2015_7, year_2015_8, year_2015_9, year_2015_10, year_2015_11, year_2015_12]
            },
			{
                name: '2014',
                data: [year_2014_1, year_2014_2, year_2014_3, year_2014_4, year_2014_5, year_2014_6, year_2014_7, year_2014_8, year_2014_9, year_2014_10, year_2014_11, year_2014_12]
            }]
        });
    });
    
});
</script>
</head>

<body>
<div id="client_orde_table" style=" float:left; display:block; margin:10px; overflow: auto; width:1020px; height:500px;  line-height:21px; background:#FFF; overflow-x:hidden; overflow-y:hidden;">
</div>
</body>
</html>