<?php /* Smarty version 2.6.22, created on 2013-06-25 17:14:53
         compiled from procure_metrial_procure/index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/procure_metrial_procure/index">
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
/procure_metrial_procure/index" method="get">
	<div class="searchBar">
		<ul class="searchContent">
         <li style="width:17%;">
				<label>负责人：</label>
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
             <li style="width:25%;">
				<label style="width:60px">时间：</label>
				<input type="text" name="stock_code" class="date" readonly="true" style="width:62px;" />-<input type="text" name="stock_code" class="date" readonly="true" style="width:62px;" />
                
			</li>
			<li style="width:19%;">
				<label style="width:50px">状态：</label>
				<select class="combox" name="design_user">
                <option value="">全部</option>
              	<option value="1">未入库</option>
                <option value="2">已入库</option>
                </select>
			</li>
            <li style="width:19%;">
				<label style="width:70px;">采购单号：</label>
				<input type="text" name="stock_code" style="width:62px;" />
                
			</li>
            
             <li style="width:20%;">
				<label style="width:60px;">供应商：</label>
				<input type="text" name="stock_code" style="width:62px;" />
                
			</li>
            
             <li style="width:17%;">
				<label style="width:80px;">供应商代码：</label>
				<input type="text" name="stock_code" style="width:62px;" />
			</li>
             <li style="width:20%;">
				<label style="width:60px;">颜色：</label>
				<input type="text" name="stock_code" style="width:62px;" />
			</li>
            <li style="float:right;"><div class="buttonActive" style="float:right;"><div style="float:right;" class="buttonContent"><button type="submit">检索</button></div></div></li>
		</ul>
	</div>
	</form>
</div>
<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
        <li class="line">line</li>
        <li><a class="add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/procure_metrial_procure/add/" target="navTab" rel="add_procure_metrial_procure"  ><span>添加</span></a></li>
        <li class="line">line</li>
            <li><a class="delete" href="*" target="_blank"  ><span>删除</span>
            <li class="line">line</li>
			<li><a class="add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/procure_metrial_procure/generate_a_purchase_order/" target="_blank"  ><span>生成采购单</span></li></a>
			<li class="line">line</li>
            
		</ul>
	</div>
	<table class="table" width="1200" layoutH="138">
		<thead>
			<tr>
				<th width="22"><input type="checkbox" group="group_ids" class="checkboxCtrl"></th>
                <th width="30">时间</th>
                <th width="30">状态</th>
                <th width="30">采购单号</th>
                <th width="30">负责人</th>
                <th width="30">用途</th>
                <th width="30">最迟发货期</th>
                <th width="30">供应商</th>
                <th width="30">供应商代码</th>
                <th width="30">发货方式</th>
                <th width="30">名称</th>
                <th width="30">颜色</th>
                <th width="30">供应商颜色</th>
                <th width="30">尺寸</th>
                <th width="30">单位</th>
                <th width="30">数量1</th>
                <th width="30">数量2</th>
                <th width="30">单价单位</th>
                <th width="30">单价</th>
                <th width="30">小计</th>
                <th width="30">到货期</th>
                <th width="30">收货地址</th>
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
                <td><?php echo $this->_tpl_vars['dis']['stock_code']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['stock_code']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['stock_code']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['stock_code']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['stock_code']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['stock_code']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['stock_code']; ?>
</td>
                <td><a title="删除吗？" target="ajaxTodo" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/procure_metrial_procure/del-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" class="btnDel">删除</a> <a title="编辑" target="navTab" rel="stock_manage_edit" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/procure_metrial_procure/edit-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
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