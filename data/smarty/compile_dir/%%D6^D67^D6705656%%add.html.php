<?php /* Smarty version 2.6.22, created on 2021-06-23 11:06:11
         compiled from materialformula/add.html */ ?>

<div class="pageContent">
  <form method="post" id="mf_pageForm" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, dialogAjaxDone)">
    <div class="pageFormContent" layoutH="58">
      <div class="unit">
        <label>名称：</label>
        <select name="materialformula_name" class="combox required" id="material_name" ref="color" refUrl="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/get_material_color_cl-material_name-{value}.html" >
        <option value=""></option>
        <?php $_from = $this->_tpl_vars['no_size_materials']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['nsm']):
?>
        <option value="<?php echo $this->_tpl_vars['nsm']['id']; ?>
" <?php if ($this->_tpl_vars['materialformula']['materialformula_name'] == $this->_tpl_vars['nsm']['material_name']): ?> selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['nsm']['material_name']; ?>
</option>
        <?php endforeach; endif; unset($_from); ?>
       
        </select>
        <div id="mf_error" style="float:left; width:136px; height:20px; line-height:20px; display:none; text-align:center; color:#FFF; background:#F00;"></div>
        <!--<input type="text" size="30" name="materialformula_name" id="materialformula_name" value="<?php echo $this->_tpl_vars['materialformula']['materialformula_name']; ?>
"  />-->
        <input type="hidden" name="mid" value="<?php echo $this->_tpl_vars['materialformula']['id']; ?>
" />
      </div>
      <div class="divider">divider</div>
      
      <div class="unit">
        <label>颜色：</label>
        <!--<input type="text" size="30" name="color" id="color" value="<?php echo $this->_tpl_vars['materialformula']['color']; ?>
"  />-->
        <select id="color" name="color" class="combox required" >
        <option value=""></option>
        <?php if ($this->_tpl_vars['materialformula']['color']): ?>
        <?php $_from = $this->_tpl_vars['colors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['cl']):
?>
        <option value="<?php echo $this->_tpl_vars['cl']['material_color']; ?>
" <?php if ($this->_tpl_vars['materialformula']['color'] == $this->_tpl_vars['cl']['material_color']): ?> selected="selected"<?php endif; ?> ><?php echo $this->_tpl_vars['cl']['material_color']; ?>
</option>
        <?php endforeach; endif; unset($_from); ?>
        <?php endif; ?>
        </select>
      </div>
   
      <div class="divider">divider</div>
      <div class="unit">
        <label>价格计算公式：</label>
       	<select name="value1" id="value1" class="combox">
            <option value="W" <?php if ($this->_tpl_vars['materialformula']['value1'] == W): ?>selected<?php endif; ?>>宽（W）</option>
            <option value="H" <?php if ($this->_tpl_vars['materialformula']['value1'] == H): ?>selected<?php endif; ?>>高（H）</option>
        </select>
        <select name="operation1" id="operation1" class="combox">
            <option value="乘" <?php if ($this->_tpl_vars['materialformula']['operation1'] == '乘'): ?>selected<?php endif; ?>>乘</option>
        </select>
        <input type="text" value="<?php if ($this->_tpl_vars['materialformula']['value2']): ?><?php echo $this->_tpl_vars['materialformula']['value2']; ?>
<?php else: ?>value<?php endif; ?>" name="value2" id="value2" style="width:30px;" />
        <!--<select name="value2" id="value2" class="combox">
            <option value="value" selected>value</option>
        </select>-->
        <select name="operation2" id="operation2" class="combox">
            <option value="加" <?php if ($this->_tpl_vars['materialformula']['operation2'] == '加'): ?>selected<?php endif; ?> >加</option>
            <option value="减" <?php if ($this->_tpl_vars['materialformula']['operation2'] == '减'): ?>selected<?php endif; ?> >减</option>
            <option value="乘" <?php if ($this->_tpl_vars['materialformula']['operation2'] == '乘'): ?>selected<?php endif; ?> >乘</option>
            <option value="除" <?php if ($this->_tpl_vars['materialformula']['operation2'] == '除'): ?>selected<?php endif; ?> >除</option>
        </select>
        <input type="text" id="mf_value3" value="<?php echo $this->_tpl_vars['materialformula']['value3']; ?>
" class="number" name="value3" style="width:30px;">
        <label></label>
        <div id="mf_error01" style="float:left; width:136px; height:20px; line-height:20px; display:none; text-align:center; color:#FFF; background:#F00;"></div>
      </div>
      <div class="divider">divider</div>
      
      
      
    </div>
    <div class="formBar">
      <ul>
        <li>
          <div class="buttonActive">
            <div class="buttonContent">
              <button type="button" id="mf_submit">确认添加</button>
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
	
	$("#mf_submit").click(function (){
		if($("#material_name").val() == ""){
			$("#mf_error").css("display","block");
			$("#mf_error").html("请选择名称");
		}
/*		else if($("#mf_value3").val() == ""){
			$("#mf_error").css("display","none");
			$("#mf_error01").css("display","block");
			$("#mf_error01").html("请填写数值");
		}*/
		else{
			$("#mf_pageForm").submit();
		}
		
	});
	
	
    var x = $("#color");
    x.change(
    	function()
    	{
			
    		//获取id为select的下拉框选中的值
    	    var a = $("#color").val();
    	    var b = $("#material_name").val();
    	    $.ajax({
				url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/get_material_price',//通过Ajax取数据的目标页面
				data:{"material_name":b,"color":a},
				type:'get',//方法，还可以是"post"
				dataType:'text',//数据类型，还有其它的，详见jQuery手册
				success:function(locals)//成功后执行的语句，这里是一个函数，“locals”是返回的数据
				{
					//alert(locals);
					$("#value2").val(locals);
				}
			});
    	}
    );
});

</script> 
<!-- {/literal} -->