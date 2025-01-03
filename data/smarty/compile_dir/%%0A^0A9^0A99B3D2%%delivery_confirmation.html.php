<?php /* Smarty version 2.6.22, created on 2014-03-07 14:08:38
         compiled from sale_detail/delivery_confirmation.html */ ?>
<script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/cstown_Sys.js" type="text/javascript"></script>
<div class="pageContent">
<form method="post" id="quote_form" style="width:100%;" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" enctype="multipart/form-data" onsubmit="return validateCallback(this, navTabAjaxDone)" >
    <div class="pageFormContent" layoutH="58" style="width:40%; float:left;">
    <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['id']; ?>
" />
    <input type="hidden" name="saleman_name" value="<?php echo $this->_tpl_vars['saleman_name']; ?>
">
      <div class="unit">
      	<label>发货日期：</label>
        <input type="text" name="deliver_time" value="<?php echo $this->_tpl_vars['data']['delivery_time']; ?>
" size="25" class="date required" readonly />
        
      </div>
	  <div class="unit">
      	<label>快递公司：</label>
        <select class="combox required" name="s_company">
        <option value="">请选择</option>
        <?php $_from = $this->_tpl_vars['shippingcompany']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['qf']):
?>
            <?php if ($this->_tpl_vars['data']['shipping_company'] == $this->_tpl_vars['qf']['shippingcompany_name']): ?>
                <option selected="selected" value="<?php echo $this->_tpl_vars['qf']['shippingcompany_name']; ?>
"><?php echo $this->_tpl_vars['qf']['shippingcompany_name']; ?>
</option>
            <?php else: ?>
                <option value="<?php echo $this->_tpl_vars['qf']['shippingcompany_name']; ?>
"><?php echo $this->_tpl_vars['qf']['shippingcompany_name']; ?>
</option>
            <?php endif; ?>     
        <?php endforeach; endif; unset($_from); ?>
        </select>
      </div>
      <div class="unit">
      	<label>重量：</label>
        <input type="text" size="25" name="weight" id="weight" value="<?php echo $this->_tpl_vars['data']['sale_weight']; ?>
" class="required"  /><label>KG</label>
       </div>
<div class="unit">
      	<label>快递单号：</label>
        <input type="text" size="25" name="tracking_number" id="tracking_number" value="<?php echo $this->_tpl_vars['data']['shipping_number']; ?>
" class="required"  />
     </div>
      <div class="unit">
      	<label>销售备注：</label>
        <textarea name="sale_note" cols="40" rows="4"><?php echo $this->_tpl_vars['data']['sale_note']; ?>
</textarea>
      </div>
      <div class="divider">divider</div>
      <div class="unit">
      	<label>是否报关：</label>
        <?php if ($this->_tpl_vars['data']['whether_declare'] == '1'): ?>
        <label><input type="radio" name="clearance" value="2" id="show" onchange="dc_unitK_Show();" />是</label>
        <label><input type="radio" name="clearance" value="1" id="hide" onchange="dc_unitK_Hide();" checked="checked" /><span id="hide1">否</span></label>       
        <?php elseif ($this->_tpl_vars['data']['whether_declare'] == '2'): ?>
        <label><input type="radio" name="clearance" value="2" id="show" onchange="dc_unitK_Show();" checked="checked" />是</label>
        <label><input type="radio" name="clearance" value="1" id="hide" onchange="dc_unitK_Hide();" /><span id="hide1">否</span></label>
        <?php else: ?>
        <label><input type="radio" name="clearance" value="2" id="show" onchange="dc_unitK_Show();" />是</label>
        <label><input type="radio" name="clearance" value="1" id="hide" onchange="dc_unitK_Hide();" checked="checked" /><span id="hide1">否</span></label>
        <?php endif; ?>
    </div>
    
    <?php if ($this->_tpl_vars['data']['whether_declare'] == '2'): ?>
        <div id="dc_unitK" style="display:block;">
    <?php elseif ($this->_tpl_vars['data']['whether_declare'] == '1'): ?>
        <div id="dc_unitK" style="display:none;">
    <?php else: ?>
        <div id="dc_unitK" style="display:none;">
    <?php endif; ?> 
    <div class="unit">
      	<label>代理报关协议书号码：</label>
        <input type="text" name="agent_number" value="<?php echo $this->_tpl_vars['data']['agent_number']; ?>
" />
    </div>
     <div class="unit">
      	<label>报关类型：</label>
        <?php if ($this->_tpl_vars['data']['declare_type'] == '1'): ?>
            <label><input type="radio" name="type" value="1" checked="checked" />FOB</label>
            <label><input type="radio" name="type" value="2" />CIF</label>         
        <?php elseif ($this->_tpl_vars['data']['declare_type'] == '2'): ?>
            <label><input type="radio" name="type" value="1" />FOB</label>
            <label><input type="radio" name="type" value="2" checked="checked" />CIF</label>         
        <?php else: ?>
            <label><input type="radio" name="type" value="1" checked="checked" />FOB</label>
            <label><input type="radio" name="type" value="2" />CIF</label>        
        <?php endif; ?>
    </div>
    <div class="unit">
      	<label>商品名称：</label>
        <?php $_from = $this->_tpl_vars['declare_product_name']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['qf']):
?>
        <?php if ($this->_tpl_vars['data']['product_name'] == $this->_tpl_vars['qf']['name']): ?>
            <label><input type="radio" name="product_name" value="<?php echo $this->_tpl_vars['qf']['name']; ?>
" checked="checked" /><?php echo $this->_tpl_vars['qf']['name']; ?>
</label>
        <?php else: ?>   
           <?php if ($this->_tpl_vars['k'] == '0'): ?>
               <label><input type="radio" name="product_name" value="<?php echo $this->_tpl_vars['qf']['name']; ?>
" checked="checked" /><?php echo $this->_tpl_vars['qf']['name']; ?>
</label>
           <?php else: ?>
               <label><input type="radio" name="product_name" value="<?php echo $this->_tpl_vars['qf']['name']; ?>
" /><?php echo $this->_tpl_vars['qf']['name']; ?>
</label>
           <?php endif; ?>
        <?php endif; ?>       
        <?php endforeach; endif; unset($_from); ?>
    </div>
    <div class="unit">
      	<label>商品编码：</label>
        <?php $_from = $this->_tpl_vars['declare_product_number']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['qf']):
?>
        <?php if ($this->_tpl_vars['data']['product_number'] == $this->_tpl_vars['qf']['name']): ?>
            <label><input type="radio" name="product_number" value="<?php echo $this->_tpl_vars['qf']['name']; ?>
" checked="checked" /><?php echo $this->_tpl_vars['qf']['name']; ?>
</label>
        <?php else: ?>
           <?php if ($this->_tpl_vars['k'] == '0'): ?>
               <label><input type="radio" name="product_number" value="<?php echo $this->_tpl_vars['qf']['name']; ?>
" checked="checked" /><?php echo $this->_tpl_vars['qf']['name']; ?>
</label>
           <?php else: ?>
               <label><input type="radio" name="product_number" value="<?php echo $this->_tpl_vars['qf']['name']; ?>
" /><?php echo $this->_tpl_vars['qf']['name']; ?>
</label>
           <?php endif; ?>
        <?php endif; ?>       
        <?php endforeach; endif; unset($_from); ?>
    </div>
     <div class="unit">
      	<label id="dis" style="width:90%; display:none;">*此单超过报关对应金额金额，需要强制报关，请进行报关的相应操作相应操作！</label>
     </div>
     </div>
     </div>
     <div class="pageFormContent" layoutH="58" style="width:40%; float:left;">
     	<div class="unit">
        <?php $_from = $this->_tpl_vars['order_number_array']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['qf']):
?>
           <?php if ($this->_tpl_vars['delivery_order'] && in_array ( $this->_tpl_vars['qf'] , $this->_tpl_vars['delivery_order'] )): ?>
               <label style="width:200px"><input name="order_number[]" checked="checked" onclick="order(<?php echo $this->_tpl_vars['k']; ?>
)" type="checkbox" value="<?php echo $this->_tpl_vars['qf']; ?>
" /><?php echo $this->_tpl_vars['qf']; ?>
</label>
           <?php else: ?>
           <label style="width:200px"><input name="order_number[]" onclick="order(<?php echo $this->_tpl_vars['k']; ?>
)" type="checkbox" value="<?php echo $this->_tpl_vars['qf']; ?>
" /><?php echo $this->_tpl_vars['qf']; ?>
</label>
           <?php endif; ?>
        <?php endforeach; endif; unset($_from); ?>
    </div>
     </div>
  </form>
 <script type="text/javascript" language="javascript">
     function order(n){
		 
		var chk_value =[];
		  
		$('input[name="order_number[]"]:checked').each(function(){  
		     chk_value.push($(this).val());  
		});
			$.ajax({
				url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/sale_detail/select_order_price',//通过Ajax取数据的目标页面
				type:'get',//方法，还可以是"post"
				data:{'ids':chk_value},
				dataType:'json',//数据类型，还有其它的，详见jQuery手册
				success:function(locals)//成功后执行的语句，这里是一个函数，“locals”是返回的数据
				{
					if(locals==1){
					   dc_unitK_Show();
					   document.getElementById('show').checked='true';
					   var ui = document.getElementById("dis");
                       ui.style.display="inline";
					   var hide = document.getElementById("hide");
                       hide.style.display="none";
					   var hide1 = document.getElementById("hide1");
                       hide1.style.display="none";						   					   
					}else{
					   dc_unitK_Hide();
					   document.getElementById('hide').checked='true';
					   var ui = document.getElementById("dis");
                       ui.style.display="none";
					   var hide = document.getElementById("hide");
                       hide.style.display="inline";
					   var hide1 = document.getElementById("hide1");
                       hide1.style.display="inline";					   					   
					}
				}
			});
		 
	 }
 $(document).ready(function(){
	$("#submit").click(function(){
		$("#quote_form").submit();
	});
 });
 </script> 
  
  <div class="formBar">
      <ul>
        <li>
          <?php if (count ( $this->_tpl_vars['order_number_array'] ) != 0): ?>
             <div class="buttonActive">
               <div class="buttonContent">
                 <button type="button" id="submit" >确定</button>  
               </div>
             </div>
          <?php endif; ?>
        </li>
        <li> <div class="buttonActive">
            <div class="buttonContent">
              <button type="button" id="submit" >取消</button>
            </div>
          </div> </li>
      </ul>
    </div>
  
</div> 

