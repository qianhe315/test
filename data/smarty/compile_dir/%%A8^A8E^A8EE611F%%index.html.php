<?php /* Smarty version 2.6.22, created on 2023-06-19 16:20:44
         compiled from cdr_quotation/index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cdr_quotation/index">
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
/cdr_quotation/index" method="get">
	<div class="searchBar">
		<ul class="searchContent">

           <li style="width:23%;">
				<label style="width:40px;">时间：</label>
				<input type="text" name="start_time" class="date" readonly style="width:70px;" value="<?php echo $this->_tpl_vars['start_time']; ?>
" />-<input type="text" name="end_time" class="date" readonly style="width:70px;" value="<?php echo $this->_tpl_vars['end_time']; ?>
" />
                
			</li>
                
            <li style="width:20%;">
				<label style="width:60px;">客户名：</label>
				<input type="text" name="customer_name" style="width:80px;" value="<?php echo $this->_tpl_vars['customer_name']; ?>
" />
                
			</li>
            
             <li style="width:20%;">
				<label style="width:70px;">客户编号：</label>
				<input type="text" name="customer_code" style="width:80px;" value="<?php echo $this->_tpl_vars['customer_code']; ?>
" />
                
			</li>
            
             <li style="width:35%;">
				<label style="width:60px;">报价编号：</label>
				<input type="text" name="quotation_code" style="width:80px;" value="<?php echo $this->_tpl_vars['quotation_code']; ?>
" />
			</li>
            
            <li style="float:right;"><div class="buttonActive" style="float:right;"><div style="float:right;" class="buttonContent"><button type="submit">检索</button></div></div></li>
		</ul>	
			
            
		</div>
	
	</form>
</div>
<form action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cdr_quotation/xls_export" method="post" id="cdr_xls_export">
<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
        

        <li class="line">line</li>
			<li><a class="add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cdr_quotation/add/" target="navTab" rel="cdr_quotation_add" ><span>添加</span></a></li>
           
            <li class="line">line</li>
            <!--<li><a class="delete" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/rhinestone_quotation/del/" target="selectedTodo" id="del" rel="group_ids[]" postType="string"><span>删除</span></a></li>
            <li class="line">line</li>-->
             <li><a class="icon" href="#" id="cdr_excel" ><span>导出EXCEL</span></a></li>
          	 <li class="line">line</li>
			
		</ul>
	</div>
	<table class="table" width="1200" layoutH="138">
		<thead>
       		
			<tr>
				<th width="2%"><input type="checkbox" group="group_ids[]" class="checkboxCtrl"></th>
                <th width="2%">编号</th>
                <th width="6%">时间</th>
                <th width="4%">业务员</th>
                <th width="4%">设计属性</th>
                <th width="4%">状态</th>
                 <th width="4%">报价编号</th>
                <th width="5%">客户代码</th>
                <th width="8%">客户名</th>
                <th width="8%">公司</th>
                <th width="7%">报价</th>
                <th width="7%">操作</th>
			</tr>
		</thead>
		<tbody>
           <?php if ($this->_tpl_vars['quotation_sheet']): ?>
			 <?php $_from = $this->_tpl_vars['quotation_sheet']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['il']):
?>
              <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
" >
                <td><input name="group_ids[]" value="<?php echo $this->_tpl_vars['il']['id']; ?>
" type="checkbox"></td>
               <td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
                <td><?php echo $this->_tpl_vars['il']['quotation_date']; ?>
</td>
                <td><?php echo $this->_tpl_vars['il']['saleman_name']; ?>
</td>
                <?php if ($this->_tpl_vars['il']['quotation_category'] == '5'): ?>
                   <td>有设计</td>
                   <?php else: ?>
                   <td>无设计</td>
                <?php endif; ?>
                <td><?php echo $this->_tpl_vars['il']['status']; ?>
</td>
                <td><?php echo $this->_tpl_vars['il']['quotation_code']; ?>
</td>
                <td><?php echo $this->_tpl_vars['il']['customer_code']; ?>
</td>
                <td><?php echo $this->_tpl_vars['il']['customer_name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['il']['customer_company']; ?>
</td>
                
                <td><?php echo $this->_tpl_vars['il']['final_quote']; ?>
</td>
            
                <td><a title="删除吗？" target="ajaxTodo" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cdr_quotation/del-id-<?php echo $this->_tpl_vars['il']['id']; ?>
.html" class="btnDel">删除</a> 
                <?php if ($this->_tpl_vars['il']['quotation_category'] == 5): ?> 
                <a title="编辑" target="navTab" rel="cdr_quotation_edit" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cdr_quotation/edit-id-<?php echo $this->_tpl_vars['il']['id']; ?>
.html" class="btnEdit">编辑</a>
                <?php else: ?>
                <a title="编辑" onclick="document.getElementById('ttbjd_wsj_1').style.display='none';document.getElementById('ttbjd_ysj_1').style.display='block';" target="navTab" rel="hotfix_quotation_add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cdr_quotation/no_edit-id-<?php echo $this->_tpl_vars['il']['id']; ?>
.html" class="btnEdit">编辑</a>
                <?php endif; ?>
                 <?php if ($this->_tpl_vars['il']['status'] != '未审核'): ?> 
                <a title="填写做货单" target="navTab" rel="cdr_quotation_add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cdr_quotation/add_production_order-id-<?php echo $this->_tpl_vars['il']['id']; ?>
.html" class="btnAdd">填写做货单</a>
             <?php endif; ?>
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
<script type="text/javascript">
$("#cdr_excel").click(function (){
		if($("input[type='checkbox']").is(":checked")){
			alert("即将导出选中数据");
			$("#cdr_xls_export").submit();
		}else{
			alert("请选择导出的数据");
		}
	});
</script>