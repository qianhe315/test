<?php /* Smarty version 2.6.22, created on 2015-08-05 10:18:44
         compiled from rizhi_manage/index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/rizhi_manage/index">
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
/rizhi_manage/index" method="get">
	<div class="searchBar">
		<ul class="searchContent">
            <li style="width:25%;">
				<label style="width:40px;">时间：</label>
				<input type="text" name="start_time" class="date" readonly style="width:70px;" value="<?php echo $this->_tpl_vars['start_time']; ?>
" />-<input type="text" name="end_time" class="date" readonly style="width:70px;" value="<?php echo $this->_tpl_vars['end_time']; ?>
" />
           </li>
            
            <li style="width:25%;">
				<label style="width:40px;">IP：</label>
				<input type="text" name="ip_address" style="width:100px;" value="<?php echo $this->_tpl_vars['ip_address']; ?>
" />
                
			</li>
             <li style="width:25%;">
				<label style="width:40px;">账号：</label>
				<input type="text" name="user_name" style="width:100px;" value="<?php echo $this->_tpl_vars['user_name']; ?>
" />
                
			</li>
             <li style="width:25%;">
				
				<label style="width:90px;">公司内外搜索：</label>
				<select class="combox" name="gongsi">
                <option value="">全部</option>
              	<option value="2" <?php if ($this->_tpl_vars['gongsi'] == '2'): ?>selected="selected"<?php endif; ?>>公司内</option>
                <option value="1" <?php if ($this->_tpl_vars['gongsi'] == '1'): ?>selected="selected"<?php endif; ?>>公司外</option>
                </select>
                
			</li>
            <br>
            <li style="float:right;"><div class="buttonActive" style="float:right;"><div style="float:right;" class="buttonContent"><button type="submit">检索</button></div></div></li>
		</ul>
	</div>
	</form>
</div>
<form action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/rizhi_manage/xls_export" method="post" id="rizhi_manage_id">
<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
        <li><a class="icon" href="#" id="rizhi_manage_excel"><span>导出EXCEL</span></a></li>
        </ul>
	</div>
	<table class="table" width="100%" layoutH="136">
		<thead>
       		
			<tr>
                <th width="2%"><input type="checkbox" group="group_ids_rizhi_manage[]" class="checkboxCtrl"></th>
                <th width="10%">编号</th>
                <th width="15%">时间</th>
               	<th width="15%">帐号</th>
                <th width="30%">IP</th>
                <th width="40%">位置</th>
			</tr>
		</thead>
		<tbody>
        <?php if ($this->_tpl_vars['login_ip_manage']): ?>
			 <?php $_from = $this->_tpl_vars['login_ip_manage']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['dis']):
?>
              <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
" >
              <td><input name="group_ids_rizhi_manage[]" value="<?php echo $this->_tpl_vars['dis']['id']; ?>
" type="checkbox"></td>
                <td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['insert_time']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['account_number']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['ip']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['laiyuan']; ?>
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
</form> 
<script language="javascript">
    $("#rizhi_manage_excel").click(function (){
		if($("input[type='checkbox']").is(":checked")){
			$("#rizhi_manage_id").submit();
		}else{
			alert("请选择导出的数据");
		}
	});
</script>