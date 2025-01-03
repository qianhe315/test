<?php /* Smarty version 2.6.22, created on 2013-06-14 14:49:25
         compiled from procure_metrial_procure/add.html */ ?>
<script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/cstown_Sys.js" type="text/javascript"></script>
<link href="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/css/cstown_sys.css" rel="stylesheet" type="text/css" media="screen"/>
<div class="pageContent">
 <form method="post" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, navTabAjaxDone)" id="rhinestone_quotation_info_form">
  <div class="stkInfEnter" layoutH="100" style="width:97%; margin-left:10px;">
    
    <div class="sIEK" style="width:200px; float:left;">
      <div style="width:200px; float:left;">
       
          <div class="sIE_l" style="width:180px;">
            <div style="float:left; margin-bottom:5px;">
              <div class="sIE_l_01_title">时间:</div>
              <input type="text" class="sIE_No"  name="customer_code"  />
            </div>
            <div style="float:left; margin-bottom:5px;">
              <div class="sIE_l_01_title">负责人:</div>
              <input type="text" class="sIE_No"  name="quotation_date" id="quotation_date" value="<?php if ($this->_tpl_vars['rhinestone_quotation']['quotation_date'] != ''): ?><?php echo $this->_tpl_vars['rhinestone_quotation']['quotation_date']; ?>
<?php else: ?><?php echo $this->_tpl_vars['today']; ?>
<?php endif; ?>"  readonly />
            </div>
            <div style="float:left; margin-bottom:5px;">
              <div class="sIE_l_01_title">用途:</div>
              <input type="text" class="sIE_No"  name="customer_code" id="rhinestone_quotation_customer_code" value="<?php echo $this->_tpl_vars['rhinestone_quotation']['customer_code']; ?>
" />
            </div>
            <div style="float:left; margin-bottom:5px;">
              <div class="sIE_l_01_title">最迟发货期:</div>
              <input type="text" class="sIE_No"  name="customer_name" id="rhinestone_quotation_customer_name" value="<?php echo $this->_tpl_vars['rhinestone_quotation']['customer_name']; ?>
"   readonly />
            </div>
             <div style="float:left; margin-bottom:5px;">
              <div class="sIE_l_01_title">供应商代码:</div>
               <input type="text" class="sIE_No"  name="customer_name" id="rhinestone_quotation_customer_name" value="<?php echo $this->_tpl_vars['rhinestone_quotation']['customer_name']; ?>
"    />
            </div>
            <div style="float:left; margin-bottom:5px;">
              <div class="sIE_l_01_title">供应商:</div>
               <input type="text" class="sIE_No"  name="customer_name" id="rhinestone_quotation_customer_name" value="<?php echo $this->_tpl_vars['rhinestone_quotation']['customer_name']; ?>
"   readonly />
            </div>
            <div style="float:left; margin-bottom:5px;">
              <div class="sIE_l_01_title">发货方式:</div>
              <input type="text" class="sIE_No"  name="quotation_code" readonly />
            </div>
            <div style="float:left; margin-bottom:5px;">
              <div class="sIE_l_01_title">收货地址:</div>
              <select style="width:80px;" id="picture_select01" class="picture_select01">
                    	<option value="0">烫图类型</option>
                        <option value="1">a</option>
                        <option value="2">b</option>
                    </select>
            </div>
          </div>          
       
      </div>
    </div>
    <div class="sIEK" style="width:830px; float:left;">
    	<div id="OutgoingQuote_AddDiv001" style="float:left;">
     	 <div style="width:190px; float:left; padding-left:10px; margin-bottom:10px; height:286px;">
       
          <div class="sIE_l" style="width:180px;">
            <div style="float:left; margin-bottom:5px;">
              <div class="sIE_l_01_title" style="line-height:25px;">名称:</div>
              <select onchange="picture_select()" style="width:80px; height:25px;" class="picture_select01">
                    	<option value="0">烫图类型</option>
                        <option value="1">a</option>
                        <option value="2">b</option>
                    </select>
            </div>
            <div style="float:left; margin-bottom:5px;">
              <div class="sIE_l_01_title" style="line-height:25px;">颜色:</div>
              <select style="width:80px; height:25px;" class="picture_select01">
                    	<option value="0">烫图类型</option>
                        <option value="1">a</option>
                        <option value="2">b</option>
                    </select>
            </div>
            <div style="float:left; margin-bottom:5px;">
              <div class="sIE_l_01_title" style="line-height:25px;">供应商颜色:</div>
              <input type="text" class="sIE_No"  name="quotation_date"  />
            </div>
            <div style="float:left; margin-bottom:5px;">
              <div class="sIE_l_01_title" style="line-height:25px;">规格:</div>
              <select style="width:80px; height:25px;" class="picture_select01">
                    	<option value="0">烫图类型</option>
                        <option value="1">a</option>
                        <option value="2">b</option>
                    </select>
            </div>
            <div style="float:left; margin-bottom:5px;">
              <div class="sIE_l_01_title" style="line-height:25px;">单位:</div>
              <select id="Mpro_New_01" onchange="Mpro_NewAdd_Select(1)" style="width:80px; height:25px;" class="picture_select01">
                    	<option value="0">粒</option>
                        <option value="1">罗</option>
                        <option value="2">卷</option>
                    </select>
            </div>
            <div style="float:left; margin-bottom:5px; display:none;" id="Mpro_New_add_01_01">
              <input type="text" class="sIE_No" style="width:41px; text-align:center;" value="罗" readonly />
              <font style="float:left; line-height:20px; padding:4px;">=</font>
              <input type="text" class="sIE_No" style="width:41px; text-align:center;" />
              <input type="text" class="sIE_No" style="width:41px; text-align:center; margin-left:6px;" value="粒" readonly />
            </div>
            <div style="float:left; margin-bottom:5px; display:none;" id="Mpro_New_add_01_02">
              <input type="text" class="sIE_No" style="width:41px; text-align:center;" value="卷" readonly />
              <font style="float:left; line-height:20px; padding:4px;">=</font>
              <input type="text" class="sIE_No" style="width:41px; text-align:center;" />
              <input type="text" class="sIE_No" style="width:41px; text-align:center; margin-left:6px;" value="米" readonly />
            </div>
            <div style="float:left; margin-bottom:5px;">
              <div class="sIE_l_01_title">数量:</div>
              <input type="text" class="sIE_No"  name="customer_name" />
            </div>
            <div style="float:left; margin-bottom:5px;">
              <div class="sIE_l_01_title">单价:</div>
              <input type="text" class="sIE_No"  name="customer_name" />
            </div>
            
          </div>          
       
      </div>
      	</div>
        
        
        <div class="wfbjd_color001" style=" display:none;">
     	 <div style="width:190px; float:left; border-left:dotted 1px #CCC; padding-left:10px; margin-bottom:10px; height:286px;">
       
          <div class="sIE_l" style="width:180px;">
            <div style="float:left; margin-bottom:5px;">
              <div class="sIE_l_01_title" style="line-height:25px;">名称:</div>
              <select style="width:80px; height:25px;" class="picture_select01">
                    	<option value="0">烫图类型</option>
                        <option value="1">a</option>
                        <option value="2">b</option>
                    </select>
            </div>
            <div style="float:left; margin-bottom:5px;">
              <div class="sIE_l_01_title" style="line-height:25px;">颜色:</div>
              <select style="width:80px; height:25px;" class="picture_select01">
                    	<option value="0">烫图类型</option>
                        <option value="1">a</option>
                        <option value="2">b</option>
                    </select>
            </div>
            <div style="float:left; margin-bottom:5px;">
              <div class="sIE_l_01_title" style="line-height:25px;">供应商颜色:</div>
              <input type="text" class="sIE_No"  name="quotation_date"  />
            </div>
            <div style="float:left; margin-bottom:5px;">
              <div class="sIE_l_01_title" style="line-height:25px;">规格:</div>
              <select style="width:80px; height:25px;" class="picture_select01">
                    	<option value="0">烫图类型</option>
                        <option value="1">a</option>
                        <option value="2">b</option>
                    </select>
            </div>
            <div style="float:left; margin-bottom:5px;">
              <div class="sIE_l_01_title" style="line-height:25px;">单位:</div>
              <select id="Mpro_New_02" onchange="Mpro_NewAdd_Select(2)" style="width:80px; height:25px;" class="picture_select01">
                    	<option value="0">粒</option>
                        <option value="1">罗</option>
                        <option value="2">卷</option>
                    </select>
            </div>
            <div style="float:left; margin-bottom:5px; display:none;" id="Mpro_New_add_02_01">
              <input type="text" class="sIE_No" style="width:41px; text-align:center;" value="罗" readonly />
              <font style="float:left; line-height:20px; padding:4px;">=</font>
              <input type="text" class="sIE_No" style="width:41px; text-align:center;" />
              <input type="text" class="sIE_No" style="width:41px; text-align:center; margin-left:6px;" value="粒" readonly />
            </div>
             <div style="float:left; margin-bottom:5px; display:none;" id="Mpro_New_add_02_02">
              <input type="text" class="sIE_No" style="width:41px; text-align:center;" value="卷" readonly />
              <font style="float:left; line-height:20px; padding:4px;">=</font>
              <input type="text" class="sIE_No" style="width:41px; text-align:center;" />
              <input type="text" class="sIE_No" style="width:41px; text-align:center; margin-left:6px;" value="米" readonly />
            </div>
            <div style="float:left; margin-bottom:5px;">
              <div class="sIE_l_01_title">数量:</div>
              <input type="text" class="sIE_No"  name="customer_name" />
            </div>
            <div style="float:left; margin-bottom:5px;">
              <div class="sIE_l_01_title">单价:</div>
              <input type="text" class="sIE_No"  name="customer_name" />
            </div>



            
          </div>       
          <input type="button" class="sIE_No" style="cursor:pointer; width:60px; height:24px;" onclick="getDelOutgoingQuote_Add001(this)" value="删除" />   
       
      </div>
      	</div>
        

      <div id="OutgoingQuote_Add001" style=" width:20px; height:50px;float:left; cursor:pointer; font-size:14px; text-align:center; background:#CCC; line-height:25px; border:solid 1px #000; margin-top:20px;">添加</div>
      
<script>
 var col=$('div.wfbjd_color001').html();
 
 $("#OutgoingQuote_Add001").click(function (){ 
 
 $("#OutgoingQuote_AddDiv001").append(col);
   
	});

function getDelOutgoingQuote_Add001(k){

    $(k).parent().remove();    
	
}



function Mpro_NewAdd_Select(n){
	if($("#Mpro_New_0"+n).val()==1){		
		$("#Mpro_New_add_0"+n +"_01").css("display","block");
		$("#Mpro_New_add_0"+n +"_02").css("display","none");
	}else if($("#Mpro_New_0"+n).val()==2){
		$("#Mpro_New_add_0"+n +"_02").css("display","block");
		$("#Mpro_New_add_0"+n +"_01").css("display","none");
		
	}
	else{
		$("#Mpro_New_add_0"+n +"_01").css("display","none");
		$("#Mpro_New_add_0"+n +"_02").css("display","none");
	}
}
</script>      
      
      
      
      
    </div>
    
    
    
    
    
    
    
    
    
  </div>
  
  <div class="formBar">
    <ul>
      <li>
        <div class="buttonActive">
          <div class="buttonContent">
            <button type="button" id="rhinestone_quotation_submit_form">确认</button>
          </div>
        </div>
      </li>
      <li> </li>
    </ul>
  </div>
   </form>
</div>