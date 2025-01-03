<?php /* Smarty version 2.6.22, created on 2024-08-27 10:51:22
         compiled from payment_situation/index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/payment_situation/index">
	<input type="hidden" name="pageNum" value="1" />
	<input type="hidden" name="numPerPage" value="<?php echo $this->_tpl_vars['listRows']; ?>
" />
	<input type="hidden" name="orderField" value="group_id" />
	<input type="hidden" name="orderDirection" value="desc" />
    
    
</form>

<div class="pageHeader">
	<form rel="pagerForm" onsubmit="return navTabSearch(this);" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/payment_situation/index" method="get">
	<div class="searchBar">
		<ul class="searchContent">
			<li>
				<label style="width:50px;">时间：</label>
                <input type="text" name="start_time" class="date" style="width:80px;" value="<?php echo $this->_tpl_vars['start_time']; ?>
" />-<input type="text" class="date" name="end_time" style="width:80px;" value="<?php echo $this->_tpl_vars['end_time']; ?>
" />
			</li>
            <li>
                <label style="width:80px;">客户代码：</label>
				<input type="text" name="customer_code"  style="width:80px;" value="<?php echo $this->_tpl_vars['customer_code']; ?>
" />
			</li>
            <li>
               
				<label style="width:50px;">发票号：</label>
				<input type="text" name="invoice_number"  style="width:80px;" value="<?php echo $this->_tpl_vars['invoice_number']; ?>
" />
			</li>
            <li>
               
				<label style="width:50px;">付款人：</label>
				<input type="text" name="pay_people"  style="width:80px;" value="<?php echo $this->_tpl_vars['pay_people']; ?>
" />
			</li>
            <li>
               
				<label style="width:90px;">付款人公司：</label>
				<input type="text" name="payer_business_name"  style="width:80px;" value="<?php echo $this->_tpl_vars['payer_business_name']; ?>
" />
			</li>
            <li>
               
				<label style="width:80px;">付款邮箱：</label>
				<input type="text" name="pay_email"  style="width:80px;" value="<?php echo $this->_tpl_vars['pay_email']; ?>
" />
			</li>
            <li>
               
				<label style="width:80px;">付款金额：</label>
				<input type="text" name="pay_money"  style="width:80px;" value="<?php echo $this->_tpl_vars['pay_money']; ?>
" />
			</li>
            
            <?php if ($this->_tpl_vars['users']): ?>
            <li>
				<label style="width:50px;">业务员：</label>
                <select name="saleman" class="combox">
                	<option value="">全部</option>
                    <option value="none" <?php if ($this->_tpl_vars['saleman'] == 'none'): ?>selected="selected"<?php endif; ?>>为空</option>
                    <?php $_from = $this->_tpl_vars['users']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
                    <option value="<?php echo $this->_tpl_vars['v']['user_id']; ?>
" <?php if ($this->_tpl_vars['saleman'] == $this->_tpl_vars['v']['user_id']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['v']['user_name']; ?>
</option>
                    <?php endforeach; endif; unset($_from); ?>
                </select>
			</li>
            <?php endif; ?>
            <li style="float:right;"><div class="buttonActive" style="float:right;"><div style="float:right;" class="buttonContent"><button type="submit">检索</button></div></div></li>
		</ul>

	</div>
	</form>
</div>
<form action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/payment_situation/xls_export" method="post" id="new_export_new">
<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
        <?php if ($this->_tpl_vars['user_id'] == 1): ?>
        	<li><a title="显示或隐藏付款？" href="#" class="edit" id="change_type"><span>显示或隐藏付款</span></a>
                <select  name="type" style="font-size:13px;" id="type_val">
                	<option value="1">显示付款</option>
                	<option value="2">隐藏付款</option>
                </select>
            </li>
        <?php endif; ?>
        <?php if ($this->_tpl_vars['user_hidden']['group_id'] == '5'): ?>
        	<li>
            	<a class="add" target="navTab" rel="" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/payment_situation/begin_dd"><span>重新加入销售明细和付款详情</span></a>
            </li>
        <?php endif; ?>
		</ul>
	</div>
	<table class="table" width="98%" layoutH="138">
		<thead>
       		
			<tr><th width="1%"><input type="checkbox" group="group_ids[]" class="checkboxCtrl"></th>
            	<th width="2%">编号</th>
                <th width="10%">时间</th>
                <th width="5%">客户代码</th>
                <th width="8%">发票号</th>
                <th width="8%">付款人</th>               
                <th width="8%">付款人公司</th>
                <th width="8%">付款邮箱</th>
                <th width="3%">货币</th>
                <th width="5%">付款金额</th>
                <th width="4%">手续费</th>
                <th width="10%">收款邮箱</th>
                <th width="4%">业务员</th>
                <th width="10%">唯一交易码</th>
                <th width="5%">客户留言</th>
                <th width="5%">备注</th>
                <th width="5%">操作</th>
			</tr>
		</thead>
		<tbody>
      
        <?php if ($this->_tpl_vars['paypal_info']): ?>
			 <?php $_from = $this->_tpl_vars['paypal_info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['pd']):
?>
              <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
" >
                <td><input name="group_ids[]" value="<?php echo $this->_tpl_vars['pd']['id']; ?>
" type="checkbox"></td>
                <td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
                <td><?php echo $this->_tpl_vars['pd']['insert_time']; ?>
</td>
                <td><?php echo $this->_tpl_vars['pd']['customer_code']; ?>
</td>
                <td><?php echo $this->_tpl_vars['pd']['item_name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['pd']['name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['pd']['payer_business_name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['pd']['payer_email']; ?>
</td>
                <td><?php echo $this->_tpl_vars['pd']['payment_currency']; ?>
</td>
                <td align="right"><?php echo $this->_tpl_vars['pd']['payment_amount']; ?>
</td>
                <td align="right"><?php echo $this->_tpl_vars['pd']['poundage']; ?>
</td>
                <td><?php echo $this->_tpl_vars['pd']['receiver_email']; ?>
</td>
                <td><?php echo $this->_tpl_vars['pd']['user_name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['pd']['txn_id']; ?>
</td>
                <td><?php echo $this->_tpl_vars['pd']['noteToSeller']; ?>
</td>
                <td><?php echo $this->_tpl_vars['pd']['remark']; ?>
</td>
                <td>
                	<?php if (( $this->_tpl_vars['pd']['item_name'] == '' || $this->_tpl_vars['pd']['customer_code'] == '' || $this->_tpl_vars['pd']['type'] == '2' ) && $this->_tpl_vars['pd']['tuikuan'] == ''): ?>
                	<a title="编辑" target="navTab" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/payment_situation/edit-id-<?php echo $this->_tpl_vars['pd']['id']; ?>
.html" class="btnEdit">编辑</a>
                    <?php endif; ?>
                    <a title="备注" target="dialog" rel="goods_free" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/payment_situation/reason_rejection-id-<?php echo $this->_tpl_vars['pd']['id']; ?>
.html" class="btnAdd">备注</a>
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
">45252</div>

	</div>
</div>
</form>
<script language="javascript">
$(document).ready(function()
{	
	$("#change_type").click(function (){
			var t_val = $("#type_val").val();
			var check_arr = '';
			$("input[name='group_ids[]']:checkbox:checked").each(function(){ //由于复选框一般选中的是多个,所以可以循环输出
				if(check_arr == ''){
					check_arr += $(this).val();
				}else{
					check_arr += ','+$(this).val();
				}
			});	
			
			var p = 'check_arr-'+check_arr+'-t_val-'+t_val+'.html';
			
			if(check_arr ==''){
				alert('请选择修改数据！');
			}else{
				$.ajax({
					url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/payment_situation/change_type-'+p,
					type:'get', 
					dataType:'json',
					data:p,
					success:check_back
				});
			}
			
		});
});

function check_back(data)
		{
			if(data.error=='Yes')
			{
				alert("失败");
			}
			else
			{
				navTabPageBreak();
			}
		}
</script>
