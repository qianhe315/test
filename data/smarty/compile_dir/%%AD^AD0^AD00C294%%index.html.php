<?php /* Smarty version 2.6.22, created on 2024-10-23 13:06:41
         compiled from outgoing_inquiry_sheet/index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/outgoing_inquiry_sheet/index">
	<input type="hidden" name="pageNum" value="1" />
	<input type="hidden" name="numPerPage" value="<?php echo $this->_tpl_vars['listRows']; ?>
" />
	<input type="hidden" name="orderField" value="group_id" />
	<input type="hidden" name="orderDirection" value="desc" />
    
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
    <input type="hidden" name="design_name" value="<?php echo $this->_tpl_vars['design_name']; ?>
" />
    <input type="hidden" name="design_code" value="<?php echo $this->_tpl_vars['design_code']; ?>
" />
    
</form>

<div class="pageHeader">
	<form rel="pagerForm" onsubmit="return navTabSearch(this);" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/outgoing_inquiry_sheet/index" method="post">
	<div class="searchBar">
		<ul class="searchContent">
			<?php if ($this->_tpl_vars['user_hidden']['group_id'] != '53' || $this->_tpl_vars['user_hidden']['group_id'] != '68'): ?>
            <li>
				<label style="width:50px;">业务员：</label>
				<select class="combox" name="sale_user">
                <option value="">全部</option>
                <?php $_from = $this->_tpl_vars['sale_users']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['du']):
?>
                <option value="<?php echo $this->_tpl_vars['du']['user_name']; ?>
" <?php if ($this->_tpl_vars['du']['user_name'] == $this->_tpl_vars['sale_user']): ?> selected <?php endif; ?> > <?php echo $this->_tpl_vars['du']['user_name']; ?>
 </option>
                <?php endforeach; endif; unset($_from); ?>
                </select>
			</li>
            <?php endif; ?>
            <li>
				<label style="width:50px;">时间：</label>
				<input type="text" name="start_time" class="date" readonly="true" style="width:70px;" value="<?php echo $this->_tpl_vars['start_time']; ?>
" />-<input type="text" name="end_time" class="date" readonly="true"  style="width:70px;" value="<?php echo $this->_tpl_vars['end_time']; ?>
" />
                
			</li>
            
            <li>
				<label style="width:60px;">客户代码：</label>
				<input type="text" name="customer_code"  style="width:100px;" value="<?php echo $this->_tpl_vars['customer_code']; ?>
" />
                
			</li>
            
            <li>
				<label style="width:60px;">报价名称：</label>
				<input type="text" name="design_name"  style="width:100px;" value="<?php echo $this->_tpl_vars['design_name']; ?>
" />
                
			</li>
            
              <li>
				<label style="width:60px;">报价编号：</label>
				<input type="text" name="design_code"  style="width:100px;" value="<?php echo $this->_tpl_vars['design_code']; ?>
" />
                
			</li>

            <div class="subBar">
			<ul>
				<li style="float:right;"><div class="buttonActive" style="float:right;"><div style="float:right;" class="buttonContent"><button type="submit">检索</button></div></div></li>	
			</ul>
		    </div>
		</ul>
	</div>
	</form>
</div>
<form action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/outgoing_inquiry_sheet/xls_export" method="post" id="quotation_delete">
<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
        	<?php if ($this->_tpl_vars['user_hidden']['group_id'] == '53' || $this->_tpl_vars['user_hidden']['group_id'] == '50' || $this->_tpl_vars['user_hidden']['group_id'] == '5' || $this->_tpl_vars['user_hidden']['group_id'] == '68'): ?>
            <li class="line">line</li>
			<li><a class="add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/outgoing_inquiry_sheet/add/" target="navTab" rel="outgoing_inquiry_sheet_add" ><span>添加</span></a></li>
            <?php endif; ?>
			<li class="line">line</li>
            <!--<li><a class="delete" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/outgoing_inquiry_sheet/del/" target="selectedTodo" id="del" rel="group_ids[]" postType="string"><span>删除</span></a></li>
            <li class="line">line</li>
            <?php if ($this->_tpl_vars['user_hidden']['group_id'] != '53' || $this->_tpl_vars['user_hidden']['group_id'] != '68'): ?>
            <li><a class="icon" href="#" id="excel"><span>导出EXCEL</span></a></li>
			<li class="line">line</li>
            <?php endif; ?>-->
		
		</ul>
	</div>
	<table class="table" width="100%" layoutH="138">
		<thead>
			<tr>
				<th width="1%"><input type="checkbox" group="group_ids[]" class="checkboxCtrl"></th>
                <th width="2%">编号</th>
                <th width="4%">缩略图</th>
                <th width="5%">时间</th>
                <th width="4%">业务员</th>
                <th width="4%">客户代码</th>
                <th width="8%">客户名</th>
                <th width="8%">报价名称</th>
                <th width="4%">类型</th>
                <th width="8%">报价编号</th>
                <th width="4%">报关品类</th>
                <th width="4%">做货类型</th>
                <th width="4%">交货期</th>
                <th width="4%">数量</th>
                <!--<th width="10%">尺寸</th>
                <th width="10%">颜色</th>-->
                <th width="9%">备注</th>
                <th width="5%">操作</th>
			</tr>
		</thead>
		<tbody>
        <?php if ($this->_tpl_vars['outgoing_inquiry_sheet']): ?>
			 <?php $_from = $this->_tpl_vars['outgoing_inquiry_sheet']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['dis']):
?>
              <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
" >
                <td><input name="group_ids[]" id="c_id" value="<?php echo $this->_tpl_vars['dis']['id']; ?>
" type="checkbox"></td>
                <td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
                <td><img src="<?php echo $this->_tpl_vars['dis']['image']; ?>
" width="100px" height="100px;" /></td>
                <td><?php echo $this->_tpl_vars['dis']['q_time']; ?>
</td>
 				<td><?php echo $this->_tpl_vars['dis']['saleman_name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['customer_code']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['customer_name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['design_name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['type']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['quotation_code']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['order_category']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['goods_type']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['deliver_goods']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['number']; ?>
</td>
                <!--<td><?php echo $this->_tpl_vars['dis']['cm_w']; ?>
*<?php echo $this->_tpl_vars['dis']['cm_h']; ?>
cm</td>
                <td><?php echo $this->_tpl_vars['dis']['color']; ?>
</td>-->
                <td><?php echo $this->_tpl_vars['dis']['remark']; ?>
</td>
                <td>
                <?php if ($this->_tpl_vars['user_hidden']['user_name'] == $this->_tpl_vars['dis']['saleman_name'] || $this->_tpl_vars['user_hidden']['group_id'] == '5'): ?>
                <a title="删除吗？" target="ajaxTodo" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/outgoing_inquiry_sheet/del-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" class="btnDel">删除</a> 
                <?php endif; ?>
                <a title="编辑" target="navTab" rel="outgoing_sheet_edit" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/outgoing_inquiry_sheet/edit-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" class="btnEdit">编辑</a></td>
              </tr>
              
             <?php endforeach; endif; unset($_from); ?>
             <?php endif; ?>
		</tbody>
	</table>
	<div class="panelBar">
		<div class="pages">
			
			<span>共<?php echo $this->_tpl_vars['total_count']; ?>
条</span>
		</div>
		
		<div class="pagination" targetType="navTab" totalCount="<?php echo $this->_tpl_vars['total_count']; ?>
" numPerPage="<?php echo $this->_tpl_vars['listRows']; ?>
" pageNumShown="10" currentPage="<?php echo $this->_tpl_vars['current_page']; ?>
"></div>

	</div>
</form>     
</div>
<script language="javascript">
    $("#excel").click(function (){
		if($("input[type='checkbox']").is(":checked")){
			$("#quotation_delete").submit();
		}else{
			alert("请选择导出的数据");
		}
	});
	
	

</script>