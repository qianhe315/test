<?php /* Smarty version 2.6.22, created on 2014-12-03 14:30:20
         compiled from create_quotation_invoice/add.html */ ?>
<script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/cstown_Sys.js" type="text/javascript"></script>
<link href="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/css/cstown_sys.css" rel="stylesheet" type="text/css" media="screen"/>
<div class="pageContent">
  <?php if ($this->_tpl_vars['quotation_category'] == 1): ?>
      <div class="stkInfEnter" style="width:98%; display:none; padding-bottom:25px;" layoutH="30" id="ttbjd_ysj">
      <?php else: ?>
      <div class="stkInfEnter" style="width:98%" layoutH="30" id="ttbjd_ysj">
  <?php endif; ?>  
  
  <div style="float:left; width:100%;">
  		<?php if (! $this->_tpl_vars['quotation_category']): ?>
             <div class="sIE_title" style="width:15%;"><div class="button"><div class="buttonContent"><button onclick="document.getElementById('ttbjd_wsj').style.display='block';document.getElementById('ttbjd_ysj').style.display='none';">烫图报价单(无设计)</button></div></div></div>
          <?php endif; ?> 
    	  <div class="sIE_title" style="width:60%;">烫图报价单</div>
        </div>
          
      <form method="post" action="<?php if ($this->_tpl_vars['id']): ?> <?php echo $this->_tpl_vars['update_baojia_action']; ?>
<?php else: ?><?php echo $this->_tpl_vars['baojia_action']; ?>
<?php endif; ?>" id="hotfix_quotation_submit_form_edit" enctype="multipart/form-data" onsubmit="return validateCallback(this, navTabAjaxDone)">
      <input type="hidden" name="tapedata_formula" id="tapedata_formula_edit" />
      <input type="hidden" name="meiyuan_version" id="meiyuan_version" value="<?php echo $this->_tpl_vars['meiyuan_version']; ?>
" />
      <input type="hidden" name="ouyuan_version" id="ouyuan_version" value="<?php echo $this->_tpl_vars['ouyuan_version']; ?>
" />
      <input type="hidden" name="renmin_version" id="renmin_version" value="<?php echo $this->_tpl_vars['renmin_version']; ?>
" />
      <input type="hidden" name="final_quotation_hidden" id="final_quotation_hidden" value="0" />
    	  	<div class="sIEK" style="width:97%;">
              <div class="sIE_l" style="width:400px;">
                <div class="sIE_l_01" style="width:200px;">
                  <div class="sIE_l_01_title">业务员:</div>
                    <input type="text" class="sIE_No" name="saleman_name" style="width:100px;" value="<?php echo $this->_tpl_vars['saleman_name']; ?>
"  readonly="readonly" />
                </div>
                <div class="sIE_l_01" style="width:200px;">
                  <div class="sIE_l_01_title" style="width:80px;">时间:</div>
                    <input type="text" value="<?php echo $this->_tpl_vars['quotation_date']; ?>
" style="width:100px;" name="time" class="sIE_No"  readonly="readonly" />
                </div>
                
                <div class="sIE_l_01" style="width:200px;">
                  <div class="sIE_l_01_title">客户代码:</div>
                    <input type="text" name="customer_code" id="hq_customer_code_edit" style="width:100px;" readonly="readonly" value="<?php echo $this->_tpl_vars['customer_code']; ?>
" class="sIE_No" onkeyup="customer_num_edit();" />
                </div>    
                <div class="sIE_l_01" style="width:200px;">
                  <div class="sIE_l_01_title" style="width:80px;">报价类型:</div>
                  <input type="hidden" name="quotation_category_id" value="<?php echo $this->_tpl_vars['quotation_category_id']; ?>
" />
                  <select class="picture_select01" name="" id="picture_select01_edit" style="width:106px; height:26px;" onchange="design_code_edit()" disabled="disabled">
                     <option value="">请选择</option>
                     <?php $_from = $this->_tpl_vars['quotation']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['qf']):
?>
                        <?php if ($this->_tpl_vars['quotation_category_id'] == $this->_tpl_vars['qf']['id']): ?>
                    	   <option selected="selected" value="<?php echo $this->_tpl_vars['qf']['id']; ?>
"><?php echo $this->_tpl_vars['qf']['quotation_name']; ?>
</option>
                           <?php else: ?>
                           <option value="<?php echo $this->_tpl_vars['qf']['id']; ?>
"><?php echo $this->_tpl_vars['qf']['quotation_name']; ?>
</option>
                        <?php endif; ?>
                     <?php endforeach; endif; unset($_from); ?>
                    </select>    
                </div>
                <div class="sIE_l_01" style="width:200px;">
                  <div class="sIE_l_01_title">客户名:</div>
                    <input type="text" name="customer_name" style="width:100px;" id="hq_customer_name_edit" value="<?php echo $this->_tpl_vars['customer_name']; ?>
" class="sIE_No"  readonly="readonly" />
                </div>
                <div class="sIE_l_01" style="width:200px;">
                  <div class="sIE_l_01_title">报价名称:</div>
                    <?php if ($this->_tpl_vars['quotation_category_id'] == 5): ?>
                    <input type="text" name="design_pic_name"  readonly="readonly" value="<?php echo $this->_tpl_vars['design_pic_name']; ?>
" class="sIE_No" id="picture_text02_edit" style="display:none;width:100px;" />
                    <input type="text" name="stock_pic_name"  readonly="readonly" value="<?php echo $this->_tpl_vars['design_pic_name']; ?>
" class="sIE_No" id="picture_text03_edit" onkeyup="stock_edit();" style="display:block;width:100px;" />
                    <?php else: ?>
<input type="text" name="design_pic_name" value="<?php echo $this->_tpl_vars['design_pic_name']; ?>
"  readonly="readonly" style="width:100px;" class="sIE_No" id="picture_text02_edit" />
                    <input type="text" name="stock_pic_name"  readonly="readonly" value="<?php echo $this->_tpl_vars['design_pic_name']; ?>
" class="sIE_No" id="picture_text03_edit" onkeyup="stock_edit();" style="display:none;width:100px;" />                    
                    <?php endif; ?> 
                </div>
                
                
                <div class="sIE_l_01" style="width:200px;">
                  <div class="sIE_l_01_title">公司:</div>
                    <input type="text" name="customer_company" style="width:100px;" value="<?php echo $this->_tpl_vars['customer_company']; ?>
" class="sIE_No" id="hq_customer_company_edit"  readonly="readonly" />
                </div> 
                
                <div class="sIE_l_01" style="width:200px;">
                  <div class="sIE_l_01_title" style="width:80px;">报价编号:</div>
                     <input type="text" name="quotation_code" style="width:100px;" value="<?php echo $this->_tpl_vars['quotation_code']; ?>
" class="sIE_No" id=""  readonly="readonly" />
                  
<!--                  <?php if ($this->_tpl_vars['quotation_category_id'] == 5): ?>
                    <select name="quotation_code" class="picture_select01" id="picture_select02_edit" onchange="design_code33_edit()" style=" display:none;height:26px; width:106px;">  
                        <option value="">请选择</option>
                        <?php $_from = $this->_tpl_vars['quote_info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['qf']):
?>
                            <?php if ($this->_tpl_vars['quotation_code'] == $this->_tpl_vars['qf']['design_content_code']): ?>
                            <option selected="selected" value="<?php echo $this->_tpl_vars['qf']['design_content_code']; ?>
"><?php echo $this->_tpl_vars['qf']['design_content_code']; ?>
</option>
                            <?php else: ?>
                            <option value="<?php echo $this->_tpl_vars['qf']['design_content_code']; ?>
"><?php echo $this->_tpl_vars['qf']['design_content_code']; ?>
</option>
                            <?php endif; ?>
                        <?php endforeach; endif; unset($_from); ?>
                    </select>
                    <input type="text" name="stock_number" class="sIE_No" id="picture_text01_edit" readonly="readonly" value="<?php echo $this->_tpl_vars['stock_number']; ?>
" style="display:block;" />
                  <?php else: ?>
                    <select name="quotation_code" class="picture_select01" id="picture_select02_edit" onchange="design_code33_edit()" style="height:26px; width:106px;">  
                        <option value="">请选择</option>
                        <?php $_from = $this->_tpl_vars['quote_info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['qf']):
?>
                            <?php if ($this->_tpl_vars['quotation_code'] == $this->_tpl_vars['qf']['design_content_code']): ?>
                            <option selected="selected" value="<?php echo $this->_tpl_vars['qf']['design_content_code']; ?>
"><?php echo $this->_tpl_vars['qf']['design_content_code']; ?>
</option>
                            <?php else: ?>
                            <option value="<?php echo $this->_tpl_vars['qf']['design_content_code']; ?>
"><?php echo $this->_tpl_vars['qf']['design_content_code']; ?>
</option>
                            <?php endif; ?>
                        <?php endforeach; endif; unset($_from); ?>
                    </select>
                    <input type="text" name="stock_number" class="sIE_No" id="picture_text01_edit" readonly="readonly" value="<?php echo $this->_tpl_vars['stock_number']; ?>
" style="display:none; width:100px;" /> 
                  <?php endif; ?> --> 
                </div>
                <div class="sIE_l_01" style="width:200px;">
                  <div class="sIE_l_01_title">备损数量:</div>
                    <input id="hq_beisun_edit" class="sIE_No"  readonly="readonly" style="width:100px;" type="text" name="preparation_number" onchange="beisun_change_edit()" value="<?php echo $this->_tpl_vars['preparation_number']; ?>
">
                </div>
                <div class="sIE_l_01" style="width:200px;">
                  <div class="sIE_l_01_title">版费:</div>
                    <input class="sIE_No digits" id="version" readonly="readonly" onkeyup="version_a()" style="width:100px;" type="text" name="version" value="<?php echo $this->_tpl_vars['version']; ?>
">
                </div>
                <div id="hq_beisun_error_edit" style="line-height: 26px; float: left; color: rgb(255, 0, 0); margin-left: 5px; display:none;">备损数量已不为0！</div><div id="hq_result_edit" style="line-height: 26px; float: left; color: rgb(255, 0, 0); margin-left: 10px; display:none;"></div>
                
              </div>
              <div class="sIE_r" style="width:630px; height:auto;">
              	<div class="sIE_l_01" style="margin-top:0px; width:210px;">
                  <div class="sIE_l_01_title" style="width:50px; height:100px;">尺寸:</div>
                  <div class="sIE_r01" style="float:left; width:160px;">
                    <div class="sIE_r01_div">
                        <input type="text" id="inch_w_edit" style="width:80px;" value="<?php echo $this->_tpl_vars['content_inch_w']; ?>
" disabled="disabled" class="sIE_No" />
                        <div style=" margin-left:5px; float:left;">inch W</div>
                    </div>
                    <div class="sIE_r01_div">
                        <input type="text" id="inch_h_edit" style="width:80px;" value="<?php echo $this->_tpl_vars['content_inch_h']; ?>
" disabled="disabled" class="sIE_No" />
                        <div style=" margin-left:5px; float:left;">inch H</div>
                    </div>
                    <div class="sIE_r01_div">
                        <input type="text" id="cm_w_edit" style="width:80px;" value="<?php echo $this->_tpl_vars['content_cm_w']; ?>
" disabled="disabled" class="sIE_No" />
                        <div style=" margin-left:5px; float:left;">cm W</div>
                    </div>
                    <div class="sIE_r01_div">
                        <input type="text" id="cm_h_edit" style="width:80px;" value="<?php echo $this->_tpl_vars['content_cm_h']; ?>
" disabled="disabled" class="sIE_No" />
                        <div style=" margin-left:5px; float:left;">cm H</div>
                    </div>
                  </div>
                  <?php if ($this->_tpl_vars['quotation_category_id'] != 5): ?>
                     <div id="sheji_edit" style="display:block;">
                      <div class="sIE_l_01_title"  style="width:50px;">设计师:</div>
                      <div class="sIE_r01" style="float:left; width:80px;">
                      	<div class="sIE_r01_div">
                        	<input type="text" class="sIE_No" value="<?php echo $this->_tpl_vars['design_user_name']; ?>
" id="shejishi_edit" readonly="readonly" style="width:60px;"/>
                        </div>
                      </div>
                      
                     </div>  
                 <?php endif; ?> 
                </div>
                
                <div class="sIE_r" style="height:210px; width:210px; margin-top:0px;">
                <div class="sIE_r_img" id="image_edit"><img src="<?php echo $this->_tpl_vars['upload_jpg']; ?>
" style="height:210px; width:210px;" /></div>
                <input type="hidden" name="image" id="image_hidden_edit" />
              </div>
              </div>
    	  	</div>
              <div class="sIE_l_02">
                	<table cellspacing="0" class="sIE_l_02Tab"  id="hq_tableClass01">               
                    <thead id="material_edit">
                        <?php if ($this->_tpl_vars['id']): ?>
                           <tr id="aaa_edit">
                           <?php else: ?>
                           <tr id="aaa_edit" style="display:none;">
                        <?php endif; ?>   
                               <th>名称</th>
                               <th>颜色</th>
                               <th>尺寸</th>
                               <th>数量</th>
                               <th>公式选择</th>
                               <th>价格</th>
                           </tr>
                           <?php $_from = $this->_tpl_vars['design_content_material']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['qf']):
?>
                              <tr>
                                 <input type="hidden" id="sss_materialformula<?php echo $this->_tpl_vars['k']; ?>
" value="<?php echo $this->_tpl_vars['qf']['sss_materialformula']; ?>
" />
                                 <td><?php echo $this->_tpl_vars['qf']['material_name']; ?>
</td>
                                 <td><?php echo $this->_tpl_vars['qf']['material_color']; ?>
</td>
                                 <td id="w_h_id<?php echo $this->_tpl_vars['k']; ?>
"><?php echo $this->_tpl_vars['qf']['material_size']; ?>
</td>
                                 <td><?php echo $this->_tpl_vars['qf']['material_quantity']; ?>
</td>
                                 <td>
                                     <?php if ($this->_tpl_vars['qf']['gongshi'] == ""): ?>
                                         <?php else: ?>
                                         <select disabled="disabled" name="formula_id[<?php echo $this->_tpl_vars['k']; ?>
]" class="picture_select02" id="price_edit<?php echo $this->_tpl_vars['k']; ?>
" onchange="price_num_edit(<?php echo $this->_tpl_vars['k']; ?>
)">
                                             <option value="a">选择公式</option>
                                             <?php $_from = $this->_tpl_vars['qf']['gongshi']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['qf_a']):
?>
                                                 <?php if ($this->_tpl_vars['qf_a']['gongshi_1'] == $this->_tpl_vars['qf']['gongshi_b']): ?>
                                                    <option selected="selected" value="<?php echo $this->_tpl_vars['qf_a']['gongshi_1']; ?>
"><?php echo $this->_tpl_vars['qf_a']['gongshi_1']; ?>
</option>
                                                 <?php else: ?>
                                                    <option value="<?php echo $this->_tpl_vars['qf_a']['gongshi_1']; ?>
"><?php echo $this->_tpl_vars['qf_a']['gongshi_1']; ?>
</option>
                                                 <?php endif; ?>   
                                             <?php endforeach; endif; unset($_from); ?> 
                                         </select>
                                     <?php endif; ?>    
                                 </td>
                                 <td id="price_a_edit<?php echo $this->_tpl_vars['k']; ?>
"><?php echo $this->_tpl_vars['qf']['price']; ?>
</td>
                              </tr>
                           <?php endforeach; endif; unset($_from); ?>  
                    </thead>
                    </table>              	  
                </div>
                <div class="sIE_l_02" style=" margin-top:10px; border-top:dotted 1px #CCC; padding-top:10px;">
                	<table cellspacing="0" class="picture_Tab" style="border:none; width:200px;">
                    	<tr>
                        	<td></td>
                        	<td>
                            	<select class="picture_select02" disabled="disabled" id="gummed_paper_1_edit" style="float:left; margin-top:5px; height:24px; width:106px;" name="tapedata_id" onchange="gummed_paper_edit()">
                            	<option value="">胶纸名称</option>
                                 <?php $_from = $this->_tpl_vars['gummed_paper']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['qf']):
?>
                                    <?php if ($this->_tpl_vars['tapedata_id'] == $this->_tpl_vars['qf']['tapedata_name']): ?>
                                    <option selected="selected" value="<?php echo $this->_tpl_vars['qf']['tapedata_name']; ?>
"><?php echo $this->_tpl_vars['qf']['tapedata_name']; ?>
</option>
                                    <?php else: ?>
                                    <option value="<?php echo $this->_tpl_vars['qf']['tapedata_name']; ?>
"><?php echo $this->_tpl_vars['qf']['tapedata_name']; ?>
</option>
                                    <?php endif; ?>
                                 <?php endforeach; endif; unset($_from); ?>                                
                            </select>
                            </td>
                        </tr>
                        <tr>
                        	<td style="width:72px;">胶纸费:</td>
                            <td>
                            <input type="text" name="tapedata_price" value="<?php echo $this->_tpl_vars['tapedata_price']; ?>
" style="float:left; width:100px; height:20px;" readonly="readonly" id="jiaozhi_edit"/>
                            
                            </td>
                        </tr>
                        <tr>
                        	<td>材料费:</td>
                            <td><input type="text" style="width:100px;" value="<?php echo $this->_tpl_vars['material_price']; ?>
" name="material_price" readonly="readonly" id="material_price_edit" class="sIE_No" /></td>
                        </tr>
                        <tr>
                        	<td>工厂手工费:</td>
                            <td><input type="text" style="width:100px;" value="<?php echo $this->_tpl_vars['factory_workmanship_price']; ?>
" name="factory_workmanship_price" readonly="readonly" id="manual_id_edit" class="sIE_No" /></td>
                        </tr>
                        <tr>
                        	<td>合计:</td>
                            <td><input type="text" style="width:100px;" value="<?php echo $this->_tpl_vars['whole_cost_price']; ?>
" name="whole_cost_price" readonly="readonly" id="total_price_id_edit" class="sIE_No" style="width:80px;" /></td>
                        </tr>
                        	

                    </table>
                    
                    <table cellspacing="0" class="picture_Tab" style="border:none; width:70%; margin-top:35px;">
                    	<tr>
                        	<td>
                            <font style="float:left; margin-right:10px; line-height:24px; width:70px;">合计:</font>
                            <input type="text"  value="<?php echo $this->_tpl_vars['whole_cost_price']; ?>
" readonly="readonly" id="total_price_1_edit" class="sIE_No" style="width:100px;" />
                            <font style="float:left; margin-right:10px; line-height:24px; margin-left:10px; width:60px;"> X 成本系数</font>
                            <input type="text" name="cost_factor" class="sIE_No" id="coefficient_edit" readonly="readonly" value="<?php echo $this->_tpl_vars['factory_cost_factor']; ?>
" style="width:50px;" />
                            <font style="float:left; margin-right:10px; line-height:24px; margin-left:10px; width:60px;">= 成本价</font>
                            <input type="text" name="factory_cost" class="sIE_No" value="<?php echo $this->_tpl_vars['factory_cost']; ?>
" id="cost_price_edit" style="width:50px;" readonly="readonly" /></td>
                        </tr>
                        <tr>
                        	<td>
                            <font style="float:left; margin-right:10px; line-height:24px; width:70px;">合计:</font>
                            <input type="text"  value="<?php echo $this->_tpl_vars['whole_cost_price']; ?>
" readonly="readonly" id="total_price_2_edit" class="sIE_No" style="width:100px;" />
                            <font style="float:left; margin-right:10px; line-height:24px; margin-left:10px; width:60px;"> X 片数</font>
                            <?php if ($this->_tpl_vars['pcs']): ?>
                               <input type="text" name="pcs" id="piece_edit" class="sIE_No" readonly="readonly" value="<?php echo $this->_tpl_vars['pcs']; ?>
" onkeyup="piece1_edit()" style="width:50px;" />
                               <?php else: ?>
                               <input type="text" name="pcs" id="piece_edit" class="sIE_No" readonly="readonly" value="1" onkeyup="piece1_edit()" style="width:50px;" />
                            <?php endif; ?>  
                            <font style="float:left; margin-right:10px; line-height:24px; margin-left:10px; width:60px;"> X 报价系数</font>
                            <?php if ($this->_tpl_vars['quote_factor']): ?>
                               <input type="text" name="quote_factor" id="default_quote_coefficient_edit" readonly="readonly" onkeyup="default_quote_coefficient1_edit()" class="sIE_No" value="<?php echo $this->_tpl_vars['quote_factor']; ?>
" style="width:50px;" />
                            <?php else: ?>
                               <input type="text" name="quote_factor" id="default_quote_coefficient_edit" readonly="readonly" onkeyup="default_quote_coefficient1_edit()" class="sIE_No" value="<?php echo $this->_tpl_vars['default_quote_coefficient']; ?>
" style="width:50px;" />
                            <?php endif; ?>
                            <font style="float:left; margin-right:10px; line-height:24px; margin-left:10px;"> / </font> 
                            <select id="parities_edit" name="exchange_rate_id" disabled="disabled"  onchange="parities1_edit()" class="picture_select02" style="float:left; height:24px;">
                                <?php $_from = $this->_tpl_vars['exchangerate']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['qf']):
?>
                                    <?php if (exchange_rate_id): ?>
                                       <?php if ($this->_tpl_vars['qf']['exchangerate_name'] == $this->_tpl_vars['exchange_rate_id']): ?>
                                             <option selected="selected" value="<?php echo $this->_tpl_vars['qf']['value']; ?>
"><?php echo $this->_tpl_vars['qf']['exchangerate_character']; ?>
 <?php echo $this->_tpl_vars['qf']['exchangerate_name']; ?>
</option>
                                          <?php else: ?>
                                             <option value="<?php echo $this->_tpl_vars['qf']['value']; ?>
"><?php echo $this->_tpl_vars['qf']['exchangerate_character']; ?>
 <?php echo $this->_tpl_vars['qf']['exchangerate_name']; ?>
</option>
                                       <?php endif; ?>                                    
                                    <?php else: ?>                                   
                                       <?php if ($this->_tpl_vars['qf']['exchangerate_name'] == '人民币'): ?>
                                             <option selected="selected" value="<?php echo $this->_tpl_vars['qf']['value']; ?>
"><?php echo $this->_tpl_vars['qf']['exchangerate_character']; ?>
 <?php echo $this->_tpl_vars['qf']['exchangerate_name']; ?>
</option>
                                          <?php else: ?>
                                             <option value="<?php echo $this->_tpl_vars['qf']['value']; ?>
"><?php echo $this->_tpl_vars['qf']['exchangerate_character']; ?>
 <?php echo $this->_tpl_vars['qf']['exchangerate_name']; ?>
</option>
                                       <?php endif; ?>
                                    <?php endif; ?>  
                                <?php endforeach; endif; unset($_from); ?>
                            </select>
                            
                            </td>
                            <tr>
                        	<td>
                            <font style="float:left; margin-right:10px; line-height:24px; width:70px;">单片报价:</font>
                            <input type="text" name="monolithic_quote" value="<?php echo $this->_tpl_vars['monolithic_quote']; ?>
" id="monolithic_quote_edit" class="sIE_No" style="width:100px;" readonly="readonly" />
                            </td>
                        </tr>
                        <tr>
                        	<td>
                            	<input type="hidden" id="lowest_cost_factor_edit" value="<?php echo $this->_tpl_vars['lowest_cost_factor']; ?>
" />
                            <font style="float:left; margin-right:10px; line-height:24px; width:70px;">最终报价:</font>
                            <input type="text" name="final_quote" value="<?php echo $this->_tpl_vars['final_quote']; ?>
" id="final_quotation_edit" class="sIE_No" style="width:100px;" readonly="readonly" />
                            </td>
                        </tr>
                        </tr>
                        <tr>
                           <td><div id="piece_error_edit"></div></td>
                        </tr>
                        <tr>
                           <td><div id="lowest_cost_factor_error_edit"></div></td>
                        </tr>                        
                    </table>
                    
                                	  
                </div>
              
              </form>
              <div class="sIE_l_02" style=" margin-top:3%;">
              
              
             
        
        	
        	
                <div class="button"><div class="buttonContent"><button class="close">取消</button></div></div>
                
                
        
        
        
      </div>
      
    	  	</div>

  
        
   <?php if ($this->_tpl_vars['quotation_category'] == 1): ?>     
      <div class="stkInfEnter" style="width:98%;display:block;" layoutH="30" id="ttbjd_wsj">
      <?php else: ?>
      <div class="stkInfEnter" style="width:98%; display:none;" layoutH="30" id="ttbjd_wsj">
   <?php endif; ?>   
   		<div style="width:100%; float:left;">	
            <?php if (! $this->_tpl_vars['quotation_category']): ?>
             <div class="sIE_title" style="width:15%;"><div class="button"><div class="buttonContent"><button onclick="document.getElementById('ttbjd_ysj').style.display='block';document.getElementById('ttbjd_wsj').style.display='none';">烫图报价单</button></div></div></div>
    	  <?php endif; ?>
    	  <div class="sIE_title" style="width:60%;">烫图报价单(无设计)</div>
        </div>  	   
      <form name="form1" method="post" action="<?php if ($this->_tpl_vars['id']): ?> <?php echo $this->_tpl_vars['update_no_baojia_action']; ?>
<?php else: ?><?php echo $this->_tpl_vars['no_baojia_action']; ?>
<?php endif; ?>" id="no_hotfix_quotation_submit_form_edit" enctype="multipart/form-data" onsubmit="return validateCallback(this, navTabAjaxDone)"> 
<!--                                <div class="sIE_r" style="height:120px; width:120px;">
               <input type="file" class="sIE_r_img_file" name="jpg" id="jpg" style="width:120px;"  /><br />
          </div> -->
          <input type="hidden" name="jpg_save_name" value="<?php echo $this->_tpl_vars['image']; ?>
" />
          <input type="hidden" name="cdr_save_name" value="<?php echo $this->_tpl_vars['image1']; ?>
" />
          <input type="hidden" name="no_tapedata_formula" id="no_tapedata_formula_edit" />         
            <div class="sIEK" style="width:80%;">
              <div class="sIE_l" style="width:400px;">
                <div class="sIE_l_01" style="width:200px;">
                  <div class="sIE_l_01_title">业务员:</div>
                    <input type="text" readonly="readonly" name="user_name" value="<?php echo $this->_tpl_vars['user_name']; ?>
" class="sIE_No" style="width:100px;" />
                </div>
                <div class="sIE_l_01" style="width:200px;">
                  <div class="sIE_l_01_title">时间:</div>
                    <input type="text" class="sIE_No" name="no_time" value="<?php echo $this->_tpl_vars['quotation_date']; ?>
" readonly="readonly" style="width:100px;" />
                </div>
                
                <div class="sIE_l_01" style="width:200px;">
                  <div class="sIE_l_01_title">客户代码:</div>
                    <input type="text" class="sIE_No" name="no_customer_num_a" readonly="readonly" value="<?php echo $this->_tpl_vars['customer_code']; ?>
" style="width:100px;" id="no_customer_num_1_edit" onkeyup="no_customer_num_edit();" />
                </div>
                
                <div class="sIE_l_01" style="width:200px;">
                    <div class="sIE_l_01_title">名称:</div>
					<input type="text" class="sIE_No" id="sIE_l_01_title_1_edit" readonly="readonly" value="<?php echo $this->_tpl_vars['design_pic_name']; ?>
" name="no_name" style="width:100px;" />
                </div>
                <div class="sIE_l_01" style="width:200px;">
                  <div class="sIE_l_01_title">客户名:</div>
                    <input type="text" class="sIE_No" value="<?php echo $this->_tpl_vars['customer_name']; ?>
" name="no_customer_code" id="no_customer_code_edit" style="width:100px;"  readonly="readonly" />
                </div>

                <div class="sIE_l_01" style="width:200px;">
                  <div class="sIE_l_01_title">报价编号:</div>
                    <input type="text" class="sIE_No" name="no_stock_number" readonly="readonly" value="<?php echo $this->_tpl_vars['no_stock_number']; ?>
" style="width:100px;" />
                </div>
                <div class="sIE_l_01" style="width:200px;">
                  <div class="sIE_l_01_title">公司:</div>
                    <input type="text" class="sIE_No" name="no_customer_company" value="<?php echo $this->_tpl_vars['customer_company']; ?>
" id="no_customer_company_edit" style="width:100px;"  readonly="readonly" />
                </div>
                <div class="sIE_l_01" style="width:200px;">
                  <div class="sIE_l_01_title">备损数量:</div>
                    <input id="hq_no_beisun_edit" class="sIE_No" style="width:100px;" readonly="readonly" type="text" onchange="no_beisun_change_edit()" name="no_preparation_number" value="<?php echo $this->_tpl_vars['no_preparation_number']; ?>
">
                </div>
                
                <div class="sIE_l_01" style="width:200px;">
                  <div class="sIE_l_01_title">材料费:</div>
                    <input type="text" style="width:100px;" value="<?php echo $this->_tpl_vars['material_price']; ?>
" name="no_material_price"  readonly="readonly" id="no_material_price_edit" class="sIE_No" />
                </div>
                
                <div class="sIE_l_01" style="width:200px;">
                  <div class="sIE_l_01_title">成本系数:</div>
                    <input type="text" id="no_coefficient_edit" name="no_cost_factor"  readonly="readonly" value="<?php echo $this->_tpl_vars['factory_cost_factor']; ?>
" class="sIE_No" style="width:100px;" />
                </div>
                
                <div class="sIE_l_01" style="width:200px;">
                  <div class="sIE_l_01_title">工厂手工费:</div>
                    <input type="text" style="width:100px;" readonly="readonly" name="no_factory_workmanship_price" value="<?php echo $this->_tpl_vars['factory_workmanship_price']; ?>
" id="no_manual_id_edit" class="sIE_No" />
                </div>
                
                <div class="sIE_l_01" style="width:200px;">
                  <div class="sIE_l_01_title">成本价:</div>
                    <input type="text" id="no_cost_price_edit" value="<?php echo $this->_tpl_vars['factory_cost']; ?>
" name="no_factory_cost" class="sIE_No" style="width:100px;"  readonly="readonly" />
                </div>
                
                
                
                <div class="sIE_l_01" style="width:200px;">
                  <div class="sIE_l_01_title" style="line-height:30px;">胶纸费:</div>
                    <input type="text" name="no_tapedata_price" value="<?php echo $this->_tpl_vars['tapedata_price']; ?>
" style="float:left; width:100px; height:20px;"  readonly="readonly" id="no_jiaozhi_edit"/>
                </div>
                <div class="sIE_l_01" style="width:200px;">
                  <div class="sIE_l_01_title" style="line-height:30px;">单片报价:</div>
                    <input type="text" name="no_monolithic_quote" value="<?php echo $this->_tpl_vars['monolithic_quote']; ?>
" style="float:left; width:100px; height:20px;"  readonly="readonly" id="no_monolithic_quote_edit"/>
                </div>
                
                <div class="sIE_l_01" style="width:200px;">
                  <div class="sIE_l_01_title">版费:</div>
                    <input class="sIE_No digits" style="width:100px;"  readonly="readonly" onkeyup="version_b()" type="text" id="no_version" name="no_version" value="<?php echo $this->_tpl_vars['version']; ?>
">
                </div>
                
                
                
                <div class="sIE_l_01" style="width:200px;">
                  <div class="sIE_l_01_title" style="line-height:30px;">最终报价:</div>
                  	<input type="text" name="no_final_quote" value="<?php echo $this->_tpl_vars['final_quote']; ?>
" id="no_final_quotation_edit" class="sIE_No" style="width:100px; height:20px;"  readonly="readonly" />
                </div>
                
                <div class="sIE_l_01" style="width:200px;">
                  <div class="sIE_l_01_title" style="line-height:30px;">合计:</div>
                    <input type="text" name="no_whole_cost_price" value="<?php echo $this->_tpl_vars['whole_cost_price']; ?>
" id="no_total_price_id_2_edit" readonly="readonly" class="sIE_No" style="width:100px;" />
                </div>
                
                <div id="hq_no_beisun_error_edit" style="line-height: 26px; float: left; color: rgb(255, 0, 0); display:none; margin-left: 5px;">备损数量不为0，此做货单需要主管审核！</div><div id="hq_no_result_edit" style="line-height: 26px; float: left; color: rgb(255, 0, 0); margin-left: 10px; display:none;"></div>
              </div>
                 <script type="text/javascript" language="javascript">
				 
                    function no_customer_num_edit(){
						var name = $("#no_customer_num_1_edit").val();
						$.ajax({
							url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/hotfix_quotation/add_customer',//通过Ajax取数据的目标页面
							data:{"name":name},
							type:'post',//方法，还可以是"post"
							dataType:'json',//数据类型，还有其它的，详见jQuery手册
							success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
							{
								if(locals){
									$("#no_customer_code_edit").val(locals.customer_name);
									$("#no_customer_company_edit").val(locals.company);
								}else{
									$("#no_customer_code_edit").val('');
									$("#no_customer_company_edit").val('');									
								}
							}								
							
						});
					}
				 </script>	
              
              <div class="sIE_r" style="width:450px;">
              	<div class="sIE_l_01" style="margin-top:0px; width:210px;">
                  <div class="sIE_l_01_title" style="width:60px; height:80px;">尺寸:</div>
                  <div class="sIE_r01" style="float:left; width:150px;">
                    <div class="sIE_r01_div">
                        <input type="text" name="no_inch_w" readonly="readonly" value="<?php echo $this->_tpl_vars['inch_w']; ?>
" id="no_inch_w_edit" class="sIE_No" style="width:100px;" />
                        <div style=" margin-left:5px; float:left;">inch W</div>
                    </div>
                    <div class="sIE_r01_div">
                        <input type="text" name="no_inch_h" readonly="readonly" value="<?php echo $this->_tpl_vars['inch_h']; ?>
" id="no_inch_h_edit" class="sIE_No" style="width:100px;" />
                        <div style=" margin-left:5px; float:left;">inch H</div>
                    </div>
                    <div class="sIE_r01_div">
                        <input type="text" name="no_cm_w" readonly="readonly" value="<?php echo $this->_tpl_vars['cm_w']; ?>
" id="no_cm_w_edit" class="sIE_No" style="width:100px;" />
                        <div style=" margin-left:5px; float:left;">cm W</div>
                    </div>
                    <div class="sIE_r01_div">
                        <input type="text" name="no_cm_h" readonly="readonly" value="<?php echo $this->_tpl_vars['cm_h']; ?>
" id="no_cm_h_edit" class="sIE_No" style="width:100px;" />
                        <div style=" margin-left:5px; float:left;">cm H</div>
                    </div>
                  </div>
                  
                  <div class="sIE_l_01" style="width:200px;">
                  <div class="sIE_l_01_title" style="width:60px; line-height:26px;">胶纸名称:</div>
                    <select class="picture_select02" disabled="disabled" style="float:left; width:106px; margin-top:5px; height:24px;" id="no_gummed_paper_1_edit" name="no_tapedata_id" onchange="no_gummed_paper_edit()">
                            	<option value="">胶纸名称</option>
                                 <?php $_from = $this->_tpl_vars['gummed_paper']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['qf']):
?>
                                    <?php if ($this->_tpl_vars['tapedata_id'] == $this->_tpl_vars['qf']['tapedata_name']): ?>
                                    <option selected="selected" value="<?php echo $this->_tpl_vars['qf']['tapedata_name']; ?>
"><?php echo $this->_tpl_vars['qf']['tapedata_name']; ?>
</option>
                                    <?php else: ?>
                                    <option value="<?php echo $this->_tpl_vars['qf']['tapedata_name']; ?>
"><?php echo $this->_tpl_vars['qf']['tapedata_name']; ?>
</option>
                                    <?php endif; ?>
                                 <?php endforeach; endif; unset($_from); ?>                                
                    </select>
                </div>
                  
                  
                   <div class="sIE_l_01" style="width:200px;">
                  <div class="sIE_l_01_title" style="width:60px; line-height:26px;">片数:</div>
                    <input type="text" name="no_pcs" id="no_piece_edit" readonly="readonly" class="sIE_No" value="<?php echo $this->_tpl_vars['no_pcs']; ?>
" onkeyup="no_piece1_edit()" style="width:100px; height:20px;" />
                </div>
                
                 <div class="sIE_l_01" style="width:200px;">
                  <div class="sIE_l_01_title" style="width:60px; line-height:26px;">报价系数:</div>
                    <?php if ($this->_tpl_vars['quote_factor']): ?>
                               <input type="text" name="no_quote_factor" readonly="readonly" id="no_default_quote_coefficient_edit" onkeyup="no_default_quote_coefficient1_edit()" class="sIE_No" value="<?php echo $this->_tpl_vars['quote_factor']; ?>
" style="width:100px; height:20px;" />
                            <?php else: ?>
                               <input type="text" name="no_quote_factor" readonly="readonly" id="no_default_quote_coefficient_edit" onkeyup="no_default_quote_coefficient1_edit()" class="sIE_No" value="<?php echo $this->_tpl_vars['default_quote_coefficient']; ?>
" style="width:100px; height:20px;" />
                            <?php endif; ?>
                </div>
                
                 <div class="sIE_l_01" style="width:200px;">
                  <div class="sIE_l_01_title" style="width:60px; line-height:26px;">货币:</div>
                     <select id="no_parities_edit" name="no_exchange_rate_id" disabled="disabled" onchange="no_parities1_edit()" class="picture_select02" style="float:left; height:24px; width:105px;">
                                <?php $_from = $this->_tpl_vars['exchangerate']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['qf']):
?>
                                    <?php if (exchange_rate_id): ?>
                                       <?php if ($this->_tpl_vars['qf']['exchangerate_name'] == $this->_tpl_vars['exchange_rate_id']): ?>
                                             <option selected="selected" value="<?php echo $this->_tpl_vars['qf']['value']; ?>
"><?php echo $this->_tpl_vars['qf']['exchangerate_character']; ?>
 <?php echo $this->_tpl_vars['qf']['exchangerate_name']; ?>
</option>
                                          <?php else: ?>
                                             <option value="<?php echo $this->_tpl_vars['qf']['value']; ?>
"><?php echo $this->_tpl_vars['qf']['exchangerate_character']; ?>
 <?php echo $this->_tpl_vars['qf']['exchangerate_name']; ?>
</option>
                                       <?php endif; ?>                                    
                                    <?php else: ?>                                   
                                       <?php if ($this->_tpl_vars['qf']['exchangerate_name'] == '人民币'): ?>
                                             <option selected="selected" value="<?php echo $this->_tpl_vars['qf']['value']; ?>
"><?php echo $this->_tpl_vars['qf']['exchangerate_character']; ?>
 <?php echo $this->_tpl_vars['qf']['exchangerate_name']; ?>
</option>
                                          <?php else: ?>
                                             <option value="<?php echo $this->_tpl_vars['qf']['value']; ?>
"><?php echo $this->_tpl_vars['qf']['exchangerate_character']; ?>
 <?php echo $this->_tpl_vars['qf']['exchangerate_name']; ?>
</option>
                                       <?php endif; ?>
                                    <?php endif; ?>  
                                <?php endforeach; endif; unset($_from); ?>
                            </select>
                </div>
                
                  

                  
                  
                </div>
              
              
      

      
           </div>                
                
              </div>
            
            
                <div class="sIE_l_02" style=" width:65%;">
                	<table cellspacing="0" class="sIE_l_02Tab" id="material_table_edit">
                    	<tr>
                        	<th>名称</th>
                            <th>尺寸</th>
                            <th>颜色</th>
                            <th>数量</th>
                            <th>公式选择</th>
                            <th>价格</th>
                            <th>操作</th>
                        </tr>
                        <?php $_from = $this->_tpl_vars['quotation_sheet_material_array']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['qsm']):
?>
                    	<tr class="hq_tableClass02">
                        <input type="hidden" id="sss_materialformula<?php echo $this->_tpl_vars['qsm']['id']; ?>
" value="<?php echo $this->_tpl_vars['qsm']['sss_materialformula']; ?>
" />
                        	<td><?php echo $this->_tpl_vars['qsm']['material_name']; ?>
</td>
                            <td id="w_h_id<?php echo $this->_tpl_vars['qsm']['id']; ?>
"><?php echo $this->_tpl_vars['qsm']['material_size']; ?>
</td>
                            <td><?php echo $this->_tpl_vars['qsm']['material_color']; ?>
</td>                            
                            <td><?php echo $this->_tpl_vars['qsm']['material_quantity']; ?>
</td>
                            <td>
                            <?php if ($this->_tpl_vars['qsm']['materialformula'] != ""): ?>
                                <select name="no_formula_id[<?php echo $this->_tpl_vars['qsm']['id']; ?>
]" class="picture_select02" id="no_price_edit<?php echo $this->_tpl_vars['qsm']['id']; ?>
" onchange="no_price_num_edit(<?php echo $this->_tpl_vars['qsm']['id']; ?>
)">
                                    <option value="a">选择公式</option>
                                    <?php $_from = $this->_tpl_vars['qsm']['materialformula']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['mf']):
?>
                                       <?php if ($this->_tpl_vars['qsm']['formula_id'] == $this->_tpl_vars['mf']['id_1']): ?>
                                          <option selected="selected" value="<?php echo $this->_tpl_vars['mf']['id_1']; ?>
"><?php echo $this->_tpl_vars['mf']['gongshi_1']; ?>
</option>
                                          <?php else: ?>
                                          <option value="<?php echo $this->_tpl_vars['mf']['id_1']; ?>
"><?php echo $this->_tpl_vars['mf']['gongshi_1']; ?>
</option>
                                       <?php endif; ?>
                                    <?php endforeach; endif; unset($_from); ?>
                                </select>
                                <?php else: ?>
                            <?php endif; ?>    
                            </td>
                            <td id="no_price_a_edit<?php echo $this->_tpl_vars['qsm']['id']; ?>
"><?php echo $this->_tpl_vars['qsm']['material_total_price']; ?>
</td>
                            <td></td>
                        </tr>                        

                        <?php endforeach; endif; unset($_from); ?>
                    </table>              	  
                </div>
                
                </form>

                  <div class="sIE_r" style="height:260px; width:260px; margin-top:-260px; float:right;">
                    <div class="sIE_r_img" style="height:260px; width:260px; margin-left:0px;">
                    <div style="float:left;  width:260px; height:auto;"> 
              <iframe name="yframe_hotfix_edit1" src="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/hotfix_quotation/upload_jpg" style="border:none; width:260px; height:260px;"></iframe>
                             </div>
                    </div>     
              <form style="float:left; width:260px;" id="hq_upload_jpg_edit" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/hotfix_quotation/upload_jpg" target="yframe_hotfix_edit1" method="post" enctype="multipart/form-data" >
              	<div style="float:left; height:30px; width:60px; overflow:hidden; margin-left:20px; position:relative;">
                 <input type="file" class="sIE_r_img_file" id="hq_jpg_file" name="jpg_file" style=" opacity:0; position:relative; z-index:10; margin-top:0px;" />
                 <input type="button" class="sIE_r_img_file" name="jpg" style=" opacity:1; width:60px; text-align:center; height:24px; position:absolute; z-index:9; margin-top:0px;" value="浏览" />
                </div>
                 <input type="button" id="hq_jpg_upload_submit_edit" value="上传JPG" style=" float:right; width:70px;" /> 
               
              </form>
              </div>

                   <div class="sIE_r" style="height:36px; width:260px; margin-top:20px; padding-top:15px; float:right; border-top:dotted 1px #CCC;">
                    <div class="sIE_r_img" style="height:36px; width:260px; margin-left:0px;">
                    <div style="float:left;  width:260px; height:auto;"> 
                      <!--<img src="sss.jpg" width="224px" height="224px" />-->
                      <iframe name="yframe_hotfix_edit" src="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/hotfix_quotation/upload_cdr" style="border:none; width:260px; height:260px;"></iframe>
                    </div>
                    </div>
              <form style="float:left; width:260px;" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/hotfix_quotation/upload_cdr" id="hq_upload_cdr_edit" target="yframe_hotfix_edit" method="post" enctype="multipart/form-data" >
              <div style="float:left; width:60px; height:50px; overflow:hidden; margin-left:20px;position:relative;">
                 <input type="file" class="sIE_r_img_file" id="hq_cdr_file" name="cdr_file"   style=" opacity:0; position:relative; z-index:10; margin-top:0px;"  />
                 <input type="button" class="sIE_r_img_file" name="jpg" style=" opacity:1; width:60px; text-align:center; height:24px; position:absolute; z-index:9; margin-top:0px;" value="浏览" />
              </div>
                 <input type="button" id="hq_cdr_upload_submit_edit" value="上传CDR" style=" float:right; width:70px;" /> 
                <div id="testFileInput" class="uploadify" style="height: 30px; width: 120px; float:left; margin-top:10px;"> 
              
               </div>  
                 
              </form>
                    </div>

              <div class="sIE_l_02" style="margin-top:65px; margin-top:5%;">
   
        <div class="button">
          <div class="buttonContent">
            <button class="close">取消</button>
          </div>
        </div>
      </div>    
        </div>
		     
</div>
</div>
