<?php /* Smarty version 2.6.22, created on 2015-04-21 11:20:00
         compiled from employee_information/index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/employee_information/index">
	<input type="hidden" name="pageNum" value="1" />
	<input type="hidden" name="numPerPage" value="<?php echo $this->_tpl_vars['listRows']; ?>
" />
    
    <input type="hidden" name="area_name" value="<?php echo $this->_tpl_vars['name']; ?>
" />
    <input type="hidden" name="code" value="<?php echo $this->_tpl_vars['post']; ?>
" />
    <input type="hidden" name="time1" value="<?php echo $this->_tpl_vars['time1']; ?>
" />
    <input type="hidden" name="time2" value="<?php echo $this->_tpl_vars['time2']; ?>
" />
    <input type="hidden" name="base_pay1" value="<?php echo $this->_tpl_vars['base_pay1']; ?>
" />
    <input type="hidden" name="base_pay2" value="<?php echo $this->_tpl_vars['base_pay2']; ?>
" />
</form>

<div class="pageHeader">
	<form rel="pagerForm" onsubmit="return navTabSearch(this);" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/employee_information/index" method="get">
	<div class="searchBar">
		<ul class="searchContent">
			<li style="width:20%;">
				<label>姓名：</label>
				<input type="text" name="name" value="<?php echo $this->_tpl_vars['name']; ?>
" style=" width:70px"/>
			</li>
            <li style="width:20%;">
				<label>岗位：</label>
				<input type="text" name="post" value="<?php echo $this->_tpl_vars['post']; ?>
" style=" width:70px"/>
			</li>
            <li style="width:30%;">
				<label>入职时间：</label>
				<input type="text" name="time1" value="<?php echo $this->_tpl_vars['time1']; ?>
" class="date" style=" width:70px" readonly/>至<input type="text" name="time2" value="<?php echo $this->_tpl_vars['time2']; ?>
" class="date" style=" width:70px" readonly/>
			</li>
            
            <li style="width:30%;">
				<label>基本工资：</label>
				<input type="text" name="base_pay1" value="<?php echo $this->_tpl_vars['base_pay1']; ?>
" style=" width:70px"/>至<input type="text" name="base_pay2" value="<?php echo $this->_tpl_vars['base_pay2']; ?>
" style=" width:70px"/>
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
/employee_information/add/" target="dialog" rel="page1"><span>添加</span></a></li>
			
			<li class="line">line</li>
			
		</ul>
	</div>

	<table class="table" width="100%" layoutH="138">
		<thead>
			<tr>
				<th width="5%"><input type="checkbox" group="group_ids" class="checkboxCtrl"></th>
                <th width="5%">编号</th>
                <th width="10%">姓名</th>
                <th width="10%">部门</th>
                <th width="10%">岗位</th>
                <th width="10%">入职时间</th>
                <th width="10%">基本工资</th>
                <th width="10%">工资卡</th>
                <th width="10%">个人卡</th>
                <th width="5%">操作</th>
			</tr>
		</thead>
		<tbody>
        <?php if ($this->_tpl_vars['employee_list']): ?>
			 <?php $_from = $this->_tpl_vars['employee_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
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
                <td><?php echo $this->_tpl_vars['ug']['department']; ?>
</td>
                <td><?php echo $this->_tpl_vars['ug']['post']; ?>
</td> 
                <td><?php echo $this->_tpl_vars['ug']['time']; ?>
</td> 
                <td><?php echo $this->_tpl_vars['ug']['base_pay']; ?>
</td> 
                <td><?php echo $this->_tpl_vars['ug']['pay_card']; ?>
</td> 
                <td><?php echo $this->_tpl_vars['ug']['person_card']; ?>
</td> 
                
                <td><a title="删除吗？" target="ajaxTodo" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/employee_information/del-id-<?php echo $this->_tpl_vars['ug']['id']; ?>
.html" class="btnDel">删除</a> <a title="编辑" target="dialog" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/employee_information/edit-id-<?php echo $this->_tpl_vars['ug']['id']; ?>
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