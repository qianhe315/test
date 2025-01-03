<?php /* Smarty version 2.6.22, created on 2024-10-25 11:13:14
         compiled from procure_outgoing/index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/procure_outgoing/index">
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
/procure_outgoing/index" method="get">
	<div class="searchBar">
		<ul class="searchContent">
			<li>
				<label style="width:60px;">询价状态：</label>
				<select class="combox" name="order_status_check">
                
                <option value="">全部</option>
              	<option value="1" <?php if ($this->_tpl_vars['order_status_check'] == 1): ?> selected <?php endif; ?> >未询价</option>
                <option value="2" <?php if ($this->_tpl_vars['order_status_check'] == 2): ?> selected <?php endif; ?> >已询价</option>
                </select>
			</li>
            
            <li>
				<label style="width:60px;">询价时间：</label>
				<input type="text" name="time_start" value="<?php echo $this->_tpl_vars['time_start']; ?>
" class="date" readonly style="width:70px;" />-<input type="text"  value="<?php echo $this->_tpl_vars['time_end']; ?>
" name="time_end" class="date" readonly style="width:70px;" />
                
			</li>
            <li>
				<label style="width:50px;">业务员：</label>
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
				<label style="width:60px;">客户代码：</label>
				<input type="text" name="customer_code" value="<?php echo $this->_tpl_vars['customer_code']; ?>
" style="width:70px;" />
			</li>
            <li>
				<label style="width:60px;">报价名称：</label>
				<input type="text" name="design_pic_name" value="<?php echo $this->_tpl_vars['design_pic_name']; ?>
" style="width:70px;" />
			</li>
            <li>
				<label style="width:60px;">订单号：</label>
				<input type="text" name="order_number" value="<?php echo $this->_tpl_vars['order_number']; ?>
" style="width:120px;" />
			</li>
            <li>
				<label style="width:60px;">报价编号：</label>
				<input type="text" name="quotation_code" value="<?php echo $this->_tpl_vars['quotation_code']; ?>
" style="width:120px;" />
			</li>
            <li>
				<label style="width:60px;">付款时间：</label>
				<input type="text" name="newtime_start" value="<?php echo $this->_tpl_vars['newtime_start']; ?>
" class="date" readonly style="width:70px;" />-<input type="text"  value="<?php echo $this->_tpl_vars['newtime_end']; ?>
" name="newtime_end" class="date" readonly style="width:70px;" />
			</li>
            <li>
				<label style="width:60px;">做货状态：</label>
				<select class="combox" name="purchase_status">
                <option value="">全部</option>

                <option value="kong" <?php if ($this->_tpl_vars['purchase_status'] == 'kong'): ?> selected <?php endif; ?> >无</option>

              	<option value="1" <?php if ($this->_tpl_vars['purchase_status'] == 1): ?> selected <?php endif; ?> >不可做货</option>

                <option value="2" <?php if ($this->_tpl_vars['purchase_status'] == 2): ?> selected <?php endif; ?> >可做货</option>

                <option value="3" <?php if ($this->_tpl_vars['purchase_status'] == 3): ?> selected <?php endif; ?> >已做货</option>

                </select>
			</li>
            <li>
				<label style="width:60px;">做货时间：</label>
				<input type="text" name="factory_goods_time_start" value="<?php echo $this->_tpl_vars['factory_goods_time_start']; ?>
" class="date" readonly style="width:70px;" />-<input type="text"  value="<?php echo $this->_tpl_vars['factory_goods_time_end']; ?>
" name="factory_goods_time_end" class="date" readonly style="width:70px;" />
			</li>
            
            <li>
				<label style="width:60px;">订单状态：</label>
				<select class="combox" name="outgoing_status">
                <option value="">全部</option>
              	<option value="1" <?php if ($this->_tpl_vars['outgoing_status'] == 1): ?> selected <?php endif; ?> >未报价</option>
                <option value="2" <?php if ($this->_tpl_vars['outgoing_status'] == 2): ?> selected <?php endif; ?> >报价单</option>
                <option value="3" <?php if ($this->_tpl_vars['outgoing_status'] == 3): ?> selected <?php endif; ?> >订单</option>
                <option value="5" <?php if ($this->_tpl_vars['outgoing_status'] == 5): ?> selected <?php endif; ?> >外发未发货</option>
                <option value="6" <?php if ($this->_tpl_vars['outgoing_status'] == 6): ?> selected <?php endif; ?> >工厂已发货</option>
                <option value="7" <?php if ($this->_tpl_vars['outgoing_status'] == 7): ?> selected <?php endif; ?> >公司已到货</option>
                <option value="8" <?php if ($this->_tpl_vars['outgoing_status'] == 8): ?> selected <?php endif; ?> >公司已发货</option>

                </select>
			</li>
            
            <li>
				<label style="width:80px;">供应商代码：</label>
				<input type="text" name="supplier_code" value="<?php echo $this->_tpl_vars['supplier_code']; ?>
" style="width:60px;" />
			</li>
            <li>
				<label style="width:60px;">销售成本：</label>
				<input type="text" name="factory_out_cost" value="<?php echo $this->_tpl_vars['factory_out_cost']; ?>
" style="width:70px;" />
			</li>
            <li>
				<label style="width:60px; text-align:right;">数量总计：</label>
				<label style="width:70px;"><?php echo $this->_tpl_vars['zong_number']; ?>
</label>
			</li>
            
            <li>
				<label style="width:auto; text-align:right;">销售成本总价：</label>
				<label style="width:70px;"><?php echo $this->_tpl_vars['zong_factory_out_cost']; ?>
</label>
			</li>
            
            <li style="float:right;"><div class="buttonActive" style="float:right;"><div style="float:right;" class="buttonContent"><button type="submit">检索</button></div></div></li>
		</ul>
	</div>
	</form>
</div>
<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
        <?php if ($this->_tpl_vars['group_id'] == '5' || $this->_tpl_vars['user_name'] == '林秀月'): ?>
        	<!--<li class="line">line</li>
			<li><a class="add" id="generate_outgoing_inquiry_sheet" href="#" ><span>生成外发询价单</span></a></li>
            <li class="line">line</li>
            <li><a class="add" id="generate_outgoing_do_invoice" href="#" ><span>生成外发做货单</span></a></li>
			<li class="line">line</li>
            <li><a href="#" id="procure_outgoing" class="edit"><span>标记已做货</span></a></li>
            <li class="line">line</li>
            <li><a href="#" id="add_note" class="edit"><span>标记免成本CHTC</span></a></li>-->
         <?php endif; ?>
		</ul>
	</div>
<script type="text/javascript">
function aa1(){
	var str=document.getElementsByName("procure_outgoing_ids[]");
	var objarray=str.length;
	var chestr="";
	for (i=0;i<objarray;i++)
	{
		if(str[i].checked == true)
		{
		 chestr+=str[i].value+",";
		}
	}
	
	$.ajax({
		   url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/procure_outgoing/ceshi',//通过Ajax取数据的目标页面
		   data:{'chestr':chestr},
		   type:'get',//方法，还可以是"post"
		   dataType:'json',//数据类型，还有其它的，详见jQuery手册
		   success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
		   {
                
 
		   }
	});
}
</script>    
	<table class="table" width="100%" layoutH="138">
		<thead>
			<tr>
            	<th width="1%"><input type="checkbox" group="procure_outgoing_ids[]" class="checkboxCtrl"></th>
                <th width="2%">编号</th>
                <th width="7%">缩略图</th>
                <th width="5%">询价时间</th>
                <th width="4%">业务员</th>
                <th width="4%">客户代码</th>

                <th width="5%">报关品类</th>

                <th width="8%">报价编号</th>
                <th width="7%">订单号</th>
 <!--               <th width="8%">是否CHTC标记</th>-->
                <th width="3%">数量</th>
                <th width="7%">报价名称</th>
                <?php if ($this->_tpl_vars['group_id'] != '53' || $this->_tpl_vars['group_id'] == '68'): ?>

                <th width="4%">采购成本单价</th>

                <?php endif; ?>
                <th width="5%">销售成本单价</th>
                <th width="4%">版费成本</th>
                <?php if ($this->_tpl_vars['group_id'] != '53' || $this->_tpl_vars['group_id'] == '68'): ?>
                <th width="5%">采购成本</th>
                <?php endif; ?>
                <th width="4%">供应商代码</th>
                <th width="6%">付款时间</th>
                <th width="6%">做货时间</th>
                <th width="4%">做货状态</th>
                <th width="4%">订单状态</th>
                <th width="6%">备注</th>
                <th width="4%">公司归属</th>
                <th width="3%">操作</th>
			</tr>
		</thead>
		<tbody>
        <?php if ($this->_tpl_vars['procure_outgoing']): ?>
			 <?php $_from = $this->_tpl_vars['procure_outgoing']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['dis']):
?>
              <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
">
                <td><input name="procure_outgoing_ids[]" value="<?php echo $this->_tpl_vars['dis']['id']; ?>
" type="checkbox"></td>
                <td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
                <td><img src="<?php echo $this->_tpl_vars['dis']['image']; ?>
" width="100px" height="100px" /></td>
 				<td><?php echo $this->_tpl_vars['dis']['q_time']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['saleman_name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['customer_code']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['order_category']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['quotation_code']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['order_number']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['number']; ?>
</td>
                <td style="word-break:break-all;width:200px; overflow:auto; "><?php echo $this->_tpl_vars['dis']['design_name']; ?>
</td>
                <?php if ($this->_tpl_vars['group_id'] != '53' || $this->_tpl_vars['group_id'] == '68'): ?>

                <td><?php echo $this->_tpl_vars['dis']['material_cost']; ?>
</td>

                <?php endif; ?>
                <td><?php echo $this->_tpl_vars['dis']['factory_price']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['version_costs']; ?>
</td>
                <!-- 采购成本 -->
                <?php if ($this->_tpl_vars['group_id'] != '53' || $this->_tpl_vars['group_id'] == '68'): ?>
                <td><?php echo $this->_tpl_vars['dis']['factory_out_cost']; ?>
</td>
                <?php endif; ?>
                <td><?php echo $this->_tpl_vars['dis']['supplier_code']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['new_time']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['factory_goods_time']; ?>
</td>
                <td width="40">
                <?php if ($this->_tpl_vars['dis']['purchase_status'] == ''): ?>
                无
                <?php elseif ($this->_tpl_vars['dis']['purchase_status'] == '1'): ?>
                不可做货
                <?php elseif ($this->_tpl_vars['dis']['purchase_status'] == '2'): ?>
                可做货
                <?php elseif ($this->_tpl_vars['dis']['purchase_status'] == '3'): ?>
                已做货
                <?php endif; ?>
                </td>
                <td width="40">
                <?php if ($this->_tpl_vars['dis']['outgoing_status'] == '1'): ?>
                未报价
                <?php elseif ($this->_tpl_vars['dis']['outgoing_status'] == '2'): ?>
                报价单
                <?php elseif ($this->_tpl_vars['dis']['outgoing_status'] == '3'): ?>
                订单
                <?php elseif ($this->_tpl_vars['dis']['outgoing_status'] == '5'): ?>
                外发未发货
                <?php elseif ($this->_tpl_vars['dis']['outgoing_status'] == '6'): ?>
                工厂已发货
                <?php elseif ($this->_tpl_vars['dis']['outgoing_status'] == '7'): ?>
                公司已到货
                <?php elseif ($this->_tpl_vars['dis']['outgoing_status'] == '8'): ?>
                公司已发货
                <?php endif; ?>
                </td>
                <input type="hidden" id="purchase_status<?php echo $this->_tpl_vars['dis']['id']; ?>
" value="<?php echo $this->_tpl_vars['dis']['export_status']; ?>
" />
                <td>
                <!--<div id="note_a_<?php echo $this->_tpl_vars['dis']['id']; ?>
" > 
                <a onclick="return click_note_a('<?php echo $this->_tpl_vars['dis']['id']; ?>
')" style="cursor:pointer;"><?php echo $this->_tpl_vars['dis']['note']; ?>
</a>
                </div>
                <div id="note_input_<?php echo $this->_tpl_vars['dis']['id']; ?>
" style="display:none;">
                	<textarea style="width:100px;" id="note_val_<?php echo $this->_tpl_vars['dis']['id']; ?>
"><?php echo $this->_tpl_vars['dis']['note']; ?>
</textarea>
                    <a style="cursor:pointer;" onclick="return submit_change_note('<?php echo $this->_tpl_vars['dis']['id']; ?>
')">确定</a>
                </div>-->
                <?php echo $this->_tpl_vars['dis']['remark']; ?>

                </td>
                <td><?php echo $this->_tpl_vars['dis']['gongsi']; ?>
</td>
                <td><a title="编辑" target="navTab" rel="stock_manage_edit" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/procure_outgoing/edit-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
-all-1.html" class="btnEdit">编辑</a>
                <?php if ($this->_tpl_vars['dis']['purchase_status'] == '3'): ?>   
                 <?php if ($this->_tpl_vars['group_id'] == '5' || $this->_tpl_vars['group_id'] == '50'): ?>             
                    <a title="确认收货" target="dialog" rel="confirm_goods" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/procure_outgoing/confirm_goods-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" class="btnAdd">确认收货</a>
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
</div>
<script type="text/javascript">


//备注显示
    function click_note_a(id){
		$('#note_a_' + id).css('display','none');
		$('#note_input_' + id).css('display','block');
    }
	
	//备注修改提交
	function submit_change_note(id){
		
		var note_val	=$("#note_val_"+id).val();
		if(note_val!=''){
			$.ajax({
					url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/procure_outgoing/update_note',//通过Ajax取数据的目标页面
					data:{"note_val":note_val,"id":id},
					type:'post',//方法，还可以是"post"
					dataType:'text',//数据类型，还有其它的，详见jQuery手册
					success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
					{
				
						 if(locals==1){
							 alert("修改成功");
							 $('#note_a_' + id).css('display','block');
							 $('#note_input_' + id).css('display','none');
							 document.getElementById("note_a_"+id).innerHTML="<a  onClick='return click_note_a(\""+id+"\" )' style=cursor:pointer;>"+note_val+"</a>"
						 }else{
							 alert("修改失败");
							 $('#note_input_' + id).css('display','none');
							 $('#note_a_' + id).css('display','block');
							 document.getElementById("note_a_"+id).innerHTML="<a  onClick='return click_note_a(\""+id+"\" )' style=cursor:pointer;>"+note_val+"</a>"
						 }
						
					}
		   });
			
		}
	}



$(document).ready(function()
{	
    $("#generate_outgoing_inquiry_sheet").click(function(){
		var check_arr = '';
		$("input[name='procure_outgoing_ids[]']:checkbox:checked").each(function(){ //由于复选框一般选中的是多个,所以可以循环输出
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
				alert('只能选择一条信息！');
			}else{		
				window.open('<?php echo $this->_tpl_vars['__ROOT__']; ?>
/procure_outgoing/generate_outgoing_inquiry_sheet-'+p);
			}
		}	
	});
	
    $("#generate_outgoing_do_invoice").click(function(){
		var check_arr = '';
		$("input[name='procure_outgoing_ids[]']:checkbox:checked").each(function(){ //由于复选框一般选中的是多个,所以可以循环输出
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
				alert('只能选择一条信息！');
			}else{		
				window.open('<?php echo $this->_tpl_vars['__ROOT__']; ?>
/procure_outgoing/generate_outgoing_do_invoice-'+p);
			}
		}	
	});	

	$("#procure_outgoing").click(function (){
			var check_arr = '';
			var purchase_status = '';
			$("input[name='procure_outgoing_ids[]']:checkbox:checked").each(function(){ //由于复选框一般选中的是多个,所以可以循环输出
				if(check_arr == ''){
					check_arr += $(this).val();
					purchase_status += $("#purchase_status" + $(this).val()).val();
				}else{
					check_arr += '|'+$(this).val();
					purchase_status += '|'+$("#purchase_status" + $(this).val()).val();
				}
			});					

			purchase_status=purchase_status.split("|");
			
			if(purchase_status!=""){
				for(var i=0;i<purchase_status.length;i++){
	
					if(purchase_status[i]=='2'){
						
					}else{
						var a = '1';
						alert("必须未做货才可以标记！");break;
					}
				}
			}

			var p = 'ids-'+check_arr+'.html';

			if(check_arr ==''){
				alert('必须选择信息！');
			}else{
				if(!a){
					if(window.confirm('是否标记为已做货？')){
							$.ajax({
								url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/procure_outgoing/procure_outgoing_status-'+p,//通过Ajax取数据的目标页面
								data:p,
								type:'get',//方法，还可以是"post"
								dataType:'text',//数据类型，还有其它的，详见jQuery手册
								success:function(locals)//成功后执行的语句，这里是一个函数，“locals”是返回的数据
								{
									alert("成功！请手动刷新页面！");												
								}								
								
							});
					}else{
						return false;
					}			   	
				}			
			}
		});	
		
		$("#add_note").click(function (){
			var check_arr = '';
			var purchase_status = '';
			$("input[name='procure_outgoing_ids[]']:checkbox:checked").each(function(){ //由于复选框一般选中的是多个,所以可以循环输出
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
				if(window.confirm('是否标记免成本CHTC？')){
						$.ajax({
							url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/procure_outgoing/act_note-'+p,//通过Ajax取数据的目标页面
							data:p,
							type:'get',//方法，还可以是"post"
							dataType:'text',//数据类型，还有其它的，详见jQuery手册
							success:function(locals)//成功后执行的语句，这里是一个函数，“locals”是返回的数据
							{
								alert("成功！请手动刷新页面！");												
							}								
							
						});
				}else{
					return false;
				}			   				
			}
		});			
		
			
});
</script>