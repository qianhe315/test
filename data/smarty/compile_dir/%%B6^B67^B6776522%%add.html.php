<?php /* Smarty version 2.6.22, created on 2015-04-21 11:22:45
         compiled from order_process/add.html */ ?>

<div class="pageContent">
  <form method="post" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" id="shaoma_form" onsubmit="return validateCallback(this, dialogAjaxDone)">
    <div class="pageFormContent" layoutH="58">
      <input type="hidden" name="time" value="<?php echo $this->_tpl_vars['time']; ?>
" >
      
      <div class="unit">
      	<label>扫码信息：</label>
        <textarea name="bar_code" style="width: 350px;height: 190px;" id="bar_code" onkeyup="addCode();" ></textarea>
      </div>
      <input type="hidden" id="act" value="<?php echo $this->_tpl_vars['act']; ?>
" >
      
    </div>
    <div class="formBar">
      <ul>
        <li>
          <div class="buttonActive" style=" display:none" >
            <div class="buttonContent">
              <button type="submit" >确认添加</button>
            </div>
          </div>
        </li>
        <li> </li>
      </ul>
    </div>
  </form>
</div>

<!-- <?php echo ' --> 
<script type="text/javascript">
function addCode(){
	if($(\'#bar_code\').val()!=\'\'){
		$.ajax({
			url:$(\'#act\').val(),//通过Ajax取数据的目标页面
			data:{"bar_code":$(\'#bar_code\').val()},
			type:\'post\',//方法，还可以是"post"
			dataType:\'text\',//数据类型，还有其它的，详见jQuery手册
			success:function()//成功后执行的语句，这里是一个函数，"locals"是返回的数据
			{
			}	
		});	
		
		
	}
}
	
</script> 
<!-- '; ?>
 -->