<?php /* Smarty version 2.6.22, created on 2015-12-12 10:39:39
         compiled from cn_stock_surplus/add.html */ ?>

<div class="pageContent">
  <form method="post" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, dialogAjaxDone)" id="add_submit">
    <div class="pageFormContent" layoutH="58">

     <input type="hidden" size="30"  name="mid" value="<?php echo $this->_tpl_vars['id']; ?>
" />
      <div class="unit">
      	<label>预警数量单位：</label>
        <select class="required" name="Warning_count_unit" id="Warning_count_unit" >
        <option value="">请选择</option>
        <?php $_from = $this->_tpl_vars['unit_add']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['un']):
?>
        <option value="<?php echo $this->_tpl_vars['un']['id']; ?>
" <?php if ($this->_tpl_vars['materials']['Warning_count_unit'] == $this->_tpl_vars['un']['id']): ?> selected="selected" <?php endif; ?>><?php echo $this->_tpl_vars['un']['name']; ?>
</option>
        <?php endforeach; endif; unset($_from); ?>
        </select>
     
      </div>
      <div class="divider">divider</div>

      <div class="unit">
      	<label>预警数量：</label>
        <input type="text" size="50" name="Warning_count" id="Warning_count" value="<?php echo $this->_tpl_vars['materials']['Warning_count']; ?>
"  />
      </div>
      <div class="divider">divider</div>
     <div id="Warning_count_error" style="float:left; width:500px; margin-top:10px; color:#F00; display:none; font-size:12px;"></div>
    </div>
    
    <div class="formBar">
      <ul>
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
              <button type="close" >取消</button>
            </div>
          </div> </li>
      </ul>
    </div>
  </form>
</div>

<!-- {literal} --> 
<script type="text/javascript">
$(document).ready(function() {
$("#submit_form").click(function (){
	  var Warning_count=$("#Warning_count").val();
	  var reg = /^\d+(?=\.{0,1}\d+$|$)/;
	  var a=reg.test(Warning_count);
	  if(a==false){
		  $('#Warning_count_error').css("display","block");
		  $("#Warning_count_error").html("预警数量为正数！");	
	  }else{
			  $("#add_submit").submit();
	}
});
});			

</script> 
<!-- {/literal} -->