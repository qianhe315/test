<?php /* Smarty version 2.6.22, created on 2015-09-18 14:54:39
         compiled from design_number_entering/add.html */ ?>

<div class="pageContent">
  <form method="post" id="design_number_submit"    action="<?php echo $this->_tpl_vars['act']; ?>
"  class="pageForm" onsubmit="return validateCallback(this, dialogAjaxDone)">
    <div class="pageFormContent" layoutH="58">

        <div class="unit">
          <label style="width:80px;">时间：</label>
      
          <input type="text" name="time" id="time" <?php if ($this->_tpl_vars['design_number']['time'] == ""): ?> value="<?php echo $this->_tpl_vars['date']; ?>
" <?php else: ?> value="<?php echo $this->_tpl_vars['design_number']['time']; ?>
" <?php endif; ?> class="date" readonly="true" style="width:90px"/>
        </div>
        <div class="divider">divider</div>
         <div class="unit">
          <label style="width:80px;">设计人员：</label>
          <select class="combox" name="design_name" id="design_name">
                <option value="">全部</option>
                <?php $_from = $this->_tpl_vars['users']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['du']):
?>
                <option value="<?php echo $this->_tpl_vars['du']['user_name']; ?>
" <?php if ($this->_tpl_vars['du']['user_name'] == $this->_tpl_vars['design_number']['design_name']): ?> selected <?php endif; ?> > <?php echo $this->_tpl_vars['du']['user_name']; ?>
 </option>
                <?php endforeach; endif; unset($_from); ?>
          </select>
          <input type="hidden" name="mid" value="<?php echo $this->_tpl_vars['id']; ?>
">
        </div>
        <div class="divider">divider</div>
         <div class="unit">
          <label style="width:80px;">系统图（可扣减和补充）	：</label>
          <input type="text" name="pic_erp"  id="pic_erp" value="<?php echo $this->_tpl_vars['design_number']['pic_erp']; ?>
" class=""  style="width:90px"/>
        </div>
        <div class="divider">divider</div>
          <div class="unit">
          <label style="width:80px;">601设计：</label>
          <input type="text" name="pic_601" id="pic_601"value="<?php echo $this->_tpl_vars['design_number']['pic_601']; ?>
" class="" style="width:90px"/>
        </div>
        <div class="divider">divider</div>
        <div class="unit">
          <label style="width:80px;">公司设计：</label>
          <input type="text" name="pic_company" id="pic_company" value="<?php echo $this->_tpl_vars['design_number']['pic_company']; ?>
" class=""  style="width:90px"/>
        </div>
        <div class="divider">divider</div>
        <!--<div class="unit">
          <label style="width:80px;">茱莉设计：</label>
          <input type="text" name="pic_july" id="pic_july" value="<?php echo $this->_tpl_vars['design_number']['pic_july']; ?>
" class=""  style="width:90px"/>
         </div>
        <div class="divider">divider</div>-->
    </div>
    <div class="formBar">
      <ul>
        <li>
          <div class="buttonActive">
            <div class="buttonContent">
              <button id='submit_design_number'type="button" >确认</button>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </form>
</div>

<!-- {literal} --> 
<script type="text/javascript">
 $("#submit_design_number").click(function (){
		  var time = $("#time").val();
		  var design_name = $("#design_name").val();
		  var re = /^[0-9]*[1-9][0-9]*$/ ; 
		  var pic_erp = $("#pic_erp").val(); 
          var pic_601 = $("#pic_601").val();
		  var pic_company = $("#pic_company").val();
		  var pic_july = $("#pic_july").val();
		  pic_erp_1=re.test(pic_erp);
		  pic_601_1=re.test(pic_601);
		  pic_company_1=re.test(pic_company);
		  pic_july_1=re.test(pic_july);
		  if(time==''){
			  alert('请选择时间')
		  }else if(design_name==''){
			  alert('请选择设计人员');
		  }else if(pic_erp!='' &&  pic_erp_1==false){
			  alert('系统图为正整数');
		  }else if(pic_601!='' &&  pic_601_1==false){
			  alert('601设计为正整数');
		  }else if(pic_company!='' &&  pic_company_1==false){
			  alert('公司设计为正整数');
		  }/* else if(pic_july!='' &&  pic_july_1==false){
			  alert('茱莉设计为正整数');
		  }*/else{
			  $("#design_number_submit").submit();
		  }

		 
	
	  });	

</script> 
<!-- {/literal} -->