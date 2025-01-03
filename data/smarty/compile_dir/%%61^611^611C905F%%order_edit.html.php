<?php /* Smarty version 2.6.22, created on 2014-09-29 15:34:50
         compiled from cargo_picking/order_edit.html */ ?>
<script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/cstown_Sys.js" type="text/javascript"></script>
<link href="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/css/cstown_sys.css" rel="stylesheet" type="text/css" media="screen"/>
<div class="pageContent">
<form method="post" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, navTabAjaxDone)" id="rhinestone_quotation_info_form">
  <div class="stkInfEnter" layoutH="100" style="width:95%; margin-left:20px;">
    <div class="sIE_title">订单材料</div>
    <div class="sIEK">

      <div class="sIE_l_02" style="margin-top:10px;">
        <table  cellspacing="0" class="sIE_l_02Tab" id="rhinestone_quotation_material_table">
          <tr>
            <th>材料名称</th>
            <th>颜色</th>
            <th>尺寸</th>
            <th>数量</th>
            <th>总数量</th>
          </tr>
          <?php if ($this->_tpl_vars['quotation_material']): ?>
			 <?php $_from = $this->_tpl_vars['quotation_material']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['qs']):
?>
              <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
" >
               <td><?php echo $this->_tpl_vars['qs']['material_name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['qs']['material_color']; ?>
</td>
                <td><?php echo $this->_tpl_vars['qs']['material_size']; ?>
</td>
                <td><?php echo $this->_tpl_vars['qs']['material_quantity']; ?>
</td>
                <td><?php echo $this->_tpl_vars['qs']['quantity']; ?>
</td>
              <?php endforeach; endif; unset($_from); ?>
             <?php endif; ?>
               
      </tr>
      </table>
  </div>
  
  <div class="formBar">
    <ul>
      <li>

      </li>

    </ul>
  </div>
   </form>
</div>
