<?php /* Smarty version 2.6.22, created on 2015-11-21 10:44:32
         compiled from national_distribution/index.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>国家分布</title>
<div id="container" style="height: 520px; min-width: 310px; width: 800px; margin: 0 auto; text-align:center; line-height: 520px">
	Downloading map...
</div>
<script src="http://lib.sinaapp.com/js/jquery/1.7.2/jquery.min.js"></script>
<script src="http://code.highcharts.com/maps/highmaps.js"></script>
<script src="http://code.highcharts.com/maps/modules/data.js"></script>
<script src="http://code.highcharts.com/maps/modules/exporting.js"></script>
<script src="http://code.highcharts.com/mapdata/countries/us/us-all-all.js"></script>
<script type="text/javascript">

$(function () {
    var chart;
    $(document).ready(function() {
		
        chart = new Highcharts.Chart({
            chart: {
                renderTo: 'index_container04',
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false
            },
            title: {
                text: '国家分布'
            },
            tooltip: {
			
                formatter: function() {
                     return '  <b>  '+ this.point.name +'  </b>:  '+ (this.percentage).toFixed(1) +'  %';
			 
				  //跟随鼠标滑动时候显示的国家和数据
					
                }
			
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
					},			
					dataLabels: {
						enabled: true,
						color: '#000000',
						connectorColor: '#000000',
						formatter: function() {
							return '<b>'+ this.point.name +'</b>: '+ (this.percentage).toFixed(1) +' %';//图外的国家和数据的显示
						}
					}
                }
            },
		
            series: [{
				
                type: 'pie',
                name: 'Browser share',
                data: [
				
				{ name: '<?php echo $this->_tpl_vars['gj_name01']; ?>
', y: <?php echo $this->_tpl_vars['data_gj01']; ?>
,url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/national_distribution/find_customers-id-<?php echo $this->_tpl_vars['gj_name01']; ?>
'},
				{ name: '<?php echo $this->_tpl_vars['gj_name02']; ?>
', y: <?php echo $this->_tpl_vars['data_gj02']; ?>
,url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/national_distribution/find_customers-id-<?php echo $this->_tpl_vars['gj_name02']; ?>
'},
				{ name: '<?php echo $this->_tpl_vars['gj_name03']; ?>
', y: <?php echo $this->_tpl_vars['data_gj03']; ?>
,url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/national_distribution/find_customers-id-<?php echo $this->_tpl_vars['gj_name03']; ?>
'},
				{ name: '<?php echo $this->_tpl_vars['gj_name04']; ?>
', y: <?php echo $this->_tpl_vars['data_gj04']; ?>
,url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/national_distribution/find_customers-id-<?php echo $this->_tpl_vars['gj_name04']; ?>
'},
				{ name: '<?php echo $this->_tpl_vars['gj_name05']; ?>
', y: <?php echo $this->_tpl_vars['data_gj05']; ?>
,url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/national_distribution/find_customers-id-<?php echo $this->_tpl_vars['gj_name05']; ?>
'},
				{ name: '<?php echo $this->_tpl_vars['gj_name06']; ?>
', y: <?php echo $this->_tpl_vars['data_gj06']; ?>
,url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/national_distribution/find_customers-id-<?php echo $this->_tpl_vars['gj_name06']; ?>
'},
				{ name: '<?php echo $this->_tpl_vars['gj_name07']; ?>
', y: <?php echo $this->_tpl_vars['data_gj07']; ?>
,url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/national_distribution/find_customers-id-<?php echo $this->_tpl_vars['gj_name07']; ?>
'},
				{ name: '<?php echo $this->_tpl_vars['gj_name08']; ?>
', y: <?php echo $this->_tpl_vars['data_gj08']; ?>
,url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/national_distribution/find_customers-id-<?php echo $this->_tpl_vars['gj_name08']; ?>
'},
				{ name: '<?php echo $this->_tpl_vars['gj_name09']; ?>
', y: <?php echo $this->_tpl_vars['data_gj09']; ?>
,url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/national_distribution/find_customers-id-<?php echo $this->_tpl_vars['gj_name09']; ?>
'},
				{ name: '<?php echo $this->_tpl_vars['gj_name10']; ?>
', y: <?php echo $this->_tpl_vars['data_gj10']; ?>
,url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/national_distribution/find_customers-id-<?php echo $this->_tpl_vars['gj_name10']; ?>
'},
				
               ]
            }]
        });
    });
	
	
	
    
});
  
</script>
</head>

<body>
    <div id="index_container04" style=" float:left; display:block; margin-top:10px; margin-bottom:10px; margin-left:10px; overflow: auto; width:800px; height:400px;  line-height:21px; background:#FFF; overflow-x:hidden; overflow-y:hidden;"></div>
  
                                       
</body>
</html>