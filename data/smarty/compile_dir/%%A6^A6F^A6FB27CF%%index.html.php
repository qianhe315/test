<?php /* Smarty version 2.6.22, created on 2015-11-26 16:03:51
         compiled from old_client_order_cycle/index.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>老客户下单间隔周期</title>
<script type="text/javascript">
$(function () {
    var chart;
	var w_1 = <?php echo $this->_tpl_vars['w_1']; ?>
;
	var w_2 = <?php echo $this->_tpl_vars['w_2']; ?>
;
	var w_3 = <?php echo $this->_tpl_vars['w_3']; ?>
;
	var w_4 = <?php echo $this->_tpl_vars['w_4']; ?>
;
	
	var m_1 = <?php echo $this->_tpl_vars['m_1']; ?>
;
	var m_2 = <?php echo $this->_tpl_vars['m_2']; ?>
;
	var m_3 = <?php echo $this->_tpl_vars['m_3']; ?>
;
	var m_4 = <?php echo $this->_tpl_vars['m_4']; ?>
;
	var m_5 = <?php echo $this->_tpl_vars['m_5']; ?>
;
	var m_6 = <?php echo $this->_tpl_vars['m_6']; ?>
;
	var m_7 = <?php echo $this->_tpl_vars['m_7']; ?>
;
	var m_8 = <?php echo $this->_tpl_vars['m_8']; ?>
;
	var m_9 = <?php echo $this->_tpl_vars['m_9']; ?>
;
	var m_10 = <?php echo $this->_tpl_vars['m_10']; ?>
;
	var m_11 = <?php echo $this->_tpl_vars['m_11']; ?>
;
	var m_12 = <?php echo $this->_tpl_vars['m_12']; ?>
;
	
    $(document).ready(function() {
        chart = new Highcharts.Chart({
            chart: {
                renderTo: 'old_client_order_cycle',
                type: 'column',
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
                text: '新客户首次成交和下次成交间隔周期',
                x: -20 //center
            },
            subtitle: {
                text: '',
                x: -20
            },
            xAxis: {
                categories:  ['1周','2周','3周','4周','1个月', '2个月', '3个月', '4个月', '5个月', '6个月', '7个月', '8个月', '9个月', '10个月', '11个月', '12个月']
            },
            yAxis: {
                title: {
                    text: '下单数量（个）'
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
                name: '老客户下单',
                data: [w_1, w_2, w_3, w_4,m_1, m_2, m_3, m_4, m_5, m_6, m_7, m_8, m_9, m_10, m_11, m_12]
            }]
        });
    });
    
});
</script>
</head>

<body>
<div id="old_client_order_cycle" style=" float:left; display:block; margin:10px; overflow: auto; width:1020px; height:500px;  line-height:21px; background:#FFF; overflow-x:hidden; overflow-y:hidden;">
</div>
</body>
</html>