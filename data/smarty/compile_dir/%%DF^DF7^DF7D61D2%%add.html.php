<?php /* Smarty version 2.6.22, created on 2014-09-02 16:21:39
         compiled from free_version_customer/add.html */ ?>
<div class="pageContent">
  <form method="post" action="<?php echo $this->_tpl_vars['act']; ?>
"  id="form" class="pageForm" onsubmit="return validateCallback(this, dialogAjaxDone)">
    <div class="pageFormContent" layoutH="58">
    <!--<input type="hidden" name="this_area_id" value="<?php echo $this->_tpl_vars['area']['area_id']; ?>
" >-->
      <div class="unit">
      <li>
        <label style="float:left; margin-top:3px;">特殊类别：</label>
        <select class="combox" name="type">
        <option value="1">免版费</option>
        <option value="2">订单免检</option>
        <option value="3">先做货免检</option>
        <option value="4">先发货免检</option>
        <option value="5">优先做货</option>
        <option value="6">回收例外客户</option>
        </select>
	  </li>
       </div>
      <div class="divider">divider</div>
      <div class="unit">
      	<label>有效期：</label>
         <input type="text" style="width:100px;height:19px;"  id="term_of_validity" name="term_of_validity"  datefmt="yyyy-MM-dd" value="<?php echo $this->_tpl_vars['tomorrow']; ?>
" class="date required" readonly />
      </div>
      <div class="divider">divider</div>
      <div class="unit">
      	<label>客户代码：</label>
        <input type="hidden" id="url" value="<?php echo $this->_tpl_vars['url']; ?>
" />
        <input type="text" size="30" name="customer_code" id="customer_code"  onkeyup="customer()" value=""  class="required"/>
      </div>
      <div class="divider">divider</div>
      
      <div class="unit">
      	<label>客户名：</label>
        <input type="text" size="30" name="customer_name" id="customer_name" readonly="readonly"/>
      </div>
      <div class="divider">divider</div>
      
    </div>
    <div class="formBar">
      <ul>
        <li>
          <div class="buttonActive">
            <div class="buttonContent">
              <button type="button" id="send" >确认添加</button>
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
    function customer(){
		var customer_code = $("#customer_code").val();
		var url = $("#url").val();
		var aa = url + \'/web_inquiries_into/customer_code\';
		$.ajax({
			url:aa,//通过Ajax取数据的目标页面
			data:{"customer_code":customer_code},
			type:\'post\',//方法，还可以是"post"
			dataType:\'json\',//数据类型，还有其它的，详见jQuery手册
			success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
			{
				if(locals){
					$("#customer_name").val(locals.customer_name);
				}else{
					$("#customer_name").val(\'\');								
				}
			}								
			
		});	
		
	}
	
$(document).ready(function()  
{
	$("#send").click(function (){
		
	var customer_name = $("#customer_name").val();
	var url = $("#url").val();
	var bb = url + \'/free_version_customer/check_customer_name\';
		if(customer_name!=""){
			$.ajax({
				  url:bb,
				  data:{"customer_name":customer_name},	
				  type:\'post\',//方法，还可以是"post"
				  dataType:\'json\',//数据类型，还有其它的，详见jQuery手册
				  success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
				  {
						if(locals == 1){
							
							alert("客户已存在！");
							
						}else{
								$("#form").submit();
						}
				  }
			  });
		
		}else{
		    alert("客户名不为空！")	
		}
		
	});	
});
</script> 
<!-- '; ?>
 -->