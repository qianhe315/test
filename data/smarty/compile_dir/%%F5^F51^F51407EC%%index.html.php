<?php /* Smarty version 2.6.22, created on 2013-09-05 17:09:44
         compiled from tapedata/index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/tapedata/index">
	<input type="hidden" name="pageNum" value="1" />
	<input type="hidden" name="numPerPage" value="<?php echo $this->_tpl_vars['listRows']; ?>
" />
	<input type="hidden" name="orderField" value="group_id" />
	<input type="hidden" name="orderDirection" value="desc" />
    
    <input type="hidden" name="tapedata_name" value="<?php echo $this->_tpl_vars['tapedata_name']; ?>
" />
</form>

<div class="pageHeader">
	<form rel="pagerForm" onsubmit="return navTabSearch(this);" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/tapedata/index" method="get">
	<div class="searchBar">
		<ul class="searchContent">
			<li style="width:30%">
				<label>快递公司名：</label>
				<input type="text" name="tapedata_name" value="<?php echo $this->_tpl_vars['tapedata_name']; ?>
"/>
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
        <li class="line">line</li>
			<li><a class="add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/tapedata/add/" target="dialog" rel="page1"><span>添加胶纸数据</span></a></li>
			
			<li class="line">line</li>
			
		</ul>
	</div>
	<table class="table" width="1200" layoutH="138">
		<thead>
			<tr>
				<th width="22"><input type="checkbox" group="group_ids" class="checkboxCtrl"></th>
                <th width="30">名称</th>
                <th width="30">宽度</th>
                <th width="30">预留尺寸</th>
                <th width="30">单价</th>
                <th width="70">操作</th>
			</tr>
		</thead>
		<tbody>
        <?php if ($this->_tpl_vars['tapedatas']): ?>
			 <?php $_from = $this->_tpl_vars['tapedatas']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['ug']):
?>
              <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
">
                <td><input name="group_ids" value="<?php echo $this->_tpl_vars['ug']['group_id']; ?>
" type="checkbox"></td>
                <td><?php echo $this->_tpl_vars['ug']['tapedata_name']; ?>
</td>
 				<td><?php echo $this->_tpl_vars['ug']['tapedata_width']; ?>
CM</td>
                <td><?php echo $this->_tpl_vars['ug']['tapedata_reserved_size']; ?>
CM</td>
                <td><?php echo $this->_tpl_vars['ug']['tapedata_price']; ?>
元</td>
                <td><a title="删除吗？" target="ajaxTodo" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/tapedata/del-id-<?php echo $this->_tpl_vars['ug']['id']; ?>
.html" class="btnDel">删除</a> <a title="编辑" target="dialog" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/tapedata/edit-id-<?php echo $this->_tpl_vars['ug']['id']; ?>
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