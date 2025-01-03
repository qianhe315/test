<?php /* Smarty version 2.6.22, created on 2016-02-18 16:51:06
         compiled from procure_outgoing/add_note.html */ ?>
<div class="pageContent">
  <form method="post" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, dialogAjaxDone)" id="form_submit_note">
    <div class="pageFormContent" layoutH="58">
      <div class="unit">
        <label>备注：</label>
        <textarea cols="40" rows="10" name="note"></textarea>
        <input type="hidden" id="ids" name="ids" value="<?php echo $this->_tpl_vars['ids']; ?>
" />
      </div>
      <div class="divider">divider</div>     
    </div>
    <div class="formBar">
      <ul>
        <li>
          <div class="buttonActive">
            <div class="buttonContent">
               <button type="button" id="submit">确定</button>
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
 $(document).ready(function(){
	 $("#submit").click(function (){
		var ids = $("#ids").val();
		if(ids==""){
		     alert("请选择要修改备注的订单");
		}else{
			$("#form_submit_note").submit();
		}
	});
	 
	 
});
</script> 
<!-- {/literal} -->