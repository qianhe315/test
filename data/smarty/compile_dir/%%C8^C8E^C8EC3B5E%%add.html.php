<?php /* Smarty version 2.6.22, created on 2013-09-03 16:00:04
         compiled from unit_add/add.html */ ?>

<div class="pageContent">
  <form method="post" action="<?php echo $this->_tpl_vars['act']; ?>
" id="pageForm" class="pageForm" onsubmit="return validateCallback(this, dialogAjaxDone)">
    <div class="pageFormContent" layoutH="58">

     
      
      <div class="unit">
      	<label>名称：</label>
        <input type="text" size="50" name="name" id="unit_name" style="width:100px" value="<?php echo $this->_tpl_vars['unit_add']['name']; ?>
" class="required"/>
        <input type="hidden" name="hidden_id" value="<?php echo $this->_tpl_vars['unit_add']['id']; ?>
" />
        <span id="unit_name_result" class="error" style="display:none;"></span>
        <span id="unit_name_result2" class="error" style="display:none;"></span>
      </div>
      <div class="divider">divider</div>
	 <div class="unit">
     <label style="width:110px;">类别：</label>
     	<?php if ($this->_tpl_vars['unit_add']['type'] == '1'): ?>                     
		<label style="width:70px"><input type="radio" name="type" value="1" checked="checked"/>数量</label>
		<label style="width:70px"><input type="radio" name="type" value="2" />重量</label>
        <?php elseif ($this->_tpl_vars['unit_add']['type'] == '2'): ?>                     
		<label style="width:70px"><input type="radio" name="type" value="1"/>数量</label>
		<label style="width:70px"><input type="radio" name="type" value="2" checked="checked" />重量</label>
        <?php else: ?>
		<label style="width:70px"><input type="radio" name="type" value="1" checked="checked"/>数量</label>
		<label style="width:70px"><input type="radio" name="type" value="2" />重量</label>        
       <?php endif; ?>
      </div>
      <div class="divider">divider</div>
    </div>
    <div class="formBar">
      <ul>
        <li>
          <div class="buttonActive">
            <div class="buttonContent">
              <button type="button" id="submit" >确定</button>
            </div>
          </div>
        </li>
        
      </ul>
    </div>
  </form>
</div>

<!-- {literal} --> 
<script type="text/javascript">
$(document).ready(function()  
{
	
	
	function check_unit_name_back(data){
				if(data == 1){
					$("#unit_name_result").css("display","none");
					$("#unit_name_result2").css("display","block");
					$("#unit_name_result2").html("此单位名称已被使用");
				}
				else{
					$("#unit_name_result").css("display","none");
					$("#unit_name_result2").css("display","none");
				}
			}
	
	
	$("#submit").click(function (){
		if($("#unit_name").val() == ''){
			$("#unit_name_result2").css("display","none");
			$("#unit_name_result").css("display","block");
			$("#unit_name_result").html("请填写单位名称");
		}
		else{	
				if($("#unit_name_result2").css("display")!='block'){
				$("#unit_name_result").css("display","none");
				$("#pageForm").submit();
				}
		}
		
	
		
	});
	
	
	
	
		$('input').blur(function(){
     
   		if(this.id == 'unit_name'){
			if(this.value==''){
				
			}
			
			else{
				$('#unit_name_result2').html('');
				
				p='unit_name='+this.value;
     			$.ajax({url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/unit_add/unit_SearchName',
				type:'post',
				dataType:'json',
				data:p,
				success:check_unit_name_back
				})
			}
			
			}
		});


});
</script> 
<!-- {/literal} -->