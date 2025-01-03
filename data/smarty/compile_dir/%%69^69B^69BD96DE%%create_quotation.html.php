<?php /* Smarty version 2.6.22, created on 2013-06-20 14:59:02
         compiled from common_forms/create_quotation.html */ ?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>报价单</title>
<link href="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/css/cstown_sys.css" rel="stylesheet" type="text/css" media="screen"/>

<!-- pdf生成JS文件 -->
<!--<script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/pdfjs/jspdf.js" type="text/javascript"></script>
<script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/pdfjs/jspdf.plugin.addimage.js" type="text/javascript"></script>
<script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/pdfjs/jspdf.plugin.cell.js" type="text/javascript"></script>
<script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/pdfjs/jspdf.plugin.from_html.js" type="text/javascript"></script>
<script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/pdfjs/jspdf.plugin.ie_below_9_shim.js" type="text/javascript"></script>

<script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/pdfjs/jspdf.plugin.javascript.js" type="text/javascript"></script>
<script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/pdfjs/jspdf.plugin.sillysvgrenderer.js" type="text/javascript"></script>
<script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/pdfjs/jspdf.plugin.split_text_to_size.js" type="text/javascript"></script>
<script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/pdfjs/jspdf.plugin.standard_fonts_metrics.js" type="text/javascript"></script>
<script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/pdfjs/jspdf.PLUGINTEMPLATE.js" type="text/javascript"></script>-->

<!-- end -->

</head>

<body>
	<div class="QuoteK" style="font-family:'黑体';">
    	
        <div style="float:left; width:595px;">
        
       	  <div class="quoteK_l">
       	    <div class="quoteK_l_logo"><img src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/image/small_logo.png" alt="cstown" /></div>
            <div class="quoteK_l_txt">
            	<ul>
                	<li>sadfsadfasd</li>
                    <li>sadfsdafsda</li>
                    <li>sadfdsaf</li>
                    <li>sadfsadf sadfsadf sadfsadf sadfsadf sadfsadf s </li>
                </ul>
            </div>
       	  </div>
       	  <div class="quoteK_r">
       	    <div class="quoteK_r_title">Rhinestone Quote</div>
       	    <div class="quoteK_r_nr">
       	      <div class="quoteK_r_nr_l">Date:</div>
       	      <div class="quoteK_r_nr_r">03/08/2013</div>
       	    </div>
            <div class="quoteK_r_nr">
       	      <div class="quoteK_r_nr_l">Salse:</div>
       	      <div class="quoteK_r_nr_r">03/08/2013</div>
       	    </div>
            <div class="quoteK_r_nr">
       	      <div class="quoteK_r_nr_l">&nbsp;</div>
       	      <div class="quoteK_r_nr_r">sadfsdf@qq.com</div>
       	    </div>
       	  </div>
       	  <div class="quoteK_tiao01">
          	<div class="quoteK_tiao01_1">Customer: Annare</div>
            <div class="quoteK_tiao01_1">Company: Annare</div>
          </div>
          
          <div class="sIE_l_03">
                	<table cellspacing="0" class="sIE_l_03Tab">
                    	<tr>
                        	<th>Quote NO.</th>
                            <th>Artwork</th>
                            <th>Design Size</th>
                            <th>Color</th>
                            <th>Quantity</th>
                            <th>Quote</th>
                            <th>Sub-total</th>
                        </tr>
                        <tr>
                        	<td>APL004</td>
                            <td>APL004</td>
                            <td>APL004</td>
                            <td>APL004</td>
                            <td>APL004</td>
                            <td>APL004</td>
                            <td>APL004</td>
                        </tr>
                        <tr>
                        	<td>APL004</td>
                            <td>APL004</td>
                            <td>APL004</td>
                            <td>APL004</td>
                            <td>APL004</td>
                            <td>APL004</td>
                            <td>APL004</td>
                        </tr>
                    </table>
                    
                      <div class="quoteK_div">
                        <div class="quoteK_r">
                          <div class="quoteK_r_nr">
                            <div class="quoteK_r_nr_l">Freight:</div>
                            <div class="quoteK_r_nr_r">
                              <input type="text" class="quoteK_r_nr_r_input" />
                            </div>
                          </div>
                          <div class="quoteK_r_nr">
                            <div class="quoteK_r_nr_l">Total Amount:</div>
                            <div class="quoteK_r_nr_r" style="height:52px;"><input type="text" class="quoteK_r_nr_r_input" style="margin-top:10px;" /></div>
                          </div>
                        </div>
            </div>
                      
            <div class="quoteK_bottom01">
                        	<ul>
                            	<li>asfdsfgfdsg</li>
                                <li>asdfdsaf</li>
                                <li>sadfsadf dsaf asd dsafasd </li>
                                <li>sadfsadf dsaf asd dsafasd </li>
                            </ul>
                        </div>
                      
                        
                        
                        
                                	  
                </div>
          
          	</div>
            
            <input type="button"  class="quoteK_bottom01_button" onclick="export_pdf()" value="导出PDF" />
                      <input type="button"  class="quoteK_bottom01_button" value="返回" />
            
        </div>
        

<script type="text/javascript">
function export_pdf(){
	alert('111');

}





</script> 


</body>
</html>