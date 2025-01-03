<?php /* Smarty version 2.6.22, created on 2015-04-01 15:22:06
         compiled from floating_wages/index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/floating_wages/index">
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
/floating_wages/index" method="get">
	<div class="searchBar">
		<ul class="searchContent">
			<li style="width:25%;">
			<label style="width:60px;">时间：</label>
            <input type="text" size="20" name="value_date" value="<?php echo $this->_tpl_vars['value_date']; ?>
"  class="date textInput readonly valid" datefmt="yyyy-MM" />
			</li>
            <br>
            <li style="float:right;"><div class="buttonActive" style="float:right;"><div style="float:right;" class="buttonContent"><button type="submit">检索</button></div></div></li>
		</ul>
       
	</div>
	</form>
</div>
<form action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/floating_wages/floating_export_xls_export" method="post" id="floating_export">
<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
         <li class="line">line</li>
        <li><a class="icon" href="#" id="floating_wages_ex" ><span>导出EXCEL</span></a></li> 
        <input type="hidden" name="time" value="<?php echo $this->_tpl_vars['value_date']; ?>
">	
			
		</ul>
	</div>
	<table class="table" width="100%" layoutH="128">
		<thead>
			<tr>
                <th width="2%"><input type="checkbox" group="group_floating_wages[]" class="checkboxCtrl"></th>
				<th width="2%">编号</th>
                <th width="10%">姓名</th>
                <!--<th width="10%">应收金额</th>-->
                <th width="10%">收款金额（美金，当月汇率换算）</th>
                <th width="10%">当月美元汇率</th>
                <th width="10%">当月欧元汇率</th>
                <th width="10%">浮动工资</th>
			</tr>
		</thead>
		<tbody>
        <?php if ($this->_tpl_vars['user']): ?>
		<?php $_from = $this->_tpl_vars['user']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['us']):
?>
        <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
">
         <td><input name="group_floating_wages[]" value="<?php echo $this->_tpl_vars['us']['user_id']; ?>
" type="checkbox"></td>
            <td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
            <td><?php echo $this->_tpl_vars['us']['user_name']; ?>
</td>
            <!--<td>$<?php echo $this->_tpl_vars['us']['yingfu']; ?>
</td>-->
            <td>$<?php echo $this->_tpl_vars['us']['money']; ?>
</td>
            <td><?php echo $this->_tpl_vars['exchangerate_m']; ?>
</td>
            <td><?php echo $this->_tpl_vars['exchangerate_o']; ?>
</td>
            <td><?php echo $this->_tpl_vars['us']['fudong']; ?>
</td>
        </tr>
        <?php endforeach; endif; unset($_from); ?>
        <?php endif; ?>
         <td>总计</td>
         <td></td>
         <td></td>
         <!--<td>$<?php echo $this->_tpl_vars['yingshouzongji']; ?>
</td>-->
         <td>$<?php echo $this->_tpl_vars['yishouzongji']; ?>
</td>
         <td></td>
         <td></td>
         <td><?php echo $this->_tpl_vars['fudongzongji']; ?>
</td>
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

$("#floating_wages_ex").click(function (){
		if($("input[type='checkbox']").is(":checked")){
			
			alert("即将导出选中数据");
			$("#floating_export").submit();
		}else{
			alert("请选择导出的数据");
		}
	});
</script>