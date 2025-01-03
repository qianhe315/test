<?php /* Smarty version 2.6.22, created on 2015-04-24 09:25:44
         compiled from commission_add/edit.html */ ?>
<div class="pageContent">
  <form method="post" id="commission_add" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, dialogAjaxDone)">
       <div class="pageFormContent" layoutH="58">
      <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['id']; ?>
" />
   
      <div class="unit">
      	<label>姓名：</label>
        <select class="combox required" id="name" name="name" >
        <option value="">请选择</option>
               <?php $_from = $this->_tpl_vars['users']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sa']):
?> 
               <option value="<?php echo $this->_tpl_vars['sa']['user_id']; ?>
" <?php if ($this->_tpl_vars['sa']['user_id'] == $this->_tpl_vars['commission_add']['sales_id']): ?>  selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['sa']['user_name']; ?>

              </option>
              
              <?php endforeach; endif; unset($_from); ?>
        </select>
    
      </div>
      <div class="divider">divider</div>
      <div class="unit">
      	<label>时间：</label>
       
        <input type="text" size="20" name="time" id="time" class="date" value="<?php echo $this->_tpl_vars['commission_add']['time']; ?>
"  readonly/>
        
      </div>
      <div class="divider">divider</div>
      <div class="unit">
      	<label>成本扣减：</label>
        <input type="text" size="20" name="cost_cut" id="cost_cut" class="required" value="<?php echo $this->_tpl_vars['commission_add']['cost_cut']; ?>
"  />
      </div>
     <div class="divider">divider</div>
       <div class="unit">
      	<label>运费增添：</label>
        <input type="text" size="20" name="freight_add" id="freight_add" class="required" value="<?php echo $this->_tpl_vars['commission_add']['freight_add']; ?>
"  />
      </div>
      <div class="divider">divider</div>
      <div id="error" style="float:left; width:500px; margin-top:10px; color:#F00; display:none; font-size:12px;"></div>
      
    </div>
   </form>
   <div class="formBar"> 
        <div class="button" style="margin-left:80%; margin-right:10px;">
    		<div class="buttonContent">
       			 <button type="button" id="commission_add_submit">确定</button>
    		</div>
  		</div>
  		<div class="button" style="margin-left:90%; margin-right:5px; margin-top:-25px;">
    		<div class="buttonContent">
       			<button class="close">取消</button>
    		</div>
  		</div>
	</div>
    
<script type="text/javascript">
$("#commission_add_submit").click(function () {
	    var reg = /\s/;
		var name=$("#name").val();
		var cost_cut=$("#cost_cut").val();
        var freight_add=$("#freight_add").val();
	    var time=$("#time").val();
		if(name==""){
			$("#error").css("display","block");
			$("#error").html("请选择业务员！");
		}else if(time==""){
			$("#error").css("display","block");
			$("#error").html("请填写时间！");
		}else if(isNaN(cost_cut) || reg.exec(cost_cut)!=null){
			$("#error").css("display","block");
			$("#error").html("成本扣减必须为数字且不带任何特殊字符！");
		}else if(isNaN(freight_add) || reg.exec(freight_add)!=null ){
			$('#error').css("display","block");
			$("#error").html("运费增减必须为数字且不带任何特殊字符！");	
		}else{
		    $("#commission_add").submit();
		}
});
</script> 