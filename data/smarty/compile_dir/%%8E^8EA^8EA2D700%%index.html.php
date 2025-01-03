<?php /* Smarty version 2.6.22, created on 2014-01-09 08:53:03
         compiled from deductions_set/index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/deductions_set/index">
	<input type="hidden" name="pageNum" value="1" />
	<input type="hidden" name="numPerPage" value="<?php echo $this->_tpl_vars['listRows']; ?>
" />
	<input type="hidden" name="orderField" value="group_id" />
	<input type="hidden" name="orderDirection" value="desc" />
</form>

<div class="pageHeader">
	<form rel="pagerForm" onSubmit="return navTabSearch(this);" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/deductions_set/index" method="get">
	<div class="searchBar">
		<ul class="searchContent">
			<?php if ($this->_tpl_vars['user_hidden']['group_id'] != '53'): ?>
            <li style="width:15%;">
                    <label style="width:60px;">业务员：</label>
                    <select class="combox" name="sale_user">
                    <option value="">全部</option>
                    <?php $_from = $this->_tpl_vars['user_lists']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['du']):
?>
                    <option value="<?php echo $this->_tpl_vars['du']['user_name']; ?>
" <?php if ($this->_tpl_vars['du']['user_name'] == $this->_tpl_vars['sale_user']): ?> selected <?php endif; ?> > <?php echo $this->_tpl_vars['du']['user_name']; ?>
 </option>
                    <?php endforeach; endif; unset($_from); ?>
                    </select>
                </li>
            <?php endif; ?>
            <li style="width:25%;">
				<label style="width:60px">时间：</label>
				<input type="text" name="start_time" value="<?php echo $this->_tpl_vars['start_time']; ?>
" class="date" readonly="true" style="width:70px"/>-<input type="text" name="end_time" style="width:70px" value="<?php echo $this->_tpl_vars['end_time']; ?>
" class="date" readonly="true"/>
                
			</li>
            <li style="float:right;"><div class="buttonActive" style="float:right;"><div class="buttonContent" style="float:right;"><button type="submit">检索</button></div></div></li>
			
		</ul>
         <div class="subBar">
			
		</div>
	</div>
	</form>
</div>
<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
        <li class="line">line</li>
			<li><a class="add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/deductions_set/add/" target="dialog" rel="page1"><span>添加</span></a></li>
			
			<li class="line">line</li>
			
		</ul>
	</div>
	<table class="table" width="100%" layoutH="138">
		<thead>
			<tr>
				<th width="3%"><input type="checkbox" group="group_ids" class="checkboxCtrl"></th>
                <th width="7%">时间</th>
                <th width="5%">业务员</th>
                <th width="5%">金额</th>
                <th width="15%">备注</th>
                <th width="5%">操作</th>
			</tr>
		</thead>
		<tbody>
        <?php if ($this->_tpl_vars['deductions_set']): ?>
			 <?php $_from = $this->_tpl_vars['deductions_set']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['ds']):
?>
              <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
">
                <td><input name="group_ids" value="<?php echo $this->_tpl_vars['ds']['user_id']; ?>
" type="checkbox"></td>
                <td><?php echo $this->_tpl_vars['ds']['date_value']; ?>
</td>
                <td><?php echo $this->_tpl_vars['ds']['sale_name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['ds']['money']; ?>
</td>
                <td><?php echo $this->_tpl_vars['ds']['note']; ?>
</td>                
                <td><a title="删除吗？" target="ajaxTodo" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/deductions_set/del-id-<?php echo $this->_tpl_vars['ds']['id']; ?>
.html" class="btnDel">删除</a> <a title="编辑" target="dialog" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/deductions_set/edit-id-<?php echo $this->_tpl_vars['ds']['id']; ?>
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
</div>