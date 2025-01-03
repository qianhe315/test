<?php /* Smarty version 2.6.22, created on 2015-11-26 16:48:37
         compiled from old_client_lost_three/index.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>老客户流失（半年）</title>
<script type="text/javascript">
$(function () {
    var chart;
	var y2014_m_1 = <?php echo $this->_tpl_vars['y2014_m_1']; ?>
;
	var y2014_m_2 = <?php echo $this->_tpl_vars['y2014_m_2']; ?>
;
	var y2014_m_3 = <?php echo $this->_tpl_vars['y2014_m_3']; ?>
;
	var y2014_m_4 = <?php echo $this->_tpl_vars['y2014_m_4']; ?>
;
	var y2014_m_5 = <?php echo $this->_tpl_vars['y2014_m_5']; ?>
;
	var y2014_m_6 = <?php echo $this->_tpl_vars['y2014_m_6']; ?>
;
	var y2014_m_7 = <?php echo $this->_tpl_vars['y2014_m_7']; ?>
;
	var y2014_m_8 = <?php echo $this->_tpl_vars['y2014_m_8']; ?>
;
	var y2014_m_9 = <?php echo $this->_tpl_vars['y2014_m_9']; ?>
;
	var y2014_m_10 = <?php echo $this->_tpl_vars['y2014_m_10']; ?>
;
	var y2014_m_11 = <?php echo $this->_tpl_vars['y2014_m_11']; ?>
;
	var y2014_m_12 = <?php echo $this->_tpl_vars['y2014_m_12']; ?>
;
	
	var y2015_m_1 = <?php echo $this->_tpl_vars['y2015_m_1']; ?>
;
	var y2015_m_2 = <?php echo $this->_tpl_vars['y2015_m_2']; ?>
;
	var y2015_m_3 = <?php echo $this->_tpl_vars['y2015_m_3']; ?>
;
	var y2015_m_4 = <?php echo $this->_tpl_vars['y2015_m_4']; ?>
;
	var y2015_m_5 = <?php echo $this->_tpl_vars['y2015_m_5']; ?>
;
	var y2015_m_6 = <?php echo $this->_tpl_vars['y2015_m_6']; ?>
;
	var y2015_m_7 = <?php echo $this->_tpl_vars['y2015_m_7']; ?>
;
	var y2015_m_8 = <?php echo $this->_tpl_vars['y2015_m_8']; ?>
;
	var y2015_m_9 = <?php echo $this->_tpl_vars['y2015_m_9']; ?>
;
	var y2015_m_10 = <?php echo $this->_tpl_vars['y2015_m_10']; ?>
;
	var y2015_m_11 = <?php echo $this->_tpl_vars['y2015_m_11']; ?>
;
	var y2015_m_12 = <?php echo $this->_tpl_vars['y2015_m_12']; ?>
;
	
    $(document).ready(function() {
        chart = new Highcharts.Chart({
            chart: {
                renderTo: 'old_client_lost_three',
                type: 'line',
                marginRight: 130,
                marginBottom: 50
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
                text: '老客户流失（半年）最后下单时间为6个月前当月',
                x: -20 //center
            },
            subtitle: {
                text: '',
                x: -20
            },
            xAxis: {
                categories:  ['1月', '2月', '3月', '4月', '5月', '6月', '7月', '8月', '9月', '10月', '11月', '12月']
            },
            yAxis: {
                title: {
                    text: '数量（个）'
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
            plotOptions: {
                series: {
					cursor: 'pointer',
					events: {
						 click: function(e) {
						window.open(e.point.url );
						//上面是当前页跳转，如果是要跳出新页面，那就用
						//window.open(e.point.url);
						//这里的url要后面的data里给出
						}
					}
                }
            },
            series: [
			{
                name: '14年流失个数',
                data: [
				{name:y2014_m_1,y: y2014_m_1,url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/old_client_lost/find_customers-id-<?php echo $this->_tpl_vars['code_2014_1']; ?>
'},
				{name:y2014_m_2,y: y2014_m_2,url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/old_client_lost/find_customers-id-<?php echo $this->_tpl_vars['code_2014_2']; ?>
'},
				{name:y2014_m_3,y: y2014_m_3,url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/old_client_lost/find_customers-id-<?php echo $this->_tpl_vars['code_2014_3']; ?>
'}, 
				{name:y2014_m_4,y: y2014_m_4,url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/old_client_lost/find_customers-id-<?php echo $this->_tpl_vars['code_2014_4']; ?>
'}, 
				{name:y2014_m_5,y: y2014_m_5,url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/old_client_lost/find_customers-id-<?php echo $this->_tpl_vars['code_2014_5']; ?>
'}, 
				{name:y2014_m_6,y: y2014_m_6,url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/old_client_lost/find_customers-id-<?php echo $this->_tpl_vars['code_2014_6']; ?>
'}, 
				{name:y2014_m_7,y: y2014_m_7,url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/old_client_lost/find_customers-id-<?php echo $this->_tpl_vars['code_2014_7']; ?>
'}, 
				{name:y2014_m_8,y: y2014_m_8,url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/old_client_lost/find_customers-id-<?php echo $this->_tpl_vars['code_2014_8']; ?>
'}, 
				{name:y2014_m_9,y: y2014_m_9,url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/old_client_lost/find_customers-id-<?php echo $this->_tpl_vars['code_2014_9']; ?>
'}, 
				{name:y2014_m_10,y: y2014_m_10,url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/old_client_lost/find_customers-id-<?php echo $this->_tpl_vars['code_2014_10']; ?>
'}, 
				{name:y2014_m_11,y: y2014_m_11,url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/old_client_lost/find_customers-id-<?php echo $this->_tpl_vars['code_2014_11']; ?>
'}, 
				{name:y2014_m_12,y: y2014_m_12,url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/old_client_lost/find_customers-id-<?php echo $this->_tpl_vars['code_2014_12']; ?>
'}
				]
            },
			{
                name: '15年流失个数',
                data: [
				{name:y2015_m_1,y: y2015_m_1,url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/old_client_lost/find_customers-id-<?php echo $this->_tpl_vars['code_2015_1']; ?>
'},
				{name:y2015_m_2,y: y2015_m_2,url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/old_client_lost/find_customers-id-<?php echo $this->_tpl_vars['code_2015_2']; ?>
'},
				{name:y2015_m_3,y: y2015_m_3,url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/old_client_lost/find_customers-id-<?php echo $this->_tpl_vars['code_2015_3']; ?>
'}, 
				{name:y2015_m_4,y: y2015_m_4,url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/old_client_lost/find_customers-id-<?php echo $this->_tpl_vars['code_2015_4']; ?>
'}, 
				{name:y2015_m_5,y: y2015_m_5,url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/old_client_lost/find_customers-id-<?php echo $this->_tpl_vars['code_2015_5']; ?>
'}, 
				{name:y2015_m_6,y: y2015_m_6,url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/old_client_lost/find_customers-id-<?php echo $this->_tpl_vars['code_2015_6']; ?>
'}, 
				{name:y2015_m_7,y: y2015_m_7,url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/old_client_lost/find_customers-id-<?php echo $this->_tpl_vars['code_2015_7']; ?>
'}, 
				{name:y2015_m_8,y: y2015_m_8,url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/old_client_lost/find_customers-id-<?php echo $this->_tpl_vars['code_2015_8']; ?>
'}, 
				{name:y2015_m_9,y: y2015_m_9,url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/old_client_lost/find_customers-id-<?php echo $this->_tpl_vars['code_2015_9']; ?>
'}, 
				{name:y2015_m_10,y: y2015_m_10,url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/old_client_lost/find_customers-id-<?php echo $this->_tpl_vars['code_2015_10']; ?>
'}, 
				{name:y2015_m_11,y: y2015_m_11,url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/old_client_lost/find_customers-id-<?php echo $this->_tpl_vars['code_2015_11']; ?>
'}, 
				{name:y2015_m_12,y: y2015_m_12,url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/old_client_lost/find_customers-id-<?php echo $this->_tpl_vars['code_2015_12']; ?>
'}
				]
            }]
        });
    });
    
});
</script>
</head>

<body>
<div id="old_client_lost_three" style=" float:left; display:block; margin:10px; overflow: auto; width:1020px; height:500px;  line-height:21px; background:#FFF; overflow-x:hidden; overflow-y:hidden;">
</div>
</body>
</html>