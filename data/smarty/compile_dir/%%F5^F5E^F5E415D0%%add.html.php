<?php /* Smarty version 2.6.22, created on 2024-10-23 13:06:53
         compiled from outgoing_inquiry_sheet/add.html */ ?>
<script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/cstown_Sys.js" type="text/javascript"></script>
<link href="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/css/cstown_sys.css" rel="stylesheet" type="text/css" media="screen"/>
<div class="pageContent">
  <input type="hidden" value="<?php if ($this->_tpl_vars['outgoing_inquiry_sheet']['type']): ?><?php echo $this->_tpl_vars['outgoing_inquiry_sheet']['type']; ?>
<?php else: ?>1<?php endif; ?>" id="submit_type_add" />
  <form method="post" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, navTabAjaxDone)" id="outgoing_inquiry_sheet_form_add">
    <div class="stkInfEnter" style="width:98%; position:relative;" layoutH="100" id="ttbjd_ysj">
      <div style="float:left; width:100%;">
        <div class="sIE_title" style="width:15%;">
          <div class="button">
            <div class="buttonContent">
<!--              <button type="button" onclick="document.getElementById('ttbjd_wsj').style.display='block';document.getElementById('ttbjd_ysj').style.display='none';$('#submit_type_add').val('2');$('#size_category1_add').click()">切换至-外发询价单(无设计)</button>-->
                <a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/outgoing_inquiry_sheet/add-design-2" style="line-height: 25px;" target="navTab" rel="outgoing_inquiry_sheet_add" fresh="true" title="添加">切换至-外发询价单(无设计)</a>
            </div>
          </div>
        </div>
        <div class="sIE_title" style="width:60%;">外发询价单</div>
          <script>$('#submit_type_add').val('1');</script>
      </div>
          <input type="hidden" name="type" value="1" id="type" />
          <div class="sIEK" style="width:800px;">
            <div class="sIE_l_01" style="width:230px;">
            <div class="sIE_l_01_title">业务员:</div>
            <input type="text" class="sIE_No" style="width:100px;" name="saleman_name" value="<?php if ($this->_tpl_vars['outgoing_inquiry_sheet']['salesman_user_name'] != ''): ?><?php echo $this->_tpl_vars['outgoing_inquiry_sheet']['salesman_user_name']; ?>
<?php else: ?><?php echo $this->_tpl_vars['user_info']['user_name']; ?>
<?php endif; ?>" readonly />
            </div>

          <div class="sIE_l_01" style="width:230px;">
            <div class="sIE_l_01_title">时间:</div>
            <input type="text" class="sIE_No" style="width:100px;" name="q_time" id="q_time" value="<?php if ($this->_tpl_vars['outgoing_inquiry_sheet']['q_time'] != ''): ?><?php echo $this->_tpl_vars['outgoing_inquiry_sheet']['q_time']; ?>
<?php else: ?><?php echo $this->_tpl_vars['today']; ?>
<?php endif; ?>"  readonly  />
          </div>

          <div class="sIE_l_01" style="width:200px;">
            <div class="sIE_l_01_title">报价名称:</div>
            <input type="text" class="sIE_No" style="width:100px;" id="design_name_add" name="design_name" value="" />
          </div>

          <div class="sIE_l_01" style="width:230px;">
            <div class="sIE_l_01_title">客户代码:</div>
            <input type="text" class="sIE_No" style="width:100px;" name="customer_code" id="outgoing_inquiry_sheet_customer_code_add" value="<?php echo $this->_tpl_vars['outgoing_inquiry_sheet']['customer_code']; ?>
" />
          </div>

          <div class="sIE_l_01" style="width:230px;">
            <div class="sIE_l_01_title">客户名:</div>
            <input type="text" class="sIE_No" style="width:100px;" name="customer_name" id="outgoing_inquiry_sheet_customer_name_add" value="<?php echo $this->_tpl_vars['outgoing_inquiry_sheet']['customer_name']; ?>
"   readonly />
          </div>

          <div class="sIE_l_01" style="width:200px;">
            <div class="sIE_l_01_title">交货期:</div>
            <select class="picture_select01" style="width:106px;height:26px;" id="outgoing_inquiry_sheet_picture_select_add"  name="deliver_goods" style="height:26px; width:82px;">
               <?php $_from = $this->_tpl_vars['times']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['t']):
?>
              <option <?php if ($this->_tpl_vars['outgoing_inquiry_sheet']['deliver_goods'] == $this->_tpl_vars['t']['time_name']): ?>selected="selected"<?php endif; ?> value="<?php echo $this->_tpl_vars['t']['time_name']; ?>
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
            <?php if ($this->_tpl_vars['oc']['classification'] == 1 || $this->_tpl_vars['oc']['classification'] == 3): ?>
            <option value="<?php echo $this->_tpl_vars['oc']['id']; ?>
"><?php echo $this->_tpl_vars['oc']['c_name']; ?>
</option>
            <?php endif; ?>
            <?php endforeach; endif; unset($_from); ?>
          </select>
        </div>

        <div class="sIE_l_01" style="width:230px;">
          <div class="sIE_l_01_title">做货类型:</div>
          <select class="picture_select01" id="goods_type"  name="goods_type" style="height:26px; width:106px;">
              <option value="">请选择</option>
              <option value="打样">打样</option>
              <option value="大货">大货</option>
          </select>
        </div>
        
        <div class="sIE_l_01" style="width:230px;">
          <div class="sIE_l_01_title">尺码类型:</div>
          <select class="picture_select01" id="size_type"  name="size_type" style="height:26px; width:106px;">
              <option value="1">工厂尺码</option>
              <option value="2">客户尺码</option>
          </select>
        </div>


        <div style="float:left; width:200px;">
          <textarea name="remark" style="width:180px; margin-bottom:10px; margin-top:0px; height:52px;" onfocus="if(this.value=='备注')this.value='';" class="add01_textarea textInput"><?php if ($this->_tpl_vars['outgoing_inquiry_sheet']['remark']): ?><?php echo $this->_tpl_vars['outgoing_inquiry_sheet']['remark']; ?>
<?php else: ?>备注<?php endif; ?></textarea>
        </div>
        <div class="sIE_l_02" style="width:95%;display: none;">
        	<div class="sIE_l_01_title" style="line-height:26px;">尺码类型:</div>
            <input type="hidden" name="size_category" id="size_category">
          	<select class="picture_select01 size"style="width:106px; height:26px;">
            	<?php $_from = $this->_tpl_vars['size_category']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sc']):
?>
            	<option value="<?php echo $this->_tpl_vars['sc']['id']; ?>
"><?php echo $this->_tpl_vars['sc']['cn_name']; ?>
</option>
              <?php endforeach; endif; unset($_from); ?>
          	</select>
            <button type="button" id="size_category_add">添加</button>
        </div>
        <div id="oic_table" class="sIE_l_02" style="width:95%;">
          <!--<table cellspacing="0" class="sIE_l_02Tab" id="oic_table_add" style="margin-top:10px;">
          	<tr>
            	<td><button type="button" id="oic_add">添加尺码</button></td>
            	<td colspan="2" align="center">尺码</td>
                <td align="right"><button type="button" id="oic_del">删除本表</button></td>
            </tr>
            <tr>
              <th>尺码</th>
              <th>尺码变更</th>
              <th>数量</th>
              <th>操作</th>
            </tr>
          </table>-->
            <style>
                table.sIE_l_02Tab td {
                    border-width: 1px;
                    padding: 5px;
                    border-style: solid;
                    border-color: #CCC;
                }
                #size_table tbody{width: 100%;}
            </style>
            <?php $this->assign('attribute_row', 1); ?>
            <?php $this->assign('change_attribute_row', 1); ?>
            <table class="sIE_l_02Tab" id="size_table" width="100%" style="overflow: auto; display: none" cellspacing="0" cellpadding="0">
                <tr>
                    <td>服装尺码</td>
                    <td align="center" colspan="<?php echo $this->_tpl_vars['count_category']; ?>
">款式</td>
                </tr>
                <tr>
                    <td><a href="#" onclick="add_size()">添加尺码</a></td>
                    <?php $_from = $this->_tpl_vars['category']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['category'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['category']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['value']):
        $this->_foreach['category']['iteration']++;
?>
                    <td>
                        <input type="hidden" name="select_category[]" class="select_category" id="select_category_<?php echo $this->_foreach['category']['iteration']; ?>
" value="<?php echo $this->_tpl_vars['value']['en_name']; ?>
">
                        <?php echo $this->_tpl_vars['value']['cn_name']; ?>

                    </td>
                    <?php endforeach; endif; unset($_from); ?>
                    <td><!--<a id="add" href="#">添加部位</a>--></td>
                </tr>
                <?php $_from = $this->_tpl_vars['size']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
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
                    <?php $_from = $this->_tpl_vars['category']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['category'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['category']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['value']):
        $this->_foreach['category']['iteration']++;
?>
                    <td><input type="text" size='3' class="col_<?php echo $this->_foreach['category']['iteration']; ?>
" size_row="<?php echo $this->_tpl_vars['attribute_row']; ?>
" row="row[<?php echo $this->_tpl_vars['attribute_row']; ?>
]" name="row[<?php echo $this->_tpl_vars['attribute_row']; ?>
][<?php echo $this->_tpl_vars['value']['en_name']; ?>
]" onchange="count_total(1)"></td>
                    <?php endforeach; endif; unset($_from); ?>
                    <td><a href="#"  onclick="getEdit_detaile('<?php echo $this->_tpl_vars['s']['en_name']; ?>
',<?php echo $this->_tpl_vars['attribute_row']; ?>
)">尺码变更</a></td>
                </tr>
                <!-- <?php echo $this->_tpl_vars['attribute_row']++; ?>
 -->
                <?php endforeach; endif; unset($_from); ?>
                <tr class="head_row">
                    <td>总计</td>
                    <?php $this->assign('col', 1); ?>
                    <?php $_from = $this->_tpl_vars['category']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['value']):
?>
                    <td id="total<?php echo $this->_tpl_vars['col']; ?>
" class="total_number"></td>
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

                function count_total(flag){
                    var total=0;
                    var total_number=0;
                    $(".col_"+flag).each(function (){
                        if($(this).val())
                            total=total+parseInt($(this).val());
                    });
                    $("#total"+flag).html(total);

                    $(".total_number").each(function(){
                        total_number+=parseInt($(this).html());
                    });

                    $("#outgoing_inquiry_sheet_number_add").val(total_number);
                }

                function add_size(){
                    html="<tr class='head_row'>";
                    html+="<td row='"+attribute_row+"'>";
                    html+="<select class='picture_select01 size' id='row_size_"+attribute_row+"' name='row["+attribute_row+"][size]' style='width:65px; height:26px;' onchange='size_change("+attribute_row+")'>";
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
                        var category_arr=$(this).attr("id").split("_");
                        if($(this).val()){
                            var name='row['+attribute_row+']['+$(this).attr("en")+']';
                        }else{
                            var name='';
                        }


                        html+='<td class="row'+attribute_row+'" id="'+$(this).attr("en")+'_row'+attribute_row+'"><input type="text" size="3" class="col_'+e+'" size_row="'+attribute_row+'" row="row['+attribute_row+']" onchange="count_total('+e+')" name="'+name+'"></td>';
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
                        html+="<table cellspacing='0' class='sIE_l_02Tab'><tr><td>"+$(this).attr('cn')+"</td><td style='padding:0px;'>";
                        html+='<table cellspacing="0" id="'+$(this).attr("en")+'"  style="width:100%;">';
                        if($("#"+$(this).attr("en")+"_row"+attribute_row+" span").length>0){
                            var length=$("#"+$(this).attr("en")+"_row"+attribute_row+" span").length;
                            $("#"+$(this).attr("en")+"_row"+attribute_row+" span").each(function (e){
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
                                // html+="<option value='<?php echo $this->_tpl_vars['sc']['id']; ?>
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
                                if(e+1==length || length==1){
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
                    $("#"+en+"_"+attribute_row+"_del").remove();
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
                    html+='<a href="#" id="'+en+'_'+attribute_row+'_del" onclick=Del_detaile(this,'+attribute_row+',"'+en+'")>删除</a> <a href="#" id="'+en+'_'+attribute_row+'" onclick=size_window_table_add('+attribute_row+',"'+en+'")>添加</a>';
                    html+='</td>';
                    html+='</tr>';
                    $("#"+en).append(html);
                }

                function Del_detaile(k,attribute_row,en){
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
                            totalhtml='<td id="total'+col+'" class="total_number"></td>';
                            col++;
                            $(this).find("td:last").before(totalhtml);
                        }else{
                            var td="<td class='row"+attr_row+"'><input type='text' row='row["+$(this).find("td:first").attr("row")+"]' size='3' class='col_"+attr_row+"' size_row='"+$(this).find("td:first").attr("row")+"' onchange=count_total("+attr_row+")></td>";
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
        </div>

        <div class="sIE_l_01" style="width:230px; margin-top:10px; display: none;">
            <div class="sIE_l_01_title" style="width:80px;">总数量:</div>
            <input type="text" class="sIE_No" style="width:100px;" id="outgoing_inquiry_sheet_number_add" name="number" value="0"/>
          </div>

        <div id="outgoing_inquiry_sheet_result_add" style="line-height: 26px; float: left; color:#F00; font-size:16px; margin-left: 10px; display:none;"></div>
      </div>
      <div class="sIE_r" style=" width:260px; margin:0px;">

          <div class="sIE_l_01" style="width:200px; margin:0 auto; float:none; margin-bottom:10px;">
            <div class="sIE_l_01_title" style="width:80px;">设计版号:</div>
            <select name="quotation_code" class="picture_select01" id="choose_design_code_add" style="height:26px; width:106px;">
              <option value="">请选择</option>
              <?php $_from = $this->_tpl_vars['quote_info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['qf']):
?> <?php if ($this->_tpl_vars['quotation_code'] == $this->_tpl_vars['qf']['design_content_code']): ?>
              <option selected="selected" value="<?php echo $this->_tpl_vars['qf']['design_content_code']; ?>
"><?php echo $this->_tpl_vars['qf']['design_content_code']; ?>
</option>
              <?php else: ?>
              <option value="<?php echo $this->_tpl_vars['qf']['design_content_code']; ?>
"><?php echo $this->_tpl_vars['qf']['design_content_code']; ?>
</option>
              <?php endif; ?> <?php endforeach; endif; unset($_from); ?>
            </select>
          </div>
          <div class="sIE_r" style="height:260px; width:260px; margin-top:0px;">
            <div class="sIE_r_img" id="design_image_add" style="width:260px; height:260px; margin-left:0px; margin-top:10px; margin-bottom:10px;"><?php if ($this->_tpl_vars['outgoing_inquiry_sheet']['image']): ?><img style="width:260px; height:260px;" src="<?php echo $this->_tpl_vars['outgoing_inquiry_sheet']['image']; ?>
" height="260px" width="260px" /><?php endif; ?></div>
            <div class="sIE_l_01" style=" float:none; width:200px; margin:0 auto;">
              <div class="sIE_l_01_title"  style="width:60px; margin-left:10px;">设计师:</div>
              <input type="text" class="sIE_No" readonly="readonly" id="design_user_add" name="design_user_name" value="<?php echo $this->_tpl_vars['outgoing_inquiry_sheet']['design_user_name']; ?>
"  style="width:76px;"/>
            </div>
          </div>

      </div>
    </div>
  </form>


<div class="stkInfEnter" style="width:98%; display:none; position:relative;" layoutH="100" id="ttbjd_wsj">
  <form method="post" style="overflow:visible;" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, navTabAjaxDone)" id="outgoing_inquiry_sheet_form2_add">
    <div style="float:left; width:100%;">
      <div class="sIE_title" style="width:15%;">
        <div class="button">
          <div class="buttonContent">
            <button type="button" onclick="document.getElementById('ttbjd_ysj').style.display='block';document.getElementById('ttbjd_wsj').style.display='none';$('#submit_type_add').val('1');$('#oic_table1_add_67').remove();">切换至-外发询价单</button>
          </div>
        </div>
      </div>
      <div class="sIE_title" style="width:60%;">外发询价单(无设计)</div>
    </div>
    <input type="hidden" name="type" value="2" id="type" />
    <div class="sIEK" style="width:680px;">
      <div class="sIE_l_01" style="width:230px;">
        <div class="sIE_l_01_title">业务员:</div>
        <input type="text" class="sIE_No" style="width:100px;" name="saleman_name" value="<?php if ($this->_tpl_vars['outgoing_inquiry_sheet']['salesman_user_name'] != ''): ?><?php echo $this->_tpl_vars['outgoing_inquiry_sheet']['salesman_user_name']; ?>
<?php else: ?><?php echo $this->_tpl_vars['user_info']['user_name']; ?>
<?php endif; ?>" readonly />
      </div>
      <div class="sIE_l_01" style="width:230px;">
        <div class="sIE_l_01_title">时间:</div>
        <input type="text" class="sIE_No" style="width:100px;" name="q_time" id="q_time" value="<?php if ($this->_tpl_vars['outgoing_inquiry_sheet']['q_time'] != ''): ?><?php echo $this->_tpl_vars['outgoing_inquiry_sheet']['q_time']; ?>
<?php else: ?><?php echo $this->_tpl_vars['today']; ?>
<?php endif; ?>"  readonly  />
      </div>
      <div class="sIE_l_01" style="width:200px;">
        <div class="sIE_l_01_title">设计名称:</div>
        <input type="text" class="sIE_No" style="width:100px;" id="design_name_add" name="design_name" value=""  />
      </div>
      <div class="sIE_l_01" style="width:230px;">
        <div class="sIE_l_01_title" style="width:80px;">客户代码:</div>
        <input type="text" class="sIE_No" style="width:100px;" name="customer_code" id="outgoing_inquiry_sheet_customer_code1_add" value="<?php echo $this->_tpl_vars['outgoing_inquiry_sheet']['customer_code']; ?>
" />
      </div>

      <div class="sIE_l_01" style="width:230px;">
        <div class="sIE_l_01_title">客户名:</div>
        <input type="text" class="sIE_No" style="width:100px;" name="customer_name" id="outgoing_inquiry_sheet_customer_name1_add" value="<?php echo $this->_tpl_vars['outgoing_inquiry_sheet']['customer_name']; ?>
"   readonly />
      </div>
      <div class="sIE_l_01" style="width:200px;">
        <div class="sIE_l_01_title" style="width:80px;">交货期:</div>
        <select class="picture_select01" id="outgoing_inquiry_sheet_picture_select1_add"  name="deliver_goods" style="height:26px; width:106px;">
          <?php $_from = $this->_tpl_vars['times']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['t']):
?> <option <?php if ($this->_tpl_vars['outgoing_inquiry_sheet']['deliver_goods'] == $this->_tpl_vars['t']['time_name']): ?>selected="selected"<?php endif; ?> value="<?php echo $this->_tpl_vars['t']['time_name']; ?>
"><?php echo $this->_tpl_vars['t']['time_name']; ?>

          </option>
          <?php endforeach; endif; unset($_from); ?>
        </select>
      </div>
      <div class="sIE_l_01" style="width:230px;">
        <div class="sIE_l_01_title" style="line-height:26px;">报关品类:</div>
        <select class="picture_select01" name="order_category" id="order_category1" style="width:106px; height:26px;">
          <option value="">请选择</option>
          <?php $_from = $this->_tpl_vars['order_category']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['oc']):
?>
          <?php if ($this->_tpl_vars['oc']['classification'] == 2 || $this->_tpl_vars['oc']['classification'] == 3): ?>
          <option value="<?php echo $this->_tpl_vars['oc']['id']; ?>
"><?php echo $this->_tpl_vars['oc']['c_name']; ?>
</option>
          <?php endif; ?>
          <?php endforeach; endif; unset($_from); ?>
        </select>
      </div>

      <div class="sIE_l_01" style="width:230px;">
        <div class="sIE_l_01_title">做货类型:</div>
        <select class="picture_select01" id="goods_type1"  name="goods_type" style="height:26px; width:106px;">
            <option value="">请选择</option>
            <option value="打样">打样</option>
            <option value="大货">大货</option>
        </select>
      </div>

      <input type="hidden" class="sIE_No" id="choose_design_code1_add" style="width:100px;" name="quotation_code" readonly="readonly" value="<?php if ($this->_tpl_vars['quotation_code']): ?><?php echo $this->_tpl_vars['quotation_code']; ?>
<?php else: ?><?php echo $this->_tpl_vars['design_code']; ?>
<?php endif; ?>" />

      <div style="float:left; width:200px;">
        <textarea name="remark" style="width:180px; margin-bottom:10px; margin-top:0px; height:52px;" onfocus="if(this.value=='备注')this.value='';" class="add01_textarea textInput"><?php if ($this->_tpl_vars['outgoing_inquiry_sheet']['remark']): ?><?php echo $this->_tpl_vars['outgoing_inquiry_sheet']['remark']; ?>
<?php else: ?>备注<?php endif; ?></textarea>
      </div>

      <div class="sIE_l_02" style="width:95%;display: none">
          <div class="sIE_l_01_title" style="line-height:26px;">尺码类型:</div>
          <select class="picture_select01" name="size_category1" id="size_category1" style="width:106px; height:26px;">
              <?php $_from = $this->_tpl_vars['size_category']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sc']):
?>
              <?php if ($this->_tpl_vars['sc']['cn_name'] == '非服装'): ?><option value="<?php echo $this->_tpl_vars['sc']['id']; ?>
"><?php echo $this->_tpl_vars['sc']['cn_name']; ?>
</option><?php endif; ?>
          <?php endforeach; endif; unset($_from); ?>
          </select>
          <button type="button" id="size_category1_add">添加</button>
      </div>

      <div id="oic1_table" class="sIE_l_02" style="width:95%;">
        <!--<table cellspacing="0" class="sIE_l_02Tab" id="oic_table1_add">
          <tr>
            <th>尺码</th>
            <th>数量</th>
            <th>颜色</th>
            <th>备注</th>
            <th>操作</th>
          </tr>
        </table>
        <button type="button" id="oic1_add">添加</button>-->

      </div>

      <div class="sIE_l_01" style="width:230px; margin-top:10px; display: none;">
        <div class="sIE_l_01_title" style="width:80px;">总数量:</div>
        <input type="text" class="sIE_No" style="width:100px;" id="outgoing_inquiry_sheet_number1_add" name="number" value="0" />
      </div>
      <div id="outgoing_inquiry_sheet_result1_add" style="line-height: 26px; float: left; color:#F00; font-size:16px; margin-left: 10px; display:none;"></div>

</form>
</div>
<div class="sIE_r" style=" width:260px; margin:0px;">
  <div class="sIE_r" style="height:260px; width:260px; margin-top:0px;">
    <div class="sIE_r_img" id="img_upload" style="width:260px; height:260px; margin-left:0px;">
      <iframe name="yframe" src="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/basic_upload_file" style="border:none; width:260px; height:260px;"></iframe>
    </div>
    <form action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/basic_upload_file" id="upload_jpg_add" target="yframe" method="post" enctype="multipart/form-data" >
      <div style="float:left; height:50px; width:60px; overflow:hidden; margin-left:20px; position:relative;">
        <input type="file" class="sIE_r_img_file" name="upload_file" id="upload_file_add" style=" opacity:0; position:relative; z-index:2; margin-top:0px;" />
        <input type="button" class="sIE_r_img_file" name="jpg" style=" opacity:1; width:60px; text-align:center; height:24px; position:absolute; z-index:1; margin-top:0px;" value="浏览" />
      </div>
      <input type="submit" id="jpg_upload_submit_add" value="上传JPG" style=" float:right; width:70px;" />
    </form>
  </div>
</div>
</div>

<!--<form action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/basic_upload_file" id="upload_jpg_form" target="yframe" method="post" enctype="multipart/form-data" >
<input type="file" style="display:none;" name="upload_file" id="upload_file1" />
</form>-->

<?php if ($this->_tpl_vars['edit_no'] == 1): ?>
<div class="sIE_l_02">
  <div class="button" style="margin-left:80%; margin-right:5px; padding-bottom:20px;">
    <div class="buttonContent">
      <button id="outgoing_inquiry_sheet_from_submit_add" type="button" >确定</button>
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
  <div class="button" style="margin-left:80%; margin-right:5px; padding-bottom:20px;">
    <div class="buttonContent">
      <button class="close">取消</button>
    </div>
  </div>
</div>
<?php endif; ?>
</div>
</div>
</div>
</div>

<div id="size_window">

</div>
<div id="bg_div"></div>

<!-- {literal} -->
<script type="text/javascript">
function size_window_table_submit2(id){
	var ok=1;
	$("#size_window").find(".sIE_l_02Tab select").each(function () {
		if($(this).val()==""){
			ok=0;
		}
	});

	if(ok==1){
		var lenght = $("#size_window").find(".sIE_l_02Tab tr").length;
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
			var table_value = "<tr idd='"+locals.insert_id+"'><td><select class='picture_select01' id=oqs_length_"+locals.insert_id+" name=oqs_length_["+locals.insert_id+"] style='width:106px; height:26px;'><option value=''>请选择</option>"+locals.type_length+"</select></td><td><select class='picture_select01' id=oqs_position_"+locals.insert_id+" name=oqs_position_["+locals.insert_id+"] style='width:106px; height:26px;'><option value=''>请选择</option>"+locals.type_position+"</select></td><td><a href='#' onClick='Del_detaile(this,"+locals.insert_id+")' style='color:blue'>删除</a></td></tr>";
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
				var table_value = "<tr><td><input stype='text' id=oqs_size_"+locals.insert_id+" name=oqs_size["+locals.insert_id+"] value=''></td><td><input type='text' name=oqs_color["+locals.insert_id+"] value='' style='width:100px;'></td><td class='oqs_number'><input type='text' id=oqs_number_"+locals.insert_id+" name=oqs_number["+locals.insert_id+"] value='' onkeyup=\"change_number("+locals.insert_id+","+size_category_id+");this.value=this.value.replace(/\\D/g,'');\" style='width:100px;'></td><td class='size_value' size_value='"+locals.insert_id+"'><a href='#' onClick=getDel_detaile(this,'"+locals.en_name+"',"+locals.size_category_id+") style='float:right;color:blue'>删除</a></td></tr>";
			}else{
				var table_value = "<tr><td><select class='picture_select01 size' id=oqs_size_"+locals.insert_id+" name=oqs_size["+locals.insert_id+"] style='width:106px; height:26px;'><option value=''>请选择</option>"+locals.type_size+"</select></td><td id=td_"+locals.insert_id+"></td><td class='oqs_number'><input type='text' id=oqs_number_"+locals.insert_id+" name=oqs_number["+locals.insert_id+"] value='' onkeyup=\"change_number("+locals.insert_id+","+size_category_id+");this.value=this.value.replace(/\\D/g,'');\" style='width:100px;'></td><td class='size_value' size_value='"+locals.insert_id+"'><a href='#' onClick='getEdit_detaile("+locals.insert_id+")' style='float:left;color:blue'>尺码变更</a><a href='#' onClick='getDel_detaile(this,"+locals.insert_id+")' style='float:right;color:blue'>删除</a></td></tr>";
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
				var table_value = "<tr><td><input class='size1' type='text' id=oqs_size_"+locals.insert_id+" name=oqs_size["+locals.insert_id+"] value=''></td><td><input type='text' name=oqs_color["+locals.insert_id+"] value='' style='width:100px;'></td><td class='oqs_number'><input type='text' id=oqs_number_"+locals.insert_id+" name=oqs_number["+locals.insert_id+"] value='' onkeyup=\"change_number("+locals.insert_id+","+size_category_id+");this.value=this.value.replace(/\\D/g,'');\" style='width:100px;'></td><td class='oqs_note'><input type='text' id=oqs_note_"+locals.insert_id+" name=oqs_note["+locals.insert_id+"] value='' style='width:100px;'></td><td class='size_value' size_value='"+locals.insert_id+"'><a href='#' onClick='getDel_detaile(this,'"+locals.en_name+"',"+locals.size_category_id+")' style='float:right;color:blue'>删除</a></td></tr>";
			}
			else{
				var table_value = "<tr><td><select class='picture_select01 size' id=oqs_size_"+locals.insert_id+" name=oqs_size["+locals.insert_id+"] style='width:106px; height:26px;'><option value=''>请选择</option>"+locals.type_size+"</select></td><td id=td_"+locals.insert_id+"></td><td><input type='text' name=oqs_color["+locals.insert_id+"] value='' style='width:100px;'></td><td class='oqs_number'><input type='text' id=oqs_number_"+locals.insert_id+" name=oqs_number["+locals.insert_id+"] value='' onkeyup=\"change_number("+locals.insert_id+","+size_category_id+");this.value=this.value.replace(/\\D/g,'');\" style='width:100px;'></td><td class='size_value' size_value='"+locals.insert_id+"'><a href='#' onClick='getEdit_detaile("+locals.insert_id+")' style='float:left;color:blue'>尺码变更</a><a href='#' onClick='getDel_detaile(this,"+locals.insert_id+")' style='float:right;color:blue'>删除</a></td></tr>";
			}
			$("#heji1_tr_"+size_category_id).before(table_value);
		}
	  });
}
function oic_del(size_category_id){
	$("#oic_table_add_"+size_category_id).find(".size_value").each(function () {
		getDel_detaile(this,$(this).attr('size_value'));
	});
	$("#oic_table_add_"+size_category_id).remove();
	alert("删除成功！");
}
function oic1_del(size_category_id){
	$("#oic_table1_add_"+size_category_id).find(".size_value").each(function () {
		getDel_detaile(this,$(this).attr('size_value'));
	});
	$("#oic_table1_add_"+size_category_id).remove();
	alert("删除成功！");
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

function getDel_detaile1(k,row){

	$.ajax({
			url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/outgoing_inquiry_sheet/delete_ois_detaile',//通过Ajax取数据的目标页面
			type:'get',//方法，还可以是"post"
			data:{'id':row},
			dataType:'text',//数据类型，还有其它的，详见jQuery手册
			success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
			{
				var submit_type_add = $("#submit_type_add").val();
				var zuizhong_number = 0;
				var bufen_number = 0;
				if(submit_type_add == 1){
					$("#oic_table").find(".oqs_number input[type='text']").each(function () {
						zuizhong_number += Number($(this).val());
					});

					if(zuizhong_number!='' || zuizhong_number!=0){
						$("#outgoing_inquiry_sheet_number_add").val(zuizhong_number);
						$("#outgoing_inquiry_sheet_number_add").attr("readonly","readonly");
					}
					else{
						$("#outgoing_inquiry_sheet_number_add").removeAttr("readonly");
					}

					$("#oic_table_add_"+locals).find(".oqs_number input[type='text']").each(function () {
						bufen_number +=Number($(this).val());
					});
					if(bufen_number!='' || bufen_number!=0){
						$("#heji_tr_"+locals).find("td").html("合计："+bufen_number);
						$("#heji_"+locals).val(bufen_number);
					}
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

					$("#oic_table1_add_"+locals).find(".oqs_number input[type='text']").each(function () {
						bufen_number +=Number($(this).val());
					});
					if(bufen_number!='' || bufen_number!=0){
						$("#heji1_tr_"+locals).find("td").html("合计："+bufen_number);
						$("#heji1_"+locals).val(bufen_number);
					}
				}

			}
	});




	$(k).parent().parent().remove();
}
function change_number(key,size_category_id){
	var submit_type_add = $("#submit_type_add").val();
	var zuizhong_number = 0;
	var bufen_number = 0;
	if(submit_type_add == 1){
		$("#oic_table").find(".oqs_number input[type='text']").each(function () {
			zuizhong_number += Number($(this).val());
		});

		if(zuizhong_number!='' || zuizhong_number!=0){
			$("#outgoing_inquiry_sheet_number_add").val(zuizhong_number);
			$("#outgoing_inquiry_sheet_number_add").attr("readonly","readonly");
		}
		else{
			$("#outgoing_inquiry_sheet_number_add").removeAttr("readonly");
		}

		$("#oic_table_add_"+size_category_id).find(".oqs_number input[type='text']").each(function () {
			bufen_number +=Number($(this).val());
		});

			$("#heji_tr_"+size_category_id).find("td").html("合计："+bufen_number);
			$("#heji_"+size_category_id).val(bufen_number);

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

	}

}
$(document).ready(function()
{

	$("#size_category_add").click(function(){
        if(!$("#choose_design_code_add").val()){
            alert("请选择设计版号！");
            return false;
        }
		var size_category_id = $("#size_category").val();
		if(size_category_id!='' && !$('#oic_table_add_'+size_category_id).length>0){
			$.ajax({
			  url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/outgoing_inquiry_sheet/add_ois_design',//通过Ajax取数据的目标页面
			  type:'post',//方法，还可以是"post"
			  data:{'size_category_id':size_category_id},
			  dataType:'json',//数据类型，还有其它的，详见jQuery手册
			  success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
			  {
				  if(locals.cn_name == '非服装'){$("#size_table").css("display","none");
					  var table_value = "<table cellspacing='0' class='sIE_l_02Tab' id=oic_table_add_"+size_category_id+" style='margin-top:20px;'><tr><td><button type='button' onclick=oic_add('"+size_category_id+"')>添加尺码</button></td><td align='center' style='font-size: 16px;' colspan='2'>"+locals.cn_name+"</td><td align='right'><button type='button' onclick=oic_del('"+size_category_id+"')>删除本表</button></td></tr><tr><th>尺码</th><th>颜色</th><th>数量</th><th>操作</th></tr><tr><td><input type='text' id=oqs_size_"+locals.insert_id+"  name=oqs_size["+locals.insert_id+"] value='' class='picture_select01 size'></td><td><input type='text' name=oqs_color["+locals.insert_id+"] value='' style='width:100px;'></td><td class='oqs_number'><input type='text' id=oqs_number_"+locals.insert_id+" name=oqs_number["+locals.insert_id+"] value='' onkeyup=\"change_number("+locals.insert_id+","+size_category_id+");this.value=this.value.replace(/\\D/g,'');\" style='width:100px;'></td><td class='size_value' size_value='"+locals.insert_id+"'><a href='#' onClick=getDel_detaile(this,'"+locals.en_name+"',"+locals.size_category_id+") style='float:right;color:blue'>删除</a></td></tr><tr id=heji_tr_"+size_category_id+"><td colspan='5' align='center'>合计：</td><input type='hidden' id=heji_"+size_category_id+" name=heji["+size_category_id+"] value=''></tr></table>";
				  }
				  else{
                      $("#size_table").css("display","inline");
                      $("#oic_table_add_68").remove();
					  // var table_value = "<table cellspacing='0' class='sIE_l_02Tab' id=oic_table_add_"+size_category_id+" style='margin-top:20px;'><tr><td><button type='button' onclick=oic_add('"+size_category_id+"')>添加尺码</button></td><td colspan='2' align='center' style='font-size: 16px;'>"+locals.cn_name+"</td><td align='right'><button type='button' onclick=oic_del('"+size_category_id+"')>删除本表</button></td></tr><tr><th>尺码</th><th>尺码变更</th><th>数量</th><th>操作</th></tr><tr><td><select class='picture_select01 size' id=oqs_size_"+locals.insert_id+"  name=oqs_size["+locals.insert_id+"] style='width:106px; height:26px;'><option value=''>请选择</option>"+locals.type_size+"</select></td><td id=td_"+locals.insert_id+"></td><td class='oqs_number'><input type='text' id=oqs_number_"+locals.insert_id+" name=oqs_number["+locals.insert_id+"] value='' onkeyup=\"change_number("+locals.insert_id+","+size_category_id+");this.value=this.value.replace(/\\D/g,'');\" style='width:100px;'></td><td class='size_value' size_value='"+locals.insert_id+"'><a href='#' onClick='getEdit_detaile("+locals.insert_id+")' style='float:left;color:blue'>尺码变更</a><a href='#' onClick='getDel_detaile(this,"+locals.insert_id+")' style='float:right;color:blue'>删除</a></td></tr><tr id=heji_tr_"+size_category_id+"><td colspan='5' align='center'>合计：</td><input type='hidden' id=heji_"+size_category_id+" name=heji["+size_category_id+"] value=''></tr></table>";
				  }
				  $("#oic_table").append(table_value);
			  }
			});
		}
	});

	$("#size_category1_add").click(function(){

		var size_category_id = $("#size_category1").val();
		if(size_category_id!='' && !$('#oic_table1_add_'+size_category_id).length>0){
			$.ajax({
			  url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/outgoing_inquiry_sheet/add_ois_design',//通过Ajax取数据的目标页面
			  type:'post',//方法，还可以是"post"
			  data:{'size_category_id':size_category_id},
			  dataType:'json',//数据类型，还有其它的，详见jQuery手册
			  success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
			  {
				  if(locals.cn_name == '非服装'){
					  var table_value = "<table cellspacing='0' class='sIE_l_02Tab' id=oic_table1_add_"+size_category_id+" style='margin-top:20px;'><tr><td colspan='4'><button type='button' onclick=oic1_add('"+size_category_id+"')>添加尺码</button></td><td align='right'><button type='button' onclick=oic1_del('"+size_category_id+"')>删除本表</button></td></tr><tr><th>尺码</th><th>颜色</th><th>数量</th><th>备注</th><th>操作</th></tr><tr><td><input class='size1' type='text' id=oqs_size_"+locals.insert_id+" name=oqs_size["+locals.insert_id+"] value=''></td><td><input type='text' name=oqs_color["+locals.insert_id+"] value='' style='width:100px;'></td><td class='oqs_number'><input type='text' id=oqs_number_"+locals.insert_id+" name=oqs_number["+locals.insert_id+"] value='' onkeyup=\"change_number("+locals.insert_id+","+size_category_id+");this.value=this.value.replace(/\\D/g,'');\" style='width:100px;'></td><td class='oqs_note'><input type='text' id=oqs_note_"+locals.insert_id+" name=oqs_note["+locals.insert_id+"] value='' style='width:100px;'></td><td class='size_value' size_value='"+locals.insert_id+"'><a href='#' onClick='getDel_detaile(this,'"+locals.en_name+"',"+locals.size_category_id+")' style='float:right;color:blue'>删除</a></td></tr><tr id=heji1_tr_"+size_category_id+"><td colspan='5' align='center'>合计：</td><input type='hidden' id=heji1_"+size_category_id+" name=heji["+size_category_id+"] value=''></tr></table>";
				  }
				  else{
					var table_value = "<table cellspacing='0' class='sIE_l_02Tab' id=oic_table1_add_"+size_category_id+" style='margin-top:20px;'><tr><td><button type='button' onclick=oic1_add('"+size_category_id+"')>添加尺码</button></td><td colspan='3' align='center' style='font-size: 16px;'>"+locals.cn_name+"</td><td align='right'><button type='button' onclick=oic1_del('"+size_category_id+"')>删除本表</button></td></tr><tr><th>尺码</th><th>尺码变更</th><th>颜色</th><th>数量</th><th>操作</th></tr><tr><td><select class='picture_select01 size' id=oqs_size_"+locals.insert_id+" name=oqs_size["+locals.insert_id+"] style='width:106px; height:26px;'><option value=''>请选择</option>"+locals.type_size+"</select></td><td id=td_"+locals.insert_id+"></td><td><input type='text' name=oqs_color["+locals.insert_id+"] value='' style='width:100px;'></td><td class='oqs_number'><input type='text' id=oqs_number_"+locals.insert_id+" name=oqs_number["+locals.insert_id+"] value='' onkeyup=\"change_number("+locals.insert_id+","+size_category_id+");this.value=this.value.replace(/\\D/g,'');\" style='width:100px;'></td><td class='size_value' size_value='"+locals.insert_id+"'><a href='#' onClick='getEdit_detaile("+locals.insert_id+")' style='float:left;color:blue'>尺码变更</a><a href='#' onClick='getDel_detaile(this,"+locals.insert_id+")' style='float:right;color:blue'>删除</a></td></tr><tr id=heji1_tr_"+size_category_id+"><td colspan='5' align='center'>合计：</td><input type='hidden' id=heji1_"+size_category_id+" name=heji["+size_category_id+"] value=''></tr></table>";
				  }
				  $("#oic1_table").append(table_value);
			  }
			});
		}
	});


	$("#jpg_upload_submit_add").click(function (){
		//alert('1111');
		$("#upload_jpg_add").submit();

	});

	//有设计
	$("#outgoing_inquiry_sheet_customer_code_add").bind("change", function() {

		var name = $("#outgoing_inquiry_sheet_customer_code_add").val();

		$.ajax({
			url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/hotfix_quotation/add_customer',//通过Ajax取数据的目标页面
			data:{"name":name},
			type:'post',//方法，还可以是"post"
			dataType:'json',//数据类型，还有其它的，详见jQuery手册
			success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
			{
				if(locals){
					$("#outgoing_inquiry_sheet_customer_name_add").val(locals.customer_name);
					customer_name=locals.customer_name;
					$("#outgoing_inquiry_sheet_company_add").val(locals.company);
					$.ajax({
						url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/outgoing_inquiry_sheet/design_content_code_wf',//通过Ajax取数据的目标页面
						data:{"customer_name":customer_name,"customer_code":name},
						type:'post',//方法，还可以是"post"
						dataType:'text',//数据类型，还有其它的，详见jQuery手册
						success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
						{
							$("#choose_design_code_add").html(locals);
						}
					});
				}else{
					$("#outgoing_inquiry_sheet_customer_name_add").val('');
					$("#outgoing_inquiry_sheet_company_add").val('');
				}
			}

		});

	});

	//无设计
	$("#outgoing_inquiry_sheet_customer_code1_add").bind("input propertychange", function() {

		var name = $("#outgoing_inquiry_sheet_customer_code1_add").val();

		$.ajax({
			url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/hotfix_quotation/add_customer',//通过Ajax取数据的目标页面
			data:{"name":name},
			type:'post',//方法，还可以是"post"
			dataType:'json',//数据类型，还有其它的，详见jQuery手册
			success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
			{
				if(locals){
					$("#outgoing_inquiry_sheet_customer_name1_add").val(locals.customer_name);
					customer_name=locals.customer_name;
					$("#outgoing_inquiry_sheet_company1_add").val(locals.company);
				}else{
					$("#outgoing_inquiry_sheet_customer_name1_add").val('');
					$("#outgoing_inquiry_sheet_company1_add").val('');
				}
			}

		});

	});


	$("#outgoing_inquiry_sheet_from_submit_add").click(function () {
		var ok=1;
		$(".oqs_number").find("input").each(function () {
			if($(this).val()=="" || $(this).val()==0){
				ok=0;
			}
		});

        var size=0;
        var size1=0;
        $(".size").each(function (){
            if($(this).val()==''){
                ++size;
            }
        });
        $(".size1").each(function (){
            if($(this).val()==''){
              ++size1;
            }
        });

        var total_number=0;
        var number_part=0;
        var total_part=0;
        $(".total_number").each(function(){
            if($(this).html()!=0) {
                if (total_number == 0) {
                    total_number = $(this).html();
                } else {
                    if (total_number != $(this).html()) {
                        number_part = 1;
                    }
                }
            }

            if($(this).html()!=0){
                ++total_part;
            }
        });

		if($("#submit_type_add").val() == '1'){
            if(number_part==1){
                $("#outgoing_inquiry_sheet_result_add").css("display","block");
                $("#outgoing_inquiry_sheet_result_add").html("含有非整套数量，请调整！");
            }else if(total_part>1 && total_part!=$(".total_number").length){
                $("#outgoing_inquiry_sheet_result_add").css("display","block");
                $("#outgoing_inquiry_sheet_result_add").html("只能单独部位或整套询价！");
            }else if(size>0){
              $("#outgoing_inquiry_sheet_result_add").css("display","block");
              $("#outgoing_inquiry_sheet_result_add").html("尺码不能为空！");
            }else if($("#outgoing_inquiry_sheet_customer_code_add").val() == ""){
				$("#outgoing_inquiry_sheet_result_add").css("display","block");
				$("#outgoing_inquiry_sheet_result_add").html("客户代码不能为空！");
			}
			else if($("#outgoing_inquiry_sheet_customer_name_add").val() == ""){
				$("#outgoing_inquiry_sheet_result_add").css("display","block");
				$("#outgoing_inquiry_sheet_result_add").html("客户名不能为空,请填写正确客户代码！");
			}
			else if($("#design_name_add").val() == ""){
				$("#outgoing_inquiry_sheet_result_add").css("display","block");
				$("#outgoing_inquiry_sheet_result_add").html("报价名称不能为空!");
			}
			else if($("#choose_design_code_add").val() == "" || $("#choose_design_code_add").val() == 0){
				$("#outgoing_inquiry_sheet_result_add").css("display","block");
				$("#outgoing_inquiry_sheet_result_add").html("请选择报价编号！");
			}
			else if($("#order_category").val() == ""){
				$("#outgoing_inquiry_sheet_result_add").css("display","block");
				$("#outgoing_inquiry_sheet_result_add").html("请选择报关类型！");
			}
			else if($("#goods_type").val() == ""){
				$("#outgoing_inquiry_sheet_result_add").css("display","block");
				$("#outgoing_inquiry_sheet_result_add").html("请选择做货类型！");
			}
			/*else if($("#outgoing_inquiry_sheet_color_add").val() == ""){
				$("#outgoing_inquiry_sheet_result_add").css("display","block");
				$("#outgoing_inquiry_sheet_result_add").html("请填写颜色！");
			}*/
			else if($("#outgoing_inquiry_sheet_number_add").val() == "" || $("#outgoing_inquiry_sheet_number_add").val() == 0){
				$("#outgoing_inquiry_sheet_result_add").css("display","block");
				$("#outgoing_inquiry_sheet_result_add").html("请填写数量！");
			}
			else{

				$("#outgoing_inquiry_sheet_form_add").submit();
			}
		}else if($("#submit_type_add").val() == '2'){
          if(size1>0){
            $("#outgoing_inquiry_sheet_result1_add").css("display","block");
            $("#outgoing_inquiry_sheet_result1_add").html("尺码不能为空！");
          }else if($("#outgoing_inquiry_sheet_customer_code1_add").val() == ""){
				$("#outgoing_inquiry_sheet_result1_add").css("display","block");
				$("#outgoing_inquiry_sheet_result1_add").html("客户代码不能为空！");
			}
			else if($("#outgoing_inquiry_sheet_customer_name1_add").val() == ""){
				$("#outgoing_inquiry_sheet_result1_add").css("display","block");
				$("#outgoing_inquiry_sheet_result1_add").html("客户名不能为空,请填写正确客户代码！");
			}
			else if($("#order_category1").val() == ""){
				$("#outgoing_inquiry_sheet_result1_add").css("display","block");
				$("#outgoing_inquiry_sheet_result1_add").html("请选择报关类型！");
			}
			else if($("#goods_type1").val() == ""){
				$("#outgoing_inquiry_sheet_result1_add").css("display","block");
				$("#outgoing_inquiry_sheet_result1_add").html("请选择做货类型！");
			}

			/*else if($("#outgoing_inquiry_sheet_color1_add").val() == ""){
				$("#outgoing_inquiry_sheet_result1_add").css("display","block");
				$("#outgoing_inquiry_sheet_result1_add").html("请填写颜色！");
			}*/
			else if($("#outgoing_inquiry_sheet_number1_add").val() == "" || $("#outgoing_inquiry_sheet_number1_add").val() == 0 || ok==0){
				$("#outgoing_inquiry_sheet_result1_add").css("display","block");
				$("#outgoing_inquiry_sheet_result1_add").html("请填写数量！");
			}

			else{


				$.ajax({
					url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/outgoing_inquiry_sheet/submit_check',//通过Ajax取数据的目标页面
					data:{},
					type:'post',//方法，还可以是"post"
					dataType:'text',//数据类型，还有其它的，详见jQuery手册
					success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
					{
						if(locals==1){
							$("#outgoing_inquiry_sheet_result1_add").css("display","none");
							$("#outgoing_inquiry_sheet_form2_add").submit();
						}else{
							$("#outgoing_inquiry_sheet_result1_add").css("display","block");
							$("#outgoing_inquiry_sheet_result1_add").html("请上传图片,且名称不包含空格！");

						}
					}
			    });


			}
		}else{}
	});


	//上传图片
	$("#jpg_upload_submit_add").click(function (){
		$("#upload_jpg_form").submit();
	});

	$("#upload_file_add").bind("input propertychange", function() {


		$("#upload_file1_add").val($("#upload_file_add").val());

	});

	/*$("#_inch_w_add").bind("input propertychange", function() {

		var cm_w = $(this).val() * 2.54;
		if(cm_w != ''){
			cm_w = cm_w.toFixed(2);
		}
		$("#_cm_w_add").val(cm_w);

	});

	$("#_inch_h_add").bind("input propertychange", function() {

		var cm_h = $(this).val() * 2.54;
		if(cm_h != ''){
			cm_h = cm_h.toFixed(2);
		}

		$("#_cm_h_add").val(cm_h);

	});

	$("#_cm_w_add").bind("input propertychange", function() {

		var inch_w = $(this).val() / 2.54;

		if(inch_w != ''){
			inch_w = inch_w.toFixed(2);
		}

		$("#_inch_w_add").val(inch_w);

	});

	$("#_cm_h_add").bind("input propertychange", function() {

		var inch_h = $(this).val() / 2.54;
		if(inch_h != ''){
			inch_h = inch_h.toFixed(2);
		}
		$("#_inch_h_add").val(inch_h);

	});*/

    $("#goods_type").change(function (){
        $("#choose_design_code_add").trigger("change");
    });

    $("#choose_design_code_add").change(
    	function()
    	{
    		//获取id为select的下拉框选中的值
    	    var a = $("#choose_design_code_add").val();
            var goods_type=$("#goods_type").val();
			if(a != ''){
				$.ajax({
					url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/get_design_infomation_by_design_code',//通过Ajax取数据的目标页面
					type:'post',//方法，还可以是"post"
					data:{"design_code":a,goods_type:goods_type},
					dataType:'json',//数据类型，还有其它的，详见jQuery手册
					success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
					{
                        var attr_row=1;
                        var col=1;
                        var tr_length=$("#size_table").find("tr").length;
                        $("#size_table").find("tr").each(function (e){
                            var td_lengh=$(this).find("td").length;
                            $(this).find("td").slice(1, td_lengh-1).remove();

                            if(e>16 && e<tr_length-1){
                                $(this).remove();
                            }
                        });

                        if(locals.attribute) {
                            for (var i = 0; i < locals.attribute.length; i++) {
                                if(locals.goods_type==1 && locals.attribute[i].en_name!="suit"){
                                    continue;
                                }
                                $("#size_table").find("tr").each(function (e) {
                                    var tr_length1 = $("#size_table").find("tr").length;
                                    if (e == 0) {
                                        var colspan = $(this).children().eq(1).attr("colspan");
                                        $(this).children().eq(1).attr("colspan", (parseInt(colspan) + 1));
                                    } else if (e == 1) {
                                        html = '<td><input type="hidden" name="select_category[]" class="select_category" id="select_category_' + attr_row + '" cn="' + locals.attribute[i].cn_name + '" en="' + locals.attribute[i].en_name + '" value="' + locals.attribute[i].en_name + '_'+locals.attribute[i].attribute_value_id+'">';
                                        html += locals.attribute[i].cn_name;
                                        html += '</td>';
                                        $(this).find("td:last").before(html);
                                    } else if ((e + 1) == tr_length1) {
                                        totalhtml = '<td id="total' + col + '" class="total_number">0</td>';
                                        col++;
                                        $(this).find("td:last").before(totalhtml);
                                        attr_row++;
                                    } else {
                                        var td = "<td class='row" + $(this).find("td:first").attr("row") + "' id='" + locals.attribute[i].en_name + "_row" + $(this).find("td:first").attr("row") + "'><input type='text' row='row[" + $(this).find("td:first").attr("row") + "]' size='3' class='col_" + attr_row + "' name='row[" + $(this).find("td:first").attr("row") + "][" + locals.attribute[i].en_name + "]' size_row='" + $(this).find("td:first").attr("row") + "' onchange=count_total(" + attr_row + ")></td>";
                                        $(this).find("td:last").before(td);
                                    }
                                });
                            }
                        }
                        if(locals.design_category!=18){
                            $("#size_table").css("display","none");
                            $("#size_category").val("68");
                            $("#size_category_add").trigger("click");
                        }else{
                            $("#size_table").css("display","inline");
                            $("#oic_table_add_68").remove();
                            $("#size_category").val("67");
                        }
						$("#design_user_add").val(locals.design_user_name);
						//$("#design_name_add").val(locals.design_content_name);
						$("#design_image_add").html("<img src='"+locals.upload_file+"' width='260px' height='260px' style='width:260px;height:260px;' /><input type='hidden' name='upload_file' value='"+locals.upload_file+"' /> <input type='hidden' name='design_user_name' value='"+locals.design_user_name+"' /> ");
						/*$("#inch_w_add").val(locals.size_w_inch);
						$("#inch_h_add").val(locals.size_h_inch);
						$("#cm_w_add").val(locals.size_w_cm);
						$("#cm_h_add").val(locals.size_h_cm);*/
					}
				});
			}
    	}
    );

});


</script>
<!-- {/literal} -->