<?php /* Smarty version 2.6.22, created on 2023-10-07 13:57:55
         compiled from outgoing_quotation_sheet/add_production_order.html */ ?>
<script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/cstown_Sys.js" type="text/javascript"></script>
<link href="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/css/cstown_sys.css" rel="stylesheet" type="text/css" media="screen" />
<div class="pageContent">
  <div class="stkInfEnter" style="width:98%" layoutH="100" id="ttbjd_ysj">
  <div class="sIE_title">修改外发报价单</div>
  <form method="post" action="<?php echo $this->_tpl_vars['action']; ?>
" id="submit_form" enctype="multipart/form-data" onsubmit="return validateCallback(this, navTabAjaxDone)">
    <input type="hidden" name="cost_factor" value="<?php echo $this->_tpl_vars['cost_factor']; ?>
"  />
    <input type="hidden" name="factory_cost" value="<?php echo $this->_tpl_vars['factory_cost']; ?>
"  />
    <input type="hidden" name="quote_factor" value="<?php echo $this->_tpl_vars['quote_factor']; ?>
"  />
    <input type="hidden" name="saleman_user_id" value="<?php echo $this->_tpl_vars['saleman_user_id']; ?>
" />
    <input type="hidden" name="unit_price" value="<?php echo $this->_tpl_vars['unit_price']; ?>
" />
    <input type="hidden" name="version_costs" value="<?php echo $this->_tpl_vars['version_costs']; ?>
" />
    <input type="hidden" name="size" value="<?php echo $this->_tpl_vars['size']; ?>
" />  
    <input type="hidden" name="image" value="<?php echo $this->_tpl_vars['outgoing_quotation_sheet']['image']; ?>
" />
    <input type="hidden" name="quotation_category" value="<?php echo $this->_tpl_vars['outgoing_quotation_sheet']['quotation_category']; ?>
" /> 
    <input type="hidden" name="quotation_category_id" value="<?php echo $this->_tpl_vars['outgoing_quotation_sheet']['quotation_category_id']; ?>
" /> 
    <input type="hidden" name="design_id" value="<?php echo $this->_tpl_vars['outgoing_quotation_sheet']['design_id']; ?>
" />
    <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['outgoing_quotation_sheet']['id']; ?>
" />  
    <input type="hidden" name="quotation_date" value="<?php echo $this->_tpl_vars['outgoing_quotation_sheet']['quotation_date']; ?>
" />
    <div class="sIEK" style="width:680px;">
      <div style="float:left; width:680px;">
        <div class="sIE_l_01" style="width:200px;">
          <div class="sIE_l_01_title" style="width:70px;">业务员:</div>
          <input type="text" class="sIE_No" style="width:110px;" value="<?php echo $this->_tpl_vars['outgoing_quotation_sheet']['saleman_name']; ?>
" name="saleman_name" readonly="readonly" />
        </div>
        <div class="sIE_l_01" style="width:200px;">
          <div class="sIE_l_01_title" style="width:70px;">时间:</div>
          <input type="text" name="time" readonly="readonly"  class="sIE_No" style="width:110px;" value="<?php echo $this->_tpl_vars['outgoing_quotation_sheet']['quotation_date']; ?>
" />
        </div>
        <div class="sIE_l_01" style="width:200px;">
          <div class="sIE_l_01_title" style="width:70px;">设计名称:</div>
          <input type="text" class="sIE_No" name="design_pic_name" style="width:110px;" value="<?php echo $this->_tpl_vars['outgoing_quotation_sheet']['design_pic_name']; ?>
"readonly="readonly" />
        </div>
        <div class="sIE_l_01" style="width:200px;">
          <div class="sIE_l_01_title" style="width:70px;">客户代码:</div>
          <input type="text" name="customer_code" class="sIE_No" style="width:110px;" value="<?php echo $this->_tpl_vars['outgoing_quotation_sheet']['customer_code']; ?>
" readonly="readonly" />
        </div>
        <div class="sIE_l_01" style="width:200px;">
          <div class="sIE_l_01_title" style="width:70px;">客户名:</div>
          <input type="text" name="customer_name" class="sIE_No" style="width:110px;" value="<?php echo $this->_tpl_vars['outgoing_quotation_sheet']['customer_name']; ?>
" readonly="readonly" />
        </div>
        <div class="sIE_l_01" style="width:200px;">
          <div class="sIE_l_01_title" style="width:70px;">交货期:</div>
          <?php $_from = $this->_tpl_vars['times']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['t']):
?>
          <?php if ($this->_tpl_vars['outgoing_quotation_sheet']['time_id'] == $this->_tpl_vars['t']['id']): ?>
          <input type="text" name="deliver_goods" class="sIE_No" style="width:110px;" value="<?php echo $this->_tpl_vars['t']['time_name']; ?>
" readonly="readonly" />
          <?php endif; ?> 
          <?php endforeach; endif; unset($_from); ?> </div>
        <div class="sIE_l_01" style="width:200px;">
          <div class="sIE_l_01_title" style="width:70px; line-height:26px;">报关品类:</div>
          <select class="picture_select01" name="order_category" id="order_category" style="width:106px; height:26px;">
            <option value="">请选择</option>
            <?php $_from = $this->_tpl_vars['order_category']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['oc']):
?> <?php if ($this->_tpl_vars['order_category_id'] == $this->_tpl_vars['oc']['id']): ?>
            <option selected="selected" value="<?php echo $this->_tpl_vars['oc']['id']; ?>
"> <?php echo $this->_tpl_vars['oc']['c_name']; ?>
 </option>
            <?php else: ?>
            <option value="<?php echo $this->_tpl_vars['oc']['id']; ?>
"> <?php echo $this->_tpl_vars['oc']['c_name']; ?>
 </option>
            <?php endif; ?> <?php endforeach; endif; unset($_from); ?>
          </select>
        </div>
        <div class="sIE_l_01" style="width:200px;">
          <div class="sIE_l_01_title" style="width:70px;">做货类型:</div>
          <input type="text" class="sIE_No" style="width:110px;" value="<?php echo $this->_tpl_vars['outgoing_quotation_sheet']['goods_type']; ?>
" readonly="readonly" />
        </div>
        <div class="sIE_l_01" style="width:200px;">
          <textarea name="note" value="<?php echo $this->_tpl_vars['outgoing_quotation_sheet']['note']; ?>
" readonly style="width:180px; height:50px;" onfocus="if(this.value=='备注')this.value='';" class="add01_textarea textInput"><?php echo $this->_tpl_vars['outgoing_quotation_sheet']['note']; ?>
</textarea>
        </div>
        <?php if ($this->_tpl_vars['quotation_size_chart']): ?>
        <div class="sIE_l_02" style="width:95%;">
          <table cellspacing="0" class="sIE_l_02Tab" id="oic_table_add">
            <tr>
              <th>尺码</th>
              <th>数量</th>
              <th>备注</th>
            </tr>
            <?php $_from = $this->_tpl_vars['quotation_size_chart']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['qsc']):
?>
            <tr>
              <td><input type="text" name="qsc[<?php echo $this->_tpl_vars['qsc']['id']; ?>
][size]" value="<?php echo $this->_tpl_vars['qsc']['size']; ?>
" readonly style="width:100px;"></td>
              <td class="oqs_number"><input type="text" id="oqs_number_<?php echo $this->_tpl_vars['qsc']['id']; ?>
" readonly name="qsc[<?php echo $this->_tpl_vars['qsc']['id']; ?>
][amount]" value="<?php echo $this->_tpl_vars['qsc']['amount']; ?>
" onkeyup="change_number(<?php echo $this->_tpl_vars['qsc']['id']; ?>
);this.value=this.value.replace(/\D/g,'');" style="width:100px;"></td>
              <td><textarea name="oqs_note[<?php echo $this->_tpl_vars['qsc']['id']; ?>
]" readonly><?php echo $this->_tpl_vars['qsc']['note']; ?>
</textarea></td>
            </tr>
            <?php endforeach; endif; unset($_from); ?>
          </table>
        </div>
        <?php endif; ?>
        <div class="sIE_l_01" style="width:230px; margin-top:10px;">
          <div class="sIE_l_01_title" style="width:80px;">总数量:</div>
          <input type="text" class="sIE_No" style="width:100px;" readonly id="number_id" name="number" value="<?php echo $this->_tpl_vars['outgoing_quotation_sheet']['pcs']; ?>
" />
        </div>
      </div>
      <div class="sIE_l_02" style="width:95%;">
        <hr style="border:1px dashed lightgray;margin-bottom: 50px;">
        <div class="sIE_l_01" style="width:100%;">
          <div class="sIE_l_01_title" style="width:80px;">供应商:</div>
          <select name="supplier_code" id="supplier_code" disabled style="width: 100px; height: 22px;line-height: 20px;">
            <?php if ($this->_tpl_vars['outgoing_quotation_sheet']['supplier_code'] == '' || $this->_tpl_vars['outgoing_quotation_sheet']['supplier_code'] == null): ?>
            <option value="" selected></option>
            <?php endif; ?> <?php $_from = $this->_tpl_vars['supplier_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['value']):
?> <option value="<?php echo $this->_tpl_vars['value']['supplier_code']; ?>
" <?php if ($this->_tpl_vars['outgoing_quotation_sheet']['supplier_code'] == $this->_tpl_vars['value']['supplier_code']): ?> selected <?php endif; ?>> <?php echo $this->_tpl_vars['value']['supplier_code']; ?>

            </option>
            <?php endforeach; endif; unset($_from); ?>
          </select>
        </div>
        <div class="sIE_l_01" style="width:50%;">
          <div class="sIE_l_01_title" style="width:80px;">销售成本:</div>
          <input name="factory_out_cost" id="factory_out_cost" type="text" class="sIE_No" readonly style="width:100px;" value="<?php echo $this->_tpl_vars['outgoing_quotation_sheet']['factory_out_cost']; ?>
" />
        </div>
        <div class="sIE_l_01" style="width:50%;">
          <div class="sIE_l_01_title" style="width:80px;">销售成本单价:</div>
          <input name="factory_price" id="factory_price" type="text" class="sIE_No" readonly style="width:100px;" value="<?php echo $this->_tpl_vars['outgoing_quotation_sheet']['factory_price']; ?>
" />
        </div>
        <div class="sIE_l_01" style="width:50%;">
          <div class="sIE_l_01_title" style="width:80px;">销售系数:</div>
          <?php if (isset ( $this->_tpl_vars['coefficient'] )): ?>
          <input type="text" name="coefficient" id="coefficient_id_production" onkeyup="sales_quotation_calculation()" class="sIE_No" value="<?php echo $this->_tpl_vars['coefficient']; ?>
" readonly="readonly" style="width:100px;" />
          <?php else: ?>
          <input type="text" name="coefficient" id="coefficient_id_production" onkeyup="sales_quotation_calculation()" class="sIE_No" value="<?php echo $this->_tpl_vars['default_quote_coefficient']; ?>
" style="width:100px;" />
          <?php endif; ?>
          <input type="hidden" id="lowest_cost_factor" value="<?php echo $this->_tpl_vars['lowest_cost_factor']; ?>
" />
        </div>
        <div class="sIE_l_01" style="width:50%;">
          <div class="sIE_l_01_title" style="width:80px;">货币:</div>
          <select class="picture_select01" id="money_id_production" name="money_1" onchange="sales_quotation_calculation()" style="height:26px; width:106px;" disabled="disabled">
            <option value="">请选择</option>
            <?php $_from = $this->_tpl_vars['exchangerate']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['qf']):
?> <?php if ($this->_tpl_vars['money'] == $this->_tpl_vars['qf']['value']): ?>
            <option selected="selected" value="<?php echo $this->_tpl_vars['qf']['value']; ?>
"> <?php echo $this->_tpl_vars['qf']['exchangerate_character']; ?>

            <?php echo $this->_tpl_vars['qf']['exchangerate_name']; ?>
 </option>
            <?php else: ?>
            <option value="<?php echo $this->_tpl_vars['qf']['value']; ?>
"> <?php echo $this->_tpl_vars['qf']['exchangerate_character']; ?>

            <?php echo $this->_tpl_vars['qf']['exchangerate_name']; ?>
 </option>
            <?php endif; ?> <?php endforeach; endif; unset($_from); ?>
          </select>
        </div>
        <div class="sIE_l_01" style="width:50%;">
          <div class="sIE_l_01_title" style="width:80px;">销售单价:</div>
          <input type="text" readonly name="unite_quote" value="<?php echo $this->_tpl_vars['outgoing_quotation_sheet']['unite_quote']; ?>
" id="sales_unit_price" class="sIE_No" style="width:100px;" />
        </div>
        <div class="sIE_l_01" style="width:50%;">
          <div class="sIE_l_01_title" style="width:80px;">销售报价:</div>
          <input type="text" readonly  name="final_quote" value="<?php echo $this->_tpl_vars['outgoing_quotation_sheet']['final_quote']; ?>
" id="sales_quotation" class="sIE_No" style="width:100px;" />
        </div>
      </div>
    </div>
    <div class="sIE_r" style="height:260px; width:260px; margin-top:0px;">
      <div class="sIE_l_01_title" style="width:80px;">报价编号:</div>
      <input type="text" readonly="" value="<?php echo $this->_tpl_vars['outgoing_quotation_sheet']['quotation_code']; ?>
">
      <div class="sIE_r_img" id="design_image_add" style="width:260px; height:260px; margin-left:0px; margin-top:10px; margin-bottom:10px;"> <?php if ($this->_tpl_vars['outgoing_quotation_sheet']['image']): ?><img style="width:260px; height:260px;" src="<?php echo $this->_tpl_vars['outgoing_quotation_sheet']['image']; ?>
" height="260px" width="260px" /> <?php endif; ?> </div>
      <!-- 设计师只在有设计时显示：0线上订单；1有设计 --> 
      <?php if ($this->_tpl_vars['outgoing_quotation_sheet']['type'] == 0 || $this->_tpl_vars['outgoing_quotation_sheet']['type'] == 1): ?>
      <div class="sIE_l_01" style=" float:none; width:200px; margin:0 auto;">
        <div class="sIE_l_01_title" style="width:60px; margin-left:10px;">设计师:</div>
        <input type="text" class="sIE_No" readonly="readonly" id="design_user_add" value="<?php echo $this->_tpl_vars['outgoing_quotation_sheet']['design_user_name']; ?>
" style="width:76px;" />
      </div>
      <?php endif; ?> </div>
    </div>
    <?php if ($this->_tpl_vars['edit_no'] == 1): ?>              
            
  	  <div class="sIE_l_02">
        <div class="button" style="margin-left:80%; margin-right:5px;">
          <div class="buttonContent">
          
            <button id="design_content_save" value="1" name="design_content_save">确定</button>
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
            <div class="button" style="margin-left:80%; margin-right:5px;">
              <div class="buttonContent">
                <button class="close">取消</button>
              </div>
            </div>
          </div>
    <?php endif; ?>      
  </form>
</div>
</div>
</div>

<script type="text/javascript">
$(document).ready(function() {
	$("#design_content_save").click(function(){
	    $("#submit_form").submit();
    });
});