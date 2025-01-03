<?php /* Smarty version 2.6.22, created on 2022-11-17 13:42:53
         compiled from oldcustomer/edit.html */ ?>
<div class="pageContent">
<div class="tabs" currentIndex="0" eventType="click">
  <div class="tabsHeader">
    <div class="tabsHeaderContent">
      <ul>
        <li><a href="javascript:;"><span>基本信息</span></a></li>
        <li><a href="javascript:;"><span>详细信息</span></a></li>
        <li><a href="javascript:;"><span>其它信息</span></a></li>
      </ul>
    </div>
  </div>
  <form method="post" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" id="pageForm_old" onsubmit="return validateCallback(this, navTabAjaxDone)">
  
  
  <input type="hidden" readonly="readonly"  id="userid" name="userid" value="<?php echo $this->_tpl_vars['customer_name']['user_id']; ?>
" />
   <input type="hidden" readonly="readonly"  id="session_userid" value="<?php echo $this->_tpl_vars['session_user_id']; ?>
" />
   <input type="hidden" readonly="readonly"  id="c_user_name" value="<?php echo $this->_tpl_vars['customer_name']['user_name']; ?>
" />
    <div class="tabsContent" layoutH="70">
      <div>
      <input type="hidden" name="customer_id" id="customer_id_old" value="<?php echo $this->_tpl_vars['newcustomer']['id']; ?>
" />
        <div class="pageFormContent" layoutH="58">
          <div class="unit">
            <label>询盘日期：</label>
            <input type="text" name="quote_time" readonly="readonly" id="quote_time_old" value="<?php echo $this->_tpl_vars['newcustomer']['quote_time_c']; ?>
" />
            <a class="inputDateButton" href="javascript:;">选择</a> </div>
          <div class="divider">divider</div>
          <div class="unit">
            <label>询盘来源：</label>
            <input type="text" name="quotefrom_id" id="quotefrom_id_old" style="width:100px; display:none" value="<?php echo $this->_tpl_vars['newcustomer']['quotefrom_id']; ?>
" readonly="readonly" />
            
            <?php $_from = $this->_tpl_vars['quotefromlist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['qf']):
?>
            	<?php if ($this->_tpl_vars['newcustomer']['quotefrom_id'] == $this->_tpl_vars['qf']['id']): ?>
                <input type="text" style="width:100px;" value="<?php echo $this->_tpl_vars['qf']['quotefrom_name']; ?>
" readonly="readonly" />
                <input type="hidden" style="width:100px;" name="quotefrom_id" value="<?php echo $this->_tpl_vars['qf']['id']; ?>
" readonly="readonly" />
                <?php endif; ?>
            <?php endforeach; endif; unset($_from); ?>
            
            
            <!--修改邮箱增加审核-->
            <!--<select class="combox required" name="quotefrom_id" id="quotefrom_id" >
              <option value="">请选择询盘来源</option>
              <?php $_from = $this->_tpl_vars['quotefromlist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['qf']):
?> <option value="<?php echo $this->_tpl_vars['qf']['id']; ?>
" <?php if ($this->_tpl_vars['quote_info']['quotefrom_id'] == $this->_tpl_vars['qf']['id']): ?> selected="selected" <?php endif; ?> ><?php echo $this->_tpl_vars['qf']['quotefrom_name']; ?>

              </option>
              <?php endforeach; endif; unset($_from); ?>
            </select>-
            <!-- <input name="customer_code" style="margin-left:5px; width:100px;" id="customer_code_old" style="width:80px" value="<?php echo $this->_tpl_vars['newcustomer']['customer_code']; ?>
" readonly="readonly" />-->
            <!--<select id="customer_code" name="customer_code" class="combox required">
              <option value="">请选择</option>
              <option value="<?php echo $this->_tpl_vars['newcustomer']['customer_code']; ?>
" selected="selected"><?php echo $this->_tpl_vars['newcustomer']['customer_code']; ?>
</option>
            </select>-->
          </div>
          <div class="divider">divider</div>
          <div class="unit">
            <label>客户名称：</label>
            <input type="text" style="width:180px" class="required" name="customer_name" id="customer_name_old" value="<?php echo $this->_tpl_vars['newcustomer']['customer_name']; ?>
"  />
            <input type="hidden" id="customer_code_old" value="<?php echo $this->_tpl_vars['newcustomer']['customer_code']; ?>
"  />
            <span id="customer_name_result_old" class="error" style="display:none;"></span>
          </div>
         
          <div class="divider">divider</div>
        
          
          <div class="unit">
            <label>邮箱：</label>
            <input type="text" style="width:180px" name="email" id="email_old" value="<?php echo $this->_tpl_vars['newcustomer']['email']; ?>
"  class="required email" />
            <span id="email_result_old" class="error" style="display:none;"></span>
            <!--<?php if ($this->_tpl_vars['get_c_info']['id'] != ''): ?>
            	<div style="float:left;margin-left:15px; width:500px;" >
                    <input type="text" style="width:180px" readonly="readonly" value="<?php echo $this->_tpl_vars['get_c_info']['new_email']; ?>
"  class="required" />
                    <input type="text" style=" float:left;margin-left:15px;width:180px;" readonly="readonly" value="<?php echo $this->_tpl_vars['get_c_info']['note']; ?>
" class="required" />
                    <div style="padding-top:8px; float:left; margin-left:5px; width:60px; height:20px; text-align:center;font-size:14px; background-color:#FFFFFF;border:1px solid #000000;">审核中</div>
            	</div>
            <?php else: ?>
            <button type="button"  style=" float:left;margin-left:15px;"  id="show_div">修改</button>
            <div id="div_info" style=" display:none; float:left;margin-left:15px; width:500px;" >
                <input type="text" style="width:180px" id="edit_new_email" name="edit_new_email"  onfocus="if(value =='点击这，输入新邮箱'){value =''}" onblur="if(value ==''){value='点击这，输入新邮箱'}"  value="点击这，输入新邮箱"  class="required" />
                <input type="text" style=" float:left;margin-left:15px;width:180px;" id="note_info" name="note_info" onfocus="if(value =='点击这，输入事由'){value =''}" onblur="if(value ==''){value='点击这，输入事由'}"  value="点击这，输入事由" class="required" />
                <button type="button" style=" float:left;margin-left:15px;"  id="submit_info">提交</button><div id="info_status" style=" display:none;padding-top:8px; float:left; margin-left:5px; width:60px; height:20px; text-align:center;font-size:14px; background-color:#FFFFFF;border:1px solid #000000;">审核中</div>
            </div>
            <?php endif; ?>-->
            <span id="email_result_old" class="error" style="display:none;"></span>
          </div>
          <div class="divider">divider</div>
          <div class="unit">
            <label>备用邮箱：</label>
            <input type="text" style="width:180px" name="reserve_email" id="reserve_email_old" value="<?php echo $this->_tpl_vars['newcustomer']['reserve_email']; ?>
" />
            <span id="reserve_email_result_old" class="error" style="display:none;"></span>
          </div>
          <div class="divider">divider</div>
          <div class="unit">
            <label>公司：</label>
            <input type="text" style="width:180px" name="company" id="company_old" onkeyup="get_same_company(event)" value="<?php echo $this->_tpl_vars['newcustomer']['company']; ?>
"  />
            <div id="select_company" style="display:none;position: absolute;z-index: 9999; background-color:#FFFFFF;border:1px solid #0099FF;"></div>
            <span id="company_result_old" class="error" style="display:none;"></span>
          </div>
          <div class="divider">divider</div>
          <div class="unit">
            <label>地址：</label>
            <select class="combox required" id="area_level_one_id_old" ref="province" refUrl="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/get_children_area-id-{value}.html" onchange="area_level_one_change(this.value)" name="area_level_one_id">
            <option value="">请选择</option>
              <?php $_from = $this->_tpl_vars['country_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['qf']):
?> <option value="<?php echo $this->_tpl_vars['qf']['area_id']; ?>
" <?php if ($this->_tpl_vars['newcustomer']['area_level_one_id'] == $this->_tpl_vars['qf']['area_id']): ?> selected="selected" <?php endif; ?>><?php echo $this->_tpl_vars['qf']['area_name']; ?>

              
              </option>
              <?php endforeach; endif; unset($_from); ?>
            </select>
            <select class="combox required" id="province" refUrl="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/get_children_area-id-{value}.html" ref="area_id" name="area_level_two_id">
          <option value="">请选择</option>
             <?php $_from = $this->_tpl_vars['area_level_two_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['qf']):
?> 
             <option value="<?php echo $this->_tpl_vars['qf']['area_id']; ?>
" <?php if ($this->_tpl_vars['newcustomer']['area_level_two_id'] == $this->_tpl_vars['qf']['area_id']): ?> selected="selected" <?php endif; ?>><?php echo $this->_tpl_vars['qf']['area_name']; ?>

              </option>
            <?php endforeach; endif; unset($_from); ?>
          
            </select>
            <select class="combox required" id="area_id"  name="area_level_three_id">
           <option value="">请选择</option>
             <?php $_from = $this->_tpl_vars['area_level_three_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['qf']):
?> 
             <option value="<?php echo $this->_tpl_vars['qf']['area_id']; ?>
" <?php if ($this->_tpl_vars['newcustomer']['area_level_three_id'] == $this->_tpl_vars['qf']['area_id']): ?> selected="selected" <?php endif; ?>><?php echo $this->_tpl_vars['qf']['area_name']; ?>

              </option>
            <?php endforeach; endif; unset($_from); ?>
           
            </select>
            <br /><br /><br />
            <textarea name="address" id="address" cols="50" rows="3" style="margin-left:130px;"><?php echo $this->_tpl_vars['newcustomer']['address']; ?>
</textarea>
            <span id="area_level_three_result_old" class="error" style="display:none;"></span>
          </div>
          <div class="divider">divider</div>
          <div class="unit">
            <label>询盘方式：</label>
            <div style="float:left; line-height:20px;"><?php echo $this->_tpl_vars['quotecategory_id']; ?>
</div>
            <!--<select class="combox required" name="quotecategory_id">
            <option value="">请选择</option>
              <?php $_from = $this->_tpl_vars['quotecategory_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['qf']):
?> <option value="<?php echo $this->_tpl_vars['qf']['id']; ?>
" <?php if ($this->_tpl_vars['quote_info']['quotecategory_id'] == $this->_tpl_vars['qf']['id']): ?> selected="selected" <?php endif; ?> ><?php echo $this->_tpl_vars['qf']['quotecategory_name']; ?>

              </option>
              <?php endforeach; endif; unset($_from); ?>
            </select>-->
          </div>
          <div class="divider">divider</div>
           <div class="unit">
            <label>询盘周期：</label>
            <?php if ($this->_tpl_vars['quotecustomer_cycle'] == '1'): ?>
             <input type="radio" name="quotecustomer_cycle" value="1" checked="checked">未回复<br><br>
             <div style="margin-left:130px;"> <input type="radio" name="quotecustomer_cycle"   value="2">一周内回复</div><br>
             <div style="margin-left:130px;">  <input type="radio" name="quotecustomer_cycle" value="3">一个月内回复</div><br>
             <div style="margin-left:130px;"> <input type="radio" name="quotecustomer_cycle" value="4">三个月内回复</div><br>
             <div style="margin-left:130px;"> <input type="radio" name="quotecustomer_cycle" value="5">三个月以上回复</div>
           <?php elseif ($this->_tpl_vars['quotecustomer_cycle'] == '2'): ?>  
             <input type="radio" name="quotecustomer_cycle" value="1" >未回复<br><br>
             <div style="margin-left:130px;"> <input type="radio" name="quotecustomer_cycle"   value="2" checked="checked">一周内回复</div><br>
             <div style="margin-left:130px;">  <input type="radio" name="quotecustomer_cycle" value="3">一个月内回复</div><br>
             <div style="margin-left:130px;"> <input type="radio" name="quotecustomer_cycle" value="4">三个月内回复</div><br>
             <div style="margin-left:130px;"> <input type="radio" name="quotecustomer_cycle" value="5">三个月以上回复</div>    
           <?php elseif ($this->_tpl_vars['quotecustomer_cycle'] == '3'): ?>  
             <input type="radio" name="quotecustomer_cycle" value="1" >未回复<br><br>
             <div style="margin-left:130px;"> <input type="radio" name="quotecustomer_cycle"   value="2" >一周内回复</div><br>
             <div style="margin-left:130px;">  <input type="radio" name="quotecustomer_cycle" value="3" checked="checked">一个月内回复</div><br>
             <div style="margin-left:130px;"> <input type="radio" name="quotecustomer_cycle" value="4">三个月内回复</div><br>
             <div style="margin-left:130px;"> <input type="radio" name="quotecustomer_cycle" value="5">三个月以上回复</div>   
          <?php elseif ($this->_tpl_vars['quotecustomer_cycle'] == '4'): ?>  
             <input type="radio" name="quotecustomer_cycle" value="1" >未回复<br><br>
             <div style="margin-left:130px;"> <input type="radio" name="quotecustomer_cycle"   value="2" >一周内回复</div><br>
             <div style="margin-left:130px;">  <input type="radio" name="quotecustomer_cycle" value="3">一个月内回复</div><br>
             <div style="margin-left:130px;"> <input type="radio" name="quotecustomer_cycle" value="4" checked="checked">三个月内回复</div><br>
             <div style="margin-left:130px;"> <input type="radio" name="quotecustomer_cycle" value="5">三个月以上回复</div>   
          <?php elseif ($this->_tpl_vars['quotecustomer_cycle'] == '5'): ?>  
             <input type="radio" name="quotecustomer_cycle" value="1" >未回复<br><br>
             <div style="margin-left:130px;"> <input type="radio" name="quotecustomer_cycle"   value="2">一周内回复</div><br>
             <div style="margin-left:130px;">  <input type="radio" name="quotecustomer_cycle" value="3">一个月内回复</div><br>
             <div style="margin-left:130px;"> <input type="radio" name="quotecustomer_cycle" value="4">三个月内回复</div><br>
             <div style="margin-left:130px;"> <input type="radio" name="quotecustomer_cycle" value="5" checked="checked">三个月以上回复</div>   
         <?php else: ?>
             <input type="radio" name="quotecustomer_cycle" value="1" checked="checked">未回复<br><br>
             <div style="margin-left:130px;"> <input type="radio" name="quotecustomer_cycle"   value="2">一周内回复</div><br>
             <div style="margin-left:130px;">  <input type="radio" name="quotecustomer_cycle" value="3">一个月内回复</div><br>
             <div style="margin-left:130px;"> <input type="radio" name="quotecustomer_cycle" value="4">三个月内回复</div><br>
             <div style="margin-left:130px;"> <input type="radio" name="quotecustomer_cycle" value="5">三个月以上回复</div>
         <?php endif; ?>
            </div>
             
            
            
            
            
            
          <div class="divider">divider</div>
          <div class="unit">
            <label>询盘内容：</label>
            <textarea name="quote_content" cols="50" rows="3"><?php echo $this->_tpl_vars['newcustomer']['quote_content']; ?>
</textarea>
          </div>
          <div class="divider">divider</div>
          <div class="unit">
            <label>分配业务员：</label>
           <input type="text" readonly="readonly" name="sale_user_name" value="<?php echo $this->_tpl_vars['customer_name']['user_name']; ?>
" />
          </div>
          <div class="divider">divider</div>
        </div>
      </div>
      <div>
        <div class="pageFormContent" layoutH="58">
          <div class="unit">
            <label>固定电话：</label>
            <input type="text" name="telephone" style="width:180px" id="telephone_old" value="<?php echo $this->_tpl_vars['newcustomer']['telephone']; ?>
" />
          </div>
          <div class="divider">divider</div>
          <div class="unit">
            <label>手机：</label>
            <input type="text" name="cellphone" style="width:180px" id="cellphone_old" value="<?php echo $this->_tpl_vars['newcustomer']['cellphone']; ?>
" />
          </div>
          <div class="divider">divider</div>
          <div class="unit">
            <label>传真：</label>
            <input type="text" name="fax" id="fax_old" style="width:180px" value="<?php echo $this->_tpl_vars['newcustomer']['fax']; ?>
" />
          </div>
          <div class="divider">divider</div>
          
          <div class="unit">
            <label>邮编：</label>
            <input type="text" name="zip_code" style="width:180px" id="zip_code_old" value="<?php echo $this->_tpl_vars['newcustomer']['zip_code']; ?>
" />
          </div>
          <div class="divider">divider</div>
          <div class="unit">
            <label>网址：</label>
            <input type="text" name="website" style="width:180px" id="website_old" value="<?php echo $this->_tpl_vars['newcustomer']['website']; ?>
" class="url" />
          </div>
          <div class="divider">divider</div>
          <div class="unit">
            <label>生日：</label>
            <input type="text" name="birthday" id="birthday_old" value="<?php echo $this->_tpl_vars['newcustomer']['birthday']; ?>
" class="date"  readonly />
          </div>
          <div class="divider">divider</div>
          <div class="unit">
            <label>性别：</label>
            <input type="radio" name="sex" id="sex_old" value="1" <?php if ($this->_tpl_vars['newcustomer']['sex'] == 1): ?>checked <?php endif; ?> />男 <input type="radio" name="sex" id="sex" value="2" <?php if ($this->_tpl_vars['newcustomer']['sex'] == 2): ?>checked <?php endif; ?>  />女 </div>
          <div class="divider">divider</div>
          <div class="unit">
            <label>身高：</label>
            <input type="text" name="height" style="width:180px" id="height_old" value="<?php echo $this->_tpl_vars['newcustomer']['height']; ?>
" />
            <label>CM</label>
          </div>
          <div class="divider">divider</div>
          <div class="unit">
            <label>体重：</label>
            <input type="text" name="weight" style="width:180px" id="weight_old" value="<?php echo $this->_tpl_vars['newcustomer']['weight']; ?>
" />
            <label>KG</label>
          </div>
          <div class="divider">divider</div>
          <div class="unit">
            <label>备注：</label>
            <textarea name="note" id="note_old" cols="50" rows="3"><?php echo $this->_tpl_vars['newcustomer']['note']; ?>
</textarea>
          </div>
          <div class="divider">divider</div>
          <div class="unit">
            <label>UPS收货人账号：</label>
            <input type="text" name="consignee_account_ups" value="<?php echo $this->_tpl_vars['newcustomer']['consignee_account_ups']; ?>
" />
          </div>
          <div class="divider">divider</div>
          <div class="unit">
            <label>UPS收货人邮箱：</label>
            <input type="text" name="consignee_email_ups" value="<?php echo $this->_tpl_vars['newcustomer']['consignee_email_ups']; ?>
" />
          </div>
          <div class="divider">divider</div>
          <div class="unit">
            <label>DHL收货人账号：</label>
            <input type="text" name="consignee_account_dhl" value="<?php echo $this->_tpl_vars['newcustomer']['consignee_account_dhl']; ?>
" />
          </div>
          <div class="divider">divider</div>
          <div class="unit">
            <label>DHL收货人税号：</label>
            <input type="text" name="RegistrationNumber_dhl" value="<?php echo $this->_tpl_vars['newcustomer']['RegistrationNumber_dhl']; ?>
" />
          </div>
          <div class="divider">divider</div>
          
          
        </div>
      </div>
      <div>
      
        <div class="pageFormContent" layoutH="58">
        <?php $_from = $this->_tpl_vars['customeroption_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['cl']):
?>
          <div class="unit">
            <label><?php echo $this->_tpl_vars['cl']['customeroption_name']; ?>
：</label>
            <input type="hidden" name="customeroption_o[<?php echo $this->_tpl_vars['key']; ?>
][optionid_o]" value="<?php echo $this->_tpl_vars['cl']['id']; ?>
" />
            <input type="text" value="<?php $_from = $this->_tpl_vars['customeroption']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ct']):
?><?php if ($this->_tpl_vars['ct']['customer_option_id'] == $this->_tpl_vars['cl']['id']): ?><?php echo $this->_tpl_vars['ct']['customer_option_value']; ?>
<?php endif; ?><?php endforeach; endif; unset($_from); ?>" id="customeroption_o[<?php echo $this->_tpl_vars['key']; ?>
][ename_o]" name="customeroption_o[<?php echo $this->_tpl_vars['key']; ?>
][ename_o]" />
            
          </div>
          <div class="divider">divider</div>
        <?php endforeach; endif; unset($_from); ?>
        
        
        </div>
      </div>
      
    </div>
    
    <div class="formBar">
      <ul>
        <li>
          <div class="buttonActive">
            <div class="buttonContent">
              <button type="button" id="submit_old">确定</button>
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

	
	function country_change(val){
		    
			$(document).ready(function()  
            {
				var country_name = $("#country_old").val();
			});
		}
		function area_level_one_change(val){
			$("#country_old").val() = val;
			
		}
    /*var x = $("#quotefrom_id");
    x.change(
    	function()
    	{
    		//获取id为select的下拉框选中的值
    	    var a = $("#quotefrom_id").val();
    	    
    	    $.ajax({
				url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/newcustomer/get_code-id-'+a+'.html',//通过Ajax取数据的目标页面
				type:'get',//方法，还可以是"post"
				dataType:'text',//数据类型，还有其它的，详见jQuery手册
				success:function(locals)//成功后执行的语句，这里是一个函数，“locals”是返回的数据
				{
					//alert(locals);
					$("#customer_code").val(locals);
				}
			});
    	}
    );*/
	
	
	
	
	/*if($("#discount_rebate").val() != ''){
		$("#discount_id").attr("disabled","disabled");
		$("#discount_id option[value='']").attr("selected","selected");
	}
	
	if($("#discount_id").val()!=''){
		$("#discount_rebate").attr("disabled","disabled");
		$("#discount_rebate").val("");
	}
	var discount_id = $("#discount_id");
	discount_id.change(function (){
		var b = $("#discount_id").val();
		if(b != ''){
			$("#discount_rebate").attr("disabled","disabled");
			$("#discount_rebate").val("");
		}else{
			$("#discount_rebate").removeAttr("disabled","disabled");
		}
	});
	
	
	$('input').blur(function(){
     
   		if(this.id == 'discount_rebate'){
			if(this.value != ''){
				 //alert(this.value);
				 //$("#discount_id").class("");
				$("#discount_id").attr("disabled","disabled");
				$("#discount_id option[value='']").attr("selected","selected");
			}else{
				$("#discount_id").removeAttr("disabled","disabled");
			}
		}
		
	});*/
$(document).ready(function()  
{
	//修改邮箱的js**************开始*******************/
	$("#show_div").click(function(){
		$("#div_info").css('display','block');
		$("#show_div").css('display','none');
	});
	$("#edit_new_email").change(function(){
		
		var edit_new_email=$('#edit_new_email').val();	
		var note_info=$('#note_info').val();
		$('#email_result_old').css("display","none");
		$('#email_result_old').html('');	
		if(edit_new_email!=''){
			$.ajax({
				url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/check_change_email',
				type:'post',
				data:{'email':edit_new_email},
				dataType:"json",
				success: function(data){
					if(data.type_email==1){
						if(data.customer_code!= undefined)
						{
							$('#email_result_old').css("display","block");
							$('#email_result_old').css("background-color","#FF0000");
							$('#email_result_old').css("color","#FFF");
							$('#email_result_old').html('该邮箱已经被使用' + ' ' + data.customer_code);
						}
						else
						{
							$('#email_result_old').css("display","none");
							$('#email_result_old').css("background-color","#6F0");
							$('#email_result_old').css("color","#000");
							$('#email_result_old').html('');
						}
					}else{
						$('#email_result_old').css("display","block");
						$('#email_result_old').css("background-color","#F00");
						$('#email_result_old').css("color","#FFF");
						$('#email_result_old').html('该邮箱不可用！');	
					}
				}	
			});
		}
	});
	
	$("#submit_info").click(function(){
		if($("#edit_new_email").val()==''||$("#edit_new_email").val()=='点击这，输入新邮箱'){
			alert('邮箱不可为空！');	
		}else if($("input[name=note_info]").val()==''||$("input[name=note_info]").val()=='点击这，输入事由'){
			alert('事由不可为空！');	
		}else if($('#email_result_old').html()!=''){
			alert("请先修改错误，在进行提交！");
		}else{
			$.ajax({
				url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/oldcustomer/insert_change_info',
				type:'post',
				data:{'change_user_id':$("#session_userid").val(),'user_id':$("#userid").val(),'user_name':$("#c_user_name").val(),'customer_code':$("#userid").val(),'customer_name':$("#customer_name_old").val(),'company':$("#company_old").val(),'old_email':$("#email_old").val(),'new_email':$("#edit_new_email").val(),'note':$("input[name=note_info]").val()},
				dataType:"json",
				success: function(data){
					if(data.type=='y'){
						$("#submit_info").css('display','none');
						$("#info_status").css('display','block');
						document.getElementById("edit_new_email").setAttribute("readOnly",'true'); 
						document.getElementsByName("note_info")[0].setAttribute("readOnly",'true'); 
					}else{
						alert('添加失败！');	
					}
				}
			});	
		}	
	});
	
	
	//修改邮箱的js**************结束*******************/	
		
	$("#submit_old").click(function (){
		if($('#email_result_old').html()!=''){
			alert('请修改主邮箱错误！');
		}else if($('#reserve_email_result_old').html()!=''){
			alert('请修改备用邮箱错误！');
		}else if($("#company_result_old").html()!=''){
			alert('请修改公司错误！');
		}else if($('#reserve_email_old').val()==$('#email_old').val()){
			alert('主邮箱与备用邮箱不能重复！');
		}else {
		    $("#pageForm_old").submit();
		}
		
	});
	var customer_id = $("#customer_id_old").val();
	$('input').blur(function(){
		
		
		if($("#discount_rebate_old").val() != ''){
		$("#discount_id_old").attr("disabled","disabled");
		$("#discount_id_old option[value='']").attr("selected","selected");
	}
	
	if($("#discount_id_old").val()!=''){
		$("#discount_rebate_old").attr("disabled","disabled");
		$("#discount_rebate_old").val("");
	}
	var discount_id = $("#discount_id_old");
	discount_id.change(function (){
		var b = $("#discount_id_old").val();
		if(b != ''){
			$("#discount_rebate_old").attr("disabled","disabled");
			$("#discount_rebate_old").val("");
		}else{
			$("#discount_rebate_old").removeAttr("disabled","disabled");
		}
	});
		
     
   		if(this.id == 'customer_name_old'){
			if(this.value==''){
				
			}
			else{
				$('#customer_name_result_old').html('');
				p='customer_name='+this.value+'&customer_id='+customer_id;
     			$.ajax({url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/check_customer_name',type:'post', dataType:'json',data:p,success:check_customer_name_back});
			}
		}
		
		if(this.id == 'company_old'){
			if(this.value==''){
				
			}
			else{
				$('#select_company').css("display","none");
				$('#select_company').html('');
				$('#company_result_old').html('');
				p='company='+this.value+'&customer_id='+customer_id;
     			$.ajax({url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/check_company',type:'post', dataType:'json',data:p,success:check_company_back});
			}
		}
		
		if(this.id == 'email_old'){
			if(this.value==''){
				
			}
			else{
				$('#email_result_old').html('');
				p='email='+this.value+'&customer_id='+customer_id;
     			$.ajax({url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/check_customer_email',type:'post', dataType:'json',data:p,success:check_email_back});
			}
		}
		/*if(this.id == 'reserve_email_old'){
			if(this.value==''){
				
			}
			else{
				$('#reserve_email_result_old').html('');
				p='reserve_email='+this.value+'&customer_id='+customer_id;
     			$.ajax({url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/check_customer_reserve_email_1',type:'post', dataType:'json',data:p,success:check_reserve_email_back_old});
			}
		}*/
		
	});
	
	
	
});
	function check_email_back(data)
	{
		if(data.type_email==1){
			if(data.customer_code!= undefined)
			{
				$('#email_result_old').css("display","block");
				$('#email_result_old').css("background-color","#FF0000");
				$('#email_result_old').css("color","#FFF");
				$('#email_result_old').html('该邮箱已经被使用' + ' ' + data.customer_code);
			}
			else
			{
				$('#email_result_old').css("display","none");
				$('#email_result_old').css("background-color","#6F0");
				$('#email_result_old').css("color","#000");
				$('#email_result_old').html('');
			}
		}else{
			$('#email_result_old').css("display","block");
			$('#email_result_old').css("background-color","#F00");
			$('#email_result_old').css("color","#FFF");
			$('#email_result_old').html('该邮箱不可用！');	
		}
	}
	
	function check_reserve_email_back_old(data){
		if(data.type_email==1){
			if(data.customer_code!= undefined)
			{
				$('#reserve_email_result_old').css("display","block");
				$('#reserve_email_result_old').css("background-color","#FF0000");
				$('#reserve_email_result_old').css("color","#FFF");
				$('#reserve_email_result_old').html('该邮箱已经被使用' + ' ' + data.customer_code);
			}
			else
			{
				$('#reserve_email_result_old').css("display","none");
				$('#reserve_email_result_old').css("background-color","#6F0");
				$('#reserve_email_result_old').css("color","#000");
				$('#reserve_email_result_old').html('');
			}
		}else{
			$('#reserve_email_result_old').css("display","block");
			$('#reserve_email_result_old').css("background-color","#F00");
			$('#reserve_email_result_old').css("color","#FFF");
			$('#reserve_email_result_old').html('该邮箱不可用！');	
		}
	}
	
	
	function check_customer_name_back(data)
	{
		if(data >= 1)
		{
			$('#customer_name_result_old').css("display","block");
			$('#customer_name_result_old').css("background-color","#FF0000");
			$('#customer_name_result_old').css("color","#FFF");
			$('#customer_name_result_old').html('该客户名已经被使用');
		}
		else
		{
			$('#customer_name_result_old').css("display","none");
			$('#customer_name_result_old').css("background-color","#6F0");
			$('#customer_name_result_old').css("color","#000");
			$('#customer_name_result_old').html('');
		}
	}
	
	function check_company_back(data)
	{
		if(data >= 1)
		{
			$('#company_result_old').css("display","block");
			$('#company_result_old').css("background-color","#FF0000");
			$('#company_result_old').css("color","#FFF");
			$('#company_result_old').html('该公司已经被使用');
		}
		else
		{
			$('#company_result_old').css("display","none");
			$('#company_result_old').css("background-color","#6F0");
			$('#company_result_old').css("color","#000");
			$('#company_result_old').html('');
		}
	}
	
	//获取名字类似的公司
	function get_same_company(event){
		var company	=	$("#company_old").val();
		var select_list	=	$('#select_company');
		if(event.keyCode > 40 || event.keyCode == 8 || event.keyCode ==32){
			$.ajax({
				url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/quotecustomer/get_same_company',
				data:{'company':company},
				dataType:"json",
				type:"post",
				success: function(data){
					select_list.css("display","none");
					select_list.html('');
					if(data[0]!=undefined){
						var ypos = $("#company_old").position().top; 
						var xpos = $("#company_old").position().left; 
						select_list.css('width',$("#company_old").css('width')); 
						select_list.css({'positionuu':'relative','left':(xpos+1) + "px",'top':(ypos+22) +"px"}); 
						var li	='';
						for(var i=0;i<data.length;i++){
							li	+=	'<li style="list-style-type:none;">'+data[i].company+'</li>';
						}
						select_list.append(li);
						select_list.css("display","block");
					}
				}	
			});
		}
	}




</script> 
<!-- {/literal} -->