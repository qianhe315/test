<?php /* Smarty version 2.6.22, created on 2014-11-22 11:44:33
         compiled from delivery_record/edit.html */ ?>
<script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/cstown_Sys.js" type="text/javascript"></script>
<link href="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/css/cstown_sys.css" rel="stylesheet" type="text/css" media="screen"/>
<div class="pageContent">
  
    <div class="stkInfEnter" style="width:90%" layoutH="120" id="ttbjd_ysj">
          
  	  <div class="sIEK" style="width:720px;">
<form method="post" id="delivery_record_edit_submit" style="width:100%;" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" enctype="multipart/form-data" onsubmit="return validateCallback(this, navTabAjaxDone)" >       
      	<div style="width:100%; float:left; ">
        	
            <div style="width:176px; float:left; font-weight:bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;快递单号</div>
            <div style="width:176px; float:left; font-weight:bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;货品代码或业务代码</div>
        </div>
        <div style="width:600px; float:left; text-align:center; margin-top:5px; border-top:1px solid #CCC; padding-top:5px;">
            <input name="shipping_no" id="shipping_no" type="text" value='<?php echo $this->_tpl_vars['delivery_record']['shipping_no']; ?>
'style="float:left; width:160px; margin-top:10px; margin-left:10px;" />
            <input name="goods_or_sale" id="goods_or_sale" type="text" value='<?php echo $this->_tpl_vars['delivery_record']['goods_or_sale']; ?>
' style="float:left; width:160px; margin-top:10px; margin-left:10px;" />
        </div>
        <input type="hidden" name='mid' value="<?php echo $this->_tpl_vars['id']; ?>
">
</form>        
      </div>
          
      </div>
    </div>
<div class="sIE_l_02">
  <div class="button" style="margin-left:80%; margin-right:5px; padding-bottom:20px;">
    <div class="buttonContent">
      <button type="button" id="submit_fahuo_edit" >确定</button>
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
	 $("#submit_fahuo_edit").click(function () {
		var shipping_no=$("#shipping_no").val();
		var goods_or_sale=$("#goods_or_sale").val();
		if(shipping_no==""){
			alert("输入信息不完整")
		}else if(goods_or_sale==""){
			alert("输入信息不完整")
		}else{
		  $("#delivery_record_edit_submit").submit();
		
		}
		
		
		/*else{
			
			
			}*/
	});
	
});

</script>

