<?php /* Smarty version 2.6.22, created on 2014-12-04 10:24:59
         compiled from materials_management/barcode.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/jquery-1.7.2.min.js" type="text/javascript"></script>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>报价单</title>
<link href="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/css/cstown_sys.css" rel="stylesheet" type="text/css" media="screen"/>
</head>


<body>
	<div class="wrap">
    	<div class="QuoteK">
        <form target="_blank" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/materials_management/create_barcode" class="pageForm"  id="create_barcode_add">
          <?php if ($this->_tpl_vars['a']): ?>
			 <?php $_from = $this->_tpl_vars['a']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['dis']):
?>
				<label style="width:40px;">编号：</label>
				<input type="text" class="textInput" style="width:62px;" name="id[]" value="<?php echo $this->_tpl_vars['dis']['id']; ?>
" readonly='readonly'/>
                <label style="width:40px;">名称：</label>
                <input type="text" class="textInput" style="width:62px;" name="material_name[]" value="<?php echo $this->_tpl_vars['dis']['material_name']; ?>
" readonly='readonly'/>
			    <label style="width:40px;">颜色：</label>
				<input type="text" class="textInput" style="width:62px;" name="material_color[]" value="<?php echo $this->_tpl_vars['dis']['material_color']; ?>
" readonly='readonly'/>
			    <label style="width:40px;">尺寸：</label>
				<input type="text" class="textInput" style="width:62px;" name="select_size[]" value="<?php echo $this->_tpl_vars['dis']['size']; ?>
" readonly='readonly'/>
                <label style="width:40px;">生成数量：</label>
				<input type="text" class="textInput" style="width:62px;" name="number[]" value="1" />
                <br><br><br>
             <?php endforeach; endif; unset($_from); ?>
           <?php endif; ?>  
                       
                       	  
       </div>
          
          
        </div>
</div>
 <div class="formBar"> 
        <div class="button" style="margin-left:85%; margin-right:5px;">
    		<div class="buttonContent">
       			 <button type="submit">确定</button>
    		</div>
  		</div>
	</div>
     </form>     
<script type="text/javascript">

</script>
</body>
</html>