<?php /* Smarty version 2.6.22, created on 2014-12-15 17:13:29
         compiled from factory_order/export_doinvoice.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/jquery-1.7.2.min.js" type="text/javascript"></script>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>做货单</title>
<link href="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/css/cstown_sys.css" rel="stylesheet" type="text/css" media="screen"/>
</head>


<body>
	<div class="wrap">
    <form method="post" id="export_doinvoice" style="width:100%; " action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" enctype="multipart/form-data" />
    <input type="hidden" name="ids" value="<?php echo $this->_tpl_vars['ids']; ?>
" /> 
    	<div class="QuoteK" >
       	  <div class="quoteK_l" style="margin-top:30px;">
       	    <div class="quoteK_l_logo"><img src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/image/small_logo.png" alt="cstown" />
       	    </div>
            <div class="quoteK_txt01">
              <div class="quote_txt01_div">
                <div class="quote_txt01_div_l">时间</div>
                <div class="quote_txt01_div_r">
                	<input type="text" value="<?php echo $this->_tpl_vars['time']; ?>
" name="time" class="quote_txt01_div_r_txt" />
                </div>
              </div>
              
              <div class="quote_txt01_div">
                <div class="quote_txt01_div_l">业务员</div>
                <div class="quote_txt01_div_r">
                	<input type="text" value="<?php echo $this->_tpl_vars['saleman_name']; ?>
" class="quote_txt01_div_r_txt" />
                </div>
              </div>
              <div class="quote_txt01_div">
                <div class="quote_txt01_div_l">优先级</div>
                <div class="quote_txt01_div_r">
                	<input type="text" value="<?php echo $this->_tpl_vars['youxian_status']; ?>
" class="quote_txt01_div_r_txt" />
                </div>
              </div>              
               <div class="quote_txt01_div">
                <div class="quote_txt01_div_l">订单属性</div>
                <div class="quote_txt01_div_r">
                	<input type="text" value="<?php echo $this->_tpl_vars['status']; ?>
" class="quote_txt01_div_r_txt" />
                </div>
              </div>
              <div class="quote_txt01_div">
                <div class="quote_txt01_div_l">订单号</div>
                <div class="quote_txt01_div_r">
                	<input type="text" value="<?php echo $this->_tpl_vars['order_number']; ?>
" class="quote_txt01_div_r_txt" />
                </div>
              </div>
              
              <div class="quote_txt01_div">
                <div class="quote_txt01_div_l">返单号</div>
                <div class="quote_txt01_div_r">
                	<input type="text" value="<?php echo $this->_tpl_vars['return_number']; ?>
" class="quote_txt01_div_r_txt" />
                </div>
              </div>
              
              <div class="quote_txt01_div">
                <div class="quote_txt01_div_l">客户提供单号</div>
                <div class="quote_txt01_div_r">
                	<input type="text" value="<?php echo $this->_tpl_vars['customer_number']; ?>
" class="quote_txt01_div_r_txt" />
                </div>
              </div>
              
              <div class="quote_txt01_div">
                <div class="quote_txt01_div_l">客户代码</div>
                <div class="quote_txt01_div_r">
                	<input type="text" value="<?php echo $this->_tpl_vars['customer_code']; ?>
" class="quote_txt01_div_r_txt" />
                </div>
              </div>
              
              <div class="quote_txt01_div">
                <div class="quote_txt01_div_l">发货期</div>
                <div class="quote_txt01_div_r">
                	<input type="text" value="<?php echo $this->_tpl_vars['delivery_time']; ?>
" name="delivery_time" class="quote_txt01_div_r_txt" />
                </div>
              </div>
              
              <div class="quote_txt01_div">
                <div class="quote_txt01_div_l">胶纸种类</div>
                <div class="quote_txt01_div_r">
                	<input type="text" value="<?php echo $this->_tpl_vars['tapedata_id']; ?>
" class="quote_txt01_div_r_txt" />
                </div>
              </div>
              
              <div class="quote_txt01_div">
                <div class="quote_txt01_div_l">胶纸尺寸</div>
                <div class="quote_txt01_div_r">
                	<input type="text" value="<?php echo $this->_tpl_vars['tapedata_formula']; ?>
" class="quote_txt01_div_r_txt" />
                </div>
              </div>
              
              <div class="quote_txt01_div">
                <div class="quote_txt01_div_l">设计名称</div>
                <div class="quote_txt01_div_r">
                	<input type="text" value="<?php echo $this->_tpl_vars['design_pic_name']; ?>
" class="quote_txt01_div_r_txt" />
                </div>
              </div>
              
              <div class="quote_txt01_div">
                <div class="quote_txt01_div_l">尺寸</div>
                <div class="quote_txt01_div_r">
                	<select name="size">
                    	
                        <option value="<?php echo $this->_tpl_vars['cm_w1']; ?>
*<?php echo $this->_tpl_vars['cm_h1']; ?>
cm"><?php echo $this->_tpl_vars['cm_w1']; ?>
*<?php echo $this->_tpl_vars['cm_h1']; ?>
cm</option>
                        <option value="<?php echo $this->_tpl_vars['inch_w1']; ?>
*<?php echo $this->_tpl_vars['inch_h1']; ?>
inch"><?php echo $this->_tpl_vars['inch_w1']; ?>
*<?php echo $this->_tpl_vars['inch_h1']; ?>
inch</option>
                    </select> 
                </div>
              </div>
              
              <div class="quote_txt01_div">
                <div class="quote_txt01_div_l">数量</div>
                <div class="quote_txt01_div_r">
                	<input type="text" value="<?php echo $this->_tpl_vars['number']; ?>
" class="quote_txt01_div_r_txt" />
                </div>
              </div>
              
              <div class="quote_txt01_div">
                <div class="quote_txt01_div_l">备损数量</div>
                <div class="quote_txt01_div_r">
                	<input type="text" value="<?php echo $this->_tpl_vars['preparation_number']; ?>
" class="quote_txt01_div_r_txt" />
                </div>
              </div>
              
              <div class="quote_txt01_div">
                <div class="quote_txt01_div_l">烫压测试</div>
                <div class="quote_txt01_div_r">
                <?php if ($this->_tpl_vars['hot_test'] == '1'): ?>
                	<input type="text" value="是" class="quote_txt01_div_r_txt" readonly="readonly" />
                <?php elseif ($this->_tpl_vars['hot_test'] == '2'): ?>
                	<input type="text" value="否" class="quote_txt01_div_r_txt" readonly="readonly" />
                <?php else: ?>
                    <input type="text" value="否" class="quote_txt01_div_r_txt" readonly="readonly" />
                <?php endif; ?>
                </div>
              </div>
            </div>
              
       	  </div>
           &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <?php echo $this->_tpl_vars['image1']; ?>

<input type="hidden" name="chang_1" value="<?php echo $this->_tpl_vars['chang_1']; ?>
" />
<input type="hidden" name="name" value="<?php echo $this->_tpl_vars['name']; ?>
" />
<input type="hidden" name="w" value="<?php echo $this->_tpl_vars['w']; ?>
" />
<input type="hidden" name="h" value="<?php echo $this->_tpl_vars['h']; ?>
" />

       	  <div class="quoteK_r" style="margin-top:30px;">
       	    <div class="quoteK_r_title">Purchase Order</div>
            <?php if ($this->_tpl_vars['quotation_category'] != '3'): ?>
            <div class="quoteK_r_img"><img src="<?php echo $this->_tpl_vars['image']; ?>
" width="253" height="354" /></div>
            <input type="hidden" name="image" value="<?php echo $this->_tpl_vars['image']; ?>
" />
        
            <?php endif; ?>
            
           <div style="float:left; margin-left:15px; margin-top:10px;"><img src="<?php echo $this->_tpl_vars['chang_1']; ?>
"></div>
           <div style="float:left; width:230px; margin-top:10px; text-align:center;"><?php echo $this->_tpl_vars['name']; ?>
</div>
           <div style="float:left; width:230px; margin-top:10px; text-align:center;">W:<?php echo $this->_tpl_vars['w']; ?>
 H:<?php echo $this->_tpl_vars['h']; ?>
</div>
       	  </div>
       	  <div class="sIE_l_03" style="margin-top:20px;">
                	<table cellspacing="0" class="sIE_l_03Tab">
                    	<tr>
                        	<th>材料名称</th>
                            <th>颜色</th>
                            <th>尺寸</th>
                            <th>数量(单)</th>
                            <th>数量(总)</th>
                            <?php if ($this->_tpl_vars['material_status'] == '1'): ?>
                               <th>备损数量</th>
                            <?php endif; ?>
                        </tr>
                        <?php $_from = $this->_tpl_vars['color_array']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['dis']):
?>
                            <tr>
                                <td><?php echo $this->_tpl_vars['dis']['material_name']; ?>
</td>
                                <td><?php echo $this->_tpl_vars['dis']['material_color']; ?>
</td>
                                <td><?php echo $this->_tpl_vars['dis']['material_size']; ?>
</td>
                                <td><?php echo $this->_tpl_vars['dis']['material_quantity']; ?>
</td>
                                <td><?php echo $this->_tpl_vars['dis']['material_num_quantity']; ?>
</td>
                                <?php if ($this->_tpl_vars['material_status'] == '1'): ?>
                                    <td><?php echo $this->_tpl_vars['dis']['shuliang']; ?>
</td>
                                <?php endif; ?>    
                            </tr>
                        <?php endforeach; endif; unset($_from); ?>
                    </table>
                    
              <div style="float:left; width:100%; margin-top:10px;">      
<!--             	<textarea class="add01_textarea" style="width:588px; margin-bottom:10px;" name="remark" disabled="disabled"><?php echo $this->_tpl_vars['remark']; ?>
</textarea>-->
             </div> 
             <!--<div style="float:left; width:100%; margin-top:10px;">      
             	<textarea class="add01_textarea" style="width:588px; margin-bottom:10px;" name="sale_remark" disabled="disabled"><?php echo $this->_tpl_vars['sale_remark']; ?>
</textarea>
             </div>-->       	  
             </div>
    
          <input type="submit" class="quoteK_bottom01_button" id="pdf_01" value="导出PDF" />
          <input type="button"  class="quoteK_bottom01_button" value="返回" />
        </div>
        </form>
</div>
</body>
</html>
<script type="text/javascript">
$("#pdf_01").click(function(){	
	$("#export_doinvoice").submit();
});
</script>