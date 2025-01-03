<?php /* Smarty version 2.6.22, created on 2016-01-12 10:51:30
         compiled from materials_cn/aa.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>材料条形码</title>
<script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/jquery-1.7.2.min.js" type="text/javascript"></script>
<link href="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/css/cstown_sys.css" rel="stylesheet" type="text/css" media="screen"/>
</head>
<style>
@media print{
.noprint{  display:none}
}
</style>

<body>
	<div class="wrap">
    <form method="post" id="export_certificate_form" style="width:100%;" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" enctype="multipart/form-data" >
        <input type="hidden" name="ids" value="<?php echo $this->_tpl_vars['ids']; ?>
" /> 
    	<div class="QuoteK" style="width:695px; margin:0 auto;">
    	  <div class="sIE_l_03" style="margin-top:20px; width:695px;">
          <?php $_from = $this->_tpl_vars['sale_detail_deliver_array']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['dis']):
?>  <!--class="sIE_l_05Tab"-->
                <table cellspacing="0" border="0"  style=" width:150px; float:left; margin-bottom:10px; margin-left:15px;">
            
                        <tr height="60px;">
                            <td style="text-align:center"> <img src="<?php echo $this->_tpl_vars['dis']['act']; ?>
"/><br><?php echo $this->_tpl_vars['dis']['material_name']; ?>
<br><?php echo $this->_tpl_vars['dis']['material_color']; ?>
<br><?php echo $this->_tpl_vars['dis']['size']; ?>
</td>
                            
                        </tr>                     
                </table>
           <?php endforeach; endif; unset($_from); ?> 
            
    	  </div>
			<!--<input type="button" class="quoteK_bottom01_button noprint" onClick="export_pdf()" value="导出PDF" />-->
            <!--<input type="button"  class="quoteK_bottom01_button noprint" value="返回" /> -->  
      </div>
</div>
<script type="text/javascript">
function export_pdf(){
	$("#export_certificate_form").submit();
}
</script>
</body>
</html>