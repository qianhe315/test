<?php /* Smarty version 2.6.22, created on 2015-07-24 10:16:01
         compiled from template_quotation/add.html */ ?>
<script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/cstown_Sys.js" type="text/javascript"></script>
<link href="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/css/cstown_sys.css" rel="stylesheet" type="text/css" media="screen"/>
<div class="pageContent"> <?php if ($this->_tpl_vars['quotation_category'] == 8): ?>
  <div class="stkInfEnter" style="width:98%; display:none; padding-bottom:25px;" layoutH="30" id="ttbjd_ysj_hot_2"> <?php else: ?>
    <div class="stkInfEnter" style="width:98%" layoutH="30" id="ttbjd_ysj_hot_2"> <?php endif; ?>
      <div style="float:left; width:100%;"> <?php if (! $this->_tpl_vars['quotation_category']): ?>
        <div class="sIE_title" style="width:15%;">
          <div class="button">
            <div class="buttonContent">
              <button onclick="document.getElementById('ttbjd_wsj_hot_2').style.display='block';document.getElementById('ttbjd_ysj_hot_2').style.display='none';">模板报价单(无设计)</button>
            </div>
          </div>
        </div>
        <?php endif; ?>
        <div class="sIE_title" style="width:60%;">模板报价单</div>
      </div>
      <form method="post" action="<?php if ($this->_tpl_vars['id']): ?> <?php echo $this->_tpl_vars['update_baojia_action']; ?>
<?php else: ?><?php echo $this->_tpl_vars['baojia_action']; ?>
<?php endif; ?>" id="rhinestone_quotation_submit_form" enctype="multipart/form-data" onsubmit="return validateCallback(this, navTabAjaxDone)">
        
        <input type="hidden" name="final_quotation_hidden" id="final_quotation_hidden" value="0" />
        <div class="sIEK" style="width:97%;">
          <div class="sIE_l" style="width:200px;">
            <div class="sIE_l_01" style="width:200px;">
              <div class="sIE_l_01_title">业务员:</div>
              <input type="text" class="sIE_No" style="width:100px;" value="<?php echo $this->_tpl_vars['user_name']; ?>
"  readonly="readonly" />
            </div>
            <div class="sIE_l_01" style="width:200px;">
              <div class="sIE_l_01_title">客户代码:</div>
              <input type="text" name="customer_code" id="hq_customer_code" style="width:100px;" value="<?php echo $this->_tpl_vars['customer_code']; ?>
" class="sIE_No" onkeyup="customer_num();" />
            </div>
            <div class="sIE_l_01" style="width:200px;">
              <div class="sIE_l_01_title">客户名:</div>
              <input type="text" name="customer_name" style="width:100px;" id="hq_customer_name" value="<?php echo $this->_tpl_vars['customer_name']; ?>
" class="sIE_No"  readonly="readonly" />
            </div>
            <div class="sIE_l_01" style="width:200px;">
              <div class="sIE_l_01_title">公司:</div>
              <input type="text" name="customer_company" style="width:100px;" value="<?php echo $this->_tpl_vars['customer_company']; ?>
" class="sIE_No" id="hq_customer_company"  readonly="readonly" />
            </div>
            <div class="sIE_l_01" style="width:200px;">
              <div class="sIE_l_01_title">纸板面积:</div>
              <input id="zhiban_mj" class="sIE_No" style="width:50px;" type="text" readonly="readonly" name="template_area" value="<?php echo $this->_tpl_vars['template_area']; ?>
">
              <font style="float:left; margin-left:3px; line-height:30px;">平方英寸</font> </div>
            <div class="sIE_l_01" style="width:200px;">
              <div class="sIE_l_01_title">打版数量:</div>
              <input id="daban_number" class="sIE_No" style="width:100px;" type="text" readonly="readonly" name="template_number" value="<?php echo $this->_tpl_vars['template_number']; ?>
">
            </div>
            <div class="sIE_l_01" style="width:200px;">
              <div class="sIE_l_01_title">报价:</div>
              <input id="final_quotation" class="sIE_No" style="width:100px;" type="text" readonly="readonly" name="final_quote"  value="<?php echo $this->_tpl_vars['final_quote']; ?>
" />
            </div>
          </div>
          <div class="sIE_l" style="width:420px;">
            <div class="sIE_l" style="width:200px;">
              <div class="sIE_l_01" style="width:200px;">
                <div class="sIE_l_01_title" style="width:80px;">时间:</div>
                <input type="text" value="<?php echo $this->_tpl_vars['quotation_date']; ?>
" style="width:100px;" name="time" class="sIE_No"  readonly="readonly" />
              </div>
              <div class="sIE_l_01" style="width:200px;">
                    <div class="sIE_l_01_title" style="width:80px;">报价类型:</div>
                    <select class="picture_select01" name="quotation_category_id" id="picture_select01_template" style="width:106px; height:26px;" onchange="design_code_template()">
                      <option value="">请选择</option>
                      <?php $_from = $this->_tpl_vars['quotation']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['qf']):
?> <?php if ($this->_tpl_vars['quotation_category_id'] == $this->_tpl_vars['qf']['id']): ?>
                      <option selected="selected" value="<?php echo $this->_tpl_vars['qf']['id']; ?>
"><?php echo $this->_tpl_vars['qf']['quotation_name']; ?>
</option>
                      <?php else: ?>
                      <option value="<?php echo $this->_tpl_vars['qf']['id']; ?>
"><?php echo $this->_tpl_vars['qf']['quotation_name']; ?>
</option>
                      <?php endif; ?> <?php endforeach; endif; unset($_from); ?>
                    </select>
                  
               </div>
              <div class="sIE_l_01" style="width:200px;">
                <div class="sIE_l_01_title">报价名称:</div>
                <input type="text" id="design_pic_name" name="design_pic_name" value="<?php echo $this->_tpl_vars['design_pic_name']; ?>
" class="sIE_No" style="width:100px;" onkeyup="stock_template();"/>
              </div>
              <div class="sIE_l_01" style="width:200px;">
                <div class="sIE_l_01_title">报价编号:</div>
               <!-- <input class="sIE_No"  id="picture_select02" onkeyup="design_code33()" style="width:100px;" type="text" name="quotation_code" >-->
                
               
                   
                          <input type="text" name="quotation_code" class="sIE_No" id="picture_select02"  value="" style="display:block; width:100px;" onkeyup="quotation_code_num_template()"/>
                      <input type="text" name="stock_number_cdr" class="sIE_No" id="picture_text01_template" readonly="readonly" value="<?php echo $this->_tpl_vars['no_stock_number']; ?>
" style="display:none; width:100px;" />
                
                
              </div>
              <div class="sIE_l_01" style="width:200px;">
                <div class="sIE_l_01_title" style="line-height:26px;">货币:</div>
                <select id="parities" name="exchange_rate_id" onchange="parities1()" class="picture_select02" style="float:left; width:105px; height:24px;">
                  <?php $_from = $this->_tpl_vars['exchangerate']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['qf']):
?> <?php if ($this->_tpl_vars['exchange_rate_id']): ?> <?php if ($this->_tpl_vars['qf']['exchangerate_name'] == $this->_tpl_vars['exchange_rate_id']): ?>
                  <option selected="selected" value="<?php echo $this->_tpl_vars['qf']['value']; ?>
"><?php echo $this->_tpl_vars['qf']['exchangerate_character']; ?>
 <?php echo $this->_tpl_vars['qf']['exchangerate_name']; ?>
</option>
                  <?php else: ?>
                  <option value="<?php echo $this->_tpl_vars['qf']['value']; ?>
"><?php echo $this->_tpl_vars['qf']['exchangerate_character']; ?>
 <?php echo $this->_tpl_vars['qf']['exchangerate_name']; ?>
</option>
                  <?php endif; ?> <?php else: ?> <?php if ($this->_tpl_vars['qf']['exchangerate_name'] == '人民币'): ?>
                  <option selected="selected" value="<?php echo $this->_tpl_vars['qf']['value']; ?>
"><?php echo $this->_tpl_vars['qf']['exchangerate_character']; ?>
 <?php echo $this->_tpl_vars['qf']['exchangerate_name']; ?>
</option>
                  <?php else: ?>
                  <option value="<?php echo $this->_tpl_vars['qf']['value']; ?>
"><?php echo $this->_tpl_vars['qf']['exchangerate_character']; ?>
 <?php echo $this->_tpl_vars['qf']['exchangerate_name']; ?>
</option>
                  <?php endif; ?> <?php endif; ?> <?php endforeach; endif; unset($_from); ?>
                </select>
              </div>
            </div>
            <div class="sIE_l_01" style="margin-top:10px; width:210px;">
              <div class="sIE_l_01_title" style="width:50px; height:100px;">尺寸:</div>
              <div class="sIE_r01" style="float:left; width:160px;">
                <div class="sIE_r01_div">
                  <input type="text" id="inch_w" style="width:80px;" value="<?php echo $this->_tpl_vars['content_inch_w']; ?>
" disabled="disabled" class="sIE_No" />
                  <div style=" margin-left:5px; float:left;">inch W</div>
                </div>
                <div class="sIE_r01_div">
                  <input type="text" id="inch_h" style="width:80px;" value="<?php echo $this->_tpl_vars['content_inch_h']; ?>
" disabled="disabled" class="sIE_No" />
                  <div style=" margin-left:5px; float:left;">inch H</div>
                </div>
                <div class="sIE_r01_div">
                  <input type="text" id="cm_w" style="width:80px;" value="<?php echo $this->_tpl_vars['content_cm_w']; ?>
" disabled="disabled" class="sIE_No" />
                  <div style=" margin-left:5px; float:left;">cm W</div>
                </div>
                <div class="sIE_r01_div">
                  <input type="text" id="cm_h" style="width:80px;" value="<?php echo $this->_tpl_vars['content_cm_h']; ?>
" disabled="disabled" class="sIE_No" />
                  <div style=" margin-left:5px; float:left;">cm H</div>
                </div>
              </div>
              <?php if ($this->_tpl_vars['quotation_category_id'] != 5): ?>
              <div   id="sheji" >
                <div class="sIE_l_01_title" style="width:50px; display:block;">设计师:</div>
                <div class="sIE_r01" style="float:left; width:160px;">
                  <div class="sIE_r01_div">
                    <input type="text" class="sIE_No" value="<?php echo $this->_tpl_vars['design_user_name']; ?>
" id="shejishi" readonly="readonly" style="width:80px;"/>
                  </div>
                </div>
              </div>
              <?php endif; ?> </div>
              
              
              <div class="sIE_l_02" style="width:400px;">
              <div id="hq_result" style="line-height: 26px; float: left; color: rgb(255, 0, 0); margin-left: 10px; display:none;"></div>
                	<table cellspacing="0" class="sIE_l_02Tab"  id="hq_tableClass01">               
                    <thead id="material">
                        <?php if ($this->_tpl_vars['id']): ?>
                           <tr id="aaa">
                           <?php else: ?>
                           <tr id="aaa" style="display:none;">
                        <?php endif; ?>   
                               <th width=18%>名称</th>
                               <th width=18%>颜色</th>
                               <th width=18%>尺寸</th>
                               <th width=20%>数量</th>
                           </tr>
                           <?php $_from = $this->_tpl_vars['design_content_material']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['qf']):
?>
                              <tr>
                                 <td><?php echo $this->_tpl_vars['qf']['material_name']; ?>
</td>
                                 <td><?php echo $this->_tpl_vars['qf']['material_color']; ?>
</td>
                                 <td><?php echo $this->_tpl_vars['qf']['material_size']; ?>
 inch</td>
                                 <td><?php echo $this->_tpl_vars['qf']['material_quantity']; ?>
</td>
                              </tr>
                           <?php endforeach; endif; unset($_from); ?>  
                    </thead>
                    </table>              	  
                </div>
              
          </div>
          <div class="sIE_r" style="width:420px; height:auto;">
            <div class="sIE_r" style="height:210px; width:210px; margin-top:0px;">
              <div class="sIE_r_img" id="image" style="width:210px; height:210px;"><img src="<?php echo $this->_tpl_vars['upload_jpg']; ?>
" style="height:210px; width:210px;" /></div>
              <input type="hidden" name="image" id="image_hidden" />
            </div>
          </div>
        </div>
      </form>
      <div class="sIE_l_02" style=" margin-top:3%;">
        <div class="button" style="margin-left:70%; margin-right:5px;">
          <div class="buttonContent">
            <button type="button" id="design_content_save">确定</button>
          </div>
        </div>
        <div class="button">
          <div class="buttonContent">
            <button class="close">取消</button>
          </div>
        </div>
      </div>
    </div>
    <?php if ($this->_tpl_vars['quotation_category'] == 7): ?>
    <div class="stkInfEnter" style="width:98%;display:block;" layoutH="30" id="ttbjd_wsj_hot_2"> <?php else: ?>
      <div class="stkInfEnter" style="width:98%; display:none;" layoutH="30" id="ttbjd_wsj_hot_2"> <?php endif; ?>
        <div style="width:100%; float:left;"> <?php if (! $this->_tpl_vars['quotation_category']): ?>
          <div class="sIE_title" style="width:15%;">
            <div class="button">
              <div class="buttonContent">
                <button onclick="document.getElementById('ttbjd_ysj_hot_2').style.display='block';document.getElementById('ttbjd_wsj_hot_2').style.display='none';">模板报价单</button>
              </div>
            </div>
          </div>
          <?php endif; ?>
          <div class="sIE_title" style="width:60%;">模板报价单(无设计)</div>
        </div>
        <form name="form1" method="post" action="<?php if ($this->_tpl_vars['id']): ?> <?php echo $this->_tpl_vars['update_no_baojia_action']; ?>
<?php else: ?><?php echo $this->_tpl_vars['no_baojia_action']; ?>
<?php endif; ?>" id="no_rhinestone_quotation_submit_form" enctype="multipart/form-data" onsubmit="return validateCallback(this, navTabAjaxDone)">
          <!--                                <div class="sIE_r" style="height:120px; width:120px;">
               <input type="file" class="sIE_r_img_file" name="jpg" id="jpg" style="width:120px;"  /><br />
          </div> -->
          <div class="sIEK" style="width:75%;">
            <div class="sIE_l" style="width:200px;">
              <div class="sIE_l_01" style="width:200px;">
                <div class="sIE_l_01_title">业务员:</div>
                <input type="text" readonly="readonly" value="<?php echo $this->_tpl_vars['user_name']; ?>
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
" style="width:100px;" id="no_customer_num_1" onkeyup="no_customer_num();" />
              </div>
              <div class="sIE_l_01" style="width:200px;">
                <div class="sIE_l_01_title">客户名:</div>
                <input type="text" class="sIE_No" value="<?php echo $this->_tpl_vars['customer_name']; ?>
" name="no_customer_code" id="no_customer_code" style="width:100px;"  readonly="readonly" />
              </div>
              <div class="sIE_l_01" style="width:200px;">
                <div class="sIE_l_01_title">公司:</div>
                <input type="text" class="sIE_No" name="no_customer_company" value="<?php echo $this->_tpl_vars['customer_company']; ?>
" id="no_customer_company" style="width:100px;"  readonly="readonly" />
              </div>
              <div class="sIE_l_01" style="width:200px;">
                <div class="sIE_l_01_title">纸板面积:</div>
                <input id="no_zhiban_mj" class="sIE_No" style="width:50px;" type="text" readonly="readonly" name="no_template_area" value="<?php echo $this->_tpl_vars['template_area']; ?>
">
                <font style="float:left; margin-left:3px; line-height:30px;">平方英寸</font> </div>
              <div class="sIE_l_01" style="width:200px;">
                <div class="sIE_l_01_title">打版数量:</div>
                <input id="no_daban_number" class="sIE_No" style="width:100px;" type="text" readonly="readonly" name="no_template_number" value="<?php echo $this->_tpl_vars['no_template_number']; ?>
">
              </div>
              <div class="sIE_l_01" style="width:200px;">
                <div class="sIE_l_01_title">报价:</div>
                <input id="no_final_quotation" class="sIE_No" style="width:100px;" type="text" readonly="readonly" name="no_final_quote"  value="<?php echo $this->_tpl_vars['final_quote']; ?>
" >
              </div>
            </div>
            <div class="sIE_l" style="width:200px;">
              <div class="sIE_l_01" style="width:200px;">
                <div class="sIE_l_01_title">报价编号:</div>
                <input type="text" class="sIE_No" name="no_stock_number" readonly="readonly" value="<?php echo $this->_tpl_vars['no_stock_number']; ?>
" style="width:100px;" />
              </div>
              <div class="sIE_l_01" style="width:200px;">
                <div class="sIE_l_01_title">报价名称:</div>
                <input type="text" style="width:100px;" value="<?php echo $this->_tpl_vars['no_name']; ?>
" name="no_name" id="no_name" class="sIE_No" />
              </div>
              <div class="sIE_l_01" style="width:200px;">
                <div class="sIE_l_01_title" style=" line-height:26px;">货币:</div>
                <select id="no_parities" name="no_exchange_rate_id" onchange="no_parities1()" class="picture_select02" style="float:left; width:105px; height:24px;">
                  <?php $_from = $this->_tpl_vars['exchangerate']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['qf']):
?> <?php if (exchange_rate_id): ?> <?php if ($this->_tpl_vars['qf']['exchangerate_name'] == $this->_tpl_vars['exchange_rate_id']): ?>
                  <option selected="selected" value="<?php echo $this->_tpl_vars['qf']['value']; ?>
"><?php echo $this->_tpl_vars['qf']['exchangerate_character']; ?>
 <?php echo $this->_tpl_vars['qf']['exchangerate_name']; ?>
</option>
                  <?php else: ?>
                  <option value="<?php echo $this->_tpl_vars['qf']['value']; ?>
"><?php echo $this->_tpl_vars['qf']['exchangerate_character']; ?>
 <?php echo $this->_tpl_vars['qf']['exchangerate_name']; ?>
</option>
                  <?php endif; ?> <?php else: ?> <?php if ($this->_tpl_vars['qf']['exchangerate_name'] == '人民币'): ?>
                  <option selected="selected" value="<?php echo $this->_tpl_vars['qf']['value']; ?>
"><?php echo $this->_tpl_vars['qf']['exchangerate_character']; ?>
 <?php echo $this->_tpl_vars['qf']['exchangerate_name']; ?>
</option>
                  <?php else: ?>
                  <option value="<?php echo $this->_tpl_vars['qf']['value']; ?>
"><?php echo $this->_tpl_vars['qf']['exchangerate_character']; ?>
 <?php echo $this->_tpl_vars['qf']['exchangerate_name']; ?>
</option>
                  <?php endif; ?> <?php endif; ?> <?php endforeach; endif; unset($_from); ?>
                </select>
              </div>
              
            </div>
            <div class="sIE_r" style="width:400px;">
              <div class="sIE_l_01" style="margin-top:0px; width:190px;">
                <div class="sIE_l_01_title" style="width:30px; height:80px;">尺寸:</div>
                <div class="sIE_r01" style="float:left; width:150px;">
                  <div class="sIE_r01_div">
                    <input type="text" name="no_inch_w" value="<?php echo $this->_tpl_vars['inch_w']; ?>
" id="no_inch_w" class="sIE_No" style="width:100px;" />
                    <div style=" margin-left:5px; float:left;">inch W</div>
                  </div>
                  <div class="sIE_r01_div">
                    <input type="text" name="no_inch_h" value="<?php echo $this->_tpl_vars['inch_h']; ?>
" id="no_inch_h" class="sIE_No" style="width:100px;" />
                    <div style=" margin-left:5px; float:left;">inch H</div>
                  </div>
                  <div class="sIE_r01_div">
                    <input type="text" name="no_cm_w" value="<?php echo $this->_tpl_vars['cm_w']; ?>
" id="no_cm_w" class="sIE_No" style="width:100px;" />
                    <div style=" margin-left:5px; float:left;">cm W</div>
                  </div>
                  <div class="sIE_r01_div">
                    <input type="text" name="no_cm_h" value="<?php echo $this->_tpl_vars['cm_h']; ?>
" id="no_cm_h" class="sIE_No" style="width:100px;" />
                    <div style=" margin-left:5px; float:left;">cm H</div>
                  </div>
                </div>
              </div>
              <div class="sIEK" style="width:190px; padding-left:10px;">
                <div class="sIE_l_01" style="width:100%;">
                  <div class="sIE_l_01_title" style="width:40px;">材料:</div>
                  <div class="sIE_r01" style="width:120px;">
                    <div class="sIE_r01_div">
                      <select class="sIE_r01_Select" id="material_select" style="width:120px;">
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
                <div class="sIE_l_02" id="material_info" style="display:none;">
                  <div class="sIE_l_02_div">
                    <div class="sIE_l_01_title" style="width:40px;">颜色:</div>
                    <select id="material_info_color" class="sIE_r01_Select" style="width:120px;">
                    </select>
                  </div>
                  <div class="sIE_l_02_div">
                    <div class="sIE_l_01_title" style="width:40px;">尺寸:</div>
                    <input type="text" class="sIE_No" id="size_width" style="width:80px;"  />
                    <div class="sIE_No" style="width:54px; margin-left:5px;">MM W</div>
                    <!--<select class="sIE_sizeSelect" id="sIE_size01">
              <option value="1">inch</option>
              <option value="2">cm</option>
            </select>--> 
                  </div>
                  <div class="sIE_l_02_div">
                    <div class="sIE_l_01_title" style="width:40px;">&nbsp;</div>
                    <input type="text" class="sIE_No" id="size_height"  style="width:80px;" />
                    <div class="sIE_No" style="width:54px; margin-left:5px;">MM H</div>
                    <!--<select class="sIE_sizeSelect" id="sIE_size02">
              <option value="1">inch</option>
              <option value="2">cm</option>
            </select>--> 
                  </div>
                  <div class="sIE_l_02_div">
                    <div class="sIE_l_01_title" style="width:40px;">&nbsp;</div>
                    <input type="text" class="sIE_No" id="size_inch_width"  style="width:80px;" />
                    <div class="sIE_No" style="width:54px; margin-left:5px;">inch W</div>
                    <!--<select class="sIE_sizeSelect" id="sIE_size02">
              <option value="1">inch</option>
              <option value="2">cm</option>
            </select>--> 
                  </div>
                  <div class="sIE_l_02_div">
                    <div class="sIE_l_01_title" style="width:40px;">&nbsp;</div>
                    <input type="text" class="sIE_No" id="size_inch_height"  style="width:80px;" />
                    <div class="sIE_No" style="width:54px; margin-left:5px;">inch H</div>
                    <!--<select class="sIE_sizeSelect" id="sIE_size02">
              <option value="1">inch</option>
              <option value="2">cm</option>
            </select>--> 
                  </div>
                  <div class="sIE_l_02_div">
                    <div class="sIE_l_01_title" style="width:40px;">数量:</div>
                    <input type="text" value="1" readonly="readonly" class="sIE_size" id="material_quantity" style="width:120px;" />
                  </div>
                  <button type="button" id="insert_material1">添加材料</button>
                </div>
                <div class="sIE_l_02" id="material_info_c" style="display:none;">
                  <div class="sIE_l_02_div">
                    <div class="sIE_l_01_title" style="width:40px;">颜色:</div>
                    <select id="material_info_c_color" class="sIE_r01_Select" style="width:120px;">
                    </select>
                  </div>
                  <div class="sIE_l_02_div">
                    <div class="sIE_l_01_title" style="width:40px;">尺寸:</div>
                    <select class="sIE_r01_Select" id="material_c_size" style="width:120px;">
                      <option>请选择...</option>
                    </select>
                  </div>
                  <div class="sIE_l_02_div">
                    <div class="sIE_l_01_title" style="width:40px;">数量:</div>
                    <input type="text"  class="sIE_size" id="material_c_quantity" style="width:116px;" />
                  </div>
                  <button type="button" id="insert_material2">添加材料</button>
                </div>
              </div>
            </div>
            <div class="sIE_l_02" style=" width:400px;">
            <div id="hq_no_result" style="line-height: 26px; float: left; color: rgb(255, 0, 0); margin-left: 10px; display:none;"></div>
              <table cellspacing="0" class="sIE_l_02Tab" id="material_table">
                <tr>
                  <th>名称</th>
                  <th>尺寸</th>
                  <th>颜色</th>
                  <th>数量</th>
                  <th>操作</th>
                </tr>
                <?php $_from = $this->_tpl_vars['quotation_sheet_material_array']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['qsm']):
?>
                <tr class="hq_tableClass02">
                  <td><?php echo $this->_tpl_vars['qsm']['material_name']; ?>
</td>
                  <td><?php echo $this->_tpl_vars['qsm']['material_color']; ?>
</td>
                  <td><?php echo $this->_tpl_vars['qsm']['material_size']; ?>
</td>
                  <td><?php echo $this->_tpl_vars['qsm']['material_quantity']; ?>
</td>
                  <td id="no_price_a<?php echo $this->_tpl_vars['qsm']['id']; ?>
"><?php echo $this->_tpl_vars['qsm']['material_total_price']; ?>
</td>
                  <td onClick='getDel(this,<?php echo $this->_tpl_vars['qsm']['id']; ?>
)'><a href='#'>删除</a></td>
                </tr>
                <?php endforeach; endif; unset($_from); ?>
              </table>
            </div>
          </div>
          <script type="text/javascript" language="javascript">
			function customer_num(){
						var name = $("#hq_customer_code").val();
						var picture_select01_template = $("#picture_select01_template").val();
						$.ajax({
							url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/hotfix_quotation/add_customer',//通过Ajax取数据的目标页面
							data:{"name":name},
							type:'post',//方法，还可以是"post"
							dataType:'json',//数据类型，还有其它的，详见jQuery手册
							success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
							{
								if(locals){
									$("#hq_customer_name").val(locals.customer_name);
									$("#hq_customer_company").val(locals.company);
									
								}else{
									$("#hq_customer_name").val('');
									$("#hq_customer_company").val('');	
														
								}
							}								
							
						});
					}	 
                    function no_customer_num(){
						var name = $("#no_customer_num_1").val();
						$.ajax({
							url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/hotfix_quotation/add_customer',//通过Ajax取数据的目标页面
							data:{"name":name},
							type:'post',//方法，还可以是"post"
							dataType:'json',//数据类型，还有其它的，详见jQuery手册
							success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
							{
								if(locals){
									$("#no_customer_code").val(locals.customer_name);
									$("#no_customer_company").val(locals.company);
								}else{
									$("#no_customer_code").val('');
									$("#no_customer_company").val('');									
								}
							}								
							
						});
					}
				function quotation_code_num_template(){
					   $(document).ready(function(){	
					      var id = $("#picture_select02").val();
						  var type = $("#picture_select01_template").val();
					      var aaa = $("#parities").val();
					      $('#aaa').css('display','none');
						  if(type=="3"){
							     $.ajax({
										  url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/template_quotation/add_design_code',//通过Ajax取数据的目标页面
										  data:{"id":id,"ex_id":aaa},
										  type:'post',//方法，还可以是"post"
										  dataType:'text',//数据类型，还有其它的，详见jQuery手册
										  success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
										  {
			  
											  locals=locals.split("|");
											  if(locals[1]!=""){
												  $("#material").html(locals[0]);
												  $("#inch_w").val(locals[1]);
												  $("#inch_h").val(locals[2]);
												  $("#cm_w").val(locals[3]);
												  $("#cm_h").val(locals[4]);
												  $("#shejishi").val(locals[5]);
												  $("#image").html("<img style='height:220px; width:220px;' src = " + locals[6] + ">");
												  $("#image_hidden").val(locals[6]);
												  var zhiban_mj = ((parseFloat(locals[3])+3)*(parseFloat(locals[4])+3)/2.54).toFixed(2);
												  $("#zhiban_mj").val(zhiban_mj);
												  $("#daban_number").val(locals[7]);
												  $("#final_quotation").val(locals[8]);
												  
											  }
											  else{
												  $("#material").html("");
												  $("#inch_w").val("");
												  $("#inch_h").val("");
												  $("#cm_w").val("");
												  $("#cm_h").val("");
												  $("#shejishi").val("");
												  $("#image").html("<img style='height:220px; width:220px;' src = #>");
												  $("#image_hidden").val("");
												  $("#zhiban_mj").val("");
												  $("#final_quotation").val("");
											  }
										  }										
						       });
						  }
						
					   });
					}
					
					function design_code_template(){
					    $(document).ready(function(){
					
							var customer_name=$("#hq_customer_name").val();
							var customer_code=$("#hq_customer_code").val();
							$('#inch_w').val("");
							$('#inch_h').val("");
							$('#cm_w').val("");
							$('#cm_h').val("");
							$("#cdr_add").html("");
							$("#image").html("");
							$("#design_pic_name").val("");
							
							$('#shejishi').val("");
							$('#material').html("");
							$('#zhiban_mj').val("");
							$('#daban_number').val("");
							$("#final_quotation").val("");
							
						    var id2 = $("#picture_select01_template").val();
               
							if(id2=='5'){
								$('#picture_select02').css('display','none');
								$('#picture_text01_template').css('display','block');
							}else{
								
								$('#picture_select02').css('display','block');
								$('#picture_select02').val("");
								$('#picture_text01_template').css('display','none');	
							}
						
					   });
				}
				function stock_template(){
					 var id2 = $("#picture_select01_template").val();
					 var parities = $("#parities").val();
					 if(id2=='5'){
						 var stock = $("#design_pic_name").val();
						
						 $.ajax({
							url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/template_quotation/add_stock',//通过Ajax取数据的目标页面
							data:{"stock":stock,"parities":parities},
							type:'post',//方法，还可以是"post"
							dataType:'text',//数据类型，还有其它的，详见jQuery手册
							success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
							{
								locals=locals.split("|");
								$("#inch_w").val(locals[0]);
								$("#inch_h").val(locals[1]);
								$("#cm_w").val(locals[2]);
								$("#cm_h").val(locals[3]);
								$('#sheji').css('display','none');
								$("#image").html("<img style='height:220px; width:220px;' src = " + locals[4] + ">");
								$("#zhiban_mj").val(locals[5]);
								$("#daban_number").val(locals[6]);
								$("#final_quotation").val(locals[7]);
								$("#material").html(locals[8]);
							}								
							
						});	
					 }
				}
					
					
					//模板报价单 汇率计算最终报价
					function parities1(){

						   var parities = $("#parities").val();
						   var zhiban_mj = $("#zhiban_mj").val();
						   var daban_number = $("#daban_number").val();
						  $.ajax({
							url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/template_quotation/final_quotation_change',//通过Ajax取数据的目标页面
							data:{"parities":parities,"zhiban_mj":zhiban_mj,"daban_number":daban_number},
							type:'post',//方法，还可以是"post"
							dataType:'text',//数据类型，还有其它的，详见jQuery手册
							success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
							{

								if(locals!=""){

									$("#final_quotation").val(locals);
									
								}
								else{
									
									$("#final_quotation").val("");
								}
							}										
						}); 
	
							
					}
					function no_parities1(){

						   var parities = $("#no_parities").val();
						   var zhiban_mj = $("#no_zhiban_mj").val();
						   var daban_number = $("#no_daban_number").val();
						   
						  $.ajax({
							url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/template_quotation/final_quotation_change',//通过Ajax取数据的目标页面
							data:{"parities":parities,"zhiban_mj":zhiban_mj,"daban_number":daban_number},
							type:'post',//方法，还可以是"post"
							dataType:'text',//数据类型，还有其它的，详见jQuery手册
							success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
							{

								if(locals!=""){

									$("#no_final_quotation").val(locals);
									
								}
								else{
									
									$("#no_final_quotation").val("");
								}
							}										
						}); 
	
							
					}
				 </script>
        </form>
        <div class="sIE_r" style="height:260px; width:260px; margin-top:0px; float:right;">
          <div class="sIE_r_img" style="height:280px; width:260px; margin-left:0px;">
            <div style="float:left;  width:260px; height:auto;">
              <iframe name="hq_yframe_hotfix" src="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/hotfix_quotation/two_img_upload" style="border:none; width:260px; height:280px;"></iframe>
            </div>
          </div>
          <form style="float:left; width:260px;" id="hq_upload_jpg" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/hotfix_quotation/two_img_upload" target="hq_yframe_hotfix" method="post" enctype="multipart/form-data" >
            <div style="float:left; height:30px; width:60px; overflow:hidden; margin-left:20px; position:relative;">
              <input type="file" class="sIE_r_img_file" id="hq_jpg_file" name="upload_file[]" multiple="multiple" style=" opacity:0; position:relative; z-index:10; margin-top:0px;" />
              <input type="button" class="sIE_r_img_file" name="jpg" style=" opacity:1; width:60px; text-align:center; height:24px; position:absolute; z-index:9; margin-top:0px;" value="浏览" />
            </div>
            <input type="button" id="hq_jpg_upload_submit" value="上传JPG和CDR" style=" float:right; width:100px;" />
          </form>
        </div>
        <!--<div class="sIE_r" style="height:36px; width:260px; margin-top:20px; padding-top:15px; border-top:dotted 1px #CCC; float:right;">
          <div class="sIE_r_img" style="height:36px; width:260px; margin-left:0px;">
            <div style="float:left;  width:260px; height:auto;"> 
              <img src="sss.jpg" width="224px" height="224px" />
              <iframe name="yframe_hotfix_cdr" src="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/hotfix_quotation/upload_cdr" style="border:none; width:260px; height:260px;"></iframe>
            </div>
          </div>
          <form style="float:left; width:260px;" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/hotfix_quotation/upload_cdr" id="hq_upload_cdr" target="yframe_hotfix_cdr" method="post" enctype="multipart/form-data" >
            <div style="float:left; width:60px; height:50px; overflow:hidden; margin-left:20px;position:relative;">
              <input type="file" class="sIE_r_img_file" id="hq_cdr_file" name="cdr_file" style=" opacity:0; position:relative; z-index:10; margin-top:0px;"  />
              <input type="button" class="sIE_r_img_file" name="jpg" style=" opacity:1; width:60px; text-align:center; height:24px; position:absolute; z-index:9; margin-top:0px;" value="浏览" />
            </div>
            <input type="button" id="hq_cdr_upload_submit" value="上传CDR" style=" float:right; width:70px;" />
            <div id="testFileInput" class="uploadify" style="height: 30px; width: 120px; float:left; margin-top:10px;"> </div>
          </form>
        </div>-->
        <div class="sIE_l_02" style="margin-top:65px; margin-top:5%;">
          <div class="button" style="margin-left:80%; margin-right:5px;">
            <div class="buttonContent">
              <button type="button" id="no_design_content_save">确定</button>
            </div>
          </div>
          <div class="button">
            <div class="buttonContent">
              <button class="close">取消</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- {literal} --> 
<script type="text/javascript">

$(document).ready(function()  
{
	$("#hq_jpg_upload_submit").click(function (){
		$("#hq_upload_jpg").submit();
	});
	
	$("#hq_cdr_upload_submit").click(function (){
		$("#hq_upload_cdr").submit();
	});	
	
	
    $("#design_content_save").click(function(){
		var id=$("#picture_select01_template").val();
		if(id=="3"){
			var quotation_code=$("#picture_select02").val();
		}else{
			var quotation_code=$("#picture_text01_template").val();
		}
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
		

		
		if($("#hq_customer_code").val()== ""){
			$("#hq_result").css("display","block");
			$("#hq_result").html("客户代码不能为空！");
		}

		
		else if(($("#design_pic_name").val()== "" )){
			$("#hq_result").css("display","block");
			$("#hq_result").html("报价名称不能为空！");
		}
		else if(quotation_code==""){
			$("#hq_result").css("display","block");
			$("#hq_result").html("报价编号不能为空！");
		}
		else if($("#inch_w").val()== "" || $("#inch_h").val()== "" || $("#cm_w").val()== "" || $("#cm_h").val()== ""){
			$("#hq_result").css("display","block");
			$("#hq_result").html("尺寸不为空,请填写正确报价名称！");
		}

		else if($("#hq_customer_name").val()== ""){
			$("#hq_result").css("display","block");
			$("#hq_result").html("客户名不能为空,请填写正确客户代码！");
		}

		else{
			
	    	$("#rhinestone_quotation_submit_form").submit();
		}
    });
    $("#no_design_content_save").click(function(){


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
		

		if($("#no_customer_num_1").val()== ""){
			$("#hq_no_result").css("display","block");
			$("#hq_no_result").html("客户代码不能为空！");
		}
		else if($("#sIE_l_01_title_1").val()== ""){
			$("#hq_no_result").css("display","block");
			$("#hq_no_result").html("名称不能为空！");
		}

		else if($("#no_inch_w").val()== "" || $("#no_inch_h").val()== "" || $("#no_cm_w").val()== "" || $("#no_cm_h").val()== "" || isEmpty($('#no_inch_w').val()) || isEmpty($('#no_inch_h').val()) || isEmpty($('#no_cm_w').val()) || isEmpty($('#no_cm_h').val()) ){
			$("#hq_no_result").css("display","block");
			$("#hq_no_result").html("请填写正确尺寸代码！");
		}

		else if(($("#material_info_color").val()== "" && $("#material_info_color").is(":visible")) || ($("#material_info_c_color").val()== "" && $("#material_info_c_color").is(":visible"))){
			$("#hq_no_result").css("display","block");
			$("#hq_no_result").html("请选择颜色！");
		}
		else if(!$(".hq_tableClass02").is(":visible")){
			$("#hq_no_result").css("display","block");
			$("#hq_no_result").html("请添加材料项！");
		}

		else if($("#no_customer_name").val()== ""){
			$("#hq_no_result").css("display","block");
			$("#hq_no_result").html("客户不能为空,请填写正确客户代码！");
		}

		else if($("#no_final_quotation").val() == "0.00" || $("#no_final_quotation").val() == "￥0.00" || $("#no_final_quotation").val() == ""){
			$("#hq_no_result").css("display","block");
			$("#hq_no_result").html("最终报价不能为0！");
		}

		else{
			
			$("#hq_no_result").css("display","none");
			$.ajax({
					url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/hotfix_quotation/check_photo',//通过Ajax取数据的目标页面
					data:{},
					type:'post',//方法，还可以是"post"
					dataType:'text',//数据类型，还有其它的，详见jQuery手册
					success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
					{
						if(locals==1){
							$("#hq_no_result").css("display","none");
							$("#no_rhinestone_quotation_submit_form").submit();
						}else{
							$("#hq_no_result").css("display","block");
							$("#hq_no_result").html("请上传图片,且名称不包含空格！");
							
						}
					}
			    });
			
		}
	    
    });	
	
	$("#inch_w").bind("input propertychange", function() {
		//alert($(this).val());
		var cm_w = $(this).val() * 2.54;
		if(cm_w != ''){
			cm_w = cm_w.toFixed(2);
		}
		$("#cm_w").val(cm_w);
		$("#cm_w1").val(cm_w);
		
	});
	
	$("#no_inch_w").bind("input propertychange", function() {
		
		//alert($(this).val());
		var cm_w = $(this).val() * 2.54;
		if(cm_w != ''){
			cm_w = cm_w.toFixed(2);
		}
		$("#no_cm_w").val(cm_w);
		if($("#no_cm_h").val() != ''){
			var zhiban_mj = ((parseFloat(cm_w)+3)*(parseFloat($("#no_cm_h").val()+3))/6.4516).toFixed(2);
			$("#no_zhiban_mj").val(zhiban_mj);
			if($("#no_daban_number").val() != '' && $("#no_daban_number").val() != 0){
				var no_parities = $("#no_parities").val();
			   var no_zhiban_mj = $("#no_zhiban_mj").val();
			   var no_daban_number = $("#no_daban_number").val();
			   
			  	$.ajax({
				url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/template_quotation/final_quotation_change',//通过Ajax取数据的目标页面
				data:{"parities":no_parities,"zhiban_mj":no_zhiban_mj,"daban_number":no_daban_number},
				type:'post',//方法，还可以是"post"
				dataType:'text',//数据类型，还有其它的，详见jQuery手册
				success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
				{

					if(locals!=""){

						$("#no_final_quotation").val(locals);
						
					}
					else{
						
						$("#no_final_quotation").val("");
					}
				}										
			}); 
			}
		}
		//$("#cm_w1").val(cm_w);
	});	
	
	$("#inch_h").bind("input propertychange", function() {
		//alert($(this).val());;
		var cm_h = $(this).val() * 2.54;
		if(cm_h != ''){
			cm_h = cm_h.toFixed(2);
		}
		
		$("#cm_h").val(cm_h);
		$("#cm_h1").val(cm_h);
	});
	
	$("#no_inch_h").bind("input propertychange", function() {
		
		//alert($(this).val());
		var cm_h = $(this).val() * 2.54;
		if(cm_h != ''){
			cm_h = cm_h.toFixed(2);
		}
		
		$("#no_cm_h").val(cm_h);
		if($("#no_cm_w").val() != ''){
			var zhiban_mj = ((parseFloat($("#no_cm_w").val())+3)*(parseFloat(cm_h)+3)/6.4516).toFixed(2);
			$("#no_zhiban_mj").val(zhiban_mj);
			if($("#no_daban_number").val() != '' && $("#no_daban_number").val() != 0){
				var no_parities = $("#no_parities").val();
			   var no_zhiban_mj = $("#no_zhiban_mj").val();
			   var no_daban_number = $("#no_daban_number").val();
			   
			  	$.ajax({
				url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/template_quotation/final_quotation_change',//通过Ajax取数据的目标页面
				data:{"parities":no_parities,"zhiban_mj":no_zhiban_mj,"daban_number":no_daban_number},
				type:'post',//方法，还可以是"post"
				dataType:'text',//数据类型，还有其它的，详见jQuery手册
				success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
				{

					if(locals!=""){

						$("#no_final_quotation").val(locals);
						
					}
					else{
						
						$("#no_final_quotation").val("");
					}
				}										
			}); 
			}
		}
		//$("#cm_h1").val(cm_h);
	});	
	
	$("#cm_w").bind("input propertychange", function() {
		//alert($(this).val());
		var inch_w = $(this).val() / 2.54;
		
		if(inch_w != ''){
			inch_w = inch_w.toFixed(2);
		}
		
		$("#inch_w").val(inch_w);
		$("#inch_w1").val(inch_w);
	});
	
	$("#no_cm_w").bind("input propertychange", function() {
		
		//alert($(this).val());
		var inch_w = $(this).val() / 2.54;
		
		if(inch_w != ''){
			inch_w = inch_w.toFixed(2);
		}
		
		$("#no_inch_w").val(inch_w);
		
		if($("#no_cm_h").val() != ''){
			var zhiban_mj = ((parseFloat($(this).val())+3)*(parseFloat($("#no_cm_h").val())+3)/6.4516).toFixed(2);
			$("#no_zhiban_mj").val(zhiban_mj);
			if($("#no_daban_number").val() != '' && $("#no_daban_number").val() != 0){
				var no_parities = $("#no_parities").val();
			   var no_zhiban_mj = $("#no_zhiban_mj").val();
			   var no_daban_number = $("#no_daban_number").val();
			   
			  	$.ajax({
				url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/template_quotation/final_quotation_change',//通过Ajax取数据的目标页面
				data:{"parities":no_parities,"zhiban_mj":no_zhiban_mj,"daban_number":no_daban_number},
				type:'post',//方法，还可以是"post"
				dataType:'text',//数据类型，还有其它的，详见jQuery手册
				success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
				{

					if(locals!=""){

						$("#no_final_quotation").val(locals);
						
					}
					else{
						
						$("#no_final_quotation").val("");
					}
				}										
			}); 
			}
		}
		
	});
	
	
	$("#cm_h").bind("input propertychange", function() {
		//alert($(this).val());
		var inch_h = $(this).val() / 2.54;
		if(inch_h != ''){
			inch_h = inch_h.toFixed(2);
		}
		$("#inch_h").val(inch_h);
		$("#inch_h1").val(inch_h);
	});
	
	$("#no_cm_h").bind("input propertychange", function() {
		
		//alert($(this).val());
		var inch_h = $(this).val() / 2.54;
		if(inch_h != ''){
			inch_h = inch_h.toFixed(2);
		}
		$("#no_inch_h").val(inch_h);
		if($("#no_cm_w").val() != ''){
			var zhiban_mj = ((parseFloat($("#no_cm_w").val())+3)*(parseFloat($(this).val())+3)/6.4516).toFixed(2);
			$("#no_zhiban_mj").val(zhiban_mj);
			if($("#no_daban_number").val() != '' && $("#no_daban_number").val() != 0){
				var no_parities = $("#no_parities").val();
			   var no_zhiban_mj = $("#no_zhiban_mj").val();
			   var no_daban_number = $("#no_daban_number").val();
			   
			  	$.ajax({
				url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/template_quotation/final_quotation_change',//通过Ajax取数据的目标页面
				data:{"parities":no_parities,"zhiban_mj":no_zhiban_mj,"daban_number":no_daban_number},
				type:'post',//方法，还可以是"post"
				dataType:'text',//数据类型，还有其它的，详见jQuery手册
				success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
				{

					if(locals!=""){

						$("#no_final_quotation").val(locals);
						
					}
					else{
						
						$("#no_final_quotation").val("");
					}
				}										
			}); 
			}
		}
		//$("#inch_h1").val(inch_h);
	});	

	$("#size_width").bind("input propertychange", function() {
		//alert($(this).val());
		var mm_w = $(this).val() / 25.4;
		if(mm_w != ''){
			mm_w = mm_w.toFixed(2);
		}
		$("#size_inch_width").val(mm_w);
	});
	
	$("#size_height").bind("input propertychange", function() {
		//alert($(this).val());
		var mm_h = $(this).val() / 25.4;
		if(mm_h != ''){
			mm_h = mm_h.toFixed(2);
		}
		
		$("#size_inch_height").val(mm_h);
	});
	
	$("#size_inch_width").bind("input propertychange", function() {
		//alert($(this).val());
		var inch_w = $(this).val() * 25.4;
		
		if(inch_w != ''){
			inch_w = inch_w.toFixed(2);
		}
		
		$("#size_width").val(inch_w);
	});
	
	$("#size_inch_height").bind("input propertychange", function() {
		//alert($(this).val());
		var inch_h = $(this).val() * 25.4;
		if(inch_h != ''){
			inch_h = inch_h.toFixed(2);
		}
		$("#size_height").val(inch_h);
	});
    
    $("#material_select").change(
    	function()
    	{
    		//获取id为select的下拉框选中的值
    	    var a = $("#material_select").val();
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
						$("#material_info_c_color").find("option").remove();
						$("#material_info_color").find("option").remove();
						$("#material_c_size").find("option").remove();
						$('#material_c_quantity').val("");
						$("#size_width").val("");
						$("#size_height").val("");
						$("#material_quantity").val("1");						
						
						if(locals.result == 0){
							
						}else if(locals.result == 2){
							$("#material_info").css("display","none");
							$("#material_info_c").css("display","block");
							$("#material_info_color").empty();
							var objs = locals.color;
							$("#material_info_c_color").append(opti);   //为Select追加一个Option(下拉项)     
							for (var o in objs) {
								var  jsonObj  =  objs[o];
								var  optionstring = "<option value=\"" + jsonObj.material_color + "\" >" + jsonObj.material_color + "</option>";
							    $("#material_info_c_color").append(optionstring);   //为Select追加一个Option(下拉项)           
							} 
							
						}else if(locals.result == 1){
							$("#material_info").css("display","block");
							$("#material_info_c").css("display","none");
							$("#material_info_c_color").empty();
							//alert(locals.color.length);//输出子对象数量
							var objs = locals.color;
							$("#material_info_color").append(opti);   //为Select追加一个Option(下拉项)        
							for (var o in objs) {
								var  jsonObj  =  objs[o];
								var  optionstring = "<option value=\"" + jsonObj.color + "\" >" + jsonObj.color + "</option>";
							    $("#material_info_color").append(optionstring);   //为Select追加一个Option(下拉项)           
							} 
							
						}
						//alert(locals);
						//$("#customer_code").val(locals);
					}
				});
			}
    	}
    );
	
	$("#material_c_size").change(function (){
	    $("#material_c_quantity").val("");
	});
	
	$("#material_info_color").change(function (){
	    $("#size_width").val("");
		$("#size_height").val("");
		$("#material_quantity").val("1");
	});	
	
	$("#material_info_c_color").change(function (){
		var a = $("#material_select").val();
		var color = $("#material_info_c_color").val();
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
				$("#material_c_size").find("option").remove();
				$("#material_c_quantity").val("");
				
				for (var o in objs) {
					var  jsonObj  =  objs[o];
					if(jsonObj.size){
						size = jsonObj.size;
						var  optionstring = "<option value=\"" + size + "\" >" + size + "</option>";
						$("#material_c_size").append(optionstring);   //为Select追加一个Option(下拉项
					}
					else if(jsonObj.size_mm){
						size = jsonObj.size_mm;
						var  optionstring = "<option value=\"" + size + "\" >" + size + "mm</option>";
						$("#material_c_size").append(optionstring);   //为Select追加一个Option(下拉项)  
					}
					else if(jsonObj.size_m_w&& jsonObj.size_m_h){
						size = jsonObj.size_m_w+'*'+jsonObj.size_m_h;
						var  optionstring = "<option value=\"" + size + "\" >" + size + "mm</option>";
						$("#material_c_size").append(optionstring);   //为Select追加一个Option(下拉项)   
					}
					
					        
				} 
			}
		});
		
	});

	var row_number = 0 ;
	
	$("#insert_material2").click(function (){
		var material_name = $("#material_select").val();
		
		var color = $("#material_info_c_color").val();
		var quantity = $("#material_c_quantity").val();
		
		var size = $("#material_c_size").val();
		var size_text = $("#material_c_size").find("option:selected").text();
		
		
		
		if($("#material_c_quantity").val()!=""){
		
			$.ajax({
				url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/template_quotation/insert_table_quotation_sheet_material',//通过Ajax取数据的目标页面
				type:'get',//方法，还可以是"post"
				data:{'material_name':material_name,'material_color':color,'material_size':size,'material_quantity':quantity},
				dataType:'json',//数据类型，还有其它的，详见jQuery手册
				success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
				{
					
					if(locals != 0){
					locals=locals.split("|");
					
					
					var table_value = "<tr class='hq_tableClass02'> <td>"+material_name+"<input type='hidden' id='row_number' value='"+row_number+"' /><input type='hidden' name='materials["+row_number+"][material_name]' value='"+material_name+"' /></td> <td>"+size_text+"<input type='hidden' name='materials["+row_number+"][size]' value='"+size+"' /></td> <td>"+color+"<input type='hidden' name='materials["+row_number+"][color]' value='"+color+"' /></td><td>"+quantity+"<input type='hidden' name='materials["+row_number+"][quantity]' value='"+quantity+"' /></td><td onClick='getDel(this,"+locals[0]+")'><a href='#'>删除</a></td></tr>";
					$("#material_table").append(table_value);   //为table追加一个tr(下拉项)
					
					if(locals[1]!= ''){
						$("#no_daban_number").val(locals[1]);
						if($("#no_zhiban_mj").val() != '' && $("#no_zhiban_mj").val() != 0){
							var no_parities = $("#no_parities").val();
						   var no_zhiban_mj = $("#no_zhiban_mj").val();
						   var no_daban_number = $("#no_daban_number").val();
						   
							$.ajax({
							url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/template_quotation/final_quotation_change',//通过Ajax取数据的目标页面
							data:{"parities":no_parities,"zhiban_mj":no_zhiban_mj,"daban_number":no_daban_number},
							type:'post',//方法，还可以是"post"
							dataType:'text',//数据类型，还有其它的，详见jQuery手册
							success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
							{
			
								if(locals!=""){
			
									$("#no_final_quotation").val(locals);
									
								}
								else{
									
									$("#no_final_quotation").val("");
								}
							}										
						}); 
						}
					}
					
					
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

function getDel(k,row){
   $(document).ready(function(){
   

	var no_piece = $("#no_piece").val();    //   当前片数
	var no_parities = $("#no_parities").val();    //   汇率
	var aaa = $("#no_parities").find("option:selected").text();
	aaa=aaa.split(" ");	
		 	
	$.ajax({
			url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/template_quotation/delete_table_quotation_sheet_material',//通过Ajax取数据的目标页面
			type:'get',//方法，还可以是"post"
			data:{'id':row},
			dataType:'json',//数据类型，还有其它的，详见jQuery手册
			success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
			{
				$("#no_daban_number").val(locals);
				if($("#no_zhiban_mj").val() != '' && $("#no_zhiban_mj").val() != 0){
							var no_parities = $("#no_parities").val();
						   var no_zhiban_mj = $("#no_zhiban_mj").val();
						   var no_daban_number = $("#no_daban_number").val();
						   
							$.ajax({
							url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/template_quotation/final_quotation_change',//通过Ajax取数据的目标页面
							data:{"parities":no_parities,"zhiban_mj":no_zhiban_mj,"daban_number":no_daban_number},
							type:'post',//方法，还可以是"post"
							dataType:'text',//数据类型，还有其它的，详见jQuery手册
							success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
							{
			
								if(locals!=""){
			
									$("#no_final_quotation").val(locals);
									
								}
								else{
									
									$("#no_final_quotation").val("");
								}
							}										
						}); 
						}
			}
	});
     $(k).parent().remove();  
	//$("#material_table1").$(k).remove();
	});
}



function uploadok(event, queueId, fileObj, response, data){
	//alert('aaa');
}

</script> 
<!-- {/literal} -->