<?php /* Smarty version 2.6.22, created on 2024-10-25 11:13:07
         compiled from product_order/outgoing_quotation_sheet_order.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'number_format', 'product_order/outgoing_quotation_sheet_order.html', 294, false),)), $this); ?>
<script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/cstown_Sys.js" type="text/javascript"></script>
<link href="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/css/cstown_sys.css" rel="stylesheet" type="text/css" media="screen" />
<div class="pageContent">
    <div class="stkInfEnter" style="width:98%" layoutH="100" id="ttbjd_ysj">
        <div class="sIE_title">外发订单详情</div>
        <form method="post" action="<?php echo $this->_tpl_vars['action']; ?>
" id="submit_form" enctype="multipart/form-data" onsubmit="return validateCallback(this, navTabAjaxDone)">
            <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['outgoing_quotation_sheet']['id']; ?>
" />
            <input type="hidden" name="modify_order" value="2" />
            	
            <div class="sIEK" style="width:680px;">
				<?php if ($this->_tpl_vars['user_hidden']['group_id'] != 74): ?>
                <div class="sIE_l_01" style="width:230px;">
                    <div class="sIE_l_01_title" style="width:80px;">跟单人:</div>
                    <input type="text" class="sIE_No" style="width:100px;" value="<?php echo $this->_tpl_vars['sale_user']; ?>
" readonly />
                    <!--<select class="combox" name="sale_user" id="documentary" <?php if ($this->_tpl_vars['saleman_name'] != $this->_tpl_vars['sale_user'] && $this->_tpl_vars['salesman'] != 'admin'): ?>disabled="disabled"<?php endif; ?>> <option value="">全部</option>

                      <?php $_from = $this->_tpl_vars['sale_users']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['du']):
?>
                      <option value="<?php echo $this->_tpl_vars['du']['user_name']; ?>
" <?php if ($this->_tpl_vars['du']['user_name'] == $this->_tpl_vars['sale_user']): ?> selected <?php endif; ?>>
                              <?php echo $this->_tpl_vars['du']['user_name']; ?>

                      </option>
                      <?php endforeach; endif; unset($_from); ?>
                    </select> -->
                </div>

                <div class="sIE_l_01" style="width:230px;">
                    <div class="sIE_l_01_title">付款状态:</div>
                    <input type="text" readonly name="" value="<?php if ($this->_tpl_vars['outgoing_quotation_sheet']['new_time']): ?>已付款<?php else: ?>未付款<?php endif; ?> " class="sIE_No" />
                </div>
                <div class="sIE_l_01" style="width:200px;">
                    <div class="sIE_l_01_title">发票状态:</div>
                    <input type="text" readonly name="" value="<?php if ($this->_tpl_vars['outgoing_quotation_sheet']['invoice_status'] == 1): ?> 已生成 <?php else: ?> 未生成 <?php endif; ?>" class="sIE_No" />
                </div>
                
                <div class="sIE_l_01" style="width:230px;">
                    <div class="sIE_l_01_title">业务员:</div>
                    <input type="text" class="sIE_No" style="width:100px;" value="<?php echo $this->_tpl_vars['outgoing_quotation_sheet']['saleman_name']; ?>
" readonly />
                </div>
                <?php endif; ?>
                <div class="sIE_l_01" style="width:230px;">
                    <div class="sIE_l_01_title">时间:</div>
                    <input type="text" class="sIE_No" style="width:100px;" id="q_time" value="<?php echo $this->_tpl_vars['outgoing_quotation_sheet']['q_time']; ?>
"  readonly  />
                </div>
                <div class="sIE_l_01" style="width:200px;">
                    <div class="sIE_l_01_title">报价名称:</div>
                    <input type="text" class="sIE_No" readonly style="width:100px;" id="design_name_add" value="<?php echo $this->_tpl_vars['outgoing_quotation_sheet']['design_name']; ?>
"  />
                </div>
                <div class="sIE_l_01" style="width:230px;">
                    <div class="sIE_l_01_title" style="width:80px;">客户代码:</div>
                    <input type="text" class="sIE_No" readonly style="width:100px;" id="outgoing_inquiry_sheet_customer_code1_add" value="<?php echo $this->_tpl_vars['outgoing_quotation_sheet']['customer_code']; ?>
" />
                </div>

                <!--<div class="sIE_l_01" style="width:230px;">
                    <div class="sIE_l_01_title">客户名:</div>
                    <input type="text" class="sIE_No" style="width:100px;" id="outgoing_inquiry_sheet_customer_name1_add" value="<?php echo $this->_tpl_vars['outgoing_quotation_sheet']['customer_name']; ?>
"   readonly />
                </div>-->
                <div class="sIE_l_01" style="width:230px;">
                    <div class="sIE_l_01_title" style="width:80px;">交货期:</div>
                    <input type="text" class="sIE_No" style="width:100px;" value="<?php echo $this->_tpl_vars['outgoing_quotation_sheet']['deliver_goods']; ?>
" readonly />
                </div>
                <?php if ($this->_tpl_vars['user_hidden']['group_id'] != 74): ?>
                <div class="sIE_l_01" style="width:200px;">
                    <div class="sIE_l_01_title" style="line-height:26px;">报关品类:</div>
                    <input type="text" class="sIE_No" style="width:100px;" value="<?php echo $this->_tpl_vars['outgoing_quotation_sheet']['order_category_name']; ?>
" readonly />
                </div>
                <?php endif; ?>
                <div class="sIE_l_01" style="width:230px;">
                    <div class="sIE_l_01_title" style="width:80px;">做货类型:</div>
                    <input type="text" class="sIE_No" style="width:100px;" value="<?php echo $this->_tpl_vars['outgoing_quotation_sheet']['goods_type']; ?>
" readonly />
                </div>
                
                <div class="sIE_l_01" style="width:230px;">
                    <div class="sIE_l_01_title" style="width:80px;">尺码类型:</div>
                    <select class="picture_select01" id="size_type" name="size_type" style="height:26px; width:106px;">
                      <option <?php if ($this->_tpl_vars['outgoing_quotation_sheet']['size_type'] == ''): ?>selected="selected"<?php endif; ?> value="">请选择</option>
                      <option <?php if ($this->_tpl_vars['outgoing_quotation_sheet']['size_type'] == '1'): ?>selected="selected"<?php endif; ?> value="1">工厂尺码</option>
                      <option <?php if ($this->_tpl_vars['outgoing_quotation_sheet']['size_type'] == '2'): ?>selected="selected"<?php endif; ?> value="2">客户尺码</option>
                  	</select>
                </div>
                <?php if ($this->_tpl_vars['user_hidden']['group_id'] != 74): ?>
                <div class="sIE_l_01" style="width:200px;">
                    <div class="sIE_l_01_title" style="width:80px;">供应商:</div>
                    <select name="supplier_code" id="supplier_code1" style="height:26px;">
                        <option value="0">请选择</option>
                        <?php $_from = $this->_tpl_vars['supplier_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sl']):
?>
                        <option value="<?php echo $this->_tpl_vars['sl']['supplier_code']; ?>
" <?php if ($this->_tpl_vars['outgoing_quotation_sheet']['supplier_code'] == $this->_tpl_vars['sl']['supplier_code']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['sl']['supplier_code']; ?>
</option>
                        <?php endforeach; endif; unset($_from); ?>
                    </select>
                </div>
                <?php endif; ?>
                <div class="sIE_l_01" style="width:230px;">
                    <div class="sIE_l_01_title" style="line-height:26px; width:100px;">预计发货日期：</div>
                    <input type="text" id="delivery_time" name="start_time" class="date" readOnly style="width:80px; height:20px;" value="<?php echo $this->_tpl_vars['outgoing_quotation_sheet']['estimated_time']; ?>
" />
                </div>
                <div style="width:100%; float:left;">
                    <input type="hidden" class="sIE_No" id="choose_design_code1_add" style="width:100px;" readonly="readonly" value="<?php if ($this->_tpl_vars['outgoing_quotation_sheet']['quotation_code']): ?><?php echo $this->_tpl_vars['outgoing_quotation_sheet']['quotation_code']; ?>
<?php else: ?><?php echo $this->_tpl_vars['design_code']; ?>
<?php endif; ?>" />
    
                    <div style="float:left; width:230px;">
                        <div class="sIE_l_01_title" style="line-height:26px; width:100%;">生产要求：</div>
                        <textarea id="notes" name="remark" style="width:180px; margin-bottom:10px; margin-top:0px; height:52px;" onfocus="if(this.value=='备注')this.value='';" class="add01_textarea textInput"><?php if ($this->_tpl_vars['outgoing_quotation_sheet']['remark']): ?><?php echo $this->_tpl_vars['outgoing_quotation_sheet']['remark']; ?>
<?php else: ?>备注<?php endif; ?></textarea>
                    </div>
                    
                    <div style="float:left; width:230px;">
                        <div class="sIE_l_01_title" style="line-height:26px; width:100%;">产前样：</div>
                        <textarea  name="before_production" style="width:180px; margin-bottom:10px; margin-top:0px; height:52px;" class="add01_textarea textInput"><?php echo $this->_tpl_vars['outgoing_quotation_sheet']['before_production']; ?>
</textarea>
                    </div>
                    
                    <div style="float:left; width:200px;">
                        <div class="sIE_l_01_title" style="line-height:26px; width:100%;">包装要求：</div>
                        <textarea  name="packaging_requirements" style="width:180px; margin-bottom:10px; margin-top:0px; height:52px;" class="add01_textarea textInput"><?php echo $this->_tpl_vars['outgoing_quotation_sheet']['packaging_requirements']; ?>
</textarea>
                    </div>
                </div>


                <!-- 新版尺码表 -->
                <div id="oic1_table" class="sIE_l_02" style="width:95%;">
                	
                    <?php if ($this->_tpl_vars['order']['clothing'] == 67): ?>
                    	<?php if ($this->_tpl_vars['basic_category_list']): ?>
                            <table class="size_table">
                                <tr>
                                    <th>尺码</th>
                                    <?php $_from = $this->_tpl_vars['basic_category_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['bcl']):
?>
                                    <th><?php echo $this->_tpl_vars['bcl']['cn_name']; ?>
</th>
                                    <?php endforeach; endif; unset($_from); ?>
                                </tr>
                                <?php $_from = $this->_tpl_vars['size_chart_list_array']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['scl']):
?>
                                    <tr>
                                        <td><?php echo $this->_tpl_vars['scl']['size']; ?>
</td>
                                        <?php $_from = $this->_tpl_vars['basic_category_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k2'] => $this->_tpl_vars['bcl']):
?>
                                        <td><?php echo $this->_tpl_vars['scl'][$this->_tpl_vars['k2']]; ?>
</td>
                                        <?php endforeach; endif; unset($_from); ?>
                                    </tr>
                                <?php endforeach; endif; unset($_from); ?>
                                <tr>
                                    <td>总计</td>
                                    <?php $_from = $this->_tpl_vars['basic_category_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['bcl']):
?>
                                    <td><?php echo $this->_tpl_vars['bcl']['heji']; ?>
</td>
                                    <?php endforeach; endif; unset($_from); ?>
                                </tr>
                            </table>
                            
                        <?php endif; ?>
                    <?php else: ?>
                    	<?php if ($this->_tpl_vars['quotation_size_chart']): ?>
                        <table cellspacing="0" class="sIE_l_02Tab" style='margin-top:30px;'>
                            <tr>
                                <th>尺码</th>
                                <th>数量</th>
                                <th>颜色</th>
                            </tr>
                            <?php $_from = $this->_tpl_vars['quotation_size_chart']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['qsc']):
?>
                            <tr>
                                <td><?php echo $this->_tpl_vars['qsc']['type_size']; ?>
</td>
                                <td><?php echo $this->_tpl_vars['qsc']['amount']; ?>
</td>
                                <td><?php echo $this->_tpl_vars['qsc']['color']; ?>
</td>
                            </tr>
                            <?php endforeach; endif; unset($_from); ?>
                            <tr>
                            	<td colspan="3" align="center">总计: <?php echo $this->_tpl_vars['outgoing_quotation_sheet']['number']; ?>
</td>
                            </tr>
                        </table>
                        <?php endif; ?>
                	<?php endif; ?>
                    
                </div>

                <!-- 尺码表兼容历史数据 -->
                <?php if (! $this->_tpl_vars['quotation_size_chart'] && $this->_tpl_vars['outgoing_quotation_sheet']['inch_w']): ?>
                <div class="sIE_l_02" style="width:95%;">
                    <table cellspacing="0" class="sIE_l_02Tab" id="oic_table1_add">
                        <tr>
                            <th>尺码</th>
                            <th>数量</th>
                            <?php if ($this->_tpl_vars['outgoing_quotation_sheet']['type'] == 2): ?>
                            <th>颜色</th>
                            <?php endif; ?>
                            <th>备注</th>
                        </tr>
                        <tr>
                            <?php if ($this->_tpl_vars['outgoing_quotation_sheet']['inch_w']): ?>
                            <td><textarea readonly style="width:200px;text-align: center;"><?php echo $this->_tpl_vars['outgoing_quotation_sheet']['inch_w']; ?>
inch_w * <?php echo $this->_tpl_vars['outgoing_quotation_sheet']['inch_h']; ?>
inch_h &#10;  <?php echo $this->_tpl_vars['outgoing_quotation_sheet']['cm_w']; ?>
cm_w * <?php echo $this->_tpl_vars['outgoing_quotation_sheet']['cm_h']; ?>
cm_h</textarea></td>
                            <?php else: ?>
                            <td><input readonly type="text" value="" style="width:100px;text-align: center;"></td>
                            <?php endif; ?>
                            <td class="oqs_number1"><input readonly  type="text"  value="<?php echo $this->_tpl_vars['outgoing_quotation_sheet']['pcs']; ?>
" onkeyup="change_number(<?php echo $this->_tpl_vars['qsc']['id']; ?>
);this.value=this.value.replace(/\D/g,'');" style="width:100px;text-align: center;"></td>
                            <?php if ($this->_tpl_vars['outgoing_quotation_sheet']['type'] == 2): ?>
                            <td><input readonly  type="text" value="<?php echo $this->_tpl_vars['outgoing_quotation_sheet']['color']; ?>
" style="width:100px;text-align: center;"></td>
                            <?php endif; ?>
                            <td><textarea readonly style="text-align: center;"><?php echo $this->_tpl_vars['outgoing_quotation_sheet']['size_note']; ?>
</textarea></td>
                        </tr>
                    </table>
                </div>

                <?php endif; ?>

                <!--<div class="sIE_l_01" style="width:230px; margin-top:10px;">
                    <div class="sIE_l_01_title" style="width:80px;">总数量:</div>
                    <input readonly id="pcs"  type="text" class="sIE_No" style="width:100px;" value="<?php echo $this->_tpl_vars['outgoing_quotation_sheet']['number']; ?>
" />
                </div>-->
                <?php if ($this->_tpl_vars['order_flag'] == 1): ?>
                <div class="sIE_l_02" style="width:95%;">
                    <hr style="border:1px dashed lightgray;margin-bottom: 50px;">

                    <div class="sIE_l_01" style="width:100%;">
                        <table cellspacing="0" class="sIE_l_02Tab">
                            <tr>
                                <td></td>
                                <td style="font-size: 16px;">数量</td>
                                <td style="font-size: 16px;">销售成本单价</td>
                                <td style="font-size: 16px;">销售成本</td>
                            </tr>

                            <?php $_from = $this->_tpl_vars['separate_quotes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['value']):
?>
                            <tr>
                                <td align="center"><?php echo $this->_tpl_vars['value']['cn_name']; ?>
</td>
                                <td align="center"><?php echo $this->_tpl_vars['value']['amount']; ?>
</td>
                                <td class="price_k unite_quote">
                                    <?php if ($this->_tpl_vars['user_hidden']['group_id'] != '74'): ?>
                                    <input name="unite_quote[<?php echo $this->_tpl_vars['value']['category_id']; ?>
]" id="unite_quote_<?php echo $this->_tpl_vars['value']['category_id']; ?>
" type="text" class="sIE_No" readonly style="width:100px;" value="<?php echo $this->_tpl_vars['value']['unite_quote']; ?>
" /><span style="line-height: 26px">元</span>
                                    <?php endif; ?>
                                </td>
                                <td class="price_k factory_out_cost">
                                    <?php if ($this->_tpl_vars['user_hidden']['group_id'] != '74'): ?>
                                    <input name="factory_out_cost[<?php echo $this->_tpl_vars['value']['category_id']; ?>
]" id="factory_out_cost_<?php echo $this->_tpl_vars['value']['category_id']; ?>
" type="text" class="sIE_No" readonly style="width:100px;" value="<?php echo $this->_tpl_vars['value']['factory_out_cost']; ?>
" /><span style="line-height: 26px">元</span>
                                    <?php endif; ?>
                                </td>
                            </tr>
                            <?php endforeach; endif; unset($_from); ?>



                        </table>
                    </div>

                    <div class="sIE_l_01" style="width:33%;">
                        <div class="sIE_l_01_title" style="width:60px;">销售系数:</div>
                        <?php if (isset ( $this->_tpl_vars['quote_coefficient'] )): ?>
                        <input type="text" name="quote_coefficient" id="coefficient_id_production" readonly="readonly" onkeyup="sales_quotation_calculation()" class="sIE_No" value="<?php echo $this->_tpl_vars['quote_coefficient']; ?>
" style="width:100px;" />
                        <?php else: ?>
                        <input type="text" name="quote_coefficient" id="coefficient_id_production" readonly="readonly" onkeyup="sales_quotation_calculation()" class="sIE_No" value="<?php echo $this->_tpl_vars['default_quote_coefficient']; ?>
" style="width:100px;" />
                        <?php endif; ?>
                        <input type="hidden" id="lowest_cost_factor" value="<?php echo $this->_tpl_vars['lowest_cost_factor']; ?>
" />
                    </div>
                    <div class="sIE_l_01" style="width:33%;">
                        <div class="sIE_l_01_title" style="width:60px;">货币:</div>
                        <select class="picture_select01" id="money_id_production" name="money_1" disabled="disabled" onchange="sales_quotation_calculation()" style="height:26px; width:106px;">
                            <option value="">请选择</option>
                            <?php $_from = $this->_tpl_vars['exchangerate']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['qf']):
?>
                            <?php if ($this->_tpl_vars['money'] == $this->_tpl_vars['qf']['value']): ?>
                            <option selected="selected" value="<?php echo $this->_tpl_vars['qf']['value']; ?>
">
                                <?php echo $this->_tpl_vars['qf']['exchangerate_character']; ?>

                                <?php echo $this->_tpl_vars['qf']['exchangerate_name']; ?>

                            </option>
                            <?php else: ?>
                            <option value="<?php echo $this->_tpl_vars['qf']['value']; ?>
">
                                <?php echo $this->_tpl_vars['qf']['exchangerate_character']; ?>

                                <?php echo $this->_tpl_vars['qf']['exchangerate_name']; ?>

                            </option>
                            <?php endif; ?>
                            <?php endforeach; endif; unset($_from); ?>
                        </select>
                    </div>
                    <!--<div class="sIE_l_01" style="width:50%;">
                        <div class="sIE_l_01_title" style="width:80px;">销售单价:</div>
                        <input type="text" readonly name="price" value="<?php echo $this->_tpl_vars['outgoing_quotation_sheet']['price']; ?>
" id="sales_price" class="sIE_No" style="width:100px;" />
                    </div>-->
                    <div class="sIE_l_01" style="width:33%;">
                        <div class="sIE_l_01_title" style="width:60px;">销售总价:</div>
                        <input type="text" readonly  name="bidding_price" value="<?php echo $this->_tpl_vars['outgoing_quotation_sheet']['bidding_price']; ?>
" id="sales_bidding_price" class="sIE_No" style="width:100px;" />
                    </div>
                    <div class="sIE_l_01" style="width:50%;">
                        <div class="sIE_l_01_title" style="width:60px;">设计报价:</div>
                        <input type="text" readonly name="design_cost" id="design_price" onkeyup="sales_quotation_calculation()" value="<?php echo $this->_tpl_vars['outgoing_quotation_sheet']['design_cost']; ?>
" class="sIE_No" style="width:100px;" />
                    </div>
                    <div class="sIE_l_01" style="width:50%;">
                        <div class="sIE_l_01_title" style="width:60px;">版费报价:</div>
                        <input type="text" readonly name="edition_cost" id="edition_price" onkeyup="sales_quotation_calculation()" value="<?php echo $this->_tpl_vars['outgoing_quotation_sheet']['edition_cost']; ?>
" class="sIE_No" style="width:100px;" />
                    </div>
                    <div class="sIE_l_01" style="width:100%;">
                        <table cellspacing="0" class="sIE_l_02Tab">
                            <tr>
                                <td></td>
                                <td style="font-size: 16px;">数量</td>
                                <td style="font-size: 16px;">销售单价</td>
                                <td style="font-size: 16px;">销售报价</td>
                            </tr>

                            <?php $_from = $this->_tpl_vars['separate_quotes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['value']):
?>
                            <tr>
                                <td align="center"><?php echo $this->_tpl_vars['value']['cn_name']; ?>
</td>
                                <td align="center"><?php echo $this->_tpl_vars['value']['amount']; ?>
</td>
                                <td class="price_k">
                                    <?php if ($this->_tpl_vars['user_hidden']['group_id'] != '74'): ?>
                                    <input type="text" class="sIE_No readonly unite_quote1" price="<?php echo $this->_tpl_vars['value']['unite_quote']; ?>
" readonly style="width:100px;" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['value']['unite_quote']*$this->_tpl_vars['quote_coefficient']/$this->_tpl_vars['money'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2) : number_format($_tmp, 2)); ?>
" /><span style="line-height: 26px"></span>
                                    <?php endif; ?>
                                </td>
                                <td class="price_k">
                                    <?php if ($this->_tpl_vars['user_hidden']['group_id'] != '74'): ?>
                                    <input type="text" id="<?php echo $this->_tpl_vars['value']['en_name']; ?>
_sale_cost" class="sIE_No readonly factory_cost" price="<?php echo $this->_tpl_vars['value']['factory_out_cost']; ?>
" readonly style="width:100px;" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['value']['unite_quote']*$this->_tpl_vars['quote_coefficient']/$this->_tpl_vars['money']*$this->_tpl_vars['value']['amount'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2) : number_format($_tmp, 2)); ?>
"/><span style="line-height: 26px"></span>
                                    <script>
                                        var sale_cost=<?php echo $this->_tpl_vars['value']['unite_quote']*$this->_tpl_vars['quote_coefficient']/$this->_tpl_vars['money']; ?>
;
                                        var amount="<?php echo $this->_tpl_vars['value']['amount']; ?>
";
                                        <?php if ($this->_tpl_vars['value']['amount'] == "-"): ?>
                                            sale_cost=0;
                                        <?php else: ?>
                                            sale_cost=sale_cost.toFixed(2)*<?php echo $this->_tpl_vars['value']['amount']; ?>
;
                                        <?php endif; ?>
                                        $("#<?php echo $this->_tpl_vars['value']['en_name']; ?>
_sale_cost").val(sale_cost.toFixed(2));
                                    </script>
                                    <?php endif; ?>
                                </td>
                            </tr>
                            <?php endforeach; endif; unset($_from); ?>



                        </table>
                    </div>
                </div>
                <?php endif; ?>
                
                <div id="order_image_k" style="float:left; width:1200px; margin-top:50px;">
                	<?php if ($this->_tpl_vars['user_hidden']['group_id'] != 74): ?>
                	<div style="float:left; width:100%; margin-bottom:10px;"><button type="button" id="order_image_add" style="float:left; margin-right:10px;">添加</button><div id="max_order_image_error" style="font-size:16px; color:#F00; float:left; line-height:22px; display:none;">最多可添加3个</div></div>
                    <?php endif; ?>
                	<div class="order_image_tongji" style="float:left; width:280px; margin-right:20px;">
                    	<div style="float:left; width:100%; margin-bottom:10px;">
                        	<select class="picture_select01" name="image_type[]" style="height:26px; width:106px;">
                              <option selected="selected" value="洗唛">洗唛</option>
                            </select>
                        </div> 
                        <div style="float:left; margin-top:0px; width:260px;">
                        	<?php if ($this->_tpl_vars['user_hidden']['group_id'] != 74): ?>
                        	<input type="file" name="order_image_file[]" onchange="order_image_change('order_image_1',this);" />  
                            <?php endif; ?>
                            <div class="order_image">
                                <div id="order_image_1">
                                    <?php if ($this->_tpl_vars['order_image']): ?><img class='imgPreview' src='<?php echo $this->_tpl_vars['order_image_1']; ?>
' /><?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                 
                    <?php $_from = $this->_tpl_vars['order_image']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['value']):
?>
                    <?php if ($this->_tpl_vars['k'] != 0): ?>
                    <div id="order_image_div_<?php echo $this->_tpl_vars['value']['name']; ?>
" class="order_image_tongji" style="float:left; width:280px; margin-right:20px;">
                    	<div style="float:left; width:100%; margin-bottom:10px;">
                        	<select class="picture_select01" name="image_type[]" style="height:26px; width:106px;">
                              <option <?php if ($this->_tpl_vars['value']['name'] == ''): ?>selected="selected"<?php endif; ?> value="">请选择</option>
                              <option <?php if ($this->_tpl_vars['value']['name'] == 'Logo标'): ?>selected="selected"<?php endif; ?> value="Logo标">Logo标</option>
                              <option <?php if ($this->_tpl_vars['value']['name'] == '尺码贴'): ?>selected="selected"<?php endif; ?> value="尺码贴">尺码贴</option>
                              <option <?php if ($this->_tpl_vars['value']['name'] == '吊牌'): ?>selected="selected"<?php endif; ?> value="吊牌">吊牌</option>
                            </select>
                            <?php if ($this->_tpl_vars['user_hidden']['group_id'] != 74): ?>
                            <button type="button" onclick="del_order_image('order_image_div_<?php echo $this->_tpl_vars['value']['name']; ?>
',<?php echo $this->_tpl_vars['value']['id']; ?>
);">删除</button>
                            <?php endif; ?>
                        </div> 
                        <div style="float:left; margin-top:0px; width:260px;">
                          	<input type="file" multiple="multiple" name="order_image_file[]" onchange="order_image_change('order_image_<?php echo $this->_tpl_vars['value']['name']; ?>
',this);" />
                            <div class="order_image">
                                <div id="order_image_<?php echo $this->_tpl_vars['value']['name']; ?>
"><img class='imgPreview' src='<?php echo $this->_tpl_vars['value']['image']; ?>
' /></div>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php endforeach; endif; unset($_from); ?>
                    
                    
                </div>
                
            </div>
            </form>
            <div class="sIE_r" style="height:260px; width:260px; margin-top:0px;">
                <!--<div class="sIE_l_01_title" style="width:80px;">报价编号:</div>
                <input type="text" readonly="" value="<?php echo $this->_tpl_vars['outgoing_quotation_sheet']['quotation_code']; ?>
">-->
                <div class="sIE_r_img" style="height:280px; width:260px; margin-left:0px;">
                    <div style="float:left;  width:260px; height:260px;"> 
                      <iframe name="yframe_unfinish" src="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/product_order/upload_goods_jpg" style="border:none;" width="260px" height="260px;"></iframe>
                    </div>
                    <div id="upload_name" style="float:left; margin-top:0px; font-size:14px; margin-left:10px;height:20px; width:200px;"></div>
                    
              	</div>
                <?php if ($this->_tpl_vars['user_hidden']['group_id'] != 74): ?>
                <div style="float:left; margin-top:0px; width:260px;">
                  <form action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/product_order/upload_goods_jpg" id="upload_goods_image" target="yframe_unfinish" method="post" enctype="multipart/form-data" >                                   
                    <div style="float:left; height:50px; width:80px; overflow:hidden; position:relative;">
                     <input type="file" class="sIE_r_img_file" name="upload_file" onchange="image()" id="upload_file" style=" opacity:0; position:relative; z-index:10; margin-top:0px;" />
                     <input type="button" class="sIE_r_img_file" name="jpg" style=" opacity:1; width:80px; text-align:center; height:24px; position:absolute; z-index:9; margin-top:0px;" value="浏览" />
                    </div>
                     <input type="submit" value="上传JPG/PNG" id="goods_image_upload_submit" style=" float:right; width:90px; height:24px;" /> 
                  </form>
                </div>
                <?php endif; ?>
                <!-- 设计师只在有设计时显示：0线上订单；1有设计 -->
                <!--<?php if ($this->_tpl_vars['outgoing_quotation_sheet']['type'] == 0 || $this->_tpl_vars['outgoing_quotation_sheet']['type'] == 1): ?>
                <div class="sIE_l_01" style=" float:none; width:200px; margin:0 auto;">
                    <div class="sIE_l_01_title" style="width:60px; margin-left:10px;">设计师:</div>
                    <input type="text" class="sIE_No" readonly="readonly" id="design_user_add" value="<?php echo $this->_tpl_vars['outgoing_quotation_sheet']['design_user_name']; ?>
" style="width:76px;" />
                </div>
                <?php endif; ?>--> </div>
                
    </div>
    
</div>
<div class="formBar">
    <?php if ($this->_tpl_vars['quotation_sheet']['goods_type'] == "大货"): ?>
    <div class="sIE_l_02">
        <div class="button" style="margin-left:96%; margin-right:5px;">
            <div class="buttonContent">
                <button class="close" id="add_return_order">增加返单</button>
            </div>
        </div>
    </div>
    <?php else: ?>
    <?php endif; ?>
    <div class="sIE_l_02">
    
    	<?php if ($this->_tpl_vars['outgoing'] == 1 && $this->_tpl_vars['user_hidden']['group_id'] != 74): ?>
            <div class="button" style="margin-left:80%; margin-right:5px;">
                <div class="buttonContent">
                    <button id="modify_notes">确定</button>
                </div>
            </div>
            <div class="button">
                <div class="buttonContent">
                    <button class="close">取消</button>
                </div>
            </div>
        <?php else: ?>
            <!--<div class="button" style="margin-left:80%; margin-right:5px;">
                <div class="buttonContent">
                    <button id="modify_supplier_code">确定</button>
                </div>
            </div>-->
            <div class="button" style="margin-left:80%; margin-right:5px;">
                <div class="buttonContent">
                    <button class="close">取消</button>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>
</div>
<script type="text/javascript">
    var order_number='<?php echo $this->_tpl_vars['order_number']; ?>
';
	var order_key = 2;
	
	$("#order_image_add").click(function(){
		var len = $(".order_image_tongji").size();
		if(len < 4){
		var html='';
		html+='<div id="order_image_div_'+order_key+'" class="order_image_tongji" style="float:left; width:280px; margin-right:20px;"><div style="float:left; width:100%; margin-bottom:10px;"><select class="picture_select01" name="image_type[]" style="height:26px; width:106px;"><option value="">请选择</option><option value="Logo标">Logo标</option><option value="尺码贴">尺码贴</option><option  value="吊牌">吊牌</option></select><button type="button" onclick="del_order_image(\'order_image_div_'+order_key+'\');">删除</button></div><div style="float:left; margin-top:0px; width:260px;"><input type="file" multiple="multiple" name="order_image_file[]" onchange="order_image_change(\'order_image_'+order_key+'\',this);" /><div class="order_image" ><div id="order_image_'+order_key+'"></div></div></div></div>';
		$("#order_image_k").append(html); 
		order_key++;
		}
		else{
			$("#max_order_image_error").fadeIn();
		}
	});
	
    $("#documentary").change(function(){
        $.ajax({
            url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/product_order/modify_documentary',//通过Ajax取数据的目标页面
            type:'post',
            dataType:'json',
            data: {order_number:order_number,documentary:$(this).val()},
            success:function(data){}
        });
    });
    $("#add_return_order").click(function (){
        $("#submit_form").submit();
    });
    $("#modify_notes").click(function (){
		var formData = new FormData($('#submit_form')[0]);

		$.ajax({
			type: 'post',
			url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/product_order/outgoing_order_edit_act',          
			data: formData,
			cache: false,
			processData:false,  
			contentType: false,  
			dataType:'json', 
		}).success(function (data){ 
			navTabAjaxDone(data);				
		});
    });
    $("#modify_supplier_code").click(function (){
        $.ajax({
            url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/product_order/modify_supplier_code',//通过Ajax取数据的目标页面
            type:'post',
            dataType:'json',
            data: {order_number:order_number,supplier_code:$("#supplier_code1").val(),remark:$("#notes").val(),size_type:$("#size_type").val()},
            success:function(data){
                navTabAjaxDone(data);
            }
        });
    });
	
	$("#goods_image_upload_submit").click(function (){
		//alert('1111');
		$("#upload_goods_image").submit();
	});
	
	
function image(){
	$("#upload_name").html($("#upload_file").val())
}

function getObjectURL(file){
	var url=null;
	if(window.createObjectURL != undefined){ // basic
		url=window.createObjectURL(file);
	}else if(window.URL != undefined){ // mozilla(firefox)
		url=window.URL.createObjectURL(file);
	}else if(window.webkitURL != undefined){ // webkit or chrome
		url=window.webkitURL.createObjectURL(file);
	}
	return url;
}
function order_image_change(divImage,upload){
var length=upload.files.length; 
		var imgPath;
		$("#"+divImage).html('');
			var imgPath=getObjectURL(upload.files[0]);
			var type=upload.files[0].name.substring(upload.files[0].name.lastIndexOf(".")+1,upload.files[0].name.length).toLowerCase();
			
			if(type=="jpg" || type=="jpeg"){
				$("#"+divImage).append("<img class='imgPreview' src='"+imgPath+"' style='max-width:280px; max-height:280px;' />");
			}            
}

function del_order_image(divImage,id){
	var imgPath;
	if(id){
		$.ajax({
			url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/product_order/order_image_delete',//通过Ajax取数据的目标页面
			type:'post',
			dataType:'json',
			data: {id:id},
			success:function(data){
				$("#"+divImage).remove();
				$("#max_order_image_error").hide();
			}
		});
	}else{
		$("#"+divImage).remove();
		$("#max_order_image_error").hide();
	}
	
}

	
</script>