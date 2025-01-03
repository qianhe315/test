<?php /* Smarty version 2.6.22, created on 2014-08-01 17:15:33
         compiled from deposit_advances_approval/index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/deposit_advance_approval/index">
	<input type="hidden" name="pageNum" value="1" />
	<input type="hidden" name="numPerPage" value="<?php echo $this->_tpl_vars['listRows']; ?>
" />
	<input type="hidden" name="orderField" value="group_id" />
	<input type="hidden" name="orderDirection" value="desc" />
    
    <input type="hidden" name="stock_code" value="<?php echo $this->_tpl_vars['stock_code']; ?>
" />
    
</form>

<div class="pageHeader">
	<form rel="pagerForm" onsubmit="return navTabSearch(this);" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/deposit_advance_approval/index" method="get">
	<div class="searchBar">
		<ul class="searchContent">
        <li style="width:15%;">
				<label style="width:60px;">业务员：</label>
				<select class="combox" name="salesman_id">
                <option value="">全部</option>
                <?php $_from = $this->_tpl_vars['users1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['du']):
?>
                <option value="<?php echo $this->_tpl_vars['du']['user_id']; ?>
" <?php if ($this->_tpl_vars['du']['user_id'] == $this->_tpl_vars['salesman_id']): ?> selected <?php endif; ?> > <?php echo $this->_tpl_vars['du']['user_name']; ?>
 </option>
                <?php endforeach; endif; unset($_from); ?>
                </select>
			</li>
             <li style="width:25%;">
				<label style="width:60px;">时间：</label>
				<input type="text" name="start_time" value="<?php echo $this->_tpl_vars['start_time']; ?>
" style="width:70px;" class="date" readonly="true" />-<input type="text" name="end_time" value="<?php echo $this->_tpl_vars['end_time']; ?>
" style="width:70px;" class="date" readonly="true"/>
                
			</li>
			<li style="width:15%;">
          <label style="width:60px;">审核状态：</label>
        <select name="status" style="font-size:12px;" class="combox">
          <option value="">全部</option>
          <option value="1" <?php if ($this->_tpl_vars['status'] == '1'): ?>selected="selected"<?php endif; ?> >未审核</option>
          <option value="2" <?php if ($this->_tpl_vars['status'] == '2'): ?>selected="selected"<?php endif; ?> >审核通过</option>
          <option value="3" <?php if ($this->_tpl_vars['status'] == '3'): ?>selected="selected"<?php endif; ?> >驳回</option>
        </select>
        </li>
            
           <li style="width:15%;">
          <label style="width:50px;">客户名：</label>
          <input type="text" name="customer_name" value="<?php echo $this->_tpl_vars['customer_name']; ?>
"  style="width:70px;" />
        </li>
        <li style="width:15%;">
          <label style="width:60px;">客户编号：</label>
          <input type="text" name="customer_code" value="<?php echo $this->_tpl_vars['customer_code']; ?>
" alt="" style="width:70px;" />
        </li>         
		</ul>
		
		<div class="subBar">
			<ul>
				<li><div class="buttonActive"><div class="buttonContent"><button type="submit">检索</button></div></div></li>
				
			</ul>
		</div>
	</div>
	</form>
</div>
<form action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/deposit_advance_approval/da_xls_export" method="post" id="discount_approval_export">
<div class="pageContent">
	<div class="panelBar">
		<ul  class="toolBar">
		 <?php if ($this->_tpl_vars['user_hidden']['group_id'] == '50' || $this->_tpl_vars['user_hidden']['group_id'] == '5'): ?>
         <li><a class="icon" href="#" id="da_ex" ><span>导出EXCEL</span></a></li>
         <li class="line">line</li>
         
         <li>
            <a class="edit" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/deposit_advance_approval/shtg/" target="selectedTodo" rel="group_ids[]" postType="string" title="确定批量修改?" ><span>批量审核通过</span></a>
         </li>
         <li class="line">line</li>
         <?php endif; ?>
         </ul>
	</div>
	<table class="table" width="100%" layoutH="138">
		<thead>
			<tr>
				<th width="2%"><input type="checkbox" group="group_ids[]" class="checkboxCtrl"></th>
                <th width="2%">编号</th>
                <th width="4%">时间</th>
                <th width="4%">业务员</th>
                <th width="4%">状态</th>
                <th width="4%">录入时间</th>
                <th width="4%">客户名称</th>
                <th width="4%">客户编号</th>
                <th width="4%">公司</th>
                <th width="4%">成交金额</th>
                <th width="4%">货币</th>
                <th width="4%">金额</th>
                 <th width="4%">驳回理由</th>
                <th width="2%">操作</th>
			</tr>
		</thead>
		<tbody>
    <?php if ($this->_tpl_vars['deposit_advance']): ?>
			 <?php $_from = $this->_tpl_vars['deposit_advance']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['da']):
?>
              <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
">
                <td><input name="group_ids[]" value="<?php echo $this->_tpl_vars['da']['id']; ?>
" type="checkbox"></td>
                <td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
                <td><?php echo $this->_tpl_vars['da']['time']; ?>
</td>
 				<td><?php echo $this->_tpl_vars['da']['name1']; ?>
</td>
                <td>
                     <?php if ($this->_tpl_vars['da']['status'] == '1'): ?>
                         未审核
                     <?php elseif ($this->_tpl_vars['da']['status'] == '2'): ?>
                         审核通过
                     <?php elseif ($this->_tpl_vars['da']['status'] == '3'): ?>
                         驳回
                     <?php else: ?>   
                         
                     <?php endif; ?>
                </td>
                <td><?php echo $this->_tpl_vars['da']['inserttime']; ?>
</td>
                <td><?php echo $this->_tpl_vars['da']['customers_name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['da']['code']; ?>
</td>
                <td><?php echo $this->_tpl_vars['da']['customer_company']; ?>
</td>
                <td>$<?php echo $this->_tpl_vars['da']['chengjiao']; ?>
</td>                
                <td><?php echo $this->_tpl_vars['da']['exchangerate_name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['da']['audit_price']; ?>
</td>
                <td><?php echo $this->_tpl_vars['da']['reason']; ?>
</td>
                <td><?php if ($this->_tpl_vars['da']['status'] == '1'): ?>
               <?php if ($this->_tpl_vars['user_id'] == '1' || $this->_tpl_vars['user_id'] == '2'): ?>
               <a title="驳回" target="dialog" rel="design_return" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/deposit_advance_approval/reason_rejection-id-<?php echo $this->_tpl_vars['da']['id']; ?>
.html" class="btnAdd">驳回</a>
               <?php endif; ?>
                <?php endif; ?></td>
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
<script type="text/javascript">
$("#da_ex").click(function (){
		if($("input[type='checkbox']").is(":checked")){
			alert("即将导出选中数据");
			$("#discount_approval_export").submit();
		}else{
			alert("请选择导出的数据");
		}
	});
</script>