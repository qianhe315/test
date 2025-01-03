<?php /* Smarty version 2.6.22, created on 2025-01-03 11:25:44
         compiled from hotfix_quotation/add.html */ ?>
<script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/cstown_Sys.js" type="text/javascript"></script>
<link href="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/css/cstown_sys.css" rel="stylesheet" type="text/css" media="screen"/>
<div class="pageContent"> 
 <?php if ($this->_tpl_vars['quotation_category'] == 1): ?>
  <div class="stkInfEnter" style="width:98%; display:none; padding-bottom:25px;" layoutH="30" id="ttbjd_ysj_hot"> <?php else: ?>
    <div class="stkInfEnter" style="width:98%" layoutH="30" id="ttbjd_ysj_hot"> <?php endif; ?>
      <div style="float:left; width:100%;"> <?php if ($this->_tpl_vars['user_name'] == 'admin'): ?>
<!--        <div class="sIE_title" style="width:15%;">-->
<!--          <div class="button">-->
<!--            <div class="buttonContent">-->
<!--              <button onclick="document.getElementById('ttbjd_wsj_hot').style.display='block';document.getElementById('ttbjd_ysj_hot').style.display='none';">烫图报价单(无设计)</button>-->
<!--            </div>-->
<!--          </div>-->
<!--        </div>-->
        <?php endif; ?>
        <div class="sIE_title" style="width:60%;">烫图报价单</div>
      </div>
      <form method="post" action="<?php if ($this->_tpl_vars['id']): ?> <?php echo $this->_tpl_vars['update_baojia_action']; ?>
<?php else: ?><?php echo $this->_tpl_vars['baojia_action']; ?>
<?php endif; ?>" id="rhinestone_quotation_submit_form" enctype="multipart/form-data" onsubmit="return validateCallback(this, navTabAjaxDone)">
        <input type="hidden" name="submit_value" id="submit_value" value="" />
        <input type="hidden" name="tapedata_formula" id="tapedata_formula" />
        <input type="hidden" name="meiyuan_version" id="meiyuan_version" value="<?php echo $this->_tpl_vars['meiyuan_version']; ?>
" />
        <input type="hidden" name="ouyuan_version" id="ouyuan_version" value="<?php echo $this->_tpl_vars['ouyuan_version']; ?>
" />
        <input type="hidden" name="renmin_version" id="renmin_version" value="<?php echo $this->_tpl_vars['renmin_version']; ?>
" />
        <input type="hidden" name="final_quotation_hidden" id="final_quotation_hidden" value="0" />
        <input type="hidden" name="kongbai" id="kongbai" value="0" />
        <div class="sIEK" style="width:97%;">
          <div class="sIE_l" style="width:400px;">
            <div class="sIE_l_01" style="width:200px;">
              <div class="sIE_l_01_title">业务员:</div>
              <input type="text" class="sIE_No" style="width:100px;" value="<?php echo $this->_tpl_vars['user_name']; ?>
"  readonly="readonly" />
            </div>
            <div class="sIE_l_01" style="width:200px;">
              <div class="sIE_l_01_title" style="width:80px;">时间:</div>
              <input type="text" value="<?php echo $this->_tpl_vars['quotation_date']; ?>
" style="width:100px;" name="time" class="sIE_No"  readonly="readonly" />
            </div>
            <div class="sIE_l_01" style="width:200px;">
              <div class="sIE_l_01_title">客户代码:</div>
              <input type="text" name="customer_code" id="hq_customer_code" style="width:100px;" value="<?php echo $this->_tpl_vars['customer_code']; ?>
" class="sIE_No" onkeyup="customer_num();" />
            </div>
            <div class="sIE_l_01" style="width:200px;">
              <div class="sIE_l_01_title" style="width:80px;">报价类型:</div>
              <select class="picture_select01" name="quotation_category_id" id="picture_select01" style="width:106px; height:26px;" onchange="design_code()">
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
              <div class="sIE_l_01_title">客户名:</div>
              <input type="text" name="customer_name" style="width:100px;" id="hq_customer_name" value="<?php echo $this->_tpl_vars['customer_name']; ?>
" class="sIE_No"  readonly="readonly" />
            </div>
            <div class="sIE_l_01" style="width:200px;">
              <div class="sIE_l_01_title">报价名称:</div>
              <?php if ($this->_tpl_vars['quotation_category_id'] == 5): ?>
              <input type="text" name="design_pic_name" value="<?php echo $this->_tpl_vars['design_pic_name']; ?>
" class="sIE_No" id="picture_text02" style="display:none;width:100px;" />
              <input type="text" name="stock_pic_name" value="<?php echo $this->_tpl_vars['design_pic_name']; ?>
" class="sIE_No" id="picture_text03" onkeyup="stock();" style="display:block;width:100px;" />
              <?php else: ?>
              <input type="text" name="design_pic_name" value="<?php echo $this->_tpl_vars['design_pic_name']; ?>
" style="width:100px;" class="sIE_No" id="picture_text02" />
              <input type="text" name="stock_pic_name" value="<?php echo $this->_tpl_vars['design_pic_name']; ?>
" class="sIE_No" id="picture_text03" onkeyup="stock();" style="display:none;width:100px;" />
              <?php endif; ?> </div>
            <div class="sIE_l_01" style="width:200px;">
              <div class="sIE_l_01_title">公司:</div>
              <input type="text" name="customer_company" style="width:100px;" value="<?php echo $this->_tpl_vars['customer_company']; ?>
" class="sIE_No" id="hq_customer_company"  readonly="readonly" />
            </div>
            <div class="sIE_l_01" style="width:200px;">
              <div class="sIE_l_01_title" style="width:80px; line-height:26px;">报价编号:</div>
              <?php if ($this->_tpl_vars['quotation_category_id'] == 5): ?>
              <select name="quotation_code" class="picture_select01" id="picture_select02" onchange="design_code33()" style=" display:none;height:26px; width:106px;">
                <option value="">请选择</option>
                <?php $_from = $this->_tpl_vars['quote_info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['qf']):
?> <?php if ($this->_tpl_vars['quotation_code'] == $this->_tpl_vars['qf']['design_content_code']): ?>
                <option selected="selected" value="<?php echo $this->_tpl_vars['qf']['design_content_code']; ?>
"><?php echo $this->_tpl_vars['qf']['design_content_code']; ?>
</option>
                <?php else: ?>
                <option value="<?php echo $this->_tpl_vars['qf']['design_content_code']; ?>
"><?php echo $this->_tpl_vars['qf']['design_content_code']; ?>
</option>
                <?php endif; ?> <?php endforeach; endif; unset($_from); ?>
              </select>
              <input type="text" name="stock_number" class="sIE_No" id="picture_text01" readonly="readonly" value="<?php echo $this->_tpl_vars['stock_number']; ?>
" style="display:block;" />
              <?php else: ?>
              <select name="quotation_code" class="picture_select01" id="picture_select02" onchange="design_code33()" style="height:26px; width:106px;">
                <option value="">请选择</option>
                <?php $_from = $this->_tpl_vars['quote_info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['qf']):
?> <?php if ($this->_tpl_vars['quotation_code'] == $this->_tpl_vars['qf']['design_content_code']): ?>
                <option selected="selected" value="<?php echo $this->_tpl_vars['qf']['design_content_code']; ?>
"><?php echo $this->_tpl_vars['qf']['design_content_code']; ?>
</option>
                <?php else: ?>
                <option value="<?php echo $this->_tpl_vars['qf']['design_content_code']; ?>
"><?php echo $this->_tpl_vars['qf']['design_content_code']; ?>
</option>
                <?php endif; ?> <?php endforeach; endif; unset($_from); ?>
              </select>
              <input type="text" name="stock_number" class="sIE_No" id="picture_text01" readonly="readonly" value="<?php echo $this->_tpl_vars['stock_number']; ?>
" style="display:none; width:100px;" />
              <?php endif; ?> </div>
            <div class="sIE_l_01" style="width:200px; line-height:26px;">
              <div class="sIE_l_01_title">备损数量:</div>
              <input id="hq_beisun" class="sIE_No" style="width:100px;" type="text" name="preparation_number" onchange="beisun_change()" value="<?php echo $this->_tpl_vars['preparation_number']; ?>
">
            </div>
            <div class="sIE_l_01" style="width:200px; line-height:26px;">
              <div class="sIE_l_01_title">版费:</div>
              <input class="sIE_No digits" id="version" onkeyup="version_a()" style="width:100px;" type="text" name="version" value="0" readonly="readonly"  >
            </div>
           
            <div id="hq_beisun_error" style="line-height: 26px; float: left; color: rgb(255, 0, 0); margin-left: 5px; display:none;">备损数量已不为0！</div>
            
            <div class="sIE_l_01" style="width:200px;">
              <div class="sIE_l_01_title" style="width:80px; line-height:26px;">报关品类:</div>
              <select class="picture_select01" name="order_category" id="order_category" style="width:106px; height:26px;">
                <option value="">请选择</option>
                <?php $_from = $this->_tpl_vars['order_category']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['oc']):
?> <?php if ($this->_tpl_vars['order_category_id'] == $this->_tpl_vars['oc']['id']): ?>
                <option selected="selected" value="<?php echo $this->_tpl_vars['oc']['id']; ?>
"><?php echo $this->_tpl_vars['oc']['c_name']; ?>
</option>
                <?php else: ?>
                <option value="<?php echo $this->_tpl_vars['oc']['id']; ?>
"><?php echo $this->_tpl_vars['oc']['c_name']; ?>
</option>
                <?php endif; ?> <?php endforeach; endif; unset($_from); ?>
              </select>
            </div>
            
            
            <div id="hq_result" style="line-height: 26px; float: left; color: rgb(255, 0, 0); margin-left: 10px; display:none;"></div>
          </div>
          <div class="sIE_r" style="width:630px; height:auto;">
            <div class="sIE_l_01" style="margin-top:0px; width:210px;">
              <div class="sIE_l_01_title" style="width:50px; height:100px;">尺寸:</div>
              <div class="sIE_r01" style="float:left; width:160px;">
                <div class="sIE_r01_div">
                  <input type="text" id="inch_w" style="width:80px;" value="<?php echo $this->_tpl_vars['content_inch_w']; ?>
" readonly="readonly" class="sIE_No" />
                  <div style=" margin-left:5px; float:left;">inch W</div>
                </div>
                <div class="sIE_r01_div">
                  <input type="text" id="inch_h" style="width:80px;" value="<?php echo $this->_tpl_vars['content_inch_h']; ?>
" readonly="readonly" class="sIE_No" />
                  <div style=" margin-left:5px; float:left;">inch H</div>
                </div>
                <div class="sIE_r01_div">
                  <input type="text" id="cm_w" style="width:80px;" value="<?php echo $this->_tpl_vars['content_cm_w']; ?>
" readonly="readonly" class="sIE_No" />
                  <div style=" margin-left:5px; float:left;">cm W</div>
                </div>
                <div class="sIE_r01_div">
                  <input type="text" id="cm_h" style="width:80px;" value="<?php echo $this->_tpl_vars['content_cm_h']; ?>
" readonly="readonly" class="sIE_No" />
                  <div style=" margin-left:5px; float:left;">cm H</div>
                </div>
              </div>
              <?php if ($this->_tpl_vars['quotation_category_id'] != 5): ?>
              <div   id="sheji" >
                <div class="sIE_l_01_title" style="width:50px; height:100px; display:block;">设计师:</div>
                <div class="sIE_r01" style="float:left; width:160px;">
                  <div class="sIE_r01_div">
                    <input type="text" class="sIE_No" value="<?php echo $this->_tpl_vars['design_user_name']; ?>
" id="shejishi" readonly="readonly" style="width:80px;"/>
                  </div>
                </div>
              </div>
              <?php endif; ?> </div>
              <div class="sIE_r" style="height:210px; width:280px; margin-top:0px; margin-left:100px;">
              <div class="sIE_r_img" id="image" style="width:210px; height:210px;"><img src="<?php echo $this->_tpl_vars['upload_jpg']; ?>
" style="height:210px; width:210px;" />
              </div>
             <div style="margin-top:220px; margin-left:20px;" id="div_upload_jpg"><a href="" id="upload_jpg_links" target="_blank" style=" color:#03F;font-size:20px;">下载jpg</a></div><div style="margin-left:165px; margin-top:-20px; " id="div_upload_cdr"><a href="" id="upload_cdr_links" style="color:#03F;font-size:20px;">下载cdr</a></div>
              
        
              <input type="hidden" name="image" id="image_hidden" />
            </div>
          </div>
        </div>
        <div class="sIE_l_02" style="margin-top:50px;">
          <table cellspacing="0" class="sIE_l_02Tab"  id="hq_tableClass01">
            <thead id="material">
            <?php if ($this->_tpl_vars['id']): ?>
            <tr id="aaa"> <?php else: ?>
            <tr id="aaa" style="display:none;"> <?php endif; ?>
              <th width=18%>名称</th>
              <th width=18%>颜色</th>
              <th width=18%>尺寸</th>
              <th width=20%>数量</th>
              <th width=20%>公式选择</th>
              <th width=20%>价格</th>
            </tr>
              </thead>
            
          </table>
        </div>
        <div class="sIE_l_02" style=" margin-top:10px; border-top:dotted 1px #CCC; padding-top:10px;">
          <table cellspacing="0" class="picture_Tab" style="border:none; width:200px;">
            <tr>
              <td></td>
              <td><select class="picture_select02" id="gummed_paper_1" style="float:left; margin-top:5px; height:24px; width:106px;" name="tapedata_id" onchange="gummed_paper()">
                  <option value="">胶纸名称</option>
                  <?php $_from = $this->_tpl_vars['gummed_paper']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['qf']):
?> <?php if ($this->_tpl_vars['tapedata_id'] == $this->_tpl_vars['qf']['tapedata_name']): ?>
                  <option selected="selected" value="<?php echo $this->_tpl_vars['qf']['tapedata_name']; ?>
"><?php echo $this->_tpl_vars['qf']['tapedata_name']; ?>
</option>
                  <?php else: ?>
                  <option value="<?php echo $this->_tpl_vars['qf']['tapedata_name']; ?>
"><?php echo $this->_tpl_vars['qf']['tapedata_name']; ?>
</option>
                  <?php endif; ?> <?php endforeach; endif; unset($_from); ?>
                </select></td>
            </tr>
            <tr>
              <td style="width:72px;">胶纸费:</td>
              <td><input type="text" name="tapedata_price" value="<?php echo $this->_tpl_vars['tapedata_price']; ?>
" style="float:left; width:100px; height:20px;" readonly="readonly" id="jiaozhi"/></td>
            </tr>
            <tr>
              <td>材料费:</td>
              <td><input type="text" style="width:100px;" value="<?php echo $this->_tpl_vars['material_price']; ?>
" name="material_price" readonly="readonly" id="material_price" class="sIE_No" /></td>
            </tr>
            <tr>
              <td>工厂手工费:</td>
              <td><input type="text" style="width:100px;" value="<?php echo $this->_tpl_vars['factory_workmanship_price']; ?>
" name="factory_workmanship_price" readonly="readonly" id="manual_id" class="sIE_No" /></td>
            </tr>
            <tr>
              <td>合计:</td>
              <td><input type="text" style="width:100px;" value="<?php echo $this->_tpl_vars['whole_cost_price']; ?>
" name="whole_cost_price" readonly="readonly" id="total_price_id" class="sIE_No" style="width:80px;" /></td>
            </tr>
          </table>
          <table cellspacing="0" class="picture_Tab" style="border:none; width:70%; margin-top:35px;">
            <tr>
              <td><font style="float:left; margin-right:10px; line-height:24px; width:70px;">合计:</font>
                <input type="text"  value="<?php echo $this->_tpl_vars['whole_cost_price']; ?>
" readonly="readonly" id="total_price_1" class="sIE_No" style="width:100px;" />
                <font style="float:left; margin-right:10px; line-height:24px; margin-left:10px; width:60px;"> X 成本系数</font>
                <input type="text" name="cost_factor" class="sIE_No" id="coefficient" readonly="readonly" value="<?php echo $this->_tpl_vars['factory_cost_factor']; ?>
" style="width:50px;" />
                <font style="float:left; margin-right:10px; line-height:24px; margin-left:10px; width:60px;">= 成本价</font>
                <input type="text" name="factory_cost" class="sIE_No" value="<?php echo $this->_tpl_vars['factory_cost']; ?>
" id="cost_price" style="width:50px;" readonly="readonly" /></td>
            </tr>
            <tr>
              <td><font style="float:left; margin-right:10px; line-height:24px; width:70px;">合计:</font>
                <input type="text"  value="<?php echo $this->_tpl_vars['whole_cost_price']; ?>
" readonly="readonly" id="total_price_2" class="sIE_No" style="width:100px;" />
                <font style="float:left; margin-right:10px; line-height:24px; margin-left:10px; width:60px;"> X 片数</font>
                <input type="text" name="pcs" id="piece" class="sIE_No" value="50" onkeyup="piece1()" style="width:50px;" />
                <font style="float:left; margin-right:10px; line-height:24px; margin-left:10px; width:60px;"> X 报价系数</font> <?php if ($this->_tpl_vars['quote_factor']): ?>
                <input type="text" name="quote_factor" id="default_quote_coefficient" onkeyup="default_quote_coefficient1()" class="sIE_No" value="<?php echo $this->_tpl_vars['quote_factor']; ?>
" style="width:50px;" />
                <?php else: ?>
                <input type="text" name="quote_factor" id="default_quote_coefficient" onkeyup="default_quote_coefficient1()" class="sIE_No" value="<?php echo $this->_tpl_vars['default_quote_coefficient']; ?>
" style="width:50px;" />
                <?php endif; ?> <font style="float:left; margin-right:10px; line-height:24px; margin-left:10px;"> / </font>
                <select id="parities" name="exchange_rate_id" onchange="parities1()" class="picture_select02" style="float:left; height:24px;">
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
                </select></td>
            <tr>
              <td><font style="float:left; margin-right:10px; line-height:24px; width:70px;">单片报价:</font>
                <input type="text" name="monolithic_quote" value="<?php echo $this->_tpl_vars['monolithic_quote']; ?>
" id="monolithic_quote" class="sIE_No" style="width:100px;" readonly="readonly" /></td>
            </tr>
            <tr>
              <td><input type="hidden" id="lowest_cost_factor" value="<?php echo $this->_tpl_vars['lowest_cost_factor']; ?>
" />
                <font style="float:left; margin-right:10px; line-height:24px; width:70px;">最终报价:</font>
                <input type="text" name="final_quote" value="<?php echo $this->_tpl_vars['final_quote']; ?>
" id="final_quotation" class="sIE_No" style="width:100px;" readonly="readonly" /></td>
            </tr>
              </tr>
            
            <tr>
              <td><div id="piece_error"></div></td>
            </tr>
            <tr>
              <td><div id="lowest_cost_factor_error"></div></td>
            </tr>
          </table>
        </div>
      </form>
      <div class="sIE_l_02" style=" margin-top:3%;"> <?php if ($this->_tpl_vars['edit_no'] != 1): ?>
        <div class="button" class="button" style="margin-left:70%; margin-right:5px;">
        <div class="buttonContent">
          <button class="close">取消</button>
        </div>
      </div>
      <?php else: ?>
      <div class="button" style="margin-left:75%;margin-right:5px;">
        <div class="buttonContent">
          <button type="button" id="design_content_save">确定</button>
        </div>
      </div>
      <div class="button" style="margin-right:5px;">
        <div class="buttonContent">
          <button class="close">取消</button>
        </div>
      </div>
       <div class="button">
        <div class="buttonContent">
          <button type="button" id="add_order">添加做货单</button>
        </div>
      </div>
      <!--<div class="button" style="margin-left:70%;  margin-top:-25px;margin-right:5px;">
        <div class="buttonContent">
          <button type="button" id="add_order">添加做货单</button>
        </div>
      </div>-->
      <?php endif; ?> 
      
      </div>
  </div>
  <script type="text/javascript" language="javascript">
					function customer_num(){
						var name = $("#hq_customer_code").val();
						var hq_customer_name = $("#hq_customer_name").val();
						var picture_select01 = $("#picture_select01").val();
			
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
									customer_name=locals.customer_name;
									$("#hq_customer_company").val(locals.company);
									if(picture_select01=='3' ){
									$.ajax({
								url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/hotfix_quotation/design_content_code',//通过Ajax取数据的目标页面
								data:{"id2":picture_select01,"customer_name":customer_name,"customer_code":name},
								type:'post',//方法，还可以是"post"
								dataType:'text',//数据类型，还有其它的，详见jQuery手册
								success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
								{
									
									$("#picture_select02").html(locals);
								}			
								});
								}
								}else{
									$("#hq_customer_name").val('');
									$("#hq_customer_company").val('');									
								}
							}								
							
						});
						
						
					}
					
					function version_a(){

						var monolithic_quote = $("#monolithic_quote").val();
						var piece = $("#piece").val();
						
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
						$("#final_quotation").val(one + final_quotation_1);
						
					}
					
					function version_b(){

						var no_monolithic_quote = $("#no_monolithic_quote").val();
						var no_piece = $("#no_piece").val();
						
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
						$("#no_final_quotation").val(one + final_quotation_1);
						
					}					
					
					//烫图报价单，多片数
					function piece1(){
					   $(document).ready(function(){						
						   var piece = $("#piece").val();
						   
						   var default_quote_coefficient = $("#default_quote_coefficient").val();
						   if(default_quote_coefficient == ''){
								default_quote_coefficient = 0;
						   }
						   var parities = $("#parities").val();
						   var picture_text03 = $("#picture_text03").val();
						   var picture_select01 = $("#picture_select01").val();
						   var picture_select02 = $("#picture_select02").val();

						       if(picture_select01=='3'){

									 $.ajax({
										 url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/hotfix_quotation/find_version',//通过Ajax取数据的目标页面
										 data:{'parities':parities,'picture_select02':picture_select02,'piece':piece},
										 type:'get',//方法，还可以是"post"
										 dataType:'json',//数据类型，还有其它的，详见jQuery手册
										 success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
										 {
											 if(piece<12){
												 $("#version").val(locals);
											 }else{
												 $("#version").val('0');
											 }
											 
											 var total_price = $("#total_price_2").val();
											 total_price = total_price.replace("元","");	
								 
											 var aaa = $("#parities").find("option:selected").text();
											 aaa=aaa.split(" ");
																	  
												   if(piece=="" || piece==0){
														$("#piece_error").html("<div style=color:#F00;>*片数不能为空，或者为0！</div>");
														var final_quotation = default_quote_coefficient + "/" + parities;
									 <!--var final_quotation = total_price + "*" + 0 + "*" + default_quote_coefficient + "/" + parities;-->
														if(total_price == '' || total_price == 0){
															 var monolithic_quote = default_quote_coefficient + "/" + parities;
														}else{
															 var monolithic_quote = total_price + "*" + 1 + "*" + default_quote_coefficient + "/" + parities;
														}
									 
														monolithic_quote = eval('('+monolithic_quote+')');
														monolithic_quote = monolithic_quote.toFixed(2);
														$("#monolithic_quote").val(aaa[0] + monolithic_quote);						 
											   
														final_quotation = eval('('+final_quotation+ "+" + locals+')');
														final_quotation = final_quotation.toFixed(2);
														$("#final_quotation").val(aaa[0] + final_quotation);							   
												   }else{
														$("#piece_error").html("");
														if(total_price == '' || total_price == 0){
															var monolithic_quote = default_quote_coefficient + "/" + parities;
														}else{
															var monolithic_quote = total_price + "*" + 1 + "*" + default_quote_coefficient + "/" + parities;
														}
									 
														monolithic_quote = eval('('+monolithic_quote+')');
														monolithic_quote = monolithic_quote.toFixed(2);
														$("#monolithic_quote").val(aaa[0] + monolithic_quote);						   
														var final_quotation = monolithic_quote + "*" + piece;
														final_quotation = eval('('+final_quotation+ "+" + locals+')');
														final_quotation = final_quotation.toFixed(2);
														$("#final_quotation").val(aaa[0] + final_quotation);		   
												   } 
								 
										  }
									 });

						       }else if(picture_select01=='5'){

									    $.ajax({
										url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/hotfix_quotation/find_version_1',//通过Ajax取数据的目标页面
										data:{'parities':parities,'picture_text03':picture_text03,'piece':piece},
									    type:'get',//方法，还可以是"post"
									    dataType:'json',//数据类型，还有其它的，详见jQuery手册
											  success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
											  {
												     if(piece<6){
													     $("#version").val(locals);
													 }else{
														 $("#version").val('0');
													 }
													 var total_price = $("#total_price_2").val();
													 total_price = total_price.replace("元","");	
													 var aaa = $("#parities").find("option:selected").text();
													 aaa=aaa.split(" ");							
						                             if(piece=="" || piece==0){
							                             $("#piece_error").html("<div style=color:#F00;>*片数不能为空，或者为0！</div>");
							    						 var final_quotation = default_quote_coefficient + "/" + parities;

							                             if(total_price == '' || total_price == 0){
								                             var monolithic_quote = default_quote_coefficient + "/" + parities;
								                         }else{
									                         var monolithic_quote = total_price + "*" + 1 + "*" + default_quote_coefficient + "/" + parities;
								                         }
							   
														 monolithic_quote = eval('('+monolithic_quote+')');
														 monolithic_quote = monolithic_quote.toFixed(2);
														 $("#monolithic_quote").val(aaa[0] + monolithic_quote);						 
							 
														 final_quotation = eval('('+final_quotation+ "+" + locals+')');
														 final_quotation = final_quotation.toFixed(2);
														 $("#final_quotation").val(aaa[0] + final_quotation);							   
						                             }else{
							  							 $("#piece_error").html("");
							   							 if(total_price == '' || total_price == 0){
								   							  var monolithic_quote = default_quote_coefficient + "/" + parities;
														 }else{
															  var monolithic_quote = total_price + "*" + 1 + "*" + default_quote_coefficient + "/" + parities;
								                         }
							   
														 monolithic_quote = eval('('+monolithic_quote+')');
														 monolithic_quote = monolithic_quote.toFixed(2);
														 $("#monolithic_quote").val(aaa[0] + monolithic_quote);						   
							   							 var final_quotation = monolithic_quote + "*" + piece;
									                     final_quotation = eval('('+final_quotation+ "+" + locals+')');

													     final_quotation = final_quotation.toFixed(2);
													     $("#final_quotation").val(aaa[0] + final_quotation);		   
						                             } 
						   
					                           }
							            });
													   
						       }
						   

						 
						 /*  var total_price = $("#total_price_2").val();
						   total_price = total_price.replace("元","");	
						   
						   var aaa = $("#parities").find("option:selected").text();
						   aaa=aaa.split(" ");							
						   if(piece=="" || piece==0){
							   $("#piece_error").html("<div style=color:#F00;>*片数不能为空，或者为0！</div>");
							    var final_quotation = default_quote_coefficient + "/" + parities;
							   <!--var final_quotation = total_price + "*" + 0 + "*" + default_quote_coefficient + "/" + parities;-->
							   if(total_price == '' || total_price == 0){
								   var monolithic_quote = default_quote_coefficient + "/" + parities;
								}else{
									var monolithic_quote = total_price + "*" + 1 + "*" + default_quote_coefficient + "/" + parities;
								}
							   
							  monolithic_quote = eval('('+monolithic_quote+')');
							  monolithic_quote = monolithic_quote.toFixed(2);
							  $("#monolithic_quote").val(aaa[0] + monolithic_quote);						 
							 
							  final_quotation = eval('('+final_quotation+ "+" + version+')');
							  final_quotation = final_quotation.toFixed(2);
							  $("#final_quotation").val(aaa[0] + final_quotation);							   
						   }else{
							   $("#piece_error").html("");
							   if(total_price == '' || total_price == 0){
								   var monolithic_quote = default_quote_coefficient + "/" + parities;
								}
								else{
									var monolithic_quote = total_price + "*" + 1 + "*" + default_quote_coefficient + "/" + parities;
								}
							   
								  monolithic_quote = eval('('+monolithic_quote+')');
								  monolithic_quote = monolithic_quote.toFixed(2);
								  $("#monolithic_quote").val(aaa[0] + monolithic_quote);						   
							   
							   var final_quotation = monolithic_quote + "*" + piece;
							   
									final_quotation = eval('('+final_quotation+ "+" + version+')');
								
							   	  
								  final_quotation = final_quotation.toFixed(2);
								  $("#final_quotation").val(aaa[0] + final_quotation);		   
						   } */
						   
					   });	   
					}
					
					//烫图报价单无设计，多片数
					function no_piece1(){
						$(document).ready(function(){
							   if($("#no_piece").val() == ''){
								   var no_piece = 0;
								}
								else{
									var no_piece = $("#no_piece").val();
								}				

                               //var version = $("#no_version").val();

							   var no_default_quote_coefficient = $("#no_default_quote_coefficient").val();
							   if(no_default_quote_coefficient == ''){
									no_default_quote_coefficient = 0;
							   }
							   var no_parities = $("#no_parities").val();
							   var total_price = $("#no_total_price_id_2").val();
							   var quotation_category_id_no = $("#quotation_category_id_no").val();
							   total_price = total_price.replace("元","");	
						  
								 $.ajax({
										url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/hotfix_quotation/find_version_no_1',//通过Ajax取数据的目标页面
										data:{'no_parities':no_parities,'no_piece':no_piece},
										type:'get',//方法，还可以是"post"
										dataType:'json',//数据类型，还有其它的，详见jQuery手册
										success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
										{
												if(quotation_category_id_no!="Stock改色"){
													if(no_piece<12){
														$("#no_version").val(locals);
														var version = locals;
													}else{
														$("#no_version").val('0');
														var version = 0;
													}
												}else{
													$("#no_version").val('0');
													var version = 0;
												}
												var aaa = $("#no_parities").find("option:selected").text();
												aaa=aaa.split(" ");							
										   
												if(no_piece=="" || no_piece==0){
													  $("#no_piece_error").html("<div style=color:#F00;>*片数不能为空，或者为0！</div>");
													  var final_quotation = total_price + no_default_quote_coefficient + "/" + no_parities;
													  if(total_price == '' || total_price == 0){
														   var monolithic_quote = no_default_quote_coefficient + "/" + no_parities;  
													  }else{
														   var monolithic_quote = total_price + "*" + 1 + "*" + no_default_quote_coefficient + "/" + no_parities;
													  }
												  
													  final_quotation = eval('('+final_quotation+ "+" + locals+')');
													  final_quotation = final_quotation.toFixed(2);
													  $("#no_final_quotation").val(aaa[0] + final_quotation);
													  
													  monolithic_quote = eval('('+monolithic_quote+')');
													  monolithic_quote = monolithic_quote.toFixed(2);
													  $("#no_monolithic_quote").val(aaa[0] + monolithic_quote);								   
											   }else{
													 $("#no_piece_error").html("");
													 if(total_price == 0){
														  var monolithic_quote =  no_default_quote_coefficient + "/" + no_parities;
													 }else{
														  if(no_piece=="" || no_piece==0){
															   var monolithic_quote = no_default_quote_coefficient + "/" + no_parities;
														  }else{
															   var monolithic_quote = total_price + "*" + no_default_quote_coefficient + "/" + no_parities;
														  }
													 }
					
													 monolithic_quote = eval('('+monolithic_quote+')');
													 monolithic_quote = monolithic_quote.toFixed(2);
													 $("#no_monolithic_quote").val(aaa[0] + monolithic_quote);								   
													   
													 var final_quotation = monolithic_quote + "*" + no_piece;
													 final_quotation = eval('('+final_quotation+ "+" + locals+')');
													 final_quotation = final_quotation.toFixed(2);
													 $("#no_final_quotation").val(aaa[0] + final_quotation);
					
											   }
							 
						   
										 }
								 });
							
							
							   var aaa = $("#no_parities").find("option:selected").text();
							   aaa=aaa.split(" ");							
									   var version = $("#no_version").val();
							   if(no_piece=="" || no_piece==0){
										$("#no_piece_error").html("<div style=color:#F00;>*片数不能为空，或者为0！</div>");
										var final_quotation = total_price + no_default_quote_coefficient + "/" + no_parities;
										if(total_price == '' || total_price == 0){
											 var monolithic_quote = no_default_quote_coefficient + "/" + no_parities;  
										}else{
											 var monolithic_quote = total_price + "*" + 1 + "*" + no_default_quote_coefficient + "/" + no_parities;
										}
							  
									  final_quotation = eval('('+final_quotation+ "+" + version+')');
									  final_quotation = final_quotation.toFixed(2);
									  $("#no_final_quotation").val(aaa[0] + final_quotation);
									  
									  monolithic_quote = eval('('+monolithic_quote+')');
									  monolithic_quote = monolithic_quote.toFixed(2);
									  $("#no_monolithic_quote").val(aaa[0] + monolithic_quote);								   
							   
							   
						       }else{
							        $("#no_piece_error").html("");
							        if(total_price == 0){
								        var monolithic_quote =  no_default_quote_coefficient + "/" + no_parities;
								    }else{
									    if(no_piece=="" || no_piece==0){
										    var monolithic_quote = no_default_quote_coefficient + "/" + no_parities;
									    }else{
										    var monolithic_quote = total_price + "*" + no_default_quote_coefficient + "/" + no_parities;
									    }
								    }

									 monolithic_quote = eval('('+monolithic_quote+')');
									 monolithic_quote = monolithic_quote.toFixed(2);
									 $("#no_monolithic_quote").val(aaa[0] + monolithic_quote);								   
									 
									 var final_quotation = monolithic_quote + "*" + no_piece;
									 final_quotation = eval('('+final_quotation+ "+" + version+')');
									 final_quotation = final_quotation.toFixed(2);
									 $("#no_final_quotation").val(aaa[0] + final_quotation);

						       }
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
					function default_quote_coefficient1(){
						$(document).ready(function(){
							
						
						 var hq_customer_code = $("#hq_customer_code").val();
						 var default_quote_coefficient = $("#default_quote_coefficient").val();
						 if(default_quote_coefficient == ''){
							 default_quote_coefficient = 0;
						 }
						 
						 if(isNumber(default_quote_coefficient)){
						}else{
							default_quote_coefficient = 0;
						}
						 
						 
						 var lowest_cost_factor = $("#lowest_cost_factor").val();
						 var piece = $("#piece").val();
						 var parities = $("#parities").val();
						 var total_price = $("#total_price_2").val();
						 total_price = total_price.replace("元","");	
						 var aaa = $("#parities").find("option:selected").text();
						 aaa=aaa.split(" ");					
						
						<!--报价系数低于标准提示.如需要，解除即可-->			 
						/*if(parseInt(default_quote_coefficient) < parseInt(lowest_cost_factor)){
							$("#lowest_cost_factor_error").html("<div style=color:#F00;>*此报价系数低于标准，需要提交主管审核后生效！</div>");
						}else{
							$("#lowest_cost_factor_error").html("");
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
												$("#coefficient").val("1.3");
												var total_price_change = total_price*1.3;
												$("#cost_price").val(total_price_change.toFixed(2));
											}
											//报关类型为头饰，成本系数为1
											else if($("#order_category").val() == 7){
												$("#coefficient").val("1");
												var total_price_change = total_price*1;
												$("#cost_price").val(total_price_change.toFixed(2));
											}
											else{
												$("#coefficient").val("1.5");
												var total_price_change = total_price*1.5;
												$("#cost_price").val(total_price_change.toFixed(2));
											}
										}
						});	
						
						
						
						if(default_quote_coefficient=="" || default_quote_coefficient==0){
							var final_quotation = total_price + "*" + 0 + "*" + default_quote_coefficient + "/" + parities;
							var monolithic_quote = total_price + "*" + 1 + "*" + default_quote_coefficient + "/" + parities;

							monolithic_quote = eval('('+monolithic_quote+')');
							monolithic_quote = monolithic_quote.toFixed(2);
							$("#monolithic_quote").val(aaa[0] + monolithic_quote);						
							
							final_quotation = eval('('+final_quotation+ "+" +version+')');
							final_quotation = final_quotation.toFixed(2);
							$("#final_quotation").val(aaa[0] + final_quotation);

						}else{
							var monolithic_quote = total_price + "*" + 1 + "*" + default_quote_coefficient + "/" + parities;
							
							monolithic_quote = eval('('+monolithic_quote+')');
							monolithic_quote = monolithic_quote.toFixed(2);
							$("#monolithic_quote").val(aaa[0] + monolithic_quote);													
							
							var final_quotation = monolithic_quote + "*" + piece;

							final_quotation = eval('('+final_quotation+ "+" +version+')');
							final_quotation = final_quotation.toFixed(2);
							$("#final_quotation").val(aaa[0] + final_quotation);

						}
					
						
					}
					)};
					
					//烫图报价单无设计，报价系数计算
					function no_default_quote_coefficient1(){
						 var hq_customer_code = $("#no_customer_num_1").val();
						 var no_default_quote_coefficient = $("#no_default_quote_coefficient").val();
						 if(no_default_quote_coefficient == ''){
							 no_default_quote_coefficient = 0;
						 }
						 if(isNumber(no_default_quote_coefficient)){
						}else{
							no_default_quote_coefficient = 0;
						}
						 var lowest_cost_factor = $("#lowest_cost_factor").val();
						 var no_piece = $("#no_piece").val();
						 var no_parities = $("#no_parities").val();
						 var total_price = $("#no_total_price_id_2").val();
						 
						 var no_version = $("#no_version").val();
						 
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
												$("#no_coefficient").val("1.3");
												var total_price_change = total_price*1.3;
												$("#no_cost_price").val(total_price_change.toFixed(2));
											}
											//报关类型为头饰，成本系数为1
											else if($("#no_order_category").val() == 7){
												$("#no_coefficient").val("1");
												var total_price_change = total_price*1;
												$("#no_cost_price").val(total_price_change.toFixed(2));
											}
											else{
												$("#no_coefficient").val("1.5");
												var total_price_change = total_price*1.5;
												$("#no_cost_price").val(total_price_change.toFixed(2));
											}
										}
						});
						 
						 
						 total_price = total_price.replace("元","");	
						 var aaa = $("#no_parities").find("option:selected").text();
						 aaa=aaa.split(" ");	
						
						<!--报价系数低于标准提示.如需要，解除即可-->				
						/*if(no_default_quote_coefficient<lowest_cost_factor){
							$("#no_lowest_cost_factor_error").html("<div style=color:#F00;>*此报价系数低于标准，需要提交主管审核后生效！</div>");
						}else{
							$("#no_lowest_cost_factor_error").html("");
						}*/
						
						if(no_default_quote_coefficient=="" || no_default_quote_coefficient==0){
							var final_quotation = total_price + "*" + 0 + "*" + no_default_quote_coefficient + "/" + no_parities;
							var monolithic_quote = total_price + "*" + 1 + "*" + no_default_quote_coefficient + "/" + no_parities;
							
							final_quotation = eval('('+final_quotation+ "+" +no_version+')');
							final_quotation = final_quotation.toFixed(2);
							$("#no_final_quotation").val(aaa[0] + final_quotation);	
							
							monolithic_quote = eval('('+monolithic_quote+')');
							monolithic_quote = monolithic_quote.toFixed(2);
							$("#no_monolithic_quote").val(aaa[0] + monolithic_quote);								
							
						}else{
							var monolithic_quote = total_price + "*" + no_default_quote_coefficient + "/" + no_parities;
							monolithic_quote = eval('('+monolithic_quote+')');
							monolithic_quote = monolithic_quote.toFixed(2);
							$("#no_monolithic_quote").val(aaa[0] + monolithic_quote);
							
														
							var final_quotation = monolithic_quote + "*" + no_piece;
							
							final_quotation = eval('('+final_quotation+ "+" +no_version+')');
							final_quotation = final_quotation.toFixed(2);
							$("#no_final_quotation").val(aaa[0] + final_quotation);									
							
						}			
						
					}					
					
					//烫图报价单 汇率计算最终报价
					function parities1(){
						   var piece = $("#piece").val();
						   var default_quote_coefficient = $("#default_quote_coefficient").val();
						   if(default_quote_coefficient == ''){
							   default_quote_coefficient = 0;
						   }
						   var parities = $("#parities").val();
						   var version = $("#version").val();
						   
						   var picture_select01 = $("#picture_select01").val();
						   var picture_select02 = $("#picture_select02").val();
						   var picture_text03 = $("#picture_text03").val();
						   if(picture_select01=='3'){ 
								  $.ajax({
										 url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/hotfix_quotation/find_version',//通过Ajax取数据的目标页面
										 data:{'parities':parities,'picture_select02':picture_select02,'piece':piece},
										 type:'get',//方法，还可以是"post"
										 dataType:'json',//数据类型，还有其它的，详见jQuery手册
										 success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
										 {
											   if(piece<12){
												   $("#version").val(locals);
											   }else{
												   $("#version").val('0');
											   }
											   //$("#version").val(locals);
											   var aaa = $("#parities").find("option:selected").text();;
											   aaa=aaa.split(" ");
											   var total_price = $("#total_price_2").val();
											   total_price = total_price.replace("元","");
											   var monolithic_quote = total_price + "*" + default_quote_coefficient + "/" + parities;
											   monolithic_quote = eval('('+monolithic_quote+')');
											   monolithic_quote = monolithic_quote.toFixed(2);
											   $("#monolithic_quote").val(aaa[0] + monolithic_quote);						   
											   
											   
											   var final_quotation = monolithic_quote  + "*" + piece;
											   
											   final_quotation = eval('('+final_quotation+ "+" + locals+')');
											   final_quotation = final_quotation.toFixed(2);
											   $("#final_quotation").val(aaa[0] + final_quotation);
							   
										 }
								  });

						   }else if(picture_select01=='5'){
							   
								   $.ajax({
									   url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/hotfix_quotation/find_version_1',//通过Ajax取数据的目标页面
									   data:{'parities':parities,'picture_text03':picture_text03,'piece':piece},
								       type:'get',//方法，还可以是"post"
								       dataType:'json',//数据类型，还有其它的，详见jQuery手册
								       success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
								       {
									  
											if(piece<6){	  
												$("#version").val(locals);
											}else{
												$("#version").val('0');
											}
									
										   var aaa = $("#parities").find("option:selected").text();;
										   aaa=aaa.split(" ");
										   var total_price = $("#total_price_2").val();
										   total_price = total_price.replace("元","");
										   var monolithic_quote = total_price + "*" + default_quote_coefficient + "/" + parities;
										   monolithic_quote = eval('('+monolithic_quote+')');
										   monolithic_quote = monolithic_quote.toFixed(2);
										   $("#monolithic_quote").val(aaa[0] + monolithic_quote);						   

										   var final_quotation = monolithic_quote  + "*" + piece;
										   
										   final_quotation = eval('('+final_quotation+ "+" + locals+')');
										   final_quotation = final_quotation.toFixed(2);
										   $("#final_quotation").val(aaa[0] + final_quotation);
									   }
								   });
											   
						 }

							
					}
					
					//烫图报价单无设计 汇率计算最终报价
					function no_parities1(){
						
						   var no_piece = $("#no_piece").val();
						   var picture_select02 = $("#picture_select02").val();
						   var no_default_quote_coefficient = $("#no_default_quote_coefficient").val();
						   if(no_default_quote_coefficient == ''){
							   no_default_quote_coefficient = 0;
						   }
						   var no_parities = $("#no_parities").val();
							var quotation_category_id_no = $("#quotation_category_id_no").val();
							 $.ajax({
				        	      url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/hotfix_quotation/find_version_no_1',//通过Ajax取数据的目标页面
				         	      data:{'no_parities':no_parities,'no_piece':no_piece},
					              type:'get',//方法，还可以是"post"
					              dataType:'json',//数据类型，还有其它的，详见jQuery手册
					              success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
					              {
							          if(quotation_category_id_no!="Stock改色"){
										  if(no_piece<12){
											  $("#no_version").val(locals);
											  var version = locals;
										  }else{
											  $("#no_version").val('0');
											  var version = 0;
										  }
									  }else{
										  $("#no_version").val('0');
										   var version = 0;
									  }
									   var aaa = $("#no_parities").find("option:selected").text();;
									   aaa=aaa.split(" ");
									   var total_price = $("#no_total_price_id_2").val();
									   if(total_price!=''){
											total_price = total_price.replace("元","");
										   var monolithic_quote = total_price + "*" + no_default_quote_coefficient + "/" + no_parities;
										   
										   monolithic_quote = eval('('+monolithic_quote+')');
										   monolithic_quote = monolithic_quote.toFixed(2);
										   $("#no_monolithic_quote").val(aaa[0] + monolithic_quote);
																   
										   var final_quotation = monolithic_quote + "*" + no_piece;						   
										   final_quotation = eval('('+final_quotation+ "+" + locals+')');
										   //final_quotation = eval('('+final_quotation+')');
										   final_quotation = final_quotation.toFixed(2);
										   $("#no_final_quotation").val(aaa[0] + final_quotation);	
										}
									   
					               }
							 });
					   
						   
							   var aaa = $("#no_parities").find("option:selected").text();;
							   aaa=aaa.split(" ");
							   var total_price = $("#no_total_price_id_2").val();
							   total_price = total_price.replace("元","");
	
							   var monolithic_quote = total_price + "*" + no_default_quote_coefficient + "/" + no_parities;
							   
							   monolithic_quote = eval('('+monolithic_quote+')');
							   monolithic_quote = monolithic_quote.toFixed(2);
							   $("#no_monolithic_quote").val(aaa[0] + monolithic_quote);
													   
							   var final_quotation = monolithic_quote + "*" + no_piece;						   
							   final_quotation = eval('('+final_quotation+ "+" + version+')');
							   //final_quotation = eval('('+final_quotation+')');
							   final_quotation = final_quotation.toFixed(2);
							   $("#no_final_quotation").val(aaa[0] + final_quotation);	
												
					}										

					function stock(){
						var stock = $("#picture_text03").val();
						var mid = $("#mid").val();
						var piece = $("#piece").val();
						var picture_text03 = $("#picture_text03").val();
						var parities = $("#parities").val();
						$('#aaa').css('display','none');
						$('#sheji').css('display','none');
						
						var aaa = $("#parities").find("option:selected").text();;
						aaa=aaa.split(" ");						
						
						$.ajax({
							url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/hotfix_quotation/add_stock',//通过Ajax取数据的目标页面
							data:{"stock":stock},
							type:'post',//方法，还可以是"post"
							dataType:'text',//数据类型，还有其它的，详见jQuery手册
							success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
							{
								//alert(locals)
								//return false;
								if(locals==2){
									alert("亲，这是指甲贴的stock哦！");
									$("#picture_text03").val("");
								}else{
									locals=locals.split("|");
									$("#material").html(locals[0]);
									$("#inch_w").val(locals[1]);
									$("#inch_h").val(locals[2]);
									$("#cm_w").val(locals[3]);
									$("#cm_h").val(locals[4]);
									$("#image").html("<img style='height:220px; width:220px;' src = " + locals[5] + ">");
									$("#image_hidden").val(locals[5]);
									
									$("#div_upload_jpg").html("<a href="+locals[5]+" id='upload_jpg_links' target='_blank' style=' color:#03F;font-size:20px;'>下载jpg</a>");
									$("#div_upload_cdr").html("<a href="+locals[6]+" id='upload_cdr_links' target='_blank' style=' color:#03F;font-size:20px;'>下载cdr</a>");
									
									if(locals[7]!=""){
										var final_quotation = eval('('+locals[7]+')');
										if(locals[7]!=undefined){
										   final_quotation = final_quotation.toFixed(2);
										}else{
										   final_quotation = final_quotation;
										}
									}else{
										var final_quotation = '0';
									}

										var a=Math.ceil(locals[1]/19);
										var b=Math.ceil(locals[2]/19);
										manual=final_quotation*a*b;
										manual=manual.toFixed(2);
										$("#manual_id").val(manual + "元");

									if(locals[7]!=undefined){
									   var price = eval('('+locals[8]+')');
									   price = price.toFixed(2);
									}else{
									   price = price;
									}
									$("#material_price").val(price + "元");
									
									var jiaozhi = $("#jiaozhi").val();
									jiaozhi = jiaozhi.replace("元","");
									if(jiaozhi==""){
									   var total_price = price + "+" + manual + "+" + 0;
									}else{
									   var total_price = price + "+" + manual + "+" + jiaozhi;	
									}
									total_price = eval('('+total_price+')');
									total_price = total_price.toFixed(2);
									$("#total_price_id").val(total_price + "元");
									$("#total_price_1").val(total_price + "元");
									$("#total_price_2").val(total_price + "元");
									
									var coefficient = $("#coefficient").val();
									var cost_price = total_price + "*" + coefficient;
									cost_price = eval('('+cost_price+')');
									cost_price = cost_price.toFixed(2);
									$("#cost_price").val(cost_price);
									
									var piece = $("#piece").val();
									if(locals[9]==2){
										$("#default_quote_coefficient").val(locals[10]);
										document.getElementById('default_quote_coefficient').disabled = true;
									}else {
										$("#default_quote_coefficient").val(3);
										document.getElementById('default_quote_coefficient').disabled = false;
									}
									var default_quote_coefficient = $("#default_quote_coefficient").val();
									if(default_quote_coefficient == ''){
										default_quote_coefficient = 0;
									}
									var parities = $("#parities").val();
									
									var monolithic_quote = total_price + "*" + default_quote_coefficient + "/" + parities;
									monolithic_quote = eval('('+monolithic_quote+')');
									monolithic_quote = monolithic_quote.toFixed(2);
									$("#monolithic_quote").val(aaa[0] + monolithic_quote);								
									
									var final_quotation = monolithic_quote + "*" + piece;
									final_quotation = eval('('+final_quotation+')');
									final_quotation = final_quotation.toFixed(2);
									$("#final_quotation").val(aaa[0] + final_quotation);
	
									//$("#picture_text01").val(locals[8]);
									
									//#kongbai  限定起订量
									if(locals[11] == 1){
										$("#order_category").val(12);
										$("#kongbai").val(0);
									}else if(locals[11] == 2){
										$("#order_category").val(13);
										$("#kongbai").val(0);
									}else if(locals[11] == 3){
										$("#order_category").val(13);
										$("#piece").val(10);
										$("#kongbai").val(1);//空白口罩
									}else if(locals[11] == 4){
										$("#order_category").val(14);
										$("#piece").val(10);
										$("#kongbai").val(2);//2是围巾
									}
									else{
										
										$("#kongbai").val(0);
									}
									
									if(piece<6){
										 
										 
										 
										 $.ajax({
											 url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/hotfix_quotation/find_version_1',//通过Ajax取数据的目标页面
											 data:{'parities':parities,'picture_text03':picture_text03},
											 type:'get',//方法，还可以是"post"
											 dataType:'json',//数据类型，还有其它的，详见jQuery手册
											 success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
											 {
												$("#version").val(locals);
											 }
										 });
									  
									}else{
										$("#version").val('0');
									}
								}									
							}								
							
						});	
					}
					
					function price_num(key){
					   $(document).ready(function(){						
						   var price = $("#price"+key).val();
						   var w_h_id = $("#w_h_id"+key).val();
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
						   
						   var aaa = $("#parities").find("option:selected").text();;
						   aaa=aaa.split(" ");							   
						   
						   var price_b = $("#price_a" + key).text();
						   price_b = price_b.replace("元","");
						   
						   var material_price = $("#material_price").val();
						   
						   $("#price_a" + key).html(price + "元");
						   
						   material_price = material_price.replace("元","");
						   //alert(price_b)
						   var material_price_num = eval('('+material_price + "+" + price+')');
						   
						   if(price_b==""){
						   
						       price_c = material_price_num + "-" + 0;
						   
						   }else{
							   price_c = material_price_num + "-" + price_b;
						   }
                           
						   var price_d = eval('('+price_c+')');
						   price_d = price_d.toFixed(2);
						   $("#material_price").val(price_d + "元");
						   
						   var jiaozhi = $("#jiaozhi").val();
						   var manual_id = $("#manual_id").val();
						   jiaozhi = jiaozhi.replace("元","");
						   manual_id = manual_id.replace("元","");
						   if(jiaozhi==""){
						       var total_price = price_d + "+" + manual_id;
						   }else{
							   var total_price = price_d + "+" + manual_id + "+" + jiaozhi; 
						   }
						   total_price = eval('('+total_price+')');
						   total_price = total_price.toFixed(2);
						   $("#total_price_id").val(total_price + "元");
						   $("#total_price_1").val(total_price + "元");	
						   $("#total_price_2").val(total_price + "元");
						   var coefficient = $("#coefficient").val();
						   var cost_price = total_price + "*" + coefficient;
						   cost_price = eval('('+cost_price+')');
						   cost_price = cost_price.toFixed(2);
						   $("#cost_price").val(cost_price);
						   
						  var piece = $("#piece").val();
						  var default_quote_coefficient = $("#default_quote_coefficient").val();
						  if(default_quote_coefficient == ''){
							  default_quote_coefficient = 0;
						  }
						  var parities = $("#parities").val();
						  
						  var monolithic_quote = total_price + "*" + default_quote_coefficient + "/" + parities;
						  monolithic_quote = eval('('+monolithic_quote+')');
						  monolithic_quote = monolithic_quote.toFixed(2);
						  $("#monolithic_quote").val(aaa[0] + monolithic_quote);						  
						  
						  var final_quotation = monolithic_quote + "*" + piece;
						  
						  var version = $("#version").val();
						  
						  final_quotation = eval('('+final_quotation+ "+" + version+')');
						  final_quotation = final_quotation.toFixed(2);
						  $("#final_quotation").val(aaa[0] + final_quotation);
														 
					   });
					   
					}
					function design_code(){

					    $(document).ready(function(){
							var hq_customer_name=$("#hq_customer_name").val();
							var hq_customer_code=$("#hq_customer_code").val();
							$('#inch_w').val("");
							$('#inch_h').val("");
							$('#cm_w').val("");
							$('#cm_h').val("");
							if($('#picture_select01').val()=='5'){
							   $('#piece').val("6");
							}else{
							   $('#piece').val("50");	
							}
							$('#material_price').val("");
							$('#manual_id').val("");
							$('#total_price_id').val("");
							$('#price').val("");
							$('#total_price_1').val("");
							$('#total_price_2').val("");
							$('#final_quotation').val("");
							$('#cost_price').val("");
							$('#image').html("");
						var id2 = $("#picture_select01").val();

						if(id2=='5'){
							$('#picture_select02').css('display','none');
							$('#picture_text01').css('display','block');
							$('#picture_text02').css('display','none');
							$('#picture_text03').css('display','block');
							
							document.getElementById("picture_text03").value="";

						}else{
							$('#picture_select02').css('display','block');
							$('#picture_text01').css('display','none');
							$('#picture_text02').css('display','block');
							$('#picture_text03').css('display','none');
																		
																		 
																		  
																		  
							$.ajax({
								url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/hotfix_quotation/design_content_code',//通过Ajax取数据的目标页面
								data:{"id2":id2,"customer_name":hq_customer_name,"customer_code":hq_customer_code},
								type:'post',//方法，还可以是"post"
								dataType:'text',//数据类型，还有其它的，详见jQuery手册
								success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
								{
									//$('#aaa').css('display','block');   
									$("#picture_select02").html(locals);
								}										
							});
						}
						
					   });
					}
					
						function gummed_paper(){
						   $(document).ready(function(){
							   if($("#cm_w").val() == ''){
								   alert('请最后选择胶纸');
								   $("#gummed_paper_1").val("");
								  }
							  if($("#gummed_paper_1").val()!=''){	 						
							   var cm_w = $("#cm_w").val();
							   var cm_h = $("#cm_h").val();
							   
							   //判断网钻口罩/棉布口罩，强制胶纸类型
							   if(($("#picture_text03").val()).indexOf("CM-") >=0 || ($("#picture_text03").val()).indexOf("BM-") >=0){
								   var gummed_paper = $("#gummed_paper_1").val("Silicon Tape");
							   }
							   
							   var gummed_paper = $("#gummed_paper_1").val();

						       var aaa = $("#parities").find("option:selected").text();
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

										jiaozhi = eval('('+locals[1]+')');
										jiaozhi = jiaozhi.toFixed(2);

										$("#jiaozhi").val(jiaozhi + "元");
                                        $("#tapedata_formula").val(locals[2]);
										
										var material_price = $("#material_price").val();
										
							            var manual_id = $("#manual_id").val();
										material_price = material_price.replace("元","");
										manual_id = manual_id.replace("元","");
										
										if(material_price=="" || manual_id==""){
									        var total_price = 0;
										}else{
											var total_price = locals[1] + "+" + material_price + "+" + manual_id;
										}
										
										total_price = eval('('+total_price+')');
										total_price = total_price.toFixed(2);
								        $("#total_price_id").val(total_price + "元");
										$("#total_price_1").val(total_price + "元");	
										$("#total_price_2").val(total_price + "元");	
										var coefficient = $("#coefficient").val();
										var cost_price = total_price + "*" + coefficient;
										cost_price = eval('('+cost_price+')');
										cost_price = cost_price.toFixed(2);
										$("#cost_price").val(cost_price);
										var piece = $("#piece").val();
										var default_quote_coefficient = $("#default_quote_coefficient").val();
										if(default_quote_coefficient == ''){
										    default_quote_coefficient = 0;
									    }
										var parities = $("#parities").val();
										
										var monolithic_quote = total_price + "*" + default_quote_coefficient + "/" + parities;
										monolithic_quote = eval('('+monolithic_quote+')');
										monolithic_quote = monolithic_quote.toFixed(2);
										$("#monolithic_quote").val(aaa[0] + monolithic_quote);
										
										//var final_quotation = total_price + "*" + piece + "*" + default_quote_coefficient + "/" + parities;
										
										var version = $("#version").val();
										var final_quotation = monolithic_quote + "*" + piece; 
										final_quotation = eval('('+final_quotation+ "+" + version+')');
										final_quotation = final_quotation.toFixed(2);
	
										$("#final_quotation").val(aaa[0] + final_quotation);											
										
/*										var final_quotation = total_price + "*" + piece + "*" + default_quote_coefficient + "/" + parities;
										final_quotation = eval('('+final_quotation+')');
										final_quotation = final_quotation.toFixed(2);
										$("#final_quotation").val(aaa[0] + final_quotation);
																		
										var monolithic_quote = final_quotation + "/" + piece;
										monolithic_quote = eval('('+monolithic_quote+')');
										monolithic_quote = monolithic_quote.toFixed(2);
										$("#monolithic_quote").val(aaa[0] + monolithic_quote);	*/																							
									}								
									
								});	
							  }
						   });
						   
						}					
					
					function design_code33(){
					   $(document).ready(function(){	
					        var id = $("#picture_select02").val();
						  
					        var piece = $("#piece").val();
							
						    var parities = $("#parities").val();
					        var aaa = $("#parities").find("option:selected").text();;
					        aaa=aaa.split(" ");						   
					   
					        $('#aaa').css('display','none');
						    $.ajax({
								url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/hotfix_quotation/add_design_code',//通过Ajax取数据的目标页面
								data:{"id":id,"piece":piece,"parities":parities},
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
		                            document.getElementById("upload_jpg_links").href=locals[6];
									document.getElementById("upload_cdr_links").href=locals[11];
									var price = eval('('+locals[7]+')');
									price = price.toFixed(2);
									$("#material_price").val(price + "元");
									var manual = eval('('+locals[8]+')');
									manual = manual.toFixed(2);
									var a=Math.ceil(locals[1]/19);
									var b=Math.ceil(locals[2]/19);
									manual_1=manual*a*b;
									$("#manual_id").val(manual_1 + "元");
									
									var jiaozhi = $("#jiaozhi").val();
									jiaozhi = jiaozhi.replace("元","");
									if(jiaozhi==""){
									   var total_price = price + "+" + manual + "+" + 0;
									}else{
									   var total_price = price + "+" + manual + "+" + jiaozhi;	
									}
									total_price = eval('('+total_price+')');
									total_price = total_price.toFixed(2);
									$("#total_price_id").val(total_price + "元");
									$("#total_price_1").val(total_price + "元");
									$("#total_price_2").val(total_price + "元");
									
									var coefficient = $("#coefficient").val();
									var cost_price = total_price + "*" + coefficient;
									cost_price = eval('('+cost_price+')');
									cost_price = cost_price.toFixed(2);
									$("#cost_price").val(cost_price);
									
									var piece = $("#piece").val();
									var default_quote_coefficient = $("#default_quote_coefficient").val();
									if(default_quote_coefficient == ''){
									    default_quote_coefficient = 0;
								    }
									var parities = $("#parities").val();
													
									var monolithic_quote = total_price + "*" + default_quote_coefficient + "/" + parities;
									monolithic_quote = eval('('+monolithic_quote+')');
									monolithic_quote = monolithic_quote.toFixed(2);
									$("#monolithic_quote").val(aaa[0] + monolithic_quote);
									
									//var final_quotation = total_price + "*" + piece + "*" + default_quote_coefficient + "/" + parities;
									var final_quotation = monolithic_quote + "*" + piece; 
									
									var version = locals[10];
									
									final_quotation = eval('('+final_quotation+ "+" + version+')');
									final_quotation = final_quotation.toFixed(2);

									$("#final_quotation").val(aaa[0] + final_quotation);	

									$("#version").val(version);
									
									//口罩材料自动关联报关类型
									if(locals[11] == 1){
										$("#order_category").val(12);
									}else if(locals[11] == 2){
										$("#order_category").val(13);
									}else if(locals[11] == 3){
										$("#order_category").val(13);
									}else if(locals[11] == 4){
										$("#order_category").val(14);
									}
									else{
										
									}

							}
							}										
						});
					   });
					}
					
				</script> 
  <script>
function picture_select(){
	var id = $("#picture_select01").val();

	if(document.getElementById('picture_select01').value==1){
		document.getElementById('picture_select02').style.display='none';
		document.getElementById('picture_text01').style.display='block';
		document.getElementById('picture_text02').style.display='none';
		document.getElementById('picture_text03').style.display='block';
	}else{
		document.getElementById('picture_select02').style.display='block';
		document.getElementById('picture_text01').style.display='none';
		document.getElementById('picture_text02').style.display='block';
		document.getElementById('picture_text03').style.display='none';
	}
}
</script> 
  <?php if ($this->_tpl_vars['quotation_category'] == 1): ?>
  <div class="stkInfEnter" style="width:98%;display:block;" layoutH="30" id="ttbjd_wsj_hot"> <?php else: ?>
    <div class="stkInfEnter" style="width:98%; display:none;" layoutH="30" id="ttbjd_wsj_hot"> <?php endif; ?>
      <div style="width:100%; float:left;"> <?php if (! $this->_tpl_vars['quotation_category']): ?>
        <div class="sIE_title" style="width:15%;">
          <div class="button">
            <div class="buttonContent">
              <button onclick="document.getElementById('ttbjd_ysj_hot').style.display='block';document.getElementById('ttbjd_wsj_hot').style.display='none';">烫图报价单</button>
            </div>
          </div>
        </div>
        <?php endif; ?>
        <div class="sIE_title" style="width:60%;">烫图报价单(无设计)</div>
      </div>
      <form name="form1" method="post" action="<?php if ($this->_tpl_vars['id']): ?> <?php echo $this->_tpl_vars['update_no_baojia_action']; ?>
<?php else: ?><?php echo $this->_tpl_vars['no_baojia_action']; ?>
<?php endif; ?>" id="no_rhinestone_quotation_submit_form" enctype="multipart/form-data" onsubmit="return validateCallback(this, navTabAjaxDone)">
        <input type="hidden" name="no_tapedata_formula" id="no_tapedata_formula" />
        <input type="hidden" name="no_submit_value" id="no_submit_value" value="" />
        <div class="sIEK" style="width:65%;">
          <div class="sIE_l" style="width:400px;">
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
              <div class="sIE_l_01_title">名称:</div>
              <input type="text" class="sIE_No" value="<?php echo $this->_tpl_vars['design_pic_name']; ?>
" name="no_name" style="width:100px;"  id="no_name" onkeyup="design_pic_name_no();"/>
            </div>
            <div class="sIE_l_01" style="width:200px;">
              <div class="sIE_l_01_title">客户名:</div>
              <input type="text" class="sIE_No" value="<?php echo $this->_tpl_vars['customer_name']; ?>
" name="no_customer_code" id="no_customer_code" style="width:100px;"  readonly="readonly" />
            </div>
             <div class="sIE_l_01" style="width:200px;">
              <div class="sIE_l_01_title" style="width:80px;">报价类型:</div>
              <select class="picture_select01" name="quotation_category_id_no" id="quotation_category_id_no" style="width:106px; height:26px;" onchange="quotation_category_no_update()">
                <option value="定制报价">定制报价</option>
                <option value="Stock改色">Stock改色</option>
               
              </select>
            </div>
            <div class="sIE_l_01" style="width:200px;">
              <div class="sIE_l_01_title">公司:</div>
              <input type="text" class="sIE_No" name="no_customer_company" value="<?php echo $this->_tpl_vars['customer_company']; ?>
" id="no_customer_company" style="width:100px;"  readonly="readonly" />
            </div>
            
            
            <div class="sIE_l_01" style="width:200px;">
              <div class="sIE_l_01_title">报价编号:</div>
              <input type="text" class="sIE_No" name="no_stock_number" id="no_stock_number" readonly="readonly" value="<?php echo $this->_tpl_vars['no_stock_number']; ?>
" style="width:100px;" />
            </div>
            <div class="sIE_l_01" style="width:200px;">
              <div class="sIE_l_01_title">材料费:</div>
              <input type="text" style="width:100px;" value="<?php echo $this->_tpl_vars['material_price']; ?>
" name="no_material_price"  readonly="readonly" id="no_material_price" class="sIE_No" />
            </div>
            <div class="sIE_l_01" style="width:200px;">
              <div class="sIE_l_01_title">备损数量:</div>
              <input id="hq_no_beisun" class="sIE_No" style="width:100px;" type="text" onchange="no_beisun_change()" name="no_preparation_number" value="<?php echo $this->_tpl_vars['no_preparation_number']; ?>
">
            </div>
            <div class="sIE_l_01" style="width:200px; margin:0px;">
              <div class="sIE_l_01_title">工厂手工费:</div>
              <input type="text" style="width:100px;" readonly="readonly" name="no_factory_workmanship_price" value="<?php echo $this->_tpl_vars['factory_workmanship_price']; ?>
" id="no_manual_id" class="sIE_No" />
            </div>
            <div class="sIE_l_01" style="width:200px; overflow:hidden; display:inline; height:24px;">
            	<div class="sIE_l_01_title" >胶纸名称:</div>
                <select class="picture_select02" style="float:left; width:106px;" disabled="disabled" id="no_gummed_paper_1"  name="no_tapedata_id" onchange="no_gummed_paper()">
                  <option value="">胶纸名称</option>
                  <?php $_from = $this->_tpl_vars['gummed_paper']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['qf']):
?> <?php if ($this->_tpl_vars['tapedata_id'] == $this->_tpl_vars['qf']['tapedata_name']): ?>
                  <option selected="selected" value="<?php echo $this->_tpl_vars['qf']['tapedata_name']; ?>
"><?php echo $this->_tpl_vars['qf']['tapedata_name']; ?>
</option>
                  <?php else: ?>
                  <option value="<?php echo $this->_tpl_vars['qf']['tapedata_name']; ?>
"><?php echo $this->_tpl_vars['qf']['tapedata_name']; ?>
</option>
                  <?php endif; ?> <?php endforeach; endif; unset($_from); ?>
                </select>
            </div>
            <div class="sIE_l_01" style="width:200px; overflow:hidden; display:inline;">
              <div class="sIE_l_01_title">成本系数:</div>
              <input type="text" id="no_coefficient" name="no_cost_factor"  readonly="readonly" value="<?php echo $this->_tpl_vars['factory_cost_factor']; ?>
" class="sIE_No" style="width:100px;" />
            </div>
            
            <div class="sIE_l_01" style="width:200px;">
                <div class="sIE_l_01_title">片数:</div>
                <input type="text" name="no_pcs" id="no_piece" class="sIE_No" value="50" onkeyup="no_piece1()" style="width:100px; height:20px;" />
            </div>
            
            
            <div class="sIE_l_01" style="width:200px;">
              <div class="sIE_l_01_title">成本价:</div>
              <input type="text" id="no_cost_price" value="<?php echo $this->_tpl_vars['factory_cost']; ?>
" name="no_factory_cost" class="sIE_No" style="width:100px;"  readonly="readonly" />
            </div>
            <div class="sIE_l_01" style="width:200px;">
                <div class="sIE_l_01_title">报价系数:</div>
                <?php if ($this->_tpl_vars['quote_factor']): ?>
                <input type="text" name="no_quote_factor" id="no_default_quote_coefficient" onkeyup="no_default_quote_coefficient1()" class="sIE_No" value="<?php echo $this->_tpl_vars['quote_factor']; ?>
" style="width:100px; height:20px;" />
                <?php else: ?>
                <input type="text" name="no_quote_factor" id="no_default_quote_coefficient" onkeyup="no_default_quote_coefficient1()" class="sIE_No" value="<?php echo $this->_tpl_vars['default_quote_coefficient']; ?>
" style="width:100px; height:20px;" />
                <?php endif; ?> </div>
            <div class="sIE_l_01" style="width:200px; margin:0px;">
              <div class="sIE_l_01_title">胶纸费:</div>
              <input type="text" name="no_tapedata_price" value="<?php echo $this->_tpl_vars['tapedata_price']; ?>
" style="float:left; width:100px; height:20px;"  readonly="readonly" id="no_jiaozhi"/>
            </div>
            <div class="sIE_l_01" style="width:200px;">
                <div class="sIE_l_01_title">货币:</div>
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
              <div class="sIE_l_01" style="width:200px;">
              <div class="sIE_l_01_title">版费:</div>
              <input class="sIE_No digits" style="width:100px;" onkeyup="version_b()" type="text" id="no_version" name="no_version" value="0" readonly="readonly" >
            </div>
            <div class="sIE_l_01" style="width:200px;">
              <div class="sIE_l_01_title">单片报价:</div>
              <input type="text" name="no_monolithic_quote" value="<?php echo $this->_tpl_vars['monolithic_quote']; ?>
" id="no_monolithic_quote" class="sIE_No" style="width:100px; height:20px;"  readonly="readonly" />
            </div>
            <div class="sIE_l_01" style="width:200px;">
              <div class="sIE_l_01_title">合计:</div>
              <input type="text" name="no_whole_cost_price" value="<?php echo $this->_tpl_vars['whole_cost_price']; ?>
" id="no_total_price_id_2" readonly="readonly" class="sIE_No" style="width:100px;" />
            </div>
            <div class="sIE_l_01" style="width:200px;">
              <div class="sIE_l_01_title">最终报价:</div>
              <input type="text" name="no_final_quote" value="<?php echo $this->_tpl_vars['final_quote']; ?>
" id="no_final_quotation" class="sIE_No" style="width:100px; height:20px;"  readonly="readonly" />
            </div>
           
            <div id="hq_no_beisun_error" style="line-height: 26px; float: left; color: rgb(255, 0, 0); display:none; margin-left: 5px;">备损数量不为0，此做货单需要主管审核！</div>
            
            
            <div class="sIE_l_01" style="width:200px;">
              <div class="sIE_l_01_title" style="width:80px; line-height:26px;">报关品类:</div>
              <select class="picture_select01" name="no_order_category" id="no_order_category" style="width:106px; height:26px;">
                <option value="">请选择</option>
                <?php $_from = $this->_tpl_vars['order_category']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['oc']):
?> <?php if ($this->_tpl_vars['order_category_id'] == $this->_tpl_vars['oc']['id']): ?>
                <option selected="selected" value="<?php echo $this->_tpl_vars['oc']['id']; ?>
"><?php echo $this->_tpl_vars['oc']['c_name']; ?>
</option>
                <?php else: ?>
                <option value="<?php echo $this->_tpl_vars['oc']['id']; ?>
"><?php echo $this->_tpl_vars['oc']['c_name']; ?>
</option>
                <?php endif; ?> <?php endforeach; endif; unset($_from); ?>
              </select>
            </div>
            
            <div id="hq_no_result" style="line-height: 26px; float: left; color: rgb(255, 0, 0); margin-left: 10px; display:none;"></div>
          </div>
          <script type="text/javascript" language="javascript">
				 
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
					function quotation_category_no_update(){
						var quotation_category = $("#quotation_category_id_no").val();
						
						if(quotation_category=='Stock改色'){
							$("#no_inch_w").attr("disabled",true);
						    $("#no_inch_h").attr("disabled",true);
						    $("#no_cm_w").attr("disabled",true);
						    $("#no_cm_h").attr("disabled",true);
							 $("#no_gummed_paper_1").attr("disabled",true);
							 $("#no_gummed_paper_1").val("胶纸名称");
							 $("#material_table").html("");
							 $("#no_inch_w").val("");
							 $("#no_inch_h").val("");
							 $("#no_cm_w").val("");
							 $("#no_cm_h").val("");
							 $("#no_cost_price").val("");
							 $("#no_material_price").val("");
					         $("#no_monolithic_quote").val("");
							 $("#no_manual_id").val("");
							 $("#no_final_quotation").val("");
							 $("#no_total_price_id_2").val("");
							 $("#no_parities").val("人民币");
							 $("#no_name").val("");
							 
							 
							 $("#image_no").html("");
							 $("#image_no").css("display","block");
							 //$("#image_no_1").css("display","none");
							  $("#cdr_no").css("display","block");
							 $("#cdr_no_1").css("display","none");
							// $("#image_no_1").html("");
							// $("#cdr_no").css("display","none");
							 $("#cdr_no").html("");
							// $("#cdr_no_1").css("display","block");
							// $("#cdr_no_1").html("");
							$.ajax({
								  url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/hotfix_quotation/quotation_stock',//通过Ajax取数据的目标页面
								  data:{"quotation_category":quotation_category},
								  type:'post',//方法，还可以是"post"
								  dataType:'text',//数据类型，还有其它的，详见jQuery手册
								  success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
								  {
									 $("#no_stock_number").val(locals);
								  }								
							
						    });
						}else {
							
							 $("#no_inch_w").attr("disabled",false);
						     $("#no_inch_h").attr("disabled",false);
						     $("#no_cm_w").attr("disabled",false);
						     $("#no_cm_h").attr("disabled",false);
							 $("#no_gummed_paper_1").attr("disabled",true);
							 $("#no_gummed_paper_1").val("胶纸名称");
							 $("#material_table").html("");
							 $("#no_inch_w").val("");
							 $("#no_inch_h").val("");
							 $("#no_cm_w").val("");
							 $("#no_cm_h").val("");
							 $("#no_cost_price").val("");
							 $("#no_material_price").val("");
					         $("#no_monolithic_quote").val("");
							 $("#no_manual_id").val("");
							 $("#no_final_quotation").val("");
							 $("#no_total_price_id_2").val("");
							 $("#no_parities").val("人民币");
							 $("#no_name").val("");
							 
							 
							 $("#image_no").html("");
							 $("#image_no").css("display","none");
							 $("#image_no_1").css("display","none");
							// $("#image_no_1").html("");
							// $("#cdr_no").css("display","none");
							 $("#cdr_no").html("");
							// $("#cdr_no_1").css("display","block");
							// $("#cdr_no_1").html("");
							 
							 $.ajax({
								  url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/hotfix_quotation/quotation_stock',//通过Ajax取数据的目标页面
								  data:{"quotation_category":quotation_category},
								  type:'post',//方法，还可以是"post"
								  dataType:'text',//数据类型，还有其它的，详见jQuery手册
								  success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
								  {
									 $("#no_stock_number").val(locals); $("#image_no").css("display","block");
								  }								
							
						    });
						}
						
					}
					
					
					function design_pic_name_no(){
						 
						var no_name = $("#no_name").val();
						var no_coefficient = $("#no_coefficient").val();//成本系数
						var no_default_quote_coefficient = $("#no_default_quote_coefficient").val();//报价系数
						var quotation_category = $("#quotation_category_id_no").val();
						var no_piece = $("#no_piece").val();//片数
						if(quotation_category=='Stock改色' && no_name!=''){
							$.ajax({
							  url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/hotfix_quotation/add_stock_no',//通过Ajax取数据的目标页面
							  data:{"stock":no_name},
							  type:'post',//方法，还可以是"post"
							  dataType:'text',//数据类型，还有其它的，详见jQuery手册
							  success:function(locals){//成
								  if(locals!=''){
								  	if(locals==2){
										alert("亲，这是指甲贴的stock哦！");
										$("#no_name").val("");
									}else{
									   locals=locals.split("|");
									   $("#material_table").html(locals[0]);
									   $("#no_inch_w").val(locals[1]);
									   $("#no_inch_h").val(locals[2]);
									   $("#no_cm_w").val(locals[3]);
									   $("#no_cm_h").val(locals[4]);
									   $("#image_no").css("display","block");
									   $("#image_no_1").css("display","none");
									   $("#image_no").html("<img style='height:260px; width:260px;' src = " + locals[5] + ">");
								      
									  
									   $("#cdr_no").css("display","block");
									   $("#cdr_no_1").css("display","none");
									   $("#cdr_no").html("CDR:<a href="+ locals[6]+">下载查看</a>");
									   
									   //echo "CDR：<a href='+ locals[5]+'>下载查看</a>"."|";
									   
									   
									   $("#no_gummed_paper_1").removeAttr("disabled");
									   $("#no_material_price").val(locals[7]+"元");
									  
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
									   $("#no_manual_id").val(manual + "元");
									   var jiaozhi = $("#jiaozhi").val();
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
									   $("#no_total_price_id_2").val(price+"元");//合计
									   $("#no_cost_price").val(chengben);//成本
									   $("#no_monolithic_quote").val("¥"+total_price);//单片报价
									   $("#no_final_quotation").val("¥"+total);//单片报价	
									}
									   
								  }
								}
							});
						}
						
					}
				 </script>
          <div class="sIE_r" style="width:430px;">
            <div class="sIE_l_01" style="margin-top:0px; width:210px;">
              <div class="sIE_l_01_title" style="width:60px; height:80px;">尺寸:</div>
              <div class="sIE_r01" style="float:left; width:150px;">
                <div class="sIE_r01_div">
                  <input type="text" name="no_inch_w" value="<?php echo $this->_tpl_vars['inch_w']; ?>
" id="no_inch_w" class="sIE_No" style="width:100px;"/>
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
               <div style=" float:left;margin-top:10px; width:230px;">
                  <div class="sIE_l_01_title" style="width:70px;">材料录入:</div>
                  <textarea name="add_materials_by_hand" id="add_materials_by_hand" style="width:140px; height:140px;"></textarea>
                  <button type="button" id="insert_materials_by_hand" style="margin-left:70px;">确定</button>
                  <div id="text_err" class="sIE_l" style="width:400px; color:#F00;display:none"> </div>
              </div>
              <div class="sIE_l_01" style="width:200px;">
                
              </div>
            </div>
            <div class="sIEK" style="width:190px; padding-left:30px;">
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
        </div>
        <div class="sIE_l_02" style=" width:65%;">
          <table cellspacing="0" class="sIE_l_02Tab" id="material_table">
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
              <td><?php echo $this->_tpl_vars['qsm']['material_name']; ?>
</td>
              <td><?php echo $this->_tpl_vars['qsm']['material_color']; ?>
</td>
              <td><?php echo $this->_tpl_vars['qsm']['material_size']; ?>
</td>
              <td><?php echo $this->_tpl_vars['qsm']['material_quantity']; ?>
</td>
<!--              <td><?php if ($this->_tpl_vars['qsm']['materialformula'] != ""): ?>
                <select name="no_formula_id[<?php echo $this->_tpl_vars['qsm']['id']; ?>
]" class="picture_select02" id="no_price<?php echo $this->_tpl_vars['qsm']['id']; ?>
" onchange="no_price_num(<?php echo $this->_tpl_vars['qsm']['id']; ?>
)">
                  <option value="a">选择公式</option>
                  <?php $_from = $this->_tpl_vars['qsm']['materialformula']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['mf']):
?> <?php if ($this->_tpl_vars['qsm']['formula_id'] == $this->_tpl_vars['mf']['id_1']): ?>
                  <option selected="selected" value="<?php echo $this->_tpl_vars['mf']['id_1']; ?>
"><?php echo $this->_tpl_vars['mf']['gongshi_1']; ?>
</option>
                  <?php else: ?>
                  <option value="<?php echo $this->_tpl_vars['mf']['id_1']; ?>
"><?php echo $this->_tpl_vars['mf']['gongshi_1']; ?>
</option>
                  <?php endif; ?> <?php endforeach; endif; unset($_from); ?>
                </select>
                <?php else: ?>
                <?php endif; ?> </td>-->
              <td id="no_price_a<?php echo $this->_tpl_vars['qsm']['id']; ?>
"><?php echo $this->_tpl_vars['qsm']['material_total_price']; ?>
</td>
              <td onClick='getDel(this,<?php echo $this->_tpl_vars['qsm']['id']; ?>
)'><a href='#'>删除</a></td>
            </tr>
            <?php endforeach; endif; unset($_from); ?>
          </table>
        </div>
      </form>
      <div class="sIE_r" style="height:300px; width:280px; margin-top:-360px; float:right;">
      
               <!-- <div class="sIE_r_img" style="height:300px; width:260px; margin-left:0px; display:none;" id="image_no">
                   <div style="float:left;  width:260px; height:auto;">
                        <iframe style="border:none; width:300px; height:260px;"></iframe>
                      </div>  
                 </div>-->
                <div class="sIE_r_img" style="height:300px; width:280px; margin-left:0px;" id="image_no_1">
                      <!--<div style="float:left;  width:260px; height:auto;">
                        <iframe name="hq_yframe_hotfix" src="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/hotfix_quotation/two_img_upload" style="border:none; width:280px; height:300px;"></iframe>
                      </div> -->
                </div>
                
                <!--<form style="float:left; width:260px;" id="hq_upload_jpg" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/hotfix_quotation/two_img_upload" target="hq_yframe_hotfix" method="post" enctype="multipart/form-data" >
                  <div style="float:left; height:30px; width:60px; overflow:hidden; margin-left:20px; position:relative;">
                    <input type="file" class="sIE_r_img_file"  name="upload_file[]" multiple="multiple" style=" opacity:0; position:relative; z-index:10; margin-top:0px;" />
                    <input type="button" class="sIE_r_img_file" name="jpg" style=" opacity:1; width:60px; text-align:center; height:24px; position:absolute; z-index:9; margin-top:0px;" value="浏览" />
                  </div>
                  <input type="button" id="hq_jpg_upload_submit" value="上传JPG和CDR" style=" float:right; width:100px;" />
                </form>-->
				<form style="float:left; width:260px;" id="hq_upload_jpg" enctype="multipart/form-data" accept-charset="UTF-8">
                    	<input type="file" name="upload_file[]" value="上传" multiple="multiple"  style="position:relative; z-index:10; margin-top:0px;" />  
				</form>
				<button id="hq_jpg_upload_submit">提交</button>
      </div>
      <!--<div class="sIE_r" style="height:36px; width:260px; margin-top:20px; padding-top:15px; border-top:dotted 1px #CCC; float:right;">
      
      
                <div class="sIE_r_img" style="height:36px; width:260px; margin-left:0px; display:none;" id="cdr_no">
                      <div style="float:left;  width:260px; height:auto;"> 
                       
                        <iframe  style="border:none; width:260px; height:260px;"></iframe>
                      </div>
                </div>
                <div class="sIE_r_img" style="height:36px; width:260px; margin-left:0px;" id="cdr_no_1">
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
      <div class="button" style="margin-left:75%;margin-right:5px;">
        <div class="buttonContent">
          <button type="button" id="no_design_content_save">确定</button>
        </div>
      </div>
      <div class="button">
        <div class="buttonContent" style="margin-right:5px;">
          <button class="close">取消</button>
        </div>
      </div>
      <div class="button" >
        <div class="buttonContent">
          <button type="button" id="no_add_order">添加做货单</button>
        </div>
      </div>
      </div>
    </div>
  </div>
</div>

<!-- {literal} --> 
<script type="text/javascript">

	function no_price_num(key){
	   $(document).ready(function(){						
		   var no_price = $("#no_price"+key).find("option:selected").text();
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
		   
		   var aaa = $("#no_parities").find("option:selected").text();
		   aaa=aaa.split(" ");			   
		   
		   var no_price_b = $("#no_price_a"+key).text();
		   no_price_b = no_price_b.replace("元","");		   
		   
		   $("#no_price_a" + key).html(no_price + "元");
		   
		   var material_price = $("#no_material_price").val();

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
			   
		   $("#no_material_price").val(material_price_num + "元")		   

			var no_jiaozhi = $("#no_jiaozhi").val();   //获取胶纸费				
			var no_material_price_1 = $("#no_material_price").val();   //获取材料费	
			var no_manual_id = $("#no_manual_id").val();   //获取手工费
			
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
			$("#no_total_price_id").val(total_price + "元");     //
			$("#no_total_price_id_1").val(total_price + "元");	 //  合计
			$("#no_total_price_id_2").val(total_price + "元");	 //	
			
			var no_coefficient = $("#no_coefficient").val();   //工厂成本系数
			var no_cost_price = total_price + "*" + no_coefficient;  //合计*系数 公式
			no_cost_price = eval('('+no_cost_price+')');
			no_cost_price = no_cost_price.toFixed(2);
			$("#no_cost_price").val(no_cost_price);  //工厂成本
			
			var no_piece = $("#no_piece").val();  //片数
			var no_default_quote_coefficient = $("#no_default_quote_coefficient").val();  //报价系数
			var no_parities = $("#no_parities").val();  //汇率
			
			var monolithic_quote = total_price + "*" + no_default_quote_coefficient + "/" + no_parities;   
			monolithic_quote = eval('('+monolithic_quote+')');
			monolithic_quote = monolithic_quote.toFixed(2);
			$("#no_monolithic_quote").val(aaa[0] + monolithic_quote);  			
			
			var no_version = $("#no_version").val(); 
			
			var final_quotation = monolithic_quote + "*" + no_piece;   //最终报价公式
			final_quotation = eval('('+final_quotation+ "+" +no_version+')');
			final_quotation = final_quotation.toFixed(2);
			$("#no_final_quotation").val(aaa[0] + final_quotation);  //最终报价
			


			$.ajax({
				url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/hotfix_quotation/gongshi_price',//通过Ajax取数据的目标页面
				data:{"price":$("#no_price_a"+key).text(),"id":key,"no_price":$("#no_price"+key).val()},
				type:'post',//方法，还可以是"post"
				dataType:'text',//数据类型，还有其它的，详见jQuery手册
				success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
				{
																				
				}								
				
			});					   						   	
										 
	   });
	   
	}

	function no_gummed_paper(){
	   $(document).ready(function(){
		 if($("#no_gummed_paper_1").val()!=''){					
		   var cm_w = $("#no_cm_w").val();
		   var cm_h = $("#no_cm_h").val();

		   var gummed_paper = $("#no_gummed_paper_1").val();

		   var aaa = $("#no_parities").find("option:selected").text();
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
					$("#no_jiaozhi").val(locals[1] + "元");
					$("#no_tapedata_formula").val(locals[2]);

				    var no_material_price = $("#no_material_price").val();//材料费
					var no_manual_id = $("#no_manual_id").val();//手工费
					
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
					$("#no_total_price_id").val(total_price + "元");
					$("#no_total_price_id_1").val(total_price + "元");	
					$("#no_total_price_id_2").val(total_price + "元");				

					var no_coefficient = $("#no_coefficient").val();
					var cost_price = total_price + "*" + no_coefficient;
					cost_price = eval('('+cost_price+')');
					cost_price = cost_price.toFixed(2);
					$("#no_cost_price").val(cost_price);  //工厂成本总价
					
					var no_piece = $("#no_piece").val();
					var no_default_quote_coefficient = $("#no_default_quote_coefficient").val();
					var no_parities = $("#no_parities").val();
					
					var no_version = $("#no_version").val();
					
					var monolithic_quote = total_price + "*" + no_default_quote_coefficient + "/" + no_parities;   
					monolithic_quote = eval('('+monolithic_quote+')');
					monolithic_quote = monolithic_quote.toFixed(2);
					$("#no_monolithic_quote").val(aaa[0] + monolithic_quote);					
					
					var final_quotation = monolithic_quote + "*" + no_piece;
					final_quotation = eval('('+final_quotation+ "+" + no_version+')');
					final_quotation = final_quotation.toFixed(2);
					$("#no_final_quotation").val(aaa[0] + final_quotation);
					
																						
				}
				
			});	
		 }
	   });
	   
	}							

$(document).ready(function()  
{
/*	$("#hq_jpg_upload_submit").click(function (){
		$("#image_no").css("display","none");
		$("#image_no").val("");
		$("#image_no_1").css("display","block");
		$("#hq_upload_jpg").submit();
	});*/
	
	$("#hq_jpg_upload_submit").click(function (){
		var formData = new FormData($('#hq_upload_jpg')[0]);
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
				var num=1;
				$.each(data,function(i,n){
				   if(i=='jpg'){
				   		$('#image_no_1').empty();
				   		$('#image_no_1').append('<a href="'+n+'"  target="_blank"><img src="'+n+'" width="280" height="300" /></a>');
				   }else if(i=='quotecol'){
				   		if( n!== null && n.indexOf("_") != -1){
				   			//$('#add_materials_by_hand').val(n.replace(/_/g,"\n"));
						}else{
							num=0;
						}
				   }else if(i=='width'){
				   		if( n!== null && n>0){
							if(n<25){
								//$('#no_inch_w').val(n.toFixed(2));	
								//$('#no_cm_w').val((n*2.54).toFixed(2));	
							}else{
								//$('#no_inch_w').val(n.toFixed(2)+'X');
								//$('#no_cm_w').val('NaN');
							}
							$("#no_gummed_paper_1").removeAttr("disabled");
						}
				   }else if(i=='height'){
				   		if(n!== null && n>0){
							if(n<20){
								//$('#no_inch_h').val(n.toFixed(2));
								//$('#no_cm_h').val((n*2.54).toFixed(2));
							}else{
								//$('#no_inch_h').val(n.toFixed(2)+'X');
								//$('#no_cm_h').val('NaN');
							}
							$("#no_gummed_paper_1").removeAttr("disabled");
						}
				   }else if(i=='message'){
				   		$('#image_no_1').empty();
				   		$('#image_no_1').append(n);
						num=0;
				   }
				 });
				 if(num!=0){
					//$('#insert_materials_by_hand').trigger("click");
				}
				
		}).error(function(){ 
				
		});
	});
	
	$("#hq_cdr_upload_submit").click(function (){
		$("#cdr_no").css("display","none");
		$("#cdr_no").val("");
		$("#cdr_no_1").css("display","block");
		
		$("#hq_upload_cdr").submit();
	});	
	
	
    $("#design_content_save").click(function()
	
	{
		var picture_select01 = $("#picture_select01").val();
		var picture_select02 = $("#picture_select02").val();
		var picture_text03 = $("#picture_text03").val();
		var parities = $("#parities").val()
		var piece = $("#piece").val()
		var default_quote_coefficient = $("#default_quote_coefficient").val()
		
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
		
		/*var strCookie=document.cookie;

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
		if($("#hq_customer_code").val()== ""){
			$("#hq_result").css("display","block");
			$("#hq_result").html("客户代码不能为空！");
		}else if($("#hq_customer_name").val()== ""){
			$("#hq_result").css("display","block");
			$("#hq_result").html("客户名不能为空！");
		}
		else if(!isNumber_z($('#hq_beisun').val()) && !isNumber_fp($('#hq_beisun').val()) && $('#hq_beisun').val()!= ''){
			$("#hq_result").css("display","block");
			$("#hq_result").html("备损数量为正整数！");
		}
		else if($("#quotation_category_id").val()== ""){
			$("#hq_result").css("display","block");
			$("#hq_result").html("请选择报价类型！");
		}
		
		else if(($("#picture_text03").val()== "" && $("#picture_text03").is(":visible")) || ($("#picture_text02").val()== "" && $("#picture_text02").is(":visible"))){
			$("#hq_result").css("display","block");
			$("#hq_result").html("报价名称不能为空！");
		}
		else if((($("#picture_select02").val()== "" || $("#picture_select02").val()== "0") && $("#picture_select02").is(":visible")) || ($("#picture_text01").val()== "" && $("#picture_text01").is(":visible"))){
			$("#hq_result").css("display","block");
			$("#hq_result").html("报价编号不能为空！");
		}
		
		else if($("#order_category").val()== ""){
			$("#hq_result").css("display","block");
			$("#hq_result").html("请选择报关品类！");
		}
		
		else if($("#inch_w").val()== "" || $("#inch_h").val()== "" || $("#cm_w").val()== "" || $("#cm_h").val()== ""){
			$("#hq_result").css("display","block");
			$("#hq_result").html("尺寸不为空,请填写正确报价名称！");
		}

		else if($("#gummed_paper_1").val()== ""){
			$("#hq_result").css("display","block");
			$("#hq_result").html("请选择胶纸名称！");
		}
		else if(check_arr.indexOf("a")>-1){
			$("#hq_result").css("display","block");
			$("#hq_result").html("请选择公式！");
		}
		else if($("#piece").val()== "" || $("#piece").val() <= 0 || (!isNumber_z($('#piece').val()) && isEmpty($('#piece').val()))){
			$("#hq_result").css("display","block");
			$("#hq_result").html("片数不能为空,且大于0！");
		}
		else if($("#default_quote_coefficient").val()== "" || $("#default_quote_coefficient").val() <= 0 || (!isNumber_z($('#default_quote_coefficient').val()) && isEmpty($('#default_quote_coefficient').val()))){
			$("#hq_result").css("display","block");
			$("#hq_result").html("报价系数不能为空,且大于0！");
		}
		else if($("#hq_customer_name").val()== ""){
			$("#hq_result").css("display","block");
			$("#hq_result").html("客户名不能为空,请填写正确客户代码！");
		}
		else if($("#kongbai").val() == 1 && $("#piece").val()<10){
			$("#hq_result").css("display","block");
			$("#hq_result").html("空白口罩数量不能1于50");
		}
		else if($("#kongbai").val() == 2 && $("#piece").val()<10){
			$("#hq_result").css("display","block");
			$("#hq_result").html("围巾数量不能低于10");
		}
		else if(picture_select01=='3'){
			$("#hq_result").css("display","none");
			if(piece<12){
				$.ajax({
				url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/hotfix_quotation/find_version',//通过Ajax取数据的目标页面
				type:'get',//方法，还可以是"post"
				data:{'picture_select02':picture_select02,'parities':parities},
				dataType:'json',//数据类型，还有其它的，详见jQuery手册
				success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
				{
					if(versions<locals){
						$("#hq_result").css("display","block");
			            $("#hq_result").html("版费不可以小于设定值"+locals);
					}else{
						
						$("#submit_value").val('2');
						$("#rhinestone_quotation_submit_form").submit();
					}
				}
				});
			}else{
				
				$("#submit_value").val('2');
				$("#rhinestone_quotation_submit_form").submit();
			}
		
		}else if(picture_select01=='5'){
			if(piece<6){
				 $.ajax({
				  url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/hotfix_quotation/find_version_1',//通过Ajax取数据的目标页面
				  data:{'parities':parities,'picture_text03':picture_text03},
				  type:'get',//方法，还可以是"post"
				  dataType:'json',//数据类型，还有其它的，详见jQuery手册
				  success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
				  {
					if(versions<locals){
						$("#hq_result").css("display","block");
			            $("#hq_result").html("版费不可以小于设定值"+locals);
					}else{
						
						$("#submit_value").val('2');
						$("#rhinestone_quotation_submit_form").submit();
					}
				  }
					});
						
					 }else{
						 
						 $("#submit_value").val('2');
				        $("#rhinestone_quotation_submit_form").submit();
			}
		
				
		}
    });
    $("#no_design_content_save").click(function(){
    var no_piece = $("#no_piece").val();
	var no_parities = $("#no_parities").val();
	var no_version = $("#no_version").val();
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
		
	/*	
		var strCookie=document.cookie;

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
		var versions = $("#no_version").val();no_piece

		if($("#no_customer_num_1").val()== ""){
			$("#hq_no_result").css("display","block");
			$("#hq_no_result").html("客户代码不能为空！");
		}else if($("#no_customer_code").val()== ""){
			$("#hq_no_result").css("display","block");
			$("#hq_no_result").html("客户名不能为空！");
		}
		else if($("#no_name").val()== ""){
			$("#hq_no_result").css("display","block");
			$("#hq_no_result").html("名称不能为空！");
		}
		else if(!isNumber_z($('#hq_no_beisun').val()) && !isNumber_fp($('#hq_no_beisun').val()) && isEmpty($('#hq_no_beisun').val())){
			$("#hq_no_result").css("display","block");
			$("#hq_no_result").html("备损数量为正整数！");
		}
		
		else if($("#no_order_category").val()== ""){
			$("#hq_no_result").css("display","block");
			$("#hq_no_result").html("请选择报关品类！");
		}
		
		
		else if($("#no_inch_w").val()== "" || $("#no_inch_w").val().indexOf('X')>=0 || $("#no_inch_h").val()== "" || $("#no_inch_h").val().indexOf('X')>=0 || $("#no_cm_w").val()== "" || $("#no_cm_h").val()== "" || isEmpty($('#no_inch_w').val()) || isEmpty($('#no_inch_h').val()) || isEmpty($('#no_cm_w').val()) || isEmpty($('#no_cm_h').val()) ){
			$("#hq_no_result").css("display","block");
			$("#hq_no_result").html("请填写正确尺寸代码！");
		}
	
//		else if($("#material_select").val()== "" && $("#picture_text02").val()== "" && $("#quotation_category_id_no").val()!="Stock改色"){
//			
//			$("#hq_no_result").css("display","block");
//			$("#hq_no_result").html("请选择材料！");
//		}
		
		else if((($("#material_info_color").val()== "" && $("#material_info_color").is(":visible")) || ($("#material_info_c_color").val()== "" && $("#material_info_c_color").is(":visible")))&& $("#quotation_category_id_no").val()!="Stock改色"){
			$("#hq_no_result").css("display","block");
			$("#hq_no_result").html("请选择颜色！");
		}
		else if(!$(".hq_tableClass02").is(":visible") && $("#quotation_category_id_no").val()!="Stock改色"){
			$("#hq_no_result").css("display","block");
			$("#hq_no_result").html("请添加材料项！");
		}
		else if(check_arr.indexOf("a")>-1){
			
			$("#hq_no_result").css("display","block");
			$("#hq_no_result").html("请选择公式！");
		}
		else if($("#no_gummed_paper_1").val()==""){
			
			$("#hq_no_result").css("display","block");
			$("#hq_no_result").html("请选择胶纸名称！");
		}

		else if($("#no_piece").val()== "" || $("#no_piece").val() <= 0 || (!isNumber_z($("#no_piece").val()) && isEmpty($("#no_piece").val()))){
			$("#hq_no_result").css("display","block");
			$("#hq_no_result").html("片数不能为空,且大于0！");
		}
		else if($("#no_default_quote_coefficient").val()== "" || $("#no_default_quote_coefficient").val() <= 0 || (!isNumber_z($('#no_default_quote_coefficient').val()) && isEmpty($('#no_default_quote_coefficient').val()))){
			$("#hq_no_result").css("display","block");
			$("#hq_no_result").html("报价系数不能为空,且大于0！");
		}
		else if($("#no_customer_name").val()== ""){
			$("#hq_no_result").css("display","block");
			$("#hq_no_result").html("客户不能为空,请填写正确客户代码！");
		}
		else if($("#no_jiaozhi").val() == "0元" || $("#no_jiaozhi").val() == "元"){
			$("#hq_no_result").css("display","block");
			$("#hq_no_result").html("胶纸费不能为0！");
		}
		else if($("#no_final_quotation").val() == "0.00" || $("#no_final_quotation").val() == "¥0.00"){
			$("#hq_no_result").css("display","block");
			$("#hq_no_result").html("最终报价不能为0！");
		}else if($("#text_err").css('display')=='block'){
					alert("请修改红色文字的错误！");
		}else{
			
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
							if(no_piece<12 && $("#quotation_category_id_no").val()!="Stock改色"){
								 $.ajax({
									 url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/hotfix_quotation/find_version_no_1',//通过Ajax取数据的目标页面
									 data:{'no_parities':no_parities},
									 type:'get',//方法，还可以是"post"
									 dataType:'json',//数据类型，还有其它的，详见jQuery手册
									 success:function(loc)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
								     {
									   if(loc>no_version){
										   $("#hq_no_result").css("display","block");
										  $("#hq_no_result").html("版费不可以小于设定值"+loc);
									   }else{
										   $("#hq_no_result").css("display","none");
										   $("#no_submit_value").val('2');
											$("#no_rhinestone_quotation_submit_form").submit();
									   }
									
					 			     }
					             });
								
							}else{
								$("#no_submit_value").val('2');
								$("#no_rhinestone_quotation_submit_form").submit();
							}
							
						}else{
							$("#hq_no_result").css("display","block");
							$("#hq_no_result").html("请上传图片,且名称不包含空格！");
							
						}
					}
			    });
			
		}
	    
    });	
	
	
    $("#add_order").click(function()
	{
		
		var picture_select01 = $("#picture_select01").val();
		var picture_select02 = $("#picture_select02").val();
		var picture_text03 = $("#picture_text03").val();
		var parities = $("#parities").val()
		var piece = $("#piece").val()
		var default_quote_coefficient = $("#default_quote_coefficient").val()
		var c = /^\d+(?=\.{0,1}\d+$|$)/ 
		var b=c.test(default_quote_coefficient);
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
		if($("#hq_customer_code").val()== ""){
			$("#hq_result").css("display","block");
			$("#hq_result").html("客户代码不能为空！");
		}else if($("#hq_customer_name").val()== ""){
			$("#hq_result").css("display","block");
			$("#hq_result").html("客户名不能为空！");
		}
		else if(!isNumber_z($('#hq_beisun').val()) && !isNumber_fp($('#hq_beisun').val()) && $('#hq_beisun').val()!= ''){
			$("#hq_result").css("display","block");
			$("#hq_result").html("备损数量为正整数！");
		}
		else if($("#quotation_category_id").val()== ""){
			$("#hq_result").css("display","block");
			$("#hq_result").html("请选择报价类型！");
		}
		
		else if(($("#picture_text03").val()== "" && $("#picture_text03").is(":visible")) || ($("#picture_text02").val()== "" && $("#picture_text02").is(":visible"))){
			$("#hq_result").css("display","block");
			$("#hq_result").html("报价名称不能为空！");
		}
		else if((($("#picture_select02").val()== "" || $("#picture_select02").val()== "0") && $("#picture_select02").is(":visible")) || ($("#picture_text01").val()== "" && $("#picture_text01").is(":visible"))){
			$("#hq_result").css("display","block");
			$("#hq_result").html("报价编号不能为空！");
		}
		
		else if($("#order_category").val()== ""){
			$("#hq_result").css("display","block");
			$("#hq_result").html("请选择报关品类！");
		}
		
		
		else if($("#inch_w").val()== "" || $("#inch_h").val()== "" || $("#cm_w").val()== "" || $("#cm_h").val()== ""){
			$("#hq_result").css("display","block");
			$("#hq_result").html("尺寸不为空,请填写正确报价名称！");
		}

		else if($("#gummed_paper_1").val()== ""){
			$("#hq_result").css("display","block");
			$("#hq_result").html("请选择胶纸名称！");
		}
		else if(check_arr.indexOf("a")>-1){
			$("#hq_result").css("display","block");
			$("#hq_result").html("请选择公式！");
		}
		else if($("#piece").val()== "" || $("#piece").val() <= 0 || (!isNumber_z($('#piece').val()) && isEmpty($('#piece').val()))){
			$("#hq_result").css("display","block");
			$("#hq_result").html("片数不能为空,且大于0！");
		}
		else if(b==false || default_quote_coefficient<2){
			$("#hq_result").css("display","block");
			$("#hq_result").html("报价系数不能为空,且不小于2！");
		}
		else if($("#hq_customer_name").val()== ""){
			$("#hq_result").css("display","block");
			$("#hq_result").html("客户名不能为空,请填写正确客户代码！");
		}
		else if($("#kongbai").val() == 1 && $("#piece").val()<10){
			$("#hq_result").css("display","block");
			$("#hq_result").html("空白口罩数量不能低于10");
		}
		else if($("#kongbai").val() == 2 && $("#piece").val()<10){
			$("#hq_result").css("display","block");
			$("#hq_result").html("围巾数量不能低于10");
		}
		else if(picture_select01=='3'){
			$("#hq_result").css("display","none");
			if(piece<12){
				$.ajax({
				url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/hotfix_quotation/find_version',//通过Ajax取数据的目标页面
				type:'get',//方法，还可以是"post"
				data:{'picture_select02':picture_select02,'parities':parities},
				dataType:'json',//数据类型，还有其它的，详见jQuery手册
				success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
				{
					if(versions<locals){
						$("#hq_result").css("display","block");
			            $("#hq_result").html("版费不可以小于设定值"+locals);
					}else{
						$("#submit_value").val('1');
						$("#rhinestone_quotation_submit_form").submit();
					}
				}
				});
			}else{
				$("#submit_value").val('1');
				$("#rhinestone_quotation_submit_form").submit();
			}
		
		}else if(picture_select01=='5'){
			if(piece<6){
				 $.ajax({
				  url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/hotfix_quotation/find_version_1',//通过Ajax取数据的目标页面
				  data:{'parities':parities,'picture_text03':picture_text03},
				  type:'get',//方法，还可以是"post"
				  dataType:'json',//数据类型，还有其它的，详见jQuery手册
				  success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
				  {
					if(versions<locals){
						$("#hq_result").css("display","block");
			            $("#hq_result").html("版费不可以小于设定值"+locals);
					}else{
						$("#submit_value").val('1');	
						$("#rhinestone_quotation_submit_form").submit();
					}
				  }
					});
						
					 }else{
						 $("#submit_value").val('1');	
				         $("#rhinestone_quotation_submit_form").submit();
			}
		
				
		}
    });
    $("#no_add_order").click(function(){

		var no_piece = $("#no_piece").val();
		var no_parities = $("#no_parities").val();
		var no_version = $("#no_version").val();
		var no_default_quote_coefficient = $("#no_default_quote_coefficient").val();
		var c = /^\d+(?=\.{0,1}\d+$|$)/ 
		var b=c.test(no_default_quote_coefficient);
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
		
	/*	
		var strCookie=document.cookie;

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
		var versions = $("#no_version").val();no_piece

		if($("#no_customer_num_1").val()== ""){
			$("#hq_no_result").css("display","block");
			$("#hq_no_result").html("客户代码不能为空！");
		}else if($("#no_customer_code").val()== ""){
			$("#hq_no_result").css("display","block");
			$("#hq_no_result").html("客户名不能为空！");
		}
		else if($("#no_name").val()== ""){
			$("#hq_no_result").css("display","block");
			$("#hq_no_result").html("名称不能为空！");
		}
		else if(!isNumber_z($('#hq_no_beisun').val()) && !isNumber_fp($('#hq_no_beisun').val()) && isEmpty($('#hq_no_beisun').val())){
			$("#hq_no_result").css("display","block");
			$("#hq_no_result").html("备损数量为正整数！");
		}
		
		
		else if($("#no_order_category").val()== ""){
			$("#hq_no_result").css("display","block");
			$("#hq_no_result").html("请选择报关品类！");
		}
		
		
		else if($("#no_inch_w").val()== "" || $("#no_inch_h").val()== "" || $("#no_cm_w").val()== "" || $("#no_cm_h").val()== "" || isEmpty($('#no_inch_w').val()) || isEmpty($('#no_inch_h').val()) || isEmpty($('#no_cm_w').val()) || isEmpty($('#no_cm_h').val()) ){
			$("#hq_no_result").css("display","block");
			$("#hq_no_result").html("请填写正确尺寸代码！");
		}
//		else if($("#material_select").val()== "" && $("#picture_text02").val()== "" &&  $("#quotation_category_id_no").val()!="Stock改色"){
//			$("#hq_no_result").css("display","block");
//			$("#hq_no_result").html("请选择材料！");
//		}
		else if(($("#material_info_color").val()== "" && $("#material_info_color").is(":visible")) || ($("#material_info_c_color").val()== "" && $("#material_info_c_color").is(":visible"))){
			$("#hq_no_result").css("display","block");
			$("#hq_no_result").html("请选择颜色！");
		}
		else if(!$(".hq_tableClass02").is(":visible")){
			$("#hq_no_result").css("display","block");
			$("#hq_no_result").html("请添加材料项！");
		}
		else if(check_arr.indexOf("a")>-1){
			
			$("#hq_no_result").css("display","block");
			$("#hq_no_result").html("请选择公式！");
		}
		else if($("#no_gummed_paper_1").val()== ""){
			
			$("#hq_no_result").css("display","block");
			$("#hq_no_result").html("请选择胶纸名称！");
		}

		else if($("#no_piece").val()== "" || $("#no_piece").val() <= 0 || (!isNumber_z($("#no_piece").val()) && isEmpty($("#no_piece").val()))){
			$("#hq_no_result").css("display","block");
			$("#hq_no_result").html("片数不能为空,且大于0！");
		}
		else if(b==false || no_default_quote_coefficient<2){
			$("#hq_no_result").css("display","block");
			$("#hq_no_result").html("报价系数不能为空，且为不小于2的数字！");
		}
		else if($("#no_customer_name").val()== ""){
			$("#hq_no_result").css("display","block");
			$("#hq_no_result").html("客户不能为空,请填写正确客户代码！");
		}
		else if($("#no_jiaozhi").val() == "0元" || $("#no_jiaozhi").val() == "元"){
			$("#hq_no_result").css("display","block");
			$("#hq_no_result").html("胶纸费不能为0！");
		}
		else if($("#no_final_quotation").val() == "0.00" || $("#no_final_quotation").val() == "¥0.00"){
			$("#hq_no_result").css("display","block");
			$("#hq_no_result").html("最终报价不能为0！");
		}else if($("#text_err").css('display')=='block'){
			alert("请修改红色文字的错误！");
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
							if(no_piece<12){
						 $.ajax({
				      url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/hotfix_quotation/find_version_no_1',//通过Ajax取数据的目标页面
				     data:{'no_parities':no_parities},
				     type:'get',//方法，还可以是"post"
				     dataType:'json',//数据类型，还有其它的，详见jQuery手册
				     success:function(loc)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
				   {
					   if(loc>no_version){
						   $("#hq_no_result").css("display","block");
						  $("#hq_no_result").html("版费不可以小于设定值"+loc);
					   }else{
						   $("#hq_no_result").css("display","none");
						   $("#no_submit_value").val('1');
							$("#no_rhinestone_quotation_submit_form").submit();
					   }
					
				   }
					});
								
							}else{
								$("#no_submit_value").val('1');
								$("#no_rhinestone_quotation_submit_form").submit();
							}
							
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
		
		//非空调胶纸计算
		if($("#no_gummed_paper_1").val()!=''){
			no_gummed_paper();
		}
		var no_inch_w = $(this).val();
		var no_inch_h = $("#no_inch_h").val();	
		$.ajax({
			url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/hotfix_quotation/shougongfei',//通过Ajax取数据的目标页面
			type:'get',//方法，还可以是"post"
			data:{'no_inch_w':no_inch_w,'no_inch_h':no_inch_h},
			dataType:'json',//数据类型，还有其它的，详见jQuery手册
			success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
			{			
				var material_name = $("#material_select").val();
				var color = $("#material_info_c_color").val();
				var quantity = $("#material_c_quantity").val();
				var no_piece = $("#no_piece").val();
				var no_parities = $("#no_parities").val();
				var size = $("#material_c_size").val();
				var size_text = $("#material_c_size").find("option:selected").text();
				var no_inch_w = $("#no_inch_w").val();
				var no_inch_h = $("#no_inch_h").val();
				var aaa = $("#no_parities").find("option:selected").text();
				aaa=aaa.split(" ");	
							
				if(no_inch_w!="" && no_inch_h!=""){
						var a=Math.ceil(no_inch_w/19);
						var b=Math.ceil(no_inch_h/19);
						var total_price=(locals*a*b).toFixed(2);
						$("#no_manual_id").val(total_price + "元"); 
				}else{
					$("#no_manual_id").val(locals + "元"); 
				}

				var no_jiaozhi = $("#no_jiaozhi").val();   //获取胶纸费				
				var no_material_price_1 = $("#no_material_price").val();   //获取材料费	
				no_jiaozhi = no_jiaozhi.replace("元","");                     //
				no_material_price_1 = no_material_price_1.replace("元","");       //   过滤掉"元"
			
				if(no_jiaozhi==""){
					var total_price = no_material_price_1 + "+" + total_price;
				}else{
					var total_price = no_material_price_1 + "+" + total_price + "+" + no_jiaozhi; 
				}
				
				total_price = eval('('+total_price+')');  //运算符转化为结果
				total_price = total_price.toFixed(2);   // 保留2位小数
				$("#no_total_price_id").val(total_price + "元");     //
				$("#no_total_price_id_1").val(total_price + "元");	 //  合计
				$("#no_total_price_id_2").val(total_price + "元");	 //	
				var no_coefficient = $("#no_coefficient").val();   //工厂成本系数
				var no_cost_price = total_price + "*" + no_coefficient;  //合计*系数 公式
				no_cost_price = eval('('+no_cost_price+')');
				no_cost_price = no_cost_price.toFixed(2);
				$("#no_cost_price").val(no_cost_price);  //工厂成本
				var no_piece = $("#no_piece").val();  //片数
				var no_default_quote_coefficient = $("#no_default_quote_coefficient").val();  //报价系数
				if(no_default_quote_coefficient == ''){
					no_default_quote_coefficient = 0;
				}
				var no_parities = $("#no_parities").val();  //汇率
				var monolithic_quote = total_price + "*" + no_default_quote_coefficient + "/" + no_parities;   
				monolithic_quote = eval('('+monolithic_quote+')');
				monolithic_quote = monolithic_quote.toFixed(2);
				$("#no_monolithic_quote").val(aaa[0] + monolithic_quote);					
				var final_quotation = monolithic_quote + "*" + no_piece;   //最终报价公式
				var no_version = $("#no_version").val();
				final_quotation = eval('('+final_quotation+ "+" + no_version+')');
				final_quotation = final_quotation.toFixed(2);
				$("#no_final_quotation").val(aaa[0] + final_quotation);  //最终报价				
			
/*				var no_manual_id = $("#no_manual_id").val();
				if(no_manual_id == ""){
					$("#no_manual_id").val("0元"); 
				}else{
					no_manual_id = no_manual_id.replace("元","");
					$("#no_manual_id").val(no_manual_id + "元"); 
				}*/
			}
		});
		var cm_w = $(this).val() * 2.54;
		if(cm_w != ''){
			cm_w = cm_w.toFixed(2);
		}
		$("#no_cm_w").val(cm_w);
		if($("#no_inch_h").val() != '' && $("#no_inch_h").val() != 0){
			$("#no_gummed_paper_1").removeAttr("disabled");
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
		//非空调胶纸计算
		if($("#no_gummed_paper_1").val()!=''){
			no_gummed_paper();
		}
		var no_inch_w = $("#no_inch_w").val();
		var no_inch_h = $(this).val();
		$.ajax({
			url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/hotfix_quotation/shougongfei',//通过Ajax取数据的目标页面
			type:'get',//方法，还可以是"post"
			data:{'no_inch_w':no_inch_w,'no_inch_h':no_inch_h},
			dataType:'json',//数据类型，还有其它的，详见jQuery手册
			success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
			{	
				var material_name = $("#material_select").val();
				var color = $("#material_info_c_color").val();
				var quantity = $("#material_c_quantity").val();
				var no_piece = $("#no_piece").val();
				var no_parities = $("#no_parities").val();
				var size = $("#material_c_size").val();
				var size_text = $("#material_c_size").find("option:selected").text();
				var no_inch_w = $("#no_inch_w").val();
				var no_inch_h = $("#no_inch_h").val();
				var aaa = $("#no_parities").find("option:selected").text();
				aaa=aaa.split(" ");	
							
				if(no_inch_w!="" && no_inch_h!=""){
						var a=Math.ceil(no_inch_w/19);
						var b=Math.ceil(no_inch_h/19);
						var total_price=(locals*a*b).toFixed(2);
						$("#no_manual_id").val(total_price + "元"); 
				}else{
					$("#no_manual_id").val(locals + "元"); 
				}
				
				
				
				var no_jiaozhi = $("#no_jiaozhi").val();   //获取胶纸费				
				var no_material_price_1 = $("#no_material_price").val();   //获取材料费	
				no_jiaozhi = no_jiaozhi.replace("元","");                     //
				no_material_price_1 = no_material_price_1.replace("元","");       //   过滤掉"元"
			
				if(no_jiaozhi==""){
					var total_price = no_material_price_1 + "+" + total_price;
				}else{
					var total_price = no_material_price_1 + "+" + total_price + "+" + no_jiaozhi; 
				}
				
				total_price = eval('('+total_price+')');  //运算符转化为结果
				total_price = total_price.toFixed(2);   // 保留2位小数
				$("#no_total_price_id").val(total_price + "元");     //
				$("#no_total_price_id_1").val(total_price + "元");	 //  合计
				$("#no_total_price_id_2").val(total_price + "元");	 //	
				var no_coefficient = $("#no_coefficient").val();   //工厂成本系数
				var no_cost_price = total_price + "*" + no_coefficient;  //合计*系数 公式
				no_cost_price = eval('('+no_cost_price+')');
				no_cost_price = no_cost_price.toFixed(2);
				$("#no_cost_price").val(no_cost_price);  //工厂成本
				var no_piece = $("#no_piece").val();  //片数
				var no_default_quote_coefficient = $("#no_default_quote_coefficient").val();  //报价系数
				if(no_default_quote_coefficient == ''){
					no_default_quote_coefficient = 0;
				}
				var no_parities = $("#no_parities").val();  //汇率
				var monolithic_quote = total_price + "*" + no_default_quote_coefficient + "/" + no_parities;   
				monolithic_quote = eval('('+monolithic_quote+')');
				monolithic_quote = monolithic_quote.toFixed(2);
				$("#no_monolithic_quote").val(aaa[0] + monolithic_quote);					
				var final_quotation = monolithic_quote + "*" + no_piece;   //最终报价公式
				var no_version = $("#no_version").val();
				final_quotation = eval('('+final_quotation+ "+" + no_version+')');
				final_quotation = final_quotation.toFixed(2);
				$("#no_final_quotation").val(aaa[0] + final_quotation);  //最终报价				
							
/*				var no_manual_id = $("#no_manual_id").val();
				if(no_manual_id == ""){
					$("#no_manual_id").val("0元"); 
				}else{
					no_manual_id = no_manual_id.replace("元","");
					$("#no_manual_id").val(no_manual_id + "元"); 
				}*/
			}
		});
		var cm_h = $(this).val() * 2.54;
		if(cm_h != ''){
			cm_h = cm_h.toFixed(2);
		}
		
		$("#no_cm_h").val(cm_h);
		if($("#no_inch_w").val() != '' && $("#no_inch_w").val() != 0){
			$("#no_gummed_paper_1").removeAttr("disabled");
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
		//非空调胶纸计算
		if($("#no_gummed_paper_1").val()!=''){
			no_gummed_paper();
		}
		//alert($(this).val());
		var inch_w = $(this).val() / 2.54;
		
		if(inch_w != ''){
			inch_w = inch_w.toFixed(2);
		}
		
		$("#no_inch_w").val(inch_w);
		if($("#no_inch_h").val() != '' && $("#no_inch_h").val() != 0){
			$("#no_gummed_paper_1").removeAttr("disabled");
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
		//非空调胶纸计算
		if($("#no_gummed_paper_1").val()!=''){
			no_gummed_paper();
		}
		//alert($(this).val());
		var inch_h = $(this).val() / 2.54;
		if(inch_h != ''){
			inch_h = inch_h.toFixed(2);
		}
		$("#no_inch_h").val(inch_h);
		if($("#no_inch_w").val() != '' && $("#no_inch_w").val() != 0){
			$("#no_gummed_paper_1").removeAttr("disabled");
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
	$("#sIE_size01").change(function (){
		var s01 = $("#sIE_size01").val();
		//alert(s01);
		if(s01 == 1){
			//alert('1');
			//$("#sIE_size02?option[value='1']").attr("selected",?"selected");
			$("#sIE_size02").find("option[value='1']").attr("selected",true);
		}
		if(s01 == 2){
			//alert('2');
			//$("#sIE_size02?option[value='2']").attr("selected",?"selected");
			$("#sIE_size02").find("option[value='2']").attr("selected",true);
		}
		
	});
	
	$("#sIE_size02").change(function (){
		var s02 = $("#sIE_size02").val();
		//$("#sIE_size01?option[value='1']").attr("selected",?"selected");
		if(s02 == 1){
			//$("#sIE_size01?option[value='1']").attr("selected",?"selected");
			$("#sIE_size01").find("option[value='1']").attr("selected",true);
		}
		if(s02 == 2){
			//$("#sIE_size01?option[value='2']").attr("selected",?"selected");
			$("#sIE_size01").find("option[value='2']").attr("selected",true);
		}
	});
	
	var row_number = 0 ;
	$("#insert_material1").click(function (){
		var material_name = $("#material_select").val();
		var size_width = $("#size_inch_width").val();
		var size_height = $("#size_inch_height").val();
		var color = $("#material_info_color").val();
		var quantity = $("#material_quantity").val();
		var s01 = $("#sIE_size01").val();
		var size = size_width+"*"+size_height;
	    var aaa = $("#no_parities").find("option:selected").text();
	    aaa=aaa.split(" ");	
			
		var m_unit = '';
		if(s01 == '1'){
			m_unit = 'inch';
		}
		if(s01 == '2'){
			m_unit = 'cm';
		}
		
		var no_cm_w = $("#no_cm_w").val();
		var no_cm_h = $("#no_cm_h").val();	
		var no_inch_w = $("#no_inch_w").val();
		var no_inch_h = $("#no_inch_h").val();	
		if($("#material_quantity").val()!="" && $("#size_width").val()!="" && $("#size_height").val()!=""){
		
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
				var table_value = "<tr class='hq_tableClass02'> <td>"+material_name+"<input type='hidden' id='row_number' value='"+row_number+"' /><input type='hidden' id=sss_materialformula"+locals[0]+" value='"+locals[4]+"' /><input type='hidden' name='materials["+row_number+"][material_name]' value='"+material_name+"' /></td> <td>"+color+"<input type='hidden' name='materials["+row_number+"][color]' value='"+color+"' /></td> <td id=w_h_id"+locals[0]+">"+size_width+"*"+size_height+" inch "+m_unit+"<input type='hidden' name='materials["+row_number+"][size_width]' value='"+size_width+"' /><input type='hidden' name='materials["+row_number+"][size_height]' value='"+size_height+"' /><input type='hidden' name='materials["+row_number+"][size]' value='"+size+"' /><input type='hidden' name='materials["+row_number+"][m_unit]' value='"+m_unit+"' /></td> <td>"+quantity+"<input type='hidden' name='materials["+row_number+"][quantity]' value='"+quantity+"' /></td><td id=no_price_a"+locals[0]+">"+locals[1]+"元</td><td onClick='getDel(this,"+locals[0]+")'><a href='#'>删除</a></td></tr>";
				$("#material_table").append(table_value);   //为table追加一个tr(下拉项)
				
				var no_manual_id = $("#no_manual_id").val();
				
				//var no_manual_price = no_manual_id + "+" + locals[3];
				
				no_manual_id = no_manual_id.replace("元","");
				locals[3] = locals[3].replace("元","");
				
				total_price = eval('('+no_manual_id + "+" + locals[3]+')');
				//if(no_inch_w=="" && no_inch_h==""){
					//$("#no_manual_id").val(total_price + "元"); 
				//}else if(no_cm_w!="" && no_cm_h!=""){
					//var a=Math.ceil(no_inch_w/19);
					//var b=Math.ceil(no_inch_h/19);
					//total_price_1=(total_price*a*b).toFixed(2)
					$("#no_manual_id").val(total_price + "元"); 
				//}
				
				 //无设计手工费
				
				var no_jiaozhi = $("#no_jiaozhi").val();   //获取胶纸费				
				var no_material_price_1 = $("#no_material_price").val();   //获取材料费	
				
				if(no_material_price_1 == ""){
					var aaaa = 0 + "+" + locals[1];
					bbb = eval('('+aaaa+')');  //运算符转化为结果
					bbb = bbb.toFixed(2); 
					$("#no_material_price").val(bbb + "元");
				}else{
					no_material_price_1 = no_material_price_1.replace("元","");
					var aaaa = no_material_price_1 + "+" + locals[1];
					bbb = eval('('+aaaa+')');  //运算符转化为结果
					bbb = bbb.toFixed(2); 
					$("#no_material_price").val(bbb + "元");					
				}
				
				no_jiaozhi = no_jiaozhi.replace("元","");                     //
				no_material_price_1 = no_material_price_1.replace("元","");       //   过滤掉"元"
				//no_manual_id = no_manual_id.replace("元","");                   // 
				
			    if(no_jiaozhi==""){
				    var total_price = bbb + "+" + total_price;
			    }else{
				    var total_price = bbb + "+" + total_price + "+" + no_jiaozhi; 
			    }
			    total_price = eval('('+total_price+')');  //运算符转化为结果
			    total_price = total_price.toFixed(2);   // 保留2位小数
			    $("#no_total_price_id").val(total_price + "元");     //
			    $("#no_total_price_id_1").val(total_price + "元");	 //  合计
			    $("#no_total_price_id_2").val(total_price + "元");	 //	
				
			    var no_coefficient = $("#no_coefficient").val();   //工厂成本系数
			    var no_cost_price = total_price + "*" + no_coefficient;  //合计*系数 公式
			    no_cost_price = eval('('+no_cost_price+')');
			    no_cost_price = no_cost_price.toFixed(2);
			    $("#no_cost_price").val(no_cost_price);  //工厂成本
				
			    var no_piece = $("#no_piece").val();  //片数
			    var no_default_quote_coefficient = $("#no_default_quote_coefficient").val();  //报价系数
				if(no_default_quote_coefficient == ''){
					no_default_quote_coefficient = 0;
				}
			    var no_parities = $("#no_parities").val();  //汇率
			    var final_quotation = total_price + "*" + no_piece + "*" + no_default_quote_coefficient + "/" + no_parities;   //最终报价公式
				
				var no_version = $("#no_version").val();
			    final_quotation = eval('('+final_quotation+ "+" + no_version+')');
			    final_quotation = final_quotation.toFixed(2);
			    $("#no_final_quotation").val(aaa[0] + final_quotation);  //最终报价	
				
				var monolithic_quote = final_quotation + "/" + no_piece;   
				monolithic_quote = eval('('+monolithic_quote+')');
				monolithic_quote = monolithic_quote.toFixed(2);
				$("#no_monolithic_quote").val(aaa[0] + monolithic_quote);	
				
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
	
	$("#insert_material2").click(function (){
	
		var material_name = $("#material_select").val();
		var color = $("#material_info_c_color").val();
		var quantity = $("#material_c_quantity").val();
		var no_piece = $("#no_piece").val();
		var no_parities = $("#no_parities").val();
		var size = $("#material_c_size").val();
		var size_text = $("#material_c_size").find("option:selected").text();
		var no_inch_w = $("#no_inch_w").val();
		var no_inch_h = $("#no_inch_h").val();
		var aaa = $("#no_parities").find("option:selected").text();
		aaa=aaa.split(" ");			
		
		if($("#material_c_quantity").val()!=""){
		
			$.ajax({
				url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/insert_table_quotation_sheet_material',//通过Ajax取数据的目标页面
				type:'get',//方法，还可以是"post"
				data:{'material_name':material_name,'material_color':color,'material_size':size,'material_quantity':quantity},
				dataType:'json',//数据类型，还有其它的，详见jQuery手册
				success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
				{	
					if(locals != 0){
					    locals=locals.split("|");
					    var no_material_price = $("#no_material_price").val();
						if(no_material_price=="" || no_material_price=="0.00元"){
							$("#no_material_price").val(locals[1]);	
						}else{
							var no_material_price_a = locals[1];
							no_material_price_a = no_material_price_a.replace("元","");
							no_material_price = no_material_price.replace("元","");
							var no_material_price_b = no_material_price_a + "+" + no_material_price;
							total_price = eval('('+no_material_price_b+')');
							total_price = total_price.toFixed(4);
							
							$("#no_material_price").val(total_price + "元");	
						}				
					
					    var table_value = "<tr class='hq_tableClass02'> <td>"+material_name+"<input type='hidden' id='row_number' value='"+row_number+"' /><input type='hidden' name='materials["+row_number+"][material_name]' value='"+material_name+"' /></td> <td>"+color+"<input type='hidden' name='materials["+row_number+"][color]' value='"+color+"' /></td> <td>"+size_text+"<input type='hidden' name='materials["+row_number+"][size]' value='"+size+"' /></td> <td>"+quantity+"<input type='hidden' name='materials["+row_number+"][quantity]' value='"+quantity+"' /></td><td id=no_price_a"+locals[0]+">"+locals[1]+"</td><td onClick='getDel(this,"+locals[0]+")'><a href='#'>删除</a></td></tr>";
					    $("#material_table").append(table_value);   //为table追加一个tr(下拉项)
					    var no_manual_id = $("#no_manual_id").val(); //获取当前手工费
					    no_manual_id = no_manual_id.replace("元","");
					    locals[3] = locals[3].replace("元","");
					    total_price =locals[6]; //手工费叠加
					    if(no_inch_w!='' && no_inch_h!=''){
					        var a=Math.ceil(no_inch_w/19);
					        var b=Math.ceil(no_inch_h/19);
					        total_price=(total_price*a*b).toFixed(2);
					        $("#no_manual_id").val(total_price + "元"); 
					    }else{
					        $("#no_manual_id").val(total_price + "元"); 
					    }

					 //无设计手工费
					    var no_jiaozhi = $("#no_jiaozhi").val();   //获取胶纸费				
					    var no_material_price_1 = $("#no_material_price").val();   //获取材料费	
					    no_jiaozhi = no_jiaozhi.replace("元","");                     //
					    no_material_price_1 = no_material_price_1.replace("元","");       //   过滤掉"元"
					
					    if(no_jiaozhi==""){
						    var total_price = no_material_price_1 + "+" + total_price;
					    }else{
						    var total_price = no_material_price_1 + "+" + total_price + "+" + no_jiaozhi; 
					    }
						
						total_price = eval('('+total_price+')');  //运算符转化为结果
						total_price = total_price.toFixed(2);   // 保留2位小数
						$("#no_total_price_id").val(total_price + "元");     //
						$("#no_total_price_id_1").val(total_price + "元");	 //  合计
						$("#no_total_price_id_2").val(total_price + "元");	 //	
						var no_coefficient = $("#no_coefficient").val();   //工厂成本系数
						var no_cost_price = total_price + "*" + no_coefficient;  //合计*系数 公式
						no_cost_price = eval('('+no_cost_price+')');
						no_cost_price = no_cost_price.toFixed(2);
						$("#no_cost_price").val(no_cost_price);  //工厂成本
						var no_piece = $("#no_piece").val();  //片数
						var no_default_quote_coefficient = $("#no_default_quote_coefficient").val();  //报价系数
						if(no_default_quote_coefficient == ''){
							no_default_quote_coefficient = 0;
						}
						var no_parities = $("#no_parities").val();  //汇率
						var monolithic_quote = total_price + "*" + no_default_quote_coefficient + "/" + no_parities;   
						monolithic_quote = eval('('+monolithic_quote+')');
						monolithic_quote = monolithic_quote.toFixed(2);
						$("#no_monolithic_quote").val(aaa[0] + monolithic_quote);					
						var final_quotation = monolithic_quote + "*" + no_piece;   //最终报价公式
						var no_version = $("#no_version").val();
						final_quotation = eval('('+final_quotation+ "+" + no_version+')');
						final_quotation = final_quotation.toFixed(2);
						$("#no_final_quotation").val(aaa[0] + final_quotation);  //最终报价
						var quotation_category_id_no = $("#quotation_category_id_no").val();
						if(quotation_category_id_no!="Stock改色"){
							if(no_piece<12){
								 $.ajax({
									 url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/hotfix_quotation/find_version_no',//通过Ajax取数据的目标页面
									 type:'get',//方法，还可以是"post"
									 data:{'no_parities':no_parities,'count':locals[5],'no_piece':no_piece},
									 dataType:'json',//数据类型，还有其它的，详见jQuery手册
									 success:function(loc)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
									 {
										 $("#no_version").val(loc);
			
										 final_quotation = eval('('+monolithic_quote + "*" + no_piece+ "+" + loc+')');
										 final_quotation = final_quotation.toFixed(2);
										 $("#no_final_quotation").val(aaa[0] + final_quotation);  //
									  }
								  });
							}
						}
						
						
						//判断口罩材料。自动变更报关类型
						if(material_name == 'KN95'){
							//KN95口罩
							$("#no_order_category").val(12);
						}else if(material_name == 'Mask'){
							//钻图口罩
							$("#no_order_category").val(13);
						}else if(material_name == 'Blank Mask'){
							//空白口罩
							$("#no_order_category").val(13);
						}else if(material_name == 'Multifunctional Neckerchief--Nylon'){
							//多功能围巾
							$("#no_order_category").val(14);
						}else{}
						
						
						
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

	
	//添加输入的材料
	$("#insert_materials_by_hand").click(function (){
		var str	=	$("#add_materials_by_hand").val();
		$("#text_err").html('');
		$("#text_err").css('display','none');
		if(str==''){
			alert("请输入材料信息！");
		}else{
			$.ajax({
				url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/insert_materials_of_hotfix',
				data:{'all_materials':str},
				type:'post',
				dataType:'json',
				success: function(data){
					if(data.err==1){
						$("#text_err").css('display','block');
						$("#text_err").html(data.text);	return;
					}else if(data.err==2){
						alert(data.text);
						$('#add_materials_by_hand').val();
						$('#add_materials_by_hand').val(data.item.replace(/_/g,"\n"));
						return;
					}else if(data.err==0){
						var material_len	=	data.arr_materials.length;
						if(material_len>0){
							for(var i=0;i<material_len;i++){
								var table_value = "<tr class='hq_tableClass02'> <td>"+data.arr_materials[i].material_name+"</td> <td >"+data.arr_materials[i].material_size+" </td> <td>"+data.arr_materials[i].material_color+"</td>  <td>"+data.arr_materials[i].material_quantity+"</td><td id=no_price_a"+data.arr_materials[i].id+">"+data.arr_materials[i].material_total_price+"元</td><td onClick='getDel(this,"+data.arr_materials[i].id+")'><a href='#'>删除</a></td></tr>";
								$("#material_table").append(table_value);
								row_number++; 
							}
							var no_inch_w = $("#no_inch_w").val();
							var no_inch_h = $("#no_inch_h").val();
							total_price =data.all_gong_price; //所有材料和等于手工费
							
							//无设计手工费
							if(no_inch_w!='' && no_inch_h!=''){
								var a=Math.ceil(no_inch_w/19);
								var b=Math.ceil(no_inch_h/19);
								total_price=(total_price*a*b).toFixed(2);
								$("#no_manual_id").val(total_price + "元"); 
							}else{
								$("#no_manual_id").val(total_price + "元"); 
							}
							
							var no_jiaozhi = $("#no_jiaozhi").val();   //获取胶纸费				
							no_jiaozhi = no_jiaozhi.replace("元","");  //   过滤掉"元"
							
							//获取材料费
							no_material_price_1	=data.all_material_price;	
							//no_material_price_1 =no_material_price_1.toFixed(2);
							$("#no_material_price").val(no_material_price_1+"元");
							if(no_jiaozhi==""){
								var total_price = no_material_price_1 + "+" + total_price;
							}else{
								var total_price = no_material_price_1 + "+" + total_price + "+" + no_jiaozhi; 
							}
							total_price = eval('('+total_price+')');  //运算符转化为结果
							total_price = total_price.toFixed(2);   // 保留2位小数
							$("#no_total_price_id").val(total_price + "元");     //
							$("#no_total_price_id_1").val(total_price + "元");	 //  合计
							$("#no_total_price_id_2").val(total_price + "元");	 //	
							var no_coefficient = $("#no_coefficient").val();   //工厂成本系数
							var no_cost_price = total_price + "*" + no_coefficient;  //合计*系数 公式
							no_cost_price = eval('('+no_cost_price+')');
							no_cost_price = no_cost_price.toFixed(2);
							$("#no_cost_price").val(no_cost_price);  //工厂成本
							var no_piece = $("#no_piece").val();  //片数
							var no_default_quote_coefficient = $("#no_default_quote_coefficient").val();  //报价系数
							if(no_default_quote_coefficient == ''){
								no_default_quote_coefficient = 0;
							}
							var no_parities = $("#no_parities").val();  //汇率
							var monolithic_quote = total_price + "*" + no_default_quote_coefficient + "/" + no_parities;   
							monolithic_quote = eval('('+monolithic_quote+')');
							monolithic_quote = monolithic_quote.toFixed(2);
							var aaa = $("#no_parities").find("option:selected").text();//汇率文字
							aaa=aaa.split(" ");	
							$("#no_monolithic_quote").val(aaa[0] + monolithic_quote);					
							var final_quotation = monolithic_quote + "*" + no_piece;   //最终报价公式
							var no_version = $("#no_version").val();
							final_quotation = eval('('+final_quotation+ "+" + no_version+')');
							final_quotation = final_quotation.toFixed(2);
							$("#no_final_quotation").val(aaa[0] + final_quotation);  //最终报价
							var quotation_category_id_no = $("#quotation_category_id_no").val();
							if(quotation_category_id_no!="Stock改色"){
								if(no_piece<12){
									 $.ajax({
										 url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/hotfix_quotation/find_version_no',//通过Ajax取数据的目标页面
										 type:'get',//方法，还可以是"post"
										 data:{'no_parities':no_parities,'count':locals[5],'no_piece':no_piece},
										 dataType:'json',//数据类型，还有其它的，详见jQuery手册
										 success:function(loc)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
										 {
											 $("#no_version").val(loc);
											 final_quotation = eval('('+monolithic_quote + "*" + no_piece+ "+" + loc+')');
											 final_quotation = final_quotation.toFixed(2);
											 $("#no_final_quotation").val(aaa[0] + final_quotation);  //
										  }
									 });
								}
							}
						}
						
						$('#add_materials_by_hand').val();
						$('#add_materials_by_hand').val(data.item.replace(/_/g,"\n"));
					}		
				}	
			});
				
		}	
		
	});
	
	
});


function beisun_change(){
	if($("#hq_beisun").val()!= '' && $("#hq_beisun").val()!= 0){
		$("#hq_beisun_error").css("display","block");
	}else{
		$("#hq_beisun_error").css("display","none");
	}
}
function no_beisun_change(){
	if($("#hq_no_beisun").val()!= '' && $("#hq_no_beisun").val()!= 0){
		$("#hq_no_beisun_error").css("display","block");
	}else{
		$("#hq_no_beisun_error").css("display","none");
	}
}

function getDel(k,row){
   $(document).ready(function(){
	var quotation_category_id_no = $("#quotation_category_id_no").val();
    var no_price_a = $("#no_price_a" + row).text();    //    当条材料价钱			
	var no_material_price = $("#no_material_price").val();    //   材料费 
	var no_manual_id = $("#no_manual_id").val();    //   当前手工费
   	var no_total_price_id = $("#no_total_price_id_2").val();    //   当前合计
	var no_coefficient = $("#no_coefficient").val();    //   当前成本系数
	var no_piece = $("#no_piece").val();    //   当前片数
	var no_default_quote_coefficient = $("#no_default_quote_coefficient").val();    //   报价系数
	if(no_default_quote_coefficient == ''){
		no_default_quote_coefficient = 0;
	}
	var no_inch_w = $("#no_inch_w").val();   
	var no_inch_h = $("#no_inch_h").val();  
	var no_parities = $("#no_parities").val();   //   汇率
	var aaa = $("#no_parities").find("option:selected").text();
	aaa=aaa.split(" ");	
	if(quotation_category_id_no!='Stock改色'){	
			  $.ajax({
					  url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/delete_table_quotation_sheet_material',//通过Ajax取数据的目标页面
					  type:'get',//方法，还可以是"post"
					  data:{'id':row},
					  dataType:'json',//数据类型，还有其它的，详见jQuery手册
					  success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
					  {
						  locals=locals.split("|");
						  
							  $.ajax({
								   url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/hotfix_quotation/find_version_no_1',//通过Ajax取数据的目标页面
								   type:'get',//方法，还可以是"post"
								   data:{'no_parities':no_parities,'no_piece':no_piece},
								   dataType:'json',//数据类型，还有其它的，详见jQuery手册
								   success:function(loc)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
								   {
										if(no_piece<12){
											$("#no_version").val(loc);
											var version = loc;	
										}else{
											$("#no_version").val('0');
											var version = 0;
										}
										no_price_a = no_price_a.replace("元","");
										no_material_price = no_material_price.replace("元","");
										var total_price = no_material_price + "-" + no_price_a;  //删除后材料价钱 
										total_price = eval('('+total_price+')');
										total_price = total_price.toFixed(2);
										$("#no_material_price").val(total_price + "元");
						
										no_manual_id = no_manual_id.replace("元","");
										if(locals[0]==""){
											locals[0] = '0';
										}
										var no_manual_id_a = no_manual_id + "-" + locals[0];  //删除后手工费价钱
										no_manual_id_a = eval('('+no_manual_id_a+')');
					
										 if(no_inch_w!="" && no_inch_h!=""){
											var a=Math.ceil(no_inch_w/19);
											var b=Math.ceil(no_inch_h/19);						
											total_price_1=(locals[1]*a*b).toFixed(2);
											$("#no_manual_id").val(total_price_1 + "元"); 
										 
										 }else{
											$("#no_manual_id").val(locals[1] + "元");
										 }
									
									//$("#no_manual_id").val(no_manual_id_a + "元");
										  no_total_price_id = no_total_price_id.replace("元","");
										  var no_total_price_id_a = no_total_price_id + "-" + locals[0] + "-" + no_price_a;    //删除后 合计				
										  no_total_price_id_a = eval('('+no_total_price_id_a+')');
										  no_total_price_id_a = no_total_price_id_a.toFixed(2);
										  $("#no_total_price_id").val(no_total_price_id_a + "元");	
										  $("#no_total_price_id_1").val(no_total_price_id_a + "元");	
										  $("#no_total_price_id_2").val(no_total_price_id_a + "元");	
										  
										  var no_coefficient_a = no_total_price_id_a + "*" + no_coefficient;    //   工厂成本
										  no_coefficient_a = eval('('+no_coefficient_a+')');
										  no_coefficient_a = no_coefficient_a.toFixed(2);				
										  $("#no_cost_price").val(no_coefficient_a + "元");
										  
										  var monolithic_quote = no_total_price_id_a + "*" + no_default_quote_coefficient + "/" + no_parities;   
										  monolithic_quote = eval('('+monolithic_quote+')');
										  monolithic_quote = monolithic_quote.toFixed(2);
										  $("#no_monolithic_quote").val(aaa[0] + monolithic_quote);				
										  
										  var no_final_quotation = monolithic_quote + "*" + no_piece;
										  no_final_quotation = eval('('+no_final_quotation+ "+" +loc+')');
										  no_final_quotation = no_final_quotation.toFixed(2);	
										  
										  $("#no_final_quotation").val(aaa[0] + no_final_quotation);	
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
						  
						   var no_inch_w=$("#no_inch_w").val();
						   var no_inch_h=$("#no_inch_h").val();
					
						   locals=locals.split("|");	
						 
						   var a=Math.ceil(no_inch_w/19);
						   var b=Math.ceil(no_inch_h/19);
						   manual=locals[1]*a*b;
						   manual=manual.toFixed(2);
						   $("#no_manual_id").val(manual + "元");
						   $("#no_material_price").val(locals[0] + "元");
						   var jiaozhi = $("#no_jiaozhi").val();
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
						  var price = eval('('+manual + "+" + locals[0] + "+" + jiaozhi+')').toFixed(2); 
						  
						  
						 var chengben=eval('('+price + "*" + no_coefficient + ')').toFixed(2);
						 var total_price=eval('('+price + "*" + no_default_quote_coefficient + ')').toFixed(2);
						 var total=eval('('+total_price + "*" + no_piece + ')').toFixed(2);
						 $("#no_total_price_id_2").val(price+"元");//合计
						 $("#no_cost_price").val(chengben);//成本
						 $("#no_monolithic_quote").val("¥"+total_price);//单片报价
						 $("#no_final_quotation").val("¥"+total);//单片报价	
							  
						 
					  }
		  });
	 }
     $(k).parent().remove(); 
	//$("#material_table1").$(k).remove();
	});
}


function sIE_size01(n){
	
	if(n==1){
		g('sIE_size02').value=1;
	}else{
		g('sIE_size02').value=2;
	}
}
function sIE_size02(n){
	if(n==1){
		g('sIE_size01').value=1;
	}else{
		g('sIE_size01').value=2;
	}
}

function uploadok(event, queueId, fileObj, response, data){
	//alert('aaa');
}

</script> 
<!-- {/literal} -->