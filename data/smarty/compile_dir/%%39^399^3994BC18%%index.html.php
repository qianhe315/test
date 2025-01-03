<?php /* Smarty version 2.6.22, created on 2016-03-23 15:44:02
         compiled from cn_material/index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_material/index">
	<input type="hidden" name="pageNum" value="1" />
	<input type="hidden" name="numPerPage" value="<?php echo $this->_tpl_vars['listRows']; ?>
" />
	<input type="hidden" name="orderField" value="group_id" />
	<input type="hidden" name="orderDirection" value="desc" />
    
    <input type="hidden" name="material_name" value="<?php echo $this->_tpl_vars['material_name']; ?>
" />
    <input type="hidden" name="material_color" value="<?php echo $this->_tpl_vars['material_color']; ?>
" />
</form>

<div class="pageHeader">
	<form rel="pagerForm" onsubmit="return navTabSearch(this);" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_material/index" method="get">
	<div class="searchBar">
		<ul class="searchContent">
			<li style="width:30%;">
				<label style="width:60px;">材料名：</label>
				<input type="text" name="material_name" value="<?php echo $this->_tpl_vars['material_name']; ?>
"/>
			</li>
            
            <li style="width:30%;">
				<label style="width:60px;">颜色：</label>
				<input type="text" name="material_color" value="<?php echo $this->_tpl_vars['material_color']; ?>
"/>
			</li>
            <li style="width:30%;">
              <label style="width:60px;">审批状态：</label>
              <select  name="discount_status" style="font-size:12px;" class="combox">
              <option value="">全部</option>
              <option value="1" <?php if ($this->_tpl_vars['discount_status'] == '1'): ?>selected="selected"<?php endif; ?> >未审核</option>
              <option value="2" <?php if ($this->_tpl_vars['discount_status'] == '2'): ?>selected="selected"<?php endif; ?> >审核通过</option>
              <option value="3" <?php if ($this->_tpl_vars['discount_status'] == '3'): ?>selected="selected"<?php endif; ?> >驳回</option>
              </select>
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
		
	</div>
	<table class="table" width="100%" layoutH="138">
		<thead>
			<tr>
            	<th width="2%">编号</th>
            	<th width="7%">时间</th>
                <th width="10%">材料名</th>
                <th width="11%">颜色</th>
                <th width="11%">尺寸</th>
                <th width="11%">工厂单价</th>
                <th width="11%">审批状态</th>
                <th width="11%">审批价格</th>
                <th width="11%">销售单价</th>
                <th width="7%">起订量</th>
                <th width="7%">报价系数</th>       
                <th width="4%">操作</th>
			</tr>
		</thead>
		<tbody>
        <?php if ($this->_tpl_vars['materials']): ?>
			 <?php $_from = $this->_tpl_vars['materials']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['ug']):
?>
              <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
">
              	<td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
              	<td><?php echo $this->_tpl_vars['ug']['insert_time']; ?>
</td>
                <td><?php echo $this->_tpl_vars['ug']['name']; ?>
</td>
 				<td><?php echo $this->_tpl_vars['ug']['color_name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['ug']['size_name']; ?>
</td>  
                <td></td>
                <td>
               <?php echo $this->_tpl_vars['ug']['status']; ?>

                </td>
                <td>
                <?php if (! empty ( $this->_tpl_vars['ug']['approval_price'] )): ?>
                   <?php echo $this->_tpl_vars['ug']['approval_price']; ?>
元
                <?php endif; ?>
                </td>
                
                <td><?php echo $this->_tpl_vars['ug']['clothes_price']; ?>
元</td>  
              
                <td><?php echo $this->_tpl_vars['ug']['min_order']; ?>
</td>
                <td><?php echo $this->_tpl_vars['ug']['quote_coefficient']; ?>
</td>
                <?php if ($this->_tpl_vars['user_hidden']['group_id'] != '53' || $this->_tpl_vars['user_hidden']['group_id'] != '68'): ?>
                <td>
                <a title="编辑" target="dialog" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_material/edit-id-<?php echo $this->_tpl_vars['ug']['id']; ?>
.html" class="btnEdit">编辑</a>
                <?php endif; ?>
                </td>
              </tr>
              
             <?php endforeach; endif; unset($_from); ?>
             <?php endif; ?>
		</tbody>
	</table>
	<div class="panelBar">
		<div class="pages">
			<span>显示</span>
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