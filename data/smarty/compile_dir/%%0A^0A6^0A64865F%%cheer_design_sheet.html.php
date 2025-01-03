<?php /* Smarty version 2.6.22, created on 2024-08-27 15:39:14
         compiled from procure_outgoing/cheer_design_sheet.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/jquery-1.7.2.min.js" type="text/javascript"></script>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php if ($this->_tpl_vars['order']['outgoing_status'] == 1): ?>外发询价单<?php elseif ($this->_tpl_vars['order']['outgoing_status'] >= 3): ?>外发做货单<?php endif; ?></title>
<link href="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/css/cstown_sys.css" rel="stylesheet" type="text/css" media="screen"/>
</head>


<body>
<div class="wrap">
	<div class="invoice_newK">
    	<div class="invoice_div">
    		<div class="invoice_div_title_left orange_style"><?php if ($this->_tpl_vars['order']['outgoing_status'] == 1): ?>询价单<?php elseif ($this->_tpl_vars['order']['outgoing_status'] >= 3): ?>做货单<?php endif; ?></div>
    		<!--<div class="invoice_div_title_right"><img src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/image/xiaobu_logo.png" width="160px" alt="cstown" /></div>-->
    		<div class="sale_div orange_style_bg"><!--<b>采购员:</b> <b><?php echo $this->_tpl_vars['pdf_user_name']; ?>
</b> &nbsp;&nbsp;&nbsp;&nbsp;0411-39719170 &nbsp;&nbsp;&nbsp;&nbsp; 小布涂涂文化创意（大连）股份有限公司 大连市高新园区七贤岭任贤街13号4层-->&nbsp;</div>
    	</div>
    	<div class="invoice_div" style="margin-top: 20px;">
        	<div class="xunjia_table">
            	<ul>
                	<li>时间：<?php echo $this->_tpl_vars['order']['q_time']; ?>
</li>
                    <?php if ($this->_tpl_vars['order']['outgoing_status'] >= 3): ?>
                    	<li>发货时间：<?php echo $this->_tpl_vars['order']['estimated_time']; ?>
</li>
                        <li>订单号：<?php echo $this->_tpl_vars['order']['order_number']; ?>
</li>
                    <?php endif; ?>
                    <li>做货类型：<?php echo $this->_tpl_vars['order']['goods_type']; ?>
</li>
                    <li>业务员：<?php echo $this->_tpl_vars['english_name']; ?>
</li>
                    <li>公司代码：<?php echo $this->_tpl_vars['company_code']; ?>
</li>
                    <!--<li>供应商：<?php echo $this->_tpl_vars['order']['supplier_code']; ?>
</li>
                    <li>设计版号：<?php echo $this->_tpl_vars['order']['quotation_code']; ?>
</li>-->
                    <!--<li>交货期：<?php echo $this->_tpl_vars['order']['deliver_goods']; ?>
</li>
                    <li>报关类型：<?php echo $this->_tpl_vars['c_name']; ?>
</li>
                    <li style="width: 100%;">设计名称：<?php echo $this->_tpl_vars['order']['design_name']; ?>
</li>-->
                </ul>
            </div>
    	</div>
        
        <div class="invoice_div" style="margin-top: 20px;">
        	<div class="xunjia_table_left">
            
            <?php if ($this->_tpl_vars['order']['clothing'] == 67): ?>
            	<?php if ($this->_tpl_vars['basic_category_list']): ?>
                	<table class="size_table">
                    	<tr>
                        	<th>尺码</th>
                            <?php $_from = $this->_tpl_vars['basic_category_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['bcl']):
?>
                            <th><?php echo $this->_tpl_vars['bcl']['cn_name']; ?>
</th>
                            <?php endforeach; endif; unset($_from); ?>
                        </tr>
                        <?php $_from = $this->_tpl_vars['size_chart_list_array']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['scl']):
?>
                        	<tr>
                            	<td><?php echo $this->_tpl_vars['scl']['size']; ?>
</td>
                                <?php $_from = $this->_tpl_vars['basic_category_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k2'] => $this->_tpl_vars['bcl']):
?>
                                <td><?php echo $this->_tpl_vars['scl'][$this->_tpl_vars['k2']]; ?>
</td>
                                <?php endforeach; endif; unset($_from); ?>
                            </tr>
                        <?php endforeach; endif; unset($_from); ?>
                        <tr>
                        	<td>总计</td>
                            <?php $_from = $this->_tpl_vars['basic_category_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['bcl']):
?>
                            <td><?php echo $this->_tpl_vars['bcl']['heji']; ?>
</td>
                            <?php endforeach; endif; unset($_from); ?>
                        </tr>
                    </table>
                    
                <?php endif; ?>
            
            <?php else: ?>
            	<div class="xunjia_table_title">尺码</div>
                	<?php if ($this->_tpl_vars['quotation_size_chart']): ?>
                    <table class="size_table">
                        <tr>
                            <th>尺码</th>
                            <th>数量</th>
                            <th>颜色</th>
                        </tr>
                        <?php $_from = $this->_tpl_vars['quotation_size_chart']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['qsc']):
?>
                        <tr>
                            <td><?php echo $this->_tpl_vars['qsc']['basic_size_id']; ?>
</td>
                            <td><?php echo $this->_tpl_vars['qsc']['amount']; ?>
</td>
                            <td><?php echo $this->_tpl_vars['qsc']['color']; ?>
</td>

                        </tr>
                        <?php endforeach; endif; unset($_from); ?>
                        <tr>
                        	<td colspan="3" align="center">总计: <?php echo $this->_tpl_vars['order']['number']; ?>
</td>
                        </tr>
                    </table>
                    <?php endif; ?>
                <div style=" width:100%; float:left; background-color:#ea4609; padding:5px; color:#FFF; box-sizing:border-box; display:none;">总数量：<?php echo $this->_tpl_vars['order']['number']; ?>
</div>
            <?php endif; ?>
            <!--<div style=" width:100%; float:left; background-color:#ea4609; padding:5px; color:#FFF; box-sizing:border-box; display:none;">总数量：<?php echo $this->_tpl_vars['order']['number']; ?>
</div>-->
            </div>
            <div class="xunjia_table_right">
            	<div class="xunjia_table_title">备注</div>
                <div class="xunjia_table_right_tab"><?php echo $this->_tpl_vars['order']['remark']; ?>
</div>
            </div>
    	</div>
        
        <?php $_from = $this->_tpl_vars['design_content_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['dis']):
?>
        <div class="invoice_div" style="margin-top: 20px;">
            <div class="design_imgK_lala"><img src="<?php echo $this->_tpl_vars['dis']['upload_jpg']; ?>
" /></div>
        </div>
        <div class="design_lala_jieshao">
            <?php $_from = $this->_tpl_vars['dis']['module_select']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k1'] => $this->_tpl_vars['ms']):
?>
                <?php if ($this->_tpl_vars['k1'] == 'Special Craft'): ?>
                    <!--<div class="design_lala_jieshao_title">特殊工艺</div>-->
                    <div class="design_lala_jieshao_list">
                        <ul>
                        <?php $_from = $this->_tpl_vars['ms']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k2'] => $this->_tpl_vars['m']):
?>
                            <li>
                                <img src="<?php echo $this->_tpl_vars['m']['image']; ?>
" />
                                <font><?php echo $this->_tpl_vars['m']['cn_name']; ?>
</font>
                            </li>
                        <?php endforeach; endif; unset($_from); ?>
                    </div>
                <?php endif; ?>
            <?php endforeach; endif; unset($_from); ?>
        </div>
        <div class="design_lala_hui">
        	<div class="design_hui_div">
                <font style="color:#980013; font-weight:bold;">面料和辅料:</font><br />
                <?php $_from = $this->_tpl_vars['dis']['module_select']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k1'] => $this->_tpl_vars['ms']):
?>
                	<?php if ($this->_tpl_vars['k1'] == 'Fabrics'): ?>
                    	<div class="design_hui_div_material">
                            <b>面料</b><br />
                            <?php $_from = $this->_tpl_vars['ms']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k2'] => $this->_tpl_vars['m']):
?>
                                <div class="design_hui_div_material_list">
                                	<?php if ($this->_tpl_vars['m']['text'] != ''): ?>
                                    	<font style="float:left; margin-top:1px;"><?php echo $this->_tpl_vars['m']['text']; ?>
 - <?php echo $this->_tpl_vars['m']['cn_name']; ?>
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
                                            <font style="float:left; margin-left:5px;">- <?php echo $this->_tpl_vars['m']['cn_name']; ?>
</font>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                    <font style="float:left; margin-left:5px;">- <?php echo $this->_tpl_vars['m']['module_cn_name']; ?>
</font>
                                </div>
                            <?php endforeach; endif; unset($_from); ?>
                        </div>
                    <?php endif; ?>
                    
                    <?php if ($this->_tpl_vars['k1'] == 'Accessories'): ?>
                    	<div class="design_hui_div_material">
                            <b>辅料</b><br />
                            <?php $_from = $this->_tpl_vars['ms']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k2'] => $this->_tpl_vars['m']):
?>
                                <div class="design_hui_div_material_list">
                                	<?php if ($this->_tpl_vars['m']['text'] != ''): ?>
                                    	<font style="float:left; margin-top:1px;"><?php echo $this->_tpl_vars['m']['text']; ?>
 - <?php echo $this->_tpl_vars['m']['cn_name']; ?>
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
                                        <?php else: ?>
                                        	<font style="float:left; margin-top:1px;"><img src="<?php echo $this->_tpl_vars['m']['image']; ?>
" width="20px" height="20px" /></font>
                                            <font style="float:left; margin-left:5px;">- <?php echo $this->_tpl_vars['m']['cn_name']; ?>
</font>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                    <font style="float:left; margin-left:5px;">- <?php echo $this->_tpl_vars['m']['module_cn_name']; ?>
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
 - <?php echo $this->_tpl_vars['m']['cn_name']; ?>
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
                                                        <font style="float:left; margin-left:5px;"> - <?php echo $this->_tpl_vars['m']['cn_name']; ?>
</font>
                                                    <?php endif; ?>
                                                <?php endif; ?>
                                                <font style="float:left; margin-left:5px;"> - <?php echo $this->_tpl_vars['m']['module_cn_name']; ?>
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
 - <?php echo $this->_tpl_vars['m']['cn_name']; ?>
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
                                                        <font style="float:left; margin-left:5px;"> - <?php echo $this->_tpl_vars['m']['cn_name']; ?>
</font>
                                                    <?php endif; ?>
                                                <?php endif; ?>
                                                <font style="float:left; margin-left:5px;"> - <?php echo $this->_tpl_vars['m']['module_cn_name']; ?>
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
 - <?php echo $this->_tpl_vars['m']['cn_name']; ?>
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
                                                        <font style="float:left; margin-left:5px;"> - <?php echo $this->_tpl_vars['m']['cn_name']; ?>
</font>
                                                    <?php endif; ?>
                                                <?php endif; ?>
                                                <font style="float:left; margin-left:5px;"> - <?php echo $this->_tpl_vars['m']['module_cn_name']; ?>
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
        
        <div class="sale_div orange_style_bg">&nbsp;</div>
        <!--<div class="invoice_div">
        	<div class="invoice_div_footer orange_style_bg">
            	www.cstowncheer.com
            </div>
        </div>-->
        <?php if ($this->_tpl_vars['invoice_pdf_btn']): ?>
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