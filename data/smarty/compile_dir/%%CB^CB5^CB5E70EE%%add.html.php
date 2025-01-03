<?php /* Smarty version 2.6.22, created on 2016-05-10 10:54:22
         compiled from cn_no_deal_customer/add.html */ ?>
<div class="pageContent">
<div class="tabs" currentIndex="0" eventType="click">
  <div class="tabsHeader">
    <div class="tabsHeaderContent">
      <ul>
        <li><a href="javascript:;"><span>基本信息</span></a></li>
        <li><a href="javascript:;"><span>详细信息</span></a></li>
      </ul>
    </div>
  </div>
  <form method="post" id="newcustomer_add" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, navTabAjaxDone)">
    <div class="tabsContent" layoutH="70">
      <div>
      <input type="hidden" name="customer_id" id="customer_id_new" value="<?php echo $this->_tpl_vars['customer']['id']; ?>
" />
        <div class="pageFormContent" >
          <div class="unit">
            <label>询盘日期：</label>
            <input type="text" name="quote_time" datefmt="yyyy-MM-dd HH:mm:ss" id="quote_time_new" style="width:180px" <?php if ($this->_tpl_vars['customer']['id'] != ''): ?> value="<?php echo $this->_tpl_vars['customer']['quote_time']; ?>
" <?php else: ?> value="<?php echo $this->_tpl_vars['data']; ?>
"<?php endif; ?>  class="date textInput readonly valid combox required"/>
             </div>
          <div class="divider">divider</div>
          <div class="unit">
            <label>询盘来源：</label>
            <select  name="from_where" id="quotefrom_id_new" <?php if ($this->_tpl_vars['customer']['id'] != ''): ?>  disabled="disabled"<?php else: ?>class="combox required" <?php endif; ?>>
              <option value="">请选择询盘来源</option>
              <?php $_from = $this->_tpl_vars['customer_code_set']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['qf']):
?> 
              <option value="<?php echo $this->_tpl_vars['qf']['id']; ?>
" <?php if ($this->_tpl_vars['customer']['from_where'] == $this->_tpl_vars['qf']['id']): ?> selected="selected" <?php endif; ?> ><?php echo $this->_tpl_vars['qf']['quotefrom_name']; ?>
</option>
              <?php endforeach; endif; unset($_from); ?>
            </select>
            <!--<span id="quotefrom_id_result_new" class="error" style="display:none;"></span>-->
            <!--<input name="customer_code" id="customer_code_new" style="display:none;" value="<?php echo $this->_tpl_vars['customer']['customer_code']; ?>
" readonly="readonly" />-->
          </div>
          <!-- <span id="quotefrom_id_new_error" class="error" style="display:none;"></span>-->
          <div class="divider">divider</div>
          <div class="unit">
            <label>客户名称：</label>
            <input type="text" name="customer_name" id="customer_name_new"  style="width:180px" value="<?php echo $this->_tpl_vars['customer']['customer_name']; ?>
"/><!--class="required"-->
              <!--<span id="customer_name_result_new" class="error" style="display:none;"></span>-->
          </div>
         
          <div class="divider">divider</div>
			<div class="unit">
            <label>地区：</label>
   
            <select class="combox required"  ref="province"  name="area_level_one_id">
            <option value="336" selected="selected" >中国</option>
            </select>
            <select class="combox required" id="province" refUrl="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/get_children_area_china-id-{value}.html" ref="area_id" name="area_level_two_id">
           <option value="">请选择</option>
             <?php $_from = $this->_tpl_vars['country_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['qf']):
?> 
             <option value="<?php echo $this->_tpl_vars['qf']['area_id']; ?>
" <?php if ($this->_tpl_vars['customer']['area_level_two_id'] == $this->_tpl_vars['qf']['area_id']): ?> selected="selected" <?php endif; ?>><?php echo $this->_tpl_vars['qf']['area_name_cn']; ?>

              </option>
            <?php endforeach; endif; unset($_from); ?>
           
            </select>
            <select class="combox required" id="area_id"  name="area_level_three_id">
            <?php if ($this->_tpl_vars['customer']['area_level_two_id'] != ''): ?> 
             <?php $_from = $this->_tpl_vars['area_level_three_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['qf']):
?> 
             <option value="<?php echo $this->_tpl_vars['qf']['area_id']; ?>
" <?php if ($this->_tpl_vars['customer']['area_level_three_id'] == $this->_tpl_vars['qf']['area_id']): ?> selected="selected" <?php endif; ?>><?php echo $this->_tpl_vars['qf']['area_name_cn']; ?>
</option>
            <?php endforeach; endif; unset($_from); ?>
            <?php else: ?>
            <option value="">请选择</option>
            <?php endif; ?>
            </select>
          </div>
          <div class="divider">divider</div>
          <div class="unit">
            <label>详细地址：</label>
            <textarea name="address" id="address" cols="50" rows="3" ><?php echo $this->_tpl_vars['customer']['address']; ?>
</textarea>
          </div>
          <div class="divider">divider</div>
          <div class="unit">
            <label>公司：</label>
            <input type="text" style="width:180px" name="company" id="company_new" value="<?php echo $this->_tpl_vars['customer']['company']; ?>
"  /><!--class="required"-->
            <!--<span id="company_result_new" class="error" style="display:none;"></span>-->
          </div>
          <div class="divider">divider</div>
          <div class="unit">
            <label>邮箱：</label>
            <input type="text" style="width:180px" name="email" id="email_new" value="<?php echo $this->_tpl_vars['customer']['email']; ?>
"   /><!--class="required email"-->
            <!--<span id="email_result_new" class="error" style="display:none;"></span>-->
          </div>
          <div class="divider">divider</div>
          <div class="unit">
            <label>邮编：</label>
            <input type="text" style="width:180px" name="zip_code" id="reserve_email_new" value="<?php echo $this->_tpl_vars['customer']['zip_code']; ?>
"  />
            <!--<span id="reserve_email_result_new" class="error" style="display:none;"></span>-->
          </div>
          <div class="divider">divider</div>
          <div class="unit">
            <label>传真：</label>
            <input type="text" name="fax" id="fax" style="width:180px" value="<?php echo $this->_tpl_vars['customer']['fax']; ?>
" />
          </div>
          <div class="divider">divider</div>
          <div class="unit">
            <label>手机：</label>
            <input type="text" name="cellphone" style="width:180px" id="cellphone" value="<?php echo $this->_tpl_vars['customer']['cellphone']; ?>
" />
          </div>
          <div class="divider">divider</div>
          <div class="unit">
            <label>座机：</label>
            <input type="text" name="telephone" id="telephone" style="width:180px" value="<?php echo $this->_tpl_vars['customer']['telephone']; ?>
" />
          </div>
          <div class="divider">divider</div>
          <div class="unit">
            <label>业务员：</label>
            <select  name="user_id">
            <option value=""  >请选择业务员</option>
            <?php $_from = $this->_tpl_vars['user_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['u']):
?> 
            <option value="<?php echo $this->_tpl_vars['u']['user_id']; ?>
" <?php if ($this->_tpl_vars['customer']['user_id'] == $this->_tpl_vars['u']['user_id']): ?> selected="selected" <?php endif; ?> ><?php echo $this->_tpl_vars['u']['user_name']; ?>
</option>
            <?php endforeach; endif; unset($_from); ?>
            </select>
          </div>
          <div class="divider">divider</div>
          
           <input type="hidden" name="update_content_yincang" id="update_content_yincang" value="" />
          <input type="hidden" readonly="readonly" name="insert_user_id" value="<?php echo $this->_tpl_vars['user_id']; ?>
" />
        </div>
      </div>
      <div>
        <div class="pageFormContent" layoutH="58">
          <div class="unit">
            <label>网址：</label>
            <input type="text" name="website" id="website_new" style="width:180px" value="<?php echo $this->_tpl_vars['customer']['website']; ?>
"  /><!--class="url"-->
          </div>
          <div class="divider">divider</div>
          <div class="unit">
            <label>生日：</label>
            <input type="text" name="birthday" id="birthday_new" style="width:180px" value="<?php echo $this->_tpl_vars['customer']['birthday']; ?>
" class="date" />
          </div>
          <div class="divider">divider</div>
          <div class="unit">
            <label>性别：</label>
            <?php if ($this->_tpl_vars['customer']['sex'] == 1 || $this->_tpl_vars['customer']['sex'] == 2): ?>
            <input type="radio" name="sex" id="sex_new" value="1" <?php if ($this->_tpl_vars['customer']['sex'] == 1): ?>checked <?php endif; ?> />男 <input type="radio" name="sex" id="sex" value="2" <?php if ($this->_tpl_vars['customer']['sex'] == 2): ?>checked <?php endif; ?> />女 </div>
            <?php else: ?>
            <input type="radio" name="sex" id="sex_new" value="1" checked />男 <input type="radio" name="sex" id="sex" value="2" />女 </div>
            <?php endif; ?>
          <div class="divider">divider</div>
          <div class="unit">
            <label>身高：</label>
            <input type="text" name="height" id="height_new" style="width:180px" value="<?php echo $this->_tpl_vars['customer']['height']; ?>
" />
            <label>CM</label>
          </div>
          <div class="divider">divider</div>
          <div class="unit">
            <label>体重：</label>
            <input type="text" name="weight" id="weight_new" style="width:180px" value="<?php echo $this->_tpl_vars['customer']['weight']; ?>
" />
            <label>KG</label>
          </div>
          <div class="divider">divider</div>
          <div class="unit">
            <label>备注：</label>
            <textarea name="note" id="note_new" cols="50" rows="2"><?php echo $this->_tpl_vars['customer']['note']; ?>
</textarea>
          </div>
          <div class="divider">divider</div>
          
          
        </div>
      </div>
      
      <div class="tabsFooter">
        <div class="tabsFooterContent"> </div>
      </div>
      
    </div>
    <div class="formBar">
      <ul>
        <li>
          <div class="buttonActive">
            <div class="buttonContent">
              <button type="button" id="submit_info" >确定</button>
            </div>
          </div>
        </li>
        <li> 
        <div class="buttonActive">
            <div class="buttonContent">
              <button type="button" class="close" >取消</button>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </form>
</div>
<!-- {literal} --> 
<script type="text/javascript">
$(document).ready(function()  
{
	$("#submit_info").click(function (){
		if($('#quote_time_new').val()==''){
			alert('询盘时间不能为空！');
		}else if($('#quotefrom_id_new').val()==''){
			alert('询盘来源不能为空！');
		}else if($('#customer_name_new').val()==''){
			alert('客户名称不能为空！');
		}else {
			$("#newcustomer_add").submit();
		}
	});
	//var customer_id = $("#customer_id_new").val();
//	$('input').blur(function(){
//		
//		if($("#discount_rebate_new").val() != ''){
//		$("#discount_id_new").attr("disabled","disabled");
//		$("#discount_id_new option[value='']").attr("selected","selected");
//	}
//	
//	if($("#discount_id_new").val()!=''){
//		$("#discount_rebate_new").attr("disabled","disabled");
//		$("#discount_rebate_new").val("");
//	}
//	var discount_id = $("#discount_id_new");
//	discount_id.change(function (){
//		var b = $("#discount_id_new").val();
//		if(b != ''){
//			$("#discount_rebate_new").attr("disabled","disabled");
//			$("#discount_rebate_new").val("");
//		}else{
//			$("#discount_rebate_new").removeAttr("disabled","disabled");
//		}
//	});
//		
//     
//   		if(this.id == 'customer_name_new'){
//			if(this.value==''){
//				
//			}
//			else{
//				$('#customer_name_result_new').html('');
//				p='customer_name='+this.value+'&customer_id='+customer_id;
//     			$.ajax({
//					url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/check_customer_name',
//					type:'post',
//					 dataType:'json',
//					 data:p,
//					 success:check_customer_name_back
//			    });
//			}
//		}
//		
//		if(this.id == 'company_new'){
//			if(this.value==''){
//				
//			}
//			else{
//				$('#company_result_new').html('');
//				
//				var company = $('#company_new').val();
//
//				$.ajax({
//					url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/check_company',//通过Ajax取数据的目标页面
//					data:{"company":company,"customer_id":customer_id},
//					type:'post',//方法，还可以是"post"
//					dataType:'json',//数据类型，还有其它的，详见jQuery手册
//					success:function(check_company_back)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
//					{
//                         
//					}								
//					
//				});				
//				
//				//p='company='+this.value+'&customer_id='+customer_id;
//     			//$.ajax({url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/check_company',type:'post', dataType:'json',data:p,success:check_company_back});
//			}
//		}
//		
//		if(this.id == 'email_new'){
//			if(this.value==''){
//				
//			}
//			else{
//				$('#email_result_new').html('');
//				p='email='+this.value+'&customer_id='+customer_id;
//     			$.ajax({url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/check_customer_email',type:'post', dataType:'json',data:p,success:check_email_back_new});
//			}
//		}
//		if(this.id == 'reserve_email_new'){
//			if(this.value==''){
//				
//			}
//			else{
//				$('#reserve_email_result_new').html('');
//				p='email='+this.value+'&customer_id='+customer_id;
//     			$.ajax({url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/check_customer_reserve_email',type:'post', dataType:'json',data:p,success:check_reserve_email_back_new});
//			}
//		}
//		
});
//	
//	
//	
//});
//	function check_email_back_new(data)
//	{
//		if(data.customer_code!= undefined)
//		{
//			$('#email_result_new').css("display","block");
//			$('#email_result_new').css("background-color","#FF0000");
//			$('#email_result_new').css("color","#FFF");
//			$('#email_result_new').html('该邮箱已经被使用' + ' ' + data.customer_code);
//		}
//		else
//		{
//			$('#email_result_new').css("display","none");
//			$('#email_result_new').css("background-color","#6F0");
//			$('#email_result_new').css("color","#000");
//			$('#email_result_new').html('该邮箱可以使用');
//		}
//	}
//	
//	function check_reserve_email_back_new(data)
//	{
//		if(data.customer_code!= undefined)
//		{
//			$('#reserve_email_result_new').css("display","block");
//			$('#reserve_email_result_new').css("background-color","#FF0000");
//			$('#reserve_email_result_new').css("color","#FFF");
//			$('#reserve_email_result_new').html('该邮箱已经被使用' + ' ' + data.customer_code);
//		}
//		else
//		{
//			$('#reserve_email_result_new').css("display","none");
//			$('#reserve_email_result_new').css("background-color","#6F0");
//			$('#reserve_email_result_new').css("color","#000");
//			$('#reserve_email_result_new').html('该邮箱可以使用');
//		}
//	}
//	
//	function check_customer_name_back(data)
//	{
//		if(data >= 1)
//		{
//			$('#customer_name_result_new').css("display","block");
//			$('#customer_name_result_new').css("background-color","#FF0000");
//			$('#customer_name_result_new').css("color","#FFF");
//			$('#customer_name_result_new').html('该客户名已经被使用');
//		}
//		else
//		{
//			$('#customer_name_result_new').css("display","none");
//			$('#customer_name_result_new').css("background-color","#6F0");
//			$('#customer_name_result_new').css("color","#000");
//			$('#customer_name_result_new').html('该客户名可以使用');
//		}
//	}
//	
//	function check_company_back(data)
//	{
//		if(data >= 1)
//		{
//			$('#company_result_new').css("display","block");
//			$('#company_result_new').css("background-color","#FF0000");
//			$('#company_result_new').css("color","#FFF");
//			$('#company_result_new').html('该公司已经被使用');
//		}
//		else
//		{
//			$('#company_result_new').css("display","none");
//			$('#company_result_new').css("background-color","#6F0");
//			$('#company_result_new').css("color","#000");
//			$('#company_result_new').html('该公司可以使用');
//		}
//	}




</script> 
<!-- {/literal} -->