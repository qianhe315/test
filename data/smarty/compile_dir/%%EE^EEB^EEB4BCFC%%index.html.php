<?php /* Smarty version 2.6.22, created on 2015-11-26 16:01:03
         compiled from new_client_transaction_cycle/index.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>13年、14年和15年新客户成交周期</title>
<script type="text/javascript">
$(function () {
    var chart;
	var year_2013_1 = <?php echo $this->_tpl_vars['year_2013_1_week']; ?>
;
	var year_2013_2 = <?php echo $this->_tpl_vars['year_2013_2_week']; ?>
;
	var year_2013_3 = <?php echo $this->_tpl_vars['year_2013_3_week']; ?>
;
	var year_2013_4 = <?php echo $this->_tpl_vars['year_2013_4_week']; ?>
;
	var year_2013_5 = <?php echo $this->_tpl_vars['year_2013_5_week']; ?>
;
	var year_2013_6 = <?php echo $this->_tpl_vars['year_2013_6_week']; ?>
;
	var year_2013_7 = <?php echo $this->_tpl_vars['year_2013_7_week']; ?>
;
	var year_2013_8 = <?php echo $this->_tpl_vars['year_2013_8_week']; ?>
;
	var year_2013_3_m = <?php echo $this->_tpl_vars['year_2013_3_m']; ?>
;
	var year_2013_4_m = <?php echo $this->_tpl_vars['year_2013_4_m']; ?>
;
	var year_2013_5_m = <?php echo $this->_tpl_vars['year_2013_5_m']; ?>
;
	var year_2013_6_m = <?php echo $this->_tpl_vars['year_2013_6_m']; ?>
;
	var year_2013_7_m = <?php echo $this->_tpl_vars['year_2013_7_m']; ?>
;
	
	var year_2014_1 = <?php echo $this->_tpl_vars['year_2014_1_week']; ?>
;
	var year_2014_2 = <?php echo $this->_tpl_vars['year_2014_2_week']; ?>
;
	var year_2014_3 = <?php echo $this->_tpl_vars['year_2014_3_week']; ?>
;
	var year_2014_4 = <?php echo $this->_tpl_vars['year_2014_4_week']; ?>
;
	var year_2014_5 = <?php echo $this->_tpl_vars['year_2014_5_week']; ?>
;
	var year_2014_6 = <?php echo $this->_tpl_vars['year_2014_6_week']; ?>
;
	var year_2014_7 = <?php echo $this->_tpl_vars['year_2014_7_week']; ?>
;
	var year_2014_8 = <?php echo $this->_tpl_vars['year_2014_8_week']; ?>
;
	var year_2014_3_m = <?php echo $this->_tpl_vars['year_2014_3_m']; ?>
;
	var year_2014_4_m = <?php echo $this->_tpl_vars['year_2014_4_m']; ?>
;
	var year_2014_5_m = <?php echo $this->_tpl_vars['year_2014_5_m']; ?>
;
	var year_2014_6_m = <?php echo $this->_tpl_vars['year_2014_6_m']; ?>
;
	var year_2014_7_m = <?php echo $this->_tpl_vars['year_2014_7_m']; ?>
;
	
	var year_2015_1 = <?php echo $this->_tpl_vars['year_2015_1_week']; ?>
;
	var year_2015_2 = <?php echo $this->_tpl_vars['year_2015_2_week']; ?>
;
	var year_2015_3 = <?php echo $this->_tpl_vars['year_2015_3_week']; ?>
;
	var year_2015_4 = <?php echo $this->_tpl_vars['year_2015_4_week']; ?>
;
	var year_2015_5 = <?php echo $this->_tpl_vars['year_2015_5_week']; ?>
;
	var year_2015_6 = <?php echo $this->_tpl_vars['year_2015_6_week']; ?>
;
	var year_2015_7 = <?php echo $this->_tpl_vars['year_2015_7_week']; ?>
;
	var year_2015_8 = <?php echo $this->_tpl_vars['year_2015_8_week']; ?>
;
	var year_2015_3_m = <?php echo $this->_tpl_vars['year_2015_3_m']; ?>
;
	var year_2015_4_m = <?php echo $this->_tpl_vars['year_2015_4_m']; ?>
;
	var year_2015_5_m = <?php echo $this->_tpl_vars['year_2015_5_m']; ?>
;
	var year_2015_6_m = <?php echo $this->_tpl_vars['year_2015_6_m']; ?>
;
	var year_2015_7_m = <?php echo $this->_tpl_vars['year_2015_7_m']; ?>
;
	
    $(document).ready(function() {
        chart = new Highcharts.Chart({
            chart: {
                renderTo: 'new_client_transaction_cycle',
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
                text: '13年-15年新客户首单成交周期',
                x: -20 //center
            },
            subtitle: {
                text: '',
                x: -20
            },
            xAxis: {
                categories: ['1周', '2周', '3周', '4周', '5周', '6周','7周', '8周', '3个月', '4个月', '5个月', '6个月', '之后成交']
            },
            yAxis: {
                title: {
                    text: '新客户成交数量（个）'
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
                data: [year_2015_1, year_2015_2, year_2015_3, year_2015_4, year_2015_5, year_2015_6, year_2015_7, year_2015_8, year_2015_3_m, year_2015_4_m, year_2015_5_m, year_2015_6_m, year_2015_7_m]
            },
			{
                name: '2014',
                data: [year_2014_1, year_2014_2, year_2014_3, year_2014_4, year_2014_5, year_2014_6, year_2014_7, year_2014_8, year_2014_3_m, year_2014_4_m, year_2014_5_m, year_2014_6_m, year_2014_7_m]
            },
			{
                name: '2013',
                data: [year_2013_1, year_2013_2, year_2013_3, year_2013_4, year_2013_5, year_2013_6, year_2013_7, year_2013_8, year_2013_3_m, year_2013_4_m, year_2013_5_m, year_2013_6_m, year_2013_7_m]
            }
			]
        });
    });
    
});
</script>
</head>

<body>
    <a href="http://192.168.1.4/new_client_transaction_cycle/get_info" class="edit"  target="ajaxTodo" rel="page1" posttype="string" title="获取数据?"><button>获取数据</button></a>
    <br />
    <div id="new_client_transaction_cycle" style=" float:left; display:block; margin:10px; overflow: auto; width:1020px; height:500px;  line-height:21px; background:#FFF; overflow-x:hidden; overflow-y:hidden;">
</div>
</body>
</html>