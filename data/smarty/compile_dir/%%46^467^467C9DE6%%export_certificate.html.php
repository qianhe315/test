<?php /* Smarty version 2.6.22, created on 2023-02-14 10:08:54
         compiled from factory_order/export_certificate.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>导出合格证</title>
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
    	<div class="QuoteK">
    	  <div class="sIE_l_03" style="margin-top:20px;">
          <?php $_from = $this->_tpl_vars['quotation_sheet_array']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['dis']):
?>  
                <table cellspacing="0" border="2" class="sIE_l_05Tab" style=" width:320px; float:left; margin-bottom:110px; margin-left:10px; margin-right:10px;">
                    	<tr>
                        	<th colspan="2" style="text-align:center;">Quality Certification</th>
                        </tr>
                        <tr>
                        	<th style="width:90px;">Order NO.</th>
                            <td style="text-align:center"><?php echo $this->_tpl_vars['dis']['order_number']; ?>
</td>
                        </tr>
                        <tr>
                        	<th>Artwork</th>
                            <td height="20px" style="text-align:center; width:176px; height:20px; overflow:hidden;"><nobr><?php echo $this->_tpl_vars['dis']['design_pic_name']; ?>
</nobr></td>
                        </tr>
                        <tr>
                        	<th>Quantity</th>
                            <td style="text-align:center"><?php echo $this->_tpl_vars['dis']['pcs']; ?>
</td>
                        </tr>
                        <tr>
                        	<th>Inspector</th>
                            <td style="text-align:center">Mary.S</td>
                        </tr>
                        <tr>
                        	<th>DATE</th>
                            <td style="text-align:center"><?php echo $this->_tpl_vars['dis']['time']; ?>
</td>
                        </tr>
                        <tr height="100px;">
                        	<th>Image</th>
                            <td style="text-align:center"><img width="200" height="200" src="<?php echo $this->_tpl_vars['dis']['image1']; ?>
"></td>
                        </tr>
                        
                        <tr height="90px;">
               				<td colspan="2" style="text-align:center">
                            <img style="display:none;" src="<?php echo $this->_tpl_vars['dis']['shengcheng']; ?>
"/>
                            <img src="<?php echo $this->_tpl_vars['dis']['image']; ?>
"/><br><?php echo $this->_tpl_vars['dis']['order_number']; ?>

                            </td>
                            
                        </tr>                        
                </table>
           <?php endforeach; endif; unset($_from); ?> 
            
    	  </div>
			<!--<input type="button" class="quoteK_bottom01_button noprint" onClick="export_pdf()" value="导出PDF" />-->
            <!--<input type="button"  class="quoteK_bottom01_button noprint" value="返回" />   -->
            <input type="button" onclick="location.reload()" class="noprint" value="生成条形码" />
      </div>
</div>
<script type="text/javascript">
function export_pdf(){
	$("#export_certificate_form").submit();
}
</script>
</body>
</html>