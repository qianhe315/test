<?php /* Smarty version 2.6.22, created on 2022-03-02 16:22:29
         compiled from send_out_info/index.html */ ?>

<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/send_out_info/index">
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
/send_out_info/index" method="get">
	<div class="searchBar">
		<ul class="searchContent">
			
            <li style="width:13%;">
				<label style="width:50px">业务员：</label>
				<select class="combox" name="saleman_user_id">
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
            <li style="width:22%;">
				<label style="width:60px">做货时间：</label>
				<input type="text" name="start_time" class="date" readonly="true" style="width:70px;" value="<?php echo $this->_tpl_vars['start_time']; ?>
" />-<input type="text" name="end_time" class="date" readonly="true" style="width:70px;" value="<?php echo $this->_tpl_vars['end_time']; ?>
" />
                
			</li>
            <li style="width:15%;">
				<label style="width:50px;">订单号：</label>
				<input type="text" name="order_number" style="width:70px;" value="<?php echo $this->_tpl_vars['order_number']; ?>
" />
                
			</li>
             <li style="width:15%;">
				<label style="width:60px;">客户编号：</label>
				<input type="text" name="customer_code" style="width:70px;" value="<?php echo $this->_tpl_vars['customer_code']; ?>
" />
                
			</li>
            
             <li style="width:15%;">
				<label style="width:60px;">报价编号：</label>
				<input type="text" name="quotation_code" style="width:70px;" value="<?php echo $this->_tpl_vars['quotation_code']; ?>
" />
			</li>
           <!-- <li style="width:15%;">
				<label style="width:40px">状态：</label>
				<select class="combox" name="examine_status">
                <option value="">全部</option>
              	<option value="1" <?php if ($this->_tpl_vars['examine_status'] == '1'): ?>selected="selected"<?php endif; ?>>未审核</option>
                <option value="2" <?php if ($this->_tpl_vars['examine_status'] == '2'): ?>selected="selected"<?php endif; ?>>审核通过</option>
                <option value="3" <?php if ($this->_tpl_vars['examine_status'] == '3'): ?>selected="selected"<?php endif; ?>>问题单</option>
                </select>
			</li>-->
           <!-- <li style="width:18%;">
				<label style="width:60px">订单属性：</label>
				<select class="combox" name="order_status">
                <option value="">全部</option>
              	<option value="1" <?php if ($this->_tpl_vars['order_status'] == '1'): ?>selected="selected"<?php endif; ?>>烫图订单</option>
                <option value="2" <?php if ($this->_tpl_vars['order_status'] == '2'): ?>selected="selected"<?php endif; ?>>烫钻订单</option>
                <option value="5" <?php if ($this->_tpl_vars['order_status'] == '5'): ?>selected="selected"<?php endif; ?>>模板订单</option>
                </select>
			</li>
			
            <li style="width:17%;">
				<label style="width:60px">做货状态：</label>
				<select class="combox" name="export_status">
                <option value="">全部</option>
              	<option value="1" <?php if ($this->_tpl_vars['export_status'] == '1'): ?>selected="selected"<?php endif; ?>>未做货</option>
                <option value="2" <?php if ($this->_tpl_vars['export_status'] == '2'): ?>selected="selected"<?php endif; ?>>已做货</option>
                </select>
			</li>
            
            <li style="width:15%;">
				<label style="width:60px">是否超期：</label>
				<select class="combox" name="exceed_time">
                <option value="">全部</option>
              	<option value="1" <?php if ($this->_tpl_vars['exceed_time'] == '1'): ?>selected="selected"<?php endif; ?>>未超期</option>
                <option value="2" <?php if ($this->_tpl_vars['exceed_time'] == '2'): ?>selected="selected"<?php endif; ?>>已超期</option>
                </select>
			</li>-->
            
           <!-- <li style="width:15%;">
				<label style="width:60px">优先级：</label>
				<select class="combox" name="youxian_status">
                <option value="">全部</option>
              	<option value="3" <?php if ($this->_tpl_vars['youxian_status'] == '3'): ?>selected="selected"<?php endif; ?>>高</option>
                <option value="2" <?php if ($this->_tpl_vars['youxian_status'] == '2'): ?>selected="selected"<?php endif; ?>>中</option>
                <option value="1" <?php if ($this->_tpl_vars['youxian_status'] == '1'): ?>selected="selected"<?php endif; ?>>低</option>
                <option value="4" <?php if ($this->_tpl_vars['youxian_status'] == '4'): ?>selected="selected"<?php endif; ?>>完成</option>
                </select>
			</li>       -->     
            
             <!--<li style="float:right; margin-left:10px; width:100px;"><a class="button" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/send_out_info/search/" target="dialog" mask="true" title="查询框"><span>高级检索</span></a></li>  -->  
            <br/>    <br/>      
            <li style="float:right;"><div class="buttonActive" style="float:right;"><div style="float:right;" class="buttonContent"><button type="submit">检索</button></div></div></li>
		</ul>
         
	</div>
	</form>
</div>
<div class="pageContent">
   
        <div class="panelBar">
            <ul class="toolBar">
              <?php if ($this->_tpl_vars['user_hidden']['group_id'] == '5' || $this->_tpl_vars['user_hidden']['group_id'] == '62' || $this->_tpl_vars['user_hidden']['group_id'] == '63'): ?>
            <li class="line">line</li>
<!--                <li><a class="add" id="export_doinvoice" href="#" ><span>导出做货单</span></a></li>
                <li class="line">line</li>-->
                <li><a class="add" href="#" id="export_certificate"><span>导出合格证</span></a></li>
                <li class="line">line</li>
                
          <!--<li>
                <a title="批量修改未做货？" id="" target="selectedTodo" rel="send_out_info_group[]" postType="string" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/send_out_info/aa/" class="edit"><span>批量未做货</span></a></li>
                <li class="line">line</li>
			<li>	
                <a title="批量修改已做货？" id="" target="selectedTodo" rel="send_out_info_group[]" postType="string" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/send_out_info/bb/" class="edit"><span>批量已做货</span></a>          
        
        
            <select name="send_out_info_touid" style="font-size:13px;" id="send_out_info_touid">          
              <option value="1">未做货</option>
              <option value="2">已做货</option> 
            </select>
          </li>
          <li class="line">line</li>-->
                     		
           
<!--            <li><a class="edit" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/send_out_info/bulk_shipment/" target="dialog" id="bulk_shipment"><span>批量发货</span></a></li>
            <li class="line">line</li>-->
            <?php endif; ?>
            <?php if ($this->_tpl_vars['user_hidden']['group_id'] == '5' || $this->_tpl_vars['user_hidden']['group_id'] == '50'): ?>
            <li><a class="edit" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/send_out_info/bulk_goods/" target="dialog" id="bulk_goods"><span>批量收货</span></a></li>
            <li class="line">line</li>
            <?php endif; ?>
           <!-- <li><a class="add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/send_out_info/mark_wrong/" target="selectedTodo" id="del" rel="send_out_info_group[]" postType="string" title="确定标记？"><span>标记问题单</span></a></li>    -->
            </ul>
        </div>
   
	<table class="table" width="1800" layoutH="138">
		<thead>
       		
			<tr>
				<th width="2%"><input type="checkbox" group="send_out_info_group[]" class="checkboxCtrl"></th>
                <th width="2%">编号</th>
                <th width="7%">做货时间</th>
                <th width="3%">业务员</th>
               <!-- <th width="3%">优先级</th>-->
                <th width="3%">订单属性</th>
                <th width="3%">产品分类</th>
               <!-- <th width="4%">状态</th>-->
               <!-- <th width="4%">做货状态</th>-->
               
                <th width="4%">客户编号</th>
                <th width="5%">订单号</th>
                <th width="5%">返单号</th>
               
                <th width="5%">设计名称</th>
                <th width="5%">报价编号</th>
                <th width="5%">尺寸</th>
                <th width="2%">数量</th>
               <!-- <th width="4%">备损数量</th>
                <th width="5%">发货时间</th>-->
               
                <th width="5%">收货时间</th>
               <!--<th width="5%">做货程度</th>-->
                <th width="5%">操作</th>
			</tr>
		</thead>
		<tbody>
        <?php if ($this->_tpl_vars['order']): ?>
			 <?php $_from = $this->_tpl_vars['order']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['dis']):
?>
             
              <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
" >
                 <input type="hidden" id="examine_status<?php echo $this->_tpl_vars['dis']['id']; ?>
" value="<?php echo $this->_tpl_vars['dis']['examine_status']; ?>
" />
                 <input type="hidden" id="deliver_status<?php echo $this->_tpl_vars['dis']['id']; ?>
" value="<?php echo $this->_tpl_vars['dis']['deliver_status']; ?>
" />
                 <input type="hidden" id="take_status<?php echo $this->_tpl_vars['dis']['id']; ?>
" value="<?php echo $this->_tpl_vars['dis']['take_status']; ?>
" />
                 <input type="hidden" id="youxian_status<?php echo $this->_tpl_vars['dis']['id']; ?>
" value="<?php echo $this->_tpl_vars['dis']['youxian_status']; ?>
" />
                 <input type="hidden" id="gao" value="<?php echo $this->_tpl_vars['gao']; ?>
" />
                <td><input name="send_out_info_group[]" value="<?php echo $this->_tpl_vars['dis']['id']; ?>
" type="checkbox"></td>
                <td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['new_time']; ?>
</td>
 				<td><?php echo $this->_tpl_vars['dis']['saleman_name']; ?>
</td>
               <!-- <td><?php echo $this->_tpl_vars['dis']['youxian_status']; ?>
</td>-->
               <?php if ($this->_tpl_vars['dis']['status'] == '3'): ?>
                   <td>外发报价单</td>
                <?php else: ?>   
                   <td></td>
                <?php endif; ?>
                <td><?php echo $this->_tpl_vars['dis']['product_type']; ?>
</td>
               <!-- <td>
                    <?php if ($this->_tpl_vars['dis']['examine_status'] == '1'): ?>
                        未审核
                    <?php elseif ($this->_tpl_vars['dis']['examine_status'] == '2'): ?>
                        审核通过
                    <?php elseif ($this->_tpl_vars['dis']['examine_status'] == '3'): ?>
                        问题单
                    <?php endif; ?>
                </td>-->
<!--                <td>
                    <?php if ($this->_tpl_vars['dis']['export_status'] == '1'): ?>
                        未做货
                    <?php elseif ($this->_tpl_vars['dis']['export_status'] == '2'): ?>
                        已做货
                    <?php else: ?>
                        已撤销
                    <?php endif; ?>                
                </td>-->
                
                <td><?php echo $this->_tpl_vars['dis']['customer_code']; ?>
<input type="hidden" name="customer_code[]" id="customer_code<?php echo $this->_tpl_vars['dis']['id']; ?>
" value="<?php echo $this->_tpl_vars['dis']['customer_code']; ?>
" /></td>
                
                <td><?php echo $this->_tpl_vars['dis']['order_number']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['return_number']; ?>
</td>
                
                <td><?php echo $this->_tpl_vars['dis']['design_name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['quotation_code']; ?>
</td>
                <?php if ($this->_tpl_vars['dis']['size'] != ""): ?>
                    <td><?php echo $this->_tpl_vars['dis']['size']; ?>
cm</td>
                <?php else: ?>
                    <?php if ($this->_tpl_vars['dis']['cm_w'] != ""): ?>
                       <td><?php echo $this->_tpl_vars['dis']['cm_w']; ?>
cmX<?php echo $this->_tpl_vars['dis']['cm_h']; ?>
cm</td>
                    <?php else: ?>
                       <td></td>
                    <?php endif; ?>   
                <?php endif; ?>
                <td><?php echo $this->_tpl_vars['dis']['number']; ?>
</td>
<!--                <td><?php echo $this->_tpl_vars['dis']['preparation_number']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['deliver_time']; ?>
</td>  --> 
                        
                <td><?php echo $this->_tpl_vars['dis']['take_time']; ?>
</td>
              <!-- <td><?php echo $this->_tpl_vars['dis']['cancel_influence']; ?>
</td>-->
                <!--<?php if ($this->_tpl_vars['dis']['cla_status'] == '1'): ?>
                	<td>审核中</td>
                <?php elseif ($this->_tpl_vars['dis']['cla_status'] == '2'): ?>
                	<td>审核通过</td>
                <?php elseif ($this->_tpl_vars['dis']['cla_status'] == '2'): ?>
                	<td>驳回</td>
                <?php else: ?>
                	<td></td>
                <?php endif; ?>-->
                <td>
                <a title="编辑" target="navTab" rel="send_out_info_edit" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/send_out_info/edit-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" class="btnEdit">编辑</a>
                <?php if ($this->_tpl_vars['quanxian'] == 'kazuo' || $this->_tpl_vars['quanxian'] == 'admin'): ?>
               <!-- <?php if ($this->_tpl_vars['dis']['export_status'] != '2' && $this->_tpl_vars['dis']['export_status'] != '3'): ?>
                 <a title="标记问题单" target="dialog" rel="confirm_goods" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/send_out_info/mark_wrong-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" class="btnAdd">标记问题单</a>
                 <?php endif; ?>-->
                 
                
                <!-- <?php if ($this->_tpl_vars['dis']['export_status'] == '3' || $this->_tpl_vars['dis']['deliver_time'] != "" || $this->_tpl_vars['dis']['take_time'] != ""): ?>
                 <?php else: ?>
                  <a title="撤销订单" target="dialog" rel="revocation_order" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/send_out_info/revocation_order-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" class="btnDel">撤销订单</a>
                  <?php endif; ?>-->
                  
                 <!--<?php if ($this->_tpl_vars['dis']['export_status'] == '2'): ?>
                   <?php if ($this->_tpl_vars['quanxian'] != 'xiaoshou'): ?>
                        <?php if ($this->_tpl_vars['dis']['take_status'] != '3'): ?>
                            <a title="确认发货" target="dialog" rel="confirm_delivery" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/send_out_info/confirm_delivery-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" class="btnAdd">确认发货</a>
                        <?php endif; ?>
                    <?php endif; ?>    
                    <?php if ($this->_tpl_vars['quanxian'] != 'kazuo'): ?>
                        <a title="确认收货" target="dialog" rel="confirm_goods" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/send_out_info/confirm_goods-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" class="btnAdd">确认收货</a>
                    <?php endif; ?>     
                <?php endif; ?>  
                 -->    
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
<script language="javascript">
$(document).ready(function()
{	
	   $("#export_certificate").click(function (){

			var check_arr = '';
			var customer_code = '';
 
			$("input[name='send_out_info_group[]']:checkbox:checked").each(function(){ //由于复选框一般选中的是多个,所以可以循环输出
				if(check_arr == ''){
					check_arr += $(this).val();
					
				}else{
					check_arr += '|'+$(this).val();	
					
				}
			});
			
			customer_code=customer_code.split("|");	
            for(var i=0;i<customer_code.length;i++){

				if(customer_code[0]==customer_code[i]){
					
				}else{
					var b = '1';
				    alert("客户代码必须相同");break;
				}
			}			

			var p = 'ids-'+check_arr+'.html';

			if(check_arr ==''){
				alert('必须选择客户');
			}else{
				if(!b){	
			        window.open('<?php echo $this->_tpl_vars['__ROOT__']; ?>
/send_out_info/export_certificate-'+p);
				}else{
				    return false;	
				}
			}	
		});
		
	   $("#export_doinvoice").click(function (){
		//var touid = $("#newtouid").val();
			var check_arr = '';
            var youxian_status = '';
			$("input[name='send_out_info_group[]']:checkbox:checked").each(function(){ //由于复选框一般选中的是多个,所以可以循环输出
				if(check_arr == ''){
					check_arr += $(this).val();
					youxian_status += $("#youxian_status" + $(this).val()).val();
				}else{
					check_arr += '#'+$(this).val();
					youxian_status += '|'+$("#youxian_status" + $(this).val()).val();
				}
			});
			var gao = $("#gao").val();
			
			var p = 'ids-'+check_arr+'.html';

			if(check_arr ==''){
				alert('必须选择客户');
			}else{
				var patt = new RegExp('#');
                if(patt.test(check_arr)){
					alert('只能选择一条信息！');
				}else{
					 
					 $.ajax({
							url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/send_out_info/check_status',//通过Ajax取数据的目标页面
							data:{"id":check_arr},
							type:'post',//方法，还可以是"post"
							dataType:'json',//数据类型，还有其它的，详见jQuery手册
							success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
							{
								if(locals=="1"){
									alert("此订单已撤销,不可到处做货单");
								}else{
									window.open('<?php echo $this->_tpl_vars['__ROOT__']; ?>
/send_out_info/export_doinvoice-'+p);
								}
							}								
							
						});
/*					 if(gao=='gao'){
						if(youxian_status=="低" || youxian_status=="中"){
							 alert('请先操作优先级是高的！');
						}else{
							 window.open('<?php echo $this->_tpl_vars['__ROOT__']; ?>
/send_out_info/export_doinvoice-'+p);
						}*/
					 //}else{
						 
					 //}
				}
			}	
		});
		
});

$(document).ready(function()
{	
	   /*修改做货状态*/
		$("#send_out_info_piliang").click(function (){
			var touid1 = $("#send_out_info_touid").val();
			var check_arr1 = '';
			var examine_status = '';
			var deliver_status = '';
			var take_status = '';

			$("input[name='send_out_info_group[]']:checkbox:checked").each(function(){ //由于复选框一般选中的是多个,所以可以循环输出
				if(check_arr1 == ''){
					check_arr1 += $(this).val();
					examine_status += $("#examine_status" + $(this).val()).val();
					deliver_status += $("#deliver_status" + $(this).val()).val();
					take_status += $("#take_status" + $(this).val()).val();
				}else{
					check_arr1 += ','+$(this).val();
					examine_status += '|'+$("#examine_status" + $(this).val()).val();
					deliver_status += '|'+$("#deliver_status" + $(this).val()).val();
					take_status += '|'+$("#take_status" + $(this).val()).val();
				}
			});	
			
			examine_status=examine_status.split("|");
            for(var i=0;i<examine_status.length;i++){

				if(examine_status[i]=='3'){
					var a = '1';
				    alert("问题单不能改变状态！");break;					
				}
			}
			
			deliver_status=deliver_status.split("|");
            for(var i=0;i<deliver_status.length;i++){

				if(deliver_status[i]=='3'){
					var b = '1';
				    alert("完全发货，不能修改状态！");break;					
				}
			}
			
			take_status=take_status.split("|");
            for(var i=0;i<take_status.length;i++){

				if(take_status[i]=='3'){
					var c = '1';
				    alert("完全收货，不能修改状态！");break;					
				}
			}			
			
			var p = 'check_arr1-'+check_arr1+'-touid1-'+touid1+'.html';

			if(check_arr1 ==''){
				alert('必须选择客户');
			}else{
				if(!a && !b && !c){
					$.ajax({
						url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/send_out_info/change_to_active-'+p,
						type:'get', 
						dataType:'json',
						data:p,
						success:check_back
					});
				}
			}
			
		});
		
		
		
		
						
		
});
		
		
		function check_back(data)
		{
			if(data.error==1)
			{
				//$("#dialog").css("display","none");
				alert("不可包含未审核或未知错误");
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