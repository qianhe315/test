<?php /* Smarty version 2.6.22, created on 2023-02-16 15:55:42
         compiled from factorylaborcost/add.html */ ?>

<div class="pageContent">
  <form method="post" id="fl_pageForm" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, dialogAjaxDone)">
    <div class="pageFormContent" layoutH="58">
      <!--<div class="unit">
        <label>手工费名称：</label>
        <input type="text" size="25" name="factorylaborcost_name" id="factorylaborcost_name" class="" value="<?php echo $this->_tpl_vars['factorylaborcost']['factorylaborcost_name']; ?>
"  />
        
      </div>
      <div class="divider">divider</div>-->
      <input type="hidden" id="mid" name="mid" value="<?php echo $this->_tpl_vars['factorylaborcost']['id']; ?>
" />
      <div class="unit">
        <label>材料选择：</label>
        <select name="material" id="fl_material"  class="combox">
        <option value="">请选择材料</option>
        <?php $_from = $this->_tpl_vars['materials']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['material']):
?>
        <option value="<?php echo $this->_tpl_vars['material']['material_name1']; ?>
" <?php if ($this->_tpl_vars['factorylaborcost']['material1'] == $this->_tpl_vars['material']['material_name1']): ?> selected <?php endif; ?> ><?php echo $this->_tpl_vars['material']['material_name']; ?>
</option>
        <?php endforeach; endif; unset($_from); ?>
        </select>
        <div id="fl_error" style="float:left; width:136px; height:20px; line-height:20px; display:none; text-align:center; color:#FFF; background:#F00;"></div>
      </div>
      <div class="divider">divider</div>
      
      
       <div class="unit">
        <label>费用：</label>
        <input type="text" size="25" name="price" id="price" class="required number" value="<?php echo $this->_tpl_vars['factorylaborcost']['price']; ?>
"  />
        <label>元</label>
      </div>
      <div class="divider">divider</div>
      
    </div>
    <div class="formBar">
      <ul>
        <li>
          <div class="buttonActive">
            <div class="buttonContent">
              <button type="button" id="fl_submit">确认添加</button>
            </div>
          </div>
        </li>
        <li> </li>
      </ul>
    </div>
  </form>
</div>

<!-- {literal} --> 
<script type="text/javascript">
$(document).ready(function()  
{		
	
	$("#fl_material").change(function(){
		p='material='+this.value+'&mid='+mid;	
		$.ajax({
			url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/factorylaborcost/material_check',//通过Ajax取数据的目标页面
			data:p,
			type:'post',//方法，还可以是"post"
			dataType:'json',//数据类型，还有其它的，详见jQuery手册
			success:check_material_back				
			
		});
	});
	
	$("#fl_submit").click(function (){
		if($("#fl_material").val() == ""){
			$("#fl_error").css("display","block");
			$("#fl_error").html("请选择材料");
		}
		else if($("#fl_error").is(":visible")){
			
		}
		else{
			$("#fl_pageForm").submit();
		}
	});
	
	
	
});
function check_material_back(data)
	{
		if(data >= 1)
		{
			$('#fl_error').css("display","block");
			$('#fl_error').html('该材料已存在');
		}
		else
		{
			$('#fl_error').css("display","none");
			$('#fl_error').html('该材料可以使用');
		}
	}
</script> 
<!-- {/literal} -->