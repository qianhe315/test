<?php /* Smarty version 2.6.22, created on 2013-12-18 14:30:56
         compiled from sales_activity_management/index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/stock_manage/index">
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
/unfinishdesign/index" method="get">
	<div class="searchBar">
		<ul class="searchContent">
        <li style="width:15%;">
				<label style="width:70px;">业务员：</label>
				<select class="combox" name="sale_user">
                <option value=""></option>
                <?php $_from = $this->_tpl_vars['sale_users']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['du']):
?>
                <option value="<?php echo $this->_tpl_vars['du']['user_id']; ?>
" <?php if ($this->_tpl_vars['du']['user_id'] == $this->_tpl_vars['sale_user']): ?> selected <?php endif; ?> > <?php echo $this->_tpl_vars['du']['user_name']; ?>
 </option>
                <?php endforeach; endif; unset($_from); ?>
                </select>
			</li>
             <li style="width:23%;">
				<label style="width:40px;">时间：</label>
				<input type="text" name="start_time" class="date" readonly="true" style="width:70px;" value="<?php echo $this->_tpl_vars['start_time']; ?>
" />-<input type="text" name="end_time" class="date" readonly="true"  style="width:70px;" value="<?php echo $this->_tpl_vars['end_time']; ?>
" />
           <li style="width:20%;">
          <label style="width:60px;">客户名：</label>
          <input type="text" name="customer_name" value="<?php echo $this->_tpl_vars['customer_name']; ?>
"  style="width:70px;" />
        </li>
        <li style="width:18%;">
          <label style="width:70px;">客户编号：</label>
          <input type="text" name="email" value="<?php echo $this->_tpl_vars['email']; ?>
" alt="" style="width:70px;" />
        </li>
        <li style="width:18%;">
          <label style="width:70px;">公司：</label>
          <input type="text" name="email" value="<?php echo $this->_tpl_vars['email']; ?>
" alt="" style="width:70px;" />
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
            <li><a class="delete" href="*"><span>删除</span></a></li>
			<li class="line">line</li>
			<li><a class="add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/sales_activity_management/add/" target="dialog" rel="sales_activity_managementadd"><span>更新日客户维护次数</span></a></li>
			<li class="line">line</li>
           
		</ul>
	</div>
	<table class="table" width="100%" layoutH="138">
		<thead>
			<tr>
				<th width="2%"><input type="checkbox" group="group_ids" class="checkboxCtrl"></th>
                <th width="2%">编号</th>
                <th width="7%">时间</th>
                <th width="30">业务员</th>
                <th width="30">客户代码</th>
                <th width="30">客户名</th>
                <th width="30">公司</th>
                <th width="30">邮件数量</th>
                <th width="30">电话数量</th>
                <th width="50">操作</th>
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
                <td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
                <td style="height:100px;"><img src="<?php echo $this->_tpl_vars['dis']['image_jpg']; ?>
" width="100px" height="100px" ></td>
 				<td><?php echo $this->_tpl_vars['dis']['insert_time']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['stock_code']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['size_inch_w']; ?>
*<?php echo $this->_tpl_vars['dis']['size_inch_h']; ?>
 inch</td>
                <td><?php echo $this->_tpl_vars['dis']['stock_code']; ?>
</td>
            
                <td><a title="删除吗？" target="ajaxTodo" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/unfinishdesign/del-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" class="btnDel">删除</a> <a title="编辑" target="navTab" rel="stock_manage_edit" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/unfinishdesign/edit-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" class="btnEdit">编辑</a></td>
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