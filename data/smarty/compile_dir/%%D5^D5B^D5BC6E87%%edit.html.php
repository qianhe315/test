<?php /* Smarty version 2.6.22, created on 2024-10-23 13:11:08
         compiled from outgoing_quotation_sheet/edit.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'number_format', 'outgoing_quotation_sheet/edit.html', 695, false),)), $this); ?>
<script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/cstown_Sys.js" type="text/javascript"></script>
<link href="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/css/cstown_sys.css" rel="stylesheet" type="text/css" media="screen" />
<div class="pageContent">
	<input type="hidden" value="<?php if ($this->_tpl_vars['outgoing_quotation_sheet']['type']): ?><?php echo $this->_tpl_vars['outgoing_quotation_sheet']['type']; ?>
<?php else: ?>1<?php endif; ?>" id="submit_type_add" />
    <div class="stkInfEnter" style="width:98%" layoutH="100" id="ttbjd_ysj">
        <div class="sIE_title">修改外发报价单</div>
        <form method="post" action="<?php echo $this->_tpl_vars['baojia_action']; ?>
" id="outgoing_quotation_sheet_edit" enctype="multipart/form-data" onsubmit="return validateCallback(this, navTabAjaxDone)">
            <div class="sIEK" style="width:680px;">
                <div style="float:left; width:680px;">
                    <div class="sIE_l_01" style="width:230px;">
                      <div class="sIE_l_01_title">业务员:</div>
                      <input type="text" class="sIE_No" style="width:100px;" name="saleman_name" value="<?php if ($this->_tpl_vars['outgoing_quotation_sheet']['saleman_name'] != ''): ?><?php echo $this->_tpl_vars['outgoing_quotation_sheet']['saleman_name']; ?>
<?php else: ?><?php echo $this->_tpl_vars['user_info']['user_name']; ?>
<?php endif; ?>" readonly />
                    </div>

                    <div class="sIE_l_01" style="width:230px;">
                      <div class="sIE_l_01_title">时间:</div>
                      <input type="text" class="sIE_No" style="width:100px;" name="q_time" id="q_time" value="<?php if ($this->_tpl_vars['outgoing_quotation_sheet']['q_time'] != ''): ?><?php echo $this->_tpl_vars['outgoing_quotation_sheet']['q_time']; ?>
<?php else: ?><?php echo $this->_tpl_vars['today']; ?>
<?php endif; ?>"  readonly  />
                    </div>

                    <div class="sIE_l_01" style="width:200px;">
                      <div class="sIE_l_01_title">设计名称:</div>
                      <input type="text" class="sIE_No" style="width:100px;" id="design_name_add" name="design_name" value="<?php echo $this->_tpl_vars['outgoing_quotation_sheet']['design_name']; ?>
" />
                    </div>

                    <div class="sIE_l_01" style="width:230px;">
                      <div class="sIE_l_01_title">客户代码:</div>
                      <input type="text" class="sIE_No" style="width:100px;" name="customer_code" id="outgoing_inquiry_sheet_customer_code_add" value="<?php echo $this->_tpl_vars['outgoing_quotation_sheet']['customer_code']; ?>
" readonly />
                    </div>

                    <div class="sIE_l_01" style="width:230px;">
                      <div class="sIE_l_01_title">客户名:</div>
                      <input type="text" class="sIE_No" style="width:100px;" name="customer_name" id="outgoing_inquiry_sheet_customer_name_add" value="<?php echo $this->_tpl_vars['outgoing_quotation_sheet']['customer_name']; ?>
"   readonly />
                    </div>

                    <div class="sIE_l_01" style="width:200px;">
                      <div class="sIE_l_01_title">交货期:</div>
                      <select class="picture_select01" style="width:106px;height:26px;" id="outgoing_inquiry_sheet_picture_select_add"  name="deliver_goods" style="height:26px; width:82px;">
                         <?php $_from = $this->_tpl_vars['times']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['t']):
?>
                        <option <?php if ($this->_tpl_vars['outgoing_quotation_sheet']['deliver_goods'] == $this->_tpl_vars['t']['time_name']): ?>selected="selected"<?php endif; ?> value="<?php echo $this->_tpl_vars['t']['time_name']; ?>
"><?php echo $this->_tpl_vars['t']['time_name']; ?>
</option>
                        <?php endforeach; endif; unset($_from); ?>
                      </select>
                    </div>

                    <div class="sIE_l_01" style="width:230px;">
                    <div class="sIE_l_01_title" style="line-height:26px;">报关品类:</div>
                    <select class="picture_select01" name="order_category" id="order_category" style="width:106px; height:26px;">
                      <option value="">请选择</option>
                      <?php $_from = $this->_tpl_vars['order_category']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['oc']):
?>
                          <option <?php if ($this->_tpl_vars['outgoing_quotation_sheet']['order_category'] == $this->_tpl_vars['oc']['id']): ?>selected="selected"<?php endif; ?> value="<?php echo $this->_tpl_vars['oc']['id']; ?>
"><?php echo $this->_tpl_vars['oc']['c_name']; ?>
</option>
                      <?php endforeach; endif; unset($_from); ?>
                    </select>
                  </div>

                  <div class="sIE_l_01" style="width:230px;">
                    <div class="sIE_l_01_title">做货类型:</div>
                    <input type="text" class="sIE_No" style="width:100px;" value="<?php echo $this->_tpl_vars['outgoing_quotation_sheet']['goods_type']; ?>
" readonly />
                  </div>
                  
                  <div class="sIE_l_01" style="width:200px;">
                  <div class="sIE_l_01_title">尺码类型:</div>
                  <select class="picture_select01" id="size_type" name="size_type" disabled="disabled" style="height:26px; width:106px;">
                      <option <?php if ($this->_tpl_vars['outgoing_quotation_sheet']['size_type'] == ''): ?>selected="selected"<?php endif; ?> value="">请选择</option>
                      <option <?php if ($this->_tpl_vars['outgoing_quotation_sheet']['size_type'] == '1'): ?>selected="selected"<?php endif; ?> value="1">工厂尺码</option>
                      <option <?php if ($this->_tpl_vars['outgoing_quotation_sheet']['size_type'] == '2'): ?>selected="selected"<?php endif; ?> value="2">客户尺码</option>
                  </select>
                </div>


                  <div style="float:left; width:200px;">
                    <textarea name="remark" style="width:180px; margin-bottom:10px; margin-top:0px; height:52px;" onfocus="if(this.value=='备注')this.value='';" class="add01_textarea textInput"><?php if ($this->_tpl_vars['outgoing_quotation_sheet']['remark']): ?><?php echo $this->_tpl_vars['outgoing_quotation_sheet']['remark']; ?>
<?php else: ?>备注<?php endif; ?></textarea>
                  </div>

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
                    <table class="sIE_l_02Tab" id="size_table" width="100%" style="border:1px solid #CCC;<?php if ($this->_tpl_vars['outgoing_quotation_sheet']['clothing'] == 68): ?>display:none<?php endif; ?>" cellspacing="0" cellpadding="0">
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
" en="<?php echo $this->_tpl_vars['qsc']['en_name']; ?>
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
')">
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
')"></td>
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
')">
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
')"></td>
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
                                <?php if ($this->_tpl_vars['qsc']['total'] != ""): ?><?php echo $this->_tpl_vars['qsc']['total']; ?>
<?php else: ?>0<?php endif; ?>
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
                            $("#outgoing_inquiry_sheet_number_add").val(total_number);
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
                                    var name='row['+attribute_row+']['+$(this).attr("en")+']';
                                }else{
                                    var name='';
                                }
                                var category_arr=$(this).attr("id").split("_");

                                html+='<td class="row'+category_arr[2]+'" id="'+$(this).attr("en")+'_row'+attribute_row+'"><input type="text" size="3" class="col_'+e+'" size_row="'+attribute_row+'" onchange=count_total('+e+',"'+name+'") row="row['+attribute_row+']" name="'+name+'" onchange="count_total('+e+')"></td>';
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
                            html+='<div class="size_window_title">'+size+'尺码变更</div>';
                            html+='<div class="size_window_close" onclick="close_size_window()"></div>';
                            html+='</div>';
                            $(".select_category").each(function (e){
                                    var en=$(this).attr("en");
                                    html+="<table cellspacing='0' class='sIE_l_02Tab'><tr><td>"+$(this).attr("cn")+"</td><td style='padding:0px;'>";
                                    html+='<table cellspacing="0" id="'+$(this).attr("en")+'"  style="width:100%;">';
                                    if($("#"+$(this).attr("en")+"_row"+attribute_row+" span").length>0){
                                        var length=$("#"+$(this).attr("en")+"_row"+attribute_row+" span").length;
                                        $("#"+$(this).attr("en")+"_row"+attribute_row+" span").each(function (e){
                                                html+='<tr length="'+$(this).attr('length')+'" position="'+$(this).attr('position')+'">';
                                                html+='<td>';
                                    //             html+='<select class="picture_select01" id="oqs_length_'+attribute_row+'" name="oqs_length[]" onchange="oqs_length_change(this)" style="width:106px; height:26px;">';
                                    //             html+='<option value="">请选择</option>';
                                    //             <?php $_from = $this->_tpl_vars['size_change']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
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
                            html+='<a href="#" id="'+en+'_'+e+'_del" onclick=Del_detaile(this,'+e+',"'+en+'")>删除</a>';
                            html+='<a href="#" id="'+en+'_'+e+'" onclick=size_window_table_add('+e+',"'+en+'")>添加</a>';
                        }else{
                            html+='<a href="#" id="'+en+'_'+e+'" onclick=Del_detaile(this,'+e+',"'+en+'")>删除</a>';

                        }

                        html+='</td>';
                        html+='</tr>';
                        });
                        }else{
                            html+='<tr length="'+$(this).attr('length')+'" position="'+$(this).attr('position')+'">';
                            html+='<td>';
                        //     html+='<select class="picture_select01" id="oqs_length_'+attribute_row+'" name="oqs_length[]" onchange="oqs_length_change(this)" style="width:106px; height:26px;">';
                        //     html+='<option value="">请选择</option>';
                        //     <?php $_from = $this->_tpl_vars['size_change']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
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
                        html+='<a href="#" id="'+$(this).attr("en")+'_'+e+'" onclick=size_window_table_add('+e+',"'+$(this).attr("en")+'")>添加</a>';
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
                            $("#"+en+"_"+attribute_row).html("删除");
                            $("#"+en+"_"+attribute_row).attr("onclick","Del_detaile(this,"+attribute_row+",'"+en+"')");
                            attribute_row++;
                            html='<tr>';
                            html+='<td>';
                            // html+='<select class="picture_select01" id="oqs_length_" name="oqs_length[]" onchange="oqs_length_change(this)" style="width:106px; height:26px;">';
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
                            html+='<input type="text" class="picture_select01" id="oqs_length_" name="oqs_length[]" onchange="oqs_length_change(this)" style="width:50px; height:20px;">英寸';
                            html+='</td>';
                            html+='<td>';
                            html+='<select class="picture_select01" id="oqs_position_" name="oqs_position[]" onchange="oqs_position_change(this)" style="width:106px; height:26px;">';
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
                            html+='<a href="#" id="'+en+'_'+attribute_row+'" onclick=Del_detaile(this,'+attribute_row+',"'+en+'")>删除</a> <a href="#" id="'+en+'_'+attribute_row+'" onclick=size_window_table_add('+attribute_row+',"'+en+'")>添加</a>';
                            html+='</td>';
                            html+='</tr>';
                            $("#"+en).append(html);
                        }

                        function Del_detaile(k,attribute_row,en){
                            var td_lengh=$(k).parent().parent().find("td").length;
                            if(!en) {
                                $(k).parent().parent().find("td").each(function (e) {
                                    if (e > 0 && e < td_lengh - 1) {
                                        var arr = $(this).attr("id").split("_");
                                        $(this).children().first().val("");
                                        count_total(e, arr[0]);
                                    }
                                });
                            }
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
                                var en_name=$(this).attr("en");
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
                  <div id="oic_table" class="sIE_l_02" style="width:95%;">
                      <?php if ($this->_tpl_vars['outgoing_quotation_sheet']['clothing'] == 68): ?>
                        <?php if ($this->_tpl_vars['quotation_size_chart_category']): ?>
                            <?php $_from = $this->_tpl_vars['quotation_size_chart_category']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['category'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['category']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['qscc']):
        $this->_foreach['category']['iteration']++;
?>
                              <table cellspacing="0" class="sIE_l_02Tab" id="oic_table_add_<?php echo $this->_tpl_vars['qscc']['basic_category_id']; ?>
" style='margin-top:20px;'>
                                <tr>
                                    <td><button type="button" onclick="oic_add('<?php echo $this->_tpl_vars['qscc']['basic_category_id']; ?>
')">添加尺码</button></td>
                                    <?php if ($this->_tpl_vars['qscc']['cn_name'] == '非服装'): ?>
                                    <td colspan="2" align="center" style="font-size: 16px;"><?php echo $this->_tpl_vars['qscc']['cn_name']; ?>
</td>
                                    <?php else: ?>
                                    <td colspan="2" align="center" style="font-size: 16px;"><?php echo $this->_tpl_vars['qscc']['cn_name']; ?>
</td>
                                    <?php endif; ?>
                                    <td align="right"></td>
                                </tr>
                                <tr>
                                    <th align="center" style="width:25%;">尺码</th>
                                    <?php if ($this->_tpl_vars['qscc']['cn_name'] != '非服装'): ?>
                                    <th style="width:20%;">尺码变更</th>
                                    <?php endif; ?>
                                    <?php if ($this->_tpl_vars['qscc']['cn_name'] == '非服装'): ?>
                                    <th style="width:20%;">颜色</th>
                                    <?php endif; ?>
                                    <th align="center" style="width:25%;">数量</th>
                                    <th align="center" style="width:25%;">操作</th>
                                </tr>
                                <?php $_from = $this->_tpl_vars['quotation_size_chart']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['qsc']):
?>
                                    <?php if ($this->_tpl_vars['qsc']['basic_category_id'] == $this->_tpl_vars['qscc']['basic_category_id']): ?>
                                    <tr>
                                        <td>
                                        	<?php if ($this->_tpl_vars['qscc']['cn_name'] == '非服装'): ?>
                                            <input type="text" id="oqs_size_<?php echo $this->_tpl_vars['qsc']['id']; ?>
" name="oqs_size[<?php echo $this->_tpl_vars['qsc']['id']; ?>
]" value="<?php echo $this->_tpl_vars['qsc']['type_size']; ?>
">
                                            <?php else: ?>
                                            <select class="picture_select01" id="oqs_size_<?php echo $this->_tpl_vars['qsc']['id']; ?>
" name="oqs_size[<?php echo $this->_tpl_vars['qsc']['id']; ?>
]" style="width:106px; height:26px;"><option value="">请选择</option><?php echo $this->_tpl_vars['qsc']['type_size']; ?>
</select>
                                            <?php endif; ?>
                                        </td>
                                        <?php if ($this->_tpl_vars['qscc']['cn_name'] != '非服装'): ?>
                                        <td id="td_<?php echo $this->_tpl_vars['qsc']['id']; ?>
"><?php echo $this->_tpl_vars['qsc']['size_table']; ?>
</td>
                                        <?php endif; ?>
                                        <?php if ($this->_tpl_vars['qscc']['cn_name'] == '非服装'): ?>
                                        <td><input type="text" name="oqs_color[<?php echo $this->_tpl_vars['qsc']['id']; ?>
]" value="<?php echo $this->_tpl_vars['qsc']['color']; ?>
" style="width:100px;"></td>
                                        <?php endif; ?>
                                        <td class="oqs_number"><input type="text" id="oqs_number_<?php echo $this->_tpl_vars['qsc']['id']; ?>
" name="oqs_number[<?php echo $this->_tpl_vars['qsc']['id']; ?>
]" value="<?php echo $this->_tpl_vars['qsc']['amount']; ?>
" class="col_1" onchange="count_total(<?php echo $this->_foreach['category']['iteration']; ?>
,'<?php echo $this->_tpl_vars['qscc']['en_name']; ?>
')" onkeyup="change_number(<?php echo $this->_tpl_vars['qsc']['id']; ?>
,<?php echo $this->_tpl_vars['qscc']['basic_category_id']; ?>
);this.value=this.value.replace(/\\D/g,'');"  style="width:100px;"></td>
                                        <td class="size_value" size_value="<?php echo $this->_tpl_vars['qsc']['id']; ?>
">
                                        <?php if ($this->_tpl_vars['qscc']['cn_name'] != '非服装'): ?>
                                        <a href="#" onClick="getEdit_detaile(<?php echo $this->_tpl_vars['qsc']['id']; ?>
)" style="float:left;color:blue">尺码变更</a>
                                        <?php endif; ?>
                                        <a href="#" onClick="getDel_detaile(this,'<?php echo $this->_tpl_vars['qscc']['en_name']; ?>
',<?php echo $this->_tpl_vars['qsc']['basic_category_id']; ?>
)" style="float:right;">删除</a>
                                        </td>
                                    </tr>
                                    <?php endif; ?>
                                <?php endforeach; endif; unset($_from); ?>
                                <tr id="heji_tr_<?php echo $this->_tpl_vars['qscc']['basic_category_id']; ?>
">
                                    <td colspan='5' align='center'>合计：<?php echo $this->_tpl_vars['qscc']['heji']; ?>
</td>
                                    <input type='hidden' id="heji_<?php echo $this->_tpl_vars['qscc']['basic_category_id']; ?>
" name="heji[<?php echo $this->_tpl_vars['qscc']['basic_category_id']; ?>
]" value='<?php echo $this->_tpl_vars['qscc']['heji']; ?>
'>
                                </tr>
                              </table>
                            <?php endforeach; endif; unset($_from); ?>
                        <?php endif; ?>
                      <?php endif; ?>
                    </div>

                    <div class="sIE_l_01" style="width:230px; margin-top:10px; display:none;">
                        <div class="sIE_l_01_title" style="width:80px;">总数量:</div>
                        <input type="text"  class="sIE_No" style="width:100px;" id="outgoing_inquiry_sheet_number_add" name="number" value="<?php echo $this->_tpl_vars['outgoing_quotation_sheet']['number']; ?>
" />
                      </div>
                    <div id="outgoing_inquiry_sheet_result_add" style="line-height: 26px; float: left; color:#F00; font-size:16px; margin-left: 10px; display:none;"></div>

                    <input type="hidden" id="total_number_id" value="<?php echo $this->_tpl_vars['outgoing_quotation_sheet']['number']; ?>
" />
                    <div class="sIE_l_01" style="color:red;width:100%; margin-top:10px; font-size:14px;">减少数量：初始数量12件及以上的 可调减最多30% ；12件以下的 不允许减；尺码可随意改动。
                        <br><br>
                        增加数量：修改不受限制。</div>
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
                                <td align="center">
                                    <span class="<?php echo $this->_tpl_vars['value']['en_name']; ?>
_total" style="display:none;"><?php echo $this->_tpl_vars['value']['amount']; ?>
</span>
                                    <?php echo $this->_tpl_vars['value']['amount']; ?>

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
                        <select class="picture_select01" id="money_id_production" name="money_1" onchange="sales_quotation_calculation()" style="height:26px; width:106px;">
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
                    <?php if ($this->_tpl_vars['money'] == 5.8): ?>
                        <div class="sIE_l_01" id="huobidanwei" style="width:100%;">
                            以下货币单位：美元
                        </div>
                    <?php elseif ($this->_tpl_vars['money'] == 7): ?>
                        <div class="sIE_l_01" id="huobidanwei" style="width:100%;">
                            以下货币单位：欧元
                        </div>
                    <?php elseif ($this->_tpl_vars['money'] == 1): ?>
                        <div class="sIE_l_01" id="huobidanwei" style="width:100%;">
                            以下货币单位：人民币
                        </div>
                    <?php else: ?>
                        <div class="sIE_l_01" id="huobidanwei" style="width:100%; display: none;"></div>
                    <?php endif; ?>

                    <div class="sIE_l_01" style="width:50%;">
                        <div class="sIE_l_01_title" style="width:60px;">设计报价:</div>
                        <input type="text" name="design_cost" id="design_cost" onkeyup="sales_quotation_calculation()" value="<?php echo $this->_tpl_vars['outgoing_quotation_sheet']['design_fee']; ?>
" class="sIE_No" style="width:100px;" />
                    </div>
                    <div class="sIE_l_01" style="width:50%;">
                        <div class="sIE_l_01_title" style="width:60px;">版费报价:</div>
                        <input type="text" name="edition_cost" id="edition_cost" onkeyup="sales_quotation_calculation()" value="<?php echo $this->_tpl_vars['outgoing_quotation_sheet']['edition_price']; ?>
" class="sIE_No" style="width:100px;" />
                    </div>
                    <?php if ($this->_tpl_vars['money']): ?>
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
                                    <input type="text" class="sIE_No" <?php if ($this->_tpl_vars['value']['cn_name'] == "整套"): ?>name="price"<?php endif; ?> readonly style="width:100px;" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['value']['unite_quote']*$this->_tpl_vars['quote_coefficient']/$this->_tpl_vars['money'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2) : number_format($_tmp, 2)); ?>
" /><span style="line-height: 26px"></span>
                                    <?php endif; ?>
                                </td>
                                <td class="price_k">
                                    <?php if ($this->_tpl_vars['user_hidden']['group_id'] != '74'): ?>
                                    <input type="text" id="<?php echo $this->_tpl_vars['value']['en_name']; ?>
_sale_cost" class="sIE_No" style="width:100px;" readonly value="<?php echo ((is_array($_tmp=$this->_tpl_vars['value']['unite_quote']*$this->_tpl_vars['quote_coefficient']/$this->_tpl_vars['money']*$this->_tpl_vars['value']['amount'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2) : number_format($_tmp, 2)); ?>
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
                    <?php endif; ?>
                </div>
            </div>
            <div class="sIE_r" style="height:260px; width:260px; margin-top:0px;">
                <div class="sIE_l_01_title" style="width:80px;">报价编号:</div>
                <input type="text" readonly="" value="<?php echo $this->_tpl_vars['outgoing_quotation_sheet']['quotation_code']; ?>
">
                <div class="sIE_r_img" id="design_image_add" style="width:260px; height:260px; margin-left:0px; margin-top:10px; margin-bottom:10px;">
                    <?php if ($this->_tpl_vars['outgoing_quotation_sheet']['image']): ?><img style="width:260px; height:260px;" src="<?php echo $this->_tpl_vars['outgoing_quotation_sheet']['image']; ?>
" height="260px" width="260px" />
                    <?php endif; ?>
                </div>
                <!-- 设计师只在有设计时显示：0线上订单；1有设计 -->
                <?php if ($this->_tpl_vars['outgoing_quotation_sheet']['type'] == 0 || $this->_tpl_vars['outgoing_quotation_sheet']['type'] == 1): ?>
                <div class="sIE_l_01" style=" float:none; width:200px; margin:0 auto;">
                    <div class="sIE_l_01_title" style="width:60px; margin-left:10px;">设计师:</div>
                    <input type="text" class="sIE_No" readonly="readonly" id="design_user_add" value="<?php echo $this->_tpl_vars['outgoing_quotation_sheet']['design_user_name']; ?>
" style="width:76px;" />
                </div>
                <?php endif; ?>
            </div>
            <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['outgoing_quotation_sheet']['id']; ?>
" />
            <input type="hidden" name="outgoing_back" id="outgoing_back">
          </div>
<div id="size_window">

</div>
<div id="bg_div"></div>
<script type="text/javascript" language="javascript">
function size_window_table_submit2(id){
	var ok=1;
	$("#size_window").find(".sIE_l_02Tab select").each(function () {
		if($(this).val()==""){
			ok=0;
		}
	});

	if(ok==1){
		var lenght = $("#size_window").find(".sIE_l_02Tab tr").length;

		if(lenght>0){
			var eachcount=0;
			$("#size_window").find(".sIE_l_02Tab tr").each(function () {

				var idd= $(this).attr('idd');
				var oqs_length = $(this).find("#oqs_length_"+idd).val();
				var oqs_position = $(this).find("#oqs_position_"+idd).val();

				$.ajax({
						url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/outgoing_inquiry_sheet/act_change_size',//通过Ajax取数据的目标页面
						type:'post',//方法，还可以是"post"
						data:{'id':id,'idd':idd,'oqs_length':oqs_length,'oqs_position':oqs_position},
						dataType:'json',//数据类型，还有其它的，详见jQuery手册
						success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
						{
							eachcount++
							console.log(eachcount);
							if(eachcount>=lenght){
								$("#bg_div").hide();
								$("#size_window").hide();
								$("#size_window").html("");
								$.ajax({
										url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/outgoing_inquiry_sheet/submit_size_detaile',//通过Ajax取数据的目标页面
										type:'post',//方法，还可以是"post"
										data:{'id':id,'oqs_length':oqs_length},
										dataType:'text',//数据类型，还有其它的，详见jQuery手册
										success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
										{
											$("#td_"+id).html(locals);
										}
								});
							}
						}
				});
			});
		}
		else{
			$("#td_"+id).html("");
			$("#bg_div").hide();
			$("#size_window").hide();
			$("#size_window").html("");
		}
	}
	else{
		alert("存在未选择，如不需要请删除。");
	}

}
function Del_detaile2(k,id){
	$.ajax({
			url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/outgoing_inquiry_sheet/delete_scc_detaile',//通过Ajax取数据的目标页面
			type:'get',//方法，还可以是"post"
			data:{'id':id},
			dataType:'json',//数据类型，还有其它的，详见jQuery手册
			success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
			{
				 $(k).parent().parent().remove();
			}
	});

}
function oqs_length_change2(id){
	var basic_length_id = $("#oqs_length_"+id).val();
	$.ajax({
	  url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/outgoing_inquiry_sheet/length_change',//通过Ajax取数据的目标页面
	  type:'post',//方法，还可以是"post"
	  data:{'id':id,'basic_length_id':basic_length_id},
	  dataType:'json',//数据类型，还有其它的，详见jQuery手册
	  success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
	  {

	  }
	});
}
function oqs_position_change2(id){
	var basic_position_id = $("#oqs_position_"+id).val();
	$.ajax({
	  url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/outgoing_inquiry_sheet/position_change',//通过Ajax取数据的目标页面
	  type:'post',//方法，还可以是"post"
	  data:{'id':id,'basic_position_id':basic_position_id},
	  dataType:'json',//数据类型，还有其它的，详见jQuery手册
	  success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
	  {

	  }
	});
}
function close_size_window(){
	$("#bg_div").hide();
	$("#size_window").hide();
	$("#size_window").html("");
}
function size_window_table_add2(size_category_id){
	$.ajax({
		url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/outgoing_inquiry_sheet/add_sbi',//通过Ajax取数据的目标页面
		type:'post',//方法，还可以是"post"
		data:{'size_category_id':size_category_id},
		dataType:'json',//数据类型，还有其它的，详见jQuery手册
		success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
		{
			var table_value = "<tr idd='"+locals.insert_id+"'><td><select class='picture_select01' id=oqs_length_"+locals.insert_id+" name=oqs_length_["+locals.insert_id+"] style='width:106px; height:26px;'><option value=''>请选择</option>"+locals.type_length+"</select></td><td><select class='picture_select01' id=oqs_position_"+locals.insert_id+" name=oqs_position_["+locals.insert_id+"] style='width:106px; height:26px;'><option value=''>请选择</option>"+locals.type_position+"</select></td><td><a href='#' onClick='Del_detaile(this,"+locals.insert_id+")'>删除</a></td></tr>";
			$("#size_window_table_add_"+size_category_id).append(table_value);
		}
	  });
}
function getEdit_detaile2(size_category_id){
	var select_size_id = $('#oqs_size_'+size_category_id).val();

	if(select_size_id!=''){
		$.ajax({
			url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/outgoing_inquiry_sheet/edit_size_window',//通过Ajax取数据的目标页面
			type:'post',//方法，还可以是"post"
			data:{'size_category_id':size_category_id,'select_size_id':select_size_id},
			dataType:'json',//数据类型，还有其它的，详见jQuery手册
			success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
			{
				$("#size_window").append(locals);
				$("#bg_div").fadeIn();
				$("#size_window").fadeIn(200);

			}
		  });
	}
	else{
		alert("请先选择尺码");
	}
}
function oic_add(size_category_id){
	$.ajax({
		url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/outgoing_inquiry_sheet/add_ois_design',//通过Ajax取数据的目标页面
		type:'post',//方法，还可以是"post"
		data:{'size_category_id':size_category_id},
		dataType:'json',//数据类型，还有其它的，详见jQuery手册
		success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
		{
			if(locals.cn_name == '非服装'){
				var table_value = "<tr><td><input stype='text' id=oqs_size_"+locals.insert_id+" name=oqs_size["+locals.insert_id+"] value=''></td><td><input type='text' name=oqs_color["+locals.insert_id+"] value='' style='width:100px;'></td><td class='oqs_number'><input type='text' id=oqs_number_"+locals.insert_id+" name=oqs_number["+locals.insert_id+"] value=''  class='col_1 textInput' onchange=count_total(1,'non_clothing') onkeyup=\"change_number("+locals.insert_id+","+size_category_id+");this.value=this.value.replace(/\\D/g,'');\"  style='width:100px;'></td><td class='size_value' size_value='"+locals.insert_id+"'><a href='#' onClick='getDel_detaile(this,"+locals.insert_id+","+size_category_id+")' style='float:right;color:blue'>删除</a></td></tr>";
			}else{
				var table_value = "<tr><td><select class='picture_select01' id=oqs_size_"+locals.insert_id+" name=oqs_size["+locals.insert_id+"] style='width:106px; height:26px;'><option value=''>请选择</option>"+locals.type_size+"</select></td><td id=td_"+locals.insert_id+"></td><td class='oqs_number'><input type='text' id=oqs_number_"+locals.insert_id+" name=oqs_number["+locals.insert_id+"] value='' onkeyup=\"change_number("+locals.insert_id+","+size_category_id+");this.value=this.value.replace(/\\D/g,'');\" style='width:100px;'></td><td class='size_value' size_value='"+locals.insert_id+"'><a href='#' onClick='getEdit_detaile("+locals.insert_id+")' style='float:left;color:blue'>尺码变更</a><a href='#' onClick='getDel_detaile(this,"+locals.insert_id+","+size_category_id+")' style='float:right;color:blue'>删除</a></td></tr>";
			}
			$("#heji_tr_"+size_category_id).before(table_value);
		}
	  });
}
function oic1_add(size_category_id){
	$.ajax({
		url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/outgoing_inquiry_sheet/add_ois_design',//通过Ajax取数据的目标页面
		type:'post',//方法，还可以是"post"
		data:{'size_category_id':size_category_id},
		dataType:'json',//数据类型，还有其它的，详见jQuery手册
		success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
		{
			if(locals.cn_name == '非服装'){
				var table_value = "<tr><td><input type='text' id=oqs_size_"+locals.insert_id+" name=oqs_size["+locals.insert_id+"] value=''></td><td><input type='text' name=oqs_color["+locals.insert_id+"] value='' style='width:100px;'></td><td class='oqs_number'><input type='text' id=oqs_number_"+locals.insert_id+" name=oqs_number["+locals.insert_id+"] value='' onkeyup=\"change_number("+locals.insert_id+","+size_category_id+");this.value=this.value.replace(/\\D/g,'');\" style='width:100px;'></td><td class='size_value' size_value='"+locals.insert_id+"'><a href='#' onClick='getDel_detaile(this,"+locals.insert_id+","+size_category_id+")' style='float:right;color:blue'>删除</a></td></tr>";
			}
			else{
				var table_value = "<tr><td><select class='picture_select01' id=oqs_size_"+locals.insert_id+" name=oqs_size["+locals.insert_id+"] style='width:106px; height:26px;'><option value=''>请选择</option>"+locals.type_size+"</select></td><td id=td_"+locals.insert_id+"></td><td><input type='text' name=oqs_color["+locals.insert_id+"] value='' style='width:100px;'></td><td class='oqs_number'><input type='text' id=oqs_number_"+locals.insert_id+" name=oqs_number["+locals.insert_id+"] value='' onkeyup=\"change_number("+locals.insert_id+","+size_category_id+");this.value=this.value.replace(/\\D/g,'');\" style='width:100px;'></td><td class='size_value' size_value='"+locals.insert_id+"'><a href='#' onClick='getEdit_detaile("+locals.insert_id+")' style='float:left;color:blue'>尺码变更</a><a href='#' onClick='getDel_detaile(this,"+locals.insert_id+","+size_category_id+")' style='float:right;color:blue'>删除</a></td></tr>";
			}
			$("#heji1_tr_"+size_category_id).before(table_value);
		}
	  });
}
function oic_del(size_category_id){

	var order_id = $("#outgoing_inquiry_sheet_id").val();

	$("#oic_table_add_"+size_category_id).find(".size_value").each(function () {
		getDel_detaile(this,$(this).attr('size_value'));
	});

	//删除部位报价
	$.ajax({
			url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/outgoing_inquiry_sheet/delete_separate_quotes',//通过Ajax取数据的目标页面
			type:'post',//方法，还可以是"post"
			data:{'size_category_id':size_category_id,'order_id':order_id},
			dataType:'json',//数据类型，还有其它的，详见jQuery手册
			success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
			{
				$("#oic_table_add_"+size_category_id).remove();
				alert("删除成功！");
			}
	});

}
function oic1_del(size_category_id){

	var order_id = $("#outgoing_inquiry_sheet_id").val();

	$("#oic_table1_add_"+size_category_id).find(".size_value").each(function () {
		getDel_detaile(this,$(this).attr('size_value'));
	});

	//删除部位报价
	$.ajax({
			url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/outgoing_inquiry_sheet/delete_separate_quotes',//通过Ajax取数据的目标页面
			type:'post',//方法，还可以是"post"
			data:{'size_category_id':size_category_id,'order_id':order_id},
			dataType:'json',//数据类型，还有其它的，详见jQuery手册
			success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
			{
				$("#oic_table1_add_"+size_category_id).remove();
				alert("删除成功！");
			}
	});
}
function getDel_detaile(k,name,category_id){
        $(k).parent().parent().find("td").each(function (e){
            if(e==2){
                $(this).children().first().val("");
                count_total(1,name);
            }
        });
        $(k).parent().parent().remove();
        change_number(name,category_id);
}

function getDel_detaile1(k,row,size_category_id){

	$.ajax({
			url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/outgoing_inquiry_sheet/delete_ois_detaile',//通过Ajax取数据的目标页面
			type:'get',//方法，还可以是"post"
			data:{'id':row},
			dataType:'json',//数据类型，还有其它的，详见jQuery手册
			success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
			{
				$(k).parent().parent().remove();

				var submit_type_add = $("#submit_type_add").val();
				var zuizhong_number = 0;
				var bufen_number = 0;

				if(submit_type_add == 1){
					$("#oic_table").find(".oqs_number input[type='text']").each(function () {
						zuizhong_number += Number($(this).val());
					});

					//if(zuizhong_number!='' || zuizhong_number!=0){
						$("#outgoing_inquiry_sheet_number_add").val(zuizhong_number);
						$("#outgoing_inquiry_sheet_number_add").attr("readonly","readonly");
					// }
					// else{
					// 	$("#outgoing_inquiry_sheet_number_add").removeAttr("readonly");
					// }

					$("#oic_table_add_"+locals).find(".oqs_number input[type='text']").each(function () {
						bufen_number +=Number($(this).val());
					});
					//if(bufen_number!='' || bufen_number!=0){
						$("#heji_tr_"+locals).find("td").html("合计："+bufen_number);
						$("#heji_"+locals).val(bufen_number);
                        $("#factory_out_cost_"+size_category_id).val((bufen_number*$("#unite_quote_"+size_category_id).val()).toFixed(2));
					//}
                    sales_quotation_calculation();
				}
				else{
					$("#oic1_table").find(".oqs_number input[type='text']").each(function () {
						zuizhong_number += Number($(this).val());
					});

					//if(zuizhong_number!='' || zuizhong_number!=0){
						$("#outgoing_inquiry_sheet_number1_add").val(zuizhong_number);
						$("#outgoing_inquiry_sheet_number1_add").attr("readonly","readonly");
					// }
					// else{
					// 	$("#outgoing_inquiry_sheet_number1_add").removeAttr("readonly");
					// }

					$("#oic_table1_add_"+locals).find(".oqs_number input[type='text']").each(function () {
						bufen_number +=Number($(this).val());
					});
					//if(bufen_number!='' || bufen_number!=0){
						$("#heji1_tr_"+locals).find("td").html("合计："+bufen_number);
						$("#heji1_"+locals).val(bufen_number);
                        $("#factory_out_cost_"+size_category_id).val((bufen_number*$("#unite_quote_"+size_category_id).val()).toFixed(2));
					//}
                    sales_quotation_calculation();
				}

			}
	});


}
function change_number(key,size_category_id){
	var submit_type_add = $("#submit_type_add").val();
	var zuizhong_number = 0;
	var bufen_number = 0;
	if(submit_type_add == 1 || submit_type_add == 2){
		$("#oic_table").find(".oqs_number input[type='text']").each(function () {
			zuizhong_number += Number($(this).val());
		});

		if(zuizhong_number!='' || zuizhong_number!=0){
			$("#outgoing_inquiry_sheet_number_add").val(zuizhong_number);
			$("#outgoing_inquiry_sheet_number_add").attr("readonly","readonly");
		}else{
			$("#outgoing_inquiry_sheet_number_add").removeAttr("readonly");
		}

        <?php if ($this->_tpl_vars['outgoing_quotation_sheet']['clothing'] == 68): ?>
            $("#oic_table_add_"+size_category_id).find(".oqs_number input[type='text']").each(function () {
                bufen_number +=Number($(this).val());
            });
        <?php else: ?>
            $(".col_"+key).each(function () {
                bufen_number +=Number($(this).val());
            });
        <?php endif; ?>


			$("#heji_tr_"+size_category_id).find("td").html("合计："+bufen_number);
			$("#heji_"+size_category_id).val(bufen_number);
			//$("#factory_out_cost_"+size_category_id).val((bufen_number*$("#unite_quote_"+size_category_id).val()).toFixed(2));

	}
	else{
		$("#oic1_table").find(".oqs_number input[type='text']").each(function () {
			zuizhong_number += Number($(this).val());
		});

		if(zuizhong_number!='' || zuizhong_number!=0){
			$("#outgoing_inquiry_sheet_number1_add").val(zuizhong_number);
			$("#outgoing_inquiry_sheet_number1_add").attr("readonly","readonly");
		}
		else{
			$("#outgoing_inquiry_sheet_number1_add").removeAttr("readonly");
		}

		$("#oic_table1_add_"+size_category_id).find(".oqs_number input[type='text']").each(function () {
			bufen_number +=Number($(this).val());
		});

			$("#heji1_tr_"+size_category_id).find("td").html("合计："+bufen_number);
			$("#heji1_"+size_category_id).val(bufen_number);
			//$("#factory_out_cost_"+size_category_id).val((bufen_number*$("#unite_quote_"+size_category_id).val()).toFixed(2));

	}
	sales_quotation_calculation();
}





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
_total").html()+'</td>';
        html+='<td class="price_k">';
        <?php if ($this->_tpl_vars['user_hidden']['group_id'] != '74'): ?>
        var unite_quote=((<?php echo $this->_tpl_vars['value']['unite_quote']; ?>
*coefficient)/money).toFixed(2);
        html+='<input type="text" class="sIE_No readonly" <?php if ($this->_tpl_vars['value']['cn_name'] == "整套"): ?>name="price"<?php endif; ?> readonly style="width:100px;" value="'+unite_quote+'" /><span style="line-height: 26px"></span>';
        <?php endif; ?>
        html+='</td>';
        html+='<td class="price_k factory_out_cost_y">';
        <?php if ($this->_tpl_vars['user_hidden']['group_id'] != '74'): ?>
        if($(".<?php echo $this->_tpl_vars['value']['en_name']; ?>
_total").first().html()=="-"){
            var factory_out_cost="-";
        }else{
            var factory_out_cost=(unite_quote*$(".<?php echo $this->_tpl_vars['value']['en_name']; ?>
_total").html()).toFixed(2);
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

function number1() {
	$(document).ready(function() {
		var cost_price = $("#cost_price_id").val();

		cost_price = cost_price.replace("元", "");
		//       var number = $("#number_id").val();
		var coefficient = $("#coefficient_id_production").val();
		var money = $("#money_id_production").val();

		var aaa = $("#money_id_production").find("option:selected").text();
		aaa = aaa.split(" ");

		//       if(number=="" || number==0){
		//         $("#number_error").html("<div style=color:#F00;>*数量不能为空，或者为0！</div>");
		//         var final_quotation = cost_price + "*" + 0 + "*" + coefficient + "/" + money;
		//       }else
		if (coefficient == "") {
			var final_quotation = cost_price + "*" + 0 + "*" + 0 + "/" + money;
		} else {
			$("#number_error").html("");
			//         var final_quotation = cost_price + "*" + number + "*" + coefficient + "/" + money;
			var final_quotation = cost_price + "*" + coefficient + "/" + money;
		}

		final_quotation = eval('(' + final_quotation + ')');
		final_quotation = final_quotation.toFixed(2);
		$("#final_quotation_id").val(aaa[0] + final_quotation);

	});
}

function coefficient1() {
	$(document).ready(function() {
		var cost_price = $("#cost_price_id").val();
		cost_price = cost_price.replace("元", "");
		//       var number = $("#number_id").val();

		var coefficient = $("#coefficient_id_production").val();

		var lowest_cost_factor = $("#lowest_cost_factor").val();

		var money = $("#money_id_production").val();

		var aaa = $("#money_id_production").find("option:selected").text();
		aaa = aaa.split(" ");

		if (coefficient < lowest_cost_factor) {
			$("#coefficient_error_production").html("<div style=color:#55ff00;>*此报价系数低于标准，需要提交主管审核后生效！</div>");
		} else {
			$("#coefficient_error_production").html("");
		}

		var number_id = $("#number_id").val();
		var danjia_id = $("#danjia_id").val();
		var banfei_id = $("#banfei_id").val();

		if (coefficient == "" || coefficient == 0) {
			var final_quotation = cost_price + "*" + 0 + "*" + 0 + "/" + money;
		} else {

			//        var final_quotation = cost_price + "*" + number + "*" + coefficient + "/" + money;
			var final_quotation = "(" + danjia_id + "*" + number_id + "+" + banfei_id + ")*" + coefficient + "/" + money;
		}

		final_quotation = eval('(' + final_quotation + ')');
		final_quotation = final_quotation.toFixed(2);
		$("#final_quotation_id").val(aaa[0] + final_quotation);

	});
}

function money() {
	$(document).ready(function() {
		var cost_price = $("#cost_price_id").val();
		cost_price = cost_price.replace("元", "");
		//       var number = $("#number_id").val();

		if ($("#coefficient_id_production").val() < 1.3) {
			$("#coefficient_id_production").val("1.3");
		}
		var coefficient = $("#coefficient_id_production").val();
		var lowest_cost_factor = $("#lowest_cost_factor").val();

		var number_id = $("#number_id").val();
		var danjia_id = $("#danjia_id").val();
		var banfei_id = $("#banfei_id").val();

		var money = $("#money_id_production").val();

		var aaa = $("#money_id_production").find("option:selected").text();
		aaa = aaa.split(" ");

		//             var final_quotation = cost_price + "*" + number + "*" + coefficient + "/" + money;
		var final_quotation = "(" + danjia_id + "*" + number_id + "+" + banfei_id + ")*" + coefficient + "/" + money;

		final_quotation = eval('(' + final_quotation + ')');
		final_quotation = final_quotation.toFixed(2);
		$("#final_quotation_id").val(aaa[0] + final_quotation);
		//alert(cost_price+','+coefficient+','+number_id+','+danjia_id+','+banfei_id+','+money+','+aaa+','+final_quotation);
	});
}
</script>
<?php if ($this->_tpl_vars['edit_no'] == 1): ?>
	<div class="sIE_l_02">
		<div class="button" style="margin-left:80%; margin-right:5px;">
			<div class="buttonContent">
				<button type="button" id="outgoing_quotation_sheet_save" value="1" name="design_content_save">确定</button>
			</div>
		</div>
		<div class="button">
			<div class="buttonContent">
				<button class="close">取消</button>
			</div>
		</div>
	</div>
	<?php else: ?>
		<div class="sIE_l_02">
			<div class="button" style="margin-left:80%; margin-right:5px;">
				<div class="buttonContent">
					<button class="close">取消</button>
				</div>
			</div>
		</div>
		<?php endif; ?> </form> </div> </div> </div> <!-- {literal} -->
			<script type="text/javascript">
			$(document).ready(function() {
				$("#outgoing_quotation_sheet_save,#outgoing_quotation_sheet_back").click(function() {

					var ok=1;
					$(".oqs_number").find("input").each(function () {
						if($(this).val()=="" || $(this).val()==0){
							ok=0;
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

                    var total_number1=0;
                    var number_part=0;
                    var total_part=0;
                    $(".total_number").each(function(){
                        if($(this).html()!=0) {
                            if (total_number1 == 0) {
                                total_number1 = $(this).html();
                            } else {
                                if (total_number1.trim() != $(this).html().trim()) {
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
					}
					else if(ok==0){
						alert("请填写数量!");
					}
					else{
						$("#outgoing_back").val($(this).val());
						$("#outgoing_quotation_sheet_edit").submit();
					}

					/*    if($("#coefficient_id_production").val()=="" || $("#coefficient_id_production").val() <= 0 || isEmpty($('#coefficient_id_production').val())){
						  $("#coefficient_error_production").css("display","block");
						  $("#coefficient_error_production").html("报价系数不可为空,且大于0！");
						}
						else if($("#money_id_production").val()==""){
						  $("#coefficient_error_production").css("display","block");
						  $("#coefficient_error_production").html("请选择汇率！");
						}
						else if($("#final_quotation_id").val()== 0){
						  $("#coefficient_error_production").css("display","block");
						  $("#coefficient_error_production").html("报价不为0！");
						}
						else if($("#order_category").val() == ""){
						  $("#coefficient_error_production").css("display","block");
						  $("#coefficient_error_production").html("请填写报关品类！");
						}
						else if($("#coefficient_id_production").val()<1.1){
						  $("#coefficient_error_production").css("display","block");
						  $("#coefficient_error_production").html("系数需大于1.1");
						}
						else{ */

					//}
				});

				$("#submit_form_production").click(function() {
					$("#info_form_production").submit();
				});


				$("#inch_w_production").bind("input propertychange", function() {
					//alert($(this).val());
					var cm_w = $(this).val() * 2.54;
					if (cm_w != '') {
						cm_w = cm_w.toFixed(4);
					}
					$("#cm_w_production").val(cm_w);
					$("#cm_w1_production").val(cm_w);
				});

				$("#inch_h_production").bind("input propertychange", function() {
					//alert($(this).val());
					var cm_h = $(this).val() * 2.54;
					if (cm_h != '') {
						cm_h = cm_h.toFixed(4);
					}

					$("#cm_h_production").val(cm_h);
					$("#cm_h1_production").val(cm_h);
				});

				$("#cm_w_production").bind("input propertychange", function() {
					//alert($(this).val());
					var inch_w = $(this).val() / 2.54;

					if (inch_w != '') {
						inch_w = inch_w.toFixed(4);
					}

					$("#inch_w_production").val(inch_w);
					$("#inch_w1_production").val(inch_w);
				});

				$("#cm_h_production").bind("input propertychange", function() {
					//alert($(this).val());
					var inch_h = $(this).val() / 2.54;
					if (inch_h != '') {
						inch_h = inch_h.toFixed(4);
					}
					$("#inch_h_production").val(inch_h);
					$("#inch_h1_production").val(inch_h);
				});


				$("#material_select_production").change(
					function() {
						//获取id为select的下拉框选中的值
						var a = $("#material_select_production").val();
						var opti = "<option value=\"\"></option>";
						if (a != '') {
							$.ajax({
								url: '<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/get_material_infomation-material_name-' + a + '.html', //通过Ajax取数据的目标页面
								type: 'get', //方法，还可以是"post"
								dataType: 'json', //数据类型，还有其它的，详见jQuery手册
								success: function(locals) //成功后执行的语句，这里是一个函数，“locals”是返回的数据
								{
									//alert(locals.result);
									if (locals.result == 0) {

									} else if (locals.result == 2) {
										$("#material_info_production").css("display", "none");
										$("#material_info_c_production").css("display", "block");
										$("#material_info_color_production").empty();
										var objs = locals.color;
										$("#material_info_c_color_production").append(opti); //为Select追加一个Option(下拉项)
										for (var o in objs) {
											var jsonObj = objs[o];
											var optionstring = "<option value=\"" + jsonObj.material_color + "\" >" + jsonObj.material_color + "</option>";
											$("#material_info_c_color_production").append(optionstring); //为Select追加一个Option(下拉项)
										}

									} else if (locals.result == 1) {
										$("#material_info_production").css("display", "block");
										$("#material_info_c_production").css("display", "none");
										$("#material_info_c_color_production").empty();
										//alert(locals.color.length);//输出子对象数量
										var objs = locals.color;
										$("#material_info_color_production").append(opti); //为Select追加一个Option(下拉项)
										for (var o in objs) {
											var jsonObj = objs[o];
											var optionstring = "<option value=\"" + jsonObj.color + "\" >" + jsonObj.color + "</option>";
											$("#material_info_color_production").append(optionstring); //为Select追加一个Option(下拉项)
										}

									}
									//alert(locals);
									//$("#customer_code").val(locals);
								}
							});
						}
					}
				);

				$("#material_info_c_color_production").change(function() {
					var a = $("#material_select_production").val();
					var color = $("#material_info_c_color_production").val();
					$.ajax({
						url: '<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/get_material_c_infomation-material_name-' + a + '-material_color-' + color + '.html', //通过Ajax取数据的目标页面
						type: 'get', //方法，还可以是"post"
						dataType: 'json', //数据类型，还有其它的，详见jQuery手册
						success: function(locals) //成功后执行的语句，这里是一个函数，“locals”是返回的数据
						{
							var objs = locals.size;
							var size = '';
							for (var o in objs) {
								var jsonObj = objs[o];
								if (jsonObj.size) {
									size = jsonObj.size;
									var optionstring = "<option value=\"" + size + "\" >" + size + "</option>";
									$("#material_c_size_production").append(optionstring); //为Select追加一个Option(下拉项
								} else if (jsonObj.size_mm) {
									size = jsonObj.size_mm;
									var optionstring = "<option value=\"" + size + "\" >" + size + "mm</option>";
									$("#material_c_size_production").append(optionstring); //为Select追加一个Option(下拉项)
								} else if (jsonObj.size_m_w && jsonObj.size_m_h) {
									size = jsonObj.size_m_w + '*' + jsonObj.size_m_h;
									var optionstring = "<option value=\"" + size + "\" >" + size + "mm</option>";
									$("#material_c_size_production").append(optionstring); //为Select追加一个Option(下拉项)
								}


							}
						}
					});

				});
				$("#sIE_size01_production").change(function() {
					var s01 = $("#sIE_size01_production").val();
					//alert(s01);
					if (s01 == 1) {
						//alert('1');
						//$("#sIE_size02 option[value='1']").attr("selected", "selected");
						$("#sIE_size02_production").find("option[value='1']").attr("selected", true);
					}
					if (s01 == 2) {
						//alert('2');
						//$("#sIE_size02 option[value='2']").attr("selected", "selected");
						$("#sIE_size02_production").find("option[value='2']").attr("selected", true);
					}

				});

				$("#sIE_size02_production").change(function() {
					var s02 = $("#sIE_size02_production").val();
					//$("#sIE_size01 option[value='1']").attr("selected", "selected");
					if (s02 == 1) {
						//$("#sIE_size01 option[value='1']").attr("selected", "selected");
						$("#sIE_size01_production").find("option[value='1']").attr("selected", true);
					}
					if (s02 == 2) {
						//$("#sIE_size01 option[value='2']").attr("selected", "selected");
						$("#sIE_size01_production").find("option[value='2']").attr("selected", true);
					}
				});

				var row_number = 0;
				$("#insert_material1_production").click(function() {

					var material_name = $("#material_select_production").val();
					var size_width = $("#size_width_production").val();
					var size_height = $("#size_height_production").val();
					var color = $("#material_info_color_production").val();
					var quantity = $("#material_quantity_production").val();
					var s01 = $("#sIE_size01_production").val();
					var size = size_width + "*" + size_height;
					var m_unit = '';
					if (s01 == '1') {
						m_unit = 'inch';
					}
					if (s01 == '2') {
						m_unit = 'cm';
					}

					$.ajax({
						url: '<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/insert_table_material', //通过Ajax取数据的目标页面
						type: 'get', //方法，还可以是"post"
						data: { 'material_name': material_name, 'material_color': color, 'material_size': size, 'material_quantity': quantity },
						dataType: 'json', //数据类型，还有其它的，详见jQuery手册
						success: function(locals) //成功后执行的语句，这里是一个函数，“locals”是返回的数据
						{
							//alert(locals);
							var table_value = "<tr> <td>" + material_name + "<input type='hidden' id='row_number' value='" + row_number + "' /><input type='hidden' name='materials[" + row_number + "][material_name]' value='" + material_name + "' /></td> <td>" + size_width + "*" + size_height + "  " + m_unit + "<input type='hidden' name='materials[" + row_number + "][size_width]' value='" + size_width + "' /><input type='hidden' name='materials[" + row_number + "][size_height]' value='" + size_height + "' /><input type='hidden' name='materials[" + row_number + "][size]' value='" + size + "' /><input type='hidden' name='materials[" + row_number + "][m_unit]' value='" + m_unit + "' /></td> <td>" + color + "<input type='hidden' name='materials[" + row_number + "][color]' value='" + color + "' /></td> <td>" + quantity + "<input type='hidden' name='materials[" + row_number + "][quantity]' value='" + quantity + "' /></td><td onClick='getDel(this," + locals + ")'><a href='#'>删除</a></td></tr>";
							$("#material_table_production").append(table_value); //为table追加一个tr(下拉项)
						}
					});

					row_number++;
				});

				$("#insert_material2_production").click(function() {
					var material_name = $("#material_select_production").val();

					var color = $("#material_info_c_color_production").val();
					var quantity = $("#material_c_quantity_production").val();

					var size = $("#material_c_size_production").val();
					var size_text = $("#material_c_size_production").find("option:selected").text();


					$.ajax({
						url: '<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/insert_table_material', //通过Ajax取数据的目标页面
						type: 'get', //方法，还可以是"post"
						data: { 'material_name': material_name, 'material_color': color, 'material_size': size, 'material_quantity': quantity },
						dataType: 'json', //数据类型，还有其它的，详见jQuery手册
						success: function(locals) //成功后执行的语句，这里是一个函数，“locals”是返回的数据
						{
							var table_value = "<tr> <td>" + material_name + "<input type='hidden' id='row_number' value='" + row_number + "' /><input type='hidden' name='materials[" + row_number + "][material_name]' value='" + material_name + "' /></td> <td>" + size_text + "<input type='hidden' name='materials[" + row_number + "][size]' value='" + size + "' /></td> <td>" + color + "<input type='hidden' name='materials[" + row_number + "][color]' value='" + color + "' /></td> <td>" + quantity + "<input type='hidden' name='materials[" + row_number + "][quantity]' value='" + quantity + "' /></td><td onClick='getDel(this," + locals + ")'><a href='#'>删除</a></td></tr>";
							$("#material_table").append(table_value); //为table追加一个tr(下拉项)
						}
					});

					row_number++;
				});

			});

			function getDel(k, row) {
				//alert(row);
				$.ajax({
					url: '<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/delete_table_material', //通过Ajax取数据的目标页面
					type: 'get', //方法，还可以是"post"
					data: { 'id': row },
					dataType: 'json', //数据类型，还有其它的，详见jQuery手册
					success: function(locals) //成功后执行的语句，这里是一个函数，“locals”是返回的数据
					{

					}
				});
				$(k).parent().remove();
				//$("#material_table1").$(k).remove();
			}


			function sIE_size01(n) {

				if (n == 1) {
					g('sIE_size02').value = 1;
				} else {
					g('sIE_size02').value = 2;
				}
			}

			function sIE_size02(n) {
				if (n == 1) {
					g('sIE_size01').value = 1;
				} else {
					g('sIE_size01').value = 2;
				}
			}

			function uploadok(event, queueId, fileObj, response, data) {
				//alert('aaa');
			}
			</script>
			<!-- {/literal} -->