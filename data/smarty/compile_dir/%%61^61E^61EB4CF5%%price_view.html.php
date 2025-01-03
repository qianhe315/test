<?php /* Smarty version 2.6.22, created on 2015-12-01 12:54:57
         compiled from customer_orders_price_info/price_view.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>客户此年12个月的金额折线图</title>
<script type="text/javascript">
$(function () {
    var chart;
	
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
                renderTo: 'price_view',
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
                text: '<?php echo $this->_tpl_vars['saleman_name']; ?>
的<?php echo $this->_tpl_vars['code']; ?>
客户在<?php echo $this->_tpl_vars['time']; ?>
年12个月的金额折线图',
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
                y: 100,
                borderWidth: 0
            },
            series: [
			{
                name: '<?php echo $this->_tpl_vars['code']; ?>
客户金额折线图',
                data: [m_1, m_2, m_3, m_4, m_5, m_6, m_7, m_8, m_9, m_10, m_11, m_12]
            }]
        });
    });
    
});
</script>
</head>

<body>
<div id="price_view" style=" float:left; display:block; margin:10px; overflow: auto; width:1020px; height:500px;  line-height:21px; background:#FFF; overflow-x:hidden; overflow-y:hidden;">
</div>
</body>
</html>