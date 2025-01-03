<?php /* Smarty version 2.6.22, created on 2015-08-07 11:44:24
         compiled from user/update_customer.html */ ?>
<div class="pageContent">
  <form method="post" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" id="form_update" onsubmit="return validateCallback(this, dialogAjaxDone)">
    <div class="pageFormContent" layoutH="58">
      <div class="unit">
      	
        <label style="float:left;width:110px;">需修改用户：</label>
        <select name="user_update" id="select_id_update">
                            <option>请选择</option>
                            <?php $_from = $this->_tpl_vars['users']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['ug']):
?>
        					     <option><?php echo $this->_tpl_vars['ug']['user_name']; ?>
</option>
                            <?php endforeach; endif; unset($_from); ?>     
        </select>
        <br />
        <br />
        <br />
        <label style=" width:20px;"><input type="radio" checked="checked" name="type" value="1" id="id1" onchange="aa()" /></label>
        <label style="width:80px;">用户更名：</label><input type="text" name="name1" id="name1" /></label>
        <br />
        <br />
        <br />
        <label style=" width:20px;"><input type="radio" name="type" value="2" id="id2" onchange="bb()" /></label> 
        
       <label style="width:80px;">信息源转移：</label>
       <select name="user_mubiao" id="select_id">
                            <option>请选择</option>
                            <?php $_from = $this->_tpl_vars['users']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['ug']):
?>
        					    <option><?php echo $this->_tpl_vars['ug']['user_name']; ?>
</option>
                            <?php endforeach; endif; unset($_from); ?>    
        </select>
        <br />
        <br />
        <br />
        <label style="float:left;width:300px; color:#F00;"></label>
        
      </div>

    </div>
    <div class="formBar">
      <ul>
        <li>
          <div class="buttonActive">
            <div class="buttonContent">
              <button type="button" id="button_update">确认添加</button>
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

    var obj1 = document.getElementsByName("type");

    var obj2 = obj1[i].checked;

    if(obj2==true){
		document.getElementById("select_id").disabled=true;
	}else{
		document.getElementById("select_id").disabled=false;
	}

    function aa(){
		var txtN = document.getElementById("name1"); 
        txtN.readOnly = false;
		txtN.style.backgroundColor="#ffffff"; 
		
		document.getElementById("select_id").disabled=true;
		
		$("#select_id").val("");
	}
	
	function bb(){
		var txtN = document.getElementById("name1"); 
        txtN.readOnly = true; 
		txtN.style.backgroundColor="#d2d2d2";
		
		$("#name1").val("");
		document.getElementById("select_id").disabled=false;
	}
	 

    $("#button_update").click(function (){
		   
		       var value="";
 			   for(var i=0;i<obj1.length;i++){
        		  if(obj1[i].checked==true){
                      value=obj1[i].value;
         			  break;
                  }
               }
 
			   var select_id = $("#select_id").val();
			   
			   var select_id_update = $("#select_id_update").val();

		       if(value==1){
				   
					var name = $("#name1").val();
					var name1 = name.replace(/\s+/g,"");
					var reg = /^[\u4E00-\u9FA5]+$/;
					if(name1!="" && select_id_update!="请选择"){
						if(!reg.test(name1)){
							alert("必须全中文");
						}else{
							$.ajax({
								  url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/user/user_name',//通过Ajax取数据的目标页面
								  data:{'name1':name1},	
								  type:'post',//方法，还可以是"post"
								  dataType:'text',//数据类型，还有其它的，详见jQuery手册
								  success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
								  {   
									 if(locals==2){
										 alert("在账户表中有重复！")
									 }else{
										 $("#form_update").submit();
									 }
								  }
							});
						}
					}else{
						alert("不能为空！")
						
					}				   
				      
			   }else{
				   
				   if(select_id!="请选择" && select_id_update!="请选择"){
					   
					         $.ajax({
								  url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/user/user_name1',//通过Ajax取数据的目标页面
								  data:{'name1':select_id,'name2':select_id_update},	
								  type:'post',//方法，还可以是"post"
								  dataType:'text',//数据类型，还有其它的，详见jQuery手册
								  success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
								  {   
									 if(locals==2){
										 alert("信息转移必须是同一部门！")
									 }else{
									     $("#form_update").submit();	 
									 }
								  }
					         });
					   
				   }else{
					   alert("请选择要更改的用户！")
				   }
				   
			   }
		   
				
			
				
			//$("#form_update").submit();
	});
</script> 
<!-- {/literal} -->