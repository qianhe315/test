<?php /* Smarty version 2.6.22, created on 2021-06-23 11:05:48
         compiled from material_price_adjustment/index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/material_price_adjustment/index">
	<input type="hidden" name="pageNum" value="1" />
	<input type="hidden" name="numPerPage" value="<?php echo $this->_tpl_vars['listRows']; ?>
" />
	<input type="hidden" name="orderField" value="group_id" />
	<input type="hidden" name="orderDirection" value="desc" />
    
    <input type="hidden" name="order_status" value="<?php echo $this->_tpl_vars['order_status']; ?>
" />
    <input type="hidden" name="saleman_user_id" value="<?php echo $this->_tpl_vars['saleman_user_id']; ?>
" />
    <input type="hidden" name="start_time" value="<?php echo $this->_tpl_vars['start_time']; ?>
" />
    <input type="hidden" name="end_time" value="<?php echo $this->_tpl_vars['end_time']; ?>
" />
    <input type="hidden" name="customer_name" value="<?php echo $this->_tpl_vars['customer_name']; ?>
" />
    <input type="hidden" name="customer_code" value="<?php echo $this->_tpl_vars['customer_code']; ?>
" />
    <input type="hidden" name="quotation_code" value="<?php echo $this->_tpl_vars['quotation_code']; ?>
" />
    
</form>

<div class="pageHeader">
	<form rel="pagerForm" onsubmit="return navTabSearch(this);" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/material_price_adjustment/index" method="get">
	<div class="searchBar">
		<ul class="searchContent">
			<li style="width:180px;">
				<label>收款状态：</label>
				<select class="combox" name="customer_status">
                <option value="">全部</option>
              	<option value="1" <?php if ($this->_tpl_vars['customer_status'] == '1'): ?>selected="selected"<?php endif; ?>>未审核</option>
                <option value="2" <?php if ($this->_tpl_vars['customer_status'] == '2'): ?>selected="selected"<?php endif; ?>>审核通过</option>
                <option value="3" <?php if ($this->_tpl_vars['customer_status'] == '3'): ?>selected="selected"<?php endif; ?>>驳回</option>
                </select>
			</li>
            <li style="width:180px;">
				<label style="width:50px;">业务员：</label>
				<select class="combox" name="sale_user">
                <option value="">全部</option>
                <?php $_from = $this->_tpl_vars['user_lists']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['du']):
?>
                <option value="<?php echo $this->_tpl_vars['du']['user_name']; ?>
" <?php if ($this->_tpl_vars['du']['user_name'] == $this->_tpl_vars['sale_user']): ?> selected <?php endif; ?> > <?php echo $this->_tpl_vars['du']['user_name']; ?>
 </option>
                <?php endforeach; endif; unset($_from); ?>
                </select>
			</li>
            <li style="width:235px;">
				<label style="width:60px;">时间：</label>
				<input type="text" name="start_time" value="<?php echo $this->_tpl_vars['start_time']; ?>
" style="width:70px;" class="date" readonly="true" />-<input type="text" name="end_time" value="<?php echo $this->_tpl_vars['end_time']; ?>
" style="width:70px;" class="date" readonly="true"/>
                
			</li>


		</ul>
		
		<div class="subBar">
			<ul>
				<li><div class="buttonActive"><div class="buttonContent"><button type="submit">检索</button></div></div></li>
				
			</ul>
		</div>
	</div>
	</form>
</div>
<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
        	<!--<li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/material_price_adjustment/pl_size">批量修改尺寸</a></li>-->
            <?php if ($this->_tpl_vars['user_hidden']['group_id'] == '5' || $this->_tpl_vars['user_hidden']['group_id'] == '12' || $this->_tpl_vars['user_hidden']['group_id'] == '50'): ?>
          	<li>
            <a class="edit" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/material_price_adjustment/shtg/" target="selectedTodo" rel="group_ids[]" postType="string" title="确定批量修改?" ><span>批量审核通过</span></a>
            </li>
           	<li class="line">line</li>
            <li>
            <a class="edit" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/material_price_adjustment/bh/" target="selectedTodo" rel="group_ids[]" postType="string" title="确定批量修改?" ><span>批量驳回</span></a>
           	<li class="line">line</li>
         	<?php endif; ?>
		</ul>
	</div>
	<table class="table" width="100%" layoutH="138">
		<thead>
       		
			<tr>
            <th width="3%"><input type="checkbox" group="group_ids[]" class="checkboxCtrl"></th>
            	<th width="2%">编号</th>
                <th width="6%">时间</th>
                <th width="6%">申请人</th>
                <th width="8%">审核状态</th>
                <th width="8%">名称</th>
                <th width="8%">颜色</th>
                <th width="8%">尺寸</th>
                <th width="8%">工厂单价</th>
                <th width="8%">销售单价</th>
                <th width="8%">改后销售单价</th>
                <th width="8%">备注</th>
                
			</tr>
		</thead>
		<tbody>
        <?php if (! empty ( $this->_tpl_vars['material_approval'] )): ?>
			 <?php $_from = $this->_tpl_vars['material_approval']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['dis']):
?>
              <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
" >
                <td><input name="group_ids[]" value="<?php echo $this->_tpl_vars['dis']['id']; ?>
" type="checkbox"></td>
                <td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['time']; ?>
</td>
 				<td><?php echo $this->_tpl_vars['dis']['saleman']; ?>
</td>
                <td>
                    <?php if ($this->_tpl_vars['dis']['status'] == '1'): ?>
                        审核中
                    <?php elseif ($this->_tpl_vars['dis']['status'] == '2'): ?>
                        审核通过
                    <?php elseif ($this->_tpl_vars['dis']['status'] == '3'): ?>
                        驳回
                    <?php else: ?>
                        
                    <?php endif; ?>                
                </td>
                <td><?php echo $this->_tpl_vars['dis']['material_name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['material_color']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['size']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['customer_company']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['sale_price']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['edit_sale_price']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['remark']; ?>
</td>
                <!--<td>
                <?php if ($this->_tpl_vars['user_hidden']['group_id'] == '12' || $this->_tpl_vars['user_hidden']['group_id'] == '5'): ?>
                    <?php if ($this->_tpl_vars['dis']['status'] != '2'): ?>
                    <a title="是否审核通过" target="ajaxTodo" rel="finance_drawback" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/material_price_adjustment/approved-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" class="btnAdd">审核通过</a>
                    <a title="驳回" target="dialog" rel="finance_drawback" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/material_price_adjustment/reason_rejection-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" class="btnAdd">驳回</a>
                    
                    <?php endif; ?>
                <?php endif; ?>
                </td>-->
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