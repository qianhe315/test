<?php /* Smarty version 2.6.22, created on 2017-05-08 16:51:51
         compiled from materials_management/add.html */ ?>

<div class="pageContent">
  <form method="post" action="<?php echo $this->_tpl_vars['act']; ?>
" id="pageForm" class="pageForm" onsubmit="return validateCallback(this, dialogAjaxDone)">
    <div class="pageFormContent" layoutH="58">

      <div class="unit">
      	<label>时间：</label>
       <input type="text" name="s_time" id="s_time" style="width:150px" value="<?php echo $this->_tpl_vars['materials_management']['s_time']; ?>
" class="date required" readonly="readonly"/>
       <input type="hidden" name="hidden_id" value="<?php echo $this->_tpl_vars['materials_management']['id']; ?>
" />
      </div>
      <div class="divider">divider</div>
      
       <div class="unit">
     <label style="width:110px">属性：</label>
        <?php if ($this->_tpl_vars['materials_management']['property'] == '1'): ?>                     
		<label style="width:80px"><input type="radio" name="property" value="1" checked="checked"/>主要材料</label>
		<label><input type="radio" name="property" value="2" />辅助材料</label>
        <?php elseif ($this->_tpl_vars['materials_management']['property'] == '2'): ?>                     
		<label style="width:80px"><input type="radio" name="property" value="1"/>主要材料</label>
		<label><input type="radio" name="property" value="2" checked="checked" />辅助材料</label>
        <?php else: ?>
		<label style="width:80px"><input type="radio" name="property" value="1" checked="checked"/>主要材料</label>
		<label><input type="radio" name="property" value="2" />辅助材料</label>
       <?php endif; ?>
        
      </div>
      <div class="divider">divider</div>
      <div class="unit">
      	<label>名称：</label>
        <input type="text" size="50" name="material_name" id="material_name" style="width:150px" value="<?php echo $this->_tpl_vars['materials_management']['material_name']; ?>
" class="required"/>
      </div>
      <div class="divider">divider</div>
        <div class="unit">
      	<label>颜色：</label>
        <input type="text" size="50" name="material_color" id="material_color" style="width:150px" value="<?php echo $this->_tpl_vars['materials_management']['material_color']; ?>
" class="required"/>
      </div>
      <div class="divider">divider</div>

       <div class="unit">
      	<label>尺寸（原始）：</label>
        <input type="text" size="30" name="size" id="size" style="width:150px" value="<?php echo $this->_tpl_vars['size']; ?>
" onchange="change_size()"  />
      </div>
      <div class="divider">divider</div>
      
      <div class="unit">
      	<label>尺寸（毫米）：</label>
        <input type="text" size="30" name="size_mm" id="size_mm" style="width:150px" value="<?php echo $this->_tpl_vars['materials_management']['size_mm']; ?>
" onchange="change_sizemm()" /><label>mm</label>
      </div>
      <div class="divider">divider</div>
      
       <div class="unit">
      	<label>尺寸（规格 宽X高）：</label>
        <input type="text" size="30" name="size_m_w" id="size_m_w" style="width:62px;" value="<?php echo $this->_tpl_vars['materials_management']['size_m_w']; ?>
" onchange="change_sizemwh()" /><label style="width:10px;">X</label><input type="text" size="30" name="size_m_h" id="size_m_h" onchange="change_sizemwh()" value="<?php echo $this->_tpl_vars['materials_management']['size_m_h']; ?>
" style="width:62px;" /><label>mm</label>
        <span id="sizemwh_result" class="error" style="display:none;"></span>
      </div>
      <div class="divider">divider</div>
       <div class="unit">
       <ul>
         <li>
           <label style="width:115px">数量单位：</label>
           <label style="width:70px"><input type="text" id="quantity" name="quantity" style="width:60px;" value="<?php echo $this->_tpl_vars['materials_management']['quantity']; ?>
" /></label>
		   <select class="combox" id="number_unit1" name="number_unit1">
           		<?php $_from = $this->_tpl_vars['unit_add_type1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['tc']):
?>
               <option value="<?php echo $this->_tpl_vars['tc']['id']; ?>
" <?php if ($this->_tpl_vars['materials_management']['number_unit1'] == $this->_tpl_vars['tc']['id']): ?>selected <?php endif; ?>><?php echo $this->_tpl_vars['tc']['name']; ?>
</option>
               <?php endforeach; endif; unset($_from); ?>
           </select>
           <label style="width:10px">=</label>
           <select class="combox" id="number_unit2" name="number_unit2">
           		<?php $_from = $this->_tpl_vars['unit_add_type1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['tc']):
?>
               <option value="<?php echo $this->_tpl_vars['tc']['id']; ?>
" <?php if ($this->_tpl_vars['materials_management']['number_unit2'] == $this->_tpl_vars['tc']['id']): ?>selected <?php endif; ?>><?php echo $this->_tpl_vars['tc']['name']; ?>
</option>
               <?php endforeach; endif; unset($_from); ?>
           </select>
           <span id="mm_quantity" class="error" style="display:none; float:left;"></span>
		</li>
        </ul>
      </div>
      <div class="divider">divider</div>
        <div class="unit">
        <ul>
      	<li>
          <label style="width:115px">重量单位：</label>
          <label style="width:70px"><input type="text" id="weight" name="weight" style="width:60px;" value="<?php echo $this->_tpl_vars['materials_management']['weight']; ?>
" /></label>
		  <select class="combox" id="weight_unit1" name="weight_unit1">
          	<?php $_from = $this->_tpl_vars['unit_add_type2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['tc']):
?>
               <option value="<?php echo $this->_tpl_vars['tc']['id']; ?>
" <?php if ($this->_tpl_vars['materials_management']['weight_unit1'] == $this->_tpl_vars['tc']['id']): ?>selected <?php endif; ?>><?php echo $this->_tpl_vars['tc']['name']; ?>
</option>
               <?php endforeach; endif; unset($_from); ?>
          </select>
          <label style="width:10px">=</label>
          <select class="combox" id="weight_unit2" name="weight_unit2">
          	<?php $_from = $this->_tpl_vars['unit_add_type2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['tc']):
?>
               <option value="<?php echo $this->_tpl_vars['tc']['id']; ?>
" <?php if ($this->_tpl_vars['materials_management']['weight_unit2'] == $this->_tpl_vars['tc']['id']): ?>selected <?php endif; ?>><?php echo $this->_tpl_vars['tc']['name']; ?>
</option>
               <?php endforeach; endif; unset($_from); ?>
          </select>
          <span id="mm_weight" class="error" style="display:none; float:left;"></span>
		</li>
        </ul>
      </div>
      <div class="divider">divider</div>
      <div class="unit">
        <ul>
      	<li>
          <label style="width:115px">基准单位：</label>
		  <select class="combox" name="use_unit">
          	<?php $_from = $this->_tpl_vars['unit_add_type1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['tc']):
?>
               <option value="<?php echo $this->_tpl_vars['tc']['id']; ?>
" <?php if ($this->_tpl_vars['materials_management']['use_unit'] == $this->_tpl_vars['tc']['id']): ?>selected <?php endif; ?>><?php echo $this->_tpl_vars['tc']['name']; ?>
</option>
               <?php endforeach; endif; unset($_from); ?>
          </select>
		</li>
        </ul>
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
<!-- {literal} --> 
<script type="text/javascript">	

function change_size(){
	
	if($("#size").attr("value") != ''){
		$("#size_mm").attr("readonly","readonly");
		$("#size_m_w").attr("readonly","readonly");
		$("#size_m_h").attr("readonly","readonly");
	}else{
		$("#size_mm").removeAttr("readonly","readonly");
		$("#size_m_w").removeAttr("readonly","readonly");
		$("#size_m_h").removeAttr("readonly","readonly");
	}
}
function change_sizemm(){
	
	if($("#size_mm").attr("value") != ''){
		$("#size").attr("readonly","readonly");
		$("#size_m_w").attr("readonly","readonly");
		$("#size_m_h").attr("readonly","readonly");
	}else{
		$("#size").removeAttr("readonly","readonly");
		$("#size_m_w").removeAttr("readonly","readonly");
		$("#size_m_h").removeAttr("readonly","readonly");
	}
}
function change_sizemwh(){
	
	if($("#size_m_w").attr("value") != '' || $("#size_m_h").attr("value") != ''){
		$("#size").attr("readonly","readonly");
		$("#size_mm").attr("readonly","readonly");
	}else{
		$("#size").removeAttr("readonly","readonly");
		$("#size_mm").removeAttr("readonly","readonly");
	}
	
	
}


$("#submit").click(function (){
	
	if($("#quantity").val() == '' || $("#number_unit1").val() == $("#number_unit2").val()){
			if($("#quantity").val() == ''){
				$("#mm_quantity").css("display","block");
				$("#mm_quantity").html("必填字段");
			}else{
				$("#mm_weight").css("display","none");
				$("#mm_quantity").css("display","block");
				$("#mm_quantity").html("单位名称不能重复");
			}
			
	}else if($("#weight").val() == '' || $("#weight_unit1").val() == $("#weight_unit2").val()){
		
			if($("#weight").val() == ''){
				$("#mm_quantity").css("display","none");
				$("#mm_weight").css("display","block");
				$("#mm_weight").html("必填字段");
			}else{
				$("#mm_quantity").css("display","none");
				$("#mm_weight").css("display","block");
				$("#mm_weight").html("单位名称不能重复");
			}
			
	}
		else{	
				$("#mm_quantity").css("display","none");
				$("#mm_weight").css("display","none");
				$("#pageForm").submit();
		}
	
});
</script> 
<!-- {/literal} -->