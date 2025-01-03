<?php /* Smarty version 2.6.22, created on 2016-04-05 17:18:26
         compiled from direct_injection_sales_commission/index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/direct_injection_sales_commission/index">
	<input type="hidden" name="pageNum" value="1" />
	<input type="hidden" name="numPerPage" value="<?php echo $this->_tpl_vars['listRows']; ?>
" />
	<input type="hidden" name="orderField" value="group_id" />
	<input type="hidden" name="orderDirection" value="desc" />
    
    <input type="hidden" name="exchangerate_name" value="<?php echo $this->_tpl_vars['exchangerate_name']; ?>
" />
</form>

<div class="pageHeader">
	<form rel="pagerForm" onsubmit="return navTabSearch(this);" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/direct_injection_sales_commission/index" method="get">
	<div class="searchBar">
		<ul class="searchContent">
			

            <li style="width:35%;">
			<label style="width:60px;">时间：</label>
            <input type="text" size="20" name="value_date" value="<?php echo $this->_tpl_vars['value_date']; ?>
"  class="date textInput readonly valid" datefmt="yyyy-MM" />
			</li>
            <li style="float:right;"><div class="buttonActive" style="float:right;"><div style="float:right;" class="buttonContent"><button type="submit">检索</button></div></div></li>
		</ul>
        <!--<div class="subBar">
            <ul>
                <li style="float:right;">
                
                </li>
            </ul>
        </div>-->
	</div>
	</form>
</div>
<form action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/direct_injection_sales_commission/commission_xls_export" method="post" id="commssion_export">
<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
        <li class="line">line</li>
        <li><a class="icon" href="#" id="commission_ex" ><span>导出EXCEL</span></a></li> 
		<input type="hidden" name="time" value="<?php echo $this->_tpl_vars['value_date']; ?>
">	
		</ul>
	</div>
	<table class="table" width="1400" layoutH="138">
		<thead>
			<tr>
                <th width="2%"><input type="checkbox" group="group_commission[]" class="checkboxCtrl"></th>
				<th width="2%">编号</th>
                <th width="4%">姓名</th>
                <th width="5%">件数</th>
                <th width="5%">收款额</th>
                <th width="6%">当月汇率(美元)</th>
                <th width="6%">当月汇率(欧元)</th>
                <th width="5%">实际成本</th>
                <th width="4%">毛利</th>
                <th width="5%">利润比率</th>
                <th width="5%">提成比例</th>
                <th width="5%">提成金额</th>
                <th width="5%">其他扣款</th>
                <th width="5%">实发金额</th>
			</tr>
		</thead>
		<tbody>
        <?php if ($this->_tpl_vars['user']): ?>
            <?php $_from = $this->_tpl_vars['user']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['us']):
?>
                <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
">
                    <td><input name="group_commission[]" value="<?php echo $this->_tpl_vars['us']['user_id']; ?>
" type="checkbox"></td>
                    <td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
                    <td><?php echo $this->_tpl_vars['us']['user_name']; ?>
</td>
                    <td style="text-align:right;"><?php echo $this->_tpl_vars['us']['all_c_num']; ?>
</td>
                    <td style="text-align:right;">$<?php echo $this->_tpl_vars['us']['all_money']; ?>
</td>
                    <td style="text-align:right;"><?php echo $this->_tpl_vars['us']['e_us']; ?>
</td>
                    <td style="text-align:right;"><?php echo $this->_tpl_vars['us']['e_euro']; ?>
</td>
                    <td style="text-align:right;"><?php echo $this->_tpl_vars['us']['actual_cost']; ?>
</td>
                    <td style="text-align:right;"><?php echo $this->_tpl_vars['us']['maoli']; ?>
</td>
                    <td style="text-align:right;"><?php echo $this->_tpl_vars['us']['lirunbilv']; ?>
</td>
                    <td style="text-align:right;"><?php echo $this->_tpl_vars['us']['tichengbili']; ?>
</td>
                    <td style="text-align:right;"><?php echo $this->_tpl_vars['us']['tichengjine']; ?>
</td>
                    <td style="text-align:right;"><?php echo $this->_tpl_vars['us']['qitakoukuan']; ?>
</td>
                    <td style="text-align:right;"><?php echo $this->_tpl_vars['us']['shifajine']; ?>
</td>
                </tr>
            <?php endforeach; endif; unset($_from); ?>
        <?php endif; ?>
        </tbody>
	</table>
	<div class="panelBar">
		<div class="pages">
      		  
			<span>   每页显示<?php echo $this->_tpl_vars['listRows']; ?>
条，</span>
			<span>共<?php echo $this->_tpl_vars['total_count']; ?>
条</span>
		</div>
		
		<div class="pagination" targetType="navTab" totalCount="<?php echo $this->_tpl_vars['total_count']; ?>
" numPerPage="<?php echo $this->_tpl_vars['listRows']; ?>
" pageNumShown="10" currentPage="<?php echo $this->_tpl_vars['current_page']; ?>
"></div>

	</div>
</form>
<script language="javascript">

$("#commission_ex").click(function (){
		if($("input[type='checkbox']").is(":checked")){
			alert("即将导出选中数据");
			$("#commssion_export").submit();
		}else{
			alert("请选择导出的数据");
		}
	});
</script>