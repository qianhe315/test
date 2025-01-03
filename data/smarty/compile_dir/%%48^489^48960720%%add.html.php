<?php /* Smarty version 2.6.22, created on 2013-09-12 10:33:20
         compiled from discount/add.html */ ?>

<div class="pageContent">
  <form method="post" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, dialogAjaxDone)">
    <div class="pageFormContent" layoutH="58">
     <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['discount']['id']; ?>
" />
      <div class="unit">
      	<label>折扣名：</label>
        <input type="text" size="30" name="discount_name" id="discount_name" class="required" value="<?php echo $this->_tpl_vars['discount']['discount_name']; ?>
"  />
      </div>
      <div class="divider">divider</div>
      
      
      <div class="unit">
        <label>选择折扣类别：</label>
        <select name="discount_category" id="discount_category" onchange="change(this.value)">
        <option value="0">请选择</option>
        <option value="1" <?php if ($this->_tpl_vars['discount']['discount_category'] == 1): ?> selected <?php endif; ?> >满立减</option>
        <option value="2" <?php if ($this->_tpl_vars['discount']['discount_category'] == 2): ?> selected <?php endif; ?>>满包邮</option>
        <option value="3" <?php if ($this->_tpl_vars['discount']['discount_category'] == 3): ?> selected <?php endif; ?>>折扣</option>
        <!--<option value="4" <?php if ($this->_tpl_vars['discount']['discount_category'] == 4): ?> selected <?php endif; ?>>返利券</option>
        <option value="5" <?php if ($this->_tpl_vars['discount']['discount_category'] == 5): ?> selected <?php endif; ?>>抵值券</option>-->
       
        </select>
      </div>
      <div class="divider">divider</div>
      
      <div class="unit" style="display:none;" id="dis1">
      	<label>满立减：</label>
        <label style="width:40px;">总价满</label><input type="text" size="10" name="top_price" id="top_price" value="<?php echo $this->_tpl_vars['discount']['top_price']; ?>
" /><label style="width:40px;">元，减</label><input type="text" size="10" name="discount_price" id="discount_price" value="<?php echo $this->_tpl_vars['discount']['discount_price']; ?>
" /><label style="width:40px;">元</label>
      </div>
     
      
      <div class="unit"  style="display:none;" id="dis2">
      	<label>满包邮：</label>
        <label style="width:40px;">总价满</label><input type="text" size="10" name="by_top_price" id="by_top_price" value="<?php echo $this->_tpl_vars['discount']['by_top_price']; ?>
" /><label style="width:40px;">元包邮</label>
      </div>
      
      
      <div class="unit"  style="display:none;" id="dis3">
      	<label>折扣：</label>
        <input type="text" size="10" name="discount" id="discount" value="<?php echo $this->_tpl_vars['discount']['discount']; ?>
" /><label>折</label>
      </div>
      
      
       <div class="unit"  style="display:none;" id="dis4">
      	<label>返利券：</label>
        <label style="width:40px;">总价满</label><input type="text" size="10" name="fl_top_price" id="fl_top_price" value="<?php echo $this->_tpl_vars['discount']['fl_top_price']; ?>
" /><label style="width:90px;">元，下次购物减</label><input type="text" size="10" name="next_discount" id="next_discount" value="<?php echo $this->_tpl_vars['discount']['next_discount']; ?>
" /><label style="width:40px;">元</label>
      </div>
     
      
      <div class="unit"  style="display:none;" id="dis5">
      	<label>抵值券：</label>
       <label style="width:65px;">下次购物减</label><input type="text" size="10" name="dz_next_discount" id="dz_next_discount" value="<?php echo $this->_tpl_vars['discount']['dz_next_discount']; ?>
" /><label style="width:40px;">元</label>
      </div>
      
      
    </div>
    <div class="formBar">
      <ul>
        <li>
          <div class="buttonActive">
            <div class="buttonContent">
              <button type="submit">确认添加</button>
            </div>
          </div>
        </li>
        <li> </li>
      </ul>
    </div>
  </form>
</div>

<!-- {literal} --> 
<script type="text/javascript">
function change(v){
	if(v == 1){
		$("#dis1").css("display","block");
		
		$("#dis2").css("display","none");
		$("#dis3").css("display","none");
		$("#dis4").css("display","none");
		$("#dis5").css("display","none");
		
	}
	if(v == 2){
		$("#dis2").css("display","block");
		
		$("#dis1").css("display","none");
		$("#dis3").css("display","none");
		$("#dis4").css("display","none");
		$("#dis5").css("display","none");
	}
	if(v == 3){
		$("#dis3").css("display","block");
		
		$("#dis1").css("display","none");
		$("#dis2").css("display","none");
		$("#dis4").css("display","none");
		$("#dis5").css("display","none");
	}
	if(v == 4){
		$("#dis4").css("display","block");
		
		$("#dis1").css("display","none");
		$("#dis2").css("display","none");
		$("#dis3").css("display","none");
		$("#dis5").css("display","none");
	}
	if(v == 5){
		$("#dis5").css("display","block");
		
		$("#dis1").css("display","none");
		$("#dis2").css("display","none");
		$("#dis3").css("display","none");
		$("#dis4").css("display","none");
	}
	
}

var cid = $("#discount_category").val();

if(cid == '1'){
	$("#dis1").css("display","block");
}

if(cid == '2'){
	$("#dis2").css("display","block");
}

if(cid == '3'){
	$("#dis3").css("display","block");
}

if(cid == '4'){
	$("#dis4").css("display","block");
}

if(cid == '5'){
	$("#dis5").css("display","block");
}

</script> 
<!-- {/literal} -->