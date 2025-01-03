<?php /* Smarty version 2.6.22, created on 2022-03-01 14:28:28
         compiled from rhinestone_quotation/add_production_order.html */ ?>

<script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/cstown_Sys.js" type="text/javascript"></script>
<link href="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/css/cstown_sys.css" rel="stylesheet" type="text/css" media="screen"/>
<div class="pageContent">
  <form method="post" style="float:left;" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, navTabAjaxDone)" id="pageForm">
   <div class="stkInfEnter" style="width:98%" layoutH="100" id="ttbjd_ysj">
    	  <div class="sIE_title">填写做货单</div>
    	  	<div class="sIEK" style="width:1000px;">
      <input type="hidden" name="whole_cost_price" value="<?php echo $this->_tpl_vars['whole_cost_price']; ?>
"  />
      <input type="hidden" name="cost_factor" value="<?php echo $this->_tpl_vars['cost_factor']; ?>
"  />
      <input type="hidden" name="factory_cost" value="<?php echo $this->_tpl_vars['factory_cost']; ?>
"  />
      <input type="hidden" name="factory_num" value="<?php echo $this->_tpl_vars['factory_num']; ?>
"  />
      <input type="hidden" name="quote_factor" value="<?php echo $this->_tpl_vars['quote_factor']; ?>
"  />
      <input type="hidden" name="unite_quote" value="<?php echo $this->_tpl_vars['unite_quote']; ?>
"  />
      <input type="hidden" name="final_quote" value="<?php echo $this->_tpl_vars['final_quote']; ?>
"  />   
      <div class="sIE_l" style="width:200px; margin-left:30px; margin-top:25px;">
            <div style="float:left; margin-bottom:5px;">
            <div class="sIE_l_01_title">业务员:</div>
            <input type="text" class="" style="width:100px;height:19px;" id="Saleman_name" name="Saleman_name" value="<?php echo $this->_tpl_vars['quotation_sheet']['saleman_name']; ?>
" readonly/>
             <input type="hidden" name="mid" id="mid" style="margin-left:-100px;" value="<?php echo $this->_tpl_vars['quotation_sheet']['id']; ?>
" />
           </div>
           <div style="float:left; margin-bottom:5px;">
             <div class="sIE_l_01_title">时间:</div>
            <input type="text" style="width:100px;height:19px;"  id="Quotation_date" name="Quotation_date"value="<?php echo $this->_tpl_vars['quotation_sheet']['quotation_date']; ?>
" class="date" readonly />
           </div>
           <div style="float:left; margin-bottom:5px;">
             <div class="sIE_l_01_title">客户代码:</div>
            <input type="text" style="width:100px;height:19px;"  id="Customer_code" name="Customer_code" value="<?php echo $this->_tpl_vars['quotation_sheet']['customer_code']; ?>
" class="sIE_No" onkeyup="customer_num_code();"readonly />
           </div>
           <div id="Customer_code_error" style="float:left; width:500px; margin-top:10px; color:#F00; display:none; font-size:12px;"></div>
           <div style="float:left; margin-bottom:5px;">
             <div class="sIE_l_01_title">客户名:</div>
            <input type="text" style="width:100px;height:19px;"  id="Customer_name" name="Customer_name"  value="<?php echo $this->_tpl_vars['quotation_sheet']['customer_name']; ?>
" class="" readonly/>
           </div>
            <div id="Customer_name_error" style="float:left; width:500px; margin-top:10px; color:#F00; display:none; font-size:12px;"></div>
           <div style="float:left; margin-bottom:5px;">
             <div class="sIE_l_01_title">公司:</div>
            <input type="text" style="width:100px;height:19px;"  id="Customer_company" name="Customer_company" value="<?php echo $this->_tpl_vars['quotation_sheet']['customer_company']; ?>
" class="" readonly />
           </div>
           
           <div class="sIE_l_01" style="width:200px;">
            <div class="sIE_l_01_title" style="width:80px; line-height:26px;">报关品类:</div>
            <select class="picture_select01" name="order_category" id="order_category" style="width:106px; height:26px;">
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
           
      </div>
        <div class="sIE_l" style="width:200px; margin-left:50px; margin-top:25px;">
        <div style="float:left; margin-bottom:5px;">
            <div class="sIE_l_01_title">客户提供单号:</div>
            <input class="" type="text" name="customers_order" style="width:100px;height:19px;">
         </div>
          <div id="design_pic_name_error" style="float:left; width:500px; height:25px;margin-top:10px; color:#F00; display:none; font-size:12px;"></div>
         <div style="float:left; margin-bottom:5px;">
         <div class="sIE_l_01_title">发货期:</div>
        <select id="deliver_goods" class="picture_select01" style="width:106px;height:25px;" name="deliver_goods">
        <option value="普通">普通</option>
        <option value="加急">加急</option>
        </select>
        </div>
         <div style="float:left; margin-bottom:5px;">
           <div class="sIE_l_01_title">货币:</div>
          <?php if ($this->_tpl_vars['quotation_sheet']['exchange_rate_id'] == "人民币"): ?>
           <input type="text" style="width:100px;height:19px;"  id="contact" name="contact"  value="¥人民币" class=""  readonly/>
           <?php elseif ($this->_tpl_vars['quotation_sheet']['exchange_rate_id'] == "美元"): ?>
           <input type="text" style="width:100px;height:19px;"  id="contact" name="contact"  value="$美元" class=""  readonly/>
            <?php elseif ($this->_tpl_vars['quotation_sheet']['exchange_rate_id'] == "欧元"): ?>
            <input type="text" style="width:100px;height:19px;"  id="contact" name="contact"  value="€欧元" class=""  readonly/>
            <?php endif; ?>
         </div>
          <div style="float:left; margin-bottom:5px;">
         <textarea class="add01_textarea textInput" style="width:190px; height:65px; margin-bottom:10px;" onfocus="if(this.value=='销售备注')this.value='';" name="remark">销售备注</textarea>
      </div>
      </div>
        <div class="sIE_l" style="width:200px; margin-left:50px; margin-top:25px;">
        <div style="float:left; margin-bottom:5px;">
            <div class="sIE_l_01_title">名称:</div>
            <input type="text" class="" style="width:100px;height:25px;" id="design_pic_name" name="design_pic_name" value="<?php echo $this->_tpl_vars['quotation_sheet']['design_pic_name']; ?>
"readonly />
         </div>
          <div id="design_pic_name_error" style="float:left; width:500px; margin-top:10px; color:#F00; display:none; font-size:12px;"></div>
         <div style="float:left; margin-bottom:5px;">
           <div class="sIE_l_01_title">报价编号:</div>
          <input type="text" style="width:100px;height:25px;"  id="Quotation_code" name="Quotation_code"  value="<?php echo $this->_tpl_vars['quotation_sheet']['quotation_code']; ?>
" class="" readonly/>
         </div>
         <div style="float:left; margin-bottom:5px;">
           <div class="sIE_l_01_title">成本价:</div>
          <input type="text" style="width:100px;height:25px;"  id="Whole_cost_price" name="Whole_cost_price"  value="<?php echo $this->_tpl_vars['quotation_sheet']['whole_cost_price']; ?>
" class=""  readonly/>
         </div>
         <div style="float:left; margin-bottom:5px;">
           <div class="sIE_l_01_title">最终报价:</div>
          <input type="text" style="width:100px;height:25px;"  id="Final_quote" name="Final_quote"  value="<?php echo $this->_tpl_vars['quotation_sheet']['final_quote']; ?>
" class=""  readonly/>
         </div>
      </div>
             <input type="hidden" name="quotation_category" value="<?php echo $this->_tpl_vars['quotation_category']; ?>
" /> 
             <input type="hidden" name="quotation_category_id" value="<?php echo $this->_tpl_vars['quotation_category_id']; ?>
" /> 
             <input type="hidden" name="design_id" value="<?php echo $this->_tpl_vars['design_id']; ?>
" />
             <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['id']; ?>
" />  
             <input type="hidden" name="saleman_user_id" value="<?php echo $this->_tpl_vars['saleman_user_id']; ?>
" />
   
      <div class="sIE_l_02" style="width:80%; margin-left:30px;">
      <table cellspacing="0" class="sIE_l_02Tab" id="mp_table_add">
        <tr>
          <th>名称</th>
          <th>颜色</th>
          <th>尺寸</th>
          <th>数量</th>
          <th>报价系数</th>
          <th>成本价</th>
          <th>报价</th>
        
        </tr>
        <?php if ($this->_tpl_vars['quotation_sheet_material'] != ""): ?>
        <?php $_from = $this->_tpl_vars['quotation_sheet_material']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['qf']):
?>
                              <tr>
                                
                                 <td><?php echo $this->_tpl_vars['qf']['material_name']; ?>
</td>
                                 <td><?php echo $this->_tpl_vars['qf']['material_color']; ?>
</td>
                                 <td><?php echo $this->_tpl_vars['qf']['material_size']; ?>
</td>
                             
                                 <?php if ($this->_tpl_vars['qf']['material_size'] != ""): ?>
                                  <?php if ($this->_tpl_vars['qf']['min_order'] != ""): ?>
                                  <td><input type="text" id="min_order<?php echo $this->_tpl_vars['qf']['id']; ?>
" value="<?php echo $this->_tpl_vars['qf']['min_order']; ?>
" style="width:25px;height:19px;"  onkeyup="min_order_change_edit(<?php echo $this->_tpl_vars['qf']['id']; ?>
)" readonly />G <div id="minorder_error<?php echo $this->_tpl_vars['qf']['id']; ?>
" style="display:none;"></div> <input type="hidden" id="min_order_start<?php echo $this->_tpl_vars['qf']['id']; ?>
" value="<?php echo $this->_tpl_vars['qf']['min_order_start']; ?>
" /></td>
                                <?php else: ?>
                                 <td><input type="text" id="min_order<?php echo $this->_tpl_vars['qf']['id']; ?>
" value="1" style="width:25px;height:19px;"  onkeyup="min_order_change_edit(<?php echo $this->_tpl_vars['qf']['id']; ?>
)" readonly />G <div id="minorder_error<?php echo $this->_tpl_vars['qf']['id']; ?>
" style="display:none;"></div> <input type="hidden" id="min_order_start<?php echo $this->_tpl_vars['qf']['id']; ?>
" value="<?php echo $this->_tpl_vars['qf']['min_order_start']; ?>
" /></td>
                                <?php endif; ?>
                                  <?php else: ?>
                                   <?php if ($this->_tpl_vars['qf']['min_order'] != ""): ?>
                                  <td><input type="text" id="min_order<?php echo $this->_tpl_vars['qf']['id']; ?>
" value="<?php echo $this->_tpl_vars['qf']['min_order']; ?>
" style="width:25px;height:19px;"  onkeyup='min_order_change_edit(<?php echo $this->_tpl_vars['qf']['id']; ?>
)'readonly />M<div id="minorder_error<?php echo $this->_tpl_vars['qf']['id']; ?>
" style="display:none;"></div><input type="hidden" id="min_order_start<?php echo $this->_tpl_vars['qf']['id']; ?>
" value="<?php echo $this->_tpl_vars['qf']['min_order_start']; ?>
" /></td>
                                  <?php else: ?>
                                  <td><input type="text" id="min_order<?php echo $this->_tpl_vars['qf']['id']; ?>
" value="1" style="width:25px;height:19px;"  onkeyup='min_order_change_edit(<?php echo $this->_tpl_vars['qf']['id']; ?>
)'readonly />M<div id="minorder_error<?php echo $this->_tpl_vars['qf']['id']; ?>
" style="display:none;"></div><input type="hidden" id="min_order_start<?php echo $this->_tpl_vars['qf']['id']; ?>
" value="<?php echo $this->_tpl_vars['qf']['min_order_start']; ?>
" /></td>
                                  <?php endif; ?>
                                    <?php endif; ?>
                                  <?php if ($this->_tpl_vars['qf']['quote_coefficient'] != ""): ?>   
                                 <td><input type="text" id="quote_coefficient<?php echo $this->_tpl_vars['qf']['id']; ?>
" value="<?php echo $this->_tpl_vars['qf']['quote_coefficient']; ?>
"  style="width:25px;height:19px;"onkeyup="quote_coefficient_change_edit(<?php echo $this->_tpl_vars['qf']['id']; ?>
)" readonly /><div id="quote_coefficient_error<?php echo $this->_tpl_vars['qf']['id']; ?>
" style="display:none;"></div> <input type="hidden" id="quote_coefficient_start<?php echo $this->_tpl_vars['qf']['id']; ?>
" value="<?php echo $this->_tpl_vars['qf']['quote_coefficient_start']; ?>
" /></td>
                                 <?php else: ?>
                                 <td><input type="text" id="quote_coefficient<?php echo $this->_tpl_vars['qf']['id']; ?>
" value="1"  style="width:25px;height:19px;"onkeyup="quote_coefficient_change_edit(<?php echo $this->_tpl_vars['qf']['id']; ?>
)" readonly /><div id="quote_coefficient_error<?php echo $this->_tpl_vars['qf']['id']; ?>
" style="display:none;"></div> <input type="hidden" id="quote_coefficient_start<?php echo $this->_tpl_vars['qf']['id']; ?>
" value="<?php echo $this->_tpl_vars['qf']['quote_coefficient_start']; ?>
" /></td>
                                 <?php endif; ?>
                                 <td><div id="chengbenjia<?php echo $this->_tpl_vars['qf']['id']; ?>
"><?php echo $this->_tpl_vars['qf']['chengbenjia']; ?>
</div><input type="hidden" id="chengbenjia<?php echo $this->_tpl_vars['qf']['id']; ?>
" value="" /></td>
                                 <td><div id="baojia<?php echo $this->_tpl_vars['qf']['id']; ?>
"><?php echo $this->_tpl_vars['qf']['baojia']; ?>
</div><input type="hidden" id="baojia<?php echo $this->_tpl_vars['qf']['id']; ?>
" value="" /></td>
                                 
                              </tr>
                              
                           <?php endforeach; endif; unset($_from); ?>  
                           <?php endif; ?>
      </table>
    </div>
    	  	</div>
        </div> 
       
     <div class="formBar"> 
        <div class="button" style="margin-left:92%; width:40px; margin-right:5px;">
    		<div class="buttonContent">
       			 <button type="submit" >确定</button>
    		</div>
  		</div>
  		<div class="button" style="margin-left:96%; width:40px;margin-right:5px; margin-top:-25px;">
    		<div class="buttonContent">
       			<button class="close">取消</button>
    		</div>
  		</div>
	</div>
   
    
</div>
 </form>    
<script type="text/javascript">

</script> 