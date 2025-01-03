<?php /* Smarty version 2.6.22, created on 2015-04-21 11:21:19
         compiled from month_subsidies/index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/month_subsidies/index">
	<input type="hidden" name="pageNum" value="1" />
	<input type="hidden" name="numPerPage" value="<?php echo $this->_tpl_vars['listRows']; ?>
" />
    

    <input type="hidden" name="name" value="<?php echo $this->_tpl_vars['name']; ?>
" />
    <input type="hidden" name="program" value="<?php echo $this->_tpl_vars['program']; ?>
" />
</form>

<div class="pageHeader">
	<form rel="pagerForm" onsubmit="return navTabSearch(this);" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/month_subsidies/index" method="get">
	<div class="searchBar">
		<ul class="searchContent">
			<li style="width:20%;">
				<label>姓名：</label>
                <select class="combox" name="name"  >
                	<option value="" >请选择姓名</option>
                    <?php $_from = $this->_tpl_vars['employee']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ta']):
?>
                        <option value="<?php echo $this->_tpl_vars['ta']['name']; ?>
" <?php if ($this->_tpl_vars['name'] == $this->_tpl_vars['ta']['name']): ?> selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['ta']['name']; ?>
</option>
                    <?php endforeach; endif; unset($_from); ?>
                </select>
			</li>
            <li style="width:30%;">
				<label>项目：</label>
				<select class="combox" name="program"  >
                	<option value="" >请选择补贴项目</option>
                    <option value="加班补贴" <?php if ($this->_tpl_vars['program'] == '加班补贴'): ?> selected="selected"<?php endif; ?>>加班补贴</option>
                    <option value="午餐补贴" <?php if ($this->_tpl_vars['program'] == '午餐补贴'): ?> selected="selected"<?php endif; ?>>午餐补贴</option>
                    <option value="其他补贴" <?php if ($this->_tpl_vars['program'] == '其他补贴'): ?> selected="selected"<?php endif; ?>>其他补贴</option>
                    <option value="满勤奖励" <?php if ($this->_tpl_vars['program'] == '满勤奖励'): ?> selected="selected"<?php endif; ?>>满勤奖励</option>
                </select>
			</li>
            
          
            
			
		</ul>
        <div class="subBar">
        <ul>
			 <li style="float:right;"><div class="buttonActive" style="float:right;"><div class="buttonContent" style="float:right;"><button type="submit">检索</button></div></div></li>
		</ul>
        </div>
	</div>
	</form>
</div>
<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
        <li class="line">line</li>
			<li><a class="add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/month_subsidies/add/" target="dialog" rel="page1"><span>添加</span></a></li>
			
			<li class="line">line</li>
			
		</ul>
	</div>

	<table class="table" width="100%" layoutH="138">
		<thead>
			<tr>
				<th width="5%"><input type="checkbox" group="group_ids" class="checkboxCtrl"></th>
                <th width="5%">编号</th>
                <th width="10%">姓名</th>
                <th width="10%">时间</th>
                <th width="10%">项目</th>
                <th width="10%">金额</th>
                <th width="5%">操作</th>
			</tr>
		</thead>
		<tbody>
        <?php if ($this->_tpl_vars['month_list']): ?>
			 <?php $_from = $this->_tpl_vars['month_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['ug']):
?>
              <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
">
                <td><input name="group_ids" value="<?php echo $this->_tpl_vars['ug']['id']; ?>
" type="checkbox"></td>
                <td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
                <td><?php echo $this->_tpl_vars['ug']['name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['ug']['date']; ?>
</td>
                <td><?php echo $this->_tpl_vars['ug']['program']; ?>
</td> 
                <td><?php echo $this->_tpl_vars['ug']['money']; ?>
</td>
                
                <td><a title="删除吗？" target="ajaxTodo" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/month_subsidies/del-id-<?php echo $this->_tpl_vars['ug']['id']; ?>
.html" class="btnDel">删除</a> <a title="编辑" target="dialog" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/month_subsidies/edit-id-<?php echo $this->_tpl_vars['ug']['id']; ?>
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