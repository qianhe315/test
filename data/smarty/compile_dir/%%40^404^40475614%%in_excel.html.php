<?php /* Smarty version 2.6.22, created on 2014-12-01 13:10:51
         compiled from materials_management/in_excel.html */ ?>

<div class="pageContent">
  <form method="post" action="<?php echo $this->_tpl_vars['act']; ?>
" id="pageForm" onsubmit="return validateCallback(this, dialogAjaxDone)" enctype="multipart/form-data" >
    <div class="pageFormContent" layoutH="58">

      <div class="unit">
      	<label>上传：</label>
       <input type="file" name="upfile" />
       
      </div>
      <div class="divider">divider</div>

    </div>
    <div class="formBar">
      <ul>
        <li>
          <div class="buttonActive">
            <div class="buttonContent">
              <button type="button" id="submit" >确定</button>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </form>
</div>
<!-- {literal} --> 
<script type="text/javascript">	


$("#submit").click(function (){	
	$("#pageForm").submit();
	
});
</script> 
<!-- {/literal} -->