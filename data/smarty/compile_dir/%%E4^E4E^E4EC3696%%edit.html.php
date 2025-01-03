<?php /* Smarty version 2.6.22, created on 2021-01-18 15:02:20
         compiled from hotfix_quotation/edit.html */ ?>
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
      <input type="hidden" name="submit_value_edit" id="submit_value_edit" value="" />
      <input type="hidden" name="tapedata_formula" id="tapedata_formula_edit" />
      <input type="hidden" name="meiyuan_version" id="meiyuan_version" value="<?php echo $this->_tpl_vars['meiyuan_version']; ?>
" />
      <input type="hidden" name="ouyuan_version" id="ouyuan_version" value="<?php echo $this->_tpl_vars['ouyuan_version']; ?>
" />
      <input type="hidden" name="renmin_version" id="renmin_version" value="<?php echo $this->_tpl_vars['renmin_version']; ?>
" />
      <input type="hidden" name="final_quotation_hidden" id="final_quotation_hidden" value="0" />
       <input type="hidden" name="mid" id="mid" value="<?php echo $this->_tpl_vars['id']; ?>
" />
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
                    <input type="text" name="customer_code" id="hq_customer_code_edit" style="width:100px;" value="<?php echo $this->_tpl_vars['customer_code']; ?>
" class="sIE_No" onkeyup="customer_num_edit();" />
                </div>    
                <div class="sIE_l_01" style="width:200px;">
                  <div class="sIE_l_01_title" style="width:80px;">报价类型:</div>
                  <input type="hidden" name="quotation_category_id"  id="picture_select01_edit"  value="<?php echo $this->_tpl_vars['quotation_category_id']; ?>
" />
                  <select class="picture_select01" name="" style="width:106px; height:26px;" onchange="design_code_edit()" disabled="disabled">
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
                    <input type="text" name="design_pic_name" value="<?php echo $this->_tpl_vars['design_pic_name']; ?>
" class="sIE_No" id="picture_text02_edit" style="display:none;width:100px;" />
                    <input type="text" name="stock_pic_name" value="<?php echo $this->_tpl_vars['design_pic_name']; ?>
" class="sIE_No" id="picture_text03_edit" onkeyup="stock_edit();" style="display:block;width:100px;" />
                    <?php else: ?>
<input type="text" name="design_pic_name" value="<?php echo $this->_tpl_vars['design_pic_name']; ?>
" style="width:100px;" class="sIE_No" id="picture_text02_edit" />
                    <input type="text" name="stock_pic_name" value="<?php echo $this->_tpl_vars['design_pic_name']; ?>
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
                     <input type="text" name="quotation_code" style="width:100px;" id="quotation_code" value="<?php echo $this->_tpl_vars['quotation_code']; ?>
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
                    <input id="hq_beisun_edit" class="sIE_No" style="width:100px;" type="text" name="preparation_number" onchange="beisun_change_edit()" value="<?php echo $this->_tpl_vars['preparation_number']; ?>
">
                </div>
                <div class="sIE_l_01" style="width:200px;">
                  <div class="sIE_l_01_title">版费:</div>
                  <?php if ($this->_tpl_vars['version'] == ''): ?>
                  <input class="sIE_No digits" id="version" onkeyup="version_a()" style="width:100px;" type="text" name="version" value="0" readonly="readonly" >
                  <?php else: ?>
                    <input class="sIE_No digits" id="version" onkeyup="version_a()" style="width:100px;" type="text" name="version" value="<?php echo $this->_tpl_vars['version']; ?>
" readonly="readonly" >
                  <?php endif; ?>
                </div>
                <div id="hq_beisun_error_edit" style="line-height: 26px; float: left; color: rgb(255, 0, 0); margin-left: 5px; display:none;">备损数量已不为0！</div>
                
                <div class="sIE_l_01" style="width:200px;">
                  <div class="sIE_l_01_title" style="width:80px; line-height:26px;">报关品类:</div>
                  <select class="picture_select01" name="order_category" id="order_category" style="width:106px; height:26px;">
                    <option value="">请选择</option>
                    <?php $_from = $this->_tpl_vars['order_category']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['oc']):
?> <?php if ($this->_tpl_vars['order_category_id'] == $this->_tpl_vars['oc']['id']): ?>
                    <option selected="selected" value="<?php echo $this->_tpl_vars['oc']['id']; ?>
"><?php echo $this->_tpl_vars['oc']['name']; ?>
</option>
                    <?php else: ?>
                    <option value="<?php echo $this->_tpl_vars['oc']['id']; ?>
"><?php echo $this->_tpl_vars['oc']['name']; ?>
</option>
                    <?php endif; ?> <?php endforeach; endif; unset($_from); ?>
                  </select>
                </div>
                <div id="hq_result_edit" style="line-height: 26px; float: left; color: rgb(255, 0, 0); margin-left: 10px; display:none;"></div>
                
              </div>
              <div class="sIE_r" style="width:630px; height:auto;">
              	<div class="sIE_l_01" style="margin-top:0px; width:210px;">
                  <div class="sIE_l_01_title" style="width:50px; height:100px;">尺寸:</div>
                  <div class="sIE_r01" style="float:left; width:160px;">
                    <div class="sIE_r01_div">
                        <input type="text" id="inch_w_edit" style="width:80px;" value="<?php echo $this->_tpl_vars['content_inch_w']; ?>
" readonly="readonly" class="sIE_No" />
                        <div style=" margin-left:5px; float:left;">inch W</div>
                    </div>
                    <div class="sIE_r01_div">
                        <input type="text" id="inch_h_edit" style="width:80px;" value="<?php echo $this->_tpl_vars['content_inch_h']; ?>
" readonly="readonly" class="sIE_No" />
                        <div style=" margin-left:5px; float:left;">inch H</div>
                    </div>
                    <div class="sIE_r01_div">
                        <input type="text" id="cm_w_edit" style="width:80px;" value="<?php echo $this->_tpl_vars['content_cm_w']; ?>
" readonly="readonly" class="sIE_No" />
                        <div style=" margin-left:5px; float:left;">cm W</div>
                    </div>
                    <div class="sIE_r01_div">
                        <input type="text" id="cm_h_edit" style="width:80px;" value="<?php echo $this->_tpl_vars['content_cm_h']; ?>
" readonly="readonly" class="sIE_No" />
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
                
                <div class="sIE_r" style="height:210px; width:280px; margin-top:0px;">
                <div class="sIE_r_img" id="image_edit"><img src="<?php echo $this->_tpl_vars['upload_jpg']; ?>
" style="height:210px; width:210px;" /></div>
                 <div style="margin-top:220px; margin-left:20px;"><a href="<?php echo $this->_tpl_vars['upload_jpg']; ?>
" id="upload_jpg_links_edit" target="_blank" style=" color:#03F;font-size:20px;">下载jpg</a></div><div style="margin-left:165px; margin-top:-20px;"><a href="<?php echo $this->_tpl_vars['upload_cdr']; ?>
" id="upload_cdr_links_edit" style="color:#03F;font-size:20px;">下载cdr</a></div>
                <input type="hidden" name="image" id="image_hidden_edit" />
              </div>
              </div>
    	  	</div>
              <div class="sIE_l_02" style="margin-top:50px;">
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
                            <!--   <th>公式选择</th>-->
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
<!--                                 <td>
                                     <?php if ($this->_tpl_vars['qf']['gongshi'] == ""): ?>
                                         <?php else: ?>
                                         <select name="formula_id[<?php echo $this->_tpl_vars['k']; ?>
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
                                 </td>-->
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
                            	<select class="picture_select02" id="gummed_paper_1_edit" style="float:left; margin-top:5px; height:24px; width:106px;" name="tapedata_id" onchange="gummed_paper_edit()">
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
                               <input type="text" name="pcs" id="piece_edit" class="sIE_No" value="<?php echo $this->_tpl_vars['pcs']; ?>
" onkeyup="piece1_edit()" style="width:50px;" />
                               <?php else: ?>
                               <input type="text" name="pcs" id="piece_edit" class="sIE_No" value="1" onkeyup="piece1_edit()" style="width:50px;" />
                            <?php endif; ?>  
                            <font style="float:left; margin-right:10px; line-height:24px; margin-left:10px; width:60px;"> X 报价系数</font>
                            <?php if ($this->_tpl_vars['quote_factor']): ?>
                               <input type="text" name="quote_factor" id="default_quote_coefficient_edit" onkeyup="default_quote_coefficient1_edit()" class="sIE_No" value="<?php echo $this->_tpl_vars['quote_factor']; ?>
" style="width:50px;" />
                            <?php else: ?>
                               <input type="text" name="quote_factor" id="default_quote_coefficient_edit" onkeyup="default_quote_coefficient1_edit()" class="sIE_No" value="<?php echo $this->_tpl_vars['default_quote_coefficient']; ?>
" style="width:50px;" />
                            <?php endif; ?>
                            <font style="float:left; margin-right:10px; line-height:24px; margin-left:10px;"> / </font> 
                            <select id="parities_edit" name="exchange_rate_id" onchange="parities1_edit()" class="picture_select02" style="float:left; height:24px;">
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
              
              
              <?php if ($this->_tpl_vars['edit_no'] != 1): ?>
              
                <div class="button" class="button" style="margin-left:70%; margin-right:5px;">
                  <div class="buttonContent">
                    <button class="close">取消</button>
                  </div>
                </div>
        	<?php else: ?>
            
            	<div class="button" style="margin-left:70%; margin-right:5px;">
                
                   <div class="buttonContent">     
                      <button type="button" id="design_content_save_edit">确定</button>
                   </div>
                   
               
                </div>
                <div class="button " style="margin-right:5px;"><div class="buttonContent"><button class="close">取消</button></div></div>
                <div class="button" >
        <div class="buttonContent">
          <button type="button" id="add_order_edit">添加做货单</button>
        </div>
      </div> 
                
         <?php endif; ?>
        
        
      </div>
      
    	  	</div>

        
        
        
                 <script type="text/javascript" language="javascript">
				 	document.cookie="versionkk=0"; 
					function customer_num_edit(){
						var name = $("#hq_customer_code_edit").val();
						$.ajax({
							url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/hotfix_quotation/add_customer',//通过Ajax取数据的目标页面
							data:{"name":name},
							type:'post',//方法，还可以是"post"
							dataType:'json',//数据类型，还有其它的，详见jQuery手册
							success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
							{
								if(locals){
									$("#hq_customer_name_edit").val(locals.customer_name);
									$("#hq_customer_company_edit").val(locals.company);
								}else{
									$("#hq_customer_name_edit").val('');
									$("#hq_customer_company_edit").val('');									
								}
							}								
							
						});
					}
					
					
					
					function version_a(){

						var monolithic_quote = $("#monolithic_quote_edit").val();
						var piece = $("#piece_edit").val();
						
						var version = $("#version").val();					
						
						var one = monolithic_quote.substr(0, 1);
						
						monolithic_quote = monolithic_quote.replace(one,"");
						
						var final_quotation = monolithic_quote + "*" + piece;
						if(version!=""){
						    var final_quotation_1 = eval('('+final_quotation+ "+" + version+')');
						}else{
							var final_quotation_1 = eval('('+final_quotation+')');
						}
						final_quotation_1 = final_quotation_1.toFixed(2);
						$("#final_quotation_edit").val(one + final_quotation_1);
						
					}
					
					function version_b(){

						var no_monolithic_quote = $("#no_monolithic_quote_edit").val();
						var no_piece = $("#no_piece_edit").val();
						
						var no_version = $("#no_version").val();					
						
						var one = no_monolithic_quote.substr(0, 1);
						
						no_monolithic_quote = no_monolithic_quote.replace(one,"");
						
						var final_quotation = no_monolithic_quote + "*" + no_piece;
						if(no_version!=""){
						    var final_quotation_1 = eval('('+final_quotation+ "+" + no_version+')');
						}else{
							var final_quotation_1 = eval('('+final_quotation+')');
						}
						final_quotation_1 = final_quotation_1.toFixed(2);
						$("#no_final_quotation_edit").val(one + final_quotation_1);
						
					}					
					
					
					//烫图报价单，多片数
					function piece1_edit(){
						var piece = $("#piece_edit").val();
						var picture_text03 = $("#picture_text03_edit").val();
							
					    var id = $("#quotation_code").val();
						var default_quote_coefficient = $("#default_quote_coefficient_edit").val();
						var parities  = $("#parities_edit").val();
                        var picture_select01 = $("#picture_select01_edit").val();
						
						if(picture_select01=='3'){
							 var default_quote_coefficient = $("#default_quote_coefficient_edit").val();
			
							 $.ajax({
								  url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/hotfix_quotation/find_version',//通过Ajax取数据的目标页面
								  data:{"parities":parities,"picture_select02":id,"piece":piece},
								  type:'get',//方法，还可以是"post"
								  dataType:'text',//数据类型，还有其它的，详见jQuery手册
								  success:function(locals)
								  {
									   if(piece<12){
							              $("#version").val(locals);
									   }else{
										  $("#version").val('0');
									   }
									  
									   var total_price = $("#total_price_2_edit").val();
									   total_price = total_price.replace("元","");	
										
									   var aaa = $("#parities_edit").find("option:selected").text();
									   aaa=aaa.split(" ");							
									   
						   			   if(piece=="" || piece==0){
										   $("#piece_error_edit").html("<div style=color:#F00;>*片数不能为空，或者为0！</div>");
										   var final_quotation = default_quote_coefficient + "/" + parities;
										   var monolithic_quote = total_price + "*" + 1 + "*" + default_quote_coefficient + "/" + parities;
										   monolithic_quote = eval('('+monolithic_quote+')');
										   monolithic_quote = monolithic_quote.toFixed(2);
										   $("#monolithic_quote_edit").val(aaa[0] + monolithic_quote);								   
							   
								           final_quotation = eval('('+final_quotation+ "+" + locals+')');
							               final_quotation = final_quotation.toFixed(2);
							               $("#final_quotation_edit").val(aaa[0] + final_quotation);
							  
						               }else{
							               $("#piece_error_edit").html("");
										   
										   if(total_price == 0){
											   var monolithic_quote =  default_quote_coefficient + "/" + parities;			
										   }else{
											   var monolithic_quote = total_price + "*" + default_quote_coefficient + "/" + parities;			
										   }
									   }
									   monolithic_quote = eval('('+monolithic_quote+')');
									   monolithic_quote = monolithic_quote.toFixed(2);
									   $("#monolithic_quote_edit").val(aaa[0] + monolithic_quote);							   
									   
									   var final_quotation = monolithic_quote + "*" + piece;
									
									   var zongjia = final_quotation + "+" + locals;
									
									   final_quotation = eval('('+zongjia+')');
									   final_quotation = final_quotation.toFixed(2);
									   $("#final_quotation_edit").val(aaa[0] + final_quotation);							
							
						          }

							  });
						  
						}else if(picture_select01=='5'){
							  var default_quote_coefficient = $("#default_quote_coefficient_edit").val();
							  $.ajax({
								  url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/hotfix_quotation/find_version_edit',//通过Ajax取数据的目标页面
								  data:{'parities':parities ,'picture_text03':picture_text03,"piece":piece},
								  type:'get',//方法，还可以是"post"
								  dataType:'json',//数据类型，还有其它的，详见jQuery手册
					              success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
					              {
							         if(piece<6){
						                 $("#version").val(locals);
							         }else{
								         $("#version").val('0');
								     }
						             var total_price = $("#total_price_2_edit").val();
						             total_price = total_price.replace("元","");	
							
						             var aaa = $("#parities_edit").find("option:selected").text();
						             aaa=aaa.split(" ");							
									   
						             if(piece=="" || piece==0){
										  $("#piece_error_edit").html("<div style=color:#F00;>*片数不能为空，或者为0！</div>");
										  var final_quotation = default_quote_coefficient + "/" + parities;
										  var monolithic_quote = total_price + "*" + 1 + "*" + default_quote_coefficient + "/" + parities;

										  monolithic_quote = eval('('+monolithic_quote+')');
										  monolithic_quote = monolithic_quote.toFixed(2);
										  $("#monolithic_quote_edit").val(aaa[0] + monolithic_quote);								   
							   
										  final_quotation = eval('('+final_quotation+ "+" + locals+')');
										  final_quotation = final_quotation.toFixed(2);
										  $("#final_quotation_edit").val(aaa[0] + final_quotation);
							  
						             }else{
							              $("#piece_error_edit").html("");
							              if(total_price == 0){
								              var monolithic_quote = default_quote_coefficient + "/" + parities;			
							              }else{
								              var monolithic_quote = total_price + "*" + default_quote_coefficient + "/" + parities;			
							              }

										  monolithic_quote = eval('('+monolithic_quote+')');
										  monolithic_quote = monolithic_quote.toFixed(2);
										  $("#monolithic_quote_edit").val(aaa[0] + monolithic_quote);
							              var final_quotation = monolithic_quote + "*" + piece;
							
										  final_quotation = eval('('+final_quotation+ "+" + locals+')');
										  final_quotation = final_quotation.toFixed(2);
										  $("#final_quotation_edit").val(aaa[0] + final_quotation);
						             }
  
					              }
							  });
							   
						   }
						   
						   var total_price = $("#total_price_2_edit").val();
						   total_price = total_price.replace("元","");	
							
						   var aaa = $("#parities_edit").find("option:selected").text();
						   aaa=aaa.split(" ");							
						   var default_quote_coefficient = $("#default_quote_coefficient_edit").val();		   
						   if(piece=="" || piece==0){
							    $("#piece_error_edit").html("<div style=color:#F00;>*片数不能为空，或者为0！</div>");
							    var final_quotation = default_quote_coefficient + "/" + parities;
							    var monolithic_quote = total_price + "*" + 1 + "*" + default_quote_coefficient + "/" + parities;

							    monolithic_quote = eval('('+monolithic_quote+')');
							    monolithic_quote = monolithic_quote.toFixed(2);
							    $("#monolithic_quote_edit").val(aaa[0] + monolithic_quote);								   
							   
								final_quotation = eval('('+final_quotation+ "+" + version+')');
							    final_quotation = final_quotation.toFixed(2);
							    $("#final_quotation_edit").val(aaa[0] + final_quotation);
							  
						   }else{
							    $("#piece_error_edit").html("");
							    if(total_price == 0){
								    var monolithic_quote =  default_quote_coefficient + "/" + parities;			
							    }else{
								    var monolithic_quote = total_price + "*" + default_quote_coefficient + "/" + parities;			
							    }

							    monolithic_quote = eval('('+monolithic_quote+')');
							    monolithic_quote = monolithic_quote.toFixed(2);
							    $("#monolithic_quote_edit").val(aaa[0] + monolithic_quote);							   
							    var final_quotation = monolithic_quote + "*" + piece;
							    final_quotation = eval('('+final_quotation+ "+" + version+')');
							    final_quotation = final_quotation.toFixed(2);
							    $("#final_quotation_edit").val(aaa[0] + final_quotation);
						   }
  
					   
					}
					
					//烫图报价单无设计，多片数
					function no_piece1_edit(){
					   $(document).ready(function(){					
						    var no_piece = $("#no_piece_edit").val();
						    var mid = $("#mid").val();
						    var no_default_quote_coefficient = $("#no_default_quote_coefficient_edit").val();
						    var no_parities = $("#no_parities_edit").val();
						    var total_price = $("#no_total_price_id_2_edit").val();
						    total_price = total_price.replace("元","");
								
                       
	                        $.ajax({
								url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/hotfix_quotation/find_version_no_edit',//通过Ajax取数据的目标页面
								type:'get',//方法，还可以是"post"
								data:{'no_parities':no_parities,'mid':mid,'no_piece':no_piece},
								dataType:'json',//数据类型，还有其它的，详见jQuery手册
								success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
								{
							        if(no_piece<12){
							            $("#no_version").val('0');
										var no_version = 0
							        }else{
								        $("#no_version").val('0');
										var no_version = 0;
								    }
							        var aaa = $("#no_parities_edit").find("option:selected").text();
						            aaa=aaa.split(" ");							
							   
						            if(no_piece=="" || no_piece==0){
							   
										   $("#no_piece_error_edit").html("<div style=color:#F00;>*片数不能为空，或者为0！</div>");
										   var final_quotation = total_price + no_default_quote_coefficient + "/" + no_parities;
										   var monolithic_quote = total_price + "*" + 1 + "*" + no_default_quote_coefficient + "/" + no_parities;
										   final_quotation = eval('('+final_quotation+ "+" + locals+')');
										   final_quotation = final_quotation.toFixed(2);
										   $("#no_final_quotation_edit").val(aaa[0] + final_quotation);
								  
										   monolithic_quote = eval('('+monolithic_quote+')');
										   monolithic_quote = monolithic_quote.toFixed(2);
										   $("#no_monolithic_quote_edit").val(aaa[0] + monolithic_quote);								   
						            }else{
							   
							             $("#no_piece_error_edit").html("");
										 
										 if(total_price == 0){
											  if(no_parities =='' || no_parities == 0){
												  var monolithic_quote = no_default_quote_coefficient;
											  }else{
												  var monolithic_quote = no_default_quote_coefficient + "/" + no_parities;
											  }
										 }else{
											  if(no_parities =='' || no_parities == 0){
												  var monolithic_quote = total_price + "*" + no_default_quote_coefficient;
											  }else{
												  var monolithic_quote = total_price + "*" + no_default_quote_coefficient + "/" + no_parities;
											  }
										 }
										 
										 monolithic_quote = eval('('+monolithic_quote+')');
										 monolithic_quote = monolithic_quote.toFixed(2);
										 $("#no_monolithic_quote_edit").val(aaa[0] + monolithic_quote);							   
								  
										 var final_quotation = monolithic_quote + "*" + no_piece;
										 if(version == '' ){
											 final_quotation = eval('('+final_quotation+')');
										 }else{
											 final_quotation = eval('('+final_quotation+ "+" + locals+')');
										 }
										 final_quotation = final_quotation.toFixed(2);
										 $("#no_final_quotation_edit").val(aaa[0] + final_quotation);							   
							   
						            }
						  	
						        }
								
						     });
	
							
					       
						  
						   
						   
					   });	   
					}					
					
					function isNumber(val) {
						var regPos = /^\d+(\.\d+)?$/; //非负浮点数
						var regNeg = /^(-(([0-9]+\.[0-9]*[1-9][0-9]*)|([0-9]*[1-9][0-9]*\.[0-9]+)|([0-9]*[1-9][0-9]*)))$/; //负浮点数
						if(regPos.test(val) || regNeg.test(val)) {
						return true;
						} else {
						return false;
						}
					}
					
					
					//烫图报价单，报价系数计算
					function default_quote_coefficient1_edit(){
						
						 var hq_customer_code = $("#hq_customer_code_edit").val();
						 var default_quote_coefficient = $("#default_quote_coefficient_edit").val();
						 var lowest_cost_factor = $("#lowest_cost_factor_edit").val();
						 var piece = $("#piece_edit").val();
						 var parities = $("#parities_edit").val();
						 var total_price = $("#total_price_2_edit").val();
						 total_price = total_price.replace("元","");	
						 var aaa = $("#parities_edit").find("option:selected").text();
						 aaa=aaa.split(" ");
						 
						 if(default_quote_coefficient == ''){
							 default_quote_coefficient = 0;
						 }
						 
						 if(isNumber(default_quote_coefficient)){
						}else{
							default_quote_coefficient = 0;
						}
						 
						 
						 <!--报价系数低于标准提示.如需要，解除即可-->					
						 /*if(parseInt(default_quote_coefficient) < parseInt(lowest_cost_factor)){
							$("#lowest_cost_factor_error_edit").html("<div style=color:#F00;>*此报价系数低于标准，需要提交主管审核后生效！</div>");
						 }else{
							$("#lowest_cost_factor_error_edit").html("");
						 }*/
						
						 var version = $("#version").val();
						
						
						 //报价系数小于2,并且该客户在1.3系数特殊客户表中，成本系数改为1.3
						$.ajax({
										url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/hotfix_quotation/check_coefficient',//通过Ajax取数据的目标页面
										data:{'hq_customer_code':hq_customer_code,'default_quote_coefficient':default_quote_coefficient},
										type:'get',//方法，还可以是"post"
										dataType:'text',//数据类型，还有其它的，详见jQuery手册
										success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
										{
											if(locals == 1){
												$("#coefficient_edit").val("1.3");
												var total_price_change = total_price*1.3;
												$("#cost_price_edit").val(total_price_change.toFixed(2));
											}else{
												$("#coefficient_edit").val("1.5");
												var total_price_change = total_price*1.5;
												$("#cost_price_edit").val(total_price_change.toFixed(2));
											}
										}
						});
						
						
						 if(default_quote_coefficient=="" || default_quote_coefficient==0){
								var final_quotation = total_price + "*" + 0 + "*" + default_quote_coefficient + "/" + parities;
								var monolithic_quote = total_price + "*" + 1 + "*" + default_quote_coefficient + "/" + parities;
								
								<!--final_quotation = eval('('+final_quotation+')');
								final_quotation = final_quotation.toFixed(2);
								$("#final_quotation_edit").val(aaa[0] + final_quotation);
								-->
								
								monolithic_quote = eval('('+monolithic_quote+')');
								monolithic_quote = monolithic_quote.toFixed(2);
								$("#monolithic_quote_edit").val(aaa[0] + monolithic_quote);								
								
								final_quotation = eval('('+final_quotation+ "+" +version+')');
								final_quotation = final_quotation.toFixed(2);
								$("#final_quotation_edit").val(aaa[0] + final_quotation);

						 }else{
								var monolithic_quote = total_price + "*" + 1 + "*" + default_quote_coefficient + "/" + parities;
								
								monolithic_quote = eval('('+monolithic_quote+')');
								monolithic_quote = monolithic_quote.toFixed(2);
								$("#monolithic_quote_edit").val(aaa[0] + monolithic_quote);	
								
								var final_quotation = monolithic_quote + "*" + piece;
								
								final_quotation = eval('('+final_quotation+ "+" +version+')');
								final_quotation = final_quotation.toFixed(2);
								$("#final_quotation_edit").val(aaa[0] + final_quotation);							
							
						}					
						
					}
					
					//烫图报价单无设计，报价系数计算
					function no_default_quote_coefficient1_edit(){
						 var hq_customer_code = $("#no_customer_num_1_edit").val();
						 var no_default_quote_coefficient = $("#no_default_quote_coefficient_edit").val();
						 var lowest_cost_factor = $("#lowest_cost_factor_edit").val();
						 var no_piece = $("#no_piece_edit").val();
						 var no_parities = $("#no_parities_edit").val();
						 var total_price = $("#no_total_price_id_2_edit").val();
						 var no_version = $("#no_version").val();
						 total_price = total_price.replace("元","");	
						 var aaa = $("#no_parities_edit").find("option:selected").text();
						 aaa=aaa.split(" ");	
						 
						 if(no_default_quote_coefficient == ''){
							 no_default_quote_coefficient = 0;
						 }
						 
						 if(isNumber(no_default_quote_coefficient)){
						}else{
							no_default_quote_coefficient = 0;
						}
						 
						 <!--报价系数低于标准提示.如需要，解除即可-->				
						/*if(no_default_quote_coefficient<lowest_cost_factor){
							$("#no_lowest_cost_factor_error_edit").html("<div style=color:#F00;>*此报价系数低于标准，需要提交主管审核后生效！</div>");
						}else{
							$("#no_lowest_cost_factor_error_edit").html("");
						}*/
						
						//报价系数小于2,并且该客户在1.3系数特殊客户表中，成本系数改为1.3
						$.ajax({
										url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/hotfix_quotation/check_coefficient',//通过Ajax取数据的目标页面
										data:{'hq_customer_code':hq_customer_code,'default_quote_coefficient':no_default_quote_coefficient},
										type:'get',//方法，还可以是"post"
										dataType:'text',//数据类型，还有其它的，详见jQuery手册
										success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
										{
											if(locals == 1){
												$("#no_coefficient_edit").val("1.3");
												var total_price_change = total_price*1.3;
												$("#no_cost_price_edit").val(total_price_change.toFixed(2));
											}else{
												$("#no_coefficient_edit").val("1.5");
												var total_price_change = total_price*1.5;
												$("#no_cost_price_edit").val(total_price_change.toFixed(2));
											}
										}
						});
						
						if(no_default_quote_coefficient=="" || no_default_quote_coefficient==0){
							var final_quotation = total_price + "*" + 0 + "*" + no_default_quote_coefficient + "/" + no_parities;
							var monolithic_quote = total_price + "*" + 1 + "*" + no_default_quote_coefficient + "/" + no_parities;
							
							final_quotation = eval('('+final_quotation+ "+" +no_version+')');
							final_quotation = final_quotation.toFixed(2);
							$("#no_final_quotation_edit").val(aaa[0] + final_quotation);
							
							monolithic_quote = eval('('+monolithic_quote+')');
							monolithic_quote = monolithic_quote.toFixed(2);
							$("#no_monolithic_quote_edit").val(aaa[0] + monolithic_quote);								
							
						}else{
							if(total_price == 0){
								var monolithic_quote =  no_default_quote_coefficient + "/" + no_parities;
							}else{
								var monolithic_quote = total_price + "*" + no_default_quote_coefficient + "/" + no_parities;
							}
							monolithic_quote = eval('('+monolithic_quote+')');
							monolithic_quote = monolithic_quote.toFixed(2);
							$("#no_monolithic_quote_edit").val(aaa[0] + monolithic_quote);								
							
							var final_quotation = monolithic_quote + "*" + no_piece;
							final_quotation = eval('('+final_quotation+ "+" +no_version+')');
							final_quotation = final_quotation.toFixed(2);
							$("#no_final_quotation_edit").val(aaa[0] + final_quotation);						
							
						}
											
						
					}					
					
					//烫图报价单 汇率计算最终报价
					function parities1_edit(){
						   var piece = $("#piece_edit").val();
						   var default_quote_coefficient = $("#default_quote_coefficient_edit").val();
						   var picture_text03 = $("#picture_text03_edit").val();
						   var parities = $("#parities_edit").val();
						   var version = $("#version").val();
						   var picture_select02 = $("#quotation_code").val();
						   var picture_select01 = $("#picture_select01_edit").val();
						
						   if(picture_select01=='3'){
							   var default_quote_coefficient = $("#default_quote_coefficient_edit").val();
								   $.ajax({
										url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/hotfix_quotation/find_version',//通过Ajax取数据的目标页面
										data:{"parities":parities,"picture_select02":picture_select02,"piece":piece},
										type:'get',//方法，还可以是"post"
										dataType:'text',//数据类型，还有其它的，详见jQuery手册
							            success:function(locals){
											if(piece<12){
												$("#version").val(locals);
											}else{
												$("#version").val('0');
											}
											var aaa = $("#parities_edit").find("option:selected").text();;
											aaa=aaa.split(" ");
											var total_price = $("#total_price_2_edit").val();
											total_price = total_price.replace("元","");
							   
											var monolithic_quote = total_price + "*" + default_quote_coefficient + "/" + parities;
							  
											monolithic_quote = eval('('+monolithic_quote+')');
											monolithic_quote = monolithic_quote.toFixed(2);
											$("#monolithic_quote_edit").val(aaa[0] + monolithic_quote);							  
										   
											var final_quotation = monolithic_quote + "*" + piece;						   
										   
											final_quotation = eval('('+final_quotation+ "+" + locals+')');
											final_quotation = final_quotation.toFixed(2);
											$("#final_quotation_edit").val(aaa[0] + final_quotation);
										}
								   });

						    }else if(picture_select01=='5'){
							        var default_quote_coefficient = $("#default_quote_coefficient_edit").val();
								    $.ajax({
										 url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/hotfix_quotation/find_version_edit',//通过Ajax取数据的目标页面
										 data:{'parities':parities ,'picture_text03':picture_text03},
									     type:'get',//方法，还可以是"post"
									     dataType:'json',//数据类型，还有其它的，详见jQuery手册
					                     success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
					                     {
										     if(piece<6){
								                  $("#version").val(locals);
										     }else{
												  $("#version").val('0');
										     }
						   		             var aaa = $("#parities_edit").find("option:selected").text();;
											 aaa=aaa.split(" ");
											 var total_price = $("#total_price_2_edit").val();
											 total_price = total_price.replace("元","");
						   
						                     var monolithic_quote = total_price + "*" + default_quote_coefficient + "/" + parities;
						  
											 monolithic_quote = eval('('+monolithic_quote+')');
											 monolithic_quote = monolithic_quote.toFixed(2);
											 $("#monolithic_quote_edit").val(aaa[0] + monolithic_quote);							  
											   
											 var final_quotation = monolithic_quote + "*" + piece;						   
											   
											 final_quotation = eval('('+final_quotation+ "+" + locals+')');
											 final_quotation = final_quotation.toFixed(2);
											 $("#final_quotation_edit").val(aaa[0] + final_quotation);
										 }
								    });
							  						   
						   }
						   var aaa = $("#parities_edit").find("option:selected").text();
						   aaa=aaa.split(" ");
						   var total_price = $("#total_price_2_edit").val();
						   total_price = total_price.replace("元","");
						   
						   var monolithic_quote = total_price + "*" + default_quote_coefficient + "/" + parities;
						  
						   monolithic_quote = eval('('+monolithic_quote+')');
						   monolithic_quote = monolithic_quote.toFixed(2);
						   $("#monolithic_quote_edit").val(aaa[0] + monolithic_quote);							  
						   
						   var final_quotation = monolithic_quote + "*" + piece;						   
						   
						   final_quotation = eval('('+final_quotation+ "+" + version+')');
						   final_quotation = final_quotation.toFixed(2);
						   $("#final_quotation_edit").val(aaa[0] + final_quotation);
						   
						
					}
					
					//烫图报价单无设计 汇率计算最终报价
					function no_parities1_edit(){
						   var no_piece = $("#no_piece_edit").val();
						   var mid = $("#mid").val();
						   var no_default_quote_coefficient = $("#no_default_quote_coefficient_edit").val();
						   var no_parities = $("#no_parities_edit").val();
					
					$.ajax({
						url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/hotfix_quotation/find_version_no_edit',//通过Ajax取数据的目标页面
						type:'get',//方法，还可以是"post"
						data:{'no_parities':no_parities,'mid':mid,'no_piece':no_piece},
						dataType:'json',//数据类型，还有其它的，详见jQuery手册
						success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
						{
							if(no_piece<12){
							    $("#no_version").val(locals);
							}else{
								$("#no_version").val('0');
							}
							  var aaa = $("#no_parities_edit").find("option:selected").text();;
						   aaa=aaa.split(" ");
						   var total_price = $("#no_total_price_id_2_edit").val();
						   total_price = total_price.replace("元","");

						   var monolithic_quote = total_price + "*" + no_default_quote_coefficient + "/" + no_parities;
						   
						   monolithic_quote = eval('('+monolithic_quote+')');
						   monolithic_quote = monolithic_quote.toFixed(2);
						   $("#no_monolithic_quote_edit").val(aaa[0] + monolithic_quote);						   

						   var final_quotation = monolithic_quote + "*" + no_piece;						   
						   final_quotation = eval('('+final_quotation+ "+" + locals+')');
						   //final_quotation = eval('('+final_quotation+')');
						   final_quotation = final_quotation.toFixed(2);
						   $("#no_final_quotation_edit").val(aaa[0] + final_quotation);	
						}
						});
			  				
	
						   var aaa = $("#no_parities_edit").find("option:selected").text();;
						   aaa=aaa.split(" ");
						   var total_price = $("#no_total_price_id_2_edit").val();
						   total_price = total_price.replace("元","");

						   var monolithic_quote = total_price + "*" + no_default_quote_coefficient + "/" + no_parities;
						   
						   monolithic_quote = eval('('+monolithic_quote+')');
						   monolithic_quote = monolithic_quote.toFixed(2);
						   $("#no_monolithic_quote_edit").val(aaa[0] + monolithic_quote);						   

						   var final_quotation = monolithic_quote + "*" + no_piece;						   
						   final_quotation = eval('('+final_quotation+ "+" + version+')');
						   //final_quotation = eval('('+final_quotation+')');
						   final_quotation = final_quotation.toFixed(2);
						   $("#no_final_quotation_edit").val(aaa[0] + final_quotation);
						   
							
					}										

					function stock_edit(){
						var stock = $("#picture_text03_edit").val();
						var piece = $("#piece_edit").val();
						var picture_text03_edit = $("#picture_text03_edit").val();
						var parities_edit = $("#parities_edit").val();
						$('#aaa_edit').css('display','none');
						$('#sheji_edit').css('display','none');
						
						var aaa = $("#parities_edit").find("option:selected").text();;
						aaa=aaa.split(" ");						
						
						$.ajax({
							url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/hotfix_quotation/add_stock',//通过Ajax取数据的目标页面
							data:{"stock":stock},
							type:'post',//方法，还可以是"post"
							dataType:'text',//数据类型，还有其它的，详见jQuery手册
							success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
							{
								locals=locals.split("|");
								$("#material_edit").html(locals[0]);
								$("#inch_w_edit").val(locals[1]);
								$("#inch_h_edit").val(locals[2]);
								$("#cm_w_edit").val(locals[3]);
								$("#cm_h_edit").val(locals[4]);
								$("#image_edit").html("<img style='height:120px; width:120px;' src = " + locals[5] + ">");
								$("#image_hidden_edit").val(locals[5]);
						        var final_quotation = eval('('+locals[6]+')');
								
								if(locals[6]!=undefined){
						           final_quotation = final_quotation.toFixed(2);
								}else{
								   final_quotation = final_quotation;
								}
                                $("#manual_id_edit").val(final_quotation + "元");
								
								if(locals[6]!=undefined){
								   var price = eval('('+locals[7]+')');
								   price = price.toFixed(2);
								}else{
								   price = price;
								}
								$("#material_price_edit").val(price + "元");
								
								var jiaozhi = $("#jiaozhi_edit").val();
								jiaozhi = jiaozhi.replace("元","");
								if(jiaozhi==""){
								   var total_price = price + "+" + final_quotation + "+" + 0;
								}else{
								   var total_price = price + "+" + final_quotation + "+" + jiaozhi;	
								}
								total_price = eval('('+total_price+')');
								total_price = total_price.toFixed(2);
								$("#total_price_id_edit").val(total_price + "元");
								$("#total_price_1_edit").val(total_price + "元");
								$("#total_price_2_edit").val(total_price + "元");
								
								var coefficient = $("#coefficient_edit").val();
								var cost_price = total_price + "*" + coefficient;
								cost_price = eval('('+cost_price+')');
								cost_price = cost_price.toFixed(2);
								$("#cost_price_edit").val(cost_price);
								
								var piece = $("#piece_edit").val();
								if(locals[8]==2){
									$("#default_quote_coefficient_edit").val(locals[9]);
									document.getElementById('default_quote_coefficient_edit').disabled = true;
								}else {
									$("#default_quote_coefficient_edit").val(3);
									document.getElementById('default_quote_coefficient_edit').disabled = false;
								}
								var default_quote_coefficient = $("#default_quote_coefficient_edit").val();
								var parities = $("#parities_edit").val();
								
								<!--var monolithic_quote = total_price + "*" + piece + "*" + default_quote_coefficient + "/" + parities; -->
								var monolithic_quote = total_price + "*" + default_quote_coefficient + "/" + parities; 
								monolithic_quote = eval('('+monolithic_quote+')');
								monolithic_quote = monolithic_quote.toFixed(2);
								$("#monolithic_quote_edit").val(aaa[0] + monolithic_quote);
								
								var final_quotation = monolithic_quote  + "*" + piece;
								final_quotation = eval('('+final_quotation+')');
								final_quotation = final_quotation.toFixed(2);
								$("#final_quotation_edit").val(aaa[0] + final_quotation);
								$("#picture_text01_edit").val(locals[8]);
									 if(piece<6){
								
									 $.ajax({
				        	url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/hotfix_quotation/find_version_edit',//通过Ajax取数据的目标页面
				         	data:{'parities':parities_edit,'picture_text03':picture_text03_edit},
					       type:'get',//方法，还可以是"post"
					       dataType:'json',//数据类型，还有其它的，详见jQuery手册
					      success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
					      {
						   $("#version").val(locals);
					       }
							  });
								  
							   }
									
										
							}								
							
						});	
					}
					
					function price_num_edit(key){
					   $(document).ready(function(){						
						   var price = $("#price_edit"+key).val();
						   
						   var w_h_id = $("#w_h_id"+key).text();
						   w_h_id=w_h_id.split("*");
						   w_h_id[1] = w_h_id[1].replace(new RegExp(/( inch)/g),'');
						   var sss_materialformula = $("#sss_materialformula"+key).val();
						   
						   if(price!='选择公式'){
							   price = price.replace("$",sss_materialformula);
							   price = price.replace("W",w_h_id[0]*25.4);
							   price = price.replace("H",w_h_id[1]*25.4);							   
							   price = price.replace(new RegExp(/(除)/g),'/');
							   price = price.replace(new RegExp(/(加)/g),'+');
							   price = price.replace(new RegExp(/(减)/g),'-');
							   price = price.replace(new RegExp(/(乘)/g),'*');
							   price =  eval('('+price+')');
						       price = price.toFixed(2);
						   }else{
							   price = 0; 
						   }
						   
						   //var no_price = $("#no_price_edit"+key).find("option:selected").text();

						   var aaa = $("#parities_edit").find("option:selected").text();;
						   aaa=aaa.split(" ");							   
						   
						   var price_b = $("#price_a_edit" + key).text();
						   price_b = price_b.replace("元","");
						   
						   var material_price = $("#material_price_edit").val();

						   $("#price_a_edit" + key).html(price + "元");
						   
						   material_price = material_price.replace("元","");

						   var material_price_num = eval('('+material_price + "+" + price+')');
						   
						   if(price_b==""){
						   
						       price_c = material_price_num + "-" + 0;
						   
						   }else{
							   price_c = material_price_num + "-" + price_b;
						   }
                           
						   
						   var price_d = eval('('+price_c+')');
						   price_d = price_d.toFixed(2);
						   
						   $("#material_price_edit").val(price_d + "元");
						   
						   var jiaozhi = $("#jiaozhi_edit").val();
						   var manual_id = $("#manual_id_edit").val();
						   jiaozhi = jiaozhi.replace("元","");
						   manual_id = manual_id.replace("元","");
						   if(jiaozhi==""){
						       var total_price = price_d + "+" + manual_id;
						   }else{
							   var total_price = price_d + "+" + manual_id + "+" + jiaozhi; 
						   }
						   total_price = eval('('+total_price+')');
						   total_price = total_price.toFixed(2);
						   $("#total_price_id_edit").val(total_price + "元");
						   $("#total_price_1_edit").val(total_price + "元");	
						   $("#total_price_2_edit").val(total_price + "元");
						   var coefficient = $("#coefficient_edit").val();
						   var cost_price = total_price + "*" + coefficient;
						   cost_price = eval('('+cost_price+')');
						   cost_price = cost_price.toFixed(2);
						   $("#cost_price_edit").val(cost_price);
						   
						  var piece = $("#piece_edit").val();
						  var default_quote_coefficient = $("#default_quote_coefficient_edit").val();
						  var parities = $("#parities_edit").val();
						  /***var final_quotation = total_price + "*" + piece + "*" + default_quote_coefficient + "/" + parities;
						  final_quotation = eval('('+final_quotation+')');
						  final_quotation = final_quotation.toFixed(2);
						  $("#final_quotation_edit").val(aaa[0] + final_quotation);		
						  ***/
							<!--var monolithic_quote = monolithic_quote  + "/" + piece; -->
						  var monolithic_quote = total_price + "*" + default_quote_coefficient + "/" + parities;
						  
						  monolithic_quote = eval('('+monolithic_quote+')');
						  monolithic_quote = monolithic_quote.toFixed(2);
						  $("#monolithic_quote_edit").val(aaa[0] + monolithic_quote);				   						   	
						var final_quotation = monolithic_quote + "*" + piece;
						var version = $("#version").val();
						  
						  final_quotation = eval('('+final_quotation+ "+" + version+')');
						  final_quotation = final_quotation.toFixed(2);
						  $("#final_quotation_edit").val(aaa[0] + final_quotation);
														 
					   });
					   
					}
					
					
					
					function design_code_edit(){
						
				
						
					    $(document).ready(function(){

							$('#inch_w_edit').val("");
							$('#inch_h_edit').val("");
							$('#cm_w_edit').val("");
							$('#cm_h_edit').val("");							
							if($('#picture_select01_edit').val()=='5'){
							   $('#piece_edit').val("6");
							}else{
							   $('#piece_edit').val("50");	
							}
							$('#material_price_edit').val("");
							$('#manual_id_edit').val("");
							$('#total_price_id_edit').val("");
							$('#price_edit').val("");
							$('#total_price_1_edit').val("");
							$('#total_price_2_edit').val("");
							$('#final_quotation_edit').val("");
							$('#cost_price_edit').val("");
							$('#image_edit').html("");
						var id2 = $("#picture_select01_edit").val();

						if(id2=='5'){
							$('#picture_select02_edit').css('display','none');
							$('#picture_text01_edit').css('display','block');
							$('#picture_text02_edit').css('display','none');
							$('#picture_text03_edit').css('display','block');
							
							document.getElementById("picture_text03_edit").value="";

						}else{
							$('#picture_select02_edit').css('display','block');
							$('#picture_text01_edit').css('display','none');
							$('#picture_text02_edit').css('display','block');
							$('#picture_text03_edit').css('display','none');
																					
							$.ajax({
								url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/hotfix_quotation/design_content_code',//通过Ajax取数据的目标页面
								data:{"id2":id2},
								type:'post',//方法，还可以是"post"
								dataType:'text',//数据类型，还有其它的，详见jQuery手册
								success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
								{
									//$('#aaa').css('display','block');   
									$("#picture_select02_edit").html(locals);
								}										
							});
						}
						
					   });
					}
					
						function gummed_paper_edit(){
						   $(document).ready(function(){
							  if($("#gummed_paper_1_edit").val()!=''){ 						
							   var cm_w = $("#cm_w_edit").val();
							   var cm_h = $("#cm_h_edit").val();
							   
							   //判断网钻口罩/棉布口罩，强制胶纸类型
							   if(($("#picture_text03_edit").val()).indexOf("CM-") >=0 || ($("#picture_text03_edit").val()).indexOf("BM-") >=0){
								   var gummed_paper = $("#gummed_paper_1_edit").val("Silicon Tape");
							   }
							   
							   var gummed_paper = $("#gummed_paper_1_edit").val();

						       var aaa = $("#parities_edit").find("option:selected").text();
						       aaa=aaa.split(" ");								   
							   
								$.ajax({
									url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/hotfix_quotation/gummed_paper',//通过Ajax取数据的目标页面
									data:{"cm_w":cm_w,"cm_h":cm_h,"gummed_paper":gummed_paper},
									type:'post',//方法，还可以是"post"
									dataType:'text',//数据类型，还有其它的，详见jQuery手册
									success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
									{
										locals=locals.split("|");

										locals[1] = eval('('+locals[1]+')');
										locals[1] = locals[1].toFixed(2);

										$("#jiaozhi_edit").val(locals[1] + "元");
                                        $("#tapedata_formula_edit").val(locals[2]);
										
										var material_price = $("#material_price_edit").val();
										
							            var manual_id = $("#manual_id_edit").val();
										material_price = material_price.replace("元","");
										manual_id = manual_id.replace("元","");
										
										if(material_price=="" || manual_id==""){
									        var total_price = 0;
										}else{
											var total_price = locals[1] + "+" + material_price + "+" + manual_id;
										}
										
										total_price = eval('('+total_price+')');
										total_price = total_price.toFixed(2);
								        $("#total_price_id_edit").val(total_price + "元");
										$("#total_price_1_edit").val(total_price + "元");	
										$("#total_price_2_edit").val(total_price + "元");	
										var coefficient = $("#coefficient_edit").val();
										var cost_price = total_price + "*" + coefficient;
										cost_price = eval('('+cost_price+')');
										cost_price = cost_price.toFixed(2);
										$("#cost_price_edit").val(cost_price);
										var piece = $("#piece_edit").val();
										var default_quote_coefficient = $("#default_quote_coefficient_edit").val();
										var parities = $("#parities_edit").val();
										var monolithic_quote = total_price + "*" + default_quote_coefficient + "/" + parities;
										monolithic_quote = eval('('+monolithic_quote+')');
										monolithic_quote = monolithic_quote.toFixed(2);
										$("#monolithic_quote_edit").val(aaa[0] + monolithic_quote);
										//var final_quotation = total_price + "*" + piece + "*" + default_quote_coefficient + "/" + parities;
										
										var version = $("#version").val();
										var final_quotation = monolithic_quote + "*" + piece; 
										final_quotation = eval('('+final_quotation+ "+" + version+')');
										final_quotation = final_quotation.toFixed(2);
	
										$("#final_quotation_edit").val(aaa[0] + final_quotation);											
										
/*										var final_quotation = total_price + "*" + piece + "*" + default_quote_coefficient + "/" + parities;
										final_quotation = eval('('+final_quotation+')');
										final_quotation = final_quotation.toFixed(2);
										$("#final_quotation_edit").val(aaa[0] + final_quotation);
										
										var monolithic_quote = final_quotation  + "/" + piece;
										monolithic_quote = eval('('+monolithic_quote+')');
										monolithic_quote = monolithic_quote.toFixed(2);
										$("#monolithic_quote_edit").val(aaa[0] + monolithic_quote);		*/																						
									}								
									
								});	
							  }
						   });
						   
						}					
					
					function design_code33_edit(){
					 $(document).ready(function(){	
					   var id = $("#picture_select02_edit").val();
					   
					   var aaa = $("#parities_edit").find("option:selected").text();;
					   aaa=aaa.split(" ");						   
					   
					   $('#aaa_edit').css('display','none');
						$.ajax({
							url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/hotfix_quotation/add_design_code',//通过Ajax取数据的目标页面
							data:{"id":id},
							type:'post',//方法，还可以是"post"
							dataType:'text',//数据类型，还有其它的，详见jQuery手册
							success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
							{
								
								locals=locals.split("|");
								if(locals[1]!=""){
									$("#material_edit").html(locals[0]);
									$("#inch_w_edit").val(locals[1]);
									$("#inch_h_edit").val(locals[2]);
									$("#cm_w_edit").val(locals[3]);
									$("#cm_h_edit").val(locals[4]);
									$("#shejishi_edit").val(locals[5]);
									$("#image_edit").html("<img style='height:120px; width:120px;' src = " + locals[6] + ">");
									$("#image_hidden_edit").val(locals[6]);
									var price = eval('('+locals[7]+')');
									price = price.toFixed(2);
									$("#material_price_edit").val(price + "元");
									var manual = eval('('+locals[8]+')');
									manual = manual.toFixed(2);
									$("#manual_id_edit").val(manual + "元");
									var jiaozhi = $("#jiaozhi_edit").val();
									jiaozhi = jiaozhi.replace("元","");
									if(jiaozhi==""){
									   var total_price = price + "+" + manual + "+" + 0;
									}else{
									   var total_price = price + "+" + manual + "+" + jiaozhi;	
									}
									total_price = eval('('+total_price+')');
									total_price = total_price.toFixed(2);
									$("#total_price_id_edit").val(total_price + "元");
									$("#total_price_1_edit").val(total_price + "元");
									$("#total_price_2_edit").val(total_price + "元");
									
									var coefficient = $("#coefficient_edit").val();
									var cost_price = total_price + "*" + coefficient;
									cost_price = eval('('+cost_price+')');
									cost_price = cost_price.toFixed(2);
									$("#cost_price_edit").val(cost_price);
									
									var piece = $("#piece_edit").val();
									var default_quote_coefficient = $("#default_quote_coefficient_edit").val();
									var parities = $("#parities_edit").val();
									<!--var final_quotation = total_price + "*" + piece + "*" + default_quote_coefficient + "/" + parities;
									final_quotation = eval('('+final_quotation+')');
									final_quotation = final_quotation.toFixed(2);
									$("#final_quotation_edit").val(aaa[0] + final_quotation);
									-->
									//var monolithic_quote = monolithic_quote  + "/" + piece;
									var monolithic_quote = total_price + "*" + default_quote_coefficient + "/" + parities;
									monolithic_quote = eval('('+monolithic_quote+')');
									monolithic_quote = monolithic_quote.toFixed(2);
									$("#monolithic_quote_edit").val(aaa[0] + monolithic_quote);
									var final_quotation = monolithic_quote + "*" + piece; 
var version = $("#version").val();
									
									final_quotation = eval('('+final_quotation+ "+" + version+')');
									final_quotation = final_quotation.toFixed(2);

									$("#final_quotation_edit").val(aaa[0] + final_quotation);
								}
							}										
						});
					   });
					}
					
				</script>                
<script>
function picture_select(){
	var id = $("#picture_select01_edit").val();

	if(document.getElementById('picture_select01_edit').value==1){
		document.getElementById('picture_select02_edit').style.display='none';
		document.getElementById('picture_text01_edit').style.display='block';
		document.getElementById('picture_text02_edit').style.display='none';
		document.getElementById('picture_text03_edit').style.display='block';
	}else{
		document.getElementById('picture_select02_edit').style.display='block';
		document.getElementById('picture_text01_edit').style.display='none';
		document.getElementById('picture_text02_edit').style.display='block';
		document.getElementById('picture_text03_edit').style.display='none';
	}
}
</script>       
        
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
          <input type="hidden" name="no_submit_value_edit" id="no_submit_value_edit" value="" />
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
                    <input type="text" class="sIE_No" name="no_customer_num_a" value="<?php echo $this->_tpl_vars['customer_code']; ?>
" style="width:100px;" id="no_customer_num_1_edit" onkeyup="no_customer_num_edit();" />
                </div>
                
                <div class="sIE_l_01" style="width:200px;">
                    <div class="sIE_l_01_title">名称:</div>
					<input type="text" class="sIE_No"  value="<?php echo $this->_tpl_vars['design_pic_name']; ?>
" name="no_name" id="no_name_edit"style="width:100px;" onkeyup="design_pic_name_no_edit();"/>
                    <input type="hidden" class="sIE_No"  value="<?php echo $this->_tpl_vars['design_pic_name']; ?>
" name="hidden_name" id="hidden_name" style="width:100px;" />
                </div>
                <div class="sIE_l_01" style="width:200px;">
                  <div class="sIE_l_01_title">客户名:</div>
                    <input type="text" class="sIE_No" value="<?php echo $this->_tpl_vars['customer_name']; ?>
" name="no_customer_code" id="no_customer_code_edit" style="width:100px;"  readonly="readonly" />
                </div>

                <div class="sIE_l_01" style="width:200px;">
                <div class="sIE_l_01_title" style="width:80px;">报价类型:</div>
               <input type="hidden" name="quotation_category_id_no_edit_1" value="<?php echo $this->_tpl_vars['quotation_category_id']; ?>
">
                    <select class="picture_select01" name="quotation_category_id_no_edit" id="quotation_category_id_no_edit"  disabled="disabled" style="width:106px; height:26px;">
                         <?php if ($this->_tpl_vars['quotation_category_id'] != '5'): ?>
                        
                            <option value="定制报价" >定制报价</option>
                            <option value="Stock改色" >Stock改色</option>
                        <?php else: ?>
                       
                            <option value="Stock改色" >Stock改色</option>
                            <option value="定制报价" >定制报价</option>
                        <?php endif; ?>
                    </select>
               </div>

               
                <div class="sIE_l_01" style="width:200px;">
                  <div class="sIE_l_01_title">公司:</div>
                    <input type="text" class="sIE_No" name="no_customer_company" value="<?php echo $this->_tpl_vars['customer_company']; ?>
" id="no_customer_company_edit" style="width:100px;"  readonly="readonly" />
                </div>
                <div class="sIE_l_01" style="width:200px;">
                  <div class="sIE_l_01_title">报价编号:</div>
                    <input type="text" class="sIE_No" name="no_stock_number" id="no_stock_number" readonly="readonly" value="<?php echo $this->_tpl_vars['no_stock_number']; ?>
" style="width:100px;" />
                </div>
                
                <div class="sIE_l_01" style="width:200px;">
                  <div class="sIE_l_01_title">备损数量:</div>
                    <input id="hq_no_beisun_edit" class="sIE_No" style="width:100px;" type="text" onchange="no_beisun_change_edit()" name="no_preparation_number" value="<?php echo $this->_tpl_vars['no_preparation_number']; ?>
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
                  	<?php if ($this->_tpl_vars['version'] == ''): ?>
                    <input class="sIE_No digits" style="width:100px;"  onkeyup="version_b()" type="text" id="no_version" name="no_version" value="0" readonly="readonly" >
                    <?php else: ?>
                    <input class="sIE_No digits" style="width:100px;"  onkeyup="version_b()" type="text" id="no_version" name="no_version" value="<?php echo $this->_tpl_vars['version']; ?>
" readonly="readonly" >
                    <?php endif; ?>
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
                
                <div id="hq_no_beisun_error_edit" style="line-height: 26px; float: left; color: rgb(255, 0, 0); display:none; margin-left: 5px;">备损数量不为0，此做货单需要主管审核！</div>
                
                
                <div class="sIE_l_01" style="width:200px;">
              <div class="sIE_l_01_title" style="width:80px; line-height:26px;">报关品类:</div>
              <select class="picture_select01" name="no_order_category" id="no_order_category" style="width:106px; height:26px;">
                <option value="">请选择</option>
                <?php $_from = $this->_tpl_vars['order_category']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['oc']):
?> <?php if ($this->_tpl_vars['order_category_id'] == $this->_tpl_vars['oc']['id']): ?>
                <option selected="selected" value="<?php echo $this->_tpl_vars['oc']['id']; ?>
"><?php echo $this->_tpl_vars['oc']['name']; ?>
</option>
                <?php else: ?>
                <option value="<?php echo $this->_tpl_vars['oc']['id']; ?>
"><?php echo $this->_tpl_vars['oc']['name']; ?>
</option>
                <?php endif; ?> <?php endforeach; endif; unset($_from); ?>
              </select>
            </div>
                
                
                <div id="hq_no_result_edit" style="line-height: 26px; float: left; color: rgb(255, 0, 0); margin-left: 10px; display:none;"></div>
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
					function design_pic_name_no_edit(){
						
						var no_name = $("#no_name_edit").val();
						var hidden_name = $("#hidden_name").val();
						var no_coefficient = $("#no_coefficient_edit").val();//成本系数
						var no_default_quote_coefficient = $("#no_default_quote_coefficient_edit").val();//报价系数
						var quotation_category = $("#quotation_category_id_no_edit").val();
						var no_piece = $("#no_piece_edit").val();//片数
						if(quotation_category=='Stock改色' && no_name!=''){
							$.ajax({
							  url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/hotfix_quotation/add_stock_no',//通过Ajax取数据的目标页面
							  data:{"stock":no_name},
								  type:'post',//方法，还可以是"post"
								  dataType:'text',//数据类型，还有其它的，详见jQuery手册
								  success:function(locals){//成
								       
									   locals=locals.split("|");
									   $("#material_table_edit").html(locals[0]);
									   $("#no_inch_w_edit").val(locals[1]);
									   $("#no_inch_h_edit").val(locals[2]);
									   $("#no_cm_w_edit").val(locals[3]);
									   $("#no_cm_h_edit").val(locals[4]);
									   $("#image_no_edit").css("display","block");
									   $("#image_no_1_edit").css("display","none");
									   $("#image_no_edit").html("<img style='height:260px; width:260px;' src = " + locals[5] + ">");
								      
									  
									   $("#cdr_no_edit").css("display","block");
									   $("#cdr_no_1_edit").css("display","none");
									   $("#cdr_no_edit").html("CDR:<a href="+ locals[6]+">下载查看</a>");
									   
									 //  $("#no_gummed_paper_1").removeAttr("disabled");
									   $("#no_material_price_edit").val(locals[7]+"元");
									  
									   var final_quotation = eval('('+locals[8]+')');
								
									   if(locals[8]!=undefined){
										 final_quotation = final_quotation.toFixed(2);
									   }else{
										 final_quotation = final_quotation;
									   }
									   var a=Math.ceil(locals[1]/19);
									   var b=Math.ceil(locals[2]/19);
									   manual=final_quotation*a*b;
									   manual=manual.toFixed(2);
									   $("#no_manual_id_edit").val(manual + "元");
									   var jiaozhi = $("#no_jiaozhi_edit").val();
									   jiaozhi = jiaozhi.replace("元","");
									   if(manual==''){
										   manual=0;
									   }
									   if(locals[7]==''){
										   locals[7]=0;
									   }
									   if(jiaozhi==''){
										   jiaozhi=0;
									   }
							
									  var price = eval('('+manual + "+" + locals[7] + "+" + jiaozhi+')'); 
									  
									  
									 var chengben=eval('('+price + "*" + no_coefficient + ')').toFixed(2);
									 var total_price=eval('('+price + "*" + no_default_quote_coefficient + ')').toFixed(2);
									 var total=eval('('+total_price + "*" + no_piece + ')').toFixed(2);
									 $("#no_total_price_id_2_edit").val(price+"元");//合计
									 $("#no_cost_price_edit").val(chengben);//成本
									 $("#no_monolithic_quote_edit").val("¥"+total_price);//单片报价
									 $("#no_final_quotation_edit").val("¥"+total);//单片报价
								}
							});
						}
						
						
						
						
						
					}
					
					
					
					
				 </script>	
              
              <div class="sIE_r" style="width:450px;">
              	<div class="sIE_l_01" style="margin-top:0px; width:210px;">
                  <div class="sIE_l_01_title" style="width:60px; height:80px;">尺寸:</div>
                  <div class="sIE_r01" style="float:left; width:150px;">
                  
                  
                  <?php if ($this->_tpl_vars['quotation_category_id'] != '5'): ?>
          
                        <div class="sIE_r01_div">
                            <input type="text" name="no_inch_w" value="<?php echo $this->_tpl_vars['inch_w']; ?>
" id="no_inch_w_edit" class="sIE_No" style="width:100px;" />
                            <div style=" margin-left:5px; float:left;">inch W</div>
                        </div>
                        <div class="sIE_r01_div">
                            <input type="text" name="no_inch_h" value="<?php echo $this->_tpl_vars['inch_h']; ?>
" id="no_inch_h_edit" class="sIE_No" style="width:100px;" />
                            <div style=" margin-left:5px; float:left;">inch H</div>
                        </div>
                        <div class="sIE_r01_div">
                            <input type="text" name="no_cm_w" value="<?php echo $this->_tpl_vars['cm_w']; ?>
" id="no_cm_w_edit" class="sIE_No" style="width:100px;" />
                            <div style=" margin-left:5px; float:left;">cm W</div>
                        </div>
                        <div class="sIE_r01_div">
                            <input type="text" name="no_cm_h" value="<?php echo $this->_tpl_vars['cm_h']; ?>
" id="no_cm_h_edit" class="sIE_No" style="width:100px;" />
                            <div style=" margin-left:5px; float:left;">cm H</div>
                        </div>
                    <?php else: ?>
                        <div class="sIE_r01_div">
                            <input type="text" name="no_inch_w" value="<?php echo $this->_tpl_vars['inch_w']; ?>
" id="no_inch_w_edit" class="sIE_No" style="width:100px;" disabled="disabled"/>
                            <div style=" margin-left:5px; float:left;">inch W</div>
                        </div>
                        <div class="sIE_r01_div">
                            <input type="text" name="no_inch_h" value="<?php echo $this->_tpl_vars['inch_h']; ?>
" id="no_inch_h_edit" class="sIE_No" style="width:100px;" disabled="disabled"/>
                            <div style=" margin-left:5px; float:left;">inch H</div>
                        </div>
                        <div class="sIE_r01_div">
                            <input type="text" name="no_cm_w" value="<?php echo $this->_tpl_vars['cm_w']; ?>
" id="no_cm_w_edit" class="sIE_No" style="width:100px;" disabled="disabled"/>
                            <div style=" margin-left:5px; float:left;">cm W</div>
                        </div>
                        <div class="sIE_r01_div">
                            <input type="text" name="no_cm_h" value="<?php echo $this->_tpl_vars['cm_h']; ?>
" id="no_cm_h_edit" class="sIE_No" style="width:100px;" disabled="disabled"/>
                            <div style=" margin-left:5px; float:left;">cm H</div>
                        </div>
                     <?php endif; ?>
                    
                    
                    
                    
                  </div>
                  
                  <div class="sIE_l_01" style="width:200px;">
                  <div class="sIE_l_01_title" style="width:60px; line-height:26px;">胶纸名称:</div>
                    <select class="picture_select02" style="float:left; width:106px; margin-top:5px; height:24px;" id="no_gummed_paper_1_edit" name="no_tapedata_id" onchange="no_gummed_paper_edit()">
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
                    <input type="text" name="no_pcs" id="no_piece_edit" class="sIE_No" value="<?php echo $this->_tpl_vars['no_pcs']; ?>
" onkeyup="no_piece1_edit()" style="width:100px; height:20px;" />
                </div>
                
                 <div class="sIE_l_01" style="width:200px;">
                  <div class="sIE_l_01_title" style="width:60px; line-height:26px;">报价系数:</div>
                    <?php if ($this->_tpl_vars['quote_factor']): ?>
                               <input type="text" name="no_quote_factor" id="no_default_quote_coefficient_edit" onkeyup="no_default_quote_coefficient1_edit()" class="sIE_No" value="<?php echo $this->_tpl_vars['quote_factor']; ?>
" style="width:100px; height:20px;" />
                            <?php else: ?>
                               <input type="text" name="no_quote_factor" id="no_default_quote_coefficient_edit" onkeyup="no_default_quote_coefficient1_edit()" class="sIE_No" value="<?php echo $this->_tpl_vars['default_quote_coefficient']; ?>
" style="width:100px; height:20px;" />
                            <?php endif; ?>
                </div>
                
                 <div class="sIE_l_01" style="width:200px;">
                  <div class="sIE_l_01_title" style="width:60px; line-height:26px;">货币:</div>
                     <select id="no_parities_edit" name="no_exchange_rate_id" onchange="no_parities1_edit()" class="picture_select02" style="float:left; height:24px; width:105px;">
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
              
              <div class="sIEK" style="width:190px; padding-left:30px;">
        <div class="sIE_l_01" style="width:100%;">
          <div class="sIE_l_01_title" style="width:40px;">材料:</div>
          <div class="sIE_r01" style="width:120px;">
            <div class="sIE_r01_div">
              <select class="sIE_r01_Select" id="material_select_edit" style="width:120px;">
                <option value=""></option>
                <?php $_from = $this->_tpl_vars['meterials']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['mt']):
?>
                <option value="<?php echo $this->_tpl_vars['mt']['material_name']; ?>
"><?php echo $this->_tpl_vars['mt']['material_name']; ?>
</option>
                <?php endforeach; endif; unset($_from); ?>
              </select>
            </div>
            
          </div>
        </div>
        
        <div class="sIE_l_02" id="material_info_edit" style="display:none;">
          <div class="sIE_l_02_div">
            <div class="sIE_l_01_title" style="width:40px;">颜色:</div>
            <select id="material_info_color_edit" class="sIE_r01_Select" style="width:120px;">
              
            </select>
          </div>
          <div class="sIE_l_02_div">
            <div class="sIE_l_01_title" style="width:40px;">尺寸:</div>
            <input type="text" class="sIE_No" id="size_width_edit" style="width:80px;"  />
            <div class="sIE_No" style="width:54px; margin-left:5px;">MM W</div>
            <!--<select class="sIE_sizeSelect" id="sIE_size01">
              <option value="1">inch</option>
              <option value="2">cm</option>
            </select>-->
          </div>
          
          <div class="sIE_l_02_div">
            <div class="sIE_l_01_title" style="width:40px;">&nbsp;</div>
            
            <input type="text" class="sIE_No" id="size_height_edit"  style="width:80px;" />
            <div class="sIE_No" style="width:54px; margin-left:5px;">MM H</div>
            <!--<select class="sIE_sizeSelect" id="sIE_size02">
              <option value="1">inch</option>
              <option value="2">cm</option>
            </select>-->
          </div>
          
          <div class="sIE_l_02_div">
            <div class="sIE_l_01_title" style="width:40px;">&nbsp;</div>
            
            <input type="text" class="sIE_No" id="size_inch_width_edit"  style="width:80px;" />
            <div class="sIE_No" style="width:54px; margin-left:5px;">inch W</div>
            <!--<select class="sIE_sizeSelect" id="sIE_size02">
              <option value="1">inch</option>
              <option value="2">cm</option>
            </select>-->
          </div>
          
          
          <div class="sIE_l_02_div">
            <div class="sIE_l_01_title" style="width:40px;">&nbsp;</div>
            
            <input type="text" class="sIE_No" id="size_inch_height_edit"  style="width:80px;" />
            <div class="sIE_No" style="width:54px; margin-left:5px;">inch H</div>
            <!--<select class="sIE_sizeSelect" id="sIE_size02">
              <option value="1">inch</option>
              <option value="2">cm</option>
            </select>-->
          </div>
          
          
          <div class="sIE_l_02_div">
            <div class="sIE_l_01_title" style="width:40px;">数量:</div>
            <input type="text" value="1" readonly="readonly" class="sIE_size" id="material_quantity_edit" style="width:120px;" />
          </div>
          <button type="button" id="insert_material1_edit">添加材料</button>
        </div>
        
        <div class="sIE_l_02" id="material_info_c_edit" style="display:none;">
          <div class="sIE_l_02_div">
            <div class="sIE_l_01_title" style="width:40px;">颜色:</div>
             <select id="material_info_c_color_edit" class="sIE_r01_Select" style="width:120px;">
              
            </select>
          </div>
          <div class="sIE_l_02_div">
            <div class="sIE_l_01_title" style="width:40px;">尺寸:</div>
            <select class="sIE_r01_Select" id="material_c_size_edit" style="width:120px;">
              <option>请选择...</option>
            </select>
          </div>
          <div class="sIE_l_02_div">
            <div class="sIE_l_01_title" style="width:40px;">数量:</div>
            <input type="text"  class="sIE_size" id="material_c_quantity_edit" style="width:116px;" />
          </div>
          <button type="button" id="insert_material2_edit">添加材料</button>
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
                           <!-- <th>公式选择</th>-->
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
<!--                            <td>
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
                            </td>-->
                            <td id="no_price_a_edit<?php echo $this->_tpl_vars['qsm']['id']; ?>
"><?php echo $this->_tpl_vars['qsm']['material_total_price']; ?>
</td>
                            <td onClick='getDel(this,<?php echo $this->_tpl_vars['qsm']['id']; ?>
)'><a href='#'>删除</a></td>
                        </tr>                        

                        <?php endforeach; endif; unset($_from); ?>
                    </table>              	  
                </div>
                
                </form>

                  <div class="sIE_r" style="height:300px; width:260px; margin-top:-260px; float:right;">
                    
                    
                     <div class="sIE_r_img" style="height:300px; width:260px; margin-left:0px;" id="image_no_edit">
					 <iframe name="yframe_hotfix_edit1" src="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/hotfix_quotation/two_img_upload" style="border:none; width:260px; height:300px;"></iframe>
                         <!-- <div style="float:left;  width:260px; height:auto;">
                            <iframe style="border:none; width:260px; height:260px;"></iframe>
                          </div>  -->
                     </div>
                    
                   <!-- <div class="sIE_r_img" style="height:300px; width:260px; margin-left:0px;" id="image_no_1_edit">
                    <div style="float:left;  width:260px; height:auto;"> 
                         <iframe name="yframe_hotfix_edit1" src="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/hotfix_quotation/two_img_upload" style="border:none; width:260px; height:300px;"></iframe>
                    </div>
                    </div> -->    
                    <!--<form style="float:left; width:260px;" id="hq_upload_jpg_edit" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/hotfix_quotation/two_img_upload" target="yframe_hotfix_edit1" method="post" enctype="multipart/form-data" >
                      <div style="float:left; height:30px; width:60px; overflow:hidden; margin-left:20px; position:relative;">
                       <input type="file" class="sIE_r_img_file"  name="upload_file[]" multiple="multiple" style=" opacity:0; position:relative; z-index:10; margin-top:0px;" />
                       <input type="button" class="sIE_r_img_file" name="jpg" style=" opacity:1; width:60px; text-align:center; height:24px; position:absolute; z-index:9; margin-top:0px;" value="浏览" />
                      </div>
                       <input type="button" id="hq_jpg_upload_submit_edit" value="上传JPG和CDR" style=" float:right; width:100px;" /> 
                     
                    </form>-->
					<form style="float:left; width:260px;" id="hq_upload_jpg_edit" enctype="multipart/form-data">
                    	<input type="file" name="upload_file[]" value="上传" multiple="multiple"  style="position:relative; z-index:10; margin-top:0px;" />  
					</form>
					<button id="hq_jpg_upload_submit_edit">提交</button>
              </div>

                   <!--<div class="sIE_r" style="height:36px; width:260px; margin-top:20px; padding-top:15px; float:right; border-top:dotted 1px #CCC;">
                   
                   
                    <div class="sIE_r_img" style="height:36px; width:260px; margin-left:0px; display:none;" id="cdr_no_edit">
                      <div style="float:left;  width:260px; height:auto;"> 
                       
                        <iframe  style="border:none; width:260px; height:260px;"></iframe>
                      </div>
                   </div>
                   
                   
                    <div class="sIE_r_img" style="height:36px; width:260px; margin-left:0px;" id="cdr_no_1_edit">
                    <div style="float:left;  width:260px; height:auto;"> 
                      <img src="sss.jpg" width="224px" height="224px" />
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
                    </div>-->

              <div class="sIE_l_02" style="margin-top:65px; margin-top:5%;">
        <div class="button" style="margin-left:80%; margin-right:5px;">
           <div class="buttonContent">          
              <button type="button" id="no_design_content_save_edit">确定</button>
           </div>
        </div>
        <div class="button">
          <div class="buttonContent"  style="margin-right:5px;">
            <button class="close">取消</button>
          </div>
        </div>
         <div class="button">
        <div class="buttonContent">
          <button type="button" id="no_add_order_edit">添加做货单</button>
        </div>
      </div>
        
      </div>    
        </div>
		     
</div>
</div>

<!-- {literal} --> 
<script type="text/javascript">

	function no_price_num_edit(key){
	   $(document).ready(function(){
		   
		   var no_price = $("#no_price_edit"+key).find("option:selected").text();

           var w_h_id = $("#w_h_id"+key).text();
		   w_h_id=w_h_id.split("*");
		   w_h_id[1] = w_h_id[1].replace(new RegExp(/( inch)/g),'');
		   var sss_materialformula = $("#sss_materialformula"+key).val();

		   if(no_price!='选择公式'){
			   no_price = no_price.replace("$",sss_materialformula);
			   no_price = no_price.replace("W",w_h_id[0]*25.4);
			   no_price = no_price.replace("H",w_h_id[1]*25.4);
			   no_price = no_price.replace(new RegExp(/(除)/g),'/');
			   no_price = no_price.replace(new RegExp(/(加)/g),'+');
			   no_price = no_price.replace(new RegExp(/(减)/g),'-');
			   no_price = no_price.replace(new RegExp(/(乘)/g),'*');
			   no_price =  eval('('+no_price+')');
			   no_price = no_price.toFixed(2);
		   }else{
			   no_price = 0; 
		   }
		  
		   var aaa = $("#no_parities_edit").find("option:selected").text();
		   aaa=aaa.split(" ");			   
		   
		   var no_price_b = $("#no_price_a_edit"+key).text();
		   no_price_b = no_price_b.replace("元","");		   
		   
		   $("#no_price_a_edit" + key).html(no_price + "元");
		   
		   var material_price = $("#no_material_price_edit").val();

		   material_price = material_price.replace("元","");
		   
		   if(no_price_b==""){
			   no_price_b = 0;
		   }

		   if(material_price==""){
		       var material_price_num = eval('('+no_price+')');
		   }else{
			   var material_price_num = eval('('+material_price + "+" + no_price + "-" + no_price_b+')'); 
		   }
			   
		   material_price_num = material_price_num.toFixed(2);	   
			   
		   $("#no_material_price_edit").val(material_price_num + "元")		   

			var no_jiaozhi = $("#no_jiaozhi_edit").val();   //获取胶纸费				
			var no_material_price_1 = $("#no_material_price_edit").val();   //获取材料费	
			var no_manual_id = $("#no_manual_id_edit").val();   //获取手工费
			
			no_jiaozhi = no_jiaozhi.replace("元","");                     //
			no_material_price_1 = no_material_price_1.replace("元","");       //   过滤掉"元"
			no_manual_id = no_manual_id.replace("元","");                   // 
			
			if(no_jiaozhi==""){
				var total_price = no_material_price_1 + "+" + no_manual_id;
			}else{
				var total_price = no_material_price_1 + "+" + no_manual_id + "+" + no_jiaozhi; 
			}
			total_price = eval('('+total_price+')');  //运算符转化为结果
			total_price = total_price.toFixed(2);   // 保留2位小数
			$("#no_total_price_id_edit").val(total_price + "元");     //
			$("#no_total_price_id_1_edit").val(total_price + "元");	 //  合计
			$("#no_total_price_id_2_edit").val(total_price + "元");	 //	
			
			var no_coefficient = $("#no_coefficient_edit").val();   //工厂成本系数
			var no_cost_price = total_price + "*" + no_coefficient;  //合计*系数 公式
			no_cost_price = eval('('+no_cost_price+')');
			no_cost_price = no_cost_price.toFixed(2);
			$("#no_cost_price_edit").val(no_cost_price);  //工厂成本
			
			var no_piece = $("#no_piece_edit").val();  //片数
			var no_default_quote_coefficient = $("#no_default_quote_coefficient_edit").val();  //报价系数
			var no_parities = $("#no_parities_edit").val();  //汇率
			
			var monolithic_quote = total_price + "*" + no_default_quote_coefficient + "/" + no_parities;
			monolithic_quote = eval('('+monolithic_quote+')');
			monolithic_quote = monolithic_quote.toFixed(2);
			$("#no_monolithic_quote_edit").val(aaa[0] + monolithic_quote);					
			
			var no_version = $("#no_version").val(); 
			
			var final_quotation = monolithic_quote + "*" + no_piece;   //最终报价公式
			final_quotation = eval('('+final_quotation+ "+" +no_version+')');
			final_quotation = final_quotation.toFixed(2);
			$("#no_final_quotation_edit").val(aaa[0] + final_quotation);  //最终报价	

			$.ajax({
				url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/hotfix_quotation/gongshi_price',//通过Ajax取数据的目标页面
				data:{"price":$("#no_price_a_edit"+key).text(),"id":key,"no_price":$("#no_price_edit"+key).val()},
				type:'post',//方法，还可以是"post"
				dataType:'text',//数据类型，还有其它的，详见jQuery手册
				success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
				{
																				
				}								
				
			});					   						   	
										 
	   });
	   
	}
	
	function no_gummed_paper_edit(){
	   $(document).ready(function(){	
	   if($("#no_gummed_paper_1_edit").val()!=''){ 					
		   var cm_w = $("#no_cm_w_edit").val();
		   var cm_h = $("#no_cm_h_edit").val();

		   var gummed_paper = $("#no_gummed_paper_1_edit").val();

		   var aaa = $("#no_parities_edit").find("option:selected").text();
		   aaa=aaa.split(" ");			   
		   
			$.ajax({
				url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/hotfix_quotation/gummed_paper',//通过Ajax取数据的目标页面
				data:{"cm_w":cm_w,"cm_h":cm_h,"gummed_paper":gummed_paper},
				type:'post',//方法，还可以是"post"
				dataType:'text',//数据类型，还有其它的，详见jQuery手册
				success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
				{
					locals=locals.split("|");
					
					locals[1] = eval('('+locals[1]+')');
					locals[1] = locals[1].toFixed(2);					
					
					$("#no_jiaozhi_edit").val(locals[1] + "元");
					
					$("#no_tapedata_formula_edit").val(locals[2]);

				    var no_material_price = $("#no_material_price_edit").val();//材料费
					var no_manual_id = $("#no_manual_id_edit").val();//手工费
					
					no_material_price = no_material_price.replace("元","");
					no_manual_id = no_manual_id.replace("元","");

					if(no_material_price!=""){
						if(locals[1]!=""){
					       var total_price = locals[1] + "+" + no_material_price + "+" + no_manual_id;
						}else{
						   var total_price = 0;	
						}
				    }else{
						if(locals[1]!=""){
						   var total_price = locals[1];
						}else{
						   var total_price = 0;	
						}						   
					}
						
					total_price = eval('('+total_price+')');
					total_price = total_price.toFixed(2);
					$("#no_total_price_id_edit").val(total_price + "元");
					$("#no_total_price_id_1_edit").val(total_price + "元");	
					$("#no_total_price_id_2_edit").val(total_price + "元");				

					var no_coefficient = $("#no_coefficient_edit").val();
					var cost_price = total_price + "*" + no_coefficient;
					cost_price = eval('('+cost_price+')');
					cost_price = cost_price.toFixed(2);
					$("#no_cost_price_edit").val(cost_price);  //工厂成本总价
					
					var no_piece = $("#no_piece_edit").val();
					var no_default_quote_coefficient = $("#no_default_quote_coefficient_edit").val();
					var no_parities = $("#no_parities_edit").val();
					
					var no_version = $("#no_version").val();
					
					var monolithic_quote = total_price + "*" + no_default_quote_coefficient + "/" + no_parities;   
					monolithic_quote = eval('('+monolithic_quote+')');
					monolithic_quote = monolithic_quote.toFixed(2);
					$("#no_monolithic_quote_edit").val(aaa[0] + monolithic_quote);						
					
					var final_quotation = monolithic_quote + "*" + no_piece;
					final_quotation = eval('('+final_quotation+ "+" + no_version+')');
					final_quotation = final_quotation.toFixed(2);
					$("#no_final_quotation_edit").val(aaa[0] + final_quotation);
					
																					
				}
				
			});	
	   	}
	   });
	   
	}							

$(document).ready(function()  
{
	/*$("#hq_jpg_upload_submit_edit").click(function (){
		$("#image_no_edit").css("display","none");
		$("#image_no_edit").val("");
		$("#image_no_1_edit").css("display","block");
		$("#hq_upload_jpg_edit").submit();
	});*/
	
	$("#hq_jpg_upload_submit_edit").click(function (){
		var formData = new FormData($('#hq_upload_jpg_edit')[0]);
        $.ajax({
			type: 'post',
			url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/hotfix_quotation/two_img_upload',          
			data: formData,
			cache: false,
			processData:false,  
            contentType: false,  
			dataType:'json', 
		}).success(function (data){  
				$.each(data,function(i,n){
				   if(i=='jpg'){
				   		$('#image_no_edit').empty();
				   		$('#image_no_edit').append('<a href="'+n+'"  target="_blank"><img src="'+n+'" width="280" height="300" /></a>');
				   }
				 });
				
				
		}).error(function(){ 
				
		});
	});
	
	
	
	
	$("#hq_cdr_upload_submit_edit").click(function (){
		$("#cdr_no_edit").css("display","none");
		$("#cdr_no_edit").val("");
		$("#cdr_no_1_edit").css("display","block");
		$("#hq_upload_cdr_edit").submit();
	});	
	
	
    $("#design_content_save_edit").click(function(){
		
		 var check_arr = '';
		$(".picture_select").each(function(){ //由于复选框一般选中的是多个,所以可以循环输出
			if(check_arr == ''){
				if($(this).val()!=''){
				   check_arr += $(this).val();
				}else{
				   check_arr += 0;	
				}
				//sale_detail += $("#sale_detail" + $(this).val()).val();
			}else{
				if($(this).val()!=''){
					check_arr += '+'+$(this).val();
				}else{
					check_arr += '+'+0;
				}
				//sale_detail += '|'+$("#sale_detail" + $(this).val()).val();
			}
			
			
		});
		
/*		var strCookie=document.cookie;

              //将多cookie切割为多个名/值对

              var arrCookie=strCookie.split("; ");

              //遍历cookie数组，处理每个cookie对

              for(var i=0;i<arrCookie.length;i++){

                     var arr=arrCookie[i].split("=");

                     //找到名称为userId的cookie，并返回它的值

                     if("versionkk"==arr[0]){

                            versionkk=arr[1];

                            break;

                     }

              }*/
		var versions = $("#version").val();
		var picture_select01_edit = $("#picture_select01_edit").val();
		var piece_edit = $("#piece_edit").val();
		var picture_select02 = $("#quotation_code").val();
		var parities = $("#parities_edit").val();
		var picture_text03 = $("#picture_text03_edit").val();
		if($("#hq_customer_code_edit").val()== ""){
			$("#hq_result_edit").css("display","block");
			$("#hq_result_edit").html("客户代码不能为空！");
		}else if($("#no_customer_code_edit").val()== ""){
			$("#hq_result_edit").css("display","block");
			$("#hq_result_edit").html("客户名不能为空！");
		}
		else if(!isNumber_z($('#hq_beisun_edit').val()) && !isNumber_fp($('#hq_beisun_edit').val()) && isEmpty($('#hq_beisun_edit').val())){
			$("#hq_result_edit").css("display","block");
			$("#hq_result_edit").html("备损数量为正整数！");
		}
		else if($("#quotation_category_id_edit").val()== ""){
			$("#hq_result_edit").css("display","block");
			$("#hq_result_edit").html("请选择报价类型！");
		}
		
		else if(($("#picture_text03_edit").val()== "" && $("#picture_text03_edit").is(":visible")) || ($("#picture_text02_edit").val()== "" && $("#picture_text02_edit").is(":visible"))){
			$("#hq_result_edit").css("display","block");
			$("#hq_result_edit").html("报价名称不能为空！");
		}
		else if((($("#picture_select02_edit").val()== "" || $("#picture_select02_edit").val()== "0") && $("#picture_select02_edit").is(":visible")) || ($("#picture_text01_edit").val()== "" && $("#picture_text01_edit").is(":visible"))){
			$("#hq_result_edit").css("display","block");
			$("#hq_result_edit").html("报价编号不能为空！");
		}
		
		else if($("#order_category").val()== ""){
			$("#hq_result_edit").css("display","block");
			$("#hq_result_edit").html("请选择报关品类！");
		}
		
		
		else if($("#inch_w_edit").val()== "" || $("#inch_h_edit").val()== "" || $("#cm_w_edit").val()== "" || $("#cm_h_edit").val()== ""){
			$("#hq_result_edit").css("display","block");
			$("#hq_result_edit").html("尺寸不为空,请填写正确报价名称！");
		}

		else if($("#gummed_paper_1_edit").val()== ""){
			$("#hq_result_edit").css("display","block");
			$("#hq_result_edit").html("请选择胶纸名称！");
		}
		else if(check_arr.indexOf("a")>-1){
			$("#hq_result_edit").css("display","block");
			$("#hq_result_edit").html("请选择公式！");
		}
		else if($("#piece_edit").val()== "" || $("#piece_edit").val() <= 0 || (!isNumber_z($('#piece_edit').val()) && isEmpty($('#piece_edit').val()))){
			$("#hq_result_edit").css("display","block");
			$("#hq_result_edit").html("片数不能为空,且大于0！");
		}
		else if($("#default_quote_coefficient_edit").val()== "" || $("#default_quote_coefficient_edit").val() <= 0 || (!isNumber_z($('#default_quote_coefficient_edit').val()) && isEmpty($('#default_quote_coefficient_edit').val()))){
			$("#hq_result_edit").css("display","block");
			$("#hq_result_edit").html("报价系数不能为空,且大于0！");
		}
		else if($("#hq_customer_name_edit").val()== ""){
			$("#hq_result_edit").css("display","block");
			$("#hq_result_edit").html("客户名不能为空,请填写正确客户代码！");
		}
		else if(picture_select01_edit=='3'){
			if(piece_edit<12){
				$.ajax({
				url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/hotfix_quotation/find_version',//通过Ajax取数据的目标页面
				type:'get',//方法，还可以是"post"
				data:{'picture_select02':picture_select02,'parities':parities},
				dataType:'json',//数据类型，还有其它的，详见jQuery手册
				success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
				{
					if(versions<locals){
						$("#hq_result_edit").css("display","block");
			            $("#hq_result_edit").html("版费不可以小于设定值"+locals);
					}else{
						$("#submit_value_edit").val('2');
						$("#hotfix_quotation_submit_form_edit").submit();
					}
				}
				});
			}else{
				$("#submit_value_edit").val('2');
				$("#hotfix_quotation_submit_form_edit").submit();
			}
			
		}
		else if(picture_select01_edit=='5'){
			
	    	if(piece_edit<6){
				$.ajax({
				url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/hotfix_quotation/find_version_1',//通过Ajax取数据的目标页面
				type:'get',//方法，还可以是"post"
				data:{'picture_text03':picture_text03,'parities':parities},
				dataType:'json',//数据类型，还有其它的，详见jQuery手册
				success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
				{
					if(versions<locals){
						$("#hq_result_edit").css("display","block");
			            $("#hq_result_edit").html("版费不可以小于设定值"+locals);
					}else{
						$("#submit_value_edit").val('2');
						$("#hotfix_quotation_submit_form_edit").submit();
					}
				}
				});
			}else{
				$("#submit_value_edit").val('2');
				$("#hotfix_quotation_submit_form_edit").submit();
			}
		}
    });
	
	
	 $("#add_order_edit").click(function(){
		
		 var check_arr = '';
		$(".picture_select").each(function(){ //由于复选框一般选中的是多个,所以可以循环输出
			if(check_arr == ''){
				if($(this).val()!=''){
				   check_arr += $(this).val();
				}else{
				   check_arr += 0;	
				}
				//sale_detail += $("#sale_detail" + $(this).val()).val();
			}else{
				if($(this).val()!=''){
					check_arr += '+'+$(this).val();
				}else{
					check_arr += '+'+0;
				}
				//sale_detail += '|'+$("#sale_detail" + $(this).val()).val();
			}
			
			
		});
		var versions = $("#version").val();
		var picture_select01_edit = $("#picture_select01_edit").val();
		var piece_edit = $("#piece_edit").val();
		var picture_select02 = $("#quotation_code").val();
		var parities = $("#parities_edit").val();
		var picture_text03 = $("#picture_text03_edit").val();
		var default_quote_coefficient_edit = $("#default_quote_coefficient_edit").val();
		var c = /^\d+(?=\.{0,1}\d+$|$)/ 
		var b=c.test(default_quote_coefficient_edit);
		if($("#hq_customer_code_edit").val()== ""){
			$("#hq_result_edit").css("display","block");
			$("#hq_result_edit").html("客户代码不能为空！");
		}else if($("#no_customer_code_edit").val()== ""){
			$("#hq_result_edit").css("display","block");
			$("#hq_result_edit").html("客户名不能为空！");
		}
		else if(!isNumber_z($('#hq_beisun_edit').val()) && !isNumber_fp($('#hq_beisun_edit').val()) && isEmpty($('#hq_beisun_edit').val())){
			$("#hq_result_edit").css("display","block");
			$("#hq_result_edit").html("备损数量为正整数！");
		}
		else if($("#quotation_category_id_edit").val()== ""){
			$("#hq_result_edit").css("display","block");
			$("#hq_result_edit").html("请选择报价类型！");
		}
		
		else if(($("#picture_text03_edit").val()== "" && $("#picture_text03_edit").is(":visible")) || ($("#picture_text02_edit").val()== "" && $("#picture_text02_edit").is(":visible"))){
			$("#hq_result_edit").css("display","block");
			$("#hq_result_edit").html("报价名称不能为空！");
		}
		else if((($("#picture_select02_edit").val()== "" || $("#picture_select02_edit").val()== "0") && $("#picture_select02_edit").is(":visible")) || ($("#picture_text01_edit").val()== "" && $("#picture_text01_edit").is(":visible"))){
			$("#hq_result_edit").css("display","block");
			$("#hq_result_edit").html("报价编号不能为空！");
		}
		
		else if($("#order_category").val()== ""){
			$("#hq_result_edit").css("display","block");
			$("#hq_result_edit").html("请选择报关品类！");
		}
		
		
		else if($("#inch_w_edit").val()== "" || $("#inch_h_edit").val()== "" || $("#cm_w_edit").val()== "" || $("#cm_h_edit").val()== ""){
			$("#hq_result_edit").css("display","block");
			$("#hq_result_edit").html("尺寸不为空,请填写正确报价名称！");
		}

		else if($("#gummed_paper_1_edit").val()== ""){
			$("#hq_result_edit").css("display","block");
			$("#hq_result_edit").html("请选择胶纸名称！");
		}
		else if(check_arr.indexOf("a")>-1){
			$("#hq_result_edit").css("display","block");
			$("#hq_result_edit").html("请选择公式！");
		}
		else if($("#piece_edit").val()== "" || $("#piece_edit").val() <= 0 || (!isNumber_z($('#piece_edit').val()) && isEmpty($('#piece_edit').val()))){
			$("#hq_result_edit").css("display","block");
			$("#hq_result_edit").html("片数不能为空,且大于0！");
		}
		else if(b==false || default_quote_coefficient_edit<2){
			$("#hq_result_edit").css("display","block");
			$("#hq_result_edit").html("报价系数不能为空,且为不小于2的数字！");
		}
		else if($("#hq_customer_name_edit").val()== ""){
			$("#hq_result_edit").css("display","block");
			$("#hq_result_edit").html("客户名不能为空,请填写正确客户代码！");
		}
		else if(picture_select01_edit=='3'){
			if(piece_edit<12){
				$.ajax({
				url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/hotfix_quotation/find_version',//通过Ajax取数据的目标页面
				type:'get',//方法，还可以是"post"
				data:{'picture_select02':picture_select02,'parities':parities},
				dataType:'json',//数据类型，还有其它的，详见jQuery手册
				success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
				{
					if(versions<locals){
						$("#hq_result_edit").css("display","block");
			            $("#hq_result_edit").html("版费不可以小于设定值"+locals);
					}else{
						$("#submit_value_edit").val('1');
						$("#hotfix_quotation_submit_form_edit").submit();
					}
				}
				});
			}else{
				$("#submit_value_edit").val('1');
				$("#hotfix_quotation_submit_form_edit").submit();
			}
			
		}
		else if(picture_select01_edit=='5'){
			
	    	if(piece_edit<6){
				$.ajax({
				url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/hotfix_quotation/find_version_1',//通过Ajax取数据的目标页面
				type:'get',//方法，还可以是"post"
				data:{'picture_text03':picture_text03,'parities':parities},
				dataType:'json',//数据类型，还有其它的，详见jQuery手册
				success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
				{
					if(versions<locals){
						$("#hq_result_edit").css("display","block");
			            $("#hq_result_edit").html("版费不可以小于设定值"+locals);
					}else{
						$("#submit_value_edit").val('1');
						$("#hotfix_quotation_submit_form_edit").submit();
					}
				}
				});
			}else{
				$("#submit_value_edit").val('1');
				$("#hotfix_quotation_submit_form_edit").submit();
			}
		}
    });
	
	
	
	
	
	
	
	
    $("#no_design_content_save_edit").click(function(){


        var check_arr = '';
		$(".picture_select").each(function(){ //由于复选框一般选中的是多个,所以可以循环输出
			if(check_arr == ''){
				if($(this).val()!=''){
				   check_arr += $(this).val();
				}else{
				   check_arr += 0;	
				}
				//sale_detail += $("#sale_detail" + $(this).val()).val();
			}else{
				if($(this).val()!=''){
					check_arr += '+'+$(this).val();
				}else{
					check_arr += '+'+0;
				}
				//sale_detail += '|'+$("#sale_detail" + $(this).val()).val();
			}
			
			
		});
		
		
	/*	var strCookie=document.cookie;

              //将多cookie切割为多个名/值对

              var arrCookie=strCookie.split("; ");

              //遍历cookie数组，处理每个cookie对

              for(var i=0;i<arrCookie.length;i++){

                     var arr=arrCookie[i].split("=");

                     //找到名称为userId的cookie，并返回它的值

                     if("versionkk"==arr[0]){

                            versionkk=arr[1];

                            break;

                     }

              }*/
		var versions = $("#no_version").val();
		var mid = $("#mid").val();
        var no_parities = $("#no_parities_edit").val();
		var no_piece = $("#no_piece_edit").val();
		if($("#no_customer_num_1_edit").val()== ""){
			$("#hq_no_result_edit").css("display","block");
			$("#hq_no_result_edit").html("客户代码不能为空！");
		}
		else if($("#no_name_edit").val()== ""){
			$("#hq_no_result_edit").css("display","block");
			$("#hq_no_result_edit").html("名称不能为空！");
		}
		else if(!isNumber_z($('#hq_no_beisun_edit').val()) && !isNumber_fp($('#hq_no_beisun_edit').val()) && isEmpty($('#hq_no_beisun_edit').val())){
			$("#hq_no_result_edit").css("display","block");
			$("#hq_no_result_edit").html("备损数量为正整数！");
		}
		
		else if($("#no_order_category").val()== ""){
			$("#hq_no_result_edit").css("display","block");
			$("#hq_no_result_edit").html("请选择报关品类！");
		}
		
		else if($("#no_inch_w_edit").val()== "" || $("#no_inch_h_edit").val()== "" || $("#no_cm_w_edit").val()== "" || $("#no_cm_h_edit").val()== ""){
			$("#hq_no_result_edit").css("display","block");
			$("#hq_no_result_edit").html("尺寸不为空！");
		}
		else if($("#material_select_edit").val()== "" && $("#picture_text02_edit").val()== ""){
			$("#hq_no_result_edit").css("display","block");
			$("#hq_no_result_edit").html("请选择材料！");
		}
		else if(($("#material_info_color_edit").val()== "" && $("#material_info_color_edit").is(":visible")) || ($("#material_info_c_color_edit").val()== "" && $("#material_info_c_color_edit").is(":visible"))){
			$("#hq_no_result_edit").css("display","block");
			$("#hq_no_result_edit").html("请选择颜色！");
		}
		else if(!$(".hq_tableClass02").is(":visible")){
			$("#hq_no_result_edit").css("display","block");
			$("#hq_no_result_edit").html("请添加材料项！");
		}
		else if(check_arr.indexOf("a")>-1){
			$("#hq_no_result_edit").css("display","block");
			$("#hq_no_result_edit").html("请选择公式！");
		}
		else if($("#no_gummed_paper_1_edit").val()== ""){
			$("#hq_no_result_edit").css("display","block");
			$("#hq_no_result_edit").html("请选择胶纸名称！");
		}
		else if($("#no_piece_edit").val()== "" || $("#no_piece_edit").val() <= 0 || (!isNumber_z($('#no_piece_edit').val()) && isEmpty($('#no_piece_edit').val()))){
			$("#hq_no_result_edit").css("display","block");
			$("#hq_no_result_edit").html("片数不能为空,且大于0！");
		}
		else if($("#no_default_quote_coefficient_edit").val()== "" || $("#no_default_quote_coefficient_edit").val() <= 0 || (!isNumber_z($('#no_default_quote_coefficient_edit').val()) && isEmpty($('#no_default_quote_coefficient_edit').val()))){
			$("#hq_no_result_edit").css("display","block");
			$("#hq_no_result_edit").html("报价系数不能为空,且大于0！");
		}
		else if($("#no_customer_code_edit").val()== ""){
			$("#hq_no_result_edit").css("display","block");
			$("#hq_no_result_edit").html("客户不能为空,请填写正确客户代码！");
		}
		else if($("#no_jiaozhi_edit").val() == "0元" || $("#no_jiaozhi_edit").val() == "元"){
			$("#hq_no_result_edit").css("display","block");
			$("#hq_no_result_edit").html("胶纸费不能为0！");
		}
		else if($("#no_final_quotation_edit").val() == "0.00" || $("#no_final_quotation_edit").val() == "¥0.00"){
			$("#hq_no_result_edit").css("display","block");
			$("#hq_no_result_edit").html("最终报价不能为0！");
		}
		else{
			$("#hq_no_result_edit").css("display","none");
			    $.ajax({
					url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/hotfix_quotation/check_photo',//通过Ajax取数据的目标页面
					data:{},
					type:'post',//方法，还可以是"post"
					dataType:'text',//数据类型，还有其它的，详见jQuery手册
					success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
					{
						if(locals==1){
							$("#no_submit_value_edit").val('2');
							$("#no_hotfix_quotation_submit_form_edit").submit();
						}else{
							$("#hq_no_result_edit").css("display","block");
							$("#hq_no_result_edit").html("请上传图片,且名称不包含空格！");
						}
					}
			    });
			
		}
	    
    });	
	
	
	
	
	 $("#no_add_order_edit").click(function(){


        var check_arr = '';
		$(".picture_select").each(function(){ //由于复选框一般选中的是多个,所以可以循环输出
			if(check_arr == ''){
				if($(this).val()!=''){
				   check_arr += $(this).val();
				}else{
				   check_arr += 0;	
				}
				//sale_detail += $("#sale_detail" + $(this).val()).val();
			}else{
				if($(this).val()!=''){
					check_arr += '+'+$(this).val();
				}else{
					check_arr += '+'+0;
				}
				//sale_detail += '|'+$("#sale_detail" + $(this).val()).val();
			}
			
			
		});
		
		
	/*	var strCookie=document.cookie;

              //将多cookie切割为多个名/值对

              var arrCookie=strCookie.split("; ");

              //遍历cookie数组，处理每个cookie对

              for(var i=0;i<arrCookie.length;i++){

                     var arr=arrCookie[i].split("=");

                     //找到名称为userId的cookie，并返回它的值

                     if("versionkk"==arr[0]){

                            versionkk=arr[1];

                            break;

                     }

              }*/
		var versions = $("#no_version").val();
		var mid = $("#mid").val();
        var no_parities = $("#no_parities_edit").val();
		var no_piece = $("#no_piece_edit").val();
		var no_default_quote_coefficient_edit = $("#no_default_quote_coefficient_edit").val();
		var c = /^\d+(?=\.{0,1}\d+$|$)/ 
		var b=c.test(no_default_quote_coefficient_edit);
		if($("#no_customer_num_1_edit").val()== ""){
			$("#hq_no_result_edit").css("display","block");
			$("#hq_no_result_edit").html("客户代码不能为空！");
		}
		else if($("#no_name_edit").val()== ""){
			$("#hq_no_result_edit").css("display","block");
			$("#hq_no_result_edit").html("名称不能为空！");
		}
		else if(!isNumber_z($('#hq_no_beisun_edit').val()) && !isNumber_fp($('#hq_no_beisun_edit').val()) && isEmpty($('#hq_no_beisun_edit').val())){
			$("#hq_no_result_edit").css("display","block");
			$("#hq_no_result_edit").html("备损数量为正整数！");
		}
		
		else if($("#no_order_category").val()== ""){
			$("#hq_no_result_edit").css("display","block");
			$("#hq_no_result_edit").html("请选择报关品类！");
		}
		
		else if($("#no_inch_w_edit").val()== "" || $("#no_inch_h_edit").val()== "" || $("#no_cm_w_edit").val()== "" || $("#no_cm_h_edit").val()== ""){
			$("#hq_no_result_edit").css("display","block");
			$("#hq_no_result_edit").html("尺寸不为空！");
		}
		else if($("#material_select_edit").val()== "" && $("#picture_text02_edit").val()== ""){
			$("#hq_no_result_edit").css("display","block");
			$("#hq_no_result_edit").html("请选择材料！");
		}
		else if(($("#material_info_color_edit").val()== "" && $("#material_info_color_edit").is(":visible")) || ($("#material_info_c_color_edit").val()== "" && $("#material_info_c_color_edit").is(":visible"))){
			$("#hq_no_result_edit").css("display","block");
			$("#hq_no_result_edit").html("请选择颜色！");
		}
		else if(!$(".hq_tableClass02").is(":visible")){
			$("#hq_no_result_edit").css("display","block");
			$("#hq_no_result_edit").html("请添加材料项！");
		}
		else if(check_arr.indexOf("a")>-1){
			$("#hq_no_result_edit").css("display","block");
			$("#hq_no_result_edit").html("请选择公式！");
		}
		else if($("#no_gummed_paper_1_edit").val()== ""){
			$("#hq_no_result_edit").css("display","block");
			$("#hq_no_result_edit").html("请选择胶纸名称！");
		}
		else if($("#no_piece_edit").val()== "" || $("#no_piece_edit").val() <= 0 || (!isNumber_z($('#no_piece_edit').val()) && isEmpty($('#no_piece_edit').val()))){
			$("#hq_no_result_edit").css("display","block");
			$("#hq_no_result_edit").html("片数不能为空,且大于0！");
		}
		else if(no_default_quote_coefficient_edit<2 || b==false){
			$("#hq_no_result_edit").css("display","block");
			$("#hq_no_result_edit").html("报价系数不能为空,且为不小于2的数字！");
		}
		else if($("#no_customer_code_edit").val()== ""){
			$("#hq_no_result_edit").css("display","block");
			$("#hq_no_result_edit").html("客户不能为空,请填写正确客户代码！");
		}
		else if($("#no_jiaozhi_edit").val() == "0元" || $("#no_jiaozhi_edit").val() == "元"){
			$("#hq_no_result_edit").css("display","block");
			$("#hq_no_result_edit").html("胶纸费不能为0！");
		}
		else if($("#no_final_quotation_edit").val() == "0.00" || $("#no_final_quotation_edit").val() == "¥0.00"){
			$("#hq_no_result_edit").css("display","block");
			$("#hq_no_result_edit").html("最终报价不能为0！");
		}
		else{
			$("#hq_no_result_edit").css("display","none");
			    $.ajax({
					url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/hotfix_quotation/check_photo',//通过Ajax取数据的目标页面
					data:{},
					type:'post',//方法，还可以是"post"
					dataType:'text',//数据类型，还有其它的，详见jQuery手册
					success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
					{
						if(locals==1){
							$("#no_submit_value_edit").val('1');
							$("#no_hotfix_quotation_submit_form_edit").submit();
						}else{
							$("#hq_no_result_edit").css("display","block");
							$("#hq_no_result_edit").html("请上传图片,且名称不包含空格！");
						}
					}
			    });
			
		}
	    
    });	
	
	
	
	$("#inch_w_edit").bind("input propertychange", function() {
		//alert($(this).val());
		var cm_w = $(this).val() * 2.54;
		if(cm_w != ''){
			cm_w = cm_w.toFixed(2);
		}
		$("#cm_w_edit").val(cm_w);
		$("#cm_w1_edit").val(cm_w);
	});
	
	$("#no_inch_w_edit").bind("input propertychange", function() {
		//非空调胶纸计算
		if($("#no_gummed_paper_1_edit").val()!=''){
			no_gummed_paper_edit();
		}
		
		var mid = $("#mid").val();	
		var no_inch_w_edit = $(this).val();
		var no_inch_h_edit = $("#no_inch_h_edit").val();
		$.ajax({
			url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/hotfix_quotation/shougongfei',//通过Ajax取数据的目标页面
			type:'get',//方法，还可以是"post"
			data:{'mid':mid,'no_inch_h_edit':no_inch_h_edit},
			dataType:'json',//数据类型，还有其它的，详见jQuery手册
			success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
			{	
				if(no_inch_w_edit!="" && no_inch_h_edit!=""){
					   
						var a=Math.ceil(no_inch_w_edit/19);
						var b=Math.ceil(no_inch_h_edit/19);
						total_price=(locals*a*b).toFixed(2)
						$("#no_manual_id_edit").val(total_price + "元"); 
				}else{
					$("#no_manual_id_edit").val(locals + "元"); 
				}
				
				var material_name = $("#material_select_edit").val();
				var size_width = $("#size_inch_width_edit").val();
				var size_height = $("#size_inch_height_edit").val();
				var color = $("#material_info_color_edit").val();
				var quantity = $("#material_quantity_edit").val();
				var mid = $("#mid").val();
				var s01 = $("#sIE_size01_edit").val();
				var size = size_width+"*"+size_height;
				var aaa = $("#no_parities_edit").find("option:selected").text();
				aaa=aaa.split(" ");					
				
				var no_jiaozhi = $("#no_jiaozhi_edit").val();   //获取胶纸费				
				var no_material_price_1 = $("#no_material_price_edit").val();   //获取材料费	
				
				
				no_jiaozhi = no_jiaozhi.replace("元","");                     //
				no_material_price_1 = no_material_price_1.replace("元","");       //   过滤掉"元"
				//no_manual_id = no_manual_id.replace("元","");                   // 
				
			    if(no_jiaozhi==""){
				    var total_price = no_material_price_1 + "+" + total_price;
			    }else{
				    var total_price = no_material_price_1 + "+" + total_price + "+" + no_jiaozhi; 
			    }
			    total_price = eval('('+total_price+')');  //运算符转化为结果
			    total_price = total_price.toFixed(2);   // 保留2位小数
			    $("#no_total_price_id_edit").val(total_price + "元");     //
			    $("#no_total_price_id_1_edit").val(total_price + "元");	 //  合计
			    $("#no_total_price_id_2_edit").val(total_price + "元");	 //	
				
			    var no_coefficient = $("#no_coefficient_edit").val();   //工厂成本系数
			    var no_cost_price = total_price + "*" + no_coefficient;  //合计*系数 公式
			    no_cost_price = eval('('+no_cost_price+')');
			    no_cost_price = no_cost_price.toFixed(2);
			    $("#no_cost_price_edit").val(no_cost_price);  //工厂成本
				
			    var no_piece = $("#no_piece_edit").val();  //片数
			    var no_default_quote_coefficient = $("#no_default_quote_coefficient_edit").val();  //报价系数
			    var no_parities = $("#no_parities_edit").val();  //汇率
				
				var no_version = $("#no_version").val();
			    final_quotation = eval('('+final_quotation+ "+" + no_version+')');
			    final_quotation = final_quotation.toFixed(2);
			    $("#no_final_quotation_edit").val(aaa[0] + final_quotation);  //最终报价	
				var monolithic_quote = total_price + "*" + no_default_quote_coefficient + "/" + no_parities;
				monolithic_quote = eval('('+monolithic_quote+')');
				monolithic_quote = monolithic_quote.toFixed(2);
				$("#no_monolithic_quote_edit").val(aaa[0] + monolithic_quote);					
				
			    var final_quotation = monolithic_quote + "*" + no_piece;   //最终报价公式
			    final_quotation = eval('('+final_quotation+')');
			    final_quotation = final_quotation.toFixed(2);
			    $("#no_final_quotation_edit").val(aaa[0] + final_quotation);  //最终报价				
				
			}
		});
		
		
		
		
		//alert($(this).val());
		var cm_w = $(this).val() * 2.54;
		if(cm_w != ''){
			cm_w = cm_w.toFixed(2);
		}
		$("#no_cm_w_edit").val(cm_w);
		//$("#cm_w1").val(cm_w);
	});	
	
	$("#inch_h_edit").bind("input propertychange", function() {
		//alert($(this).val());
		var cm_h = $(this).val() * 2.54;
		if(cm_h != ''){
			cm_h = cm_h.toFixed(2);
		}
		
		$("#cm_h_edit").val(cm_h);
		$("#cm_h1_edit").val(cm_h);
	});
	
	$("#no_inch_h_edit").bind("input propertychange", function() {
		//非空调胶纸计算
		if($("#no_gummed_paper_1_edit").val()!=''){
			no_gummed_paper_edit();
		}
		var mid = $("#mid").val();	
		var no_inch_w_edit = $(this).val();
		var no_inch_h_edit = $("#no_inch_h_edit").val();
		$.ajax({
			url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/hotfix_quotation/shougongfei',//通过Ajax取数据的目标页面
			type:'get',//方法，还可以是"post"
			data:{'mid':mid,'no_inch_h_edit':no_inch_h_edit},
			dataType:'json',//数据类型，还有其它的，详见jQuery手册
			success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
			{	
				if(no_inch_w_edit!="" && no_inch_h_edit!=""){
						var a=Math.ceil(no_inch_w_edit/19);
						var b=Math.ceil(no_inch_h_edit/19);
						total_price=(locals*a*b).toFixed(2)
						$("#no_manual_id_edit").val(total_price + "元"); 
				}else{
					$("#no_manual_id_edit").val(locals + "元"); 
				}
				
				var material_name = $("#material_select_edit").val();
				var size_width = $("#size_inch_width_edit").val();
				var size_height = $("#size_inch_height_edit").val();
				var color = $("#material_info_color_edit").val();
				var quantity = $("#material_quantity_edit").val();
				var mid = $("#mid").val();
				var s01 = $("#sIE_size01_edit").val();
				var size = size_width+"*"+size_height;
				var aaa = $("#no_parities_edit").find("option:selected").text();
				aaa=aaa.split(" ");					
				
				var no_jiaozhi = $("#no_jiaozhi_edit").val();   //获取胶纸费				
				var no_material_price_1 = $("#no_material_price_edit").val();   //获取材料费	
				
				
				no_jiaozhi = no_jiaozhi.replace("元","");                     //
				no_material_price_1 = no_material_price_1.replace("元","");       //   过滤掉"元"
				//no_manual_id = no_manual_id.replace("元","");                   // 
				
			    if(no_jiaozhi==""){
				    var total_price = no_material_price_1 + "+" + total_price;
			    }else{
				    var total_price = no_material_price_1 + "+" + total_price + "+" + no_jiaozhi; 
			    }
			    total_price = eval('('+total_price+')');  //运算符转化为结果
			    total_price = total_price.toFixed(2);   // 保留2位小数
			    $("#no_total_price_id_edit").val(total_price + "元");     //
			    $("#no_total_price_id_1_edit").val(total_price + "元");	 //  合计
			    $("#no_total_price_id_2_edit").val(total_price + "元");	 //	
				
			    var no_coefficient = $("#no_coefficient_edit").val();   //工厂成本系数
			    var no_cost_price = total_price + "*" + no_coefficient;  //合计*系数 公式
			    no_cost_price = eval('('+no_cost_price+')');
			    no_cost_price = no_cost_price.toFixed(2);
			    $("#no_cost_price_edit").val(no_cost_price);  //工厂成本
				
			    var no_piece = $("#no_piece_edit").val();  //片数
			    var no_default_quote_coefficient = $("#no_default_quote_coefficient_edit").val();  //报价系数
			    var no_parities = $("#no_parities_edit").val();  //汇率
				
				var no_version = $("#no_version").val();
			    final_quotation = eval('('+final_quotation+ "+" + no_version+')');
			    final_quotation = final_quotation.toFixed(2);
			    $("#no_final_quotation_edit").val(aaa[0] + final_quotation);  //最终报价	
				var monolithic_quote = total_price + "*" + no_default_quote_coefficient + "/" + no_parities;
				monolithic_quote = eval('('+monolithic_quote+')');
				monolithic_quote = monolithic_quote.toFixed(2);
				$("#no_monolithic_quote_edit").val(aaa[0] + monolithic_quote);					
				
			    var final_quotation = monolithic_quote + "*" + no_piece;   //最终报价公式
			    final_quotation = eval('('+final_quotation+')');
			    final_quotation = final_quotation.toFixed(2);
			    $("#no_final_quotation_edit").val(aaa[0] + final_quotation);  //最终报价						
				
			}
		});
		var cm_h = $(this).val() * 2.54;
		if(cm_h != ''){
			cm_h = cm_h.toFixed(2);
		}
		
		$("#no_cm_h_edit").val(cm_h);
		//$("#cm_h1").val(cm_h);
	});	
	
	$("#cm_w_edit").bind("input propertychange", function() {
		//alert($(this).val());
		var inch_w = $(this).val() / 2.54;
		
		if(inch_w != ''){
			inch_w = inch_w.toFixed(2);
		}
		
		$("#inch_w_edit").val(inch_w);
		$("#inch_w1_edit").val(inch_w);
	});
	
	$("#no_cm_w_edit").bind("input propertychange", function() {
		//非空调胶纸计算
		if($("#no_gummed_paper_1_edit").val()!=''){
			no_gummed_paper_edit();
		}
		//alert($(this).val());
		var inch_w = $(this).val() / 2.54;
		
		if(inch_w != ''){
			inch_w = inch_w.toFixed(2);
		}
		
		$("#no_inch_w_edit").val(inch_w);
		
	});
	
	
	$("#cm_h_edit").bind("input propertychange", function() {
		//alert($(this).val());
		var inch_h = $(this).val() / 2.54;
		if(inch_h != ''){
			inch_h = inch_h.toFixed(2);
		}
		$("#inch_h_edit").val(inch_h);
		$("#inch_h1_edit").val(inch_h);
	});
	
	$("#no_cm_h_edit").bind("input propertychange", function() {
		//非空调胶纸计算
		if($("#no_gummed_paper_1_edit").val()!=''){
			no_gummed_paper_edit();
		}
		//alert($(this).val());
		var inch_h = $(this).val() / 2.54;
		if(inch_h != ''){
			inch_h = inch_h.toFixed(2);
		}
		$("#no_inch_h_edit").val(inch_h);
		//$("#inch_h1").val(inch_h);
	});	

	$("#size_width_edit").bind("input propertychange", function() {
		//alert($(this).val());
		var mm_w = $(this).val() / 25.4;
		if(mm_w != ''){
			mm_w = mm_w.toFixed(2);
		}
		$("#size_inch_width_edit").val(mm_w);
	});
	
	$("#size_height_edit").bind("input propertychange", function() {
		//alert($(this).val());
		var mm_h = $(this).val() / 25.4;
		if(mm_h != ''){
			mm_h = mm_h.toFixed(2);
		}
		
		$("#size_inch_height_edit").val(mm_h);
	});
	
	$("#size_inch_width_edit").bind("input propertychange", function() {
		//alert($(this).val());
		var inch_w = $(this).val() / 25.4;
		
		if(inch_w != ''){
			inch_w = inch_w.toFixed(2);
		}
		
		$("#size_width_edit").val(inch_w);
	});
	
	$("#size_inch_height_edit").bind("input propertychange", function() {
		//alert($(this).val());
		var inch_h = $(this).val() / 25.4;
		if(inch_h != ''){
			inch_h = inch_h.toFixed(2);
		}
		$("#size_height_edit").val(inch_h);
	});

    
    $("#material_select_edit").change(
    	function()
    	{
    		//获取id为select的下拉框选中的值
    	    var a = $("#material_select_edit").val();
    	    var opti = "<option value=\"\"></option>";
			if(a != ''){
				$.ajax({
					url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/get_material_infomation',//通过Ajax取数据的目标页面
					data:{'material_name':a},					
					type:'get',//方法，还可以是"post"
					dataType:'json',//数据类型，还有其它的，详见jQuery手册
					success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
					{
						$("#material_info_c_color_edit").find("option").remove();
						$("#material_info_color_edit").find("option").remove();
						$("#material_c_size_edit").find("option").remove();
						$('#material_c_quantity_edit').val("");
						$("#size_width_edit").val("");
						$("#size_height_edit").val("");
						$("#material_quantity_edit").val("1");						
						
						if(locals.result == 0){
							
						}else if(locals.result == 2){
							$("#material_info_edit").css("display","none");
							$("#material_info_c_edit").css("display","block");
							$("#material_info_color_edit").empty();
							var objs = locals.color;
							$("#material_info_c_color_edit").append(opti);   //为Select追加一个Option(下拉项)     
							for (var o in objs) {
								var  jsonObj  =  objs[o];
								var  optionstring = "<option value=\"" + jsonObj.material_color + "\" >" + jsonObj.material_color + "</option>";
							    $("#material_info_c_color_edit").append(optionstring);   //为Select追加一个Option(下拉项)           
							} 
							
						}else if(locals.result == 1){
							$("#material_info_edit").css("display","block");
							$("#material_info_c_edit").css("display","none");
							$("#material_info_c_color_edit").empty();
							//alert(locals.color.length);//输出子对象数量
							var objs = locals.color;
							$("#material_info_color_edit").append(opti);   //为Select追加一个Option(下拉项)        
							for (var o in objs) {
								var  jsonObj  =  objs[o];
								var  optionstring = "<option value=\"" + jsonObj.color + "\" >" + jsonObj.color + "</option>";
							    $("#material_info_color_edit").append(optionstring);   //为Select追加一个Option(下拉项)           
							} 
							
						}
						//alert(locals);
						//$("#customer_code").val(locals);
					}
				});
			}
    	}
    );
	
	$("#material_c_size_edit").change(function (){
	    $("#material_c_quantity_edit").val("");
	});
	
	$("#material_info_color_edit").change(function (){
	    $("#size_width_edit").val("");
		$("#size_height_edit").val("");
		$("#material_quantity_edit").val("1");
	});	
	
	$("#material_info_c_color_edit").change(function (){
		var a = $("#material_select_edit").val();
		var color = $("#material_info_c_color_edit").val();
		$.ajax({
			url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/get_material_c_infomation',//通过Ajax取数据的目标页面
			data:{'material_name':a,'material_color':color},			
			type:'get',//方法，还可以是"post"
			dataType:'json',//数据类型，还有其它的，详见jQuery手册
			success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
			{
				var objs = locals.size;
				var size = '';
				$("#material_c_size_edit").find("option").remove();
				$("#material_c_quantity_edit").val("");
				
				for (var o in objs) {
					var  jsonObj  =  objs[o];
					if(jsonObj.size){
						size = jsonObj.size;
						var  optionstring = "<option value=\"" + size + "\" >" + size + "</option>";
						$("#material_c_size_edit").append(optionstring);   //为Select追加一个Option(下拉项
					}
					else if(jsonObj.size_mm){
						size = jsonObj.size_mm;
						var  optionstring = "<option value=\"" + size + "\" >" + size + "mm</option>";
						$("#material_c_size_edit").append(optionstring);   //为Select追加一个Option(下拉项)  
					}
					else if(jsonObj.size_m_w&& jsonObj.size_m_h){
						size = jsonObj.size_m_w+'*'+jsonObj.size_m_h;
						var  optionstring = "<option value=\"" + size + "\" >" + size + "mm</option>";
						$("#material_c_size_edit").append(optionstring);   //为Select追加一个Option(下拉项)   
					}
					
					        
				} 
			}
		});
		
	});
	$("#sIE_size01_edit").change(function (){
		var s01 = $("#sIE_size01_edit").val();
		//alert(s01);
		if(s01 == 1){
			//alert('1');
			//$("#sIE_size02?option[value='1']").attr("selected",?"selected");
			$("#sIE_size02_edit").find("option[value='1']").attr("selected",true);
		}
		if(s01 == 2){
			//alert('2');
			//$("#sIE_size02?option[value='2']").attr("selected",?"selected");
			$("#sIE_size02_edit").find("option[value='2']").attr("selected",true);
		}
		
	});
	
	$("#sIE_size02_edit").change(function (){
		var s02 = $("#sIE_size02_edit").val();
		//$("#sIE_size01?option[value='1']").attr("selected",?"selected");
		if(s02 == 1){
			//$("#sIE_size01?option[value='1']").attr("selected",?"selected");
			$("#sIE_size01_edit").find("option[value='1']").attr("selected",true);
		}
		if(s02 == 2){
			//$("#sIE_size01?option[value='2']").attr("selected",?"selected");
			$("#sIE_size01_edit").find("option[value='2']").attr("selected",true);
		}
	});
	
	var row_number = 0 ;
	$("#insert_material1_edit").click(function (){
		
		var material_name = $("#material_select_edit").val();
		var size_width = $("#size_inch_width_edit").val();
		var size_height = $("#size_inch_height_edit").val();
		var color = $("#material_info_color_edit").val();
		var quantity = $("#material_quantity_edit").val();
		var mid = $("#mid").val();
		var s01 = $("#sIE_size01_edit").val();
		var size = size_width+"*"+size_height;
	    var aaa = $("#no_parities_edit").find("option:selected").text();
	    aaa=aaa.split(" ");	
			
		var m_unit = '';
		if(s01 == '1'){
			m_unit = 'inch';
		}
		if(s01 == '2'){
			m_unit = 'cm';
		}
		
		var no_cm_w = $("#no_cm_w_edit").val();
		var no_cm_h = $("#no_cm_h_edit").val();	
		
		if($("#material_quantity_edit").val()!="" && $("#size_width_edit").val()!="" && $("#size_height_edit").val()!=""){
		
		$.ajax({
			url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/insert_table_quotation_sheet_material',//通过Ajax取数据的目标页面
			type:'get',//方法，还可以是"post"
			data:{'material_name':material_name,'material_color':color,'material_size':size,'material_quantity':quantity,'no_cm_w':no_cm_w,'no_cm_h':no_cm_h},
			dataType:'json',//数据类型，还有其它的，详见jQuery手册
			success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
			{
				if(locals != 0){
				locals=locals.split("|");
				var table_value = "<tr class='hq_tableClass02'> <td>"+material_name+"<input type='hidden' id='row_number' value='"+row_number+"' /><input type='hidden' id=sss_materialformula"+locals[0]+" value='"+locals[4]+"' /><input type='hidden' name='materials["+row_number+"][material_name]' value='"+material_name+"' /></td> <td id=w_h_id"+locals[0]+">"+size_width+"*"+size_height+" inch "+m_unit+"<input type='hidden' name='materials["+row_number+"][size_width]' value='"+size_width+"' /><input type='hidden' name='materials["+row_number+"][size_height]' value='"+size_height+"' /><input type='hidden' name='materials["+row_number+"][size]' value='"+size+"' /><input type='hidden' name='materials["+row_number+"][m_unit]' value='"+m_unit+"' /></td> <td>"+color+"<input type='hidden' name='materials["+row_number+"][color]' value='"+color+"' /></td> <td>"+quantity+"<input type='hidden' name='materials["+row_number+"][quantity]' value='"+quantity+"' /></td><td id=no_price_a_edit"+locals[0]+">"+locals[1]+"元</td><td onClick='getDel(this,"+locals[0]+")'><a href='#'>删除</a></td></tr>";
				
				$("#material_table_edit").append(table_value);   //为table追加一个tr(下拉项)
				
				var no_manual_id = $("#no_manual_id_edit").val();
				
				//var no_manual_price = no_manual_id + "+" + locals[3];
				
				no_manual_id = no_manual_id.replace("元","");
				locals[3] = locals[3].replace("元","");
				
				total_price = eval('('+no_manual_id + "+" + locals[3]+')');
				
				$("#no_manual_id_edit").val(total_price + "元");  //无设计手工费
				
				var no_jiaozhi = $("#no_jiaozhi_edit").val();   //获取胶纸费				
				var no_material_price_1 = $("#no_material_price_edit").val();   //获取材料费	
				
				
				no_jiaozhi = no_jiaozhi.replace("元","");                     //
				no_material_price_1 = no_material_price_1.replace("元","");       //   过滤掉"元"
				//no_manual_id = no_manual_id.replace("元","");                   // 
				
			    if(no_jiaozhi==""){
				    var total_price = no_material_price_1 + "+" + total_price;
			    }else{
				    var total_price = no_material_price_1 + "+" + total_price + "+" + no_jiaozhi; 
			    }
			    total_price = eval('('+total_price+')');  //运算符转化为结果
			    total_price = total_price.toFixed(2);   // 保留2位小数
			    $("#no_total_price_id_edit").val(total_price + "元");     //
			    $("#no_total_price_id_1_edit").val(total_price + "元");	 //  合计
			    $("#no_total_price_id_2_edit").val(total_price + "元");	 //	
				
			    var no_coefficient = $("#no_coefficient_edit").val();   //工厂成本系数
			    var no_cost_price = total_price + "*" + no_coefficient;  //合计*系数 公式
			    no_cost_price = eval('('+no_cost_price+')');
			    no_cost_price = no_cost_price.toFixed(2);
			    $("#no_cost_price_edit").val(no_cost_price);  //工厂成本
				
			    var no_piece = $("#no_piece_edit").val();  //片数
			    var no_default_quote_coefficient = $("#no_default_quote_coefficient_edit").val();  //报价系数
			    var no_parities = $("#no_parities_edit").val();  //汇率
				
				var no_version = $("#no_version").val();
			    final_quotation = eval('('+final_quotation+ "+" + no_version+')');
			    final_quotation = final_quotation.toFixed(2);
			    $("#no_final_quotation_edit").val(aaa[0] + final_quotation);  //最终报价	
				var monolithic_quote = total_price + "*" + no_default_quote_coefficient + "/" + no_parities;
				monolithic_quote = eval('('+monolithic_quote+')');
				monolithic_quote = monolithic_quote.toFixed(2);
				$("#no_monolithic_quote_edit").val(aaa[0] + monolithic_quote);					
				
			    var final_quotation = monolithic_quote + "*" + no_piece;   //最终报价公式
			    final_quotation = eval('('+final_quotation+')');
			    final_quotation = final_quotation.toFixed(2);
			    $("#no_final_quotation_edit").val(aaa[0] + final_quotation);  //最终报价
				
				
				}else{
					alert("此数据有重复,请重新录入");
				}
				
			}
		});
		
		row_number++;
		}else{
		    alert("请添加完整信息！");	
		}
	});
	
	$("#insert_material2_edit").click(function (){
		var material_name = $("#material_select_edit").val();
		var no_inch_w_edit = $("#no_inch_w_edit").val();
		var no_inch_h_edit = $("#no_inch_h_edit").val();
		
		var color = $("#material_info_c_color_edit").val();
		var quantity = $("#material_c_quantity_edit").val();
		var mid = $("#mid").val();
		var size = $("#material_c_size_edit").val();
		var size_text = $("#material_c_size_edit").find("option:selected").text();
	    var no_piece_edit = $("#no_piece_edit").val();
		var aaa = $("#no_parities_edit").find("option:selected").text();
		var quotation_category_id_no_edit = $("#quotation_category_id_no_edit").val();
		aaa=aaa.split(" ");			
		
		if($("#material_c_quantity_edit").val()!=""){
		
			$.ajax({
				url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/insert_table_quotation_sheet_material1',//通过Ajax取数据的目标页面
				type:'get',//方法，还可以是"post"
				data:{'material_name':material_name,'material_color':color,'material_size':size,'material_quantity':quantity,'mid':mid},
				dataType:'json',//数据类型，还有其它的，详见jQuery手册
				success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
				{  
					if(locals != 0){
						if(no_piece_edit<12 && quotation_category_id_no_edit!="Stock改色"){
								  $.ajax({
									  url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/hotfix_quotation/find_version_no_edit',//通过Ajax取数据的目标页面
									  type:'get',//方法，还可以是"post"
									  data:{'no_parities':no_parities,'mid':mid},
									  dataType:'json',//数据类型，还有其它的，详见jQuery手册
									  success:function(loc)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
									  {
								  
											 $("#no_version").val(loc);	
											 locals=locals.split("|");
											  
											 var no_material_price = $("#no_material_price_edit").val();
											  
											 if(no_material_price=="" || no_material_price=="0.00元"){
												  $("#no_material_price_edit").val(locals[1]);	
												  
											 }else{
												  var no_material_price_a = locals[1];
												  
												  no_material_price_a = no_material_price_a.replace("元","");
												  no_material_price = no_material_price.replace("元","");
												  
												  var no_material_price_b = no_material_price_a + "+" + no_material_price;
												  total_price = eval('('+no_material_price_b+')');
							  
												  total_price = total_price.toFixed(4);
												  
												  $("#no_material_price_edit").val(total_price + "元");	
											 }				
						
											 var table_value = "<tr class='hq_tableClass02'> <td>"+material_name+"<input type='hidden' id='row_number' value='"+row_number+"' /><input type='hidden' name='materials["+row_number+"][material_name]' value='"+material_name+"' /></td> <td>"+size_text+"<input type='hidden' name='materials["+row_number+"][size]' value='"+size+"' /></td> <td>"+color+"<input type='hidden' name='materials["+row_number+"][color]' value='"+color+"' /></td> <td>"+quantity+"<input type='hidden' name='materials["+row_number+"][quantity]' value='"+quantity+"' /></td><td id=no_price_a_edit"+locals[0]+">"+locals[1]+"</td><td onClick='getDel(this,"+locals[0]+")'><a href='#'>删除</a></td></tr>";
											  $("#material_table_edit").append(table_value);   //为table追加一个tr(下拉项)
											  
											  var no_manual_id = $("#no_manual_id_edit").val(); //获取当前手工费
											  
											  no_manual_id = no_manual_id.replace("元","");
											   
											  locals[3] = locals[3].replace("元","");
											  
											  total_price = eval('('+no_manual_id + "+" + locals[3]+')'); //手工费叠加
											  
											  total_price = total_price.toFixed(2);
											  if(no_inch_w_edit!="" && no_inch_h_edit!=""){
												  var a=Math.ceil(no_inch_w_edit/19);
												  var b=Math.ceil(no_inch_h_edit/19);
												  total_price=(locals[6]*a*b).toFixed(2);
												  
												  $("#no_manual_id_edit").val(total_price + "元"); 
											   
											  }else{
												  $("#no_manual_id_edit").val(locals[6] + "元"); 
											  } //无设计手工费
								
											  var no_jiaozhi = $("#no_jiaozhi_edit").val();   //获取胶纸费				
											  var no_material_price_1 = $("#no_material_price_edit").val();   //获取材料费	
											  
											  
											  no_jiaozhi = no_jiaozhi.replace("元","");                     //
											  no_material_price_1 = no_material_price_1.replace("元","");       //   过滤掉"元"
											  
											  if(no_jiaozhi==""){
												  var total_price = no_material_price_1 + "+" + total_price;
											  }else{
												  var total_price = no_material_price_1 + "+" + total_price + "+" + no_jiaozhi; 
											  }
											  total_price = eval('('+total_price+')');  //运算符转化为结果
											  total_price = total_price.toFixed(2);   // 保留2位小数
											  $("#no_total_price_id_edit").val(total_price + "元");     //
											  $("#no_total_price_id_1_edit").val(total_price + "元");	 //  合计
											  $("#no_total_price_id_2_edit").val(total_price + "元");	 //	
											  
											  var no_coefficient = $("#no_coefficient_edit").val();   //工厂成本系数
											  var no_cost_price = total_price + "*" + no_coefficient;  //合计*系数 公式
											  no_cost_price = eval('('+no_cost_price+')');
											  no_cost_price = no_cost_price.toFixed(2);
											  $("#no_cost_price_edit").val(no_cost_price);  //工厂成本
											  
											  var no_piece = $("#no_piece_edit").val();  //片数
											  var no_default_quote_coefficient = $("#no_default_quote_coefficient_edit").val();  //报价系数
											  var no_parities = $("#no_parities_edit").val();  //汇率
											  
											  var monolithic_quote = total_price + "*" + no_default_quote_coefficient + "/" + no_parities;
											  monolithic_quote = eval('('+monolithic_quote+')');
											  monolithic_quote = monolithic_quote.toFixed(2);
											  $("#no_monolithic_quote_edit").val(aaa[0] + monolithic_quote);						
											  
											  var final_quotation = monolithic_quote + "*" + no_piece;   //最终报价公式
											  
											  var no_version = $("#no_version").val();
											  
											  final_quotation = eval('('+final_quotation+ "+" + loc+')');
											  final_quotation = final_quotation.toFixed(2);
											  $("#no_final_quotation_edit").val(aaa[0] + final_quotation);  //最终报价
			                           }
			                       });
					    }
						locals=locals.split("|");
						var no_material_price = $("#no_material_price_edit").val();
						
						if(no_material_price=="" || no_material_price=="0.00元"){
							$("#no_material_price_edit").val(locals[1]);	
							
						}else{
							var no_material_price_a = locals[1];
							
							no_material_price_a = no_material_price_a.replace("元","");
							no_material_price = no_material_price.replace("元","");
							
							var no_material_price_b = no_material_price_a + "+" + no_material_price;
							total_price = eval('('+no_material_price_b+')');
							total_price = total_price.toFixed(4);
							$("#no_material_price_edit").val(total_price + "元");	
						}				
					
					var table_value = "<tr class='hq_tableClass02'> <td>"+material_name+"<input type='hidden' id='row_number' value='"+row_number+"' /><input type='hidden' name='materials["+row_number+"][material_name]' value='"+material_name+"' /></td> <td>"+size_text+"<input type='hidden' name='materials["+row_number+"][size]' value='"+size+"' /></td> <td>"+color+"<input type='hidden' name='materials["+row_number+"][color]' value='"+color+"' /></td> <td>"+quantity+"<input type='hidden' name='materials["+row_number+"][quantity]' value='"+quantity+"' /></td><td id=no_price_a_edit"+locals[0]+">"+locals[1]+"</td><td onClick='getDel(this,"+locals[0]+")'><a href='#'>删除</a></td></tr>";
					$("#material_table_edit").append(table_value);   //为table追加一个tr(下拉项)
					
					var no_manual_id = $("#no_manual_id_edit").val(); //获取当前手工费
					
					no_manual_id = no_manual_id.replace("元","");
					 
					locals[3] = locals[3].replace("元","");
					
					total_price = eval('('+no_manual_id + "+" + locals[3]+')'); //手工费叠加

					total_price = total_price.toFixed(2);		
					
				    if(no_inch_w_edit!="" && no_inch_h_edit!=""){
					
						var a=Math.ceil(no_inch_w_edit/19);
						var b=Math.ceil(no_inch_h_edit/19);
						
						total_price=(locals[6]*a*b).toFixed(2);
						
						$("#no_manual_id_edit").val(total_price + "元"); 
					 
				   }else{
				        $("#no_manual_id_edit").val(locals[6] + "元"); 
				   }
					
					 //无设计手工费
					
					var no_jiaozhi = $("#no_jiaozhi_edit").val();   //获取胶纸费				
					var no_material_price_1 = $("#no_material_price_edit").val();   //获取材料费	
					
					
					no_jiaozhi = no_jiaozhi.replace("元","");                     //
					no_material_price_1 = no_material_price_1.replace("元","");       //   过滤掉"元"
					
					if(no_jiaozhi==""){
						var total_price = no_material_price_1 + "+" + total_price;
					}else{
						var total_price = no_material_price_1 + "+" + total_price + "+" + no_jiaozhi; 
					}
					total_price = eval('('+total_price+')');  //运算符转化为结果
					total_price = total_price.toFixed(2);   // 保留2位小数
					$("#no_total_price_id_edit").val(total_price + "元");     //
					$("#no_total_price_id_1_edit").val(total_price + "元");	 //  合计
					$("#no_total_price_id_2_edit").val(total_price + "元");	 //	
					
					var no_coefficient = $("#no_coefficient_edit").val();   //工厂成本系数
					var no_cost_price = total_price + "*" + no_coefficient;  //合计*系数 公式
					no_cost_price = eval('('+no_cost_price+')');
					no_cost_price = no_cost_price.toFixed(2);
					$("#no_cost_price_edit").val(no_cost_price);  //工厂成本
					
					var no_piece = $("#no_piece_edit").val();  //片数
					var no_default_quote_coefficient = $("#no_default_quote_coefficient_edit").val();  //报价系数
					var no_parities = $("#no_parities_edit").val();  //汇率
					
					var monolithic_quote = total_price + "*" + no_default_quote_coefficient + "/" + no_parities;
					monolithic_quote = eval('('+monolithic_quote+')');
					monolithic_quote = monolithic_quote.toFixed(2);
					$("#no_monolithic_quote_edit").val(aaa[0] + monolithic_quote);						
					
					var final_quotation = monolithic_quote + "*" + no_piece;   //最终报价公式
					
					var no_version = $("#no_version").val();
					
					final_quotation = eval('('+final_quotation+ "+" + no_version+')');
					final_quotation = final_quotation.toFixed(2);
					$("#no_final_quotation_edit").val(aaa[0] + final_quotation);  //最终报价
					
					}else{
						alert("此数据有重复,请重新录入");
					}
				}
			});

	    row_number++; 
		
		}else{
			alert("请添加数量！")
		}
	});

});


function beisun_change_edit(){
	if($("#hq_beisun_edit").val()!= '' && $("#hq_beisun_edit").val()!= 0){
		$("#hq_beisun_error_edit").css("display","block");
	}else{
		$("#hq_beisun_error_edit").css("display","none");
	}
}
function no_beisun_change_edit(){
	if($("#hq_no_beisun_edit").val()!= '' && $("#hq_no_beisun_edit").val()!= 0){
		$("#hq_no_beisun_error_edit").css("display","block");
	}else{
		$("#hq_no_beisun_error_edit").css("display","none");
	}
}

function getDel(k,row){
   $(document).ready(function(){
   
	var no_price_a = $("#no_price_a_edit" + row).text();    //    当条材料价钱			
	var no_material_price = $("#no_material_price_edit").val();    //   材料费 
	var no_manual_id = $("#no_manual_id_edit").val(); 
	var no_inch_w_edit = $("#no_inch_w_edit").val();   
	var no_inch_h_edit = $("#no_inch_h_edit").val();  
    var mid = $("#mid").val();   
   	var no_total_price_id = $("#no_total_price_id_2_edit").val();    //   当前合计
	var no_coefficient = $("#no_coefficient_edit").val();    //   当前成本系数
	var no_piece = $("#no_piece_edit").val();    //   当前片数
	var no_default_quote_coefficient = $("#no_default_quote_coefficient_edit").val();    //   报价系数
	var no_parities = $("#no_parities_edit").val();    //   汇率
	var aaa = $("#no_parities_edit").find("option:selected").text();
	aaa=aaa.split(" ");	
	var quotation_category_id_no = $("#quotation_category_id_no_edit").val();
	if(quotation_category_id_no!='Stock改色'){	
		  $.ajax({
				  url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/delete_table_quotation_sheet_material',//通过Ajax取数据的目标页面
				  type:'get',//方法，还可以是"post"
				  data:{'id':row,'mid':mid},
				  dataType:'json',//数据类型，还有其它的，详见jQuery手册
				  success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
				  {   
					  locals=locals.split("|");
					  $.ajax({
						  url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/hotfix_quotation/find_version_no_edit',//通过Ajax取数据的目标页面
						  type:'get',//方法，还可以是"post"
						  data:{'no_parities':no_parities,'mid':mid,'no_piece':no_piece},
						  dataType:'json',//数据类型，还有其它的，详见jQuery手册
						  success:function(loc)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
						  {	
							  if(no_piece<12){
								  $("#no_version").val(loc);
							  }else{
								  $("#no_version").val('0');
							  }
							  //alert(loc);return;
							  no_price_a = no_price_a.replace("元","");
							  no_material_price = no_material_price.replace("元","");
							  var total_price = no_material_price + "-" + no_price_a;  //删除后材料价钱 
							  total_price = eval('('+total_price+')');
							  total_price = total_price.toFixed(2);
							  $("#no_material_price_edit").val(total_price + "元");
		  
							  no_manual_id = no_manual_id.replace("元","");
							  var no_manual_id_a = no_manual_id + "-" + locals[0];  //删除后手工费价钱
	  
							  no_manual_id_a = eval('('+no_manual_id_a+')');
							  no_manual_id_a = no_manual_id_a.toFixed(2);
					  
							  if(no_inch_w_edit!="" && no_inch_h_edit!=""){
								   var a=Math.ceil(no_inch_w_edit/19);
								   var b=Math.ceil(no_inch_h_edit/19);
								   total_price_1=(locals[1]*a*b).toFixed(2);
								   $("#no_manual_id_edit").val(total_price_1 + "元"); 
								   
							  }else{
								   $("#no_manual_id_edit").val(locals[1] + "元");
							  }
					  
				  
							  no_total_price_id = no_total_price_id.replace("元","");
							  var no_total_price_id_a = no_total_price_id + "-" + locals[0] + "-" + no_price_a;    //删除后 合计				
							  no_total_price_id_a = eval('('+no_total_price_id_a+')');
							  no_total_price_id_a = no_total_price_id_a.toFixed(2);
							  $("#no_total_price_id_edit").val(no_total_price_id_a + "元");	
							  $("#no_total_price_id_1_edit").val(no_total_price_id_a + "元");	
							  $("#no_total_price_id_2_edit").val(no_total_price_id_a + "元");	
					  
							  var no_coefficient_a = no_total_price_id_a + "*" + no_coefficient;    //   工厂成本
							  no_coefficient_a = eval('('+no_coefficient_a+')');
							  no_coefficient_a = no_coefficient_a.toFixed(2);				
							  $("#no_cost_price_edit").val(no_coefficient_a + "元");
							  
							  var monolithic_quote = no_total_price_id_a + "*" + no_default_quote_coefficient + "/" + no_parities;
							  monolithic_quote = eval('('+monolithic_quote+')');
							  monolithic_quote = monolithic_quote.toFixed(2);
							  $("#no_monolithic_quote_edit").val(aaa[0] + monolithic_quote);					
							  
							  var no_final_quotation = monolithic_quote + "*" + no_piece;
							  
							  no_final_quotation = eval('('+no_final_quotation+ "+" +loc+')');
					  
							  $("#no_final_quotation_edit").val(aaa[0] + no_final_quotation);		
						  }
					  });
											  
						  
				  }
		  });
	}else{
		
		$.ajax({
					  url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/hotfix_quotation/delete_table_quotation_sheet_material',//通过Ajax取数据的目标页面
					  type:'get',//方法，还可以是"post"
					  data:{'id':row},
					  dataType:'text',//数据类型，还有其它的，详见jQuery手册
					  success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
					  {
						 
						  
						   var no_inch_w=$("#no_inch_w_edit").val();
						   var no_inch_h=$("#no_inch_h_edit").val();
					
						   locals=locals.split("|");	
						 
						   var a=Math.ceil(no_inch_w/19);
						   var b=Math.ceil(no_inch_h/19);
						   manual=locals[1]*a*b;
						   manual=manual.toFixed(2);
						   $("#no_manual_id_edit").val(manual + "元");
						   $("#no_material_price_edit").val(locals[0] + "元");
						   var jiaozhi = $("#no_jiaozhi_edit").val();
						   jiaozhi = jiaozhi.replace("元","");
						   if(manual==''){
							   manual=0;
						   }
						   if(locals[0]==''){
							   locals[0]=0;
						   }
						   if(jiaozhi==''){
							   jiaozhi=0;
						   }
						  var price = (eval('('+manual + "+" + locals[0] + "+" + jiaozhi+')')).toFixed(2); 
						  var chengben=eval('('+price + "*" + no_coefficient + ')').toFixed(2);
						  var total_price=eval('('+price + "*" + no_default_quote_coefficient + ')').toFixed(2);
						  var total=eval('('+total_price + "*" + no_piece + ')').toFixed(2);
						  $("#no_total_price_id_2_edit").val(price+"元");//合计
						  $("#no_cost_price_edit").val(chengben);//成本
						  $("#no_monolithic_quote_edit").val("¥"+total_price);//单片报价
						  $("#no_final_quotation_edit").val("¥"+total);//单片报价	
					  }
		 });
	}
     $(k).parent().remove();  
	//$("#material_table1").$(k).remove();
	});
}


function sIE_size01(n){
	
	if(n==1){
		g('sIE_size02_edit').value=1;
	}else{
		g('sIE_size02_edit').value=2;
	}
}
function sIE_size02(n){
	if(n==1){
		g('sIE_size01_edit').value=1;
	}else{
		g('sIE_size01_edit').value=2;
	}
}

function uploadok(event, queueId, fileObj, response, data){
	//alert('aaa');
}

</script><!-- {/literal} -->