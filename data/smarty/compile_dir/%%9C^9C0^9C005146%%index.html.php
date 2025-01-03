<?php /* Smarty version 2.6.22, created on 2016-03-04 11:21:56
         compiled from cn_uncheckdesign/index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_uncheckdesign/index">
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
</form>

<div class="pageHeader">
	<form rel="pagerForm" onsubmit="return navTabSearch(this);" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_uncheckdesign/index" method="get">
	<div class="searchBar">
		<ul class="searchContent">
			<li style="width:15%;">
				<label style="width:70px;">设计人员：</label>
				<select class="combox" name="design_user">
                <option value="">全部</option>
                <?php $_from = $this->_tpl_vars['design_users']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['du']):
?>
                <option value="<?php echo $this->_tpl_vars['du']['user_id']; ?>
" <?php if ($this->_tpl_vars['du']['user_id'] == $this->_tpl_vars['design_user']): ?> selected <?php endif; ?> > <?php echo $this->_tpl_vars['du']['user_name']; ?>
 </option>
                <?php endforeach; endif; unset($_from); ?>
                </select>
			</li>
            <li style="width:15%;">
				<label style="width:60px;">业务员：</label>
				<select class="combox" name="salesman_id">
                <option value="">全部</option>
                <?php $_from = $this->_tpl_vars['sale_users']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['du']):
?>
                <option value="<?php echo $this->_tpl_vars['du']['user_id']; ?>
" <?php if ($this->_tpl_vars['du']['user_id'] == $this->_tpl_vars['salesman_id']): ?> selected <?php endif; ?> > <?php echo $this->_tpl_vars['du']['user_name']; ?>
 </option>
                <?php endforeach; endif; unset($_from); ?>
                </select>
			</li>
            <li style="width:25%;">
				<label style="width:50px;">时间：</label>
				<input type="text" name="start_time" style="width:70px;" class="date" readonly="true" value="<?php echo $this->_tpl_vars['start_time']; ?>
" />-<input type="text" name="end_time" style="width:70px;" class="date" readonly="true" value="<?php echo $this->_tpl_vars['end_time']; ?>
" />
                
			</li>
             <li style="width:20%;">
				<label style="width:70px;">报价编号：</label>
				<input type="text" name="design_code" value="<?php echo $this->_tpl_vars['design_code']; ?>
"  /> 
			 </li>
		</ul>
         <div class="subBar">
         <ul>
			<li style="float:right;"><div class="buttonActive" style="float:right;"><div style="float:right;" class="buttonContent"><button type="submit">检索</button></div></div></li>
		</ul>
        </div>
	</div>
	</form>
</div>
<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
			
           <!-- <li><a class="add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/uncheckdesign/verify/" target="navTab" rel="unfinishdesign_add" ><span>审核</span></a></li>-->
			
			<li class="line">line</li>
			
		</ul>
	</div>
	<table class="table" width="100%" layoutH="138">
		<thead>
			<tr>
				<th width="2%"><input type="checkbox" group="group_ids" class="checkboxCtrl"></th>
                <th width="2%">编号</th>
                <th width="9%">缩略图</th>
                <th width="5%">状态</th>
                <th width="5%">属性</th>
                <th width="5%">客户代码</th>
                <th width="11%">设计名称</th>
                <th width="11%">设计编号</th>
                <th width="9%">日期</th>
                <th width="6%">销售人名</th>
                <th width="6%">设计人名</th>
                <th width="9%">尺寸</th>
                <th width="12%">销售备注</th>
               
                <th width="5%">操作</th>
			</tr>
		</thead>
		<tbody>
        <?php if ($this->_tpl_vars['stock_manage']): ?>
			 <?php $_from = $this->_tpl_vars['stock_manage']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['dis']):
?>
              <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
" style="height:100px;">
                <td><input name="group_ids" value="<?php echo $this->_tpl_vars['dis']['id']; ?>
" type="checkbox"></td>
                <td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
                <td style="height:100px;"><img src="<?php echo $this->_tpl_vars['dis']['upload_file']; ?>
" width="100px" height="100px" ></td>
 				<td><?php if ($this->_tpl_vars['dis']['status'] == '1'): ?>未完成<?php elseif ($this->_tpl_vars['dis']['status'] == '2'): ?>未检验<?php elseif ($this->_tpl_vars['dis']['status'] == '3'): ?>已完成<?php endif; ?></td>
                <td><?php echo $this->_tpl_vars['dis']['design_category']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['customer_code']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['design_name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['design_code']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['design_date']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['salesman_name']; ?>
</td>
                <td><?php if ($this->_tpl_vars['dis']['design_user_name'] == ''): ?>无<?php else: ?><?php echo $this->_tpl_vars['dis']['design_user_name']; ?>
<?php endif; ?></td>
                <td><?php echo $this->_tpl_vars['dis']['size_w_cm']; ?>
X<?php echo $this->_tpl_vars['dis']['size_h_cm']; ?>
 cm</td>
                <td><p><?php if ($this->_tpl_vars['dis']['note'] != ''): ?><?php echo $this->_tpl_vars['dis']['note']; ?>
<?php else: ?>无<?php endif; ?></p></td>
               
                <td>
                 <a title="未检验设计审核" target="navTab" rel="cn_uncheckdesign_verify_<?php echo $this->_tpl_vars['dis']['id']; ?>
" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_uncheckdesign/design_list-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" class="btnEdit" fresh="true" >未检验设计审核</a>
               <!-- <a title="删除吗？" target="ajaxTodo" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/unfinishdesign/del-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" class="btnDel">删除</a> 
                <a title="编辑" target="navTab" rel="unfinishdesign_edit" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/unfinishdesign/edit-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" class="btnEdit">编辑</a>
                <a title="设计-<?php echo $this->_tpl_vars['dis']['design_name']; ?>
" target="navTab" rel="unfinishdesign_design" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/unfinishdesign/design_list-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" class="btnAdd">设计<?php echo $this->_tpl_vars['dis']['design_name']; ?>
</a>-->
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