<?php /* Smarty version 2.6.22, created on 2024-10-14 13:11:21
         compiled from sale_detail/deliver_list_all.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/sale_detail/deliver_list_all">
	<input type="hidden" name="pageNum" value="1" />
	<input type="hidden" name="numPerPage" value="<?php echo $this->_tpl_vars['listRows']; ?>
" />
	<input type="hidden" name="orderField" value="group_id" />
	<input type="hidden" name="orderDirection" value="desc" />
    
    <input type="hidden" name="stock_code" value="<?php echo $this->_tpl_vars['stock_code']; ?>
" />
    
</form>
<style>
.searchBar ul.searchContent li {
	width:auto;
	float:left;
	margin-right:10px;
}
</style>
<div class="pageHeader">
	<form rel="pagerForm" onsubmit="return navTabSearch(this);" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/sale_detail/deliver_list_all" method="get">
	<div class="searchBar">
		<ul class="searchContent">
        	
            
            <li>
				<label style="width:60px;">客户代码：</label>
				<input type="text" name="customer_code" style="width:50px;" value="<?php echo $this->_tpl_vars['customer_code']; ?>
" />
			</li>
            
            <li>
				<label style="width:60px;">发票号：</label>
				<input type="text" name="invoice_number" style="width:100px;" value="<?php echo $this->_tpl_vars['invoice_number']; ?>
" />
			</li>
            
            <li>
				<label style="width:60px;">快递单号：</label>
				<input type="text" name="shipping_number" style="width:100px;" value="<?php echo $this->_tpl_vars['shipping_number']; ?>
" />
			</li>
            
            
            

            <li>
				<label style="width:60px;">订单号：</label>
				<input type="text" name="order_number" style="width:100px;" value="<?php echo $this->_tpl_vars['order_number']; ?>
" />
			</li>
            
            
            <li>
				<label style="width:60px;">时间：</label>
				<input type="text" name="s_time" style="width:70px;" value="<?php echo $this->_tpl_vars['s_time']; ?>
" class="date" readonly />-<input type="text" name="e_time" style="width:70px;" value="<?php echo $this->_tpl_vars['e_time']; ?>
" class="date" readonly/>
                
			</li>
            <li>
				<label style="width:60px;">发货时间：</label>
				<input type="text" name="start_time" style="width:70px;" value="<?php echo $this->_tpl_vars['start_time']; ?>
" class="date" readonly />-<input type="text" name="end_time" style="width:70px;" value="<?php echo $this->_tpl_vars['end_time']; ?>
" class="date" readonly/>
                
			</li>
            
            <li>
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
            
            <li>
				<label style="width:60px;">快递公司：</label>
				<select class="combox" name="shipping_company">
                <option value="">全部</option>
              	<option value="UPS" <?php if ($this->_tpl_vars['shipping_company'] == 'UPS'): ?>selected="selected"<?php endif; ?>>UPS</option>
                <option value="DHL" <?php if ($this->_tpl_vars['shipping_company'] == 'DHL'): ?>selected="selected"<?php endif; ?>>DHL</option>
                <option value="Fedex" <?php if ($this->_tpl_vars['shipping_company'] == 'Fedex'): ?>selected="selected"<?php endif; ?>>Fedex</option>
                </select>
			</li>
            
            <li>
            <label style="width:60px;">所属公司：</label>
            <select class="combox" name="gongsi">
            <option value="">全部</option>
            <option value="小布涂涂" <?php if ($this->_tpl_vars['gongsi'] == '小布涂涂'): ?> selected <?php endif; ?> >小布涂涂</option>
            <option value="涂涂记" <?php if ($this->_tpl_vars['gongsi'] == '涂涂记'): ?> selected <?php endif; ?> >涂涂记</option>
            <option value="赛思通" <?php if ($this->_tpl_vars['gongsi'] == '赛思通'): ?> selected <?php endif; ?> >赛思通</option>
            </select>
            </li>
            
            
			
            
            
            <li style="float:right;"><div class="buttonActive" style="float:right;"><div style="float:right;" class="buttonContent"><button type="submit">检索</button></div></div></li>

		</ul>

	</div>
	</form>
</div>
<form action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/sale_detail/xls_export" method="post" id="sale_detail">
<input type="hidden" id="excel_value" name="excel_value" value="" />
<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
       		 <li class="line">line</li>
             <li><a class="add" href="#" id="create_order"><span>发货单</span></a></li>
             <li class="line">line</li>
             
             <!--<li><a class="icon" href="#" id="querenhan_kouzhao"><span>口罩确认函</span></a></li>
        	 <li class="line">line</li>-->
             <li><a class="add" href="#" id="export_certificate_order"><span>发货条码</span></a></li>
        	 <li class="line">line</li>
             <?php if ($this->_tpl_vars['user_hidden']['group_id'] == '50' || $this->_tpl_vars['user_hidden']['group_id'] == '5' || $this->_tpl_vars['user_hidden']['group_id'] == '53' || $this->_tpl_vars['user_hidden']['group_id'] == '65' || $this->_tpl_vars['user_hidden']['group_id'] == '66' || $this->_tpl_vars['user_hidden']['group_id'] == '67' || $this->_tpl_vars['user_hidden']['group_id'] == '68'): ?>
             <li><a class="edit" target="navTab" rel="bulk_order_code_delivery" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/sale_detail/bulk_order_code_delivery1"><span>扫码发货</span></a></li>
             <li class="line">line</li>   
             <?php endif; ?>
             <li><a class="add" href="#" id="invoice_reputation"><span>发票声明书</span></a></li>
             <li class="line">line</li>
             
             <!--<li><a class="add" href="#" id="invoice_reputation_dhl"><span>DHL发票声明书</span></a></li>
             <li class="line">line</li>-->
                 
             <li><a class="add" href="#" id="create_invoice_shangye"><span>商业发票</span></a></li>
             <li class="line">line</li>
             <li><a class="add" href="#" id="create_invoice_po"><span>PO</span></a></li> 
             <li class="line">line</li>
             
             <li><a class="add" href="#" id="create_invoice_zhuangxiang"><span>装箱单</span></a></li> 
             <!--<li class="line">line</li>
             <li><a class="add" href="#" id="create_invoice_ups"><span>UPS出口确认书</span></a></li> -->
             <!--<li><a class="add" href="http://192.168.1.4:8000/erp/upload/DHL/DHL.doc"><span>DHL出口确认书</span></a></li> -->
             <!--<li class="line">line</li>
             <li><a class="icon" target="dialog" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/sale_detail/aa"><span>导入运费</span></a></li>
             <li class="line">line</li>s
             <li><a class="icon" target="dialog" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/sale_detail/aa"><span>处理运费</span></a></li>-->
             <?php if ($this->_tpl_vars['user_hidden']['group_id'] == '60' || $this->_tpl_vars['user_hidden']['group_id'] == '5' || $this->_tpl_vars['user_hidden']['group_id'] == '61' || $this->_tpl_vars['user_hidden']['group_id'] == '50' || $this->_tpl_vars['user_hidden']['group_id'] == '67'): ?>
             <!--<li class="line">line</li>
             <li><a class="icon" href="#" id="excel"><span>导出EXCEL</span></a></li>
             -->
             <?php endif; ?> 
             
             <li class="line">line</li>
             <li><a class="add" href="#" id="invoice_baoguan"><span>出口报关单</span></a></li>
             <li class="line">line</li> 
             <!--<li><a class="add" href="#" id="invoice_weituoshu"><span>代理报关委托书</span></a></li>-->
             
             <li><a class="icon" href="#" id="tiancheng_excel"><span>方得出口1</span></a></li>
             <li class="line">line</li>
             <li><a class="icon" href="#" id="tiancheng_excel2"><span>方得出口2</span></a></li>
             <li class="line">line</li>
             <li><a class="add" href="#" id="invoice_chukou"><span>出口结算单</span></a></li>
             <li class="line">line</li>
             <li><a class="icon" href="#" id="ups_excel"><span>UPS申报</span></a></li>
             
             <!--<?php if ($this->_tpl_vars['user_hidden']['group_id'] == '50' || $this->_tpl_vars['user_hidden']['group_id'] == '5' || $this->_tpl_vars['user_hidden']['group_id'] == '60'): ?>
             <li class=""><a class="edit" target="ajaxTodo" rel="page1" posttype="string" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/sale_detail/synchronization_shipping" title="同步运费?"><span>同步运费</span></a></li>
         <li class="line">line</li>   
             <?php endif; ?>-->         
                 
		</ul>
	</div>
	<table class="table" <?php if ($this->_tpl_vars['group_name'] != '物流组'): ?>width="2300"<?php else: ?>width="100%"<?php endif; ?> layoutH="138">
		<thead>
			<tr>
				<th style="width:25px;"><input type="checkbox" group="group_ids_delivery[]" class="checkboxCtrl"></th>
                <th style="width:30px;">编号</th>
                <th style="width:130px;">时间</th>
                <th style="width:60px;">业务员</th>
                <th style="width:60px;">客户代码</th>
                <th style="width:60px;">所属公司</th>
                <th style="width:100px;">发货代码</th>
                <?php if ($this->_tpl_vars['group_name'] != '物流组'): ?>
                	<th style="width:120px;">发票号</th>
                <?php endif; ?>
                <th style="width:200px;">订单号</th>
                <th style="width:80px;">货值</th>
                <th style="width:30px;">低值</th>
                <th style="width:80px;">国外报关额</th>
                <th style="width:60px;">快递公司</th>
                <th style="width:100px;">运单</th>
                <th style="width:60px;">发票</th>
                <?php if ($this->_tpl_vars['group_name'] != '物流组'): ?>
                    <th style="width:130px;">发货时间</th>
                    <th style="width:130px;">送达时间</th>
                <?php endif; ?>
                <th style="width:100px;">销售备注</th>
                <!--<th width="2%">报关状态</th>
                <th width="2%">报关</th>-->
                <th style="width:230px;">总净重&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;||总毛重&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;||箱规&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;||体积</th>
               
                <!--<th width="5%">发货时间</th>
                <th width="3%">计费实重</th>
                <th width="5%">运费</th>-->
                               <!-- <th width="4%">代理报关协议书号</th>
                <th width="4%">报关单号</th>
                <th width="4%">商品编码</th>
                <th width="4%">出口发票号</th>
                <th width="4%">报关类型</th>
                <th width="3%">复印件</th>
                <th width="4%">收单日期</th>
                <th width="3%">黄白联</th>
                <th width="4%">收单日期</th>-->
                <th style="width:60px;">操作</th>
			</tr>
		</thead>
		<tbody>
        <?php if ($this->_tpl_vars['sale_detail_deliver_list']): ?>
			 <?php $_from = $this->_tpl_vars['sale_detail_deliver_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['dis']):
?>
              <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
">
                <td>
                <?php if ($this->_tpl_vars['dis']['gongsi'] != 'None'): ?>
                <input name="group_ids_delivery[]" value="<?php echo $this->_tpl_vars['dis']['id']; ?>
" type="checkbox">
                <?php endif; ?>
                </td>
                <td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['add_time']; ?>
</td>
 				<td><?php echo $this->_tpl_vars['dis']['saleman_name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['customer_code']; ?>
</td>
                <td <?php if ($this->_tpl_vars['dis']['gongsi'] != '小布涂涂' && $this->_tpl_vars['dis']['gongsi'] != ''): ?> style="color:#F00;"<?php endif; ?>><font><?php echo $this->_tpl_vars['dis']['gongsi']; ?>
</font><?php if ($this->_tpl_vars['dis']['mianfei']): ?><font style="color:#F00;"><?php echo $this->_tpl_vars['dis']['mianfei']; ?>
</font><?php endif; ?></td>
                <td><?php echo $this->_tpl_vars['dis']['ship_code']; ?>
</td>
                <?php if ($this->_tpl_vars['group_name'] != '物流组'): ?>
                	<td><?php echo $this->_tpl_vars['dis']['invoice_number']; ?>
</td>
                <?php endif; ?>
                <td><?php echo $this->_tpl_vars['dis']['order_number']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['goods_value']; ?>
</td> 
                 
                <?php if ($this->_tpl_vars['dis']['dizhi_status'] == 2): ?>
                <td>否</td> 
                <?php elseif ($this->_tpl_vars['dis']['dizhi_status'] == 1): ?>
                <td style="color:#F00;">是</td> 
                <?php else: ?>
                <td></td> 
                <?php endif; ?>

                 <?php if ($this->_tpl_vars['dis']['goods_value'] != $this->_tpl_vars['dis']['abroad']): ?>
                 <td style="color:#F00;"><?php echo $this->_tpl_vars['dis']['abroad']; ?>
</td> 
                 <?php else: ?>
                 <td><?php echo $this->_tpl_vars['dis']['abroad']; ?>
</td> 
                 <?php endif; ?>   
                 
                 <?php if ($this->_tpl_vars['dis']['shipping_number'] != ''): ?>
                <td><?php echo $this->_tpl_vars['dis']['shipping_company']; ?>
</td>
                <?php else: ?>
                <td><div id="shipping_company<?php echo $this->_tpl_vars['dis']['id']; ?>
" > <a onclick="return click_a('divOne_<?php echo $this->_tpl_vars['dis']['id']; ?>
','<?php echo $this->_tpl_vars['dis']['id']; ?>
')" style="cursor:pointer;"><?php echo $this->_tpl_vars['dis']['shipping_company']; ?>
</a></div><div id="divOne1_<?php echo $this->_tpl_vars['dis']['id']; ?>
" style="display:none;"><select class="combox" name="shippingcompany" id="shippingcompany<?php echo $this->_tpl_vars['dis']['id']; ?>
">
           
              	<option value="UPS" <?php if ($this->_tpl_vars['dis']['shipping_company'] == 'UPS'): ?>selected="selected"<?php endif; ?>>UPS</option>
                <option value="DHL" <?php if ($this->_tpl_vars['dis']['shipping_company'] == 'DHL'): ?>selected="selected"<?php endif; ?>>DHL</option>
                <option value="Fedex" <?php if ($this->_tpl_vars['dis']['shipping_company'] == 'Fedex'): ?>selected="selected"<?php endif; ?>>Fedex</option>
                </select> <a style="cursor:pointer;" onclick="return quedingxiugai('divOne_<?php echo $this->_tpl_vars['dis']['id']; ?>
','<?php echo $this->_tpl_vars['dis']['id']; ?>
')">确定</a></div></td>
                <?php endif; ?>
                
                <?php if ($this->_tpl_vars['dis']['shipping_company'] == 'UPS'): ?>
                
                	<td><a style="text-decoration:underline;" target="_blank" href="/upload/ups/<?php echo $this->_tpl_vars['dis']['shipping_number']; ?>
.gif"><?php echo $this->_tpl_vars['dis']['shipping_number']; ?>
</a></td>
                <?php elseif ($this->_tpl_vars['dis']['shipping_company'] == 'DHL'): ?>
                   <td><a style="text-decoration:underline;" target="_blank" href="/upload/DHL/<?php echo $this->_tpl_vars['dis']['shipping_number']; ?>
.pdf"><?php echo $this->_tpl_vars['dis']['shipping_number']; ?>
</a></td>
                
                <?php else: ?>
                    <td><?php echo $this->_tpl_vars['dis']['shipping_number']; ?>
</td>
                
                <?php endif; ?>
                
                <?php if ($this->_tpl_vars['dis']['shipping_company'] == 'UPS'): ?>
                
                	<td><a style="text-decoration:underline;" target="_blank" href="/upload/ups/<?php echo $this->_tpl_vars['dis']['invoice_number']; ?>
_invoice.pdf">查看</a></td>
                <?php elseif ($this->_tpl_vars['dis']['shipping_company'] == 'DHL'): ?>
                   <td><a style="text-decoration:underline;" target="_blank" href="/upload/DHL/<?php echo $this->_tpl_vars['dis']['shipping_number']; ?>
_invoice.pdf">查看</a><br>
                   <?php if ($this->_tpl_vars['dis']['order_status'] == 1): ?>
                   (含外发)
                   <?php endif; ?>
                   </td>
                
                <?php else: ?>
                    <td></td>
                
                <?php endif; ?>
                
                <?php if ($this->_tpl_vars['group_name'] != '物流组'): ?>
                    <td><?php echo $this->_tpl_vars['dis']['time']; ?>
</td> 
                    <td><?php echo $this->_tpl_vars['dis']['delivery_time']; ?>
</td> 
                <?php endif; ?>
                <td><?php echo $this->_tpl_vars['dis']['sale_note']; ?>
</td>
                <!--<td>
                <?php if ($this->_tpl_vars['dis']['whether_declare'] == 1): ?>
                    否
                <?php elseif ($this->_tpl_vars['dis']['whether_declare'] == 2): ?>
                    是
                <?php endif; ?>
                </td>
                <?php if ($this->_tpl_vars['dis']['whether_declare'] == '1'): ?>
                <td>否</td>
                <?php else: ?>
                <td>是</td>
                <?php endif; ?>-->
             
                <td>
                <table class="table" width="120">
                <tbody>
                <?php $_from = $this->_tpl_vars['dis']['freight_information']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?>
                  <tr>
      
                       <td width="60"><?php echo $this->_tpl_vars['d']['net']; ?>
</td>
                       <td width="60"><?php echo $this->_tpl_vars['d']['gross']; ?>
</td>
                       <td width="60"><?php echo $this->_tpl_vars['d']['specifications']; ?>
</td>
                       <td width="60"><?php echo $this->_tpl_vars['d']['volume']; ?>
</td>
                       
                  </tr>
                <?php endforeach; endif; unset($_from); ?>
                </tbody>
                </table>
                </td>
                <!--<td><?php echo $this->_tpl_vars['dis']['shipping_time']; ?>
</td>
          
                <td><?php echo $this->_tpl_vars['dis']['shipping_weight']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['shipping_money']; ?>
</td>--> 
                
            <!--    <td><?php echo $this->_tpl_vars['dis']['agent_number']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['customs_code']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['product_number']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['export_invoice_number']; ?>
</td>
                <td>
                <?php if ($this->_tpl_vars['dis']['declare_type'] == '1'): ?>FOB
                <?php else: ?>CIF
                <?php endif; ?>
                </td>
                <td>
                <?php if ($this->_tpl_vars['dis']['copy_state'] == '2'): ?>有
                <?php else: ?>无
                <?php endif; ?>
                </td>
                <td><?php echo $this->_tpl_vars['dis']['copy_acceptance_date']; ?>
</td>
                <td>
                <?php if ($this->_tpl_vars['dis']['yellow_union_state'] == '2'): ?>有
                <?php else: ?>无
                <?php endif; ?>
                </td>
                <td><?php echo $this->_tpl_vars['dis']['yellow_union_date']; ?>
</td> -->
                                            
                <td>
                <?php if ($this->_tpl_vars['user_hidden']['group_id'] == '53' || $this->_tpl_vars['user_hidden']['group_id'] == '50' || $this->_tpl_vars['user_hidden']['group_id'] == '5' || $this->_tpl_vars['user_hidden']['group_id'] == '67' || $this->_tpl_vars['user_hidden']['group_id'] == '68'): ?>
             <a title="修改发货信息" target="dialog" rel="stock_manage_edit-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/sale_detail/freight_changes-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" class="btnAdd">编辑</a>
                <?php if ($this->_tpl_vars['dis']['shipping_number'] == ''): ?>
                
                <a title="删除吗？" target="ajaxTodo" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/sale_detail/all_del-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" class="btnDel">删除</a>
                <?php endif; ?>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['user_hidden']['group_id'] == '67' || $this->_tpl_vars['user_hidden']['user_id'] == '1'): ?>
                	<?php if ($this->_tpl_vars['dis']['del_express_number_type'] == '1'): ?>
                		<a title="删除快递单号吗？" target="ajaxTodo" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/sale_detail/del_express_number-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" class="btnDel">删除</a>
                	<?php endif; ?>
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
    
	
	

    function click_a(divDisplay,id){
		$('#shipping_company' + id).css('display','none');
		$('#divOne1_' + id).css('display','block');
    }
	function quedingxiugai(divDisplay,id){
		
		var shipping_company=$("#shippingcompany"+id).val();
		if(shipping_company!=''){
			$.ajax({
					url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/sale_detail/update_shipping_company',//通过Ajax取数据的目标页面
					data:{"shipping_company":shipping_company,"id":id},
					type:'post',//方法，还可以是"post"
					dataType:'text',//数据类型，还有其它的，详见jQuery手册
					success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
					{
				
						 if(locals==1){
							 alert("修改成功");
							 $('#shipping_company' + id).css('display','block');
							 $('#divOne1_' + id).css('display','none');
							 document.getElementById("shipping_company"+id).innerHTML="<a  onClick='return click_a(\"divOne1_"+id+"\",\""+id+"\" )' style=cursor:pointer;>"+shipping_company+"</a>"
						 }else{
							 alert("修改失败");
							 $('#divOne1_' + id).css('display','none');
							 $('#shipping_company' + id).css('display','block');
							 document.getElementById("shipping_company"+id).innerHTML="<a  onClick='return click_a(\"divOne_"+id+"\",\""+id+"\" )' style=cursor:pointer;>"+shipping_company+"</a>"
						 }
						
					}
		   });
			
		}
	}
	   
$(document).ready(function()
{		
		
		$("#excel").click(function (){
			$("#excel_value").val(1);
			if($("input[type='checkbox']").is(":checked")){
				$("#sale_detail").submit();
			}else{
				alert("请选择导出的数据");
			}
		});
		
		$("#tiancheng_excel").click(function (){
			$("#excel_value").val(2);
			if($("input[type='checkbox']").is(":checked")){
				$("#sale_detail").submit();
			}else{
				alert("请选择导出的数据");
			}
		});
		
		$("#tiancheng_excel2").click(function (){
			$("#excel_value").val(3);
			if($("input[type='checkbox']").is(":checked")){
				$("#sale_detail").submit();
			}else{
				alert("请选择导出的数据");
			}
		});
		
		
		$("#ups_excel").click(function (){
			$("#excel_value").val(4);
			if($("input[type='checkbox']").is(":checked")){
				$("#sale_detail").submit();
			}else{
				alert("请选择导出的数据");
			}
		});
		

		
	   $("#export_certificate_order").click(function (){

			var check_arr = '';

			$("input[name='group_ids_delivery[]']:checkbox:checked").each(function(){ //由于复选框一般选中的是多个,所以可以循环输出
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
/sale_detail/aaa-'+p);
			}	
		});
		
});

$(document).ready(function()
{	
	   $("#create_invoice_shangye").click(function (){
		//var touid = $("#newtouid").val();
			var check_arr = '';
			$("input[name='group_ids_delivery[]']:checkbox:checked").each(function(){ //由于复选框一般选中的是多个,所以可以循环输出
				if(check_arr == ''){
					check_arr += $(this).val();
				}else{
					check_arr += '|'+$(this).val();
				}
			});
			
			var p = 'ids-'+check_arr+'.html';

			if(check_arr ==''){
				alert('必须选择客户');
			}else{
				var patt = new RegExp('#');
                if(patt.test(check_arr)){
					alert('只能选择一条信息!');
				}else{						
	               window.open('<?php echo $this->_tpl_vars['__ROOT__']; ?>
/sale_detail/create_invoice_shangye-'+p);
				}
			}	
		});
		
	   $("#create_invoice_po").click(function (){
		//var touid = $("#newtouid").val();
			var check_arr = '';
			$("input[name='group_ids_delivery[]']:checkbox:checked").each(function(){ //由于复选框一般选中的是多个,所以可以循环输出
				if(check_arr == ''){
					check_arr += $(this).val();
				}else{
					check_arr += '|'+$(this).val();
				}
			});
			
			var p = 'ids-'+check_arr+'.html';

			if(check_arr ==''){
				alert('必须选择客户');
			}else{
				var patt = new RegExp('#');
                if(patt.test(check_arr)){
					alert('只能选择一条信息!');
				}else{							
	                window.open('<?php echo $this->_tpl_vars['__ROOT__']; ?>
/sale_detail/create_invoice_po-'+p);
				}
			}	
		});					
	$("#create_invoice_zhuangxiang").click(function (){
		//var touid = $("#newtouid").val();
			var check_arr = '';
			$("input[name='group_ids_delivery[]']:checkbox:checked").each(function(){ //由于复选框一般选中的是多个,所以可以循环输出
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
/sale_detail/create_invoice_zhuangxiang-'+p);
				}
			}
		 });
		 $("#create_invoice_ups").click(function (){
		//var touid = $("#newtouid").val();
			var check_arr = '';
			$("input[name='group_ids_delivery[]']:checkbox:checked").each(function(){ //由于复选框一般选中的是多个,所以可以循环输出
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
				   $.ajax({
							url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/sale_detail/check_ups',//通过Ajax取数据的目标页面
							data:{"id":check_arr},
							type:'post',//方法，还可以是"post"
							dataType:'json',//数据类型，还有其它的，详见jQuery手册
							success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
							{
	 
								//if(locals=='UPS'){
									
									window.open('<?php echo $this->_tpl_vars['__ROOT__']; ?>
/sale_detail/create_invoice_ups-'+p);
								//}else{
									//alert("该订单不使用UPS发货")
								//}
							}
					});
					
				}
			}
		 });
		 $("#create_order").click(function (){
		//var touid = $("#newtouid").val();
			var check_arr = '';
			$("input[name='group_ids_delivery[]']:checkbox:checked").each(function(){ //由于复选框一般选中的是多个,所以可以循环输出
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
/sale_detail/create_order-'+p);
				}
			}
		 });
 });
 
 		$("#invoice_chukou").click(function (){
		//var touid = $("#newtouid").val();
			var check_arr = '';
			$("input[name='group_ids_delivery[]']:checkbox:checked").each(function(){ //由于复选框一般选中的是多个,所以可以循环输出
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
/sale_detail/invoice_chukou-'+p);
				}
			}
		 });	
		 
		 $("#invoice_baoguan").click(function (){
		//var touid = $("#newtouid").val();
			var check_arr = '';
			$("input[name='group_ids_delivery[]']:checkbox:checked").each(function(){ //由于复选框一般选中的是多个,所以可以循环输出
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
/sale_detail/invoice_baoguan-'+p);
				}
			}
		 });	
		 
		 
		 $("#querenhan_kouzhao").click(function (){
		//var touid = $("#newtouid").val();
			var check_arr = '';
			
			var check_arr = $("input[name='group_ids_delivery[]']:checkbox:checked");
			
			
			if(check_arr.val() == undefined){
				alert('必须选择客户');
			}else{
				$("input[name='group_ids_delivery[]']:checkbox:checked").each(function(){ //由于复选框一般选中的是多个,所以可以循环输出
				
					window.open('<?php echo $this->_tpl_vars['__ROOT__']; ?>
/sale_detail/querenhan_kouzhao-ids-'+$(this).val()+'.html');

				});
			}	

		 });	
		 
		 
		 $("#invoice_weituoshu").click(function (){
		//var touid = $("#newtouid").val();
			var check_arr = '';
			$("input[name='group_ids_delivery[]']:checkbox:checked").each(function(){ //由于复选框一般选中的是多个,所以可以循环输出
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
/sale_detail/invoice_weituoshu-'+p);
				}
			}
		 });	
 
		$("#invoice_reputation").click(function (){
		//var touid = $("#newtouid").val();
			var check_arr = '';
			$("input[name='group_ids_delivery[]']:checkbox:checked").each(function(){ //由于复选框一般选中的是多个,所以可以循环输出
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
/sale_detail/invoice_reputation-'+p);
				}
			}
		 });
		 
		 
		 $("#invoice_reputation_dhl").click(function (){
		//var touid = $("#newtouid").val();
			var check_arr = '';
			$("input[name='group_ids_delivery[]']:checkbox:checked").each(function(){ //由于复选框一般选中的是多个,所以可以循环输出
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
/sale_detail/invoice_reputation_dhl-'+p);
				}
			}
		 });
 
		function check_back(data)
		{
			if(data.error==1)
			{
				//$("#dialog").css("display","none");
				alert("失败");
			}
			else
			{
				
				//$("#dialog").css("display","none");
				navTabPageBreak();
				//window.location = "<?php echo $this->_tpl_vars['__ROOT__']; ?>
/#newcustomer";
			}
		}
</script> 