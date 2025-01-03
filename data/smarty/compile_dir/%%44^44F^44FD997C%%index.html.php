<?php /* Smarty version 2.6.22, created on 2016-03-03 14:57:29
         compiled from clients_receiving/index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/clients_receiving/index">
	<input type="hidden" name="pageNum" value="1" />
	<input type="hidden" name="numPerPage" value="<?php echo $this->_tpl_vars['listRows']; ?>
" />
	<input type="hidden" name="orderField" value="group_id" />
	<input type="hidden" name="orderDirection" value="desc" />
    
    <input type="hidden" name="discount_name" value="<?php echo $this->_tpl_vars['discount_name']; ?>
" />
    
</form>

<div class="pageHeader">
	<form rel="pagerForm" onsubmit="return navTabSearch(this);" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/clients_receiving/index" method="post">
	<div class="searchBar">
		<ul class="searchContent">
		
        	<?php if ($this->_tpl_vars['user_hidden']['group_id'] != '53' || $this->_tpl_vars['user_hidden']['group_id'] != '68'): ?>
            <li style="width:15%;">
				<label style="width:70px;">业务员：</label>
				<select class="combox" name="sale_user">
                <option value="">全部</option>
                <?php $_from = $this->_tpl_vars['arrName']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['du']):
?>
                <option value="<?php echo $this->_tpl_vars['du']['user_name']; ?>
" <?php if ($this->_tpl_vars['du']['user_name'] == $this->_tpl_vars['sale_user']): ?> selected <?php endif; ?>><?php echo $this->_tpl_vars['du']['user_name']; ?>
 </option>
                <?php endforeach; endif; unset($_from); ?>
                </select>
			</li>
            <?php endif; ?>
              <li style="width:20%;">
				<label style="width:70px;">客户代码：</label>
				<input type="text" name="customer_code" style="width:80px;" value="<?php echo $this->_tpl_vars['customer_code']; ?>
" />
                
			 </li>
              <li style="width:20%;">
				<label style="width:70px;">名称：</label>
				<input type="text" name="name" style="width:80px;" value="<?php echo $this->_tpl_vars['name']; ?>
" />
                
			 </li>
              <li style="width:20%;">
				<label style="width:70px;">客户名：</label>
				<input type="text" name="customer_name" style="width:80px;" value="<?php echo $this->_tpl_vars['customer_name']; ?>
" />
                
			 </li>
              <li style="width:20%;">
				<label style="width:70px;">公司：</label>
				<input type="text" name="company" style="width:80px;" value="<?php echo $this->_tpl_vars['company']; ?>
" />
                
			 </li>
           
            <li style="float:right;"><div class="buttonActive" style="float:right;"><div style="float:right;" class="buttonContent"><button type="submit">检索</button></div></div></li>
		</ul>
         <div class="subBar"><!--换行样式-->
        <ul>
			<li style="float:right;">
            
            </li>
		</ul>
        </div>
	</div>
    
	</form>
</div>
<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
        <li class="line">line</li>
			<li><a class="add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/clients_receiving/add/" target="navTab" rel="page1"><span>添加</span></a></li>
			
			<li class="line">line</li>
            <?php if ($this->_tpl_vars['user_hidden']['group_id'] == '5'): ?>
            <li><a class="edit" href="#" onclick="update_user_name()" ><span>更新业务名</span></a></li>
			<li class="line">line</li>
            <!--<li><a class="edit" href="#"><span>去除无用地址数据</span></a></li>
			<li class="line">line</li>-->
            <?php endif; ?>
		</ul>
	</div>
	<table class="table" width="1400" layoutH="138">
		<thead>
			<tr>

				<th width="2%"><input type="checkbox" group="group_ids" class="checkboxCtrl"></th>
                <th width="2%">编号</th>
                <th width="3%">业务员</th>
                <th width="4%">客户代码</th>
                <th width="6%">名称</th>                
                <th width="8%">客户名</th>
                <th width="9%">公司</th>
                <th width="6%">国家</th>
                <th width="5%">州</th>
                <th width="3%">州代码</th>
                <th width="6%">城市</th>
                <th width="10%">地址</th>
                <th width="3%">邮编</th>
                <th width="3%">电话</th>
                <th width="5%">操作</th>
                
			</tr>
		</thead>
		<tbody>
        <?php if ($this->_tpl_vars['clients_receiving']): ?>
			 <?php $_from = $this->_tpl_vars['clients_receiving']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['dis']):
?>
              <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
">
                <td><input name="group_ids" value="<?php echo $this->_tpl_vars['dis']['id']; ?>
" type="checkbox"></td>
                <td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['saleman_name']; ?>
</td>
               
                <td><?php echo $this->_tpl_vars['dis']['customer_code']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['customer_name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['company']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['country']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['state']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['state_code']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['city']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['address']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['postal_code']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['phone']; ?>
</td>
                <td>
                <a title="删除吗？" target="ajaxTodo" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/clients_receiving/del-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" class="btnDel">删除</a>
                <a title="编辑" target="navTab" rel="clients_receiving_edit" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/clients_receiving/edit-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" class="btnEdit">编辑</a>
                <a title="是否更新数据" target="ajaxTodo" rel="goods_free" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/clients_receiving/xuigai_customer-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" class="btnAdd">是否更新数据</a>
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
<script type="text/javascript">
	function update_user_name(){
		$.ajax({
			url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/clients_receiving/update_user_name',
			dataType:"json",
			type:"post",
			success: function(data){
				if(data==1){
					navTabPageBreak();	
				}
				
			}	
		});	
	}
</script>