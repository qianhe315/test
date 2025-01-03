<?php /* Smarty version 2.6.22, created on 2014-08-06 13:37:57
         compiled from h_version_set/add.html */ ?>

<div class="pageContent">
  <form method="post" id="version_set_submit" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, dialogAjaxDone)">
    <div class="pageFormContent" layoutH="58">
      <div class="unit">
        <label>分版数量：</label>
        <input type="text" size="30" name="version_count" id="version_count" value="<?php echo $this->_tpl_vars['version_set']['version_count']; ?>
" class=""/>
        <input type="hidden" name="mid" id='mid' value="<?php echo $this->_tpl_vars['version_set']['id']; ?>
" />
      </div>
      
      <div class="divider">divider</div>
      
      <div class="unit">
        <label>人民币：</label>
        <input type="text" size="30" name="rmb" id="rmb" value="<?php echo $this->_tpl_vars['version_set']['rmb']; ?>
"  class=""/>
        
      </div>
     
      <div class="divider">divider</div>
      
      
       <div class="unit">
        <label>美元：</label>
        <input type="text" size="30" name="dollar" id="dollar" value="<?php echo $this->_tpl_vars['version_set']['dollar']; ?>
" class=""/>
        
      </div>
      
      <div class="divider">divider</div>
      
       <div class="unit">
        <label>欧元：</label>
        <input type="text" size="30" name="euro" id="euro" value="<?php echo $this->_tpl_vars['version_set']['euro']; ?>
" class=""/>
        <div id="version_set_error" style="line-height: 26px; margin-left: 10px; color: rgb(255, 0, 0); display:none;"></div>
      </div>
      
      <div class="divider">divider</div>      
      
    
      
    </div>
    </form>
    <div class="formBar">
      <ul>
        <li>
          <div class="buttonActive">
            <div class="buttonContent">
              <button type="button" id="version_set_add">确认添加</button>
            </div>
          </div>
        </li>
        <li> </li>
      </ul>
    </div>
  
</div>

<script type="text/javascript" language="javascript">
  $("#version_set_add").click(function (){
		    var mid = $("#mid").val();
		  var version_count = $("#version_count").val();
		  var rmb = $("#rmb").val();
		  var dollar = $("#dollar").val();
		  var euro = $("#euro").val(); 
		  var reg = /^\d+(?=\.{0,1}\d+$|$)/
		  var c= /^\+?[1-9][0-9]*$/;
		  var b=c.test(version_count);
          $.ajax({
		  url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/h_version_set/check_fenban',//通过Ajax取数据的目标页面
		  data:{"version_count":version_count},
		  type:'post',//方法，还可以是"post"
		  dataType:'text',//数据类型，还有其它的，详见jQuery手册
		  success:function(locals){
		  if(locals==1 && mid==""){
			  $('#version_set_error').css("display","block");
			  $("#version_set_error").html("此分版数量报价已存在！");
		  }else if(version_count =="" || b==false ){
			  $('#version_set_error').css("display","block");
			  $("#version_set_error").html("分版数量不能为空且为正整数！");
		  }else if(rmb =="" || rmb<=0){
			   $('#version_set_error').css("display","block");
			  $("#version_set_error").html("人民币不可以为空且大于0！");
			  
		  }else if(dollar=="" ||  dollar<=0){
			   $('#version_set_error').css("display","block");
			   $("#version_set_error").html("美元不可以为空且大于0！");
			  
		  }else if(euro=="" || euro<=0){
			   $('#version_set_error').css("display","block");
			   $("#version_set_error").html("欧元不可以为空且大于0！");
			  
		  }else{
			  $("#version_set_submit").submit();
		  }
			  
		  }
		  });


		  
  });
  
</script>
<!-- {/literal} -->