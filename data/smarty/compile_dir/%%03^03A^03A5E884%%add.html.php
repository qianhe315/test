<?php /* Smarty version 2.6.22, created on 2014-07-31 10:15:32
         compiled from exchangerate/add.html */ ?>

<div class="pageContent">
  <form method="post" id="exchangerate_add" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, dialogAjaxDone)">
    <div class="pageFormContent" layoutH="58">
      <div class="unit">
        <label>货币：</label>
        <input type="text" size="30" name="exchangerate_name" id="exchangerate_name" value="<?php echo $this->_tpl_vars['exchangerate']['exchangerate_name']; ?>
" alt="请输入货币名称" class="required"/>
        <input type="hidden" name="mid" value="<?php echo $this->_tpl_vars['exchangerate']['id']; ?>
" />
      </div>
       <span id="exchangerate_name_error" class="error" style="display:none; margin-top:-5px;">不能为空！</span>
      <div class="divider">divider</div>
      
      <div class="unit">
        <label>货币符号：</label>
        <input type="text" size="30" name="exchangerate_character" id="exchangerate_character" value="<?php echo $this->_tpl_vars['exchangerate']['exchangerate_character']; ?>
" alt="请输入货币符号" class="required"/>
        
      </div>
       <span id="exchangerate_character_error" class="error" style="display:none; margin-top:-5px;">不能为空！</span>
      <div class="divider">divider</div>
      
      
       <div class="unit">
        <label>汇率：</label>
        <input type="text" size="30" name="value" id="value" value="<?php echo $this->_tpl_vars['exchangerate']['value']; ?>
" alt="此为人民币兑美元的汇率" class="required"/>
        
      </div>
       <span id="value_error" class="error" style="display:none; margin-top:-5px;">不能为空！</span>
      <div class="divider">divider</div>
      
       <div class="unit">
        <label>报关限额：</label>
        <input type="text" size="30" name="customs_quota" id="customs_quota" value="<?php echo $this->_tpl_vars['exchangerate']['customs_quota']; ?>
" alt="请输入报关限额" class="required"/>
        
      </div>
       <span id="customs_quota_error" class="error" style="display:none; margin-top:-5px;">不能为空！</span>
      <div class="divider">divider</div>      
      
       <div class="unit">
        <label>版费：</label>
        <input type="text" size="30" name="version" id="version" value="<?php echo $this->_tpl_vars['exchangerate']['version']; ?>
" alt="请输入版费" class="required"/>
        
      </div>   
       <span id="version_error" class="error" style="display:none; margin-top:-5px;">不能为空！</span>
       <div class="unit">
        <label>CDR价格：</label>
        <input type="text" size="30" name="cdr_price" id="cdr_price" value="<?php echo $this->_tpl_vars['exchangerate']['cdr_price']; ?>
" alt="请输入CDR价格" class="required"/>
        
      </div>   
       <span id="cdr_price_error" class="error" style="display:none; margin-top:-5px;">不能为空！</span>   
      
    </div>
     </form>
    <div class="formBar">
      <ul>
        <li>
          <div class="buttonActive">
            <div class="buttonContent">
              <button type="button" id="submit_add">确认添加</button>
            </div>
          </div>
        </li>
        <li> </li>
      </ul>
    </div>
 
</div>

<script type="text/javascript" language="javascript">
 
  $("#submit_add").click(function (){
	      var exchangerate_name = $("#exchangerate_name").val();
		  var exchangerate_character = $("#exchangerate_character").val();
		  var value = $("#value").val();
		  var customs_quota = $("#customs_quota").val();
		  var version = $("#version").val(); 
          var cdr_price = $("#cdr_price").val(); 
		  if(exchangerate_name ==""){
			  $('#exchangerate_name_error').css("display","block");
		  }else{
			  $('#exchangerate_name_error').css("display","none");
			  var a=1;
		  } 
		  if(exchangerate_character==""){
			  
			  $('#exchangerate_character_error').css("display","block");
		  }else{ 
		  $('#exchangerate_character_error').css("display","none");
		  var b=1
		  } 
		  if(value ==""){
			
			  $('#value_error').css("display","block");
		  }else{
			  $('#value_error').css("display","none");
			  var c=1
		  } 
		  if(customs_quota==""){
			  
			  $('#customs_quota_error').css("display","block");
		  }else {
			  $('#customs_quota_error').css("display","none");
			  var d=1
		  }
		  if(version ==""){
			
			  $('#version_error').css("display","block");
		  }else{
			    $('#version_error').css("display","none");
				var e=1
		  }
		   if(cdr_price==""){
			
			  $('#cdr_price_error').css("display","block");
		  }else{
			  $('#cdr_price_error').css("display","none");
		  	 var f=1
		  
		  }
		if(a && b && c && d && e){
								    $("#exchangerate_add").submit();
		}
		  
	
	  });	

</script>
<!-- {/literal} -->