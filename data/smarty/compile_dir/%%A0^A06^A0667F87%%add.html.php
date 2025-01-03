<?php /* Smarty version 2.6.22, created on 2013-09-06 09:47:46
         compiled from pricerange/add.html */ ?>

<div class="pageContent">
  <form method="post" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, dialogAjaxDone)">
    <div class="pageFormContent" layoutH="58">
      <div class="unit">
        <label>价格范围名称：</label>
        <input type="text" style="width:100px" name="pricerange_name" class="required" id="pricerange_name" value="<?php echo $this->_tpl_vars['pricerange']['pricerange_name']; ?>
"  />
        <input type="hidden" name="mid" value="<?php echo $this->_tpl_vars['pricerange']['id']; ?>
" />
      </div>
      <div class="divider">divider</div>
      
      <div class="unit">
        <label style="width:120px;">开始价格：</label>
        <input type="text" size="50" name="start_price" class="required" id="start_price" value="<?php echo $this->_tpl_vars['pricerange']['start_price']; ?>
" style="width:100px;"  /><label style="width:20px;">元</label>
      </div>
      <div class="unit">
        <label style="width:120px;">结束价格：</label>
        <input type="text" size="50" name="end_price" class="required" id="end_price" value="<?php echo $this->_tpl_vars['pricerange']['end_price']; ?>
" style="width:100px;"  /><label style="width:20px;">元</label>
      </div>
      <div class="divider">divider</div>
      
      <div class="unit">
        <label>时间分类：</label>
       <select name="pricerange_category" class="combox">
       <?php $_from = $this->_tpl_vars['pricerange_categorys']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['tc']):
?>
       <option value="<?php echo $this->_tpl_vars['tc']['id']; ?>
" <?php if ($this->_tpl_vars['pricerange']['pricerange_category'] == $this->_tpl_vars['tc']['id']): ?>selected <?php endif; ?>><?php echo $this->_tpl_vars['tc']['pricerangecategory_name']; ?>
</option>
       <?php endforeach; endif; unset($_from); ?>
       </select>
      </div>
      <div class="divider">divider</div>
       
      
    </div>
    <div class="formBar">
      <ul>
        <li>
          <div class="buttonActive">
            <div class="buttonContent">
              <button type="submit">确认添加</button>
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

</script> 
<!-- {/literal} -->