<?php /* Smarty version 2.6.22, created on 2024-10-23 09:41:49
         compiled from lhpl_category/edit.html */ ?>
<div class="pageContent">
  <form method="post" id="lhpl_category" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, navTabAjaxDone)">
    <div class="pageFormContent" layoutH="58">
      <input type="hidden" id="category_id" name="category_id"  value="<?php echo $this->_tpl_vars['lhpl_category']['category_id']; ?>
">
      <div class="unit">
        <label>中文名：</label>
        <input type="text" size="30" name="cn_name" class="required" value="<?php echo $this->_tpl_vars['lhpl_category']['cn_name']; ?>
"/>
      </div>
      <div class="unit" style="margin-top:5px;">
        <label>英文名：</label>
        <input type="text" size="30" name="en_name" class="required" value="<?php echo $this->_tpl_vars['lhpl_category']['en_name']; ?>
"/>
      </div>
      <div class="unit" style="margin-top:5px;">
        <label>业务需求：</label>
        <select id="demand_module_id" class="combox required" name="demand_module_id" >
          <option value="">请选择</option>
          <?php $_from = $this->_tpl_vars['lhpl_module_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['lm']):
?> <option value="<?php echo $this->_tpl_vars['lm']['module_id']; ?>
" <?php if ($this->_tpl_vars['lhpl_category']['demand_module_id'] == $this->_tpl_vars['lm']['module_id']): ?> selected="selected" <?php endif; ?>><?php echo $this->_tpl_vars['lm']['cn_name']; ?>

          </option>
          <?php endforeach; endif; unset($_from); ?>
        </select>
      </div>
      <div class="unit" style="margin-top:5px;">
        <label>设计内容：</label>
        <div style="float:left; border:solid 1px #666; width:200px; background:#FFF; padding-bottom:5px; max-height:500px; overflow-x:hidden; overflow-y:auto;">
          <div id="category_module_table" style="float:left;">
          	<?php if ($this->_tpl_vars['lhpl_category_module']): ?>
                <?php $_from = $this->_tpl_vars['lhpl_category_module']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['cm']):
?>
                <div style="float:left; width:100%; margin-top:5px; margin-left:5px;">
                  <select class="combox required" name="module_id[]" onchange="category_module_select($(this).val(),<?php echo $this->_tpl_vars['cm']['category_module_id']; ?>
);">
                    <option value="">请选择</option>
                    <?php $_from = $this->_tpl_vars['lhpl_module_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['lm']):
?>
                    <option value="<?php echo $this->_tpl_vars['lm']['module_id']; ?>
" <?php if ($this->_tpl_vars['cm']['module_id'] == $this->_tpl_vars['lm']['module_id']): ?> selected="selected" <?php endif; ?>><?php echo $this->_tpl_vars['lm']['cn_name']; ?>

                    </option>
                    <?php endforeach; endif; unset($_from); ?>
                  </select>
                  <a title="删除" href="#"  onClick="getDel_av(this,<?php echo $this->_tpl_vars['cm']['category_module_id']; ?>
)" class="btnDel">删除</a>
                </div>
                <?php endforeach; endif; unset($_from); ?>
            <?php endif; ?>
          </div>
          <div style="float:left; width:100%; margin-top:5px; margin-left:5px;">
          	<input type="button" id="add_select" value="添加内容" style="font-size:12px; cursor:pointer;" />
          </div>
          
        </div>
      </div>
    </div>
    <div class="formBar">
      <ul>
        <li>
          <div class="buttonActive">
            <div class="buttonContent">
              <button type="submit" >确认</button>
            </div>
          </div>
        </li>
        <li> </li>
      </ul>
    </div>
  </form>
</div>
<script>
function delSure(){
	var r = confirm("确认删除吗？");
	if(r==true){
		return true;
	}
	else{
		return false;
	}
}
function getDel_av(k,id){
	if(delSure() == true){
		$.ajax({
				url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/lhpl_category/delete_category_module',//通过Ajax取数据的目标页面
				type:'get',//方法，还可以是"post"
				data:{'category_module_id':id},
				dataType:'text',//数据类型，还有其它的，详见jQuery手册
				success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
				{
					alert("删除成功！"); 
	
				}
		});
		$(k).parent().remove();  
	}
}

function category_module_select(module_id,category_module_id){
	$.ajax({
		url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/lhpl_category/edit_category_module',//通过Ajax取数据的目标页面
		type:'get',//方法，还可以是"post"
		data:{'category_module_id':category_module_id,'module_id':module_id},
		dataType:'json',//数据类型，还有其它的，详见jQuery手册
		success:function(locals)//成功后执行的语句，这里是一个函数，“locals”是返回的数据
		{
			
		}
	});
}


$(document).ready(function()  
{
	$("#add_select").click(function (){
		var category_id = $("#category_id").val();
		
		$.ajax({
			url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/lhpl_category/add_category_module',//通过Ajax取数据的目标页面
			type:'get',//方法，还可以是"post"
			data:{'category_id':category_id},
			dataType:'json',//数据类型，还有其它的，详见jQuery手册
			success:function(locals)//成功后执行的语句，这里是一个函数，“locals”是返回的数据
			{
				if(locals != 0){
					var table_value = '<div style="float:left; width:100%; margin-top:5px; margin-left:5px;"><select class="combox required" name="module_id[]" onchange="category_module_select($(this).val(),'+locals+');"><option value="">请选择</option><?php $_from = $this->_tpl_vars['lhpl_module_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['lm']):
?><option value="<?php echo $this->_tpl_vars['lm']['module_id']; ?>
"><?php echo $this->_tpl_vars['lm']['cn_name']; ?>
</option><?php endforeach; endif; unset($_from); ?></select><a title="删除" href="#"  onClick="getDel_av(this,'+locals+')" class="btnDel">删除</a></div>';
					$("#category_module_table").append(table_value);   //为table追加一个tr(下拉项)
				}else{
					
				}
			}
		});
	});
});
</script>