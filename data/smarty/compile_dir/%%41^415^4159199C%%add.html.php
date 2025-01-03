<?php /* Smarty version 2.6.22, created on 2013-09-12 17:28:33
         compiled from purchasing_goods_address/add.html */ ?>

<div class="pageContent">
  <form method="post" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" id="pageForm" onsubmit="return validateCallback(this, dialogAjaxDone)">
    <div class="pageFormContent" layoutH="58">

        <div class="unit">
      	<label>名称：</label>
        <input type="text" size="20" name="name" id="purchasing_name" value="<?php echo $this->_tpl_vars['purchasing_goods_address']['name']; ?>
"  />
        <input type="hidden" name="mid" value="<?php echo $this->_tpl_vars['purchasing_goods_address']['id']; ?>
" />
        <span id="purchasing_name_result" class="error" style="display:none;"></span>
        <span id="purchasing_name_result2" class="error" style="display:none;"></span>
      </div>
      <div class="divider">divider</div>
        <div class="unit">
      	<label>地址：</label>
        <input type="text" size="50" name="address" id="" value="<?php echo $this->_tpl_vars['purchasing_goods_address']['address']; ?>
"  />
      </div>
      <div class="divider">divider</div>
      
    </div>
    <div class="formBar">
      <ul>
        <li>
          <div class="buttonActive">
            <div class="buttonContent">
              <button type="button" id="submit" >确认</button>
            </div>
          </div>
        </li>
<!--        <li>
         <div class="buttonActive">
            <div class="buttonContent">
              <button type="close" >取消</button>
            </div>
          </div> </li>-->
      </ul>
    </div>
  </form>
</div>

<!-- {literal} --> 
<script type="text/javascript">
function check_purchasing_name_back(data){
				if(data == 1){
					$("#purchasing_name_result").css("display","none");
					$("#purchasing_name_result2").css("display","block");
					$("#purchasing_name_result2").html("此单位名称已被使用");
				}
				else{
					$("#purchasing_name_result").css("display","none");
					$("#purchasing_name_result2").css("display","none");
				}
			}
			
			
$("#submit").click(function (){
		if($("#purchasing_name").val() == ''){
			$("#purchasing_name_result2").css("display","none");
			$("#purchasing_name_result").css("display","block");
			$("#purchasing_name_result").html("请填写单位名称");
		}
		else{	
				if($("#purchasing_name_result2").css("display")!='block'){
				$("#purchasing_name_result").css("display","none");
				$("#pageForm").submit();
				}
		}
		
	
		
	});
$('input').blur(function(){
     
   		if(this.id == 'purchasing_name'){
			if(this.value==''){
				
			}
			
			else{
				$('#purchasing_name_result2').html('');
				
				p='purchasing_goods_address_name='+this.value;
     			$.ajax({url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/purchasing_goods_address/purchasing_SearchName',
				type:'post',
				dataType:'json',
				data:p,
				success:check_purchasing_name_back
				})
			}
			
			}
		});
</script> 
<!-- {/literal} -->