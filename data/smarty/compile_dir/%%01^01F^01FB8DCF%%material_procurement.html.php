<?php /* Smarty version 2.6.22, created on 2015-12-12 11:09:46
         compiled from cn_stock_surplus/material_procurement.html */ ?>
<script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/cstown_Sys.js" type="text/javascript"></script>
<link href="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/css/cstown_sys.css" rel="stylesheet" type="text/css" media="screen"/>
<div class="pageContent">
 <form method="post" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, navTabAjaxDone)" id="material_procurement_form">
  <div class="stkInfEnter" layoutH="100" style="width:95%; margin-left:20px;">
    <div class="sIE_title">需采购材料</div>
    <div class="sIEK">

      <div class="sIE_l_02" style="margin-top:10px;">
        <table cellspacing="0" class="sIE_l_02Tab" id="rhinestone_quotation_material_table">
        <thead>
          <tr>
            <th>材料名称（中文）</th>
            <th>颜色</th>
            <th>尺寸</th>
            <th>单位</th>
            <th>紧急程度</th>
            <th>数量</th>
          </tr>
          </thead>
        <tbody>
         <?php if ($this->_tpl_vars['material_array'] != ""): ?>
         <?php $_from = $this->_tpl_vars['material_array']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['q']):
?>
          <input type="hidden" name="material_name[]" value="<?php echo $this->_tpl_vars['q']['name']; ?>
" />
          <input type="hidden" name="material_color[]" value="<?php echo $this->_tpl_vars['q']['color']; ?>
" />
          <input type="hidden" name="material_size[]" value="<?php echo $this->_tpl_vars['q']['size']; ?>
" />
          <input type="hidden" name="unit[]" value="<?php echo $this->_tpl_vars['q']['unit']; ?>
" />
                <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
" >
                <td><?php echo $this->_tpl_vars['q']['name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['q']['color_name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['q']['size_name']; ?>
(<?php echo $this->_tpl_vars['q']['size_name_E']; ?>
)</td>
                <td><?php echo $this->_tpl_vars['q']['unit_name']; ?>
</td>
                <td>
                    <select name="n_state[]">
						<option value="0">普通</option>   
                        <option value="1">加急</option>                   
                    </select>
                </td>
                <td><input type="text" name="quantity[]" style="width:70px;" value="1" /></td>
               
                </tr>
            <?php endforeach; endif; unset($_from); ?>  
               <?php endif; ?>

		</tbody>
        </table>
      </div>
      

    </div>
  </div>
  
  <div class="formBar">
    <ul>
      <li>
        <div class="buttonActive">
          <div class="buttonContent">
            <button type="button" id="submit_form">确认</button>
          </div>
        </div>
      </li>
      <li> 
      	<div class="buttonActive">
          <div class="buttonContent">
            <button type="button">取消</button>
          </div>
        </div>
      </li>
    </ul>
  </div>
   </form>
</div>

<script type="text/javascript">
$("#submit_form").click(function (){
	$("#material_procurement_form").submit();
});
</script>	