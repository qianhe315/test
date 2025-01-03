<?php /* Smarty version 2.6.22, created on 2016-03-10 15:10:27
         compiled from product_order/hotfix_quotation_change_color_order.html */ ?>
<script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/cstown_Sys.js" type="text/javascript"></script>
<link href="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/css/cstown_sys.css" rel="stylesheet" type="text/css" media="screen"/>
<div class="pageContent">
  
    <div class="stkInfEnter" style="width:98%" layoutH="100" id="ttbjd_ysj">
    	  <div class="sIE_title">添加换色返单</div>
    	  	<div class="sIEK" style="width:90%;">
            
      <form name="form1" method="post" action="<?php echo $this->_tpl_vars['action']; ?>
 " id="submit_form" enctype="multipart/form-data" onsubmit="return validateCallback(this, navTabAjaxDone)"> 
<!--                                <div class="sIE_r" style="height:120px; width:120px;">
               <input type="file" class="sIE_r_img_file" name="jpg" id="jpg" style="width:120px;"  /><br />
          </div> -->
          <input type="hidden" name="jpg_save_name" value="<?php echo $this->_tpl_vars['image']; ?>
" />
          <input type="hidden" name="cdr_save_name" value="<?php echo $this->_tpl_vars['image1']; ?>
" />
          <input type="hidden" name="tapedata_formula_new" id="tapedata_formula" value="<?php echo $this->_tpl_vars['tapedata_formula']; ?>
"/>     
            <div class="sIEK" style="width:99%;">
              <div class="sIE_l" style="width:400px;">
                <div class="sIE_l_01" style="width:200px;">
                  <div class="sIE_l_01_title">业务员:</div>
                    <input type="text" readonly="readonly" readonly="readonly" id="saleman_name" name="saleman_name" value="<?php echo $this->_tpl_vars['saleman_name']; ?>
" class="sIE_No" style="width:100px;" />
                </div>
                
                <div class="sIE_l_01" style="width:200px;">
                  <div class="sIE_l_01_title">材料费:</div>
                    <input type="text" style="width:100px;" readonly="readonly" value="<?php echo $this->_tpl_vars['material_price']; ?>
" name="material_price"  readonly="readonly" id="material_price" class="sIE_No" />
                </div>
                
                <div class="sIE_l_01" style="width:200px;">
                  <div class="sIE_l_01_title">时间:</div>
                    <input type="text" class="sIE_No" name="quotation_date" id="quotation_date" readonly="readonly" value="<?php echo $this->_tpl_vars['q_time']; ?>
" readonly="readonly" style="width:100px;" />
                </div>
                
                <div class="sIE_l_01" style="width:200px;">
                  <div class="sIE_l_01_title">工厂手工费:</div>
                    <input type="text" style="width:100px;" readonly="readonly" readonly="readonly" name="factory_workmanship_price" value="<?php echo $this->_tpl_vars['factory_workmanship_price']; ?>
" id="manual_id" class="sIE_No" />
                </div>
                
                <div class="sIE_l_01" style="width:200px;">
                    <div class="sIE_l_01_title">订单号:</div>
					<input type="text" class="sIE_No"  value="<?php echo $this->_tpl_vars['order_number']; ?>
" name="order_number" id='order_number' readonly="readonly" style="width:100px;" />
                </div>
                
                <div class="sIE_l_01" style="width:200px;">
                  <div class="sIE_l_01_title" style="line-height:30px;">胶纸费:</div>
                    <input type="text" name="tapedata_price" readonly="readonly" value="<?php echo $this->_tpl_vars['tapedata_price']; ?>
" style="float:left; width:100px; height:20px;"  readonly="readonly" id="jiaozhi"/>
                </div>
                
                <div class="sIE_l_01" style="width:200px;">
                    <div class="sIE_l_01_title">反单号:</div>
					<input type="text" class="sIE_No"  value="<?php echo $this->_tpl_vars['order_return_number']; ?>
" name="single_number" id="single_number" readonly="readonly" style="width:100px;" />
                </div>
                
                <div class="sIE_l_01" style="width:200px;">
                  <div class="sIE_l_01_title">成本系数:</div>
                    <input type="text" id="coefficient"  name="cost_factor_new"  readonly="readonly" value="<?php echo $this->_tpl_vars['cost_factor']; ?>
" class="sIE_No" style="width:100px;" />
                </div>
                
                <div class="sIE_l_01" style="width:200px;">
                  <div class="sIE_l_01_title">客户代码:</div>
                    <input type="text" class="sIE_No" name="customer_code" value="<?php echo $this->_tpl_vars['customer_code']; ?>
"  readonly="readonly" style="width:100px;" id="customer_num_1" onkeyup="customer_num();" />
                </div>
                
                <div class="sIE_l_01" style="width:200px;">
                  <div class="sIE_l_01_title">成本价:</div>
                    <input type="text" id="cost_price" readonly="readonly" value="<?php echo $this->_tpl_vars['factory_cost']; ?>
" name="factory_cost" class="sIE_No" style="width:100px;"  readonly="readonly" />
                </div>
                
                <div class="sIE_l_01" style="width:200px;">
                  <div class="sIE_l_01_title">客户名:</div>
                    <input type="text" class="sIE_No" value="<?php echo $this->_tpl_vars['customer_name']; ?>
"  readonly="readonly" name="customer_name" id="customer_code" style="width:100px;"  readonly="readonly" />
                </div>
				
                <div class="sIE_l_01" style="width:200px;">
                  <div class="sIE_l_01_title" style="line-height:30px;">单片报价:</div>
                    <input type="text" readonly="readonly" name="unite_quote" value="<?php echo $this->_tpl_vars['unite_quote']; ?>
" style="float:left; width:100px; height:20px;"  readonly="readonly" id="monolithic_quote"/>
                </div>
                
                <div class="sIE_l_01" style="width:200px;">
                  <div class="sIE_l_01_title">设计名称:</div>
                    <input type="text" name="design_pic_name" id="design_pic_name" value="<?php echo $this->_tpl_vars['design_pic_name']; ?>
"  class="sIE_No"  style="width:100px;"  />
                </div>
                
                <div class="sIE_l_01" style="width:200px;">
                  <div class="sIE_l_01_title" style="line-height:30px;">最终报价:</div>
                  	<input type="text" name="final_quote" readonly="readonly" value="<?php echo $this->_tpl_vars['final_quote']; ?>
" id="final_quotation" class="sIE_No" style="width:100px; height:20px;"  readonly="readonly" />
                </div>
                
                <div class="sIE_l_01" style="width:200px;">
                    <div class="sIE_l_01_title">客户提供单号:</div>
                    <input type="text" name="customers_order"  value="<?php echo $this->_tpl_vars['customer_number']; ?>
" class="sIE_No"  style="width:100px;" />
                </div> 
                   
                <div class="sIE_l_01" style="width:200px; height:26px;">
                  <div class="sIE_l_01_title">材料备损状态:</div>
                    <label > 
                    <input type="radio"  name="standbyState" value="1" <?php if ($this->_tpl_vars['p_status'] == 1): ?> checked="checked"<?php endif; ?>/> 
                    是
                    </label> 
                    <label > 
                    <input type="radio"  name="standbyState" value="0" <?php if ($this->_tpl_vars['p_status'] == 0): ?> checked="checked"<?php endif; ?>/> 
                    否
                    </label>
                </div>
                
                <div class="sIE_l_01" style="width:200px;">
                  <div class="sIE_l_01_title">备损数量:</div>
                    <input id="hq_beisun" class="sIE_No"  type="text" onchange="beisun_change()" name="preparation_number" value="<?php echo $this->_tpl_vars['preparation_number']; ?>
"  style="width:100px;">
                </div>

                <div class="sIE_l_01" style="width:200px; ">
                  <div class="sIE_l_01_title">烫压测试:</div>
                    <label> 
                    <input type="radio" name="hotTest" value="1" <?php if ($this->_tpl_vars['hotTest'] == 1): ?> checked="checked"<?php endif; ?> /> 
                    是
                    </label> 
                    <label> 
                    <input type="radio" name="hotTest" value="0" <?php if ($this->_tpl_vars['hotTest'] == 0): ?> checked="checked"<?php endif; ?> /> 
                    否
                    </label> 
                </div>
               <div class="sIE_l_01" >
                  <div class="sIE_l_01_title" style="line-height:24px;">多图虚线切割:</div>
                  <div style="float:left; height:24px; margin-top:3px;">
                    <input name="dotted_line" type="radio" value="1" />是
                    <input name="dotted_line" type="radio" value="2" checked="checked" />否
                  </div>  
                </div>  
              </div>
                 <script type="text/javascript" language="javascript">
				 
                    function customer_num(){
						var name = $("#customer_num_1").val();
						$.ajax({
							url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/hotfix_quotation/add_customer',//通过Ajax取数据的目标页面
							data:{"name":name},
							type:'post',//方法，还可以是"post"
							dataType:'json',//数据类型，还有其它的，详见jQuery手册
							success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
							{
								if(locals){
									$("#customer_code").val(locals.customer_name);
									$("#customer_company").val(locals.company);
								}else{
									$("#customer_code").val('');
									$("#customer_company").val('');									
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
                        <input type="text" readonly="readonly"  name="inch_w" value="<?php echo $this->_tpl_vars['inch_w']; ?>
" id="inch_w" class="sIE_No" style="width:100px;" />
                        <div style=" margin-left:5px; float:left;">inch W</div>
                    </div>
                    <div class="sIE_r01_div">
                        <input type="text" readonly="readonly"  name="inch_h" value="<?php echo $this->_tpl_vars['inch_h']; ?>
" id="inch_h" class="sIE_No" style="width:100px;" />
                        <div style=" margin-left:5px; float:left;">inch H</div>
                    </div>
                    <div class="sIE_r01_div">
                        <input type="text" readonly="readonly"  name="cm_w" value="<?php echo $this->_tpl_vars['cm_w']; ?>
" id="cm_w" class="sIE_No" style="width:100px;" />
                        <div style=" margin-left:5px; float:left;">cm W</div>
                    </div>
                    <div class="sIE_r01_div">
                        <input type="text" readonly="readonly"  name="cm_h" value="<?php echo $this->_tpl_vars['cm_h']; ?>
" id="cm_h" class="sIE_No" style="width:100px;" />
                        <div style=" margin-left:5px; float:left;">cm H</div>
                    </div>
                  </div>
                  
                  <div class="sIE_l_01" style="width:200px;">
                  <div class="sIE_l_01_title" style="width:60px; line-height:26px;">胶纸名称:</div>
                    <select class="picture_select02" style="float:left; width:106px; margin-top:5px; height:24px;" id="gummed_paper_1" name="tapedata_id" onchange="gummed_paper()">
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
                    <input type="text" name="pcs" id="piece" class="sIE_No" value="<?php echo $this->_tpl_vars['pcs']; ?>
" onkeyup="piece1()" style="width:100px; height:20px;" />
                </div>
                
                 <div class="sIE_l_01" style="width:200px;">
                  <div class="sIE_l_01_title" style="width:60px; line-height:26px;">报价系数:</div>
                    <?php if ($this->_tpl_vars['quote_factor']): ?>
                               <input type="text" name="quote_factor" id="default_quote_coefficient" onkeyup="default_quote_coefficient1()" class="sIE_No" value="<?php echo $this->_tpl_vars['quote_factor']; ?>
" style="width:100px; height:20px;" />
                            <?php else: ?>
                               <input type="text" name="quote_factor" id="default_quote_coefficient" onkeyup="default_quote_coefficient1()" class="sIE_No" value="<?php echo $this->_tpl_vars['default_quote_coefficient']; ?>
" style="width:100px; height:20px;" />
                            <?php endif; ?>
                </div>
                
                 <div class="sIE_l_01" style="width:200px;">
                  <div class="sIE_l_01_title" style="width:60px; line-height:26px;">货币:</div>
                     <select id="parities" name="exchange_rate_id" onchange="parities1()" class="picture_select02" style="float:left; height:24px; width:105px;">
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
        
             <input type="hidden" name="quotation_code" value="<?php echo $this->_tpl_vars['stock_number']; ?>
" />
             <input type="hidden" name="quotation_category" value="<?php echo $this->_tpl_vars['quotation_category']; ?>
" /> 
             <input type="hidden" name="quotation_category_id" value="<?php echo $this->_tpl_vars['quotation_category_id']; ?>
" /> <!--报价单类别ID-->
             <input type="hidden" name="design_id" value="<?php echo $this->_tpl_vars['design_id']; ?>
" />
             <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['id']; ?>
" id="mid" />  <!--报价ID-->
             <input type="hidden" name="order_id" value="<?php echo $this->_tpl_vars['order_id']; ?>
"/><!--原订单ID-->
             <input type="hidden" name="whole_cost_price" id="total_price_id_2" value="<?php echo $this->_tpl_vars['whole_cost_price']; ?>
" />
<!--             <input type="hidden" name="version_costs" id="version" value="<?php echo $this->_tpl_vars['version_costs']; ?>
" />版费-->
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
                        <?php if ($this->_tpl_vars['quotation_material']): ?> 
                        <?php $_from = $this->_tpl_vars['quotation_material']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
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
                            <!--<td>
                            <?php if ($this->_tpl_vars['qsm']['materialformula'] != ""): ?>
                                <select name="formula_id[<?php echo $this->_tpl_vars['qsm']['id']; ?>
]" class="picture_select02" id="price<?php echo $this->_tpl_vars['qsm']['id']; ?>
" onchange="price_num(<?php echo $this->_tpl_vars['qsm']['id']; ?>
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
                            <td id="price_a<?php echo $this->_tpl_vars['qsm']['id']; ?>
"><?php echo $this->_tpl_vars['qsm']['material_total_price']; ?>
</td>
                            <td onClick='getDel(this,<?php echo $this->_tpl_vars['qsm']['id']; ?>
)'><a href='#'>删除</a></td>
                        </tr>                        

                        <?php endforeach; endif; unset($_from); ?>
                        <?php endif; ?>
                    </table>              	  
                </div>
                
                </form>
                
                 <div class="sIE_r" style="height:260px; width:260px; margin-top:-260px; float:right;">
                    <div class="sIE_r_img" style="height:260px; width:260px; margin-left:0px;" id="image_no_1">
                   
                        <div style="float:left;  width:260px; height:auto;"> 
                          <iframe name="yframe_hotfix_edit1" src="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/product_order/upload_jpg" style="border:none; width:260px; height:260px;">
                          </iframe>
                        </div>
                    </div>     
              <form style="float:left; width:260px;" id="hq_upload_jpg" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/product_order/upload_jpg" target="yframe_hotfix_edit1" method="post" enctype="multipart/form-data" >
              	<div style="float:left; height:30px; width:60px; overflow:hidden; margin-left:20px; position:relative;">
                 <input type="file" class="sIE_r_img_file" id="hq_jpg_file" name="jpg_file" style=" opacity:0; position:relative; z-index:10; margin-top:0px;" />
                 <input type="button" class="sIE_r_img_file" name="jpg" style=" opacity:1; width:60px; text-align:center; height:24px; position:absolute; z-index:9; margin-top:0px;" value="浏览" />
                </div>
                 <input type="button" id="hq_jpg_upload_submit" value="上传JPG" style=" float:right; width:70px;" /> 
               
              </form>
              </div>
                   <div class="sIE_r" style="height:36px; width:260px; margin-top:20px; padding-top:15px; float:right; border-top:dotted 1px #CCC;">
                    <div class="sIE_r_img" style="height:36px; width:260px; margin-left:0px;" id="cdr_no_1">
                    <div style="float:left;  width:260px; height:auto;"> 
                      
                      <iframe name="yframe_hotfix_edit" src="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/product_order/upload_cdr" style="border:none; width:260px; height:260px;"></iframe>
                    </div>
                    </div>
              <form style="float:left; width:260px;" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/product_order/upload_cdr" id="hq_upload_cdr" target="yframe_hotfix_edit" method="post" enctype="multipart/form-data" >
              <div style="float:left; width:60px; height:50px; overflow:hidden; margin-left:20px;position:relative;">
                 <input type="file" class="sIE_r_img_file" id="hq_cdr_file" name="cdr_file"   style=" opacity:0; position:relative; z-index:10; margin-top:0px;"  />
                 <input type="button" class="sIE_r_img_file" name="jpg" style=" opacity:1; width:60px; text-align:center; height:24px; position:absolute; z-index:9; margin-top:0px;" value="浏览" />
              </div>
                 <input type="button" id="hq_cdr_upload_submit" value="上传CDR" style=" float:right; width:70px;" /> 
                <div id="testFileInput" class="uploadify" style="height: 30px; width: 120px; float:left; margin-top:10px;"> 
              
               </div>  
                 
              </form>
                
                
                
    <div class="sIE_l_02">
  <div class="button" style=" margin-right:15px;">
    <div class="buttonContent">
       <button id="submit" type="button" >确定</button>
    </div>
  </div>
  <div class="button">
    <div class="buttonContent">
       <button class="close">取消</button>
    </div>
  </div>
</div>
 		
    
</div>

<!-- {literal} --> 
<script type="text/javascript">
$(document).ready(function()  
{	var tr_str	=	'';
	tr_str	=	$("#material_table").find("tr").length;//计算材料的个数
	
    $("#submit").click(function(){
		var	after_str='';
		after_str	=	$("#material_table").find("tr").length;//修改后材料的个数
		if($('input[name=pcs]').val()==''||$('input[name=pcs]').val()==0){
			alert('片数不能为空或为零!');return;
		}else if($('input[name=quote_factor]').val()==''||$('input[name=quote_factor]').val()==0){
			alert('报价系数不能为空或为零!');return;	
		}else if(tr_str!=after_str){
			if(tr_str>after_str){
				var	result_str = '';
				result_str	=	tr_str-after_str;//算出少了几条
				str_str	=	'材料个数与原来不等，少了'+result_str+'条！';
				alert(str_str);return;
			}
			if(tr_str<after_str){
				var	result_str = '';
				result_str	=	after_str-tr_str;//算出少了几条
				str_str	=	'材料个数与原来不等，多了'+result_str+'条！';
				alert(str_str);return;
			}
		}else if($("#saleman_name").val()==''){
			alert('业务员不能为空!');return;	
		}else if($("#quotation_date").val()==''){
			alert('时间不能为空!');return;	
		}else if($("#order_number").val()==''){
			alert('订单号不能为空!');return;	
		}else if($("#single_number").val()==''){
			alert('返单号不能为空!');return;	
		}else if($("#customer_num_1").val()==''){
			alert('客户代码不能为空!');return;	
		}else if($("#customer_code").val()==''){
			alert('客户名不能为空!');return;	
		}else if($("#design_pic_name").val()==''){
			alert('设计名称不能为空!');return;	
		}else if($("#gummed_paper_1").val()==''){
			alert('请选择胶纸名称!');return;	
		}else if($("#material_price").val()==''){
			alert('材料费不能为空!');return;	
		}else if($("#manual_id").val()==''){
			alert('工厂手工费不能为空!');return;	
		}else if($("#jiaozhi").val()==''){
			alert('胶纸费不能为空!');return;	
		}else if($("#coefficient").val()==''){
			alert('成本系数不能为空!');return;	
		}else if($("#cost_price").val()==''){
			alert('成本价不能为空!');return;	
		}else if($("#monolithic_quote").val()==''){
			alert('单片报价不能为空!');return;	
		}else if($("#final_quotation").val()==''){
			alert('最终报价不能为空!');return;	
		}else{
			$.ajax({
				url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/product_order/check_photo',//通过Ajax取数据的目标页面
				data:{},
				type:'post',//方法，还可以是"post"
				dataType:'text',//数据类型，还有其它的，详见jQuery手册
				success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
				{
					if(locals==1){
						$("#submit_form").submit();
					}else{
						alert("请上传图片,且名称不包含空格！");return;
					}
				}
			});
		}
	    
    });
	
	
	$("#inch_w").bind("input propertychange", function() {
		//alert($(this).val());
		var cm_w = $(this).val() * 2.54;
		if(cm_w != ''){
			cm_w = cm_w.toFixed(4);
		}
		$("#cm_w").val(cm_w);
		$("#cm_w1").val(cm_w);
	});
	
	$("#inch_h").bind("input propertychange", function() {
		//alert($(this).val());
		var cm_h = $(this).val() * 2.54;
		if(cm_h != ''){
			cm_h = cm_h.toFixed(4);
		}
		
		$("#cm_h").val(cm_h);
		$("#cm_h1").val(cm_h);
	});
	
	$("#cm_w").bind("input propertychange", function() {
		//alert($(this).val());
		var inch_w = $(this).val() / 2.54;
		
		if(inch_w != ''){
			inch_w = inch_w.toFixed(4);
		}
		
		$("#inch_w").val(inch_w);
		$("#inch_w1").val(inch_w);
	});
	
	$("#cm_h").bind("input propertychange", function() {
		//alert($(this).val());
		var inch_h = $(this).val() / 2.54;
		if(inch_h != ''){
			inch_h = inch_h.toFixed(4);
		}
		$("#inch_h").val(inch_h);
		$("#inch_h1").val(inch_h);
	});

	//尺寸的调整js
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
					success:function(locals)//成功后执行的语句，这里是一个函数，“locals”是返回的数据
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
	
	$("#material_info_c_color").change(function (){
		var a = $("#material_select").val();
		var color = $("#material_info_c_color").val();//颜色
		$.ajax({
			url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/get_material_c_infomation',//通过Ajax取数据的目标页面
			data:{"material_name":a,"material_color":color},
			type:'get',//方法，还可以是"post"
			dataType:'json',//数据类型，还有其它的，详见jQuery手册
			success:function(locals)//成功后执行的语句，这里是一个函数，“locals”是返回的数据
			{
				var objs = locals.size;
				var size = '';
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
			//$("#sIE_size02 option[value='1']").attr("selected", "selected");
			$("#sIE_size02").find("option[value='1']").attr("selected",true);
		}
		if(s01 == 2){
			//alert('2');
			//$("#sIE_size02 option[value='2']").attr("selected", "selected");
			$("#sIE_size02").find("option[value='2']").attr("selected",true);
		}
		
	});
	
	$("#sIE_size02").change(function (){
		var s02 = $("#sIE_size02").val();
		//$("#sIE_size01 option[value='1']").attr("selected", "selected");
		if(s02 == 1){
			//$("#sIE_size01 option[value='1']").attr("selected", "selected");
			$("#sIE_size01").find("option[value='1']").attr("selected",true);
		}
		if(s02 == 2){
			//$("#sIE_size01 option[value='2']").attr("selected", "selected");
			$("#sIE_size01").find("option[value='2']").attr("selected",true);
		}
	});
	
});

//材料删除
function getDel(k,row){
   $(document).ready(function(){
	var price_a = $("#price_a" + row).text();    //    当条材料价钱			
	var material_price = $("#material_price").val();    //   材料费 
	var manual_id = $("#manual_id").val(); //工厂手工费
	var inch_w = $("#inch_w").val();   
	var inch_h = $("#inch_h").val();  
    var mid = $("#mid").val();   
   	var total_price_id = $("#total_price_id_2").val();    //   当前合计
	var coefficient = $("#coefficient").val();    //   当前成本系数
	var piece = $("#piece").val();    //   当前片数
	var default_quote_coefficient = $("#default_quote_coefficient").val();    //   报价系数
	var parities = $("#parities").val();    //   汇率
	var aaa = $("#parities").find("option:selected").text();
	aaa=aaa.split(" ");	
	$.ajax({
			url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/delete_change_table_quotation_sheet_material',//通过Ajax取数据的目标页面
			type:'get',//方法，还可以是"post"
			data:{'id':row,'mid':mid},
			dataType:'json',//数据类型，还有其它的，详见jQuery手册
			success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
			{   
				locals=locals.split("|");
				price_a = price_a.replace("元","");
				material_price = material_price.replace("元","");
				var total_price = material_price + "-" + price_a;  //删除后材料价钱 
				total_price = eval('('+total_price+')');
				total_price = total_price.toFixed(4);
				$("#material_price").val(total_price + "元");

				manual_id = manual_id.replace("元","");
				
				//无设计手工费	
				if(inch_w!="" && inch_h!=""){
					var a=Math.ceil(inch_w/19); <!--判断长宽是否大于19的方法-->
					var b=Math.ceil(inch_h/19);
					
					total_price=(locals[1]*a*b).toFixed(2);
					$("#manual_id").val(total_price + "元"); //手工费
				}else{
					$("#manual_id").val(locals[1] + "元"); //手工费
				}
				total_price_id = total_price_id.replace("元","");
				var total_price_id_a = total_price_id + "-" + locals[0] + "-" + price_a;    //删除后 合计				
				total_price_id_a = eval('('+total_price_id_a+')');
				total_price_id_a = total_price_id_a.toFixed(2);
				$("#total_price_id").val(total_price_id_a + "元");	
				$("#total_price_id_1").val(total_price_id_a + "元");	
				$("#total_price_id_2").val(total_price_id_a + "元");	
		
				var coefficient_a = total_price_id_a + "*" + coefficient;    //   工厂成本
				coefficient_a = eval('('+coefficient_a+')');
				coefficient_a = coefficient_a.toFixed(2);				
				$("#cost_price").val(coefficient_a + "元");
				
				var monolithic_quote = total_price_id_a + "*" + default_quote_coefficient + "/" + parities;
				monolithic_quote = eval('('+monolithic_quote+')');
				monolithic_quote = monolithic_quote.toFixed(2);
				$("#monolithic_quote").val(aaa[0] + monolithic_quote);					
				
				var final_quotation = monolithic_quote + "*" + piece;
				
				final_quotation = eval('('+final_quotation+')');
				final_quotation = final_quotation.toFixed(2);
				$("#final_quotation").val(aaa[0] + final_quotation);//最终报价		
					
			}
		});
     $(k).parent().remove();  
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

//变换胶纸的名称
function gummed_paper(){	
   if($("#gummed_paper_1").val()!=''){ 					
	   var cm_w = $("#cm_w").val();
	   var cm_h = $("#cm_h").val();

	   var gummed_paper = $("#gummed_paper_1").val();

	   var aaa = $("#parities").find("option:selected").text();
	   aaa=aaa.split(" ");	
	   ///	alert(aaa);
		$.ajax({
			url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/product_order/gummed_paper',//通过Ajax取数据的目标页面
			data:{"cm_w":cm_w,"cm_h":cm_h,"gummed_paper":gummed_paper},
			type:'post',//方法，还可以是"post"
			dataType:'text',//数据类型，还有其它的，详见jQuery手册
			success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
			{
				locals=locals.split("|");
				
				locals[1] = eval('('+locals[1]+')');
				locals[1] = locals[1].toFixed(2);					
				
				$("#jiaozhi").val(locals[1] + "元");
				
				$("#tapedata_formula").val(locals[2]);

				var material_price = $("#material_price").val();//材料费
				var manual_id = $("#manual_id").val();//手工费
				
				material_price = material_price.replace("元","");
				manual_id = manual_id.replace("元","");

				if(material_price!=""){
					if(locals[1]!=""){
					   var total_price = locals[1] + "+" + material_price + "+" + manual_id;
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
				
				$("#total_price_id_2").val(total_price+"元");//合计	

				var coefficient = $("#coefficient").val();
				var cost_price = total_price + "*" + coefficient;
				cost_price = eval('('+cost_price+')');
				cost_price = cost_price.toFixed(2);
				$("#cost_price").val(cost_price);  //成本价
				
				var piece = $("#piece").val();
				var default_quote_coefficient = $("#default_quote_coefficient").val();//报价系数
				var parities = $("#parities").val();//货币
				
				//var version = $("#version").val();//版费
				
				var monolithic_quote = total_price + "*" + default_quote_coefficient + "/" + parities;   
				monolithic_quote = eval('('+monolithic_quote+')');
				monolithic_quote = monolithic_quote.toFixed(2);
				$("#monolithic_quote").val(aaa[0] + monolithic_quote);//单片报价						
				
				var final_quotation = monolithic_quote + "*" + piece;
				final_quotation = eval('('+final_quotation+')');
				final_quotation = final_quotation.toFixed(2);
				$("#final_quotation").val(aaa[0] + final_quotation);//最终报价
				
																				
			}
			
		});	
	}
}
//片数计算
function piece1(){
	 //alert(1231231);					
	  var piece = $("#piece").val();//片数
	  var mid = $("#mid").val();//报价id
	  var default_quote_coefficient = $("#default_quote_coefficient").val();//报价系数
	  var parities = $("#parities").val();//货币
	  var total_price = $("#total_price_id_2").val();//合计
	  total_price = total_price.replace("元","");
	  var aaa = $("#parities").find("option:selected").text();
	  aaa=aaa.split(" ");	
	  if(piece=="" || piece==0){
			 var final_quotation = total_price + default_quote_coefficient + "/" + parities;
			 var monolithic_quote = total_price + "*" + 1 + "*" + default_quote_coefficient + "/" + parities;
			 final_quotation = eval('('+final_quotation+')');
			 final_quotation = final_quotation.toFixed(2);
			 $("#final_quotation").val(aaa[0] + final_quotation);
			 monolithic_quote = eval('('+monolithic_quote+')');
			 monolithic_quote = monolithic_quote.toFixed(2);
			 $("#monolithic_quote").val(aaa[0] + monolithic_quote);								   
	  }else{					
		   if(total_price == 0){
				if(parities =='' || parities == 0){
					var monolithic_quote = default_quote_coefficient;
				}else{
					var monolithic_quote = default_quote_coefficient + "/" + parities;
				}
		   }else{
				if(parities =='' || parities == 0){
					var monolithic_quote = total_price + "*" + default_quote_coefficient;
				}else{
				   // alert(total_price);alert(default_quote_coefficient);alert(parities);
					var monolithic_quote = total_price + "*" + default_quote_coefficient + "/" + parities;
				}
		   }
		   
		   monolithic_quote = eval('('+monolithic_quote+')');
		   monolithic_quote = monolithic_quote.toFixed(2);
		   $("#monolithic_quote").val(aaa[0] + monolithic_quote);							   
		   //alert(monolithic_quote);return;
		   var final_quotation = monolithic_quote + "*" + piece;
		   final_quotation = eval('('+final_quotation+')');
		   final_quotation = final_quotation.toFixed(2);
		   $("#final_quotation").val(aaa[0] + final_quotation);							   
		   //alert(aaa[0]);
	  }
}

//报价系数计算
function default_quote_coefficient1(){
	 var default_quote_coefficient = $("#default_quote_coefficient").val();//报价系数
	 //var lowest_cost_factor = $("#lowest_cost_factor").val();报价系数标准
	 var piece = $("#piece").val();//片数
	 var parities = $("#parities").val();//货币
	 var total_price = $("#total_price_id_2").val();//合计
	// var version = $("#version").val();
	 total_price = total_price.replace("元","");	
	 var huobifuhao = $("#parities").find("option:selected").text();
	 huobifuhao=huobifuhao.split(" ");	
	if(default_quote_coefficient=="" || default_quote_coefficient==0){
		var final_quotation = total_price + "*" + 0 + "*" + default_quote_coefficient + "/" + parities;
		var monolithic_quote = total_price + "*" + 1 + "*" + default_quote_coefficient + "/" + parities;
		
		final_quotation = eval('('+final_quotation+')');
		final_quotation = final_quotation.toFixed(2);
		$("#final_quotation").val(huobifuhao[0] + final_quotation);
		
		monolithic_quote = eval('('+monolithic_quote+')');
		monolithic_quote = monolithic_quote.toFixed(2);
		$("#monolithic_quote").val(huobifuhao[0] + monolithic_quote);								
		
	}else{
		if(total_price == 0){
			var monolithic_quote =  default_quote_coefficient + "/" + parities;
		}else{
			var monolithic_quote = total_price + "*" + default_quote_coefficient + "/" + parities;
		}
		monolithic_quote = eval('('+monolithic_quote+')');
		monolithic_quote = monolithic_quote.toFixed(2);
		$("#monolithic_quote").val(huobifuhao[0] + monolithic_quote);//单片报价							
		
		var final_quotation = monolithic_quote + "*" + piece;
		final_quotation = eval('('+final_quotation+')');
		final_quotation = final_quotation.toFixed(2);
		$("#final_quotation").val(huobifuhao[0] + final_quotation);	//最终报价					
		
	}
						
	
}


//货币计算单片报价和最终报价
function parities1(){
	
	var piece = $("#piece").val();//片数
	var mid = $("#mid").val();//报价ID
	var default_quote_coefficient = $("#default_quote_coefficient").val();//报价系数
	var parities = $("#parities").val();//货币
	var aaa = $("#parities").find("option:selected").text();
	aaa=aaa.split(" ");
	var total_price = $("#total_price_id_2").val();
	total_price = total_price.replace("元","");
	
	var monolithic_quote = total_price + "*" + default_quote_coefficient + "/" + parities;
	
	monolithic_quote = eval('('+monolithic_quote+')');
	monolithic_quote = monolithic_quote.toFixed(2);
	$("#monolithic_quote").val(aaa[0] + monolithic_quote);						   
	
	var final_quotation = monolithic_quote + "*" + piece;		
	final_quotation = eval('('+final_quotation+')');
	final_quotation = final_quotation.toFixed(2);
	$("#final_quotation").val(aaa[0] + final_quotation);	

	
}		

//两种添加材料的js
$(document).ready(function() {

	var row_number = 0 ;
	$("#insert_material1").click(function (){
		
		var material_name = $("#material_select").val();//材料名称
		var size_width = $("#size_inch_width").val();//材料英宽
		var size_height = $("#size_inch_height").val();//材料英长
		var color = $("#material_info_color").val();//颜色
		var quantity = $("#material_quantity").val();//数量
		var mid = $("#mid").val();//报价id
		//var s01 = $("#sIE_size01").val();
		var size = size_width+"*"+size_height;
	    var aaa = $("#parities").find("option:selected").text();//货币
	    aaa=aaa.split(" ");	
			
		var m_unit = '';
		//if(s01 == '1'){
//			m_unit = 'inch';
//		}
//		if(s01 == '2'){
//			m_unit = 'cm';
//		}
		var inch_w = $("#inch_w").val();
		var inch_h = $("#inch_h").val();
		var cm_w = $("#cm_w").val();//尺寸宽
		var cm_h = $("#cm_h").val();//尺寸长	
		
		if($("#material_quantity").val()!="" && $("#size_width").val()!="" && $("#size_height").val()!=""){
			$.ajax({
				url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/insert_change_table_quotation_sheet_material',//通过Ajax取数据的目标页面
				type:'get',//方法，还可以是"post"
				data:{'material_name':material_name,'material_color':color,'material_size':size,'material_quantity':quantity,'cm_w':cm_w,'cm_h':cm_h},
				dataType:'json',//数据类型，还有其它的，详见jQuery手册
				success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
				{	
				//alert(locals);
					if(locals != 0){
						locals=locals.split("|");
						var table_value = "<tr class='hq_tableClass02'> <td>"+material_name+"<input type='hidden' id='row_number' value='"+row_number+"' /><input type='hidden' id=sss_materialformula"+locals[0]+" value='"+locals[4]+"' /><input type='hidden' name='materials["+row_number+"][material_name]' value='"+material_name+"' /></td> <td id=w_h_id"+locals[0]+">"+size_width+"*"+size_height+" inch "+m_unit+"<input type='hidden' name='materials["+row_number+"][size_width]' value='"+size_width+"' /><input type='hidden' name='materials["+row_number+"][size_height]' value='"+size_height+"' /><input type='hidden' name='materials["+row_number+"][size]' value='"+size+"' /><input type='hidden' name='materials["+row_number+"][m_unit]' value='"+m_unit+"' /></td> <td>"+color+"<input type='hidden' name='materials["+row_number+"][color]' value='"+color+"' /></td> <td>"+quantity+"<input type='hidden' name='materials["+row_number+"][quantity]' value='"+quantity+"' /></td><td id=price_a"+locals[0]+">"+locals[1]+"元</td><td onClick='getDel(this,"+locals[0]+")'><a href='#'>删除</a></td></tr>";
						$("#material_table").append(table_value);   //为table追加一个tr(下拉项)
						
						var manual_id = $("#manual_id").val();//工厂手工费
						
						//var manual_price = manual_id + "+" + locals[3];
						
						manual_id = manual_id.replace("元","");
						locals[3] = locals[3].replace("元","");
						
						
					    //无设计手工费	
					    if(inch_w!="" && inch_h!=""){
							var a=Math.ceil(inch_w/19); <!--判断长宽是否大于19的方法-->
							var b=Math.ceil(inch_h/19);
							
							total_price=(locals[6]*a*b).toFixed(2);
							$("#manual_id").val(total_price + "元"); //手工费
					    }else{
							$("#manual_id").val(locals[6] + "元"); //手工费
					    }
						
						var jiaozhi = $("#jiaozhi").val();   //获取胶纸费				
						var material_price_1 = $("#material_price").val();   //获取材料费	
						
						jiaozhi = jiaozhi.replace("元","");                     //
						material_price_1 = material_price_1.replace("元","");       //   过滤掉"元"
						//manual_id = manual_id.replace("元","");                   //
						 
						var material_all_price	=	material_price_1+ "+" +locals[1];//计算材料费
						//alert(material_all_price);return;
						material_all_price = eval('('+material_all_price+')');
						material_all_price = material_all_price.toFixed(4);
						$("#material_price").val(material_all_price+ '元');
						
						if(jiaozhi==""){
							var total_price = material_all_price + "+" + total_price;
						}else{
							var total_price = material_all_price + "+" + total_price + "+" + jiaozhi; 
						}
						total_price = eval('('+total_price+')');  //运算符转化为结果
						
						total_price = total_price.toFixed(2);   // 保留2位小数
						//$("#total_price_id").val(total_price + "元");     //
						//$("#total_price_id_1").val(total_price + "元");	 //  合计
						$("#total_price_id_2").val(total_price + "元");	 //	
						//alert(total_price);
						var coefficient = $("#coefficient").val();   //工厂成本系数
						var cost_price = total_price + "*" + coefficient;  //合计*系数 公式
						cost_price = eval('('+cost_price+')');
						cost_price = cost_price.toFixed(2);
						$("#cost_price").val(cost_price);  //工厂成本
						
						var piece = $("#piece").val();  //片数
						var default_quote_coefficient = $("#default_quote_coefficient").val();  //报价系数
						var parities = $("#parities").val();  //汇率
						
						//var version = $("#version").val();
						
						$("#final_quotation").val(aaa[0] + final_quotation);  //最终报价	
						var monolithic_quote = total_price + "*" + default_quote_coefficient + "/" + parities;
						monolithic_quote = eval('('+monolithic_quote+')');
						monolithic_quote = monolithic_quote.toFixed(2);
						$("#monolithic_quote").val(aaa[0] + monolithic_quote);					
						
						var final_quotation = monolithic_quote + "*" + piece;   //最终报价公式
						final_quotation = eval('('+final_quotation+')');
						final_quotation = final_quotation.toFixed(2);
						$("#final_quotation").val(aaa[0] + final_quotation);  //最终报价
					
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
			
			var inch_w = $("#inch_w").val();
			var inch_h = $("#inch_h").val();
			
			var color = $("#material_info_c_color").val();
			var quantity = $("#material_c_quantity").val();
			var mid = $("#mid").val();
			var size = $("#material_c_size").val();
			var size_text = $("#material_c_size").find("option:selected").text();
			var piece = $("#piece").val();
			var aaa = $("#parities").find("option:selected").text();
			aaa=aaa.split(" ");			
			
			if($("#material_c_quantity").val()!=""){
			
				$.ajax({
					url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/insert_change_table_quotation_sheet_material1',//通过Ajax取数据的目标页面
					type:'get',//方法，还可以是"post"
					data:{'material_name':material_name,'material_color':color,'material_size':size,'material_quantity':quantity,'mid':mid},
					dataType:'json',//数据类型，还有其它的，详见jQuery手册
					success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
					{  
						//alert(locals);return;
						if(locals != 0){
							var piece = $("#piece").val();
							if(piece<12){
								$.ajax({
									url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/product_order/find_version_no',//通过Ajax取数据的目标页面
									type:'get',//方法，还可以是"post"
									data:{'parities':parities,'mid':mid},
									dataType:'json',//数据类型，还有其它的，详见jQuery手册
									success:function(loc)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
									{
										//alert(locals);return;
										//$("#version").val(loc);	
										locals=locals.split("|");
										
										var material_price = $("#material_price").val();
										
										if(material_price=="" || material_price=="0.00元"){
											$("#material_price").val(locals[1]);	
											
										}else{
											var material_price_a = locals[1];
											
											material_price_a = material_price_a.replace("元","");
											material_price = material_price.replace("元","");
											
											var material_price_b = material_price_a + "+" + material_price;
											total_price = eval('('+material_price_b+')');
											total_price = total_price.toFixed(4);
											$("#material_price").val(total_price + "元");	
										}				
										
										var table_value = "<tr class='hq_tableClass02'> <td>"+material_name+"<input type='hidden' id='row_number' value='"+row_number+"' /><input type='hidden' name='materials["+row_number+"][material_name]' value='"+material_name+"' /></td> <td>"+size_text+"<input type='hidden' name='materials["+row_number+"][size]' value='"+size+"' /></td> <td>"+color+"<input type='hidden' name='materials["+row_number+"][color]' value='"+color+"' /></td> <td>"+quantity+"<input type='hidden' name='materials["+row_number+"][quantity]' value='"+quantity+"' /></td><td id=price_a"+locals[0]+">"+locals[1]+"</td><td onClick='getDel(this,"+locals[0]+")'><a href='#'>删除</a></td></tr>";
										$("#material_table").append(table_value);   //为table追加一个tr(下拉项)
										
										var manual_id = $("#manual_id").val(); //获取当前手工费
										
										manual_id = manual_id.replace("元","");
										 
										
										//无设计手工费	
										if(inch_w!="" && inch_h!=""){
											var a=Math.ceil(inch_w/19); <!--判断长宽是否大于19的方法-->
											var b=Math.ceil(inch_h/19);
											total_price=(locals[6]*a*b).toFixed(2);
											$("#manual_id").val(total_price + "元"); //手工费
										}else{
											$("#manual_id").val(locals[6] + "元"); //手工费
										}
										
										var jiaozhi = $("#jiaozhi").val();   //获取胶纸费				
										var material_price_1 = $("#material_price").val();   //获取材料费	
										
										
										jiaozhi = jiaozhi.replace("元","");                     //
										material_price_1 = material_price_1.replace("元","");       //   过滤掉"元"
										
										if(jiaozhi==""){
											var total_price = material_price_1 + "+" + total_price;
										}else{
											var total_price = material_price_1 + "+" + total_price + "+" + jiaozhi; 
										}
										total_price = eval('('+total_price+')');  //运算符转化为结果
										total_price = total_price.toFixed(2);   // 保留2位小数
										$("#total_price_id").val(total_price + "元");     //
										$("#total_price_id_1").val(total_price + "元");	 //  合计
										$("#total_price_id_2").val(total_price + "元");	 //	
										
										var coefficient = $("#coefficient").val();   //工厂成本系数
										var cost_price = total_price + "*" + coefficient;  //合计*系数 公式
										cost_price = eval('('+cost_price+')');
										cost_price = cost_price.toFixed(2);
										$("#cost_price").val(cost_price);  //工厂成本
										
										var piece = $("#piece").val();  //片数
										var default_quote_coefficient = $("#default_quote_coefficient").val();  //报价系数
										var parities = $("#parities").val();  //汇率
										
										var monolithic_quote = total_price + "*" + default_quote_coefficient + "/" + parities;
										monolithic_quote = eval('('+monolithic_quote+')');
										monolithic_quote = monolithic_quote.toFixed(2);
										$("#monolithic_quote").val(aaa[0] + monolithic_quote);						
										
										var final_quotation = monolithic_quote + "*" + piece;   //最终报价公式
										
										///var version = $("#version").val();
										
										final_quotation = eval('('+final_quotation+')');
										final_quotation = final_quotation.toFixed(2);
										$("#final_quotation").val(aaa[0] + final_quotation);  //最终报价
									}
								});
							}
							//alert(locals);return;
							locals=locals.split("|");
							var material_price = $("#material_price").val();
							
							if(material_price=="" || material_price=="0.00元"){
								$("#material_price").val(locals[1]);	
								
							}else{
								var material_price_a = locals[1];
								
								material_price_a = material_price_a.replace("元","");
								material_price = material_price.replace("元","");
								
								var material_price_b = material_price_a + "+" + material_price;
								total_price = eval('('+material_price_b+')');
								total_price = total_price.toFixed(4);
								$("#material_price").val(total_price + "元");	
							}				
						
							var table_value = "<tr class='hq_tableClass02'> <td>"+material_name+"<input type='hidden' id='row_number' value='"+row_number+"' /><input type='hidden' name='materials["+row_number+"][material_name]' value='"+material_name+"' /></td> <td>"+size_text+"<input type='hidden' name='materials["+row_number+"][size]' value='"+size+"' /></td> <td>"+color+"<input type='hidden' name='materials["+row_number+"][color]' value='"+color+"' /></td> <td>"+quantity+"<input type='hidden' name='materials["+row_number+"][quantity]' value='"+quantity+"' /></td><td id=price_a"+locals[0]+">"+locals[1]+"</td><td onClick='getDel(this,"+locals[0]+")'><a href='#'>删除</a></td></tr>";
							$("#material_table").append(table_value);   //为table追加一个tr(下拉项)
							
							var manual_id = $("#manual_id").val(); //获取当前手工费
							
							manual_id = manual_id.replace("元","");
							
							locals[3] = locals[3].replace("元","");
							
							total_price = eval('('+manual_id + "+" + locals[3]+')'); //手工费叠加
							
							total_price = total_price.toFixed(2);		
							if(inch_w!="" && inch_h!=""){
							
								var a=Math.ceil(inch_w/19);
								var b=Math.ceil(inch_h/19);
								
								total_price=(locals[6]*a*b).toFixed(2);
								
								$("#manual_id").val(total_price + "元"); 
							 
						   }else{
								$("#manual_id").val(locals[6] + "元"); 
						   }
						
							 //无设计手工费
							
							var jiaozhi = $("#jiaozhi").val();   //获取胶纸费				
							var material_price_1 = $("#material_price").val();   //获取材料费	
							
							
							jiaozhi = jiaozhi.replace("元","");                     //
							material_price_1 = material_price_1.replace("元","");       //   过滤掉"元"
							
							if(jiaozhi==""){
								var total_price = material_price_1 + "+" + total_price;
							}else{
								var total_price = material_price_1 + "+" + total_price + "+" + jiaozhi; 
							}
							total_price = eval('('+total_price+')');  //运算符转化为结果
							total_price = total_price.toFixed(2);   // 保留2位小数
							$("#total_price_id").val(total_price + "元");     //
							$("#total_price_id_1").val(total_price + "元");	 //  合计
							$("#total_price_id_2").val(total_price + "元");	 //	
							
							var coefficient = $("#coefficient").val();   //工厂成本系数
							var cost_price = total_price + "*" + coefficient;  //合计*系数 公式
							cost_price = eval('('+cost_price+')');
							cost_price = cost_price.toFixed(2);
							$("#cost_price").val(cost_price);  //工厂成本
							
							var piece = $("#piece").val();  //片数
							var default_quote_coefficient = $("#default_quote_coefficient").val();  //报价系数
							var parities = $("#parities").val();  //汇率
							
							var monolithic_quote = total_price + "*" + default_quote_coefficient + "/" + parities;
							monolithic_quote = eval('('+monolithic_quote+')');
							monolithic_quote = monolithic_quote.toFixed(2);
							$("#monolithic_quote").val(aaa[0] + monolithic_quote);						
							
							var final_quotation = monolithic_quote + "*" + piece;   //最终报价公式
							
							//var version = $("#version").val();
							
							final_quotation = eval('('+final_quotation+')');
							final_quotation = final_quotation.toFixed(2);
							$("#final_quotation").val(aaa[0] + final_quotation);  //最终报价
							
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
		
		
	//图片上传jpg	
	$("#hq_jpg_upload_submit").click(function (){
		$("#image_no").css("display","none");
		$("#image_no").val("");
		$("#image_no_1").css("display","block");
		$("#hq_upload_jpg").submit();
	});
	//图片上传cdr
	$("#hq_cdr_upload_submit").click(function (){
		$("#cdr_no").css("display","none");
		$("#cdr_no").val("");
		$("#cdr_no_1").css("display","block");
		$("#hq_upload_cdr").submit();
	});	
});						
</script> 
<!-- {/literal} -->