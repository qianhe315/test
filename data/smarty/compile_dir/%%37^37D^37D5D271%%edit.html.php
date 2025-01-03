<?php /* Smarty version 2.6.22, created on 2024-10-23 09:58:09
         compiled from unassigneddesign/edit.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'unassigneddesign/edit.html', 40, false),array('modifier', 'count', 'unassigneddesign/edit.html', 131, false),)), $this); ?>
<script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/cstown_Sys.js" type="text/javascript"></script>

<link href="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/css/cstown_sys.css" rel="stylesheet" type="text/css" media="screen"/>
<div class="pageContent">
<div class="stkInfEnter" layoutH="100" style="width:97%; margin-left:20px;">
<div class="sIEK" style="width:100%;">
<form method="post" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm sIE_l" style="width:65%;" onsubmit="return validateCallback(this, navTabAjaxDone)" id="info_form">
    <input type="hidden" name="design_id" value="<?php echo $this->_tpl_vars['design']['id']; ?>
">
    <div style="float:left; margin-bottom:5px;">
        <div class="sIE_l_01_title">设计类别:</div>
        <select class="add01_select01" id="design_type" name="design_type" <?php if ($this->_tpl_vars['design']['design_type']): ?>style="width:106px;pointer-events: none;color: #666;"<?php else: ?>style="width:106px;"<?php endif; ?>>
        <option value=''>请选择</option>
        <?php $_from = $this->_tpl_vars['category_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['cl']):
?> <option value="<?php echo $this->_tpl_vars['cl']['category_id']; ?>
" <?php if ($this->_tpl_vars['cl']['category_id'] == $this->_tpl_vars['design']['design_type']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['cl']['cn_name']; ?>

        </option>
        <?php endforeach; endif; unset($_from); ?>
        </select>
    </div>
    <script>
     	$("#design_type").change(function (){
     		$(".lhpl").css("display","inline");
            $(".category_module_list").css("display","none");
            $("#category_module_list"+$(this).val()).css("display","inline");
     	});
     </script>
    <div class="sIE_title">设计信息录入</div>
    <div id="unfinishdesign_error" style="float:left; width:500px; margin-top:10px; color:#F00; display:none; font-size:12px;"></div>
    <div class="lhpl" <?php if (empty ( $this->_tpl_vars['design']['id'] )): ?>style="display:none;" <?php endif; ?>>
    <div class="sIEK" style="width:95%;font-size:24px;font-weight:bold;">基础属性</div>
    <div class="sIEK" style="width:95%;border-top:1px solid #000;" id="table_size">
        <div style="width:100%; float:left;">
            <div class="sIE_l" style="width:200px;"> <?php if ($this->_tpl_vars['user_hidden']['group_id'] != '53' || $this->_tpl_vars['user_hidden']['group_id'] != '68'): ?>
                <div style="float:left; margin-bottom:5px;">
                    <div class="sIE_l_01_title">业务员:</div>
                    <input type="hidden" class="sIE_No" style="width:100px;"  name="salesman_id" id="salesman_id" value="<?php if ($this->_tpl_vars['design']['salesman_id'] != ''): ?><?php echo $this->_tpl_vars['design']['salesman_id']; ?>
<?php else: ?><?php echo $this->_tpl_vars['user_info']['user_id']; ?>
<?php endif; ?>" />
                    <input type="text" class="sIE_No" style="width:100px;"  name="salesman_user_name" id="salesman_user_name" value="<?php if ($this->_tpl_vars['design']['salesman_user_name'] != ''): ?><?php echo $this->_tpl_vars['design']['salesman_user_name']; ?>
<?php else: ?><?php echo $this->_tpl_vars['user_info']['user_name']; ?>
<?php endif; ?>" readonly />
                </div>
                <?php endif; ?>
                <div style="float:left; margin-bottom:5px;">
                    <div class="sIE_l_01_title">时间:</div>
                    <input type="text" class="sIE_No" style="width:100px;"  name="design_date" id="design_date" value="<?php if ($this->_tpl_vars['design']['design_date'] != ''): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['design']['design_date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')); ?>
<?php else: ?><?php echo $this->_tpl_vars['today']; ?>
<?php endif; ?>"  readonly />
                </div>
                <div style="float:left; margin-bottom:5px;">
                    <div class="sIE_l_01_title">出图周期:</div>
                    <input type="hidden" name="stock_id" value="<?php echo $this->_tpl_vars['design']['id']; ?>
" />
                    <select class="add01_select01" id="add01_select01" name="make_pic_time" style="width:106px;">
                        <?php $_from = $this->_tpl_vars['time_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['time']):
?> <option <?php if ($this->_tpl_vars['design']['make_pic_time'] == $this->_tpl_vars['time']['id']): ?>selected="selected"<?php endif; ?>  value="<?php echo $this->_tpl_vars['time']['id']; ?>
"><?php echo $this->_tpl_vars['time']['time_name']; ?>

                        </option>
                        <?php endforeach; endif; unset($_from); ?>
                    </select>
                </div>
                <div style="float:left; margin-bottom:5px;">
                    <div class="sIE_l_01_title" style="color:red;">客户代码:</div>
                    <input type="text" name="customer_code"  value="<?php echo $this->_tpl_vars['design']['customer_code']; ?>
" id="unf_customer_code" style="width:100px;" <?php if ($this->_tpl_vars['design']['customer_code']): ?>readonly<?php endif; ?>  class="sIE_No" onkeyup="customer_num();" />
                    <input type="text" name="601_customer_code" id="601_customer_code" style="width:100px; display:none" readonly="readonly"  class="sIE_No"  />
                </div>
                <div style="float:left; margin-bottom:5px; " id="design_NO_div">
                    <div class="sIE_l_01_title" style="color:red;">分版数量:</div>
                    <input type="text" class="sIE_No" value="<?php if ($this->_tpl_vars['design']['design_NO']): ?><?php echo $this->_tpl_vars['design']['design_NO']; ?>
<?php else: ?>1<?php endif; ?>" style="width:100px;"  name="design_NO" id="design_NO"    />
                </div>
            </div>
            <input type="hidden" name="huanse_status" value="1" />
            <div class="sIE_l" style="width:260px;">
                <div style="float:left; margin-bottom:5px;">
                    <div class="sIE_l_01_title" style="color:red;">设计名称:</div>
                    <input type="text" class="sIE_No" style="width:120px;"  name="design_name" id="design_name" value="<?php echo $this->_tpl_vars['design']['design_name']; ?>
"/>
                </div>
                <div style="float:left; margin-bottom:5px;">
                    <div class="sIE_l_01_title">设计编号:</div>
                    <input type="text" class="sIE_No"  name="design_code" style="width:120px;" id="design_code" value="<?php echo $this->_tpl_vars['design']['design_code']; ?>
" readonly />
                </div>
            </div>
            <style>
        	.attribute .sIE_l{height:auto; margin-top:10px;}
        </style>
            <?php $this->assign('attribute_row', 1); ?>
            <?php $_from = $this->_tpl_vars['category_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['cml']):
?>
            <div id="category_module_list<?php echo $this->_tpl_vars['cml']['category_id']; ?>
" class="category_module_list">
                <div class="sIEK" style="width:100%;font-size:24px;font-weight:bold; margin-top:50px;">品类属性</div>
                <div class="sIEK attribute" style="width:100%;border-top:1px solid #000;">

                    <?php $_from = $this->_tpl_vars['attribute_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['al']):
?>
                    <?php if ($this->_tpl_vars['al']['module_id'] == $this->_tpl_vars['cml']['demand_module_id']): ?>
                  
                    <div class="sIE_l" style="float:left; width:230px;"> 
                        <input type="hidden"  name="attribute['<?php echo $this->_tpl_vars['al']['en_name1']; ?>
']" value="<?php echo $this->_tpl_vars['al']['attribute_id']; ?>
"/>
                        <div style="float:left; width:100%; margin-bottom:10px;" >
                            <div class="sIE_l_01_title" style="width:100%;<?php if ($this->_tpl_vars['al']['required'] == 1): ?>color:red;<?php endif; ?>"><?php echo $this->_tpl_vars['al']['cn_name']; ?>
:</div>
                        <?php if ($this->_tpl_vars['al']['type'] == "文本框"): ?>
                        <?php $this->assign('text', 1); ?>
                        <?php $_from = $this->_tpl_vars['design_attribute_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['dal']):
?>
                        <?php if ($this->_tpl_vars['dal']['attribute_id'] == $this->_tpl_vars['al']['attribute_id']): ?>
                        <!-- <?php echo $this->_tpl_vars['text']++; ?>
 -->
                        <input type="text" class="sIE_No" style="width:92%;"  name="<?php echo $this->_tpl_vars['al']['en_name1']; ?>
[]" id="<?php echo $this->_tpl_vars['al']['en_name1']; ?>
" value="<?php echo $this->_tpl_vars['dal']['value']; ?>
"/>
                        <?php endif; ?>
                        <?php endforeach; endif; unset($_from); ?>
                        <?php if ($this->_tpl_vars['text'] == 1): ?>
                        <input type="text" class="sIE_No" style="width:92%;"  name="<?php echo $this->_tpl_vars['al']['en_name1']; ?>
[]" id="<?php echo $this->_tpl_vars['al']['en_name1']; ?>
" value=""/>
                        <?php endif; ?>
                        <?php elseif ($this->_tpl_vars['al']['type'] == "多选"): ?>
                        <?php $_from = $this->_tpl_vars['al']['attribute_value']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['val']):
?>
                        <?php if ($this->_tpl_vars['val']['attribute_id'] == $this->_tpl_vars['al']['attribute_id']): ?><input type="checkbox" value="<?php echo $this->_tpl_vars['val']['attribute_value_id']; ?>
" <?php if (in_array ( $this->_tpl_vars['val']['attribute_value_id'] , ( array ) $this->_tpl_vars['al']['design_attribute_value'] )): ?>checked<?php endif; ?> name="<?php echo $this->_tpl_vars['al']['en_name1']; ?>
[]"><?php echo $this->_tpl_vars['val']['cn_name']; ?>

                        <?php endif; ?>
                        <?php endforeach; endif; unset($_from); ?>
                        <?php elseif ($this->_tpl_vars['al']['type'] == "文本域"): ?>
                        <?php $this->assign('textarea', 1); ?>
                        <?php $_from = $this->_tpl_vars['design_attribute_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['dal']):
?>
                        <?php if ($this->_tpl_vars['dal']['attribute_id'] == $this->_tpl_vars['al']['attribute_id']): ?>
                        <textarea name="<?php echo $this->_tpl_vars['al']['en_name']; ?>
[]" style="width:92%;" id="<?php echo $this->_tpl_vars['al']['en_name1']; ?>
"><?php echo $this->_tpl_vars['al']['design_attribute_value']; ?>
</textarea>
                        <?php endif; ?>
                        <?php endforeach; endif; unset($_from); ?>
                        <?php if ($this->_tpl_vars['textarea'] == 1): ?>
                        <textarea name="<?php echo $this->_tpl_vars['al']['en_name']; ?>
[]" style="width:92%;" id="<?php echo $this->_tpl_vars['al']['en_name1']; ?>
"></textarea>
                        <?php endif; ?>
                        <?php elseif ($this->_tpl_vars['al']['type'] == "单选"): ?>
                        <div id="<?php echo $this->_tpl_vars['al']['en_name1']; ?>
_choice">
                            <?php if (in_array ( $this->_tpl_vars['al']['attribute_id'] , $this->_tpl_vars['design_content_attribute_id'] )): ?>
                            <?php $_from = $this->_tpl_vars['design_attribute_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['dal']):
?>
                            <?php if ($this->_tpl_vars['dal']['attribute_id'] == $this->_tpl_vars['al']['attribute_id']): ?>
                            <?php $_from = $this->_tpl_vars['dal']['value']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['dalv']):
?>
                            <!-- <?php echo $this->_tpl_vars['key']++; ?>
 -->
                            <div id="<?php echo $this->_tpl_vars['al']['en_name1']; ?>
<?php echo $this->_tpl_vars['attribute_row']; ?>
" style="float:left; width:100%;">
                                    <select class="add01_select01" id="<?php echo $this->_tpl_vars['al']['en_name1']; ?>
_select<?php echo $this->_tpl_vars['attribute_row']; ?>
" name="<?php echo $this->_tpl_vars['al']['en_name1']; ?>
[]" style="width:92%;">
                                        <option value=""></option>
                                        <?php $_from = $this->_tpl_vars['al']['attribute_value']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['val']):
?>
                                            <?php if ($this->_tpl_vars['dal']['attribute_id'] == $this->_tpl_vars['al']['attribute_id']): ?>
                                                <option value="<?php echo $this->_tpl_vars['val']['attribute_value_id']; ?>
" <?php if ($this->_tpl_vars['val']['attribute_value_id'] == $this->_tpl_vars['dalv']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['val']['cn_name']; ?>
</option>
                                            <?php endif; ?>
                                        <?php endforeach; endif; unset($_from); ?>
                                    </select>
                                <?php if ($this->_tpl_vars['al']['attr_category'] == 1): ?>
                                <?php if ($this->_tpl_vars['key'] == count($this->_tpl_vars['dal']['value'])): ?>
                                    <a href="javascript:void(0);" id="<?php echo $this->_tpl_vars['al']['en_name1']; ?>
_<?php echo $this->_tpl_vars['attribute_row']; ?>
" onclick="add_row('<?php echo $this->_tpl_vars['al']['en_name1']; ?>
',<?php echo $this->_tpl_vars['attribute_row']; ?>
,<?php echo $this->_tpl_vars['al']['attribute_id']; ?>
)">+</a>
                                <?php else: ?>
                                    <a href="javascript:void(0);" id="<?php echo $this->_tpl_vars['al']['en_name1']; ?>
_<?php echo $this->_tpl_vars['attribute_row']; ?>
" onclick="remove('<?php echo $this->_tpl_vars['al']['en_name1']; ?>
',<?php echo $this->_tpl_vars['attribute_row']; ?>
,<?php echo $this->_tpl_vars['al']['attribute_id']; ?>
)">-</a>
                                <?php endif; ?>
                                <?php endif; ?>
                            </div>
                            <!--<?php echo $this->_tpl_vars['attribute_row']++; ?>
 -->
                            <?php endforeach; endif; unset($_from); ?>
                            <?php endif; ?>
                            <?php endforeach; endif; unset($_from); ?>
                            <?php else: ?>
                                <div id="<?php echo $this->_tpl_vars['al']['en_name1']; ?>
<?php echo $this->_tpl_vars['attribute_row']; ?>
" style="float:left; width:100%;">
                                    <select class="add01_select01" id="<?php echo $this->_tpl_vars['al']['en_name1']; ?>
_select<?php echo $this->_tpl_vars['attribute_row']; ?>
" name="<?php echo $this->_tpl_vars['al']['en_name1']; ?>
[]" style="width:92%;">
                                        <option value=""></option>
                                        <?php $_from = $this->_tpl_vars['al']['attribute_value']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['val']):
?>
                                        <?php if ($this->_tpl_vars['val']['attribute_id'] == $this->_tpl_vars['al']['attribute_id']): ?>
                                        <option value="<?php echo $this->_tpl_vars['val']['attribute_value_id']; ?>
" <?php if ($this->_tpl_vars['al']['design_attribute_value'] == $this->_tpl_vars['val']['attribute_value_id']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['val']['cn_name']; ?>
</option>
                                        <?php endif; ?>
                                        <?php endforeach; endif; unset($_from); ?>
                                    </select>
                                    <?php if ($this->_tpl_vars['al']['attr_category'] == 1): ?>
                                    <a href="javascript:void(0);" id="<?php echo $this->_tpl_vars['al']['en_name1']; ?>
_<?php echo $this->_tpl_vars['attribute_row']; ?>
" onclick="add_row('<?php echo $this->_tpl_vars['al']['en_name1']; ?>
',<?php echo $this->_tpl_vars['attribute_row']; ?>
,<?php echo $this->_tpl_vars['al']['attribute_id']; ?>
)">+</a>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <?php else: ?>
                        <div id="<?php echo $this->_tpl_vars['al']['en_name1']; ?>
_double_choice" style="width:100%;float:left;">
                            <?php if (in_array ( $this->_tpl_vars['al']['attribute_id'] , $this->_tpl_vars['design_content_attribute_id'] )): ?>
                            <?php $this->assign('flag', 1); ?>
                            <?php $_from = $this->_tpl_vars['design_attribute_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['dal']):
?>
                            <?php if ($this->_tpl_vars['dal']['attribute_id'] == $this->_tpl_vars['al']['attribute_id']): ?>

                            <!-- <?php echo $this->_tpl_vars['flag']++; ?>
 -->
                            <div id="<?php echo $this->_tpl_vars['al']['en_name1']; ?>
<?php echo $this->_tpl_vars['attribute_row']; ?>
" style="float:left; width:100%;">
                                <select class="add01_select01" id="<?php echo $this->_tpl_vars['al']['en_name1']; ?>
_double<?php echo $this->_tpl_vars['attribute_row']; ?>
" name="<?php echo $this->_tpl_vars['al']['en_name1']; ?>
[<?php echo $this->_tpl_vars['attribute_row']; ?>
][]" style="width:92%;">
                                    <option value=""></option>
                                    <?php $_from = $this->_tpl_vars['al']['attribute_value']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['val']):
?>
                                        <?php if ($this->_tpl_vars['val']['attribute_id'] == $this->_tpl_vars['dal']['attribute_id'] && $this->_tpl_vars['val']['group'] == 1): ?>
                                            <option value="<?php echo $this->_tpl_vars['val']['attribute_value_id']; ?>
" <?php if ($this->_tpl_vars['dal']['value'][0] == $this->_tpl_vars['val']['attribute_value_id']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['val']['cn_name']; ?>

                                            </option>
                                        <?php endif; ?>
                                    <?php endforeach; endif; unset($_from); ?>
                                </select>
                                <select class="add01_select01" name="<?php echo $this->_tpl_vars['al']['en_name1']; ?>
[<?php echo $this->_tpl_vars['attribute_row']; ?>
][]" style="width:92%;">
                                    <option value=""></option>
                                    <?php $_from = $this->_tpl_vars['al']['attribute_value']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['lavi']):
?>
                                        <?php if ($this->_tpl_vars['lavi']['attribute_id'] == $this->_tpl_vars['dal']['attribute_id'] && $this->_tpl_vars['lavi']['group'] == 2): ?>
                                            <option value="<?php echo $this->_tpl_vars['lavi']['attribute_value_id']; ?>
" <?php if ($this->_tpl_vars['dal']['value'][1] == $this->_tpl_vars['lavi']['attribute_value_id']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['lavi']['cn_name']; ?>
</option>
                                        <?php endif; ?>
                                    <?php endforeach; endif; unset($_from); ?>
                                </select>
                                <?php if ($this->_tpl_vars['al']['attr_category'] == 1): ?>
                                    <?php if ($this->_tpl_vars['flag'] == count($this->_tpl_vars['dal']['value'])): ?>
                                    <a href="javascript:void(0);" style="font-size:26px; float:left; width:8%; line-height:26px;" id="<?php echo $this->_tpl_vars['al']['en_name1']; ?>
_<?php echo $this->_tpl_vars['attribute_row']; ?>
" onclick="add_double_row('<?php echo $this->_tpl_vars['al']['en_name1']; ?>
',<?php echo $this->_tpl_vars['attribute_row']; ?>
,<?php echo $this->_tpl_vars['al']['attribute_id']; ?>
)">+</a>
                                    <?php else: ?>
                                    <a href="javascript:void(0);" style="font-size:26px; float:left; width:8%; line-height:26px;" id="<?php echo $this->_tpl_vars['al']['en_name1']; ?>
_<?php echo $this->_tpl_vars['attribute_row']; ?>
" onclick="remove('<?php echo $this->_tpl_vars['al']['en_name1']; ?>
',<?php echo $this->_tpl_vars['attribute_row']; ?>
,<?php echo $this->_tpl_vars['al']['attribute_id']; ?>
)">-</a>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </div>
                            <!--<?php echo $this->_tpl_vars['attribute_row']++; ?>
 -->
                            <?php endif; ?>
                            <?php endforeach; endif; unset($_from); ?>
                            <?php else: ?>
                            <div id="<?php echo $this->_tpl_vars['al']['en_name1']; ?>
<?php echo $this->_tpl_vars['attribute_row']; ?>
" style="float:left; width:100%;">
                                <select class="add01_select01" id="<?php echo $this->_tpl_vars['al']['en_name1']; ?>
_double<?php echo $this->_tpl_vars['attribute_row']; ?>
" name="<?php echo $this->_tpl_vars['al']['en_name1']; ?>
[<?php echo $this->_tpl_vars['attribute_row']; ?>
][]" style="width:92%;">
                                    <option value=""></option>
                                    <?php $_from = $this->_tpl_vars['al']['attribute_value']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['val']):
?>
                                    <?php if ($this->_tpl_vars['val']['attribute_id'] == $this->_tpl_vars['al']['attribute_id'] && $this->_tpl_vars['val']['group'] == 1): ?>
                                    <option value="<?php echo $this->_tpl_vars['val']['attribute_value_id']; ?>
" <?php if ($this->_tpl_vars['al']['design_attribute_value'][0] == $this->_tpl_vars['val']['attribute_value_id']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['val']['cn_name']; ?>

                                    </option>
                                    <?php endif; ?>
                                    <?php endforeach; endif; unset($_from); ?>
                                </select>
                                <select class="add01_select01" name="<?php echo $this->_tpl_vars['al']['en_name1']; ?>
[<?php echo $this->_tpl_vars['attribute_row']; ?>
][]" style="width:92%;">
                                    <option value=""></option>
                                    <?php $_from = $this->_tpl_vars['al']['attribute_value']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['lavi']):
?>
                                    <?php if ($this->_tpl_vars['lavi']['attribute_id'] == $this->_tpl_vars['al']['attribute_id'] && $this->_tpl_vars['lavi']['group'] == 2): ?>
                                    <option value="<?php echo $this->_tpl_vars['lavi']['attribute_value_id']; ?>
" <?php if ($this->_tpl_vars['al']['design_attribute_value'][1] == $this->_tpl_vars['lavi']['attribute_value_id']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['lavi']['cn_name']; ?>
</option>
                                    <?php endif; ?>
                                    <?php endforeach; endif; unset($_from); ?>
                                </select>
                                <?php if ($this->_tpl_vars['al']['attr_category'] == 1): ?>
                                <a href="javascript:void(0);" style="font-size:26px; float:left; width:8%; line-height:26px;" id="<?php echo $this->_tpl_vars['al']['en_name1']; ?>
_<?php echo $this->_tpl_vars['attribute_row']; ?>
" onclick="add_double_row('<?php echo $this->_tpl_vars['al']['en_name1']; ?>
',<?php echo $this->_tpl_vars['attribute_row']; ?>
,<?php echo $this->_tpl_vars['al']['attribute_id']; ?>
)">+</a>
                                <?php endif; ?>
                            </div>
                            <?php endif; ?>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
                
                <?php endif; ?>
                <?php endforeach; endif; unset($_from); ?>
                </div>
            <?php endforeach; endif; unset($_from); ?>
                </div>

        </div>
    </div>
    </div>
    
</form>
<div class="sIE_r" style="width:30%;" id="image">
    <div class="sIE_r_img" style="height:360px; width:325px; margin-left:0px;">
        <div style="float:left;  width:325px; height:360px;"> 
            <!--<img src="sss.jpg" width="224px" height="224px" />-->
            <iframe name="yframe_unfinish" src="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/unfinishdesign/upload_jpg" style="border:none; width:325px; height:360px;"></iframe>
        </div>
        <div id="upload_name" style="float:left; margin-top:0px; font-size:14px; margin-left:10px;height:20px; width:200px;"></div>
    </div>
    <div style="float:left; margin-top:0px; width:325px;">
        <form action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/unfinishdesign/upload_jpg" id="upload_jpg" target="yframe_unfinish" method="post" enctype="multipart/form-data" >
            <div style="float:left; height:50px; width:80px; overflow:hidden; position:relative;">
                <input type="file" class="sIE_r_img_file" name="upload_file" onchange="image()" id="upload_file" style=" opacity:0; position:relative; z-index:10; margin-top:0px;" />
                <input type="button" class="sIE_r_img_file" name="jpg" style=" opacity:1; width:80px; text-align:center; height:24px; position:absolute; z-index:9; margin-top:0px;" value="浏览" />
            </div>
            <input type="submit" value="上传JPG" id="jpg_upload_submit" style=" float:right; width:90px; height:24px;" />
        </form>
    </div>
</div>
</div>
<div class="formBar">
    <ul>
        <?php if ($this->_tpl_vars['edit_no'] == 1): ?>
        <li>
            <div class="buttonActive">
                <div class="buttonContent">
                    <button class="close">取消</button>
                </div>
            </div>
        </li>
        <?php else: ?>
        <li>
            <div class="buttonActive">
                <div class="buttonContent">
                    <button type="button" id="submit_form">确认</button>
                </div>
            </div>
        </li>
        <li>
            <div class="buttonActive">
                <div class="buttonContent">
                    <button class="close">取消</button>
                </div>
            </div>
        </li>
        <?php endif; ?>
    </ul>
</div>
</div>

<!-- {literal} --> 
<script type="text/javascript">
    function add_row(name,attribute_row,attribute_id){
        if($("#"+name+"_"+attribute_row).html()=="+"){
            $("#"+name+"_"+attribute_row).html("-");
            $("#"+name+"_"+attribute_row).attr("onclick","remove('"+name+"',"+attribute_row+")");
        }

        attribute_row++;
        html='<div id="'+name+attribute_row+'" style="float:left; width:100%; margin-bottom:10px;">';
        html+='<div style="float:left; width:100%;"><select class="add01_select01" onchange="show_color(\''+name+'\','+attribute_row+',1)" id="'+name+'_select'+attribute_row+'" name="'+name+'[]" style="width:92%;float:left;"><option value=""></option>';
        <?php $_from = $this->_tpl_vars['attribute_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['la']):
?>
        <?php if (! empty ( $this->_tpl_vars['la']['attribute_value'] )): ?>
        <?php $_from = $this->_tpl_vars['la']['attribute_value']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['lavi']):
?>
        <?php if (! empty ( $this->_tpl_vars['lavi']['attribute_id'] )): ?>
        if(<?php echo $this->_tpl_vars['lavi']['attribute_id']; ?>
==attribute_id){
            html+='<option value="<?php echo $this->_tpl_vars['lavi']['attribute_value_id']; ?>
"  img="<?php echo $this->_tpl_vars['lavi']['image']; ?>
"><?php echo $this->_tpl_vars['lavi']['cn_name']; ?>
</option>';
        }
        <?php endif; ?>
        <?php endforeach; endif; unset($_from); ?>
        <?php endif; ?>
        <?php endforeach; endif; unset($_from); ?>

        html+='</select><a href="javascript:void(0);"  id="'+name+'_'+attribute_row+'" onclick="add_row(\''+name+'\','+attribute_row+','+attribute_id+')" style="font-size:26px; folat:left; width:8%; line-height:26px;">+</a></div></div>';

        $("#"+name+"_choice").append(html);
    }

    function add_double_row(name,attribute_row,attribute_id){
        if($("#"+name+"_"+attribute_row).html()=="+"){
            $("#"+name+"_"+attribute_row).html("-");
            $("#"+name+"_"+attribute_row).attr("onclick","remove('"+name+"',"+attribute_row+")");
        }

        attribute_row++;
        html='<div id="'+name+attribute_row+'" style="float:left; width:100%;">';
        html+='<div style="float:left; width:100%;"><select class="add01_select01" onchange="show_color(\''+name+'\','+attribute_row+',2)" id="'+name+'_double'+attribute_row+'" name="'+name+'['+attribute_row+'][]" style="width:92%;"><option value=""></option>';
        <?php $_from = $this->_tpl_vars['attribute_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['la']):
?>
        <?php if (! empty ( $this->_tpl_vars['la']['attribute_value'] )): ?>
        <?php $_from = $this->_tpl_vars['la']['attribute_value']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['lavi']):
?>
        <?php if (! empty ( $this->_tpl_vars['lavi']['attribute_id'] )): ?>
        if(<?php echo $this->_tpl_vars['lavi']['attribute_id']; ?>
==attribute_id && <?php echo $this->_tpl_vars['lavi']['group']; ?>
==1){
            html+='<option value="<?php echo $this->_tpl_vars['lavi']['attribute_value_id']; ?>
" img="<?php echo $this->_tpl_vars['lavi']['image']; ?>
"><?php echo $this->_tpl_vars['lavi']['cn_name']; ?>
</option>';
        }
        <?php endif; ?>
        <?php endforeach; endif; unset($_from); ?>
        <?php endif; ?>
        <?php endforeach; endif; unset($_from); ?>
        html+='</select>';
        html+='<select class="add01_select01" id="add01_select01" name="'+name+'['+attribute_row+'][]" style="width:92%;"><option value=""></option>';
        <?php $_from = $this->_tpl_vars['attribute_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['la']):
?>
        <?php if (! empty ( $this->_tpl_vars['la']['attribute_value'] )): ?>
        <?php $_from = $this->_tpl_vars['la']['attribute_value']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['lavi']):
?>
        <?php if (! empty ( $this->_tpl_vars['lavi']['attribute_id'] )): ?>
        if(<?php echo $this->_tpl_vars['lavi']['attribute_id']; ?>
==attribute_id && <?php echo $this->_tpl_vars['lavi']['group']; ?>
==2){
            html+='<option value="<?php echo $this->_tpl_vars['lavi']['attribute_value_id']; ?>
"><?php echo $this->_tpl_vars['lavi']['cn_name']; ?>
</option>';
        }
        <?php endif; ?>
        <?php endforeach; endif; unset($_from); ?>
        <?php endif; ?>
        <?php endforeach; endif; unset($_from); ?>
        html+='</select><a href="javascript:void(0);" id="'+name+'_'+attribute_row+'" onclick="add_double_row(\''+name+'\','+attribute_row+','+attribute_id+')" style="font-size:26px; folat:left; width:8%; line-height:26px;">+</a></div></div>';

        $("#"+name+"_double_choice").append(html);
    }

    function remove(name,attribute_row){
        $("#"+name+attribute_row).remove();
    }

	function image(){
		$("#upload_name").html($("#upload_file").val())
	}
	function zhijia_image(){
		$("#zhijia_upload_name").html($("#zhijia_upload_file").val())
	}
	function image_cdr(){
		$("#upload_name_cdr").html($("#upload_cdr").val())
	}
	function zhijia_image_cdr(){
		$("#zhijia_upload_name_cdr").html($("#zhijia_upload_cdr").val())
	}
	$(document).ready(function(){
		$("#jpg_upload_submit").click(function (){
			$("#upload_jpg").submit();
			
		});
		$("#zhijia_jpg_upload_submit").click(function (){
			$("#zhijia_upload_jpg").submit();
			
		});
		$("#cdr_upload_submit_add").click(function (){
			//alert('1111');
			$("#content_upload_cdr_add").submit();
		});
		$("#zhijia_cdr_upload_submit_add").click(function (){
			//alert('1111');
			$("#zhijia_upload_cdr_add").submit();
		});
        
		$("#submit_form").click(function () {
            $("#info_form").submit();
            return;
            var formData = new FormData($("#info_form")[0]);
            if(($("#unf_customer_code").val()== "")){
                $("#unfinishdesign_error").css("display","block");
                $("#unfinishdesign_error").html("客户代码不能为空！");
            }else if($("#design_name").val() == ""){
                $("#unfinishdesign_error").css("display","block");
                $("#unfinishdesign_error").html("请填写设计名称！");
            }else{
                $.ajax({
                    type: 'post',
                    url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/unassigneddesign/check_design',          
                    data: formData,
                    cache: false,
                    processData:false,  
                    contentType: false,  
                    dataType:'text', 
                }).success(function (data){
                    if(data!=1){
                        $("#unfinishdesign_error").css("display","block");
                        $("#unfinishdesign_error").html(data);  
                    }else{
                        $("#design_type").attr("disabled",false);

                        $("#info_form").submit();
                    }                       
                });
            }
        });
		
	
/*		$("#submit_form").click(function () {
			$("#design_type").attr("disabled",false); 
			
			var s=$("#color_date").val();
			var a= /^\+?[1-9][0-9]*$/;
			var b=a.test(s);
		    if($("#design_NO").val()==""){
				$("#unfinishdesign_error").css("display","block");
				$("#unfinishdesign_error").html("请填写分版数量数量！");
			}else{
				var n=$("#design_NO").val();
			    c=a.test(n);
			    if($("#design_type").val()==''){
					$("#unfinishdesign_error").css("display","block");
					$("#unfinishdesign_error").html("请选择类别！");
				}else if(c==false){			
					$("#unfinishdesign_error").css("display","block");
					$("#unfinishdesign_error").html("分版数量应为正整数！");
				}else if($("#upper").val()==""){
					$("#unfinishdesign_error").css("display","block");
					$("#unfinishdesign_error").html("请选择上身款式！");
				}else if($("#lower").val() == ""){
					$("#unfinishdesign_error").css("display","block");
					$("#unfinishdesign_error").html("请选择下身款式！");
				}else if($("#design_name").val() == ""){
					$("#unfinishdesign_error").css("display","block");
					$("#unfinishdesign_error").html("请填写设计名称！");
				}else if($("#color").val() == ""){
					$("#unfinishdesign_error").css("display","block");
					$("#unfinishdesign_error").html("请填写服装颜色！");
				}else if(($("#unf_customer_code").val()== "")){
					$("#unfinishdesign_error").css("display","block");
					$("#unfinishdesign_error").html("客户代码不能为空！");	
				}else if($("#logoname").val()!= "" && $("#logo_technology").val() == ""){
					$("#unfinishdesign_error").css("display","block");
					$("#unfinishdesign_error").html("请选择Logo工艺！");
				}else if($("#crowd").val()== ""){
					$("#unfinishdesign_error").css("display","block");
					$("#unfinishdesign_error").html("请选择适用人群！");
				}else if($("#type").val() == ""){
					$("#unfinishdesign_error").css("display","block");
					$("#unfinishdesign_error").html("请选择产品类型！");
				}/*else if($("#material_info_c_color").val() == ""){
					$("#unfinishdesign_error").css("display","block");
					$("#unfinishdesign_error").html("请选择颜色！");
				}else if($("#material_c_quantity").val() == ""){
					$("#unfinishdesign_error").css("display","block");
					$("#unfinishdesign_error").html("请填写数量！");
				}else{
					$("#design_date_error").css("display","none");
					$.ajax({
							url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/unfinishdesign/check_photo',//通过Ajax取数据的目标页面
							data:{},
							type:'post',//方法，还可以是"post"
							dataType:'text',//数据类型，还有其它的，详见jQuery手册
							success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
							{
								if(locals==1){
									$("#unfinishdesign_error").css("display","none");
									$("#info_form").submit();
								}else{
									$("#unfinishdesign_error").css("display","block");
									$("#unfinishdesign_error").html("请上传图片,且名称不包含空格！");
									
								}
							}
							
					    });
				}
			}
		});*/
		$("#inch_w").bind("input propertychange", function() {
			//alert($(this).val());
			var cm_w = $(this).val() * 2.54;
			if(cm_w != ''){
				cm_w = cm_w.toFixed(2);
			}
			$("#cm_w").val(cm_w);
			$("#cm_w1").val(cm_w);
		});
		
		$("#inch_h").bind("input propertychange", function() {
			//alert($(this).val());
			var cm_h = $(this).val() * 2.54;
			if(cm_h != ''){
				cm_h = cm_h.toFixed(2);
			}
			
			$("#cm_h").val(cm_h);
			$("#cm_h1").val(cm_h);
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
		
		$("#cm_h").bind("input propertychange", function() {
			//alert($(this).val());
			var inch_h = $(this).val() / 2.54;
			if(inch_h != ''){
				inch_h = inch_h.toFixed(2);
			}
			$("#inch_h").val(inch_h);
			$("#inch_h1").val(inch_h);
		});
		
		$("#size_width_unfinish_add").bind("input propertychange", function() {
			//alert($(this).val());
			var mm_w = $(this).val() / 25.4;
			if(mm_w != ''){
				mm_w = mm_w.toFixed(2);
			}
			$("#size_inch_width_unfinish_add").val(mm_w);
		});
		
		$("#size_height_unfinish_add").bind("input propertychange", function() {
			//alert($(this).val());
			var mm_h = $(this).val() / 25.4;
			if(mm_h != ''){
				mm_h = mm_h.toFixed(2);
			}
			
			$("#size_inch_height_unfinish_add").val(mm_h);
		});
		
		$("#size_inch_width_unfinish_add").bind("input propertychange", function() {
			//alert($(this).val());
			var inch_w = $(this).val() * 25.4;
			
			if(inch_w != ''){
				inch_w = inch_w.toFixed(2);
			}
			
			$("#size_width_unfinish_add").val(inch_w);
		});
		
		$("#size_inch_height_unfinish_add").bind("input propertychange", function() {
			//alert($(this).val());
			var inch_h = $(this).val() * 25.4;
			if(inch_h != ''){
				inch_h = inch_h.toFixed(2);
			}
			$("#size_height_unfinish_add").val(inch_h);
		});
		
		$("#quotation_categroy").change(function (){
			var qc = $("#quotation_categroy").val();
			if(qc == '6'){
				$("#siek").css("display","none");
				$("#material_table_unfinish_add").css("display","none");
			}else{
				$("#siek").css("display","");
				$("#material_table_unfinish_add").css("display","");
			}
			if(qc != '' ){
				$.ajax({
					url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/get_design_code-design_category-'+qc+'.html',//通过Ajax取数据的目标页面
					type:'get',//方法，还可以是"post"
					dataType:'json',//数据类型，还有其它的，详见jQuery手册
					success:function(locals)//成功后执行的语句，这里是一个函数，“locals”是返回的数据
					{
						$("#design_code").val(locals);
						if(qc=='11'){//如果是601的，获取其客户信息
							$.ajax({
								url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/get_customers_info',
								type:'post',
								dataType:"json",
								success: function(data){
									$("#601_customer_code").css("display",'block');
									$("#601_customer_code").val(data.customer_code);
									$("#unf_customer_code").val('');
									$("#unf_customer_code").css("display",'none');
									$("#unf_customer_name").val(data.customer_name);
									$("#unf_customer_company").val(data.company);
									$("#design_NO_div").css("display",'none');
									$("#color_date_div").css("display",'none');
								}
							});							
						}						
					}
				});
			}
			
			//根据类别的不同，显示和隐藏不同的地方
			//13:代表指甲贴报价,在数据库中可以查到
			if(qc==13){
				$("#design_NO").prop("readonly", true);
				$("#color_date").prop("readonly", true);
				$("#size").css("display","none");
				$("#siek").css("display","none");
				$("#m_list").css("display","none");
				$("#image").css("display","none");
				$("#image1").css("display","block");
				$("#table_size").css("width","35%");
			}else{
				$("#design_NO").prop("readonly", false);
				$("#color_date").prop("readonly", false);
				$("#size").css("display","block");
				$("#siek").css("display","block");
				$("#m_list").css("display","block");	
				$("#image").css("display","block");
				$("#image1").css("display","none");
				$("#table_size").css("width","65%");
			}
			
		});
	    
	    $("#material_select_unfinish_add").change(
	    	function()
	    	{
	    		//获取id为select的下拉框选中的值
	    	    var a = $("#material_select_unfinish_add").val();
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
							$("#material_info_color_unfinish_add").find("option").remove();
							$("#material_info_c_color_unfinish_add").find("option").remove();
							$("#material_c_size_unfinish_add").find("option").remove();
							$("#material_c_quantity_unfinish_add").val("");	
							$("#size_width_unfinish_add").val("");
							$("#size_height_unfinish_add").val("");
							$("#material_quantity_unfinish_add").val("1");
							if(locals.result == 0){
								
							}else if(locals.result == 2){
								$("#material_info_unfinish_add").css("display","none");
								$("#material_info_c_unfinish_add").css("display","block");
								$("#material_info_color_unfinish_add").empty();
								var objs = locals.color;
								$("#material_info_c_color_unfinish_add").append(opti);   //为Select追加一个Option(下拉项)     
								for (var o in objs) {
									var  jsonObj  =  objs[o];
									var  optionstring = "<option value=\"" + jsonObj.material_color + "\" >" + jsonObj.material_color + "</option>";
								    $("#material_info_c_color_unfinish_add").append(optionstring);   //为Select追加一个Option(下拉项)           
								} 
								
							}else if(locals.result == 1){
								$("#material_info_unfinish_add").css("display","block");
								$("#material_info_c_unfinish_add").css("display","none");
								$("#material_info_c_color_unfinish_add").empty();
								//alert(locals.color.length);//输出子对象数量
								var objs = locals.color;
								$("#material_info_color_unfinish_add").append(opti);   //为Select追加一个Option(下拉项)        
								for (var o in objs) {
									var  jsonObj  =  objs[o];
									var  optionstring = "<option value=\"" + jsonObj.color + "\" >" + jsonObj.color + "</option>";
								    $("#material_info_color_unfinish_add").append(optionstring);   //为Select追加一个Option(下拉项)           
								} 
								
							}
							//alert(locals);
							//$("#customer_code").val(locals);
						}
					});
				}
	    	}
	    );
		
		$("#material_c_size_unfinish_add").change(function (){
		    $("#material_c_quantity_unfinish_add").val("");
		});
		
		$("#material_info_color_unfinish_add").change(function (){
		    $("#size_width_unfinish_add").val("");
			$("#size_height_unfinish_add").val("");
			$("#material_quantity_unfinish_add").val("1");
		});		
		
		$("#material_info_c_color_unfinish_add").change(function (){
			var a = $("#material_select_unfinish_add").val();
			var color = $("#material_info_c_color_unfinish_add").val();
			$.ajax({
				url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/get_material_c_infomation',//通过Ajax取数据的目标页面
				data:{'material_name':a,'material_color':color,},
				type:'get',//方法，还可以是"post"
				dataType:'json',//数据类型，还有其它的，详见jQuery手册
				success:function(locals)//成功后执行的语句，这里是一个函数，“locals”是返回的数据
				{
					var objs = locals.size;
					var size = '';
					$("#material_c_size_unfinish_add").find("option").remove();
					$("#material_c_quantity_unfinish_add").val("");				
					for (var o in objs) {
						var  jsonObj  =  objs[o];
						if(jsonObj.size){
							size = jsonObj.size;
							var  optionstring = "<option value=\"" + size + "\" >" + size + "</option>";
							$("#material_c_size_unfinish_add").append(optionstring);   //为Select追加一个Option(下拉项
						}
						else if(jsonObj.size_mm){
							size = jsonObj.size_mm;
							var  optionstring = "<option value=\"" + size + "\" >" + size + "mm</option>";
							$("#material_c_size_unfinish_add").append(optionstring);   //为Select追加一个Option(下拉项)  
						}
						else if(jsonObj.size_m_w&& jsonObj.size_m_h){
							size = jsonObj.size_m_w+'*'+jsonObj.size_m_h;
							var  optionstring = "<option value=\"" + size + "\" >" + size + "mm</option>";
							$("#material_c_size_unfinish_add").append(optionstring);   //为Select追加一个Option(下拉项)   
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
		
		var row_number = 0 ;
		$("#insert_material1_unfinish_add").click(function (){
			
			var material_name = $("#material_select_unfinish_add").val();
			var size_width = $("#size_inch_width_unfinish_add").val();
			var size_height = $("#size_inch_height_unfinish_add").val();
			var color = $("#material_info_color_unfinish_add").val();
			var quantity = $("#material_quantity_unfinish_add").val();
			var s01 = $("#sIE_size01").val();
			var size = size_width+"*"+size_height;
			var m_unit = '';
			if(s01 == '1'){
				m_unit = 'inch';
			}
			if(s01 == '2'){
				m_unit = 'cm';
			}
			
			if($("#material_info_color_unfinish_add").val()!="" && $("#size_width_unfinish_add").val()!="" && $("#size_height_unfinish_add").val()!="" && $("#material_quantity_unfinish_add").val()!=""){
			
			$.ajax({
				url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/insert_table_design_material',//通过Ajax取数据的目标页面
				type:'get',//方法，还可以是"post"
				data:{'material_name':material_name,'material_color':color,'material_size':size,'material_quantity':quantity},
				dataType:'json',//数据类型，还有其它的，详见jQuery手册
				success:function(locals)//成功后执行的语句，这里是一个函数，“locals”是返回的数据
				{
					if(locals != 0){
					var table_value = "<tr class='uf_tabClass01'> <td>"+material_name+"<input type='hidden' id='row_number' value='"+row_number+"' /><input type='hidden' name='materials["+row_number+"][material_name]' value='"+material_name+"' /></td> <td>"+color+"<input type='hidden' name='materials["+row_number+"][color]' value='"+color+"' /></td> <td>"+size_width+"*"+size_height+" inch "+m_unit+"<input type='hidden' name='materials["+row_number+"][size_width]' value='"+size_width+"' /><input type='hidden' name='materials["+row_number+"][size_height]' value='"+size_height+"' /><input type='hidden' name='materials["+row_number+"][size]' value='"+size+"' /><input type='hidden' name='materials["+row_number+"][m_unit]' value='"+m_unit+"' /></td>  <td>"+quantity+"<input type='hidden' name='materials["+row_number+"][quantity]' value='"+quantity+"' /></td><td onClick='getDel(this,"+locals+")'><a href='#'>删除</a></td></tr>";
					$("#material_table_unfinish_add").append(table_value);   //为table追加一个tr(下拉项)
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
		
		$("#insert_material2_unfinish_add").click(function (){
			var material_name = $("#material_select_unfinish_add").val();
			var color = $("#material_info_c_color_unfinish_add").val();
			var quantity = $("#material_c_quantity_unfinish_add").val();
			
			var size = $("#material_c_size_unfinish_add").val();
			var size_text = $("#material_c_size_unfinish_add").find("option:selected").text(); 
			
			if($("#material_info_c_color_unfinish_add").val()!="" && $("#material_c_size_unfinish_add").val()!="" && $("#material_c_quantity_unfinish_add").val()!=""){
			$.ajax({
				url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/insert_table_design_material',//通过Ajax取数据的目标页面
				type:'get',//方法，还可以是"post"
				data:{'material_name':material_name,'material_color':color,'material_size':size,'material_quantity':quantity},
				dataType:'json',//数据类型，还有其它的，详见jQuery手册
				success:function(locals)//成功后执行的语句，这里是一个函数，“locals”是返回的数据
				{
					if(locals != 0){
					var table_value = "<tr class='uf_tabClass01'> <td>"+material_name+"<input type='hidden' id='row_number' value='"+row_number+"' /><input type='hidden' name='materials["+row_number+"][material_name]' value='"+material_name+"' /></td><td>"+color+"<input type='hidden' name='materials["+row_number+"][color]' value='"+color+"' /></td>  <td>"+size_text+"<input type='hidden' name='materials["+row_number+"][size]' value='"+size+"' /></td> <td>"+quantity+"<input type='hidden' name='materials["+row_number+"][quantity]' value='"+quantity+"' /></td><td onClick='getDel(this,"+locals+")'><a href='#'>删除</a></td></tr>";
					$("#material_table_unfinish_add").append(table_value);   //为table追加一个tr(下拉项)
					}else{
						alert("材料数据有重复,请重新录入");
					}
				}
			});
			 
		    row_number++;
			}else{
				alert("请添加完整信息！");
			}
		});
		
	});

	function getDel(k,row){
		//alert(row);
		var material_name = $("#material_select_unfinish_add").val();
		var size_width = $("#size_inch_width_unfinish_add").val();
		var size_height = $("#size_inch_height_unfinish_add").val();
		var color = $("#material_info_color_unfinish_add").val();
		var quantity = $("#material_quantity_unfinish_add").val();
		var color2 = $("#material_info_c_color_unfinish_add").val();
		var quantity2 = $("#material_c_quantity_unfinish_add").val();
		var size = size_width+"*"+size_height;
		var size2 = $("#material_c_size_unfinish_add").val();
		$.ajax({
				url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/delete_design_material',//通过Ajax取数据的目标页面
				type:'get',//方法，还可以是"post"
				data:{'id':row,'material_name':material_name,'material_color':color,'material_color2':color2,'material_size':size,'material_size2':size2,'material_quantity':quantity,'material_quantity2':quantity2},
				dataType:'json',//数据类型，还有其它的，详见jQuery手册
				success:function(locals)//成功后执行的语句，这里是一个函数，“locals”是返回的数据
				{
					
				}
		});
	     $(k).parent().remove();  
		//$("#material_table1").$(k).remove();
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
<script type="text/javascript" language="javascript">
		function customer_num(){
			var name = $("#unf_customer_code").val();
			$.ajax({
				url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/hotfix_quotation/add_customer',//通过Ajax取数据的目标页面
				data:{"name":name},
				type:'post',//方法，还可以是"post"
				dataType:'json',//数据类型，还有其它的，详见jQuery手册
				success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
				{
					if(locals){
						$("#unf_customer_name").val(locals.customer_name);
						$("#unf_customer_company").val(locals.company);
					}else{
						$("#unf_customer_name").val('');
						$("#unf_customer_company").val('');									
					}
				}								
				
			});
		}
</script> 

<!--<script type="text/javascript"> 
function test() 
{ var num = document.getElementById("num").value; 
if (num=="") 
{ alert('请输入内容'); return false; }
 if (!(/(^[1-9]\d*$)/.test(num))) 
 { alert('输入的不是正整数'); return false; }
 else { alert('输入的是正整数'); } }
</script> -->