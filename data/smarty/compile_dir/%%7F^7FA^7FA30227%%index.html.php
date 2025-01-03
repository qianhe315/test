<?php /* Smarty version 2.6.22, created on 2024-10-14 11:37:52
         compiled from ups_information/index.html */ ?>
<div id="bg" style="display:none;background-color:#666;position:absolute;z-index:99;left:0;top:0;width:100%;height:100%;opacity:0.5;filter: alpha(opacity=50);-moz-opacity: 0.5;"></div>
<div id="window" style="display:none;position:absolute;width:230px; height:200px;left:50%;height:auto;z-index:100;background-color:#fff;border:5px #00f solid;padding:1px;">
    <font style=" font-size:20px;">你确定执行这个操作吗？</font>
    </br>
    <a id="yes_do" style="font-size:18px; margin-left:10px; margin-top:20px; cursor: pointer;"><button type="button">确定</button></a><a id="no_do" style="font-size:18px; margin-right:10px; margin-top:0px; float:right;cursor: pointer; "><button type="button">取消</button></a>
</div>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/ups/index">
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
/ups/index" method="get">
	<div class="searchBar">
		<ul class="searchContent">
        <?php if ($this->_tpl_vars['yewuyuan'] == '2'): ?>
             
                <li style="width:15%;">
                    <label style="width:60px;">业务员：</label>
                    <select class="combox" name="sale_name">
                    <option value="">全部</option>
                    <?php $_from = $this->_tpl_vars['users']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['du']):
?>
                    <option value="<?php echo $this->_tpl_vars['du']['user_name']; ?>
" <?php if ($this->_tpl_vars['sale_name'] == $this->_tpl_vars['du']['user_name']): ?> selected <?php endif; ?> > <?php echo $this->_tpl_vars['du']['user_name']; ?>
 </option>
                    <?php endforeach; endif; unset($_from); ?>
                    </select>
                    
                </li>
             
             <?php endif; ?>
			<li style="width:15%;">
				<label style="width:60px;">账单日期：</label>
				<input type="text" name="zhangdan_time" class="date textInput readonly valid" datefmt="yyyy-MM" readonly style="width:70px;" value="<?php echo $this->_tpl_vars['zhangdan_time']; ?>
" />
                
			</li>         
           <li style="width:23%;">
				<label style="width:60px;">出口日期：</label>
				<input type="text" name="start_time" class="date" readonly style="width:70px;" value="<?php echo $this->_tpl_vars['start_time']; ?>
" />-<input type="text" name="end_time" class="date" readonly style="width:70px;" value="<?php echo $this->_tpl_vars['end_time']; ?>
" />
                
			</li>
             
            <li style="width:20%;">
				<label style="width:90px;">运单号（长）：</label>
				<input type="text" name="hawb_l" style="width:70px;" value="<?php echo $this->_tpl_vars['hawb_l']; ?>
" />
                
			</li>
            <li style="width:20%;">
				<label style="width:60px;">寄件人：</label>
				<input type="text" name="contact_name" style="width:70px;" value="<?php echo $this->_tpl_vars['contact_name']; ?>
" />
                
			</li>
            <li style="width:15%;">
				<label style="width:60px;">收件人：</label>
				<input type="text" name="cnee_name" style="width:70px;" value="<?php echo $this->_tpl_vars['cnee_name']; ?>
" />
			</li>
            <li style="width:15%;">
				<label style="width:60px;">收件公司：</label>
				<input type="text" name="cnee_company" style="width:70px;" value="<?php echo $this->_tpl_vars['cnee_company']; ?>
" />
			</li>
            <li style="width:20%;">
				<label style="width:60px;">应收费用：</label>
				<input type="text" name="charge" style="width:70px;" value="<?php echo $this->_tpl_vars['charge']; ?>
" />
			</li>
              <li style="width:18%;">
				<label style="width:60px;">处理状态：</label>
				<select class="combox" name="status">
                <option value="">全部</option>
                <option value="0" <?php if ($this->_tpl_vars['status'] == '0'): ?>selected="selected"<?php endif; ?>>未处理</option>
              	<option value="1" <?php if ($this->_tpl_vars['status'] == '1'): ?>selected="selected"<?php endif; ?>>系统处理</option>
                <option value="2" <?php if ($this->_tpl_vars['status'] == '2'): ?>selected="selected"<?php endif; ?>>销售处理</option>
                </select>
			</li>
            <li style="width:18%;">
				<label style="width:60px;">付款总额：</label>
				<input type="text" style="width:70px;" readonly value="<?php echo $this->_tpl_vars['zongjia']; ?>
" />
			</li>
            <li style="float:right;"><div class="buttonActive" style="float:right;"><div style="float:right;" class="buttonContent"><button type="submit">检索</button></div></div></li>
		</ul>
 </div>
	</form>
</div>
<form action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/ups/ups_xls_export" method="post" id="ups_order_export">
<div class="pageContent">
	<div class="panelBar">
    
		<ul class="toolBar">
       <?php if ($this->_tpl_vars['guanliyuan'] == '1'): ?>
		<li><a class="add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/example.xls" id="create_invoice_review"><span>上传模板下载</span></a></li>	
		 <li class="line">line</li> 
		    <li>
	        <form action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/ups/cc" method="post" enctype="multipart/form-data" >
	            
	               <input type="file" size="10"  name="jpg_file"  />
	           
	               <input type="submit" value="上传数据" />
	         
	        </form>
	        </li>
       <?php endif; ?>  
              <li class="line">line</li> 
			<?php if ($this->_tpl_vars['group_id'] == '5' || $this->_tpl_vars['group_id'] == '50' || $this->_tpl_vars['group_id'] == '66'): ?>
  
               <li><a title="标记运单按钮？" href="#" class="edit" id="yundan_ups"><span>标记运单按钮</span></a>
                <select name="userid" style="font-size:13px;" id="newtouid_new_ups">
                	<option value="">业务员</option>
                   <?php $_from = $this->_tpl_vars['user_lists']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['qf']):
?>
                       <option value="<?php echo $this->_tpl_vars['qf']['user_id']; ?>
"><?php echo $this->_tpl_vars['qf']['user_name']; ?>
</option>
                   <?php endforeach; endif; unset($_from); ?>
                </select>
               </li>
          <?php endif; ?>
            <li class="line">line</li>
        <li><a class="icon" href="#" id="ups_ex" ><span>导出EXCEL</span></a></li>         
	        
		</ul>
      
        
	</div>
   <table class="table" width="2800" layoutH="138">
		<thead>
       		
			<tr>
            <th width="2%"><input type="checkbox" group="group_ids_ups[]" class="checkboxCtrl"></th>
                <th width="2%">编号</th>
                <th width="5%">账单日期</th>
                <th width="5%">出口日期</th>
                <th width="4%">处理状态</th>
                <th width="4%">寄件人</th>
                <th width="3%">业务员</th>
               	<th width="9%">货品备注</th>
                <th width="10%">运单号（长）</th>
                <th width="7%">运单号（短）</th>
                <th width="3%">实际重量</th>
                <th width="3%">计费重量</th>
                
                <th width="8%">收件人</th>
                <th width="8%">收件公司</th>
                <th width="4%">收件国家</th>
                <th width="4%">应收费用</th>
                <th width="3%">运费</th>
                <th width="4%">普通折扣</th>
                <th width="4%">运费附加费</th>
                <th width="5%">税金附加费</th>
                <th width="5%">阶梯折扣</th>
                <th width="5%">备注</th>
			</tr>
		</thead>
		<tbody>
        <?php if ($this->_tpl_vars['ups']): ?>
			 <?php $_from = $this->_tpl_vars['ups']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['dis']):
?>
              <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
" >
                <td><input name="group_ids_ups[]" value="<?php echo $this->_tpl_vars['dis']['id']; ?>
" type="checkbox"></td>
                <td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['invoice_date']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['departure_date']; ?>
</td>
                <?php if ($this->_tpl_vars['dis']['status'] == 0): ?>
                <td>未处理</td>
                <?php elseif ($this->_tpl_vars['dis']['status'] == 1): ?>
                <td>系统处理</td>
                <?php elseif ($this->_tpl_vars['dis']['status'] == 2): ?>
                <td>销售处理</td>
                <?php endif; ?>
                <td><?php echo $this->_tpl_vars['dis']['contact_name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['sales_name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['reference_code_2']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['hawb_l']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['hawb_s']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['weight_r']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['weight']; ?>
</td>
                
                <td><?php echo $this->_tpl_vars['dis']['cnee_name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['cnee_company']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['country']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['charge']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['freight']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['usual_discount']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['freight_charges']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['tax_charges']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['ladder_discount']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['note']; ?>
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
	//var check_arr = [];
	$("#yundan_ups").click(function (){
			var touid = $("#newtouid_new_ups").val();
			var check_arr = '';
			$("input[name='group_ids_ups[]']:checkbox:checked").each(function(){ //由于复选框一般选中的是多个,所以可以循环输出
				if(check_arr == ''){
					check_arr += $(this).val();
				}else{
					check_arr += ','+$(this).val();
				}
			});	
			
			var p = 'check_arr-'+check_arr+'-touid-'+touid+'.html';
			
			if(check_arr ==''||touid ==''){
				alert('必须选择，且选择的业务员不能为空!');
			}else{
				$("#bg").css({
					display: "block", height: $(document).height()
				});
				$("#window").css({
					//设置弹出层距离左边的位置
					left: ($("body").width() - $("#window").width()) / 2 - 20 + "px",
					//设置弹出层距离上面的位置
					top: ($(window).height() - $("#window").height()) / 2 + $(window).scrollTop() + "px",
					display: "block"
				});
				//点击关闭按钮的时候，遮罩层关闭
				$("#no_do").click(function () {
					$("#bg,#window").css("display", "none");
				});
				$("#yes_do").click(function () {
					$("#bg,#window").css("display", "none");
					$.ajax({
						url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/ups/change_to-'+p,
						type:'get', 
						dataType:'json',
						data:p,
						success:function(locals){
							alert("手动刷新页面")
						}
					});
				});
				//
				
/*				$("#check_arr").val(check_arr);
				$("#touids").val(touid);
				$("#ctou").submit();*/
			}
			
		});
		
});

$("#ups_ex").click(function (){
		if($("input[type='checkbox']").is(":checked")){
			alert("即将导出选中数据");
			$("#ups_order_export").submit();
		}else{
			alert("请选择导出的数据");
		}
	});
</script>