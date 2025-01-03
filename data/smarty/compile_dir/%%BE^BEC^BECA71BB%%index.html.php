<?php /* Smarty version 2.6.22, created on 2016-05-16 16:25:37
         compiled from old_customer_email_checked/index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/old_customer_email_checked/index">
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
    <input type="hidden" name="design_code" value="<?php echo $this->_tpl_vars['design_code']; ?>
" />
    
    <input type="hidden" name="status" value="<?php echo $this->_tpl_vars['status']; ?>
" />
</form>

<div class="pageHeader">
	<form rel="pagerForm" onsubmit="return navTabSearch(this);" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/old_customer_email_checked/index" method="get">
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
" <?php if ($this->_tpl_vars['du']['user_name'] == $this->_tpl_vars['salesman_user_name']): ?> selected <?php endif; ?> > <?php echo $this->_tpl_vars['du']['user_name']; ?>
 </option>
                <?php endforeach; endif; unset($_from); ?>
                </select>
			</li>
            <li style="width:13%;">
                <label style="width:60px;">业务分组：</label>
                <select class="combox" name="little_group">
                <option value="">全部</option>
                <option value="A" <?php if ($this->_tpl_vars['little_group'] == 'A'): ?> selected <?php endif; ?> > 销售1部 </option>
                <option value="B" <?php if ($this->_tpl_vars['little_group'] == 'B'): ?> selected <?php endif; ?> > 销售2部 </option>
                <option value="C" <?php if ($this->_tpl_vars['little_group'] == 'C'): ?> selected <?php endif; ?> > 销售3部 </option>
                <option value="D" <?php if ($this->_tpl_vars['little_group'] == 'D'): ?> selected <?php endif; ?> > 销售4部 </option>
                </select>
            </li>
  
			</li>
<!--            <li style="width:15%;">
				<label style="width:50px;">状态：</label>
				<select class="combox" name="status">
                <option value="">全部</option>
                <option value="3" <?php if ($this->_tpl_vars['status'] == '3'): ?> selected <?php endif; ?>>审核中</option>
                <option value="1" <?php if ($this->_tpl_vars['status'] == '1'): ?> selected <?php endif; ?>>通过审核</option>
                <option value="2" <?php if ($this->_tpl_vars['status'] == '2'): ?> selected <?php endif; ?>>驳回</option>
                </select>
                
			</li>-->
             <li style="width:20%;">
				<label style="width:70px;">客户代码：</label>
				<input type="text" name="customer_code" style="width:90px;" value="<?php echo $this->_tpl_vars['customer_code']; ?>
"  />
                
			</li>
            <li style="width:20%;">
				<label style="width:70px;">客户名：</label>
				<input type="text" name="customer_name" style="width:90px;" value="<?php echo $this->_tpl_vars['customer_name']; ?>
"  />
                
			</li>
            <li style="width:20%;">
				<label style="width:70px;">公司：</label>
				<input type="text" name="company" style="width:90px;" value="<?php echo $this->_tpl_vars['company']; ?>
"  />
                
			</li>
            <li style="width:20%;">
				<label style="width:70px;">原邮箱：</label>
				<input type="text" name="old_email" style="width:90px;" value="<?php echo $this->_tpl_vars['old_email']; ?>
"  />
                
			</li>
            <li style="width:20%;">
				<label style="width:70px;">修改邮箱：</label>
				<input type="text" name="change_email" style="width:90px;" value="<?php echo $this->_tpl_vars['change_email']; ?>
"  />
                
			</li>
             <li style="float:right;"><div class="buttonActive" style="float:right;"><div style="float:right;" class="buttonContent"><button type="submit">检索</button></div></div></li>
            
		</ul>
         
	</div>
	</form>
</div>
<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
			<li>
            <a class="edit" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/old_customer_email_checked/pass_chaecked/" target="selectedTodo" rel="group_ids[]" postType="string" title="确定批量审核通过?" ><span>批量审核通过</span></a>
            <li class="line">line</li>
            <a class="edit" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/old_customer_email_checked/unpass_chaecked/" target="selectedTodo" rel="group_ids[]" postType="string" title="确定批量驳回?" ><span>批量驳回</span></a>
        	</li>
		</ul>
	</div>
	<table class="table" width="100%" layoutH="138">
		<thead>
			<tr>
				<th width="2%"><input type="checkbox" group="group_ids[]" class="checkboxCtrl"></th>
                <th width="2%">编号</th>
                <th width="9%">时间</th>
                <th width="5%">状态</th>
                <th width="10%">业务员</th>
                <th width="10%">客户代码</th>
                <th width="8%">客户名</th>
                <th width="6%">公司</th>
                <th width="6%">原邮箱</th>
                <th width="12%">修改邮箱</th>
                <th width="12%">事由</th>
			</tr>
		</thead>
		<tbody>
     <?php if ($this->_tpl_vars['info_list']): ?>
			 <?php $_from = $this->_tpl_vars['info_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['dis']):
?>
              <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
" style="height:100px;">
                <td><input name="group_ids[]" value="<?php echo $this->_tpl_vars['dis']['id']; ?>
" type="checkbox"></td>
                <td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
                <td style="height:100px;"><?php echo $this->_tpl_vars['dis']['insert_time']; ?>
</td>
 				<td><?php if ($this->_tpl_vars['dis']['status'] == '1'): ?>通过审核<?php elseif ($this->_tpl_vars['dis']['status'] == '2'): ?>驳回<?php elseif ($this->_tpl_vars['dis']['status'] == '3'): ?>审核中<?php endif; ?></td>
                <td><?php echo $this->_tpl_vars['dis']['user_name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['customer_code']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['customer_name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['company']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['old_email']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['new_email']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['note']; ?>
</td>
                
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