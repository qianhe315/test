<?php /* Smarty version 2.6.22, created on 2015-03-24 16:50:59
         compiled from ali_hits/index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/ali_hits/index">
	<input type="hidden" name="pageNum" value="1" />
	<input type="hidden" name="numPerPage" value="<?php echo $this->_tpl_vars['listRows']; ?>
" />
	<input type="hidden" name="orderField" value="group_id" />
	<input type="hidden" name="orderDirection" value="desc" />
    
    <input type="hidden" name="start_time" value="<?php echo $this->_tpl_vars['start_time']; ?>
" />
    <input type="hidden" name="end_time" value="<?php echo $this->_tpl_vars['end_time']; ?>
" />
    <input type="hidden" name="status" value="<?php echo $this->_tpl_vars['status']; ?>
" />
</form>

<div class="pageHeader">
	<form rel="pagerForm" onsubmit="return navTabSearch(this);" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/ali_hits/index" method="get">
	<div class="searchBar">
		<ul class="searchContent">
			
            <li style="width:30%">
				<label style=" width:40px">时间：</label>
				<input type="text" name="start_time" style="width:70px" readonly="true" value="<?php echo $this->_tpl_vars['start_time']; ?>
" class="date" />-<input type="text" name="end_time" readonly="true" style="width:70px" value="<?php echo $this->_tpl_vars['end_time']; ?>
" class="date" />
			</li>
            
            <li style="width:30%">
				<label>状态：</label>
				<select class="combox" name="status">
                <option value="">全部</option>
                <option value="0" <?php if ($this->_tpl_vars['status'] == '0'): ?> selected="selected" <?php endif; ?> >未处理</option>
                <option value="1"  <?php if ($this->_tpl_vars['status'] == '1'): ?> selected="selected" <?php endif; ?> >已处理</option>
                </select>
			</li>
            <li style="float:right;"><div class="buttonActive" style="float:right;"><div style="float:right;" class="buttonContent"><button type="submit">检索</button></div></div></li>
		</ul>
        <div class="subBar">
			
		</div>
	</div>
	</form>
</div>
<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
			<li><a class="add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/ali_hits/add/" target="dialog" rel="page1"><span>添加</span></a></li>
			
			<li class="line">line</li>
			
		</ul>
	</div>
	<table class="table" width="1200" layoutH="138">
		<thead>
			<tr>
				<th width="22"><input type="checkbox" group="group_ids" class="checkboxCtrl"></th>
                <th width="30">编号</th>
                <th width="30">状态</th>
                <th width="30">添加时间</th>
                <th width="30">时间</th>
                <th width="30">日阿里点击量</th>
                <th width="70">操作</th>
			</tr>
		</thead>
		<tbody>
        <?php if ($this->_tpl_vars['ali_hits']): ?>
			 <?php $_from = $this->_tpl_vars['ali_hits']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['fb']):
?>
              <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
">
                <td><input name="group_ids" value="<?php echo $this->_tpl_vars['fb']['id']; ?>
" type="checkbox"></td>
               	<td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
 				<td><?php if ($this->_tpl_vars['fb']['status'] == '0'): ?>未处理<?php else: ?>已处理<?php endif; ?></td>
               	<td><?php echo $this->_tpl_vars['fb']['insert_time']; ?>
</td>
                <td><?php echo $this->_tpl_vars['fb']['date_time']; ?>
</td>
                <td><?php echo $this->_tpl_vars['fb']['hits']; ?>
</td>
                <td><a title="删除吗？" target="ajaxTodo" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/ali_hits/del-id-<?php echo $this->_tpl_vars['fb']['id']; ?>
.html" class="btnDel">删除</a> <a title="编辑" target="dialog" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/ali_hits/edit-id-<?php echo $this->_tpl_vars['fb']['id']; ?>
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