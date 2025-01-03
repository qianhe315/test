<?php /* Smarty version 2.6.22, created on 2024-10-23 13:09:32
         compiled from procure_outgoing/edit.html */ ?>
<script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/cstown_Sys.js" type="text/javascript"></script>
<link href="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/css/cstown_sys.css" rel="stylesheet" type="text/css" media="screen"/>
<script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/procure_outgoing/edit.js" type="text/javascript"></script>
<script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/common/jquery-editable-select.js" type="text/javascript"></script>
<link href="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/common/jquery-editable-select.css" rel="stylesheet" type="text/css"/>


<div class="pageContent">
	<div class="stkInfEnter" style="width:98%" layoutH="100" id="ttbjd_ysj">
	    <div class="sIEK" style="width:680px;">
		<form method="post" action="<?php echo $this->_tpl_vars['act']; ?>
" id="procure_outgoing_submit_form" enctype="multipart/form-data" onsubmit="return validateCallback(this, navTabAjaxDone)">   
	      <div class="sIE_l_01" style="width:230px;">
	        <div class="sIE_l_01_title">业务员:</div>
	        <input type="text" class="sIE_No" style="width:100px;" value="<?php echo $this->_tpl_vars['procure_outgoing']['saleman_name']; ?>
" readonly />
	      </div>
	      <div class="sIE_l_01" style="width:230px;">
	        <div class="sIE_l_01_title">时间:</div>
	        <input type="text" class="sIE_No" style="width:100px;" id="q_time" value="<?php echo $this->_tpl_vars['procure_outgoing']['q_time']; ?>
"  readonly  />
	      </div>
	      <div class="sIE_l_01" style="width:200px;">
	        <div class="sIE_l_01_title">报价名称:</div>
	        <input type="text" class="sIE_No" readonly style="width:100px;" id="design_name_add" value="<?php echo $this->_tpl_vars['procure_outgoing']['design_name']; ?>
"  />
	      </div>
	      <div class="sIE_l_01" style="width:230px;">
	        <div class="sIE_l_01_title" style="width:80px;">客户代码:</div>
	        <input type="text" class="sIE_No" readonly style="width:100px;" id="outgoing_inquiry_sheet_customer_code1_add" value="<?php echo $this->_tpl_vars['procure_outgoing']['customer_code']; ?>
" />
	      </div>
	      
	      <div class="sIE_l_01" style="width:230px;">
	        <div class="sIE_l_01_title">客户名:</div>
	        <input type="text" class="sIE_No" style="width:100px;" id="outgoing_inquiry_sheet_customer_name1_add" value="<?php echo $this->_tpl_vars['procure_outgoing']['customer_name']; ?>
"   readonly />
	      </div>
	      <div class="sIE_l_01" style="width:200px;">
	        <div class="sIE_l_01_title" style="width:80px;">交货期:</div>
         	<input type="text" class="sIE_No" style="width:100px;" value="<?php echo $this->_tpl_vars['procure_outgoing']['deliver_goods']; ?>
" readonly />
	      </div>
	      <div class="sIE_l_01" style="width:230px;">
	        <div class="sIE_l_01_title" style="line-height:26px;">报关品类:</div>
	        <input type="text" class="sIE_No" style="width:100px;" value="<?php echo $this->_tpl_vars['procure_outgoing']['order_category']; ?>
" readonly />
	      </div>
	      
	      <div class="sIE_l_01" style="width:230px;">
	        <div class="sIE_l_01_title">做货类型:</div>
	        <input type="text" class="sIE_No" style="width:100px;" value="<?php echo $this->_tpl_vars['procure_outgoing']['goods_type']; ?>
" readonly />
	      </div>
          
          <div class="sIE_l_01" style="width:200px;">
          	<div class="sIE_l_01_title">尺码类型:</div>
              <select class="picture_select01" id="size_type" name="size_type" disabled="disabled" style="height:26px; width:106px;">
                  <option <?php if ($this->_tpl_vars['procure_outgoing']['size_type'] == ''): ?>selected="selected"<?php endif; ?> value="">请选择</option>
                  <option <?php if ($this->_tpl_vars['procure_outgoing']['size_type'] == '1'): ?>selected="selected"<?php endif; ?> value="1">工厂尺码</option>
                  <option <?php if ($this->_tpl_vars['procure_outgoing']['size_type'] == '2'): ?>selected="selected"<?php endif; ?> value="2">客户尺码</option>
              </select>
          </div>
	      
	      <input type="hidden" class="sIE_No" id="choose_design_code1_add" style="width:100px;" readonly="readonly" value="<?php if ($this->_tpl_vars['procure_outgoing']['quotation_code']): ?><?php echo $this->_tpl_vars['procure_outgoing']['quotation_code']; ?>
<?php else: ?><?php echo $this->_tpl_vars['design_code']; ?>
<?php endif; ?>" />
	      
	      <div style="float:left; width:200px;">
	        <textarea name="remark" style="width:180px; margin-bottom:10px; margin-top:0px; height:52px;" onfocus="if(this.value=='备注')this.value='';" class="add01_textarea textInput"><?php if ($this->_tpl_vars['procure_outgoing']['remark']): ?><?php echo $this->_tpl_vars['procure_outgoing']['remark']; ?>
<?php else: ?>备注<?php endif; ?></textarea>
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
              <table cellspacing="0" class="sIE_l_02Tab" style='margin-top:30px;'>
                  <tr>
                      <th>尺码</th>
                      <th>颜色</th>
					  <th>数量</th>
                  </tr>
                  <?php $_from = $this->_tpl_vars['quotation_size_chart']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['qsc']):
?>
                  <tr>
                      <td><?php echo $this->_tpl_vars['qsc']['type_size']; ?>
</td>
                      <td><?php echo $this->_tpl_vars['qsc']['color']; ?>
</td>
					  <td><?php echo $this->_tpl_vars['qsc']['amount']; ?>
</td>
                  </tr>
                  <?php endforeach; endif; unset($_from); ?>
                  <tr>
                      <td colspan="3" align="center">总计: <?php echo $this->_tpl_vars['procure_outgoing']['number']; ?>
</td>
                  </tr>
              </table>
          <?php endif; ?>
          </div>

          <!-- 尺码表兼容历史数据 -->
	      <?php if (! $this->_tpl_vars['quotation_size_chart'] && $this->_tpl_vars['procure_outgoing']['inch_w']): ?>
	      <div class="sIE_l_02" style="width:95%;">
	        <table cellspacing="0" class="sIE_l_02Tab" id="oic_table1_add">
	          <tr>
	            <th>尺码</th>
	            <th>数量</th>
	            <?php if ($this->_tpl_vars['procure_outgoing']['type'] == 2): ?>
	            <th>颜色</th>
	            <?php endif; ?>
	            <th>备注</th>
	          </tr>
	            <tr>
	            	<?php if ($this->_tpl_vars['procure_outgoing']['inch_w']): ?>
	                <td><textarea readonly style="width:200px;text-align: center;"><?php echo $this->_tpl_vars['procure_outgoing']['inch_w']; ?>
inch_w * <?php echo $this->_tpl_vars['procure_outgoing']['inch_h']; ?>
inch_h &#10;  <?php echo $this->_tpl_vars['procure_outgoing']['cm_w']; ?>
cm_w * <?php echo $this->_tpl_vars['procure_outgoing']['cm_h']; ?>
cm_h</textarea></td>
	                <?php else: ?>
					<td><input readonly type="text" value="" style="width:100px;text-align: center;"></td>
					<?php endif; ?>
	                <td class="oqs_number1"><input readonly  type="text"  value="<?php echo $this->_tpl_vars['procure_outgoing']['pcs']; ?>
" onkeyup="change_number(<?php echo $this->_tpl_vars['qsc']['id']; ?>
);this.value=this.value.replace(/\D/g,'');" style="width:100px;text-align: center;"></td>
	                <?php if ($this->_tpl_vars['procure_outgoing']['type'] == 2): ?>
	                <td><input readonly  type="text" value="<?php echo $this->_tpl_vars['procure_outgoing']['color']; ?>
" style="width:100px;text-align: center;"></td>
	                <?php endif; ?>
	                <td><textarea readonly style="text-align: center;"><?php echo $this->_tpl_vars['procure_outgoing']['size_note']; ?>
</textarea></td>
	            </tr>
	        </table>
	      </div>

	      <?php endif; ?>	
	      
	      <div class="sIE_l_01" style="width:230px; margin-top:10px;display: none;">
	        <div class="sIE_l_01_title" style="width:80px;">总数量:</div>
	        <input readonly id="pcs"  type="text" class="sIE_No" style="width:100px;" value="<?php echo $this->_tpl_vars['procure_outgoing']['number']; ?>
" />
	      </div>
		  

  	  	<table cellspacing="0" style="width: 95%" class="sIE_l_02Tab">
		    <?php if ($this->_tpl_vars['design']['design_name'] == '3D Effect Patch No'): ?>
		    <tr>
		        <th>
		            Item
		        </th>
		        <th>
		            Original Color/Part
		        </th>
		        <th>
		            Color
		        </th>
		        <th>
		            Design Modification
		        </th>
		    </tr>
		    <?php $_from = $this->_tpl_vars['design_info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['di']):
?>
		    <tr>
		        <td>
		            <?php echo $this->_tpl_vars['di']['material']; ?>

		        </td>
		        <td>
		            -
		        </td>
		        <td>
		            -
		        </td>
		        <td rowspan="5">
		            <?php echo $this->_tpl_vars['di']['message']; ?>

		        </td>
		    </tr>
		    <tr>
		        <td>
		            3D
		        </td>
		        <td>
		            <?php echo $this->_tpl_vars['di']['d3_message']; ?>

		        </td>
		        <td>
		            -
		        </td>
		    </tr>
		    <tr>
		        <td>
		            <?php echo $this->_tpl_vars['di']['material3']; ?>

		        </td>
		        <td>
		            -
		        </td>
		        <td>
		            -
		        </td>
		    </tr>
		    <tr>
		        <td>
		            Proportion Back
		        </td>
		        <td>
		            <?php if ($this->_tpl_vars['di']['proportion_back'] == 0): ?>不去除<?php else: ?>去除<?php endif; ?>
		        </td>
		        <td>
		            -
		        </td>
		    </tr>
		    <tr>
		        <td>
		            <?php echo $this->_tpl_vars['di']['model_type']; ?>

		        </td>
		        <td>
		            <table>
		                <?php if ($this->_tpl_vars['di']['original_color']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['original_color']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['original_color2']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['original_color2']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['original_color3']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['original_color3']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['original_color4']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['original_color4']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['original_color5']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['original_color5']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['original_color6']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['original_color6']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['original_color7']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['original_color7']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['original_color8']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['original_color8']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['original_color9']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['original_color9']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['original_color10']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['original_color10']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['original_color11']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['original_color11']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['original_color12']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['original_color12']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['original_color13']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['original_color13']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['original_color14']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['original_color14']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['original_color15']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['original_color15']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['original_color16']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['original_color16']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['original_color17']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['original_color17']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['original_color18']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['original_color18']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
		            </table>
		        </td>
		        <td>
		            <table>
		                <?php if ($this->_tpl_vars['di']['color']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['color']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['color2']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['color2']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color2']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['color3']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['color3']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color3']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['color4']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['color4']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color4']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['color5']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['color5']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color5']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['color6']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['color6']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color6']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['color7']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['color7']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color7']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['color8']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['color8']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color8']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['color9']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['color9']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color9']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['color10']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['color10']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color10']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['color11']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['color11']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color11']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['color12']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['color12']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color12']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['color13']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['color13']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color13']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['color14']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['color14']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color14']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['color15']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['color15']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color15']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['color16']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['color16']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color16']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['color17']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['color17']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color17']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['color18']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['color18']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color18']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
		            </table>
		        </td>
		    </tr>
		    <tr>
		        <td>
		            Metallic Thread
		        </td>
		        <td>
		            <?php echo $this->_tpl_vars['di']['metallic_thread_part']; ?>

		        </td>
		        <td>
		            <?php echo $this->_tpl_vars['di']['material2']; ?>

		        </td>
		    </tr>
		    <?php endforeach; endif; unset($_from); ?>
		          	 <?php endif; ?>
		          	<?php if ($this->_tpl_vars['design']['design_name'] == '3D Effect Patch'): ?>
		    <tr>
		        <th>
		            Item
		        </th>
		        <th>
		            Original Color/Part
		        </th>
		        <th>
		            Color
		        </th>
		        <th>
		            Design Modification
		        </th>
		    </tr>
		    <?php $_from = $this->_tpl_vars['design_info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['di']):
?>
		    <tr>
		        <td>
		            <?php echo $this->_tpl_vars['di']['material']; ?>

		        </td>
		        <td>
		            -
		        </td>
		        <td>
		            -
		        </td>
		        <td rowspan="5">
		            <?php echo $this->_tpl_vars['di']['message']; ?>

		        </td>
		    </tr>
		    <tr>
		        <td>
		            3D
		        </td>
		        <td>
		            <?php echo $this->_tpl_vars['di']['d3_message']; ?>

		        </td>
		        <td>
		            -
		        </td>
		    </tr>
		    <tr>
		        <td>
		            <?php echo $this->_tpl_vars['di']['material3']; ?>

		        </td>
		        <td>
		            -
		        </td>
		        <td>
		            -
		        </td>
		    </tr>
		    <tr>
		        <td>
		            Proportion Back
		        </td>
		        <td>
		            <?php if ($this->_tpl_vars['di']['proportion_back'] == 0): ?>不去除<?php else: ?>去除<?php endif; ?>
		        </td>
		        <td>
		            -
		        </td>
		    </tr>
		    <tr>
		        <td>
		            <?php echo $this->_tpl_vars['di']['model_type']; ?>

		        </td>
		        <td>
		            <table>
		                <?php if ($this->_tpl_vars['di']['original_color']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['original_color']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['original_color2']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['original_color2']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['original_color3']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['original_color3']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['original_color4']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['original_color4']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['original_color5']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['original_color5']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['original_color6']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['original_color6']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['original_color7']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['original_color7']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['original_color8']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['original_color8']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['original_color9']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['original_color9']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['original_color10']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['original_color10']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['original_color11']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['original_color11']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['original_color12']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['original_color12']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['original_color13']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['original_color13']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['original_color14']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['original_color14']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['original_color15']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['original_color15']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['original_color16']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['original_color16']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['original_color17']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['original_color17']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['original_color18']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['original_color18']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
		            </table>
		        </td>
		        <td>
		            <table>
		                <?php if ($this->_tpl_vars['di']['color']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['color']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['color2']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['color2']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color2']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['color3']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['color3']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color3']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['color4']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['color4']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color4']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['color5']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['color5']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color5']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['color6']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['color6']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color6']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['color7']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['color7']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color7']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['color8']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['color8']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color8']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['color9']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['color9']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color9']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['color10']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['color10']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color10']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['color11']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['color11']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color11']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['color12']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['color12']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color12']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['color13']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['color13']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color13']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['color14']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['color14']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color14']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['color15']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['color15']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color15']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['color16']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['color16']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color16']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['color17']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['color17']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color17']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['color18']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['color18']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color18']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
		            </table>
		        </td>
		    </tr>
		    <tr>
		        <td>
		            Metallic Thread
		        </td>
		        <td>
		            <?php echo $this->_tpl_vars['di']['metallic_thread_part']; ?>

		        </td>
		        <td>
		            <?php echo $this->_tpl_vars['di']['material2']; ?>

		        </td>
		    </tr>
		    <?php endforeach; endif; unset($_from); ?>
		          	 <?php endif; ?>
		          	<?php if ($this->_tpl_vars['design']['design_name'] == 'Chenille Patch'): ?>
		    <tr>
		        <th>
		            Item
		        </th>
		        <th>
		            Original Color/Part
		        </th>
		        <th>
		            Color
		        </th>
		        <th>
		            Design Modification
		        </th>
		    </tr>
		    <?php $_from = $this->_tpl_vars['design_info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['di']):
?>
		    <tr>
		        <td>
		            <?php echo $this->_tpl_vars['di']['material']; ?>

		        </td>
		        <td>
		            -
		        </td>
		        <td>
		            -
		        </td>
		        <td rowspan="5">
		            <?php echo $this->_tpl_vars['di']['message']; ?>

		        </td>
		    </tr>
		    <tr>
		        <td>
		            <?php echo $this->_tpl_vars['di']['material3']; ?>

		        </td>
		        <td>
		            -
		        </td>
		        <td>
		            -
		        </td>
		    </tr>
		    <tr>
		        <td>
		            Proportion Back
		        </td>
		        <td>
		            <?php if ($this->_tpl_vars['di']['proportion_back'] == 0): ?>不去除<?php else: ?>去除<?php endif; ?>
		        </td>
		        <td>
		            -
		        </td>
		    </tr>
		    <tr>
		        <td>
		            <?php echo $this->_tpl_vars['di']['model_type']; ?>

		        </td>
		        <td>
		            <table>
		                <?php if ($this->_tpl_vars['di']['original_color']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['original_color']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['original_color2']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['original_color2']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['original_color3']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['original_color3']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['original_color4']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['original_color4']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['original_color5']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['original_color5']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
		            </table>
		        </td>
		        <td>
		            <table>
		                <?php if ($this->_tpl_vars['di']['color']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['color']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['color2']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['color2']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color2']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['color3']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['color3']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color3']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['color4']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['color4']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color4']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['color5']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['color5']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color5']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
		            </table>
		        </td>
		    </tr>
		    <tr>
		        <td>
		            Embroidery Thread
		        </td>
		        <td>
		            <table>
		                <?php if ($this->_tpl_vars['di']['original_color6']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['original_color6']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['original_color7']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['original_color7']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['original_color8']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['original_color8']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['original_color9']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['original_color9']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['original_color10']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['original_color10']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
		            </table>
		        </td>
		        <td>
		            <table>
		                <?php if ($this->_tpl_vars['di']['color6']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['color6']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color6']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['color7']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['color7']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color7']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['color8']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['color8']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color8']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['color9']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['color9']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color9']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['color10']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['color10']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color10']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
		            </table>
		        </td>
		    </tr>
		    <?php endforeach; endif; unset($_from); ?>
		          	 <?php endif; ?>
		          	<?php if ($this->_tpl_vars['design']['design_name'] == 'Chenille Patch No'): ?>
		    <tr>
		        <th>
		            Item
		        </th>
		        <th>
		            Original Color/Part
		        </th>
		        <th>
		            Color
		        </th>
		        <th>
		            Design Modification
		        </th>
		    </tr>
		    <?php $_from = $this->_tpl_vars['design_info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['di']):
?>
		    <tr>
		        <td>
		            <?php echo $this->_tpl_vars['di']['material']; ?>

		        </td>
		        <td>
		            -
		        </td>
		        <td>
		            -
		        </td>
		        <td rowspan="5">
		            <?php echo $this->_tpl_vars['di']['message']; ?>

		        </td>
		    </tr>
		    <tr>
		        <td>
		            <?php echo $this->_tpl_vars['di']['material3']; ?>

		        </td>
		        <td>
		            -
		        </td>
		        <td>
		            -
		        </td>
		    </tr>
		    <tr>
		        <td>
		            Proportion Back
		        </td>
		        <td>
		            <?php if ($this->_tpl_vars['di']['proportion_back'] == 0): ?>不去除<?php else: ?>去除<?php endif; ?>
		        </td>
		        <td>
		            -
		        </td>
		    </tr>
		    <tr>
		        <td>
		            <?php echo $this->_tpl_vars['di']['model_type']; ?>

		        </td>
		        <td>
		            <table>
		                <?php if ($this->_tpl_vars['di']['original_color']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['original_color']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['original_color2']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['original_color2']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['original_color3']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['original_color3']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['original_color4']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['original_color4']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['original_color5']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['original_color5']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
		            </table>
		        </td>
		        <td>
		            <table>
		                <?php if ($this->_tpl_vars['di']['color']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['color']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['color2']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['color2']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color2']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['color3']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['color3']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color3']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['color4']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['color4']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color4']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['color5']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['color5']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color5']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
		            </table>
		        </td>
		    </tr>
		    <tr>
		        <td>
		            Embroidery Thread
		        </td>
		        <td>
		            <table>
		                <?php if ($this->_tpl_vars['di']['original_color']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['original_color']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['original_color2']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['original_color2']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['original_color3']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['original_color3']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['original_color4']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['original_color4']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['original_color5']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['original_color5']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['original_color6']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['original_color6']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['original_color7']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['original_color7']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['original_color8']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['original_color8']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['original_color9']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['original_color9']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['original_color10']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['original_color10']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['original_color11']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['original_color11']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['original_color12']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['original_color12']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['original_color13']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['original_color13']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['original_color14']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['original_color14']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['original_color15']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['original_color15']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['original_color16']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['original_color16']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['original_color17']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['original_color17']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['original_color18']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['original_color18']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
		            </table>
		        </td>
		        <td>
		            <table>
		                <?php if ($this->_tpl_vars['di']['color6']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['color6']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color6']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['color7']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['color7']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color7']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['color8']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['color8']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color8']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['color9']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['color9']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color9']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['color10']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['color10']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color10']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
		            </table>
		        </td>
		    </tr>
		    <?php endforeach; endif; unset($_from); ?>
		          	 <?php endif; ?>
		          	 <?php if ($this->_tpl_vars['design']['design_name'] == 'Embroidery Patch'): ?>
		    <tr>
		        <th>
		            Item
		        </th>
		        <th>
		            Original Color/Part
		        </th>
		        <th>
		            Color
		        </th>
		        <th>
		            Design Modification
		        </th>
		    </tr>
		    <?php $_from = $this->_tpl_vars['design_info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['di']):
?>
		    <tr>
		        <td>
		            <?php echo $this->_tpl_vars['di']['material']; ?>

		        </td>
		        <td>
		            -
		        </td>
		        <td>
		            -
		        </td>
		        <td rowspan="5">
		            <?php echo $this->_tpl_vars['di']['message']; ?>

		        </td>
		    </tr>
		    <tr>
		        <td>
		            <?php echo $this->_tpl_vars['di']['material3']; ?>

		        </td>
		        <td>
		            -
		        </td>
		        <td>
		            -
		        </td>
		    </tr>
		    <tr>
		        <td>
		            Proportion Back
		        </td>
		        <td>
		            <?php if ($this->_tpl_vars['di']['proportion_back'] == 0): ?>不去除<?php else: ?>去除<?php endif; ?>
		        </td>
		        <td>
		            -
		        </td>
		    </tr>
		    <tr>
		        <td>
		            <?php echo $this->_tpl_vars['di']['model_type']; ?>

		        </td>
		        <td>
		            <table>
		                <?php if ($this->_tpl_vars['di']['original_color']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['original_color']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['original_color2']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['original_color2']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['original_color3']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['original_color3']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['original_color4']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['original_color4']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['original_color5']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['original_color5']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['original_color6']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['original_color6']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['original_color7']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['original_color7']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['original_color8']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['original_color8']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['original_color9']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['original_color9']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['original_color10']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['original_color10']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['original_color11']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['original_color11']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['original_color12']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['original_color12']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['original_color13']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['original_color13']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['original_color14']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['original_color14']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['original_color15']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['original_color15']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['original_color16']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['original_color16']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['original_color17']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['original_color17']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['original_color18']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['original_color18']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
		            </table>
		        </td>
		        <td>
		            <table>
		                <?php if ($this->_tpl_vars['di']['color']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['color']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['color2']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['color2']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color2']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['color3']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['color3']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color3']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['color4']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['color4']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color4']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['color5']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['color5']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color5']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['color6']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['color6']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color6']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['color7']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['color7']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color7']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['color8']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['color8']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color8']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['color9']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['color9']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color9']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['color10']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['color10']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color10']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['color11']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['color11']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color11']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['color12']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['color12']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color12']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['color13']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['color13']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color13']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['color14']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['color14']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color14']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['color15']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['color15']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color15']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['color16']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['color16']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color16']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['color17']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['color17']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color17']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['color18']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['color18']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color18']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
		            </table>
		        </td>
		    </tr>
		    <tr>
		        <td>
		            Metallic Thread
		        </td>
		        <td>
		            <?php echo $this->_tpl_vars['di']['metallic_thread_part']; ?>

		        </td>
		        <td>
		            <?php echo $this->_tpl_vars['di']['material2']; ?>

		        </td>
		    </tr>
		    <?php endforeach; endif; unset($_from); ?>
		          	 <?php endif; ?>
		          	  <?php if ($this->_tpl_vars['design']['design_name'] == 'Embroidery Patch No'): ?>
		    <tr>
		        <th>
		            Item
		        </th>
		        <th>
		            Original Color/Part
		        </th>
		        <th>
		            Color
		        </th>
		        <th>
		            Design Modification
		        </th>
		    </tr>
		    <?php $_from = $this->_tpl_vars['design_info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['di']):
?>
		    <tr>
		        <td>
		            <?php echo $this->_tpl_vars['di']['material']; ?>

		        </td>
		        <td>
		            -
		        </td>
		        <td>
		            -
		        </td>
		        <td rowspan="5">
		            <?php echo $this->_tpl_vars['di']['message']; ?>

		        </td>
		    </tr>
		    <tr>
		        <td>
		            <?php echo $this->_tpl_vars['di']['material3']; ?>

		        </td>
		        <td>
		            -
		        </td>
		        <td>
		            -
		        </td>
		    </tr>
		    <tr>
		        <td>
		            Proportion Back
		        </td>
		        <td>
		            <?php if ($this->_tpl_vars['di']['proportion_back'] == 0): ?>不去除<?php else: ?>去除<?php endif; ?>
		        </td>
		        <td>
		            -
		        </td>
		    </tr>
		    <tr>
		        <td>
		            <?php echo $this->_tpl_vars['di']['model_type']; ?>

		        </td>
		        <td>
		            <table>
		                <?php if ($this->_tpl_vars['di']['original_color']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['original_color']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['original_color2']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['original_color2']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['original_color3']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['original_color3']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['original_color4']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['original_color4']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['original_color5']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['original_color5']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['original_color6']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['original_color6']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['original_color7']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['original_color7']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['original_color8']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['original_color8']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['original_color9']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['original_color9']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['original_color10']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['original_color10']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['original_color11']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['original_color11']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['original_color12']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['original_color12']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['original_color13']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['original_color13']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['original_color14']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['original_color14']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['original_color15']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['original_color15']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['original_color16']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['original_color16']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['original_color17']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['original_color17']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['original_color18']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['original_color18']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
		            </table>
		        </td>
		        <td>
		            <table>
		                <?php if ($this->_tpl_vars['di']['color']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['color']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['color2']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['color2']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color2']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['color3']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['color3']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color3']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['color4']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['color4']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color4']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['color5']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['color5']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color5']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['color6']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['color6']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color6']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['color7']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['color7']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color7']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['color8']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['color8']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color8']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['color9']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['color9']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color9']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['color10']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['color10']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color10']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['color11']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['color11']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color11']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['color12']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['color12']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color12']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['color13']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['color13']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color13']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['color14']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['color14']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color14']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['color15']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['color15']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color15']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['color16']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['color16']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color16']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['color17']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['color17']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color17']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
				                <?php if ($this->_tpl_vars['di']['color18']): ?>
		                <tr>
		                    <td>
		                        <?php echo $this->_tpl_vars['di']['color18']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color18']; ?>

		                    </td>
		                </tr>
		                <?php endif; ?>
		            </table>
		        </td>
		    </tr>
		    <tr>
		        <td>
		            Metallic Thread
		        </td>
		        <td>
		            <?php echo $this->_tpl_vars['di']['metallic_thread_part']; ?>

		        </td>
		        <td>
		            <?php echo $this->_tpl_vars['di']['material2']; ?>

		        </td>
		    </tr>
		    <?php endforeach; endif; unset($_from); ?>
		          	 <?php endif; ?>
		</table>
		<input type="hidden" name="id" value="<?php echo $this->_tpl_vars['procure_outgoing']['id']; ?>
"/>         
	      <div class="sIE_l_02" style="width:95%;">
	          <hr style="border:1px dashed lightgray;margin-bottom: 50px;">
              <input type="hidden" id="buwei_arr"  value="<?php echo $this->_tpl_vars['buwei_arr']; ?>
" />
              <?php if ($this->_tpl_vars['user_hidden']['group_id'] != '74'): ?>
                  <div class="sIE_l_01" style="width:100%;">
                    <div class="sIE_l_01_title" style="width:80px;">供应商:</div>
                    <select name="supplier_code" id="supplier_code" style="width: 82px; height: 22px;line-height: 20px;" onchange="unit_price_change();">
                        <?php if ($this->_tpl_vars['procure_outgoing']['supplier_code'] == '' || $this->_tpl_vars['procure_outgoing']['supplier_code'] == null): ?>
                        <option value="" selected></option>
                        <?php endif; ?>
                        <?php $_from = $this->_tpl_vars['supplier_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['value']):
?>
                        <?php if (( $this->_tpl_vars['user_hidden']['group_id'] == 53 || $this->_tpl_vars['user_hidden']['group_id'] == 68 ) && $this->_tpl_vars['procure_outgoing']['supplier_code'] != ''): ?>
                        <option value="<?php echo $this->_tpl_vars['procure_outgoing']['supplier_code']; ?>
" selected><?php echo $this->_tpl_vars['procure_outgoing']['supplier_code']; ?>
</option>
                        <?php endif; ?>
                        <option value="<?php echo $this->_tpl_vars['value']['supplier_code']; ?>
" <?php if ($this->_tpl_vars['procure_outgoing']['supplier_code'] == $this->_tpl_vars['value']['supplier_code']): ?> selected <?php endif; ?>><?php echo $this->_tpl_vars['value']['supplier_code']; ?>
</option>
                        <?php endforeach; endif; unset($_from); ?>
                    </select>
                  </div>
              <?php endif; ?>
              
		      <div class="sIE_l_01" style="width:100%;">
		        <div class="sIE_l_01_title" style="width:80px;">版费成本:</div>
		        <input id="version_costs" name="version_costs" onkeyup="this.value= this.value.match(/\d+(\.\d{0,2})?/) ? this.value.match(/\d+(\.\d{0,2})?/)[0] : '';unit_price_change();"  type="text" class="sIE_No" style="width:100px;" value="<?php echo $this->_tpl_vars['procure_outgoing']['version_costs']; ?>
" />
                <input type="hidden" id="buwei_number" value="<?php echo $this->_tpl_vars['buwei_number']; ?>
" />
		      </div>
               
               <table cellspacing="0" class="sIE_l_02Tab" <?php if ($this->_tpl_vars['procure_outgoing']['supplier_code'] == ''): ?>style="display:none;"<?php endif; ?>>
                    <tr>
                    	<td></td>
						<td style="font-size: 16px;">数量</td>
                        <td style="font-size: 16px;">采购单价</td>
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
						<?php if ($this->_tpl_vars['separate_quotes_count'] > 1 && $this->_tpl_vars['value']['cn_name'] != "整套"): ?>
                        <td class="unit_price_k check_required">
						<?php elseif ($this->_tpl_vars['separate_quotes_count'] == 1): ?>
						<td class="unit_price_k check_required">
						<?php else: ?>
						<td class="check_required">
						<?php endif; ?>
                        <input id="unit_price_<?php echo $this->_tpl_vars['value']['id']; ?>
"  name="unit_price[<?php echo $this->_tpl_vars['value']['id']; ?>
]" onkeyup="this.value= this.value.match(/\d+(\.\d{0,2})?/) ? this.value.match(/\d+(\.\d{0,2})?/)[0] : '';unit_price_change();" type="text" class="sIE_No" style="width:100px;" value="<?php echo $this->_tpl_vars['value']['unit_price']; ?>
" /><span style="line-height: 26px">元</span>
                        <input type="hidden" id="amount_<?php echo $this->_tpl_vars['value']['id']; ?>
" value="<?php echo $this->_tpl_vars['value']['amount']; ?>
" />
                        </td>
                        <td class="price_k">
                        <?php if ($this->_tpl_vars['user_hidden']['group_id'] != '74'): ?>
                        <input name="unite_quote[<?php echo $this->_tpl_vars['value']['id']; ?>
]" id="unite_quote_<?php echo $this->_tpl_vars['value']['id']; ?>
" type="text" class="sIE_No" readonly style="width:100px;" value="<?php echo $this->_tpl_vars['value']['unite_quote']; ?>
" /><span style="line-height: 26px">元</span>
                        <?php endif; ?>
                        </td>
                        <td class="price_k">
                        <?php if ($this->_tpl_vars['user_hidden']['group_id'] != '74'): ?>
                        <input name="factory_out_cost[<?php echo $this->_tpl_vars['value']['id']; ?>
]" id="factory_out_cost_<?php echo $this->_tpl_vars['value']['id']; ?>
" type="text" class="sIE_No" readonly style="width:100px;" value="<?php echo $this->_tpl_vars['value']['factory_out_cost']; ?>
" /><span style="line-height: 26px">元</span>
                        <?php endif; ?>
                        </td>
                    </tr>
                    <?php endforeach; endif; unset($_from); ?>
                    
                    
                    
              </table>

              
	      </div>
 		</form>       
   
	</div>
	<div class="sIE_r" style="height:260px; width:260px; margin-top:0px;">
		<div class="sIE_l_01_title" style="width:80px;">报价编号:</div>
		<input type="text" readonly="" value="<?php echo $this->_tpl_vars['procure_outgoing']['quotation_code']; ?>
">
	    <div class="sIE_r_img" id="design_image_add" style="width:260px; height:260px; margin-left:0px; margin-top:10px; margin-bottom:10px;"><?php if ($this->_tpl_vars['procure_outgoing']['image']): ?><img style="width:260px; height:260px;" src="<?php echo $this->_tpl_vars['procure_outgoing']['image']; ?>
" height="260px" width="260px" /><?php endif; ?></div>
	    <!-- 设计师只在有设计时显示：0线上订单；1有设计 -->
	    <?php if ($this->_tpl_vars['procure_outgoing']['type'] == 0 || $this->_tpl_vars['procure_outgoing']['type'] == 1): ?>
	    <div class="sIE_l_01" style=" float:none; width:200px; margin:0 auto;">
	      <div class="sIE_l_01_title"  style="width:60px; margin-left:10px;">设计师:</div>
	      <input type="text" class="sIE_No" readonly="readonly" id="design_user_add" value="<?php echo $this->_tpl_vars['procure_outgoing']['design_user_name']; ?>
"  style="width:76px;"/>
	    </div>
	    <?php endif; ?>
  	</div>
  </div>

</div>
<div class="formBar">
  <ul>

    <li>
      <div class="buttonActive">
        <div class="buttonContent">
          <button type="button" id="procure_outgoing_save" value="1" name="procure_outgoing_save"  >确定</button>
        </div>
      </div>
    </li>

    <li>
      <div class="buttonActive">
        <div class="buttonContent">
          <button type="button" class="close">取消</button>
        </div>
      </div>
    </li>
  </ul>
</div>      

<script type="text/javascript">
var _root = '<?php echo $this->_tpl_vars['__ROOT__']; ?>
';

</script>