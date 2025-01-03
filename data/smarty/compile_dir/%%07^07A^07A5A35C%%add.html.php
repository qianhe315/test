<?php /* Smarty version 2.6.22, created on 2015-07-24 10:18:55
         compiled from nailPaste_quotation/add.html */ ?>
<script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/cstown_Sys.js" type="text/javascript"></script>
<link href="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/css/cstown_sys.css" rel="stylesheet" type="text/css" media="screen"/>
<div class="pageContent"> 
 <?php if ($this->_tpl_vars['quotation_category'] == 11): ?>
  <div class="stkInfEnter" style="width:98%; display:none; padding-bottom:25px;" layoutH="30" id="zjt_ysj_hot"> <?php else: ?>
    <div class="stkInfEnter" style="width:98%" layoutH="30" id="zjt_ysj_hot"> <?php endif; ?>
   
      <div style="float:left; width:100%;"> <?php if (! $this->_tpl_vars['quotation_category']): ?>
        <div class="sIE_title" style="width:15%;">
          <div class="button">
            <div class="buttonContent">
              <button onclick="document.getElementById('zjt_wsj_hot').style.display='block';document.getElementById('zjt_ysj_hot').style.display='none';">指甲贴报价单(无设计)</button>
            </div>
          </div>
        </div>
        <?php endif; ?>
        <div class="sIE_title" style="width:60%;">指甲贴报价单</div>
      </div>
      <form method="post" action="<?php if ($this->_tpl_vars['id']): ?> <?php echo $this->_tpl_vars['update_baojia_action']; ?>
<?php else: ?><?php echo $this->_tpl_vars['baojia_action']; ?>
<?php endif; ?>" id="nailPaste_quotation_submit_form" enctype="multipart/form-data" onsubmit="return validateCallback(this, navTabAjaxDone)">
        <input type="hidden" name="submit_value" id="submit_value" value="" />
        <div class="sIEK" style="width:97%;">
          <div class="sIE_l" style="width:400px;">
            <div class="sIE_l_01" style="width:200px;">
              <div class="sIE_l_01_title">业务员:</div>
              <input type="text" class="sIE_No" style="width:100px;" value="<?php echo $this->_tpl_vars['user_name']; ?>
"  readonly="readonly" />
            </div>
            <div class="sIE_l_01" style="width:200px;">
              <div class="sIE_l_01_title" style="width:80px;">时间:</div>
              <input type="text" value="<?php echo $this->_tpl_vars['quotation_date']; ?>
" style="width:100px;" name="time" class="sIE_No"  readonly="readonly" />
            </div>
            <div class="sIE_l_01" style="width:200px;">
              <div class="sIE_l_01_title">客户代码:</div>
              <input type="text" name="customer_code" id="nq_customer_code" style="width:100px;" value="" class="sIE_No" onkeyup="customer_num();" />
            </div>
            <div class="sIE_l_01" style="width:200px;">
              <div class="sIE_l_01_title" style="width:80px;">报价类型:</div>
              <select  name="quotation_category_id" id="q_type_id" style="width:106px; height:26px;" onchange="design_code()">
                <option value="">请选择</option>
                <?php $_from = $this->_tpl_vars['quotation']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['qf']):
?> 
                <option  value="<?php echo $this->_tpl_vars['qf']['id']; ?>
"><?php echo $this->_tpl_vars['qf']['quotation_name']; ?>
</option>
                <?php endforeach; endif; unset($_from); ?>
              </select>
            </div>
            <div class="sIE_l_01" style="width:200px;">
              <div class="sIE_l_01_title">客户名:</div>
              <input type="text" name="customer_name" style="width:100px;" id="nq_customer_name" value="" class="sIE_No"  readonly="readonly" />
            </div>
            <div class="sIE_l_01" style="width:200px;">
              <div class="sIE_l_01_title">报价名称:</div>
              <input type="text" name="design_pic_name" value="<?php echo $this->_tpl_vars['design_pic_name']; ?>
" style="width:100px;" class="sIE_No" id="design_pic_name" />
              <input type="text" name="stock_pic_name" value="<?php echo $this->_tpl_vars['design_pic_name']; ?>
" class="sIE_No" id="stock_pic_name" onkeyup="get_stock();" style="display:none;width:100px;" />
              <div id="stock_pic_name_error" style="line-height: 26px; float: left; color: rgb(255, 0, 0); margin-left: 5px; display:none;"></div>
              </div>
            <div class="sIE_l_01" style="width:200px;">
              <div class="sIE_l_01_title">公司:</div>
              <input type="text" name="customer_company" style="width:100px;" value="<?php echo $this->_tpl_vars['customer_company']; ?>
" class="sIE_No" id="nq_customer_company"  readonly="readonly" />
            </div>
            <div class="sIE_l_01" style="width:200px;">
              <div class="sIE_l_01_title" style="width:80px;">报价编号:</div>
              <select name="quotation_code"  id="q_number" onchange="q_number_select()" style="height:26px; width:106px;">
                <option value="">请选择</option>
              </select>
              <input type="text" name="stock_number" class="sIE_No" id="s_number_text" readonly="readonly" value="<?php echo $this->_tpl_vars['stock_number']; ?>
" style="display:none; width:100px;" />
            </div>
            <div class="sIE_l_01" style="width:200px; float:right">
              <div class="sIE_l_01_title">片数:</div>
              <input class="sIE_No digits" name="pcs" id="pcs" onkeyup="change_pcs()" style="width:100px; display:block" type="text" value=""   >
            </div>
            <div id="pcs_error" style="line-height: 26px; float: left; color: rgb(255, 0, 0); margin-left: 5px; display:none;"></div>
            <div id="nq_result" style="line-height: 26px; float: left; color: rgb(255, 0, 0); margin-left: 10px; display:none;"></div>
          </div>
          <div class="sIE_r" style="width:630px; height:auto;">
            <div class="sIE_l_01" style="margin-left:50px; width:210px;">
              <div class="sIE_l_01_title" style="width:80px;" >单片成本:</div>
              <input type="text" class="sIE_No" name="one_nail_cost" value="<?php echo $this->_tpl_vars['one_nail_cost']; ?>
" id="one_nail_cost" readonly="readonly" style="width:100px;"/>
              
              <div class="sIE_l_01_title" style="width:80px;margin-top:5px ">&nbsp; &nbsp; 总成本:</div>
              <input type="text" class="sIE_No" name="total_nail_cost" value="<?php echo $this->_tpl_vars['total_nail_cost']; ?>
" id="total_nail_cost" readonly="readonly" style="width:100px;margin-top:5px"/>
              
              <div class="sIE_l_01_title" style="width:80px;margin-top:5px ">单片报价:</div>
              <input type="text" class="sIE_No" name="one_nail_price" value="<?php echo $this->_tpl_vars['one_nail_price']; ?>
" id="one_nail_price" readonly="readonly" style="width:100px;margin-top:5px"/>
              
              <div class="sIE_l_01_title" style="width:80px;margin-top:5px ">&nbsp; &nbsp; 总报价:</div>
              <input type="text" class="sIE_No" name="total_nail_price" value="<?php echo $this->_tpl_vars['total_nail_price']; ?>
" id="total_nail_price" readonly="readonly" style="width:100px;margin-top:5px"/>
              
              <div class="sIE_l_01_title" style="width:80px;margin-top:5px ">&nbsp; &nbsp; &nbsp; &nbsp; 版费:</div>
              <input type="text" class="sIE_No" name="version" value="<?php echo $this->_tpl_vars['version']; ?>
" id="version" readonly="readonly" style="width:100px;margin-top:5px"/>
              
              <div class="sIE_l_01_title" style="width:80px; margin-top:5px">最终报价:</div>
              <input type="text" class="sIE_No" name="final_quote" value="<?php echo $this->_tpl_vars['final_quote']; ?>
" id="final_quote" readonly="readonly" style="width:100px;margin-top:5px"/>
             
              </div>
              <div class="sIE_r" style="height:210px;  width:260px; margin-top:0px; margin-left:10px;">
              <div class="sIE_r_img" id="image" style="width:210px; height:210px;"><img src="<?php echo $this->_tpl_vars['upload_jpg']; ?>
" style="height:210px; width:210px;" />
              </div>
             <div style="margin-top:220px; margin-left:20px;" id="div_upload_jpg"><a href="" id="upload_jpg_links" target="_blank" style=" color:#03F;font-size:20px;">下载jpg</a></div><div style="margin-left:165px; margin-top:-20px; " id="div_upload_cdr"><a href="" id="upload_cdr_links" style="color:#03F;font-size:20px;">下载cdr</a></div>
              <input type="hidden" name="image" id="image_hidden" />
              <?php if ($this->_tpl_vars['quotation_category_id'] != 5): ?>
              <div   id="sheji" style="margin-top:10px" >
                <div class="sIE_l_01_title" style="width:50px; margin-left: 50px; display:block;">设计师:</div>
                <div class="sIE_r01" style="float:left; width:160px;">
                  <div class="sIE_r01_div">
                    <input type="text" class="sIE_No" value="" id="shejishi" readonly="readonly" style="width:80px;"/>
                  </div>
                </div>
              </div>
              <?php endif; ?> 
            </div>
             
          </div>
        </div>
      </form>
      <div class="sIE_l_02" style=" margin-top:3%;"> <?php if ($this->_tpl_vars['edit_no'] != 1): ?>
        <div class="button" class="button" style="margin-left:70%; margin-right:5px;">
        <div class="buttonContent">
          <button class="close">取消</button>
        </div>
      </div>
      <?php else: ?>
      <div class="button" style="margin-left:75%;margin-right:5px;">
        <div class="buttonContent">
          <button type="button" id="nq_save">确定</button>
        </div>
      </div>
      <div class="button" style="margin-right:5px;">
        <div class="buttonContent">
          <button class="close">取消</button>
        </div>
      </div>
       <div class="button">
        <div class="buttonContent">
          <button type="button" id="add_order">添加做货单</button>
        </div>
      </div>
      <?php endif; ?> 
      
      </div>
  </div>
<script type="text/javascript" language="javascript">
  	//获取客户信息和报价编号					
	function customer_num(){
		var code = $("#nq_customer_code").val();//客户代码
		var q_type_id = $("#q_type_id").val();//报价类型
		$.ajax({
			url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/nailPaste_quotation/get_customer',//通过Ajax取数据的目标页面
			data:{"code":code},
			type:'post',//方法，还可以是"post"
			dataType:'json',//数据类型，还有其它的，详见jQuery手册
			success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
			{
				if(locals){
					$("#nq_customer_name").val(locals.customer_name);
					customer_name=locals.customer_name;
					$("#nq_customer_company").val(locals.company);
					if(q_type_id=='13' ){
						$.ajax({
							url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/nailPaste_quotation/get_design_code',//通过Ajax取数据的目标页面
							data:{"q_type_id":q_type_id,"customer_name":customer_name,"customer_code":code},
							type:'post',//方法，还可以是"post"
							dataType:'text',//数据类型，还有其它的，详见jQuery手册
							success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
							{
								$("#q_number").html(locals);
							}			
						});
					}
				}else{
					$("#nq_customer_name").val('');
					$("#nq_customer_company").val('');									
				}
			}								
		});
	}
	
	//根据片数，获取成本，报价，本费	（有设计）		
	function change_pcs(){
		var pcs = $("#pcs").val();//片数
		var z= /^[0-9]*$/;//判断是否为数字
		var one_cost='';//单片成本
		var all_cost='';//总成本
		var one_price='';//单片报价
		var all_price='';//总报价
		var version='';//版费
		var final_quote='';//最终报价
		$("#pcs_error").css("display","none");//先隐藏错误
		if(z.test(pcs)){
			if(pcs<1000){
				$("#pcs_error").css("display","block");
				$("#pcs_error").html("片数不能小于1000哦！");
				return;
			}else if(pcs>=1000&&pcs<2000){
				one_price = 2.09;//单片报价（单位：美元）
				one_cost  = 7.53;//单片成本（单位：元）
				version	  =	20;//版费（单位：美元）
			}else if(pcs>=2000&&pcs<3000){
				one_price = 1.89;//单片报价
				one_cost  = 7.53;//单片成本
				version	  =	20;//版费
			}else if(pcs>=3000&&pcs<5000){
				one_price = 1.49;//单片报价
				one_cost  = 4.53;//单片成本
				version	  =	0;//版费
			}else if(pcs>=5000&&pcs<10000){
				one_price = 1.29;//单片报价
				one_cost  = 4.53;//单片成本
				version	  =	0;//版费
			}else if(pcs>=10000){
				one_price = 1.19;//单片报价
				one_cost  = 4.53;//单片成本
				version	  =	0;//版费
			}
			
			//单片成本
			$("#one_nail_cost").val(one_cost);
			
			//总成本计算
			all_cost = one_cost+ "*" + pcs;
			all_cost = eval('('+all_cost+')');
			all_cost = all_cost.toFixed(2)//保留2位
			$("#total_nail_cost").val(all_cost);

			//单片报价
			$("#one_nail_price").val("$"+one_price);
			
			//总报价计算
			all_price = one_price+ "*" + pcs;
			all_price = eval('('+all_price+')');
			all_price = all_price.toFixed(2)//保留2位
			$("#total_nail_price").val("$"+all_price);
			
			//版费
			version = version.toFixed(2)//保留2位
			$("#version").val(version);
			
			//最终报价
			final_quote = eval('('+all_price+ "+" +version+')');
			$("#final_quote").val("$"+final_quote);
			
		}else{
			$("#pcs_error").css("display","block");
			$("#pcs_error").html("片数只能填数字哦！");
		}
	}
	
	//根据片数，获取成本，报价，本费	（无设计）		
	function no_change_pcs(){
		var no_pcs = $("#no_pcs").val();//片数
		var z= /^[0-9]*$/;//判断是否为数字
		var no_one_cost='';//单片成本
		var no_all_cost='';//总成本
		var no_one_price='';//单片报价
		var no_all_price='';//总报价
		var no_version='';//版费
		var no_final_quote='';//最终报价
		$("#no_pcs_error").css("display","none");//先隐藏错误
		if(z.test(no_pcs)){
			if(no_pcs<1000){
				$("#no_pcs_error").css("display","block");
				$("#no_pcs_error").html("片数不能小于1000哦！");
				return;
			}else if(no_pcs>=1000&&no_pcs<2000){
				no_one_price = 2.09;//单片报价（单位：美元）
				no_one_cost  = 7.53;//单片成本（单位：元）
				no_version	  =	20;//版费（单位：美元）
			}else if(no_pcs>=2000&&no_pcs<3000){
				no_one_price = 1.89;//单片报价
				no_one_cost  = 7.53;//单片成本
				no_version	  =	20;//版费
			}else if(no_pcs>=3000&&no_pcs<5000){
				no_one_price = 1.49;//单片报价
				no_one_cost  = 4.53;//单片成本
				no_version	  =	0;//版费
			}else if(no_pcs>=5000&&no_pcs<10000){
				no_one_price = 1.29;//单片报价
				no_one_cost  = 4.53;//单片成本
				no_version	  =	0;//版费
			}else if(no_pcs>=10000){
				no_one_price = 1.19;//单片报价
				no_one_cost  = 4.53;//单片成本
				no_version	  =	0;//版费
			}
			
			//单片成本
			$("#no_one_nail_cost").val(no_one_cost);
			
			//总成本计算
			no_all_cost = no_one_cost+ "*" + no_pcs;
			no_all_cost = eval('('+no_all_cost+')');
			no_all_cost = no_all_cost.toFixed(2)//保留2位
			$("#no_total_nail_cost").val(no_all_cost);

			//单片报价
			$("#no_one_nail_price").val("$"+no_one_price);
			
			//总报价计算
			no_all_price = no_one_price+ "*" + no_pcs;
			no_all_price = eval('('+no_all_price+')');
			no_all_price = no_all_price.toFixed(2)//保留2位
			$("#no_total_nail_price").val("$"+no_all_price);
			
			//版费
			no_version = no_version.toFixed(2)//保留2位
			$("#no_version").val(no_version);
			
			//最终报价
			no_final_quote = eval('('+no_all_price+ "+" +no_version+')');
			$("#no_final_quote").val("$"+no_final_quote);
			
		}else{
			$("#no_pcs_error").css("display","block");
			$("#no_pcs_error").html("片数只能填数字哦！");
		}
	}					
	
	//根据stock名称获取相关信息
	function get_stock(){
		var stock_pic_name = $("#stock_pic_name").val();//报价名称
		$("#stock_pic_name_error").css("display","none");
		$("#image").html("");								//
		$("#image_hidden").val("");							//	
		document.getElementById("upload_jpg_links").href="";//数据清空
		document.getElementById("upload_cdr_links").href="";//
		$.ajax({
			url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/nailPaste_quotation/get_stock_info',//通过Ajax取数据的目标页面
			data:{"stock_name":stock_pic_name},
			type:'post',//方法，还可以是"post"
			dataType:'text',//数据类型，还有其它的，详见jQuery手册
			success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
			{
				locals=locals.split("|");
				if(locals[1]!=""){
					$("#image").html("<img style='height:220px; width:220px;' src = " + locals[0] + ">");
					$("#image_hidden").val(locals[0]);
					document.getElementById("upload_jpg_links").href=locals[0];
					document.getElementById("upload_cdr_links").href=locals[1];	
				}else{
					$("#stock_pic_name_error").css("display","block");
					$("#stock_pic_name_error").html("亲，没有这个名称哦！");
				}									
			}
		});	
	}
				
	//获取报价编号
	function design_code(){
		$(document).ready(function(){
			var nq_customer_name=$("#nq_customer_name").val();//客户名
			var nq_customer_code=$("#nq_customer_code").val();//客户代码
			/**************数据初始化 开始******************/
			$('#one_nail_cost').val("");//单片成本
			$('#total_nail_cost').val("");//总成本
			$('#one_nail_price').val("");//单片报价
			$('#total_nail_price').val("");//总报价
			$('#version').val("");//版费
			$('#final_quote').val("");//最终报价
			$('#pcs').val("");//片数
			$('#image_hidden').val("");//图片
			$('#image').html("");//图片
			$('#shejishi').val("");//设计师
			document.getElementById("upload_jpg_links").href="";//jpg连接
			document.getElementById("upload_cdr_links").href="";//jpg连接
			/**************数据初始化 结束******************/	
			
			var q_type_id = $("#q_type_id").val();
			if(q_type_id=='5'){
				$('#q_number').css('display','none');
				$('#s_number_text').css('display','block');
				$('#design_pic_name').css('display','none');
				$('#stock_pic_name').css('display','block');
				document.getElementById("stock_pic_name").value="";
				$('#sheji').css('display','none');
			}else{
				$('#q_number').css('display','block');
				$('#s_number_text').css('display','none');
				$('#design_pic_name').css('display','block');
				$('#stock_pic_name').css('display','none');	
				$('#sheji').css('display','block');													
				$.ajax({
					url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/nailPaste_quotation/get_design_code',//通过Ajax取数据的目标页面
					data:{"q_type_id":q_type_id,"customer_name":nq_customer_name,"customer_code":nq_customer_code},
					type:'post',//方法，还可以是"post"
					dataType:'text',//数据类型，还有其它的，详见jQuery手册
					success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
					{  
						$("#q_number").html(locals);
					}										
				});
			}
	   });
	}
					
										
	//根据报价编号，获取图片信息 				
	function q_number_select(){
	   $(document).ready(function(){	
			var num = $("#q_number").val();//报价编号
			$('#aaa').css('display','none');
			$.ajax({
				url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/nailPaste_quotation/get_design_info',//通过Ajax取数据的目标页面
				data:{"num":num},
				type:'post',//方法，还可以是"post"
				dataType:'text',//数据类型，还有其它的，详见jQuery手册
				success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
				{
					locals=locals.split("|");
					if(locals[1]!=""){
						$("#shejishi").val(locals[0]);
						$("#image").html("<img style='height:220px; width:220px;' src = " + locals[1] + ">");
						$("#image_hidden").val(locals[1]);
						document.getElementById("upload_jpg_links").href=locals[1];
						document.getElementById("upload_cdr_links").href=locals[2];	
					}
				}										
			});
	   });
	}
					
</script> 
<script>
function picture_select(){
	var id = $("#q_type_id").val();

	if(document.getElementById('q_type_id').value==1){
		document.getElementById('q_number').style.display='none';
		document.getElementById('s_number_text').style.display='block';
		document.getElementById('design_pic_name').style.display='none';
		document.getElementById('stock_pic_name').style.display='block';
	}else{
		document.getElementById('q_number').style.display='block';
		document.getElementById('s_number_text').style.display='none';
		document.getElementById('design_pic_name').style.display='block';
		document.getElementById('stock_pic_name').style.display='none';
	}
}
</script> 
  <?php if ($this->_tpl_vars['quotation_category'] == 1): ?>
  <div class="stkInfEnter" style="width:98%;display:block;" layoutH="30" id="zjt_wsj_hot"> <?php else: ?>
    <div class="stkInfEnter" style="width:98%; display:none;" layoutH="30" id="zjt_wsj_hot"> <?php endif; ?>
      <div style="width:100%; float:left;"> <?php if (! $this->_tpl_vars['quotation_category']): ?>
        <div class="sIE_title" style="width:15%;">
          <div class="button">
            <div class="buttonContent">
              <button onclick="document.getElementById('zjt_ysj_hot').style.display='block';document.getElementById('zjt_wsj_hot').style.display='none';">指甲贴报价单</button>
            </div>
          </div>
        </div>
        <?php endif; ?>
        <div class="sIE_title" style="width:60%;">指甲贴报价单(无设计)</div>
      </div>
      <form name="form1" method="post" action="<?php if ($this->_tpl_vars['id']): ?> <?php echo $this->_tpl_vars['update_no_baojia_action']; ?>
<?php else: ?><?php echo $this->_tpl_vars['no_baojia_action']; ?>
<?php endif; ?>" id="no_nailPaste_quotation_submit_form" enctype="multipart/form-data" onsubmit="return validateCallback(this, navTabAjaxDone)">

        <input type="hidden" name="no_tapedata_formula" id="no_tapedata_formula" />
        <input type="hidden" name="no_submit_value" id="no_submit_value" value="" />
        <div class="sIEK" style="width:55%;">
          <div class="sIE_l" style="width:400px;">
            <div class="sIE_l_01" style="width:200px;">
              <div class="sIE_l_01_title">业务员:</div>
              <input type="text" readonly="readonly" value="<?php echo $this->_tpl_vars['user_name']; ?>
" class="sIE_No" style="width:100px;" />
            </div>
            <div class="sIE_l_01" style="width:200px;">
              <div class="sIE_l_01_title">时间:</div>
              <input type="text" class="sIE_No" name="no_time" value="<?php echo $this->_tpl_vars['quotation_date']; ?>
" readonly="readonly" style="width:100px;" />
            </div>
            <div class="sIE_l_01" style="width:200px;">
              <div class="sIE_l_01_title">客户代码:</div>
              <input type="text" class="sIE_No" name="nq_customer_code_no" value="<?php echo $this->_tpl_vars['customer_code']; ?>
" style="width:100px;" id="nq_customer_code_no" onkeyup="no_customer_num();" />
            </div>
            <div class="sIE_l_01" style="width:200px;">
              <div class="sIE_l_01_title">报价名称:</div>
              <input type="text" class="sIE_No" value="" name="no_name" style="width:100px;"  id="no_name" onkeyup="design_pic_name_no();"/>
            </div>
            <div class="sIE_l_01" style="width:200px;">
              <div class="sIE_l_01_title">客户名:</div>
              <input type="text" class="sIE_No" value="<?php echo $this->_tpl_vars['customer_name']; ?>
" name="no_customer_name" id="no_customer_name" style="width:100px;"  readonly="readonly" />
            </div>
            <div class="sIE_l_01" style="width:200px;">
              <div class="sIE_l_01_title">报价编号:</div>
              <input type="text" class="sIE_No" name="no_stock_number" id="no_stock_number" readonly="readonly" value="<?php echo $this->_tpl_vars['no_stock_number']; ?>
" style="width:100px;" />
            </div>
            
            <div class="sIE_l_01" style="width:200px;">
              <div class="sIE_l_01_title">公司:</div>
              <input type="text" class="sIE_No" name="no_customer_company" value="<?php echo $this->_tpl_vars['customer_company']; ?>
" id="no_customer_company" style="width:100px;"  readonly="readonly" />
            </div>
            
            <div class="sIE_l_01" style="width:200px;">
            <div class="sIE_l_01_title">片数:</div>
              <input class="sIE_No digits" name="no_pcs" id="no_pcs" onkeyup="no_change_pcs()" style="width:100px;" type="text"  value=""  >
              <div id="no_pcs_error" style="line-height: 26px; float: left; color: rgb(255, 0, 0); margin-left: 10px; display:none;"></div>
            </div>
           
            <div id="hq_no_result" style="line-height: 26px; float: left; color: rgb(255, 0, 0); margin-left: 10px; display:none;"></div>
          </div>
          <div class="sIE_r" style="width:300px;">
              <div class="sIE_l_01" style="margin-left:50px; width:210px;">
                  <div class="sIE_l_01_title" style="width:80px;" >单片成本:</div>
                  <input type="text" class="sIE_No" name="no_one_nail_cost" value="" id="no_one_nail_cost" readonly="readonly" style="width:100px;"/>
                  
                  <div class="sIE_l_01_title" style="width:80px;margin-top:5px ">&nbsp; &nbsp; 总成本:</div>
                  <input type="text" class="sIE_No" name="no_total_nail_cost" value="" id="no_total_nail_cost" readonly="readonly" style="width:100px;margin-top:5px"/>
                  
                  <div class="sIE_l_01_title" style="width:80px;margin-top:5px ">单片报价:</div>
                  <input type="text" class="sIE_No" name="no_one_nail_price" value="" id="no_one_nail_price" readonly="readonly" style="width:100px;margin-top:5px"/>
                  
                  <div class="sIE_l_01_title" style="width:80px;margin-top:5px ">&nbsp; &nbsp; 总报价:</div>
                  <input type="text" class="sIE_No" name="no_total_nail_price" value="" id="no_total_nail_price" readonly="readonly" style="width:100px;margin-top:5px"/>
                  
                  <div class="sIE_l_01_title" style="width:80px;margin-top:5px ">&nbsp; &nbsp; &nbsp; &nbsp; 版费:</div>
                  <input type="text" class="sIE_No" name="no_version" value="" id="no_version" readonly="readonly" style="width:100px;margin-top:5px"/>
                  
                  <div class="sIE_l_01_title" style="width:80px; margin-top:5px">最终报价:</div>
                  <input type="text" class="sIE_No" name="no_final_quote" value="" id="no_final_quote" readonly="readonly" style="width:100px;margin-top:5px"/>
              </div>
          </div>    
        </div>
       
      </form>
      <div style="float:left; width:270px;">
      <div class="sIE_r" style="height:260px; width:260px; margin-top:0px; ">
      
                <div class="sIE_r_img" style="height:260px; width:260px; margin-left:0px; display:none;" id="image_no">
                   <div style="float:left;  width:260px; height:auto;">
                        <iframe style="border:none; width:260px; height:260px;"></iframe>
                      </div>  
                 </div>
                <div class="sIE_r_img" style="height:280px; width:260px; margin-left:0px;"id="image_no_1">
                      <div style="float:left;  width:260px; height:auto;">
                        <iframe name="nq_yframe_hotfix" src="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/nailPaste_quotation/two_img_upload" style="border:none; width:260px; height:280px;"></iframe>
                      </div>
                      
                </div>
      
                
                <form style="float:left; width:260px;" id="hq_upload_jpg" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/nailPaste_quotation/two_img_upload" target="nq_yframe_hotfix" method="post" enctype="multipart/form-data" >
                  <div style="float:left; height:30px; width:60px; overflow:hidden; margin-left:20px; position:relative;">
                    <input type="file" class="sIE_r_img_file" id="hq_jpg_file" name="upload_file[]" multiple="multiple" style=" opacity:0; position:relative; z-index:10; margin-top:0px;" />
                    <input type="button" class="sIE_r_img_file" name="jpg" style=" opacity:1; width:60px; text-align:center; height:24px; position:absolute; z-index:9; margin-top:0px;" value="浏览" />
                  </div>
                  <input type="button" id="nq_jpg_upload_submit" value="上传JPG和CDR" style=" float:right; width:100px;"/>
                </form>
      </div>
      <!--<div class="sIE_r" style="height:20px; width:260px; margin-top: 30px;padding-top:15px; border-top:dotted 1px #CCC;float:left; " >
      
                <div class="sIE_r_img" style="height:36px; width:260px; margin-left:0px; display:none;" id="cdr_no">
                      <div style="float:left;  width:260px; height:auto;"> 
                       
                        <iframe  style="border:none; width:260px; height:260px;"></iframe>
                      </div>
                </div>
                <div class="sIE_r_img" style="height:36px; width:260px; margin-left:0px;" id="cdr_no_1">
                      <div style="float:left;  width:260px; height:auto;"> 
                        <img src="sss.jpg" width="224px" height="224px" />
                        <iframe name="yframe_hotfix_cdr" src="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/nailPaste_quotation/upload_cdr" style="border:none; width:260px; height:260px;"></iframe>
                      </div>
                </div>
                <form style="float:left; width:260px;" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/nailPaste_quotation/upload_cdr" id="hq_upload_cdr" target="yframe_hotfix_cdr" method="post" enctype="multipart/form-data" >
                  <div style="float:left; width:60px; height:50px; overflow:hidden; margin-left:20px;position:relative;">
                    <input type="file" class="sIE_r_img_file" id="hq_cdr_file" name="cdr_file" style=" opacity:0; position:relative; z-index:10; margin-top:0px;"  />
                    <input type="button" class="sIE_r_img_file" name="jpg" style=" opacity:1; width:60px; text-align:center; height:24px; position:absolute; z-index:9; margin-top:0px;" value="浏览" />
                  </div>
                  <input type="button" id="nq_cdr_upload_submit" value="上传CDR" style=" float:right; width:70px;" />
                  <div id="testFileInput" class="uploadify" style="height: 30px; width: 120px; float:left; margin-top:10px;"> </div>
                </form>
      </div>-->
      </div>
      <div class="sIE_l_02" style="margin-top:65px; margin-top:5%;">
      <div class="button" style="margin-left:75%;margin-right:5px;">
        <div class="buttonContent">
          <button type="button" id="no_nq_save">确定</button>
        </div>
      </div>
      <div class="button">
        <div class="buttonContent" style="margin-right:5px;">
          <button class="close">取消</button>
        </div>
      </div>
      <div class="button" >
        <div class="buttonContent">
          <button type="button" id="no_add_order">添加做货单</button>
        </div>
      </div>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript" language="javascript">
	   //无设计：根据客户代码，获取客户相关信息
	  function no_customer_num(){
		  var code = $("#nq_customer_code_no").val();
		  $.ajax({
			  url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/nailPaste_quotation/get_customer',//通过Ajax取数据的目标页面
			  data:{"code":code},
			  type:'post',//方法，还可以是"post"
			  dataType:'json',//数据类型，还有其它的，详见jQuery手册
			  success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
			  {
				  if(locals){
					  $("#no_customer_name").val(locals.customer_name);
					  $("#no_customer_company").val(locals.company);
				  }else{
					  $("#no_customer_name").val('');
					  $("#no_customer_company").val('');									
				  }
			  }	
		  });
	  }
					
</script>
<script type="text/javascript">
$(document).ready(function()  
{	//图片上传
	$("#nq_jpg_upload_submit").click(function (){
		$("#image_no").css("display","none");
		$("#image_no").val("");
		$("#image_no_1").css("display","block");
		$("#hq_upload_jpg").submit();
	});
	//cdr上传
	$("#nq_cdr_upload_submit").click(function (){
		$("#cdr_no").css("display","none");
		$("#cdr_no").val("");
		$("#cdr_no_1").css("display","block");
		
		$("#hq_upload_cdr").submit();
	});	
	
	//指甲贴有设计 添加
    $("#nq_save").click(function(){
		$("#nq_result").css("display","none");
		if($("#nq_customer_code").val()== ""){
			$("#nq_result").css("display","block");
			$("#nq_result").html("客户代码不能为空！");
		}
		else if($("#q_type_id").val()== ""){
			$("#nq_result").css("display","block");
			$("#nq_result").html("请选择报价类型！");
		}
		else if(($("#stock_pic_name").val()== "" && $("#stock_pic_name").is(":visible")) || ($("#design_pic_name").val()== "" && $("#design_pic_name").is(":visible"))){
			$("#nq_result").css("display","block");
			$("#nq_result").html("报价名称不能为空！");
		}
		else if((($("#q_number").val()== "" || $("#q_number").val()== "0") && $("#q_number").is(":visible")) || ($("#s_number_text").val()== "" && $("#s_number_text").is(":visible"))){
			$("#nq_result").css("display","block");
			$("#nq_result").html("报价编号不能为空！");
		}
		else if($("#pcs").val()== "" || $("#pcs").val() <1000 || (!isNumber_z($('#pcs').val()) && isEmpty($('#pcs').val()))){
			$("#nq_result").css("display","block");
			$("#nq_result").html("片数不能为空,且大于1000！");
		}
		else if($("#nq_customer_name").val()== ""){
			$("#nq_result").css("display","block");
			$("#nq_result").html("客户名不能为空,请填写正确客户代码！");
		}
		else {
			$("#nq_result").css("display","none");
			$("#submit_value").val('2');
			$("#nailPaste_quotation_submit_form").submit();
		}
    });
	
	//指甲贴无设计 添加
    $("#no_nq_save").click(function(){
    	$("#hq_no_result").css("display","none");
		if($("#nq_customer_code_no").val()== ""){
			$("#hq_no_result").css("display","block");
			$("#hq_no_result").html("客户代码不能为空！");
		}
		else if($("#no_name").val()== ""){
			$("#hq_no_result").css("display","block");
			$("#hq_no_result").html("报价名称不能为空！");
		}
		else if($("#no_pcs").val()== "" || $("#no_pcs").val() < 1000 || (!isNumber_z($("#no_pcs").val()) && isEmpty($("#no_pcs").val()))){
			$("#hq_no_result").css("display","block");
			$("#hq_no_result").html("片数不能为空,且大于1000！");
		}
		else if($("#no_customer_name").val()== ""){
			$("#hq_no_result").css("display","block");
			$("#hq_no_result").html("客户不能为空,请填写正确客户代码！");
		}
		else{
			$("#hq_no_result").css("display","none");
			$.ajax({
				url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/nailPaste_quotation/check_photo',//通过Ajax取数据的目标页面
				data:{},
				type:'post',//方法，还可以是"post"
				dataType:'text',//数据类型，还有其它的，详见jQuery手册
				success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
				{
					if(locals==1){
						$("#no_submit_value").val('2');
						$("#no_nailPaste_quotation_submit_form").submit();
					}else{
						$("#hq_no_result").css("display","block");
						$("#hq_no_result").html("请上传图片,且名称不包含空格！");
					}
				}
			});
		}
    });	
	
	//指甲贴有设计添加做货单的单击事件
    $("#add_order").click(function(){
		$("#nq_result").css("display","none");
		if($("#nq_customer_code").val()== ""){
			$("#nq_result").css("display","block");
			$("#nq_result").html("客户代码不能为空！");
		}
		else if($("#q_type_id").val()== ""){
			$("#nq_result").css("display","block");
			$("#nq_result").html("请选择报价类型！");
		}
		else if(($("#stock_pic_name").val()== "" && $("#stock_pic_name").is(":visible")) || ($("#design_pic_name").val()== "" && $("#design_pic_name").is(":visible"))){
			$("#nq_result").css("display","block");
			$("#nq_result").html("报价名称不能为空！");
		}
		else if((($("#q_number").val()== "" || $("#q_number").val()== "0") && $("#q_number").is(":visible")) || ($("#s_number_text").val()== "" && $("#s_number_text").is(":visible"))){
			$("#nq_result").css("display","block");
			$("#nq_result").html("报价编号不能为空！");
		}
		else if($("#pcs").val()== "" || $("#pcs").val() <1000 || (!isNumber_z($('#pcs').val()) && isEmpty($('#pcs').val()))){
			$("#nq_result").css("display","block");
			$("#nq_result").html("片数不能为空,且大于1000！");
		}
		else if($("#nq_customer_name").val()== ""){
			$("#nq_result").css("display","block");
			$("#nq_result").html("客户名不能为空,请填写正确客户代码！");
		}
		else {
			$("#nq_result").css("display","none");
			$("#submit_value").val('1');
			$("#nailPaste_quotation_submit_form").submit();
		}
    });
	
	//无设计：指甲贴报价添加做货单
    $("#no_add_order").click(function(){
		$("#hq_no_result").css("display","none");
		if($("#nq_customer_code_no").val()== ""){
			$("#hq_no_result").css("display","block");
			$("#hq_no_result").html("客户代码不能为空！");
		}
		else if($("#no_name").val()== ""){
			$("#hq_no_result").css("display","block");
			$("#hq_no_result").html("报价名称不能为空！");
		}
		else if($("#no_pcs").val()== "" || $("#no_pcs").val() < 1000 || (!isNumber_z($("#no_pcs").val()) && isEmpty($("#no_pcs").val()))){
			$("#hq_no_result").css("display","block");
			$("#hq_no_result").html("片数不能为空,且大于1000！");
		}
		else if($("#no_customer_name").val()== ""){
			$("#hq_no_result").css("display","block");
			$("#hq_no_result").html("客户不能为空,请填写正确客户代码！");
		}
		else{
			$("#hq_no_result").css("display","none");
			$.ajax({
				url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/nailPaste_quotation/check_photo',//通过Ajax取数据的目标页面
				data:{},
				type:'post',//方法，还可以是"post"
				dataType:'text',//数据类型，还有其它的，详见jQuery手册
				success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
				{
					if(locals==1){
						$("#no_submit_value").val('1');
						$("#no_nailPaste_quotation_submit_form").submit();
					}else{
						$("#hq_no_result").css("display","block");
						$("#hq_no_result").html("请上传图片,且名称不包含空格！");
					}
				}
			});
		}
    });	
});	


function uploadok(event, queueId, fileObj, response, data){
	//alert('aaa');
}

</script> 
<!-- {/literal} -->