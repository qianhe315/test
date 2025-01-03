<?php /* Smarty version 2.6.22, created on 2023-02-14 10:14:15
         compiled from customer_order_information/order_delivery.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/customer_order_information/index">
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
<div class="pageContent" layoutH="0">

 <form rel="pagerForm" onSubmit="return navTabSearch(this);" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/customer_order_information/order_delivery" method="get" id="order_number_submit">
                <label style="width:70px;">&nbsp;&nbsp;&nbsp;&nbsp;<B>客户代码：</B></label>
				<input type="text" name="customer_code" id="customer_code"style="width:100px;" value="<?php echo $this->_tpl_vars['customer_code']; ?>
" class="required"/> 
                <button type="button" id="submit_customer_code">确定</button>
                <input type="hidden" name="order_id" id="order_id" value="<?php echo $this->_tpl_vars['order_id']; ?>
" />
<br><br>
<div style="width:15%;">
				<label style="width:70px;">&nbsp;&nbsp;&nbsp;&nbsp;<B>订单号：</B></label>
</div>
<div style="width:40%; overflow-x:hidden;">
	<?php if ($this->_tpl_vars['order_2']): ?>
     <?php $_from = $this->_tpl_vars['order_2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['dis']):
?>
       <div style="float:left; width:120px; height:30px; margin-bottom:5px; margin-right:10px; margin-left:10px;">
       <?php if ($this->_tpl_vars['dis']['mark'] != ""): ?>
            <input name="group_ids_order[]" style="margin-top:11%; float:left;" value="<?php echo $this->_tpl_vars['dis']['id']; ?>
" type="checkbox" checked="checked" ><br><?php echo $this->_tpl_vars['dis']['order_number']; ?>

       <?php else: ?>
           <input name="group_ids_order[]" style="margin-top:11%; float:left;" value="<?php echo $this->_tpl_vars['dis']['id']; ?>
" type="checkbox"><br><?php echo $this->_tpl_vars['dis']['order_number']; ?>

       <?php endif; ?>
        </div>
    <?php endforeach; endif; unset($_from); ?>
   		<div style="float:left; width:100%;margin-left:10px; margin-bottom:0px;"><input type="checkbox" group="group_ids_order[]" class="checkboxCtrl">是否全选</div>
    <a class="add" href="#" id="image_information" style="float:left; width:100%; margin-top:10px; margin-left:15px; margin-bottom:10px;" ><button>确定</button></a>  
<?php endif; ?>
</div>
 <br> <br>
<div style="width:15%;">
				<label style="width:70px;">&nbsp;&nbsp;&nbsp;&nbsp;<B>订单：</B></label>
</div>
<br>
<div style="width:60%; overflow-x:hidden;">
<?php if ($this->_tpl_vars['orders']): ?>
	 <?php $_from = $this->_tpl_vars['orders']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k1'] => $this->_tpl_vars['di']):
?>
               <div style="float:left; width:150px; height:130px; margin-bottom:10px; margin-right:10px; margin-left:10px;">
                  <?php if ($this->_tpl_vars['di']['image'] != ""): ?>
                <a style="float:left;" href="#"><img src="<?php echo $this->_tpl_vars['di']['image']; ?>
" width="120px" height="100px" ></a>
                <input type="text" value="<?php echo $this->_tpl_vars['di']['name']; ?>
" style="width:120px;" readonly/>
               <?php endif; ?>
               </div>
     <?php endforeach; endif; unset($_from); ?>
       
<?php endif; ?>
</div>
<!--<?php if ($this->_tpl_vars['count'] <= 10 && $this->_tpl_vars['count'] != ""): ?>
<br><br><br><br><br><br><br><br><br><br><br><br>
<?php elseif ($this->_tpl_vars['count'] <= 20 && $this->_tpl_vars['count'] != ""): ?>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php elseif ($this->_tpl_vars['count'] <= 30 && $this->_tpl_vars['count'] != ""): ?>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php endif; ?>-->
</form>
<form method="post" id="submit_all_information" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/customer_order_information/submit_all_information" class="pageForm" onsubmit="return validateCallback(this, navTabAjaxDone)">
 <div class="pageFormContent" style="overflow:-x:hidden;">
 <input type="hidden" name="order_id_1" id="order_id_1" value="<?php echo $this->_tpl_vars['order_id_1']; ?>
" />
 <input type="hidden" name="customer_code_1" id="customer_code_1" value="<?php echo $this->_tpl_vars['customer_code_1']; ?>
" />
 <div class="unit">
				<label style="margin-top:-5px;"><B>其他货品：</B></label>

<?php if ($this->_tpl_vars['other_shipping_goods']): ?>
     <?php $_from = $this->_tpl_vars['other_shipping_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['da']):
?>
        <div style="float:left; width:140px; height:40px; margin-bottom:-15px; margin-left:25px;">
           <input name="group_list_ids[]" id="other_id" style="margin-top:0%; float:left;" value="<?php echo $this->_tpl_vars['da']['id']; ?>
" type="checkbox"><?php echo $this->_tpl_vars['da']['name']; ?>

      </div>
    <?php endforeach; endif; unset($_from); ?>
    <br>
<?php endif; ?>
</div>
<div class="divider">divider</div>  
<div class="unit">
            <label>发货时间：</label>
            <input type="text" name="send_time" datefmt="yyyy-MM-dd" id="quote_time_new" style="width:100px" value="<?php echo $this->_tpl_vars['date']; ?>
" class="date textInput readonly valid combox required" readonly="true" />
            <br> <br> <br>
            <label >快递公司：</label>
		    <select class="combox" name="shippingcompany" onchange="ups_select()" id="ups_select1">
               
                <?php $_from = $this->_tpl_vars['shippingcompany']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['du']):
?>
                <option value="<?php echo $this->_tpl_vars['du']['shippingcompany_name']; ?>
" <?php if ($this->_tpl_vars['du']['id'] == $this->_tpl_vars['shipping_method']): ?> selected <?php endif; ?> > <?php echo $this->_tpl_vars['du']['shippingcompany_name']; ?>
 </option>
                <?php endforeach; endif; unset($_from); ?>
            </select>
            <!--<div id="baoxian_id" style="display:none;">
            <br> <br> <br>
            <label >是否选择保险：</label>
                 <input type="checkbox" name="baoxian" value="1" />
            </div>-->
            <!--<div id="ups_y" style="display:none;">
            <br> 
            <label >服务类型：</label>
		    <select class="combox" name="fuwu">
                <option value="65" selected="selected">ups express saver</option>
                <option value="54" >ups express plus</option>
                <option value="07" >ups express</option>
                <option value="08" >ups expedited</option>
                <option value="96" >ups worldwide express freight</option>
            </select>
            </div>-->
            <!--<div id=produtction_select>
            <br> <br> <br>
             <label >商品名称下拉：</label>
		    <select class="combox" name="production_name">
             <option value="1" <?php if ($this->_tpl_vars['du']['shippingcompany_name'] == 'UPS'): ?> selected <?php endif; ?> >Imitation Semi-precious stones</option>
       		 <option value="2" <?php if ($this->_tpl_vars['du']['shippingcompany_name'] == 'UPS'): ?> selected <?php endif; ?> >Hot Fix Patch</option>
             <option value="3" <?php if ($this->_tpl_vars['du']['shippingcompany_name'] == 'DHL'): ?> selected <?php endif; ?> >Fantasy Glass rhinestones</option>
             <option value="4" <?php if ($this->_tpl_vars['du']['shippingcompany_name'] == 'DHL'): ?> selected <?php endif; ?> >Imitation stones</option>
             <option value="5" <?php if ($this->_tpl_vars['du']['shippingcompany_name'] == 'UPS'): ?> selected <?php endif; ?> >Gymnastics leotard</option>
             <option value="6" <?php if ($this->_tpl_vars['du']['shippingcompany_name'] == 'UPS'): ?> selected <?php endif; ?> >100% cotton T-shirt</option>
             <option value="7" <?php if ($this->_tpl_vars['du']['shippingcompany_name'] == 'DHL'): ?> selected <?php endif; ?> >Elastic webbing</option>
             <option value="8" <?php if ($this->_tpl_vars['du']['shippingcompany_name'] == 'DHL'): ?> selected <?php endif; ?> >Hot-pressing Strass</option>
             <option value="9" <?php if ($this->_tpl_vars['du']['shippingcompany_name'] == 'DHL'): ?> selected <?php endif; ?> >glass pearl stones</option>
             <option value="10" <?php if ($this->_tpl_vars['du']['shippingcompany_name'] == 'UPS'): ?> selected <?php endif; ?> >vinyl heat transfer</option>
             <option value="11" <?php if ($this->_tpl_vars['du']['shippingcompany_name'] == 'UPS'): ?> selected <?php endif; ?> >logos inSequin</option>
             
               
            </select>
            </div>-->
            <!--<div id="domestic_amount" style="display:none;">
            <br> <br> <br>  
             <label>国内报关额：</label>
             
            <input type="text" name="domestic" id="domestic" style="width:100px" value="<?php echo $this->_tpl_vars['total_1']; ?>
"  />
            </div>-->
            <div id="abroad_amount">
            <br> <br> <br>
             <!--<label>国外报关额：</label>-->
            <!--<input type="text" name="abroad" id="abroad" style="width:100px" value="<?php echo $this->_tpl_vars['total_1']; ?>
"  />-->
            <label>低值报关：</label>
            <div style="float:left; margin-right:10px;"><input type="radio" name="dizhi" value="2" style="cursor:pointer;" checked="checked" /> 否 <input type="radio" name="dizhi" value="1" style="cursor:pointer;" />是</div>
            <font style="float:left; color:#F00; line-height:21px;">(请确认是否需报低值)</font>
            
            </div>
            <br><br><br>
            <label>备注：</label>
            <textarea id="sale_note" name="sale_note" style="width:180px; height:50px;"/>
            
</div>
<div class="divider">divider</div>
<div class="unit">
      	<label><b>客户常用地址：</b></label>
        <select class="combox required" id="use_address" name="use_address" onchange="gummed_paper()"  >
        <option value="">请选择</option>
        <?php $_from = $this->_tpl_vars['clients_receiving']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sa']):
?> <option value="<?php echo $this->_tpl_vars['sa']['id']; ?>
"<?php if ($this->_tpl_vars['sa']['id'] == $this->_tpl_vars['use_address']): ?> selected <?php endif; ?> ><?php echo $this->_tpl_vars['sa']['name']; ?>

              </option>
        <?php endforeach; endif; unset($_from); ?>
        </select>
        <br> <br><br>
        <div id="cstown_order_id" style="display:none;"></div>
     	<label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;客户名称：</label>
        <input type="text" size="25" name="customer_name" id="customer_name" value="<?php echo $this->_tpl_vars['customer_name']; ?>
" class="required"  />
        <br> <br><br>
     	<label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;公司：</label>
        <input type="text" size="25" name="company" id="company" value="<?php echo $this->_tpl_vars['company']; ?>
" class="required"  />
        <br> <br><br>
     	<label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;国家：</label>
        
        <select class="combox" name="country" id="country">
            <option value="">全部</option>
            <?php $_from = $this->_tpl_vars['area']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['du']):
?>
            <option value="<?php echo $this->_tpl_vars['du']['area_id']; ?>
" <?php if ($this->_tpl_vars['du']['area_name'] == $this->_tpl_vars['country']): ?> selected <?php endif; ?>><?php echo $this->_tpl_vars['du']['area_name']; ?>
 </option>
            <?php endforeach; endif; unset($_from); ?>
        </select>
       <!-- <input type="text" size="25" name="country" id="country" value="<?php echo $this->_tpl_vars['country']; ?>
" class="required"  />-->
        <br> <br><br>
        <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;州：</label>
        <input type="text" size="25" name="state" id="state" value="<?php echo $this->_tpl_vars['state']; ?>
" class="required"  />
        <br> <br><br>
        <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;州代码：</label>
        <input type="text" size="25" name="state_code" id="state_code" value="<?php echo $this->_tpl_vars['state_code']; ?>
" class="required"  />
        <input type="text" size="25" readonly="readonly" id="postal_code2" value="" style="margin-left:5px; display:none;"   />
        <br> <br><br>
     	<label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;城市：</label>
        <input type="text" size="25" name="city" id="city" value="<?php echo $this->_tpl_vars['city']; ?>
" class="required"  />
        <input type="text" size="25" readonly="readonly" id="postal_code1" value=""  style="margin-left:5px; display:none;"  />
         <br> <br><br>
     	<label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;地址：</label>
       <textarea id="address" name="address" style="width:180px; height:50px;" class="required" value="<?php echo $this->_tpl_vars['address']; ?>
"><?php echo $this->_tpl_vars['address']; ?>
</textarea>
       <br> <br><br><br><br><br>
     	<label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;邮编：</label>
        <input type="text" size="25" name="postal_code" id="postal_code" value="<?php echo $this->_tpl_vars['postal_code']; ?>
" class="required"  /> 
        <button type="button" id="ups" style="cursor:pointer; height:22px; margin-left:5px; display:none;" >UPS 邮编校验</button>
        
        
<!--        <input type="text" size="25" readonly="readonly" id="postal_code3" value=""   />
        <input type="text" size="25" readonly="readonly" id="postal_code4" value=""   />-->
        
        <br> <br><br>
     	<label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;电话：</label>
        <input type="text" size="25" name="phone" id="phone" value="<?php echo $this->_tpl_vars['phone']; ?>
" class="required"  />
         <br> <br><br>
         <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;到付账号：</label>
        <input type="text" size="25" name="pay_number" id="pay_number" value="<?php echo $this->_tpl_vars['pay_number']; ?>
" />
        <br> <br><br>
     	<label style="margin-top:-3px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;是否保存：</label>

       
            
                <div style="float:left; width:80px;; height:40px; margin-bottom:-15px; margin-left:-3px;">
                   <input type="checkbox" id="save" name="groups[]" value="1">是 
                </div>
                <label>名称：</label>
                <input type="text" size="25" name="name" id="name" value=""  style="margin-left:-75px;"/>
                <br>
        
</div>
<!--<div class="divider">divider</div>
<div class="unit">
            <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;是否报关：</label>
            
            <input type="radio" id="shifoubaoguan_no"  name="shifoubaoguan1"   value="1" onClick="doclick_1(this.checked)">否
            <input type="radio" id="shifoubaoguan_yes" name="shifoubaoguan1" value="2" checked="checked" onClick="doclick(this.checked)">是
            
            
            
  </div>-->
            <br>
            <div id="baoguan_information" style="display:block;">
            <label>目的地（中文）：</label>
            <input type="text" size="25" name="destination" id="destination" value="美国" />
            </div>
            
            
            <input type="hidden" size="25" name="total" id="total" value="<?php echo $this->_tpl_vars['total']; ?>
" class="required" readonly="readonly" />
            
</div>
<span id="error" class="error" style="display:none;"></span>
 </form>

                    <div class="buttonActive" > 
                      <div class="buttonContent"  style="margin-right:10px;">
                       <button type="button" id="submit_information" >确定</button>
                      </div>
                    </div>
            
                    <div class="buttonActive">
                        <div class="buttonContent">
                          <button type="button" class="close">取消</button>
                        </div>
                    </div>
           
</div>



<script type="text/javascript">
		function ups_select(){
			var ups_select1 = $("#ups_select1").val();
			if(ups_select1=="UPS")
			{
				 $('#postal_code1').css("display","block");
				 $('#postal_code2').css("display","block");
				 $('#ups').css("display","block");
				 $('#ups_y').css("display","block");
				 $('#produtction_select').css("display","block");
				 $('#domestic_amount').css("display","block");
				 $('#abroad_amount').css("display","block");
				 $('#baoxian_id').css("display","block");
				 
			}else if(ups_select1 == 'DHL'){
				 $('#postal_code1').css("display","none");
				 
				 $('#postal_code2').css("display","none");
				 $('#ups').css("display","none");
				 $('#ups_y').css("display","none");
				 $('#produtction_select').css("display","block");
				 $('#domestic_amount').css("display","none");
				 $('#abroad_amount').css("display","block");
				 $('#baoxian_id').css("display","none");
			}else if(ups_select1 == 'Fedex'){
				$('#postal_code1').css("display","none");
				 
				 $('#postal_code2').css("display","none");
				 $('#ups').css("display","none");
				 $('#ups_y').css("display","none");
				 $('#produtction_select').css("display","none");
				 $('#domestic_amount').css("display","none");
				 $('#abroad_amount').css("display","none");
				 $('#baoxian_id').css("display","none");
			}
		}

$(document).ready(function()  
{       
		ups_select();
		gummed_paper();
		
		$("#ups").click(function (){
			
			 postal_code = $("#postal_code").val();
			
			 if(postal_code!=""){
			
				 $.ajax({
					  url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/customer_order_information/city',//通过Ajax取数据的目标页面
					  data:{'postal_code':postal_code},	
					  type:'post',//方法，还可以是"post"
					  dataType:'text',//数据类型，还有其它的，详见jQuery手册
					  success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
					  {   
					      locals=locals.split("|");
						  $("#postal_code1").val(locals[0]);
						  $("#postal_code2").val(locals[1]);
					  }
				 });
			 }else{
				  alert("验证邮编不能为空！");
			 }
		});
     

        $("#submit_customer_code").click(function (){
	       
		    $("#order_id").val("");
			$("#order_number_submit").submit();
		});
		
	 $("#image_information").click(function (){
		//var touid = $("#newtouid").val();
			var check_arr = '';
			$("input[name='group_ids_order[]']:checkbox:checked").each(function(){ //由于复选框一般选中的是多个,所以可以循环输出
				if(check_arr == ''){
					check_arr += $(this).val();
				}else{
					check_arr += ','+$(this).val();
				}
			});
			if(check_arr ==''){
				alert('请选择订单号');
			}else{
				$("#order_id").val(','+check_arr);
				$("#order_id_1").val(','+check_arr);
				 var order_id = $("#order_id").val();
				 $.ajax({
					  url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/customer_order_information/check_currency',//通过Ajax取数据的目标页面
					  data:{'order_id':order_id},	
					  type:'post',//方法，还可以是"post"
					  dataType:'text',//数据类型，还有其它的，详见jQuery手册
					  success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
					  {
							if(locals=1){
								$("#order_number_submit").submit();
							}else{
								alert("所选订单货币不统一")
							}
					  }
				  });
				
			}
		});	
		$("#submit_information").click(function () { 
		        shipping_company=$("#ups_select1").val();
		        customer_code = $("#customer_code").val();
				order_id = $("#order_id").val();
				var other_id = '';
			    $("input[name='group_list_ids[]']:checkbox:checked").each(function(){ //由于复选框一般选中的是多个,所以可以循环输出
						if(other_id == ''){
							other_id += $(this).val();
						}else{
							other_id += ','+$(this).val();
						}
			   });
			   customer_name=$("#customer_name").val();
			   company=$("#company").val();
			   country=$("#country").val();
			   city = $("#city").val();
			   city = city.replace(/[ ]/g,"");
			   address=$("#address").val();
			   phone=$("#phone").val();
			   postal_code=$("#postal_code").val();
			   state_code=$("#state_code").val();
			   state_code = state_code.replace(/[ ]/g,"");
			   name=$("#name").val();
			   shifoubaoguan_yes=$("#shifoubaoguan_yes").val();
			   destination=$("#destination").val();
			   
			   domestic=$("#domestic").val();
			   abroad=$("#abroad").val();
			   var c = /^\d+(?=\.{0,1}\d+$|$)/ 
		       var b=c.test(domestic);
			   var d=c.test(abroad);
			   
			   var reg= /^[A-Za-z]+$/;
			   
			   var save_id='';
			     $("input[name='groups[]']:checkbox:checked").each(function(){ //由于复选框一般选中的是多个,所以可以循环输出
						if(save_id == ''){
							save_id += $(this).val();
						}else{
							save_id += ','+$(this).val();
						}
			   });
			  if(customer_code==""){
				  
				  $('#error').css("display","block");
			      $('#error').html('请填写客户代码');
			  }else if(order_id==""){
				   
				  $('#error').css("display","block");
			      $('#error').html('请选择订单号');
			  }else if(customer_name==""){
				  
				  $('#error').css("display","block");
			      $('#error').html('请填写客户名');
			  }else if(company=="" || company.length>'35'){
				   
				  $('#error').css("display","block");
			      $('#error').html('请填写公司或者公司长度不能超过35个字符');
			  }else if(country==""){
				 
				  $('#error').css("display","block");
			      $('#error').html('请填写国家');
			  }else if(city==""){
				  
				  $('#error').css("display","block");
			      $('#error').html('请填写城市');
			  }else if(address==""){
				 
				  $('#error').css("display","block");
			      $('#error').html('请填写地址');
			  }else if(state_code.length!='2' && country=='United States' && shipping_company=='UPS'){
				 
				  $('#error').css("display","block");
			      $('#error').html('州代码必须是两位');
			  }else if(phone=="" && phone.length>'15' && reg.test(phone)){
				  $('#error').css("display","block");
			      $('#error').html('请填写电话,或电话不规范');
			  }else if(postal_code=="" && postal_code.length!='5' && country=='United States' && shipping_company=='UPS'){
				  
				  $('#error').css("display","block");
			      $('#error').html('请填写邮编或者邮编不是5位数字');
			  }else if(save_id!="" && name==""){
				  
				  $('#error').css("display","block");
			      $('#error').html('请填写名称');

			  }else if(shifoubaoguan_yes!=""){
				  
				  
				  if(destination==""){
					  
					  $('#error').css("display","block");
			          $('#error').html('请填写目的地');
				  }else{
					 
					   customer_code=$("#customer_code").val();
	                   $("#customer_code_1").val(customer_code);
					   order_id=$("#order_id").val();
	                   $("#order_id_1").val(order_id);
					  
					   postal_code = $("#postal_code").val();
					   
					   if(shipping_company=='UPS'){
						   
						  // if(destination=="美国"){
						   
							   if(postal_code!=""){
							
									 $.ajax({
										  url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/customer_order_information/city',//通过Ajax取数据的目标页面
										  data:{'postal_code':postal_code},	
										  type:'post',//方法，还可以是"post"
										  dataType:'text',//数据类型，还有其它的，详见jQuery手册
										  success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
										  {   
											  locals=locals.split("|");
											  $("#postal_code1").val(locals[0]);
											  $("#postal_code2").val(locals[1]);
											 
											 
											  if(locals[1] == state_code || locals[0] == city){
												  $("#submit_all_information").submit();
											  }else{
												  alert("1州代码和城市不符！");
											  }
											  
										  }
									 });
									 
							   }else{
									 alert("验证邮编不能为空！");
							   }
							 
						   //}else{
							   //$("#submit_all_information").submit();
						  // }
					   
					   }else{
						   $("#submit_all_information").submit();
					   }
					   
					
					/*   if(postal_code!=""){
						
							 $.ajax({
								  url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/customer_order_information/city',//通过Ajax取数据的目标页面
								  data:{'postal_code':postal_code},	
								  type:'post',//方法，还可以是"post"
								  dataType:'text',//数据类型，还有其它的，详见jQuery手册
								  success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
								  {   
									  locals=locals.split("|");
									  $("#postal_code1").val(locals[0]);
									  $("#postal_code2").val(locals[1]);
									 
									 
									  if(locals[1] == state_code){
										  
									  }else{
										  alert("1州代码和城市不符！");
									  }
									  
								  }
							 });
					   }else{
							 alert("验证邮编不能为空！");
					   }*/					  
					  
					   
				  }
			  }else if(shipping_company=='UPS'){
				   
				 $("#submit_value").val(1);
				 customer_code=$("#customer_code").val();
				 $("#customer_code_1").val(customer_code);
				 order_id=$("#order_id").val();
				 $("#order_id_1").val(order_id);
				  postal_code = $("#postal_code").val();
				  
				  if(destination=="美国"){
				  
					 if(postal_code!=""){
					  
						   $.ajax({
								url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/customer_order_information/city',//通过Ajax取数据的目标页面
								data:{'postal_code':postal_code},	
								type:'post',//方法，还可以是"post"
								dataType:'text',//数据类型，还有其它的，详见jQuery手册
								success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
								{   
									locals=locals.split("|");
									$("#postal_code1").val(locals[0]);
									$("#postal_code2").val(locals[1]);
									
									if(locals[1]==state_code || locals[0] == city){
										$("#submit_all_information").submit();
									}else{
										alert("州代码和城市不符！");
									}
									
								}
						   });
					 }else{
						   alert("验证邮编不能为空！");
					 }
					 
				   }else{
					   $("#submit_all_information").submit();
				   }

				  
			  }else if(shipping_company=='DHL'){
				   
				 $("#submit_value").val(1);
				 customer_code=$("#customer_code").val();
				 $("#customer_code_1").val(customer_code);
				 order_id=$("#order_id").val();
				 $("#order_id_1").val(order_id);
				 postal_code = $("#postal_code").val();
				  
				 $("#submit_all_information").submit();

			  }else{
				  $("#submit_value").val(1);
				   customer_code=$("#customer_code").val();
	               $("#customer_code_1").val(customer_code);
				   order_id=$("#order_id").val();
	               $("#order_id_1").val(order_id);
				    postal_code = $("#postal_code").val();
					//if(destination=="美国"){	
					   if(postal_code!=""){
						
							 $.ajax({
								  url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/customer_order_information/city',//通过Ajax取数据的目标页面
								  data:{'postal_code':postal_code},	
								  type:'post',//方法，还可以是"post"
								  dataType:'text',//数据类型，还有其它的，详见jQuery手册
								  success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
								  {   
									  locals=locals.split("|");
									  $("#postal_code1").val(locals[0]);
									  $("#postal_code2").val(locals[1]);
									  
									  if(locals[1]==state_code || locals[0] == city){
										  $("#submit_all_information").submit();
									  }else{
										  alert("州代码和城市不符！");
									  }
									  
								  }
							 });
					  // }else{
							// alert("验证邮编不能为空！");
					  // }
					   
					}else{
					    $("#submit_all_information").submit();
				    }   
					   
			  }
			  
			  				
		});
});
function gummed_paper()
{
	use_address=$("#use_address").val();
	customer_code=$("#customer_code").val();
		$.ajax({
			  url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/customer_order_information/find_information',//通过Ajax取数据的目标页面
			  data:{'use_address':use_address,'customer_code':customer_code},	
			  type:'post',//方法，还可以是"post"
			  dataType:'text',//数据类型，还有其它的，详见jQuery手册
			  success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
			  {  
					locals=locals.split('|');
					$("#customer_name").val(locals[0]);
					$("#company").val(locals[1]);
					$("#country").val(locals[2]);
					$("#city").val(locals[3]);
					$("#address").val(locals[4]);
					$("#postal_code").val(locals[5]);
					$("#phone").val(locals[6]);
					$("#pay_number").val(locals[7]);
					$("#state").val(locals[8]);
					$("#state_code").val(locals[9]);
					var html='';
					
					if(locals[10]>0){
						html='<span id="address_cstown" style="color:red;"><label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>';
						html+='该地址为网站客户下单地址！';
						html+='<br> <br></span>';
						$('#cstown_order_id').before(html);
					}else{
						$('#address_cstown').remove();
					}
			  }
		});
	
}
   
function doclick_1(str)
{
   $("#shifoubaoguan_yes").val("");
   $("#shifoubaoguan_no").val(1);
   $('#baoguan_information').css("display","none");
}
function doclick(str)
{   
    $("#shifoubaoguan_no").val("");
	$("#shifoubaoguan_yes").val(2);
    $('#baoguan_information').css("display","block");

}


</script>