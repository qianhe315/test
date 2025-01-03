<?php /* Smarty version 2.6.22, created on 2015-03-16 15:11:39
         compiled from standard_paper_set/add.html */ ?>
<div class="pageContent">
  <form id="standard_paper_set_form" method="post" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm required-validate" onsubmit="return validateCallback(this, dialogAjaxDone)"  >
    <div class="pageFormContent" layoutH="58">
      <div class="unit">
        <label>W：</label>
        <input type="text" size="30"name="kuan" id="kuan" value="" alt="" class="digits"  />

        <span id="user_name1_result_new" class="error" style="display:none;"></span>
      </div>
       
      
      <div class="divider">divider</div>
      <div class="unit">
       <label>H：</label>
       <input type="text" size="30" name="gao" id="gao" value="" alt="" class="digits" />

      </div>
      <div class="divider">divider</div>
      
      <div class="unit">
       <label>名称：</label>
       <input type="text" size="30" name="name" id="name" value="" alt="" />

      </div>
      <div class="divider">divider</div>
      
     
	  
            
    </div>
    <div class="formBar">
      <ul>
        <li>
          <div class="buttonActive">
            <div class="buttonContent">
              <button type="button"  id="submit_add">确认添加</button>
            </div>
          </div>
        </li>
        <li> </li>
      </ul>
    </div>
  </form>
</div>
<script type="text/javascript">
 $(document).ready(function(){
	 $("#submit_add").click(function (){
		    var kuan = $("#kuan").val();
			var gao = $("#gao").val();

				if(kuan>=48 || gao>=48){
					 alert("长或宽不能大于等于48！");
				}else{
	
				   $("#standard_paper_set_form").submit();
				}
			
	 });
	 
	 
});
</script> 