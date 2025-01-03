<?php /* Smarty version 2.6.22, created on 2023-03-16 15:30:35
         compiled from newcustomer/edit.html */ ?>
<div class="pageContent">
<div class="tabs" currentIndex="0" eventType="click">
  <div class="tabsHeader">
    <div class="tabsHeaderContent">
      <ul>
        <li><a href="javascript:;"><span>基本信息</span></a></li>
        <li><a href="javascript:;"><span>详细信息</span></a></li>
        <li><a href="javascript:;"><span>其它信息</span></a></li>
      </ul>
    </div>
  </div>
  <form method="post" id="newcustomer_edit" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, navTabAjaxDone)">
    <div class="tabsContent" layoutH="70">
      <div>
      <input type="hidden" name="customer_id" id="customer_id_newcustomer_edit" value="<?php echo $this->_tpl_vars['newcustomer']['id']; ?>
" />
        <div class="pageFormContent">
          <div class="unit">
            <label>询盘日期：</label>
            <input type="text" name="quote_time" datefmt="yyyy-MM-dd HH:mm:ss" id="quote_time_new" style="width:180px" value="<?php echo $this->_tpl_vars['newcustomer']['quote_time_c']; ?>
" class="date textInput readonly valid combox required" readonly="true" />
             </div>
          <div class="divider">divider</div>
          <div class="unit">
            <label>询盘来源：</label>
           <!-- <?php $_from = $this->_tpl_vars['quotefromlist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['qf']):
?>
            	<?php if ($this->_tpl_vars['quote_info']['quotefrom_id'] == $this->_tpl_vars['qf']['id']): ?>
                <input type="text" style="width:100px;" name="quotefrom_id" value="<?php echo $this->_tpl_vars['quote_info']['quotefrom_name']; ?>
" readonly="readonly" />
                <?php endif; ?>
            <?php endforeach; endif; unset($_from); ?>-->
            
             <?php if ($this->_tpl_vars['newcustomer']['quotefrom_id'] == ''): ?>
            <select class="combox required" name="quotefrom_id" id="quotefrom_id_new" >
              <option value="">请选择询盘来源</option>
              <?php $_from = $this->_tpl_vars['quotefromlist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['qf']):
?> <option value="<?php echo $this->_tpl_vars['qf']['id']; ?>
" <?php if ($this->_tpl_vars['newcustomer']['quotefrom_id'] == $this->_tpl_vars['qf']['id']): ?> selected="selected" <?php endif; ?> ><?php echo $this->_tpl_vars['qf']['quotefrom_name']; ?>

              </option>
              <?php endforeach; endif; unset($_from); ?>
            </select>
            <?php else: ?>
            <?php $_from = $this->_tpl_vars['quotefromlist1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['qfl']):
?>
            <?php if ($this->_tpl_vars['newcustomer']['quotefrom_id'] == $this->_tpl_vars['qfl']['id']): ?>
            <input type="text"  readonly="readonly" value="<?php echo $this->_tpl_vars['qfl']['quotefrom_name']; ?>
"  />
            <input type="hidden" name="" readonly="readonly" id="quotefrom_id_new" value="<?php echo $this->_tpl_vars['qfl']['id']; ?>
"  />
            <?php endif; ?>
            <?php endforeach; endif; unset($_from); ?>
            <?php endif; ?>
            
            <?php if ($this->_tpl_vars['newcustomer']['quotefrom_id'] == 6 || $this->_tpl_vars['newcustomer']['quotefrom_id'] == 16 || $this->_tpl_vars['newcustomer']['quotefrom_id'] == 23): ?>
                <div id="rfq" style="float:left;">
                <input type="radio" name="ali_project_name" value="RFQ" style="margin-left:20px;"  <?php if ($this->_tpl_vars['newcustomer']['project_name'] == 'RFQ'): ?> checked="checked" <?php endif; ?> />RFQ
                <input type="radio" name="ali_project_name" value="潜在客户" style="margin-left:20px;"  <?php if ($this->_tpl_vars['newcustomer']['project_name'] == '潜在客户'): ?> checked="checked" <?php endif; ?> />潜在客户
                <input type="radio" name="ali_project_name" value="啦啦产品" style="margin-left:20px;"  <?php if ($this->_tpl_vars['newcustomer']['project_name'] == '啦啦产品'): ?> checked="checked" <?php endif; ?> />啦啦产品
                </div>
            <?php elseif ($this->_tpl_vars['newcustomer']['quotefrom_id'] == 18): ?>
            	<div id="jiemao_type" style="float:left;">
                    <select class="required combox" name="jiemao_quotefrom" id="jiemao_quotefrom" svalue="" >
                      <option value="">请选择询盘方式</option>
                      <option value="盒子定制" <?php if ($this->_tpl_vars['newcustomer']['project_name'] == '盒子定制'): ?> selected="selected" <?php endif; ?>>盒子定制</option>
                      <option value="询价注册" <?php if ($this->_tpl_vars['newcustomer']['project_name'] == '询价注册'): ?> selected="selected" <?php endif; ?>>询价注册</option>
                      <option value="联系我们" <?php if ($this->_tpl_vars['newcustomer']['project_name'] == '联系我们'): ?> selected="selected" <?php endif; ?>>联系我们</option>
                      <option value="免费样品" <?php if ($this->_tpl_vars['newcustomer']['project_name'] == '免费样品'): ?> selected="selected" <?php endif; ?>>免费样品</option>
                      <option value="咨询申请" <?php if ($this->_tpl_vars['newcustomer']['project_name'] == '咨询申请'): ?> selected="selected" <?php endif; ?>>咨询申请</option>
                      </option>
                    </select>
                </div>
            <?php endif; ?>
            
           <!-- <span id="quotefrom_id_result_newcustomer_edit" class="error" style="display:none;"></span>
            <input name="customer_code" id="customer_code_new" style="display:none;" value="<?php echo $this->_tpl_vars['newcustomer']['customer_code']; ?>
" readonly="readonly" />-->
           <!-- <input name="customer_code" id="customer_code" value="<?php echo $this->_tpl_vars['newcustomer']['customer_code']; ?>
" readonly="readonly" />-->
            <!--<select id="customer_code" name="custossssssssssssssssssssssssssssmer_code" class="combox required">
              <option value="">请选择</option>
              <option value="<?php echo $this->_tpl_vars['newcustomer']['customer_code']; ?>
" selected="selected"><?php echo $this->_tpl_vars['newcustomer']['customer_code']; ?>
</option>
            </select>-->
          </div>
          <div class="divider">divider</div>
          <div class="unit">
            <label>客户名称：</label>
            <input type="text" name="customer_name" id="customer_name_newcustomer_edit" class="required" style="width:180px" value="<?php echo $this->_tpl_vars['newcustomer']['customer_name']; ?>
"
              />
              <span id="customer_name_result_newcustomer_edit" class="error" style="display:none;"></span>
          </div>
         
          <div class="divider">divider</div>
          
          <input type="hidden" value="<?php echo $this->_tpl_vars['newcustomer']['discount_id']; ?>
" id="discount_r_id_edit" >
          
          <div class="unit">
            <label>主邮箱：</label>
            <input type="text" style="width:180px" name="email" id='email_new_edit' value="<?php echo $this->_tpl_vars['newcustomer']['email']; ?>
"  class="required email" />
            <span id="email_result_newcustomer_edit" class="error" style="display:none;"></span>
          </div>
          <div class="divider">divider</div>
          <div class="unit">
            <label>备用邮箱：</label>
            <input type="text" style="width:180px" name="reserve_email" id="reserve_email_new_edit" value="<?php echo $this->_tpl_vars['newcustomer']['reserve_email']; ?>
" />
            <span id="reserve_email_result_new_edit" class="error" style="display:none;"></span>
          </div>
          <div class="divider">divider</div>
          <div class="unit">
            <label>公司：</label>
            <input type="text" style="width:180px" name="company" id="company_newcustomer_edit" onkeyup="get_same_company(event)" value="<?php echo $this->_tpl_vars['newcustomer']['company']; ?>
" class="required"/>
            <div id="select_company" style="display:none;position: absolute;z-index: 9999; background-color:#FFFFFF;border:1px solid #0099FF;"></div>
            <span id="company_result_newcustomer_edit" class="error" style="display:none;"></span>
          </div>
          <div class="divider">divider</div>
            <div class="unit">
            <label>地址：</label>
            <select class="combox required" id="area_level_one_id_newcustomer_edit" ref="province" refUrl="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/get_children_area-id-{value}.html" name="area_level_one_id">
            <option value="">请选择</option>
              <?php $_from = $this->_tpl_vars['country_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['qf']):
?> <option value="<?php echo $this->_tpl_vars['qf']['area_id']; ?>
" <?php if ($this->_tpl_vars['newcustomer']['area_level_one_id'] == $this->_tpl_vars['qf']['area_id']): ?> selected="selected" <?php endif; ?>><?php echo $this->_tpl_vars['qf']['area_name']; ?>

              </option>
              <?php endforeach; endif; unset($_from); ?>
            </select>
            <select class="combox required" id="province" refUrl="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/get_children_area-id-{value}.html" ref="area_id" name="area_level_two_id">
           <option value="">请选择</option>
             <?php $_from = $this->_tpl_vars['area_level_two_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['qf']):
?> 
             <option value="<?php echo $this->_tpl_vars['qf']['area_id']; ?>
" <?php if ($this->_tpl_vars['newcustomer']['area_level_two_id'] == $this->_tpl_vars['qf']['area_id']): ?> selected="selected" <?php endif; ?>><?php echo $this->_tpl_vars['qf']['area_name']; ?>

              </option>
            <?php endforeach; endif; unset($_from); ?>
           
            </select>
            <select class="combox required" id="area_id"  name="area_level_three_id">
             <option value="">请选择</option>
             <?php $_from = $this->_tpl_vars['area_level_three_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['qf']):
?> 
             <option value="<?php echo $this->_tpl_vars['qf']['area_id']; ?>
" <?php if ($this->_tpl_vars['newcustomer']['area_level_three_id'] == $this->_tpl_vars['qf']['area_id']): ?> selected="selected" <?php endif; ?>><?php echo $this->_tpl_vars['qf']['area_name']; ?>

              </option>
            <?php endforeach; endif; unset($_from); ?>
           </select>
           <br /><br /><br />
<input type="hidden" name="update_content_yincang" id="update_content_yincang_old" value="" />
            <textarea name="address" id="address" cols="50" rows="3" style="margin-left:130px;"><?php echo $this->_tpl_vars['newcustomer']['address']; ?>
</textarea>
            <span id="area_level_three_result_newcustomer_edit" class="error" style="display:none;"></span>
          </div> 
          <!--<div class="divider">divider</div>
          <div class="unit">
            <label>询盘方式：</label>
            <div style="float:left; line-height:20px;"><?php echo $this->_tpl_vars['quotecategory_id']; ?>
</div>
            <select class="combox required" name="quotecategory_id">
            <option value="">请选择</option>
              <?php $_from = $this->_tpl_vars['quotecategory_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['qf']):
?> <option value="<?php echo $this->_tpl_vars['qf']['id']; ?>
" <?php if ($this->_tpl_vars['quote_info']['quotecategory_id'] == $this->_tpl_vars['qf']['id']): ?> selected="selected" <?php endif; ?> ><?php echo $this->_tpl_vars['qf']['quotecategory_name']; ?>

              </option>
              <?php endforeach; endif; unset($_from); ?>
            </select>
          </div>-->
          <div class="divider">divider</div>
          <div class="unit">
            <label>询盘状态：</label>
            <?php if ($this->_tpl_vars['newcustomer']['quote_status'] == '1'): ?>
                <input type="radio" id="weihuifu" name="quote_status" value="1" checked="checked">未回复 
                <input type="radio" id="yihuifu" name="quote_status" value="2">已回复
            <?php elseif ($this->_tpl_vars['newcustomer']['quote_status'] == '2'): ?>
                <input type="radio" id="weihuifu" name="quote_status" value="1">未回复 
                <input type="radio" id="yihuifu" name="quote_status" value="2" checked="checked">已回复                      
            <?php else: ?>
                <input type="radio" id="weihuifu" name="quote_status" value="1">未回复 
                <input type="radio" id="yihuifu" name="quote_status" value="2">已回复           
            <?php endif; ?>     
          </div>
          <div class="unit">
            <label>反馈状态：</label>
            <?php if ($this->_tpl_vars['newcustomer']['feedback_state'] == '1'): ?>
                <input type="radio" name="feedback_state" value="1" checked="checked">未反馈
                <input type="radio" name="feedback_state" value="2">已反馈
            <?php elseif ($this->_tpl_vars['newcustomer']['feedback_state'] == '2'): ?>
                <input type="radio" name="feedback_state" value="1">未反馈
                <input type="radio" name="feedback_state" value="2" checked="checked">已反馈
            <?php else: ?>
                <input type="radio" name="feedback_state" value="1">未反馈
                <input type="radio" name="feedback_state" value="2">已反馈         
            <?php endif; ?>     
          </div>
            
<!--          <div class="divider">divider</div>
          <div class="unit">
            <label>询盘周期：</label>
            <?php if ($this->_tpl_vars['quotecustomer_cycle'] == '1'): ?>
             <input type="radio" name="quotecustomer_cycle" value="1" checked="checked">未回复<br><br>
             <div style="margin-left:130px;"> <input type="radio" name="quotecustomer_cycle"   value="2">一周内回复</div><br>
             <div style="margin-left:130px;">  <input type="radio" name="quotecustomer_cycle" value="3">一个月内回复</div><br>
             <div style="margin-left:130px;"> <input type="radio" name="quotecustomer_cycle" value="4">三个月内回复</div><br>
             <div style="margin-left:130px;"> <input type="radio" name="quotecustomer_cycle" value="5">三个月以上回复</div>
           <?php elseif ($this->_tpl_vars['quotecustomer_cycle'] == '2'): ?>  
             <input type="radio" name="quotecustomer_cycle" value="1" >未回复<br><br>
             <div style="margin-left:130px;"> <input type="radio" name="quotecustomer_cycle"   value="2" checked="checked">一周内回复</div><br>
             <div style="margin-left:130px;">  <input type="radio" name="quotecustomer_cycle" value="3">一个月内回复</div><br>
             <div style="margin-left:130px;"> <input type="radio" name="quotecustomer_cycle" value="4">三个月内回复</div><br>
             <div style="margin-left:130px;"> <input type="radio" name="quotecustomer_cycle" value="5">三个月以上回复</div>    
           <?php elseif ($this->_tpl_vars['quotecustomer_cycle'] == '3'): ?>  
             <input type="radio" name="quotecustomer_cycle" value="1" >未回复<br><br>
             <div style="margin-left:130px;"> <input type="radio" name="quotecustomer_cycle"   value="2" >一周内回复</div><br>
             <div style="margin-left:130px;">  <input type="radio" name="quotecustomer_cycle" value="3" checked="checked">一个月内回复</div><br>
             <div style="margin-left:130px;"> <input type="radio" name="quotecustomer_cycle" value="4">三个月内回复</div><br>
             <div style="margin-left:130px;"> <input type="radio" name="quotecustomer_cycle" value="5">三个月以上回复</div>   
          <?php elseif ($this->_tpl_vars['quotecustomer_cycle'] == '4'): ?>  
             <input type="radio" name="quotecustomer_cycle" value="1" >未回复<br><br>
             <div style="margin-left:130px;"> <input type="radio" name="quotecustomer_cycle"   value="2" >一周内回复</div><br>
             <div style="margin-left:130px;">  <input type="radio" name="quotecustomer_cycle" value="3">一个月内回复</div><br>
             <div style="margin-left:130px;"> <input type="radio" name="quotecustomer_cycle" value="4" checked="checked">三个月内回复</div><br>
             <div style="margin-left:130px;"> <input type="radio" name="quotecustomer_cycle" value="5">三个月以上回复</div>   
          <?php elseif ($this->_tpl_vars['quotecustomer_cycle'] == '5'): ?>  
             <input type="radio" name="quotecustomer_cycle" value="1" >未回复<br><br>
             <div style="margin-left:130px;"> <input type="radio" name="quotecustomer_cycle"   value="2">一周内回复</div><br>
             <div style="margin-left:130px;">  <input type="radio" name="quotecustomer_cycle" value="3">一个月内回复</div><br>
             <div style="margin-left:130px;"> <input type="radio" name="quotecustomer_cycle" value="4">三个月内回复</div><br>
             <div style="margin-left:130px;"> <input type="radio" name="quotecustomer_cycle" value="5" checked="checked">三个月以上回复</div>   
         <?php else: ?>
             <input type="radio" name="quotecustomer_cycle" value="1" checked="checked">未回复<br><br>
             <div style="margin-left:130px;"> <input type="radio" name="quotecustomer_cycle"   value="2">一周内回复</div><br>
             <div style="margin-left:130px;">  <input type="radio" name="quotecustomer_cycle" value="3">一个月内回复</div><br>
             <div style="margin-left:130px;"> <input type="radio" name="quotecustomer_cycle" value="4">三个月内回复</div><br>
             <div style="margin-left:130px;"> <input type="radio" name="quotecustomer_cycle" value="5">三个月以上回复</div>
         <?php endif; ?>
            </div>-->
            
            
            
            
            
            
            
          <div class="divider">divider</div>
          <div class="unit">
            <label>询盘内容：</label>
            <textarea id="text_id" name="quote_content" cols="50" rows="2"><?php echo $this->_tpl_vars['newcustomer']['quote_content']; ?>
</textarea>
          </div>
           <div class="divider">divider</div>
          <div class="unit">
            <label>报价状态：</label>
            <?php if ($this->_tpl_vars['newcustomer']['baojia_status'] == '1'): ?>
                 否
            <?php else: ?>
                 是
            <?php endif; ?>
          </div>
          <div class="divider">divider</div>
          <input type="hidden" readonly="readonly" name="sale_user_id" value="<?php echo $this->_tpl_vars['user_id']; ?>
" />
          <!--<div class="unit">
            <label>分配业务员：</label>
            <?php if ($this->_tpl_vars['get_userid'] == ''): ?>
            	
            <?php else: ?>
            	<input type="text" readonly="readonly" name="sale_user_name" value="<?php echo $this->_tpl_vars['customer_name']['user_name']; ?>
" />
            <?php endif; ?>
            
          </div>-->
          
       
        </div>
      </div>
      <div>
        <div class="pageFormContent" layoutH="58">
          <div class="unit">
            <label>固定电话：</label>
            <input type="text" name="telephone" style="width:180px" id="telephone" value="<?php echo $this->_tpl_vars['newcustomer']['telephone']; ?>
"/>
          </div>
          <div class="divider">divider</div>
          <div class="unit">
            <label>手机：</label>
            <input type="text" name="cellphone" style="width:180px" id="cellphone" value="<?php echo $this->_tpl_vars['newcustomer']['cellphone']; ?>
" />
          </div>
          <div class="divider">divider</div>
          <div class="unit">
            <label>传真：</label>
            <input type="text" name="fax" id="fax" style="width:180px" value="<?php echo $this->_tpl_vars['newcustomer']['fax']; ?>
" />
          </div>
          <div class="divider">divider</div>
        
          <div class="unit">
            <label>邮编：</label>
            <input type="text" name="zip_code" id="zip_code_new" style="width:180px" value="<?php echo $this->_tpl_vars['newcustomer']['zip_code']; ?>
" class="digitsa" />
          </div>
          <div class="divider">divider</div>
          <div class="unit">
            <label>网址：</label>
            <input type="text" name="website" id="website_new" style="width:180px" value="<?php echo $this->_tpl_vars['newcustomer']['website']; ?>
" class="url" />
          </div>
          <div class="divider">divider</div>
          <div class="unit">
            <label>生日：</label>
            <input type="text" name="birthday" id="birthday_new" style="width:180px" value="<?php echo $this->_tpl_vars['newcustomer']['birthday']; ?>
" class="date"  readonly />
          </div>
          <div class="divider">divider</div>
          <div class="unit">
            <label>性别：</label>
            <?php if ($this->_tpl_vars['newcustomer']['sex'] == 1 || $this->_tpl_vars['newcustomer']['sex'] == 2): ?>
            <input type="radio" name="sex" id="sex_new" value="1" <?php if ($this->_tpl_vars['newcustomer']['sex'] == 1): ?>checked <?php endif; ?> />男 <input type="radio" name="sex" id="sex" value="2" <?php if ($this->_tpl_vars['newcustomer']['sex'] == 2): ?>checked <?php endif; ?> />女 </div>
            <?php else: ?>
            <input type="radio" name="sex" id="sex_new" value="1" checked />男 <input type="radio" name="sex" id="sex" value="2" />女 </div>
            <?php endif; ?>
          <div class="divider">divider</div>
          <div class="unit">
            <label>身高：</label>
            <input type="text" name="height" id="height_new" style="width:180px" value="<?php echo $this->_tpl_vars['newcustomer']['height']; ?>
" />
            <label>CM</label>
          </div>
          <div class="divider">divider</div>
          <div class="unit">
            <label>体重：</label>
            <input type="text" name="weight" id="weight_new" style="width:180px" value="<?php echo $this->_tpl_vars['newcustomer']['weight']; ?>
" />
            <label>KG</label>
          </div>
          <div class="divider">divider</div>
          <div class="unit">
            <label>备注：</label>
            <textarea name="note" id="note_new" cols="50" rows="2"><?php echo $this->_tpl_vars['newcustomer']['note']; ?>
</textarea>
          </div>
          <div class="divider">divider</div>
          <div class="unit">
            <label>UPS收货人账号：</label>
            <input type="text" name="consignee_account_ups" value="<?php echo $this->_tpl_vars['newcustomer']['consignee_account_ups']; ?>
" />
          </div>
          <div class="divider">divider</div>
          <div class="unit">
            <label>UPS收货人邮箱：</label>
            <input type="text" name="consignee_email_ups" value="<?php echo $this->_tpl_vars['newcustomer']['consignee_email_ups']; ?>
" />
          </div>
          <div class="divider">divider</div>
          <div class="unit">
            <label>DHL收货人账号：</label>
            <input type="text" name="consignee_account_dhl" value="<?php echo $this->_tpl_vars['newcustomer']['consignee_account_dhl']; ?>
" />
          </div>
          <div class="divider">divider</div>
          
          
        </div>
      </div>
      <div>
        <div class="pageFormContent" layoutH="58">
        <!--<?php $_from = $this->_tpl_vars['customeroption_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['cl']):
?>
          <div class="unit">
            <label><?php echo $this->_tpl_vars['cl']['customeroption_name']; ?>
：</label>
            <input type="hidden" name="customeroption_o[<?php echo $this->_tpl_vars['key']; ?>
][optionid_o]" value="<?php echo $this->_tpl_vars['cl']['id']; ?>
" />
            <input type="text" value="<?php $_from = $this->_tpl_vars['customeroption']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ct']):
?><?php if ($this->_tpl_vars['ct']['customer_option_id'] == $this->_tpl_vars['cl']['id']): ?><?php echo $this->_tpl_vars['ct']['customer_option_value']; ?>
<?php endif; ?><?php endforeach; endif; unset($_from); ?>" id="customeroption_o[<?php echo $this->_tpl_vars['key']; ?>
][ename_o]" name="customeroption_o[<?php echo $this->_tpl_vars['key']; ?>
][ename_o]" />
            
          </div>
          <div class="divider">divider</div>
        <?php endforeach; endif; unset($_from); ?>-->
        
        
        <div class="unit">
            <label>是否有店铺：</label>
                            <input type="radio" name="physical_store" value="yes">yes
                <input type="radio" name="physical_store" value="no" checked="checked">no
                      </div>

<div class="unit">
           
        <div class="th_5_form_text" style="float:left; width:500px;">

        <span id="eee" style="float:left;"><input type="file" size="1" name="filename" class="th_fileField" id="th_fileField" multiple="multiple" onchange="th_preview4()"></span>

            

            <input type="button" id="th_fileFieldButton" value="选择店铺照片" class="th_fileFieldButton" style="background-color: rgb(238, 238, 238);">
            <input type="submit" value="上传JPG/PNG" class="th_fileFieldButton" id="jpg_upload_submit"> 

        <div id="th_boom" class="th_boom" style="display:none;">

        <div id="th_aaa" class="th_aaa"></div>

        <span id="th_asd" class="th_asd"><img src="http://192.168.1.101/erp/public/image/radio_close.png"></span>

        </div>
        </div>
        
        <iframe name="yframe_unfinish" src="http://192.168.1.101/erp/unfinishdesign/upload_jpg" style="border:none; overflow:hidden; "></iframe>
        
        
        </div>
        
        </div>
      </div>
      <div class="tabsFooter">
        <div class="tabsFooterContent"> </div>
      </div>
      
    </div>
    <div class="formBar">
      <ul>
        <li>
          <div class="buttonActive">
            <div class="buttonContent">
              <button type="button" id="submit_new_customer_edit" >确定</button>
            </div>
          </div>
        </li>
        <li> 
        <div class="buttonActive">
            <div class="buttonContent">
              <button type="button" class="close" >取消</button>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </form>
</div>
<!-- {literal} --> 
<script type="text/javascript">
$(document).ready(function()  
{
	$("#text_id").attr("disabled", "true");
	    $("#yihuifu").click(function (){
			$("#text_id").removeAttr("disabled");
		    
		});
		
		$("#weihuifu").click(function (){
		    $("#text_id").attr("disabled", "true");
		});
	
	var discount_r_id = $("#discount_r_id_edit").val();

    if(discount_r_id!=''){
		$('#discount_r1_id').css('display','none');	
	}
	
	if($("#discount_rebate_newcustomer_edit").val()!=""){
		$("#discount_r1_id").css('display','block');	
	}
		$("#submit_new_customer_edit").click(function (){
		if($("#customer_name_newcustomer_edit").val() == ''){
				$("#customer_name_result_newcustomer_edit").css("display","block");
				$("#customer_name_result_newcustomer_edit").html("请填写客户名");
		}else if($('#email_result_newcustomer_edit').html()!=''){
				alert('请修改主邮箱错误！');
			}else if($('#reserve_email_result_new_edit').html()!=''){
				alert('请修改备用邮箱错误！');
			}else if($("#company_result_newcustomer_edit").html()!=''){
				alert('请修改公司错误！');
			}else if($('#reserve_email_new_edit').val()==$('#email_new_edit').val()){
				alert('主邮箱与备用邮箱不能重复！');
			}else if($("#email_new_edit").val() == ''){
				$("#customer_name_result_newcustomer_edit").css("display","none");
				$("#email_result_newcustomer_edit").css("display","block");
				$("#email_result_newcustomer_edit").html("请填写客户名");
	    }else{
		
				$("#newcustomer_edit").submit();
		}
			
		});
		
		$("#discount_id_newcustomer_edit").change(function(){
		    var discount_id_newcustomer_edit = $("#discount_id_newcustomer_edit").val();
			if(discount_id_newcustomer_edit==''){
				$('#discount_r1_id').css('display','block');
				$("#discount_rebate_newcustomer_edit").removeAttr("disabled","disabled");
			}else{
				$("#discount_rebate_newcustomer_edit").attr("disabled","disabled");
				$("#discount_rebate_newcustomer_edit").val("");
			}
		});
		
		var customer_id = $("#customer_id_newcustomer_edit").val();
		$('input').blur(function(){
			if($("#discount_rebate_newcustomer_edit").val() != ''){
			   $("#discount_id_newcustomer_edit").attr("disabled","disabled");
			   $("#discount_id_newcustomer_edit option[value='']").attr("selected","selected");
		    }
		
			if($("#discount_id_newcustomer_edit").val()!=''){
				$("#discount_rebate_newcustomer_edit").attr("disabled","disabled");
				$("#discount_rebate_newcustomer_edit").val("");
			}
	
	        var discount_id = $("#discount_id_newcustomer_edit");

	        discount_id.change(function(){	
			    var b = $("#discount_id_newcustomer_edit").val();
	
			    if(b != ''){
					$("#discount_rebate_newcustomer_edit").attr("disabled","disabled");
					$("#discount_rebate_newcustomer_edit").val("");
			    }else{
				    $("#discount_rebate_newcustomer_edit").removeAttr("disabled","disabled");
			    }
	    });
     
   		if(this.id == 'customer_name_newcustomer_edit'){
			if(this.value==''){
				
			}
			else{
				$('#customer_name_result_newcustomer_edit').html('');
				p='customer_name='+this.value+'&customer_id='+customer_id;
     			$.ajax({
					url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/check_customer_name',
					type:'post',
					 dataType:'json',
					 data:p,
					 success:check_customer_name_back
			    });
			}
		}
		
		if(this.id == 'company_newcustomer_edit'){
			if(this.value==''){
				
			}
			else{
				$('#select_company').css("display","none");
				$('#select_company').html('');
				$('#company_result_newcustomer_edit').html('');
				p='company='+this.value+'&customer_id='+customer_id;
     			$.ajax({url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/check_company',type:'post', dataType:'json',data:p,success:check_company_back});
			}
		}
		
		if(this.id == 'email_new_edit'){
			if(this.value==''){
				
			}else{
				$('#email_result_newcustomer_edit').html('');
				p='email='+this.value+'&customer_id='+customer_id;
     			$.ajax({url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/check_customer_email',type:'post', dataType:'json',data:p,success:check_email_back_new});
			}
		}
		
		/*if(this.id == 'reserve_email_new_edit'){
			if(this.value==''){
				
			}
			else{
				$('#reserve_email_result_new_edit').html('');
				p='reserve_email='+this.value+'&customer_id='+customer_id;
     			$.ajax({url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/check_customer_reserve_email_1',type:'post', dataType:'json',data:p,success:check_reserve_email_back_new});
			}
		}*/
		
	});
	
	
	
});
	function check_email_back_new(data)
	{
		if(data.type_email==1){
			if(data.customer_code!= undefined){
				$('#email_result_newcustomer_edit').css("display","block");
				$('#email_result_newcustomer_edit').css("background-color","#FF0000");
				$('#email_result_newcustomer_edit').css("color","#FFF");
				$('#email_result_newcustomer_edit').html('该邮箱已经被使用' + ' ' + data.customer_code);
			}else{
				$('#email_result_newcustomer_edit').css("display","none");
				$('#email_result_newcustomer_edit').css("background-color","#6F0");
				$('#email_result_newcustomer_edit').css("color","#000");
				$('#email_result_newcustomer_edit').html('');
			}
		}else{
			$('#email_result_newcustomer_edit').css("display","block");
			$('#email_result_newcustomer_edit').css("background-color","#F00");
			$('#email_result_newcustomer_edit').css("color","#FFF");
			$('#email_result_newcustomer_edit').html('该邮箱不可用！');	
		}
	}
	
	function check_reserve_email_back_new(data)
	{
		if(data.type_email==1){
			if(data.customer_code!= undefined)
			{
				$('#reserve_email_result_new_edit').css("display","block");
				$('#reserve_email_result_new_edit').css("background-color","#FF0000");
				$('#reserve_email_result_new_edit').css("color","#FFF");
				$('#reserve_email_result_new_edit').html('该邮箱已经被使用' + ' ' + data.customer_code);
			}
			else
			{
				$('#reserve_email_result_new_edit').css("display","none");
				$('#reserve_email_result_new_edit').css("background-color","#6F0");
				$('#reserve_email_result_new_edit').css("color","#000");
				$('#reserve_email_result_new_edit').html('');
			}
		}else{
			$('#reserve_email_result_new_edit').css("display","block");
			$('#reserve_email_result_new_edit').css("background-color","#F00");
			$('#reserve_email_result_new_edit').css("color","#FFF");
			$('#reserve_email_result_new_edit').html('该邮箱不可用！');	
		}
	}
	function check_customer_name_back(data)
	{
		if(data >= 1)
		{
			$('#customer_name_result_newcustomer_edit').css("display","block");
			$('#customer_name_result_newcustomer_edit').css("background-color","#FF0000");
			$('#customer_name_result_newcustomer_edit').css("color","#FFF");
			$('#customer_name_result_newcustomer_edit').html('该客户名已经被使用');
		}
		else
		{
			$('#customer_name_result_newcustomer_edit').css("display","none");
			$('#customer_name_result_newcustomer_edit').css("background-color","#6F0");
			$('#customer_name_result_newcustomer_edit').css("color","#000");
			$('#customer_name_result_newcustomer_edit').html('');
		}
	}
	
	function check_company_back(data)
	{
		if(data >= 1)
		{
			$('#company_result_newcustomer_edit').css("display","block");
			$('#company_result_newcustomer_edit').css("background-color","#FF0000");
			$('#company_result_newcustomer_edit').css("color","#FFF");
			$('#company_result_newcustomer_edit').html('该公司已经被使用');
		}
		else
		{
			$('#company_result_newcustomer_edit').css("display","none");
			$('#company_result_newcustomer_edit').css("background-color","#6F0");
			$('#company_result_newcustomer_edit').css("color","#000");
			$('#company_result_newcustomer_edit').html('');
		}
	}
	
	//获取名字类似的公司
	function get_same_company(event){
		var company	=	$("#company_newcustomer_edit").val();
		var select_list	=	$('#select_company');
		if(event.keyCode > 40 || event.keyCode == 8 || event.keyCode ==32){
			$.ajax({
				url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/quotecustomer/get_same_company',
				data:{'company':company},
				dataType:"json",
				type:"post",
				success: function(data){
					select_list.css("display","none");
					select_list.html('');
					if(data[0]!=undefined){
						var ypos = $("#company_newcustomer_edit").position().top; 
						var xpos = $("#company_newcustomer_edit").position().left; 
						select_list.css('width',$("#company_newcustomer_edit").css('width')); 
						select_list.css({'positionuu':'relative','left':(xpos+1) + "px",'top':(ypos+22) +"px"}); 
						var li	='';
						for(var i=0;i<data.length;i++){
							li	+=	'<li style="list-style-type:none;">'+data[i].company+'</li>';
						}
						select_list.append(li);
						select_list.css("display","block");
					}
				}	
			});
		}
	}
</script>