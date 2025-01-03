<?php /* Smarty version 2.6.22, created on 2023-10-08 09:19:55
         compiled from unfinishdesign/design.html */ ?>
<script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/cstown_Sys.js" type="text/javascript"></script>
<link href="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/css/cstown_sys.css" rel="stylesheet" type="text/css" media="screen"/>
<!--  批量上传调用-->     
<link rel="stylesheet" type="text/css" href="http://<?php echo $this->_tpl_vars['host']; ?>
/js/diyUpload/css/webuploader.css">
<link rel="stylesheet" type="text/css" href="http://<?php echo $this->_tpl_vars['host']; ?>
/js/diyUpload/css/diyUpload.css">
<script type="text/javascript" src="http://<?php echo $this->_tpl_vars['host']; ?>
/js/diyUpload/js/webuploader.html5only.min.js"></script>
<script type="text/javascript" src="http://<?php echo $this->_tpl_vars['host']; ?>
/js/diyUpload/js/diyUpload.js"></script>
<!--  批量上传调用--> 

<div class="pageContent">
  <div class="stkInfEnter" layoutH="100" style="width:98%; margin-left:10px;">
    <div class="sIE_title">设计订单</div>
    <div class="sIEK" style="width:65%;">

        <div class="sIE_l" style="width:740px;">
          <div class="sIE_l">
            
            <div style="float:left; margin-bottom:5px;">
              <div class="sIE_l_01_title">业务员:</div>
              <input type="text" class="sIE_No" style="width:100px;"  readonly="readonly" value="<?php echo $this->_tpl_vars['design']['salesman_user_name']; ?>
"/>
            </div>
            <div style="float:left; margin-bottom:5px;">
              <div class="sIE_l_01_title">时间:</div>
              <input type="text" class="sIE_No" style="width:100px;"  readonly="readonly" value="<?php echo $this->_tpl_vars['design']['design_date']; ?>
"/>
            </div>
            <div style="float:left; margin-bottom:5px;">
              <div class="sIE_l_01_title">出图周期:</div>
              <input type="text" class="sIE_No" style="width:100px;"  readonly="readonly" value="<?php echo $this->_tpl_vars['design']['make_pic_time_name']; ?>
"/>
            </div>
            <div style="float:left; margin-bottom:5px; <?php if ($this->_tpl_vars['design']['design_category'] == 11): ?>display:none; <?php endif; ?> ">
            <div class="sIE_l_01_title">分版数量:</div>
            <input type="text" class="sIE_No" name="design_NO" style="width:100px;" readonly="readonly "id="design_NO" value="<?php echo $this->_tpl_vars['design']['design_NO']; ?>
" />
          </div>
           <div style="float:left; margin-bottom:5px; <?php if ($this->_tpl_vars['design']['design_category'] == 11): ?>display:none; <?php endif; ?> ">
            <div class="sIE_l_01_title">额外颜色数量:</div>
            <input type="text" class="sIE_No" name="color_date" style="width:100px;" readonly="readonly "id="color_date" value="<?php echo $this->_tpl_vars['design']['color_date']; ?>
"  />
          </div>
          <div style="float:left; margin-bottom:5px;">
            <div class="sIE_l_01_title">客户代码:</div>
            <input type="text" name="customer_code" style="width:100px;" value="<?php echo $this->_tpl_vars['design']['customer_code']; ?>
" class="sIE_No" readonly="readonly" />
          </div>
          <div style="float:left; margin-bottom:5px;">
            <div class="sIE_l_01_title">客户名:</div>
            <input type="text" name="customer_name" style="width:100px;" value="<?php echo $this->_tpl_vars['design']['customer_name']; ?>
" class="sIE_No"  readonly="readonly" />
          </div>
          <div style="float:left; margin-bottom:5px;">
            <div class="sIE_l_01_title">公司:</div>
            <input type="text" name="customer_company" style="width:100px;" value="<?php echo $this->_tpl_vars['design']['customer_company']; ?>
" class="sIE_No"  readonly="readonly" />
          </div>
          
          </div>
          
          <textarea class="add01_textarea" readonly="readonly" onfocus="if(this.value=='销售备注')this.value='';"  style="width:260px; height:80px;"><?php if ($this->_tpl_vars['design']['note']): ?><?php echo $this->_tpl_vars['design']['note']; ?>
<?php else: ?>销售备注<?php endif; ?></textarea>
          
          <div class="sIE_l_02" style="margin-top:20px; width:96%;">
          <table cellspacing="0" class="sIE_l_02Tab">
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
          	 <?php if ($this->_tpl_vars['design']['design_name'] == 'Artwork Vinyl Heat Transfer Customization' || $this->_tpl_vars['design']['design_name'] == 'Artwork Printable Heat Transfer Customization' || $this->_tpl_vars['design']['design_name'] == 'Custom Vinyl Heat Transfer' || $this->_tpl_vars['design']['design_name'] == 'Custom Printable Heat Transfer'): ?>
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
           <th>Proportion Back2</th>
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
           <td><?php if ($this->_tpl_vars['di']['full_color']): ?>1<?php endif; ?></td>
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
           <td><?php if ($this->_tpl_vars['di']['proportion_back'] == 0): ?>不去除<?php else: ?>去除<?php endif; ?></td>
           <td><?php if ($this->_tpl_vars['di']['proportion_back2'] == 0): ?>不去除<?php else: ?>去除<?php endif; ?></td>
           </tr>
          	 <?php endforeach; endif; unset($_from); ?>
          	 <?php endif; ?>   
          	 <!-- 钻上传 -->   
          	 <?php if ($this->_tpl_vars['design']['design_name'] == 'Custom Hot-Fix Heat Transfer' || $this->_tpl_vars['design']['design_name'] == 'Artwork Hotfix Heat Transfer Customization'): ?>
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
           <th>Proportion Back</th>
           <th>Proportion Back2</th>
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
           <td><?php if ($this->_tpl_vars['di']['proportion_back'] == 0): ?>不去除<?php else: ?>去除<?php endif; ?></td>
           <td><?php if ($this->_tpl_vars['di']['proportion_back2'] == 0): ?>不去除<?php else: ?>去除<?php endif; ?></td>
           </tr>
          	 <?php endforeach; endif; unset($_from); ?>
          	 <?php endif; ?>  
           </table>    
          </div>
          <div class="sIE_l" style="width:260px;">
          <div style="float:left; margin-bottom:5px; margin-left:-20px;">
              <div class="sIE_l_01_title">设计名称:</div>
              <input type="text" class="sIE_No" style="width:120px;"   readonly="readonly" value="<?php echo $this->_tpl_vars['design']['design_name']; ?>
"/>
            </div>
            <div style="float:left; margin-bottom:5px; margin-left:-20px;">
              <div class="sIE_l_01_title">设计类别:</div>
              <input type="text" class="sIE_No" style="width:120px;"  id="stock_code" readonly="readonly" newid="<?php echo $this->_tpl_vars['design']['design_category']; ?>
" value="<?php echo $this->_tpl_vars['design']['quotation_name']; ?>
"/>
            </div>
            <div style="float:left; margin-bottom:5px; margin-left:-20px;">
              <div class="sIE_l_01_title">设计编号:</div>
              <input type="text" class="sIE_No" style="width:120px;"  readonly="readonly" value="<?php echo $this->_tpl_vars['design']['design_code']; ?>
"/>
              <input type="hidden" name="design_content_count" id="design_content_count" value="<?php echo $this->_tpl_vars['design_content_count']; ?>
" />
            </div>
            <?php if ($this->_tpl_vars['design']['design_category'] != 13): ?>
                <div class="sIE_l_01"  style="margin-left:10px; width:260px;">
                  <div class="sIE_l_01_title" style="line-height:22px; height:100px; width:50px;margin-left:0px">尺寸:</div>
                  <div class="sIE_r01">
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

      </div>
      
      
      
      <?php if ($this->_tpl_vars['design']['design_category'] != 13): ?>
       <div class="sIE_l_02" style="margin-bottom:20px;">
              <?php if ($this->_tpl_vars['materials_select'] != ''): ?>
              <table cellspacing="0" class="sIE_l_02Tab">
                <tr>
                  <th>材料</th>
                  <th>颜色</th>
                  <th>尺寸</th>
                  <th>数量</th>
                </tr>
              
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
               
              </table>
               <?php endif; ?>
       </div>
      <?php endif; ?>
      
      </div>
      
     <div class="sIE_r" style="height:360px; width:360px; margin-top:20px;">
    
        <div class="sIE_r_img" style="width:360px; height:360px;">
        <?php if ($this->_tpl_vars['design']['upload_cdr'] && ! strstr ( $this->_tpl_vars['design']['upload_cdr'] , '.cdr' )): ?>
        <img style="width:<?php echo $this->_tpl_vars['design']['file_width']; ?>
px; height:<?php echo $this->_tpl_vars['design']['file_bili']; ?>
px;" src="<?php echo $this->_tpl_vars['design']['upload_file']; ?>
" width="<?php echo $this->_tpl_vars['design']['file_width']; ?>
px" height="<?php echo $this->_tpl_vars['design']['file_bili']; ?>
px"  />
        <img style="width:<?php echo $this->_tpl_vars['design']['cdr_width']; ?>
px; height:<?php echo $this->_tpl_vars['design']['cdr_bili']; ?>
px;" src="<?php echo $this->_tpl_vars['design']['upload_cdr']; ?>
" width="<?php echo $this->_tpl_vars['design']['cdr_width']; ?>
px" height="<?php echo $this->_tpl_vars['design']['cdr_bili']; ?>
px"  />
        <?php else: ?>
        <img style="width:<?php echo $this->_tpl_vars['design']['file_width']; ?>
px; height:<?php echo $this->_tpl_vars['design']['file_bili']; ?>
px;" src="<?php echo $this->_tpl_vars['design']['upload_file']; ?>
" width="<?php echo $this->_tpl_vars['design']['file_width']; ?>
px" height="<?php echo $this->_tpl_vars['design']['file_bili']; ?>
px"  />
        <?php endif; ?>	
        </div>
        <div class="DO_download" style="margin-top:0px; margin-left:20px;"><a target="_blank" href="<?php echo $this->_tpl_vars['design']['upload_file']; ?>
" style="line-height:22px;" >
          <div class="button">
            <div class="buttonContent">
              <button style="width:60px;">下载</button>
            </div>
          </div>
          </a>
        </div>
        <?php if (strstr ( $this->_tpl_vars['design']['design_code'] , 'OFC' )): ?>
        <div class="DO_download" style="margin-top:0px; margin-left:20px;"><a target="_blank" href="<?php echo $this->_tpl_vars['design']['upload_cdr']; ?>
" style="line-height:22px;" >
          <div class="button">
            <div class="buttonContent">
              <button style="width:60px;">下载2</button>
            </div>
          </div>
          </a>
        </div>
         <?php endif; ?>
         <?php if (! strstr ( $this->_tpl_vars['design']['design_code'] , 'OFC' )): ?>
        <div class="sIE_r_img" style="height:36px; width:360px;  margin-left:20px; margin-top:20px;">
            <div style="float:left; width:360px; height:36px;">
              <?php if ($this->_tpl_vars['design']['upload_cdr'] != ""): ?>
               CDR：<a href="<?php echo $this->_tpl_vars['design']['upload_cdr']; ?>
"><font color="blue" size="7">下载查看</font></a>
              <?php else: ?>
              
              <?php endif; ?>   
            </div>
        </div>
		<?php endif; ?>   
     
  
     
      </div>
      
      
      
      <div class="sIEK" style="margin-top:100px;">
    
    
      <div class="divider" style="margin-top:20px;">divider</div>
      <div class="DesignContent" style="margin-top:0px;">
      
        <div id="DC_01" class="DC">
          <div class="sIE_title">设计内容</div>
        </div>
       
        <div class="sIEK" style="width:65%;">
          <div class="sIE_l" style="width:420px;">
            <form method="post" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, navTabAjaxDone)" id="info_form<?php echo $this->_tpl_vars['design_content']['id']; ?>
">
            <input type="hidden" name="design_user_name" value="<?php echo $this->_tpl_vars['design']['design_user_name']; ?>
"/>
             <input type="hidden" name="salesman_name" value="<?php echo $this->_tpl_vars['design']['salesman_user_name']; ?>
"/>
            <div style="float:left; width:210px;">
              <div style="float:left; margin-bottom:5px;">
                <div class="sIE_l_01_title">设计名称:</div>
                <input type="hidden" name="design_id" value="<?php echo $this->_tpl_vars['design']['id']; ?>
" />
                <input type="hidden" name="customer_code" value="<?php echo $this->_tpl_vars['design']['customer_code']; ?>
" />
                <input type="hidden" id="design_content_id" name="design_content_id" value="<?php echo $this->_tpl_vars['design_content']['id']; ?>
" />
                <input style="width:120px;" type="text" class="sIE_No"  name="design_content_name" id="design_content_name" readonly="readonly" value="<?php if ($this->_tpl_vars['design_content']['design_content_name']): ?><?php echo $this->_tpl_vars['design_content']['design_content_name']; ?>
<?php else: ?><?php echo $this->_tpl_vars['design']['design_name']; ?>
<?php endif; ?>" />
              </div>
              <div style="float:left; margin-bottom:5px;">
                <div class="sIE_l_01_title">设计编号:</div>
                <input style="width:120px;" type="text" class="sIE_No"  name="design_content_code" id="design_content_code" readonly="readonly" value="<?php if ($this->_tpl_vars['design_content']['design_content_code']): ?><?php echo $this->_tpl_vars['design_content']['design_content_code']; ?>
<?php else: ?><?php echo $this->_tpl_vars['design_content_code']; ?>
<?php endif; ?>"/>
              </div>
              <div style="float:left; margin-bottom:5px;">
                <div class="sIE_l_01_title">时间:</div>
                <input style="width:120px;" type="text" class="sIE_No"  name="design_content_date" id="design_content_date" readonly="readonly" value="<?php if ($this->_tpl_vars['design_content']['design_content_date']): ?><?php echo $this->_tpl_vars['design_content']['design_content_date']; ?>
<?php else: ?><?php echo $this->_tpl_vars['today']; ?>
<?php endif; ?>"/>
              </div>
              <div style="float:left; margin-bottom:5px;">
                <div class="sIE_l_01_title">样图/版图:</div>
                <input type="radio"  name="design_content_pic" <?php if ($this->_tpl_vars['design_content']['design_content_pic'] == 1): ?>checked="checked"<?php endif; ?> value=1 />样图
                <input type="radio"  name="design_content_pic" <?php if ($this->_tpl_vars['design_content']['design_content_pic'] == 2): ?>checked="checked"<?php endif; ?> value=2 />版图
              </div>
              <?php if ($this->_tpl_vars['design']['design_category'] != 13): ?>  
			  <div class="sIE_l_01_title">是否分版:</div>
              <select name="board_status"  id="board_status" style="width:50px;" onchange="board_change();">
                  <option value="0" <?php if ($this->_tpl_vars['design_content']['board_status'] == 0): ?>selected="selected"<?php endif; ?>>否</option>
                  <option value="1" <?php if ($this->_tpl_vars['design_content']['board_status'] == 1): ?>selected="selected"<?php endif; ?>>是</option>
              </select>
            <div style="float:left; margin-bottom:5px; <?php if ($this->_tpl_vars['design']['design_category'] != 11): ?> display:none;<?php endif; ?>" id="other_image_div">
                <div class="sIE_l_01_title">添加效果图:</div>
                <select name="other_image"  id="other_image" style="width:50px;" onchange="other_image_change();">
                    <option value="0"<?php if ($this->_tpl_vars['design_content']['other_image'] == 0): ?>selected="selected"<?php endif; ?>>否</option>
                  <option value="1" <?php if ($this->_tpl_vars['design_content']['other_image'] == 1): ?>selected="selected"<?php endif; ?>>是</option>
                </select>
            </div>
            <?php endif; ?>
              <div style="float:left; margin-bottom:5px; margin-top:5px;">
             <textarea class="add01_textarea" onfocus="if(this.value=='设计备注')this.value='';" style="width:200px; height:66px; margin-top:0px;" name="design_note"><?php if ($this->_tpl_vars['design_content']['design_note']): ?><?php echo $this->_tpl_vars['design_content']['design_note']; ?>
<?php else: ?>设计备注<?php endif; ?></textarea>
              </div>
             
            </div>  
			
            <?php if ($this->_tpl_vars['design']['design_category'] != 13): ?>
            <div style="float:right; width:210px;">
                <div class="sIE_l_01" style="width:210px;">
                  <div class="sIE_l_01_title" style="width:80px; height:100px; text-align:right;">尺寸: &nbsp;</div>
                  <div class="sIE_r01" style="width:130px;">
                    <div class="sIE_r01_div">
                      <input type="text"  class="sIE_No" style="width:55px;" id="inch_w_content" name="content_inch_w" value="<?php echo $this->_tpl_vars['design_content']['content_inch_w']; ?>
"/>
                      <div class="sIE_r01_div_r" style="margin-top:5px;">inch W</div>
                    </div>
                    <div class="sIE_r01_div">
                      <input type="text"  class="sIE_No" style="width:55px;" id="inch_h_content" name="content_inch_h" value="<?php echo $this->_tpl_vars['design_content']['content_inch_h']; ?>
"/>
                      <div class="sIE_r01_div_r" style="margin-top:5px;">inch H</div>
                    </div>
                    <div class="sIE_r01_div">
                      <input type="text"  class="sIE_No" style="width:55px;" id="cm_w_content" name="content_cm_w" value="<?php echo $this->_tpl_vars['design_content']['content_cm_w']; ?>
" />
                      <div class="sIE_r01_div_r" style="margin-top:5px;">cm W</div>
                    </div>
                    <div class="sIE_r01_div">
                      <input type="text"  class="sIE_No" style="width:55px;" id="cm_h_content" name="content_cm_h" value="<?php echo $this->_tpl_vars['design_content']['content_cm_h']; ?>
" />
                      <div class="sIE_r01_div_r" style="margin-top:5px;">cm H</div>
                    </div>
                  </div>
                </div>
                <div class="sIE_l_01" style="width:210px;">
                  <div class="sIE_l_01_title" style="width:80px; height:100px; text-align:right;">边框尺寸: &nbsp;</div>
                  <div class="sIE_r01" style="width:130px;">
                    <div class="sIE_r01_div">
                      <input type="text"  class="sIE_No" style="width:55px;" id="biankuang_w" readonly="readonly" name="biankuang_w" value="<?php echo $this->_tpl_vars['design_content']['biankuang_w']; ?>
"/>
                      <div class="sIE_r01_div_r" style="margin-top:5px;">cm W</div>
                    </div>
                    <div class="sIE_r01_div">
                      <input type="text"  class="sIE_No" style="width:55px;" id="biankuang_h" readonly="readonly" name="biankuang_h" value="<?php echo $this->_tpl_vars['design_content']['biankuang_h']; ?>
"/>
                      <div class="sIE_r01_div_r" style="margin-top:5px;">cm H</div>
                    </div>

                  </div>
                </div>                 
              </div>
			<?php endif; ?>
              <input type="hidden" name="submit_value" value="" id="submit_value" />
            </form>
            
            <div id="unfinishdesign_error01" style="float:left; width:500px; margin-top:10px; color:#F00; display:none; font-size:12px;"></div>
            
          </div>
          <?php if ($this->_tpl_vars['design']['design_category'] != 13): ?>
          <?php if ($this->_tpl_vars['design']['quotation_name'] != '外发订单'): ?>
          <div class="sIEK" style=" width:22%;">
            <div class="sIE_l_01" style="margin-top:10px;width:100%;">
              <div class="sIE_l_01_title" style="width:40px;">材料:</div>
              <div class="sIE_r01" style="width:140px;">
                <div class="sIE_r01_div" style="width:140px;">
                  <select class="sIE_r01_Select" id="material_select_design_add" style="width:140px;">
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
            <div class="sIE_l_02" id="material_info_design_add" style="display:none;">
              <div class="sIE_l_02_div">
                <div class="sIE_l_01_title" style="width:40px;">颜色:</div>
                <select id="material_info_color_design_add" class="sIE_r01_Select" style="width:140px;">
                </select>
              </div>
              <div class="sIE_l_02_div">
                <div class="sIE_l_01_title" style="width:40px;">尺寸:</div>
                <input type="text" class="sIE_No" id="size_width_design_add" style="width:75px;"  />
                <div class="sIE_No" style="width:54px; margin-left:5px;">MM W</div>
              
              </div>
              <div class="sIE_l_02_div">
                <div class="sIE_l_01_title" style="width:40px;">&nbsp;</div>
                <input type="text" class="sIE_No" id="size_height_design_add"  style="width:75px;" />
                <div class="sIE_No" style="width:54px; margin-left:5px;">MM H</div>
               
              </div>
              <div class="sIE_l_02_div">
                <div class="sIE_l_01_title" style="width:40px;">&nbsp;</div>
                <input type="text" class="sIE_No" id="size_inch_width_design_add"  style="width:75px;" />
                <div class="sIE_No" style="width:54px; margin-left:5px;">inch W</div>
               
              </div>
              <div class="sIE_l_02_div">
                <div class="sIE_l_01_title" style="width:40px;">&nbsp;</div>
                <input type="text" class="sIE_No" id="size_inch_height_design_add"  style="width:75px;" />
                <div class="sIE_No" style="width:54px; margin-left:5px;">inch H</div>
               
              </div>
              <div class="sIE_l_02_div">
                <div class="sIE_l_01_title" style="width:40px;">数量:</div>
                <input type="text"  class="sIE_size" id="material_quantity_design_add" readonly="readonly" style="width:136px;" />
              </div>
              <button type="button" id="insert_material1_design_add">添加材料</button>
            </div>
            <div class="sIE_l_02" id="material_info_c_design_add" style="display:none;">
              <div class="sIE_l_02_div">
                <div class="sIE_l_01_title" style="width:40px;">颜色:</div>
                <select id="material_info_c_color_design_add" class="sIE_r01_Select" style="width:140px;">
                </select>
              </div>
              <div class="sIE_l_02_div">
                <div class="sIE_l_01_title" style="width:40px;">尺寸:</div>
                <select class="sIE_r01_Select" id="material_c_size_design_add" style="width:140px;">
                  <option>请选择...</option>
                </select>
              </div>
              <div class="sIE_l_02_div">
                <div class="sIE_l_01_title" style="width:40px;">数量:</div>
                <input type="text"  class="sIE_size" id="material_c_quantity_design_add" style="width:133px;" />
              </div>
              <button type="button" id="insert_material2_design_add">添加材料</button>
            </div>
            
            <div class="sIE_l_02" id="material_info_patch_design_add" style="display:none;">
            	<div class="sIE_l_02_div" style="position:relative;">
                  <div class="sIE_l_01_title" style="width:40px;">颜色:</div>
                  <input type="text"  class="sIE_size" id="material_pantong_color" style="width:136px;" />
                  <div id="pantong_select_list" class="pantong_select_list"></div>
                </div>
                <button type="button" id="insert_material_patch_design_add">添加材料</button>
            </div>
            
          </div>
              <div style=" float:left;margin-top:10px; width:230px;">
                  <div class="sIE_l_01_title" style="width:70px;">材料录入:</div>
                  <textarea name="add_materials_textarea" id="add_materials_textarea" style="width:140px; height:140px;"></textarea>
                  <button type="button" id="insert_materials_textarea" style="margin-left:70px;">确定</button>
                  <div id="text_err_design" class="sIE_l" style="width:400px; color:#F00; display:none"></div>
              </div>
          <?php endif; ?>
         <?php endif; ?>
         
         <?php if ($this->_tpl_vars['design']['design_category'] != 13): ?>     
          <div class="sIE_l_02" style="margin-bottom:20px; width:70%;">
               <?php if ($this->_tpl_vars['design']['quotation_name'] != '外发订单'): ?>
                <table cellspacing="0" class="sIE_l_02Tab" id="material_table_design_add" width="60%">
                  <tr>
                    <th width="8%">材料</th>
                    <th width="7%">颜色</th>
                    <th width="4%">尺寸</th>
                    <th width="5%">数量</th>
                    <th width="3%">操作</th>
                  </tr>
                  <?php if ($this->_tpl_vars['materials_content_select'] != ''): ?>
                  <?php $_from = $this->_tpl_vars['materials_content_select']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ms']):
?>
                  <tr class="uf_tableClass02">
                    <td><?php echo $this->_tpl_vars['ms']['material_name']; ?>
</td>
                    <td><?php echo $this->_tpl_vars['ms']['material_color']; ?>
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
                    <td onClick="getDel(this,<?php echo $this->_tpl_vars['ms']['id']; ?>
)"><a href="#">删除</a></td>
                  </tr>
                  <?php endforeach; endif; unset($_from); ?>
                  <?php endif; ?>
                </table>
               <?php endif; ?>
       </div>
  	<?php endif; ?>
     
    <div class="sIE_r" id="board_upload_div"  style="width:750px; <?php if ($this->_tpl_vars['design_content']['board_status'] == 0): ?> display:none<?php endif; ?>">
     <!--批量图片的显示-->          
        <?php if ($this->_tpl_vars['board_list']): ?>
            <div style="width:60px; font-size:17px; color:#006">分版图:</div><br />
            <ul >
                <?php $_from = $this->_tpl_vars['board_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['val']):
?>
                    <li style="width:180px; float:left; margin-bottom:10px; " id="old_img_<?php echo $this->_tpl_vars['val']['id']; ?>
">
                        <div>
                            <img height="170px" width="170px" style="border:solid 1px  #09F;" src="<?php echo $this->_tpl_vars['val']['upload_jpg']; ?>
"  /><br />
                            <input type="text" style="width:165px; text-align:center;" readonly="readonly" value="<?php echo $this->_tpl_vars['val']['name']; ?>
" /><br />
                            <a href="<?php echo $this->_tpl_vars['val']['upload_jpg']; ?>
" target="_blank" style="color:#03F; font-size:14px; cursor:pointer;">下载jpg</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo $this->_tpl_vars['val']['upload_cdr']; ?>
" style="color:#03F; font-size:14px; cursor:pointer;">下载cdr</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" onclick="del_bulk(<?php echo $this->_tpl_vars['val']['id']; ?>
);" style="color:#F00; font-size:14px; cursor:pointer; float:right; margin-right:20px">删除</a>
                        </div>
                    </li>
                <?php endforeach; endif; unset($_from); ?>
            </ul>
        <?php endif; ?>
        <!--批量分版上传-->
        <div id="bulk_upload" ></div>
    </div> 
    <!--其他效果图上传-->
    <div class="sIE_r" id="other_image_upload_div" style="width:750px; <?php if ($this->_tpl_vars['design_content']['other_image'] == 0): ?>display:none<?php endif; ?>">
    <!--其他效果图上传-->          
        <?php if ($this->_tpl_vars['other_list']): ?>
           <div >
                <ul>
                	<div  style="width:100px; font-size:17px; color:#006">其他效果图:</div><br />
                    <?php $_from = $this->_tpl_vars['other_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['val']):
?>
                        <li style="width:180px; float:left; margin-bottom:10px; " id="old_img_<?php echo $this->_tpl_vars['val']['id']; ?>
">
                            <div>
                                <img height="170px" width="170px" style="border:solid 1px  #09F;" src="<?php echo $this->_tpl_vars['val']['upload_jpg']; ?>
"  /><br />
                                <input type="text" style="width:165px; text-align:center;" readonly="readonly" value="<?php echo $this->_tpl_vars['val']['name']; ?>
" /><br />
                                <a href="<?php echo $this->_tpl_vars['val']['upload_jpg']; ?>
" target="_blank" style="color:#03F; font-size:14px; cursor:pointer;">下载jpg</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" onclick="del_other_image(<?php echo $this->_tpl_vars['val']['id']; ?>
);" style="color:#F00; font-size:14px; cursor:pointer;float:right; margin-right:20px">删除</a>
                            </div>
                        </li>
                    <?php endforeach; endif; unset($_from); ?>
                </ul>
           </div>
        <?php endif; ?>
        <!--其他效果图上传-->
        <div id="other_image_upload"></div>
    </div> 


    </div> 
    
    <div class="sIE_r" style="width:360px; height:400px; float:left;margin-left:0px;">
			<style>
    			.sIE_r_img img{width:360px; height:360px;}
    		</style>
              <div id="image_no_2" class="sIE_r_img" style="float:left;  width:360px; height:360px;">
				
                <!--<img src="sss.jpg" width="224px" height="224px" />-->
                <iframe name="yframe_unfinish_design" src="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/unfinishdesign/two_img_upload" style="border:none; " width="360px" height="400px;"></iframe>
               </div>
 
                <!--<form action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/unfinishdesign/two_img_upload" id="upload_jpg"  target="yframe_unfinish_design" method="post" enctype="multipart/form-data" >
                  
                 <div style="float:left; width:60px; height:50px; overflow:hidden;position:relative;">
                 <input type="file" class="sIE_r_img_file" name="upload_file[]" multiple="multiple" onChange="image()" id="upload_file"  style=" opacity:0; position:relative; z-index:10; margin-top:0px;"  />
                 <input type="button" class="sIE_r_img_file" name="jpg" style=" opacity:1; width:60px; text-align:center; height:24px; position:absolute; z-index:9; margin-top:0px;" value="浏览" />
                 </div>
                 <input type="submit" id="jpg_upload_submit" value="上传JPG和CDR" style=" float:right; width:100px;" /> 
                <div id="testFileInput" class="uploadify" style="height: 30px; width: 120px; float:left; margin-top:10px;"> 
                </div>  
                 </form>-->
				 <form style="float:left; width:260px;" id="de_upload_jpg" enctype="multipart/form-data">
                    	<input type="file" name="upload_file[]" value="上传" multiple="multiple"  style="position:relative; z-index:10; margin-top:0px;" />  
                    	<input type="hidden" id="huanse" name="type" value="<?php echo $this->_tpl_vars['design']['huanse_status']; ?>
">
				</form>
				<button id="de_jpg_upload_submit">提交</button>

          <!--<div class="sIE_r_img" style="height:36px; width:360px; margin-top:36px;">
              <div id="upload_name_cdr" style="float:left; margin-top:0px; margin-left:10px;height:20px; font-size:14px; line-height:36px; width:200px;"></div>
          <div style="float:left; width:140px; height:36px;"> 
              
                <iframe name="yframe_unfinish_design_cdr" src="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/unfinishdesign/content_upload_cdr" style="border:none; " width="360px" height="38px;"></iframe>
              </div>
              <div style="float:left; margin-top:0px; width:360px;">
                <form action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/unfinishdesign/two_img_upload" id="content_upload_cdr" target="yframe_unfinish_design_cdr" method="post" enctype="multipart/form-data" >
                                  
                  <div style="float:left; width:60px; height:50px; overflow:hidden;position:relative;">
                 <input type="file" class="sIE_r_img_file" name="upload_cdr[]" id="upload_cdr" multiple="multiple" onChange="image_cdr()"  style=" opacity:0; position:relative; z-index:10; margin-top:0px;"  />
                 <input type="button" class="sIE_r_img_file" name="jpg" style=" opacity:1; width:60px; text-align:center; height:24px; position:absolute; z-index:9; margin-top:0px;" value="浏览" />
                  </div>
                 <input type="submit" id="cdr_upload_submit" value="上传CDR" style=" float:right; width:70px;" /> 
                <div id="testFileInput" class="uploadify" style="height: 30px; width: 120px; float:left; margin-top:10px;"> 
              
               </div>                 
               </form>
              </div>
            </div>-->
      </div>
	  
      <div class="sIE_l_02" style="margin-top:36px;">
        <div class="button" style="margin-left:80%; margin-right:5px;">
          <div class="buttonContent">
          
            <button id="design_content_sub<?php echo $this->_tpl_vars['design_content']['id']; ?>
" value="1" name="design_content_sub"  >确定保存</button>
          </div>
        </div>
        <div class="button" style="margin-right:5px;">
          <div class="buttonContent">
            <button id="submit_verify<?php echo $this->_tpl_vars['design_content']['id']; ?>
" value="2" name="submit_verify"  >提交审核</button>
          </div>
        </div>
        <div class="button">
          <div class="buttonContent">
            <button class="close">取消</button>
          </div>
        </div>
      </div>
  </div>
</div>
      
      

</div>
</div>
<!-- {literal} --> 
<script type="text/javascript">
	
	
	//添加分版js
	function board_change(){
		if($("#board_status").val()==1){
			$("#board_upload_div").css('display','block');
			//批量分版上传：js
			$('#bulk_upload').diyUpload({
				url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/unfinishdesign/all_fileupload',
				success:function( data ) {
				},
				error:function( err ) {
					console.info( err );	
				},
				buttonText : '批量分版图',
				chunked:true,
				// 分片大小
				chunkSize:512 * 1024,
				//最大上传的文件数量, 总文件大小,单个文件大小(单位字节);
				fileNumLimit:20,
				fileSizeLimit:500000 * 1024,
				fileSingleSizeLimit:50000 * 1024,
			
			});
		}else{
			$("#board_upload_div").css('display','none');	
		}
	}
	
	//添加其他效果图js
	function other_image_change(){
		if($("#other_image").val()==1){
			$("#other_image_upload_div").css('display','block');
			//添加其他效果图js
			$('#other_image_upload').diyUpload({
				url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/unfinishdesign/degin_other_imsge_fileuploads',
				success:function( data ) {
				},
				error:function( err ) {
					console.info( err );	
				},
				buttonText : '添加其他效果图',
				chunked:true,
				// 分片大小
				chunkSize:512 * 1024,
				//最大上传的文件数量, 总文件大小,单个文件大小(单位字节);
				fileNumLimit:10,
				fileSizeLimit:500000 * 1024,
				fileSingleSizeLimit:50000 * 1024,
			
			});
		}else{
			$("#other_image_upload_div").css('display','none');	
		}
	}

                
//修改页面时，对批量上传图片的删除
function del_bulk(id){
	$.ajax({
		url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/unfinishdesign/get_del_bulk',
		data:{'id':id},
		type:'post',
		success: function(){
			$("#old_img_"+id).remove();
		}	
	});
}

//删除其他效果图
function del_other_image(id){
	$.ajax({
		url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/unfinishdesign/del_other_image',
		data:{'id':id},
		type:'post',
		success: function(){
			$("#old_img_"+id).remove();
		}	
	});
}


function image(){
	$("#upload_name").html($("#upload_file").val())
}
function image_cdr(){
	$("#upload_name_cdr").html($("#upload_cdr").val())
}
$(document).ready(function()  
{
		//添加分版js
	$('#bulk_upload').diyUpload({
		url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/unfinishdesign/all_fileupload',
		success:function( data ) {
		},
		error:function( err ) {
			console.info( err );	
		},
		buttonText : '批量分版图',
		chunked:true,
		// 分片大小
		chunkSize:512 * 1024,
		//最大上传的文件数量, 总文件大小,单个文件大小(单位字节);
		fileNumLimit:20,
		fileSizeLimit:500000 * 1024,
		fileSingleSizeLimit:50000 * 1024,
	});

	//添加其他效果图js
	$('#other_image_upload').diyUpload({
		url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/unfinishdesign/degin_other_imsge_fileuploads',
		success:function( data ) {
		},
		error:function( err ) {
			console.info( err );	
		},
		buttonText : '添加其他效果图',
		chunked:true,
		 //分片大小
		chunkSize:512 * 1024,
		//最大上传的文件数量, 总文件大小,单个文件大小(单位字节);
		fileNumLimit:10,
		fileSizeLimit:500000 * 1024,
		fileSingleSizeLimit:50000 * 1024,
	});
	
	$("#design_content_sub<?php echo $this->_tpl_vars['design_content']['id']; ?>
").click(function (){
		if($("#stock_code").attr("newid")!=13){ 
			if($("#inch_w_content").val() == "" || $("#inch_w_content").val().indexOf('X')>=0 || $("#inch_h_content").val() == "" || $("#inch_h_content").val().indexOf('X')>=0 || $("#cm_w_content").val() == "" || $("#cm_h_content").val() == "" || $("#inch_w_content").val() == "NaN" || $("#inch_h_content").val() == "NaN" || $("#cm_w_content").val() == "NaN" || $("#cm_h_content").val() == "NaN"){
				$("#unfinishdesign_error01").css("display","block");
				$("#unfinishdesign_error01").html("尺寸为空或有特殊符号！");
			}
			else if($("#material_info_c_color_design_add").val() == ""){
				$("#unfinishdesign_error01").css("display","block");
				$("#unfinishdesign_error01").html("请选择颜色！");
			}
			else if(!$(".uf_tableClass02").is(":visible")){
					$("#unfinishdesign_error01").css("display","block");
					$("#unfinishdesign_error01").html("请添加材料项！");
			}else if($("#text_err_design").css('display')=='block'){
					alert("请修改红色文字的错误！");
			}else{
				$("#submit_value").val('1');
				var huanse=$("#huanse").val();
				$.ajax({
					url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/unfinishdesign/check_photo01',//通过Ajax取数据的目标页面
					data:{huanse:huanse},
					type:'post',//方法，还可以是"post"
					dataType:'text',//数据类型，还有其它的，详见jQuery手册
					success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
					{
						if(locals==1){
							$("#unfinishdesign_error01").css("display","none");							
							$("#info_form<?php echo $this->_tpl_vars['design_content']['id']; ?>
").submit();
						}else{
							$("#unfinishdesign_error01").css("display","block");
							$("#unfinishdesign_error01").html("请上传图片,且名称不包含空格！");
						}
					}
				});	
			}
		}else{
			$("#submit_value").val('1');
			$.ajax({
				url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/unfinishdesign/check_photo01',//通过Ajax取数据的目标页面
				data:{},
				type:'post',//方法，还可以是"post"
				dataType:'text',//数据类型，还有其它的，详见jQuery手册
				success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
				{
					if(locals==1){
						$("#unfinishdesign_error01").css("display","none");							
						$("#info_form<?php echo $this->_tpl_vars['design_content']['id']; ?>
").submit();
					}else{
						$("#unfinishdesign_error01").css("display","block");
						$("#unfinishdesign_error01").html("请上传图片,且名称不包含空格！");
						
					}
				}
			});	
		}
	});
	
	
	$("#submit_verify<?php echo $this->_tpl_vars['design_content']['id']; ?>
").click(function (){
		 var a=$("#design_NO").val();
		 var b=$("#color_date").val();
		 var c=$("#design_content_count").val();
		 var d=$("#design_content_id").val();
		 var huanse_status_id = $("#huanse_status_id").val();
		// var f = a + "+" + b;
        var e=eval('('+a + "+" + b+')');
     
       //alert(eval('('+f+')'))
		 if(d!= ""){
			 var c=c;
			 //alert(c)
		}else{
			var c=eval('('+c+"+"+1+')');
		}
		if($("#stock_code").attr("newid")!=13){ 
			/*if(e!=c){
				alert("设计数量与要求数量不等，不可提交审核！注设计数量要等于分版数量+额外颜色数量");
			}else*/ 
			if($("#inch_w_content").val() == "" || $("#inch_h_content").val() == "" || $("#cm_w_content").val() == "" || $("#cm_h_content").val() == "" || $("#inch_w_content").val().indexOf('X')>=0 || $("#inch_h_content").val() == ""){
				$("#unfinishdesign_error01").css("display","block");
				$("#unfinishdesign_error01").html("请输入尺寸！");
			}
	/*		else if($("#material_select_design_add").val() == ""){
				$("#unfinishdesign_error01").css("display","block");
				$("#unfinishdesign_error01").html("请选择材料！");
			}*/
			else if($("#material_info_c_color_design_add").val() == ""){
				$("#unfinishdesign_error01").css("display","block");
				$("#unfinishdesign_error01").html("请选择颜色！");
			}
			else if(!$(".uf_tableClass02").is(":visible")){
				$("#unfinishdesign_error01").css("display","block");
				$("#unfinishdesign_error01").html("请添加材料项！");
			}else if($("#text_err_design").css('display')=='block'){
					alert("请修改红色文字的错误！");
			}
	/*		else if($("#material_c_quantity").val() == ""){
				$("#unfinishdesign_error01").css("display","block");
				$("#unfinishdesign_error01").html("请输入数量！");
			}*/
			else{
				$("#submit_value").val('2');
				$.ajax({
					url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/unfinishdesign/check_photo01',//通过Ajax取数据的目标页面
					data:{},
					type:'post',//方法，还可以是"post"
					dataType:'text',//数据类型，还有其它的，详见jQuery手册
					success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
					{
						if(locals==1){
							$("#unfinishdesign_error01").css("display","none");							
							$("#info_form<?php echo $this->_tpl_vars['design_content']['id']; ?>
").submit();
						}else{
							$("#unfinishdesign_error01").css("display","block");
							$("#unfinishdesign_error01").html("请上传图片,且名称不包含空格！");
							
						}
					}
				});
			}

		  			
		}else{
			$("#submit_value").val('2');
			$.ajax({
				url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/unfinishdesign/check_photo01',//通过Ajax取数据的目标页面
				data:{},
				type:'post',//方法，还可以是"post"
				dataType:'text',//数据类型，还有其它的，详见jQuery手册
				success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
				{
					if(locals==1){
						$("#unfinishdesign_error01").css("display","none");							
						$("#info_form<?php echo $this->_tpl_vars['design_content']['id']; ?>
").submit();
					}else{
						$("#unfinishdesign_error01").css("display","block");
						$("#unfinishdesign_error01").html("请上传图片,且名称不包含空格！");
						
					}
				}
			});
		}
	});
	//$("#jpg_upload_submit").click(function (){
//		//alert('1111');
//		$("#upload_jpg").submit();
//	});
	
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
	
	$("#cdr_upload_submit").click(function (){
		//alert('1111');
		$("content_upload_cdr").submit();
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
		
		var w = $("#cm_w_content").val();
		var h = $("#cm_h_content").val();
		
		$("#submit_value").val('2');
			$.ajax({
				url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/unfinishdesign/biankuang_1',//通过Ajax取数据的目标页面
				data:{"w":w,"h":h},
				type:'post',//方法，还可以是"post"
				dataType:'text',//数据类型，还有其它的，详见jQuery手册
				success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
				{
                    locals=locals.split("|");
					if(parseInt(w)>parseInt(h)){
						$("#biankuang_w").val(locals[0]);
						$("#biankuang_h").val(locals[1]);
					}else{
						$("#biankuang_w").val(locals[1]);
						$("#biankuang_h").val(locals[0]);
					}
					
					
				}
		});
		
	});
	
	$("#inch_h_content").bind("input propertychange", function() {
		//alert($(this).val());
		var cm_h = $(this).val() * 2.54;
		if(cm_h != ''){
			cm_h = cm_h.toFixed(2);
		}
		
		$("#cm_h_content").val(cm_h);
		$("#cm_h1").val(cm_h);
		
		var w = $("#cm_w_content").val();
		var h = $("#cm_h_content").val();
		
		$("#submit_value").val('2');
			$.ajax({
				url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/unfinishdesign/biankuang_2',//通过Ajax取数据的目标页面
				data:{"w":w,"h":h},
				type:'post',//方法，还可以是"post"
				dataType:'text',//数据类型，还有其它的，详见jQuery手册
				success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
				{
                    locals=locals.split("|");
					
					if(parseInt(w)>parseInt(h)){
						$("#biankuang_w").val(locals[0]);
						$("#biankuang_h").val(locals[1]);
					}else{
						$("#biankuang_w").val(locals[1]);
						$("#biankuang_h").val(locals[0]);
					}
					
				}
		});		
		
	});
	
	$("#cm_w_content").bind("input propertychange", function() {
		//alert($(this).val());
		var inch_w = $(this).val() / 2.54;
		
		if(inch_w != ''){
			inch_w = inch_w.toFixed(2);
		}
		
		$("#inch_w_content").val(inch_w);
		$("#inch_w1").val(inch_w);
		
		var w = $("#cm_w_content").val();
		var h = $("#cm_h_content").val();
		
		$("#submit_value").val('2');
			$.ajax({
				url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/unfinishdesign/biankuang_3',//通过Ajax取数据的目标页面
				data:{"w":w,"h":h},
				type:'post',//方法，还可以是"post"
				dataType:'text',//数据类型，还有其它的，详见jQuery手册
				success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
				{
                    locals=locals.split("|");
					
					if(parseInt(w)>parseInt(h)){
						$("#biankuang_w").val(locals[0]);
						$("#biankuang_h").val(locals[1]);
					}else{
						$("#biankuang_w").val(locals[1]);
						$("#biankuang_h").val(locals[0]);
					}
					
				}
		});			
		
	});
	
	$("#cm_h_content").bind("input propertychange", function() {
		//alert($(this).val());
		var inch_h = $(this).val() / 2.54;
		if(inch_h != ''){
			inch_h = inch_h.toFixed(2);
		}
		$("#inch_h_content").val(inch_h);
		$("#inch_h1").val(inch_h);
		
		var w = $("#cm_w_content").val();
		var h = $("#cm_h_content").val();
		
		$("#submit_value").val('2');
			$.ajax({
				url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/unfinishdesign/biankuang_4',//通过Ajax取数据的目标页面
				data:{"w":w,"h":h},
				type:'post',//方法，还可以是"post"
				dataType:'text',//数据类型，还有其它的，详见jQuery手册
				success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
				{
                    locals=locals.split("|");
					
					if(parseInt(w)>parseInt(h)){
						$("#biankuang_w").val(locals[0]);
						$("#biankuang_h").val(locals[1]);
					}else{
						$("#biankuang_w").val(locals[1]);
						$("#biankuang_h").val(locals[0]);
					}
					
				}
		});			
		
	});
	
	$("#size_width_design_add").bind("input propertychange", function() {
		//alert($(this).val());
		var mm_w = $(this).val() / 25.4;
		if(mm_w != ''){
			mm_w = mm_w.toFixed(2);
		}
		$("#size_inch_width_design_add").val(mm_w);
	});
	
	$("#size_height_design_add").bind("input propertychange", function() {
		//alert($(this).val());
		var mm_h = $(this).val() / 25.4;
		if(mm_h != ''){
			mm_h = mm_h.toFixed(2);
		}
		
		$("#size_inch_height_design_add").val(mm_h);
	});
	
	$("#size_inch_width_design_add").bind("input propertychange", function() {
		//alert($(this).val());
		var inch_w = $(this).val() * 25.4;
		
		if(inch_w != ''){
			inch_w = inch_w.toFixed(2);
		}
		
		$("#size_width_design_add").val(inch_w);
	});
	
	$("#size_inch_height_design_add").bind("input propertychange", function() {
		//alert($(this).val());
		var inch_h = $(this).val() * 25.4;
		if(inch_h != ''){
			inch_h = inch_h.toFixed(2);
		}
		$("#size_height_design_add").val(inch_h);
	});	
	
	//end
	
    $("#material_select_design_add").change(
    	function()
    	{
    		//获取id为select的下拉框选中的值
    	    var a = $("#material_select_design_add").val();
    	    var opti = "<option value=\"\"></option>";
			if(a != ''){
				$.ajax({
					url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/get_material_infomation',//通过Ajax取数据的目标页面
					data:{"material_name":a},
					type:'get',//方法，还可以是"post"
					dataType:'json',//数据类型，还有其它的，详见jQuery手册
					success:function(locals)//成功后执行的语句，这里是一个函数，“locals”是返回的数据
					{
						$("#material_info_color_design_add").find("option").remove();
						$("#material_info_c_color_design_add").find("option").remove();
						$("#material_c_size_design_add").find("option").remove();
						$("#material_c_quantity_design_add").val("");	
						$("#size_width_design_add").val("");
						$("#size_height_design_add").val("");
						$("#material_quantity_design_add").val("1");
						if(locals.result == 0){
							
						}else if(locals.result == 2){
							$("#material_info_patch_design_add").css("display","none");
							$("#material_info_design_add").css("display","none");
							$("#material_info_c_design_add").css("display","block");
							$("#material_info_color_design_add").empty();
							var objs = locals.color;
							$("#material_info_c_color_design_add").append(opti);   //为Select追加一个Option(下拉项)     
							for (var o in objs) {
								var  jsonObj  =  objs[o];
								var  optionstring = "<option value=\"" + jsonObj.material_color + "\" >" + jsonObj.material_color + "</option>";
							    $("#material_info_c_color_design_add").append(optionstring);   //为Select追加一个Option(下拉项)           
							} 
							
						}else if(locals.result == 1){
							$("#material_info_design_add").css("display","block");
							$("#material_info_c_design_add").css("display","none");
							$("#material_info_patch_design_add").css("display","none");
							$("#material_info_c_color_design_add").empty();
							//alert(locals.color.length);//输出子对象数量
							var objs = locals.color;
							$("#material_info_color_design_add").append(opti);   //为Select追加一个Option(下拉项)        
							for (var o in objs) {
								var  jsonObj  =  objs[o];
								var  optionstring = "<option value=\"" + jsonObj.color + "\" >" + jsonObj.color + "</option>";
							    $("#material_info_color_design_add").append(optionstring);   //为Select追加一个Option(下拉项)           
							} 
							
						}else if(locals.result == 3){//潘通颜色添加模式
							$("#material_info_design_add").css("display","none");
							$("#material_info_c_design_add").css("display","none");
							$("#material_info_patch_design_add").css("display","block");
						}
						//alert(locals);
						//$("#customer_code").val(locals);
					}
				});
			}
    	}
    );
	
	$("#material_c_size_design_add").change(function (){
	    $("#material_c_quantity_design_add").val("");
	});
	
	$("#material_info_color_design_add").change(function (){
	    $("#size_width_design_add").val("");
		$("#size_height_design_add").val("");
		$("#material_quantity_design_add").val("1");
	});		
	
	$("#material_info_c_color_design_add").change(function (){
		var a = $("#material_select_design_add").val();
		var color = $("#material_info_c_color_design_add").val();
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
				$("#material_c_size_design_add").find("option").remove();
				$("#material_c_quantity_design_add").val("");					
				for (var o in objs) {
					var  jsonObj  =  objs[o];
					if(jsonObj.size){
						size = jsonObj.size;
						var  optionstring = "<option value=\"" + size + "\" >" + size + "</option>";
						$("#material_c_size_design_add").append(optionstring);   //为Select追加一个Option(下拉项
					}
					else if(jsonObj.size_mm){
						size = jsonObj.size_mm;
						var  optionstring = "<option value=\"" + size + "\" >" + size + "mm</option>";
						$("#material_c_size_design_add").append(optionstring);   //为Select追加一个Option(下拉项)  
					}
					else if(jsonObj.size_m_w&& jsonObj.size_m_h){
						size = jsonObj.size_m_w+'*'+jsonObj.size_m_h;
						var  optionstring = "<option value=\"" + size + "\" >" + size + "mm</option>";
						$("#material_c_size_design_add").append(optionstring);   //为Select追加一个Option(下拉项)   
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
	$("#insert_material1_design_add").click(function (){
		
		var material_name = $("#material_select_design_add").val();
		var size_width = $("#size_inch_width_design_add").val();
		var size_height = $("#size_inch_height_design_add").val();
		var color = $("#material_info_color_design_add").val();
		var quantity = $("#material_quantity_design_add").val();
		var s01 = $("#sIE_size01").val();
		var size = size_width+"*"+size_height;
		var m_unit = '';
		if(s01 == '1'){
			m_unit = 'inch';
		}
		if(s01 == '2'){
			m_unit = 'cm';
		}
		if($("#material_info_color_design_add").val()!="" && $("#size_width_design_add").val()!="" && $("#size_height_design_add").val()!="" && $("#material_quantity_design_add").val()!=""){
		$.ajax({
			url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/insert_table_design_content_material',//通过Ajax取数据的目标页面
			type:'get',//方法，还可以是"post"
			data:{'material_name':material_name,'material_color':color,'material_size':size,'material_quantity':quantity},
			dataType:'json',//数据类型，还有其它的，详见jQuery手册
			success:function(locals)//成功后执行的语句，这里是一个函数，“locals”是返回的数据
			{
				if(locals != 0){
				var table_value = "<tr class='uf_tableClass02'> <td>"+material_name+"<input type='hidden' id='row_number' value='"+row_number+"' /><input type='hidden' name='materials["+row_number+"][material_name]' value='"+material_name+"' /></td> <td>"+color+"<input type='hidden' name='materials["+row_number+"][color]' value='"+color+"' /></td> <td>"+size_width+"*"+size_height+" inch "+m_unit+"<input type='hidden' name='materials["+row_number+"][size_width]' value='"+size_width+"' /><input type='hidden' name='materials["+row_number+"][size_height]' value='"+size_height+"' /><input type='hidden' name='materials["+row_number+"][size]' value='"+size+"' /><input type='hidden' name='materials["+row_number+"][m_unit]' value='"+m_unit+"' /></td> <td>"+quantity+"<input type='hidden' name='materials["+row_number+"][quantity]' value='"+quantity+"' /></td><td onClick='getDel(this,"+locals+")'><a href='#'>删除</a></td></tr>";
				$("#material_table_design_add").append(table_value);   //为table追加一个tr(下拉项)
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
	
	$("#insert_material2_design_add").click(function (){
		var material_name = $("#material_select_design_add").val();
		
		var color = $("#material_info_c_color_design_add").val();
		var quantity = $("#material_c_quantity_design_add").val();
		
		var size = $("#material_c_size_design_add").val();
		var size_text = $("#material_c_size_design_add").find("option:selected").text(); 
		
		if($("#material_info_c_color_design_add").val()!="" && $("#material_c_size_design_add").val()!="" && $("#material_c_quantity_design_add").val()!=""){
		$.ajax({
			url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/insert_table_design_content_material',//通过Ajax取数据的目标页面
			type:'get',//方法，还可以是"post"
			data:{'material_name':material_name,'material_color':color,'material_size':size,'material_quantity':quantity},
			dataType:'json',//数据类型，还有其它的，详见jQuery手册
			success:function(locals)//成功后执行的语句，这里是一个函数，“locals”是返回的数据
			{
				if(locals != 0){
				var table_value = "<tr class='uf_tableClass02'> <td>"+material_name+"<input type='hidden' id='row_number' value='"+row_number+"' /><input type='hidden' name='materials["+row_number+"][material_name]' value='"+material_name+"' /></td> <td>"+color+"<input type='hidden' name='materials["+row_number+"][color]' value='"+color+"' /></td> <td>"+size_text+"<input type='hidden' name='materials["+row_number+"][size]' value='"+size+"' /></td> <td>"+quantity+"<input type='hidden' name='materials["+row_number+"][quantity]' value='"+quantity+"' /></td><td onClick='getDel(this,"+locals+")'><a href='#'>删除</a></td></tr>";
				$("#material_table_design_add").append(table_value);   //为table追加一个tr(下拉项)
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
	
	//潘通色材料添加
	$("#insert_material_patch_design_add").click(function (){
		var material_name = $("#material_select_design_add").val();
		
		var color = $("#material_pantong_color").val();
		var quantity = "";
		
		var size = "";
		
		if($("#material_pantong").val()!=""){
		$.ajax({
			url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/insert_table_design_content_material',//通过Ajax取数据的目标页面
			type:'get',//方法，还可以是"post"
			data:{'material_name':material_name,'material_color':color,'material_size':size,'material_quantity':quantity},
			dataType:'json',//数据类型，还有其它的，详见jQuery手册
			success:function(locals)//成功后执行的语句，这里是一个函数，“locals”是返回的数据
			{
				if(locals != 0){
				var table_value = "<tr class='uf_tableClass02'> <td>"+material_name+"<input type='hidden' id='row_number' value='"+row_number+"' /><input type='hidden' name='materials["+row_number+"][material_name]' value='"+material_name+"' /></td> <td>"+color+"<input type='hidden' name='materials["+row_number+"][color]' value='"+color+"' /></td> <td></td> <td></td><td onClick='getDel(this,"+locals+")'><a href='#'>删除</a></td></tr>";
				$("#material_table_design_add").append(table_value);   //为table追加一个tr(下拉项)
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
	
	
	//添加输入的材料
	$("#insert_materials_textarea").click(function (){
		var str	=	$("#add_materials_textarea").val();
		$("#text_err_design").html('');
		$("#text_err_design").css('display','none');
		if(str==''){
			alert("请输入材料信息！");
		}else{
			$.ajax({
				url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/get_and_insert_materials',
				data:{'all_materials':str},
				type:'post',
				dataType:'json',
				success: function(data){
					if(data.err==1){
						$("#text_err_design").css('display','block');
						$("#text_err_design").html(data.text);	return;
					}else if(data.err==2){
						alert(data.text);
						$('#add_materials_textarea').val();
						$('#add_materials_textarea').val(data.item.replace(/_/g,"\n"));
						return;
					}else if(data.err==0){
						var material_len	=	data.arr_materials.length;
						if(material_len>0){
							for(var i=0;i<material_len;i++){
								var table_value = "<tr class='uf_tableClass02'> <td>"+data.arr_materials[i].material_name+"</td><td>"+data.arr_materials[i].material_color+"</td>  <td >"+data.arr_materials[i].material_size+" </td>  <td>"+data.arr_materials[i].material_quantity+"</td><td onClick='getDel(this,"+data.arr_materials[i].id+")'><a href='#'>删除</a></td></tr>";
								$("#material_table_design_add").append(table_value);
								row_number++; 
							}
						}
						$('#add_materials_textarea').val();
						$('#add_materials_textarea').val(data.item.replace(/_/g,"\n"));	
					}
				}	
			});
				
		}	
		
	});
	
	//潘通材料检索
	$('#material_pantong_color').keyup(function(){
		if($.trim($('#material_pantong_color').val()) != ''){
			$('#pantong_select_list').css("display","block");
			var pantong = $.trim($('#material_pantong_color').val());
			
			$.ajax({
					url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/get_pantong_list_code',
					data:{'pantong':pantong},
					type:'get',//方法，还可以是"post"
					dataType:'text',//数据类型，还有其它的，详见jQuery手册
					success:function(local)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
					{	
						if(local){
							$("#pantong_select_list").html("");
							$("#pantong_select_list").html(local);

						}
						else{
							$('#search_pop').css("display","none");
							$('#pantong_select_list').html("");
						}
						
					}
			})
		}
		else{
			$('#search_pop').css("display","none");
			$('#pantong_select_list').html("");
		}
	});
	
});
//获取点击潘通材料
function change_pantong(color){
	$('#material_pantong_color').val(color);
	$('#pantong_select_list').html("");
	$('#pantong_select_list').css("display","none");
}



function getDel(k,row){
	//alert(row);
	var material_name = $("#material_select_design_add").val();
	var size_width = $("#size_inch_width_design_add").val();
	var size_height = $("#size_inch_height_design_add").val();
	var color = $("#material_info_color_design_add").val();
	var quantity = $("#material_quantity_design_add").val();
	var color2 = $("#material_info_c_color_design_add").val();
	var quantity2 = $("#material_c_quantity_design_add").val();
	var size = size_width+"*"+size_height;
	var size2 = $("#material_c_size_design_add").val();
	$.ajax({
			url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/delete_design_content_material',//通过Ajax取数据的目标页面
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