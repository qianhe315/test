<?php /* Smarty version 2.6.22, created on 2015-06-15 09:37:28
         compiled from customer_order_information/outgoing_quotation_sheet_order.html */ ?>
<script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/cstown_Sys.js" type="text/javascript"></script>
<link href="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/css/cstown_sys.css" rel="stylesheet" type="text/css" media="screen"/>
<div class="pageContent">
  
    <div class="stkInfEnter" style="width:98%" layoutH="100" id="ttbjd_ysj">
    	  <div class="sIE_title">填写外发做货单</div>
       <form method="post" action="<?php echo $this->_tpl_vars['action']; ?>
" id="submit_form" enctype="multipart/form-data" onsubmit="return validateCallback(this, navTabAjaxDone)">          
  	  <div class="sIEK" style="width:580px;">
      		<div style="float:left; width:550px;">
              <div class="sIE_l" style=" width:370px;">
                <div class="sIE_l_01" style="width:180px;">
                  <div class="sIE_l_01_title">下单人:</div>
                    <input type="text" readonly name="saleman_name" value="<?php echo $this->_tpl_vars['quotation_sheet']['saleman_name']; ?>
" class="sIE_No" />
                </div>
                <div class="sIE_l_01" style="width:180px;">
                  <div class="sIE_l_01_title" style="width:80px;">供应商代码:</div>
                    <input type="text" readonly name="customer_code" value="<?php echo $this->_tpl_vars['quotation_sheet']['customer_code']; ?>
" class="sIE_No" />
                </div>
                
                <div class="sIE_l_01" style="width:180px;">
                  <div class="sIE_l_01_title">时间:</div>
                    <input type="text" readonly name="time" value="<?php echo $this->_tpl_vars['quotation_sheet']['q_time']; ?>
" class="sIE_No" />
                </div>
                <div class="sIE_l_01" style="width:180px;">
                  <div class="sIE_l_01_title">客户名:</div>
                    <input type="text" readonly name="customer_name" value="<?php echo $this->_tpl_vars['quotation_sheet']['customer_name']; ?>
" class="sIE_No" />
                </div>
                <div class="sIE_l_01" style="width:180px;">
                  
                  <div class="sIE_l_01_title">交货期:</div>
                    <input type="text" readonly name="deliver_goods" value="<?php echo $this->_tpl_vars['quotation_sheet']['deliver_goods']; ?>
" class="sIE_No" />
                </div>
                <div class="sIE_l_01" style="width:180px;">
                  <div class="sIE_l_01_title">设计名称:</div>
                    <input type="text" readonly name="design_pic_name" value="<?php echo $this->_tpl_vars['quotation_sheet']['design_name']; ?>
" class="sIE_No" />
                </div>
                <div class="sIE_l_01" style="width:180px;">
                  <div class="sIE_l_01_title">订单号:</div>
                    <input type="text" readonly name="order_number" value="<?php echo $this->_tpl_vars['quotation_sheet']['order_number']; ?>
" class="sIE_No" />
                </div>
                <div class="sIE_l_01" style="width:180px;">
                  <div class="sIE_l_01_title">数量:</div>
                    <input type="text" readonly name="pcs" value="<?php echo $this->_tpl_vars['quotation_sheet']['number']; ?>
" class="sIE_No" />
                </div>
                 
                
                
               
                <div class="sIE_l_01" style="width:180px;">
                  <div class="sIE_l_01_title">客户提供单号:</div>
                    <input type="text" name="customers_order" value="<?php echo $this->_tpl_vars['quotation_sheet']['customer_number']; ?>
" readonly class="sIE_No" />
                </div>
                <div class="sIE_l_01" style="width:180px;">
                  <div class="sIE_l_01_title">尺寸:</div>
                    <input type="text" readonly name="size" value="<?php echo $this->_tpl_vars['quotation_sheet']['size']; ?>
" class="sIE_No" />
                </div>
                <div class="sIE_l_01" style="width:100%;">
                  <div class="sIE_l_01_title">颜色:</div>
                    <input type="text" readonly name="color" value="<?php echo $this->_tpl_vars['color']; ?>
" class="sIE_No" style="width:256px;" />
                </div>

                </div>
                <div style="float:left; width:160px; margin-left:10px;">
                	<textarea name="note" readonly style="width:160px; margin-bottom:10px;" class="add01_textarea textInput"><?php echo $this->_tpl_vars['quotation_sheet']['remark']; ?>
</textarea>
                </div>
                
        </div>
              </div>
             <input type="hidden" name="image" value="<?php echo $this->_tpl_vars['quotation_sheet']['image']; ?>
" />
             <input type="hidden" name="quotation_category" value="<?php echo $this->_tpl_vars['quotation_sheet']['quotation_category']; ?>
" /> 
             <input type="hidden" name="quotation_category_id" value="<?php echo $this->_tpl_vars['quotation_sheet']['quotation_category_id']; ?>
" /> 
             <input type="hidden" name="design_id" value="<?php echo $this->_tpl_vars['quotation_sheet']['design_id']; ?>
" />
             <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['quotation_sheet']['id']; ?>
" />  
              <div class="sIE_r" style=" width:200px; float:left;">
                               
                <div class="sIE_r" style="height:180px; width:180px; margin-top:0px;">
                <div class="sIE_r_img" style="height:180px; width:180px;"><img src="<?php echo $this->_tpl_vars['quotation_sheet']['image']; ?>
" /></div>
              </div>   
            </div>
      </form>          
    	  	</div>
     <div class="formBar"> 
      <div class="sIE_l_02">
  		<div class="button" style="margin-left:96%; margin-right:5px;">
    		<div class="buttonContent">
       			<button class="close">取消</button>
    		</div>
  		</div>
	</div>
    </div> 
 </div>
       
