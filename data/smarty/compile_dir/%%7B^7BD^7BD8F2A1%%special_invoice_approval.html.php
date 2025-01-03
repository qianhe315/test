<?php /* Smarty version 2.6.22, created on 2015-05-07 14:58:47
         compiled from invoice/special_invoice_approval.html */ ?>
<div class="pageContent">
  <form method="post" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" id="form" onsubmit="return validateCallback(this, dialogAjaxDone)">
    <div class="pageFormContent" layoutH="58">
    
      <div class="unit">
      	<label style="width:30%"><input type="radio" id="type1" class="audit" name="audit_type" value="1" <?php if ($this->_tpl_vars['invoice']['audit_type'] == '1'): ?>checked="checked"<?php endif; ?>  />先做货后付款</label>
        <label style="width:30%"><input type="radio" id="type3" class="audit" name="audit_type" value="3" <?php if ($this->_tpl_vars['invoice']['audit_type'] == '3'): ?>checked="checked"<?php endif; ?>  />部分付款后做货</label>
        <label style="width:30%"><input type="radio" id="type5" class="audit" name="audit_type" value="5" <?php if ($this->_tpl_vars['invoice']['audit_type'] == '5'): ?>checked="checked"<?php endif; ?>  />免费重新做货</label>
        <label style="width:30%"><input type="radio" id="type2" class="audit" name="audit_type" value="2" <?php if ($this->_tpl_vars['invoice']['audit_type'] == '2'): ?>checked="checked"<?php endif; ?>  />先发货后付款</label>
        <label style="width:30%"><input type="radio" id="type4" class="audit" name="audit_type" value="4" <?php if ($this->_tpl_vars['invoice']['audit_type'] == '4'): ?>checked="checked"<?php endif; ?>  />部分付款后发货</label>
      </div>
      <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['id']; ?>
">
      <input type="hidden" name="price" id="due_price" value="<?php echo $this->_tpl_vars['price']; ?>
">
      <div id="error1" style="float:left; line-height:20px; color:#F00; margin-left:10px; display:none;">请选择类型!</div>
      <div id="error3" style="float:left; line-height:20px; color:#F00; margin-left:10px; display:none;">事由不为空！</div>
       <div id="error4" style="float:left; line-height:20px; color:#F00; margin-left:10px; display:none;">请选择重做货</div>
      <div class="divider">divider</div>
      <?php if ($this->_tpl_vars['invoice']['audit_type'] == '3' || $this->_tpl_vars['invoice']['audit_type'] == '4'): ?>
          <div class="unit" id="price_no" style="display:block;">
      <?php else: ?>
          <div class="unit" id="price_no" style="display:none;">
      <?php endif; ?>    
      	<label>金额：</label>
        <input type="text" size="50" id="price" name="audit_price" value="<?php echo $this->_tpl_vars['invoice']['audit_price']; ?>
"/>
        <div id="error" style="float:left; line-height:20px; color:#F00; margin-left:10px; display:none;">金额不符合要求!</div>
        <div id="error2" style="float:left; line-height:20px; color:#F00; margin-left:10px; display:none;">金额不大于已付金额！</div>
        
      </div>
       <?php if ($this->_tpl_vars['invoice']['audit_type'] == '5'): ?>
          <div   class="unit" id="re_free" style="display:block; margin-left:30px;">
      <?php else: ?>
          <div class="unit" id="re_free" style="display:none;">
      <?php endif; ?> 
      <?php if ($this->_tpl_vars['production_approve']['free_reason'] != ''): ?>  
       <label style="width:10%">&nbsp </label>
      <label style="width:20%"><input type="radio" id="free1" class="audit" name="audit_free" value="打样单"  <?php if ($this->_tpl_vars['production_approve']['free_reason'] == '打样单'): ?>checked="checked"<?php endif; ?> />打样单</label>
        <label style="width:20%"><input type="radio" id="free2" class="audit" name="audit_free" value="重做货" <?php if ($this->_tpl_vars['production_approve']['free_reason'] == '重做货'): ?>checked="checked"<?php endif; ?>>重做货</label>
        <label style="width:20%"><input type="radio" id="free3" class="audit" name="audit_free" value="重下单"  <?php if ($this->_tpl_vars['production_approve']['free_reason'] == '重下单'): ?>checked="checked"<?php endif; ?>>重下单</label>
        <label style="width:20%"><input type="radio" id="free4" class="audit" name="audit_free" value="CHTC"  <?php if ($this->_tpl_vars['production_approve']['free_reason'] == 'CHTC'): ?>checked="checked"<?php endif; ?>>CHTC</label>
        <?php else: ?>
        <label style="width:10%">&nbsp </label>
      <label style="width:20%"><input type="radio" id="free1" class="audit" name="audit_free" value="打样单"/>打样单</label>
        <label style="width:20%"><input type="radio" id="free2" class="audit" name="audit_free" value="重做货" >重做货</label>
        <label style="width:20%"><input type="radio" id="free3" class="audit" name="audit_free" value="重下单" checked="checked">重下单</label>
        <label style="width:20%"><input type="radio" id="free3" class="audit" name="audit_free" value="CHTC">CHTC</label>
        <?php endif; ?>
        
     
        
       
        
      </div>
      <!--<div id="reason_1" style="display:black;">-->
      <div class="unit">
      	<label>事由：</label>
        <textarea id="audit_text" name="audit_text" cols="50" rows="4"><?php echo $this->_tpl_vars['invoice']['audit_text']; ?>
</textarea>
      <!--</div>-->
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

<script type="text/javascript">
$(document).ready(function()
{
	$("#submit").click(function (){
		
        var audit = $("input[name='audit_type']:checked").val();
		var audit_free = $("input[name='audit_free']:checked").val();
		var price = $("#price").val();
		var due_price = $("#due_price").val();//应付款
		var note = $("#audit_text").val();
		
		var shuzi=/^(([0-9]+\.[0-9]*[1-9][0-9]*)|([0-9]*[1-9][0-9]*\.[0-9]+)|([0-9]*[1-9][0-9]*))$/;
		
		if(audit==undefined){
			$("#error1").css('display','block');
		}
		else if(((audit=='3' || audit=='4') && shuzi.test(price)==false)){
			$("#error1").css('display','none');
			$("#error").css('display','block');
		}else if(audit=='5' && audit_free==undefined){
		
			$("#error1").css('display','none');
			$("#error").css('display','none');
			$("#error4").css('display','block');
		}else if(price>=due_price){
			$("#error1").css('display','none');
			$("#error").css('display','none');
			$("#error4").css('display','none');
			$("#error2").css('display','block');
		}
		else if(note == ''){
			$("#error1").css('display','none');
			$("#error").css('display','none');
			$("#error2").css('display','none');
			$("#error4").css('display','none');
			$("#error3").css('display','block');
		}
		else{
			$("#error3").css('display','none');
			if($("#error1").is(":visible")){
			$("#error").css('display','none');
			$("#error2").css('display','none');
			$("#error3").css('display','none');
			$("#error4").css('display','none');
			}
			else if($("#error2").is(":visible")){
			$("#error1").css('display','none');
			$("#error").css('display','none');
			$("#error3").css('display','none');
			$("#error4").css('display','none');
			}
			else if($("#error").is(":visible")){
			$("#error1").css('display','none');
			$("#error2").css('display','none');
			$("#error3").css('display','none');
			$("#error4").css('display','none');
			}
			   $("#form").submit(); 
		}
	});
	
	$("#type3").click(function (){
		if($("input[name='audit_type']:checked").val()=='3'){
		  
			$("#re_free").css('display','none');
			  $("#price_no").css('display','block');
			  $("#reason_1").css('display','block');
		}
	});
	
	$("#type4").click(function (){
		if($("input[name='audit_type']:checked").val()=='4'){
		   
			$("#re_free").css('display','none');
			 $("#price_no").css('display','block');
			 $("#reason_1").css('display','block');
		}
	});
	
	$("#type1").click(function (){
		if($("input[name='audit_type']:checked").val()=='1'){
		    $("#price_no").css('display','none');
			$("#re_free").css('display','none');
			$("#reason_1").css('display','block');
		}
	});
	
	$("#type2").click(function (){
		
		if($("input[name='audit_type']:checked").val()=='2'){
		    $("#price_no").css('display','none');
			$("#re_free").css('display','none');
			$("#reason_1").css('display','block');
			
		}
	});
	
	$("#type5").click(function (){
		if($("input[name='audit_type']:checked").val()=='5'){
		    $("#price_no").css('display','none');
			$("#re_free").css('display','block');
			$("#reason_1").css('display','none');
		}
	});	
	
});		

</script>