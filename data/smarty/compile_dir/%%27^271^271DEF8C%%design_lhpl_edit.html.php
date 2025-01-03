<?php /* Smarty version 2.6.22, created on 2024-10-23 11:07:16
         compiled from unfinishdesign/design_lhpl_edit.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', 'unfinishdesign/design_lhpl_edit.html', 252, false),)), $this); ?>
<script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/cstown_Sys.js" type="text/javascript"></script>
<link href="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/css/cstown_sys.css" rel="stylesheet" type="text/css" media="screen"/>
<div class="pageContent">
	<div class="stkInfEnter" layoutH="100" style="width:97%; margin-left:20px;">
	<div class="sIEK" style="width:100%;">
	<form method="post" action="<?php echo $this->_tpl_vars['act']; ?>
" enctype="multipart/form-data" class="pageForm sIE_l" style="width:90%; height:auto; overflow:hidden" onsubmit="return validateCallback(this, navTabAjaxDone)" id="info_form<?php echo $this->_tpl_vars['design_content']['id']; ?>
" >
		<input type="hidden" name="design_id" value="<?php echo $this->_tpl_vars['design']['id']; ?>
">
		<input type="hidden" id="design_content_id" name="design_content_id" value="<?php echo $this->_tpl_vars['design_content']['id']; ?>
" />
		<input type="hidden" name="submit_value" value="" id="submit_value" />
		<input type="hidden" name="design_no" value="<?php echo $this->_tpl_vars['design']['design_NO']; ?>
" id="" />
		<input type="hidden" value="<?php echo $this->_tpl_vars['check_status']; ?>
" id="check_status" />
		<div class="sIE_title">设计信息录入</div>
		<div id="lhpl1" <?php if (empty ( $this->_tpl_vars['design']['id'] )): ?>style="display:none;" <?php endif; ?>>
		<div class="sIEK" style="width:95%;font-size:24px;font-weight:bold;">基础属性</div>
		<div class="sIEK" style="width:95%;border-top:1px solid #000;" id="table_size">
			<div style="width:100%; float:left;">
				<div class="sIE_l" style="width:200px; height:auto;"> <?php if ($this->_tpl_vars['user_hidden']['group_id'] != '53' || $this->_tpl_vars['user_hidden']['group_id'] != '68'): ?>
					<div style="float:left; margin-bottom:5px;">
						<div class="sIE_l_01_title">业务员:</div>
						<input type="hidden" class="sIE_No" style="width:100px;"  name="salesman_id" id="salesman_id" value="<?php if ($this->_tpl_vars['design']['salesman_id'] != ''): ?><?php echo $this->_tpl_vars['design']['salesman_id']; ?>
<?php else: ?><?php echo $this->_tpl_vars['user_info']['user_id']; ?>
<?php endif; ?>" />
						<input type="text" class="sIE_No" style="width:100px;"  name="salesman_name" id="salesman_user_name" value="<?php if ($this->_tpl_vars['design']['salesman_user_name'] != ''): ?><?php echo $this->_tpl_vars['design']['salesman_user_name']; ?>
<?php else: ?><?php echo $this->_tpl_vars['user_info']['user_name']; ?>
<?php endif; ?>" readonly />
					</div>
					<?php endif; ?>
					<div style="float:left; margin-bottom:5px;">
						<div class="sIE_l_01_title">时间:</div>
						<input type="text" class="sIE_No" style="width:100px;"  name="design_content_date" id="design_date" value="<?php if ($this->_tpl_vars['design_content']['design_content_date'] != ''): ?><?php echo $this->_tpl_vars['design_content']['design_content_date']; ?>
<?php else: ?><?php echo $this->_tpl_vars['today']; ?>
<?php endif; ?>"  readonly />
					</div>
					<div style="float:left; margin-bottom:5px;">
						<div class="sIE_l_01_title">出图周期:</div>
						<input type="hidden" name="stock_id" value="<?php echo $this->_tpl_vars['design']['id']; ?>
" />
						<select disabled="disabled" class="add01_select01" id="add01_select01" name="make_pic_time" style="width:106px;">
						<?php $_from = $this->_tpl_vars['time_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['time']):
?> <option <?php if ($this->_tpl_vars['design']['make_pic_time'] == $this->_tpl_vars['time']['id']): ?>selected="selected"<?php endif; ?>  value="<?php echo $this->_tpl_vars['time']['id']; ?>
"><?php echo $this->_tpl_vars['time']['time_name']; ?>

						</option>
						<?php endforeach; endif; unset($_from); ?>
						</select>
					</div>
					<div style="float:left; margin-bottom:5px;">
						<div class="sIE_l_01_title">客户代码:</div>
						<input type="text" name="customer_code"  value="<?php echo $this->_tpl_vars['design']['customer_code']; ?>
" id="unf_customer_code" style="width:100px;" readonly class="sIE_No" />
						<input type="text" name="601_customer_code" id="601_customer_code" style="width:100px; display:none" readonly="readonly"  class="sIE_No"  />
					</div>
					<div style="float:left; margin-bottom:5px; " id="design_NO_div">
						<div class="sIE_l_01_title">分版数量:</div>
						<input  readonly  type="text" class="sIE_No" value="<?php if ($this->_tpl_vars['design']['design_NO']): ?><?php echo $this->_tpl_vars['design']['design_NO']; ?>
<?php else: ?>1<?php endif; ?>" style="width:100px;"  name="design_NO" id="design_NO"    /> </div>
				</div>
				<input type="hidden" name="huanse_status" value="1" />
				<div class="sIE_l" style="width:260px; height:auto;">
					<div style="float:left; margin-bottom:5px;">
						<div class="sIE_l_01_title">设计名称:</div>
						<input  readonly type="text" class="sIE_No" style="width:120px;"  name="design_content_name" id="design_name" value="<?php echo $this->_tpl_vars['design_content']['design_content_name']; ?>
"/> </div>
					<div style="float:left; margin-bottom:5px;">
						<div class="sIE_l_01_title">设计编号:</div>
						<input type="text" class="sIE_No"  name="design_content_code" style="width:120px;" id="design_code" value="<?php echo $this->_tpl_vars['design_content']['design_content_code']; ?>
" readonly />
					</div>
				</div>
				<style>
                .attribute .sIE_l{ margin-top:10px;}
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
							<input type="hidden"  name="attribute[<?php echo $this->_tpl_vars['al']['en_name1']; ?>
]" value="<?php echo $this->_tpl_vars['al']['attribute_id']; ?>
"/>
							<div style="float:left; width:100%; margin-bottom:10px;" >
								<div class="sIE_l_01_title" <?php if ($this->_tpl_vars['al']['required'] == 1): ?>style="color:red;"<?php endif; ?>><?php echo $this->_tpl_vars['al']['cn_name']; ?>
:</div>
							<?php if ($this->_tpl_vars['al']['type'] == "文本框"): ?>
								<?php $this->assign('text', 1); ?>
								<?php $_from = $this->_tpl_vars['design_attribute_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['dal']):
?>
								<?php if ($this->_tpl_vars['dal']['attribute_id'] == $this->_tpl_vars['al']['attribute_id']): ?>
								<!-- <?php echo $this->_tpl_vars['text']++; ?>
 -->
								<input type="text" class="sIE_No" style="width:92%;;" readonly name="<?php echo $this->_tpl_vars['al']['en_name1']; ?>
[]" id="<?php echo $this->_tpl_vars['al']['en_name1']; ?>
" value="<?php echo $this->_tpl_vars['dal']['value']; ?>
"/>
								<?php endif; ?>
								<?php endforeach; endif; unset($_from); ?>
								<?php if ($this->_tpl_vars['text'] == 1): ?>
								<input type="text" class="sIE_No" style="width:92%;;" readonly  name="<?php echo $this->_tpl_vars['al']['en_name1']; ?>
[]" id="<?php echo $this->_tpl_vars['al']['en_name1']; ?>
" value=""/>
								<?php endif; ?>
							<?php elseif ($this->_tpl_vars['al']['type'] == "多选"): ?>
								<?php $_from = $this->_tpl_vars['al']['attribute_value']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['val']):
?>
								<?php if ($this->_tpl_vars['val']['attribute_id'] == $this->_tpl_vars['al']['attribute_id']): ?><input type="checkbox" disabled value="<?php echo $this->_tpl_vars['val']['attribute_value_id']; ?>
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
[]" readonly id="<?php echo $this->_tpl_vars['al']['en_name1']; ?>
" style="width:92%;"><?php echo $this->_tpl_vars['al']['design_attribute_value']; ?>
</textarea>
								<?php endif; ?>
								<?php endforeach; endif; unset($_from); ?>
								<?php if ($this->_tpl_vars['textarea'] == 1): ?>
								<textarea name="<?php echo $this->_tpl_vars['al']['en_name']; ?>
[]" readonly id="<?php echo $this->_tpl_vars['al']['en_name1']; ?>
" style="width:92%;"></textarea>
								<?php endif; ?>
							<?php elseif ($this->_tpl_vars['al']['type'] == "单选"): ?>
								<div id="<?php echo $this->_tpl_vars['al']['en_name1']; ?>
_choice">
									<?php if (in_array ( $this->_tpl_vars['al']['attribute_id'] , $this->_tpl_vars['design_content_attribute_id1'] )): ?>
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

											<select class="add01_select01" <?php if ($this->_tpl_vars['al']['attribute_id'] != 5 && $this->_tpl_vars['al']['attribute_id'] != 6 && $this->_tpl_vars['al']['attribute_id'] != 62 && $this->_tpl_vars['al']['attribute_id'] != 63): ?>disabled<?php else: ?><?php if ($this->_tpl_vars['design_attribute_edit'] == 1): ?>disabled<?php endif; ?><?php endif; ?> id="<?php echo $this->_tpl_vars['al']['en_name1']; ?>
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
											<select class="add01_select01" <?php if ($this->_tpl_vars['al']['attribute_id'] != 5 && $this->_tpl_vars['al']['attribute_id'] != 6 && $this->_tpl_vars['al']['attribute_id'] != 62 && $this->_tpl_vars['al']['attribute_id'] != 63): ?>disabled<?php else: ?><?php if ($this->_tpl_vars['design_attribute_edit'] == 1): ?>disabled<?php endif; ?><?php endif; ?> id="<?php echo $this->_tpl_vars['al']['en_name1']; ?>
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
										</div>
									<?php endif; ?>
								</div>
							<?php else: ?>
								<div id="<?php echo $this->_tpl_vars['al']['en_name1']; ?>
_double_choice" style="float:left; width:100%;">
									<?php if (in_array ( $this->_tpl_vars['al']['attribute_id'] , $this->_tpl_vars['design_content_attribute_id1'] )): ?>
										<?php $this->assign('flag', 0); ?>
										<?php $_from = $this->_tpl_vars['design_attribute_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['dal']):
?>
										<?php if ($this->_tpl_vars['dal']['attribute_id'] == $this->_tpl_vars['al']['attribute_id']): ?>

										<!-- <?php echo $this->_tpl_vars['flag']++; ?>
 -->
										<div id="<?php echo $this->_tpl_vars['al']['en_name1']; ?>
<?php echo $this->_tpl_vars['attribute_row']; ?>
" style="float:left; margin-bottom:10px;">
											<select class="add01_select01" <?php if ($this->_tpl_vars['al']['attribute_id'] != 5 && $this->_tpl_vars['al']['attribute_id'] != 6 && $this->_tpl_vars['al']['attribute_id'] != 62 && $this->_tpl_vars['al']['attribute_id'] != 63): ?>disabled<?php else: ?><?php if ($this->_tpl_vars['design_attribute_edit'] == 1): ?>disabled<?php endif; ?><?php endif; ?> id="<?php echo $this->_tpl_vars['al']['en_name1']; ?>
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
											<select class="add01_select01" <?php if ($this->_tpl_vars['al']['attribute_id'] != 5 && $this->_tpl_vars['al']['attribute_id'] != 6 && $this->_tpl_vars['al']['attribute_id'] != 62 && $this->_tpl_vars['al']['attribute_id'] != 63): ?>disabled<?php else: ?><?php if ($this->_tpl_vars['design_attribute_edit'] == 1): ?>disabled<?php endif; ?><?php endif; ?> name="<?php echo $this->_tpl_vars['al']['en_name1']; ?>
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
										</div>
										<!--<?php echo $this->_tpl_vars['attribute_row']++; ?>
 -->
										<?php endif; ?>
										<?php endforeach; endif; unset($_from); ?>
									<?php else: ?>
										<div id="<?php echo $this->_tpl_vars['al']['en_name1']; ?>
<?php echo $this->_tpl_vars['attribute_row']; ?>
" style="float:left; width:100%;">
											<select class="add01_select01" <?php if ($this->_tpl_vars['al']['attribute_id'] != 5 && $this->_tpl_vars['al']['attribute_id'] != 6 && $this->_tpl_vars['al']['attribute_id'] != 62 && $this->_tpl_vars['al']['attribute_id'] != 63): ?>disabled<?php else: ?><?php if ($this->_tpl_vars['design_attribute_edit'] == 1): ?>disabled<?php endif; ?><?php endif; ?> id="<?php echo $this->_tpl_vars['al']['en_name1']; ?>
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
											<select class="add01_select01" <?php if ($this->_tpl_vars['al']['attribute_id'] != 5 && $this->_tpl_vars['al']['attribute_id'] != 6 && $this->_tpl_vars['al']['attribute_id'] != 62 && $this->_tpl_vars['al']['attribute_id'] != 63): ?>disabled<?php else: ?><?php if ($this->_tpl_vars['design_attribute_edit'] == 1): ?>disabled<?php endif; ?><?php endif; ?> name="<?php echo $this->_tpl_vars['al']['en_name1']; ?>
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
										</div>
									<?php endif; ?>
								</div>
							<?php endif; ?>
						</div>
					</div>

					<?php endif; ?>
					<?php endforeach; endif; unset($_from); ?>
					<div class="sIE_r" style="max-width:310px;">
						<div class="lhpl_img"> <a href="<?php echo $this->_tpl_vars['design']['upload_file']; ?>
" target="_blank"> <?php if ($this->_tpl_vars['design']['upload_cdr'] && ! strstr ( $this->_tpl_vars['design']['upload_cdr'] , '.cdr' )): ?> <img src="<?php echo $this->_tpl_vars['design']['upload_file']; ?>
"  /> <img src="<?php echo $this->_tpl_vars['design']['upload_cdr']; ?>
" /> <?php else: ?> <img src="<?php echo $this->_tpl_vars['design']['upload_file']; ?>
" /> <?php endif; ?> </a> </div>
					</div>
				</div>
				<?php endforeach; endif; unset($_from); ?>

				<style>
		        	.sIEK a{font-size:20px;}
		        </style>
				<div class="sIEK attribute" style="width:100%;border-top:1px solid #000;">
					<div class="sIE_r" style="max-width:310px; ">
                        <input type="file" <?php if ($this->_tpl_vars['view_only'] == true): ?> style="display: none" <?php endif; ?> id="picPath1" multiple="multiple" name="cloth_image[]" onchange="PreviewImage('Preview_cloth',this,310,340);" />
						<div id="cloth_upload_image" class="lhpl_img">
							<div id="Preview_cloth">
                                <?php if ($this->_tpl_vars['design_content']['cloth_cdr']): ?>
                                    <a href="<?php echo $this->_tpl_vars['design_content']['cloth_cdr']; ?>
" target="_blank" class="sIE_r" style="font-size:14px;color:blue;text-decoration: underline;">下载CDR</a>
                                <?php endif; ?>
								<?php if ($this->_tpl_vars['design_content']['cloth_ai']): ?>
                                    <a href="<?php echo $this->_tpl_vars['design_content']['cloth_ai']; ?>
" target="_blank" class="sIE_r" style="font-size:14px;">下载AI</a>
                                <?php endif; ?>
								<?php if ($this->_tpl_vars['design_content']['cloth_image']): ?>
                                    <a href="<?php echo $this->_tpl_vars['design_content']['cloth_image']; ?>
" target="_blank"> <img class='imgPreview' src='<?php echo $this->_tpl_vars['design_content']['cloth_image']; ?>
' /> </a>
                                <?php endif; ?>
                            </div>
						</div>
					</div>
					<?php $this->assign('attribute_row', 1); ?>
					<?php $_from = $this->_tpl_vars['category_module']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['cm']):
?>
					<div style="width:100%;margin-top:20px; float:left;">
						<div style="width:100%;font-size:24px;font-weight:bold;"><?php echo $this->_tpl_vars['cm']['module_name']; ?>
</div>                       
						<?php $_from = $this->_tpl_vars['lhpl_attribute_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['lal']):
?>
						<?php $_from = $this->_tpl_vars['lal']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['la']):
?>
						<?php if ($this->_tpl_vars['la']['module_id'] == $this->_tpl_vars['cm']['module_id']): ?>
						<input type="hidden"  name="attribute['<?php echo $this->_tpl_vars['la']['en_name1']; ?>
']" value="<?php echo $this->_tpl_vars['la']['attribute_id']; ?>
"/>
						<div class="sIE_l" id="<?php echo $this->_tpl_vars['la']['en_name1']; ?>
" style="width:260px;">
							<div style="float:left; margin-bottom:5px;">
								<div class="sIE_l_01_title" style="width:80px;float:left;"><?php echo $this->_tpl_vars['la']['cn_name']; ?>
</div>
								<?php if ($this->_tpl_vars['la']['type'] == "单选"): ?>
								<div id="<?php echo $this->_tpl_vars['la']['en_name1']; ?>
_choice" style="width:100%;float:left;">
									<?php if (in_array ( $this->_tpl_vars['la']['attribute_id'] , $this->_tpl_vars['design_content_attribute_id'] )): ?>
									<?php $_from = $this->_tpl_vars['design_content_attribute']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['dca']):
?>
									<?php if ($this->_tpl_vars['la']['attribute_id'] == $this->_tpl_vars['dca']['attribute_id']): ?>                     
									<?php $_from = $this->_tpl_vars['dca']['value']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['val']):
?>
									<!--<?php echo $this->_tpl_vars['key']++; ?>
  -->
									<div id="<?php echo $this->_tpl_vars['la']['en_name1']; ?>
<?php echo $this->_tpl_vars['attribute_row']; ?>
" style="float:left; margin-bottom:10px;">
										<div id="<?php echo $this->_tpl_vars['la']['en_name1']; ?>
-<?php echo $this->_tpl_vars['attribute_row']; ?>
" style="float:left;width:24px;height:24px;border:1px solid #CCC;float:left"><img src="<?php echo $this->_tpl_vars['lavi']['image']; ?>
" width="24px" height="24px"></div>
										<div style="float:left; width:150px;">
											<select <?php if ($this->_tpl_vars['design_content']['status'] == 5 && $this->_tpl_vars['la']['en_name1'] == 'supplier'): ?>onfocus="this.defaultIndex=this.selectedIndex;" onchange="this.selectedIndex=this.defaultIndex;" style="pointer-events: none;width:106px;float:left"<?php endif; ?> <?php if ($this->_tpl_vars['view_only'] == true): ?> disabled="disabled" <?php endif; ?> class="add01_select01 <?php echo $this->_tpl_vars['la']['en_name1']; ?>
 <?php echo $this->_tpl_vars['cm']['en_name']; ?>
"  onchange="show_color('<?php echo $this->_tpl_vars['la']['en_name1']; ?>
',<?php echo $this->_tpl_vars['attribute_row']; ?>
,1)" id="<?php echo $this->_tpl_vars['la']['en_name1']; ?>
_select<?php echo $this->_tpl_vars['attribute_row']; ?>
" name="<?php echo $this->_tpl_vars['la']['en_name1']; ?>
[]" style="width:106px;float:left">
												<option value=""></option>
												<?php $_from = $this->_tpl_vars['la']['lhpl_attribute_value']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['lavi']):
?>
													<?php if ($this->_tpl_vars['lavi']['attribute_id'] == $this->_tpl_vars['la']['attribute_id']): ?>
														<option value="<?php echo $this->_tpl_vars['lavi']['attribute_value_id']; ?>
" <?php if ($this->_tpl_vars['lavi']['attribute_value_id'] == $this->_tpl_vars['val']): ?>selected<?php endif; ?> img="<?php echo $this->_tpl_vars['lavi']['image']; ?>
"><?php echo $this->_tpl_vars['lavi']['cn_name']; ?>
</option>
														  <?php if ($this->_tpl_vars['lavi']['attribute_value_id'] == $this->_tpl_vars['val']): ?>
															<script>
																$("#<?php echo $this->_tpl_vars['la']['en_name1']; ?>
-<?php echo $this->_tpl_vars['attribute_row']; ?>
 img").attr("src","<?php echo $this->_tpl_vars['lavi']['image']; ?>
");
															</script>
														  <?php endif; ?>
													<?php endif; ?>
												<?php endforeach; endif; unset($_from); ?>
											</select>
											<?php if ($this->_tpl_vars['la']['en_name1'] != 'supplier'): ?>
												<?php if ($this->_tpl_vars['key'] == count($this->_tpl_vars['dca']['value'])): ?>
													<a href="javascript:void(0);" type="single" id="<?php echo $this->_tpl_vars['la']['en_name1']; ?>
_<?php echo $this->_tpl_vars['attribute_row']; ?>
" <?php if ($this->_tpl_vars['view_only'] == true): ?> style="display: none" <?php endif; ?> onclick="remove('<?php echo $this->_tpl_vars['la']['en_name1']; ?>
',<?php echo $this->_tpl_vars['attribute_row']; ?>
,<?php echo $this->_tpl_vars['la']['attribute_id']; ?>
)" style="font-size:26px; padding-left:5px;">-</a>
													<a href="javascript:void(0);" type="single" id="<?php echo $this->_tpl_vars['la']['en_name1']; ?>
_<?php echo $this->_tpl_vars['attribute_row']; ?>
_add" <?php if ($this->_tpl_vars['view_only'] == true): ?> style="display: none" <?php endif; ?> onclick="add_row('<?php echo $this->_tpl_vars['la']['en_name1']; ?>
',<?php echo $this->_tpl_vars['attribute_row']; ?>
,<?php echo $this->_tpl_vars['la']['attribute_id']; ?>
)" style="font-size:26px; padding-left:5px;">+</a>
												<?php else: ?>
													<a href="javascript:void(0);" type="single" id="<?php echo $this->_tpl_vars['la']['en_name1']; ?>
_<?php echo $this->_tpl_vars['attribute_row']; ?>
" <?php if ($this->_tpl_vars['view_only'] == true): ?> style="display: none" <?php endif; ?> onclick="remove('<?php echo $this->_tpl_vars['la']['en_name1']; ?>
',<?php echo $this->_tpl_vars['attribute_row']; ?>
,<?php echo $this->_tpl_vars['la']['attribute_id']; ?>
)" style="font-size:26px; padding-left:5px;">-</a>
												<?php endif; ?>
											<?php endif; ?>
										</div>
									</div>
									<!--<?php echo $this->_tpl_vars['attribute_row']++; ?>
 -->
									<?php endforeach; endif; unset($_from); ?>
									<?php endif; ?>                                                       
									<?php endforeach; endif; unset($_from); ?>
									<?php else: ?>
									<div id="<?php echo $this->_tpl_vars['la']['en_name1']; ?>
<?php echo $this->_tpl_vars['attribute_row']; ?>
" style="float:left; margin-bottom:10px;">
										<div id="<?php echo $this->_tpl_vars['la']['en_name1']; ?>
-<?php echo $this->_tpl_vars['attribute_row']; ?>
" style="float:left;width:24px;height:24px;border:1px solid #CCC;"></div>
										<div style="float:left; width:150px;"> <select <?php if ($this->_tpl_vars['view_only'] == true): ?> disabled="disabled" <?php endif; ?> class="add01_select01 <?php echo $this->_tpl_vars['la']['en_name1']; ?>
 <?php echo $this->_tpl_vars['cm']['en_name']; ?>
"  onchange="show_color('<?php echo $this->_tpl_vars['la']['en_name1']; ?>
',<?php echo $this->_tpl_vars['attribute_row']; ?>
,1)" id="<?php echo $this->_tpl_vars['la']['en_name1']; ?>
_select<?php echo $this->_tpl_vars['attribute_row']; ?>
" name="<?php echo $this->_tpl_vars['la']['en_name1']; ?>
[]" style="width:106px;float:left;">
											<option value=""></option>
											<?php $_from = $this->_tpl_vars['la']['lhpl_attribute_value']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['lavi']):
?> <?php if ($this->_tpl_vars['lavi']['attribute_id'] == $this->_tpl_vars['la']['attribute_id']): ?>
											<option value="<?php echo $this->_tpl_vars['lavi']['attribute_value_id']; ?>
"  img="<?php echo $this->_tpl_vars['lavi']['image']; ?>
"><?php echo $this->_tpl_vars['lavi']['cn_name']; ?>
</option>
											<?php endif; ?> <?php endforeach; endif; unset($_from); ?>
											</select>
											<?php if ($this->_tpl_vars['la']['en_name1'] != 'supplier'): ?>
											<a href="javascript:void(0);" id="<?php echo $this->_tpl_vars['la']['en_name1']; ?>
_<?php echo $this->_tpl_vars['attribute_row']; ?>
" <?php if ($this->_tpl_vars['view_only'] == true): ?> style="display: none" <?php endif; ?> onclick="add_row('<?php echo $this->_tpl_vars['la']['en_name1']; ?>
',<?php echo $this->_tpl_vars['attribute_row']; ?>
,<?php echo $this->_tpl_vars['la']['attribute_id']; ?>
)" style="font-size:26px; padding-left:5px;">+</a><?php endif; ?></div>
									</div>
									<?php endif; ?> </div>
								<?php elseif ($this->_tpl_vars['la']['type'] == "双单选"): ?>
								<div id="<?php echo $this->_tpl_vars['la']['en_name1']; ?>
_double_choice" style="width:100%;float:left;"> <?php if (in_array ( $this->_tpl_vars['la']['attribute_id'] , $this->_tpl_vars['design_content_attribute_id'] )): ?>
									<?php $this->assign('flag', 0); ?>
									<?php $_from = $this->_tpl_vars['design_content_attribute']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['dca']):
?>
									<?php if ($this->_tpl_vars['la']['attribute_id'] == $this->_tpl_vars['dca']['attribute_id']): ?>
									<!-- <?php echo $this->_tpl_vars['flag']++; ?>
 -->
									<div id="<?php echo $this->_tpl_vars['la']['en_name1']; ?>
<?php echo $this->_tpl_vars['attribute_row']; ?>
" style="float:left; margin-bottom:10px;">
										<div id="<?php echo $this->_tpl_vars['la']['en_name1']; ?>
-<?php echo $this->_tpl_vars['attribute_row']; ?>
" style="float:left;width:24px;height:24px;border:1px solid #CCC;"><img src="<?php echo $this->_tpl_vars['lavi']['image']; ?>
" width="24px" height="24px"></div>
										<div style="float:left; width:150px;">
											<?php if ($this->_tpl_vars['la']['cn_name'] != "其他辅料"): ?>
											<select <?php if ($this->_tpl_vars['view_only'] == true): ?> disabled="disabled" <?php endif; ?> class="add01_select01 <?php echo $this->_tpl_vars['la']['en_name1']; ?>
 <?php echo $this->_tpl_vars['cm']['en_name']; ?>
"  onchange="show_color('<?php echo $this->_tpl_vars['la']['en_name1']; ?>
',<?php echo $this->_tpl_vars['attribute_row']; ?>
,2)" id="<?php echo $this->_tpl_vars['la']['en_name1']; ?>
_double<?php echo $this->_tpl_vars['attribute_row']; ?>
" name="<?php echo $this->_tpl_vars['la']['en_name1']; ?>
[<?php echo $this->_tpl_vars['attribute_row']; ?>
][]" style="width:106px;">
											<?php else: ?>
											<select <?php if ($this->_tpl_vars['view_only'] == true): ?> disabled="disabled" <?php endif; ?> class="add01_select01 <?php echo $this->_tpl_vars['la']['en_name1']; ?>
 <?php echo $this->_tpl_vars['cm']['en_name']; ?>
"  name="<?php echo $this->_tpl_vars['la']['en_name1']; ?>
[<?php echo $this->_tpl_vars['attribute_row']; ?>
][]" style="width:106px;">
											<?php endif; ?>
												<option value=""></option>
												<?php $_from = $this->_tpl_vars['la']['lhpl_attribute_value']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['lavi']):
?>
													<?php if ($this->_tpl_vars['lavi']['attribute_id'] == $this->_tpl_vars['la']['attribute_id'] && $this->_tpl_vars['lavi']['group'] == 1): ?>
														<option value="<?php echo $this->_tpl_vars['lavi']['attribute_value_id']; ?>
" <?php if ($this->_tpl_vars['lavi']['attribute_value_id'] == $this->_tpl_vars['dca']['value'][0]): ?>selected<?php endif; ?> img="<?php echo $this->_tpl_vars['lavi']['image']; ?>
"><?php echo $this->_tpl_vars['lavi']['cn_name']; ?>
</option>
														<?php if ($this->_tpl_vars['lavi']['attribute_value_id'] == $this->_tpl_vars['dca']['value'][0]): ?>
															<script>$("#<?php echo $this->_tpl_vars['la']['en_name1']; ?>
-<?php echo $this->_tpl_vars['attribute_row']; ?>
 img").attr("src","<?php echo $this->_tpl_vars['lavi']['image']; ?>
");</script>
														<?php endif; ?>
													<?php endif; ?>
												<?php endforeach; endif; unset($_from); ?>
											</select>
											<?php if ($this->_tpl_vars['la']['cn_name'] != "其他辅料"): ?>
											<select <?php if ($this->_tpl_vars['view_only'] == true): ?> disabled="disabled" <?php endif; ?> class="add01_select01 <?php echo $this->_tpl_vars['la']['en_name1']; ?>
1 <?php echo $this->_tpl_vars['cm']['en_name']; ?>
"  name="<?php echo $this->_tpl_vars['la']['en_name1']; ?>
[<?php echo $this->_tpl_vars['attribute_row']; ?>
][]" style="width:106px;">
											<?php else: ?>
											<select <?php if ($this->_tpl_vars['view_only'] == true): ?> disabled="disabled" <?php endif; ?> onchange="show_color('<?php echo $this->_tpl_vars['la']['en_name1']; ?>
',<?php echo $this->_tpl_vars['attribute_row']; ?>
,2)" id="<?php echo $this->_tpl_vars['la']['en_name1']; ?>
_double<?php echo $this->_tpl_vars['attribute_row']; ?>
" class="add01_select01 <?php echo $this->_tpl_vars['la']['en_name1']; ?>
1"  name="<?php echo $this->_tpl_vars['la']['en_name1']; ?>
[<?php echo $this->_tpl_vars['attribute_row']; ?>
][]" style="width:106px;">
											<?php endif; ?>
											<option value=""></option>
											<?php $_from = $this->_tpl_vars['la']['lhpl_attribute_value']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['lavi']):
?>
												<?php if ($this->_tpl_vars['lavi']['attribute_id'] == $this->_tpl_vars['la']['attribute_id'] && $this->_tpl_vars['lavi']['group'] == 2): ?>
													<option value="<?php echo $this->_tpl_vars['lavi']['attribute_value_id']; ?>
" <?php if ($this->_tpl_vars['lavi']['attribute_value_id'] == $this->_tpl_vars['dca']['value'][1]): ?>selected<?php endif; ?> img="<?php echo $this->_tpl_vars['lavi']['image']; ?>
"><?php echo $this->_tpl_vars['lavi']['cn_name']; ?>
</option>
												<?php endif; ?>
											<?php endforeach; endif; unset($_from); ?>
											</select>
											<?php if ($this->_tpl_vars['flag'] == $this->_tpl_vars['design_content_attribute_count'][$this->_tpl_vars['dca']['attribute_id']]): ?>
												<a href="javascript:void(0);" type="double" id="<?php echo $this->_tpl_vars['la']['en_name1']; ?>
_<?php echo $this->_tpl_vars['attribute_row']; ?>
" <?php if ($this->_tpl_vars['view_only'] == true): ?> style="display: none" <?php endif; ?> onclick="remove('<?php echo $this->_tpl_vars['la']['en_name1']; ?>
',<?php echo $this->_tpl_vars['attribute_row']; ?>
,<?php echo $this->_tpl_vars['la']['attribute_id']; ?>
)" style="font-size:26px; padding-left:5px;">-</a>
												<a href="javascript:void(0);" type="double" <?php if ($this->_tpl_vars['view_only'] == true): ?> style="display: none" <?php endif; ?> id="<?php echo $this->_tpl_vars['la']['en_name1']; ?>
_<?php echo $this->_tpl_vars['attribute_row']; ?>
_add" <?php if ($this->_tpl_vars['view_only'] == true): ?> style="display: none" <?php endif; ?> onclick="add_double_row('<?php echo $this->_tpl_vars['la']['en_name1']; ?>
',<?php echo $this->_tpl_vars['attribute_row']; ?>
,<?php echo $this->_tpl_vars['la']['attribute_id']; ?>
)" style="font-size:26px; padding-left:5px;">+</a>
											<?php else: ?>
												<a href="javascript:void(0);" type="double" id="<?php echo $this->_tpl_vars['la']['en_name1']; ?>
_<?php echo $this->_tpl_vars['attribute_row']; ?>
" <?php if ($this->_tpl_vars['view_only'] == true): ?> style="display: none" <?php endif; ?> onclick="remove('<?php echo $this->_tpl_vars['la']['en_name1']; ?>
',<?php echo $this->_tpl_vars['attribute_row']; ?>
,<?php echo $this->_tpl_vars['la']['attribute_id']; ?>
)" style="font-size:26px; padding-left:5px;">-</a>
											<?php endif; ?>
										</div>
									</div>
									<!--<?php echo $this->_tpl_vars['attribute_row']++; ?>
 -->
									<?php endif; ?>                                                       
									<?php endforeach; endif; unset($_from); ?>
									<?php else: ?>
									<div id="<?php echo $this->_tpl_vars['la']['en_name1']; ?>
<?php echo $this->_tpl_vars['attribute_row']; ?>
" style="float:left; margin-bottom:10px;">
										<div id="<?php echo $this->_tpl_vars['la']['en_name1']; ?>
-<?php echo $this->_tpl_vars['attribute_row']; ?>
" style="float:left;width:24px;height:24px;border:1px solid #CCC;"></div>
										<div style="float:left; width:150px;"> <?php if ($this->_tpl_vars['la']['cn_name'] != "其他辅料"): ?> <select <?php if ($this->_tpl_vars['view_only'] == true): ?> disabled="disabled" <?php endif; ?> class="add01_select01 <?php echo $this->_tpl_vars['la']['en_name1']; ?>
 <?php echo $this->_tpl_vars['cm']['en_name']; ?>
"  onchange="show_color('<?php echo $this->_tpl_vars['la']['en_name1']; ?>
',<?php echo $this->_tpl_vars['attribute_row']; ?>
,2)" id="<?php echo $this->_tpl_vars['la']['en_name1']; ?>
_double<?php echo $this->_tpl_vars['attribute_row']; ?>
" name="<?php echo $this->_tpl_vars['la']['en_name1']; ?>
[<?php echo $this->_tpl_vars['attribute_row']; ?>
][]" style="width:106px;">
											<?php else: ?> <select <?php if ($this->_tpl_vars['view_only'] == true): ?> disabled="disabled" <?php endif; ?> class="add01_select01 <?php echo $this->_tpl_vars['cm']['en_name']; ?>
" name="<?php echo $this->_tpl_vars['la']['en_name1']; ?>
[<?php echo $this->_tpl_vars['attribute_row']; ?>
][]" style="width:106px;">
											<?php endif; ?>
											<option value=""></option>
											<?php $_from = $this->_tpl_vars['la']['lhpl_attribute_value']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['lavi']):
?> <?php if ($this->_tpl_vars['lavi']['attribute_id'] == $this->_tpl_vars['la']['attribute_id'] && $this->_tpl_vars['lavi']['group'] == 1): ?>
											<option value="<?php echo $this->_tpl_vars['lavi']['attribute_value_id']; ?>
" img="<?php echo $this->_tpl_vars['lavi']['image']; ?>
"><?php echo $this->_tpl_vars['lavi']['cn_name']; ?>
</option>
											<?php endif; ?> <?php endforeach; endif; unset($_from); ?>
											</select>
											<?php if ($this->_tpl_vars['la']['cn_name'] != "其他辅料"): ?> <select <?php if ($this->_tpl_vars['view_only'] == true): ?> disabled="disabled" <?php endif; ?> class="add01_select01 <?php echo $this->_tpl_vars['la']['en_name1']; ?>
1" name="<?php echo $this->_tpl_vars['la']['en_name1']; ?>
[<?php echo $this->_tpl_vars['attribute_row']; ?>
][]" style="width:106px;">
											<?php else: ?> <select <?php if ($this->_tpl_vars['view_only'] == true): ?> disabled="disabled" <?php endif; ?> class="add01_select01 <?php echo $this->_tpl_vars['la']['en_name1']; ?>
1 <?php echo $this->_tpl_vars['cm']['en_name']; ?>
" onchange="show_color('<?php echo $this->_tpl_vars['la']['en_name1']; ?>
',<?php echo $this->_tpl_vars['attribute_row']; ?>
,2)" id="<?php echo $this->_tpl_vars['la']['en_name1']; ?>
_double<?php echo $this->_tpl_vars['attribute_row']; ?>
" name="<?php echo $this->_tpl_vars['la']['en_name1']; ?>
[<?php echo $this->_tpl_vars['attribute_row']; ?>
][]" style="width:106px;">
											<?php endif; ?>
											<option value=""></option>
											<?php $_from = $this->_tpl_vars['la']['lhpl_attribute_value']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['lavi']):
?> <?php if ($this->_tpl_vars['lavi']['attribute_id'] == $this->_tpl_vars['la']['attribute_id'] && $this->_tpl_vars['lavi']['group'] == 2): ?>
											<option value="<?php echo $this->_tpl_vars['lavi']['attribute_value_id']; ?>
" img="<?php echo $this->_tpl_vars['lavi']['image']; ?>
"><?php echo $this->_tpl_vars['lavi']['cn_name']; ?>
</option>
											<?php endif; ?> <?php endforeach; endif; unset($_from); ?>
											</select>
											<a href="javascript:void(0);" type="double" id="<?php echo $this->_tpl_vars['la']['en_name1']; ?>
_<?php echo $this->_tpl_vars['attribute_row']; ?>
" <?php if ($this->_tpl_vars['view_only'] == true): ?> style="display: none" <?php endif; ?> onclick="add_double_row('<?php echo $this->_tpl_vars['la']['en_name1']; ?>
',<?php echo $this->_tpl_vars['attribute_row']; ?>
,<?php echo $this->_tpl_vars['la']['attribute_id']; ?>
)" style="font-size:26px; padding-left:5px;">+</a> </div>
									</div>
									<?php endif; ?> </div>
								<?php else: ?>
									<div id="<?php echo $this->_tpl_vars['la']['en_name1']; ?>
_pantone_choice" style="width:100%;float:left;">
									<?php if (in_array ( $this->_tpl_vars['la']['attribute_id'] , $this->_tpl_vars['design_content_attribute_id'] )): ?>
										<?php $_from = $this->_tpl_vars['design_content_attribute']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['dca']):
?>
											<?php if ($this->_tpl_vars['la']['attribute_id'] == $this->_tpl_vars['dca']['attribute_id']): ?>
												<?php if ($this->_tpl_vars['la']['type'] == "潘通色"): ?>
													<?php $_from = $this->_tpl_vars['dca']['value']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['val']):
?>
													<!-- <?php echo $this->_tpl_vars['key']++; ?>
 -->
													<div id="<?php echo $this->_tpl_vars['la']['en_name1']; ?>
<?php echo $this->_tpl_vars['attribute_row']; ?>
" style="float:left; margin-bottom:10px;">
														<div id="<?php echo $this->_tpl_vars['la']['en_name1']; ?>
-<?php echo $this->_tpl_vars['attribute_row']; ?>
" style="float:left;width:24px;height:24px;border:1px solid #CCC;background-color:rgb(<?php echo $this->_tpl_vars['val']['color']; ?>
);"></div>
														<input <?php if ($this->_tpl_vars['view_only'] == true): ?> readonly <?php endif; ?> type="text" name="<?php echo $this->_tpl_vars['la']['en_name1']; ?>
[]" value="<?php echo $this->_tpl_vars['val']['pantone']; ?>
" onkeyup="pantone_show('<?php echo $this->_tpl_vars['la']['en_name1']; ?>
',<?php echo $this->_tpl_vars['attribute_row']; ?>
)" class="<?php echo $this->_tpl_vars['cm']['en_name']; ?>
" id="<?php echo $this->_tpl_vars['la']['en_name1']; ?>
_pantong_color<?php echo $this->_tpl_vars['attribute_row']; ?>
" style="float:left; width:100px; height:24px; padding:0px; line-height:24px;" />
														<?php if ($this->_tpl_vars['key'] == count($this->_tpl_vars['dca']['value'])): ?>
															<a href="javascript:void(0);" type="pantone" id="<?php echo $this->_tpl_vars['la']['en_name1']; ?>
_<?php echo $this->_tpl_vars['attribute_row']; ?>
" <?php if ($this->_tpl_vars['view_only'] == true): ?> style="display: none" <?php endif; ?> onclick="remove('<?php echo $this->_tpl_vars['la']['en_name1']; ?>
',<?php echo $this->_tpl_vars['attribute_row']; ?>
,<?php echo $this->_tpl_vars['la']['attribute_id']; ?>
)" style="font-size:26px; padding-left:5px;">-</a>
															<a href="javascript:void(0);" type="pantone" id="<?php echo $this->_tpl_vars['la']['en_name1']; ?>
_<?php echo $this->_tpl_vars['attribute_row']; ?>
_add" <?php if ($this->_tpl_vars['view_only'] == true): ?> style="display: none" <?php endif; ?> onclick="add_pantone_row('<?php echo $this->_tpl_vars['la']['en_name1']; ?>
',<?php echo $this->_tpl_vars['attribute_row']; ?>
,<?php echo $this->_tpl_vars['la']['attribute_id']; ?>
)" style="font-size:26px; padding-left:5px;">+</a>
														<?php else: ?>
															<a href="javascript:void(0);" type="pantone" id="<?php echo $this->_tpl_vars['la']['en_name1']; ?>
_<?php echo $this->_tpl_vars['attribute_row']; ?>
" <?php if ($this->_tpl_vars['view_only'] == true): ?> style="display: none" <?php endif; ?> onclick="remove('<?php echo $this->_tpl_vars['la']['en_name1']; ?>
',<?php echo $this->_tpl_vars['attribute_row']; ?>
,<?php echo $this->_tpl_vars['la']['attribute_id']; ?>
)" style="font-size:26px; padding-left:5px;">-</a>
														<?php endif; ?>
														<div id="<?php echo $this->_tpl_vars['la']['en_name1']; ?>
_pantong_select_list<?php echo $this->_tpl_vars['attribute_row']; ?>
" class="pantong_select_list" style="margin-left:0px;"></div>

													</div>
													<!--<?php echo $this->_tpl_vars['attribute_row']++; ?>
 -->
													<?php endforeach; endif; unset($_from); ?>
												<?php else: ?>
													<?php $_from = $this->_tpl_vars['dca']['value']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key1'] => $this->_tpl_vars['val']):
?>
														<div id="<?php echo $this->_tpl_vars['la']['en_name1']; ?>
<?php echo $this->_tpl_vars['attribute_row']; ?>
" style="float:left; margin-bottom:10px;">
														<!-- <?php echo $this->_tpl_vars['key1']++; ?>
 -->
														<div id="<?php echo $this->_tpl_vars['la']['en_name1']; ?>
-<?php echo $this->_tpl_vars['attribute_row']; ?>
" style="float:left;width:24px;height:24px;border:1px solid #CCC;background-color:<?php echo $this->_tpl_vars['val']['color']; ?>
;"></div>
														<input <?php if ($this->_tpl_vars['view_only'] == true): ?> readonly <?php endif; ?> type="text" name="<?php echo $this->_tpl_vars['la']['en_name1']; ?>
[]" value="<?php echo $this->_tpl_vars['val']['cmyk']; ?>
" class="<?php echo $this->_tpl_vars['cm']['en_name']; ?>
" onkeyup="cmyk_show('<?php echo $this->_tpl_vars['la']['en_name1']; ?>
',<?php echo $this->_tpl_vars['attribute_row']; ?>
,this)" style="float:left; width:100px; height:24px; padding:0px; line-height:24px;" />
														<?php if ($this->_tpl_vars['key1'] == count($this->_tpl_vars['dca']['value'])): ?>
														<a href="javascript:void(0);" type="pantone" id="<?php echo $this->_tpl_vars['la']['en_name1']; ?>
_<?php echo $this->_tpl_vars['attribute_row']; ?>
" <?php if ($this->_tpl_vars['view_only'] == true): ?> style="display: none" <?php endif; ?> onclick="add_pantone_row('<?php echo $this->_tpl_vars['la']['en_name1']; ?>
',<?php echo $this->_tpl_vars['attribute_row']; ?>
,<?php echo $this->_tpl_vars['la']['attribute_id']; ?>
)" style="font-size:26px; padding-left:5px;">+</a>
														<?php else: ?>
														<a href="javascript:void(0);" type="pantone" id="<?php echo $this->_tpl_vars['la']['en_name1']; ?>
_<?php echo $this->_tpl_vars['attribute_row']; ?>
" <?php if ($this->_tpl_vars['view_only'] == true): ?> style="display: none" <?php endif; ?> onclick="remove('<?php echo $this->_tpl_vars['la']['en_name1']; ?>
',<?php echo $this->_tpl_vars['attribute_row']; ?>
,<?php echo $this->_tpl_vars['la']['attribute_id']; ?>
)" style="font-size:26px; padding-left:5px;">-</a>
														<?php endif; ?>
														<!--<?php echo $this->_tpl_vars['attribute_row']++; ?>
 -->
														</div>
													<?php endforeach; endif; unset($_from); ?>
												<?php endif; ?>
											<?php endif; ?>
										<?php endforeach; endif; unset($_from); ?>
									<?php else: ?>
										<div id="<?php echo $this->_tpl_vars['la']['en_name1']; ?>
<?php echo $this->_tpl_vars['attribute_row']; ?>
" style="float:left; margin-bottom:10px;">

											<div id="<?php echo $this->_tpl_vars['la']['en_name1']; ?>
-<?php echo $this->_tpl_vars['attribute_row']; ?>
" style="float:left;width:24px;height:24px;border:1px solid #CCC;"></div>

											<input <?php if ($this->_tpl_vars['view_only'] == true): ?> readonly <?php endif; ?> type="text" name="<?php echo $this->_tpl_vars['la']['en_name1']; ?>
[]" value="" <?php if ($this->_tpl_vars['la']['type'] == "潘通色"): ?>onkeyup="pantone_show('<?php echo $this->_tpl_vars['la']['en_name1']; ?>
',<?php echo $this->_tpl_vars['attribute_row']; ?>
)"<?php elseif ($this->_tpl_vars['la']['type'] == "文本框"): ?>onkeyup="cmyk_show('<?php echo $this->_tpl_vars['la']['en_name1']; ?>
',<?php echo $this->_tpl_vars['attribute_row']; ?>
,this)"<?php endif; ?> id="<?php echo $this->_tpl_vars['la']['en_name1']; ?>
_pantong_color<?php echo $this->_tpl_vars['attribute_row']; ?>
" class="<?php echo $this->_tpl_vars['cm']['en_name']; ?>
" style="float:left; width:100px;  height:24px; padding:0px; line-height:24px;" />

											<a href="javascript:void(0);" type="pantone" id="<?php echo $this->_tpl_vars['la']['en_name1']; ?>
_<?php echo $this->_tpl_vars['attribute_row']; ?>
" <?php if ($this->_tpl_vars['view_only'] == true): ?> style="display: none" <?php endif; ?> onclick="add_pantone_row('<?php echo $this->_tpl_vars['la']['en_name1']; ?>
',<?php echo $this->_tpl_vars['attribute_row']; ?>
,<?php echo $this->_tpl_vars['la']['attribute_id']; ?>
)" style="font-size:26px; padding-left:5px;">+</a>
											<div id="<?php echo $this->_tpl_vars['la']['en_name1']; ?>
_pantong_select_list<?php echo $this->_tpl_vars['attribute_row']; ?>
" class="pantong_select_list" style="margin-left:0px;"></div>

										</div>
										<?php endif; ?>
									</div>
								<?php endif; ?>
							</div>
						</div>
						<?php endif; ?>
						<?php endforeach; endif; unset($_from); ?>
						<?php endforeach; endif; unset($_from); ?>
						<?php if ($this->_tpl_vars['cm']['support_image'] == 1): ?>
						<div class="sIE_r" style="height:340px; width:310px; ">
							<input <?php if ($this->_tpl_vars['view_only'] == true): ?> style="display:none" <?php endif; ?> type="file" id="picPath<?php echo $this->_tpl_vars['key']; ?>
" multiple="multiple" name="image[<?php echo $this->_tpl_vars['cm']['en_name']; ?>
][]" onchange="PreviewImage('Preview_<?php echo $this->_tpl_vars['cm']['en_name']; ?>
',this,310,340);" />
							<div id="<?php echo $this->_tpl_vars['cm']['en_name']; ?>
_upload_image" style="width:310px; height:340px;margin-left: 0px;">
								<div id="Preview_<?php echo $this->_tpl_vars['cm']['en_name']; ?>
">
                                    <?php if ($this->_tpl_vars['design_content_image'] != ""): ?>
                                    <?php $_from = $this->_tpl_vars['design_content_image']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['dci']):
?>
                                        <?php if ($this->_tpl_vars['dci']['image_name'] == $this->_tpl_vars['cm']['en_name']): ?>
                                            <?php if ($this->_tpl_vars['dci']['type'] == 2): ?>
                                                <a href="<?php echo $this->_tpl_vars['dci']['link']; ?>
" target="_blank" class="sIE_r" style="font-size:14px;color:blue;text-decoration: underline;">下载CDR</a>
                                            <?php endif; ?>
                                            <?php if ($this->_tpl_vars['dci']['type'] == 3): ?>
                                                <a href="<?php echo $this->_tpl_vars['dci']['link']; ?>
" target="_blank" class="sIE_r" style="font-size:14px;">下载AI</a>
                                            <?php endif; ?>
                                            <?php if ($this->_tpl_vars['dci']['type'] == 1): ?>
                                                <a href="<?php echo $this->_tpl_vars['design_content']['logo_image']; ?>
" target="_blank" style="max-width:310px;max-height:340px;text-align:center;float:left;">
                                                    <img class='imgPreview' src='<?php echo $this->_tpl_vars['dci']['link']; ?>
' style="max-width:310px; max-height:340px;"/>
                                                </a>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                    <?php endforeach; endif; unset($_from); ?>
                                    <?php endif; ?>
								</div>
							</div>
						</div>
                       <?php endif; ?>
					<?php endforeach; endif; unset($_from); ?> </div>
				<script type="text/javascript">
                	function add_row(name,attribute_row,attribute_id){
                        if($("#"+name+"_"+attribute_row).html()=="+"){
                                $("#"+name+"_"+attribute_row).html("-");
                                $("#"+name+"_"+attribute_row).attr("onclick","remove('"+name+"',"+attribute_row+")");
                        }
                        $("#"+name+"_"+attribute_row+"_add").remove();
                        attribute_row++;
                        html='<div id="'+name+attribute_row+'" style="float:left; width:100%;">';
                        html+='<div id="'+name+'-'+attribute_row+'" style="float:left;width:24px;height:24px;border:1px solid #CCC;"></div>';
                        html+='<div style="float:left; width:150px;"><select class="add01_select01" onchange="show_color(\''+name+'\','+attribute_row+',1)" id="'+name+'_select'+attribute_row+'" name="'+name+'[]" style="width:92%;"><option value=""></option>';
                        <?php $_from = $this->_tpl_vars['lhpl_attribute_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['lal']):
?>
                        <?php $_from = $this->_tpl_vars['lal']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['la']):
?>
                        <?php if (! empty ( $this->_tpl_vars['la']['lhpl_attribute_value'] )): ?>
                             <?php $_from = $this->_tpl_vars['la']['lhpl_attribute_value']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
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
                        <?php endforeach; endif; unset($_from); ?>
                        html+='</select><a href="javascript:void(0);" type="single" id="'+name+'_'+attribute_row+'" onclick="add_row(\''+name+'\','+attribute_row+','+attribute_id+')" style="font-size:26px;  float:left; width:4%;line-height:26px;">+</a></div></div>';
                        
                        $("#"+name+"_choice").append(html);
                 	}

                 	function add_pantone_row(name,attribute_row,attribute_id){
                       if($("#"+name+"_"+attribute_row).html()=="+"){
                               $("#"+name+"_"+attribute_row).html("-");
                               $("#"+name+"_"+attribute_row).attr("onclick","remove('"+name+"',"+attribute_row+")");
                       }

                       $("#"+name+"_"+attribute_row+"_add").remove();
                       attribute_row++;
                       html='<div id="'+name+attribute_row+'" style="float:left; widht:100%;">';
                       html+='<div id="'+name+'-'+attribute_row+'" style="float:left;width:24px;height:24px;border:1px solid #CCC;float:left;"></div>';
                       if(name.indexOf("cmyk") !== -1){
						   html+='<input type="text" name="'+name+'[]" onkeyup="cmyk_show(\''+name+'\','+attribute_row+',this)" class="" id="'+name+'_pantong_color'+attribute_row+'" style="float:left; width:100px; height:24px; padding:0px; line-height:24px;" />';
					   }else{
						   html+='<input type="text" name="'+name+'[]" onkeyup="pantone_show(\''+name+'\','+attribute_row+')" class="" id="'+name+'_pantong_color'+attribute_row+'" style="float:left; width:100px; height:24px; padding:0px; line-height:24px;" />';
					   }

                       html+='<a href="javascript:void(0);" type="pantone" id="'+name+'_'+attribute_row+'" onclick="add_pantone_row(\''+name+'\','+attribute_row+','+attribute_id+')" style="font-size:26px; padding-left:5px;">+</a>';
                       html+='<div id="'+name+'_pantong_select_list'+attribute_row+'" class="pantong_select_list" style="margin-left:0px;"></div></div>';
                       $("#"+name+"_pantone_choice").append(html);
                 	}

                 	function add_double_row(name,attribute_row,attribute_id){
                       if($("#"+name+"_"+attribute_row).html()=="+"){
                               $("#"+name+"_"+attribute_row).html("-");
                               $("#"+name+"_"+attribute_row).attr("onclick","remove('"+name+"',"+attribute_row+")");
                       }
                       $("#"+name+"_"+attribute_row+"_add").remove();
                       attribute_row++;
                       html='<div id="'+name+attribute_row+'" style="float:left; widht:100%;">';
                       html+='<div id="'+name+'-'+attribute_row+'" style="float:left; width:24px;height:24px;border:1px solid #CCC;"></div>';
                       html+='<div style="float:left; width:150px;">';
					   if(name!="other"){
					   		html+='<select class="add01_select01" onchange="show_color(\''+name+'\','+attribute_row+',2)" id="'+name+'_double'+attribute_row+'" name="'+name+'['+attribute_row+'][]"  style="width:92%;">';
					   }else{
					   		html+='<select class="add01_select01"  style="width:92%;">';
					   }
					   
					   html+='<option value=""></option>';
                       <?php $_from = $this->_tpl_vars['lhpl_attribute_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['lal']):
?>
                       <?php $_from = $this->_tpl_vars['lal']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['la']):
?>
                       <?php if (! empty ( $this->_tpl_vars['la']['lhpl_attribute_value'] )): ?>
                            <?php $_from = $this->_tpl_vars['la']['lhpl_attribute_value']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
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
                       <?php endforeach; endif; unset($_from); ?>
                       html+='</select>';
					     if(name!="other"){
                       html+='<select class="add01_select01" id="add01_select01" name="'+name+'[]" style="width:92%;"><option value=""></option>';
					   }else{
					   html+='<select class="add01_select01" id="add01_select01" onchange="show_color(\''+name+'\','+attribute_row+',2)" id="'+name+'_double'+attribute_row+'" name="'+name+'[]" style="width:92%;"><option value=""></option>';
					   }
                       <?php $_from = $this->_tpl_vars['lhpl_attribute_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['lal']):
?>
                       <?php $_from = $this->_tpl_vars['lal']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['la']):
?>
                       <?php if (! empty ( $this->_tpl_vars['la']['lhpl_attribute_value'] )): ?>
                            <?php $_from = $this->_tpl_vars['la']['lhpl_attribute_value']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['lavi']):
?>
                            <?php if (! empty ( $this->_tpl_vars['lavi']['attribute_id'] )): ?>
                                    if(<?php echo $this->_tpl_vars['lavi']['attribute_id']; ?>
==attribute_id && <?php echo $this->_tpl_vars['lavi']['group']; ?>
==2){
                                         html+='<option value="<?php echo $this->_tpl_vars['lavi']['attribute_value_id']; ?>
" img="<?php echo $this->_tpl_vars['lavi']['image']; ?>
"><?php echo $this->_tpl_vars['lavi']['cn_name']; ?>
</option>';
                                    }
                            <?php endif; ?>
                            <?php endforeach; endif; unset($_from); ?>
                       <?php endif; ?>
                       <?php endforeach; endif; unset($_from); ?>
                       <?php endforeach; endif; unset($_from); ?>
                       html+='</select><a href="javascript:void(0);" type="double" id="'+name+'_'+attribute_row+'" onclick="add_double_row(\''+name+'\','+attribute_row+','+attribute_id+')" style="font-size:26px; float:left; width:4%; line-height:26px;">+</a></div></div>';

                       $("#"+name+"_double_choice").append(html);
                	}

                	function remove(name,attribute_row,attribute_id){
                		$("#"+name+attribute_row).remove();
                		//if($("#"+name).children().children().children(":last-child").children(":last-child").attr("type")=="single"){
                			attribute_row=$("#"+name).children().children(":last-child").children(":last-child").attr("id").substring(name.length);
                			if($("#"+name+"_"+attribute_row+"_add").length == 0){
                				$("#"+name+"_pantong_select_list"+attribute_row).remove();
								$("#"+name+"_"+attribute_row).remove();
								if(name.indexOf("cmyk") !== -1 || name.indexOf("pantone") !== -1){
									html='<a href="javascript:void(0);"  id="'+name+'_'+attribute_row+'_add" onclick="add_pantone_row(\''+name+'\','+attribute_row+','+attribute_id+')" style="font-size:26px;  float:left; width:4%; line-height:26px;">+</a><div id="'+name+'_pantong_select_list'+attribute_row+'"></div>';
								}else{
									html='<a href="javascript:void(0);"  id="'+name+'_'+attribute_row+'_add" onclick="add_row(\''+name+'\','+attribute_row+','+attribute_id+')" style="font-size:26px;  float:left; width:4%; line-height:26px;">+</a><div id="'+name+'_pantong_select_list'+attribute_row+'"></div>';
								}
                    			$("#"+name).children().children().children(":last-child").append(html);
                			}
                		//}                      
                	}

					function pantone_show(name,attribute_row){
						if($.trim($('#'+name+'_pantong_color'+attribute_row).val()) != ''){
							   $("#submit_form").attr("disabled","disabled");
							   $("#submit_verify").attr("disabled","disabled");
							   $('#'+name+'_pantong_select_list'+attribute_row).css("display","block");
							   var pantong = $.trim($('#'+name+'_pantong_color'+attribute_row).val());

							   $.ajax({
									url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/unfinishdesign/get_pantong_list',
									data:{'pantong':pantong,name:name,attribute_row:attribute_row},
									type:'get',//方法，还可以是"post"
									dataType:'text',//数据类型，还有其它的，详见jQuery手册
									success:function(local)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
									{
									   if(local){
											$("#"+name+"_pantong_select_list"+attribute_row).html("");
											$("#"+name+"_pantong_select_list"+attribute_row).html(local);
									   }else{
											$('#search_pop').css("display","none");
											$('#'+name+'_pantong_select_list'+attribute_row).html("");
									   }
									}
							   })
					   }else{
							$('#search_pop').css("display","none");
							$("#submit_form").removeAttr("disabled");
							$("#submit_verify").removeAttr("disabled");
							$('#'+name+'_pantong_select_list'+attribute_row).html("");
					   }
					}

					function cmyk_show(name,attribute_row,cmyk){
						// var cmky_arr=$(cmyk).val().split("/");
						// var r = 255*(1-cmky_arr[0]/100)*(1-cmky_arr[3]/100);
						// var g = 255*(1-cmky_arr[1]/100)*(1-cmky_arr[3]/100);
						// var b = 255*(1-cmky_arr[2]/100)*(1-cmky_arr[3]/100);
						// var hex=parseInt(r)+","+parseInt(g)+","+parseInt(b);
						var cmky_arr=$(cmyk).val().split("_");
						$('#'+name+'-'+attribute_row).css("background",""+cmky_arr[1]+"");
					}
                
					function show_color(name,attribute_row,type){
						if(type==1){
							$('#'+name+'-'+attribute_row).html("<img src='"+$("#"+name+"_select"+attribute_row+" option:selected").attr('img')+"' width='24px' height='24px' />");
						}else if(type==2){
							$('#'+name+'-'+attribute_row).html("<img src='"+$("#"+name+"_double"+attribute_row+" option:selected").attr('img')+"' width='24px' height='24px' />");
						}
					}

                	//获取点击潘通材料
                	function change_pantong(color,name,attribute_row,hex){
                        $('#'+name+'_pantong_color'+attribute_row).val(color);
                        $('#'+name+'-'+attribute_row).css("background","rgb("+hex+")");
                        $('#'+name+'_pantong_select_list'+attribute_row).html("");
                        $('#'+name+'_pantong_select_list'+attribute_row).css("display","none");
                        $("#submit_form").removeAttr("disabled");
                        $("#submit_verify").removeAttr("disabled");
                	}
        		</script>
				<div id="unfinishdesign_error" style="float:left; width:500px; margin-top:10px; color:#F00; display:none; font-size:12px;"></div>
			</div>
		</div>
		</div>
		<?php if ($this->_tpl_vars['check_status'] == 1 || $this->_tpl_vars['design_check_status'] == 1): ?>
		<div style="float:left; margin-right:20px; width:200px;"> <font style="float:left; width:100%; font-weight:bold; line-height:26px;">设计审核备注</font> <textarea name="design_note" style="float:left; width:100%;" onfocus="if(this.value=='设计审核')this.value='';" <?php if ($this->_tpl_vars['is_unfinish'] == true): ?>disabled="disabled"<?php endif; ?> ><?php if ($this->_tpl_vars['design_content']['design_note']): ?><?php echo $this->_tpl_vars['design_content']['design_note']; ?>
<?php endif; ?>
			</textarea>
		</div>
		<?php endif; ?>
		<?php if ($this->_tpl_vars['complete_status'] == 1): ?>
		<div style="float:left; margin-right:10px; width:200px;"> <font style="float:left; width:100%; font-weight:bold; line-height:26px;">业务审核备注</font>
			<textarea name="design_content_verify_note" style="float:left; width:100%;" onfocus="if(this.value=='业务审核')this.value='';"><?php if ($this->_tpl_vars['design_content']['design_content_verify_note']): ?><?php echo $this->_tpl_vars['design_content']['design_content_verify_note']; ?>
<?php endif; ?></textarea>
		</div>
		<?php endif; ?>
		</div>
		<script>
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

	function checkPic(upload){
		if(upload.files.length>3){
			alert("最多上传三个文件");
			$("#picPath").val('');
			$("#picPath1").val('');
			$(".imgPreview").remove();
	        return false;
		}
	    var picPath=upload.files;
	    var name='';
		for(var i=0;i<picPath.length;i++){
//			if(name==''){
//				name=picPath[i].name.substring(0,picPath[i].name.indexOf("."));
//			}else{
//				if(name!=picPath[i].name.substring(0,picPath[i].name.indexOf("."))){
//					alert("文件名不一致！");
//					$("#picPath").val('');
//					$("#picPath1").val('');
//					$(".imgPreview").remove();
//			        return false;
//				}
//			}
			
			var type=picPath[i].name.substring(picPath[i].name.lastIndexOf(".")+1,picPath[i].name.length).toLowerCase();
		    if(type!=="jpg" && type!=="cdr" && type!=="ai" && type!=="pdf" && type!=="eps"){
		        alert("请上传正确的图片格式");
		        return false;
		    }
		}
		return true;
	}

	function PreviewImage(divImage,upload,width,height){
	    if(checkPic(upload)){
	        try{	        	
	            var length=upload.files.length; 
	            var imgPath;
	            $("#"+divImage).html('');
	            for(var i=0;i<length;i++){
	            	var imgPath=getObjectURL(upload.files[i]);
	            	var type=upload.files[i].name.substring(upload.files[i].name.lastIndexOf(".")+1,upload.files[i].name.length).toLowerCase();
					if(type=="jpg"){
						if(upload.files[i].size>500000){
							alert("图片超出范围上传失败！");
							$(upload).attr("id").val('');
							$(".imgPreview").remove();
							return false;
						}
						$("#"+divImage).append("<a href='"+imgPath+"' target='_blank'><img class='imgPreview' src='"+imgPath+"' style='max-width:"+width+"px; max-height:"+height+"px;' /></a>");
					}else if(type=="cdr"){
						if(upload.files[i].size>50000000){
							alert("CDR超出范围上传失败！");
							$(upload).attr("id").val('');
							$(".imgPreview").remove();
							return false;
						}
					}
	            }	            
	        }catch(e){
	            alert("无法预览图片");
	        }
	    }
	}
  </script>
	</form>
</div>
<div class="formBar">
	<ul>
		<?php if (( $this->_tpl_vars['user_hidden']['group_id'] == 53 || $this->_tpl_vars['user_hidden']['group_id'] == 5 ) && $this->_tpl_vars['user_hidden']['user_name'] == $this->_tpl_vars['design']['design_user_name'] && $this->_tpl_vars['design']['status'] < 4): ?>
			<li>
				<div class="buttonActive">
					<div class="buttonContent">
						<button type="button" id="design_undistributed_callback" name="submit_verify" value="6">返回未分配</button>
					</div>
				</div>
			</li>
		<?php else: ?>
			<?php if ($this->_tpl_vars['edit_no'] == 1): ?>
				<li>
					<div class="buttonActive">
						<div class="buttonContent">
							<button class="close">取消</button>
						</div>
					</div>
				</li>
			<?php else: ?>
				<style>
					button[disabled] {
						opacity: 0.6;
						cursor: not-allowed;
					}
				</style>
				<?php if ($this->_tpl_vars['all_design'] != 1): ?>
					<?php if ($this->_tpl_vars['finish_status'] != 1): ?>
						<li>
							<div class="buttonActive">
								<div class="buttonContent">
									<button type="button" id="submit_form<?php echo $this->_tpl_vars['design_content']['id']; ?>
">确认</button>
								</div>
							</div>
						</li>
						<li>
							<div class="buttonActive">
								<div class="buttonContent">
									<button type="button" id="design_content_discard">废弃</button>
								</div>
							</div>
						</li>
						<li>
							<div class="button" style="margin-right:5px;">
								<div class="buttonContent"> <?php if ($this->_tpl_vars['is_unfinish'] == true): ?>
									<button id="submit_verify<?php echo $this->_tpl_vars['design_content']['id']; ?>
" value="2" name="submit_verify" type="button"  >提交审核</button>
									<?php else: ?>
									<button id="submit_verify<?php echo $this->_tpl_vars['design_content']['id']; ?>
" value="2" name="submit_verify" type="button"  >通过审核</button>
									<?php endif; ?> </div>
							</div>
						</li>
					<?php endif; ?>
				<?php endif; ?>
				<?php if ($this->_tpl_vars['all_design'] != 1): ?>
					<?php if ($this->_tpl_vars['check_status'] == 1): ?>
						<?php if ($this->_tpl_vars['finish_status'] == 1): ?>
						<li>
							<div class="buttonActive">
								<div class="buttonContent">
									<button type="button" id="design_attribute">确认</button>
								</div>
							</div>
						</li>
						<?php endif; ?>
						<li>
							<div class="button" style="margin-right:5px; float:right;">
								<div class="buttonContent">
									<button id="design_content_callback" value="3" name="design_content_callback" type="button"  >返回未完成</button>
								</div>
							</div>
						<li>
					<?php endif; ?>
				<?php endif; ?>
				<li>
					<div class="buttonActive">
						<div class="buttonContent">
							<button class="close">取消</button>
						</div>
					</div>
				</li>
			<?php endif; ?>
		<?php endif; ?>
	</ul>
</div>
</div>
<!-- {literal} -->
<script type="text/javascript">
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
	//图片上传
	$("#de_jpg_upload_submit").click(function (){

		var formData = new FormData($('#de_upload_jpg')[0]);

        $.ajax({
			type: 'post',
			url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/unfinishdesign/two_img_upload',          
			data: formData,
			cache: false,
			processData:false,  
            contentType: false,  
			dataType:'json', 
		}).success(function (data){  
				var num=1;
				$.each(data,function(i,n){
				   if(i=='jpg'){console.log(n);
				   		$('#image_no_2').empty();
				   		$('#image_no_2').append('<a href="'+n+'"  target="_blank"><img src="'+n+'" width="360" height="360" /></a>');
				   }else if(i=='quotecol'){
				   		if( n!== null && n.indexOf("_") != -1){
				   			//$('#add_materials_textarea').val(n.replace(/_/g,"\n"));
						}else{
							num=0;
						}
				   }else if(i=='width'){
				   		if( n!== null && n>0){
							if(n<25){
								//$('#inch_w_content').val(n.toFixed(2));
								//$('#cm_w_content').val((n*2.54).toFixed(2));
							}else{
								//$('#inch_w_content').val(n.toFixed(2)+'X');
								//$('#cm_w_content').val('NaN');
							}			
						}
				   }else if(i=='height'){
				   		if( n!== null && n>0){
							if(n<20){
								//$('#inch_h_content').val(n.toFixed(2));
								//$('#cm_h_content').val((n*2.54).toFixed(2));
							}else{
								//$('#inch_h_content').val(n.toFixed(2)+'X');
								//$('#cm_h_content').val('NaN');
							}
						}
				   }else if(i=='message'){
				   		$('#image_no_2').empty();
				   		$('#image_no_2').append(n);
						num=0;
				   }
				 });
				 if(num!=0){
					//$('#insert_materials_textarea').trigger("click");
				}
				
		}).error(function(){ 
				
		});
	});
	
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

        $("#design_content_callback").click(function () {
        	$("#submit_value").val('3');
        	$('#info_form<?php echo $this->_tpl_vars['design_content']['id']; ?>
').submit();
        });

		$("#design_attribute").click(function () {
			$("#submit_value").val('7');
			$('#info_form<?php echo $this->_tpl_vars['design_content']['id']; ?>
').submit();
		});

		$("#design_undistributed_callback").click(function () {
			$("#submit_value").val('6');
			$('#info_form<?php echo $this->_tpl_vars['design_content']['id']; ?>
').submit();
		});
        
        $("#design_content_discard").click(function () {
        	$("#submit_value").val('1');
        	$('#info_form<?php echo $this->_tpl_vars['design_content']['id']; ?>
').submit();
        });
        
        $("#design_content_callback_version").click(function () {
        	$("#submit_value").val('31');
        	$('#info_form<?php echo $this->_tpl_vars['design_content']['id']; ?>
').submit();
        });

        $("#submit_form<?php echo $this->_tpl_vars['design_content']['id']; ?>
,#submit_verify<?php echo $this->_tpl_vars['design_content']['id']; ?>
").click(function () {
			if($(".supplier").val()){
				var fabrics=0;
				var accessories=0;
				var double=0;
				$(".fabrics").each(function (){
					if($(this).val()){
						fabrics++;
					}
				});
				$(".accessories").each(function (){
					if($(this).val()){
						if($(this).attr("id")) {
							if ($(this).attr("id").indexOf("double") != -1) {
								var classname = $(this).attr("class").split(" ");
								if ($("." + classname[1] + "1").val() == "") {
									double=1;
								}
							}
						}
						accessories++;
					}
				});

				if(double==1 || (fabrics<2 && accessories<2)){
					alert("请选择服装面料或服装辅料！");
					return false;
				}
			}

        	if($(this).attr("id")=="submit_verify<?php echo $this->_tpl_vars['design_content']['id']; ?>
"){
        		$("#submit_value").val('2');
        		if($("#check_status").val()==1){
        			$('#info_form<?php echo $this->_tpl_vars['design_content']['id']; ?>
').submit();
        			return true;
        		}		
        	}else{
        		$("#submit_value").val('1');
        	}

			var style_top=0;
			var style_top1=0;
			var style_bottom=0;
			var style_bottom1=0;
			var style_dress=0;
			var style_dress1=0;
			var style_set=0;

			$(".style_top").each(function (){
				if($(this).val()){
					style_top=1;
				}
			});

			$(".style_top1").each(function (){
				if($(this).val()){
					style_top1=1;
				}
			});

			$(".style_bottom").each(function (){
				if($(this).val()){
					style_bottom=1;
				}
			});

			$(".style_bottom1").each(function (){
				if($(this).val()){
					style_bottom1=1;
				}
			});

			$(".style_dress").each(function (){
				if($(this).val()){
					style_bottom=1;
				}
			});

			$(".style_dress1").each(function (){
				if($(this).val()){
					style_bottom1=1;
				}
			});

			$(".style_set").each(function (){
				if($(this).val()){
					style_set=1;
				}
			});

			if(<?php echo $this->_tpl_vars['design']['module_id']; ?>
==1){
				if(style_top==0 || style_top1==0){
					if(style_bottom==0 || style_bottom1==0){
						if(style_dress==0 || style_dress1==0){
							if(style_set==0){
								alert("请填写服装款式部位！");
								return false;
							}
						}
					}
				}
			}

			if($(".amount_of_rhinestones").val()=='' || $(".logo_technology")==''){
				alert("请填写钻用量 ！");
				return false;
			}

			if($(".logo_technology")==''){
				alert("请填写Logo工艺 ！");
				return false;
			}
        	
        	var formData = new FormData($('#info_form<?php echo $this->_tpl_vars['design_content']['id']; ?>
')[0]);

            $.ajax({
    			type: 'post',
    			url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/unfinishdesign/act_design_content_edit',          
    			data: formData,
    			cache: false,
    			processData:false,  
                contentType: false,  
    			dataType:'json', 
    		}).success(function (data){ 
    			navTabAjaxDone(data);				
    		});

                $("#design_type").attr("disabled",false);
                //$("#info_form").submit();
                var s=$("#color_date").val();
                var a= /^\+?[1-9][0-9]*$/;
                var b=a.test(s);
            if($("#design_NO").val()==""){
                        $("#unfinishdesign_error").css("display","block");
                        $("#unfinishdesign_error").html("请填写分版数量数量！");
                }
                else {
                        var n=$("#design_NO").val();
                    	c=a.test(n);
                        if(c==false){
                                $("#unfinishdesign_error").css("display","block");
                                $("#unfinishdesign_error").html("分版数量应为正整数！");
                        }
/*                       else if($("#color_date").val()==""){
                                $("#unfinishdesign_error").css("display","block");
                                $("#unfinishdesign_error").html("请填写颜色数量！");
                        }
                        else if(b==false && s!="0"){
                                $("#unfinishdesign_error").css("display","block");
                                $("#unfinishdesign_error").html("颜色数量应为正数！");
                        }
                        else if($("#add01_select01").val() == ""){
                                $("#unfinishdesign_error").css("display","block");
                                $("#unfinishdesign_error").html("请填选择出图周期！");
                        }
                        else if($("#design_name").val() == ""){
                                $("#unfinishdesign_error").css("display","block");
                                $("#unfinishdesign_error").html("请填写设计名称！");
                        }
                        else if($("#quotation_categroy").val() == ""){
                                $("#unfinishdesign_error").css("display","block");
                                $("#unfinishdesign_error").html("请选择设计类别！");
                        }else if(($("#unf_customer_code").val()== "")&&($("#quotation_categroy").val() != "11")){
                                        $("#unfinishdesign_error").css("display","block");
                                        $("#unfinishdesign_error").html("客户代码不能为空！");
                        }
                        else if($("#unf_customer_name").val()== ""){
                                $("#unfinishdesign_error").css("display","block");
                                $("#unfinishdesign_error").html("客户名不能为空！");
                        }
        else if(!$(".uf_tabClass01").is(":visible")){
                        $("#unfinishdesign_error").css("display","block");
                        $("#unfinishdesign_error").html("请添加材料项！");
                }
                else if($("#inch_w").val() == "" || $("#inch_h").val() == "" || $("#cm_w").val() == "" || $("#cm_h").val() == ""){
                        $("#unfinishdesign_error").css("display","block");
                        $("#unfinishdesign_error").html("请填写尺寸！");
                }
                else if($("#material_select").val() == ""){
                        $("#unfinishdesign_error").css("display","block");
                        $("#unfinishdesign_error").html("请选择材料！");
                }
                else if($("#material_info_c_color").val() == ""){
                        $("#unfinishdesign_error").css("display","block");
                        $("#unfinishdesign_error").html("请选择颜色！");
                }
                else if($("#material_c_quantity").val() == ""){
                        $("#unfinishdesign_error").css("display","block");
                        $("#unfinishdesign_error").html("请填写数量！");
                }*/
/*              else{
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

                                                }else{
                                                        $("#unfinishdesign_error").css("display","block");
                                                        $("#unfinishdesign_error").html("请上传图片,且名称不包含空格！");

                                                }
                                        }

                            });
                } */
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