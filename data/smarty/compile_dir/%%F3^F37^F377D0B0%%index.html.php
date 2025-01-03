<?php /* Smarty version 2.6.22, created on 2015-11-18 16:34:01
         compiled from oa_material_purchasing/index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/oa_material_purchasing/index">
	<input type="hidden" name="pageNum" value="1" />
	<input type="hidden" name="numPerPage" value="<?php echo $this->_tpl_vars['listRows']; ?>
" />
	<input type="hidden" name="orderField" value="group_id" />
	<input type="hidden" name="orderDirection" value="desc" />
</form>

<div class="pageHeader">
	<form rel="pagerForm" onsubmit="return navTabSearch(this);" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/oa_material_purchasing/index" method="get">
	<div class="searchBar">
		<ul class="searchContent" style="height:25px">
        	<li style="width:15%">
				<label style="width:50px;">时间：</label>
				<input type="text" name="insert_time" class="date" value="<?php echo $this->_tpl_vars['insert_time']; ?>
"   style="width:80px;" />
			</li>
			<li style="width:15%">
				<label style="width:50px;">编号：</label>
				<input type="text" name="number" value="<?php echo $this->_tpl_vars['number']; ?>
"  style="width:80px;" />
			</li>
            <li style="width:18%">
				<label style="width:40px;">部门：</label>
                <select class="combox" name="department_id">
                <option value="">全部</option>
                <?php $_from = $this->_tpl_vars['get_departments']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['du']):
?>
                <option value="<?php echo $this->_tpl_vars['du']['id']; ?>
" <?php if ($this->_tpl_vars['du']['id'] == $this->_tpl_vars['department_id']): ?> selected <?php endif; ?> > <?php echo $this->_tpl_vars['du']['department_name']; ?>
 </option>
                <?php endforeach; endif; unset($_from); ?>
                </select>
			</li>
            <li style="width:15%">
				<label style="width:50px;">经办人：</label>
				<input type="text" name="user_name" value="<?php echo $this->_tpl_vars['user_name']; ?>
"  style="width:80px;" />
			</li>
            <li style="width:15%">
				<label style="width:50px;">金额：</label>
				<input type="text" name="money" value="<?php echo $this->_tpl_vars['money']; ?>
"  style="width:80px;" />
			</li>
            <li style="float:right;"><div class="buttonActive" style="float:right;"><div style="float:right;" class="buttonContent"><button type="submit">检索</button></div></div></li>
			
		</ul>
		
		<div class="subBar">
			
		</div>
	</div>
	</form>
</div>
<form action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/oa_material_purchasing/update_password" method="post" id="update_password_submit">
<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
            <li class="line">line</li>
            <li><a class="add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/oa_material_purchasing/all_page/" target="navTab"  class="btnAdd" ><span>添加</span></a></li>
            <li class="line">line</li>
		</ul>
	</div>
	<table class="table" width="100%" layoutH="138">
		<thead>
			<tr>
				<th width="1%"><input type="checkbox" group="group_ids[]" class="checkboxCtrl"></th>
                <th width="2%">编号</th>
                <th width="5%">时间</th>
                <th width="3%">编号</th>
                <th width="5%">部门</th>
                <th width="5%">经办人</th>
                <th width="8%">借款人名称</th>
                <th width="8%">往来事由</th>
                <th width="5%">金额</th>
                <th width="5%">预计还款时间</th>
                <th width="5%">部门主管</th>
                <th width="5%">财务经理</th>
                <th width="5%">总经理</th>
                <th width="5%">出纳</th>
                <th width="3%">操作</th>
			</tr>
		</thead>
		<tbody>
        <?php if ($this->_tpl_vars['oa_material_purchasing_list']): ?>
			 <?php $_from = $this->_tpl_vars['oa_material_purchasing_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['val']):
?>
              <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
">
                <td><input name="group_ids[]" value="<?php echo $this->_tpl_vars['val']['id']; ?>
" type="checkbox"></td>
                <td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
                <td><?php echo $this->_tpl_vars['val']['insert_time']; ?>
</td>
                <td><?php echo $this->_tpl_vars['val']['number']; ?>
</td>
                <td><?php echo $this->_tpl_vars['val']['department_name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['val']['user_name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['val']['borrow_name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['val']['borrow_reason']; ?>
</td>
                <td>￥<?php echo $this->_tpl_vars['val']['borrow_price_lowercase']; ?>
</td>
                <td><?php echo $this->_tpl_vars['val']['expected_repayment_date']; ?>
</td>
                <td><?php echo $this->_tpl_vars['val']['office_name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['val']['office_name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['val']['office_name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['val']['office_name']; ?>
</td>
                <td>
                    <a title="编辑" target="navTab" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/oa_material_purchasing/all_page-id-<?php echo $this->_tpl_vars['val']['id']; ?>
.html" class="btnEdit">编辑</a>
                    <?php if ($this->_tpl_vars['user_id'] == '1'): ?><a title="删除吗？" target="ajaxTodo" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/oa_material_purchasing/del-id-<?php echo $this->_tpl_vars['val']['id']; ?>
.html" class="btnDel">删除</a> <?php endif; ?>
                </td>
              </tr>
             <?php endforeach; endif; unset($_from); ?>
             <?php endif; ?>
		</tbody>
	</table>
	<div class="panelBar">
		<div class="pages">
			<span>显示</span>
			<select class="combox" name="numPerPage" onchange="navTabPageBreak({numPerPage:this.value})">
            <?php if ($this->_tpl_vars['listRows'] == 50): ?>
				<option value="50" selected="selected">50</option>
				<option value="100">100</option>
				<option value="200">200</option>
                <option value="<?php echo $this->_tpl_vars['total_count']; ?>
"><?php echo $this->_tpl_vars['total_count']; ?>
</option>
            <?php elseif ($this->_tpl_vars['listRows'] == 100): ?>
            	<option value="50">50</option>
				<option value="100" selected="selected">100</option>
				<option value="200">200</option>
                <option value="<?php echo $this->_tpl_vars['total_count']; ?>
"><?php echo $this->_tpl_vars['total_count']; ?>
</option>
			
            <?php elseif ($this->_tpl_vars['listRows'] == 200): ?>
            	<option value="50">50</option>
				<option value="100">100</option>
				<option value="200" selected="selected">200</option>
                <option value="<?php echo $this->_tpl_vars['total_count']; ?>
"><?php echo $this->_tpl_vars['total_count']; ?>
</option>
            <?php elseif ($this->_tpl_vars['listRows'] == $this->_tpl_vars['total_count']): ?>
            	<option value="50">50</option>
				<option value="100">100</option>
				<option value="200">200</option>
                <option value="<?php echo $this->_tpl_vars['total_count']; ?>
" selected="selected"><?php echo $this->_tpl_vars['total_count']; ?>
</option>
            <?php endif; ?>
            </select>
			<span>共<?php echo $this->_tpl_vars['total_count']; ?>
条</span>
		</div>
		
		<div class="pagination" targetType="navTab" totalCount="<?php echo $this->_tpl_vars['total_count']; ?>
" numPerPage="<?php echo $this->_tpl_vars['listRows']; ?>
" pageNumShown="10" currentPage="<?php echo $this->_tpl_vars['current_page']; ?>
"></div>


	</div>
</div>
</form>