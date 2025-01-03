<?php /* Smarty version 2.6.22, created on 2014-01-14 09:08:03
         compiled from exchangerate_finance/edit.html */ ?>
<script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/cstown_Sys.js" type="text/javascript"></script>
<div class="pageContent">
  <form method="post" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, dialogAjaxDone)">
  <input type="hidden" name="id" id="id" value="<?php echo $this->_tpl_vars['exchangerate_finance']['id']; ?>
" />
    <div class="pageFormContent" layoutH="58">
      <div class="unit">
      	<label>汇率时间：</label>
        <input type="text" size="30" name="value_date" value="<?php echo $this->_tpl_vars['exchangerate_finance']['value_date']; ?>
"  class="date textInput readonly valid" datefmt="yyyy-MM" />
      </div>
      <div class="unit">
      	<label>货币名称：</label>
        <select name="exchangerate_name" id="exchangerate_name" onchange="change(this.value)">
        	<option <?php if ($this->_tpl_vars['exchangerate_finance']['exchangerate_name'] == '美元'): ?> value="美元" selected="selected" <?php endif; ?>>美元</option>
            <option <?php if ($this->_tpl_vars['exchangerate_finance']['exchangerate_name'] == '欧元'): ?> value="美元" selected="selected" <?php endif; ?>>欧元</option>
        </select>
      </div>
      <div class="unit">
      	<label>汇率值：</label>
        <input type="text" size="30" name="value" value="<?php echo $this->_tpl_vars['exchangerate_finance']['value']; ?>
" id="value"  class="required" />
        <div id="ef_result" style="line-height: 26px; float: left; color: rgb(255, 0, 0); margin-left: 10px; display:none;"></div>
      </div>
      <div class="unit">
      	<label>货币符号：</label>
       <input type="text" size="30" name="exchangerate_character" id="ec"  style="display:block;"  value="<?php echo $this->_tpl_vars['exchangerate_finance']['exchangerate_character']; ?>
" readonly="readonly" />
      </div>
      <div class="divider">divider</div>
      
      
      
    </div>
    <div class="formBar">
      <ul>
        <li>
          <div class="buttonActive">
            <div class="buttonContent">
              <button type="button" id="submit" >确认修改</button>
            </div>
          </div>
        </li>
        <li> </li>
      </ul>
    </div>
  </form>
</div>

<!-- <?php echo ' --> 
<script type="text/javascript">

$(document).ready(function(){
	$("#submit").click(function(){
		if(!isEmpty($("#value").val())){
			$("#submit").submit();
		}else{
			$("#ef_result").css("display","block");
			$("#ef_result").html("不能包含空格,请重新输入");
		}
	});
	
});
function change(a){
	if(a == \'美元\'){
		$("#ec").val("$");
	}else{
		$("#ec").val("€");
	}
}
</script> 
<!-- '; ?>
 -->