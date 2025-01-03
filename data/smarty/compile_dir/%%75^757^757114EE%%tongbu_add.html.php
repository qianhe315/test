<?php /* Smarty version 2.6.22, created on 2014-12-01 09:05:31
         compiled from delivery_record/tongbu_add.html */ ?>
<script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/cstown_Sys.js" type="text/javascript"></script>
<link href="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/css/cstown_sys.css" rel="stylesheet" type="text/css" media="screen"/>
<div class="pageContent">
  
    <div class="stkInfEnter" style="width:98%" layoutH="100" id="ttbjd_ysj">
          
  	  <div class="sIEK" style="width:520px;">
<form method="post" id="shuju" style="width:100%;" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" enctype="multipart/form-data" onsubmit="return validateCallback(this, navTabAjaxDone)" >       
      <div id="b_o_c_d_Div1" style="width:520px; float:left;">
      	<div style="width:100%; float:left;">
        	时间：<input class="date textInput readonly valid" type="text" readonly="true" datefmt="yyyy-MM-dd 17:00:00" name="time">
        </div>
        <div style="width:520px; float:left; text-align:center; margin-top:5px; border-top:1px solid #CCC; padding-top:5px;">
        	<textarea name="shuju" id="order_1" style="width:400px; height:180px; float:left;"></textarea>
            <div id="order1" style="float:left; margin-top:3px; margin-left:10px; color:#F00;"></div>
            <div id="order11" style="float:left; margin-top:3px; margin-left:10px; color:#F00;"></div>
        </div>              
</form>        
      </div>
          
      </div>
    </div>
</div>
<div class="sIE_l_02">
  <div class="button" style="margin-left:80%; margin-right:5px; padding-bottom:20px;">
    <div class="buttonContent">
      <button type="button" id="submit_shuju" >确定</button>
    </div>
  </div>
  <div class="button">
    <div class="buttonContent">
      <button class="close">取消</button>
    </div>
  </div>
</div>
<script type="text/javascript" language="javascript">
$(document).ready(function()  
{
	 $("#submit_shuju").click(function () {
		  $("#shuju").submit();
	 });
	
});

</script>