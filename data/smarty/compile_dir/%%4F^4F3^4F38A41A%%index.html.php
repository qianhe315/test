<?php /* Smarty version 2.6.22, created on 2015-10-20 15:33:49
         compiled from setting/index.html */ ?>

<div class="pageContent">
  <form method="post" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, dialogAjaxDone)">
    <div class="pageFormContent" layoutH="58">
    <label style=" font-size:16px; font-weight: bold;" >报价</label>
      <div class="unit">
        <label>工厂成本系数：</label>
        <input type="text" size="30" name="factory_cost_factor" id="factory_cost_factor" value="<?php echo $this->_tpl_vars['factory_cost_factor']; ?>
"  />
        
      </div>
      <div class="unit">
        <label>默认报价系数：</label>
        <input type="text" size="30" name="default_quote_coefficient" id="default_quote_coefficient" value="<?php echo $this->_tpl_vars['default_quote_coefficient']; ?>
"  />       
      </div>
      <div class="unit">
        <label>最低报价系数：</label>
        <input type="text" size="30" name="lowest_cost_factor" id="lowest_cost_factor" value="<?php echo $this->_tpl_vars['lowest_cost_factor']; ?>
"  />
       </div>
      <div class="unit">
        <label>601手工费：</label>
        <input type="text" size="30" name="601_workmanship" id="601_workmanship" value="<?php echo $this->_tpl_vars['601_workmanship']; ?>
"  />
      </div>
       <div class="unit">
        <label>601胶纸单位单价：</label>
        <input type="text" size="30" name="601_paper_price" id="601_paper_price" value="<?php echo $this->_tpl_vars['601_paper_price']; ?>
"  /><div style="margin-top:5px;">元/平方英寸</div>
      </div>
      
   <div class="divider">divider</div>
   <label style=" font-size:16px; font-weight: bold;" >客户回收</label>
   <div class="unit">
        <label>执行状态：</label>
        <select class="combox" name="start">
                <option value="1" <?php if ($this->_tpl_vars['start'] == 1): ?> selected="selected" <?php endif; ?>>开启</option>
                <option value="2" <?php if ($this->_tpl_vars['start'] == 2): ?> selected="selected" <?php endif; ?>>关闭</option>
        </select>
      </div>
    <div class="unit">
        <label>回收时间：</label>
        <input type="text" size="30" name="recovery_time" id="recovery_time" value="<?php echo $this->_tpl_vars['recovery_time']; ?>
"  /><font style=" float:left;line-height:22px;">小时</font>
        
      </div>
      <div class="unit">
        <label>执行周期：</label>
        <input type="text" size="30" name="recovery_lifecycle" id="recovery_lifecycle" value="<?php echo $this->_tpl_vars['recovery_lifecycle']; ?>
"  /><font style=" float:left;line-height:22px;">分钟</font>
       </div>
      <div class="divider">divider</div>
     
      <label style=" font-size:16px; font-weight: bold;" >返单</label>
        <div class="unit">
        <label>返单有效期：</label>
        <input type="text" size="30" name="return_order" id="return_order" value="<?php echo $this->_tpl_vars['return_order']; ?>
"  /><font style=" float:left;line-height:22px;">月</font>
       </div>
      
    </div>
    <div class="formBar">
      <ul>
        <li>
          <div class="buttonActive" style=" float:right; margin-right:200px">
            <div class="buttonContent">
              <button type="submit">确认</button>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </form>
</div>

<!-- {literal} --> 
<script type="text/javascript">

</script> 
<!-- {/literal} -->