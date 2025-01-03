<?php /* Smarty version 2.6.22, created on 2015-11-19 13:43:36
         compiled from oa_material_purchasing/all_page.html */ ?>
<script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/cstown_Sys.js" type="text/javascript"></script>
<link href="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/css/cstown_sys.css" rel="stylesheet" type="text/css" media="screen"/>
<div class="pageContent"> 
<form method="post" style="float:left;" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, navTabAjaxDone)" id="info_form_add">
   <div class="stkInfEnter" style="width:100%;margin-left:-100px; overflow-x:hidden;" layoutH="100"  id="ttbjd_ysj" >
    	<div class="sIE_title" style="margin-left:-25px; font-size:20px;">往来借款单</div>
        <div class="sIE_title" style="margin-left:-25px; font-size:16px;">借款时间：<?php echo $this->_tpl_vars['arr_time'][0]; ?>
年<?php echo $this->_tpl_vars['arr_time'][1]; ?>
月<?php echo $this->_tpl_vars['arr_time'][2]; ?>
日</div>
    	  	<div class="sIEK" style="width:980px;">
           <input type="hidden" name="now_user_id" value="$now_user_id" id="now_user_id" />
            <input type="hidden" name="id" id="hid_id"  value="<?php echo $this->_tpl_vars['oa_material_purchasing']['id']; ?>
" />
            <div class="sIE_l" style="width:900px; margin-left:110px; margin-top:25px;">
                <div style="margin-left:20px; font-size:16px;">公司全称:<strong style="font-size:16px; color:#F00;">西象服饰（大连）有限公司</strong></div>
                <div style=" float:right;margin-right:45px;margin-top:-15px; font-size:16px;">编号:<input type="text" name="number" style="width:100px;" value="<?php echo $this->_tpl_vars['oa_material_purchasing']['number']; ?>
" /></div>
            </div>
            
			<div class="sIE_l_02" style="width:100%; margin-left:130px;">
            
                <table width="834" border="1" cellpadding="1" >
                    <tr>
                      <td width="93" height="48" style="text-align:center;">
                      部&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;门:
                      </td>
                      <td width="129" style="text-align:center;">
                      <select class="add01_select01"  style="margin-left:10px;width:105px;" name="department_id" id="department_id" <?php if ($this->_tpl_vars['oa_material_purchasing']['id'] != '' && $this->_tpl_vars['all'] == '1'): ?>disabled="disabled" <?php endif; ?>>
                          <option value=""></option>
                          <?php $_from = $this->_tpl_vars['get_departments']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['val']):
?>
                          <option  value="<?php echo $this->_tpl_vars['val']['id']; ?>
" <?php if ($this->_tpl_vars['oa_material_purchasing']['department_id'] == $this->_tpl_vars['val']['id']): ?>selected="selected"<?php endif; ?> ><?php echo $this->_tpl_vars['val']['department_name']; ?>
</option>
                          <?php endforeach; endif; unset($_from); ?>
                      </select>
                      </td>
                      <td width="123"style="text-align:center;">
                      借款人（单位）名称:
                      </td>
                      <td colspan="3" >
                      <input type="text" style=" margin-left:10px; width:400px;height:19px;" <?php if ($this->_tpl_vars['oa_material_purchasing']['id'] != '' && $this->_tpl_vars['all'] == '1'): ?>disabled="disabled" <?php endif; ?>  id="borrow_name" name="borrow_name" value="<?php echo $this->_tpl_vars['oa_material_purchasing']['borrow_name']; ?>
" />
                      </td>
                    </tr>
                    <tr>
                      <td height="44" style="text-align:center;">
                      往事由来:
                      </td>
                      <td colspan="5" style="text-align:center;">
                      <textarea style="width:700px;height:19px; margin-left:-5px; " <?php if ($this->_tpl_vars['oa_material_purchasing']['id'] != '' && $this->_tpl_vars['all'] == '1'): ?>disabled="disabled" <?php endif; ?> name="borrow_reason"><?php echo $this->_tpl_vars['oa_material_purchasing']['borrow_reason']; ?>
</textarea>
                      </td>
                    </tr>
                    <tr>
                      <td height="83" colspan="4" style="text-align:center;">
                      <div class="sIE_l_01_title">借款方式:</div>
                       <select class="add01_select01"  style="margin-left:0px;width:100px;" name="borrow_mode" id="borrow_mode" <?php if ($this->_tpl_vars['oa_material_purchasing']['id'] != '' && $this->_tpl_vars['all'] == '1'): ?>disabled="disabled" <?php endif; ?> onchange="change_borrow_mode();">
                            <option value=""></option>
                            <option value="0" <?php if ($this->_tpl_vars['oa_material_purchasing']['borrow_mode'] == '0'): ?>selected="selected"<?php endif; ?> >现金</option>
                            <option value="1" <?php if ($this->_tpl_vars['oa_material_purchasing']['borrow_mode'] == '1'): ?>selected="selected"<?php endif; ?>>支票及票号</option>
                            <option value="2" <?php if ($this->_tpl_vars['oa_material_purchasing']['borrow_mode'] == '2'): ?>selected="selected"<?php endif; ?>>汇款及账号</option>
                       </select>
                       <div style="margin-left:80px; margin-top:0px; height:16px; width:300px;<?php if ($this->_tpl_vars['oa_material_purchasing']['borrow_mode'] != 1): ?>display:none; <?php endif; ?> " id="pioahao_div">
                            <input type="text" style="width:100px;height:19px;" id="pioahao" name="pioahao" value="<?php echo $this->_tpl_vars['pioahao']; ?>
" <?php if ($this->_tpl_vars['oa_material_purchasing']['id'] != '' && $this->_tpl_vars['all'] == '1'): ?>disabled="disabled" <?php endif; ?> />
                       </div>
                       <div style="margin-left:200px; margin-top:0px; height:45px; width:300px; <?php if ($this->_tpl_vars['oa_material_purchasing']['borrow_mode'] != 2): ?>display:none; <?php endif; ?>" id="huikuan_div">
                           <div  style="margin-left:8px;">开户行:<input type="text" style="width:200px;height:19px;" id="kaihuhang" name="kaihuhang" value="<?php echo $this->_tpl_vars['kaihuhang']; ?>
" <?php if ($this->_tpl_vars['oa_material_purchasing']['id'] != '' && $this->_tpl_vars['all'] == '1'): ?>disabled="disabled" <?php endif; ?>/></div>
                           <div style="margin-left:8px;">账 &nbsp;  &nbsp;号:<input type="text" style="width:200px;height:19px;" id="zhanghao" name="zhanghao" value="<?php echo $this->_tpl_vars['zhanghao']; ?>
" <?php if ($this->_tpl_vars['oa_material_purchasing']['id'] != '' && $this->_tpl_vars['all'] == '1'): ?>disabled="disabled" <?php endif; ?>/></div>
                       </div>
                      </td>
                      <td colspan="2" style="text-align:center;">
                      经办人签收:<input type="text" style="width:50px;height:19px;"   name="user_name" value="<?php echo $this->_tpl_vars['oa_material_purchasing']['user_name']; ?>
" <?php if ($this->_tpl_vars['oa_material_purchasing']['id'] != '' && $this->_tpl_vars['all'] == '1'): ?>disabled="disabled" <?php endif; ?> />
                      </td>
                    </tr>
                    <tr>
                      <td height="49" style="text-align:center;">
                      往来性质:
                      </td>
                      <td colspan="5">
                      <input type="radio"   name="contacts_nature" value="1" <?php if ($this->_tpl_vars['oa_material_purchasing']['contacts_nature'] == 1): ?>checked="checked" <?php if ($this->_tpl_vars['oa_material_purchasing']['id'] != '' && $this->_tpl_vars['all'] == '1'): ?>disabled="disabled" <?php endif; ?> <?php endif; ?>/>个人借款
                      <input type="radio"   name="contacts_nature" value="2" <?php if ($this->_tpl_vars['oa_material_purchasing']['contacts_nature'] == 2): ?>checked="checked" <?php if ($this->_tpl_vars['oa_material_purchasing']['id'] != '' && $this->_tpl_vars['all'] == '1'): ?>disabled="disabled" <?php endif; ?> <?php endif; ?>/>公司借款
                      <input type="radio"   name="contacts_nature" value="3" <?php if ($this->_tpl_vars['oa_material_purchasing']['contacts_nature'] == 3): ?>checked="checked" <?php if ($this->_tpl_vars['oa_material_purchasing']['id'] != '' && $this->_tpl_vars['all'] == '1'): ?>disabled="disabled" <?php endif; ?> <?php endif; ?>/>预付款项
                      <input type="radio"   name="contacts_nature" value="4" <?php if ($this->_tpl_vars['oa_material_purchasing']['contacts_nature'] == 4): ?>checked="checked" <?php if ($this->_tpl_vars['oa_material_purchasing']['id'] != '' && $this->_tpl_vars['all'] == '1'): ?>disabled="disabled" <?php endif; ?> <?php endif; ?>/>应付款项
                      <input type="radio"   name="contacts_nature" value="5" <?php if ($this->_tpl_vars['oa_material_purchasing']['contacts_nature'] == 5): ?>checked="checked" <?php if ($this->_tpl_vars['oa_material_purchasing']['id'] != '' && $this->_tpl_vars['all'] == '1'): ?>disabled="disabled" <?php endif; ?> <?php endif; ?>/>其他
                      </td>
                    </tr>
                    <tr style="text-align:center;">
                      <td height="40" colspan="2">
                      	借款金额（大写）:
                      </td>
                      <td colspan="2">
                      	<input type="text" style="width:260px;height:19px;"  id="borrow_price_uppercase" name="borrow_price_uppercase"  value="<?php echo $this->_tpl_vars['oa_material_purchasing']['borrow_price_uppercase']; ?>
"  readonly/>
                      </td>
                      <td width="78">小写：</td>
                      <td width="122">
                      ￥<input type="text" style="width:80px;height:19px;"  id="borrow_price_lowercase" name="borrow_price_lowercase"  value="<?php echo $this->_tpl_vars['oa_material_purchasing']['borrow_price_lowercase']; ?>
" <?php if ($this->_tpl_vars['oa_material_purchasing']['id'] != '' && $this->_tpl_vars['all'] == '1'): ?>disabled="disabled" <?php endif; ?> />
                      <div id="low_err" style="color:#F00; display:none;" ></div>
                      </td>
                    </tr>
                    <tr>
                      <td height="37" colspan="2" style="text-align:center;">
                      预计还款日期:<input type="text" style="width:100px;height:19px;"  id="expected_repayment_date" name="expected_repayment_date"  value="<?php echo $this->_tpl_vars['oa_material_purchasing']['expected_repayment_date']; ?>
" class="date"  <?php if ($this->_tpl_vars['oa_material_purchasing']['id'] != '' && $this->_tpl_vars['all'] == '1'): ?>disabled="disabled" <?php endif; ?> />
                      </td>
                      <td colspan="4">
                      <div style="margin-left:30px;">还款方式:
                       <select  style="width:100px;"  name="repayment_method" id="repayment_method" onchange="change_repayment_method()" <?php if ($this->_tpl_vars['oa_material_purchasing']['id'] != '' && $this->_tpl_vars['all'] == '1'): ?>disabled="disabled" <?php endif; ?> >
                          <option value=""></option>
                          <option value="0" <?php if ($this->_tpl_vars['oa_material_purchasing']['repayment_method'] == 2): ?>selected="selected"<?php endif; ?>>发票核销</option>
                          <option value="1" <?php if ($this->_tpl_vars['oa_material_purchasing']['repayment_method'] == 2): ?>selected="selected"<?php endif; ?>>资金还款</option>
                          <option value="2" <?php if ($this->_tpl_vars['oa_material_purchasing']['repayment_method'] == 2): ?>selected="selected"<?php endif; ?>>其他</option>
                       </select>
                       <input type="text" style=" float: right; margin-right:100px;width:260px;height:19px;<?php if ($this->_tpl_vars['oa_material_purchasing']['repayment_method'] != 2): ?>display:none; <?php endif; ?>"  id="repayment_method_other" name="repayment_method_other"  value="<?php echo $this->_tpl_vars['oa_material_purchasing']['repayment_method_other']; ?>
" <?php if ($this->_tpl_vars['oa_material_purchasing']['id'] != '' && $this->_tpl_vars['all'] == '1'): ?>disabled="disabled" <?php endif; ?> />
                      </div>
                      </td>
                    </tr>
                    <tr>
                      <td height="39" colspan="6">
                      	<div style="margin-left:20px;">备注：涉及材料采购预付款时，成本会计稽核：</div>
                      </td>
                    </tr>
                </table>
                <div style="margin-left:10px;">总经理：<input type="checkbox" name="general_manager_id"  <?php if ($this->_tpl_vars['all'] == '1'): ?> disabled="disabled" <?php endif; ?> <?php if ($this->_tpl_vars['general_manager_id'] != ''): ?>checked="checked"<?php endif; ?>  value="<?php echo $this->_tpl_vars['general_manager_id']; ?>
"/>确认</div>
                <div style="margin-top:-18px; margin-left:130px;">财务经理：<input type="checkbox"  name="financial_manager_id" value="<?php echo $this->_tpl_vars['financial_manager_id']; ?>
" <?php if ($this->_tpl_vars['all'] == '1'): ?> disabled="disabled" <?php endif; ?> <?php if ($this->_tpl_vars['financial_manager_id'] != ''): ?>checked="checked"<?php endif; ?>/>确认</div>
                <div style="margin-top:-18px; margin-left:270px;">出纳：<input type="checkbox"  name="cashier_id" value="<?php echo $this->_tpl_vars['cashier_id']; ?>
" <?php if ($this->_tpl_vars['all'] == '1'): ?> disabled="disabled" <?php endif; ?> <?php if ($this->_tpl_vars['cashier_id'] != ''): ?>checked="checked"<?php endif; ?>/>确认</div>
                <div style="margin-top:-18px; margin-left:390px;">部门主管：<input type="checkbox"  name="department_supervisor_id" value="<?php echo $this->_tpl_vars['department_supervisor_id']; ?>
" <?php if ($this->_tpl_vars['all'] == '1'): ?> disabled="disabled" <?php endif; ?> <?php if ($this->_tpl_vars['department_supervisor_id'] != ''): ?>checked="checked"<?php endif; ?>/>确认</div>
                <div style="margin-top:-18px; margin-left:520px; ">经办人：<input type="checkbox"  checked="checked"  disabled="disabled"  name="user_id" value="<?php echo $this->_tpl_vars['now_user_id']; ?>
" /><font style="color:#03F;">确认</font></div>
            </div>
            <div id="all_err" style="color:#F00; display:none; font-size:18px;  margin-left:130px;"></div>
            
    	</div>
    </div>
 
	<div class="formBar"> 
        <div class="button" style="margin-left:80%; margin-right:5px;">
    		<div class="buttonContent">
       			 <button type="button" id="submit_add">确定</button>
    		</div>
  		</div>
	</div>
</form>
</div>

<script type="text/javascript">
//选择借款方式
function change_borrow_mode(){
	var borrow_mode	=	$("#borrow_mode").val();
	if(borrow_mode==0){
		$("#pioahao_div").css("display","none");
		$("#huikuan_div").css("display","none");
	}else if(borrow_mode==1){
		$("#pioahao_div").css("display","block");
		$("#huikuan_div").css("display","none");
	}
	else if(borrow_mode==2){
		$("#pioahao_div").css("display","none");
		$("#huikuan_div").css("display","block");
	}
}

//选择还款方式
function change_repayment_method(){
	var repayment_method	=	$("#repayment_method").val();
	if(repayment_method==0){
		$("#repayment_method_other").css("display","none");
	}else if(repayment_method==1){
		$("#repayment_method_other").css("display","none");
	}
	else if(repayment_method==2){
		$("#repayment_method_other").css("display","block");
	}
}

$(document).ready(function(){
	//小写转大写金钱 
	$("#borrow_price_lowercase").bind('input propertychange',function(){
		var number = $("#borrow_price_lowercase").val();
		var numbers = number.split(".");
		if(numbers[1]==null||numbers[1]==''){
			$("#low_err").css('display','block');
			$("#low_err").html("格式不对，应写成如：100.00");
		}else{
			$("#low_err").css('display',' none');
			$("#low_err").html("");	
			// 定义转移字符
			var CN_ZERO = "零";
			var CN_ONE = "壹";
			var CN_TWO = "贰";
			var CN_THREE = "叁";
			var CN_FOUR = "肆";
			var CN_FIVE = "伍";
			var CN_SIX = "陆";
			var CN_SEVEN = "柒";
			var CN_EIGHT = "捌";
			var CN_NINE = "玖";
			var CN_TEN = "拾";
			var CN_HUNDRED = "佰";
			var CN_THOUSAND = "仟";
			var CN_TEN_THOUSAND = "万";
			var CN_HUNDRED_MILLION = "亿";
			var CN_DOLLAR = "元";
			var CN_TEN_CENT = "角";
			var CN_CENT = "分";
			var CN_INTEGER = "整";
		 
			// 初始化验证:
			var integral, decimal, outputCharacters, parts;
			var digits, radices, bigRadices, decimals;
			var zeroCount;
			var i, p, d;
			var quotient, modulus;
		 
			number = number.replace(/,/g, ""); 
			number = number.replace(/^0+/, ""); 
			 
			parts = number.split(".");
			if (parts.length > 1) {
				integral = parts[0];
				decimal = parts[1];
				decimal = decimal.substr(0, 2);
			}
			else {
				integral = parts[0];
				decimal = "";
			}
			// 实例化字符大写人民币汉字对应的数字
			digits = new Array(CN_ZERO, CN_ONE, CN_TWO, CN_THREE, CN_FOUR, CN_FIVE, CN_SIX, CN_SEVEN, CN_EIGHT, CN_NINE);
			radices = new Array("", CN_TEN, CN_HUNDRED, CN_THOUSAND);
			bigRadices = new Array("", CN_TEN_THOUSAND, CN_HUNDRED_MILLION);
			decimals = new Array(CN_TEN_CENT, CN_CENT);
			
			outputCharacters = "";
			//大于零处理逻辑  123
			if (Number(integral) > 0) {
				zeroCount = 0;
				for (i = 0; i < integral.length; i++) {
					p = integral.length - i - 1;
					d = integral.substr(i, 1);
					quotient = p / 4;
					modulus = p % 4;
					if (d == "0") {
						zeroCount++;
					}
					else {
						if (zeroCount > 0) {
							outputCharacters += digits[0];
						}
						zeroCount = 0;
						outputCharacters += digits[Number(d)] + radices[modulus];
					}
					if (modulus == 0 && zeroCount < 4) {
						outputCharacters += bigRadices[quotient];
					}
				}
				outputCharacters += CN_DOLLAR;
			}
			// 包含小数部分处理逻辑
			if (decimal != "") {
				for (i = 0; i < decimal.length; i++) {
					d = decimal.substr(i, 1);
					if (d != "0") {
						outputCharacters += digits[Number(d)] + decimals[i];
					}
				}
			}
			//确认并返回最终的输出字符串
			if (outputCharacters == "") {
				outputCharacters = CN_ZERO + CN_DOLLAR;
			}
			if (decimal == ""||parts[1]=='00'||parts[1]=='0') {
				outputCharacters += CN_INTEGER;
			}
		 
			//获取人民币大写
			$("#borrow_price_uppercase").val(outputCharacters);
		}
		
	});
	
	//页面提交
	$("#submit_add").click(function(){
		$("#all_err").css('display','none');
		$("#all_err").html('');
		if($("#hid_id").val()==''){
			if($('#department_id').val()==''){//判断部门
				$("#all_err").css('display','block');
				$("#all_err").html('请选择部门！');
			}else if($("#borrow_name").val()==''){//判断借款名称
				$("#all_err").css('display','block');
				$("#all_err").html('请输入借款人（单位）名称！');
			}else if($("#borrow_reason").val()==''){//判断往来事由
				$("#all_err").css('display','block');
				$("#all_err").html('请输入往来事由！');
			}else if($("#borrow_mode").val()==''){//判断借款方式
				$("#all_err").css('display','block');
				$("#all_err").html('请选择借款方式！');
			}else if(($("#borrow_mode").val()==1)&&($('#pioahao').val()=='')){//判断借款方式的支票及票号
				$("#all_err").css('display','block');
				$("#all_err").html('请输入支票及票号！');
			}else if(($("#borrow_mode").val()==2)&&($('#kaihuhang').val()==''||$("#zhanghao").val()=='')){//判断借款方式的汇款及账号 
				$("#all_err").css('display','block');
				$("#all_err").html('请输入借款方式里的汇款及账号！');
			}else if($("#contacts_nature").val()==''){//判断往来性质
				$("#all_err").css('display','block');
				$("#all_err").html('请选择往来性质！');
			}else if($("#borrow_price_lowercase").val()==''){//判断借款金额（小写）
				$("#all_err").css('display','block');
				$("#all_err").html('请输入借款金额（小写）！');
			}else if($("#expected_repayment_date").val()==''){//判断日期
				$("#all_err").css('display','block');
				$("#all_err").html('请输入预计还款日期！');
			}else if($("#repayment_method").val()==''){//判断还款方式
				$("#all_err").css('display','block');
				$("#all_err").html('请选择还款方式！');
			}else if($("#repayment_method").val()==2&&$("#repayment_method_other").val()==''){//判断还款方式里的其他
				$("#all_err").css('display','block');
				$("#all_err").html('请输入还款方式里的其他！');
			}else{
				$("#info_form_add").submit();	
			}
		}else{
			if($("#now_user_id").val()=='67'){//判断是经理
				
			}	
		}	
	});

});





</script>