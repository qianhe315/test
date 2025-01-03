<?php /* Smarty version 2.6.22, created on 2016-01-08 16:20:29
         compiled from cn_other_register_storage/materials_exit.html */ ?>
<script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/cstown_Sys.js" type="text/javascript"></script>
<link href="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/css/cstown_sys.css" rel="stylesheet" type="text/css" media="screen"/>
<div class="pageContent">
  
    <div class="stkInfEnter" style="width:98%" layoutH="100" id="ttbjd_ysj">
        <div class="sIEK" style="width:520px;">
            <form method="post" id="shuju" style="width:100%;" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" enctype="multipart/form-data" onsubmit="return validateCallback(this, navTabAjaxDone)" >       
            <div id="b_o_c_d_Div1" style="width:100%; height:500px; float:left;">
                <div style="width:100%; float:left;">
                    时间：<input class="date textInput readonly valid" type="text" readonly="true" datefmt="yyyy-MM-dd" name="time" value="<?php echo $this->_tpl_vars['time']; ?>
">
                </div>
                <div style="width:520px; float:left; text-align:center; margin-top:5px; border-top:1px solid #CCC; padding-top:5px;"></div>
                <textarea name="shuju" id="order_1" style="width:400px; height:180px; float:left;"></textarea> 
                <div id="order1" style="float:left; margin-top:3px; margin-left:10px; color:#F00;"></div>
                <div id="order11" style="float:left; margin-top:3px; margin-left:10px; color:#F00;"></div>
                <div style=" margin-left:5px; margin-top:5px; float:left;">
                    <div style="margin-top:5px;">入库来源：</div><textarea type="text" style="width:315px; height:40px; margin-left:80px; margin-top:-15px;"  name="go_where" value=""></textarea>
                </div>
            </div>     
            </form>        
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