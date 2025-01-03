<?php /* Smarty version 2.6.22, created on 2014-09-09 17:10:02
         compiled from product_order/rhinestone_quotation_order.html */ ?>
<script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/cstown_Sys.js" type="text/javascript"></script>
<link href="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/css/cstown_sys.css" rel="stylesheet" type="text/css" media="screen"/>
<div class="pageContent">
  <div class="stkInfEnter" layoutH="100" style="width:95%; margin-left:20px;">
    <div class="sIE_title">烫钻做货单</div>
    <div class="sIEK">
      <form method="post" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, navTabAjaxDone)" id="info_form">
        <div style="width:54%; float:left;">
          <div class="sIE_l" style="width:180px;">
            <div style="float:left; margin-bottom:5px;">
              <div class="sIE_l_01_title">业务员:</div>
<!--              <input type="hidden" name="quotation_id" value="<?php echo $this->_tpl_vars['rhinestone_quotation']['id']; ?>
" />-->
              <input type="text" class="sIE_No" value="<?php echo $this->_tpl_vars['saleman_name']; ?>
" readonly />
            </div>
            <div style="float:left; margin-bottom:5px;">
              <div class="sIE_l_01_title">时间:</div>
              <input type="text" class="sIE_No" value="<?php echo $this->_tpl_vars['q_time']; ?>
" readonly  />
            </div>
            <div style="float:left; margin-bottom:5px;">
              <div class="sIE_l_01_title">发货期:</div>
                   <input type="text" class="sIE_No" value="<?php echo $this->_tpl_vars['deliver_goods']; ?>
" readonly  />
            </div>
          </div>
          <div class="sIE_l" style="width:180px;">
            <div style="float:left; margin-bottom:5px;">
              <div class="sIE_l_01_title">客户代码:</div>
              <input type="text" class="sIE_No"  name="customer_code" id="customer_code" value="<?php echo $this->_tpl_vars['customer_code']; ?>
" readonly />
            </div>
            <div style="float:left; margin-bottom:5px;">
              <div class="sIE_l_01_title">客户名:</div>
              <input type="text" class="sIE_No"  name="customer_name" id="customer_name" value="<?php echo $this->_tpl_vars['customer_name']; ?>
" readonly  />
            </div>
            <div style="float:left; margin-bottom:5px;">
              <div class="sIE_l_01_title">公司:</div>
              <input type="text" class="sIE_No"  name="customer_company" id="customer_company" value="<?php echo $this->_tpl_vars['company']; ?>
" readonly  />
            </div>
          </div>
          <div class="sIE_l" style="width:180px;">
            <div style="float:left; margin-bottom:5px;">
              <div class="sIE_l_01_title">名称:</div>
              <input type="text" class="sIE_No"  name="doinvoice_name" id="doinvoice_name" readonly value="<?php echo $this->_tpl_vars['design_name']; ?>
" />
            </div>
            <div style="float:left; margin-bottom:5px;">
              <div class="sIE_l_01_title">订单号:</div>
              <input type="text" class="sIE_No"  name="order_code" id="order_code" readonly="readonly" value="<?php echo $this->_tpl_vars['order_number']; ?>
" />
            </div>
            <div style="float:left; margin-bottom:5px;">
              <div class="sIE_l_01_title">客户提供单号:</div>
              <input type="text" class="sIE_No"  name="customer_offer_order_code" readonly id="customer_offer_order_code" value="<?php echo $this->_tpl_vars['customer_number']; ?>
"   />
            </div>
          </div>
        </div>
        <div class="sIE_r" style="width:460px; margin-top:0px;">
          <textarea name="note" class="add01_textarea" readonly style="width:460px; margin-bottom:10px;"><?php echo $this->_tpl_vars['remark']; ?>
</textarea>
        </div>
        <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['id']; ?>
" />
        <input type="hidden" name="quotation_category" value="<?php echo $this->_tpl_vars['quotation_category']; ?>
" />
      </form>
      <div class="sIE_l_02" style="margin-top:10px;">
        <table cellspacing="0" class="sIE_l_02Tab">
          <tr>
            <th>名称</th>
            <th>颜色</th>
            <th>尺寸</th>
            <th>数量</th>
          </tr>
          <?php if ($this->_tpl_vars['materials']): ?>
          <?php $_from = $this->_tpl_vars['materials']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ma']):
?>
          <tr>
            <td><?php echo $this->_tpl_vars['ma']['material_name']; ?>
</td>
            <td><?php echo $this->_tpl_vars['ma']['material_color']; ?>
</td>
            <td><?php echo $this->_tpl_vars['ma']['material_size']; ?>
</td>
            <td><?php echo $this->_tpl_vars['ma']['min_order']; ?>
</td>
          </tr>
          <?php endforeach; endif; unset($_from); ?>
          <?php endif; ?>
        </table>
      </div>
    </div>
  </div>
  <div id="materials_informations" style="display:none;">
    <input type="text" class="sIE_No"  name="stock_code" id="stock_code1"  style="display:none;"/>
    <input type="text"  class="sIE_No" id="inch_w1" name="size_inch_w"/>
    <input type="text"  class="sIE_No" id="inch_h1" name="size_inch_h"/>
    <input type="text"  class="sIE_No" id="cm_w1" name="size_cm_w" />
    <input type="text"  class="sIE_No" id="cm_h1" name="size_cm_h" />
    <table cellspacing="0" class="sIE_l_02Tab" id="material_table1"  style="display:none;">
      <tr>
        <th>材料</th>
        <th>颜色</th>
        <th>尺寸</th>
        <th>数量</th>
        <th>操作</th>
      </tr>
    </table>
  </div>
  <div class="formBar">
    <ul>
      <li>
        <div class="buttonActive">
          <div class="buttonContent">
            <button class="close">取消</button>
          </div>
        </div>
      </li>
      <li> </li>
    </ul>
  </div>
</div>

<!-- {literal} --> 
<script type="text/javascript">
$(document).ready(function()  
{
	
	$("#submit_form").click(function () {
		$("#info_form").submit();
	});
	
});

</script> 
<!-- {/literal} -->