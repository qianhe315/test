<?php /* Smarty version 2.6.22, created on 2014-02-10 14:14:03
         compiled from salesman_month_sales/index.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>业务员月销售额</title>
<script type="text/javascript">
$(function () {
    var chart;
    $(document).ready(function() {
        chart = new Highcharts.Chart({
            chart: {
                renderTo: 'index_container05',
                type: 'column',
                marginRight: 130,
                marginBottom: 50
            },
            title: {
                text: '业务员月销售额',
                x: -20 //center
            },
            subtitle: {
                text: '',
                x: -20
            },
            xAxis: {
                categories: <?php echo $this->_tpl_vars['data_user']; ?>

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
                        this.x +": "+ "$" +this.y;
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
            series: [{
                name: '<?php echo $this->_tpl_vars['date_ym02']; ?>
',
                data: <?php echo $this->_tpl_vars['yewu02']; ?>

            }, {
                name: '<?php echo $this->_tpl_vars['date_ym01']; ?>
',
                data: <?php echo $this->_tpl_vars['yewu01']; ?>

            }, {
                name: '<?php echo $this->_tpl_vars['date_ym']; ?>
',
                data: <?php echo $this->_tpl_vars['yewu']; ?>

            }]
        });
    });
    
});
</script>
</head>

<body>
<div id="index_container05" style=" float:left; display:block; margin:10px; overflow: auto; width:1020px; height:500px;  line-height:21px; background:#FFF; overflow-x:hidden; overflow-y:hidden;">
              </div>
</body>
</html>