<?php /* Smarty version 2.6.22, created on 2014-09-29 17:59:14
         compiled from cargo_picking/mark_acquisition.html */ ?>
<script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/cstown_Sys.js" type="text/javascript"></script>
<link href="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/css/cstown_sys.css" rel="stylesheet" type="text/css" media="screen"/>
<div class="pageContent">
 <form method="post" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, navTabAjaxDone)" id="material_summary">
  <div class="stkInfEnter" layoutH="100" style="width:95%; margin-left:20px;">
    <div class="sIE_title">做货领料</div>
    <div class="sIEK">

      <div class="sIE_l_02" style="margin-top:10px;">
        <table cellspacing="0" class="sIE_l_02Tab" id="rhinestone_quotation_material_table">
        <thead>
          <tr>
            <th>材料名称</th>
            <th>颜色</th>
            <th>尺寸</th>
            <th>数量</th>
          </tr>
          </thead>
        <tbody>
        <?php if ($this->_tpl_vars['qs']): ?>
         
			 <?php $_from = $this->_tpl_vars['qs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['q']):
?>
             <input type="hidden" name="material_name[]" value="<?php echo $this->_tpl_vars['q']['material_name']; ?>
" />
             <input type="hidden" name="material_color[]" value="<?php echo $this->_tpl_vars['q']['material_color']; ?>
" />
             <input type="hidden" name="material_size[]" value="<?php echo $this->_tpl_vars['q']['material_size']; ?>
" />
             <input type="hidden" name="material_quantity[]" value="<?php echo $this->_tpl_vars['q']['material_quantity']; ?>
" />
              <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
" >
                <td><?php echo $this->_tpl_vars['q']['material_name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['q']['material_color']; ?>
</td>
                <td><?php echo $this->_tpl_vars['q']['material_size']; ?>
</td>
                <td><?php echo $this->_tpl_vars['q']['material_quantity']; ?>
</td>
              <?php endforeach; endif; unset($_from); ?>
             <?php endif; ?>
               
		</tbody>
        </table>
      </div>
      <input type="hidden" name="order_number" value="<?php echo $this->_tpl_vars['order_number']; ?>
">
      <input type="hidden" name="nums" value="<?php echo $this->_tpl_vars['nums']; ?>
">
      <div style="float:right;  margin-top:20px; width:20%;">
      	<font style=" float:left; width:50px; margin-top:5px;">领料人</font>
      	<input type="text" class="required" name="man" style="float:left; width:200px;" />
        
        <font style=" margin-top:10px; width:50px; float:left; margin-top:15px;">时间</font>      
      	<input class="date textInput readonly valid focus required" value="<?php echo $this->_tpl_vars['time_now']; ?>
" style="float:left; margin-top:10px; width:200px;" type="text" readonly="true" datefmt="yyyy-MM-dd HH:mm:ss" name="time">
          
        
      </div>
      
    </div>
  </div>
   </form>
  <div class="formBar">
    <ul>
      <li>
        <div class="buttonActive">
          <div class="buttonContent">
            <button type="button" id="submit">确认</button>
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
  
</div>
<script type="text/javascript">
$("#submit").click(function (){
	$("#material_summary").submit();
});
</script>	