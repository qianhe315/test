<?php /* Smarty version 2.6.22, created on 2013-03-29 17:22:11
         compiled from company_setting/index.html */ ?>
<script type="text/javascript" charset="utf-8" src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/ueditor/editor_all.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/ueditor/editor_config.js"></script>
<link rel="stylesheet" href="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/ueditor/themes/default/ueditor.css"/>
<link rel="stylesheet" href="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/ueditor/third-party/SyntaxHighlighter/shCoreDefault.css"/>
<div class="pageContent">
  <form method="post" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, dialogAjaxDone)">
    <div class="pageFormContent" layoutH="58">
      <div class="unit">
        <label>美国公司信息：</label>
        <input type="text" size="30" name="usa_company_info" id="usa_company_info" value="<?php echo $this->_tpl_vars['usa_company_info']; ?>
"  />
        
      </div>
      <div class="divider">divider</div>
     
      <div class="unit">
        <label>中国公司信息：</label>
        <input type="text" size="30" name="china_company_info" id="china_company_info" value="<?php echo $this->_tpl_vars['china_company_info']; ?>
"  />
        
      </div>
      <div class="divider">divider</div>
      
       <div class="unit">
        <label>美国电话：</label>
        <input type="text" size="30" name="usa_tel" id="usa_tel" value="<?php echo $this->_tpl_vars['usa_tel']; ?>
"  />
        
      </div>
      <div class="divider">divider</div>
      
       <div class="unit">
        <label>中国电话：</label>
        <input type="text" size="30" name="china_tel" id="china_tel" value="<?php echo $this->_tpl_vars['china_tel']; ?>
"  />
        
      </div>
      <div class="divider">divider</div>
      
       <div class="unit">
        <label>网站地址：</label>
        <input type="text" size="30" name="website" id="website" value="<?php echo $this->_tpl_vars['website']; ?>
"  />
        
      </div>
      <div class="divider">divider</div>
      
       <div class="unit">
        <label>公司邮箱：</label>
        <input type="text" size="30" name="email" id="email" value="<?php echo $this->_tpl_vars['email']; ?>
"  />
        
      </div>
      <div class="divider">divider</div>
      
       <div class="unit">
        <label>服务承诺：</label>
        <textarea  cols="50" rows="5" name="service_promise" id="service_promise"><?php echo $this->_tpl_vars['service_promise']; ?>
</textarea>
       
      </div>
      <div class="divider">divider</div>
      
       <div class="unit">
        <label>公司声明：</label>
        <textarea cols="50" rows="5" name="company_statement" id="company_statement"  ><?php echo $this->_tpl_vars['company_statement']; ?>
</textarea>
       
      </div>
      <div class="divider">divider</div>
      
      
      
    </div>
    <div class="formBar">
      <ul>
        <li>
          <div class="buttonActive">
            <div class="buttonContent">
              <button type="submit">确认</button>
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
	/*var mycontent = new baidu.editor.ui.Editor();
	var mycontent1 = new baidu.editor.ui.Editor();
    mycontent.render("service_promise",
	{
        theme:"default", //皮肤
        lang:'zh-cn', //语言
		initialFrameWidth:600 ,
	    initialFrameHeight:250 ,
		autoHeightEnabled:false,
    }); 
	mycontent1.render("company_statement",
	{
        theme:"default", //皮肤
        lang:'zh-cn', //语言
		initialFrameWidth:600 ,
	    initialFrameHeight:250 ,
		autoHeightEnabled:false,
    }); */
							
    /*UE.getEditor('service_promise', {
        theme:"default", //皮肤
        lang:'zh-cn', //语言
		initialFrameWidth:600 ,
	    initialFrameHeight:250 ,
		autoHeightEnabled:false,
    });

    UE.getEditor('company_statement', {
       theme:"default", //皮肤
       lang:'zh-cn', //语言
	   initialFrameWidth:600 ,
	   initialFrameHeight:250 ,
	   autoHeightEnabled:false,
    });*/
</script> 
<!-- {/literal} -->