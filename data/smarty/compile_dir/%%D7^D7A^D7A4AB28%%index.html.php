<?php /* Smarty version 2.6.22, created on 2015-12-08 20:28:55
         compiled from template_quotation/index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/template_quotation/index">
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
/template_quotation/index" method="get">
	<div class="searchBar">
		<ul class="searchContent">
			<!--<li style="width:170px;">
				<label style="width:70px;">做货状态：</label>
				<select class="combox" name="order_status">
                <option value="">全部</option>
              	<option value="1" <?php if ($this->_tpl_vars['order_status'] == '1'): ?>selected="selected"<?php endif; ?>>已添加</option>
                <option value="2" <?php if ($this->_tpl_vars['order_status'] == '2'): ?>selected="selected"<?php endif; ?>>未添加</option>
                </select>
			</li> -->
            <?php if ($this->_tpl_vars['user_hidden']['group_id'] != '53' || $this->_tpl_vars['user_hidden']['group_id'] != '68'): ?>
            <li style="width:15%;">
				<label style="width:60px;">业务员：</label>
				<select class="combox" name="sale_user">
                <option value="">全部</option>
                <?php $_from = $this->_tpl_vars['sale_users']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['du']):
?>
                <option value="<?php echo $this->_tpl_vars['du']['user_name']; ?>
" <?php if ($this->_tpl_vars['du']['user_name'] == $this->_tpl_vars['sale_user']): ?> selected <?php endif; ?> > <?php echo $this->_tpl_vars['du']['user_name']; ?>
 </option>
                <?php endforeach; endif; unset($_from); ?>
                </select>
			</li>
            <?php endif; ?>
            <li style="width:25%;">
				<label style="width:40px;">时间：</label>
				<input type="text" name="start_time" class="date" readonly="true" style="width:70px;" value="<?php echo $this->_tpl_vars['start_time']; ?>
" />-<input type="text" name="end_time" class="date" readonly="true" style="width:70px;" value="<?php echo $this->_tpl_vars['end_time']; ?>
" />
                
			</li>

            <li style="width:18%;">
				<label style="width:60px;">客户名：</label>
				<input type="text" name="customer_name" style="width:80px;" value="<?php echo $this->_tpl_vars['customer_name']; ?>
" />
                
			</li>
            
             <li style="width:16%;">
				<label style="width:70px;">客户代码：</label>
				<input type="text" name="customer_code" style="width:80px;" value="<?php echo $this->_tpl_vars['customer_code']; ?>
" />
                
			</li>
            
             <li style="width:23%;">
				<label style="width:60px;">报价编号：</label>
				<input type="text" name="quotation_code" style="width:80px;" value="<?php echo $this->_tpl_vars['quotation_code']; ?>
" />
			</li>
            <li style="float:right;"><div class="buttonActive" style="float:right;"><div style="float:right;" class="buttonContent"><button type="submit">检索</button></div></div></li>
		</ul>	
			</ul>
            
		</div>
	
	</form>
</div>
<form action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cdr_quotation/xls_export" method="post" id="quotation_delete">
<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
        

        <li class="line">line</li>
			<li><a class="add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/template_quotation/add/" target="navTab" rel="template_quotation_add" ><span>添加</span></a></li>
           
            <li class="line">line</li>
            <!--<li><a class="delete" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/rhinestone_quotation/del/" target="selectedTodo" id="del" rel="group_ids[]" postType="string"><span>删除</span></a></li>
            <li class="line">line</li>-->
             <li><a class="icon" href="#" id="excel"><span>导出EXCEL</span></a></li>
			<li class="line">line</li>
			
		</ul>
	</div>
	<table class="table" width="1200" layoutH="138">
		<thead>
       		
			<tr>
				<th width="2%"><input type="checkbox" group="group_ids[]" class="checkboxCtrl"></th>
                <th width="2%">编号</th>
                <th width="6%">时间</th>
               	<th width="5%">做货状态</th>
                <th width="4%">业务员</th>
                <th width="5%">客户代码</th>
                <th width="8%">客户名</th>
                <th width="8%">公司</th>
                <th width="8%">报价编号</th>
                <th width="5%">名称</td>
                <th width="5%">颜色</th>
                <th width="8%">尺寸</th>
                <th width="5%">面积</th>
                <th width="5%">打版数量</th>
                <th width="7%">报价</th>
                <th width="7%">操作</th>
			</tr>
		</thead>
		<tbody>
          <?php if ($this->_tpl_vars['quotation_sheet']): ?>
			 <?php $_from = $this->_tpl_vars['quotation_sheet']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['dis']):
?>
              <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
" style="height:auto;">
                <td><input name="group_ids[]" id="c_id" value="<?php echo $this->_tpl_vars['dis']['id']; ?>
" type="checkbox"></td>
                <td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['quotation_date']; ?>
</td>
                <?php if ($this->_tpl_vars['dis']['quotation_category'] == 7): ?>
                   <td>有设计</td>
                   <?php else: ?>
                   <td>无设计</td>
                <?php endif; ?>
                
 				<td><?php echo $this->_tpl_vars['dis']['saleman_name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['customer_code']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['customer_name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['customer_company']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['quotation_code']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['design_pic_name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['color']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['size']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['template_area']; ?>
</td>                
                <td><?php echo $this->_tpl_vars['dis']['template_number']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['final_quote']; ?>
</td>
          
                <td><!--<a title="删除吗？" target="ajaxTodo" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/hotfix_quotation/del-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" class="btnDel">删除</a>-->
                <?php if ($this->_tpl_vars['user_hidden']['user_name'] == $this->_tpl_vars['dis']['saleman_name'] || $this->_tpl_vars['user_hidden']['group_id'] == '5'): ?>
                <a title="删除吗？" target="ajaxTodo" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/template_quotation/del-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" class="btnDel">删除</a>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['dis']['quotation_category'] == '8'): ?> 
                <a title="编辑" onclick="document.getElementById('ttbjd_wsj').style.display='none';document.getElementById('ttbjd_ysj').style.display='block';" target="navTab" rel="template_quotation_add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/template_quotation/no_edit-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" class="btnEdit">编辑</a>
                <?php else: ?>
                <a title="编辑" target="navTab" rel="template_quotation_add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/template_quotation/edit-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" class="btnEdit">编辑</a>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['dis']['d_status'] != '1' && $this->_tpl_vars['dis']['d_status'] != '3' && $this->_tpl_vars['dis']['p_status'] != '1' && $this->_tpl_vars['dis']['p_status'] != '3'): ?>
                <a title="添加做货单" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/template_quotation/add_production_order-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" target="navTab" rel="production_order_add" class="btnAdd" ><span>填写做货单</span></a>
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
    </form>
</div>