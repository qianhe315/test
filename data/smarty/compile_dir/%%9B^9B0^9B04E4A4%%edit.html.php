<?php /* Smarty version 2.6.22, created on 2014-07-25 13:27:20
         compiled from supplier_management/edit.html */ ?>

<div class="pageContent">
  <form method="post"  id="supplier_management_edit_new" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm"  onsubmit="return validateCallback(this, navTabAjaxDone)">
    <div class="pageFormContent" layoutH="58">
    <input type="hidden" name="mid" value="<?php echo $this->_tpl_vars['supplier_management']['id']; ?>
" />

      <div class="unit">
      	<label>属性：</label>
        <select class="combox required" id="supplier_attributes_edit" name="supplier_attributes" >
        <option value="">请选择</option>
       <?php $_from = $this->_tpl_vars['supplier_attributes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sa']):
?> <option value="<?php echo $this->_tpl_vars['sa']['id']; ?>
" <?php if ($this->_tpl_vars['supplier_management']['supplier_attributes'] == $this->_tpl_vars['sa']['id']): ?> selected="selected" <?php endif; ?>><?php echo $this->_tpl_vars['sa']['name']; ?>

              </option>
              <?php endforeach; endif; unset($_from); ?>
        </select>
      <input type="hidden" id="hidden_supplier_attributes" name="hidden_supplier_attributes" value="<?php echo $this->_tpl_vars['supplier_management']['supplier_attributes']; ?>
">
      </div>
      <span id="supplier_attributes_edit_new" class="error" style="display: none; margin-top: -5px;"></span>
      <div class="divider">divider</div>
      
      <div class="unit">
      	<label>代码：</label>
        <input type="text" size="30" name="supplier_code"  class="valid combox required" id="supplier_code" onchange="code()" value="<?php echo $this->_tpl_vars['supplier_management']['supplier_code']; ?>
"  />
        <input type="hidden" id="hidden_supplier_code" value="<?php echo $this->_tpl_vars['supplier_management']['supplier_code']; ?>
">
      </div>
       <span id="supplier_code_result_new" class="error" style="display:none; margin-top:-5px;">不能为空</span>
      
      <div class="divider">divider</div>
       <div class="unit">
      	<label>供应商（公司全称）：</label>
        <input type="text" size="30" name="supplier_company_a" class="valid combox required" id="supplier_company_a" value="<?php echo $this->_tpl_vars['supplier_management']['supplier_company_a']; ?>
"  />
      </div>
      <span id="customer_name_error" class="error" style="display:none; margin-top:-5px;">不能为空！</span>
      <div class="divider">divider</div>
       <div class="unit">
      	<label>供应商（简称）：</label>
        <input type="text" size="30" name="supplier_company" class="valid combox required" id="supplier_company" value="<?php echo $this->_tpl_vars['supplier_management']['supplier_company']; ?>
"  />
      </div>
      <span id="supplier_company_error" class="error" style="display:none; margin-top:-5px;">不能为空！</span>
      <div class="divider">divider</div>
       <div class="unit">
            <label>地址：</label>
            <!--<select class="combox required" id="area_level_one_id" ref="province" refUrl="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/get_children_area-id-{value}.html" name="area_level_one_id">
            <option value="">请选择</option>
              <?php $_from = $this->_tpl_vars['country_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['qf']):
?> <option value="<?php echo $this->_tpl_vars['qf']['area_id']; ?>
" <?php if ($this->_tpl_vars['supplier_management']['area_level_one_id'] == $this->_tpl_vars['qf']['area_id']): ?> selected="selected" <?php endif; ?>><?php echo $this->_tpl_vars['qf']['area_name']; ?>

              </option>
              <?php endforeach; endif; unset($_from); ?>
            </select>
            <select class="combox required" id="province" refUrl="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/get_children_area-id-{value}.html" ref="area_id" name="area_level_two_id">
            <?php $_from = $this->_tpl_vars['area_level_two_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['qf']):
?> 
             <option value="<?php echo $this->_tpl_vars['qf']['area_id']; ?>
" <?php if ($this->_tpl_vars['supplier_management']['area_level_two_id'] == $this->_tpl_vars['qf']['area_id']): ?> selected="selected" <?php endif; ?>><?php echo $this->_tpl_vars['qf']['area_name']; ?>

              </option>
            <?php endforeach; endif; unset($_from); ?>
            
            <option value="">请选择</option>
           
            </select>
            <select class="combox required" id="area_id"  name="area_level_three_id">
            
             <?php $_from = $this->_tpl_vars['area_level_three_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['qf']):
?> 
             <option value="<?php echo $this->_tpl_vars['qf']['area_id']; ?>
" <?php if ($this->_tpl_vars['supplier_management']['area_level_three_id'] == $this->_tpl_vars['qf']['area_id']): ?> selected="selected" <?php endif; ?>><?php echo $this->_tpl_vars['qf']['area_name']; ?>

              </option>
            <?php endforeach; endif; unset($_from); ?>
           
            <option value="">请选择</option>
          
            </select>-->
            <input type="text" name="address" id="address" size="30" value="<?php echo $this->_tpl_vars['supplier_management']['address']; ?>
" />
            <span id="area_level_three_result_newcustomer_edit" class="error" style="display:none;"></span>
          </div> 
          <div class="divider">divider</div>

       <div class="unit">
      	<label>行业：</label>
        <input type="text" size="30" name="job" id="job" value="<?php echo $this->_tpl_vars['supplier_management']['job']; ?>
"   />
      </div>
      <div class="divider">divider</div>
       <div class="unit">
      	<label>商品名称：</label>
        <input type="text" size="30" name="product_name" id="product_name" value="<?php echo $this->_tpl_vars['supplier_management']['product_name']; ?>
"   />
      </div>
      <div class="divider">divider</div>
       <div class="unit">
      	<label>联系人：</label>
        <input type="text" size="30"class="valid combox required" name="contact" id="contact" value="<?php echo $this->_tpl_vars['supplier_management']['contact']; ?>
"  />
      </div>
      <span id="contact_error" class="error" style="display:none; margin-top:-5px;">不能为空！</span>
      <div class="divider">divider</div>
       <div class="unit">
      	<label>电话：</label>
        <input type="text" size="30" name="tel" class="valid combox required" id="tel" value="<?php echo $this->_tpl_vars['supplier_management']['tel']; ?>
"  />
      </div>
      <span id="tel_error" class="error" style="display:none; margin-top:-5px;">不能为空！</span>
      <div class="divider">divider</div>
       <div class="unit">
      	<label>传真：</label>
        <input type="text" size="30" name="fax" id="fax" value="<?php echo $this->_tpl_vars['supplier_management']['fax']; ?>
"  />
      </div>
      <div class="divider">divider</div>
        <div class="unit">
      	<label>结算期限：</label>
        <select class="combox required" name="limit_time" id="limit_time" value="<?php echo $this->_tpl_vars['supplier_management']['limit_time']; ?>
" >
        <option value="">请选择</option>
       <?php $_from = $this->_tpl_vars['supplier_settlement_time']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sst']):
?> <option value="<?php echo $this->_tpl_vars['sst']['id']; ?>
" <?php if ($this->_tpl_vars['supplier_management']['limit_time'] == $this->_tpl_vars['sst']['id']): ?> selected="selected" <?php endif; ?>><?php echo $this->_tpl_vars['sst']['cycle']; ?>

              </option>
              <?php endforeach; endif; unset($_from); ?>
        </select>
     
      </div>
      <div class="divider">divider</div>
       <div class="unit">
      	<label>邮编：</label>

        <input type="text" size="30" name="zip" id="zip" value="<?php echo $this->_tpl_vars['supplier_management']['zip']; ?>
"  />
      </div>
      <div class="divider">divider</div>
       <div class="unit">
      	<label>邮箱：</label>
        <input type="text" size="30" name="email" id="email" class="email" value="<?php echo $this->_tpl_vars['supplier_management']['email']; ?>
"  />
      </div>
      <div class="divider">divider</div>
       <div class="unit">
      	<label>开户银行：</label>
        <input type="text" size="30" name="bank" id="bank" value="<?php echo $this->_tpl_vars['supplier_management']['bank']; ?>
" />
      </div>
      <div class="divider">divider</div>
       <div class="unit">
      	<label>银行帐号：</label>
        <input type="text" size="30" name="bank_account" id="bank_account" value="<?php echo $this->_tpl_vars['supplier_management']['bank_account']; ?>
" />
      </div>
      <div class="divider">divider</div>
       <div class="unit">
      	<label>税务登记号：</label>
        <input type="text" size="30" name="tax_id" id="tax_id" value="<?php echo $this->_tpl_vars['supplier_management']['tax_id']; ?>
"  />
      </div>
      <div class="divider">divider</div>
      
     </form>  
    </div>
    <div class="formBar">
      <ul>
        <li>
          <div class="buttonActive">
            <div class="buttonContent">
             <button type="submit" id="submit_new_supplier_code_edit">确认</button>
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
	var hidden_supplier_code = $("#hidden_supplier_code").val();
	
	   if(supplier_code!=""){

			  $.ajax({
				  url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/check_supplier_code_new',//通过Ajax取数据的目标页面
				  data:{'supplier_code':supplier_code,'hidden_supplier_code':hidden_supplier_code},	
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

	  $("#submit_new_supplier_code_edit").click(function (){
		  
		  var supplier_code = $("#supplier_code").val();
		  var supplier_company_a = $("#supplier_company_a").val();
		  var supplier_company = $("#supplier_company").val();
		  var contact = $("#contact").val();
		  var tel = $("#tel").val();
	      var hidden_supplier_code = $("#hidden_supplier_code").val();


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
		  
		  		  		  	  
		  if($("#supplier_attributes_edit").val() == ''){
			  	$('#supplier_attributes_edit_new').css("display","block");
				$('#supplier_attributes_edit_new').html('属性必填');
			}
		  		  		  	  
		  
		  else if(supplier_code!=""){
			  
				  $.ajax({
					  url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/check_supplier_code_new',//通过Ajax取数据的目标页面
					  data:{'supplier_code':supplier_code,'hidden_supplier_code':hidden_supplier_code},		
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
								    $("#supplier_management_edit_new").submit();
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