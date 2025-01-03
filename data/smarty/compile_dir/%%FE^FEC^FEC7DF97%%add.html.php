<?php /* Smarty version 2.6.22, created on 2016-02-23 09:41:10
         compiled from materials_cn/add.html */ ?>
<script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/cstown_Sys.js" type="text/javascript"></script>
<link href="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/css/cstown_sys.css" rel="stylesheet" type="text/css" media="screen"/>
<div class="pageContent">
  <form id="materials_cn_form" method="post" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, navTabAjaxDone)">
  
 
      <input type="hidden" name="this_sources_id"  value="<?php echo $this->_tpl_vars['materials_cn']['id']; ?>
">
      <div class="unit">
      	  <label>名称：</label>
          <input type="text" size="30" id="name_val" name="name" value="<?php echo $this->_tpl_vars['materials_cn']['name']; ?>
" />
      </div>
      <div class="divider">divider</div>
      
      <div class="unit">
      	  <label>颜色：</label>
          <select name="color">
              <option value="0">请选择</option>
              <?php $_from = $this->_tpl_vars['cn_color']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k_color'] => $this->_tpl_vars['color']):
?>
             	  <option value="<?php echo $this->_tpl_vars['color']['id']; ?>
" <?php if ($this->_tpl_vars['materials_cn']['color'] == $this->_tpl_vars['color']['id']): ?> selected <?php endif; ?>><?php echo $this->_tpl_vars['color']['name']; ?>
</option>
              <?php endforeach; endif; unset($_from); ?>
          </select>
      </div>
      <div class="divider">divider</div>
      
      <div class="unit">
      	  <label>规格：</label>
          <select name="standard">
              <option value="0">请选择</option>
              <?php $_from = $this->_tpl_vars['cn_standard']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k_standard'] => $this->_tpl_vars['standard']):
?>
             	  <option value="<?php echo $this->_tpl_vars['standard']['id']; ?>
" <?php if ($this->_tpl_vars['materials_cn']['size'] == $this->_tpl_vars['standard']['id']): ?> selected <?php endif; ?>><?php echo $this->_tpl_vars['standard']['name']; ?>
</option>
              <?php endforeach; endif; unset($_from); ?>
          </select>
      </div>
      <div class="divider">divider</div>
      
      <div class="unit">
      	  <label>计量单位：</label>
          <select name="unit">
              <option value="0">请选择</option>
              <?php $_from = $this->_tpl_vars['cn_unit']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k_unit'] => $this->_tpl_vars['unit']):
?>
             	  <option value="<?php echo $this->_tpl_vars['unit']['id']; ?>
" <?php if ($this->_tpl_vars['materials_cn']['unit'] == $this->_tpl_vars['unit']['id']): ?> selected <?php endif; ?>><?php echo $this->_tpl_vars['unit']['name']; ?>
</option>
              <?php endforeach; endif; unset($_from); ?>
          </select>
      </div>
      <div class="divider">divider</div>
      <div class="unit">
      	  <label>金石滩code：</label>
          <input type="text" size="30" name="code_jst" value="<?php echo $this->_tpl_vars['materials_cn']['code_jst']; ?>
" />
      </div>
      <div class="divider">divider</div>
      <div class="unit">
      	  <label>七贤岭code：</label>
          <input type="text" size="30" name="code_qxl" value="<?php echo $this->_tpl_vars['materials_cn']['code_qxl']; ?>
" />
      </div>
      <div class="divider">divider</div>
      <div class="unit">
      	  <label>衣服成本：</label>
          <input type="text" size="30" name="clothes_cost" value="<?php echo $this->_tpl_vars['materials_cn']['clothes_cost']; ?>
" />
      </div>
      <div class="divider">divider</div>
      
      <div class="unit">
      	  <label>衣服售价：</label>
          <input type="text" size="30" name="clothes_price" value="<?php echo $this->_tpl_vars['materials_cn']['clothes_price']; ?>
" />
      </div>
      <div class="divider">divider</div> 
  </form>
     
      <div class="unit">
      	  <label></label>
          <div class="sIE_r" style="width:420px;" id="image">
              <div class="sIE_r_img" style="height:430px; width:400px;">
                  <div style="float:left;  width:300px; height:atuo;">
                  <!--<img src="sss.jpg" width="224px" height="224px" />-->
                  	 <iframe name="yframe_stock" src="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/materials_cn/upload_jpg" style="border:none; width:400px; height:400px;"></iframe>
                  </div>
                  <div style="float:left; margin-top:0px; width:400px;">
                      <form action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/materials_cn/upload_jpg" id="stock_upload_img" target="yframe_stock" method="post" enctype="multipart/form-data" > 
                          <div style="float:left; height:50px; width:60px; overflow:hidden; position:relative;">
                          <input type="file" class="sIE_r_img_file" name="upload_file" multiple="multiple" id="jpg_file" style=" opacity:0; position:relative; z-index:10; margin-top:0px;" />
                          <input type="button" class="sIE_r_img_file" name="jpg" style=" opacity:1; width:60px; text-align:center; height:24px; position:absolute; z-index:9; margin-top:0px;" value="浏览" />
                          </div>
                          <input type="submit" value="上传JPG" id="img_upload_submit" style=" float:right; width:100px; height:24px;" />   
                      </form>
                  </div>
              </div>
          </div>     
      </div>
      <div class="divider">divider</div>
      
    
    <div class="formBar">
      <ul>
        <li>
          <div class="buttonActive">
            <div class="buttonContent">
              <button type="button" id="submit_form">确认添加</button>
            </div>
          </div>
        </li>
        <li> </li>
      </ul>
    </div>
 </div>
</div>

<!-- <?php echo ' --> 
<script type="text/javascript">

$(document).ready(function(){

	$("#submit_form").click(function () {
		var str	=	$(\'#name_val\').val();
		if(str.indexOf(" ")!=-1){
			alert(\'名称不能有空格！\');
		}else{
			$("#materials_cn_form").submit();
		}
		
		
	});
});
</script> 
<!-- '; ?>
 -->