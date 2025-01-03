<?php /* Smarty version 2.6.22, created on 2015-11-26 13:21:48
         compiled from supplier_management_cn/add.html */ ?>
<div class="pageContent">
  <form method="post" id="supplier_management_new" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, navTabAjaxDone)">
   <input type="hidden" name="supplier_id" id="supplier_id_new" value="<?php echo $this->_tpl_vars['dis']['supplier_id']; ?>
" />
    <div class="pageFormContent" layoutH="58">
      <div class="unit">
      	<label>属性：</label>
        <select class="combox required" id="supplier_attributes_add" name="supplier_attributes" >
        <option value="">请选择</option>
       <?php $_from = $this->_tpl_vars['supplier_attributes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sa']):
?> <option value="<?php echo $this->_tpl_vars['sa']['id']; ?>
"><?php echo $this->_tpl_vars['sa']['name']; ?>

              </option>
              <?php endforeach; endif; unset($_from); ?>
        </select>
     
      </div>
      <span id="supplier_attributes_add_new" class="error" style="display: none; margin-top: -5px;"></span>
      <div class="divider">divider</div>
      <div class="unit">
      	<label>代码：</label>
        <input type="text" size="30" name="supplier_code" id="supplier_code" class="valid combox required" onchange="code()" value=""  />
      </div>
       <span id="supplier_code_result_new" class="error" style="display:none; margin-top:-5px;">不能为空</span>
      
      <div class="divider">divider</div>
       <div class="unit">
      	<label>供应商（公司全称）：</label>
        <input type="text" size="30" name="supplier_company_a" id="supplier_company_a" class="valid combox required" onchange="code1()" value=""  />
      </div>
      <span id="customer_name_error" class="error" style="display:none; margin-top:-5px;">不能为空！</span>
      <div class="divider">divider</div>
       <div class="unit">
      	<label>供应商（简称）：</label>
        <input type="text" size="30" name="supplier_company" class="valid combox required" id="supplier_company" value=""  />
      </div>
      <span id="supplier_company_error" class="error" style="display:none; margin-top:-5px;">不能为空！</span>
      <div class="divider">divider</div>
        <div class="unit">
            <label>地址：</label>
            <input type="text" name="address" id="address" size="30" value="" />
            <span id="area_level_three_result_new" class="error" style="display:none;"></span>
          </div> 
          <div class="divider">divider</div>
       <div class="unit">
      	<label>行业：</label>
        <input type="text" size="30" name="job" id="job" value=""  />
      </div>
      <div class="divider">divider</div>
       <div class="unit">
      	<label>商品名称：</label>
        <input type="text" size="30" name="product_name" id="product_name" value=""  />
      </div>
      <div class="divider">divider</div>
       <div class="unit">
      	<label>联系人：</label>
        <input type="text" size="30" name="contact" class="valid combox required" id="contact" value=""  />
      </div>
      <span id="contact_error" class="error" style="display:none; margin-top:-5px;">不能为空！</span>
      <div class="divider">divider</div>
       <div class="unit">
      	<label>电话：</label>
        <input type="text" size="30" class="valid combox required" name="tel" id="tel" value=""  />
      </div>
      <span id="tel_error" class="error" style="display:none; margin-top:-5px;">不能为空！</span>
      <div class="divider">divider</div>
       <div class="unit">
      	<label>传真：</label>
        <input type="text" size="30" name="fax" id="fax" value=""  />
      </div>
      <div class="divider">divider</div>
       <div class="unit">
      	<label>结算限期：</label>
        <select class="combox required" name="limit_time" id="limit_time" value="">
        <option value="">请选择</option>
        <?php $_from = $this->_tpl_vars['supplier_settlement_time']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sst']):
?>
        <option value="<?php echo $this->_tpl_vars['sst']['id']; ?>
"><?php echo $this->_tpl_vars['sst']['cycle']; ?>
</option>
        <?php endforeach; endif; unset($_from); ?>
        </select>
     
      </div>
      <div class="divider">divider</div>
       <div class="unit">
      	<label>邮编：</label>
        <input type="text" size="30" name="zip" id="zip" value=""  />
      </div>
      <div class="divider">divider</div>
       <div class="unit">
      	<label>邮箱：</label>
        <input type="text" size="30"  class="email" name="email" id="email" value=""  />
      </div>
      <div class="divider">divider</div>
       <div class="unit">
      	<label>开户银行：</label>
        <input type="text" size="30" name="bank" id="bank" value=""  />
      </div>
      <div class="divider">divider</div>
       <div class="unit">
      	<label>银行帐号：</label>
        <input type="text" size="30" name="bank_account" id="bank_account" value=""  />
      </div>
      <div class="divider">divider</div>
       <div class="unit">
      	<label>税务登记号：</label>
        <input type="text" size="30" name="tax_id" id="tax_id" value=""  />
      </div>
      <div class="divider">divider</div>
     <!-- <div class="unit">
      	<label>详细时间：</label>
        <input type="hidden" size="30" name="time_hidden" id="time_hidden" value=""  />
      </div>
      <div class="divider">divider</div>
      -->
     
    </div>
    
     </form>
    
    <div class="formBar">
      <ul>
        <li>
          <div class="buttonActive">
            <div class="buttonContent">
              <button type="submit" id="submit_new_supplier_code">确认</button>
            </div>
          </div>
        </li>
        <li>
					<div class="button"><div class="buttonContent"><button type="button" class="close">取消</button></div></div>
				</li>

      </ul>
    </div>
  
</div>

<!-- {literal} --> 
<script type="text/javascript" language="javascript">
 
function code(){
    $(document).ready(function(){	
	

    	  var supplier_code = $("#supplier_code").val();
		  var supplier_company_a = $("#supplier_company_a").val();
		  var supplier_company = $("#supplier_company").val();
		  var contact = $("#contact").val();
		  var tel = $("#tel").val();
		  
		  
		  
		  
          if(supplier_code!=""){

			  $.ajax({
				  url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/check_supplier_code',//通过Ajax取数据的目标页面
				  data:{'supplier_code':supplier_code},	
				  type:'post',//方法，还可以是"post"
				  dataType:'text',//数据类型，还有其它的，详见jQuery手册
				  success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
				  {
						if(locals == 1){
							$('#supplier_code_result_new').css("display","block");
							$('#supplier_code_result_new').css("background-color","#FF0000");
							$('#supplier_code_result_new').css("color","#FFF");
							$('#supplier_code_result_new').html('该代码已经被使用');
							
						}else{
							$('#supplier_code_result_new').css("display","none");
							$('#supplier_code_result_new').html('');
						}
				  }
			  });
		  }else{
			  $('#supplier_code_result_new').css("display","block");
			  $('#supplier_code_result_new').html('不能为空！');
		  }
		  
    });	
}

  $("#submit_new_supplier_code").click(function (){
		  
		  var supplier_code = $("#supplier_code").val();
		  var supplier_company_a = $("#supplier_company_a").val();
		  var supplier_company = $("#supplier_company").val();
		  var contact = $("#contact").val();
		  var tel = $("#tel").val(); 

		  if(supplier_company_a ==""){
			  $('#customer_name_error').css("display","block");
		  }else{
			  $('#customer_name_error').css("display","none");
			  var b = 1;
		  }
		  
		  if(supplier_company ==""){
			  $('#supplier_company_error').css("display","block");
		  }else{
			  $('#supplier_company_error').css("display","none");
			  var c = 1;
		  }	
		  
		  if(contact ==""){
			  $('#contact_error').css("display","block");
		  }else{
			  $('#contact_error').css("display","none");
			  var d = 1;
		  }	
		  
		  if(tel ==""){
			  $('#tel_error').css("display","block");
		  }else{
			  $('#tel_error').css("display","none");
			  var e = 1;
		  }	
		  
		  if($("#supplier_attributes_add").val() == ''){
			  	$('#supplier_attributes_add_new').css("display","block");
				$('#supplier_attributes_add_new').html('属性必填');
			}
		  		  		  	  
		  
		  else if(supplier_code!=""){
			  		$('#supplier_attributes_add_new').css("display","none");
				  $.ajax({
					  url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/check_supplier_code',//通过Ajax取数据的目标页面
					  data:{'supplier_code':supplier_code},	
					  type:'post',//方法，还可以是"post"
					  dataType:'text',//数据类型，还有其它的，详见jQuery手册
					  success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
					  {
							if(locals == 1){
								$('#supplier_code_result_new').css("display","block");
								$('#supplier_code_result_new').css("background-color","#FF0000");
								$('#supplier_code_result_new').css("color","#FFF");
								$('#supplier_code_result_new').html('该代码已经被使用');
								
							}else{
								$('#supplier_code_result_new').css("display","none");
								$('#supplier_code_result_new').html('');
								if(b && c && d && e){
								    $("#supplier_management_new").submit();
								}
							}
					  }
				  });
		  }else{
			      $('#supplier_code_result_new').css("display","block");
				  $('#supplier_code_result_new').html('不能为空！');
		  }
		  
			  
		  
	
	  });	

</script>
<!-- {/literal} -->