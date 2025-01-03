<?php /* Smarty version 2.6.22, created on 2015-12-04 07:33:13
         compiled from register_storage/edit.html */ ?>
<script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/cstown_Sys.js" type="text/javascript"></script>
<link href="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/css/cstown_sys.css" rel="stylesheet" type="text/css" media="screen"/>
<div class="pageContent">
  <div class="stkInfEnter" layoutH="100" style="width:97%; margin-left:20px;">
    <div class="sIE_title">采购信息录入</div>
    
    <div class="sIEK" style="width:80%;">
    	<div style="width:720px; float:left;">
      <form method="post" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, navTabAjaxDone)" id="info_form">
      
      	<div class="sIE_l" style="width:200px;">
        <input type="hidden" class="sIE_No"  name="ids" value="<?php echo $this->_tpl_vars['ids']; ?>
"  />
          <div style="float:left; margin-bottom:5px;">
            <div class="sIE_l_01_title">采购单号:</div>
            <input type="text" class="sIE_No" style="width:100px;"  readonly="readonly" name="purchase_order_number" value="<?php echo $this->_tpl_vars['metrial_procure']['purchase_order_number']; ?>
"  />
          </div>
          <?php if ($this->_tpl_vars['user_hidden']['group_id'] != '53' || $this->_tpl_vars['user_hidden']['group_id'] != '68'): ?>
          <div style="float:left; margin-bottom:5px;">
          
            <div class="sIE_l_01_title">采购时间:</div>
            <!--<input type="hidden" class="sIE_No" style="width:100px;"  name="salesman_id" id="salesman_id" value="<?php if ($this->_tpl_vars['design']['salesman_id'] != ''): ?><?php echo $this->_tpl_vars['design']['salesman_id']; ?>
<?php else: ?><?php echo $this->_tpl_vars['user_info']['user_id']; ?>
<?php endif; ?>" />-->
            <input type="text" class="sIE_No" style="width:100px;"  name="insert_time"  value="<?php echo $this->_tpl_vars['insert_time']; ?>
" readonly="readonly" />
          </div>
          <?php endif; ?>
          <div style="float:left; margin-bottom:5px;">
            <div class="sIE_l_01_title">入库时间:</div>
            <input type="text" class="sIE_No date" style="width:100px;" id="storage_time"  name="storage_time"  value="<?php echo $this->_tpl_vars['metrial_procure']['storage_time']; ?>
"  readonly="readonly" />
          </div>
          <div style="float:left; margin-bottom:5px;">
            <div class="sIE_l_01_title">单据编号:</div>
            <input type="text" class="sIE_No" style="width:100px;"  id="document_number" name="document_number"  value="<?php echo $this->_tpl_vars['metrial_procure']['document_number']; ?>
" />
          </div>
          <div style="float:left; margin-bottom:5px;">
            <div class="sIE_l_01_title">折扣率:</div>
            <input type="text" class="sIE_No" style="width:100px; text-align:right;"  name="discount_rate"  value="<?php echo $this->_tpl_vars['metrial_procure']['discount_rate']; ?>
" />
            <font style="float:left; line-height:26px;">%</font>
          </div>
          <div style="float:left; margin-bottom:5px;">
            <div class="sIE_l_01_title">合格率:</div>
            <input type="text" class="sIE_No" style="width:100px; text-align:right;"  name="pass_rate"  value="<?php echo $this->_tpl_vars['metrial_procure']['pass_rate']; ?>
" />
            <font style="float:left; line-height:26px;">%</font>
          </div>
          <div style="float:left; margin-bottom:5px;">
            <div class="sIE_l_01_title">是否入库:</div>
            <?php if ($this->_tpl_vars['metrial_procure']['storage_status'] == '1'): ?>
            <input name="storage_status" type="radio" value="1" checked="checked" />是
            <input name="storage_status" type="radio" value="2" />否
            <?php elseif ($this->_tpl_vars['metrial_procure']['storage_status'] == '2'): ?>
            <input name="storage_status" type="radio" value="1" />是
            <input name="storage_status" type="radio" value="2" checked="checked" />否
            <?php else: ?>
            <input name="storage_status" type="radio" value="1" checked="checked" />是
            <input name="storage_status" type="radio" value="2" />否
            <?php endif; ?>
          </div>
          <div style="float:left; margin-bottom:5px;">
            <div class="sIE_l_01_title">退、换货:</div>
            <?php if ($this->_tpl_vars['metrial_procure']['returns'] == '1'): ?>
            <input name="returns" type="radio" value="1" checked="checked" />是
            <input name="returns" type="radio" value="2" />否
            <?php elseif ($this->_tpl_vars['metrial_procure']['returns'] == '2'): ?>
            <input name="returns" type="radio" value="1" />是
            <input name="returns" type="radio" value="2" checked="checked" />否
            <?php else: ?>
            <input name="returns" type="radio" value="1" />是
            <input name="returns" type="radio" value="2" checked="checked" />否
            <?php endif; ?>
          </div>
         <div id="mp_error" style=" color:#FFF; background-color:#F00; height:21px; line-height:21px; text-align:center; padding-left:5px; padding-right:5px; float:left; margin-bottom:10px; display:none;"></div>
          
        </div>
      
        <div class="sIE_l" style="width:200px; margin-left:50px;">
        <input type="hidden" class="sIE_No"  name="ids" value="<?php echo $this->_tpl_vars['ids']; ?>
"  />
          <div style="float:left; margin-bottom:5px;">
            <div class="sIE_l_01_title">负责人:</div>
            <input type="text" class="sIE_No" style="width:100px;"  readonly="readonly" name="procure_man" value="<?php echo $this->_tpl_vars['metrial_procure']['procure_man']; ?>
"  />
          </div>
          <?php if ($this->_tpl_vars['user_hidden']['group_id'] != '53' || $this->_tpl_vars['user_hidden']['group_id'] != '68'): ?>
          <div style="float:left; margin-bottom:5px;">
          
            <div class="sIE_l_01_title">用途:</div>
            <!--<input type="hidden" class="sIE_No" style="width:100px;"  name="salesman_id" id="salesman_id" value="<?php if ($this->_tpl_vars['design']['salesman_id'] != ''): ?><?php echo $this->_tpl_vars['design']['salesman_id']; ?>
<?php else: ?><?php echo $this->_tpl_vars['user_info']['user_id']; ?>
<?php endif; ?>" />-->
            <input type="text" class="sIE_No" style="width:100px;"  name="use"  value="<?php echo $this->_tpl_vars['metrial_procure']['use']; ?>
" readonly="readonly" />
          </div>
          <?php endif; ?>
          <div style="float:left; margin-bottom:5px;">
            <div class="sIE_l_01_title">最迟发货期:</div>
            <input type="text" class="sIE_No date" style="width:100px;"  name="late_delivery_date"  value="<?php echo $this->_tpl_vars['metrial_procure']['late_delivery_date']; ?>
"  readonly="readonly" />
          </div>
          <div style="float:left; margin-bottom:5px;">
            <div class="sIE_l_01_title">供应商代码:</div>
            <input type="text" class="sIE_No" style="width:100px;"  name="supplier_code" onkeyup="select_supplier();"  value="<?php echo $this->_tpl_vars['metrial_procure']['supplier_code']; ?>
" readonly="readonly" />
          </div>
          <div style="float:left; margin-bottom:5px;">
            <div class="sIE_l_01_title">供应商:</div>
            <input type="text" class="sIE_No" style="width:100px;"  name="supplier_s"  value="<?php echo $this->_tpl_vars['metrial_procure']['supplier_s']; ?>
" readonly="readonly" />
          </div>
          <div class="sIE_l" style="width:180px; margin-top:0px;">
          <textarea class="add01_textarea" style="width:180px; margin-top:0px; margin-bottom:10px; height:80px;" name="note" readonly="readonly" ><?php echo $this->_tpl_vars['metrial_procure']['note']; ?>
</textarea>
          </div>
          
        </div>
        <div class="sIE_l" style="width:200px; margin-left:50px;">
        
          <div style="float:left; margin-bottom:5px;">
            <div class="sIE_l_01_title">发货方式:</div>
            <input type="text" class="sIE_No" style="width:100px;"  name="shipping_method" value="<?php echo $this->_tpl_vars['metrial_procure']['shipping_method']; ?>
"  readonly="readonly" />
          </div>
          <?php if ($this->_tpl_vars['user_hidden']['group_id'] != '53' || $this->_tpl_vars['user_hidden']['group_id'] != '68'): ?>
          <div style="float:left; margin-bottom:5px;">
          
            <div class="sIE_l_01_title">收货地址:</div>
            <input type="text" class="sIE_No" style="width:100px;"  name="address" value="<?php echo $this->_tpl_vars['pga']['name']; ?>
"  readonly="readonly" />
          </div>
          <?php endif; ?>
          <div style="float:left; margin-bottom:5px;">
            <div class="sIE_l_01_title">货币:</div>
            <input type="text" class="sIE_No" style="width:100px;"  name="currency" value="<?php echo $this->_tpl_vars['exchangerate']['exchangerate_name']; ?>
"  readonly="readonly" />
          </div>
          <div style="float:left; margin-bottom:5px;">
            <div class="sIE_l_01_title">是否含税:</div>
            <?php if ($this->_tpl_vars['metrial_procure']['tax'] == '1'): ?>
              <input type="text" class="sIE_No" style="width:100px;"  name="tax" value="是"  readonly="readonly" />
            <?php elseif ($this->_tpl_vars['metrial_procure']['tax'] == '2'): ?>  
              <input type="text" class="sIE_No" style="width:100px;"  name="tax" value="否"  readonly="readonly" />
            <?php else: ?>
              <input type="text" class="sIE_No" style="width:100px;"  name="tax" value=""  readonly="readonly" />
            <?php endif; ?>
            </select>
            
          </div>
          <?php if ($this->_tpl_vars['metrial_procure']['tax'] == '1'): ?>
          <div id="tax_value_k" style="display:block;">
          <?php else: ?>
          <div id="tax_value_k" style="display:none;">
          <?php endif; ?>
          <div style="float:left; margin-bottom:5px;">
            <div class="sIE_l_01_title">税点:</div>
            <input type="text" class="sIE_No" id="tax_value" style="width:100px; text-align:right;"  name="tax_value" value="<?php echo $this->_tpl_vars['metrial_procure']['tax_value']; ?>
"  readonly="readonly" /><font style="float:left; line-height:26px;">%</font>
          </div>
          <!--<div class="sIE_l" style="width:180px; margin-top:0px;">
          	(如税点是17%,请填写0.17)
          </div>-->
          </div>
        </div>
        
        </form>
        
        
        
        </div>
        
        
        
    
    <div class="sIE_l_02" style="width:95%;">
      <table cellspacing="0" class="sIE_l_02Tab" id="mp_table_add">
        <tr>
          <th>中文名</th>
          <th>颜色</th>
          <th>供应商颜色</th>
          <th>尺寸</th>
          <th>数量</th>
          <th>单位</th>
          <th>特殊换算</th>
          <th>单价</th>
        </tr>
        <?php if ($this->_tpl_vars['purchase_details'] != ''): ?>
        <?php $_from = $this->_tpl_vars['purchase_details']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['pd']):
?>
        <tr class="mp_tabClass01">
          <td><?php echo $this->_tpl_vars['pd']['pd_name']; ?>
</td>
          <td><?php echo $this->_tpl_vars['pd']['pd_color']; ?>
</td>
          <td><?php echo $this->_tpl_vars['pd']['pd_supplier_color']; ?>
</td> 
          <td><?php if ($this->_tpl_vars['pd']['check'] == 1): ?><?php echo $this->_tpl_vars['pd']['pd_size']; ?>
<?php elseif ($this->_tpl_vars['pd']['check'] == 2): ?><?php echo $this->_tpl_vars['pd']['pd_size']; ?>
mm<?php else: ?><?php endif; ?></td>        
          <input type="hidden" id="pd_size<?php echo $this->_tpl_vars['pd']['id']; ?>
"  value="<?php echo $this->_tpl_vars['pd']['pd_size']; ?>
" />        
          <td><?php echo $this->_tpl_vars['pd']['pd_quantity']; ?>
</td>
          <td><?php echo $this->_tpl_vars['pd']['pd_quantity_unit']; ?>
</td>
          <td>
          <?php if ($this->_tpl_vars['pd']['pd_translated']): ?>
          <?php echo $this->_tpl_vars['pd']['pd_translated']; ?>
<?php echo $this->_tpl_vars['pd']['pd_translated_unit1']; ?>
/<?php echo $this->_tpl_vars['pd']['pd_translated_unit2']; ?>

          <?php else: ?>
          <?php endif; ?>
          </td>
          <td><?php echo $this->_tpl_vars['pd']['pd_unit_price']; ?>
</td>
          
        </tr>
        <?php endforeach; endif; unset($_from); ?>
        <?php endif; ?>
      </table>
    </div>
  </div>
        
        
        


    
</div>
<div class="formBar">
  <ul>
  <?php if ($this->_tpl_vars['edit_no'] == 1): ?>
    <li>
     	<div class="buttonActive">
          <div class="buttonContent">
            <button class="close">取消</button>
          </div>
        </div>
    </li>
  <?php else: ?>
    <li>
      <div class="buttonActive">
        <div class="buttonContent">
          <button type="button" id="submit_form">确认</button>
        </div>
      </div>
    </li>
    <li>
    	<div class="buttonActive">
          <div class="buttonContent">
            <button class="close">取消</button>
          </div>
        </div>
    </li>
   <?php endif; ?>
  </ul>
</div>
</div>

<!-- {literal} --> 
<script type="text/javascript">

$(document).ready(function()  
{
	
	
	$("#submit_form").click(function () {
		if($("#storage_time").val() == ""){
			$("#mp_error").css("display","block");
			$("#mp_error").html("入库时间不为空！");
		}
		else if($("#document_number").val() == ""){
			$("#mp_error").css("display","block");
			$("#mp_error").html("单据编号不为空！");
		}
		else{
			$("#info_form").submit();	
		}
				
	});
	

	
	

	
	
	

	


	
});
function change_tax(){
  	if($("#tax").val() == '1'){
		$("#tax_value_k").css("display","block");  
  	}
  	else{
	  $("#tax_value").val("");
	  $("#tax_value_k").css("display","none");
	}
}




</script> 
<!-- {/literal} -->