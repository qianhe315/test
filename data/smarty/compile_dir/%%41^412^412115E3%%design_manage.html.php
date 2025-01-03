<?php /* Smarty version 2.6.22, created on 2015-05-21 14:59:16
         compiled from admin/design_manage.html */ ?>
<script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/cstown_Sys.js" type="text/javascript"></script>
<link href="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/css/cstown_sys.css" rel="stylesheet" type="text/css" media="screen"/>
<div class="pageContent">
<div style="float:left; width:100%;">
      <form method="post" action="<?php echo $this->_tpl_vars['action']; ?>
" id="customer_manage" enctype="multipart/form-data" onsubmit="return validateCallback(this, navTabAjaxDone)">设计编号前几位：<input type="text" id="customer_code" name="customer_code" /> 

</form>
			<li>
				<label style="float:left; margin-top:3px;">业务员：</label>
				<select class="combox" name="salesman_id">
                <option value="">全部</option>
                <?php $_from = $this->_tpl_vars['sale_users']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['du']):
?>
                  <option value="<?php echo $this->_tpl_vars['du']['user_name']; ?>
" <?php if ($this->_tpl_vars['du']['user_name'] == $this->_tpl_vars['sale_user']): ?> selected <?php endif; ?> > <?php echo $this->_tpl_vars['du']['user_name']; ?>
 </option>
              <?php endforeach; endif; unset($_from); ?>
                </select>
			</li>
            
<input type="button" id="c_custoemrs" value="开始处理" style="margin-left:-103px; margin-top:10px;" />
 <div class="divider">divider</div>
 <label style=" font-size:14px; font-weight: bold;" >更新设计</label>
      <div class="unit">
       <div class="buttonActive">
         <div class="buttonContent">
          <a class="edit" title="更新设计对应客户?" posttype="string" rel="page1" target="ajaxTodo" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/design_manage/change_customer_code"><button type="button">更新设计对应客户</button></a>
         </div>
        </div>
      </div>
      <div class="unit">
       <div class="buttonActive">
         <div class="buttonContent">
          <a class="edit" title="更新设计业务员名?" posttype="string" rel="page1" target="ajaxTodo" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/design_manage/change_salesman_name"><button type="button">更新设计业务员名</button></a>
         </div>
        </div>
      </div>      
     <div class="divider">divider</div>
     <label style=" font-size:14px; font-weight: bold;" >新材料数据</label>
      <div class="unit">
       <div class="buttonActive">
         <div class="buttonContent">
          <a class="edit" title="获取最新材料数据?" posttype="string" rel="page1" target="ajaxTodo" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/design_manage/get_materials"><button type="button">获取最新材料数据</button></a>
         </div>
        </div>
      </div>
     <div class="divider">divider</div>
   <label style=" font-size:14px; font-weight: bold;" >cs_exception_path</label>
      <div class="unit">
       <div class="buttonActive">
         <div class="buttonContent">
          <a class="edit" title="查询不存在图片?" posttype="string" rel="page1" target="ajaxTodo" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/design_manage/check_picture_exists"><button type="button">查询不存在图片</button></a>
         </div>
        </div>
      </div>
     <div class="divider">divider</div>

</div></div>
<script type="text/javascript" language="javascript">
$(document).ready(function()  
{
	 $("#c_custoemrs").click(function () {

         if($("#customer_code").val()==''){
			 alert("代码不为空!")
		 }else if($("#saleman").val()=='0'){
			 alert("请选择业务员!")
		 }else{
			 $("#customer_manage").submit();
		 }

	});	
});
	
</script>
<!-- {/literal} -->