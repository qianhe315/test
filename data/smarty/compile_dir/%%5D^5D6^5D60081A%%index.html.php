<?php /* Smarty version 2.6.22, created on 2016-07-25 11:38:03
         compiled from design_return/index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/design_return/index">
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
/design_return/index" method="get">
	<div class="searchBar">
		<ul class="searchContent">
			<li style="width:15%;">
				<label style="width:70px;">设计人员：</label>
				<select class="combox" name="design_user">
                <option value="">全部</option>
                <?php $_from = $this->_tpl_vars['users']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ur']):
?>
                <option value="<?php echo $this->_tpl_vars['ur']['user_id']; ?>
" <?php if ($this->_tpl_vars['ur']['user_name'] == $this->_tpl_vars['design_user_name']): ?> selected <?php endif; ?> > <?php echo $this->_tpl_vars['ur']['user_name']; ?>
 </option>
                <?php endforeach; endif; unset($_from); ?>
                </select>
			</li>
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
            <li style="width:25%;">
				<label style="width:50px;">时间：</label>
				<input type="text" name="start_time" class="date" readonly="true" style="width:70px;" value="<?php echo $this->_tpl_vars['start_time']; ?>
"  />-<input type="text" name="end_time" class="date" readonly="true" style="width:70px;" value="<?php echo $this->_tpl_vars['end_time']; ?>
" />
                
			</li>
            <li style="width:15%;">
				<label style="width:50px;">状态：</label>
				<select class="combox" name="status">
                <option value="">全部</option>
                <option value="5" <?php if ($this->_tpl_vars['status'] == '5'): ?> selected <?php endif; ?>>未审核</option>
                <option value="3" <?php if ($this->_tpl_vars['status'] == '3'): ?> selected <?php endif; ?>>通过审核</option>
                <option value="4" <?php if ($this->_tpl_vars['status'] == '4'): ?> selected <?php endif; ?>>驳回</option>
                </select>
                
			</li>
             <li style="width:20%;">
				<label style="width:70px;">报价编号：</label>
				<input type="text" name="design_code" style="width:90px;" value="<?php echo $this->_tpl_vars['design_code']; ?>
"  />
                
			</li>
            <li style="width:20%;">
				<label style="width:70px;">设计名称：</label>
				<input type="text" name="design_name" style="width:90px;" value="<?php echo $this->_tpl_vars['design_name']; ?>
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
/design_return/shtg/" target="selectedTodo" rel="group_ids[]" postType="string" title="确定批量审核通过?" ><span>批量审核通过</span></a>
            
         </li>
			<li class="line">line</li>
			
		</ul>
	</div>
	<table class="table" width="100%" layoutH="138">
		<thead>
			<tr>
				<th width="2%"><input type="checkbox" group="group_ids[]" class="checkboxCtrl"></th>
                <th width="2%">编号</th>
                <th width="9%">缩略图</th>
                <th width="5%">状态</th>
                <th width="10%">设计名称</th>
                <th width="10%">设计编号</th>
                <th width="8%">日期</th>
                <th width="6%">销售人名</th>
                <th width="6%">设计人名</th>
                <th width="12%">尺寸</th>
                <th width="12%">颜色</th>
                <th width="12%">销售备注</th>
                <th width="12%">驳回理由</th>
                <th width="5%">操作</th>
			</tr>
		</thead>
		<tbody>
     <?php if ($this->_tpl_vars['design_return']): ?>
			 <?php $_from = $this->_tpl_vars['design_return']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['dis']):
?>
              <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
" style="height:100px;">
                <td><input name="group_ids[]" value="<?php echo $this->_tpl_vars['dis']['id']; ?>
" type="checkbox"></td>
                <td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
                <td style="height:100px;"><img src="<?php echo $this->_tpl_vars['dis']['upload_file']; ?>
" width="100px" height="100px" ></td>
 				<td><?php if ($this->_tpl_vars['dis']['d_status'] == '3'): ?>通过审核<?php elseif ($this->_tpl_vars['dis']['d_status'] == '4'): ?>驳回<?php elseif ($this->_tpl_vars['dis']['d_status'] == '5'): ?>未审核<?php endif; ?></td>
                <td><?php echo $this->_tpl_vars['dis']['design_name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['design_code']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['design_date']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['salesman_user_name']; ?>
</td>
                <td><?php if ($this->_tpl_vars['dis']['design_user_name'] == ''): ?>无<?php else: ?><?php echo $this->_tpl_vars['dis']['design_user_name']; ?>
<?php endif; ?></td>
                <td><?php echo $this->_tpl_vars['dis']['size_w_inch']; ?>
*<?php echo $this->_tpl_vars['dis']['size_h_inch']; ?>
 inch</td>
                <td><?php echo $this->_tpl_vars['dis']['color']; ?>
</td>
                <td><p><?php if ($this->_tpl_vars['dis']['note'] != ''): ?><?php echo $this->_tpl_vars['dis']['note']; ?>
<?php else: ?>无<?php endif; ?></p></td>
                <td><?php echo $this->_tpl_vars['dis']['reason']; ?>
</td>
                <td>
                <?php if ($this->_tpl_vars['dis']['d_status'] != '3'): ?>
                <?php if ($this->_tpl_vars['user_hidden']['group_id'] == '50' || $this->_tpl_vars['user_hidden']['group_id'] == '5'): ?>
                <a title="驳回" target="dialog" rel="design_return" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/design_return/reason_rejection-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" class="btnAdd">驳回</a>
                <?php endif; ?>
                <?php endif; ?>
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