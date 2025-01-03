<?php /* Smarty version 2.6.22, created on 2014-10-17 13:11:59
         compiled from design_cycle_find/index.html */ ?>
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
/design_cycle_find/index" method="get">
	<div class="searchBar">
		<ul class="searchContent">
             <li style="width:40%;">
				<label style="width:50px;">时间：</label>
				<input type="text" name="start_time" class="date" readonly style="width:70px;" value="<?php echo $this->_tpl_vars['start_time']; ?>
" />-<input type="text" name="end_time" class="date" readonly style="width:70px;" value="<?php echo $this->_tpl_vars['end_time']; ?>
" />
			</li>
            <br>
            <li style="float:right;"><div class="buttonActive" style="float:right;"><div style="float:right;" class="buttonContent"><button type="submit" id='find'>检索</button></div></div></li>
		</ul>
      
	</div>
	</form>
</div>
<div class="pageContent">
  <div class="stkInfEnter" style="width:100%; margin-left:-5px;" layoutH="35">
<?php if ($this->_tpl_vars['start_time'] != ''): ?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<body>
    <div id="index_container04" style=" float:left; display:block; margin-top:0px; margin-bottom:10px; margin-left:10px; overflow: auto; width:1080px; height:380px;  line-height:21px; background:#FFF; overflow-x:hidden; overflow-y:hidden;"></div>
<table class="table" width="1110px" layoutH="135">
		<thead>
			<tr>	
                <th width="50" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;编号</th>
                <th width="50" >设计人员</th>
                <th width="50" >任务数</th>
				<th width="50" >0-6小时</th>
				<th width="50">6-12小时</th>
                <th width="50">12-18小时</th>
                <th width="50">18-24小时</th>
                <th width="50">24-36小时</th>
                <th width="50">36-48小时</th>
                <th width="50">超时数量</th>
                <th width="50">超时率</th>
            </tr>
		</thead>
		<tbody>
             <?php if ($this->_tpl_vars['design_cycle']): ?>
			 <?php $_from = $this->_tpl_vars['design_cycle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['dis']):
?>
              <tr>
				<td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
				<td><?php echo $this->_tpl_vars['dis']['user_name']; ?>
</td>
                
				<td><?php echo $this->_tpl_vars['dis']['this_month_count']; ?>
</td>
				<td><?php echo $this->_tpl_vars['dis']['this_month_6']; ?>
</td>
				<td><?php echo $this->_tpl_vars['dis']['this_month_12']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['this_month_18']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['this_month_24']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['this_month_36']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['this_month_48']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['this_month_chaoshi']; ?>
</td>
                <?php if ($this->_tpl_vars['dis']['this_chaoshi_lv'] == ""): ?>
                <td>0.00%</td>
                <?php else: ?>
				<td><?php echo $this->_tpl_vars['dis']['this_chaoshi_lv']; ?>
%</td>
                <?php endif; ?>
              
                </tr>
             <?php endforeach; endif; unset($_from); ?>
         <?php endif; ?>
				
		</tbody>
        
	</table>
	
    
</body>
<script src="http://code.highcharts.com/highcharts.js"></script>
<script src="http://code.highcharts.com/modules/exporting.js"></script>
<script type="text/javascript">
$(function () {
  var count_1 = <?php echo $this->_tpl_vars['count_1']; ?>
;
  var count_2 = <?php echo $this->_tpl_vars['count_2']; ?>
;
  var count_3 = <?php echo $this->_tpl_vars['count_3']; ?>
;
  var count_4 = <?php echo $this->_tpl_vars['count_4']; ?>
;
  var count_5 = <?php echo $this->_tpl_vars['count_5']; ?>
;
  var count_6 = <?php echo $this->_tpl_vars['count_6']; ?>
;
  var count_7 = <?php echo $this->_tpl_vars['count_7']; ?>
;
  var count_8 = <?php echo $this->_tpl_vars['count_8']; ?>
;
  var count_9 = <?php echo $this->_tpl_vars['count_9']; ?>
;
  var count_10 = <?php echo $this->_tpl_vars['count_10']; ?>
;
  var count_11 = <?php echo $this->_tpl_vars['count_11']; ?>
;
  var count_12 = <?php echo $this->_tpl_vars['count_12']; ?>
;
  var count_13 = <?php echo $this->_tpl_vars['count_13']; ?>
;
  var count_14 = <?php echo $this->_tpl_vars['count_14']; ?>
;
  var count_15 = <?php echo $this->_tpl_vars['count_15']; ?>
;
  var count_16 = <?php echo $this->_tpl_vars['count_16']; ?>
;
  var count_17 = <?php echo $this->_tpl_vars['count_17']; ?>
;
  var count_18 = <?php echo $this->_tpl_vars['count_18']; ?>
;
  var count_19 = <?php echo $this->_tpl_vars['count_19']; ?>
;
  var count_20 = <?php echo $this->_tpl_vars['count_20']; ?>
;
  var count_21 = <?php echo $this->_tpl_vars['count_21']; ?>
;
  var count_22 = <?php echo $this->_tpl_vars['count_22']; ?>
;
  var count_23 = <?php echo $this->_tpl_vars['count_23']; ?>
;
  var count_24 = <?php echo $this->_tpl_vars['count_24']; ?>
;
  var count_25 = <?php echo $this->_tpl_vars['count_25']; ?>
;
  var count_26 = <?php echo $this->_tpl_vars['count_26']; ?>
;
  var count_27 = <?php echo $this->_tpl_vars['count_27']; ?>
;
  var count_28 = <?php echo $this->_tpl_vars['count_28']; ?>
;
  var count_29 = <?php echo $this->_tpl_vars['count_29']; ?>
;
  var count_30 = <?php echo $this->_tpl_vars['count_30']; ?>
;
  var count_31 = <?php echo $this->_tpl_vars['count_31']; ?>
;
  var count_32 = <?php echo $this->_tpl_vars['count_32']; ?>
;
  var count_33 = <?php echo $this->_tpl_vars['count_33']; ?>
;
  var count_34 = <?php echo $this->_tpl_vars['count_34']; ?>
;
  var count_35 = <?php echo $this->_tpl_vars['count_35']; ?>
;
  var count_36 = <?php echo $this->_tpl_vars['count_36']; ?>
;
  var count_37 = <?php echo $this->_tpl_vars['count_37']; ?>
;
  var count_38 = <?php echo $this->_tpl_vars['count_38']; ?>
;
  var count_39 = <?php echo $this->_tpl_vars['count_39']; ?>
;
  var count_40 = <?php echo $this->_tpl_vars['count_40']; ?>
;
  var count_41 = <?php echo $this->_tpl_vars['count_41']; ?>
;
  var count_42 = <?php echo $this->_tpl_vars['count_42']; ?>
;
  var count_43 = <?php echo $this->_tpl_vars['count_43']; ?>
;
  var count_44 = <?php echo $this->_tpl_vars['count_44']; ?>
;
  var count_45 = <?php echo $this->_tpl_vars['count_45']; ?>
;
  var count_46 = <?php echo $this->_tpl_vars['count_46']; ?>
;
  var count_47 = <?php echo $this->_tpl_vars['count_47']; ?>
;
  var count_48 = <?php echo $this->_tpl_vars['count_48']; ?>
;
  
  
	
	
chart = new Highcharts.Chart({
		 chart: {
                renderTo: 'index_container04',
                type: 'line',
                marginRight: 100,
                marginBottom: 35
            },
       title: {
                text: '设计周期',
                x: -20 //center
            },
        xAxis: {
			title: {
                text: '时间（小时）'
            },
            categories: ['1', '2', '3', '4', '5',
                '6', '7', '8', '9','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31','32','33','34','35','36','37','38','39','40','41','42','43','44','45','46','47','48']
        },
        yAxis: {
            title: {
                text: ''
            },
             plotLines: [{
                    value: 0,
                    width: 1,
                    color: '#808080'
                }]
        },
        tooltip: {
                formatter: function() {
                        return  this.x +": "+ "" + this.y ;
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
                name: '完成任务数',
                data: [count_1, count_2, count_3, count_4,count_5, count_6, count_7, count_8, count_9, count_10,count_11, count_12, count_14, count_14,count_15, count_16, count_17, count_18, count_19, count_20,count_21, count_22, count_23, count_24,count_25, count_26, count_27, count_28,count_29, count_30,count_31, count_32, count_33, count_34,count_35, count_36, count_37, count_38, count_39, count_40,count_41, count_42, count_43, count_44,count_45, count_46, count_47, count_48]
			  
    }
			]
    });
});

</script>
  

</head>


</html>
<?php endif; ?>
</div>
</div>