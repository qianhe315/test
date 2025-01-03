<?php /* Smarty version 2.6.22, created on 2023-06-13 14:27:07
         compiled from revieweddesign/rhinestone_design_sheet.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/jquery-1.7.2.min.js" type="text/javascript"></script>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link href="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/css/cstown_sys.css" rel="stylesheet" type="text/css" media="screen"/>
</head>


<body>
<div class="wrap">
	<div class="invoice_newK">
    	<div class="invoice_div">
    		<div class="invoice_div_title_left">COMMERCIAL INVOICE</div>
    		<div class="invoice_div_title_right"><img src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/image/header_18.png" alt="cstown" /></div>
    		<div class="sale_div"><b>SALES REP:</b> <b><?php echo $this->_tpl_vars['english_name']; ?>
</b> (<?php echo $this->_tpl_vars['email']; ?>
) &nbsp;&nbsp;&nbsp;&nbsp; Floor 4, No.13 Renxian Street, High Tech Zone, Dalian, 116085</div>
    		<div class="company_div"><b>CUSTOMER SERVICE:</b> <b>Rocky</b> (usa@cstown.com) &nbsp;&nbsp;&nbsp;&nbsp; 164 Yugen, Irvine, CA, USA, 92618 &nbsp;&nbsp;&nbsp;&nbsp; 949-864-9776</div>
    	</div>
    	<div class="invoice_div" style="margin-top: 20px;">
    		<div class="customer_left">
            	<font style="color:#980013; font-weight:bold;">Design to</font><br />
                <font style="font-weight:bold;"><?php echo $this->_tpl_vars['customer_name']; ?>
</font><br />
                <?php echo $this->_tpl_vars['address']; ?>
<br /><br />
                <?php echo $this->_tpl_vars['company']; ?>
<br />
                <?php echo $this->_tpl_vars['telephone']; ?>
<br />
                <?php echo $this->_tpl_vars['email1']; ?>
<br />
            </div>
    		<div class="customer_right">
            	<font style="color:#980013; font-weight:bold;">Date</font><br />
                <font><?php echo $this->_tpl_vars['time']; ?>
</font><br />
            </div>
    	</div>
        
        <?php $_from = $this->_tpl_vars['design_content_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['dis']):
?>
        <div class="invoice_div" style="margin-top: 20px;">
        	<div class="divK">
                <font style="color:#980013; font-weight:bold;">Design No.:</font> <?php echo $this->_tpl_vars['dis']['design_content_code']; ?>
<br />
            	<font style="color:#980013; font-weight:bold;">Design Name:</font> <?php echo $this->_tpl_vars['dis']['design_content_name']; ?>

            </div>
            <div class="design_imgK"><img src="<?php echo $this->_tpl_vars['dis']['upload_jpg']; ?>
" /></div>
        </div>
        <div class="design_hui">
        	<div class="design_hui_div">
            	<font style="color:#980013; font-weight:bold;">Size:</font><br /> <?php echo $this->_tpl_vars['dis']['content_inch_w']; ?>
 inch W * <?php echo $this->_tpl_vars['dis']['content_inch_h']; ?>
 inch H
            </div>
            <div class="design_hui_div">
            <font style="color:#980013; font-weight:bold;">Materials:</font><br />
                <?php $_from = $this->_tpl_vars['dis']['materials_content_select']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k1'] => $this->_tpl_vars['mcs']):
?>
                	<div class="design_hui_div_material">
                	<b><?php echo $this->_tpl_vars['k1']; ?>
</b><br />
                  	<?php $_from = $this->_tpl_vars['mcs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k2'] => $this->_tpl_vars['m']):
?>
                    	<div class="design_hui_div_material_list">
                        <?php if ($this->_tpl_vars['m']['material_name'] != 'Patch'): ?>
                            <font style="float:left; margin-top:1px;"><img src="<?php echo $this->_tpl_vars['m']['image']; ?>
" width="20px" height="20px" /></font>
                            <font style="float:left; margin-left:5px;">- <?php echo $this->_tpl_vars['m']['material_color']; ?>

                            <?php if ($this->_tpl_vars['m']['material_size'] != ''): ?> - <?php echo $this->_tpl_vars['m']['material_size']; ?>
<?php endif; ?>
                            <?php if ($this->_tpl_vars['m']['material_quantity'] != ''): ?> &nbsp;&nbsp;&nbsp; Qty: <?php echo $this->_tpl_vars['m']['material_quantity']; ?>
<?php endif; ?></font>
                        <?php else: ?>
                            <div style="width:20px; height:20px; float:left; background-color:rgb(<?php echo $this->_tpl_vars['m']['color']; ?>
);"></div>
                            <font style="float:left; margin-left:5px;">- <?php echo $this->_tpl_vars['m']['material_color']; ?>
</font>
                        <?php endif; ?>
                        </div>
                    <?php endforeach; endif; unset($_from); ?>
                    </div>
                <?php endforeach; endif; unset($_from); ?>
            </div>
        </div>
        <?php endforeach; endif; unset($_from); ?>
        
        <div class="invoice_div">
        	<div class="invoice_div_footer">
            	www.cstown.com
            </div>
        </div>
        <?php if ($this->_tpl_vars['pdf_btn']): ?>
        	<form method="post" id="quote_form1" style="width:100%;" action="<?php echo $this->_tpl_vars['act_pdf']; ?>
" class="pageForm" enctype="multipart/form-data" >
            <input type="hidden" name="design_id" value="<?php echo $this->_tpl_vars['design_id']; ?>
" />
            <input type="hidden" name="design_content_ids[]" value="<?php echo $this->_tpl_vars['design_content_ids']; ?>
" />
        	<input type="button" class="quoteK_bottom01_button" onClick="export_pdf()" value="导出PDF" />
            </form>
        <?php endif; ?>
        
        
        
    </div>
</div>
<script type="text/javascript">
function export_pdf(){
	//$("#hidden_btn").css("display","none");
	$("#quote_form1").submit();
}
</script>
</body>
</html>