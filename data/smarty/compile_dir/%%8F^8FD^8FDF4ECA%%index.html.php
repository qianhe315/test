<?php /* Smarty version 2.6.22, created on 2024-08-27 10:53:31
         compiled from supplier_management/index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/supplier_management/index">
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
/supplier_management/index" method="get">
	<div class="searchBar">
		<ul class="searchContent">
        
			<li style="width:15%;">
				<label>客户属性：</label>
        <select class="combox required" name="supplier_attributes" value="<?php echo $this->_tpl_vars['supplier_management']['supplier_attributes']; ?>
" >
        <option value="">全部</option>
        
       <?php $_from = $this->_tpl_vars['supplier_attributes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sa']):
?> <option value="<?php echo $this->_tpl_vars['sa']['id']; ?>
" <?php if ($this->_tpl_vars['supplier_attributes_one'] == $this->_tpl_vars['sa']['id']): ?> selected="selected" <?php endif; ?>><?php echo $this->_tpl_vars['sa']['name']; ?>

              </option>
              <?php endforeach; endif; unset($_from); ?>
        </select>
     
			</li>
            <li style="width:23%;">
				<label style="width:40px;">时间：</label>
				<input type="text" name="start_time" class="date" readonly style="width:70px;" value="<?php echo $this->_tpl_vars['start_time']; ?>
" />-<input type="text" name="end_time" class="date" readonly style="width:70px;" value="<?php echo $this->_tpl_vars['end_time']; ?>
" />
                
			</li>
            
            <li style="width:20%;">
				<label style="width:80px;">供应商简称：</label>
				<input type="text" name="supplier_company" style="width:70px;" value="<?php echo $this->_tpl_vars['supplier_company']; ?>
" />
                
			</li>
            
             <li style="width:18%;">
				<label style="width:80px;">供应商代码：</label>
				<input type="text" name="supplier_code" style="width:70px;" value="<?php echo $this->_tpl_vars['supplier_code']; ?>
" />
                
			</li>
            
             <li style="width:18%;">
				<label style="width:50px;">邮箱：</label>
				<input type="text" name="email" style="width:70px;" value="<?php echo $this->_tpl_vars['email']; ?>
" />
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
/supplier_management/add" target="navTab" rel="supplier_management_add"><span>添加</span></a></li>
            <li class="line">line</li>
           <!-- <li><a class="add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/supplier_management/color" target="navTab" rel="mark_acquisition"><span>点击客户代码</span></a></li>-->
            
		</ul>
	</div>
	<table class="table" width="1200" layoutH="138">
		<thead>       		
			<tr>
            <th width="22"><input type="checkbox" group="group_ids" class="checkboxCtrl"></th>
                <th width="30">编号</th>
                <th width="40">属性</th>
                <th width="30">时间</th>
                <th width="45">代码</th>
                <th width="45">公司代码</th>
                <th width="130">供应商（公司全称）</th>
                <th width="60">供应商（简称）</th>
                <th width="30">联系人</th>
                <th width="30">电话</th>
                <th width="30">传真</th>
                <th width="30">邮箱</th>
                <th width="30">税务登记号</th>
               <!-- <th width="30">隐藏时间</th>-->
                <th width="40">操作</th>
                
			</tr>
		</thead>
		<tbody>
        <?php if ($this->_tpl_vars['supplier_management']): ?>
			 <?php $_from = $this->_tpl_vars['supplier_management']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['dis']):
?>
              <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
" >
                <td><input name="group_ids" value="<?php echo $this->_tpl_vars['dis']['id']; ?>
" type="checkbox"></td>
                <td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['time']; ?>
</td>
                <?php if ($this->_tpl_vars['dis']['name'] == '烫钻'): ?>
                <td><a title="" style="text-decoration:underline;" rel="supplier_code_<?php echo $this->_tpl_vars['dis']['id']; ?>
" target="navTab" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/supplier_management/color-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" ><?php echo $this->_tpl_vars['dis']['supplier_code']; ?>
</a></td>
                <?php else: ?>
                <td><?php echo $this->_tpl_vars['dis']['supplier_code']; ?>
</td>
                <?php endif; ?>
                <td><?php echo $this->_tpl_vars['dis']['company_code']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['supplier_company_a']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['supplier_company']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['contact']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['tel']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['fax']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['email']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['tax_id']; ?>
</td>
               <!-- <td><?php echo $this->_tpl_vars['dis']['time_hidden']; ?>
</td>-->
                <td>
                <a title="删除吗？" target="ajaxTodo" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/supplier_management/del-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" class="btnDel">删除</a>   <a title="编辑" target="navTab" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/supplier_management/edit-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" class="btnEdit">编辑</a></td>
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