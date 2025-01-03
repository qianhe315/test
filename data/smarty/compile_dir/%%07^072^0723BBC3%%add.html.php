<?php /* Smarty version 2.6.22, created on 2013-04-15 11:46:24
         compiled from flow_book/add.html */ ?>

<div class="pageContent">
  <form method="post" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, dialogAjaxDone)">
    <div class="pageFormContent" layoutH="58">
     <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['flow_book']['id']; ?>
" />
      <div class="unit">
      	<label>时间：</label>
        <input type="text" size="30" name="date_time" id="date_time" value="<?php echo $this->_tpl_vars['flow_book']['date_time']; ?>
" class="date" readonly  />
      </div>
      <div class="divider">divider</div>
      
      
      <div class="unit">
        <label>日网站流量：</label>
        <input type="text" size="30" name="hits" id="hits" value="<?php echo $this->_tpl_vars['flow_book']['hits']; ?>
"  />
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