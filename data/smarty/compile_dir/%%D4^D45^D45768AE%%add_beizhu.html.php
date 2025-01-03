<?php /* Smarty version 2.6.22, created on 2016-05-18 13:34:42
         compiled from cn_goods_free/add_beizhu.html */ ?>
<div class="pageContent">
  <form method="post" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, dialogAjaxDone)" id="form_submit">
    <div class="pageFormContent" layoutH="58">
      <div class="unit">
        <label>备注：</label>
        <textarea cols="50" rows="10" name="beizhu"><?php echo $this->_tpl_vars['remark']; ?>
</textarea>
        <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['id']; ?>
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
			$("#form_submit").submit();
	});
	 
	 
});
</script> 
<!-- {/literal} -->