<?php /* Smarty version 2.6.22, created on 2024-09-05 13:04:49
         compiled from outgoing_inquiry_sheet/add_nd.html */ ?>
<script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/cstown_Sys.js" type="text/javascript"></script>
<link href="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/css/cstown_sys.css" rel="stylesheet" type="text/css" media="screen"/>
<div class="pageContent">
    <input type="hidden" value="<?php if ($this->_tpl_vars['outgoing_inquiry_sheet']['type']): ?><?php echo $this->_tpl_vars['outgoing_inquiry_sheet']['type']; ?>
<?php else: ?>1<?php endif; ?>" id="submit_type_add" />
    <div class="stkInfEnter" style="width:98%; " layoutH="100" id="ttbjd_wsj">
        <form method="post" style="overflow:visible;" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, navTabAjaxDone)" id="outgoing_inquiry_sheet_form2_add">
            <div style="float:left; width:100%;">
                <div class="sIE_title" style="width:15%;">
                    <div class="button">
                        <div class="buttonContent">
                            <a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/outgoing_inquiry_sheet/add-design-1" style="line-height: 25px;" target="navTab" rel="outgoing_inquiry_sheet_add" fresh="true" title="添加">切换至-外发询价单</a>
                        </div>
                    </div>
                </div>
                <div class="sIE_title" style="width:60%;">外发询价单(无设计)</div>
                <script>$('#submit_type_add').val('2');</script>
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
                    <input type="text" class="sIE_No" style="width:100px;" id="design_name_add" name="design_name" value="<?php echo $this->_tpl_vars['outgoing_inquiry_sheet']['design_name']; ?>
"  />
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

                <div class="sIE_l_02" style="width:95%;">
                    <div class="sIE_l_01_title" style="line-height:26px;">尺码类型:</div>
                    <select class="picture_select01 size" name="size_category" id="size_category" style="width:106px; height:26px;">
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
    function size_window_table_submit(id){
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
    function Del_detaile(k,id){
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
    function size_window_table_add(size_category_id){
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
    function getEdit_detaile(size_category_id){
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
            $("#oic_table").find(".oqs_number input[type='text']").each(function () {
                zuizhong_number += Number($(this).val());
            });

            if(zuizhong_number!='' || zuizhong_number!=0){
                $("#outgoing_inquiry_sheet_number1_add").val(zuizhong_number);
                $("#outgoing_inquiry_sheet_number1_add").attr("readonly","readonly");
            }
            else{
                $("#outgoing_inquiry_sheet_number1_add").removeAttr("readonly");
            }

            $("#oic_table_add_"+size_category_id).find(".oqs_number input[type='text']").each(function () {
                bufen_number +=Number($(this).val());
            });

                $("#heji_tr_"+size_category_id).find("td").html("合计："+bufen_number);
                $("#heji_"+size_category_id).val(bufen_number);


        }

    }
    $(document).ready(function()
    {
        $("#size_category_add").click(function(){

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
                        if(locals.cn_name == '非服装'){
                            var table_value = "<table cellspacing='0' class='sIE_l_02Tab' id=oic_table_add_"+size_category_id+" style='margin-top:20px;'><tr><td><button type='button' onclick=oic_add('"+size_category_id+"')>添加尺码</button></td><td align='center' style='font-size: 16px;'>"+locals.cn_name+"</td><td align='right'><button type='button' onclick=oic_del('"+size_category_id+"')>删除本表</button></td></tr><tr><th>尺码</th><th>颜色</th><th>数量</th><th>操作</th></tr><tr><td><input type='text' id=oqs_size_"+locals.insert_id+"  name=oqs_size["+locals.insert_id+"] value='' class='picture_select01 size'></td><td><input type='text' name=oqs_color["+locals.insert_id+"] value='' style='width:100px;'></td><td class='oqs_number'><input type='text' id=oqs_number_"+locals.insert_id+" name=oqs_number["+locals.insert_id+"] value='' onkeyup=\"change_number("+locals.insert_id+","+size_category_id+");this.value=this.value.replace(/\\D/g,'');\" style='width:100px;'></td><td class='size_value' size_value='"+locals.insert_id+"'><a href='#' onClick=getDel_detaile(this,'"+locals.en_name+"',"+locals.size_category_id+") style='float:right;color:blue'>删除</a></td></tr><tr id=heji_tr_"+size_category_id+"><td colspan='5' align='center'>合计：</td><input type='hidden' id=heji_"+size_category_id+" name=heji["+size_category_id+"] value=''></tr></table>";
                        }
                        else{
                            var table_value = "<table cellspacing='0' class='sIE_l_02Tab' id=oic_table_add_"+size_category_id+" style='margin-top:20px;'><tr><td><button type='button' onclick=oic_add('"+size_category_id+"')>添加尺码</button></td><td colspan='2' align='center' style='font-size: 16px;'>"+locals.cn_name+"</td><td align='right'><button type='button' onclick=oic_del('"+size_category_id+"')>删除本表</button></td></tr><tr><th>尺码</th><th>尺码变更</th><th>数量</th><th>操作</th></tr><tr><td><select class='picture_select01 size' id=oqs_size_"+locals.insert_id+"  name=oqs_size["+locals.insert_id+"] style='width:106px; height:26px;'><option value=''>请选择</option>"+locals.type_size+"</select></td><td id=td_"+locals.insert_id+"></td><td class='oqs_number'><input type='text' id=oqs_number_"+locals.insert_id+" name=oqs_number["+locals.insert_id+"] value='' onkeyup=\"change_number("+locals.insert_id+","+size_category_id+");this.value=this.value.replace(/\\D/g,'');\" style='width:100px;'></td><td class='size_value' size_value='"+locals.insert_id+"'><a href='#' onClick='getEdit_detaile("+locals.insert_id+")' style='float:left;color:blue'>尺码变更</a><a href='#' onClick='getDel_detaile(this,"+locals.insert_id+")' style='float:right;color:blue'>删除</a></td></tr><tr id=heji_tr_"+size_category_id+"><td colspan='5' align='center'>合计：</td><input type='hidden' id=heji_"+size_category_id+" name=heji["+size_category_id+"] value=''></tr></table>";
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
                            var table_value = "<table cellspacing='0' class='sIE_l_02Tab' id=oic_table1_add_"+size_category_id+" style='margin-top:20px;'><tr><td colspan='4'><button type='button' onclick=oic1_add('"+size_category_id+"')>添加尺码</button></td><td align='right'><button type='button' onclick=oic1_del('"+size_category_id+"')>删除本表</button></td></tr><tr><th>尺码</th><th>颜色</th><th>数量</th><th>备注</th><th>操作</th></tr><tr><td><input class='size1' type='text' id=oqs_size_"+locals.insert_id+" name=oqs_size["+locals.insert_id+"] value=''></td><td><input type='text' name=oqs_color["+locals.insert_id+"] value='' style='width:100px;'></td><td class='oqs_number'><input type='text' id=oqs_number_"+locals.insert_id+" name=oqs_number["+locals.insert_id+"] value='' onkeyup=\"change_number("+locals.insert_id+","+size_category_id+");this.value=this.value.replace(/\\D/g,'');\" style='width:100px;'></td><td class='oqs_note'><input type='text' id=oqs_note_"+locals.insert_id+" name=oqs_note["+locals.insert_id+"] value='' style='width:100px;'></td><td class='size_value' size_value='"+locals.insert_id+"'><a href='#' onClick=getDel_detaile(this,'"+locals.en_name+"',"+locals.size_category_id+") style='float:right;color:blue'>删除</a></td></tr><tr id=heji1_tr_"+size_category_id+"><td colspan='5' align='center'>合计：</td><input type='hidden' id=heji1_"+size_category_id+" name=heji["+size_category_id+"] value=''></tr></table>";
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
        $("#outgoing_inquiry_sheet_customer_code_add").bind("input propertychange", function() {

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

            if($("#submit_type_add").val() == '1'){
                if(size>0){
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


        $("#choose_design_code_add").change(
            function()
            {
                //获取id为select的下拉框选中的值
                var a = $("#choose_design_code_add").val();

                if(a != ''){
                    $.ajax({
                        url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/get_design_infomation_by_design_code',//通过Ajax取数据的目标页面
                        type:'post',//方法，还可以是"post"
                        data:{"design_code":a},
                        dataType:'json',//数据类型，还有其它的，详见jQuery手册
                        success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
                        {
                            $("#design_user_add").val(locals.design_user_name);
                            $("#design_name_add").val(locals.design_content_name);
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