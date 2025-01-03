<?php /* Smarty version 2.6.22, created on 2014-09-30 16:22:00
         compiled from factory_order/rhinestone_quotation_order.html */ ?>
<script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/cstown_Sys.js" type="text/javascript"></script>
<link href="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/css/cstown_sys.css" rel="stylesheet" type="text/css" media="screen"/>
<div class="pageContent">
  <div class="stkInfEnter" layoutH="100" style="width:95%; margin-left:20px;">
    <div class="sIE_title">材料做货单</div>
    <div class="sIEK">
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
            <td><?php echo $this->_tpl_vars['ma']['material_quantity']; ?>
</td>
          </tr>
          <?php endforeach; endif; unset($_from); ?>
          <?php endif; ?>
        </table>
      </div>      
    </div>
            <form method="post" action="<?php echo $this->_tpl_vars['act']; ?>
" id="submit_form" enctype="multipart/form-data" onsubmit="return validateCallback(this, navTabAjaxDone)">        
                <div class="sIE_l_02" style="margin-bottom:-50px;">
                  跟单备注：
                   <textarea name="documentary_remark" class="add01_textarea" style="width:800px; margin-bottom:-50px;"><?php echo $this->_tpl_vars['sale_remark']; ?>
</textarea>
                </div>
                <input type="hidden" name="order_id" value="<?php echo $this->_tpl_vars['order_id']; ?>
" />
                <input type="hidden" name="submit_value" value="" id="submit_value" />
           </form>     
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
  <?php if ($this->_tpl_vars['quanxian'] == 'admin' || $this->_tpl_vars['quanxian'] == 'kazuo'): ?>
      <?php if ($this->_tpl_vars['examine_status'] != '2' && $this->_tpl_vars['export_status'] != '2'): ?>
            <li>
              <div class="buttonActive">
                <div class="buttonContent">
                  <button id="examine_2_save" value="2" name="examine_2"  >审核通过</button>
                </div>
              </div>
            </li>
            <li>
              <div class="buttonActive">
                <div class="buttonContent">
                  <button id="examine_3_save" value="3" name="examine_3"  >问题单</button>
                </div>
              </div>
            </li>
        <?php endif; ?>
  <?php endif; ?>
    <li>
      <div class="buttonActive">
        <div class="buttonContent">
          <button class="close">取消</button>
        </div>
      </div>
    </li>
  </ul>
</div>
</div>

<!-- {literal} --> 
<script type="text/javascript">
$(document).ready(function()  
{
	
    $("#examine_2_save").click(function(){
		$("#submit_value").val('2');
	    $("#submit_form").submit();
    });
	
    $("#examine_3_save").click(function(){
		$("#submit_value").val('3');
	    $("#submit_form").submit();
    });	
	
});

</script> 
<!-- {/literal} -->