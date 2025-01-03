<?php /* Smarty version 2.6.22, created on 2014-08-01 09:33:09
         compiled from create_quotation_invoice/edit_out.html */ ?>
<script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/cstown_Sys.js" type="text/javascript"></script>
<link href="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/css/cstown_sys.css" rel="stylesheet" type="text/css" media="screen"/>
<div class="pageContent">
  
    <div class="stkInfEnter" style="width:98%" layoutH="100" id="ttbjd_ysj">
    	  <div class="sIE_title">修改外发报价单</div>
      <form method="post" action="<?php echo $this->_tpl_vars['baojia_action']; ?>
" id="outgoing_edit" enctype="multipart/form-data" onsubmit="return validateCallback(this, navTabAjaxDone)">          
  	  <div class="sIEK" style="width:620px;">
      		<div style="float:left; width:600px;">
              <div class="sIE_l" style=" width:400px;">
                <div class="sIE_l_01" style="width:200px;">
                  <div class="sIE_l_01_title" style="width:70px;">业务员:</div>
                    <input type="text" class="sIE_No" style="width:110px;" value="<?php echo $this->_tpl_vars['outgoing_quotation_sheet']['saleman_name']; ?>
" readonly="readonly" />
                </div>
                <div class="sIE_l_01" style="width:200px;">
                  
                  <div class="sIE_l_01_title" style="width:70px;">名称:</div>
                    <input type="text" class="sIE_No" style="width:110px;" value="<?php echo $this->_tpl_vars['outgoing_quotation_sheet']['design_pic_name']; ?>
" readonly="readonly" />
                </div>
                <div class="sIE_l_01" style="width:200px;">
                  <div class="sIE_l_01_title" style="width:70px;">时间:</div>
                    <input type="text" class="sIE_No" style="width:110px;" value="<?php echo $this->_tpl_vars['outgoing_quotation_sheet']['quotation_date']; ?>
" readonly="readonly" />
                </div>
                
                <div class="sIE_l_01" style="width:200px;">
                  <div class="sIE_l_01_title" style="width:70px;">报价编号:</div>
                    
                    <input type="text" class="sIE_No"  style="width:110px;" value="<?php echo $this->_tpl_vars['outgoing_quotation_sheet']['quotation_code']; ?>
" readonly="readonly" />
                </div>
                
                <div class="sIE_l_01" style="width:200px;">
                  <div class="sIE_l_01_title" style="width:70px;">客户代码:</div>
                    <input type="text" class="sIE_No" style="width:110px;" value="<?php echo $this->_tpl_vars['outgoing_quotation_sheet']['customer_code']; ?>
" readonly="readonly" />
                </div>
                
                <div class="sIE_l_01" style="width:200px;">
                  <div class="sIE_l_01_title" style="width:70px;">数量:</div>
                    <?php if ($this->_tpl_vars['outgoing_quotation_sheet']['pcs'] != ""): ?>
                                <input type="text" name="number" style="width:110px;" id="number_id" onkeyup="number1()" class="sIE_No" value="<?php echo $this->_tpl_vars['outgoing_quotation_sheet']['pcs']; ?>
"  readonly="readonly" />
                            <?php else: ?>
                                <input type="text" name="number" style="width:110px;" id="number_id" onkeyup="number1()" class="sIE_No" value="1" readonly="readonly" />
                            <?php endif; ?>
                </div>
                
                <div class="sIE_l_01" style="width:200px;">
                  <div class="sIE_l_01_title" style="width:70px;">客户名:</div>
                    <input type="text" class="sIE_No" style="width:110px;" value="<?php echo $this->_tpl_vars['outgoing_quotation_sheet']['customer_name']; ?>
" readonly="readonly" />
                </div>
                
                <div class="sIE_l_01" style="width:200px;">
                  <div class="sIE_l_01_title" style="width:70px;">单价:</div>
                    <input type="text" class="sIE_No" style="width:110px;" value="<?php echo $this->_tpl_vars['outgoing_quotation_sheet']['unit_price']; ?>
" readonly="readonly" />
                </div>
                
                <div class="sIE_l_01" style="width:200px;">
                  <div class="sIE_l_01_title" style="width:70px;">公司:</div>
                    <input type="text" class="sIE_No" style="width:110px;" value="<?php echo $this->_tpl_vars['outgoing_quotation_sheet']['customer_company']; ?>
"readonly="readonly" />
                </div>
                
                <div class="sIE_l_01" style="width:200px;">
                  <div class="sIE_l_01_title" style="width:70px;">版费:</div>
                    <input type="text" class="sIE_No" style="width:110px;" value="<?php echo $this->_tpl_vars['outgoing_quotation_sheet']['version_costs']; ?>
" readonly="readonly" />
                </div>
                
                <div class="sIE_l_01" style="width:200px;">
                  <div class="sIE_l_01_title" style="width:70px;">交货期:</div>
                  	<?php $_from = $this->_tpl_vars['times']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['t']):
?>
                        <?php if ($this->_tpl_vars['outgoing_quotation_sheet']['time_id'] == $this->_tpl_vars['t']['id']): ?>
                        	<input type="text" class="sIE_No" style="width:110px;" value="<?php echo $this->_tpl_vars['t']['time_name']; ?>
" readonly="readonly" />
                        <?php endif; ?>
                    <?php endforeach; endif; unset($_from); ?>                  
                  
                  <div class="sIE_l_01_title" style="width:70px; line-height:36px;">颜色:</div>
                    <input type="text"  class="sIE_No" style="width:110px;  margin-top:5px;" value="<?php echo $this->_tpl_vars['color']; ?>
" readonly="readonly" />
                  
                </div>                
      
                <div class="sIE_l_01" style="width:200px;">
                  <textarea name="note" value="<?php echo $this->_tpl_vars['outgoing_quotation_sheet']['note']; ?>
" readonly style="width:180px; height:50px;" onfocus="if(this.value=='备注')this.value='';" class="add01_textarea textInput"><?php echo $this->_tpl_vars['outgoing_quotation_sheet']['note']; ?>
</textarea>
                </div> 
                
                
                
            </div>
                
                
                
                <div style="float:left; width:200px; margin-top:10px;">
                    <div class="sIE_l_01" style="width:200px;">
                      <div class="sIE_l_01_title" style="width:70px;">成本价:</div>
                        <input type="text" name="factory_cost" id="cost_price_id" class="sIE_No" value="<?php echo $this->_tpl_vars['outgoing_quotation_sheet']['whole_cost_price']; ?>
" readonly style="width:110px;" />
                    </div>
                    
                    <div class="sIE_l_01" style="width:200px;">
                      <div class="sIE_l_01_title" style="width:70px;">报价系数:</div>
                        <?php if (isset ( $this->_tpl_vars['coefficient'] )): ?> 
                                <input type="text" name="coefficient" id="coefficient_id_production" onkeyup="coefficient1()" class="sIE_No" value="<?php echo $this->_tpl_vars['coefficient']; ?>
" style="width:110px;" readonly/>
                            <?php else: ?>
                                <input type="text" name="coefficient" id="coefficient_id_production" onkeyup="coefficient1()" class="sIE_No" value="<?php echo $this->_tpl_vars['default_quote_coefficient']; ?>
" style="width:110px;" readonly/>                            
                            <?php endif; ?>
                            <input type="hidden" id="lowest_cost_factor" value="<?php echo $this->_tpl_vars['lowest_cost_factor']; ?>
" readonly/>
                    </div>
                    
                    <div class="sIE_l_01" style="width:200px;">
                      <div class="sIE_l_01_title" style="width:70px;">货币:</div>
                        <select class="picture_select01" id="money_id_production" name="money_1" onchange="money()" style="height:26px; width:116px;">
                            <option value="">请选择</option>
                                <?php $_from = $this->_tpl_vars['exchangerate']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['qf']):
?>
                                    <?php if ($this->_tpl_vars['money'] == $this->_tpl_vars['qf']['value']): ?>
                                         <option selected="selected" value="<?php echo $this->_tpl_vars['qf']['value']; ?>
"><?php echo $this->_tpl_vars['qf']['exchangerate_character']; ?>
 <?php echo $this->_tpl_vars['qf']['exchangerate_name']; ?>
</option>
                                    <?php else: ?>
                                         <option value="<?php echo $this->_tpl_vars['qf']['value']; ?>
"><?php echo $this->_tpl_vars['qf']['exchangerate_character']; ?>
 <?php echo $this->_tpl_vars['qf']['exchangerate_name']; ?>
</option>
                                    <?php endif; ?> 
                                <?php endforeach; endif; unset($_from); ?>
                                
                            </select>
                    </div>
                    
                    <div class="sIE_l_01" style="width:200px;">
                      <div class="sIE_l_01_title" style="width:70px;">最终报价:</div>
                        <input type="text" class="sIE_No" value="<?php echo $this->_tpl_vars['final_quotation']; ?>
" name="final_quotation" id="final_quotation_id" readonly style="width:110px;" />
                    </div>
                    <div id="number_error" style="float:left; margin-top:5px;"></div>
                	<div id="coefficient_error_production" style="float:left; margin-top:5px; display:none; color:#F00;"></div>
                    
                </div>
                

        </div>
            </div>
              <div class="sIE_r" style=" width:400px;">
              	<div class="sIE_l_01" style="margin-top:0px; width:200px;">
                  <div class="sIE_l_01_title" style="width:50px; height:100px;">尺寸:</div>
                  <div class="sIE_r01" style="float:left; width:130px;">
                    <div class="sIE_r01_div" style="width:130px;">
                        <input type="text"  class="sIE_No" value="<?php echo $this->_tpl_vars['outgoing_quotation_sheet']['inch_w']; ?>
" readonly="readonly" />
                        <div style=" margin-left:5px; float:left;">inch W</div>
                    </div>
                    <div class="sIE_r01_div" style="width:130px;">
                        <input type="text"  class="sIE_No" value="<?php echo $this->_tpl_vars['outgoing_quotation_sheet']['inch_h']; ?>
" readonly="readonly" />
                        <div style=" margin-left:5px; float:left;">inch H</div>
                    </div>
                    <div class="sIE_r01_div" style="width:130px;">
                        <input type="text"  class="sIE_No" value="<?php echo $this->_tpl_vars['outgoing_quotation_sheet']['cm_w']; ?>
" readonly="readonly" />
                        <div style=" margin-left:5px; float:left;">cm W</div>
                    </div>
                    <div class="sIE_r01_div" style="width:130px;">
                        <input type="text"  class="sIE_No" value="<?php echo $this->_tpl_vars['outgoing_quotation_sheet']['cm_h']; ?>
" readonly="readonly" />
                        <div style=" margin-left:5px; float:left;">cm H</div>
                    </div>
                  </div>
                </div>
                
                <div class="sIE_r" style="height:100px; width:100px; margin-top:0px;">
                <div  style="height:160px; width:160px;"><img width="160px;" height="160px;" src="<?php echo $this->_tpl_vars['outgoing_quotation_sheet']['image']; ?>
" /></div>
 <div class="sIE_l_01_title"  style="width:60px;">设计师:</div>
          <input type="text" class="sIE_No" disabled="disabled" id="design_user" name="design_user_name" value="<?php echo $this->_tpl_vars['outgoing_quotation_sheet']['design_user_name']; ?>
"  style="width:60px;"/>                
              </div>
              </div>
              <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['outgoing_quotation_sheet']['id']; ?>
" />
              
              
    	  	</div>
           
<script type="text/javascript" language="javascript">	   
            
	  function number1(){
		 $(document).ready(function(){
			 var cost_price = $("#cost_price_id").val();
			 
			 cost_price = cost_price.replace("元","");
//			 var number = $("#number_id").val();
			 var coefficient = $("#coefficient_id_production").val();
			 var money = $("#money_id_production").val();
			 
			 var aaa = $("#money_id_production").find("option:selected").text();
			 aaa=aaa.split(" ");
			 
//			 if(number=="" || number==0){
//			 	 $("#number_error").html("<div style=color:#F00;>*数量不能为空，或者为0！</div>");
//			 	 var final_quotation = cost_price + "*" + 0 + "*" + coefficient + "/" + money;
//			 }else 
			 if(coefficient==""){
			 	 var final_quotation = cost_price + "*" + 0 + "*" + 0 + "/" + money;
			 }else{
			 	 $("#number_error").html("");
//			 	 var final_quotation = cost_price + "*" + number + "*" + coefficient + "/" + money;
				 var final_quotation = cost_price + "*" + coefficient + "/" + money;
			 }			
			 
			 final_quotation = eval('('+final_quotation+')');
			 final_quotation = final_quotation.toFixed(2);
			 $("#final_quotation_id").val(aaa[0] + final_quotation);
			 
		 }); 
	  } 
	  
	  function coefficient1(){
		 $(document).ready(function(){
			 var cost_price = $("#cost_price_id").val();
			 cost_price = cost_price.replace("元","");
//			 var number = $("#number_id").val();
			 var coefficient = $("#coefficient_id_production").val();
			 var lowest_cost_factor = $("#lowest_cost_factor").val();
			 
			 var money = $("#money_id_production").val();
			 
			 var aaa = $("#money_id_production").find("option:selected").text();
			 aaa=aaa.split(" ");

			 if(coefficient<lowest_cost_factor){
				 $("#coefficient_error_production").html("<div style=color:#F00;>*此报价系数低于标准，需要提交主管审核后生效！</div>");
			 }else{
				 $("#coefficient_error_production").html("");
			 }
			 
			if(coefficient=="" || coefficient==0){
				var final_quotation = cost_price + "*" + 0 + "*" + 0 + "/" + money;
			}else{
//				var final_quotation = cost_price + "*" + number + "*" + coefficient + "/" + money;
				var final_quotation = cost_price + "*" + coefficient + "/" + money;
			}			 
			 
			final_quotation = eval('('+final_quotation+')');
			final_quotation = final_quotation.toFixed(2);
			$("#final_quotation_id").val(aaa[0] + final_quotation);				   
			 
		 });	   
	  }
	  
	  function money(){
		 $(document).ready(function(){
			 var cost_price = $("#cost_price_id").val();
			 cost_price = cost_price.replace("元","");
//			 var number = $("#number_id").val();
			 var coefficient = $("#coefficient_id_production").val();
			 var lowest_cost_factor = $("#lowest_cost_factor").val();
			 
			 var money = $("#money_id_production").val();
			 
			 var aaa = $("#money_id_production").find("option:selected").text();
			 aaa=aaa.split(" ");

//             var final_quotation = cost_price + "*" + number + "*" + coefficient + "/" + money;
			 var final_quotation = cost_price + "*" + coefficient + "/" + money;			 
			 
			final_quotation = eval('('+final_quotation+')');
			final_quotation = final_quotation.toFixed(2);
			$("#final_quotation_id").val(aaa[0] + final_quotation);				   
			 
		 });	   
	  }	  
	  
</script>            

        
        <div class="button" style="margin-left:80%; margin-right:5px;">
          <div class="buttonContent">
            <button class="close">取消</button>
          </div>
        </div>
      </div>
            

</div>
 
<!-- {literal} --> 
<script type="text/javascript">


</script> 
<!-- {/literal} -->