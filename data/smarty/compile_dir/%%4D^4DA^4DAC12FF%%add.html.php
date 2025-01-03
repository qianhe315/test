<?php /* Smarty version 2.6.22, created on 2016-03-25 14:45:36
         compiled from cn_stock_manage/add.html */ ?>
<script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/cstown_Sys.js" type="text/javascript"></script>
<link href="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/css/cstown_sys.css" rel="stylesheet" type="text/css" media="screen"/>
<div class="pageContent">
  
    <div class="stkInfEnter" layoutH="100" style="width:97%; margin-left:20px; overflow-x:hidden;">
      <div class="sIE_title">Stock 信息录入</div>
      <div class="sIEK" style="width:65%;" id="size_ta">
        <div class="sIE_l" style="width:520px;" id="tangtu_div"><!--烫图的-->
        <form method="post" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, navTabAjaxDone)" id="info_form" >
          <div class="sIE_l_01" style="width:260px;">
          	<div class="sIE_l_01_title" style="width:80px;">STOCK 类型:</div>
            <div class="sIE_r01" style="width:180px;">
         <select name="stock_type" id="stock_type" style="width:137px; height:25px">
                <option value="1" >烫图</option>
                <option value="2" >指甲贴</option>
                <option value="3" >T恤</option>
          </select>
          </div>
            <div id="stock_type_error" style="float:left; width:136px; height:20px; line-height:20px; text-align:center; display:none; margin-left:80px; color:#FFF; background:#F00;"></div>
            <div class="sIE_l_01_title" style="width:80px; margin-top:5px;">STOCK 编号:</div>
            <input type="hidden" id="stock_id" name="stock_id" value="<?php echo $this->_tpl_vars['stock_manage']['id']; ?>
" />
            <input type="hidden" id="hidden_id" name="hidden_id" value="<?php echo $this->_tpl_vars['hidden_user_id']; ?>
" />
            <input type="text" class="sIE_No"  style="width:130px; margin-top:5px;" name="stock_code" id="stock_code" value="<?php echo $this->_tpl_vars['stock_manage']['stock_code']; ?>
"/>
            <div id="sm_error" style="float:left; width:136px; height:20px; line-height:20px; text-align:center; display:none; margin-left:80px; color:#FFF; background:#F00;"></div>
            <div class="sIE_l_01_title" style="width:80px; margin-top:5px;">报价系数:</div>
            <div class="sIE_r01" style="width:180px;">
            <input type="text"  class="sIE_No" style="width:130px; margin-top:5px;" id="coefficient_quotation" name="coefficient_quotation" value=""/>
            </div>
           <div id="coefficient_quotation_error" style="float:left; width:136px; height:20px; line-height:20px; text-align:center; display:none; color:#FFF; background:#F00;"></div>
          </div>
          <div class="sIE_l_01" style="width:260px;  margin-top: 10px; float:left;margin-left:30px;">
            <div class="sIE_l_01_title" style="width:50px;">尺&nbsp; &nbsp; 寸:</div>
            <div class="sIE_r01" style="width:180px;">
              <div class="sIE_r01_div">
                <input type="text"  class="sIE_No" style="width:130px;" id="inch_w" name="size_inch_w" value="<?php echo $this->_tpl_vars['stock_manage']['size_inch_w']; ?>
"/>
                <div class="sIE_r01_div_r" style="margin-top:5px;">inch W</div>
              </div>
              <div class="sIE_r01_div">
                <input type="text"  class="sIE_No" style="width:130px;" id="inch_h" name="size_inch_h" value="<?php echo $this->_tpl_vars['stock_manage']['size_inch_h']; ?>
"/>
                <div class="sIE_r01_div_r" style="margin-top:5px;">inch H</div>
              </div>
              <div class="sIE_r01_div">
                <input type="text"  class="sIE_No" style="width:130px;" id="cm_w" name="size_cm_w" value="<?php echo $this->_tpl_vars['stock_manage']['size_cm_w']; ?>
" />
                <div class="sIE_r01_div_r" style="margin-top:5px;">cm W</div>
              </div>
              <div class="sIE_r01_div">
                <input type="text"  class="sIE_No" style="width:130px;" id="cm_h" name="size_cm_h" value="<?php echo $this->_tpl_vars['stock_manage']['size_cm_h']; ?>
" />
                <div class="sIE_r01_div_r" style="margin-top:5px;">cm H</div>
              </div>
              <div id="sm_error_size" style="float:left; width:136px; height:20px; line-height:20px; text-align:center; display:none; color:#FFF; background:#F00;"></div>
            </div>
             
          </div>
          
         </form>
         
            <div style=" float:right; margin-right:10px; margin-top:-230px; width:230px;">
                <div class="sIE_l_01_title" style="width:70px;">材料录入:</div>
                <textarea name="add_materials_by_hand" id="add_materials_by_hand" style="width:140px; height:140px;"></textarea>
                <button type="button" id="insert_materials_by_hand" style="margin-left:70px;">确定</button>
                <div id="text_err" class="sIE_l" style="width:400px; color:#F00;display:none"> </div>
            </div>
         </div>
         
         <!--指甲贴的-->
         <div  style="display:none" class="sIE_l_01" style="width:260px;" id="zhijia_div">
         <form  method="post" style="width:260px;" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, navTabAjaxDone)" id="info_form_zhijia">
          
          <div class="sIE_l_01_title" style="width:80px;">STOCK 类型:</div>
          <div class="sIE_r01" style="width:180px;">
         <select name="stock_type1" id="stock_type1" style="width:137px; height:25px">
                <option value="1" >烫图</option>
                <option value="2" >指甲贴</option>
                <option value="3" >T恤</option>
          </select>
          </div>
          <div id="stock_type1_error" style="float:left; width:136px; height:20px; line-height:20px; text-align:center; display:none; margin-left:80px; color:#FFF; background:#F00;"></div>  </br>
          <div class="sIE_l_01_title" style="width:80px; margin-top:5px;">STOCK 编号:</div>
          <input type="hidden" id="stock_id1" name="stock_id1" value="<?php echo $this->_tpl_vars['stock_manage']['id']; ?>
" />
          <input type="text" class="sIE_No"  style="width:130px; margin-top:5px;" name="stock_code1" id="stock_code1" value="<?php echo $this->_tpl_vars['stock_manage']['stock_code']; ?>
"/>
          <div id="stock_code1_error" style="float:left; width:136px; height:20px; line-height:20px; text-align:center; display:none; margin-left:80px; color:#FFF; background:#F00;"></div>
        </form>
        </div>
        
        <!--T恤的-->
        <div  style="display:none" class="sIE_l_01" style="width:260px;" id="Tshirt_div">
            <form  method="post" style="width:300px;" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, navTabAjaxDone)" id="info_form_Tshirt">
                <div class="sIE_l_01_title" style="width:80px;">STOCK 类型:</div>
                <div class="sIE_r01" style="width:180px;">
                    <select name="stock_type2" id="stock_type2" style="width:137px; height:25px">
                        <option value="1" >烫图</option>
                        <option value="2" >指甲贴</option>
                        <option value="3" >T恤</option>
                    </select>
                </div>
                <div id="stock_type1_error" style="float:left; width:136px; height:20px; line-height:20px; text-align:center; display:none; margin-left:80px; color:#FFF; background:#F00;"></div>  </br>
                <div class="sIE_l_01_title" style="width:80px; margin-top:5px;">STOCK 编号:</div>
                <input type="hidden" id="stock_id2" name="stock_id2" value="<?php echo $this->_tpl_vars['stock_manage']['id']; ?>
" />
                <input type="text" class="sIE_No"  style="width:130px; margin-top:5px;" name="stock_code2" id="stock_code2" value="<?php echo $this->_tpl_vars['stock_manage']['stock_code']; ?>
"/>
                <div id="stock_code2_error" style="float:left; width:136px; height:20px; line-height:20px; text-align:center; display:none; margin-left:80px; color:#FFF; background:#F00;"></div>
                <div class="sIE_l_01" style="width:260px;  margin-top: 10px; float:left;margin-left:30px;">
                    <div class="sIE_l_01_title" style="width:50px;">尺&nbsp; &nbsp; 寸:</div>
                    <div class="sIE_r01" style="width:180px;">
                        <div class="sIE_r01_div">
                            <input type="text"  class="sIE_No" style="width:130px;" id="inch_w_Tshirt" name="size_inch_w_Tshirt" value="<?php echo $this->_tpl_vars['stock_manage']['size_inch_w']; ?>
"/>
                            <div class="sIE_r01_div_r" style="margin-top:5px;">inch W</div>
                        </div>
                        <div class="sIE_r01_div">
                            <input type="text"  class="sIE_No" style="width:130px;" id="inch_h_Tshirt" name="size_inch_h_Tshirt" value="<?php echo $this->_tpl_vars['stock_manage']['size_inch_h']; ?>
"/>
                            <div class="sIE_r01_div_r" style="margin-top:5px;">inch H</div>
                        </div>
                        <div class="sIE_r01_div">
                            <input type="text"  class="sIE_No" style="width:130px;" id="cm_w_Tshirt" name="size_cm_w_Tshirt" value="<?php echo $this->_tpl_vars['stock_manage']['size_cm_w']; ?>
" />
                            <div class="sIE_r01_div_r" style="margin-top:5px;">cm W</div>
                        </div>
                        <div class="sIE_r01_div">
                            <input type="text"  class="sIE_No" style="width:130px;" id="cm_h_Tshirt" name="size_cm_h_Tshirt" value="<?php echo $this->_tpl_vars['stock_manage']['size_cm_h']; ?>
" />
                            <div class="sIE_r01_div_r" style="margin-top:5px;">cm H</div>
                        </div>
                    	<div id="error_size_Tshirt" style="float:left; width:200px; height:20px; line-height:20px; text-align:center; display:none; color:#FFF; background:#F00;"></div>
                    </div>
                </div>
            </form>
        </div>
        
        <div class="sIEK" style=" width:30%; margin-left:30px;">
        <div class="sIE_l_01" style="margin-top:10px;width:100%;" id="cailiao">
          <div class="sIE_l_01_title" style="width:40px;">材料:</div>
          <div class="sIE_r01">
            <div class="sIE_r01_div">
              <select class="sIE_r01_Select" id="material_select_stock_add" style="width:150px;">
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
        
        <div class="sIE_l_02" id="material_info_stock_add" style="display:none;">
          <div class="sIE_l_02_div">
            <div class="sIE_l_01_title" style="width:40px;">颜色:</div>
            <select id="material_info_color_stock_add" class="sIE_r01_Select" style="width:150px;">
              
            </select>
          </div>
          <div class="sIE_l_02_div">
            <div class="sIE_l_01_title" style="width:40px;">尺寸:</div>
            <input type="text" class="sIE_No" id="size_width_stock_add" style="width:85px;"  />
            <div class="sIE_No" style="width:54px; margin-left:5px;">MM W</div>
            <!--<select class="sIE_sizeSelect" id="sIE_size01">
              <option value="1">inch</option>
              <option value="2">cm</option>
            </select>-->
          </div>
          
          <div class="sIE_l_02_div">
            <div class="sIE_l_01_title" style="width:40px;">&nbsp;</div>
            
            <input type="text" class="sIE_No" id="size_height_stock_add"  style="width:85px;" />
            <div class="sIE_No" style="width:54px; margin-left:5px;">MM H</div>
            <!--<select class="sIE_sizeSelect" id="sIE_size02">
              <option value="1">inch</option>
              <option value="2">cm</option>
            </select>-->
          </div>
          
          <div class="sIE_l_02_div">
            <div class="sIE_l_01_title" style="width:40px;">&nbsp;</div>
            <input type="text" class="sIE_No" id="size_inch_width_stock_add" style="width:85px;"  />
            <div class="sIE_No" style="width:54px; margin-left:5px;">inch W</div>
            <!--<select class="sIE_sizeSelect" id="sIE_size01">
              <option value="1">inch</option>
              <option value="2">cm</option>
            </select>-->
          </div>
          
          <div class="sIE_l_02_div">
            <div class="sIE_l_01_title" style="width:40px;">&nbsp;</div>
            
            <input type="text" class="sIE_No" id="size_inch_height_stock_add"  style="width:85px;" />
            <div class="sIE_No" style="width:54px; margin-left:5px;">inch H</div>
            <!--<select class="sIE_sizeSelect" id="sIE_size02">
              <option value="1">inch</option>
              <option value="2">cm</option>
            </select>-->
          </div>
          
          <div class="sIE_l_02_div">
            <div class="sIE_l_01_title" style="width:40px;">数量:</div>
            <input type="text"  class="sIE_size" id="material_quantity_stock_add" readonly="readonly" style="width:146px;" />
          </div>
          <button type="button" id="insert_material1_stock_add">添加材料</button>
        </div>
        
        <div class="sIE_l_02" id="material_info_c_stock_add" style="display:none;">
          <div class="sIE_l_02_div">
            <div class="sIE_l_01_title" style="width:40px;">颜色:</div>
             <select id="material_info_c_color_stock_add" class="sIE_r01_Select" style="width:150px;">
              
            </select>
          </div>
          <div class="sIE_l_02_div">
            <div class="sIE_l_01_title" style="width:40px;">尺寸:</div>
            <select class="sIE_r01_Select" id="material_c_size_stock_add" style="width:150px;">
              <option>请选择...</option>
            </select>
          </div>
          <div class="sIE_l_02_div">
            <div class="sIE_l_01_title" style="width:40px;">数量:</div>
            <input type="text"  class="sIE_size" id="material_c_quantity_stock_add" style="width:146px;" />
          </div>
          
          <button type="button" id="insert_material2_stock_add">添加材料</button>
         
        </div>
        <div id="sm_error_material_stock_add" style="float:left; width:150px; height:20px; line-height:20px; margin-left:42px; display:none; text-align:center;color:#FFF; background:#F00;"></div> 
      </div>
        <div class="sIE_l_02" style="width:100%; margin-top:50px;" id="cailiao_table">
            <table cellspacing="0" class="sIE_l_02Tab" id="material_table_stock_add" style="width:98%">
              <tr>
                <th>材料</th>
                <th>颜色</th>
                <th>尺寸</th>
                <th>数量</th>
                <th>操作</th>
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
                  <td onclick="getDel(this,<?php echo $this->_tpl_vars['ms']['id']; ?>
)"><a href="#">删除</a></td>
              </tr>
              <?php endforeach; endif; unset($_from); ?>
              <?php endif; ?>
            </table>
          </div>
        
      </div>
      
      <div class="sIE_r" style="width:420px;" id="image0">
        
          <div class="sIE_r_img" style="height:400px; width:400px;">
          <div style="float:left;  width:300px; height:atuo;">
          <!--<img src="sss.jpg" width="224px" height="224px" />-->
          	  <iframe name="yframe_stock" src="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_stock_manage/two_img_upload" style="border:none; width:400px; height:400px;"></iframe>
          </div>
          <div style="float:left; margin-top:0px; width:400px;">
              <form action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_stock_manage/two_img_upload" id="stock_upload_img" target="yframe_stock" method="post" enctype="multipart/form-data" >
                 
                 <div style="float:left; height:50px; width:60px; overflow:hidden; position:relative;">
                     <input type="file" class="sIE_r_img_file" name="upload_file[]" multiple="multiple" id="jpg_file" style=" opacity:0; position:relative; z-index:10; margin-top:0px;" />
                     <input type="button" class="sIE_r_img_file" name="jpg" style=" opacity:1; width:60px; text-align:center; height:24px; position:absolute; z-index:9; margin-top:0px;" value="浏览" />
                    </div>
                     <input type="submit" value="上传JPG和CDR" id="img_upload_submit" style=" float:right; width:100px; height:24px;" />
                 
                 
              </form>
          </div>
        </div>
        
        
        <!--<div class="sIE_r_img" style="height:36px; width:400px; margin-top:26px;">
          <div style="float:left; width:400px; height:atuo;">
          <img src="sss.jpg" width="224px" height="224px" />
          <iframe name="yframe_stock_cdr" src="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/stock_manage/upload_cdr" style="border:none; width:400px; height:38px;"></iframe>
          </div> 

          <div style="float:left; margin-top:0px; width:400px;">
          <form action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/stock_manage/upload_cdr" id="upload_cdr" target="yframe_stock_cdr" method="post" enctype="multipart/form-data" >
            
             <div style="float:left; height:50px; width:60px; overflow:hidden; position:relative;">
                 <input type="file" class="sIE_r_img_file" name="cdr_file" id="cdr_file" style=" opacity:0; position:relative; z-index:10; margin-top:0px;" />
                 <input type="button" class="sIE_r_img_file" name="jpg" style=" opacity:1; width:60px; text-align:center; height:24px; position:absolute; z-index:9; margin-top:0px;" value="浏览" />
                </div>
                 <input type="submit" value="上传CDR" id="cdr_upload_submit" style=" float:right; width:70px; height:24px;" />
             	
          </form>
        </div>
        </div>-->
          
        </div>
        <div class="sIE_r" style="width:420px; display:none" id="image1">
        
          <div class="sIE_r_img" style="height:400px; width:400px;">
          <div style="float:left;  width:300px; height:atuo;">
          <!--<img src="sss.jpg" width="224px" height="224px" />-->
          <iframe name="yframe_stock1" src="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_stock_manage/two_img_upload" style="border:none; width:400px; height:400px;"></iframe>
          </div>
          <div style="float:left; margin-top:0px; width:400px;">
          <form action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_stock_manage/two_img_upload" id="stock_upload_jpg1" target="yframe_stock1" method="post" enctype="multipart/form-data" >
             
             <div style="float:left; height:50px; width:60px; overflow:hidden; position:relative;">
                 <input type="file" class="sIE_r_img_file" name="upload_file[]" multiple="multiple" style=" opacity:0; position:relative; z-index:10; margin-top:0px;" />
                 <input type="button" class="sIE_r_img_file" name="jpg1" style=" opacity:1; width:60px; text-align:center; height:24px; position:absolute; z-index:9; margin-top:0px;" value="浏览" />
                </div>
                 <input type="submit" value="上传JPG和CDR"  style=" float:right; width:100px; height:24px;" />
             
             
          </form>
        </div>
        </div>
        
        
        <!--<div class="sIE_r_img" style="height:36px; width:400px; margin-top:26px;">
          <div style="float:left; width:400px; height:atuo;">
          <img src="sss.jpg" width="224px" height="224px" />
          <iframe  name="yframe_stock_cdr1" src="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/stock_manage/upload_cdr1" style="border:none; width:400px; height:38px;"></iframe>
          </div> 

          <div style="float:left; margin-top:0px; width:400px;">
          <form action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/stock_manage/upload_cdr1" id="upload_cdr1" target="yframe_stock_cdr1" method="post" enctype="multipart/form-data" >
            
             <div style="float:left; height:50px; width:60px; overflow:hidden; position:relative;">
                 <input type="file" class="sIE_r_img_file" name="cdr_file1" id="cdr_file1" style=" opacity:0; position:relative; z-index:10; margin-top:0px;" />
                 <input type="button" class="sIE_r_img_file" name="jpg1" style=" opacity:1; width:60px; text-align:center; height:24px; position:absolute; z-index:9; margin-top:0px;" value="浏览" />
                </div>
                 <input type="submit" value="上传CDR" id="cdr_upload_submit1" style=" float:right; width:70px; height:24px;" />
             	
          </form>
        </div>
        </div>-->
          
        </div>
      	
         <!--T恤-->
        <div class="sIE_r" style="width:420px; display:none" id="image2">
            <div class="sIE_r_img" style="height:400px; width:400px; margin-top:26px;">
                <div style="float:left; width:400px; height:atuo;">
                	<iframe  name="yframe_stock_cdr1" src="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_stock_manage/upload_jpg_T" style="border:none; width:400px; height:400px;"></iframe>
                </div> 
                <div style="float:left; margin-top:0px; width:400px;">
                	<form action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_stock_manage/upload_jpg_T" id="upload_jpg" target="yframe_stock_cdr1" method="post" enctype="multipart/form-data" >
                        <div style="float:left; height:50px; width:60px; overflow:hidden; position:relative;">
                            <input type="file" class="sIE_r_img_file" name="jpg_file" id="jpg_file" style=" opacity:0; position:relative; z-index:10; margin-top:0px;" />
                            <input type="button" class="sIE_r_img_file" name="jpg1" style=" opacity:1; width:60px; text-align:center; height:24px; position:absolute; z-index:9; margin-top:0px;" value="浏览" />
                        </div>
                        <input type="submit" value="上传JPG" id="jpg_upload_submit" style=" float:right; width:70px; height:24px;" />
                    
                    </form>
                </div>
            </div>
        </div>
        
      
      
    </div>
    
    <div id="materials_informations" style="display:none;">
    	
            <input type="text" class="sIE_No"  name="stock_code" id="stock_code1"  style="display:none;"/>
         
                <input type="text"  class="sIE_No" id="inch_w1" name="size_inch_w"/>
              
                <input type="text"  class="sIE_No" id="inch_h1" name="size_inch_h"/>
               
                <input type="text"  class="sIE_No" id="cm_w1" name="size_cm_w" />
              
                <input type="text"  class="sIE_No" id="cm_h1" name="size_cm_h" />
               
            <table cellspacing="0" class="sIE_l_02Tab" id="material_table1_stock_add"  style="display:none;">
              <tr>
                <th>材料</th>
                <th>颜色</th>
                <th>尺寸</th>
                <th>数量</th>
                <th>操作</th>
              </tr>
              
            </table>
         
    </div>
    <div class="formBar" id="sub">
      <ul>
        <li>
          <div class="buttonActive">
            <div class="buttonContent">
              <button type="submit" id="submit_form">确定</button>
            </div>
          </div>
        </li>
        <li> 
        <div class="buttonActive">
            <div class="buttonContent" style="display:block">
              <button type="button" class="close" >取消</button>
            </div>
          </div>
        </li>
      </ul>
    </div>
    
    <div class="formBar" id="sub_zhijia" style="display:none">
      <ul>
        <li>
          <div class="buttonActive">
            <div class="buttonContent">
              <button type="submit" id="submit_form1">确定</button>
            </div>
          </div>
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
    
    <div class="formBar" id="sub_Tshirt" style="display:none"><!--T恤提交-->
      <ul>
        <li>
          <div class="buttonActive">
            <div class="buttonContent">
              <button type="submit" id="submit_form2">确定</button>
            </div>
          </div>
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
 		
    
</div>

<!-- {literal} --> 
<script type="text/javascript">

$(document).ready(function()  
{
	//STOCK 类型 js 开始
	//指甲贴
	$("#stock_type").change(function(){
		if($("#stock_type").val()==2){
			$("#tangtu_div").css("display","none");
			$("#cailiao").css("display","none");
			$("#cailiao_table").css("display","none");
			$("#material_info_stock_add").css("display","none");
			$("#material_info_c_stock_add").css("display","none");
			$("#sub").css("display","none");
			$("#image0").css("display","none");
			
			$("#Tshirt_div").css("display","none");
			$("#sub_Tshirt").css("display","none");
			$("#image2").css("display","none");
			
			$("#zhijia_div").css("display","block");
			$("#sub_zhijia").css("display","block");
			$("select[name=stock_type1] option[value='2']").attr("selected","selected");
			$("#image1").css("display","block");
			$("#size_ta").css("width","30%");
		}
		if($("#stock_type").val()==3){
			$("#tangtu_div").css("display","none");
			$("#cailiao").css("display","none");
			$("#cailiao_table").css("display","none");
			$("#material_info_stock_add").css("display","none");
			$("#material_info_c_stock_add").css("display","none");
			$("#sub").css("display","none");
			$("#image0").css("display","none");
			
			$("#zhijia_div").css("display","none");
			$("#sub_zhijia").css("display","none");
			$("#image1").css("display","none");
			
			$("#Tshirt_div").css("display","block");
			$("#sub_Tshirt").css("display","block");
			$("#image2").css("display","block");
			$("select[name=stock_type2] option[value='3']").attr("selected","selected");
			$("#size_ta").css("width","40%");
		}
		
	});
	//烫图
	$("#stock_type1").change(function(){
		if($("#stock_type1").val()==1){
			$("#image1").css("display","none");
			$("#zhijia_div").css("display","none");
			$("#sub_zhijia").css("display","none");
			
			$("#Tshirt_div").css("display","none");
			$("#sub_Tshirt").css("display","none");
			$("#image2").css("display","none");
			
			$("#tangtu_div").css("display","block");
			$("#cailiao").css("display","block");
			$("#cailiao_table").css("display","block");
			$("#sub").css("display","block");
			$("#image0").css("display","block");
			$("select[name=stock_type] option[value='1']").attr("selected","selected");
			$("#size_ta").css("width","65%");
		}
		
		if($("#stock_type1").val()==3){
			$("#tangtu_div").css("display","none");
			$("#cailiao").css("display","none");
			$("#cailiao_table").css("display","none");
			$("#material_info_stock_add").css("display","none");
			$("#material_info_c_stock_add").css("display","none");
			$("#sub").css("display","none");
			$("#image0").css("display","none");
			
			$("#zhijia_div").css("display","none");
			$("#sub_zhijia").css("display","none");
			$("#image1").css("display","none");
			
			$("#Tshirt_div").css("display","block");
			$("#sub_zhijia").css("display","block");
			$("#image2").css("display","block");
			$("select[name=stock_type2] option[value='3']").attr("selected","selected");
			$("#size_ta").css("width","40%");
		}
	});
	
	//T恤
	$("#stock_type2").change(function(){
		if($("#stock_type2").val()==1){
			$("#image1").css("display","none");
			$("#zhijia_div").css("display","none");
			$("#sub_zhijia").css("display","none");
			
			$("#Tshirt_div").css("display","none");
			$("#sub_Tshirt").css("display","none");
			$("#image2").css("display","none");
			
			$("#tangtu_div").css("display","block");
			$("#cailiao").css("display","block");
			$("#cailiao_table").css("display","block");
			$("#sub").css("display","block");
			$("#image0").css("display","block");
			$("select[name=stock_type] option[value='1']").attr("selected","selected");
			$("#size_ta").css("width","65%");
		}
		
		if($("#stock_type2").val()==2){
			$("#tangtu_div").css("display","none");
			$("#cailiao").css("display","none");
			$("#cailiao_table").css("display","none");
			$("#material_info_stock_add").css("display","none");
			$("#material_info_c_stock_add").css("display","none");
			$("#sub").css("display","none");
			$("#image0").css("display","none");
			
			$("#Tshirt_div").css("display","none");
			$("#sub_Tshirt").css("display","none");
			$("#image2").css("display","none");
			
			$("#zhijia_div").css("display","block");
			$("#sub_zhijia").css("display","block");
			$("select[name=stock_type1] option[value='2']").attr("selected","selected");
			$("#image1").css("display","block");
			$("#size_ta").css("width","30%");
		}
		
	});

	//STOCK 类型 js 结束
	
	//T恤提交
	$("#submit_form2").click(function(){
		$("#stock_code2_error").css("display","none");
		$("#error_size_Tshirt").css("display","none");
		if($("#stock_code2").val() == "" || isEmpty($('#stock_code2').val())){
			$("#stock_code2_error").css("display","block");
			$("#stock_code2_error").html("编号必填且不包含空格");
		}else if($("#inch_w_Tshirt").val()=='' || $("#inch_h_Tshirt").val()=='' || $("#cm_w_Tshirt").val()=='' || $("#cm_h_Tshirt").val()==''){
			$("#error_size_Tshirt").css("display","block");
			$("#error_size_Tshirt").html("尺寸不能为空，且必须为数字！");
		} else{		
			$.ajax({
					url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_stock_manage/check_photo_T',//通过Ajax取数据的目标页面
					data:{},
					type:'post',//方法，还可以是"post"
					dataType:'text',//数据类型，还有其它的，详见jQuery手册
					success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
					{
						if(locals==1){
							$("#info_form_Tshirt").submit();
						}else{
							$("#error_size_Tshirt").css("display","block");
							$("#error_size_Tshirt").html("请上传图片,且名称不包含空格！");
							
						}
					}
			    });
		}
			
	});
	
	
	
	//指甲贴提交
	$("#submit_form1").click(function(){
		if($("#stock_code1").val() == "" || isEmpty($('#stock_code1').val())){
			$("#stock_code1_error").css("display","block");
			$("#stock_code1_error").html("编号必填且不包含空格");
		}else{			
			$("#stock_code1_error").css("display","none");
			$("#stock_code1_error_size").css("display","none");
			$("#sm_error_material_stock_add").css("display","none");
			$.ajax({
					url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_stock_manage/check_photo',//通过Ajax取数据的目标页面
					data:{},
					type:'post',//方法，还可以是"post"
					dataType:'text',//数据类型，还有其它的，详见jQuery手册
					success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
					{
						if(locals==1){
							$("#sm_error_size").css("display","none");
							$("#info_form_zhijia").submit();
						}else{
							$("#sm_error_size").css("display","block");
							$("#sm_error_size").html("请上传图片,且名称不包含空格！");
							
						}
					}
			    });
		}
			
	});
	
	
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
	
	
	$("#jpg_upload_submit").click(function (){
		//alert('1111');
		$("#stock_upload_jpg").submit();
	});
	
	$("#submit_form").click(function () {
	
		var material_c_quantity = $("#material_c_quantity_stock_add").val();
		var material_info_c_color = $("#material_info_c_color_stock_add").val();
		var coefficient_quotation = $("#coefficient_quotation").val();
		var hidden_id = $("#hidden_id").val();
		var c= /^\d+(?=\.{0,1}\d+$|$)/;
		var b=c.test(coefficient_quotation);
		
		if($("#stock_code").val() == "" || isEmpty($('#stock_code').val())){
			$("#sm_error").css("display","block");
			$("#sm_error").html("编号必填且不包含空格");
		}
		else if($("#sm_error").is(":visible")){
			
		}else if(!validate($("#inch_w").val()) || !validate($("#inch_h").val()) || !validate($("#cm_w").val())|| !validate($("#cm_h").val()) || $("#inch_w").val() == "" || $("#inch_h").val() == "" || $("#cm_w").val() == "" || $("#cm_h").val() == ""){
				$("#sm_error").css("display","none");
				$("#sm_error_size").css("display","block");
				$("#sm_error_size").html("尺寸必填且必须为数字");
		}
		else if(!$(".sm_tabClass01").is(":visible")){
			$("#sm_error_material_stock_add").css("display","block");
			$("#sm_error_material_stock_add").html("请添加材料项！");
		}else if((hidden_id=='2' || hidden_id=='1') && (b==false || coefficient_quotation<=0 )){
			$("#sm_error_material_stock_add").css("display","none");
			$("#coefficient_quotation_error").css("display","block");
			$("#coefficient_quotation_error").html("报价系数必须为正数！");
		}
/*		else if($("#material_select").val() == "" || material_info_c_color == "" || material_c_quantity == "" || !validate($("#material_c_quantity").val())){
			$("#sm_error").css("display","none");
			$("#sm_error_size").css("display","none");
			$("#sm_error_material").css("display","block");
			$("#sm_error_material").html("必填,请填写完整信息");
			
		}*/
		else{			
			$("#sm_error").css("display","none");
			$("#sm_error_size").css("display","none");
			$("#sm_error_material_stock_add").css("display","none");
			$.ajax({
					url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_stock_manage/check_photo',//通过Ajax取数据的目标页面
					data:{},
					type:'post',//方法，还可以是"post"
					dataType:'text',//数据类型，还有其它的，详见jQuery手册
					success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
					{
						if(locals==1){
							$("#sm_error_size").css("display","none");
							$("#info_form").submit();
						}else{
							$("#sm_error_size").css("display","block");
							$("#sm_error_size").html("请上传图片,且名称不包含空格！");
							
						}
					}
			    });			
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
	
	
	//T恤的尺寸//////////////////////////////////开始////////////
	$("#inch_w_Tshirt").bind("input propertychange", function() {
		//alert($(this).val());
		var cm_w = $(this).val() * 2.54;
		if(cm_w != ''){
			cm_w = cm_w.toFixed(2);
		}
		$("#cm_w_Tshirt").val(cm_w);
		$("#cm_w1").val(cm_w);
	});
	
	$("#inch_h_Tshirt").bind("input propertychange", function() {
		//alert($(this).val());
		var cm_h = $(this).val() * 2.54;
		if(cm_h != ''){
			cm_h = cm_h.toFixed(2);
		}
		
		$("#cm_h_Tshirt").val(cm_h);
		$("#cm_h1").val(cm_h);
	});
	
	$("#cm_w_Tshirt").bind("input propertychange", function() {
		//alert($(this).val());
		var inch_w = $(this).val() / 2.54;
		
		if(inch_w != ''){
			inch_w = inch_w.toFixed(2);
		}
		
		$("#inch_w_Tshirt").val(inch_w);
		$("#inch_w1").val(inch_w);
	});
	
	$("#cm_h_Tshirt").bind("input propertychange", function() {
		//alert($(this).val());
		var inch_h = $(this).val() / 2.54;
		if(inch_h != ''){
			inch_h = inch_h.toFixed(2);
		}
		$("#inch_h_Tshirt").val(inch_h);
		$("#inch_h1").val(inch_h);
	});
	//T恤的尺寸//////////////////////////////////结束////////////	
	
	
	$("#size_width_stock_add").bind("input propertychange", function() {
		//alert($(this).val());
		var mm_w = $(this).val() / 25.4;
		if(mm_w != ''){
			mm_w = mm_w.toFixed(2);
		}
		$("#size_inch_width_stock_add").val(mm_w);
	});
	
	$("#size_height_stock_add").bind("input propertychange", function() {
		//alert($(this).val());
		var mm_h = $(this).val() / 25.4;
		if(mm_h != ''){
			mm_h = mm_h.toFixed(2);
		}
		
		$("#size_inch_height_stock_add").val(mm_h);
	});
	
	$("#size_inch_width_stock_add").bind("input propertychange", function() {
		//alert($(this).val());
		var inch_w = $(this).val() * 25.4;
		
		if(inch_w != ''){
			inch_w = inch_w.toFixed(2);
		}
		
		$("#size_width_stock_add").val(inch_w);
	});
	
	$("#size_inch_height_stock_add").bind("input propertychange", function() {
		//alert($(this).val());
		var inch_h = $(this).val() * 25.4;
		if(inch_h != ''){
			inch_h = inch_h.toFixed(2);
		}
		$("#size_height_stock_add").val(inch_h);
	});
	
    
    $("#material_select_stock_add").change(
    	function()
    	{
    		//获取id为select的下拉框选中的值
    	    var a = $("#material_select_stock_add").val();
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
						$("#material_info_color_stock_add").find("option").remove();
						$("#material_info_c_color_stock_add").find("option").remove();
						$("#material_c_size_stock_add").find("option").remove();
						$("#material_c_quantity_stock_add").val("");	
						$("#size_width_stock_add").val("");
						$("#size_height_stock_add").val("");
						$("#material_quantity_stock_add").val("1");
						if(locals.result == 0){
							
						}else if(locals.result == 2){
							$("#material_info_stock_add").css("display","none");
							$("#material_info_c_stock_add").css("display","block");
							$("#material_info_color_stock_add").empty();
							var objs = locals.color;
							$("#material_info_c_color_stock_add").append(opti);   //为Select追加一个Option(下拉项)     
							for (var o in objs) {
								var  jsonObj  =  objs[o];
								var  optionstring = "<option value=\"" + jsonObj.material_color + "\" >" + jsonObj.material_color + "</option>";
							    $("#material_info_c_color_stock_add").append(optionstring);   //为Select追加一个Option(下拉项)           
							} 
							
						}else if(locals.result == 1){
							$("#material_info_stock_add").css("display","block");
							$("#material_info_c_stock_add").css("display","none");
							$("#material_info_c_color_stock_add").empty();
							//alert(locals.color.length);//输出子对象数量
							var objs = locals.color;
							$("#material_info_color_stock_add").append(opti);   //为Select追加一个Option(下拉项)        
							for (var o in objs) {
								var  jsonObj  =  objs[o];
								var  optionstring = "<option value=\"" + jsonObj.color + "\" >" + jsonObj.color + "</option>";
							    $("#material_info_color_stock_add").append(optionstring);   //为Select追加一个Option(下拉项)           
							} 
							
						}
						//alert(locals);
						//$("#customer_code").val(locals);
					}
				});
			}
    	}
    );
	
	$("#material_c_size_stock_add").change(function (){
	    $("#material_c_quantity_stock_add").val("");
	});
	
	$("#material_info_color_stock_add").change(function (){
	    $("#size_width_stock_add").val("");
		$("#size_height_stock_add").val("");
		$("#material_quantity_stock_add").val("1");
	});			
	
	$("#material_info_c_color_stock_add").change(function (){
		var a = $("#material_select_stock_add").val();
		var color = $("#material_info_c_color_stock_add").val();
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
				$("#material_c_size_stock_add").find("option").remove();
				$("#material_c_quantity_stock_add").val("");				
				for (var o in objs) {
					var  jsonObj  =  objs[o];
					if(jsonObj.size){
						size = jsonObj.size;
						var  optionstring = "<option value=\"" + size + "\" >" + size + "</option>";
						$("#material_c_size_stock_add").append(optionstring);   //为Select追加一个Option(下拉项
					}
					else if(jsonObj.size_mm){
						size = jsonObj.size_mm;
						var  optionstring = "<option value=\"" + size + "\" >" + size + "mm</option>";
						$("#material_c_size_stock_add").append(optionstring);   //为Select追加一个Option(下拉项)  
					}
					else if(jsonObj.size_m_w&& jsonObj.size_m_h){
						size = jsonObj.size_m_w+'*'+jsonObj.size_m_h;
						var  optionstring = "<option value=\"" + size + "\" >" + size + "mm</option>";
						$("#material_c_size_stock_add").append(optionstring);   //为Select追加一个Option(下拉项)   
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
	$("#insert_material1_stock_add").click(function (){
		
		var material_name = $("#material_select_stock_add").val();
		var size_width = $("#size_inch_width_stock_add").val();
		var size_height = $("#size_inch_height_stock_add").val();
		var color = $("#material_info_color_stock_add").val();
		var quantity = $("#material_quantity_stock_add").val();
		var s01 = $("#sIE_size01").val();
		var size = size_width+"*"+size_height;
		var m_unit = '';
		if(s01 == '1'){
			m_unit = 'inch';
		}
		if(s01 == '2'){
			m_unit = 'cm';
		}
		if($("#material_info_color_stock_add").val()!="" && $("#size_width_stock_add").val()!="" && $("#size_height_stock_add").val()!="" && $("#material_quantity_stock_add").val()!=""){
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
				var table_value = "<tr class='sm_tabClass01'> <td>"+material_name+"<input type='hidden' id='row_number' value='"+row_number+"' /><input type='hidden' name='materials["+row_number+"][material_name]' value='"+material_name+"' /></td><td>"+color+"<input type='hidden' name='materials["+row_number+"][color]' value='"+color+"' /></td>  <td>"+size_width+"*"+size_height+" inch  "+m_unit+"<input type='hidden' name='materials["+row_number+"][size_width]' value='"+size_width+"' /><input type='hidden' name='materials["+row_number+"][size_height]' value='"+size_height+"' /><input type='hidden' name='materials["+row_number+"][size]' value='"+size+"' /><input type='hidden' name='materials["+row_number+"][m_unit]' value='"+m_unit+"' /></td> <td>"+quantity+"<input type='hidden' name='materials["+row_number+"][quantity]' value='"+quantity+"' /></td><td onClick='getDel(this,"+locals+")'><a href='#'>删除</a></td></tr>";
				$("#material_table_stock_add").append(table_value);   //为table追加一个tr(下拉项)
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
	
	$("#insert_material2_stock_add").click(function (){
		var material_name = $("#material_select_stock_add").val();
		
		var color = $("#material_info_c_color_stock_add").val();
		var quantity = $("#material_c_quantity_stock_add").val();
		
		var size = $("#material_c_size_stock_add").val();
		var size_text = $("#material_c_size_stock_add").find("option:selected").text(); 
		
		if($("#material_info_c_color_stock_add").val()!="" && $("#material_c_size_stock_add").val()!="" && $("#material_c_quantity_stock_add").val()!=""){
		
		$.ajax({
			url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/insert_table_material',//通过Ajax取数据的目标页面
			type:'get',//方法，还可以是"post"
			data:{'material_name':material_name,'material_color':color,'material_size':size,'material_quantity':quantity},
			dataType:'json',//数据类型，还有其它的，详见jQuery手册
			success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
			{
				if(locals != 0){
				var table_value = "<tr class='sm_tabClass01'> <td>"+material_name+"<input type='hidden' id='row_number' value='"+row_number+"' /><input type='hidden' name='materials["+row_number+"][material_name]' value='"+material_name+"' /></td><td>"+color+"<input type='hidden' name='materials["+row_number+"][color]' value='"+color+"' /></td>  <td>"+size_text+"<input type='hidden' name='materials["+row_number+"][size]' value='"+size+"' /></td> <td>"+quantity+"<input type='hidden' name='materials["+row_number+"][quantity]' value='"+quantity+"' /></td><td onClick='getDel(this,"+locals+")'><a href='#'>删除</a></td></tr>";
				$("#material_table_stock_add").append(table_value);   //为table追加一个tr(下拉项)
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
	
	var stock_id1 = $("#stock_id1").val();
	$('input').blur(function(){
		if(this.id == 'stock_code'){
			
			
			if(this.value==''){
				
			}
			else{
				$('#sm_error').html('');
				p='stock_code='+this.value+'&stock_id='+stock_id;
     			$.ajax({
					url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_stock_manage/check_stock_code',
					type:'post',
					 dataType:'json',
					 data:p,
					 success:check_stock_code_back
			    });
				
			}
		}
		if(this.id == 'stock_code1'){
			
			
			if(this.value==''){
			}
			else{
				$('#stock_code1_error').html('');
				p='stock_code1='+this.value+'&stock_id1='+stock_id1;
     			$.ajax({
					url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_stock_manage/check_stock_code',
					type:'post',
					 dataType:'json',
					 data:p,
					 success:check_stock_code_back1
			    });
				
			}
		}
	});
	
	
	//添加输入的材料
	$("#insert_materials_by_hand").click(function (){
		var str	=	$("#add_materials_by_hand").val();
		$("#text_err").html('');
		$("#text_err").css('display','none');
		if(str==''){
			alert("请输入材料信息！");
		}else{
			$.ajax({
				url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/insert_materials_of_stock',
				data:{'all_materials':str},
				type:'post',
				dataType:'json',
				success: function(data){
					if(data.err==1){
						$("#text_err").css('display','block');
						$("#text_err").html(data.text);	return;
					}else if(data.err==2){
						alert(data.text);return;
					}else if(data.err==0){
						var material_len	=	data.arr_materials.length;
						if(material_len>0){
							for(var i=0;i<material_len;i++){
								var table_value = "<tr class='sm_tabClass01'> <td>"+data.arr_materials[i].material_name+"</td> <td>"+data.arr_materials[i].material_color+"</td> <td >"+data.arr_materials[i].material_size+" </td>  <td>"+data.arr_materials[i].material_quantity+"</td><td onClick='getDel(this,"+data.arr_materials[i].id+")'><a href='#'>删除</a></td></tr>";
								$("#material_table_stock_add").append(table_value);
								row_number++; 
							}
							//var no_inch_w = $("#no_inch_w").val();
//							var no_inch_h = $("#no_inch_h").val();
//							total_price =data.all_gong_price; //所有材料和等于手工费
//							
//							//无设计手工费
//							if(no_inch_w!='' && no_inch_h!=''){
//								var a=Math.ceil(no_inch_w/19);
//								var b=Math.ceil(no_inch_h/19);
//								total_price=(total_price*a*b).toFixed(2);
//								$("#no_manual_id").val(total_price + "元"); 
//							}else{
//								$("#no_manual_id").val(total_price + "元"); 
//							}
//							
//							var no_jiaozhi = $("#no_jiaozhi").val();   //获取胶纸费				
//							no_jiaozhi = no_jiaozhi.replace("元","");  //   过滤掉"元"
							
							//获取材料费
							//no_material_price_1	=data.all_material_price;	
//							//no_material_price_1 =no_material_price_1.toFixed(2);
//							$("#no_material_price").val(no_material_price_1+"元");
//							if(no_jiaozhi==""){
//								var total_price = no_material_price_1 + "+" + total_price;
//							}else{
//								var total_price = no_material_price_1 + "+" + total_price + "+" + no_jiaozhi; 
//							}
//							total_price = eval('('+total_price+')');  //运算符转化为结果
//							total_price = total_price.toFixed(2);   // 保留2位小数
//							$("#no_total_price_id").val(total_price + "元");     //
//							$("#no_total_price_id_1").val(total_price + "元");	 //  合计
//							$("#no_total_price_id_2").val(total_price + "元");	 //	
//							var no_coefficient = $("#no_coefficient").val();   //工厂成本系数
//							var no_cost_price = total_price + "*" + no_coefficient;  //合计*系数 公式
//							no_cost_price = eval('('+no_cost_price+')');
//							no_cost_price = no_cost_price.toFixed(2);
//							$("#no_cost_price").val(no_cost_price);  //工厂成本
//							var no_piece = $("#no_piece").val();  //片数
//							var no_default_quote_coefficient = $("#no_default_quote_coefficient").val();  //报价系数
//							var no_parities = $("#no_parities").val();  //汇率
//							var monolithic_quote = total_price + "*" + no_default_quote_coefficient + "/" + no_parities;   
//							monolithic_quote = eval('('+monolithic_quote+')');
//							monolithic_quote = monolithic_quote.toFixed(2);
//							var aaa = $("#no_parities").find("option:selected").text();//汇率文字
//							aaa=aaa.split(" ");	
//							$("#no_monolithic_quote").val(aaa[0] + monolithic_quote);					
//							var final_quotation = monolithic_quote + "*" + no_piece;   //最终报价公式
//							var no_version = $("#no_version").val();
//							final_quotation = eval('('+final_quotation+ "+" + no_version+')');
//							final_quotation = final_quotation.toFixed(2);
//							$("#no_final_quotation").val(aaa[0] + final_quotation);  //最终报价
//							var quotation_category_id_no = $("#quotation_category_id_no").val();
//							if(quotation_category_id_no!="Stock改色"){
//								if(no_piece<12){
//									 $.ajax({
//										 url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/hotfix_quotation/find_version_no',//通过Ajax取数据的目标页面
//										 type:'get',//方法，还可以是"post"
//										 data:{'no_parities':no_parities,'count':locals[5],'no_piece':no_piece},
//										 dataType:'json',//数据类型，还有其它的，详见jQuery手册
//										 success:function(loc)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
//										 {
//											 $("#no_version").val(loc);
//											 final_quotation = eval('('+monolithic_quote + "*" + no_piece+ "+" + loc+')');
//											 final_quotation = final_quotation.toFixed(2);
//											 $("#no_final_quotation").val(aaa[0] + final_quotation);  //
//										  }
//									 });
//								}
//							}
						}	
					}
				}	
			});
				
		}	
		
	});

	
	
	
});


function check_stock_code_back(data)
	{
		if(data >= 1)
		{
			$('#sm_error').css("display","block");
			$('#sm_error').html('该编号被使用');
		}
		else
		{
			$('#sm_error').css("display","none");
			$('#sm_error').html('该编号可以使用');
		}
	}
function check_stock_code_back1(data)
	{
		if(data >= 1)
		{
			$('#stock_code1_error').css("display","block");
			$('#stock_code1_error').html('该编号被使用');
		}
		else
		{
			$('#stock_code1_error').css("display","none");
			$('#stock_code1_error').html('该编号可以使用');
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