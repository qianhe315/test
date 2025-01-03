<?php /* Smarty version 2.6.22, created on 2014-11-17 11:38:52
         compiled from customers_status/index.html */ ?>


<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/exit_storehouse/index">
	<input type="hidden" name="pageNum" value="1" />
	<input type="hidden" name="numPerPage" value="<?php echo $this->_tpl_vars['listRows']; ?>
" />
	<input type="hidden" name="orderField" value="group_id" />
	<input type="hidden" name="orderDirection" value="desc" />
    
    <input type="hidden" name="order_status" value="<?php echo $this->_tpl_vars['order_status']; ?>
" />
    <input type="hidden" name="saleman_user_id" value="<?php echo $this->_tpl_vars['saleman_user_id']; ?>
" />
    <input type="hidden" name="start_time" value="<?php echo $this->_tpl_vars['start_time']; ?>
" />
    <input type="hidden" name="end_time" value="<?php echo $this->_tpl_vars['end_time']; ?>
" />
    <input type="hidden" name="customer_name" value="<?php echo $this->_tpl_vars['customer_name']; ?>
" />
    <input type="hidden" name="customer_code" value="<?php echo $this->_tpl_vars['customer_code']; ?>
" />
    <input type="hidden" name="quotation_code" value="<?php echo $this->_tpl_vars['quotation_code']; ?>
" />
    
</form>

<div class="pageHeader">
	<form rel="pagerForm" onSubmit="return navTabSearch(this);" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/customers_status/index" method="get">
	<div class="searchBar">
		<ul class="searchContent">
            <li style="width:15%;">
				<label style="width:60px;">客户代码：</label>
				<input type="text" name="customer_code" style="width:62px;" value="<?php echo $this->_tpl_vars['customer_code']; ?>
" /> 
           </li>
           <li style="width:15%; margin-top:5px;">
           <?php if ($this->_tpl_vars['customer_name'] != ''): ?> 客户名：<?php echo $this->_tpl_vars['customer_name']; ?>
 <?php endif; ?>
           </li>
           <li style="width:15%; margin-top:5px;"">
           <?php if ($this->_tpl_vars['company'] != ''): ?>公司：<?php echo $this->_tpl_vars['company']; ?>
<?php endif; ?>
           </li>
            <br>
            <li style="float:right;"><div class="buttonActive" style="float:right;"><div style="float:right;" class="buttonContent"><button type="submit" id='find'>检索</button></div></div></li>
		</ul>
      
	</div>
	</form>
</div>
<div class="pageContent">
  <div class="stkInfEnter" style="width:100%; margin-left:-5px;" layoutH="35">
<?php if ($this->_tpl_vars['customer_code'] != ''): ?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src="http://code.highcharts.com/highcharts.js"></script>
<script src="http://code.highcharts.com/modules/exporting.js"></script>
<script type="text/javascript">
$(function () {
	
	var year_2014_01 = <?php echo $this->_tpl_vars['year_2014_01']; ?>
;
	var year_2014_02 = <?php echo $this->_tpl_vars['year_2014_02']; ?>
;
	var year_2014_03 = <?php echo $this->_tpl_vars['year_2014_03']; ?>
;
	var year_2014_04 = <?php echo $this->_tpl_vars['year_2014_04']; ?>
;
	var year_2014_05 = <?php echo $this->_tpl_vars['year_2014_05']; ?>
;
	var year_2014_06 = <?php echo $this->_tpl_vars['year_2014_06']; ?>
;
	var year_2014_07 = <?php echo $this->_tpl_vars['year_2014_07']; ?>
;
	var year_2014_08 = <?php echo $this->_tpl_vars['year_2014_08']; ?>
;
	var year_2014_09 = <?php echo $this->_tpl_vars['year_2014_09']; ?>
;
	var year_2014_10 = <?php echo $this->_tpl_vars['year_2014_10']; ?>
;
	var year_2014_11 = <?php echo $this->_tpl_vars['year_2014_11']; ?>
;
	var year_2014_12 = <?php echo $this->_tpl_vars['year_2014_12']; ?>
;
	
	var year_2013_01 = <?php echo $this->_tpl_vars['year_2013_01']; ?>
;
	var year_2013_02 = <?php echo $this->_tpl_vars['year_2013_02']; ?>
;
	var year_2013_03 = <?php echo $this->_tpl_vars['year_2013_03']; ?>
;
	var year_2013_04 = <?php echo $this->_tpl_vars['year_2013_04']; ?>
;
	var year_2013_05 = <?php echo $this->_tpl_vars['year_2013_05']; ?>
;
	var year_2013_06 = <?php echo $this->_tpl_vars['year_2013_06']; ?>
;
	var year_2013_07 = <?php echo $this->_tpl_vars['year_2013_07']; ?>
;
	var year_2013_08 = <?php echo $this->_tpl_vars['year_2013_08']; ?>
;
	var year_2013_09 = <?php echo $this->_tpl_vars['year_2013_09']; ?>
;
	var year_2013_10 = <?php echo $this->_tpl_vars['year_2013_10']; ?>
;
	var year_2013_11 = <?php echo $this->_tpl_vars['year_2013_11']; ?>
;
	var year_2013_12 = <?php echo $this->_tpl_vars['year_2013_12']; ?>
;
	
	var year_2012_01 = <?php echo $this->_tpl_vars['year_2012_01']; ?>
;
	var year_2012_02 = <?php echo $this->_tpl_vars['year_2012_02']; ?>
;
	var year_2012_03 = <?php echo $this->_tpl_vars['year_2012_03']; ?>
;
	var year_2012_04 = <?php echo $this->_tpl_vars['year_2012_04']; ?>
;
	var year_2012_05 = <?php echo $this->_tpl_vars['year_2012_05']; ?>
;
	var year_2012_06 = <?php echo $this->_tpl_vars['year_2012_06']; ?>
;
	var year_2012_07 = <?php echo $this->_tpl_vars['year_2012_07']; ?>
;
	var year_2012_08 = <?php echo $this->_tpl_vars['year_2012_08']; ?>
;
	var year_2012_09 = <?php echo $this->_tpl_vars['year_2012_09']; ?>
;
	var year_2012_10 = <?php echo $this->_tpl_vars['year_2012_10']; ?>
;
	var year_2012_11 = <?php echo $this->_tpl_vars['year_2012_11']; ?>
;
	var year_2012_12 = <?php echo $this->_tpl_vars['year_2012_12']; ?>
;
	
	var year_2011_01 = <?php echo $this->_tpl_vars['year_2011_01']; ?>
;
	var year_2011_02 = <?php echo $this->_tpl_vars['year_2011_02']; ?>
;
	var year_2011_03 = <?php echo $this->_tpl_vars['year_2011_03']; ?>
;
	var year_2011_04 = <?php echo $this->_tpl_vars['year_2011_04']; ?>
;
	var year_2011_05 = <?php echo $this->_tpl_vars['year_2011_05']; ?>
;
	var year_2011_06 = <?php echo $this->_tpl_vars['year_2011_06']; ?>
;
	var year_2011_07 = <?php echo $this->_tpl_vars['year_2011_07']; ?>
;
	var year_2011_08 = <?php echo $this->_tpl_vars['year_2011_08']; ?>
;
	var year_2011_09 = <?php echo $this->_tpl_vars['year_2011_09']; ?>
;
	var year_2011_10 = <?php echo $this->_tpl_vars['year_2011_10']; ?>
;
	var year_2011_11 = <?php echo $this->_tpl_vars['year_2011_11']; ?>
;
	var year_2011_12 = <?php echo $this->_tpl_vars['year_2011_12']; ?>
;
	
	
	var year_2010_01 = <?php echo $this->_tpl_vars['year_2010_01']; ?>
;
	var year_2010_02 = <?php echo $this->_tpl_vars['year_2010_02']; ?>
;
	var year_2010_03 = <?php echo $this->_tpl_vars['year_2010_03']; ?>
;
	var year_2010_04 = <?php echo $this->_tpl_vars['year_2010_04']; ?>
;
	var year_2010_05 = <?php echo $this->_tpl_vars['year_2010_05']; ?>
;
	var year_2010_06 = <?php echo $this->_tpl_vars['year_2010_06']; ?>
;
	var year_2010_07 = <?php echo $this->_tpl_vars['year_2010_07']; ?>
;
	var year_2010_08 = <?php echo $this->_tpl_vars['year_2010_08']; ?>
;
	var year_2010_09 = <?php echo $this->_tpl_vars['year_2010_09']; ?>
;
	var year_2010_10 = <?php echo $this->_tpl_vars['year_2010_10']; ?>
;
	var year_2010_11 = <?php echo $this->_tpl_vars['year_2010_11']; ?>
;
	var year_2010_12 = <?php echo $this->_tpl_vars['year_2010_12']; ?>
;
	chart = new Highcharts.Chart({
		 chart: {
                renderTo: 'index_container04',
                type: 'line',
                marginRight: 100,
                marginBottom: 25
            },
       title: {
                text: '客户成交',
                x: -20 //center
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
                        this.x +": "+ "$" + this.y ;
                }
            },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle',
            borderWidth: 0
        },
      series: [
	    
			{
                name: '2014',
                data: [year_2014_01, year_2014_02, year_2014_03, year_2014_04, year_2014_05, year_2014_06, year_2014_07, year_2014_08, year_2014_09, year_2014_10, year_2014_11, year_2014_12]
            },
			 {
                name: '2013',
                data: [year_2013_01, year_2013_02, year_2013_03, year_2013_04, year_2013_05, year_2013_06, year_2013_07, year_2013_08, year_2013_09, year_2013_10, year_2013_11, year_2013_12]
            }, 
			{
                name: '2012',
                data: [year_2012_01, year_2012_02, year_2012_03, year_2012_04, year_2012_05, year_2012_06, year_2012_07, year_2012_08, year_2012_09, year_2012_10, year_2012_11, year_2012_12]
            }, 
			{
                name: '2011',
                data: [year_2011_01, year_2011_02, year_2011_03, year_2011_04, year_2011_05, year_2011_06, year_2011_07, year_2011_08, year_2011_09, year_2011_10, year_2011_11, year_2011_12]
            },
			{
                name: '2010',
                data: [year_2010_01, year_2010_02, year_2010_03, year_2010_04, year_2010_05, year_2010_06, year_2010_07, year_2010_08, year_2010_09, year_2010_10, year_2010_11, year_2010_12]
			  
    }
			]
    });
});



$(function () {
	
	var return_2014_01 = <?php echo $this->_tpl_vars['return_2014_01']; ?>
;
	var return_2014_02 = <?php echo $this->_tpl_vars['return_2014_02']; ?>
;
	var return_2014_03 = <?php echo $this->_tpl_vars['return_2014_03']; ?>
;
	var return_2014_04 = <?php echo $this->_tpl_vars['return_2014_04']; ?>
;
	var return_2014_05 = <?php echo $this->_tpl_vars['return_2014_05']; ?>
;
	var return_2014_06 = <?php echo $this->_tpl_vars['return_2014_06']; ?>
;
	var return_2014_07 = <?php echo $this->_tpl_vars['return_2014_07']; ?>
;
	var return_2014_08 = <?php echo $this->_tpl_vars['return_2014_08']; ?>
;
	var return_2014_09 = <?php echo $this->_tpl_vars['return_2014_09']; ?>
;
	var return_2014_10 = <?php echo $this->_tpl_vars['return_2014_10']; ?>
;
	var return_2014_11 = <?php echo $this->_tpl_vars['return_2014_11']; ?>
;
	var return_2014_12 = <?php echo $this->_tpl_vars['return_2014_12']; ?>
;
	chart = new Highcharts.Chart({
		 chart: {
                renderTo: 'index_container05',
                type: 'line',
                marginRight: 100,
                marginBottom: 25
            },
       title: {
                text: '返单率',
                x: -20 //center
            },
        xAxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
                'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
        },
        yAxis: {
            title: {
                text: '百分比'
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
                        this.x +": "+  this.y +'  %';
					
                }
            },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle',
            borderWidth: 0
        },				
      series: [
	    
			{
                name: '2014',
                data: [return_2014_01, return_2014_02, return_2014_03, return_2014_04, return_2014_05, return_2014_06, return_2014_07, return_2014_08, return_2014_09, return_2014_10, return_2014_11, return_2014_12]
            },
			]
    });
});






$(function () {
	
	var quo_2014_01 = <?php echo $this->_tpl_vars['quo_2014_01']; ?>
;
	var quo_2014_02 = <?php echo $this->_tpl_vars['quo_2014_02']; ?>
;
	var quo_2014_03 = <?php echo $this->_tpl_vars['quo_2014_03']; ?>
;
	var quo_2014_04 = <?php echo $this->_tpl_vars['quo_2014_04']; ?>
;
	var quo_2014_05 = <?php echo $this->_tpl_vars['quo_2014_05']; ?>
;
	var quo_2014_06 = <?php echo $this->_tpl_vars['quo_2014_06']; ?>
;
	var quo_2014_07 = <?php echo $this->_tpl_vars['quo_2014_07']; ?>
;
	var quo_2014_08 = <?php echo $this->_tpl_vars['quo_2014_08']; ?>
;
	var quo_2014_09 = <?php echo $this->_tpl_vars['quo_2014_09']; ?>
;
	var quo_2014_10 = <?php echo $this->_tpl_vars['quo_2014_10']; ?>
;
	var quo_2014_11 = <?php echo $this->_tpl_vars['quo_2014_11']; ?>
;
	var quo_2014_12 = <?php echo $this->_tpl_vars['quo_2014_12']; ?>
;
	chart = new Highcharts.Chart({
		 chart: {
                renderTo: 'index_container06',
                type: 'line',
                marginRight: 100,
                marginBottom: 25
            },
       title: {
                text: '做货率',
                x: -20 //center
            },
        xAxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
                'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
        },
        yAxis: {
            title: {
                text: '百分比'
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
                        this.x +": "+  this.y +'  %';
					
                }
            },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle',
            borderWidth: 0
        },				
      series: [
	    
			{
                name: '2014',
                data: [quo_2014_01, quo_2014_02, quo_2014_03, quo_2014_04, quo_2014_05, quo_2014_06, quo_2014_07, quo_2014_08, quo_2014_09, quo_2014_10, quo_2014_11, quo_2014_12]
            },
			]
    });
});


</script>
  

</head>

<body>
    <div id="index_container04" style=" float:left; display:block; margin-top:0px; margin-bottom:10px; margin-left:10px; overflow: auto; width:480px; height:280px;  line-height:21px; background:#FFF; overflow-x:hidden; overflow-y:hidden;"></div>
   <div id="index_container05" style=" float:left; display:block; margin-top:0px; margin-bottom:10px; margin-left:30px; overflow: auto; width:480px; height:280px;  line-height:21px; background:#FFF; overflow-x:hidden; overflow-y:hidden;"></div>
   <div id="index_container06" style=" float:left; display:block; margin-top:10px; margin-bottom:10px; margin-left:10px; overflow: auto; width:480px; height:280px;  line-height:21px; background:#FFF; overflow-x:hidden; overflow-y:hidden;"></div>
                                       
</body>
</html>
<?php endif; ?>
</div>
</div>