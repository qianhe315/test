<?php /* Smarty version 2.6.22, created on 2016-11-07 09:44:37
         compiled from commission_amount_design/index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/commission_amount_design/index">
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
/commission_amount_design/index" method="get">
	<div class="searchBar">
		<ul class="searchContent">
			<li style="width:25%;">
			<label style="width:60px;">时间：</label>
            <input type="text" size="20" name="value_date" value="<?php echo $this->_tpl_vars['value_date']; ?>
"  class="date textInput readonly valid" datefmt="yyyy-MM" />
			</li>
            <li style="float:right;"><div class="buttonActive" style="float:right;"><div style="float:right;" class="buttonContent"><button type="submit">检索</button></div></div></li>
		</ul>
        <div class="subBar">
        <ul>
			<li style="float:right;">
            
            </li>
		</ul>
        </div>
	</div>
	</form>
</div>
<form action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/commission_amount_design/commission_design_xls_export" method="post" id="commssion_design_export">
<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
        <li class="line">line</li>
        <li><a class="icon" href="#" id="commission_design_ex" ><span>导出EXCEL</span></a></li> 
        <input type="hidden" name="time" value="<?php echo $this->_tpl_vars['value_date']; ?>
">
		</ul>
	</div>
	<table class="table" width="100%" layoutH="138">
		<thead>
			<tr>
                <th width="2%"><input type="checkbox" group="group_commission[]" class="checkboxCtrl"></th>
				<th width="2%">编号</th>
                <th width="3%">时间</th>
                <th width="4%">设计人员</th>
                <th width="4%">岗位</th>
                <th width="4%">副属性</th>
                <th width="4%">系统设计</th>
                <th width="4%">系统设计增减</th>
                <th width="4%">601设计</th>
                <th width="4%">公司设计</th>
                <!--<th width="4%">朱莉设计</th>-->
                <th width="4%">设计总和</th>
                <th width="4%">单图费率</th>
                <th width="4%">设计提成</th>
                <!--<th width="4%">换色排图</th>
                <th width="4%">换色费率</th>
                <th width="4%">换色提成</th>
                <th width="4%">提成总额</th>-->
                
               
              
              
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
            <td><?php echo $this->_tpl_vars['value_date']; ?>
</td>
            <td ><?php echo $this->_tpl_vars['us']['user_name']; ?>
</td>
            <?php if ($this->_tpl_vars['us']['group_id'] == '56'): ?>
            <td >设计主管</td>
            <?php else: ?>
            <td >设计人员</td>
            <?php endif; ?>
            <td><?php echo $this->_tpl_vars['us']['address']; ?>
</td>
            <td ><?php echo $this->_tpl_vars['us']['xitong_count']; ?>
</td>
            <td ><?php echo $this->_tpl_vars['us']['pic_erp']; ?>
</td>
            <td><?php echo $this->_tpl_vars['us']['pic_601']; ?>
</td>
            <td ><?php echo $this->_tpl_vars['us']['pic_company']; ?>
</td>
            <!--<td ><?php echo $this->_tpl_vars['us']['pic_july']; ?>
</td>-->
            <td ><?php echo $this->_tpl_vars['us']['total']; ?>
</td>
            <td ><?php echo $this->_tpl_vars['us']['dantufeilv']; ?>
</td>
            <td ><?php echo $this->_tpl_vars['us']['ticheng']; ?>
</td>
            <!--<td ><?php echo $this->_tpl_vars['us']['huanse_count']; ?>
</td>
            <td ><?php echo $this->_tpl_vars['us']['huansefeilv']; ?>
</td>
            <td ><?php echo $this->_tpl_vars['us']['huanseticheng']; ?>
</td>
            <td ><?php echo $this->_tpl_vars['us']['ticheng_zonge']; ?>
</td>-->
            
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

$("#commission_design_ex").click(function (){
		if($("input[type='checkbox']").is(":checked")){
			alert("即将导出选中数据");
			$("#commssion_design_export").submit();
		}else{
			alert("请选择导出的数据");
		}
	});
</script>