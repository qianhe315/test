<?php /* Smarty version 2.6.22, created on 2024-10-23 13:12:32
         compiled from outgoing_quotation_sheet/quotation_cheer_design.html */ ?>
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
    		<div class="invoice_div_title_left">QUOTATION</div>
    		<div class="invoice_div_title_right"><img src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/image/header_18.png" alt="cstown" /></div>
    		<div class="sale_div"><b>SALES REP:</b> <b><?php echo $this->_tpl_vars['english_name']; ?>
</b> (<?php echo $this->_tpl_vars['email']; ?>
) &nbsp;&nbsp;&nbsp;&nbsp; 
                	Rm 0158,F9,No.369-9 Diamond Street, Dalian, 116399
    		</div>
    		<div class="company_div"><b>CUSTOMER SERVICE:</b> <b>Rocky</b> (rockyzhao@cstown.com) &nbsp;&nbsp;&nbsp;&nbsp; 164 yugen, Irvine, 92618 &nbsp;&nbsp;&nbsp;&nbsp; 949-864-9776</div>
    	</div>
    	<div class="invoice_div" style="margin-top: 20px;">
    		<div class="customer_left">
            	<font style="color:#980013; font-weight:bold;">Quotation to</font><br />
                <font style="font-weight:bold;"><?php echo $this->_tpl_vars['customer_name']; ?>
</font><br />
                <?php echo $this->_tpl_vars['email1']; ?>
<br />
            </div>
    		<div class="customer_right">
            	<font style="color:#980013; font-weight:bold;">Date</font><br />
                <font><?php echo $this->_tpl_vars['time']; ?>
</font><br />
                <div class="zong_totle_k">
                	<font style="float:left; width:100%; color:#FFF; font-weight:bold; margin-top:25px;">Quotation Total:</font>
                    <font style="float:left; width:100%; color:#FFF; font-weight:bold; font-size:46px;"><?php echo $this->_tpl_vars['due']; ?>
</font>
                </div>
            </div>
    	</div>
        
        <div class="invoice_div" style="margin-top: 20px;">
        	
            <div class="invoice_table">
            	<ul>
                	<li style="border-top:solid 1px #980013;border-bottom:solid 1px #980013;">
                    	<div class="table_img" style="display:block; color:#980013; font-weight:bold; min-height:28px;line-height:28px; padding-top:0px; float:left;">Img</div>
                        <div class="table_design_name" style="display:block;color:#980013; font-weight:bold; min-height:28px;line-height:28px; padding-top:0px; float:left;">Quote Name</div>
                        <div class="table_order_number" style="display:block;color:#980013; font-weight:bold; min-height:28px;line-height:28px; padding-top:0px; float:left;">Item No.</div>
                        <div class="table_size" style="display:block;color:#980013; font-weight:bold; min-height:28px;line-height:28px; padding-top:0px; float:left;">Size</div>
                        <div class="table_total_qty" style="display:block;color:#980013; font-weight:bold; min-height:28px;line-height:28px; padding-top:0px; float:left;">Qty</div>
                        <div class="table_price" style="display:block;color:#FFF; font-weight:bold; min-height:28px;line-height:28px; background-color:#980013; padding-top:0px; text-align:right; float:left;">Price</div>
                        <div class="table_setup_fee" style="display:block;color:#FFF; font-weight:bold; min-height:28px;line-height:28px; background-color:#980013; padding-top:0px; text-align:right; float:left;">Setup Fee</div>
                        <div class="table_design_fee" style="display:block;color:#FFF; font-weight:bold; min-height:28px;line-height:28px; background-color:#980013; padding-top:0px; text-align:right; float:left;">Design Fee</div>
                        <div class="table_total" style="display:block;color:#FFF; font-weight:bold; min-height:28px;line-height:28px; background-color:#980013; padding-top:0px; text-align:right; float:left;">Total</div>
                    </li>
                </ul>
                <table class="invoice_Tab">
                    <?php $_from = $this->_tpl_vars['quotation_sheet_array']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['diss']):
?>
                    <?php if ($this->_tpl_vars['diss']['status'] != 2): ?>
                    <tr style="border-bottom:solid 1px #980013;">
                    	<td class="table_img" style="padding:3px;"><img src="<?php echo $this->_tpl_vars['diss']['image']; ?>
" style="width:70px; height:70px;"/></td>
                        <td class="table_design_name"><?php echo $this->_tpl_vars['diss']['design_name']; ?>
</td>
                        <td class="table_order_number"><?php echo $this->_tpl_vars['diss']['order_number']; ?>
</td>
                        <td class="table_size"><?php echo $this->_tpl_vars['diss']['size']; ?>
</td>
                        <td class="table_total_qty"><?php echo $this->_tpl_vars['diss']['number']; ?>
</td>
                        <td class="table_price" style="background-color:#f2f2f2; text-align:right; justify-content: right; padding-right:10px;"><?php echo $this->_tpl_vars['diss']['price']; ?>
</td>
                        
                        <td class="table_setup_fee" style="background-color:#f2f2f2; text-align:right; justify-content: right;  padding-right:10px;"><?php echo $this->_tpl_vars['diss']['edition_price']; ?>
</td>
                        <td class="table_design_fee" style="background-color:#f2f2f2; text-align:right; justify-content: right;  padding-right:10px;"><?php echo $this->_tpl_vars['diss']['design_fee']; ?>
</td>
                        <td class="table_total" style="background-color:#f2f2f2; text-align:right; justify-content: right;  padding-right:10px;"><?php echo $this->_tpl_vars['diss']['bidding_price']; ?>
</td>
                    </tr>
                    <?php endif; ?>
                    <?php endforeach; endif; unset($_from); ?>
                </table>
            </div>
        </div>
        <div class="invoice_div">
        	<div class="invoice_div_left">
                <div class="invoice_payment_k" style="margin-top:20px;">
                    <div class="invoice_payment_k_div">
                        <div class="invoice_payment_k_div_title">Payment Method: <span style="font-weight: normal; color: #666;">PayPay/Wire Transfer</span></div>
                        <div class="invoice_payment_k_div_title">Shipping: <span style="font-weight: normal; color: #666;">UPS/DHL/FEDEX</span></div>
                    </div>
                </div>
            </div>
            <div class="invoice_div_right">
            	<div class="incoice_div_right_money">
                    <div class="invoice_div_right_div">
                        <div class="invoice_div_right_div_1">Sub-Total :</div>
                        <div class="invoice_div_right_div_2"><?php echo $this->_tpl_vars['due']; ?>
</div>
                    </div>
            	</div>
                <div class="invoice_div_right_total">
                	<div class="invoice_div_right_total_1">Invoice Total :</div>
                    <div class="invoice_div_right_total_2"><?php echo $this->_tpl_vars['sub_total']; ?>
</div>
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
                <div class="design_imgK_lala"><img src="<?php echo $this->_tpl_vars['dis']['upload_jpg']; ?>
" /></div>
            </div>
            <div class="design_lala_jieshao">
                <?php $_from = $this->_tpl_vars['dis']['module_select']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k1'] => $this->_tpl_vars['ms']):
?>
                    <?php if ($this->_tpl_vars['k1'] == 'Special Craft'): ?>
                        <!--<div class="design_lala_jieshao_title"><?php echo $this->_tpl_vars['k1']; ?>
</div>-->
                        <div class="design_lala_jieshao_list">
                            <ul>
                            <?php $_from = $this->_tpl_vars['ms']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k2'] => $this->_tpl_vars['m']):
?>
                                <li>
                                    <img src="<?php echo $this->_tpl_vars['m']['image']; ?>
" />
                                    <font><?php echo $this->_tpl_vars['m']['en_name']; ?>
</font>
                                </li>
                            <?php endforeach; endif; unset($_from); ?>
                        </div>
                    <?php endif; ?>
                <?php endforeach; endif; unset($_from); ?>
            </div>
            <div class="design_lala_hui">
                <div class="design_hui_div">
                    <font style="color:#980013; font-weight:bold;">Fabrics and Accessories:</font><br />
                    <?php $_from = $this->_tpl_vars['dis']['module_select']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k1'] => $this->_tpl_vars['ms']):
?>
                        <?php if ($this->_tpl_vars['k1'] == 'Fabrics'): ?>
                            <div class="design_hui_div_material">
                                <b><?php echo $this->_tpl_vars['k1']; ?>
</b><br />
                                <?php $_from = $this->_tpl_vars['ms']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k2'] => $this->_tpl_vars['m']):
?>
                                    <div class="design_hui_div_material_list">
                                        <?php if ($this->_tpl_vars['m']['text'] != ''): ?>
                                            <font style="float:left; margin-top:1px;"><?php echo $this->_tpl_vars['m']['text']; ?>
 - <?php echo $this->_tpl_vars['m']['en_name']; ?>
</font>
                                        <?php else: ?>
                                            <?php if ($this->_tpl_vars['m']['pantone'] != ''): ?>
                                                <font style="float:left; margin-top:1px; width:20px; height:20px; background-color:rgb(<?php echo $this->_tpl_vars['m']['color']; ?>
)"></font>
                                                <font style="float:left; margin-left:5px;">- <?php echo $this->_tpl_vars['m']['pantone']; ?>
</font>
                                            <?php elseif ($this->_tpl_vars['m']['cmyk'] != ''): ?>
                                                <font style="float:left; margin-top:1px; width:20px; height:20px; background-color:<?php echo $this->_tpl_vars['m']['color']; ?>
;"></font>
                                                <font style="float:left; margin-left:5px;">- <?php echo $this->_tpl_vars['m']['cmyk']; ?>
</font>
                                            <?php else: ?>
                                                <font style="float:left; margin-top:1px;"><img src="<?php echo $this->_tpl_vars['m']['image']; ?>
" width="20px" height="20px" /></font>
                                                <font style="float:left; margin-left:5px;">- <?php echo $this->_tpl_vars['m']['en_name']; ?>
</font>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                        <font style="float:left; margin-left:5px;">- <?php echo $this->_tpl_vars['m']['module_en_name']; ?>
</font>
                                    </div>
                                <?php endforeach; endif; unset($_from); ?>
                            </div>
                        <?php endif; ?>
                        
                        <?php if ($this->_tpl_vars['k1'] == 'Accessories'): ?>
                            <div class="design_hui_div_material">
                                <b><?php echo $this->_tpl_vars['k1']; ?>
</b><br />
                                <?php $_from = $this->_tpl_vars['ms']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k2'] => $this->_tpl_vars['m']):
?>
                                    <div class="design_hui_div_material_list">
                                        <?php if ($this->_tpl_vars['m']['text'] != ''): ?>
                                            <font style="float:left; margin-top:1px;"><?php echo $this->_tpl_vars['m']['text']; ?>
 - <?php echo $this->_tpl_vars['m']['en_name']; ?>
</font>
                                        <?php else: ?>
                                            <?php if ($this->_tpl_vars['m']['pantone'] != ''): ?>
                                                <font style="float:left; margin-top:1px; width:20px; height:20px; background-color:rgb(<?php echo $this->_tpl_vars['m']['color']; ?>
)"></font>
                                                <font style="float:left; margin-left:5px;">- <?php echo $this->_tpl_vars['m']['pantone']; ?>
</font>
                                            <?php elseif ($this->_tpl_vars['m']['cmyk'] != ''): ?>
                                                <font style="float:left; margin-top:1px; width:20px; height:20px; background-color:<?php echo $this->_tpl_vars['m']['color']; ?>
;"></font>
                                                <font style="float:left; margin-left:5px;">- <?php echo $this->_tpl_vars['m']['cmyk']; ?>
</font>
                                            <?php else: ?>
                                                <font style="float:left; margin-top:1px;"><img src="<?php echo $this->_tpl_vars['m']['image']; ?>
" width="20px" height="20px" /></font>
                                                <font style="float:left; margin-left:5px;">- <?php echo $this->_tpl_vars['m']['en_name']; ?>
</font>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                        <font style="float:left; margin-left:5px;">- <?php echo $this->_tpl_vars['m']['module_en_name']; ?>
</font>
                                    </div>
                                <?php endforeach; endif; unset($_from); ?>
                            </div>
                        <?php endif; ?>
                        
                    <?php endforeach; endif; unset($_from); ?>
                </div>
            </div>
            <?php if ($this->_tpl_vars['dis']['design_content_image']): ?>
            <div class="design_lala_hui" style="float:right">
                <div class="design_hui_div">
                    <font style="color:#980013; font-weight:bold;">Logo:</font><br />
                    <?php $_from = $this->_tpl_vars['dis']['design_content_image']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['km'] => $this->_tpl_vars['dci']):
?>
                	<div class="design_hui_div_logoK" <?php if ($this->_tpl_vars['km'] == 0): ?>style="margin-left:0px;"<?php endif; ?>>
                    	<?php if ($this->_tpl_vars['dci']['image_name'] == 'logo'): ?>
                        	<div class="design_hui_div_logo"><img src="<?php echo $this->_tpl_vars['dci']['link']; ?>
" /></div>
                            <?php $_from = $this->_tpl_vars['dis']['module_select']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k1'] => $this->_tpl_vars['ms']):
?>
                                <?php if ($this->_tpl_vars['k1'] == 'Logo'): ?>
                                    <div class="design_hui_div_logo_material">
                                        <b><?php echo $this->_tpl_vars['k1']; ?>
</b><br />
                                        <?php $_from = $this->_tpl_vars['ms']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k2'] => $this->_tpl_vars['m']):
?>
                                            <div class="design_hui_div_material_list">
                                                <?php if ($this->_tpl_vars['m']['text'] != ''): ?>
                                                    <font style="float:left; margin-top:1px;"><?php echo $this->_tpl_vars['m']['text']; ?>
 - <?php echo $this->_tpl_vars['m']['en_name']; ?>
</font>
                                                <?php else: ?>
                                                    <?php if ($this->_tpl_vars['m']['pantone'] != ''): ?>
                                                        <font style="float:left; margin-top:1px; width:20px; height:20px; background-color:rgb(<?php echo $this->_tpl_vars['m']['color']; ?>
)"></font>
                                                        <font style="float:left; margin-left:5px;">- <?php echo $this->_tpl_vars['m']['pantone']; ?>
</font>
                                                    <?php elseif ($this->_tpl_vars['m']['cmyk'] != ''): ?>
                                                        <font style="float:left; margin-top:1px; width:20px; height:20px; background-color:<?php echo $this->_tpl_vars['m']['color']; ?>
;"></font>
                                                        <font style="float:left; margin-left:5px;">- <?php echo $this->_tpl_vars['m']['cmyk']; ?>
</font>
                                                    <?php else: ?>
                                                        <font style="float:left; margin-top:1px;"><img src="<?php echo $this->_tpl_vars['m']['image']; ?>
" width="20px" height="20px" /></font>
                                                        <font style="float:left; margin-left:5px;"> - <?php echo $this->_tpl_vars['m']['en_name']; ?>
</font>
                                                    <?php endif; ?>
                                                <?php endif; ?>
                                                <font style="float:left; margin-left:5px;"> - <?php echo $this->_tpl_vars['m']['module_en_name']; ?>
</font>
                                            </div>
                                        <?php endforeach; endif; unset($_from); ?>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; endif; unset($_from); ?>
                        <?php elseif ($this->_tpl_vars['dci']['image_name'] == 'logo_2'): ?>
                        	<div class="design_hui_div_logo"><img src="<?php echo $this->_tpl_vars['dci']['link']; ?>
" /></div>
                            <?php $_from = $this->_tpl_vars['dis']['module_select']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k1'] => $this->_tpl_vars['ms']):
?>
                                <?php if ($this->_tpl_vars['k1'] == 'Logo 2'): ?>
                                    <div class="design_hui_div_logo_material">
                                        <b><?php echo $this->_tpl_vars['k1']; ?>
</b><br />
                                        <?php $_from = $this->_tpl_vars['ms']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k2'] => $this->_tpl_vars['m']):
?>
                                            <div class="design_hui_div_material_list">
                                                <?php if ($this->_tpl_vars['m']['text'] != ''): ?>
                                                    <font style="float:left; margin-top:1px;"><?php echo $this->_tpl_vars['m']['text']; ?>
 - <?php echo $this->_tpl_vars['m']['en_name']; ?>
</font>
                                                <?php else: ?>
                                                    <?php if ($this->_tpl_vars['m']['pantone'] != ''): ?>
                                                        <font style="float:left; margin-top:1px; width:20px; height:20px; background-color:rgb(<?php echo $this->_tpl_vars['m']['color']; ?>
)"></font>
                                                        <font style="float:left; margin-left:5px;">- <?php echo $this->_tpl_vars['m']['pantone']; ?>
</font>
                                                    <?php elseif ($this->_tpl_vars['m']['cmyk'] != ''): ?>
                                                        <font style="float:left; margin-top:1px; width:20px; height:20px; background-color:<?php echo $this->_tpl_vars['m']['color']; ?>
;"></font>
                                                        <font style="float:left; margin-left:5px;">- <?php echo $this->_tpl_vars['m']['cmyk']; ?>
</font>
                                                    <?php else: ?>
                                                        <font style="float:left; margin-top:1px;"><img src="<?php echo $this->_tpl_vars['m']['image']; ?>
" width="20px" height="20px" /></font>
                                                        <font style="float:left; margin-left:5px;"> - <?php echo $this->_tpl_vars['m']['en_name']; ?>
</font>
                                                    <?php endif; ?>
                                                <?php endif; ?>
                                                <font style="float:left; margin-left:5px;"> - <?php echo $this->_tpl_vars['m']['module_en_name']; ?>
</font>
                                            </div>
                                        <?php endforeach; endif; unset($_from); ?>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; endif; unset($_from); ?>
                        <?php elseif ($this->_tpl_vars['dci']['image_name'] == 'logo_3'): ?>
                        	<div class="design_hui_div_logo"><img src="<?php echo $this->_tpl_vars['dci']['link']; ?>
" /></div>
                            <?php $_from = $this->_tpl_vars['dis']['module_select']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k1'] => $this->_tpl_vars['ms']):
?>
                                <?php if ($this->_tpl_vars['k1'] == 'Logo 3'): ?>
                                    <div class="design_hui_div_logo_material">
                                        <b><?php echo $this->_tpl_vars['k1']; ?>
</b><br />
                                        <?php $_from = $this->_tpl_vars['ms']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k2'] => $this->_tpl_vars['m']):
?>
                                            <div class="design_hui_div_material_list">
                                                <?php if ($this->_tpl_vars['m']['text'] != ''): ?>
                                                    <font style="float:left; margin-top:1px;"><?php echo $this->_tpl_vars['m']['text']; ?>
 - <?php echo $this->_tpl_vars['m']['en_name']; ?>
</font>
                                                <?php else: ?>
                                                    <?php if ($this->_tpl_vars['m']['pantone'] != ''): ?>
                                                        <font style="float:left; margin-top:1px; width:20px; height:20px; background-color:rgb(<?php echo $this->_tpl_vars['m']['color']; ?>
)"></font>
                                                        <font style="float:left; margin-left:5px;">- <?php echo $this->_tpl_vars['m']['pantone']; ?>
</font>
                                                    <?php elseif ($this->_tpl_vars['m']['cmyk'] != ''): ?>
                                                        <font style="float:left; margin-top:1px; width:20px; height:20px; background-color:<?php echo $this->_tpl_vars['m']['color']; ?>
;"></font>
                                                        <font style="float:left; margin-left:5px;">- <?php echo $this->_tpl_vars['m']['cmyk']; ?>
</font>
                                                    <?php else: ?>
                                                        <font style="float:left; margin-top:1px;"><img src="<?php echo $this->_tpl_vars['m']['image']; ?>
" width="20px" height="20px" /></font>
                                                        <font style="float:left; margin-left:5px;"> - <?php echo $this->_tpl_vars['m']['en_name']; ?>
</font>
                                                    <?php endif; ?>
                                                <?php endif; ?>
                                                <font style="float:left; margin-left:5px;"> - <?php echo $this->_tpl_vars['m']['module_en_name']; ?>
</font>
                                            </div>
                                        <?php endforeach; endif; unset($_from); ?>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; endif; unset($_from); ?>
                        <?php endif; ?>
                    </div>
                <?php endforeach; endif; unset($_from); ?>
                </div>
            </div>
            <?php endif; ?>
            <?php endforeach; endif; unset($_from); ?>
        </div>
        
        
        <div class="invoice_div">
        	<div class="invoice_div_footer">
            	www.cstown.com
            </div>
        </div>
        <?php if ($this->_tpl_vars['invoice_pdf_btn']): ?>
        	<form method="post" id="quote_form1" style="width:100%;" action="<?php echo $this->_tpl_vars['act_pdf']; ?>
" class="pageForm" enctype="multipart/form-data" >
            <input type="hidden" name="invoice_id" value="<?php echo $this->_tpl_vars['ids']; ?>
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