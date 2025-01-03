<?php /* Smarty version 2.6.22, created on 2024-10-24 13:47:19
         compiled from finishdesign/design.html */ ?>
<script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/cstown_Sys.js" type="text/javascript"></script>
<link href="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/css/cstown_sys.css" rel="stylesheet" type="text/css" media="screen"/>
<div class="pageContent">
  <div class="stkInfEnter" layoutH="100" style="width:97%; margin-left:20px;">
    <div class="sIE_title">设计订单</div>
    <div class="sIEK">
      <div style=" float:left; width:65%;">
        <div class="sIE_l" style="width:740px;">
          <div class="sIE_l" style="width:210px;">
            
            <div style="float:left; margin-bottom:5px;">
              <div class="sIE_l_01_title">业务员:</div>
              <input type="text" class="sIE_No" style="width:100px;" id="stock_code" readonly="readonly" value="<?php echo $this->_tpl_vars['design']['salesman_user_name']; ?>
"/>
            </div>
            <div style="float:left; margin-bottom:5px;">
              <div class="sIE_l_01_title">时间:</div>
              <input type="text" class="sIE_No" style="width:100px;" id="stock_code" readonly="readonly" value="<?php echo $this->_tpl_vars['design']['design_date']; ?>
"/>
            </div>
            <div style="float:left; margin-bottom:5px;">
              <div class="sIE_l_01_title">出图周期:</div>
              <input type="text" class="sIE_No" style="width:100px;" id="stock_code" readonly="readonly" value="<?php echo $this->_tpl_vars['design']['make_pic_time_name']; ?>
"/>
            </div>
            
             <div style="float:left; margin-bottom:5px;">
            <div class="sIE_l_01_title">客户代码:</div>
            <input type="text" name="customer_code"  style="width:100px;" value="<?php echo $this->_tpl_vars['design']['customer_code']; ?>
" class="sIE_No"  readonly="readonly"  />
          </div>
          <div style="float:left; margin-bottom:5px;">
            <div class="sIE_l_01_title">客户名:</div>
            <input type="text" name="customer_name" style="width:100px;"  value="<?php echo $this->_tpl_vars['design']['customer_name']; ?>
" class="sIE_No"  readonly="readonly" />
          </div>
          <div style="float:left; margin-bottom:5px;">
            <div class="sIE_l_01_title">公司:</div>
            <input type="text" name="customer_company" style="width:100px;" value="<?php echo $this->_tpl_vars['design']['customer_company']; ?>
" class="sIE_No"  readonly="readonly" />
          </div>
           
           
           <div style="float:left; margin-bottom:5px;">
            <div class="sIE_l_01_title">分版数量:</div>
            <input type="text" class="sIE_No" name="design_NO" style="width:100px;" readonly="readonly "id="design_NO" value="<?php echo $this->_tpl_vars['design']['design_NO']; ?>
" style="margin-left:-10px;" />
          </div>
           <div style="float:left; margin-bottom:5px;">
            <div class="sIE_l_01_title">颜色数量:</div>
            <input type="text" class="sIE_No" name="color_date" style="width:100px;" readonly="readonly "id="color_date" value="<?php echo $this->_tpl_vars['design']['color_date']; ?>
"  style="margin-left:-10px;"/>
          </div> 
            
            
          </div>
          <div class="sIE_l" style="width:260px;">
          
          	<div style="float:left; margin-bottom:5px;">
              <div class="sIE_l_01_title">设计名称:</div>
              <input type="text" class="sIE_No" style="width:100px;"  id="stock_code" readonly="readonly" value="<?php echo $this->_tpl_vars['design']['design_name']; ?>
"/>
            </div>
            <div style="float:left; margin-bottom:5px;">
              <div class="sIE_l_01_title">设计类别:</div>
              <input type="text" class="sIE_No" style="width:100px;"  id="stock_code" readonly="readonly" value="<?php echo $this->_tpl_vars['design']['quotation_name']; ?>
"/>
            </div>
            <div style="float:left; margin-bottom:5px;">
              <div class="sIE_l_01_title">设计编号:</div>
              <input type="text" class="sIE_No" style="width:100px;" id="stock_code" readonly="readonly" value="<?php echo $this->_tpl_vars['design']['design_code']; ?>
"/>
            </div>
          <?php if ($this->_tpl_vars['design']['design_category'] != 13): ?>
            <div class="sIE_l_01" style="width:210px; margin-left:30px;">
              <div class="sIE_l_01_title" style="line-height:22px; width:50px; height:100px;">尺寸:</div>
              <div class="sIE_r01" style="width:130px;">
                <div class="sIE_r01_div">
                  <input type="text"  class="sIE_No" id="inch_w" readonly="readonly" value="<?php echo $this->_tpl_vars['design']['size_w_inch']; ?>
"/>
                  <div class="sIE_r01_div_r">inch W</div>
                </div>
                <div class="sIE_r01_div">
                  <input type="text"  class="sIE_No" id="inch_h" readonly="readonly" value="<?php echo $this->_tpl_vars['design']['size_h_inch']; ?>
"/>
                  <div class="sIE_r01_div_r">inch H</div>
                </div>
                <div class="sIE_r01_div">
                  <input type="text"  class="sIE_No" id="cm_w" readonly="readonly" value="<?php echo $this->_tpl_vars['design']['size_w_cm']; ?>
" />
                  <div class="sIE_r01_div_r">cm W</div>
                </div>
                <div class="sIE_r01_div">
                  <input type="text"  class="sIE_No" id="cm_h" readonly="readonly" value="<?php echo $this->_tpl_vars['design']['size_h_cm']; ?>
" />
                  <div class="sIE_r01_div_r">cm H</div>
                </div>
              </div>
            </div>
          <?php endif; ?>
          
          </div>
          <textarea class="add01_textarea" readonly="readonly" onfocus="if(this.value=='销售备注')this.value='';" style="width:220px; height:140px; margin-left:10px;"><?php if ($this->_tpl_vars['design']['note']): ?><?php echo $this->_tpl_vars['design']['note']; ?>
<?php else: ?>销售备注<?php endif; ?></textarea>
        </div>
        <?php if ($this->_tpl_vars['design']['design_category'] != 13): ?>

        <div class="sIE_l_02" style="margin-bottom:20px; width:95%;">
      <table cellspacing="0" class="sIE_l_02Tab">

       <?php if ($this->_tpl_vars['design_info'] == ''): ?>
        <tr>
          <th>材料</th>
          <th>颜色</th>
          <th>尺寸</th>
          <th>数量</th>
        </tr>
        <?php if ($this->_tpl_vars['materials_select'] != ''): ?>
        <?php $_from = $this->_tpl_vars['materials_select']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ms']):
?>
        <tr>
          <td><?php echo $this->_tpl_vars['ms']['material_name']; ?>
</td>
          <td><?php echo $this->_tpl_vars['ms']['material_color']; ?>
</td>
          <td><?php echo $this->_tpl_vars['ms']['material_size']; ?>
</td>
          <td><?php echo $this->_tpl_vars['ms']['material_quantity']; ?>
</td>
        </tr>
        <?php endforeach; endif; unset($_from); ?>
        <?php endif; ?>
        <?php else: ?>
           <?php if ($this->_tpl_vars['design']['design_name'] == 'Words Vinyl Heat Transfer Customization' || $this->_tpl_vars['design']['design_name'] == 'Letters Vinyl Heat Transfer' || $this->_tpl_vars['design']['design_name'] == 'Jersey Vinyl Heat Transfer Customization'): ?>
          
           <tr>
           <th>Text</th>
           <th>Font</th>
           <th>Size</th>
           <th>面积</th>
           <th>Outline</th>
           <th>Material</th>
           <th>Font Color</th>
           <th>Outline Color</th>
           </tr>
          	 <?php $_from = $this->_tpl_vars['design_info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['di']):
?>
          	 <tr>
           <td><?php echo $this->_tpl_vars['di']['text']; ?>
</td>
           <td><?php echo $this->_tpl_vars['di']['font']; ?>
</td>
           <td><?php echo $this->_tpl_vars['di']['size']; ?>
</td>
           <td><?php echo $this->_tpl_vars['di']['area']; ?>
</td>
           <td><?php echo $this->_tpl_vars['di']['outline']; ?>
</td>
           <td><?php echo $this->_tpl_vars['di']['material']; ?>
 <?php echo $this->_tpl_vars['di']['model_type']; ?>
</td>
           <td><?php echo $this->_tpl_vars['di']['color']; ?>
</td>
           <td><?php echo $this->_tpl_vars['di']['outline_color']; ?>
</td>
           
           </tr>
          	 <?php endforeach; endif; unset($_from); ?>
           <?php endif; ?>
           <?php if ($this->_tpl_vars['design']['design_name'] == 'Words Hotfix Heat Transfer Customization' || $this->_tpl_vars['design']['design_name'] == 'Letters Hot-Fix Heat Transfer'): ?>
           <tr>
           <th>Text</th>
           <th>Font</th>
           <th>Size</th>
           <th>面积</th>
           <th>Arrangement</th>
           <td>Material</td>
           <th>Model Size</th>
           <th>Color</th>
			<th>Number</th>
           <th>钻区间</th>
           </tr>
          	 <?php $_from = $this->_tpl_vars['design_info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['di']):
?>
          	 <tr>
           <td><?php echo $this->_tpl_vars['di']['text']; ?>
</td>
           <td><?php echo $this->_tpl_vars['di']['font']; ?>
</td>
           <td><?php echo $this->_tpl_vars['di']['size']; ?>
</td>
           <td><?php echo $this->_tpl_vars['di']['area']; ?>
</td>
           <td><?php echo $this->_tpl_vars['di']['arrangement']; ?>
</td>
           <td><?php echo $this->_tpl_vars['di']['material']; ?>
 <?php echo $this->_tpl_vars['di']['model_type']; ?>
</td>
           <td><?php echo $this->_tpl_vars['di']['model_size']; ?>
</td>
           <td><?php echo $this->_tpl_vars['di']['color']; ?>
</td>
           <td><?php echo $this->_tpl_vars['di']['stone_number']; ?>
</td>
           <td><?php echo $this->_tpl_vars['di']['stone_number']-$this->_tpl_vars['di']['stone_number']*0.125; ?>
~<?php echo $this->_tpl_vars['di']['stone_number']+$this->_tpl_vars['di']['stone_number']*0.125; ?>
</td>
           </tr>
          	 <?php endforeach; endif; unset($_from); ?>
           <?php endif; ?> 
           <?php if ($this->_tpl_vars['design']['design_name'] == 'Custom Vinyl Heat Transfer' || $this->_tpl_vars['design']['design_name'] == 'Custom Printable Heat Transfer' || $this->_tpl_vars['design']['design_name'] == 'Artwork Vinyl Heat Transfer Customization' || $this->_tpl_vars['design']['design_name'] == 'Artwork Printable Heat Transfer Customization'): ?>
           <tr>

           <th>Size</th>
           <th>尺寸类别</th>
           <th>面积</th>
           <th>Material</th>
           <?php if ($this->_tpl_vars['design']['design_name'] == 'Artwork Printable Heat Transfer Customization' || $this->_tpl_vars['design']['design_name'] == 'Custom Printable Heat Transfer'): ?>
           <th>Full Color</th>
           <?php endif; ?> 
           <th>Original Color/Part</th>
           <th>Color</th>
           <th>Design Modification</th>
           <th>Proportion Back</th>
           </tr>
          	 <?php $_from = $this->_tpl_vars['design_info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['di']):
?>
          	 <tr>
           <td><?php echo $this->_tpl_vars['di']['size']; ?>
</td>
           <td>
           	<?php if ($this->_tpl_vars['di']['size_type'] == 1): ?>
           		范围尺寸
           	<?php elseif ($this->_tpl_vars['di']['size_type'] == 2): ?>
           		<?php if (strstr ( $this->_tpl_vars['di']['size'] , 'x' )): ?>
           			固定尺寸
           		<?php else: ?>
           			等比尺寸
           		<?php endif; ?>
           	<?php endif; ?>
           </td>
           <td><?php echo $this->_tpl_vars['di']['area']; ?>
</td>
           <td><?php echo $this->_tpl_vars['di']['material']; ?>
 <?php echo $this->_tpl_vars['di']['model_type']; ?>
</td>
            <?php if ($this->_tpl_vars['design']['design_name'] == 'Artwork Printable Heat Transfer Customization' || $this->_tpl_vars['design']['design_name'] == 'Custom Printable Heat Transfer'): ?>
           <td><?php if ($this->_tpl_vars['di']['full_color'] == 0): ?>1<?php endif; ?></td>
            <?php endif; ?> 
           <td>
           	 <table>
           	    <?php if ($this->_tpl_vars['di']['original_color']): ?>
           	 	<tr>
           	 		<td><?php echo $this->_tpl_vars['di']['original_color']; ?>
</td>          	 	
           	 	</tr>
           	 	<?php endif; ?>
           	 	<?php if ($this->_tpl_vars['di']['original_color2']): ?>
           	 	<tr>
           	 		<td><?php echo $this->_tpl_vars['di']['original_color2']; ?>
</td>          	 	
           	 	</tr>
           	 	<?php endif; ?>
           	 	<?php if ($this->_tpl_vars['di']['original_color3']): ?>
           	 	<tr>
           	 		<td><?php echo $this->_tpl_vars['di']['original_color3']; ?>
</td>          	 	
           	 	</tr>
           	 	<?php endif; ?>
           	 	<?php if ($this->_tpl_vars['di']['original_color4']): ?>
           	 	<tr>
           	 		<td><?php echo $this->_tpl_vars['di']['original_color4']; ?>
</td>          	 	
           	 	</tr>
           	 	<?php endif; ?>
           	 	<?php if ($this->_tpl_vars['di']['original_color5']): ?>
           	 	<tr>
           	 		<td><?php echo $this->_tpl_vars['di']['original_color5']; ?>
</td>          	 	
           	 	</tr>
           	 	<?php endif; ?>
           	 	<?php if ($this->_tpl_vars['di']['original_color6']): ?>
           	 	<tr>
           	 		<td><?php echo $this->_tpl_vars['di']['original_color6']; ?>
</td>          	 	
           	 	</tr>
           	 	<?php endif; ?>
           	 	<?php if ($this->_tpl_vars['di']['original_color7']): ?>
           	 	<tr>
           	 		<td><?php echo $this->_tpl_vars['di']['original_color7']; ?>
</td>          	 	
           	 	</tr>
           	 	<?php endif; ?>
           	 	<?php if ($this->_tpl_vars['di']['original_color8']): ?>
           	 	<tr>
           	 		<td><?php echo $this->_tpl_vars['di']['original_color8']; ?>
</td>          	 	
           	 	</tr>
           	 	<?php endif; ?>
           	 	<?php if ($this->_tpl_vars['di']['original_color9']): ?>
           	 	<tr>
           	 		<td><?php echo $this->_tpl_vars['di']['original_color9']; ?>
</td>          	 	
           	 	</tr>
           	 	<?php endif; ?>
           	 	<?php if ($this->_tpl_vars['di']['original_color10']): ?>
           	 	<tr>
           	 		<td><?php echo $this->_tpl_vars['di']['original_color10']; ?>
</td>          	 	
           	 	</tr>
           	 	<?php endif; ?>
           	 </table>
           </td>
           <td>
           	 <table>
           	    <?php if ($this->_tpl_vars['di']['color']): ?>
           	 	<tr>
           	 		<td><?php echo $this->_tpl_vars['di']['color']; ?>
</td>          	 	
           	 	</tr>
           	 	<?php endif; ?>
           	 	<?php if ($this->_tpl_vars['di']['color2']): ?>
           	 	<tr>
           	 		<td><?php echo $this->_tpl_vars['di']['color2']; ?>
</td>          	 	
           	 	</tr>
           	 	<?php endif; ?>
           	 	<?php if ($this->_tpl_vars['di']['color3']): ?>
           	 	<tr>
           	 		<td><?php echo $this->_tpl_vars['di']['color3']; ?>
</td>          	 	
           	 	</tr>
           	 	<?php endif; ?>
           	 	<?php if ($this->_tpl_vars['di']['color4']): ?>
           	 	<tr>
           	 		<td><?php echo $this->_tpl_vars['di']['color4']; ?>
</td>          	 	
           	 	</tr>
           	 	<?php endif; ?>
           	 	<?php if ($this->_tpl_vars['di']['color5']): ?>
           	 	<tr>
           	 		<td><?php echo $this->_tpl_vars['di']['color5']; ?>
</td>          	 	
           	 	</tr>
           	 	<?php endif; ?>
           	 	<?php if ($this->_tpl_vars['di']['color6']): ?>
           	 	<tr>
           	 		<td><?php echo $this->_tpl_vars['di']['color6']; ?>
</td>          	 	
           	 	</tr>
           	 	<?php endif; ?>
           	 	<?php if ($this->_tpl_vars['di']['color7']): ?>
           	 	<tr>
           	 		<td><?php echo $this->_tpl_vars['di']['color7']; ?>
</td>          	 	
           	 	</tr>
           	 	<?php endif; ?>
           	 	<?php if ($this->_tpl_vars['di']['color8']): ?>
           	 	<tr>
           	 		<td><?php echo $this->_tpl_vars['di']['color8']; ?>
</td>          	 	
           	 	</tr>
           	 	<?php endif; ?>
           	 	<?php if ($this->_tpl_vars['di']['color9']): ?>
           	 	<tr>
           	 		<td><?php echo $this->_tpl_vars['di']['color9']; ?>
</td>          	 	
           	 	</tr>
           	 	<?php endif; ?>
           	 	<?php if ($this->_tpl_vars['di']['color10']): ?>
           	 	<tr>
           	 		<td><?php echo $this->_tpl_vars['di']['color10']; ?>
</td>          	 	
           	 	</tr>
           	 	<?php endif; ?>
           	 </table>
           </td>
           <td><?php echo $this->_tpl_vars['di']['message']; ?>
</td>
           <td><?php echo $this->_tpl_vars['di']['proportion_back']; ?>
</td>
           </tr>
          	 <?php endforeach; endif; unset($_from); ?>
          	 <?php endif; ?>  
          	           	 <!-- 钻上传 -->   
          	 <?php if ($this->_tpl_vars['design']['design_name'] == 'Artwork Hotfix Heat Transfer Customization' || $this->_tpl_vars['design']['design_name'] == 'Custom Hot-Fix Heat Transfer'): ?>
           <tr>

           <th>Size</th>
           <th>尺寸类别</th>
           <th>面积</th>
           <th>Number</th>
           <th>钻区间</th>
           <th>Coverage</th>
           <th>Material</th>
           <th>Original Color/Part</th>
           <th>Color</th>
           <th>Design Modification</th>
           <th>Proportion Back</th>
           <th>Proportion Back2</th>
           <th>钻型号</th>
           </tr>
          	 <?php $_from = $this->_tpl_vars['design_info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['di']):
?>
          	 <tr>
           <td><?php echo $this->_tpl_vars['di']['size']; ?>
</td>
           <td>
           	<?php if ($this->_tpl_vars['di']['size_type'] == 1): ?>
           		范围尺寸
           	<?php elseif ($this->_tpl_vars['di']['size_type'] == 2): ?>
           		<?php if (strstr ( $this->_tpl_vars['di']['size'] , 'x' )): ?>
           			固定尺寸
           		<?php else: ?>
           			等比尺寸
           		<?php endif; ?>
           	<?php endif; ?>
           </td>
           <td><?php echo $this->_tpl_vars['di']['area']; ?>
</td>
           <td><?php echo $this->_tpl_vars['di']['stone_number']; ?>
</td>
           <td><?php echo $this->_tpl_vars['di']['stone_number']-$this->_tpl_vars['di']['stone_number']*0.125; ?>
~<?php echo $this->_tpl_vars['di']['stone_number']+$this->_tpl_vars['di']['stone_number']*0.125; ?>
</td>
           <td><?php echo $this->_tpl_vars['di']['coverage']; ?>
</td>
           <td><?php echo $this->_tpl_vars['di']['material']; ?>
 <?php echo $this->_tpl_vars['di']['model_type']; ?>
</td>
           <td>
           	 <table>
           	    <?php if ($this->_tpl_vars['di']['original_color']): ?>
           	 	<tr>
           	 		<td><?php echo $this->_tpl_vars['di']['original_color']; ?>
</td>          	 	
           	 	</tr>
           	 	<?php endif; ?>
           	 	<?php if ($this->_tpl_vars['di']['original_color2']): ?>
           	 	<tr>
           	 		<td><?php echo $this->_tpl_vars['di']['original_color2']; ?>
</td>          	 	
           	 	</tr>
           	 	<?php endif; ?>
           	 	<?php if ($this->_tpl_vars['di']['original_color3']): ?>
           	 	<tr>
           	 		<td><?php echo $this->_tpl_vars['di']['original_color3']; ?>
</td>          	 	
           	 	</tr>
           	 	<?php endif; ?>
           	 	<?php if ($this->_tpl_vars['di']['original_color4']): ?>
           	 	<tr>
           	 		<td><?php echo $this->_tpl_vars['di']['original_color4']; ?>
</td>          	 	
           	 	</tr>
           	 	<?php endif; ?>
           	 	<?php if ($this->_tpl_vars['di']['original_color5']): ?>
           	 	<tr>
           	 		<td><?php echo $this->_tpl_vars['di']['original_color5']; ?>
</td>          	 	
           	 	</tr>
           	 	<?php endif; ?>
           	 	<?php if ($this->_tpl_vars['di']['original_color6']): ?>
           	 	<tr>
           	 		<td><?php echo $this->_tpl_vars['di']['original_color6']; ?>
</td>          	 	
           	 	</tr>
           	 	<?php endif; ?>
           	 	<?php if ($this->_tpl_vars['di']['original_color7']): ?>
           	 	<tr>
           	 		<td><?php echo $this->_tpl_vars['di']['original_color7']; ?>
</td>          	 	
           	 	</tr>
           	 	<?php endif; ?>
           	 	<?php if ($this->_tpl_vars['di']['original_color8']): ?>
           	 	<tr>
           	 		<td><?php echo $this->_tpl_vars['di']['original_color8']; ?>
</td>          	 	
           	 	</tr>
           	 	<?php endif; ?>
           	 	<?php if ($this->_tpl_vars['di']['original_color9']): ?>
           	 	<tr>
           	 		<td><?php echo $this->_tpl_vars['di']['original_color9']; ?>
</td>          	 	
           	 	</tr>
           	 	<?php endif; ?>
           	 	<?php if ($this->_tpl_vars['di']['original_color10']): ?>
           	 	<tr>
           	 		<td><?php echo $this->_tpl_vars['di']['original_color10']; ?>
</td>          	 	
           	 	</tr>
           	 	<?php endif; ?>
           	 </table>
           </td>
           <td>
           	 <table>
           	    <?php if ($this->_tpl_vars['di']['color']): ?>
           	 	<tr>
           	 		<td><?php echo $this->_tpl_vars['di']['color']; ?>
</td>          	 	
           	 	</tr>
           	 	<?php endif; ?>
           	 	<?php if ($this->_tpl_vars['di']['color2']): ?>
           	 	<tr>
           	 		<td><?php echo $this->_tpl_vars['di']['color2']; ?>
</td>          	 	
           	 	</tr>
           	 	<?php endif; ?>
           	 	<?php if ($this->_tpl_vars['di']['color3']): ?>
           	 	<tr>
           	 		<td><?php echo $this->_tpl_vars['di']['color3']; ?>
</td>          	 	
           	 	</tr>
           	 	<?php endif; ?>
           	 	<?php if ($this->_tpl_vars['di']['color4']): ?>
           	 	<tr>
           	 		<td><?php echo $this->_tpl_vars['di']['color4']; ?>
</td>          	 	
           	 	</tr>
           	 	<?php endif; ?>
           	 	<?php if ($this->_tpl_vars['di']['color5']): ?>
           	 	<tr>
           	 		<td><?php echo $this->_tpl_vars['di']['color5']; ?>
</td>          	 	
           	 	</tr>
           	 	<?php endif; ?>
           	 	<?php if ($this->_tpl_vars['di']['color6']): ?>
           	 	<tr>
           	 		<td><?php echo $this->_tpl_vars['di']['color6']; ?>
</td>          	 	
           	 	</tr>
           	 	<?php endif; ?>
           	 	<?php if ($this->_tpl_vars['di']['color7']): ?>
           	 	<tr>
           	 		<td><?php echo $this->_tpl_vars['di']['color7']; ?>
</td>          	 	
           	 	</tr>
           	 	<?php endif; ?>
           	 	<?php if ($this->_tpl_vars['di']['color8']): ?>
           	 	<tr>
           	 		<td><?php echo $this->_tpl_vars['di']['color8']; ?>
</td>          	 	
           	 	</tr>
           	 	<?php endif; ?>
           	 	<?php if ($this->_tpl_vars['di']['color9']): ?>
           	 	<tr>
           	 		<td><?php echo $this->_tpl_vars['di']['color9']; ?>
</td>          	 	
           	 	</tr>
           	 	<?php endif; ?>
           	 	<?php if ($this->_tpl_vars['di']['color10']): ?>
           	 	<tr>
           	 		<td><?php echo $this->_tpl_vars['di']['color10']; ?>
</td>          	 	
           	 	</tr>
           	 	<?php endif; ?>
           	 </table>
           </td>
           <td><?php echo $this->_tpl_vars['di']['message']; ?>
</td>
           <td><?php if ($this->_tpl_vars['di']['proportion_back'] == 0): ?>不去除<?php else: ?>去除<?php endif; ?></td>
           <td><?php if ($this->_tpl_vars['di']['proportion_back2'] == 0): ?>不去除<?php else: ?>去除<?php endif; ?></td>
           <td><?php if ($this->_tpl_vars['di']['area'] <= 16): ?>2MM<?php else: ?>2MM/3MM<?php endif; ?></td> 
           </tr>
          	 <?php endforeach; endif; unset($_from); ?>
          	 <?php endif; ?>      
          	 <?php if ($this->_tpl_vars['design']['design_name'] == 'Words Screen Print Transfer Customization' || $this->_tpl_vars['design']['design_name'] == 'Jersey Screen Print Transfer Customization'): ?>
           <tr>
           <th>Text</th>
           <th>Font</th>
           <th>Size</th>
           <th>Outline</th>
           <th>Material</th>
           <th>Font Color-RGB</th>
           <th>Font Color-Pantone</th>
           <th>Outline Color-RGB</th>
           <th>Outline Color-Pantone</th>
           </tr>
          	 <?php $_from = $this->_tpl_vars['design_info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['di']):
?>
          	 <tr>
           <td><?php echo $this->_tpl_vars['di']['text']; ?>
</td>
           <td><?php echo $this->_tpl_vars['di']['font']; ?>
</td>
           <td><?php echo $this->_tpl_vars['di']['size']; ?>
</td>
           <td><?php echo $this->_tpl_vars['di']['outline']; ?>
</td>
           <td><?php echo $this->_tpl_vars['di']['material']; ?>
 <?php echo $this->_tpl_vars['di']['model_type']; ?>
</td>
           <td><?php echo $this->_tpl_vars['di']['color']; ?>
</td>
           <td><?php echo $this->_tpl_vars['di']['pantone']; ?>
</td>
           <td><?php echo $this->_tpl_vars['di']['outline_color']; ?>
</td>
           <td><?php echo $this->_tpl_vars['di']['outline_pantone']; ?>
</td>
           </tr>
          	 <?php endforeach; endif; unset($_from); ?>
          	 <?php endif; ?>
          	           	  <?php if ($this->_tpl_vars['design']['design_name'] == '3D Effect Patch No'): ?>
           <tr>
           <th>Item</th>
           <th>Original Color/Part</th>
           <th>Color</th>
           <th>Design Modification</th>
           </tr>
          	 <?php $_from = $this->_tpl_vars['design_info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['di']):
?>
          	 <tr>
		    	<td><?php echo $this->_tpl_vars['di']['material']; ?>
</td>
		        <td>-</td>
		        <td>-</td>
		        <td rowspan='5'><?php echo $this->_tpl_vars['di']['message']; ?>
</td>
		    </tr>
		    <tr>
		    	<td>3D</td>
		        <td><?php echo $this->_tpl_vars['di']['d3_message']; ?>
</td>
		        <td>-</td>
		    </tr>
		    <tr>
		    	<td><?php echo $this->_tpl_vars['di']['material3']; ?>
</td>
		        <td>-</td>
		        <td>-</td>
		    </tr>
		    <tr>
		    	<td>Proportion Back</td>
		        <td><?php if ($this->_tpl_vars['di']['proportion_back'] == 0): ?>不去除<?php else: ?>去除<?php endif; ?></td>
		        <td>-</td>
		    </tr>
	
		    <tr>
		    	<td>
		        	<?php echo $this->_tpl_vars['di']['model_type']; ?>

		        </td>
		        <td>
		        	<table>
		        	    <?php if ($this->_tpl_vars['di']['original_color']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['original_color']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['original_color2']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['original_color2']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['original_color3']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['original_color3']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['original_color4']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['original_color4']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['original_color5']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['original_color5']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['original_color6']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['original_color6']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['original_color7']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['original_color7']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['original_color8']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['original_color8']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['original_color9']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['original_color9']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['original_color10']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['original_color10']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['original_color11']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['original_color11']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['original_color12']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['original_color12']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['original_color13']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['original_color13']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['original_color14']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['original_color14']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['original_color15']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['original_color15']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['original_color16']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['original_color16']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['original_color17']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['original_color17']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['original_color18']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['original_color18']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		            </table>
		        </td>
		        <td>
		        	<table>
		        		<?php if ($this->_tpl_vars['di']['color']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['color']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['color2']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['color2']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color2']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['color3']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['color3']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color3']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['color4']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['color4']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color4']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['color5']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['color5']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color5']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['color6']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['color6']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color6']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['color7']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['color7']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color7']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['color8']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['color8']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color8']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['color9']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['color9']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color9']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['color10']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['color10']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color10']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['color11']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['color11']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color11']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['color12']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['color12']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color12']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['color13']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['color13']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color13']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['color14']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['color14']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color14']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['color15']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['color15']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color15']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['color16']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['color16']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color16']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['color17']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['color17']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color17']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['color18']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['color18']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color18']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		            </table>
		        </td>
		    </tr>
		    <tr>
		    	<td>Metallic Thread</td>
		        <td><?php echo $this->_tpl_vars['di']['metallic_thread_part']; ?>
</td>
		        <td><?php echo $this->_tpl_vars['di']['material2']; ?>
</td>
		    </tr>
          	 <?php endforeach; endif; unset($_from); ?>
          	 <?php endif; ?>
          	<?php if ($this->_tpl_vars['design']['design_name'] == '3D Effect Patch'): ?>
           <tr>
           <th>Item</th>
           <th>Original Color/Part</th>
           <th>Color</th>
           <th>Design Modification</th>
           </tr>
          	 <?php $_from = $this->_tpl_vars['design_info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['di']):
?>
          	 <tr>
		    	<td><?php echo $this->_tpl_vars['di']['material']; ?>
</td>
		        <td>-</td>
		        <td>-</td>
		        <td rowspan='5'><?php echo $this->_tpl_vars['di']['message']; ?>
</td>
		    </tr>
		    <tr>
		    	<td>3D</td>
		        <td><?php echo $this->_tpl_vars['di']['d3_message']; ?>
</td>
		        <td>-</td>
		    </tr>
		    <tr>
		    	<td><?php echo $this->_tpl_vars['di']['material3']; ?>
</td>
		        <td>-</td>
		        <td>-</td>
		    </tr>
		    <tr>
		    	<td>Proportion Back</td>
		        <td><?php if ($this->_tpl_vars['di']['proportion_back'] == 0): ?>不去除<?php else: ?>去除<?php endif; ?></td>
		        <td>-</td>
		    </tr>
		    <tr>
		    	<td>
		        	<?php echo $this->_tpl_vars['di']['model_type']; ?>

		        </td>
		        <td>
		        	<table>
		        	    <?php if ($this->_tpl_vars['di']['original_color']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['original_color']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['original_color2']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['original_color2']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['original_color3']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['original_color3']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['original_color4']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['original_color4']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['original_color5']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['original_color5']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['original_color6']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['original_color6']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['original_color7']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['original_color7']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['original_color8']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['original_color8']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['original_color9']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['original_color9']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['original_color10']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['original_color10']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['original_color11']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['original_color11']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['original_color12']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['original_color12']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['original_color13']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['original_color13']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['original_color14']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['original_color14']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['original_color15']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['original_color15']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['original_color16']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['original_color16']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['original_color17']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['original_color17']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['original_color18']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['original_color18']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		            </table>
		        </td>
		        <td>
		        	<table>
		        		<?php if ($this->_tpl_vars['di']['color']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['color']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['color2']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['color2']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color2']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['color3']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['color3']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color3']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['color4']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['color4']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color4']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['color5']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['color5']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color5']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['color6']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['color6']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color6']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['color7']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['color7']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color7']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['color8']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['color8']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color8']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['color9']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['color9']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color9']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['color10']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['color10']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color10']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['color11']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['color11']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color11']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['color12']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['color12']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color12']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['color13']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['color13']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color13']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['color14']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['color14']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color14']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['color15']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['color15']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color15']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['color16']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['color16']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color16']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['color17']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['color17']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color17']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['color18']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['color18']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color18']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		            </table>
		        </td>
		    </tr>
		    <tr>
		    	<td>Metallic Thread</td>
		        <td><?php echo $this->_tpl_vars['di']['metallic_thread_part']; ?>
</td>
		        <td><?php echo $this->_tpl_vars['di']['material2']; ?>
</td>
		    </tr>
          	 <?php endforeach; endif; unset($_from); ?>
          	 <?php endif; ?>
          	<?php if ($this->_tpl_vars['design']['design_name'] == 'Chenille Patch'): ?>
           <tr>
           <th>Item</th>
           <th>Original Color/Part</th>
           <th>Color</th>
           <th>Design Modification</th>
           </tr>
          	 <?php $_from = $this->_tpl_vars['design_info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['di']):
?>
          	 <tr>
		    	<td><?php echo $this->_tpl_vars['di']['material']; ?>
</td>
		        <td>-</td>
		        <td>-</td>
		        <td rowspan='5'><?php echo $this->_tpl_vars['di']['message']; ?>
</td>
		    </tr>
		    <tr>
		    	<td><?php echo $this->_tpl_vars['di']['material3']; ?>
</td>
		        <td>-</td>
		        <td>-</td>
		    </tr>
		    <tr>
		    	<td>Proportion Back</td>
		        <td><?php if ($this->_tpl_vars['di']['proportion_back'] == 0): ?>不去除<?php else: ?>去除<?php endif; ?></td>
		        <td>-</td>
		    </tr>
		    <tr>
		    	<td>
		        	<?php echo $this->_tpl_vars['di']['model_type']; ?>

		        </td>
		        <td>
		        	<table>
		        	    <?php if ($this->_tpl_vars['di']['original_color']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['original_color']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['original_color2']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['original_color2']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['original_color3']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['original_color3']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['original_color4']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['original_color4']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['original_color5']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['original_color5']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		            </table>
		        </td>
		        <td>
		        	<table>
		        		<?php if ($this->_tpl_vars['di']['color']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['color']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['color2']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['color2']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color2']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['color3']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['color3']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color3']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['color4']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['color4']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color4']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['color5']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['color5']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color5']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		            </table>
		        </td>
		    </tr>
		    <tr>
		    	<td>Embroidery Thread</td>
		        <td>
		        	<table>
		                <?php if ($this->_tpl_vars['di']['original_color6']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['original_color6']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['original_color7']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['original_color7']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['original_color8']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['original_color8']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['original_color9']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['original_color9']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['original_color10']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['original_color10']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		            </table>
		        </td>
		        <td>
		        	<table>
		                <?php if ($this->_tpl_vars['di']['color6']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['color6']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color6']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['color7']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['color7']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color7']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['color8']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['color8']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color8']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['color9']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['color9']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color9']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['color10']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['color10']; ?>
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
           <th>Item</th>
           <th>Original Color/Part</th>
           <th>Color</th>
           <th>Design Modification</th>
           </tr>
          	 <?php $_from = $this->_tpl_vars['design_info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['di']):
?>
          	 <tr>
		    	<td><?php echo $this->_tpl_vars['di']['material']; ?>
</td>
		        <td>-</td>
		        <td>-</td>
		        <td rowspan='5'><?php echo $this->_tpl_vars['di']['message']; ?>
</td>
		    </tr>
		    <tr>
		    	<td><?php echo $this->_tpl_vars['di']['material3']; ?>
</td>
		        <td>-</td>
		        <td>-</td>
		    </tr>
		    <tr>
		    	<td>Proportion Back</td>
		        <td><?php if ($this->_tpl_vars['di']['proportion_back'] == 0): ?>不去除<?php else: ?>去除<?php endif; ?></td>
		        <td>-</td>
		    </tr>
		    <tr>
		    	<td>
		        	<?php echo $this->_tpl_vars['di']['model_type']; ?>

		        </td>
		        <td>
		        	<table>
		        	    <?php if ($this->_tpl_vars['di']['original_color']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['original_color']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['original_color2']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['original_color2']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['original_color3']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['original_color3']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['original_color4']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['original_color4']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['original_color5']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['original_color5']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		            </table>
		        </td>
		        <td>
		        	<table>
		        		<?php if ($this->_tpl_vars['di']['color']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['color']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['color2']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['color2']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color2']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['color3']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['color3']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color3']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['color4']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['color4']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color4']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['color5']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['color5']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color5']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		            </table>
		        </td>
		    </tr>
		    <tr>
		    	<td>Embroidery Thread</td>
		        <td>
		        	<table>
		        	    <?php if ($this->_tpl_vars['di']['original_color']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['original_color']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['original_color2']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['original_color2']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['original_color3']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['original_color3']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['original_color4']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['original_color4']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['original_color5']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['original_color5']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['original_color6']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['original_color6']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['original_color7']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['original_color7']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['original_color8']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['original_color8']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['original_color9']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['original_color9']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['original_color10']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['original_color10']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['original_color11']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['original_color11']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['original_color12']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['original_color12']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['original_color13']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['original_color13']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['original_color14']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['original_color14']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['original_color15']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['original_color15']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['original_color16']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['original_color16']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['original_color17']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['original_color17']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['original_color18']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['original_color18']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		            </table>
		        </td>
		        <td>
		        	<table>
		                <?php if ($this->_tpl_vars['di']['color6']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['color6']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color6']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['color7']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['color7']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color7']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['color8']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['color8']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color8']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['color9']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['color9']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color9']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['color10']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['color10']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color10']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		            </table>
		        </td>
		    </tr>
          	 <?php endforeach; endif; unset($_from); ?>
          	 <?php endif; ?>
          	 <?php if ($this->_tpl_vars['design']['design_name'] == 'Embroidery Patch' || $this->_tpl_vars['design']['design_name'] == 'Custom Patch'): ?>
           <tr>
           <th>Item</th>
           <th>Original Color/Part</th>
           <th>Color</th>
           <th>Design Modification</th>
           </tr>
          	 <?php $_from = $this->_tpl_vars['design_info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['di']):
?>
          	 <tr>
		    	<td><?php echo $this->_tpl_vars['di']['material']; ?>
</td>
		        <td>-</td>
		        <td>-</td>
		        <td rowspan='5'><?php echo $this->_tpl_vars['di']['message']; ?>
</td>
		    </tr>
		    <tr>
		    	<td><?php echo $this->_tpl_vars['di']['material3']; ?>
</td>
		        <td>-</td>
		        <td>-</td>
		    </tr>
		    <tr>
		    	<td>Proportion Back</td>
		        <td><?php if ($this->_tpl_vars['di']['proportion_back'] == 0): ?>不去除<?php else: ?>去除<?php endif; ?></td>
		        <td>-</td>
		    </tr>
		    <tr>
		    	<td>
		        	<?php echo $this->_tpl_vars['di']['model_type']; ?>

		        </td>
		        <td>
		        	<table>
		        	    <?php if ($this->_tpl_vars['di']['original_color']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['original_color']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['original_color2']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['original_color2']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['original_color3']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['original_color3']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['original_color4']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['original_color4']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['original_color5']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['original_color5']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['original_color6']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['original_color6']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['original_color7']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['original_color7']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['original_color8']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['original_color8']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['original_color9']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['original_color9']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['original_color10']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['original_color10']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['original_color11']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['original_color11']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['original_color12']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['original_color12']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['original_color13']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['original_color13']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['original_color14']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['original_color14']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['original_color15']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['original_color15']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['original_color16']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['original_color16']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['original_color17']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['original_color17']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['original_color18']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['original_color18']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		            </table>
		        </td>
		        <td>
		        	<table>
		        		<?php if ($this->_tpl_vars['di']['color']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['color']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['color2']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['color2']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color2']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['color3']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['color3']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color3']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['color4']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['color4']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color4']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['color5']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['color5']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color5']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['color6']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['color6']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color6']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['color7']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['color7']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color7']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['color8']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['color8']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color8']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['color9']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['color9']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color9']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['color10']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['color10']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color10']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['color11']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['color11']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color11']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['color12']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['color12']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color12']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['color13']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['color13']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color13']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['color14']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['color14']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color14']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['color15']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['color15']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color15']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['color16']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['color16']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color16']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['color17']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['color17']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color17']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['color18']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['color18']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color18']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		            </table>
		        </td>
		    </tr>
		    <tr>
		    	<td>Metallic Thread</td>
		        <td><?php echo $this->_tpl_vars['di']['metallic_thread_part']; ?>
</td>
		        <td><?php echo $this->_tpl_vars['di']['material2']; ?>
</td>
		    </tr>
          	 <?php endforeach; endif; unset($_from); ?>
          	 <?php endif; ?>
          	  <?php if ($this->_tpl_vars['design']['design_name'] == 'Embroidery Patch No'): ?>
           <tr>
           <th>Item</th>
           <th>Original Color/Part</th>
           <th>Color</th>
           <th>Design Modification</th>
           </tr>
          	 <?php $_from = $this->_tpl_vars['design_info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['di']):
?>
          	 <tr>
		    	<td><?php echo $this->_tpl_vars['di']['material']; ?>
</td>
		        <td>-</td>
		        <td>-</td>
		        <td rowspan='5'><?php echo $this->_tpl_vars['di']['message']; ?>
</td>
		    </tr>
		    <tr>
		    	<td><?php echo $this->_tpl_vars['di']['material3']; ?>
</td>
		        <td>-</td>
		        <td>-</td>
		    </tr>
		    <tr>
		    	<td>Proportion Back</td>
		        <td><?php if ($this->_tpl_vars['di']['proportion_back'] == 0): ?>不去除<?php else: ?>去除<?php endif; ?></td>
		        <td>-</td>
		    </tr>
		    <tr>
		    	<td>
		        	<?php echo $this->_tpl_vars['di']['model_type']; ?>

		        </td>
		        <td>
		        	<table>
		        	    <?php if ($this->_tpl_vars['di']['original_color']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['original_color']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['original_color2']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['original_color2']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['original_color3']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['original_color3']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['original_color4']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['original_color4']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['original_color5']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['original_color5']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['original_color6']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['original_color6']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['original_color7']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['original_color7']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['original_color8']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['original_color8']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['original_color9']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['original_color9']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['original_color10']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['original_color10']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['original_color11']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['original_color11']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['original_color12']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['original_color12']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['original_color13']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['original_color13']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['original_color14']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['original_color14']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['original_color15']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['original_color15']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['original_color16']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['original_color16']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['original_color17']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['original_color17']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['original_color18']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['original_color18']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		            </table>
		        </td>
		        <td>
		        	<table>
		        		<?php if ($this->_tpl_vars['di']['color']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['color']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['color2']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['color2']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color2']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['color3']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['color3']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color3']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['color4']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['color4']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color4']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['color5']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['color5']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color5']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['color6']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['color6']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color6']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['color7']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['color7']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color7']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['color8']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['color8']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color8']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['color9']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['color9']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color9']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['color10']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['color10']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color10']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['color11']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['color11']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color11']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['color12']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['color12']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color12']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['color13']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['color13']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color13']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['color14']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['color14']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color14']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['color15']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['color15']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color15']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['color16']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['color16']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color16']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['color17']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['color17']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color17']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		                <?php if ($this->_tpl_vars['di']['color18']): ?>
		            	<tr>
		                	<td><?php echo $this->_tpl_vars['di']['color18']; ?>
/<?php echo $this->_tpl_vars['di']['pantone_color18']; ?>
</td>
		                </tr>
		                <?php endif; ?>
		            </table>
		        </td>
		    </tr>
		    <tr>
		    	<td>Metallic Thread</td>
		        <td><?php echo $this->_tpl_vars['di']['metallic_thread_part']; ?>
</td>
		        <td><?php echo $this->_tpl_vars['di']['material2']; ?>
</td>
		    </tr>
          	 <?php endforeach; endif; unset($_from); ?>
          	 <?php endif; ?>
          	 <?php if ($this->_tpl_vars['design']['design_name'] == 'Artwork Screen Print Transfer Customization' || $this->_tpl_vars['design']['design_name'] == 'Custom Screen Printing Transfer'): ?>
           <tr>
           <th>Size</th>
           <th>尺寸类别</th>
           <th>Material</th>
           <th>Full Color</th>
           <th>Original Color/Part</th>
           <th>Color RGB</th>
           <th>Pantone</th>
           <th>Design Modification</th>
           <th>proportion Back</th>
           </tr>
          	 <?php $_from = $this->_tpl_vars['design_info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['di']):
?>
          	 <tr>
           <td><?php echo $this->_tpl_vars['di']['size']; ?>
</td>
           <td>
           	<?php if ($this->_tpl_vars['di']['size_type'] == 1): ?>
           		范围尺寸
           	<?php elseif ($this->_tpl_vars['di']['size_type'] == 2): ?>
           		<?php if (strstr ( $this->_tpl_vars['di']['size'] , 'x' )): ?>
           			固定尺寸
           		<?php else: ?>
           			等比尺寸
           		<?php endif; ?>
           	<?php endif; ?>
           </td>
           <td><?php echo $this->_tpl_vars['di']['material']; ?>
</td>
           <td><?php if ($this->_tpl_vars['di']['full_color'] == 0): ?>1<?php endif; ?></td>
           <td>
           	 <table>
           	    <?php if ($this->_tpl_vars['di']['original_color']): ?>
           	 	<tr>
           	 		<td><?php echo $this->_tpl_vars['di']['original_color']; ?>
</td>          	 	
           	 	</tr>
           	 	<?php endif; ?>
           	 	<?php if ($this->_tpl_vars['di']['original_color2']): ?>
           	 	<tr>
           	 		<td><?php echo $this->_tpl_vars['di']['original_color2']; ?>
</td>          	 	
           	 	</tr>
           	 	<?php endif; ?>
           	 	<?php if ($this->_tpl_vars['di']['original_color3']): ?>
           	 	<tr>
           	 		<td><?php echo $this->_tpl_vars['di']['original_color3']; ?>
</td>          	 	
           	 	</tr>
           	 	<?php endif; ?>
           	 	<?php if ($this->_tpl_vars['di']['original_color4']): ?>
           	 	<tr>
           	 		<td><?php echo $this->_tpl_vars['di']['original_color4']; ?>
</td>          	 	
           	 	</tr>
           	 	<?php endif; ?>
           	 	<?php if ($this->_tpl_vars['di']['original_color5']): ?>
           	 	<tr>
           	 		<td><?php echo $this->_tpl_vars['di']['original_color5']; ?>
</td>          	 	
           	 	</tr>
           	 	<?php endif; ?>
           	 	<?php if ($this->_tpl_vars['di']['original_color6']): ?>
           	 	<tr>
           	 		<td><?php echo $this->_tpl_vars['di']['original_color6']; ?>
</td>          	 	
           	 	</tr>
           	 	<?php endif; ?>
           	 	<?php if ($this->_tpl_vars['di']['original_color7']): ?>
           	 	<tr>
           	 		<td><?php echo $this->_tpl_vars['di']['original_color7']; ?>
</td>          	 	
           	 	</tr>
           	 	<?php endif; ?>
           	 	<?php if ($this->_tpl_vars['di']['original_color8']): ?>
           	 	<tr>
           	 		<td><?php echo $this->_tpl_vars['di']['original_color8']; ?>
</td>          	 	
           	 	</tr>
           	 	<?php endif; ?>
           	 	<?php if ($this->_tpl_vars['di']['original_color9']): ?>
           	 	<tr>
           	 		<td><?php echo $this->_tpl_vars['di']['original_color9']; ?>
</td>          	 	
           	 	</tr>
           	 	<?php endif; ?>
           	 	<?php if ($this->_tpl_vars['di']['original_color10']): ?>
           	 	<tr>
           	 		<td><?php echo $this->_tpl_vars['di']['original_color10']; ?>
</td>          	 	
           	 	</tr>
           	 	<?php endif; ?>
           	 </table>
           </td>
           <td>
           	 <table>
           	    <?php if ($this->_tpl_vars['di']['color']): ?>
           	 	<tr>
           	 		<td><?php echo $this->_tpl_vars['di']['color']; ?>
</td>          	 	
           	 	</tr>
           	 	<?php endif; ?>
           	 	<?php if ($this->_tpl_vars['di']['color2']): ?>
           	 	<tr>
           	 		<td><?php echo $this->_tpl_vars['di']['color2']; ?>
</td>          	 	
           	 	</tr>
           	 	<?php endif; ?>
           	 	<?php if ($this->_tpl_vars['di']['color3']): ?>
           	 	<tr>
           	 		<td><?php echo $this->_tpl_vars['di']['color3']; ?>
</td>          	 	
           	 	</tr>
           	 	<?php endif; ?>
           	 	<?php if ($this->_tpl_vars['di']['color4']): ?>
           	 	<tr>
           	 		<td><?php echo $this->_tpl_vars['di']['color4']; ?>
</td>          	 	
           	 	</tr>
           	 	<?php endif; ?>
           	 	<?php if ($this->_tpl_vars['di']['color5']): ?>
           	 	<tr>
           	 		<td><?php echo $this->_tpl_vars['di']['color5']; ?>
</td>          	 	
           	 	</tr>
           	 	<?php endif; ?>
           	 	<?php if ($this->_tpl_vars['di']['color6']): ?>
           	 	<tr>
           	 		<td><?php echo $this->_tpl_vars['di']['color6']; ?>
</td>          	 	
           	 	</tr>
           	 	<?php endif; ?>
           	 	<?php if ($this->_tpl_vars['di']['color7']): ?>
           	 	<tr>
           	 		<td><?php echo $this->_tpl_vars['di']['color7']; ?>
</td>          	 	
           	 	</tr>
           	 	<?php endif; ?>
           	 	<?php if ($this->_tpl_vars['di']['color8']): ?>
           	 	<tr>
           	 		<td><?php echo $this->_tpl_vars['di']['color8']; ?>
</td>          	 	
           	 	</tr>
           	 	<?php endif; ?>
           	 	<?php if ($this->_tpl_vars['di']['color9']): ?>
           	 	<tr>
           	 		<td><?php echo $this->_tpl_vars['di']['color9']; ?>
</td>          	 	
           	 	</tr>
           	 	<?php endif; ?>
           	 	<?php if ($this->_tpl_vars['di']['color10']): ?>
           	 	<tr>
           	 		<td><?php echo $this->_tpl_vars['di']['color10']; ?>
</td>          	 	
           	 	</tr>
           	 	<?php endif; ?>
           	 </table>
           </td>
           <td>
           	 <table>
           	 	<?php if ($this->_tpl_vars['di']['pantone_color']): ?>
           	 	<tr>
           	 		<td><?php echo $this->_tpl_vars['di']['pantone_color']; ?>
</td>          	 	
           	 	</tr>
           	 	<?php endif; ?>
           	 	<?php if ($this->_tpl_vars['di']['pantone_color2']): ?>
           	 	<tr>
           	 		<td><?php echo $this->_tpl_vars['di']['pantone_color2']; ?>
</td>          	 	
           	 	</tr>
           	 	<?php endif; ?>
           	 	<?php if ($this->_tpl_vars['di']['pantone_color3']): ?>
           	 	<tr>
           	 		<td><?php echo $this->_tpl_vars['di']['pantone_color3']; ?>
</td>          	 	
           	 	</tr>
           	 	<?php endif; ?>
           	 	<?php if ($this->_tpl_vars['di']['pantone_color4']): ?>
           	 	<tr>
           	 		<td><?php echo $this->_tpl_vars['di']['pantone_color4']; ?>
</td>          	 	
           	 	</tr>
           	 	<?php endif; ?>
           	 	<?php if ($this->_tpl_vars['di']['pantone_color5']): ?>
           	 	<tr>
           	 		<td><?php echo $this->_tpl_vars['di']['pantone_color5']; ?>
</td>          	 	
           	 	</tr>
           	 	<?php endif; ?>
           	 	<?php if ($this->_tpl_vars['di']['pantone_color6']): ?>
           	 	<tr>
           	 		<td><?php echo $this->_tpl_vars['di']['pantone_color6']; ?>
</td>          	 	
           	 	</tr>
           	 	<?php endif; ?>
           	 	<?php if ($this->_tpl_vars['di']['pantone_color7']): ?>
           	 	<tr>
           	 		<td><?php echo $this->_tpl_vars['di']['pantone_color7']; ?>
</td>          	 	
           	 	</tr>
           	 	<?php endif; ?>
           	 	<?php if ($this->_tpl_vars['di']['pantone_color8']): ?>
           	 	<tr>
           	 		<td><?php echo $this->_tpl_vars['di']['pantone_color8']; ?>
</td>          	 	
           	 	</tr>
           	 	<?php endif; ?>
           	 	<?php if ($this->_tpl_vars['di']['pantone_color9']): ?>
           	 	<tr>
           	 		<td><?php echo $this->_tpl_vars['di']['pantone_color9']; ?>
</td>          	 	
           	 	</tr>
           	 	<?php endif; ?>
           	 	<?php if ($this->_tpl_vars['di']['pantone_color10']): ?>
           	 	<tr>
           	 		<td><?php echo $this->_tpl_vars['di']['pantone_color10']; ?>
</td>          	 	
           	 	</tr>
           	 	<?php endif; ?>
           	 </table>
           </td>
           <td><?php echo $this->_tpl_vars['di']['message']; ?>
</td>
           <td><?php echo $this->_tpl_vars['di']['proportion_back']; ?>
</td>
           </tr>
          	 <?php endforeach; endif; unset($_from); ?>
          	 <?php endif; ?>
          <?php endif; ?>
      </table>
    </div>
        <?php endif; ?>
      </div>
      
      <div class="sIE_r" style="height:350px; width:350px;">
        <div class="sIE_r_img" style=" width:350px; height:350px; margin-top:10px;">
        <?php if ($this->_tpl_vars['design']['upload_cdr'] && ! strstr ( $this->_tpl_vars['design']['upload_cdr'] , '.cdr' )): ?>
        <img style="width:350px; height:175px;" src="<?php echo $this->_tpl_vars['design']['upload_file']; ?>
" width="350px" height="175px"  />
        <img style="width:350px; height:175px;" src="<?php echo $this->_tpl_vars['design']['upload_cdr']; ?>
" width="350px" height="175px"  />
        <?php else: ?>
        <img style="width:350px; height:350px;" src="<?php echo $this->_tpl_vars['design']['upload_file']; ?>
" width="350px" height="350px"  />
        <?php endif; ?>
        </div>
        <div class="DO_download" style="margin-top:0px; margin-left:20px;"><a target="_blank" href="<?php echo $this->_tpl_vars['design']['upload_file']; ?>
" style="line-height:22px;" >
          <div class="button">
            <div class="buttonContent">
              <button style="width:60px;">下载</button>
            </div>
          </div>
          </a></div>
          <div class="sIE_r_img" style="height:36px; width:360px;  margin-left:20px; margin-top:20px;">
        <div style="float:left; width:360px; height:36px;">
          <?php if ($this->_tpl_vars['upload_cdr'] != ""): ?>
             CDR：<a href="<?php echo $this->_tpl_vars['upload_cdr']; ?>
"><font color="blue">下载查看</font></a>
          <?php else: ?>
          
          <?php endif; ?>   
        </div>

     </div>
      </div>
      
    <div class="sIEK" style="margin-top:20px;">
    
      <div class="divider" style="margin-top:100px;">divider</div>
      <div class="DesignContent" style="margin-top:0px;">
      
        <div id="DC_01" class="DC">
          <div class="sIE_title">设计内容</div>
        </div>
        
        <div class="sIEK" style="width:65%;">
          <div class="sIE_l" style="width:200px;">
           
              <div style="float:left; margin-bottom:5px;">
                <div class="sIE_l_01_title">设计名称:</div>
                <input type="hidden" name="design_id" value="<?php echo $this->_tpl_vars['design']['id']; ?>
" />
                <input type="hidden" name="design_content_id" value="<?php echo $this->_tpl_vars['design_content']['id']; ?>
" />
                <input style="width:100px;" type="text" class="sIE_No"  name="design_content_name" id="design_content_name" readonly="readonly" value="<?php echo $this->_tpl_vars['design_content']['design_content_name']; ?>
" />
              </div>
              <div style="float:left; margin-bottom:5px;">
                <div class="sIE_l_01_title">设计编号:</div>
                <input style="width:100px;" type="text" class="sIE_No"  name="design_content_code" id="design_content_code" readonly="readonly" value="<?php if ($this->_tpl_vars['design_content']['design_content_code']): ?><?php echo $this->_tpl_vars['design_content']['design_content_code']; ?>
<?php else: ?><?php echo $this->_tpl_vars['design_content_code']; ?>
<?php endif; ?>"/>
              </div>
              <div style="float:left; margin-bottom:5px;">
                <div class="sIE_l_01_title">时间:</div>
                <input style="width:100px;" type="text" class="sIE_No"  name="design_content_date" id="design_content_date" readonly="readonly" value="<?php if ($this->_tpl_vars['design_content']['content_insert_time']): ?><?php echo $this->_tpl_vars['design_content']['content_insert_time']; ?>
<?php else: ?><?php echo $this->_tpl_vars['today']; ?>
<?php endif; ?>"/>
              </div>
              <div style="float:left; width:210px;">
              <?php if ($this->_tpl_vars['design']['design_category'] != 13): ?>
                <div class="sIE_l_01" style="width:210px;">
                  <div class="sIE_l_01_title" style="width:80px; height:100px;">尺寸:</div>
                  <div class="sIE_r01" style="width:130px;">
                    <div class="sIE_r01_div">
                      <input type="text"  class="sIE_No" style="width:55px;" id="inch_w_content"  readonly="readonly" name="content_inch_w" value="<?php echo $this->_tpl_vars['design_content']['content_inch_w']; ?>
"/>
                      <div class="sIE_r01_div_r">inch W</div>
                    </div>
                    <div class="sIE_r01_div">
                      <input type="text"  class="sIE_No" style="width:55px;" id="inch_h_content" readonly="readonly"  name="content_inch_h" value="<?php echo $this->_tpl_vars['design_content']['content_inch_h']; ?>
"/>
                      <div class="sIE_r01_div_r">inch H</div>
                    </div>
                    <div class="sIE_r01_div">
                      <input type="text"  class="sIE_No" style="width:55px;" id="cm_w_content"  readonly="readonly" name="content_cm_w" value="<?php echo $this->_tpl_vars['design_content']['content_cm_w']; ?>
" />
                      <div class="sIE_r01_div_r">cm W</div>
                    </div>
                    <div class="sIE_r01_div">
                      <input type="text"  class="sIE_No" style="width:55px;" id="cm_h_content" readonly="readonly"  name="content_cm_h" value="<?php echo $this->_tpl_vars['design_content']['content_cm_h']; ?>
" />
                      <div class="sIE_r01_div_r">cm H</div>
                    </div>
                  </div>
                </div>
			<?php endif; ?>
              </div>

              <!--<input type="hidden" name="submit_value" value="" id="submit_value" />-->
           
          </div>
          
          
          <div class="sIEK" style=" width:210px;">
				<textarea readonly="readonly" class="add01_textarea" onfocus="if(this.value=='设计备注')this.value='';"  style="width:180px; float:left; height:45px; margin-left:20px; margin-top:10px;" name="design_note"><?php if ($this->_tpl_vars['design_content']['design_note']): ?><?php echo $this->_tpl_vars['design_content']['design_note']; ?>
<?php else: ?>设计备注<?php endif; ?></textarea>
			  <form method="post" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, navTabAjaxDone)" id="info_form<?php echo $this->_tpl_vars['design_content']['id']; ?>
">
			  <div class="sIE_l_01" style="margin-top:10px;width:100%; margin-left:20px;">
              <div class="sIE_l_01_title" style="width:100%;">审核备注:</div>
              <div class="sIE_r01">
                <div class="sIE_r01_div">
                 
                 <textarea name="design_content_verify_note" style="width:180px; height:45px;"><?php echo $this->_tpl_vars['design_content']['design_content_verify_note']; ?>
</textarea>
                 
                </div>
              </div>
            </div>
            
             <div class="sIE_l_01" style="margin-top:20px;width:100%; margin-left:20px;">
              <div class="sIE_l_01_title" style="width:60px;">销售评语:</div>
              <div class="sIE_r01">
                <div class="sIE_r01_div">

                 <textarea name="sales_comments" style="width:180px; height:45px;"><?php echo $this->_tpl_vars['design_content']['sales_comments']; ?>
</textarea>
                  <input type="hidden" id="submit_value" name="submit_value"  />

                  <input type="hidden" name="design_content_id" value="<?php echo $this->_tpl_vars['design_content']['id']; ?>
" />
                   <input type="hidden" name="design_id" value="<?php echo $this->_tpl_vars['design']['id']; ?>
" />

                </div>
              </div>
            </div>
			  </form>
		  </div>
          <?php if ($this->_tpl_vars['design']['design_category'] != 13): ?>
          <div class="sIE_l_02" style="margin-bottom:20px; width:95%;">
        <table cellspacing="0" class="sIE_l_02Tab" id="material_table">
          <tr>
          	<th>序列</th>
            <th>材料</th>
            <th>颜色</th>
            <th>尺寸</th>
            <th>数量</th>
           
          </tr>
          <?php if ($this->_tpl_vars['materials_content_select'] != ''): ?>
          <?php $_from = $this->_tpl_vars['materials_content_select']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['ms']):
?>
          <tr>
          	<td style="width:20px;"><?php echo $this->_tpl_vars['k']+1; ?>
</td>
            <td><?php echo $this->_tpl_vars['ms']['material_name']; ?>
</td>
            <td>
				<?php if (strstr ( $this->_tpl_vars['ms']['material_color'] , 'Full Color' )): ?>
					<img width="20" height="20" src="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/image/sublimation.jpg"  />
				<?php else: ?>
					<?php echo $this->_tpl_vars['ms']['material_color']; ?>

				<?php endif; ?>
			</td>
            <td><?php echo $this->_tpl_vars['ms']['material_size']; ?>

				<?php if (! empty ( $this->_tpl_vars['ms']['material_size'] )): ?>
					<?php if (strstr ( $this->_tpl_vars['ms']['material_size'] , "*" )): ?>
						 <?php if (strstr ( 'Square、Rectangular、WaterDrop、Boat、Triangle、Diamond、Heart、Star、Oval' , $this->_tpl_vars['ms']['material_name'] )): ?>
                        mm
                        <?php else: ?>
						inch
                        <?php endif; ?>
					<?php elseif (! strstr ( $this->_tpl_vars['ms']['material_size'] , 'SS' )): ?>
						mm
					<?php endif; ?>
				<?php endif; ?>
			</td>
            <td><?php echo $this->_tpl_vars['ms']['material_quantity']; ?>
</td>
           
          </tr>
          <?php endforeach; endif; unset($_from); ?>
          <?php endif; ?>
        </table>
      </div>
      
         <!--批量图片的显示-->          
       <?php if ($this->_tpl_vars['board_list']): ?>
           <div >
                <ul>
                	<div style="width:60px; font-size:17px; color:#006">分版图:</div><br />
                    <?php $_from = $this->_tpl_vars['board_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['val']):
?>
                        <li style="width:180px; float:left; margin-bottom:10px; text-align:center;" id="old_img_<?php echo $this->_tpl_vars['val']['id']; ?>
">
                            <div>
                                <img height="170" width="170" style="border:solid 1px  #09F;" src="<?php echo $this->_tpl_vars['val']['upload_jpg']; ?>
"  /><br />
                                <input type="text" style="width:165px; text-align:center;" readonly="readonly" value="<?php echo $this->_tpl_vars['val']['name']; ?>
" /><br />
                                <a href="<?php echo $this->_tpl_vars['val']['upload_jpg']; ?>
" target="_blank" style="color:#03F; font-size:14px; cursor:pointer;">下载jpg</a>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <a href="<?php echo $this->_tpl_vars['val']['upload_cdr']; ?>
" style="color:#03F; font-size:14px; cursor:pointer;">下载cdr</a>
                            </div>
                        </li>
                    <?php endforeach; endif; unset($_from); ?>
                </ul>
           </div>
       <?php endif; ?>
       
       <?php if ($this->_tpl_vars['other_list']): ?>
           <div >
                <ul>
                	<div  style="width:100px; font-size:17px; color:#006">其他效果图:</div><br />
                    <?php $_from = $this->_tpl_vars['other_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['val']):
?>
                        <li style="width:180px; float:left; margin-bottom:10px; text-align:center;" id="old_img_<?php echo $this->_tpl_vars['val']['id']; ?>
">
                            <div>
                                <img height="170" width="170" style="border:solid 1px  #09F;" src="<?php echo $this->_tpl_vars['val']['upload_jpg']; ?>
"  /><br />
                                <input type="text" style="width:165px; text-align:center;" readonly="readonly" value="<?php echo $this->_tpl_vars['val']['name']; ?>
" /><br />
                                <a href="<?php echo $this->_tpl_vars['val']['upload_jpg']; ?>
" target="_blank" style="color:#03F; font-size:14px; cursor:pointer;">下载jpg</a>
                            </div>
                        </li>
                    <?php endforeach; endif; unset($_from); ?>
                </ul>
           </div>
       <?php endif; ?>
       
        <?php endif; ?>  
          
      </div>
      <div class="sIE_r" style="width:350px;">
            <div class="sIE_r_img" style="height:370px; width:350px;">
              <div style="float:left;  width:350px; height:atuo;"> 
                <!--<img src="sss.jpg" width="224px" height="224px" />-->
                <iframe name="yframe" src="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/unfinishdesign/two_img_upload" style="border:none; width:350px; height:370px;"></iframe>
              </div>
              <div style="float:left; margin-top:0px; width:350px;">
                <div class="DO_download" style="margin-top:0px; margin-left:0px; "><a target="_blank" href="<?php echo $this->_tpl_vars['design_content']['upload_jpg']; ?>
" style="line-height:22px;" >
                  <div class="button">
                    <div class="buttonContent">
                      <button style="width:60px;">JPG下载</button>
                    </div>
                  </div>
                  </a></div>
              </div>
            </div>
            <!--<div class="sIE_r_img" style="height:36px; width:350px; margin-top:36px;">
              <div style="float:left; width:350px; height:atuo;"> 
                <img src="sss.jpg" width="224px" height="224px" />
                <iframe name="yframecdr" src="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/unfinishdesign/content_upload_cdr" style="border:none; width:185px; height:185px;"></iframe>
              </div>
              <div style="float:left; margin-top:0px;">
                
              </div>
            </div>-->
          </div>
          
        </div>
      
      

      <?php if ($this->_tpl_vars['user_hidden']['group_id'] == '53' || $this->_tpl_vars['user_hidden']['group_id'] == '50' || $this->_tpl_vars['user_hidden']['group_id'] == '5' || $this->_tpl_vars['user_hidden']['group_id'] == '68'): ?>
      
      
      <?php if ($this->_tpl_vars['stock_manage']['status'] != 4): ?>
      <div class="sIE_l_02" style="margin-top:20px;">
      
        <!--<div class="button" style="margin-left:70%; margin-right:5px;">
          <div class="buttonContent">
          
            <button id="design_content_save" value="1" name="design_content_save"  >确定保存</button>
          </div>
        </div>-->
        
        <div class="button" style="margin-right:5px; float:right; margin-right:10%;">
          <div class="buttonContent">
            <button class="close">取消</button>
          </div>
        </div>
        <?php if ($this->_tpl_vars['all_design'] != 1): ?>
        <div class="button" style="margin-right:5px; float:right;">
          <div class="buttonContent">
            <button id="design_content_callback<?php echo $this->_tpl_vars['design_content']['id']; ?>
" value="3" name="design_content_callback"  >返回未完成</button>
          </div>
        </div>
         <div class="button" style="margin-right:5px; float:right;">
          <div class="buttonContent">
            <button id="design_content_discard<?php echo $this->_tpl_vars['design_content']['id']; ?>
" value="1" name="design_content_verify"  >废弃</button>
          </div>
        </div>
        <div class="button" style="margin-right:5px; float:right;">
          <div class="buttonContent">
            <button id="design_content_verify<?php echo $this->_tpl_vars['design_content']['id']; ?>
" value="2" name="design_content_verify"  >通过审核</button>
          </div>
        </div>
		  <?php if ($this->_tpl_vars['user_name'] == 'admin'): ?>
		  <div class="button" style="margin-right:5px; float:right;">
			  <div class="buttonContent">
				  <button id="design_content_verify1<?php echo $this->_tpl_vars['design_content']['id']; ?>
" value="4" name="design_content_verify"  >仅通过审核</button>
			  </div>
		  </div>
		  <?php endif; ?>

		  <?php endif; ?>
      </div>
      <?php else: ?>
      
      <div class="sIE_l_02" style="margin-top:20px;">
      
        <div class="button" style="margin-right:5px; float:right;">
          <div class="buttonContent">
            <button class="close">取消</button>
          </div>
        </div>
		  <?php if ($this->_tpl_vars['user_name'] == 'admin' && $this->_tpl_vars['reviewed'] == 1): ?>
		  <div class="button" style="margin-right:5px; float:right;">
			  <div class="buttonContent">
				  <button id="design_content_reviewed<?php echo $this->_tpl_vars['design_content']['id']; ?>
" value="5" name="design_content_verify"  >通过审核</button>
			  </div>
		  </div>
		  <?php endif; ?>
		  <?php if ($this->_tpl_vars['all_design'] != 1): ?>
        <div class="button" style="margin-right:5px; float:right;">
          <div class="buttonContent">
            <button id="design_content_callback<?php echo $this->_tpl_vars['design_content']['id']; ?>
" value="3" name="design_content_callback"  >返回未完成</button>
          </div>
        </div>
		  <?php endif; ?>
      </div>
     <?php endif; ?> 
      
      <?php else: ?>
          
        <div class="button" style="margin-left:90%; margin-right:5px;">
          <div class="buttonContent">
            <button class="close">取消</button>
          </div>
        </div>
      </div>
      <?php endif; ?>
    
    </div> 
  </div>
</div>
<div class="formBar">
  <ul>
    <li> </li>
    <li> </li>
  </ul>
</div>
</div>

<!-- {literal} --> 
<script type="text/javascript">
$(document).ready(function()  
{
	$("#design_content_save<?php echo $this->_tpl_vars['design_content']['id']; ?>
").click(function (){
		$("#submit_value").val('1');
		$("#info_form<?php echo $this->_tpl_vars['design_content']['id']; ?>
").submit();
	});
	
	$("#design_content_callback<?php echo $this->_tpl_vars['design_content']['id']; ?>
").click(function (){
		$("#submit_value").val('3');
		$("#info_form<?php echo $this->_tpl_vars['design_content']['id']; ?>
").submit();
	});
	
	$("#design_content_discard<?php echo $this->_tpl_vars['design_content']['id']; ?>
").click(function (){
		$("#submit_value").val('1');
		$("#info_form<?php echo $this->_tpl_vars['design_content']['id']; ?>
").submit();
	});

	$("#design_content_reviewed<?php echo $this->_tpl_vars['design_content']['id']; ?>
").click(function (){
		$("#submit_value").val('5');
		$("#info_form<?php echo $this->_tpl_vars['design_content']['id']; ?>
").submit();
	});

	$("#design_content_verify<?php echo $this->_tpl_vars['design_content']['id']; ?>
,#design_content_verify1<?php echo $this->_tpl_vars['design_content']['id']; ?>
").click(function (){
		var url="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/uncheckdesign/count_price";
		var id=<?php echo $this->_tpl_vars['design_content']['id']; ?>
;
		var cm_w=$("#cm_w_content").val();
		var cm_h=$("#cm_h_content").val();
		var design_name=$("#design_content_name").val();
		var value=$(this).val();
		if(design_name.indexOf("Vinyl Heat")!=-1 || design_name.indexOf("Hot-Fix")!=-1 || design_name.indexOf("Hotfix")!=-1 || design_name.indexOf("Printable Heat")!=-1){
			$.ajax({
				async: false,
				type: "POST",
				url: url,
				dataType: "json",
				data: {id:id,cm_w:cm_w,cm_h:cm_h,design_name:design_name},
				success: function (data) {
					if(data.cost_coefficient>data.web_coefficient_max || data.cost_coefficient<data.web_coefficient_min){
						var cost_piece="单片成本报价："+data.piece_cost_price;
						var customer_piece="单片客户报价："+data.piece_web_price;
						var coefficient="成本报价系数："+data.cost_coefficient+"("+data.web_coefficient_max+"~"+data.web_coefficient_min+")";
						var result = confirm(cost_piece+"\n"+customer_piece+"\n"+coefficient);
						if (result==true){
							$("#submit_value").val(value);
							$("#info_form<?php echo $this->_tpl_vars['design_content']['id']; ?>
").submit();
						}
					}else{
						$("#submit_value").val(value);
						$("#info_form<?php echo $this->_tpl_vars['design_content']['id']; ?>
").submit();
					}
				}
			});
		}else{
			$("#submit_value").val(value);
			$("#info_form<?php echo $this->_tpl_vars['design_content']['id']; ?>
").submit();
		}

	});
	
	$("#jpg_upload_submit").click(function (){
		//alert('1111');
		$("#upload_jpg").submit();
	});
	
	$("#submit_form<?php echo $this->_tpl_vars['design_content']['id']; ?>
").click(function () {
		$("#info_form<?php echo $this->_tpl_vars['design_content']['id']; ?>
").submit();
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
	
	//设计内容
	$("#inch_w_content").bind("input propertychange", function() {
		//alert($(this).val());
		var cm_w = $(this).val() * 2.54;
		if(cm_w != ''){
			cm_w = cm_w.toFixed(2);
		}
		$("#cm_w_content").val(cm_w);
		$("#cm_w1").val(cm_w);
	});
	
	$("#inch_h_content").bind("input propertychange", function() {
		//alert($(this).val());
		var cm_h = $(this).val() * 2.54;
		if(cm_h != ''){
			cm_h = cm_h.toFixed(2);
		}
		
		$("#cm_h_content").val(cm_h);
		$("#cm_h1").val(cm_h);
	});
	
	$("#cm_w_content").bind("input propertychange", function() {
		//alert($(this).val());
		var inch_w = $(this).val() / 2.54;
		
		if(inch_w != ''){
			inch_w = inch_w.toFixed(2);
		}
		
		$("#inch_w_content").val(inch_w);
		$("#inch_w1").val(inch_w);
	});
	
	$("#cm_h_content").bind("input propertychange", function() {
		//alert($(this).val());
		var inch_h = $(this).val() / 2.54;
		if(inch_h != ''){
			inch_h = inch_h.toFixed(2);
		}
		$("#inch_h_content").val(inch_h);
		$("#inch_h1").val(inch_h);
	});
	//end
	
    
    $("#material_select").change(
    	function()
    	{
    		//获取id为select的下拉框选中的值
    	    var a = $("#material_select").val();
    	    var opti = "<option value=\"\"></option>";
			if(a != ''){
				$.ajax({
					url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/get_material_infomation-material_name-'+a+'.html',//通过Ajax取数据的目标页面
					type:'get',//方法，还可以是"post"
					dataType:'json',//数据类型，还有其它的，详见jQuery手册
					success:function(locals)//成功后执行的语句，这里是一个函数，“locals”是返回的数据
					{
						//alert(locals.result);
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
		var color = $("#material_info_c_color").val();
		$.ajax({
			url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/get_material_c_infomation-material_name-'+a+'-material_color-'+color+'.html',//通过Ajax取数据的目标页面
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
	
	var row_number = 0 ;
	$("#insert_material1").click(function (){
		
		var material_name = $("#material_select").val();
		var size_width = $("#size_width").val();
		var size_height = $("#size_height").val();
		var color = $("#material_info_color").val();
		var quantity = $("#material_quantity").val();
		var s01 = $("#sIE_size01").val();
		var size = size_width+"*"+size_height;
		var m_unit = '';
		if(s01 == '1'){
			m_unit = 'inch';
		}
		if(s01 == '2'){
			m_unit = 'cm';
		}
		
		$.ajax({
			url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/insert_table_design_content_material',//通过Ajax取数据的目标页面
			type:'get',//方法，还可以是"post"
			data:{'material_name':material_name,'material_color':color,'material_size':size,'material_quantity':quantity},
			dataType:'json',//数据类型，还有其它的，详见jQuery手册
			success:function(locals)//成功后执行的语句，这里是一个函数，“locals”是返回的数据
			{
				//alert(locals);
				var table_value = "<tr> <td>"+material_name+"<input type='hidden' id='row_number' value='"+row_number+"' /><input type='hidden' name='materials["+row_number+"][material_name]' value='"+material_name+"' /></td> <td>"+size_width+"*"+size_height+"  "+m_unit+"<input type='hidden' name='materials["+row_number+"][size_width]' value='"+size_width+"' /><input type='hidden' name='materials["+row_number+"][size_height]' value='"+size_height+"' /><input type='hidden' name='materials["+row_number+"][size]' value='"+size+"' /><input type='hidden' name='materials["+row_number+"][m_unit]' value='"+m_unit+"' /></td> <td>"+color+"<input type='hidden' name='materials["+row_number+"][color]' value='"+color+"' /></td> <td>"+quantity+"<input type='hidden' name='materials["+row_number+"][quantity]' value='"+quantity+"' /></td><td onClick='getDel(this,"+locals+")'><a href='#'>删除</a></td></tr>";
				$("#material_table").append(table_value);   //为table追加一个tr(下拉项)
			}
		});
		
		row_number++;    
	});
	
	$("#insert_material2").click(function (){
		var material_name = $("#material_select").val();
		
		var color = $("#material_info_c_color").val();
		var quantity = $("#material_c_quantity").val();
		
		var size = $("#material_c_size").val();
		var size_text = $("#material_c_size").find("option:selected").text(); 
		
		
		$.ajax({
			url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/insert_table_design_content_material',//通过Ajax取数据的目标页面
			type:'get',//方法，还可以是"post"
			data:{'material_name':material_name,'material_color':color,'material_size':size,'material_quantity':quantity},
			dataType:'json',//数据类型，还有其它的，详见jQuery手册
			success:function(locals)//成功后执行的语句，这里是一个函数，“locals”是返回的数据
			{
				var table_value = "<tr> <td>"+material_name+"<input type='hidden' id='row_number' value='"+row_number+"' /><input type='hidden' name='materials["+row_number+"][material_name]' value='"+material_name+"' /></td> <td>"+size_text+"<input type='hidden' name='materials["+row_number+"][size]' value='"+size+"' /></td> <td>"+color+"<input type='hidden' name='materials["+row_number+"][color]' value='"+color+"' /></td> <td>"+quantity+"<input type='hidden' name='materials["+row_number+"][quantity]' value='"+quantity+"' /></td><td onClick='getDel(this,"+locals+")'><a href='#'>删除</a></td></tr>";
				$("#material_table").append(table_value);   //为table追加一个tr(下拉项)
			}
		});
		 
	    row_number++;    
	});
	
});

function getDel(k,row){
	//alert(row);
	$.ajax({
			url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/delete_design_content_material',//通过Ajax取数据的目标页面
			type:'get',//方法，还可以是"post"
			data:{'id':row},
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