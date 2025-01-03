<?php /* Smarty version 2.6.22, created on 2017-01-13 10:05:07
         compiled from procure_outgoing/generate_outgoing_do_invoice.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>外发做货单</title>
<link href="../../public/css/cstown_sys.css" rel="stylesheet" type="text/css" media="screen"/>
</head>

<body>
	<div class="QuoteK" style="font-family:'黑体';">
    	<div class="BuyLeads_title">
        	<font style="font-size:16px;">小布涂涂文化创意（大连）股份有限公司</font><br />
            辽宁省大连市高新园区七贤岭任贤街13号4楼<br />
            电话:0411-39769171 传真:39799355
        </div>
        <div class="BuyLeads_title" style="margin-top:10px;">
        	<font style="font-size:16px;">做货单</font><br />
        </div>
          <form method="post" id="generate_outgoing_do_invoice" style="width:100%;" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" enctype="multipart/form-data"> 
          <input type="hidden" name="ids" value="<?php echo $this->_tpl_vars['ids']; ?>
" />  
	  <div class="sIE_l_03">
               	<table cellspacing="0" class="sIE_l_04Tab">
                        <tr>
                        	<th>供应商</th>
                            <td colspan="2">
                                <input type="text" name="gongyingshang" readonly="readonly" value="<?php echo $this->_tpl_vars['gongyingshang']; ?>
" /> 
                            </td>
                            <th>联系人</th>
                            <td colspan="2"><input type="text" name="lianxiren" readonly="readonly" value="<?php echo $this->_tpl_vars['lianxiren']; ?>
"  /></td>
                        </tr>
                        <tr>
                        	<th>下单人</th>
                            <td><?php echo $this->_tpl_vars['saleman_name']; ?>
</td>
                            <th>联系人</th>
                            <td>樊琳琳 0411-39719171</td>
                            <th>日期</th>
                            <td><?php echo $this->_tpl_vars['quotation_date']; ?>
</td>
                        </tr>
                        <tr>
                        	<th>订单种类</th>
                            <td><input type="text" name="order_type" size="10" readonly="readonly" value="<?php echo $this->_tpl_vars['order_type']; ?>
" /></td>
                            <th>订单号</th>
                            <td><?php echo $this->_tpl_vars['order_number']; ?>
</td>
                            <th>交货日期</th>
                            <td><?php echo $this->_tpl_vars['time']; ?>
小时</td>
                            <input type="hidden" name="time" value="<?php echo $this->_tpl_vars['time']; ?>
" />
                        </tr>
                        <tr>
                        	<th>款式</th>
                            <td colspan="5"><input type="text" name="kuanshi" readonly="readonly" value="<?php echo $this->_tpl_vars['kuanshi']; ?>
" style="width:480px; border:none; font-family:黑体; font-size:14px;" /></td>
                        </tr>
                        <tr>
                        	<th rowspan="7">订单种类</th>
                            <th>单价</th><input type="hidden" name="unit_price" value="<?php echo $this->_tpl_vars['unit_price']; ?>
" />
                            <input type="hidden" name="version_costs" value="<?php echo $this->_tpl_vars['version_costs']; ?>
" />
                            <td colspan="2" style="text-align:center;">RMB<?php echo $this->_tpl_vars['unit_price']; ?>
</td>
                            <th>版费</th>
                            <td colspan="2" style="text-align:center;">RMB<?php echo $this->_tpl_vars['version_costs']; ?>
</td>
                        </tr>
                        
                        <tr>
                            <th>数量</th>
                            <td colspan="4">
                            <font style="float:left;"><?php echo $this->_tpl_vars['pcs']; ?>
</font>
                            <input type="hidden" name="unit" value="<?php echo $this->_tpl_vars['unit']; ?>
" />
                            <select>
                            <?php if ($this->_tpl_vars['unit'] == '个'): ?>
                            	<option value="个" selected="selected">个</option>
                                <option value="张">张</option>
                                <option value="片">片</option>
                            <?php elseif ($this->_tpl_vars['unit'] == '张'): ?>
                            	<option value="个">个</option>
                                <option value="张" selected="selected">张</option>
                                <option value="片">片</option>
                            <?php elseif ($this->_tpl_vars['unit'] == '片'): ?>
                            	<option value="个">个</option>
                                <option value="张">张</option>
                                <option value="片" selected="selected">片</option>
                            <?php else: ?>
                            	<option value="个">个</option>
                                <option value="张">张</option>
                                <option value="片">片</option>
                            <?php endif; ?>
                            </select>
                            </td>
                        </tr>
                        <tr>
                            <th>总价</th>
                            <td colspan="4" style="text-align:center;">RMB<?php echo $this->_tpl_vars['whole_cost_price']; ?>
</td>
                            <input type="hidden" name="whole_cost_price" value="<?php echo $this->_tpl_vars['whole_cost_price']; ?>
" />
                        </tr>
                        <tr>
                            <th>尺寸</th> 
                            <td colspan="4">
                                <select name="size">
                                    <option value="<?php echo $this->_tpl_vars['cm_w1']; ?>
w * <?php echo $this->_tpl_vars['cm_h1']; ?>
h cm"><?php echo $this->_tpl_vars['cm_w1']; ?>
w * <?php echo $this->_tpl_vars['cm_h1']; ?>
h cm</option>
                                    <option value="<?php echo $this->_tpl_vars['inch_w1']; ?>
w * <?php echo $this->_tpl_vars['inch_h1']; ?>
h inch"><?php echo $this->_tpl_vars['inch_w1']; ?>
w * <?php echo $this->_tpl_vars['inch_h1']; ?>
h inch</option>
                                </select>                            
                            </td>
                        </tr>
                        
                        <tr>
                            <th>颜色</th>
                            <td colspan="4"><?php echo $this->_tpl_vars['color']; ?>
</td>
                            <input type="hidden" name="color" value="<?php echo $this->_tpl_vars['color']; ?>
" />
                        </tr>
                        <tr>
                            <th>要求</th>
                            <td colspan="4"><?php echo $this->_tpl_vars['note']; ?>
</td>
                            <input type="hidden" name="note" value="<?php echo $this->_tpl_vars['note']; ?>
" />
                        </tr>
                        <tr>
                            <th>备注</th>
                            <td colspan="4"><input type="text" name="note_2" value="<?php echo $this->_tpl_vars['note_2']; ?>
" style="width:480px; border:none; font-family:黑体; font-size:14px;" /></td>
                        </tr>
                        <tr>
                        	<th>图片</th>
                            <td colspan="5">
                                <img src="<?php echo $this->_tpl_vars['image']; ?>
" width="230" height="230" style="margin-left:12px; float:left;" />
                            </td>
                            <input type="hidden" name="image" value="<?php echo $this->_tpl_vars['image']; ?>
" />
                        </tr>
        </table>
        <div style="width:100%; float:left; line-height:26px; margin-top:10px;">
        	1.送货地址:辽宁省大连市高新园区七贤岭任贤街13号4楼 116085<br />
            2.供应商必须保证所提供商品的质量,颜色,规格和包装达到与采购商协定的标准。<br />
            3.供应商对价格,颜色,质量,规格,包装方面承担赔偿责任。<br />
        </div>
            <input type="submit"  class="quoteK_bottom01_button" onClick="export_pdf()" value="导出PDF" />
            <input type="button"  class="quoteK_bottom01_button" value="返回" />                   	  
      </div>
          
          
</div>
<script type="text/javascript">
function export_pdf(){
	$("#generate_outgoing_inquiry_sheet").submit();
}
</script>
</body>
</html>