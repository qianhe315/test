<?php /* Smarty version 2.6.22, created on 2023-07-21 10:31:39
         compiled from outgoing_inquiry_sheet/edit.html */ ?>
<script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/cstown_Sys.js" type="text/javascript"></script>
<link href="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/css/cstown_sys.css" rel="stylesheet" type="text/css" media="screen"/>
<div class="pageContent">
<input type="hidden" value="<?php if ($this->_tpl_vars['outgoing_inquiry_sheet']['type']): ?><?php echo $this->_tpl_vars['outgoing_inquiry_sheet']['type']; ?>
<?php else: ?>1<?php endif; ?>" id="submit_type" />
<?php if ($this->_tpl_vars['outgoing_inquiry_sheet']['type'] != '' && $this->_tpl_vars['outgoing_inquiry_sheet']['type'] == '1'): ?>
<form method="post" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, navTabAjaxDone)" id="outgoing_inquiry_sheet_form1">
  <div class="stkInfEnter" style="width:98%;<?php if ($this->_tpl_vars['outgoing_inquiry_sheet']['type'] != '' && $this->_tpl_vars['outgoing_inquiry_sheet']['type'] == '2'): ?>display:none;<?php else: ?>display:block;<?php endif; ?>" layoutH="100" id="ttbjd_ysj">
  <div class="sIE_title" style="float:left; width:100%;">
  		<div class="sIE_title" style="width:15%;">
    <?php if ($this->_tpl_vars['outgoing_inquiry_sheet']['type'] == ''): ?>
      <div class="button">
        <div class="buttonContent">
          <button type="button" onclick="document.getElementById('ttbjd_wsj').style.display='block';document.getElementById('ttbjd_ysj').style.display='none';$('#submit_type').val('2');">外发询价单(无设计)</button>
        </div>
      </div>
    <?php endif; ?>
    </div>
      <div class="sIE_title" style="width:60%;">外发询价单</div>
    
  </div>
    
    
    <input type="hidden" name="type" value="1" id="type" />
    <input type="hidden" name="outgoing_inquiry_sheet_id" value="<?php echo $this->_tpl_vars['outgoing_inquiry_sheet']['id']; ?>
" />
    <div class="sIEK" style="width:580px;">
    
      <div style="float:left; width:550px;">
        <div class="sIE_l" style=" width:370px;">
          <div class="sIE_l_01" style="width:180px;">
            <div class="sIE_l_01_title">业务员:</div>
            <input type="text" class="sIE_No" name="saleman_name" value="<?php if ($this->_tpl_vars['outgoing_inquiry_sheet']['salesman_user_name'] != ''): ?><?php echo $this->_tpl_vars['outgoing_inquiry_sheet']['salesman_user_name']; ?>
<?php else: ?><?php echo $this->_tpl_vars['user_info']['user_name']; ?>
<?php endif; ?>" readonly />
          </div>
          <div class="sIE_l_01" style="width:186px;">
            <div class="sIE_l_01_title" style="width:80px;">报价编号:</div>
            <select class="picture_select01" id="choose_design_code" name="quotation_code" style="height:26px; width:82px;">
            
              <option value="">请选择</option>
              <?php $_from = $this->_tpl_vars['quote_info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['qf']):
?>
                  <?php if ($this->_tpl_vars['quotation_code'] == $this->_tpl_vars['qf']['design_content_code']): ?>
                  <option selected="selected" value="<?php echo $this->_tpl_vars['qf']['design_content_code']; ?>
"><?php echo $this->_tpl_vars['qf']['design_content_code']; ?>
</option>
                  <?php else: ?>
                  <option value="<?php echo $this->_tpl_vars['qf']['design_content_code']; ?>
"><?php echo $this->_tpl_vars['qf']['design_content_code']; ?>
</option>
                  <?php endif; ?>
              <?php endforeach; endif; unset($_from); ?>
            </select>
          </div>
          <div class="sIE_l_01" style="width:180px;">
            <div class="sIE_l_01_title" style="width:80px;">客户代码:</div>
            <input type="text" class="sIE_No" name="customer_code" id="outgoing_inquiry_sheet_customer_code" value="<?php echo $this->_tpl_vars['outgoing_inquiry_sheet']['customer_code']; ?>
" />
          </div>
          <div class="sIE_l_01" style="width:180px;">
            <div class="sIE_l_01_title">时间:</div>
            <input type="text" class="sIE_No" name="quotation_date" id="quotation_date" value="<?php if ($this->_tpl_vars['outgoing_inquiry_sheet']['quotation_date'] != ''): ?><?php echo $this->_tpl_vars['outgoing_inquiry_sheet']['quotation_date']; ?>
<?php else: ?><?php echo $this->_tpl_vars['today']; ?>
<?php endif; ?>"  readonly  />
          </div>
          <div class="sIE_l_01" style="width:180px;">
            <div class="sIE_l_01_title">客户名:</div>
            <input type="text" class="sIE_No" name="customer_name" id="outgoing_inquiry_sheet_customer_name" value="<?php echo $this->_tpl_vars['outgoing_inquiry_sheet']['customer_name']; ?>
"   readonly />
          </div>
          <div class="sIE_l_01" style="width:180px;">
            <div class="sIE_l_01_title">名称:</div>
            <input type="text" class="sIE_No" id="design_name" name="design_name" value="<?php echo $this->_tpl_vars['outgoing_inquiry_sheet']['design_pic_name']; ?>
" />
          </div>
          <div class="sIE_l_01" style="width:180px;">
            <div class="sIE_l_01_title">公司:</div>
            <input type="text" class="sIE_No" name="customer_company" readonly id="outgoing_inquiry_sheet_company" value="<?php echo $this->_tpl_vars['outgoing_inquiry_sheet']['customer_company']; ?>
"  />
          </div>
          
          <div class="sIE_l_01" style="width:180px;">
            <div class="sIE_l_01_title" style="width:74px;">数量:</div>
            <input type="text" class="sIE_No" id="outgoing_inquiry_sheet_number" name="number" value="<?php echo $this->_tpl_vars['outgoing_inquiry_sheet']['pcs']; ?>
"/>
          </div>
          <div class="sIE_l_01" style="width:186px;">
            <div class="sIE_l_01_title" style="width:80px;">交货期:</div>
            <select class="picture_select01" id="outgoing_inquiry_sheet_picture_select"  name="time_id" style="height:26px; width:82px;">
               <?php $_from = $this->_tpl_vars['times']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['t']):
?>
              <option <?php if ($this->_tpl_vars['outgoing_inquiry_sheet']['time_id'] == $this->_tpl_vars['t']['id']): ?>selected="selected"<?php endif; ?> value="<?php echo $this->_tpl_vars['t']['id']; ?>
"><?php echo $this->_tpl_vars['t']['time_name']; ?>
</option>
              <?php endforeach; endif; unset($_from); ?>
            </select>
          </div>
        </div>
        <div style="float:left; width:160px; margin-left:10px;">
          <textarea name="note" style="width:160px; margin-bottom:10px;" onfocus="if(this.value=='备注')this.value='';" class="add01_textarea textInput"><?php if ($this->_tpl_vars['outgoing_inquiry_sheet']['note']): ?><?php echo $this->_tpl_vars['outgoing_inquiry_sheet']['note']; ?>
<?php else: ?>备注<?php endif; ?></textarea>
        </div>
        <div class="sIE_l_01" style="width:66%;">
          <div class="sIE_l_01_title" style="width:80px;">颜色:</div>
          
          <div id="OutgoingQuote_AddDiv1" class="sIE_l_01" style="width:220px;">
          	  <?php if ($this->_tpl_vars['colors']): ?>
              <?php $_from = $this->_tpl_vars['colors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['c']):
?>
              <div style=" float:right; height:22px; width:200px; margin-bottom:10px;margin-right:20px;"><input type="text" class="sIE_No" id="outgoing_inquiry_sheet_color"  name="color[]" value="<?php echo $this->_tpl_vars['c']['color']; ?>
" /><input type="button" class="quoteK_bottom01_button" style="margin-top:2px; margin-left:10px;"  value="删除" onclick="getDelOutgoingQuote_Add(this)" /></div>
              <?php endforeach; endif; unset($_from); ?>
              <?php endif; ?>
              <div style="float:right; height:22px; width:200px; margin-bottom:10px; margin-right:20px;">
                <input type="text" class="sIE_No" name="color[]" />
                <input type="button" id="OutgoingQuote_Add"  class="quoteK_bottom01_button" style="margin-top:2px; margin-left:10px;"  value="添加" onclick="change_html(this)" />
              </div>
              
          </div>
          
        </div>
        <script>
		
		 
		 
		 function getDelOutgoingQuote_Add(k){
		
			$(k).parent().remove();    
		
		}
		
		function change_html(k){
			$(k).val("删除");
			$(k).attr("onclick","getDelOutgoingQuote_Add(this)");
			$(k).removeAttr("id");
			
			$("#OutgoingQuote_AddDiv1").append("<div style=\" float:right; height:22px; width:200px; margin-bottom:10px;margin-right:20px;\"><input type=\"text\" class=\"sIE_No\"  name=\"color[]\" /><input type=\"button\" id=\"OutgoingQuote_Add\"  class=\"quoteK_bottom01_button\" style=\"margin-top:2px; margin-left:10px;\"  value=\"添加\" onclick=\"change_html(this)\" /></div>");
			
		}
		</script> 
      </div>
      <div id="outgoing_inquiry_sheet_result" style="line-height: 26px; float: left; color:#F00; margin-left: 10px; display:none;"></div>
      
      
    </div>
    <div class="sIE_r" style=" width:400px;">
      <div class="sIE_l_01" style="margin-top:0px; width:200px;">
        <div class="sIE_l_01_title" style="width:50px; height:100px;">尺寸:</div>
        <div class="sIE_r01" style="float:left; width:130px;">
          <div class="sIE_r01_div" style="width:130px;">
            <input type="text"  class="sIE_No" id="inch_w" name="inch_w" readonly value="<?php echo $this->_tpl_vars['outgoing_inquiry_sheet']['inch_w']; ?>
"  />
            <div style=" margin-left:5px; float:left;">inch W</div>
          </div>
          <div class="sIE_r01_div" style="width:130px;">
            <input type="text"  class="sIE_No" id="inch_h" name="inch_h" readonly value="<?php echo $this->_tpl_vars['outgoing_inquiry_sheet']['inch_h']; ?>
" />
            <div style=" margin-left:5px; float:left;">inch H</div>
          </div>
          <div class="sIE_r01_div" style="width:130px;">
            <input type="text"  class="sIE_No" id="cm_w" name="cm_w" readonly value="<?php echo $this->_tpl_vars['outgoing_inquiry_sheet']['cm_w']; ?>
" />
            <div style=" margin-left:5px; float:left;">cm W</div>
          </div>
          <div class="sIE_r01_div" style="width:130px;">
            <input type="text"  class="sIE_No" id="cm_h" name="cm_h" readonly value="<?php echo $this->_tpl_vars['outgoing_inquiry_sheet']['cm_h']; ?>
" />
            <div style=" margin-left:5px; float:left;">cm H</div>
          </div>
        </div>
        
        <div class="sIE_l_01" style="margin-top:0px; width:200px;">
            <div class="sIE_l_01_title" style="width:80px;">服装尺寸备注:</div>
            <div class="sIE_r01" style="float:left; width:120px;">
              <div class="sIE_r01_div" style="width:120px;">
                <input type="text"  class="sIE_No" name="size_note" style="width:120px;" value="<?php echo $this->_tpl_vars['outgoing_inquiry_sheet']['size_note']; ?>
"  />
              </div>
            </div>
        </div>
        
      </div>
      <div class="sIE_l_01" style="width:186px;">
            <!--<div class="sIE_l_01_title" style="width:80px;">产品分类:</div>
            <select class="picture_select01" id="product_type"  name="product_type" style="height:26px; width:82px;">
              <option value="外发丝网印" <?php if ($this->_tpl_vars['outgoing_inquiry_sheet']['product_type'] == "外发丝网印"): ?>selected="selected"<?php endif; ?>>外发丝网印</option>
              <option value="外发章类" <?php if ($this->_tpl_vars['outgoing_inquiry_sheet']['product_type'] == "外发章类"): ?>selected="selected"<?php endif; ?>>外发章类</option>
              <option value="外发啦啦服" <?php if ($this->_tpl_vars['outgoing_inquiry_sheet']['product_type'] == "外发啦啦服"): ?>selected="selected"<?php endif; ?>>外发啦啦服</option>
              <option value="外发服饰" <?php if ($this->_tpl_vars['outgoing_inquiry_sheet']['product_type'] == "外发服饰"): ?>selected="selected"<?php endif; ?>>外发服饰</option>
              <option value="外发其它" <?php if ($this->_tpl_vars['outgoing_inquiry_sheet']['product_type'] == "外发其它"): ?>selected="selected"<?php endif; ?>>外发其它</option>
            </select>
          </div>-->
      <div class="sIE_r" style="height:200px; width:200px;">
        <div class="sIE_r_img" id="design_image"><?php if ($this->_tpl_vars['outgoing_inquiry_sheet']['image']): ?><img style="width:120px; height:120px;" src="<?php echo $this->_tpl_vars['outgoing_inquiry_sheet']['image']; ?>
" height="100px" width="100px" /><?php endif; ?></div>
        <div class="sIE_l_01" style="margin-top:10px; width:200px; margin-left:12px;">
          <div class="sIE_l_01_title"  style="width:60px;">设计师:</div>
          <input type="text" class="sIE_No" readonly id="design_user" name="design_user_name" value="<?php echo $this->_tpl_vars['outgoing_inquiry_sheet']['design_user_name']; ?>
"  style="width:60px;"/>
        </div>
      </div>
    </div>
   
  </div>
 </form>
 <?php elseif ($this->_tpl_vars['outgoing_inquiry_sheet']['type'] == ''): ?>
 <form method="post" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, navTabAjaxDone)" id="outgoing_inquiry_sheet_form1">
  <div class="stkInfEnter" style="width:98%; position:relative;" layoutH="100" id="ttbjd_ysj">
    <div style="float:left; width:100%;">
  		<div class="sIE_title" style="width:15%;">

      <div class="button">
        <div class="buttonContent">
          <button type="button" onclick="document.getElementById('ttbjd_wsj').style.display='block';document.getElementById('ttbjd_ysj').style.display='none';$('#submit_type').val('2');">外发询价单(无设计)</button>
        </div>
      </div>

    </div>
      <div class="sIE_title" style="width:60%;">外发询价单</div>
    
  </div>
    
    <input type="hidden" name="type" value="1" id="type" />
    <div class="sIEK" style="width:490px;">
    
      <div style="float:left; width:480px;">
        <div class="sIE_l" style=" width:480px;">
          <div class="sIE_l_01" style="width:200px;">
            <div class="sIE_l_01_title">业务员:</div>
            <input type="text" class="sIE_No" style="width:100px;" name="saleman_name" value="<?php if ($this->_tpl_vars['outgoing_inquiry_sheet']['salesman_user_name'] != ''): ?><?php echo $this->_tpl_vars['outgoing_inquiry_sheet']['salesman_user_name']; ?>
<?php else: ?><?php echo $this->_tpl_vars['user_info']['user_name']; ?>
<?php endif; ?>" readonly />
          </div>
          <div class="sIE_l_01" style="width:206px;">
            <div class="sIE_l_01_title" style="width:80px;">报价编号:</div>
            <select class="picture_select01" id="choose_design_code" name="quotation_code" style="height:26px; width:82px;">
            
              <option value="">请选择</option>
              <?php $_from = $this->_tpl_vars['quote_info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['qf']):
?>
                  <?php if ($this->_tpl_vars['quotation_code'] == $this->_tpl_vars['qf']['design_content_code']): ?>
                  <option selected="selected" value="<?php echo $this->_tpl_vars['qf']['design_content_code']; ?>
"><?php echo $this->_tpl_vars['qf']['design_content_code']; ?>
</option>
                  <?php else: ?>
                  <option value="<?php echo $this->_tpl_vars['qf']['design_content_code']; ?>
"><?php echo $this->_tpl_vars['qf']['design_content_code']; ?>
</option>
                  <?php endif; ?>
              <?php endforeach; endif; unset($_from); ?>
            </select>
          </div>
          <div class="sIE_l_01" style="width:260px;">
            <div class="sIE_l_01_title" style="width:80px; margin-left:70px;">客户代码:</div>
            <input type="text" class="sIE_No" style="width:100px;" name="customer_code" id="outgoing_inquiry_sheet_customer_code" value="<?php echo $this->_tpl_vars['outgoing_inquiry_sheet']['customer_code']; ?>
" />
          </div>
          <div class="sIE_l_01" style="width:200px;">
            <div class="sIE_l_01_title">时间:</div>
            <input type="text" class="sIE_No" style="width:100px;" name="quotation_date" id="quotation_date" value="<?php if ($this->_tpl_vars['outgoing_inquiry_sheet']['quotation_date'] != ''): ?><?php echo $this->_tpl_vars['outgoing_inquiry_sheet']['quotation_date']; ?>
<?php else: ?><?php echo $this->_tpl_vars['today']; ?>
<?php endif; ?>"  readonly  />
          </div>
          <div class="sIE_l_01" style="width:260px;">
            <div class="sIE_l_01_title" style="width:80px; margin-left:70px;">客户名:</div>
            <input type="text" class="sIE_No" style="width:100px;" name="customer_name" id="outgoing_inquiry_sheet_customer_name" value="<?php echo $this->_tpl_vars['outgoing_inquiry_sheet']['customer_name']; ?>
"   readonly />
          </div>
          <div class="sIE_l_01" style="width:200px;">
            <div class="sIE_l_01_title">名称:</div>
            <input type="text" class="sIE_No" style="width:100px;" id="design_name" name="design_name" value="<?php echo $this->_tpl_vars['outgoing_inquiry_sheet']['design_name']; ?>
" />
          </div>
          <div class="sIE_l_01" style="width:260px;">
            <div class="sIE_l_01_title" style="width:80px; margin-left:70px;">公司:</div>
            <input type="text" class="sIE_No" name="customer_company" style="width:100px;" readonly id="outgoing_inquiry_sheet_company" value="<?php echo $this->_tpl_vars['outgoing_inquiry_sheet']['customer_company']; ?>
"  />
          </div>
          
          
          <div class="sIE_l_01" style="width:254px; margin-bottom:6px;">
            <div class="sIE_l_01_title" style="width:80px; margin-left:64px;">数量:</div>
            <input type="text" class="sIE_No" style="width:100px;" id="outgoing_inquiry_sheet_number" name="number" value="<?php echo $this->_tpl_vars['outgoing_inquiry_sheet']['number']; ?>
"/>
          </div>
          <div class="sIE_l_01" style="width:200px;">
            <div class="sIE_l_01_title" style="width:80px;">交货期:</div>
            <select class="picture_select01" style="width:106px;" id="outgoing_inquiry_sheet_picture_select"  name="time_id" style="height:26px; width:82px;">
               <?php $_from = $this->_tpl_vars['times']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['t']):
?>
              <option <?php if ($this->_tpl_vars['outgoing_inquiry_sheet']['time_id'] == $this->_tpl_vars['t']['id']): ?>selected="selected"<?php endif; ?> value="<?php echo $this->_tpl_vars['t']['id']; ?>
"><?php echo $this->_tpl_vars['t']['time_name']; ?>
</option>
              <?php endforeach; endif; unset($_from); ?>
            </select>
          </div>
          
          <div style="float:left; width:230px; margin-left:10px;">
          <textarea name="note" style="width:180px; margin-bottom:10px; margin-left:60px; margin-top:0px; height:52px;" onfocus="if(this.value=='备注')this.value='';" class="add01_textarea textInput"><?php if ($this->_tpl_vars['outgoing_inquiry_sheet']['note']): ?><?php echo $this->_tpl_vars['outgoing_inquiry_sheet']['note']; ?>
<?php else: ?>备注<?php endif; ?></textarea>
        </div>
        
        </div>
        
        <div class="sIE_l_01" style="width:290px; position:absolute; margin-top:165px;">
          <div class="sIE_l_01_title" style="width:80px; float:left;">颜色:</div>
          
          <div id="OutgoingQuote_AddDiv1" class="sIE_l_01" style="width:200px; float:left;">
          	  <?php if ($this->_tpl_vars['colors']): ?>
              <?php $_from = $this->_tpl_vars['colors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['c']):
?>
              <div style=" float:right; height:22px; width:200px; margin-bottom:10px;"><input type="text"class="sIE_No" style="width:106px;"  name="color[]" value="<?php echo $this->_tpl_vars['c']['color']; ?>
" /><input type="button" class="quoteK_bottom01_button" style="margin-top:2px; margin-left:10px;"  value="删除" onclick="getDelOutgoingQuote_Add(this)" /></div>
              <?php endforeach; endif; unset($_from); ?>
              <?php endif; ?>
              <div style="float:right; height:22px; width:200px; margin-bottom:10px;">
                <input type="text" id="outgoing_inquiry_sheet_color" style="width:100px;" class="sIE_No" name="color[]" />
                <input type="button" id="OutgoingQuote_Add"  class="quoteK_bottom01_button" style="margin-top:2px; margin-left:10px;"  value="添加" onclick="change_html(this)" />
              </div>
              
          </div>
          
        </div>
        <script>
		
		 
		 
		 function getDelOutgoingQuote_Add(k){
		
			$(k).parent().remove();    
		
		}
		
		function change_html(k){
			$(k).val("删除");
			$(k).attr("onclick","getDelOutgoingQuote_Add(this)");
			$(k).removeAttr("id");
			
			$("#OutgoingQuote_AddDiv1").append("<div style=\" float:right; height:22px; width:200px; margin-bottom:10px;\"><input type=\"text\" style=\"width:100px;\" class=\"sIE_No\"  name=\"color[]\" /><input type=\"button\" id=\"OutgoingQuote_Add\"  class=\"quoteK_bottom01_button\" style=\"margin-top:2px; margin-left:10px;\"  value=\"添加\" onclick=\"change_html(this)\" /></div>");
			
		}
		</script> 
      </div>
      
      <div id="outgoing_inquiry_sheet_result" style="line-height: 26px; float: left; color:#F00; margin-left: 10px; display:none;"></div>
      
      
    </div>
    <div class="sIE_r" style=" width:400px;">
      <div class="sIE_l_01" style="margin-top:0px; width:200px;">
        <div class="sIE_l_01_title" style="width:50px; height:100px;">尺寸:</div>
        <div class="sIE_r01" style="float:left; width:130px;">
          <div class="sIE_r01_div" style="width:130px;">
            <input type="text"  class="sIE_No" id="inch_w" name="inch_w" readonly value="<?php echo $this->_tpl_vars['outgoing_inquiry_sheet']['inch_w']; ?>
"  />
            <div style=" margin-left:5px; float:left;">inch W</div>
          </div>
          <div class="sIE_r01_div" style="width:130px;">
            <input type="text"  class="sIE_No" id="inch_h" name="inch_h" readonly value="<?php echo $this->_tpl_vars['outgoing_inquiry_sheet']['inch_h']; ?>
" />
            <div style=" margin-left:5px; float:left;">inch H</div>
          </div>
          <div class="sIE_r01_div" style="width:130px;">
            <input type="text"  class="sIE_No" id="cm_w" name="cm_w" readonly value="<?php echo $this->_tpl_vars['outgoing_inquiry_sheet']['cm_w']; ?>
" />
            <div style=" margin-left:5px; float:left;">cm W</div>
          </div>
          <div class="sIE_r01_div" style="width:130px;">
            <input type="text"  class="sIE_No" id="cm_h" name="cm_h" readonly value="<?php echo $this->_tpl_vars['outgoing_inquiry_sheet']['cm_h']; ?>
" />
            <div style=" margin-left:5px; float:left;">cm H</div>
          </div>
        </div>
      </div>
      
      <div class="sIE_l_01" style="margin-top:0px; width:200px;">
        <div class="sIE_l_01_title" style="width:80px;">服装尺寸备注:</div>
        <div class="sIE_r01" style="float:left; width:120px;">
          <div class="sIE_r01_div" style="width:120px;">
            <input type="text"  class="sIE_No" name="size_note" style="width:120px;" value="<?php echo $this->_tpl_vars['outgoing_inquiry_sheet']['size_note']; ?>
"  />
          </div>
        </div>
      </div>
      
      <div class="sIE_l_01" style="width:200px;">
          <div class="sIE_l_01_title" style="width:70px; line-height:26px;">报关品类:</div>
          <select class="picture_select01" name="order_category" style="width:106px; height:26px;">
            <option value="">请选择</option>
            <?php $_from = $this->_tpl_vars['order_category']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['oc']):
?>
            <?php if ($this->_tpl_vars['order_category_id'] == $this->_tpl_vars['oc']['id']): ?>
            <option selected="selected" value="<?php echo $this->_tpl_vars['oc']['id']; ?>
"><?php echo $this->_tpl_vars['oc']['c_name']; ?>
</option>
            <?php else: ?>
            <option value="<?php echo $this->_tpl_vars['oc']['id']; ?>
"><?php echo $this->_tpl_vars['oc']['c_name']; ?>
</option>
            <?php endif; ?>
            <?php endforeach; endif; unset($_from); ?>
          </select>
      </div>
      
      <div class="sIE_r" style="height:200px; width:200px; margin-top:0px;">
        <div class="sIE_r_img" id="design_image" style="width:145px; height:145px;"><?php if ($this->_tpl_vars['outgoing_inquiry_sheet']['image']): ?><img style="width:145px; height:145px;" src="<?php echo $this->_tpl_vars['outgoing_inquiry_sheet']['image']; ?>
" height="100px" width="100px" /><?php endif; ?></div>
        <div class="sIE_l_01" style="margin-top:10px; width:200px; margin-left:12px;">
          <div class="sIE_l_01_title"  style="width:60px; margin-left:10px;">设计师:</div>
          <input type="text" class="sIE_No" readonly id="design_user" name="design_user_name" value="<?php echo $this->_tpl_vars['outgoing_inquiry_sheet']['design_user_name']; ?>
"  style="width:76px;"/>
        </div>
      </div>
    </div>
   
  </div>
 </form>
 <?php endif; ?>
<?php if ($this->_tpl_vars['outgoing_inquiry_sheet']['type'] != '' && $this->_tpl_vars['outgoing_inquiry_sheet']['type'] == '2'): ?>

    <?php if ($this->_tpl_vars['outgoing_inquiry_sheet']['type'] != '' && $this->_tpl_vars['outgoing_inquiry_sheet']['type'] == '2'): ?>
        <div class="stkInfEnter" style="width:98%;display:block;" layoutH="100" id="ttbjd_wsj">    
    <?php else: ?>
        <div class="stkInfEnter" style="width:98%;display:none;" layoutH="100" id="ttbjd_wsj">
    <?php endif; ?> 
 <form method="post" style="overflow:visible;" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, navTabAjaxDone)" id="outgoing_inquiry_sheet_form2"> 
    <div class="sIE_title">外发询价单(无设计)</div>
    
     
    <div class="sIE_title">
    <?php if ($this->_tpl_vars['outgoing_inquiry_sheet']['type'] == ''): ?>
      <div class="button">
        <div class="buttonContent">
          <button type="button" onclick="document.getElementById('ttbjd_ysj').style.display='block';document.getElementById('ttbjd_wsj').style.display='none';$('#submit_type').val('1');">外发询价单</button>
        </div>
      </div>
    <?php endif; ?>
    </div>
     
    
    <input type="hidden" name="type" value="2" id="type" />
    <input type="hidden" name="outgoing_inquiry_sheet_id" value="<?php echo $this->_tpl_vars['outgoing_inquiry_sheet']['id']; ?>
" />
    <div class="sIEK" style="width:780px;">
      <div style="float:left; width:750px;">
        <div class="sIE_l" style=" width:370px;">
          <div class="sIE_l_01" style="width:180px;">
            <div class="sIE_l_01_title">业务员:</div>
             <input type="text" class="sIE_No" name="saleman_name" value="<?php if ($this->_tpl_vars['outgoing_inquiry_sheet']['salesman_user_name'] != ''): ?><?php echo $this->_tpl_vars['outgoing_inquiry_sheet']['salesman_user_name']; ?>
<?php else: ?><?php echo $this->_tpl_vars['user_info']['user_name']; ?>
<?php endif; ?>" readonly />
          </div>
          <div class="sIE_l_01" style="width:186px;">
            <div class="sIE_l_01_title" style="width:80px;">报价编号:</div>
            <input type="text" class="sIE_No" id="choose_design_code1" name="quotation_code" readonly value="<?php if ($this->_tpl_vars['outgoing_inquiry_sheet']['quotation_code']): ?><?php echo $this->_tpl_vars['outgoing_inquiry_sheet']['quotation_code']; ?>
<?php else: ?><?php echo $this->_tpl_vars['design_code']; ?>
<?php endif; ?>" />
          </div>
          <div class="sIE_l_01" style="width:180px;">
            <div class="sIE_l_01_title" style="width:80px;">客户代码:</div>
             <input type="text" class="sIE_No" name="customer_code" id="outgoing_inquiry_sheet_customer_code1" value="<?php echo $this->_tpl_vars['outgoing_inquiry_sheet']['customer_code']; ?>
" />
          </div>
          <div class="sIE_l_01" style="width:180px;">
            <div class="sIE_l_01_title">时间:</div>
             <input type="text" class="sIE_No" name="quotation_date" id="quotation_date" value="<?php if ($this->_tpl_vars['outgoing_inquiry_sheet']['quotation_date'] != ''): ?><?php echo $this->_tpl_vars['outgoing_inquiry_sheet']['quotation_date']; ?>
<?php else: ?><?php echo $this->_tpl_vars['today']; ?>
<?php endif; ?>"  readonly  />
          </div>
          <div class="sIE_l_01" style="width:180px;">
            <div class="sIE_l_01_title">客户名:</div>
           <input type="text" class="sIE_No" name="customer_name" id="outgoing_inquiry_sheet_customer_name1" value="<?php echo $this->_tpl_vars['outgoing_inquiry_sheet']['customer_name']; ?>
"   readonly />
          </div>
          <div class="sIE_l_01" style="width:180px;">
            <div class="sIE_l_01_title">名称:</div>
            <input type="text" class="sIE_No" id="design_name" name="design_name" value="<?php echo $this->_tpl_vars['outgoing_inquiry_sheet']['design_pic_name']; ?>
"  />
          </div>
          <div class="sIE_l_01" style="width:180px;">
            <div class="sIE_l_01_title">公司:</div>
            <input type="text" class="sIE_No" name="customer_company" readonly id="outgoing_inquiry_sheet_company1" value="<?php echo $this->_tpl_vars['outgoing_inquiry_sheet']['customer_company']; ?>
"  />
          </div>
          
          <div class="sIE_l_01" style="width:180px;">
            <div class="sIE_l_01_title" style="width:80px;">数量:</div>
            <input type="text" class="sIE_No" id="outgoing_inquiry_sheet_number1" name="number" value="<?php echo $this->_tpl_vars['outgoing_inquiry_sheet']['pcs']; ?>
" />
          </div>
          <div class="sIE_l_01" style="width:186px;">
            <div class="sIE_l_01_title" style="width:80px;">交货期:</div>
            <select class="picture_select01" id="outgoing_inquiry_sheet_picture_select1"  name="time_id" style="height:26px; width:82px;">
              <option value="">请选择</option>
               <?php $_from = $this->_tpl_vars['times']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['t']):
?>
              <option <?php if ($this->_tpl_vars['outgoing_inquiry_sheet']['time_id'] == $this->_tpl_vars['t']['id']): ?>selected="selected"<?php endif; ?> value="<?php echo $this->_tpl_vars['t']['id']; ?>
"><?php echo $this->_tpl_vars['t']['time_name']; ?>
</option>
              <?php endforeach; endif; unset($_from); ?>
            </select>
          </div>
        </div>
        <div style="float:left; width:160px; margin-left:10px;">
          <textarea name="note" style="width:140px; margin-bottom:10px;" onfocus="if(this.value=='备注')this.value='';" class="add01_textarea textInput"><?php if ($this->_tpl_vars['outgoing_inquiry_sheet']['note']): ?><?php echo $this->_tpl_vars['outgoing_inquiry_sheet']['note']; ?>
<?php else: ?>备注<?php endif; ?></textarea>
        </div>
        
        <div class="sIE_l_01" style="margin-top:10px; width:200px;">
        <div class="sIE_l_01_title" style="width:50px; height:100px;">尺寸:</div>
        <div class="sIE_r01" style="float:left; width:130px;">
          <div class="sIE_r01_div" style="width:130px;">
            <input type="text"  class="sIE_No" id="_inch_w" name="inch_w"  value="<?php echo $this->_tpl_vars['outgoing_inquiry_sheet']['inch_w']; ?>
" />
            <div style=" margin-left:5px; float:left;">inch W</div>
          </div>
          <div class="sIE_r01_div" style="width:130px;">
            <input type="text"  class="sIE_No" id="_inch_h" name="inch_h"  value="<?php echo $this->_tpl_vars['outgoing_inquiry_sheet']['inch_h']; ?>
" />
            <div style=" margin-left:5px; float:left;">inch H</div>
          </div>
          <div class="sIE_r01_div" style="width:130px;">
            <input type="text"  class="sIE_No" id="_cm_w" name="cm_w"  value="<?php echo $this->_tpl_vars['outgoing_inquiry_sheet']['cm_w']; ?>
" />
            <div style=" margin-left:5px; float:left;">cm W</div>
          </div>
          <div class="sIE_r01_div" style="width:130px;">
            <input type="text"  class="sIE_No" id="_cm_h" name="cm_h"  value="<?php echo $this->_tpl_vars['outgoing_inquiry_sheet']['cm_h']; ?>
" />
            <div style=" margin-left:5px; float:left;">cm H</div>
          </div>
        </div>
      </div>
      
      <div class="sIE_l_01" style="margin-top:0px; width:200px;">
        <div class="sIE_l_01_title" style="width:80px;">服装尺寸备注:</div>
        <div class="sIE_r01" style="float:left; width:120px;">
          <div class="sIE_r01_div" style="width:120px;">
            <input type="text"  class="sIE_No" name="size_note" style="width:120px;" value="<?php echo $this->_tpl_vars['outgoing_inquiry_sheet']['size_note']; ?>
"  />
          </div>
        </div>
      </div>
      
      <div class="sIE_l_01" style="width:200px;">
          <div class="sIE_l_01_title" style="width:70px; line-height:26px;">报关品类:</div>
          <select class="picture_select01" name="order_category" style="width:106px; height:26px;">
            <option value="">请选择</option>
            <?php $_from = $this->_tpl_vars['order_category']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['oc']):
?>
            <?php if ($this->_tpl_vars['order_category_id'] == $this->_tpl_vars['oc']['id']): ?>
            <option selected="selected" value="<?php echo $this->_tpl_vars['oc']['id']; ?>
"><?php echo $this->_tpl_vars['oc']['c_name']; ?>
</option>
            <?php else: ?>
            <option value="<?php echo $this->_tpl_vars['oc']['id']; ?>
"><?php echo $this->_tpl_vars['oc']['c_name']; ?>
</option>
            <?php endif; ?>
            <?php endforeach; endif; unset($_from); ?>
          </select>
      </div>
        
        <!--<div class="sIE_l_01" style="width:186px;">
            <div class="sIE_l_01_title" style="width:80px;">产品分类:</div>
            <select class="picture_select01" id="product_type"  name="product_type" style="height:26px; width:82px;">
              <option value="外发丝网印" <?php if ($this->_tpl_vars['outgoing_inquiry_sheet']['product_type'] == "外发丝网印"): ?>selected="selected"<?php endif; ?>>外发丝网印</option>
              <option value="外发章类" <?php if ($this->_tpl_vars['outgoing_inquiry_sheet']['product_type'] == "外发章类"): ?>selected="selected"<?php endif; ?>>外发章类</option>
              <option value="外发啦啦服" <?php if ($this->_tpl_vars['outgoing_inquiry_sheet']['product_type'] == "外发啦啦服"): ?>selected="selected"<?php endif; ?>>外发啦啦服</option>
              <option value="外发服饰" <?php if ($this->_tpl_vars['outgoing_inquiry_sheet']['product_type'] == "外发服饰"): ?>selected="selected"<?php endif; ?>>外发服饰</option>
              <option value="外发其它" <?php if ($this->_tpl_vars['outgoing_inquiry_sheet']['product_type'] == "外发其它"): ?>selected="selected"<?php endif; ?>>外发其它</option>
            </select>
          </div>-->
        <div class="sIE_l_01" style="width:66%;">
          <div class="sIE_l_01_title" style="width:80px;">颜色:</div>
          <div id="OutgoingQuote_AddDiv001" class="sIE_l_01" style="width:220px;">
          <?php if ($this->_tpl_vars['colors']): ?>
              <?php $_from = $this->_tpl_vars['colors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['c']):
?>
              <div style=" float:right; height:22px; width:200px; margin-bottom:10px;margin-right:20px;"><input type="text" class="sIE_No" id="outgoing_inquiry_sheet_color1"  name="color[]" value="<?php echo $this->_tpl_vars['c']['color']; ?>
" /><input type="button" class="quoteK_bottom01_button" style="margin-top:2px; margin-left:10px;"  value="删除" onclick="getDelOutgoingQuote_Add(this)" /></div>
              <?php endforeach; endif; unset($_from); ?>
              <?php endif; ?>
           <div style="float:right; height:22px; width:200px; margin-bottom:10px; margin-right:20px;">
                <input type="text" class="sIE_No" name="color[]" />
                <input type="button" id="OutgoingQuote_Add"  class="quoteK_bottom01_button" style="margin-top:2px; margin-left:10px;"  value="添加" onclick="change_html1(this)" />
            </div>
              
          </div>
          
          <div id="outgoing_inquiry_sheet_result1" style="line-height: 26px; float: left; color:#F00; margin-left: 10px; display:none;"></div>
          
          
        </div>
        </form>
        
        
        
        
        <script>
		
		 
		 
		 function getDelOutgoingQuote_Add1(k){
		
			$(k).parent().remove();    
		
		}
		
		function change_html1(k){
			$(k).val("删除");
			$(k).attr("onclick","getDelOutgoingQuote_Add1(this)");
			$(k).removeAttr("id");
			
			$("#OutgoingQuote_AddDiv001").append("<div style=\" float:right; height:22px; width:200px; margin-bottom:10px;margin-right:20px;\"><input type=\"text\" class=\"sIE_No\"  name=\"color[]\" /><input type=\"button\" id=\"OutgoingQuote_Add\"  class=\"quoteK_bottom01_button\" style=\"margin-top:2px; margin-left:10px;\"  value=\"添加\" onclick=\"change_html1(this)\" /></div>");
			
		}
		</script> 
</script> 
      </div>
    </div>
    <div class="sIE_r" style=" width:200px;">
      <div class="sIE_r" style="height:200px; width:175px;">
        <div class="sIE_r_img" id="img_upload" style="width:155px; height:155px;"><iframe name="yframe_ois_edit1" src="<?php echo $this->_tpl_vars['outgoing_inquiry_sheet']['image']; ?>
" style="border:none; width:155px; height:155px;"></iframe></div>
       <form action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/basic_upload_file" id="upload_jpg" target="yframe_ois_edit1" method="post" enctype="multipart/form-data" >
                   
          <div style="float:left; height:50px; width:60px; overflow:hidden; margin-left:20px; position:relative;">
                 <input type="file" class="sIE_r_img_file" name="upload_file" id="upload_file" style=" opacity:0; position:relative; z-index:10; margin-top:0px;" />
                 <input type="button" class="sIE_r_img_file" name="jpg" style=" opacity:1; width:60px; text-align:center; height:24px; position:absolute; z-index:9; margin-top:0px;" value="浏览" />
                </div>
                 <input type="submit" id="jpg_upload_submit" value="上传JPG" style=" float:right; width:70px;" /> 
          
          
          
       </form>
      </div>
    </div>
   
  </div>
   <?php elseif ($this->_tpl_vars['outgoing_inquiry_sheet']['type'] == ''): ?>
   <div class="stkInfEnter" style="width:98%; display:none; position:relative;" layoutH="100" id="ttbjd_wsj">
 <form method="post" style="overflow:visible;" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, navTabAjaxDone)" id="outgoing_inquiry_sheet_form2"> 
 
 
 	<div style="float:left; width:100%;">
    	<div class="sIE_title" style="width:15%;">
   
      <div class="button">
        <div class="buttonContent">
          <button type="button" onclick="document.getElementById('ttbjd_ysj').style.display='block';document.getElementById('ttbjd_wsj').style.display='none';$('#submit_type').val('1');">外发询价单</button>
        </div>
      </div>
  
    </div>
    	<div class="sIE_title" style="width:60%;">外发询价单(无设计)</div>
    </div>
    
    
     
    
     
    
    <input type="hidden" name="type" value="2" id="type" />
    <div class="sIEK" style="width:700px;">
      <div style="float:left; width:700px;">
        <div class="sIE_l" style=" width:480px;">
          <div class="sIE_l_01" style="width:200px;">
            <div class="sIE_l_01_title">业务员:</div>
             <input type="text" class="sIE_No" style="width:100px;" name="saleman_name" value="<?php if ($this->_tpl_vars['outgoing_inquiry_sheet']['salesman_user_name'] != ''): ?><?php echo $this->_tpl_vars['outgoing_inquiry_sheet']['salesman_user_name']; ?>
<?php else: ?><?php echo $this->_tpl_vars['user_info']['user_name']; ?>
<?php endif; ?>" readonly />
          </div>
          <div class="sIE_l_01" style="width:200px; margin-left:70px;">
            <div class="sIE_l_01_title" style="width:80px;">客户代码:</div>
             <input type="text" class="sIE_No" style="width:100px;" name="customer_code" id="outgoing_inquiry_sheet_customer_code1" value="<?php echo $this->_tpl_vars['outgoing_inquiry_sheet']['customer_code']; ?>
" />
          </div>
          <div class="sIE_l_01" style="width:200px;">
            <div class="sIE_l_01_title">时间:</div>
             <input type="text" class="sIE_No" style="width:100px;" name="quotation_date" id="quotation_date" value="<?php if ($this->_tpl_vars['outgoing_inquiry_sheet']['quotation_date'] != ''): ?><?php echo $this->_tpl_vars['outgoing_inquiry_sheet']['quotation_date']; ?>
<?php else: ?><?php echo $this->_tpl_vars['today']; ?>
<?php endif; ?>"  readonly  />
          </div>
          <div class="sIE_l_01" style="width:200px; margin-left:70px;">
            <div class="sIE_l_01_title">客户名:</div>
           <input type="text" class="sIE_No" style="width:100px;" name="customer_name" id="outgoing_inquiry_sheet_customer_name1" value="<?php echo $this->_tpl_vars['outgoing_inquiry_sheet']['customer_name']; ?>
"   readonly />
          </div>
          <div class="sIE_l_01" style="width:200px;">
            <div class="sIE_l_01_title">名称:</div>
            <input type="text" class="sIE_No" style="width:100px;" id="design_name" name="design_name" value="<?php echo $this->_tpl_vars['outgoing_inquiry_sheet']['design_name']; ?>
"  />
          </div>
          <div class="sIE_l_01" style="width:200px; margin-left:70px;">
            <div class="sIE_l_01_title">公司:</div>
            <input type="text" class="sIE_No" style="width:100px;" name="customer_company" readonly id="outgoing_inquiry_sheet_company1" value="<?php echo $this->_tpl_vars['outgoing_inquiry_sheet']['customer_company']; ?>
"  />
          </div>
          <div class="sIE_l_01" style="width:200px;">
            <div class="sIE_l_01_title" style="width:80px;">报价编号:</div>
            <input type="text" class="sIE_No" id="choose_design_code1" style="width:100px;" name="quotation_code" readonly value="<?php if ($this->_tpl_vars['outgoing_inquiry_sheet']['quotation_code']): ?><?php echo $this->_tpl_vars['outgoing_inquiry_sheet']['quotation_code']; ?>
<?php else: ?><?php echo $this->_tpl_vars['design_code']; ?>
<?php endif; ?>" />
          </div>
          <div class="sIE_l_01" style="width:200px; margin-left:70px;">
            <div class="sIE_l_01_title" style="width:80px;">数量:</div>
            <input type="text" class="sIE_No" style="width:100px;" id="outgoing_inquiry_sheet_number1" name="number" value="<?php echo $this->_tpl_vars['outgoing_inquiry_sheet']['number']; ?>
" />
          </div>
          <div class="sIE_l_01" style="width:206px;">
            <div class="sIE_l_01_title" style="width:80px;">交货期:</div>
            <select class="picture_select01" id="outgoing_inquiry_sheet_picture_select1"  name="time_id" style="height:26px; width:102px;">
              <option value="">请选择</option>
               <?php $_from = $this->_tpl_vars['times']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['t']):
?>
              <option <?php if ($this->_tpl_vars['outgoing_inquiry_sheet']['time_id'] == $this->_tpl_vars['t']['id']): ?>selected="selected"<?php endif; ?> value="<?php echo $this->_tpl_vars['t']['id']; ?>
"><?php echo $this->_tpl_vars['t']['time_name']; ?>
</option>
              <?php endforeach; endif; unset($_from); ?>
            </select>
          </div>
          
          <div style="float:left; width:180px; margin-left:10px;">
          <textarea name="note" style="width:180px; margin-bottom:10px; margin-left:54px; margin-top:0px; height:52px;" onfocus="if(this.value=='备注')this.value='';" class="add01_textarea textInput"><?php if ($this->_tpl_vars['outgoing_inquiry_sheet']['note']): ?><?php echo $this->_tpl_vars['outgoing_inquiry_sheet']['note']; ?>
<?php else: ?>备注<?php endif; ?></textarea>
        </div>
          
        </div>
        
        
        <div class="sIE_l_01" style="margin-top:10px; width:200px; margin-left:10px;">
        <div class="sIE_l_01_title" style="width:50px; height:100px;">尺寸:</div>
        <div class="sIE_r01" style="float:left; width:130px;">
          <div class="sIE_r01_div" style="width:130px;">
            <input type="text"  class="sIE_No" id="_inch_w" name="inch_w"  value="<?php echo $this->_tpl_vars['outgoing_inquiry_sheet']['inch_w']; ?>
" />
            <div style=" margin-left:5px; float:left;">inch W</div>
          </div>
          <div class="sIE_r01_div" style="width:130px;">
            <input type="text"  class="sIE_No" id="_inch_h" name="inch_h"  value="<?php echo $this->_tpl_vars['outgoing_inquiry_sheet']['inch_h']; ?>
" />
            <div style=" margin-left:5px; float:left;">inch H</div>
          </div>
          <div class="sIE_r01_div" style="width:130px;">
            <input type="text"  class="sIE_No" id="_cm_w" name="cm_w"  value="<?php echo $this->_tpl_vars['outgoing_inquiry_sheet']['cm_w']; ?>
" />
            <div style=" margin-left:5px; float:left;">cm W</div>
          </div>
          <div class="sIE_r01_div" style="width:130px;">
            <input type="text"  class="sIE_No" id="_cm_h" name="cm_h"  value="<?php echo $this->_tpl_vars['outgoing_inquiry_sheet']['cm_h']; ?>
" />
            <div style=" margin-left:5px; float:left;">cm H</div>
          </div>
        </div>
      </div>
        
        
        <div class="sIE_l_01" style="width:290px; position:absolute; margin-top:165px;">
          <div class="sIE_l_01_title" style="width:80px;">颜色:</div>
          <div id="OutgoingQuote_AddDiv001" class="sIE_l_01" style="width:200px;">
          <?php if ($this->_tpl_vars['colors']): ?>
              <?php $_from = $this->_tpl_vars['colors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['c']):
?>
              <div style=" float:right; height:22px; width:200px; margin-bottom:10px;"><input type="text" class="sIE_No"  name="color[]" style="width:106px;" value="<?php echo $this->_tpl_vars['c']['color']; ?>
" /><input type="button" class="quoteK_bottom01_button" style="margin-top:2px; margin-left:10px;"  value="删除" onclick="getDelOutgoingQuote_Add(this)" /></div>
              <?php endforeach; endif; unset($_from); ?>
              <?php endif; ?>
           <div style="float:right; height:22px; width:200px; margin-bottom:10px;">
                <input type="text" id="outgoing_inquiry_sheet_color1" style="width:100px;" class="sIE_No" name="color[]" />
                <input type="button" id="OutgoingQuote_Add"  class="quoteK_bottom01_button" style="margin-top:2px; margin-left:10px;"  value="添加" onclick="change_html1(this)" />
            </div>
              
          </div>
          
          <div id="outgoing_inquiry_sheet_result1" style="line-height: 26px; float: left; color:#F00; margin-left: 10px; display:none;"></div>
          
        </div>
        </form>
        
        
        
        
        <script>
		
		 
		 
		 function getDelOutgoingQuote_Add1(k){
		
			$(k).parent().remove();    
		
		}
		
		function change_html1(k){
			$(k).val("删除");
			$(k).attr("onclick","getDelOutgoingQuote_Add1(this)");
			$(k).removeAttr("id");
			
			$("#OutgoingQuote_AddDiv001").append("<div style=\" float:right; height:22px; width:200px; margin-bottom:10px;\"><input type=\"text\" class=\"sIE_No\"  style=\"width:100px;\"  name=\"color[]\" /><input type=\"button\" id=\"OutgoingQuote_Add\"  class=\"quoteK_bottom01_button\" style=\"margin-top:2px; margin-left:10px;\"  value=\"添加\" onclick=\"change_html1(this)\" /></div>");
			
		}
		</script> 
</script> 
      </div>
    </div>
    <div class="sIE_r" style=" width:200px;">
      
       
      <div class="sIE_r" style="height:200px; width:175px; margin-top:0px;">
        <div class="sIE_r_img" id="img_upload" style="width:155px; height:155px;"><iframe name="yframe_ois_edit" src="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/basic_upload_file" style="border:none; width:155px; height:155px;"></iframe></div>
       <form action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/basic_upload_file" id="upload_jpg" target="yframe_ois_edit" method="post" enctype="multipart/form-data" >
                   
          <div style="float:left; height:50px; width:60px; overflow:hidden; margin-left:20px; position:relative;">
                 <input type="file" class="sIE_r_img_file" name="upload_file" id="upload_file" style=" opacity:0; position:relative; z-index:10; margin-top:0px;" />
                 <input type="button" class="sIE_r_img_file" name="jpg" style=" opacity:1; width:60px; text-align:center; height:24px; position:absolute; z-index:9; margin-top:0px;" value="浏览" />
                </div>
                 <input type="submit" id="jpg_upload_submit" value="上传JPG" style=" float:right; width:70px;" /> 
          
          
       </form>
      </div>
    </div>
   
  </div>
<?php endif; ?>
<!--<form action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/basic_upload_file" id="upload_jpg_form" target="yframe" method="post" enctype="multipart/form-data" >
<input type="file" style="display:none;" name="upload_file" id="upload_file1" />
</form>-->

<?php if ($this->_tpl_vars['edit_no'] == 1): ?>
<div class="sIE_l_02">
  <div class="button" style="margin-left:80%; margin-right:5px; padding-bottom:20px;">
    <div class="buttonContent">
      <button id="outgoing_inquiry_sheet_from_submit" type="button" >确定</button>
    </div>
  </div>
  <div class="button">
    <div class="buttonContent">
      <button class="close">取消</button>
    </div>
  </div>
</div>
<?php else: ?>
<div class="sIE_l_02">
  <div class="button" style="margin-left:80%; margin-right:5px; padding-bottom:20px;">
    <div class="buttonContent">
      <button class="close">取消</button>
    </div>
  </div>
</div>
<?php endif; ?>

</div>

</div>
</div>
</div>

<!-- {literal} --> 
<script type="text/javascript">
function customer_num(){
	var name = $("#outgoing_inquiry_sheet_customer_code").val();

	$.ajax({
		url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/hotfix_quotation/add_customer',//通过Ajax取数据的目标页面
		data:{"name":name},
		type:'post',//方法，还可以是"post"
		dataType:'json',//数据类型，还有其它的，详见jQuery手册
		success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
		{
			if(locals){
				$("#outgoing_inquiry_sheet_customer_name").val(locals.customer_name);
				customer_name=locals.customer_name;
				$("#outgoing_inquiry_sheet_company").val(locals.company);
				$.ajax({
					url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/outgoing_inquiry_sheet/design_content_code_wf',//通过Ajax取数据的目标页面
					data:{"customer_name":customer_name,"customer_code":name},
					type:'post',//方法，还可以是"post"
					dataType:'text',//数据类型，还有其它的，详见jQuery手册
					success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
					{
						$("#choose_design_code_add").html(locals);
					}			
				});
			}else{
				$("#outgoing_inquiry_sheet_customer_name").val('');
				$("#outgoing_inquiry_sheet_company").val('');									
			}
		}								
		
	});
	
	
}
//无设计
function no_customer_num(){
  var name = $("#outgoing_inquiry_sheet_customer_code1").val();

  $.ajax({
	  url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/hotfix_quotation/add_customer',//通过Ajax取数据的目标页面
	  data:{"name":name},
	  type:'post',//方法，还可以是"post"
	  dataType:'json',//数据类型，还有其它的，详见jQuery手册
	  success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
	  {
		  if(locals){
			  $("#outgoing_inquiry_sheet_customer_name1").val(locals.customer_name);
			  customer_name=locals.customer_name;
			  $("#outgoing_inquiry_sheet_company1").val(locals.company);
		  }else{
			  $("#outgoing_inquiry_sheet_customer_name1").val('');
			  $("#outgoing_inquiry_sheet_company1").val('');									
		  }
	  }								
	  
  });
	
	
}


$(document).ready(function()  
{
	$("#jpg_upload_submit").click(function (){
		//alert('1111');
		$("#upload_jpg").submit();
		
	});
	
	
	//有设计
	$("#outgoing_inquiry_sheet_customer_code").bind("input propertychange", function() {
		
		var name = $("#outgoing_inquiry_sheet_customer_code").val();

		$.ajax({
			url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/hotfix_quotation/add_customer',//通过Ajax取数据的目标页面
			data:{"name":name},
			type:'post',//方法，还可以是"post"
			dataType:'json',//数据类型，还有其它的，详见jQuery手册
			success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
			{
				if(locals){
					$("#outgoing_inquiry_sheet_customer_name").val(locals.customer_name);
					customer_name=locals.customer_name;
					$("#outgoing_inquiry_sheet_company").val(locals.company);
					$.ajax({
						url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/outgoing_inquiry_sheet/design_content_code_wf',//通过Ajax取数据的目标页面
						data:{"customer_name":customer_name,"customer_code":name},
						type:'post',//方法，还可以是"post"
						dataType:'text',//数据类型，还有其它的，详见jQuery手册
						success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
						{
							$("#choose_design_code").html(locals);
						}			
					});
				}else{
					$("#outgoing_inquiry_sheet_customer_name").val('');
					$("#outgoing_inquiry_sheet_company").val('');									
				}
			}								
			
		});
		
	});
	
	//无设计
	$("#outgoing_inquiry_sheet_customer_code1").bind("input propertychange", function() {
		
		var name = $("#outgoing_inquiry_sheet_customer_code1").val();

		$.ajax({
			url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/hotfix_quotation/add_customer',//通过Ajax取数据的目标页面
			data:{"name":name},
			type:'post',//方法，还可以是"post"
			dataType:'json',//数据类型，还有其它的，详见jQuery手册
			success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
			{
				if(locals){
					$("#outgoing_inquiry_sheet_customer_name1").val(locals.customer_name);
					customer_name=locals.customer_name;
					$("#outgoing_inquiry_sheet_company1").val(locals.company);
				}else{
					$("#outgoing_inquiry_sheet_customer_name1").val('');
					$("#outgoing_inquiry_sheet_company1").val('');									
				}
			}								
			
		});
		
	});
	
	$("#outgoing_inquiry_sheet_from_submit").click(function () {
						
		
		if($("#submit_type").val() == '1'){
			if($("#outgoing_inquiry_sheet_customer_code").val() == ""){
				$("#outgoing_inquiry_sheet_result").css("display","block");
				$("#outgoing_inquiry_sheet_result").html("客户代码不能为空！");
			}
			else if($("#outgoing_inquiry_sheet_customer_name").val() == ""){
				$("#outgoing_inquiry_sheet_result").css("display","block");
				$("#outgoing_inquiry_sheet_result").html("客户名不能为空,请填写正确客户代码！");
			}
			else if($("#choose_design_code").val() == ""){
				$("#outgoing_inquiry_sheet_result").css("display","block");
				$("#outgoing_inquiry_sheet_result").html("报价编号！");
			}
			else if($("#outgoing_inquiry_sheet_picture_select").val() == ""){
				$("#outgoing_inquiry_sheet_result").css("display","block");
				$("#outgoing_inquiry_sheet_result").html("请选择交货期！");
			}
			else if($("#outgoing_inquiry_sheet_color").val() == ""){
				$("#outgoing_inquiry_sheet_result").css("display","block");
				$("#outgoing_inquiry_sheet_result").html("请填写颜色！");
			}
			else if($("#outgoing_inquiry_sheet_number").val() == ""){
				$("#outgoing_inquiry_sheet_result").css("display","block");
				$("#outgoing_inquiry_sheet_result").html("请填写数量！");
			}
			else{

				$("#outgoing_inquiry_sheet_form1").submit();
			}
		}else if($("#submit_type").val() == '2'){

			if($("#outgoing_inquiry_sheet_customer_code1").val() == ""){
				$("#outgoing_inquiry_sheet_result1").css("display","block");
				$("#outgoing_inquiry_sheet_result1").html("客户代码不能为空！");
			}
			else if($("#outgoing_inquiry_sheet_customer_name1").val() == ""){
				$("#outgoing_inquiry_sheet_result1").css("display","block");
				$("#outgoing_inquiry_sheet_result1").html("客户名不能为空,请填写正确客户代码！");
			}
			else if($("#outgoing_inquiry_sheet_picture_select1").val() == ""){
				$("#outgoing_inquiry_sheet_result1").css("display","block");
				$("#outgoing_inquiry_sheet_result1").html("请选择交货期！");
			}
			else if($("#outgoing_inquiry_sheet_color1").val() == ""){
				$("#outgoing_inquiry_sheet_result1").css("display","block");
				$("#outgoing_inquiry_sheet_result1").html("请填写颜色！");
			}
			else if($("#outgoing_inquiry_sheet_number1").val() == ""){
				$("#outgoing_inquiry_sheet_result1").css("display","block");
				$("#outgoing_inquiry_sheet_result1").html("请填写数量！");
			}
			/*else if($("#_inch_w").val()== "" || $("#_inch_h").val()== "" || $("#_cm_w").val()== "" || $("#_cm_h").val()== ""){
				$("#outgoing_inquiry_sheet_result1_add").css("display","block");
				$("#outgoing_inquiry_sheet_result1_add").html("请正确填写尺寸！");
			}*/
			else{
				

				$.ajax({
					url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/outgoing_inquiry_sheet/submit_check',//通过Ajax取数据的目标页面
					data:{},
					type:'post',//方法，还可以是"post"
					dataType:'text',//数据类型，还有其它的，详见jQuery手册
					success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
					{
						if(locals==1){
							$("#outgoing_inquiry_sheet_result1").css("display","none");
							$("#outgoing_inquiry_sheet_form2").submit();
						}else{
							$("#outgoing_inquiry_sheet_result1").css("display","block");
							$("#outgoing_inquiry_sheet_result1").html("请上传图片,且名称不包含空格！");
							
						}
					}
			    });
				
				
			}
		}else{}
	});
	
	$("#outgoing_inquiry_sheet_customer_code").bind("input propertychange", function() {
		//alert($(this).val());
		if($("#outgoing_inquiry_sheet_customer_code").val() != ''){
			$.ajax({
					url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/get_customer_info',//通过Ajax取数据的目标页面
					data:{'customer_code':$("#outgoing_inquiry_sheet_customer_code").val()},
					type:'post',//方法，还可以是"post"
					dataType:'json',//数据类型，还有其它的，详见jQuery手册
					success:function(data)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
					{
						if(data){
							//alert(data.customer_name);
							$("#outgoing_inquiry_sheet_customer_name").val(data.customer_name);
							$("#outgoing_inquiry_sheet_company").val(data.company);
						}else{
							$("#outgoing_inquiry_sheet_customer_name").val('');
							$("#outgoing_inquiry_sheet_company").val('');
						}
					}
			});
		}
	});
	
	//上传图片
	$("#jpg_upload_submit").click(function (){
		$("#upload_jpg_form").submit();
		/*$.ajax({
					url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/basic_upload_file',//通过Ajax取数据的目标页面
					//data:{'upload_file':$("#upload_file").val()},
					type:'post',//方法，还可以是"post"
					contentType:'multipart/form-data',
					dataType:'text',//数据类型，还有其它的，详见jQuery手册
					success:function(data)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
					{
						//$("#img_upload").html(data);
					}
			});*/
	});
	$("#outgoing_inquiry_sheet_customer_code1").bind("input propertychange", function() {
		//alert($(this).val());
		if($("#outgoing_inquiry_sheet_customer_code1").val() != ''){
			$.ajax({
					url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/get_customer_info',//通过Ajax取数据的目标页面
					data:{'customer_code':$("#outgoing_inquiry_sheet_customer_code1").val()},
					type:'post',//方法，还可以是"post"
					dataType:'json',//数据类型，还有其它的，详见jQuery手册
					success:function(data)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
					{
						if(data){
							//alert(data.customer_name);
							$("#outgoing_inquiry_sheet_customer_name1").val(data.customer_name);
							$("#outgoing_inquiry_sheet_company1").val(data.company);
						}else{
							$("#outgoing_inquiry_sheet_customer_name1").val('');
							$("#outgoing_inquiry_sheet_company1").val('');
						}
					}
			});
		}
	});
	
	$("#upload_file").bind("input propertychange", function() {
		
		
		$("#upload_file1").val($("#upload_file").val());
		
	});
	
	$("#_inch_w").bind("input propertychange", function() {
		//alert($(this).val());
		var cm_w = $(this).val() * 2.54;
		if(cm_w != ''){
			cm_w = cm_w.toFixed(2);
		}
		$("#_cm_w").val(cm_w);
		//$("#cm_w1").val(cm_w);
	});
	
	$("#_inch_h").bind("input propertychange", function() {
		//alert($(this).val());
		var cm_h = $(this).val() * 2.54;
		if(cm_h != ''){
			cm_h = cm_h.toFixed(2);
		}
		
		$("#_cm_h").val(cm_h);
		//$("#cm_h1").val(cm_h);
	});
	
	$("#_cm_w").bind("input propertychange", function() {
		//alert($(this).val());
		var inch_w = $(this).val() / 2.54;
		
		if(inch_w != ''){
			inch_w = inch_w.toFixed(2);
		}
		
		$("#_inch_w").val(inch_w);
		//$("#inch_w1").val(inch_w);
	});
	
	$("#_cm_h").bind("input propertychange", function() {
		//alert($(this).val());
		var inch_h = $(this).val() / 2.54;
		if(inch_h != ''){
			inch_h = inch_h.toFixed(2);
		}
		$("#_inch_h").val(inch_h);
		//$("#inch_h1").val(inch_h);
	});
	
    
    $("#choose_design_code").change(
    	function()
    	{
    		//获取id为select的下拉框选中的值
    	    var a = $("#choose_design_code").val();
    	   
			if(a != ''){
				$.ajax({
					url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/get_design_infomation_by_design_code',//通过Ajax取数据的目标页面
					type:'post',//方法，还可以是"post"
					data:{"design_code":a},
					dataType:'json',//数据类型，还有其它的，详见jQuery手册
					success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
					{
						$("#design_user").val(locals.design_user_name);
						$("#design_name").val(locals.design_name);
						$("#design_image").html("<img src='"+locals.upload_file+"' width='120px' height='120px' style='width:120px;height:120px;' /><input type='hidden' name='upload_file' value='"+locals.upload_file+"' /> <input type='hidden' name='design_user_name' value='"+locals.design_user_name+"' /> ");
						$("#inch_w").val(locals.size_w_inch);
						$("#inch_h").val(locals.size_h_inch);
						$("#cm_w").val(locals.size_w_cm);
						$("#cm_h").val(locals.size_h_cm);
					}
				});
			}
    	}
    );
	
});


</script> 
<!-- {/literal} -->