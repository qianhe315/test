<?php /* Smarty version 2.6.22, created on 2014-01-14 09:07:57
         compiled from exchangerate_finance/add.html */ ?>
<script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/cstown_Sys.js" type="text/javascript"></script>
<div class="pageContent">
  <form method="post" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, dialogAjaxDone)">
    <div class="pageFormContent" layoutH="58">
      <div class="unit">
      	<label>汇率时间：</label>
        <input type="text" size="30" name="value_date" id="value_date"  class="date textInput readonly valid" datefmt="yyyy-MM" />
      </div>
      <div class="unit">
      	<label>货币名称：</label>
        <select name="exchangerate_name" id="exchangerate_name" onchange="change(this.value)">
        	<option value="美元">美元</option>
            <option value="欧元">欧元</option>
        </select>
      </div>
      <div class="unit">
      	<label>汇率值：</label>
        <input type="text" size="30" name="value" id="value"  class="required" />
        <div id="ef_result" style="line-height: 26px; float: left; color: rgb(255, 0, 0); margin-left: 10px; display:none;"></div>
      </div>
      <div class="unit">
      	<label>货币符号：</label>
        <input type="text" size="30" name="exchangerate_character" id="ec"  style="display:block;"  value="$" readonly="readonly" />
      </div>
      <div class="divider">divider</div>
      
      
      
    </div>
    <div class="formBar">
      <ul>
        <li>
          <div class="buttonActive">
            <div class="buttonContent">
              <button type="button" id="submit" >确认添加</button>
            </div>
          </div>
        </li>
        <li> </li>
      </ul>
    </div>
  </form>
</div>

<!-- <?php echo ' --> 
<script type="text/javascript">

$(document).ready(function(){	
	$("#submit").click(function(){
		if(isEmpty($("#value").val())){
			$("#ef_result").css("display","block");
			$("#ef_result").html("不能包含空格,请重新输入");
			
		}else{		
				
			$.ajax({
					url:\'exchangerate_finance/check_value\',//通过Ajax取数据的目标页面
					data:{"value_date":$("#value_date").val(),"exchangerate_character":$("#ec").val()},
					type:\'post\',//方法，还可以是"post"
					dataType:\'text\',//数据类型，还有其它的，详见jQuery手册
					success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
					{
						
						if(locals > 1){
							$("#ef_result").css("display","block");
							$("#ef_result").html("年月重复,请重新输入！");
						}else{
							$("#ef_result").css("display","none");
							$("#submit").submit();
							
							
						}
					}
			    });
			
		}
	});
	
});
function change(a){
	if(a == \'美元\'){
		$("#ec").val("$");
	}else{
		$("#ec").val("€");
	}
}
</script> 
<!-- '; ?>
 -->