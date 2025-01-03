<?php /* Smarty version 2.6.22, created on 2015-01-27 13:44:56
         compiled from factory_order/revocation_order.html */ ?>
<div class="pageContent">
  <form method="post" action="<?php echo $this->_tpl_vars['act']; ?>
" id="make_degree" class="pageForm" onsubmit="return validateCallback(this, dialogAjaxDone)">
    <div class="pageFormContent" layoutH="58">

        <div class="unit">
          做货程度:<br/><br/>
           <?php if ($this->_tpl_vars['make_degree']): ?>
			 <?php $_from = $this->_tpl_vars['make_degree']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['da']):
?>
                 <?php if ($this->_tpl_vars['da']['name'] == "未开始"): ?>
                 &nbsp;&nbsp;&nbsp;<input type="radio"  id="name" name="name" value="<?php echo $this->_tpl_vars['da']['name']; ?>
"  checked="checked" onClick="doclick(1)"/> <?php echo $this->_tpl_vars['da']['name']; ?>

                 <?php else: ?>
                 &nbsp;&nbsp;&nbsp;<input type="radio"  id="name" name="name" value="<?php echo $this->_tpl_vars['da']['name']; ?>
"  onClick="doclick(1)"/> <?php echo $this->_tpl_vars['da']['name']; ?>

                 <?php endif; ?>
                 
         
            <?php endforeach; endif; unset($_from); ?>
             &nbsp;&nbsp;&nbsp;<input type="radio"  id="name" name="name" value="其他"  onClick="doclick(2)"/> 其他
            <?php endif; ?>
       <input type='hidden' name='mid' id='mid' value="<?php echo $this->_tpl_vars['id']; ?>
">
      </div>
      <div style="display:none;" id="qita">
     <textarea name="content" id="content"  value="" style=" margin-left:15px; margin-top:10px; width:400px; height:100px;"></textarea>
     </div>
     <div>
    <span id="content_error" class="error" style="display:none; margin-top:40px;"></span>
    </div>
    </div>
     </form>
    <div class="formBar">
      <ul>
        <li>
          <div class="buttonActive">
            <div class="buttonContent">
              <button type="button" id="submit_make_degree" >确认</button>
            </div>
          </div>
          
        </li>
      </ul>
    </div>

</div>

<!-- {literal} --> 
<script type="text/javascript">
function doclick(k)

{
	if(k=="2"){
		$('#qita').css("display","block");
	}else{
		$('#qita').css("display","none");
		document.getElementById('content').value = "";
	}
	
  
  
}
$(document).ready(function()  
{       $("#submit_make_degree").click(function (){
	     var o =document.getElementById("qita").style.display;  
		 var content= $("#content").val();       
         if(o=="block" && content==""){
			 $('#content_error').css("display","block");
			 $('#content_error').html('请输入做货程度'); 
			 
		 }else{
			 $("#make_degree").submit();
		 }
		 
	      
});
});


</script> 
<!-- {/literal} -->