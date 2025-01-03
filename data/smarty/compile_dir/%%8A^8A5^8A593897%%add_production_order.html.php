<?php /* Smarty version 2.6.22, created on 2014-08-26 15:36:33
         compiled from cdr_quotation/add_production_order.html */ ?>
<script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/cstown_Sys.js" type="text/javascript"></script>
<link href="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/css/cstown_sys.css" rel="stylesheet" type="text/css" media="screen"/>
<div class="pageContent" style="height:650px;">
 
  
  <div style="float:left; width:100%;">
  		
    	  <div class="sIE_title" style="width:60%; margin-left:60px;">填写做货单</div>
        </div>
          
      <form method="post" action="<?php echo $this->_tpl_vars['act']; ?>
" id="pageForm" enctype="multipart/form-data" onsubmit="return validateCallback(this, navTabAjaxDone)">
      <input type="hidden" name="exchange_rate_id" id="exchange_rate_id" value="<?php echo $this->_tpl_vars['exchange_rate_id']; ?>
" />
      <input type="hidden" name="quotation_category" id="quotation_category" value="<?php echo $this->_tpl_vars['quotation_category']; ?>
" />
        <input type="hidden" name="mid" id="mid" value='<?php echo $this->_tpl_vars['id']; ?>
'/>

      <input type="hidden" name="ouyuan_version" id="ouyuan_version" value="<?php echo $this->_tpl_vars['ouyuan_version']; ?>
" />
      <input type="hidden" name="renmin_version" id="renmin_version" value="<?php echo $this->_tpl_vars['renmin_version']; ?>
" />
      <input type="hidden" name="final_quotation_hidden" id="final_quotation_hidden" value="0" />
    	  	<div class="sIEK" style="width:97%; margin-left:25px;">
              <div class="sIE_l" style="width:400px;">
                <div class="sIE_l_01" style="width:200px;">
                  <div class="sIE_l_01_title">业务员:</div>
                    <input type="text" class="sIE_No" style="width:100px;" name="saleman_name" value="<?php echo $this->_tpl_vars['saleman_name']; ?>
"  readonly="readonly" />
                </div>
                <div class="sIE_l_01" style="width:200px;">
                  <div class="sIE_l_01_title" style="width:80px;">时间:</div>
                    <input type="text"  id="quotation_date" name="quotation_date"value="<?php echo $this->_tpl_vars['quotation_date']; ?>
" style="width:100px;" name="time" class="sIE_No"  readonly="readonly" />
                </div>
                
                <div class="sIE_l_01" style="width:200px;">
                  <div class="sIE_l_01_title">客户代码:</div>
                    <input type="text" name="customer_code" id="customer_code" style="width:100px;" value="<?php echo $this->_tpl_vars['customer_code']; ?>
" class="sIE_No" readonly="readonly" />
                </div>    
                <div class="sIE_l_01" style="width:200px;">
                  <div class="sIE_l_01_title" style="width:80px;">报价编号:</div>
                  <input type="text" name="quotation_code" id="quotation_code" style="width:100px;" value="<?php echo $this->_tpl_vars['quotation_code']; ?>
" class="sIE_No"  readonly="readonly"/>
                </div>
                <div class="sIE_l_01" style="width:200px;">
                  <div class="sIE_l_01_title">客户名:</div>
                    <input type="text" name="customer_name" style="width:100px;" id="customer_name" value="<?php echo $this->_tpl_vars['customer_name']; ?>
" class="sIE_No"  readonly="readonly" />
                </div>
               
                
                <div class="sIE_l_01" style="width:200px;">
                  <div class="sIE_l_01_title">客户提供单号:</div>
                    <input type="text" name="customers_order" style="width:100px;" value="<?php echo $this->_tpl_vars['customers_order']; ?>
" class="sIE_No" id="customers_order"/>
                </div> 
               
                <div class="sIE_l_01" style="width:200px;">
                  <div class="sIE_l_01_title" style="width:80px;">公司:</div>
                  <input type="text" name="customer_company" style="width:100px;" value="<?php echo $this->_tpl_vars['customer_company']; ?>
" class="sIE_No" id="customer_company"  readonly="readonly" />
                </div>
                 <div class="sIE_l_01" style="width:200px;">
                <div class="sIE_l_01_title">发货期:</div>
                <select id="deliver_goods" class="picture_select01" name="deliver_goods">
                <option value="普通">普通</option>
                <option value="加急">加急</option>
                </select>
                </div>
                 
                <div class="sIE_l_01" style="width:200px;">
                  <div class="sIE_l_01_title" style=" margin-left:-200px;">报价:</div>
                    <input class="sIE_No digits" id="final_quote" style="width:100px;  margin-left:-120px;" type="text" name="final_quote" value="<?php echo $this->_tpl_vars['final_quote']; ?>
" readonly="readonly">
                <textarea class="add01_textarea textInput" style="width:180px;height:65px; margin-bottom:10px;" onfocus="if(this.value=='销售备注')this.value='';" name="remark">销售备注</textarea>
                </div>

                <div id="cdr_error" style="float:left; width:500px; margin-top:10px; color:#F00; display:none; font-size:12px;"></div>
                <div class="sIE_l_01" style="width:200px; margin-top:-65px;">
                  <div class="sIE_l_01_title">货币:</div>
                 <input class="sIE_No" id="exchange_rate_id" style="width:100px; " type="text" name="exchange_rate_id" value="<?php echo $this->_tpl_vars['exchange_rate_id']; ?>
" readonly="readonly"/>
             
                </div>
              </div>
              <div class="sIE_r" style="width:630px; height:auto;">
              	<div class="sIE_l_01" style="margin-top:0px; width:210px;">
                  <div class="sIE_l_01_title" style="width:50px; height:100px;">尺寸:</div>
                  <div class="sIE_r01" style="float:left; width:160px;">
                    <div class="sIE_r01_div">
                        <input type="text" id="inch_w" style="width:80px;" value="<?php echo $this->_tpl_vars['content_inch_w']; ?>
" disabled="disabled" class="sIE_No" readonly="readonly"/>
                        <div style=" margin-left:5px; float:left;">inch W</div>
                    </div>
                    <div class="sIE_r01_div">
                        <input type="text" id="inch_h" style="width:80px;" value="<?php echo $this->_tpl_vars['content_inch_h']; ?>
" disabled="disabled" class="sIE_No" readonly="readonly"/>
                        <div style=" margin-left:5px; float:left;">inch H</div>
                    </div>
                    <div class="sIE_r01_div">
                        <input type="text" id="cm_w" style="width:80px;" value="<?php echo $this->_tpl_vars['content_cm_w']; ?>
" disabled="disabled" class="sIE_No" readonly="readonly"/>
                        <div style=" margin-left:5px; float:left;">cm W</div>
                    </div>
                    <div class="sIE_r01_div">
                        <input type="text" id="cm_h" style="width:80px;" value="<?php echo $this->_tpl_vars['content_cm_h']; ?>
" disabled="disabled" class="sIE_No" readonly="readonly"/>
                        <div style=" margin-left:5px; float:left;">cm H</div>
                    </div>
                    
                  </div>
                  	
                <?php if ($this->_tpl_vars['quotation_category'] == '5'): ?>
                    <div class="sIE_l_01_title" id="sheji" style="width:50px; height:100px; display:block;">设计师:</div>
                    
                    <div class="sIE_r01" style="float:left; width:160px;">
                  
                    	<input type="text" class="sIE_No" value="<?php echo $this->_tpl_vars['design_user_name']; ?>
" id="shejishi" readonly="readonly" style="width:80px;"/>
                     </div>
                  <?php endif; ?>
                 
                </div>
                
               
                <div class="sIE_r" style="height:210px; width:210px; margin-top:0px;">
                <div class="sIE_r_img" id="image" style="width:210px; height:210px;"><img src="<?php echo $this->_tpl_vars['upload_jpg']; ?>
" style="height:210px; width:210px;" /></div>
                <input type="hidden" name="image" id="image_hidden" />
                 <div class="sIE_r_img" id="cdr" style="height:36px; width:211px;  margin-left:20px; margin-top:20px; ">
              CDR: <a href="<?php echo $this->_tpl_vars['upload_cdr']; ?>
"><font color="blue" size="7">下载查看</font></a>
              </div>
              </div>
    	  	</div>
             </div>
            
              <div class="sIE_l_02">
              <div class="button" style="margin-left:54%; margin-top:6%;" >
                  <div class="buttonContent" >          
                      <button type="submit">确定</button>
                   </div>
                   </div>
              <div class="button" style="margin-left:58%; margin-top:-2%;"><div class="buttonContent"><button class="close">取消</button></div></div>
              </div>
   </div>    
     </form>     
<script type="text/javascript" language="javascript">

</script>       
        
  


<!-- {/literal} -->