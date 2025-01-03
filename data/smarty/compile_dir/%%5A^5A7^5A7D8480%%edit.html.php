<?php /* Smarty version 2.6.22, created on 2023-06-19 09:56:22
         compiled from stock_manage/edit.html */ ?>
<script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/cstown_Sys.js" type="text/javascript"></script>
<link href="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/css/cstown_sys.css" rel="stylesheet" type="text/css" media="screen"/>
<div class="pageContent">
  
    <div class="stkInfEnter" layoutH="100" style="width:95%; margin-left:20px;">
      <div class="sIE_title">Stock 信息录入</div>
      <?php if ($this->_tpl_vars['stock_manage']['stock_type'] == 1): ?>
      <div class="sIEK" style="width:65%;">
        <div class="sIE_l" style="width:520px;">  
        <form method="post" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, navTabAjaxDone)" id="stock_manage_edit">
          <div class="sIE_l_01" style="width:260px;">
          	<div class="sIE_l_01_title" style="width:80px;">STOCK 类型:</div>
          <input type="hidden" id="stock_type" name="stock_type" value="<?php echo $this->_tpl_vars['stock_manage']['stock_type']; ?>
" />
          <div class="sIE_r01" style="width:180px;">
         <input type="text" class="sIE_No"  readonly="readonly" style="width:130px;"  value="烫图" />
          </div>
          
          <div class="sIE_l_01_title" style="width:80px; margin-top:5px;">设计人:</div>
            <div class="sIE_r01" style="width:180px;">
             <select name="design_user_name" style=" margin-top:5px;width:137px; height:25px">
                  <option value="">请选择</option>
                  <?php $_from = $this->_tpl_vars['user_lists']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['qf']):
?>
                  <option value="<?php echo $this->_tpl_vars['qf']['user_name']; ?>
" <?php if ($this->_tpl_vars['stock_manage']['design_user_name'] == $this->_tpl_vars['qf']['user_name']): ?> selected="selected" <?php endif; ?> ><?php echo $this->_tpl_vars['qf']['user_name']; ?>
</option>
                  <?php endforeach; endif; unset($_from); ?>
              </select>
          	</div>
          
            <div class="sIE_l_01_title" style="width:80px; margin-top:5px;">STOCK 编号:</div>
            <input type="hidden" id="stock_id" name="stock_id" value="<?php echo $this->_tpl_vars['stock_manage']['id']; ?>
" />
            <input type="hidden" id="hidden_id" name="hidden_id" value="<?php echo $this->_tpl_vars['hidden_user_id']; ?>
" />
            <input type="text" class="sIE_No"  style="width:130px; margin-top:5px;" name="stock_code" id="stock_code_edit" value="<?php echo $this->_tpl_vars['stock_manage']['stock_code']; ?>
"/>
            <div id="sm_error_edit" style="float:left; width:136px; height:20px; line-height:20px; text-align:center; display:none; margin-left:80px; color:#FFF; background:#F00;"></div>
            <?php if ($this->_tpl_vars['hidden_user_id'] == '1' || $this->_tpl_vars['hidden_user_id'] == '2'): ?>
			<div class="sIE_l_01_title" style="width:80px; margin-top:5px;">报价系数:</div>
            <div class="sIE_r01" style="width:180px;">
            <input type="text"  class="sIE_No" style="width:130px; margin-top:5px;" id="coefficient_quotation_edit" name="coefficient_quotation_edit" value="<?php echo $this->_tpl_vars['stock_manage']['coefficient_quotation']; ?>
"/>
            </div>
            <div id="coefficient_quotation_error" style="float:left; width:136px; height:20px; line-height:20px; text-align:center; display:none; color:#FFF; background:#F00;"></div>
            <?php endif; ?>
          
            
          </div>
          
          <div class="sIE_l_01" style="width:260px;">
            <div class="sIE_l_01_title" style="width:50px;">尺寸:</div>
            <div class="sIE_r01" style="width:180px;">
              <div class="sIE_r01_div">
                <input type="text"  class="sIE_No" style="width:130px;" id="inch_w_edit" name="size_inch_w" value="<?php echo $this->_tpl_vars['stock_manage']['size_inch_w']; ?>
"/>
                <div class="sIE_r01_div_r" style="margin-top:5px;">inch W</div>
              </div>
              <div class="sIE_r01_div">
                <input type="text"  class="sIE_No" style="width:130px;" id="inch_h_edit" name="size_inch_h" value="<?php echo $this->_tpl_vars['stock_manage']['size_inch_h']; ?>
"/>
                <div class="sIE_r01_div_r" style="margin-top:5px;">inch H</div>
              </div>
              <div class="sIE_r01_div">
                <input type="text"  class="sIE_No" style="width:130px;" id="cm_w_edit" name="size_cm_w" value="<?php echo $this->_tpl_vars['stock_manage']['size_cm_w']; ?>
" />
                <div class="sIE_r01_div_r" style="margin-top:5px;">cm W</div>
              </div>
              <div class="sIE_r01_div">
                <input type="text"  class="sIE_No" style="width:130px;" id="cm_h_edit" name="size_cm_h" value="<?php echo $this->_tpl_vars['stock_manage']['size_cm_h']; ?>
" />
                <div class="sIE_r01_div_r" style="margin-top:5px;">cm H</div>
              </div>
              <div id="sm_error_size_edit" style="float:left; width:136px; height:20px; line-height:20px; text-align:center; display:none; color:#FFF; background:#F00;"></div>
            </div>
             
          </div>

         </form>
          
        </div>
        
        
        <div class="sIEK" style=" width:20%; margin-left:10px;">
        <div class="sIE_l_01" style="margin-top:10px;width:100%;">
        <?php if ($this->_tpl_vars['stock_manage']['use_status'] != '1'): ?>
          <div class="sIE_l_01_title" style="width:40px;">材料:</div>
          <div class="sIE_r01">
            <div class="sIE_r01_div">
              <select class="sIE_r01_Select" id="material_select_stock_edit" style="width:150px;">
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
         <?php endif; ?>
         </div>
        
        <div class="sIE_l_02" id="material_info_edit_stock" style="display:none;">
          <div class="sIE_l_02_div">
            <div class="sIE_l_01_title" style="width:40px;">颜色:</div>
            <select id="material_info_color_edit_stock" class="sIE_r01_Select" style="width:150px;">
              
            </select>
          </div>
          <div class="sIE_l_02_div">
            <div class="sIE_l_01_title" style="width:40px;">尺寸:</div>
            <input type="text" class="sIE_No" id="size_width_edit_stock" style="width:85px;"  />
            <div class="sIE_No" style="width:54px; margin-left:5px;">MM W</div>
            <!--<select class="sIE_sizeSelect" id="sIE_size01">
              <option value="1">inch</option>
              <option value="2">cm</option>
            </select>-->
          </div>
          
          <div class="sIE_l_02_div">
            <div class="sIE_l_01_title" style="width:40px;">&nbsp;</div>
            
            <input type="text" class="sIE_No" id="size_height_edit_stock"  style="width:85px;" />
            <div class="sIE_No" style="width:54px; margin-left:5px;">MM H</div>
            <!--<select class="sIE_sizeSelect" id="sIE_size02">
              <option value="1">inch</option>
              <option value="2">cm</option>
            </select>-->
          </div>
          
          <div class="sIE_l_02_div">
            <div class="sIE_l_01_title" style="width:40px;">&nbsp;</div>
            
            <input type="text" class="sIE_No" id="size_inch_width_edit_stock"  style="width:85px;" />
            <div class="sIE_No" style="width:54px; margin-left:5px;">inch w</div>
            <!--<select class="sIE_sizeSelect" id="sIE_size02">
              <option value="1">inch</option>
              <option value="2">cm</option>
            </select>-->
          </div>
          
          
          <div class="sIE_l_02_div">
            <div class="sIE_l_01_title" style="width:40px;">&nbsp;</div>
            
            <input type="text" class="sIE_No" id="size_inch_height_edit_stock"  style="width:85px;" />
            <div class="sIE_No" style="width:54px; margin-left:5px;">inch H</div>
            <!--<select class="sIE_sizeSelect" id="sIE_size02">
              <option value="1">inch</option>
              <option value="2">cm</option>
            </select>-->
          </div>
          
          
          <div class="sIE_l_02_div">
            <div class="sIE_l_01_title" style="width:40px;">数量:</div>
            <input type="text"  class="sIE_size" id="material_quantity_edit_stock" readonly="readonly" style="width:146px;" />
          </div>
          <button type="button" id="insert_material1_edit_stock">添加材料</button>
        </div>
        
        <div class="sIE_l_02" id="material_info_c_edit_stock" style="display:none;">
          <div class="sIE_l_02_div">
            <div class="sIE_l_01_title" style="width:40px;">颜色:</div>
             <select id="material_info_c_color_edit_stock" class="sIE_r01_Select" style="width:150px;">
              
            </select>
          </div>
          <div class="sIE_l_02_div">
            <div class="sIE_l_01_title" style="width:40px;">尺寸:</div>
            <select class="sIE_r01_Select" id="material_c_size_edit_stock" style="width:150px;">
              <option>请选择...</option>
            </select>
          </div>
          <div class="sIE_l_02_div">
            <div class="sIE_l_01_title" style="width:40px;">数量:</div>
            <input type="text"  class="sIE_size" id="material_c_quantity_edit_stock" style="width:146px;" />
          </div>
          
          <button type="button" id="insert_material2_edit_stock">添加材料</button>
         
        </div>
        <div id="sm_error_material_edit_stock" style="float:left; width:150px; height:20px; line-height:20px; margin-left:42px; display:none; text-align:center;color:#FFF; background:#F00;"></div> 
      </div>
      
      
      
        
        <div class="sIE_l_02" style="width:98%; margin-top:50px;">
            <table cellspacing="0" class="sIE_l_02Tab" id="material_table_edit_stock" style="width:98%">
              <tr>
                <th>材料</th>
                <th>颜色</th>
                <th>尺寸</th>
                <th>数量</th>
                <?php if ($this->_tpl_vars['stock_manage']['use_status'] != '1'): ?>
                <th>操作</th>
                <?php endif; ?>
              </tr>
              <?php if ($this->_tpl_vars['materials_select'] != ''): ?>
              <?php $_from = $this->_tpl_vars['materials_select']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ms']):
?>
              <tr class="sm_tabClass02"> 
                  <td><?php echo $this->_tpl_vars['ms']['material_name']; ?>
</td> 
                  <td><?php echo $this->_tpl_vars['ms']['material_color']; ?>
</td> 
                  <td><?php echo $this->_tpl_vars['ms']['material_size']; ?>
</td> 
                  <td><?php echo $this->_tpl_vars['ms']['material_quantity']; ?>
</td>
                   <?php if ($this->_tpl_vars['stock_manage']['use_status'] != '1'): ?>
                  <td onclick="getDel(this,<?php echo $this->_tpl_vars['ms']['id']; ?>
)"><a href="#">删除</a></td>
                  <?php endif; ?>
              </tr>
              <?php endforeach; endif; unset($_from); ?>
              <?php endif; ?>
            </table>
          </div>
        
      </div>
     <?php endif; ?> 
      <?php if ($this->_tpl_vars['stock_manage']['stock_type'] == 2): ?>
        <div class="sIE_l" style="width:260px;">  
        <form method="post" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, navTabAjaxDone)" id="stock_manage_zhijia_edit">
          <div class="sIE_l_01_title" style="width:80px;">STOCK 类型:</div>
          <input type="hidden"  name="stock_type1" value="<?php echo $this->_tpl_vars['stock_manage']['stock_type']; ?>
" />
          <div class="sIE_r01" style="width:180px;">
         <input type="text" class="sIE_No"  readonly="readonly" style="width:130px;"  value="指甲贴" />
          </div>
          <div id="stock_type1_error" style="float:left; width:136px; height:20px; line-height:20px; text-align:center; display:none; margin-left:80px; color:#FFF; background:#F00;"></div>  </br>
          
          
          <div class="sIE_l_01_title" style="width:80px;">设计人:</div>
          
          <div class="sIE_r01" style="width:180px;">
         			<select class="sIE_No" style="width:130px;" name="design_user_name2">
                        <option value="">请选择</option>
                        <?php $_from = $this->_tpl_vars['user_lists']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['qf']):
?>
                        <option value="<?php echo $this->_tpl_vars['qf']['user_name']; ?>
" <?php if ($this->_tpl_vars['stock_manage']['design_user_name'] == $this->_tpl_vars['qf']['user_name']): ?> selected="selected" <?php endif; ?> ><?php echo $this->_tpl_vars['qf']['user_name']; ?>
</option>
                        <?php endforeach; endif; unset($_from); ?>
                    </select>
          </div>

          
          <div class="sIE_l_01" style="width:260px;">
            <div class="sIE_l_01_title" style="width:80px; margin-top:5px;">STOCK 编号:</div>
            <input type="hidden" id="stock_id1" name="stock_id1" value="<?php echo $this->_tpl_vars['stock_manage']['id']; ?>
" />
            <input type="text" class="sIE_No"  style="width:130px; margin-top:5px;" name="stock_code1" id="stock_code1_edit" value="<?php echo $this->_tpl_vars['stock_manage']['stock_code']; ?>
"/>
            <div id="stock_code1_error" style="float:left; width:136px; height:20px; line-height:20px; text-align:center; display:none; margin-left:80px; color:#FFF; background:#F00;"></div>
           
          </div>
          
         </form>
          
        </div>
      <?php endif; ?>
      <!--T恤-->  
   	  <?php if ($this->_tpl_vars['stock_manage']['stock_type'] == 3): ?>
        <div class="sIE_l" style="width:260px;">  
        <form method="post" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, navTabAjaxDone)" id="stock_manage_Tshirt_edit">
          <div class="sIE_l_01_title" style="width:80px;">STOCK 类型:</div>
          <input type="hidden"  name="stock_type2" value="<?php echo $this->_tpl_vars['stock_manage']['stock_type']; ?>
" />
          <div class="sIE_r01" style="width:180px;">
         <input type="text" class="sIE_No"  readonly="readonly" style="width:130px;"  value="T恤" />
          </div>
          <div id="stock_type1_error" style="float:left; width:136px; height:20px; line-height:20px; text-align:center; display:none; margin-left:80px; color:#FFF; background:#F00;"></div>  </br>
          
          <div class="sIE_r01" style="width:180px;">
         			<select class="sIE_No" style="width:130px;" name="design_user_name3">
                        <option value="">请选择</option>
                        <?php $_from = $this->_tpl_vars['user_lists']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['qf']):
?>
                        <option value="<?php echo $this->_tpl_vars['qf']['user_name']; ?>
" <?php if ($this->_tpl_vars['stock_manage']['design_user_name'] == $this->_tpl_vars['qf']['user_name']): ?> selected="selected" <?php endif; ?> ><?php echo $this->_tpl_vars['qf']['user_name']; ?>
</option>
                        <?php endforeach; endif; unset($_from); ?>
                    </select>
          </div>
          
          
          <div class="sIE_l_01" style="width:260px;">
            <div class="sIE_l_01_title" style="width:80px; margin-top:5px;">STOCK 编号:</div>
            <input type="hidden" id="stock_id2" name="stock_id2" value="<?php echo $this->_tpl_vars['stock_manage']['id']; ?>
" />
            <input type="text" class="sIE_No"  style="width:130px; margin-top:5px;" name="stock_code2" id="stock_code2_edit" value="<?php echo $this->_tpl_vars['stock_manage']['stock_code']; ?>
"/>
            <div id="stock_code1_error" style="float:left; width:136px; height:20px; line-height:20px; text-align:center; display:none; margin-left:80px; color:#FFF; background:#F00;"></div>
           
          </div>
          <div class="sIE_l_01" style="width:260px;">
            <div class="sIE_l_01_title" style="width:80px;">尺寸:</div>
            <div class="sIE_r01" style="width:180px;">
              <div class="sIE_r01_div">
                <input type="text"  class="sIE_No" style="width:130px;" id="inch_w_edit_Tshirt" name="size_inch_w_Tshirt" value="<?php echo $this->_tpl_vars['stock_manage']['size_inch_w']; ?>
"/>
                <div class="sIE_r01_div_r" style="margin-top:5px;">inch W</div>
              </div>
              <div class="sIE_r01_div">
                <input type="text"  class="sIE_No" style="width:130px;" id="inch_h_edit_Tshirt" name="size_inch_h_Tshirt" value="<?php echo $this->_tpl_vars['stock_manage']['size_inch_h']; ?>
"/>
                <div class="sIE_r01_div_r" style="margin-top:5px;">inch H</div>
              </div>
              <div class="sIE_r01_div">
                <input type="text"  class="sIE_No" style="width:130px;" id="cm_w_edit_Tshirt" name="size_cm_w_Tshirt" value="<?php echo $this->_tpl_vars['stock_manage']['size_cm_w']; ?>
" />
                <div class="sIE_r01_div_r" style="margin-top:5px;">cm W</div>
              </div>
              <div class="sIE_r01_div">
                <input type="text"  class="sIE_No" style="width:130px;" id="cm_h_edit_Tshirt" name="size_cm_h_Tshirt" value="<?php echo $this->_tpl_vars['stock_manage']['size_cm_h']; ?>
" />
                <div class="sIE_r01_div_r" style="margin-top:5px;">cm H</div>
              </div>
              <div id="error_size_edit_Tshirt" style="float:left; width:136px; height:20px; line-height:20px; text-align:center; display:none; color:#FFF; background:#F00;"></div>
            </div>
          </div>
          
         </form>
          
        </div>
      <?php endif; ?> 
      <?php if ($this->_tpl_vars['stock_manage']['stock_type'] != 3): ?>  
      <div class="sIE_r" style="width:420px;;">
        
          <div style="height:400px; width:400px;">
          <div class="sIE_r_img" style="float:left;  width:400px; height:400px;" id="st_image_no_edit">
          <!--<img src="sss.jpg" width="224px" height="224px" />-->
          <iframe name="yframe" src="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/stock_manage/two_img_upload" style="border:none; width:400px; height:400px;"></iframe>
          </div> 
          <div style="float:left; margin-top:0px; width:400px;">
          <!--<form action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/stock_manage/two_img_upload" id="upload_jpg_edit" target="yframe" method="post" enctype="multipart/form-data" >
             
             <div style="float:left; height:50px; width:60px; overflow:hidden; position:relative;">
                 <input type="file" class="sIE_r_img_file" name="upload_file[]" multiple="multiple"  style=" opacity:0; position:relative; z-index:10; margin-top:0px;" />
                 
                 <input type="button" class="sIE_r_img_file" name="jpg" style=" opacity:1; width:60px; text-align:center; height:24px; position:absolute; z-index:9; margin-top:0px;" value="浏览" />
                </div>
                 <input type="submit" value="上传JPG和CDR" id="jpg_upload_submit_edit" style=" float:right; width:100px; height:24px;" />
             
          
          </form>-->
		  <?php if ($this->_tpl_vars['stock_manage']['use_status'] != '1'): ?>
		  <form style="float:left; width:260px;" id="st_upload_jpg_edit" enctype="multipart/form-data">
                    	<input type="file" name="upload_file[]" value="上传" multiple="multiple"  style="position:relative; z-index:10; margin-top:0px;" />  
					</form>
					<button id="st_jpg_upload_submit_edit">提交</button>
		<?php endif; ?>
        </div>
        </div>
       <?php else: ?>
       
       <!--T恤图片-->
       <div class="sIE_r" style="width:420px;">
            <div class="sIE_r_img" style="height:400px; width:400px; margin-top:26px;">
                <div style="float:left; width:400px; height:atuo;">
                	<iframe  name="yframe_stock_cdr1" src="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/stock_manage/upload_jpg_T" style="border:none; width:400px; height:400px;"></iframe>
                </div> 
                <div style="float:left; margin-top:0px; width:400px;">
                	<form action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/stock_manage/upload_jpg_T" id="upload_jpg" target="yframe_stock_cdr1" method="post" enctype="multipart/form-data" >
                        <div style="float:left; height:50px; width:60px; overflow:hidden; position:relative;">
                            <input type="file" class="sIE_r_img_file" name="jpg_file" id="jpg_file" style=" opacity:0; position:relative; z-index:10; margin-top:0px;" />
                            <input type="button" class="sIE_r_img_file" name="jpg1" style=" opacity:1; width:60px; text-align:center; height:24px; position:absolute; z-index:9; margin-top:0px;" value="浏览" />
                        </div>
                        <input type="submit" value="上传JPG" id="jpg_upload_submit" style=" float:right; width:70px; height:24px;" />
                    
                    </form>
					
                </div>
            </div>
        </div>
      <?php endif; ?>    
        </div>
      
      
    </div>
    
    
    <div id="materials_informations" style="display:none;">
    	
            <input type="text" class="sIE_No"  name="stock_code" id="stock_code1_edit"  style="display:none;"/>
         
                <input type="text"  class="sIE_No" id="inch_w1_edit" name="size_inch_w"/>
              
                <input type="text"  class="sIE_No" id="inch_h1_edit" name="size_inch_h"/>
               
                <input type="text"  class="sIE_No" id="cm_w1_edit" name="size_cm_w" />
              
                <input type="text"  class="sIE_No" id="cm_h1_edit" name="size_cm_h" />
               
            <table cellspacing="0" class="sIE_l_02Tab" id="material_table1_edit"  style="display:none;">
              <tr>
                <th>材料</th>
                <th>颜色</th>
                <th>尺寸</th>
                <th>数量</th>
                <th>操作</th>
              </tr>
              
            </table>
         
    </div>
    <?php if ($this->_tpl_vars['stock_manage']['stock_type'] == 1): ?>
    <div class="formBar">
      <ul>
        <li>
         <?php if ($this->_tpl_vars['stock_manage']['use_status'] != '1'): ?>
          <div class="buttonActive">
            <div class="buttonContent">
            <button type="submit" id="stock_manage_edit_submit_form">确定</button>
            </div>
           </div>
          <?php endif; ?>
        </li>
        <li> 
        <div class="buttonActive">
            <div class="buttonContent">
              <button type="button" class="close" >取消</button>
            </div>
          </div>
        </li>
      </ul>
    </div>
 		
    <?php endif; ?>
    <?php if ($this->_tpl_vars['stock_manage']['stock_type'] == 2): ?>
    <div class="formBar">
      <ul>
        <li>
         <?php if ($this->_tpl_vars['stock_manage']['use_status'] != '1'): ?>
          <div class="buttonActive">
            <div class="buttonContent">
            <button type="submit" id="stock_manage_edit_submit_form1">确定</button>
            </div>
           </div>
          <?php endif; ?>
        </li>
        <li> 
        <div class="buttonActive">
            <div class="buttonContent">
              <button type="button" class="close" >取消</button>
            </div>
          </div>
        </li>
      </ul>
    </div>
 		
    <?php endif; ?>
    
    <?php if ($this->_tpl_vars['stock_manage']['stock_type'] == 3): ?>
    <div class="formBar">
      <ul>
        <li>
         <?php if ($this->_tpl_vars['stock_manage']['use_status'] != '1'): ?>
          <div class="buttonActive">
            <div class="buttonContent">
            <button type="submit" id="stock_manage_edit_submit_form2">确定</button>
            </div>
           </div>
          <?php endif; ?>
        </li>
        <li> 
        <div class="buttonActive">
            <div class="buttonContent">
              <button type="button" class="close" >取消</button>
            </div>
          </div>
        </li>
      </ul>
    </div>
 		
    <?php endif; ?>
</div>

<!-- {literal} --> 
<script type="text/javascript">

$(document).ready(function()  
{
	
	function isEmpty(str){
		var arr = new Array();

		arr = str.split(" ");
		
		if(arr.length != 1){
			return true;
		}else{
			false;
		}
	}
	
	function validate(str){ 
		var reg = new RegExp("^(([0-9]+\.[0-9]*[1-9][0-9]*)|([0-9]*[1-9][0-9]*\.[0-9]+)|([0-9]*[1-9][0-9]*))$");
		if(reg.test(str)){ 
			return true;
			
		}else{
			return false;
		}
		
	}
	
	
	$("#jpg_upload_submit_edit").click(function(){
		$("#upload_jpg_edit").submit();
	});
	
	$("#stock_manage_edit_submit_form").click(function () {
		
		var material_c_quantity = $("#material_c_quantity_edit_stock").val();
		var material_info_c_color = $("#material_info_c_color_edit_stock").val();
		var coefficient_quotation_edit = $("#coefficient_quotation_edit").val();
		var hidden_id = $("#hidden_id").val();
		var c= /^\d+(?=\.{0,1}\d+$|$)/;
		var b=c.test(coefficient_quotation_edit);
		if($("#stock_code_edit").val() == "" || isEmpty($('#stock_code_edit').val())){
			$("#sm_error_edit").css("display","block");
			$("#sm_error_edit").html("编号必填且不包含空格");
		}
		else if($("#sm_error_edit").is(":visible")){
			
		}else if(!validate($("#inch_w_edit").val()) || !validate($("#inch_h_edit").val()) || !validate($("#cm_w_edit").val())|| !validate($("#cm_h_edit").val()) || $("#inch_w_edit").val() == "" || $("#inch_h_edit").val() == "" || $("#cm_w_edit").val() == "" || $("#cm_h_edit").val() == ""){
				$("#sm_error_edit").css("display","none");
				$("#sm_error_size_edit").css("display","block");
				$("#sm_error_size_edit").html("尺寸必填且必须为数字");
		}
		else if(!$(".sm_tabClass02").is(":visible")){
			$("#sm_error_material_edit_stock").css("display","block");
			$("#sm_error_material_edit_stock").html("请添加材料项！");
		}else if((hidden_id=='2' || hidden_id=='1') && (b==false || coefficient_quotation_edit<=0 )){
			$("#sm_error_material_edit_stock").css("display","none");
			$("#coefficient_quotation_error").css("display","block");
			$("#coefficient_quotation_error").html("报价系数必须为正数！");
		}
		else{			
			$("#sm_error_edit").css("display","none");
			$("#sm_error_size_edit").css("display","none");
			$("#sm_error_material_edit_stock").css("display","none");
			$.ajax({
					url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/stock_manage/check_photo',//通过Ajax取数据的目标页面
					data:{},
					type:'post',//方法，还可以是"post"
					dataType:'text',//数据类型，还有其它的，详见jQuery手册
					success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
					{
						if(locals==1){
							$("#sm_error_size_edit").css("display","none");
							$("#stock_manage_edit").submit();
						}else{
							$("#sm_error_size_edit").css("display","block");
							$("#sm_error_size_edit").html("请上传图片,且名称不包含空格！");	
						}
					}
			    });	
		}
	});
	
	$("#stock_manage_edit_submit_form1").click(function () {
		
		var material_c_quantity = $("#material_c_quantity_edit_stock").val();
		var material_info_c_color = $("#material_info_c_color_edit_stock").val();
		var coefficient_quotation_edit = $("#coefficient_quotation_edit").val();
		var c= /^\d+(?=\.{0,1}\d+$|$)/;
		var b=c.test(coefficient_quotation_edit);
		if($("#stock_code1_edit").val() == "" || isEmpty($('#stock_code1_edit').val())){
			$("#stock_code1_error_edit").css("display","block");
			$("#stock_code1_error_edit").html("编号必填且不包含空格");
		}
		else{			
			$("#stock_code1_error_edit").css("display","none");
			$("#sm_error_size_edit").css("display","none");
			$("#sm_error_material_edit_stock").css("display","none");
			$.ajax({
					url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/stock_manage/check_photo',//通过Ajax取数据的目标页面
					data:{},
					type:'post',//方法，还可以是"post"
					dataType:'text',//数据类型，还有其它的，详见jQuery手册
					success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
					{
						if(locals==1){
							$("#sm_error_size_edit").css("display","none");
							$("#stock_manage_zhijia_edit").submit();
						}else{
							$("#sm_error_size_edit").css("display","block");
							$("#sm_error_size_edit").html("请上传图片,且名称不包含空格！");	
						}
					}
			    });	
		}
	});
	
	//T恤
	$("#stock_manage_edit_submit_form2").click(function () {
		$("#stock_code2_error_edit").css("display","none");
		$("#error_size_edit_Tshirt").css("display","none");
		if($("#stock_code2_edit").val() == "" || isEmpty($('#stock_code2_edit').val())){
			$("#stock_code2_error_edit").css("display","block");
			$("#stock_code2_error_edit").html("编号必填且不包含空格");
		}else if($("#inch_w_edit_Tshirt").val()=='' || $("#inch_h_edit_Tshirt").val()=='' || $("#cm_w_edit_Tshirt").val()=='' || $("#cm_h_edit_Tshirt").val()==''){
			$("#error_size_edit_Tshirt").css("display","block");
			$("#error_size_edit_Tshirt").html("尺寸不能为空，且必须为数字！");
		}else{			
			$.ajax({
					url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/stock_manage/check_photo_T',//通过Ajax取数据的目标页面
					data:{},
					type:'post',//方法，还可以是"post"
					dataType:'text',//数据类型，还有其它的，详见jQuery手册
					success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
					{
						if(locals==1){
							$("#stock_manage_Tshirt_edit").submit();
						}else{
							$("#error_size_edit_Tshirt").css("display","block");
							$("#error_size_edit_Tshirt").html("请上传图片,且名称不包含空格！");	
						}
					}
			    });	
		}
	});
	
	$("#inch_w_edit").bind("input propertychange", function() {
		//alert($(this).val());
		var cm_w = $(this).val() * 2.54;
		if(cm_w != ''){
			cm_w = cm_w.toFixed(2);
		}
		$("#cm_w_edit").val(cm_w);
		$("#cm_w1_edit").val(cm_w);
	});
	
	$("#inch_h_edit").bind("input propertychange", function() {
		//alert($(this).val());
		var cm_h = $(this).val() * 2.54;
		if(cm_h != ''){
			cm_h = cm_h.toFixed(2);
		}
		
		$("#cm_h_edit").val(cm_h);
		$("#cm_h1_edit").val(cm_h);
	});
	
	$("#cm_w_edit").bind("input propertychange", function() {
		//alert($(this).val());
		var inch_w = $(this).val() / 2.54;
		
		if(inch_w != ''){
			inch_w = inch_w.toFixed(2);
		}
		
		$("#inch_w_edit").val(inch_w);
		$("#inch_w1_edit").val(inch_w);
	});
	
	$("#cm_h_edit").bind("input propertychange", function() {
		//alert($(this).val());
		var inch_h = $(this).val() / 2.54;
		if(inch_h != ''){
			inch_h = inch_h.toFixed(2);
		}
		$("#inch_h_edit").val(inch_h);
		$("#inch_h1_edit").val(inch_h);
	});
	
	//T恤***********************************开始
	$("#inch_w_edit_Tshirt").bind("input propertychange", function() {
		//alert($(this).val());
		var cm_w = $(this).val() * 2.54;
		if(cm_w != ''){
			cm_w = cm_w.toFixed(2);
		}
		$("#cm_w_edit_Tshirt").val(cm_w);
		$("#cm_w1_edit").val(cm_w);
	});
	
	$("#inch_h_edit_Tshirt").bind("input propertychange", function() {
		//alert($(this).val());
		var cm_h = $(this).val() * 2.54;
		if(cm_h != ''){
			cm_h = cm_h.toFixed(2);
		}
		
		$("#cm_h_edit_Tshirt").val(cm_h);
		$("#cm_h1_edit").val(cm_h);
	});
	
	$("#cm_w_edit_Tshirt").bind("input propertychange", function() {
		//alert($(this).val());
		var inch_w = $(this).val() / 2.54;
		
		if(inch_w != ''){
			inch_w = inch_w.toFixed(2);
		}
		
		$("#inch_w_edit_Tshirt").val(inch_w);
		$("#inch_w1_edit").val(inch_w);
	});
	
	$("#cm_h_edit_Tshirt").bind("input propertychange", function() {
		//alert($(this).val());
		var inch_h = $(this).val() / 2.54;
		if(inch_h != ''){
			inch_h = inch_h.toFixed(2);
		}
		$("#inch_h_edit_Tshirt").val(inch_h);
		$("#inch_h1_edit").val(inch_h);
	});
	//T恤**********************************************结束
	
	
	
	
	$("#size_width_edit_stock").bind("input propertychange", function() {
		//alert($(this).val());
		var mm_w = $(this).val() / 25.4;
		if(mm_w != ''){
			mm_w = mm_w.toFixed(2);
		}
		$("#size_inch_width_edit_stock").val(mm_w);
	});
	
	$("#size_height_edit_stock").bind("input propertychange", function() {
		//alert($(this).val());
		var mm_h = $(this).val() / 25.4;
		if(mm_h != ''){
			mm_h = mm_h.toFixed(2);
		}
		
		$("#size_inch_height_edit_stock").val(mm_h);
	});
	
	$("#size_inch_width_edit_stock").bind("input propertychange", function() {
		//alert($(this).val());
		var inch_w = $(this).val() * 25.4;
		
		if(inch_w != ''){
			inch_w = inch_w.toFixed(2);
		}
		
		$("#size_width_edit_stock").val(inch_w);
	});
	
	$("#size_inch_height_edit_stock").bind("input propertychange", function() {
		//alert($(this).val());
		var inch_h = $(this).val() * 25.4;
		if(inch_h != ''){
			inch_h = inch_h.toFixed(2);
		}
		$("#size_height_edit_stock").val(inch_h);
	});
	
	
	    
    $("#material_select_stock_edit").change(
    	function()
    	{
    		//获取id为select的下拉框选中的值
    	    var a = $("#material_select_stock_edit").val();
    	    var opti = "<option value=\"\"></option>";
			if(a != ''){
				$.ajax({
					url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/get_material_infomation',//通过Ajax取数据的目标页面
					data:{'material_name':a},
					type:'get',//方法，还可以是"post"
					dataType:'json',//数据类型，还有其它的，详见jQuery手册
					success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
					{
						$("#material_info_color_edit_stock").find("option").remove();
						$("#material_info_c_color_edit_stock").find("option").remove();
						$("#material_c_size_edit_stock").find("option").remove();
						$("#material_c_quantity_edit_stock").val("");	
						$("#size_width_edit_stock").val("");
						$("#size_height_edit_stock").val("");
						$("#material_quantity_edit_stock").val("1");
						if(locals.result == 0){
							
						}else if(locals.result == 2){
							$("#material_info_edit_stock").css("display","none");
							$("#material_info_c_edit_stock").css("display","block");
							$("#material_info_color_edit_stock").empty();
							var objs = locals.color;
							$("#material_info_c_color_edit_stock").append(opti);   //为Select追加一个Option(下拉项)     
							for (var o in objs) {
								var  jsonObj  =  objs[o];
								var  optionstring = "<option value=\"" + jsonObj.material_color + "\" >" + jsonObj.material_color + "</option>";
							    $("#material_info_c_color_edit_stock").append(optionstring);   //为Select追加一个Option(下拉项)           
							} 
							
						}else if(locals.result == 1){
							$("#material_info_edit_stock").css("display","block");
							$("#material_info_c_edit_stock").css("display","none");
							$("#material_info_c_color_edit_stock").empty();
							//alert(locals.color.length);//输出子对象数量
							var objs = locals.color;
							$("#material_info_color_edit_stock").append(opti);   //为Select追加一个Option(下拉项)        
							for (var o in objs) {
								var  jsonObj  =  objs[o];
								var  optionstring = "<option value=\"" + jsonObj.color + "\" >" + jsonObj.color + "</option>";
							    $("#material_info_color_edit_stock").append(optionstring);   //为Select追加一个Option(下拉项)           
							} 
							
						}
						//alert(locals);
						//$("#customer_code").val(locals);
					}
				});
			}
    	}
    );
	
	$("#material_c_size_edit_stock").change(function (){
	    $("#material_c_quantity_edit_stock").val("");
	});
	
	$("#material_info_color_edit_stock").change(function (){
	    $("#size_width_edit_stock").val("");
		$("#size_height_edit_stock").val("");
		$("#material_quantity_edit_stock").val("1");
	});			
	
	$("#material_info_c_color_edit_stock").change(function (){
		var a = $("#material_select_stock_edit").val();
		var color = $("#material_info_c_color_edit_stock").val();
		$.ajax({
			url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/get_material_c_infomation',//通过Ajax取数据的目标页面
			data:{'material_name':a,'material_color':color,},
			type:'get',//方法，还可以是"post"
			dataType:'json',//数据类型，还有其它的，详见jQuery手册
			success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
			{
				var objs = locals.size;
				var size = '';
				$("#material_c_size_edit_stock").find("option").remove();
				$("#material_c_quantity_edit_stock").val("");				
				for (var o in objs) {
					var  jsonObj  =  objs[o];
					if(jsonObj.size){
						size = jsonObj.size;
						var  optionstring = "<option value=\"" + size + "\" >" + size + "</option>";
						$("#material_c_size_edit_stock").append(optionstring);   //为Select追加一个Option(下拉项
					}
					else if(jsonObj.size_mm){
						size = jsonObj.size_mm;
						var  optionstring = "<option value=\"" + size + "\" >" + size + "mm</option>";
						$("#material_c_size_edit_stock").append(optionstring);   //为Select追加一个Option(下拉项)  
					}
					else if(jsonObj.size_m_w && jsonObj.size_m_h){
						size = jsonObj.size_m_w+'*'+jsonObj.size_m_h;
						var  optionstring = "<option value=\"" + size + "\" >" + size + "mm</option>";
						$("#material_c_size_edit_stock").append(optionstring);   //为Select追加一个Option(下拉项)   
					}
					
					        
				} 
			}
		});
		
	});
	
	$("#st_jpg_upload_submit_edit").click(function (){
		var formData = new FormData($('#st_upload_jpg_edit')[0]);
        $.ajax({
			type: 'post',
			url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/stock_manage/two_img_upload',          
			data: formData,
			cache: false,
			processData:false,  
            contentType: false,  
			dataType:'json', 
		}).success(function (data){  
				$.each(data,function(i,n){
				   if(i=='jpg'){
				   		$('#st_image_no_edit').empty();
				   		$('#st_image_no_edit').append('<a href="'+n+'"  target="_blank"><img src="'+n+'" width="280" height="300" /></a>');
				   }
				 });
			
		}).error(function(){ 
				
		});
	});
	
	
	$("#sIE_size01_edit").change(function (){
		var s01 = $("#sIE_size01_edit").val();
		//alert(s01);
		if(s01 == 1){
			//alert('1');
			//$("#sIE_size02 option[value='1']").attr("selected", "selected");
			$("#sIE_size02_edit").find("option[value='1']").attr("selected",true);
		}
		if(s01 == 2){
			//alert('2');
			//$("#sIE_size02 option[value='2']").attr("selected", "selected");
			$("#sIE_size02_edit").find("option[value='2']").attr("selected",true);
		}
		
	});
	
	$("#sIE_size02_edit").change(function (){
		var s02 = $("#sIE_size02_edit").val();
		//$("#sIE_size01 option[value='1']").attr("selected", "selected");
		if(s02 == 1){
			//$("#sIE_size01 option[value='1']").attr("selected", "selected");
			$("#sIE_size01_edit").find("option[value='1']").attr("selected",true);
		}
		if(s02 == 2){
			//$("#sIE_size01 option[value='2']").attr("selected", "selected");
			$("#sIE_size01_edit").find("option[value='2']").attr("selected",true);
		}
	});
	
	var row_number = 0 ;
	$("#insert_material1_edit_stock").click(function (){
		
		var material_name = $("#material_select_stock_edit").val();
		var size_width = $("#size_inch_width_edit_stock").val();
		var size_height = $("#size_inch_height_edit_stock").val();
		var color = $("#material_info_color_edit_stock").val();
		var quantity = $("#material_quantity_edit_stock").val();
		var s01 = $("#sIE_size01_edit").val();
		var size = size_width+"*"+size_height;
		var m_unit = '';
		if(s01 == '1'){
			m_unit = 'inch';
		}
		if(s01 == '2'){
			m_unit = 'cm';
		}
		if($("#material_info_color_edit_stock").val()!="" && $("#size_width_edit_stock").val()!="" && $("#size_height_edit_stock").val()!="" && $("#material_quantity_edit_stock").val()!=""){
		$.ajax({
			url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/insert_table_material',//通过Ajax取数据的目标页面
			type:'get',//方法，还可以是"post"
			data:{'material_name':material_name,'material_color':color,'material_size':size,'material_quantity':quantity},
			dataType:'json',//数据类型，还有其它的，详见jQuery手册
			success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
			{
				if(locals != 0){
				//alert(locals);
				var table_value = "<tr class='sm_tabClass02'> <td>"+material_name+"<input type='hidden' id='row_number' value='"+row_number+"' /><input type='hidden' name='materials["+row_number+"][material_name]' value='"+material_name+"' /></td><td>"+color+"<input type='hidden' name='materials["+row_number+"][color]' value='"+color+"' /></td>  <td>"+size_width+"*"+size_height+" inch "+m_unit+"<input type='hidden' name='materials["+row_number+"][size_width]' value='"+size_width+"' /><input type='hidden' name='materials["+row_number+"][size_height]' value='"+size_height+"' /><input type='hidden' name='materials["+row_number+"][size]' value='"+size+"' /><input type='hidden' name='materials["+row_number+"][m_unit]' value='"+m_unit+"' /></td> <td>"+quantity+"<input type='hidden' name='materials["+row_number+"][quantity]' value='"+quantity+"' /></td><td onClick='getDel(this,"+locals+")'><a href='#'>删除</a></td></tr>";
				$("#material_table_edit_stock").append(table_value);   //为table追加一个tr(下拉项)
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
	
	$("#insert_material2_edit_stock").click(function (){
		var material_name = $("#material_select_stock_edit").val();
		
		var color = $("#material_info_c_color_edit_stock").val();
		var quantity = $("#material_c_quantity_edit_stock").val();
		
		var size = $("#material_c_size_edit_stock").val();
		var size_text = $("#material_c_size_edit_stock").find("option:selected").text(); 
		
		if($("#material_info_c_color_edit_stock").val()!="" && $("#material_c_size_edit_stock").val()!="" && $("#material_c_quantity_edit_stock").val()!=""){
		
		$.ajax({
			url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/insert_table_material',//通过Ajax取数据的目标页面
			type:'get',//方法，还可以是"post"
			data:{'material_name':material_name,'material_color':color,'material_size':size,'material_quantity':quantity},
			dataType:'json',//数据类型，还有其它的，详见jQuery手册
			success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
			{
				if(locals != 0){
				var table_value = "<tr class='sm_tabClass02'> <td>"+material_name+"<input type='hidden' id='row_number' value='"+row_number+"' /><input type='hidden' name='materials["+row_number+"][material_name]' value='"+material_name+"' /></td><td>"+color+"<input type='hidden' name='materials["+row_number+"][color]' value='"+color+"' /></td>  <td>"+size_text+"<input type='hidden' name='materials["+row_number+"][size]' value='"+size+"' /></td> <td>"+quantity+"<input type='hidden' name='materials["+row_number+"][quantity]' value='"+quantity+"' /></td><td onClick='getDel(this,"+locals+")'><a href='#'>删除</a></td></tr>";
				$("#material_table_edit_stock").append(table_value);   //为table追加一个tr(下拉项)
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
	
	
		
	var stock_id = $("#stock_id").val();
	
	$('input').blur(function(){
		if(this.id == 'stock_code_edit'){
			
			if(this.value==''){
				
			}
			else{
				$('#sm_error_edit').html('');
				p='stock_code='+this.value+'&stock_id='+stock_id;
				
     			$.ajax({
					url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/stock_manage/check_stock_code',
					type:'post',
					 dataType:'json',
					 data:p,
					 success:check_stock_code_back
			    });
				
			}
		}
	});
	
	
});


function check_stock_code_back(data)
	{
		if(data >= 1)
		{
			$('#sm_error_edit').css("display","block");
			$('#sm_error_edit').html('该编号被使用');
		}
		else
		{
			$('#sm_error_edit').css("display","none");
			$('#sm_error_edit').html('该编号可以使用');
		}
	}


function getDel(k,row){
	//alert(row);
	$.ajax({
			url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/delete_table_material',//通过Ajax取数据的目标页面
			type:'get',//方法，还可以是"post"
			data:{'id':row},
			dataType:'json',//数据类型，还有其它的，详见jQuery手册
			success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
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