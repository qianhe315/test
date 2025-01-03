<?php /* Smarty version 2.6.22, created on 2013-05-15 10:56:43
         compiled from chart/basic_line.html */ ?>
<script type="text/javascript">
$(function () {
    var chart;
    $(document).ready(function() {
        chart = new Highcharts.Chart({
            chart: {
                renderTo: 'container',    //指向HTML标签的ID
                type: 'line',             //类型
                marginRight: 130,
                marginBottom: 25
            },
            title: {
                text: '兽兽兽兽兽兽兽兽',   //主标题
                x: -20 //center
            },
            subtitle: {
                text: '东东东东',    //副标题
                x: -20
            },
            xAxis: {
                categories: <?php echo $this->_tpl_vars['category']; ?>
       //横轴项，数据类型必须是JSON数据
                    
            },
            yAxis: {
                title: {
                    text: '思思11'                        //纵轴标题
                },
                plotLines: [{
                    value: 0,
                    width: 1,
                    color: '#808080'
                }]
            },
            tooltip: {
                formatter: function() {
                        return '<b>'+ this.series.name +'</b><br/>'+
                        this.x +': '+ this.y +'°C';
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
            series: <?php echo $this->_tpl_vars['data']; ?>
     //需要调取数据JSON格式
               
        });
    });
    
});
		</script>
        
        
        
        <div id="container" style="min-width: 400px; height: 400px; margin: 0 auto;"></div>