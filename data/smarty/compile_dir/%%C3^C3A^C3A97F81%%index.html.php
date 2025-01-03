<?php /* Smarty version 2.6.22, created on 2014-10-18 10:34:54
         compiled from production_length/index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/production_length/index">
	<input type="hidden" name="month_1" id="month_1" value="<?php echo $this->_tpl_vars['month_1']; ?>
" />
    <input type="hidden" name="month_2" id="month_2" value="<?php echo $this->_tpl_vars['month_2']; ?>
" />
    <input type="hidden" name="month_3" id="month_3" value="<?php echo $this->_tpl_vars['month_3']; ?>
" />
    <input type="hidden" name="month_4" id="month_4" value="<?php echo $this->_tpl_vars['month_4']; ?>
" />
    <input type="hidden" name="month_5" id="month_5" value="<?php echo $this->_tpl_vars['month_5']; ?>
" />
    <input type="hidden" name="month_6" id="month_6" value="<?php echo $this->_tpl_vars['month_6']; ?>
" />
    <input type="hidden" name="fahuo" id="fahuo" value="<?php echo $this->_tpl_vars['fahuo']; ?>
" />
    <input type="hidden" name="fahuo_1" id="fahuo_1" value="<?php echo $this->_tpl_vars['fahuo_1']; ?>
" />
    <input type="hidden" name="fahuo_2" id="fahuo_2" value="<?php echo $this->_tpl_vars['fahuo_2']; ?>
" />
    <input type="hidden" name="fahuo_3" id="fahuo_3" value="<?php echo $this->_tpl_vars['fahuo_3']; ?>
" />
    <input type="hidden" name="fahuo_4" id="fahuo_4" value="<?php echo $this->_tpl_vars['fahuo_4']; ?>
" />
    <input type="hidden" name="fahuo_5" id="fahuo_5" value="<?php echo $this->_tpl_vars['fahuo_5']; ?>
" />
</form>

<div class="pageContent">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src="http://code.highcharts.com/highcharts.js"></script>
<script src="http://code.highcharts.com/modules/exporting.js"></script>
<script type="text/javascript">
var month_1 = $("#month_1").val();
var month_2 = $("#month_2").val();
var month_3 = $("#month_3").val();
var month_4 = $("#month_4").val();
var month_5 = $("#month_5").val();
var month_6 = $("#month_6").val();
var fahuo = <?php echo $this->_tpl_vars['fahuo']; ?>
;
var fahuo_1 = <?php echo $this->_tpl_vars['fahuo_1']; ?>
;
var fahuo_2 = <?php echo $this->_tpl_vars['fahuo_2']; ?>
;
var fahuo_3 = <?php echo $this->_tpl_vars['fahuo_3']; ?>
;
var fahuo_4 = <?php echo $this->_tpl_vars['fahuo_4']; ?>
;
var fahuo_5 = <?php echo $this->_tpl_vars['fahuo_5']; ?>
;
var huoyun = <?php echo $this->_tpl_vars['huoyun']; ?>
;
var huoyun_1 = <?php echo $this->_tpl_vars['huoyun_1']; ?>
;
var huoyun_2 = <?php echo $this->_tpl_vars['huoyun_2']; ?>
;
var huoyun_3 = <?php echo $this->_tpl_vars['huoyun_3']; ?>
;
var huoyun_4 = <?php echo $this->_tpl_vars['huoyun_4']; ?>
;
var huoyun_5 = <?php echo $this->_tpl_vars['huoyun_5']; ?>
;
var chuli = <?php echo $this->_tpl_vars['chuli']; ?>
;
var chuli_1 = <?php echo $this->_tpl_vars['chuli_1']; ?>
;
var chuli_2 = <?php echo $this->_tpl_vars['chuli_2']; ?>
;
var chuli_3 = <?php echo $this->_tpl_vars['chuli_3']; ?>
;
var chuli_4 = <?php echo $this->_tpl_vars['chuli_4']; ?>
;
var chuli_5 = <?php echo $this->_tpl_vars['chuli_5']; ?>
;
$(function () {
  chart = new Highcharts.Chart({
	   chart: {
                renderTo: 'index_container04',
                type: 'bar',
        
            },
        title: {
                text: '生产阶段时长统计',
              },
        xAxis: {
			categories: [month_1,month_2, month_3, month_4, month_5, month_6]
        },
        yAxis: {
                title: {
                    text: '做货平均时间(小时)'
                },
           
            },
        plotOptions: {
            series: {
                stacking: 'normal'
            }
        },		
       series: [
	        {
            name: '处理时间',
            data: [chuli,chuli_1, chuli_2,chuli_3, chuli_4,chuli_5]
            },
			{
            name: '货运时间',
            data: [huoyun,huoyun_1, huoyun_2, huoyun_3, huoyun_4, huoyun_5]
            } ,
	        {
            name: '做货时间',
            data: [fahuo,fahuo_1, fahuo_2, fahuo_3, fahuo_4, fahuo_5]
            }, 
		    
			
		   
		]
    });
});
</script>
</head>
<body>
 <div id="index_container04" style=" float:left; display:block; margin-top:0px; margin-bottom:10px; margin-left:20px; overflow: auto; width:900px; height:480px;  line-height:21px; background:#FFF; overflow-x:hidden; overflow-y:hidden;"></div>
</body>
</html>
</div>