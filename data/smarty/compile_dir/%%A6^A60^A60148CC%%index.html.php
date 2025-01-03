<?php /* Smarty version 2.6.22, created on 2024-10-14 11:37:05
         compiled from factory_fahuo/index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/factory_fahuo/index">
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
/factory_fahuo/index" method="get">
	<div class="searchBar">
		<ul class="searchContent">
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
            <li style="width:23%;">
				<label style="width:60px;">时间：</label>
				<input type="text" name="s_time" style="width:70px;" value="<?php echo $this->_tpl_vars['s_time']; ?>
" class="date" readonly="true" />-<input type="text" name="e_time" style="width:70px;" value="<?php echo $this->_tpl_vars['e_time']; ?>
" class="date" readonly="true"/>
                
			</li>
            <li style="width:20%;">
				<label style="width:60px;">发票号：</label>
				<input type="text" name="invoice_number" style="width:100px;" value="<?php echo $this->_tpl_vars['invoice_number']; ?>
" />
			</li>
            <li style="width:25%;">
				<label style="width:60px;">订单号：</label>
				<input type="text" name="order_number" style="width:100px;" value="<?php echo $this->_tpl_vars['order_number']; ?>
" />
			</li>

            <li style="float:right;"><div class="buttonActive" style="float:right;"><div style="float:right;" class="buttonContent"><button type="submit">检索</button></div></div></li>

		</ul>

	</div>
	</form>
</div>
<form action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/factory_fahuo/xls_export" method="post" id="sale_detail">
<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
       		 <li class="line">line</li>
             <li><a class="add" href="#" id="create_order_fahuo"><span>发货单</span></a></li>
        	 <li class="line">line</li>
             <li><a class="add" href="#" id="export_certificate_order_fahuo"><span>发货条码</span></a></li>
             <li><a title="批量修改已处理？" id="" target="selectedTodo" rel="group_ids_fahuo[]" postType="string" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/factory_fahuo/fahuo_yi_chuli/" class="edit"><span>批量已处理</span></a></li>
             <li class="line">line</li>
			 <li><a title="批量修改未处理？" id="" target="selectedTodo" rel="group_ids_fahuo[]" postType="string" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/factory_fahuo/fahuo_wei_chuli/" class="edit"><span>批量未处理</span></a></li>
		</ul>
	</div>
	<table class="table" width="1400" layoutH="138">
		<thead>
			<tr>
				<th width="1%"><input type="checkbox" group="group_ids_fahuo[]" class="checkboxCtrl"></th>
                <th width="1%">编号</th>
                <th width="5%">时间</th>
                <th width="2%">业务员</th>
                <th width="2%">客户代码</th>
                <th width="2%">发货代码</th>
                <th width="2%">发票号</th>
                <th width="18%">订单号</th>
                <th width="5%">销售备注</th>
                <th width="4%">工厂备注</th>
                <th width="4%">处理状态</th>
                <th width="5%">操作</th>
			</tr>
		</thead>
		<tbody>
        <?php if ($this->_tpl_vars['sale_detail_deliver_list']): ?>
			 <?php $_from = $this->_tpl_vars['sale_detail_deliver_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['dis']):
?>
              <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
">
                <td><input name="group_ids_fahuo[]" value="<?php echo $this->_tpl_vars['dis']['id']; ?>
" type="checkbox"></td>
                <td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['add_time']; ?>
</td>
 				<td><?php echo $this->_tpl_vars['dis']['saleman_name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['customer_code']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['ship_code']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['invoice_number']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['order_number']; ?>
</td>                 
                <td><?php echo $this->_tpl_vars['dis']['sale_note']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['factory_beizhu']; ?>
</td>
                <?php if ($this->_tpl_vars['dis']['chuli_status'] == '1'): ?>
                   <td>已处理</td>
                <?php else: ?>   
                   <td>未处理</td>
                <?php endif; ?>
                <td><?php if ($this->_tpl_vars['user_hidden']['group_id'] == '53' || $this->_tpl_vars['user_hidden']['group_id'] == '50' || $this->_tpl_vars['user_hidden']['group_id'] == '5' || $this->_tpl_vars['user_hidden']['group_id'] == '68'): ?>
                
                <a target="dialog" title="添加工厂备注" rel="" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/factory_fahuo/add_factory_beizhu-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" class="btnEdit"></a>

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
<script language="javascript">
$(document).ready(function()
{	
	   $("#export_certificate_order_fahuo").click(function (){

			var check_arr = '';

			$("input[name='group_ids_fahuo[]']:checkbox:checked").each(function(){ //由于复选框一般选中的是多个,所以可以循环输出
				if(check_arr == ''){
					check_arr += $(this).val();
				}else{
					check_arr += '|'+$(this).val();	
				}
			});			

			var p = 'ids-'+check_arr+'.html';

			if(check_arr ==''){
				alert('必须选择信息！');
			}else{
			    window.open('<?php echo $this->_tpl_vars['__ROOT__']; ?>
/factory_fahuo/aaa-'+p);
			}	
		});
		
});

$(document).ready(function()
{				
	 $("#create_order_fahuo").click(function (){
			//var touid = $("#newtouid").val();
				var check_arr = '';
				$("input[name='group_ids_fahuo[]']:checkbox:checked").each(function(){ //由于复选框一般选中的是多个,所以可以循环输出
					if(check_arr == ''){
						check_arr += $(this).val();
					}else{
						check_arr += '#'+$(this).val();
					}
				});
				
				var p = 'ids-'+check_arr+'.html';
	
				if(check_arr ==''){
					alert('必须选择客户');
				}else{
					
					var patt = new RegExp('#');
					
					if(patt.test(check_arr)){
						alert('只能选择一条信息');
					}else{
						window.open('<?php echo $this->_tpl_vars['__ROOT__']; ?>
/factory_fahuo/create_order-'+p);
					}
				}
			 });
	 });

</script> 