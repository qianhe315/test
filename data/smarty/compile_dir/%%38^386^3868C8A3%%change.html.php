<?php /* Smarty version 2.6.22, created on 2018-11-23 09:41:22
         compiled from findcustomer/change.html */ ?>
<div class="pageContent">
  <form method="post" action="<?php echo $this->_tpl_vars['act']; ?>
" id="form" class="pageForm" onsubmit="return validateCallback(this, dialogAjaxDone)">
    <div class="pageFormContent" layoutH="58">
      <div class="unit">
        <label>客户代码：</label>
        <input type="text" size="30" name="customer_code" id="customer_code" onkeyup="customer()" value="" class="required"/>
      </div>
      <div class="divider">divider</div>
      
      <div class="unit">
        <label>客户名：</label>
        <input type="text" size="30" name="customer_name" id="customer_name" readonly="readonly"/>
        
      </div>
      <div class="divider">divider</div>
      
      
       <div class="unit">
        <label>业务员：</label>
			<select class="combox" name="sale_user_name">
            <option value="" >全部</option>

            <?php $_from = $this->_tpl_vars['sale_users']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['su']):
?>
             <option value="<?php echo $this->_tpl_vars['su']['user_name']; ?>
" ><?php echo $this->_tpl_vars['su']['user_name']; ?>
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
              <button type="button" id="send">确认添加</button>
            </div>
          </div>
        </li>
        <li> </li>
      </ul>
    </div>
  </form>
</div>

<script type="text/javascript">
    function customer(){
		var customer_code = $("#customer_code").val();
		$.ajax({
			url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/web_inquiries_into/customer_code',//通过Ajax取数据的目标页面
			data:{"customer_code":customer_code},
			type:'post',//方法，还可以是"post"
			dataType:'json',//数据类型，还有其它的，详见jQuery手册
			success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
			{
				if(locals){
					$("#customer_name").val(locals.customer_name);
				}else{
					$("#customer_name").val('');								
				}
			}								
			
		});	
		
	}
	
$(document).ready(function()  
{
	$("#send").click(function (){
		var customer_name = $("#customer_name").val();
		if(customer_name!=""){
			$("#form").submit();
		}else{
		    alert("老客户名不为空！")	
		}
		
	});	
});
</script>