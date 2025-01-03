<?php /* Smarty version 2.6.22, created on 2024-10-22 17:14:22
         compiled from lhpl_module/attribute_list.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/lhpl_module/attribute_list-module_id-<?php echo $this->_tpl_vars['module_id']; ?>
.html">
	<input type="hidden" name="pageNum" value="1" />
	<input type="hidden" name="numPerPage" value="<?php echo $this->_tpl_vars['listRows']; ?>
" />
	<input type="hidden" name="orderField" value="group_id" />
	<input type="hidden" name="orderDirection" value="desc" />
    
</form>

<div class="pageHeader">
<input type="hidden" name="module_id"  value="<?php echo $this->_tpl_vars['module_id']; ?>
">
</div>

<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
        <li class="line">line</li>
			<li><a class="add" rel="attribute_list_add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/lhpl_module/add_attribute-module_id-<?php echo $this->_tpl_vars['module_id']; ?>
" target="dialog"><span>添加</span></a></li>
			
			<li class="line">line</li>
			
		</ul>
	</div>
	<table class="table" width="600" layoutH="138">
		<thead>
			<tr>
                <th width="5%">顺序</th>
                <th width="15%">属性中文名</th>
                <th width="20%">属性英文名</th>
                <th width="20%">程序区分名</th>
                <th width="15%">值类型</th>
                <th width="10%">必填项</th>
                <th width="15%">操作</th>
			</tr>
		</thead>
		<tbody>
        <?php if ($this->_tpl_vars['lhpl_attribute_list']): ?>
			 <?php $_from = $this->_tpl_vars['lhpl_attribute_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['la']):
?>
              <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
">
              	<td><?php echo $this->_tpl_vars['la']['order']; ?>
</td>
                <td><?php echo $this->_tpl_vars['la']['cn_name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['la']['en_name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['la']['en_name1']; ?>
</td>
                <td><?php echo $this->_tpl_vars['la']['type']; ?>
</td>
                <td><?php if ($this->_tpl_vars['la']['required'] == 1): ?>是<?php endif; ?></td>
                <td>
                	<a title="删除吗？" target="ajaxTodo" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/lhpl_module/del_attribute-module_id-<?php echo $this->_tpl_vars['module_id']; ?>
-attribute_id-<?php echo $this->_tpl_vars['la']['attribute_id']; ?>
" class="btnDel">删除</a> 
                    <a title="属性编辑" target="dialog" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/lhpl_module/edit_attribute-module_id-<?php echo $this->_tpl_vars['module_id']; ?>
-attribute_id-<?php echo $this->_tpl_vars['la']['attribute_id']; ?>
" class="btnEdit">基础信息</a>
                    <?php if ($this->_tpl_vars['la']['type'] != '文本框' && $this->_tpl_vars['la']['type'] != '文本域' && $this->_tpl_vars['la']['type'] != '潘通色'): ?>
                    <a class="btnInfo" title="属性内容" target="navTab" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/lhpl_module/edit_attribute_list_value-attribute_id-<?php echo $this->_tpl_vars['la']['attribute_id']; ?>
"><span>属性内容</span></a>
                    <?php endif; ?>
                    
                </td>
              </tr>
              
             <?php endforeach; endif; unset($_from); ?>
             <?php endif; ?>
		</tbody>
	</table>
	<div class="panelBar">
		<div class="pages">
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