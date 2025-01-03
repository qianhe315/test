<?php /* Smarty version 2.6.22, created on 2024-09-02 17:12:38
         compiled from product_order/outgoing_product_order.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'number_format', 'product_order/outgoing_product_order.html', 699, false),)), $this); ?>
<script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/cstown_Sys.js" type="text/javascript"></script>
<link href="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/css/cstown_sys.css" rel="stylesheet" type="text/css" media="screen" />
<div class="pageContent">
    <div class="stkInfEnter" style="width:98%" layoutH="100" id="ttbjd_ysj">
        <div class="sIE_title">外发返单详情</div>
        <form method="post" action="<?php echo $this->_tpl_vars['action']; ?>
" id="submit_form" enctype="multipart/form-data" onsubmit="return validateCallback(this, navTabAjaxDone)">
            <input type="hidden" name="order_id" value="<?php echo $this->_tpl_vars['order_id']; ?>
">
            <input type="hidden" name="outbound_return_order" value="<?php echo $this->_tpl_vars['outbound_return_order']; ?>
">
            <div class="sIEK" style="width:680px;">
                <div class="sIE_l_01" style="width:180px;">
                    <div class="sIE_l_01_title">跟单人:</div>
                    <select class="combox" name="sale_user" id="documentary" <?php if ($this->_tpl_vars['saleman_name'] != $this->_tpl_vars['sale_user'] && $this->_tpl_vars['salesman'] != 'admin'): ?>disabled="disabled"<?php endif; ?>> <option value="">全部</option>
                    <?php $_from = $this->_tpl_vars['sale_users']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['du']):
?>
                    <option value="<?php echo $this->_tpl_vars['du']['user_name']; ?>
" <?php if ($this->_tpl_vars['du']['user_name'] == $this->_tpl_vars['sale_user']): ?> selected <?php endif; ?>>
                    <?php echo $this->_tpl_vars['du']['user_name']; ?>

                    </option>
                    <?php endforeach; endif; unset($_from); ?>
                    </select>
                </div>
                <div class="sIE_l_01" style="width:180px;">
                    <div class="sIE_l_01_title">业务员:</div>
                    <input type="text" readonly name="saleman_name" value="<?php echo $this->_tpl_vars['quotation_sheet']['saleman_name']; ?>
" class="sIE_No" />
                </div>
                <div class="sIE_l_01" style="width:180px;">
                    <div class="sIE_l_01_title">时间:</div>
                    <input type="text" readonly name="time" value="<?php echo $this->_tpl_vars['quotation_sheet']['q_time']; ?>
" class="sIE_No" />
                </div>
                <div class="sIE_l_01" style="width:180px;">
                    <div class="sIE_l_01_title">订单号:</div>
                    <input type="text" readonly name="order_number" value="<?php echo $this->_tpl_vars['quotation_sheet']['order_number']; ?>
" class="sIE_No" />
                </div>
                <div class="sIE_l_01" style="width:180px;">
                    <div class="sIE_l_01_title">付款状态:</div>
                    <input type="text" readonly name="" value="<?php if ($this->_tpl_vars['quotation_sheet']['new_time']): ?>已付款<?php else: ?>未付款<?php endif; ?> " class="sIE_No" />
                </div>
                <div class="sIE_l_01" style="width:180px;">
                    <div class="sIE_l_01_title">发票状态:</div>
                    <input type="text" readonly name="" value="<?php if ($this->_tpl_vars['quotation_sheet']['invoice_status'] == 1): ?> 已生成 <?php else: ?> 未生成 <?php endif; ?>" class="sIE_No" />
                </div>
                <div class="sIE_l_01" style="width:180px;">
                    <div class="sIE_l_01_title">客户代码:</div>
                    <input type="text" readonly name="" value="<?php echo $this->_tpl_vars['quotation_sheet']['customer_code']; ?>
" class="sIE_No" />
                </div>
                <div class="sIE_l_01" style="width:180px;">
                    <div class="sIE_l_01_title">客户名称:</div>
                    <input type="text" readonly name="customer_name" value="<?php echo $this->_tpl_vars['quotation_sheet']['customer_name']; ?>
" class="sIE_No" />
                </div>
                <div class="sIE_l_01" style="width:180px;">
                    <div class="sIE_l_01_title">公司名称:</div>
                    <input type="text" readonly name="" value="<?php echo $this->_tpl_vars['quotation_sheet']['company']; ?>
" class="sIE_No" />
                </div>
                <div class="sIE_l_01" style="width:180px;">
                    <div class="sIE_l_01_title">设计状态:</div>
                    <input type="text" readonly name="<?php echo $this->_tpl_vars['quotation_sheet']['design_status']; ?>
" value="<?php if ($this->_tpl_vars['quotation_sheet']['design_status'] == 1): ?>未完成设计<?php elseif ($this->_tpl_vars['quotation_sheet']['design_status'] == 2): ?>未检验设计<?php elseif ($this->_tpl_vars['quotation_sheet']['design_status'] == 3): ?>已完成设计 <?php elseif ($this->_tpl_vars['quotation_sheet']['design_status'] == 4): ?>已审核设计 <?php elseif ($this->_tpl_vars['quotation_sheet']['design_status'] == 5): ?>已做货 <?php elseif ($this->_tpl_vars['quotation_sheet']['design_status'] == 6): ?>人工介入<?php endif; ?>" class="sIE_No" />
                </div>
                <div class="sIE_l_01" style="width:180px;">
                    <div class="sIE_l_01_title">交货期:</div>
                    <input type="text"  <?php if ($this->_tpl_vars['outbound_return_order'] != 1): ?>readonly<?php endif; ?> name="deliver_goods" value="<?php echo $this->_tpl_vars['quotation_sheet']['deliver_goods']; ?>
" class="sIE_No" />
                </div>
                <div class="sIE_l_01" style="width:180px;">
                    <div class="sIE_l_01_title">报关品类:</div>
                    <input type="text" readonly name="" value="<?php echo $this->_tpl_vars['quotation_sheet']['order_category']; ?>
" class="sIE_No" />
                </div>
                <div class="sIE_l_01" style="width:180px;">
                    <div class="sIE_l_01_title">做货类型:</div>
                    <input type="text" readonly name="" value="<?php echo $this->_tpl_vars['quotation_sheet']['goods_type']; ?>
" class="sIE_No" />
                </div>
                <div class="sIE_l_01" style="width:180px;">
                    <div class="sIE_l_01_title">报价名称:</div>
                    <input type="text" <?php if ($this->_tpl_vars['outbound_return_order'] != 1): ?>readonly<?php endif; ?> name="design_pic_name" value="<?php echo $this->_tpl_vars['quotation_sheet']['design_name']; ?>
" class="sIE_No" />
                </div>
                <div style="float:left; width:160px; margin-left:10px;">
                    <textarea name="note" <?php if ($this->_tpl_vars['outbound_return_order'] != 1): ?>readonly<?php endif; ?> style="width:160px; margin-bottom:10px;" class="add01_textarea textInput"><?php echo $this->_tpl_vars['quotation_sheet']['remark']; ?>
</textarea>
                </div>

                <?php if ($this->_tpl_vars['quotation_sheet']['clothing'] == 67): ?>
                <style>
                    table.sIE_l_02Tab td {
                        border-width: 1px;
                        padding: 5px;
                        border-style: solid;
                        border-color: #CCC;
                    }
                </style>
                <?php $this->assign('attribute_row', 1); ?>
                <?php $this->assign('change_attribute_row', 1); ?>
                <table class="sIE_l_02Tab" id="size_table" width="100%" style="border:1px solid #CCC;<?php if ($this->_tpl_vars['quotation_sheet']['clothing'] == 68): ?>display:none<?php endif; ?>" cellspacing="0" cellpadding="0">
                    <tr>
                        <td>服装尺码</td>
                        <td colspan="3">款式</td>
                    </tr>
                    <tr>
                        <td><a href="#" onclick="add_size()">添加尺码</a></td>
                        <?php $_from = $this->_tpl_vars['quotation_size_chart_category']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['category'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['category']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['qsc']):
        $this->_foreach['category']['iteration']++;
?>

                        <td>
                            <input type="hidden" name="select_category[]" class="select_category" id="select_category_<?php echo $this->_foreach['category']['iteration']; ?>
" cn="<?php echo $this->_tpl_vars['qsc']['cn_name']; ?>
" value="<?php echo $this->_tpl_vars['qsc']['en_name']; ?>
_<?php echo $this->_tpl_vars['qsc']['attribute_value_id']; ?>
">
                            <?php echo $this->_tpl_vars['qsc']['cn_name']; ?>

                        </td>
                        <?php endforeach; endif; unset($_from); ?>
                        <td></td>
                    </tr>
                    <?php $_from = $this->_tpl_vars['size1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['s']):
?>
                    <tr class="head_row">
                        <td row="<?php echo $this->_tpl_vars['attribute_row']; ?>
">
                            <?php echo $this->_tpl_vars['s']['en_name']; ?>

                            <input type="hidden" name="row[<?php echo $this->_tpl_vars['attribute_row']; ?>
][size]" value="<?php echo $this->_tpl_vars['s']['id']; ?>
">
                        </td>
                        <?php $_from = $this->_tpl_vars['quotation_size_chart_category']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['category'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['category']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['qsc']):
        $this->_foreach['category']['iteration']++;
?>
                        <?php $this->assign('flag', 1); ?>
                        <?php $_from = $this->_tpl_vars['quotation_size_chart']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['size_chart']):
?>
                        <?php if ($this->_tpl_vars['size_chart']['group_type'] <= $this->_tpl_vars['count_size']): ?>
                        <?php if ($this->_tpl_vars['size_chart']['basic_category_id'] == $this->_tpl_vars['qsc']['attribute_value_id']): ?>
                        <?php if ($this->_tpl_vars['size_chart']['basic_size_id'] == $this->_tpl_vars['s']['id']): ?>
                        <?php if ($this->_tpl_vars['flag'] == 1): ?>
                        <td id="<?php echo $this->_tpl_vars['qsc']['en_name']; ?>
_row<?php echo $this->_tpl_vars['attribute_row']; ?>
">
                            <input type="hidden" name="row[<?php echo $this->_tpl_vars['attribute_row']; ?>
][<?php echo $this->_tpl_vars['qsc']['en_name']; ?>
][id]" value="<?php echo $this->_tpl_vars['size_chart']['id']; ?>
">
                            <input type="text" size='3' class="col_<?php echo $this->_foreach['category']['iteration']; ?>
" size_row="<?php echo $this->_tpl_vars['attribute_row']; ?>
" row="row[<?php echo $this->_tpl_vars['attribute_row']; ?>
]" name="row[<?php echo $this->_tpl_vars['attribute_row']; ?>
][<?php echo $this->_tpl_vars['qsc']['en_name']; ?>
]" value="<?php echo $this->_tpl_vars['size_chart']['amount']; ?>
" onchange="count_total(<?php echo $this->_foreach['category']['iteration']; ?>
,'<?php echo $this->_tpl_vars['qsc']['en_name']; ?>
')" onkeyup="change_number(<?php echo $this->_foreach['category']['iteration']; ?>
,<?php echo $this->_tpl_vars['qsc']['attribute_value_id']; ?>
">
                            <?php $_from = $this->_tpl_vars['size_chart']['size_change']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sc']):
?>
                            <div>
                                <input type="hidden" name="<?php echo $this->_tpl_vars['qsc']['en_name']; ?>
[<?php echo $this->_tpl_vars['attribute_row']; ?>
][<?php echo $this->_tpl_vars['change_attribute_row']; ?>
][length]" value="<?php echo $this->_tpl_vars['sc']['basic_length_id']; ?>
">
                                <input type="hidden" name="<?php echo $this->_tpl_vars['qsc']['en_name']; ?>
[<?php echo $this->_tpl_vars['attribute_row']; ?>
][<?php echo $this->_tpl_vars['change_attribute_row']; ?>
][position]" value="<?php echo $this->_tpl_vars['sc']['basic_position_id']; ?>
">
                                <span length="<?php echo $this->_tpl_vars['sc']['basic_length_id']; ?>
" position="<?php echo $this->_tpl_vars['sc']['basic_position_id']; ?>
"><?php echo $this->_tpl_vars['sc']['length']; ?>
 <?php echo $this->_tpl_vars['sc']['position']; ?>
</span>
                            </div>
                            <!-- <?php echo $this->_tpl_vars['change_attribute_row']++; ?>
 -->
                            <?php endforeach; endif; unset($_from); ?>
                        </td>
                        <?php endif; ?>
                        <!--  <?php echo $this->_tpl_vars['flag']++; ?>
-->
                        <?php endif; ?>
                        <?php endif; ?>
                        <?php endif; ?>
                        <?php endforeach; endif; unset($_from); ?>
                        <?php if ($this->_tpl_vars['flag'] == 1): ?>
                        <td id="<?php echo $this->_tpl_vars['qsc']['en_name']; ?>
_row<?php echo $this->_tpl_vars['attribute_row']; ?>
"><input type="text" size='3' class="col_<?php echo $this->_foreach['category']['iteration']; ?>
" size_row="<?php echo $this->_tpl_vars['attribute_row']; ?>
" row="row[<?php echo $this->_tpl_vars['attribute_row']; ?>
]" name="row[<?php echo $this->_tpl_vars['attribute_row']; ?>
][<?php echo $this->_tpl_vars['qsc']['en_name']; ?>
]" value="" onchange="count_total(<?php echo $this->_foreach['category']['iteration']; ?>
,'<?php echo $this->_tpl_vars['qsc']['en_name']; ?>
')" onkeyup="change_number(<?php echo $this->_foreach['category']['iteration']; ?>
,<?php echo $this->_tpl_vars['qsc']['attribute_value_id']; ?>
)"></td>
                        <?php endif; ?>
                        <?php endforeach; endif; unset($_from); ?>
                        <td><a href="#"  onclick="getEdit_detaile('<?php echo $this->_tpl_vars['s']['en_name']; ?>
',<?php echo $this->_tpl_vars['attribute_row']; ?>
)">尺码变更</a></td>
                    </tr>
                    <!-- <?php echo $this->_tpl_vars['attribute_row']++; ?>
 -->
                    <?php endforeach; endif; unset($_from); ?>

                    <?php $_from = $this->_tpl_vars['group_arr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['ga']):
?>
                        <tr class="head_row">
                            <td row="<?php echo $this->_tpl_vars['attribute_row']; ?>
">
                                <select class="picture_select01" id='row_size_<?php echo $this->_tpl_vars['attribute_row']; ?>
' name='row[<?php echo $this->_tpl_vars['attribute_row']; ?>
][size]'  style="width:106px; height:26px;">
                                    <option value="">请选择</option>
                                    <?php $_from = $this->_tpl_vars['size']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['s']):
?>
                                    <option value="<?php echo $this->_tpl_vars['s']['id']; ?>
" <?php if ($this->_tpl_vars['ga'] == $this->_tpl_vars['s']['id']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['s']['en_name']; ?>
</option>
                                    <?php endforeach; endif; unset($_from); ?>
                                </select>
                            </td>
                            <?php $_from = $this->_tpl_vars['quotation_size_chart_category']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['category'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['category']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['qsc']):
        $this->_foreach['category']['iteration']++;
?>
                            <?php $this->assign('flag1', 1); ?>
                            <?php $_from = $this->_tpl_vars['ex_quotation_size_chart']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['size_chart']):
?>
                            <?php if ($this->_tpl_vars['size_chart']['amount'] != '' && $this->_tpl_vars['qsc']['attribute_value_id'] == $this->_tpl_vars['size_chart']['basic_category_id'] && $this->_tpl_vars['key'] == $this->_tpl_vars['size_chart']['group_type']): ?>
                            <input type="hidden" name="row[<?php echo $this->_tpl_vars['attribute_row']; ?>
][<?php echo $this->_tpl_vars['qsc']['en_name']; ?>
][id]" value="<?php echo $this->_tpl_vars['size_chart']['id']; ?>
">
                            <?php if ($this->_tpl_vars['flag1'] == 1): ?>
                            <td id="<?php echo $this->_tpl_vars['qsc']['en_name']; ?>
_row<?php echo $this->_tpl_vars['attribute_row']; ?>
">
                                <input type="text" size='3' class="col_<?php echo $this->_foreach['category']['iteration']; ?>
" size_row="<?php echo $this->_tpl_vars['attribute_row']; ?>
" row="row[<?php echo $this->_tpl_vars['attribute_row']; ?>
]" name="row[<?php echo $this->_tpl_vars['attribute_row']; ?>
][<?php echo $this->_tpl_vars['qsc']['en_name']; ?>
]" value="<?php echo $this->_tpl_vars['size_chart']['amount']; ?>
" onchange="count_total(<?php echo $this->_foreach['category']['iteration']; ?>
,'<?php echo $this->_tpl_vars['qsc']['en_name']; ?>
')" onkeyup="change_number(<?php echo $this->_foreach['category']['iteration']; ?>
,<?php echo $this->_tpl_vars['qsc']['attribute_value_id']; ?>
)">
                                <?php $_from = $this->_tpl_vars['size_chart']['size_change']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sc']):
?>
                                <div>
                                    <input type="hidden" name="<?php echo $this->_tpl_vars['qsc']['en_name']; ?>
[<?php echo $this->_tpl_vars['attribute_row']; ?>
][<?php echo $this->_tpl_vars['change_attribute_row']; ?>
][length]" value="<?php echo $this->_tpl_vars['sc']['basic_length_id']; ?>
">
                                    <input type="hidden" name="<?php echo $this->_tpl_vars['qsc']['en_name']; ?>
[<?php echo $this->_tpl_vars['attribute_row']; ?>
][<?php echo $this->_tpl_vars['change_attribute_row']; ?>
][position]" value="<?php echo $this->_tpl_vars['sc']['basic_position_id']; ?>
">
                                    <span length="<?php echo $this->_tpl_vars['sc']['basic_length_id']; ?>
" position="<?php echo $this->_tpl_vars['sc']['basic_position_id']; ?>
"><?php echo $this->_tpl_vars['sc']['length']; ?>
 <?php echo $this->_tpl_vars['sc']['position']; ?>
</span>
                                </div>
                                <!-- <?php echo $this->_tpl_vars['change_attribute_row']++; ?>
 -->
                                <?php endforeach; endif; unset($_from); ?>
                            </td>
                            <?php endif; ?>
                            <!--  <?php echo $this->_tpl_vars['flag1']++; ?>
-->
                            <?php endif; ?>
                            <?php endforeach; endif; unset($_from); ?>
                            <?php if ($this->_tpl_vars['flag1'] == 1): ?>
                            <td id="<?php echo $this->_tpl_vars['qsc']['en_name']; ?>
_row<?php echo $this->_tpl_vars['attribute_row']; ?>
"><input type="text" size='3' class="col_<?php echo $this->_foreach['category']['iteration']; ?>
" size_row="<?php echo $this->_tpl_vars['attribute_row']; ?>
" row="row[<?php echo $this->_tpl_vars['attribute_row']; ?>
]" name="row[<?php echo $this->_tpl_vars['attribute_row']; ?>
][<?php echo $this->_tpl_vars['qsc']['en_name']; ?>
]" value="" onchange="count_total(<?php echo $this->_foreach['category']['iteration']; ?>
,'<?php echo $this->_tpl_vars['qsc']['en_name']; ?>
')" onkeyup="change_number(<?php echo $this->_foreach['category']['iteration']; ?>
,<?php echo $this->_tpl_vars['qsc']['attribute_value_id']; ?>
)"></td>
                            <?php endif; ?>
                            <?php endforeach; endif; unset($_from); ?>
                            <td><a href="#"  onclick="getEdit_detaile('<?php echo $this->_tpl_vars['size_chart']['en_name']; ?>
',<?php echo $this->_tpl_vars['attribute_row']; ?>
)">尺码变更</a> <a href='#' onclick=Del_detaile(this)>删除</a></td>
                        </tr>
                        <!-- <?php echo $this->_tpl_vars['attribute_row']++; ?>
 -->
                    <?php endforeach; endif; unset($_from); ?>
                    <tr class="head_row">
                        <td>总计</td>
                        <?php $this->assign('col', 1); ?>
                        <?php $_from = $this->_tpl_vars['quotation_size_chart_category']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['qsc']):
?>
                        <td id="total<?php echo $this->_tpl_vars['col']; ?>
" class="total_number">
                            <?php echo $this->_tpl_vars['qsc']['total']; ?>

                        </td>
                        <!-- <?php echo $this->_tpl_vars['col']++; ?>
 -->
                        <?php endforeach; endif; unset($_from); ?>
                        <td> </td>
                    </tr>
                </table>
                <script>
                    var change_attribute_row=<?php echo $this->_tpl_vars['change_attribute_row']; ?>
;
                    var attribute_row=<?php echo $this->_tpl_vars['attribute_row']; ?>
;
                    var col=<?php echo $this->_tpl_vars['col']; ?>
;

                    function count_total(flag,en_name){
                        var total=0;
                        var total_number=0;
                        $(".col_"+flag).each(function (){
                            if($(this).val())
                                total=total+parseInt($(this).val());
                        });
                        $("#total"+flag).html(total);
                        $("."+en_name+"_total").html(total);
                        $(".suit_total").html(total);

                        $(".total_number").each(function(){
                            total_number+=parseInt($(this).html());
                        });
                        $("#outgoing_inquiry_sheet_number1_add").val(total_number);
                        sales_quotation_calculation();
                    }

                    function add_size(){
                        html="<tr class='head_row'>";
                        html+="<td row='"+attribute_row+"'>";
                        html+="<select class='picture_select01 size' id='row_size_"+attribute_row+"' name='row["+attribute_row+"][size]' style='width:106px; height:26px;' onchange='size_change("+attribute_row+")'>";
                        html+="<option value=''>请选择</option>";
                        <?php $_from = $this->_tpl_vars['size']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sc']):
?>
                        html+="<option value='<?php echo $this->_tpl_vars['sc']['id']; ?>
'><?php echo $this->_tpl_vars['sc']['en_name']; ?>
</option>";
                        <?php endforeach; endif; unset($_from); ?>
                        html+="</select>";
                        html+="</td>";
                        $(".select_category").each(function (e){
                            e=e+1;
                            if($(this).val()){
                                var name='row['+attribute_row+']['+$(this).val()+']';
                            }else{
                                var name='';
                            }
                            var category_arr=$(this).attr("id").split("_");

                            html+='<td class="row'+category_arr[2]+'" id="'+$(this).val()+'_row'+attribute_row+'"><input type="text" size="3" class="col_'+e+'" size_row="'+attribute_row+'" row="row['+attribute_row+']" name="'+name+'" onchange=count_total('+e+',"'+$(this).val()+'")></td>';
                        });
                        html+="<td><a href='#' id='size_change"+attribute_row+"' onClick=''>尺码变更</a> <a href='#' onclick=Del_detaile(this)>删除</a></td>";
                        html+="</tr>";
                        attribute_row++;
                        $("#size_table").find("tr:last").before(html);
                    }

                    function size_change(attribute_row){
                        var en=$("#row_size_"+attribute_row+" option:selected").html();
                        $("#size_change"+attribute_row).attr("onClick","getEdit_detaile('"+en+"',"+attribute_row+")");
                    }

                    function change_row_number(id){
                        var en=$("#category_"+id+" option:selected").attr("en");
                        var flag=0;
                        $(".select_category").each(function (){
                            if($(this).val()==en){
                                flag=1;
                            }
                        });

                        if(flag==1){
                            $('#category_'+id+' option:eq(0)').prop('selected', true);
                            $(".col_"+id).each(function(){
                                $(this).attr("name","");
                                $(this).parent().attr("id","");
                            });
                        }else{
                            $(".col_"+id).each(function(){
                                var name=$(this).attr("row");
                                var size_row=$(this).attr("size_row");
                                $(this).attr("name",name+"["+en+"]");
                                $(this).parent().attr("id",en+"_row"+size_row);
                            });
                            $("#select_category_"+id).val(en);
                        }
                    }

                    //打开尺码变更
                    function getEdit_detaile(size,attribute_row){
                        var size_chart_id=$("#size_chart_"+attribute_row).val();

                        html= '<div class="size_window_top">';
                        html+='<div class="size_window_title">尺码变更</div>';
                        html+='<div class="size_window_close" onclick="close_size_window()"></div>';
                        html+='</div>';
                        $(".select_category").each(function (e){
                            var en=$(this).val();
                            html+="<table cellspacing='0' class='sIE_l_02Tab'><tr><td>"+$(this).attr('cn')+"</td><td>";
                            html+='<table cellspacing="0" id="'+$(this).val()+'"  style="margin-top:10px; width:96%; margin-left:2%;">';
                            if($("#"+$(this).val()+"_row"+attribute_row+" span").length>0){
                                var length=$("#"+$(this).val()+"_row"+attribute_row+" span").length;
                                $("#"+$(this).val()+"_row"+attribute_row+" span").each(function (e){
                                    html+='<tr length="'+$(this).attr('length')+'" position="'+$(this).attr('position')+'">';
                                    html+='<td>';
                                    // html+='<select class="picture_select01" id="oqs_length_'+attribute_row+'" name="oqs_length[]" onchange="oqs_length_change(this)" style="width:106px; height:26px;">';
                                    // html+='<option value="">请选择</option>';
                                    // <?php $_from = $this->_tpl_vars['size_change']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sc']):
?>
                                    //     <?php if ($this->_tpl_vars['sc']['type'] == 'length'): ?>
                                    //         if($(this).attr('length')==<?php echo $this->_tpl_vars['sc']['id']; ?>
){
                                    //             html+="<option value='<?php echo $this->_tpl_vars['sc']['id']; ?>
' selected><?php echo $this->_tpl_vars['sc']['cn_name']; ?>
</option>";
                                    //         }else{
                                    //             html+="<option value='<?php echo $this->_tpl_vars['sc']['id']; ?>
'><?php echo $this->_tpl_vars['sc']['cn_name']; ?>
</option>";
                                    //         }
                                    //     <?php endif; ?>
                                    // <?php endforeach; endif; unset($_from); ?>
                                    // html+='</select>';
                                    html+='<input type="text" class="picture_select01" id="oqs_length_" name="oqs_length[]" onchange="oqs_length_change(this)" style="width:50px; height:20px;" value="'+$(this).attr('length')+'">英寸';
                                    html+='</td>';
                                    html+='<td>';
                                    html+='<select class="picture_select01" id="oqs_position_" name="oqs_position[]" onchange="oqs_position_change(this)" style="width:106px; height:26px;">';
                                    html+='<option value="">请选择</option>';
                                    <?php $_from = $this->_tpl_vars['size_change']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sc']):
?>
                                        <?php if ($this->_tpl_vars['sc']['type'] == 'position'): ?>
                                            if($(this).attr('position')==<?php echo $this->_tpl_vars['sc']['id']; ?>
){
                                                html+="<option value='<?php echo $this->_tpl_vars['sc']['id']; ?>
' selected><?php echo $this->_tpl_vars['sc']['cn_name']; ?>
</option>";
                                            }else{
                                                html+="<option value='<?php echo $this->_tpl_vars['sc']['id']; ?>
'><?php echo $this->_tpl_vars['sc']['cn_name']; ?>
</option>";
                                            }
                                        <?php endif; ?>
                                    <?php endforeach; endif; unset($_from); ?>
                                    html+='</select>';
                                    html+='</td>';
                                    html+='<td align="center">';
                                    if(e+1==length){
                                        html+='<a href="#" id="'+en+'_'+e+'" onclick=size_window_table_add('+e+',"'+en+'")>添加</a>';
                                    }else{
                                        html+='<a href="#" id="'+en+'_'+e+'" onclick=Del_detaile(this)>删除</a>';

                                    }

                                    html+='</td>';
                                    html+='</tr>';
                                    });
                            }else{
                                html+='<tr length="'+$(this).attr('length')+'" position="'+$(this).attr('position')+'">';
                                html+='<td>';
                                // html+='<select class="picture_select01" id="oqs_length_'+attribute_row+'" name="oqs_length[]" onchange="oqs_length_change(this)" style="width:106px; height:26px;">';
                                // html+='<option value="">请选择</option>';
                                // <?php $_from = $this->_tpl_vars['size_change']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sc']):
?>
                                // <?php if ($this->_tpl_vars['sc']['type'] == 'length'): ?>
                                // if($(this).attr('length')==<?php echo $this->_tpl_vars['sc']['id']; ?>
){
                                //     html+="<option value='<?php echo $this->_tpl_vars['sc']['id']; ?>
' selected><?php echo $this->_tpl_vars['sc']['cn_name']; ?>
</option>";
                                // }else{
                                //     html+="<option value='<?php echo $this->_tpl_vars['sc']['id']; ?>
'><?php echo $this->_tpl_vars['sc']['cn_name']; ?>
</option>";
                                // }
                                // <?php endif; ?>
                                // <?php endforeach; endif; unset($_from); ?>
                                // html+='</select>';
                                html+='<input type="text" class="picture_select01" id="oqs_length_" name="oqs_length[]" onchange="oqs_length_change(this)" style="width:50px; height:20px;">英寸';
                                html+='</td>';
                                html+='<td>';
                                html+='<select class="picture_select01" id="oqs_position_" name="oqs_position[]" onchange="oqs_position_change(this)" style="width:106px; height:26px;">';
                                html+='<option value="">请选择</option>';
                                <?php $_from = $this->_tpl_vars['size_change']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sc']):
?>
                                <?php if ($this->_tpl_vars['sc']['type'] == 'position'): ?>
                                if($(this).attr('position')==<?php echo $this->_tpl_vars['sc']['id']; ?>
){
                                    html+="<option value='<?php echo $this->_tpl_vars['sc']['id']; ?>
' selected><?php echo $this->_tpl_vars['sc']['cn_name']; ?>
</option>";
                                }else{
                                    html+="<option value='<?php echo $this->_tpl_vars['sc']['id']; ?>
'><?php echo $this->_tpl_vars['sc']['cn_name']; ?>
</option>";
                                }
                                <?php endif; ?>
                                <?php endforeach; endif; unset($_from); ?>
                                html+='</select>';
                                html+='</td>';
                                html+='<td align="center">';
                                html+='<a href="#" id="'+$(this).val()+'_'+e+'" onclick=size_window_table_add('+e+',"'+$(this).val()+'")>添加</a>';
                                html+='</td>';
                                html+='</tr>';
                            }
                            html+="</table></td></tr></table>";
                        });
                        html+='<div class="size_window_btn">';
                        html+="<button type='button' onclick=size_window_table_submit("+attribute_row+")>确认</button>";
                        html+='</div>';

                        $("#size_window").append(html);
                        $("#bg_div").fadeIn();
                        $("#size_window").fadeIn(200);
                    }

                    //添加尺码变更项
                    function size_window_table_add(attribute_row,en){
                        $("#"+en+"_"+attribute_row+"_del").remove();
                        $("#"+en+"_"+attribute_row).html("删除");
                        $("#"+en+"_"+attribute_row).attr("onclick","Del_detaile(this)");
                        attribute_row++;
                        html='<tr>';
                        html+='<td>';
                        // html+='<select class="picture_select01" id="oqs_length_" name="oqs_length[]" onchange="oqs_length_change(this)" >';
                        // html+='<option value="">请选择</option>';
                        // <?php $_from = $this->_tpl_vars['size_change']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sc']):
?>
                        // <?php if ($this->_tpl_vars['sc']['type'] == 'length'): ?>
                        // html+="<option value='<?php echo $this->_tpl_vars['sc']['id']; ?>
'><?php echo $this->_tpl_vars['sc']['cn_name']; ?>
</option>";
                        // <?php endif; ?>
                        // <?php endforeach; endif; unset($_from); ?>
                        // html+='</select>';
                        html+='<input type="text" class="picture_select01" id="oqs_length_" name="oqs_length[]" onchange="oqs_length_change(this)" style="width:106px; height:26px;">英寸';
                        html+='</td>';
                        html+='<td>';
                        html+='<select class="picture_select01" id="oqs_position_" name="oqs_position[]" onchange="oqs_position_change(this)" >';
                        html+='<option value="">请选择</option>';
                        <?php $_from = $this->_tpl_vars['size_change']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sc']):
?>
                        <?php if ($this->_tpl_vars['sc']['type'] == 'position'): ?>
                        html+="<option value='<?php echo $this->_tpl_vars['sc']['id']; ?>
'><?php echo $this->_tpl_vars['sc']['cn_name']; ?>
</option>";
                        <?php endif; ?>
                        <?php endforeach; endif; unset($_from); ?>
                        html+='</select>';
                        html+='</td>';
                        html+='<td align="center">';
                        html+='<a href="#" id="'+en+'_'+attribute_row+'_del" onclick=Del_detaile(this,'+attribute_row+',"'+en+'")>删除</a> <a href="#" id="'+en+'_'+attribute_row+'" onclick=size_window_table_add('+attribute_row+',"'+en+'")>添加</a>';
                        html+='</td>';
                        html+='</tr>';
                        $("#"+en).append(html);
                    }

                    function Del_detaile(k,attribute_row,en){
                        var td_lengh=$(k).parent().parent().find("td").length;
                        $(k).parent().parent().find("td").each(function (e){
                            if(e>0 && e<td_lengh-1){
                                var arr=$(this).attr("id").split("_");
                                $(this).children().first().val("");
                                count_total(e,arr[0]);
                            }
                        });
                        $(k).parent().parent().remove();
                        if($("#"+en+" tr").length==1){
                            html='<a href="#" id="'+en+'_'+attribute_row+'" onclick=size_window_table_add('+attribute_row+',"'+en+'")>添加</a>';
                        }else{
                            html='<a href="#" id="'+en+'_'+attribute_row+'_del" onclick=Del_detaile(this,'+attribute_row+',"'+en+'")>删除</a> <a href="#" id="'+en+'_'+attribute_row+'" onclick=size_window_table_add('+attribute_row+',"'+en+'")>添加</a>';
                        }

                        $("#"+en+" td").last().html(html);
                    }

                    function oqs_position_change(obj){
                        $(obj).parent().parent().attr("position",$(obj).val());
                    }

                    function oqs_length_change(obj){
                        $(obj).parent().parent().attr("length",$(obj).val());
                    }

                    function size_window_table_submit(attribute_row){


                        $(".select_category").each(function (e){
                            var en_name=$(this).val();
                            $("#"+en_name+"_row"+attribute_row+" div").html("");
                            html='';
                            $("#"+en_name+" tbody").children().each(function (){

                                if($(this).attr('length')=="undefined" || $(this).attr('position')=="undefined" || !$(this).attr('length') || !$(this).attr('position')){
                                    return true;
                                }
                                html+="<div>";
                                html+="<input type='hidden' name='"+en_name+"["+attribute_row+"]["+change_attribute_row+"][length]' value='"+$(this).attr('length')+"'/>";
                                html+="<input type='hidden' name='"+en_name+"["+attribute_row+"]["+change_attribute_row+"][position]' value='"+$(this).attr('position')+"'/>";
                                html+="<span length='"+$(this).attr('length')+"' position='"+$(this).attr('position')+"'>";
                                $(this).children().each(function (e){
                                    if(e<2) {
                                        if(e==0){
                                            html += $(this).children().val() + "英寸 ";
                                        }else{
                                            html += $(this).children().children("option:selected").html() + " ";
                                        }
                                    }
                                });
                                html+="</span>";
                                html+="</div>";
                                change_attribute_row++;
                            });
                            $("#"+en_name+"_row"+attribute_row).append(html);
                        });

                        $("#bg_div").hide();
                        $("#size_window").hide();
                        $("#size_window").html("");
                    }

                    var attr_row=1;
                    $("#add").click(function (){
                        var tr_length=$("#size_table").find("tr").length;
                        $("#size_table").find("tr").each(function (e){

                            if(e==0){
                                var colspan=$(this).children().eq(1).attr("colspan");
                                $(this).children().eq(1).attr("colspan",(parseInt(colspan)+1));
                            }else if(e==1){
                                attr_row++;
                                html='<td class="row'+attr_row+'"><input type="hidden" name="select_category[]" class="select_category" id="select_category_'+attr_row+'">';
                                html+='<select style="width: 80px;" id="category_'+attr_row+'" onchange="change_row_number('+attr_row+')">';
                                html+='<option>请选择</option>';
                                <?php $_from = $this->_tpl_vars['category']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['value']):
?>
                            html+='<option value="<?php echo $this->_tpl_vars['value']['id']; ?>
" en="<?php echo $this->_tpl_vars['value']['en_name']; ?>
"><?php echo $this->_tpl_vars['value']['cn_name']; ?>
</option>';
                            <?php endforeach; endif; unset($_from); ?>
                            html+='</select><a href="#" onclick="del_col('+attr_row+')">X</a>';
                            html+='</td>';
                            $(this).find("td:last").before(html);
                        }else if((e+1)==tr_length){
                            totalhtml='<td id="total'+col+'" class="total_number row'+attr_row+'"></td>';
                            col++;
                            $(this).find("td:last").before(totalhtml);
                        }else{
                            var td="<td class='row"+attr_row+"'><input type='text' row='row["+$(this).find("td:first").attr("row")+"]' size='3' class='col_"+attr_row+"' size_row='"+$(this).find("td:first").attr("row")+"'></td>";
                            $(this).find("td:last").before(td);
                        }
                    });
                    });

                    function del_col(attr_row){
                        var colspan=$("#size_table").find("td").eq(1).attr("colspan");
                        $("#size_table").find("td").eq(1).attr("colspan",(parseInt(colspan)-1));
                        $(".row"+attr_row).remove();
                    }
                </script>
                <?php else: ?>
                    <?php $this->assign('attribute_row', 1); ?>
                    <?php $this->assign('change_attribute_row', 1); ?>
                    <div id="oic1_table" class="sIE_l_02" style="width:95%;">
                        <?php $_from = $this->_tpl_vars['separate_quotes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sq']):
?>
                        <input type="hidden" name="item[]" value="<?php echo $this->_tpl_vars['sq']['en_name']; ?>
">
                        <table cellspacing='0' class='sIE_l_02Tab' id="<?php echo $this->_tpl_vars['sq']['en_name']; ?>
" style='margin-top:20px;'>
                            <tr>
                                <td>
                                    <button type='button' onclick=oic1_add('<?php echo $this->_tpl_vars['sq']['en_name']; ?>
',<?php echo $this->_tpl_vars['sq']['category_id']; ?>
)>添加尺码</button>
                                </td>
                                <td <?php if ($this->_tpl_vars['quotation_sheet']['type'] == 2 && $this->_tpl_vars['sq']['category_id'] != 67): ?>colspan='3'<?php else: ?>colspan='2'<?php endif; ?> align='center' style='font-size: 16px;'><?php echo $this->_tpl_vars['sq']['cn_name']; ?>
</td>
                                <td align='right'>
                                    <button type='button' onclick=oic1_del('<?php echo $this->_tpl_vars['sq']['en_name']; ?>
',<?php echo $this->_tpl_vars['sq']['category_id']; ?>
)>删除本表</button>
                                </td>
                            </tr>
                            <tr>
                                <th>尺码</th>
                                <?php if ($this->_tpl_vars['sq']['category_id'] != 68): ?>
                                <th>尺码变更</th>
                                <?php endif; ?>
                                <?php if ($this->_tpl_vars['quotation_sheet']['type'] == 2 || $this->_tpl_vars['sq']['category_id'] == 68): ?>
                                <th>颜色</th>
                                <?php endif; ?>
                                <th>数量</th>
                                <th>操作</th>
                            </tr>
                            <?php $_from = $this->_tpl_vars['quotation_size_chart']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['qsc']):
?>
                            <?php if ($this->_tpl_vars['qsc']['basic_category_id'] == $this->_tpl_vars['sq']['category_id']): ?>
                            <tr>
                                <td>
                                    <?php if ($this->_tpl_vars['sq']['category_id'] == 68): ?>
                                    <input type="text" class="size" name=<?php echo $this->_tpl_vars['sq']['en_name']; ?>
[<?php echo $this->_tpl_vars['attribute_row']; ?>
][size] value="<?php echo $this->_tpl_vars['qsc']['basic_size_id']; ?>
">
                                    <?php else: ?>
                                    <select class='picture_select01 size' id=<?php echo $this->_tpl_vars['sq']['en_name']; ?>
_size_<?php echo $this->_tpl_vars['attribute_row']; ?>
 name=<?php echo $this->_tpl_vars['sq']['en_name']; ?>
[<?php echo $this->_tpl_vars['attribute_row']; ?>
][size] style='width:106px; height:26px;'>
                                        <option value=''>请选择</option>
                                        <?php $_from = $this->_tpl_vars['size_category']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sc']):
?>
                                        <?php if ($this->_tpl_vars['sc']['type'] == 'size'): ?>
                                        <option value='<?php echo $this->_tpl_vars['sc']['id']; ?>
' <?php if ($this->_tpl_vars['sc']['id'] == $this->_tpl_vars['qsc']['basic_size_id']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['sc']['en_name']; ?>
</option>
                                        <?php endif; ?>
                                        <?php endforeach; endif; unset($_from); ?>
                                    </select>
                                    <?php endif; ?>
                                </td>
                                <?php if ($this->_tpl_vars['sq']['category_id'] != 68): ?>
                                <td id=<?php echo $this->_tpl_vars['sq']['en_name']; ?>
<?php echo $this->_tpl_vars['attribute_row']; ?>
_change>
                                    <input type="hidden" id="size_chart_<?php echo $this->_tpl_vars['attribute_row']; ?>
" value="<?php echo $this->_tpl_vars['qsc']['id']; ?>
">
                                    <table>

                                        <?php $_from = $this->_tpl_vars['qsc']['size_change']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['qsc_sc']):
?>
                                        <tr id="change<?php echo $this->_tpl_vars['attribute_row']; ?>
_<?php echo $this->_tpl_vars['qsc_sc']['id']; ?>
">
                                            <input type="hidden" name="<?php echo $this->_tpl_vars['sq']['en_name']; ?>
[<?php echo $this->_tpl_vars['attribute_row']; ?>
][change][<?php echo $this->_tpl_vars['change_attribute_row']; ?>
][length]" value="<?php echo $this->_tpl_vars['qsc_sc']['basic_length_id']; ?>
">
                                            <input type="hidden" name="<?php echo $this->_tpl_vars['sq']['en_name']; ?>
[<?php echo $this->_tpl_vars['attribute_row']; ?>
][change][<?php echo $this->_tpl_vars['change_attribute_row']; ?>
][position]" value="<?php echo $this->_tpl_vars['qsc_sc']['basic_position_id']; ?>
">
                                            <td length="<?php echo $this->_tpl_vars['qsc_sc']['basic_length_id']; ?>
" position="<?php echo $this->_tpl_vars['qsc_sc']['basic_position_id']; ?>
"><?php echo $this->_tpl_vars['qsc_sc']['length']; ?>
 <?php echo $this->_tpl_vars['qsc_sc']['position']; ?>
</td>
                                        </tr>
                                        <!-- <?php echo $this->_tpl_vars['change_attribute_row']++; ?>
-->
                                        <?php endforeach; endif; unset($_from); ?>
                                    </table>
                                </td>
                                <?php endif; ?>
                                <?php if ($this->_tpl_vars['quotation_sheet']['type'] == 2 || $this->_tpl_vars['sq']['category_id'] == 68): ?>
                                <td>
                                    <input type='text' name=<?php echo $this->_tpl_vars['sq']['en_name']; ?>
[<?php echo $this->_tpl_vars['attribute_row']; ?>
][color] value='<?php echo $this->_tpl_vars['qsc']['color']; ?>
' style='width:100px;'>
                                </td>
                                <?php endif; ?>
                                <td class='oqs_number'>
                                    <input type='text' class="<?php echo $this->_tpl_vars['sq']['en_name']; ?>
 size" name=<?php echo $this->_tpl_vars['sq']['en_name']; ?>
[<?php echo $this->_tpl_vars['attribute_row']; ?>
][number] value='<?php echo $this->_tpl_vars['qsc']['amount']; ?>
' onkeyup="change_number('<?php echo $this->_tpl_vars['sq']['en_name']; ?>
',<?php echo $this->_tpl_vars['sq']['category_id']; ?>
)" style='width:100px;'>
                                </td>
                                <td class='size_value' size_value='<?php echo $this->_tpl_vars['attribute_row']; ?>
'>
                                    <?php if ($this->_tpl_vars['sq']['category_id'] != 68): ?>
                                    <a href='#' onClick="getEdit_detaile(<?php echo $this->_tpl_vars['attribute_row']; ?>
,'<?php echo $this->_tpl_vars['sq']['en_name']; ?>
')" style='float:left;'>尺码变更</a>
                                    <?php endif; ?>
                                    <a href='#' onClick="getDel_detaile(this,'<?php echo $this->_tpl_vars['sq']['en_name']; ?>
',<?php echo $this->_tpl_vars['sq']['category_id']; ?>
)" style='float:right;'>删除</a>
                                </td>
                            </tr>
                            <!-- <?php echo $this->_tpl_vars['attribute_row']++; ?>
-->
                            <?php endif; ?>
                            <?php endforeach; endif; unset($_from); ?>
                            <tr class="total_number" id="total_<?php echo $this->_tpl_vars['sq']['en_name']; ?>
">
                                <td <?php if ($this->_tpl_vars['quotation_sheet']['type'] == 2): ?>colspan='5'<?php else: ?>colspan='4'<?php endif; ?> align='center'>合计：<?php echo $this->_tpl_vars['sq']['amount']; ?>
</td>
                                <input type='hidden' id="amount_<?php echo $this->_tpl_vars['sq']['en_name']; ?>
" name=heji[<?php echo $this->_tpl_vars['sq']['en_name']; ?>
] value='<?php echo $this->_tpl_vars['sq']['amount']; ?>
'>
                            </tr>
                        </table>
                        <?php endforeach; endif; unset($_from); ?>
                    </div>
                <?php endif; ?>
                <div class="sIE_l_01" style="width:230px; margin-top:10px;display: none">
                    <div class="sIE_l_01_title" style="width:80px;">总数量:</div>
                    <input type="text" class="sIE_No" style="width:100px;" id="outgoing_inquiry_sheet_number1_add" name="number" value="<?php echo $this->_tpl_vars['quotation_sheet']['number']; ?>
" />
                </div>
                <input type="hidden" id="total_number_id" value="<?php echo $this->_tpl_vars['quotation_sheet']['number']; ?>
" />
                <div class="sIE_l_02" style="width:95%;" id="cost_show">
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
                                <td align="center"><span class="<?php echo $this->_tpl_vars['value']['en_name']; ?>
_total" style="display:none;"><?php echo $this->_tpl_vars['value']['amount']; ?>
</span><?php echo $this->_tpl_vars['value']['amount']; ?>
</td>
                                <td class="price_k unite_quote">
                                    <?php if ($this->_tpl_vars['user_hidden']['group_id'] != '74'): ?>
                                    <input name="unite_quote[<?php echo $this->_tpl_vars['value']['category_id']; ?>
]" id="unite_quote_<?php echo $this->_tpl_vars['value']['category_id']; ?>
" type="text" class="sIE_No" readonly style="width:100px;" price="<?php echo $this->_tpl_vars['value']['factory_out_cost']; ?>
" value="<?php echo $this->_tpl_vars['value']['unite_quote']; ?>
" /><span style="line-height: 26px">元</span>
                                    <?php endif; ?>
                                </td>
                                <td class="price_k factory_out_cost">
                                    <?php if ($this->_tpl_vars['user_hidden']['group_id'] != '74'): ?>
                                    <input name="factory_out_cost[<?php echo $this->_tpl_vars['value']['category_id']; ?>
]" id="factory_out_cost_<?php echo $this->_tpl_vars['value']['category_id']; ?>
" type="text" class="sIE_No" readonly style="width:100px;" price="<?php echo $this->_tpl_vars['value']['factory_out_cost']; ?>
" value="<?php echo $this->_tpl_vars['value']['factory_out_cost']; ?>
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
                        <input type="text" name="quote_coefficient" id="coefficient_id_production" onkeyup="sales_quotation_calculation()" class="sIE_No" value="<?php echo $this->_tpl_vars['quote_coefficient']; ?>
" style="width:100px;" />
                        <?php else: ?>
                        <input type="text" name="quote_coefficient" id="coefficient_id_production" onkeyup="sales_quotation_calculation()" class="sIE_No" value="<?php echo $this->_tpl_vars['default_quote_coefficient']; ?>
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
                        <input type="text" name="design_cost" id="design_cost" onkeyup="sales_quotation_calculation()" value="<?php echo $this->_tpl_vars['outgoing_quotation_sheet']['design_cost']; ?>
" class="sIE_No" style="width:100px;" />
                    </div>
                    <div class="sIE_l_01" style="width:50%;">
                        <div class="sIE_l_01_title" style="width:60px;">版费报价:</div>
                        <input type="text" name="edition_cost" id="edition_cost" onkeyup="sales_quotation_calculation()" value="<?php echo $this->_tpl_vars['outgoing_quotation_sheet']['edition_cost']; ?>
" class="sIE_No" style="width:100px;" />
                    </div>
                    <div class="sIE_l_01" style="width:100%;" id="foreign_cost">
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
                                <td class="price_k factory_out_cost_y">
                                    <?php if ($this->_tpl_vars['user_hidden']['group_id'] != '74'): ?>
                                    <input type="text" class="sIE_No readonly factory_cost" category_id="<?php echo $this->_tpl_vars['value']['category_id']; ?>
" price="<?php echo $this->_tpl_vars['value']['factory_out_cost']; ?>
" readonly style="width:100px;" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['value']['unite_quote']*$this->_tpl_vars['value']['amount']*$this->_tpl_vars['quote_coefficient']/$this->_tpl_vars['money'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2) : number_format($_tmp, 2)); ?>
"/><span style="line-height: 26px"></span>
                                    <?php endif; ?>
                                </td>
                            </tr>
                            <?php endforeach; endif; unset($_from); ?>
                        </table>
                    </div>
                </div>
                <div id="outgoing_inquiry_sheet_result1_add" style="line-height: 26px; float: left; color:#F00; font-size:16px; margin-left: 10px; display:none;"></div>
                <div id="size_window"></div>
            </div>
                <script>
                    var attribute_row=<?php echo $this->_tpl_vars['attribute_row']; ?>
;
                    // var change_attribute_row=<?php echo $this->_tpl_vars['change_attribute_row']; ?>
;
                    // function oic1_del(name,category_id){
                    //     $("#"+name).remove();
                    //     change_number(name,category_id,1);
                    // }
                    //
                    function getDel_detaile(e,name,category_id){
                        $(e).parent().parent().remove();
                        change_number(name,category_id);
                    }
                    //
                    function oic1_add(size_category_en,category_id){
                        html="<tr>";
                        html+="<td>";
                        if(size_category_en=="non_clothing") {
                            html+="<input type='text' class='size' id="+size_category_en+"_size_"+attribute_row+"  name='"+size_category_en+"["+attribute_row+"][size]' value=''>";
                        }else{
                            html+="<select class='picture_select01 size' id="+size_category_en+"_size_"+attribute_row+" name='"+size_category_en+"["+attribute_row+"][size]' style='width:106px; height:26px;'>";
                            html+="<option value=''>请选择</option>";
                            <?php $_from = $this->_tpl_vars['size_category']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sc']):
?>
                                <?php if ($this->_tpl_vars['sc']['type'] == 'size'): ?>
                                    html+="<option value='<?php echo $this->_tpl_vars['sc']['id']; ?>
'><?php echo $this->_tpl_vars['sc']['en_name']; ?>
</option>";
                                <?php endif; ?>
                            <?php endforeach; endif; unset($_from); ?>
                            html+="</select>";
                        }

                        html+="</td>";
                        if(size_category_en!="non_clothing") {
                            html += "<td id=" + size_category_en + attribute_row + "_change>";
                            html += "<table>";
                            html += "</table>";
                            html += "</td>";
                        }
                        if(size_category_en=="non_clothing" || <?php echo $this->_tpl_vars['quotation_sheet']['type']; ?>
==2){
                            html += "<td>";
                            html += "<input type='text' name='" + size_category_en + "[" + attribute_row + "][color]' value='' style='width:100px;'>";
                            html += "</td>";
                        }
                        html+="<td class='oqs_number'>";
                        html+="<input type='text' class='"+size_category_en+" size' id=oqs_number_ name='"+size_category_en+"["+attribute_row+"][number]' value='' onkeyup=change_number('"+size_category_en+"',"+category_id+") style='width:100px;'>";
                        html+="</td>";
                        html+="<td class='size_value' size_value=''>";
                        if(size_category_en!="non_clothing") {
                            html += "<a href='#' onClick=getEdit_detaile(" + attribute_row + ",'" + size_category_en + "') style='float:left;'>尺码变更</a>";
                        }
                        html+="<a href='#' onClick=getDel_detaile(this,'"+size_category_en+"',"+category_id+") style='float:right;'>删除</a>";
                        html+="</td>";
                        html+="</tr>";
                        $("#total_"+size_category_en).before(html);

                        attribute_row++;
                    }
                    //
                    // $("#size_category_add").click(function(){
                    //     var size_category = $("#size_category option:selected").html();
                    //     var size_category_en = $("#size_category option:selected").val();
                    //     if($("#"+size_category_en).length > 0){
                    //         return true;
                    //     }
                    //     html="<input type='hidden' name=item[] value='"+size_category_en+"' />";
                    //     html+="<table cellspacing='0' class='sIE_l_02Tab' id="+size_category_en+" style='margin-top:20px;'>";
                    //     html+="<tr>";
                    //     html+="<td>";
                    //     html+="<button type='button' onclick=oic1_add('"+size_category_en+"')>添加尺码</button>";
                    //     html+="</td>";
                    //     if(size_category_en!="standard") {
                    //         html+="<td colspan='3' align='center' style='font-size: 16px;'>"+size_category+"</td>";
                    //     }else{
                    //         html+="<td colspan='2' align='center' style='font-size: 16px;'>"+size_category+"</td>";
                    //     }
                    //
                    //     html+="<td align='right'>";
                    //     html+="<button type='button' onclick=oic1_del('"+size_category_en+"')>删除本表</button>";
                    //     html+="</td>";
                    //     html+="</tr>";
                    //     html+="<tr>";
                    //     html+="<th>尺码</th>";
                    //     if(size_category_en!="standard"){
                    //         html+="<th>尺码变更</th>";
                    //     }
                    //
                    //
                    //     if(size_category_en=="standard" || <?php echo $this->_tpl_vars['quotation_sheet']['type']; ?>
==2){
                    //     html+="<th>颜色</th>";
                    // }
                    //
                    // html+="<th>数量</th>";
                    // html+="<th>操作</th>";
                    // html+="</tr>";
                    // html+="<tr>";
                    // html+="<td>";
                    // if(size_category_en=="standard"){
                    //     html+="<input type='text' id="+size_category_en+"_size_"+attribute_row+"  name='"+size_category_en+"["+attribute_row+"][size]' value=''>";
                    // }else{
                    //     html+="<select class='picture_select01' id="+size_category_en+"_size_"+attribute_row+" name='"+size_category_en+"["+attribute_row+"][size]' style='width:106px; height:26px;'>";
                    //     html+="<option value=''>请选择</option>";
                    //     <?php $_from = $this->_tpl_vars['size_category']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sc']):
?>
                    // <?php if ($this->_tpl_vars['sc']['type'] == 'size'): ?>
                    // html+="<option value='<?php echo $this->_tpl_vars['sc']['id']; ?>
'><?php echo $this->_tpl_vars['sc']['en_name']; ?>
</option>";
                    // <?php endif; ?>
                    // <?php endforeach; endif; unset($_from); ?>
                    // html+="</select>";
                    // }
                    //
                    //
                    // html+="</td>";
                    // if(size_category_en!="standard"){
                    //     html+="<td id="+size_category_en+attribute_row+"_change>";
                    //     html+="<table>";
                    //     html+="</table>";
                    //     html+="</td>";
                    // }
                    // if(size_category_en=="standard" || <?php echo $this->_tpl_vars['quotation_sheet']['type']; ?>
==2){
                    //     html += "<td>";
                    //     html += "<input type='text' name='" + size_category_en + "[" + attribute_row + "][color]' value='' style='width:100px;'>";
                    //     html += "</td>";
                    // }
                    // html+="<td class='oqs_number'>";
                    // html+="<input type='text' class='"+size_category_en+"' id=oqs_number_ name='"+size_category_en+"["+attribute_row+"][number]' value='' onkeyup=change_number('"+size_category_en+"') style='width:100px;'>";
                    // html+="</td>";
                    // html+="<td class='size_value' size_value=''>";
                    // if(size_category_en!="standard") {
                    //     html += "<a href='#' onClick=getEdit_detaile(" + attribute_row + ",'" + size_category_en + "') style='float:left;'>尺码变更</a>";
                    // }
                    // html+="<a href='#' onClick=getDel_detaile(this,'"+size_category_en+"') style='float:right;'>删除</a>";
                    // html+="</td>";
                    // html+="</tr>";
                    // html+="<tr class=total_number id='total_"+size_category_en+"'>";
                    // html+="<td colspan='5' align='center'>合计：</td>";
                    // html+="<input type='hidden' id=amount_"+size_category_en+" name=heji["+size_category_en+"] value='0'>";
                    // html+="</tr>";
                    // html+="</table>";
                    // $("#oic1_table").append(html);
                    // attribute_row++;
                    // });
                    //
                    // //打开尺码变更
                    // function getEdit_detaile(attribute_row,size_category_en){
                    //     var size_chart_id=$("#size_chart_"+attribute_row).val();
                    //
                    //     html= '<div class="size_window_top">';
                    //     html+='<div class="size_window_title">尺码变更</div>';
                    //     html+='<div class="size_window_close" onclick="close_size_window()">X</div>';
                    //     html+='</div>';
                    //     html+='<div style="float:left; width:100%; margin-top:10px; margin-left:2%;">';
                    //     html+='<button type="button" onclick="size_window_table_add('+attribute_row+')">添加</button>';
                    //     html+='</div>';
                    //     html+='<table cellspacing="0" id="size_window_table_add_'+attribute_row+'" class="sIE_l_02Tab" style="margin-top:10px; width:96%; margin-left:2%;">';
                    //
                    //
                    //     $("#"+size_category_en+attribute_row+"_change td").each(function (){
                    //
                    //             html+='<tr length="'+$(this).attr('length')+'" position="'+$(this).attr('position')+'">';
                    //             html+='<td>';
                    //             html+='<select class="picture_select01" id="oqs_length_'+attribute_row+'" name="oqs_length[]" onchange="oqs_length_change(this)" style="width:106px; height:26px;">';
                    //             html+='<option value="">请选择</option>';
                    //             <?php $_from = $this->_tpl_vars['size_category']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sc']):
?>
                    //         <?php if ($this->_tpl_vars['sc']['type'] == 'length'): ?>
                    //     if($(this).attr('length')==<?php echo $this->_tpl_vars['sc']['id']; ?>
){
                    //     html+="<option value='<?php echo $this->_tpl_vars['sc']['id']; ?>
' selected><?php echo $this->_tpl_vars['sc']['cn_name']; ?>
</option>";
                    // }else{
                    //     html+="<option value='<?php echo $this->_tpl_vars['sc']['id']; ?>
'><?php echo $this->_tpl_vars['sc']['cn_name']; ?>
</option>";
                    // }
                    // <?php endif; ?>
                    // <?php endforeach; endif; unset($_from); ?>
                    // html+='</select>';
                    // html+='</td>';
                    // html+='<td>';
                    // html+='<select class="picture_select01" id="oqs_position_" name="oqs_position[]" onchange="oqs_position_change(this)" style="width:106px; height:26px;">';
                    // html+='<option value="">请选择</option>';
                    // <?php $_from = $this->_tpl_vars['size_category']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sc']):
?>
                    // <?php if ($this->_tpl_vars['sc']['type'] == 'position'): ?>
                    // if($(this).attr('position')==<?php echo $this->_tpl_vars['sc']['id']; ?>
){
                    //     html+="<option value='<?php echo $this->_tpl_vars['sc']['id']; ?>
' selected><?php echo $this->_tpl_vars['sc']['cn_name']; ?>
</option>";
                    // }else{
                    //     html+="<option value='<?php echo $this->_tpl_vars['sc']['id']; ?>
'><?php echo $this->_tpl_vars['sc']['cn_name']; ?>
</option>";
                    // }
                    // <?php endif; ?>
                    // <?php endforeach; endif; unset($_from); ?>
                    // html+='</select>';
                    // html+='</td>';
                    // html+='<td align="center">';
                    // html+='<a href="#" onClick="Del_detaile(this)">删除</a>';
                    // html+='</td>';
                    // html+='</tr>';
                    //
                    // });
                    //
                    //
                    // html+='</table>';
                    // html+='<div class="size_window_btn">';
                    // html+="<button type='button' onclick=size_window_table_submit("+attribute_row+",'"+size_category_en+"')>确认</button>";
                    // html+='</div>';
                    // $("#size_window").html(" ");
                    // $("#size_window").append(html);
                    // $("#bg_div").fadeIn();
                    // $("#size_window").fadeIn(200);
                    //
                    // }
                    //
                    // function oqs_position_change(obj){
                    //     $(obj).parent().parent().attr("position",$(obj).val());
                    // }
                    //
                    // function oqs_length_change(obj){
                    //     $(obj).parent().parent().attr("length",$(obj).val());
                    // }
                    //
                    function close_size_window(){
                        $("#bg_div").hide();
                        $("#size_window").hide();
                        $("#size_window").html("");
                    }
                    //
                    // //添加尺码变更项
                    // function size_window_table_add(attribute_row){
                    //     html='<tr>';
                    //     html+='<td>';
                    //     html+='<select class="picture_select01" id="oqs_length_" name="oqs_length[]" onchange="oqs_length_change(this)" style="width:106px; height:26px;">';
                    //     html+='<option value="">请选择</option>';
                    //     <?php $_from = $this->_tpl_vars['size_category']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sc']):
?>
                    // <?php if ($this->_tpl_vars['sc']['type'] == 'length'): ?>
                    // html+="<option value='<?php echo $this->_tpl_vars['sc']['id']; ?>
'><?php echo $this->_tpl_vars['sc']['cn_name']; ?>
</option>";
                    // <?php endif; ?>
                    // <?php endforeach; endif; unset($_from); ?>
                    // html+='</select>';
                    // html+='</td>';
                    // html+='<td>';
                    // html+='<select class="picture_select01" id="oqs_position_" name="oqs_position[]" onchange="oqs_position_change(this)" style="width:106px; height:26px;">';
                    // html+='<option value="">请选择</option>';
                    // <?php $_from = $this->_tpl_vars['size_category']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sc']):
?>
                    // <?php if ($this->_tpl_vars['sc']['type'] == 'position'): ?>
                    // html+="<option value='<?php echo $this->_tpl_vars['sc']['id']; ?>
'><?php echo $this->_tpl_vars['sc']['cn_name']; ?>
</option>";
                    // <?php endif; ?>
                    // <?php endforeach; endif; unset($_from); ?>
                    // html+='</select>';
                    // html+='</td>';
                    // html+='<td align="center">';
                    // html+='<a href="#" onClick="Del_detaile(this)">删除</a>';
                    // html+='</td>';
                    // html+='</tr>';
                    // $("#size_window_table_add_"+attribute_row).append(html);
                    // }
                    //
                    // function Del_detaile(k,id){
                    //     $(k).parent().parent().remove();
                    // }
                    // function size_window_table_submit(attribute_row,en_name){
                    //     $("#"+en_name+attribute_row+"_change table").html("");
                    //     html='';
                    //     $("#size_window_table_add_"+attribute_row+" tbody").children().each(function (){
                    //         html+="<tr>";
                    //         html+="<input type='hidden' name='"+en_name+"["+attribute_row+"][change]["+change_attribute_row+"][length]' value='"+$(this).attr('length')+"'/>";
                    //         html+="<input type='hidden' name='"+en_name+"["+attribute_row+"][change]["+change_attribute_row+"][position]' value='"+$(this).attr('position')+"'/>";
                    //         html+="<td length='"+$(this).attr('length')+"' position='"+$(this).attr('position')+"'>";
                    //         $(this).children().each(function (e){
                    //             if(e<2) {
                    //                 html += $(this).children().children("option:selected").html() + " ";
                    //             }
                    //         });
                    //         html+="</td>";
                    //         html+="</tr>";
                    //         change_attribute_row++;
                    //     });
                    //     $("#"+en_name+attribute_row+"_change table").html(html);
                    //
                    //     $("#bg_div").hide();
                    //     $("#size_window").hide();
                    //     $("#size_window").html("");
                    // }
                    //
                    function change_number(key,size_category_id,del_row){
                        if(size_category_id==68){
                            var amount_number=0;
                            var total_nubmer=0;
                            $("."+key).each(function (){
                                amount_number+=parseInt($(this).val());
                            });

                            $("#factory_out_cost_y"+size_category_id).val(($("#unite_quote_"+size_category_id).val()*amount_number).toFixed(2));
                            $("#factory_out_cost_y"+size_category_id).attr("price",($("#unite_quote_"+size_category_id).val()*amount_number).toFixed(2));

                            $("#total_"+key).children().first().html("合计："+amount_number);
                            $("#amount_"+key).val(amount_number);

                            $(".total_number").each(function (){
                                total_nubmer+=parseInt($(this).children().eq(1).val());
                            });
                            $(".non_clothing_total").html(total_nubmer);
                            $("#outgoing_inquiry_sheet_number1_add").val(total_nubmer);
                            if(del_row==1){
                                $("#factory_out_cost_y"+size_category_id).parent().parent().remove();
                            }
                        }else{
                            var bufen_number = 0;
                            $(".col_"+key).each(function () {
                                bufen_number +=Number($(this).val());
                            });

                            if(bufen_number!='' || bufen_number!=0){
                                $("#heji_tr_"+size_category_id).find("td").html("合计："+bufen_number);
                                $("#heji_"+size_category_id).val(bufen_number);
                               // $("#factory_out_cost_"+size_category_id).val((bufen_number*$("#unite_quote_"+size_category_id).val()).toFixed(2));
                            }
                        }

                        sales_quotation_calculation(size_category_id,del_row);
                    }
                </script>
                <!--                    <?php if ($this->_tpl_vars['outbound_return_order'] == 1): ?>-->
                <!--                    <div class="sIE_l_02" style="width:95%;">-->
                <!--                        <table cellspacing="0" class="sIE_l_02Tab" id="oic_table_add">-->
                <!--                            <tr>-->
                <!--                                <th>尺码</th>-->
                <!--                                <th>数量</th>-->
                <!--                                <th>备注</th>-->
                <!--                                <th>操作</th>-->
                <!--                            </tr>-->
                <!--                            <?php $this->assign('attribute_row', 1); ?>-->
                <!--                            <?php if ($this->_tpl_vars['quotation_size_chart']): ?>-->
                <!--                            <?php $_from = $this->_tpl_vars['quotation_size_chart']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['qsc']):
?>-->
                <!--                            <tr>-->
                <!--                                <td><input type="text" name="qsc[<?php echo $this->_tpl_vars['attribute_row']; ?>
][size]" value="<?php echo $this->_tpl_vars['qsc']['size']; ?>
" style="width:100px;"></td>-->
                <!--                                <td class="oqs_number"><input class="single_number" type="text" id="oqs_number_<?php echo $this->_tpl_vars['attribute_row']; ?>
" initial_value="<?php echo $this->_tpl_vars['qsc']['amount']; ?>
" name="qsc[<?php echo $this->_tpl_vars['attribute_row']; ?>
][amount]" value="<?php echo $this->_tpl_vars['qsc']['amount']; ?>
" style="width:100px;" onchange="change_number(<?php echo $this->_tpl_vars['attribute_row']; ?>
)"></td>-->
                <!--                                <td><textarea name="qsc[<?php echo $this->_tpl_vars['attribute_row']; ?>
][note]"><?php echo $this->_tpl_vars['qsc']['note']; ?>
</textarea></td>-->
                <!--                                <td onClick="getDel_detaile(this,<?php echo $this->_tpl_vars['attribute_row']; ?>
)"><a href="#">删除</a></td>-->
                <!--                                <input type="hidden" name="qsc[<?php echo $this->_tpl_vars['attribute_row']; ?>
][del]" value="0" id="qsc_<?php echo $this->_tpl_vars['attribute_row']; ?>
">-->
                <!--                            </tr>-->
                <!--                            &lt;!&ndash;<?php echo $this->_tpl_vars['attribute_row']++; ?>
&ndash;&gt;-->
                <!--                            <?php endforeach; endif; unset($_from); ?>-->
                <!--                            <?php endif; ?>-->
                <!--                        </table>-->
                <!--                        <button type="button" id="oic1_add">添加</button>-->
                <!--                        <script>-->
                <!--                            var attribute_row=<?php echo $this->_tpl_vars['attribute_row']; ?>
;-->
                <!--                            $("#oic1_add").click(function(){-->
                <!--                                html='<tr>';-->
                <!--                                html+='<td><input type="text" name="qsc['+attribute_row+'][size]" value="" style="width:100px;"></td>';-->
                <!--                                html+='<td class="oqs_number"><input class="single_number" type="text" id="oqs_number_'+attribute_row+'" name="qsc['+attribute_row+'][amount]" style="width:100px;" value="0" onchange="change_number('+attribute_row+')"></td>';-->
                <!--                                html+='<td><textarea name="qsc['+attribute_row+'][note]"></textarea></td>';-->
                <!--                                html+='<td onClick="getDel_detaile(this,'+attribute_row+')"><a href="#">删除</a></td>';-->
                <!--                                html+='<input type="hidden" name="qsc['+attribute_row+'][del]" value="0" id="qsc_'+attribute_row+'">';-->
                <!--                                html+='</tr>';-->
                <!--                                attribute_row++;-->
                <!--                                $("#oic_table_add").append(html);-->
                <!--                            });-->
                <!--                        </script>-->
                <!--                    </div>-->
                <!--                    <div class="sIE_l_01" style="width:230px; margin-top:10px;">-->
                <!--                        <div class="sIE_l_01_title" style="width:80px;">总数量:</div>-->
                <!--                        <input type="text" class="sIE_No" style="width:100px;" readonly id="number_id" name="number" value="<?php echo $this->_tpl_vars['quotation_sheet']['number']; ?>
" />-->
                <!--                        <input type="hidden" id="total_number_id" value="<?php echo $this->_tpl_vars['quotation_sheet']['number']; ?>
" />-->

                <!--                    </div>-->
                                    <script>
                                        // function change_number(attribute_row){
                                        //     var number=0;
                                        //
                                        //     $(".single_number").each(function() {
                                        //         number+=parseInt($(this).val());
                                        //     });
                                        //
                                        //     $("#number_id").val(number);
                                        //     sales_quotation_calculation();
                                        // }
                                        //
                                        // function getDel_detaile(k,attribute_row){
                                        //     $(k).parent().css("display","none");
                                        //     $("#oqs_number_"+attribute_row).removeClass();
                                        //     $("#number_id").val(parseInt($("#number_id").val())-parseInt($("#oqs_number_"+attribute_row).val()));
                                        //     $("#qsc_"+attribute_row).val(1);
                                        //     sales_quotation_calculation();
                                        // }

                                        // function sales_quotation_calculation() {
                                        //     var money_id_production;
                                        //     var coefficient = $("#coefficient_id_production").val();
                                        //     var money_code;
                                        //
                                        //     if($("#money_id_production").val()=="美元"){
                                        //         money_id_production=5.8;
                                        //         money_code="$";
                                        //     }else if($("#money_id_production").val()=="欧元"){
                                        //         money_id_production=7;
                                        //         money_code="€";
                                        //     }else if($("#money_id_production").val()=="人民币"){
                                        //         money_id_production=1;
                                        //         money_code="¥";
                                        //     }
                                        //
                                        //     if ($("#money_id_production").val() == '' || coefficient == '') {
                                        //         $("#sales_unit_price").val('');
                                        //         $("#sales_quotation").val('');
                                        //         return false;
                                        //     }
                                        //     var cost_sales_price = $("#factory_price").val();
                                        //
                                        //     var sales_unit_price = (cost_sales_price * coefficient) / money_id_production;
                                        //     var sales_quotation = parseFloat(sales_unit_price.toFixed(2)) * $("#number_id").val();
                                        //
                                        //     $("#sales_unit_price").val(money_code+sales_unit_price.toFixed(2));
                                        //     $("#sales_quotation").val(money_code+sales_quotation.toFixed(2));
                                        //     $("#factory_out_cost").val((cost_sales_price*$("#number_id").val()).toFixed(2));
                                        // }

                                        function sales_quotation_calculation() {
                                            var money = $("#money_id_production").val();
                                            var coefficient = $("#coefficient_id_production").val();
                                            var design_cost = parseFloat($("#design_cost").val()?$("#design_cost").val():0);
                                            var edition_cost = parseFloat($("#edition_cost").val()?$("#edition_cost").val():0);



                                            if (money == '' || coefficient == '') {
                                                //$("#sales_price").val('');
                                                $("#sales_bidding_price").val('');
                                                return false;
                                            }

                                            if(money==7){
                                                $("#huobidanwei").html("以下货币单位：欧元");
                                                $("#huobidanwei").css("display","inline");
                                            }else if(money==5.8){
                                                $("#huobidanwei").html("以下货币单位：美元");
                                                $("#huobidanwei").css("display","inline");
                                            }else if(money==1){
                                                $("#huobidanwei").html("以下货币单位：人民币");
                                                $("#huobidanwei").css("display","inline");
                                            }

                                            html='<div class="sIE_l_01" style="width:100%;" id="foreign_cost">';
                                            html+='<table cellspacing="0" class="sIE_l_02Tab">';
                                            html+='<tr>';
                                            html+='<td></td>';
                                            html+='<td style="font-size: 16px;">数量</td>';
                                            html+='<td style="font-size: 16px;">销售单价</td>';
                                            html+='<td style="font-size: 16px;">销售报价</td>';
                                            html+='</tr>';
                                            <?php $_from = $this->_tpl_vars['separate_quotes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['value']):
?>
                                            html+='<tr>';
                                            html+='<td align="center"><?php echo $this->_tpl_vars['value']['cn_name']; ?>
</td>';
                                            html+='<td align="center" class="<?php echo $this->_tpl_vars['value']['en_name']; ?>
_total">'+$(".<?php echo $this->_tpl_vars['value']['en_name']; ?>
_total").first().html()+'</td>';
                                            html+='<td class="price_k">';
                                            <?php if ($this->_tpl_vars['user_hidden']['group_id'] != '74'): ?>
                                            var unite_quote=((<?php echo $this->_tpl_vars['value']['unite_quote']; ?>
*coefficient)/money).toFixed(2);
                                            html+='<input type="text" class="sIE_No readonly" readonly style="width:100px;" value="'+unite_quote+'" /><span style="line-height: 26px"></span>';
                                            <?php endif; ?>
                                            html+='</td>';
                                            html+='<td class="price_k factory_out_cost_y">';
                                            <?php if ($this->_tpl_vars['user_hidden']['group_id'] != '74'): ?>
                                            if($(".<?php echo $this->_tpl_vars['value']['en_name']; ?>
_total").first().html()=="-"){
                                                var factory_out_cost="-";
                                            }else{
                                                var factory_out_cost=(unite_quote*$(".<?php echo $this->_tpl_vars['value']['en_name']; ?>
_total").first().html()).toFixed(2);
                                            }

                                            html+='<input id="factory_out_cost_y<?php echo $this->_tpl_vars['value']['category_id']; ?>
" type="text" class="sIE_No"  style="width:100px;" readonly value="'+factory_out_cost+'" /><span style="line-height: 26px"></span>';
                                            <?php endif; ?>
                                            html+='</td>';
                                            html+='</tr>';
                                            <?php endforeach; endif; unset($_from); ?>
                                            html+='</table>';
                                            html+='</div>';

                                            $("#foreign_cost").remove();
                                            $("#cost_show").append(html);

                                            var bidding_price_all = 0;
                                            $(".factory_out_cost_y").find("input[type='text']").each(function () {
                                                if($(this).val()!="-"){
                                                    bidding_price_all += parseFloat($(this).val());
                                                }
                                            });
                                            var sales_bidding_price = bidding_price_all+design_cost+edition_cost;
                                            $("#sales_bidding_price").val(sales_bidding_price.toFixed(2));
                                        }
                                    </script>
                <!--                    <?php else: ?>-->
                <!--                        &lt;!&ndash; 新版尺码表 &ndash;&gt;-->
                <!--                        <?php if ($this->_tpl_vars['quotation_size_chart']): ?>-->
                <!--                        <div class="sIE_l_02" style="width:95%;">-->
                <!--                          <table cellspacing="0" class="sIE_l_02Tab" id="oic_table1_add">-->
                <!--                            <tr>-->
                <!--                              <th>尺码</th>-->
                <!--                              <th>数量</th>-->
                <!--                              <th>颜色</th>-->
                <!--                              <th>备注</th>-->
                <!--                            </tr>-->
                <!--                            <?php $_from = $this->_tpl_vars['quotation_size_chart']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['qsc']):
?>-->
                <!--                            <tr>-->
                <!--                                <td><input readonly type="text" value="<?php echo $this->_tpl_vars['qsc']['size']; ?>
" style="width:100px;text-align: center;"></td>-->
                <!--                                <td class="oqs_number1"><input readonly  type="text" value="<?php echo $this->_tpl_vars['qsc']['amount']; ?>
" onkeyup="change_number(<?php echo $this->_tpl_vars['qsc']['id']; ?>
);this.value=this.value.replace(/\D/g,'');" style="width:100px;text-align: center;"></td>-->
                <!--                                <td><input readonly  type="text" value="<?php echo $this->_tpl_vars['qsc']['color']; ?>
" style="width:100px;text-align: center;"></td>-->
                <!--                                <td><textarea readonly style="text-align: center;"><?php echo $this->_tpl_vars['qsc']['note']; ?>
</textarea></td>-->
                <!--                            </tr>-->
                <!--                            <?php endforeach; endif; unset($_from); ?>-->
                <!--                          </table>-->
                <!--                        </div>-->
                <!--                        <?php endif; ?>-->

                <!--                          &lt;!&ndash; 尺码表兼容历史数据 &ndash;&gt;-->
                <!--                        <?php if (! $this->_tpl_vars['quotation_size_chart'] && $this->_tpl_vars['procure_outgoing']['inch_w']): ?>-->
                <!--                        <div class="sIE_l_02" style="width:95%;">-->
                <!--                          <table cellspacing="0" class="sIE_l_02Tab" id="oic_table1_add">-->
                <!--                            <tr>-->
                <!--                                <th>尺码</th>-->
                <!--                                <th>数量</th>-->
                <!--                                <?php if ($this->_tpl_vars['procure_outgoing']['type'] == 2): ?>-->
                <!--                                <th>颜色</th>-->
                <!--                                <?php endif; ?>-->
                <!--                                <th>备注</th>-->
                <!--                            </tr>-->
                <!--                            <tr>-->
                <!--                            <?php if ($this->_tpl_vars['procure_outgoing']['inch_w']): ?>-->
                <!--                              <td><textarea readonly style="width:200px;text-align: center;"><?php echo $this->_tpl_vars['procure_outgoing']['inch_w']; ?>
inch_w * <?php echo $this->_tpl_vars['procure_outgoing']['inch_h']; ?>
inch_h &#10;  <?php echo $this->_tpl_vars['procure_outgoing']['cm_w']; ?>
cm_w * <?php echo $this->_tpl_vars['procure_outgoing']['cm_h']; ?>
cm_h</textarea></td>-->
                <!--                            <?php else: ?>-->
                <!--                              <td><input readonly type="text" value="" style="width:100px;text-align: center;"></td>-->
                <!--                            <?php endif; ?>-->
                <!--                              <td class="oqs_number1"><input readonly  type="text"  value="<?php echo $this->_tpl_vars['procure_outgoing']['pcs']; ?>
" onkeyup="change_number(<?php echo $this->_tpl_vars['qsc']['id']; ?>
);this.value=this.value.replace(/\D/g,'');" style="width:100px;text-align: center;"></td>-->
                <!--                            <?php if ($this->_tpl_vars['procure_outgoing']['type'] == 2): ?>-->
                <!--                              <td><input readonly  type="text" value="<?php echo $this->_tpl_vars['procure_outgoing']['color']; ?>
" style="width:100px;text-align: center;"></td>-->
                <!--                            <?php endif; ?>-->
                <!--                              <td><textarea readonly style="text-align: center;"><?php echo $this->_tpl_vars['procure_outgoing']['size_note']; ?>
</textarea></td>-->
                <!--                            </tr>-->
                <!--                          </table>-->
                <!--                        </div>-->

                <!--                        <?php endif; ?>-->

                <!--                        <div class="sIE_l_01" style="width:230px; margin-top:10px;">-->
                <!--                          <div class="sIE_l_01_title" style="width:80px;">总数量:</div>-->
                <!--                          <input readonly id="pcs"  type="text" class="sIE_No" style="width:100px;" value="<?php echo $this->_tpl_vars['quotation_sheet']['number']; ?>
" />-->
                <!--                        </div>-->
                <!--                    <?php endif; ?>-->
                <!--<div style="width:95%;float: left;">
                    <hr style="border:1px dashed lightgray;margin-bottom: 50px;">
                    <div class="sIE_l_01" style="width:100%;">
                        <div class="sIE_l_01_title" style="width:80px;">供应商代码:</div>
                        <input type="text" readonly name="supplier_code" value="<?php echo $this->_tpl_vars['quotation_sheet']['supplier_code']; ?>
" class="sIE_No" />
                    </div>
                    <div class="sIE_l_01" style="width:230px;">
                        <div class="sIE_l_01_title" style="width:80px;">销售成本:</div>
                        <input name="factory_out_cost" id="factory_out_cost" type="text" class="sIE_No" readonly style="width:100px;" value="<?php echo $this->_tpl_vars['quotation_sheet']['factory_out_cost']; ?>
" /><span style="line-height: 26px">元</span>
                    </div>
                    <div class="sIE_l_01" style="width:230px;">
                        <div class="sIE_l_01_title" style="width:80px;">销售成本单价:</div>
                        <input name="factory_price" id="factory_price" type="text" class="sIE_No" readonly style="width:100px;" value="<?php echo $this->_tpl_vars['quotation_sheet']['factory_price']; ?>
" /><span style="line-height: 26px">元</span>
                    </div>
                    <div class="sIE_l_01" style="width:230px;">
                        <div class="sIE_l_01_title" style="width:80px;">销售系数:</div>
                        <input name="version_costs" id="coefficient_id_production" readonly onkeyup="this.value= this.value.match(/\d+(\.\d{0,2})?/) ? this.value.match(/\d+(\.\d{0,2})?/)[0] : ''" type="text" class="sIE_No" style="width:100px;" value="<?php echo $this->_tpl_vars['quotation_sheet']['quote_coefficient']; ?>
" />
                    </div>
                    <div class="sIE_l_01" style="width:230px;">
                        <div class="sIE_l_01_title" style="width:80px;">货币:</div>
                        <input readonly id="money_id_production" onkeyup="this.value= this.value.match(/\d+(\.\d{0,2})?/) ? this.value.match(/\d+(\.\d{0,2})?/)[0] : ''" type="text" class="sIE_No" style="width:100px;" value="<?php echo $this->_tpl_vars['quotation_sheet']['exchange_rate_id']; ?>
" />
                    </div>
                    <div class="sIE_l_01" style="width:230px;">
                        <div class="sIE_l_01_title" style="width:80px;">销售单价:</div>
                        <input name="unite_quote" id="sales_unit_price" type="text" class="sIE_No" readonly style="width:100px;" value="<?php echo $this->_tpl_vars['quotation_sheet']['price']; ?>
" />
                    </div>
                    <div class="sIE_l_01" style="width:230px;">
                        <div class="sIE_l_01_title" style="width:80px;">销售报价:</div>
                        <input name="final_quote" id="sales_quotation" type="text" class="sIE_No" readonly style="width:100px;" value="<?php echo $this->_tpl_vars['quotation_sheet']['final_quote']; ?>
" />
                    </div>
                </div>
            </div>-->
            <input type="hidden" name="image" value="<?php echo $this->_tpl_vars['quotation_sheet']['image']; ?>
" />
            <input type="hidden" name="quotation_category" value="<?php echo $this->_tpl_vars['quotation_sheet']['quotation_category']; ?>
" />
            <input type="hidden" name="quotation_category_id" value="<?php echo $this->_tpl_vars['quotation_sheet']['quotation_category_id']; ?>
" />
            <input type="hidden" name="design_id" value="<?php echo $this->_tpl_vars['quotation_sheet']['design_id']; ?>
" />
            <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['quotation_sheet']['id']; ?>
" />
            <div class="sIE_r" style=" width:200px; float:left;">
                <div class="sIE_r" style="height:180px; width:180px; margin-top:0px;">
                    <div class="sIE_r_img" style="height:180px; width:180px;"><img src="<?php echo $this->_tpl_vars['quotation_sheet']['image']; ?>
" /></div>
                </div>
            </div>
        </form>
    </div>
    <div class="formBar">
        <div class="sIE_l_02">

            <div class="button" style="float:right;  margin-right:5px;">
                <div class="buttonContent">
                    <button class="close">取消</button>
                </div>
            </div>
            <?php if ($this->_tpl_vars['quotation_sheet']['goods_type'] == "大货"): ?>
            <div class="button" style="float:right; margin-right:5px;">
                <div class="buttonContent">
                    <button id="add_return_order">增加返单</button>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<script type="text/javascript">
    var order_number='<?php echo $this->_tpl_vars['order_number']; ?>
';
    $("#documentary").change(function(){
        // $.ajax({
        // url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/product_order/modify_documentary',//通过Ajax取数据的目标页面
        //     type:'post',
        //     dataType:'json',
        //     data: {order_number:order_number,documentary:$(this).val()},
        //     success:function(data){}
        // });
    });
    $("#add_return_order").click(function (){
        var size=0;
        $(".size").each(function (){
            if($(this).val()==''){
                ++size;
            }
        });

        var category_count=0;
        $(".select_category").each(function () {
            category_count++;
        });

        var total_number=parseInt($("#total_number_id").val())-Math.ceil(parseInt($("#total_number_id").val())*0.3);
        var submit_type_add = $("#submit_type_add").val();
        if(submit_type_add == 1){
            var number_id = $("#outgoing_inquiry_sheet_number_add").val();
        }else{
            var number_id = $("#outgoing_inquiry_sheet_number_add").val();
        }

        var total_number=0;
        var number_part=0;
        var total_part=0;
        $(".total_number").each(function(){
            if($(this).html()!=0) {
                if (total_number == 0) {
                    total_number = $(this).html();
                } else {
                    if (total_number.trim() != $(this).html().trim()) {
                        number_part = 1;
                    }
                }
            }

            if($(this).html()!=0){
                ++total_part;
            }
        });

        if(number_part==1){
            $("#outgoing_inquiry_sheet_result_add").css("display","block");
            $("#outgoing_inquiry_sheet_result_add").html("含有非整套数量，请调整！");
        }else if(total_part>1 && total_part!=$(".total_number").length){
            $("#outgoing_inquiry_sheet_result_add").css("display","block");
            $("#outgoing_inquiry_sheet_result_add").html("只能单独部位或整套询价！");
        }else if(parseInt($("#total_number_id").val())/category_count<12 && parseInt(number_id)/category_count<parseInt($("#total_number_id").val())/category_count){
            alert("数量修改不符合规则!");
            navTab.reloadFlag("stock_manage_edit");
        }else if(number_id<total_number){
            alert("数量修改不符合规则!");
            navTab.reloadFlag("stock_manage_edit");
        }else if(size>0){
            alert("尺码和数量不能为空！");
        }else{
            $("#submit_form").submit();
        }

    });
</script>