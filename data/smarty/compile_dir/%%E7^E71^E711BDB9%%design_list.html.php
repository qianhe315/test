<?php /* Smarty version 2.6.22, created on 2016-03-04 10:03:28
         compiled from cn_finishdesign/design_list.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/uncheckdesign/design_list">
	<input type="hidden" name="pageNum" value="1" />
	<input type="hidden" name="numPerPage" value="<?php echo $this->_tpl_vars['listRows']; ?>
" />
	<input type="hidden" name="orderField" value="group_id" />
	<input type="hidden" name="orderDirection" value="desc" />
    
    <input type="hidden" name="design_user" value="<?php echo $this->_tpl_vars['design_user']; ?>
" />
    <input type="hidden" name="salesman_id" value="<?php echo $this->_tpl_vars['salesman_id']; ?>
" />
    <input type="hidden" name="start_time" value="<?php echo $this->_tpl_vars['start_time']; ?>
" />
    <input type="hidden" name="end_time" value="<?php echo $this->_tpl_vars['end_time']; ?>
" />
    
</form>

<div class="pageHeader">
	<form rel="pagerForm" onsubmit="return navTabSearch(this);" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/uncheckdesign/design_list" method="get">
	<div class="searchBar">
		<ul class="searchContent">
			
            
		</ul>
		
		<div class="subBar">
	
		</div>
        <div class="subBar">
	
		</div>
	</div>
	</form>
</div>
<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
			
           
			<li class="line">line</li>
			
		</ul>
	</div>
	<table class="table" width="100%" layoutH="138">
		<thead>
			<tr>
				<th width="5%"><input type="checkbox" group="group_ids" class="checkboxCtrl"></th>
                <th width="8%">缩略图</th>
                <th width="12%">设计编号</th>
                <th width="12%">设计备注</th>
                <th width="12%">检验备注</th>
                <th width="12%">销售评语</th>
                <th width="5%">操作</th>
			</tr>
		</thead>
		<tbody>
			 <?php $_from = $this->_tpl_vars['stock_manage']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['dis']):
?>
              <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
" style="height:100px;">
                <td><input name="group_ids" value="<?php echo $this->_tpl_vars['dis']['id']; ?>
" type="checkbox"></td>
                <td style="height:100px;"><img src="<?php echo $this->_tpl_vars['dis']['upload_jpg']; ?>
" width="100px" height="100px" ></td>
 				<td><?php echo $this->_tpl_vars['dis']['design_content_code']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['design_note']; ?>
</td>
              <td><?php echo $this->_tpl_vars['dis']['design_content_verify_note']; ?>
</td>
              <td><?php echo $this->_tpl_vars['dis']['sales_comments']; ?>
</td>
                <td>
                <!--<a title="删除吗？" target="ajaxTodo" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/unfinishdesign/del_design_content-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" class="btnDel">删除</a> -->
                <a title="查看" target="navTab" rel="cn_edit_design_content-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_finishdesign/edit_design_content-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
-design_id-<?php echo $this->_tpl_vars['design_id']; ?>
.html" class="btnEdit">查看</a>
               
                </td>
              </tr>
              
             <?php endforeach; endif; unset($_from); ?>
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