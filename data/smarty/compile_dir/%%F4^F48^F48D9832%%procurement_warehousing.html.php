<?php /* Smarty version 2.6.22, created on 2013-06-14 10:54:29
         compiled from register_storage/procurement_warehousing.html */ ?>
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
              <div class="sIE_l_01_title">入库时间:</div>
              <input type="text" name="start_time" class="date" readonly style="width:75px;" value="<?php echo $this->_tpl_vars['start_time']; ?>
" />
            </div>
            <div style="float:left; margin-bottom:5px;">
              <div class="sIE_l_01_title">单据编号:</div>
              <input type="text" class="sIE_No"  name="quotation_date" />
            </div>
            <div style="float:left; margin-bottom:5px;">
              <div class="sIE_l_01_title">采购单号:</div>
              <input type="text" class="sIE_No"  name="customer_code" readonly="readonly"/>
            </div>
            <div style="float:left; margin-bottom:5px;">
              <div class="sIE_l_01_title">供应商代码:</div>
              <input type="text" class="sIE_No"  name="customer_name" />
            </div>
            <div style="float:left; margin-bottom:5px;">
              <div class="sIE_l_01_title">供应商:</div>
              <input type="text" class="sIE_No"  name="customer_name" readonly="readonly"/>
            </div>
            
            
          </div>          
       
      </div>
      
      
      
      
      
      
      
    </div>
    
    
    
    
    
    
    
    <div class="sIEK" style="width:780px; float:left;">
    	<div id="pro_war_Add_Div001" style="float:left;">
     	 <div style="width:190px; float:left; padding-left:10px; margin-bottom:10px; height:400px;">
       
          <div class="sIE_l" style="width:180px;">
            <div style="float:left; margin-bottom:5px;">
              <div class="sIE_l_01_title" style="line-height:25px;">材料名称:</div>
              <input type="text" class="sIE_No"  name="quotation_date"  />
            </div>
            <div style="float:left; margin-bottom:5px;">
              <div class="sIE_l_01_title" style="line-height:25px;">颜色:</div>
              <input type="text" class="sIE_No"  name="quotation_date"  />
            </div>
            <div style="float:left; margin-bottom:5px;">
              <div class="sIE_l_01_title" style="line-height:25px;">尺寸:</div>
              <input type="text" class="sIE_No"  name="quotation_date"  />
            </div>
            <div style="float:left; margin-bottom:5px;">
              <div class="sIE_l_01_title" style="line-height:25px;">数量单位:</div>
              <select style="width:80px; height:25px;" class="picture_select01">
                    	<option value="0">烫图类型</option>
                        <option value="1">a</option>
                        <option value="2">b</option>
                    </select>
            </div>
            <div style="float:left; margin-bottom:5px;">
              <div class="sIE_l_01_title" style="line-height:25px;">数量:</div>
              <input type="text" class="sIE_No"  name="quotation_date"  />
            </div>
            
            <div style="float:left; margin-bottom:5px;">
              <div class="sIE_l_01_title">重量单位:</div>
              <select style="width:80px; height:25px;" class="picture_select01">
                    	<option value="0">烫图类型</option>
                        <option value="1">a</option>
                        <option value="2">b</option>
                    </select>
            </div>
            <div style="float:left; margin-bottom:5px;">
              <div class="sIE_l_01_title">重量:</div>
              <input type="text" class="sIE_No"  name="customer_name" />
            </div>
            <div style="float:left; margin-bottom:5px;">
              <div class="sIE_l_01_title">单价:</div>
              <input type="text" class="sIE_No"  name="customer_name" />
            </div>
            <div style="float:left; margin-bottom:5px;">
              <div class="sIE_l_01_title">折扣率:</div>
              <input type="text" class="sIE_No"  name="customer_name" />
            </div>
            <div style="float:left; margin-bottom:5px;">
              <div class="sIE_l_01_title">合格率:</div>
              <input type="text" class="sIE_No"  name="customer_name" />
            </div>
            <div style="float:left; margin-bottom:5px;">
              <div class="sIE_l_01_title">是否入库:</div>
              <font style="float:left; line-height:24px;">是</font>
              <input name="SR_Warehousing_01" value="1" type="radio" style="float:left; height:20px; cursor:pointer;" checked="checked"  onclick="SR_whRadio(1,this)" />
              <font style="float:left; line-height:24px;">否</font>
              <input name="SR_Warehousing_01" value="2" type="radio" style="float:left; height:20px; cursor:pointer;" onclick="SR_whRadio(1,this)" />
            </div>
            <div style="float:left; margin-bottom:5px; display:none;" id="SR_whHidden_01">
              <div class="sIE_l_01_title">退、换货:</div>
              <font style="float:left; line-height:24px;">是</font>
              <input name="SR_Returned_01" type="radio"  style="float:left; height:20px; cursor:pointer;" checked="checked" />
              <font style="float:left; line-height:24px;">否</font>
              <input name="SR_Returned_01" type="radio"  style="float:left; height:20px; cursor:pointer;" />
            </div>
            
          </div>          
       
      </div>
      	</div>
        
        
        <div class="pro_war_001" style=" display:none;">
        	<div style="width:190px; float:left; padding-left:10px; margin-bottom:10px; height:400px;">
       
          <div class="sIE_l" style="width:180px;">
            <div style="float:left; margin-bottom:5px;">
              <div class="sIE_l_01_title" style="line-height:25px;">材料名称:</div>
              <input type="text" class="sIE_No"  name="quotation_date"  />
            </div>
            <div style="float:left; margin-bottom:5px;">
              <div class="sIE_l_01_title" style="line-height:25px;">颜色:</div>
              <input type="text" class="sIE_No"  name="quotation_date"  />
            </div>
            <div style="float:left; margin-bottom:5px;">
              <div class="sIE_l_01_title" style="line-height:25px;">尺寸:</div>
              <input type="text" class="sIE_No"  name="quotation_date"  />
            </div>
            <div style="float:left; margin-bottom:5px;">
              <div class="sIE_l_01_title" style="line-height:25px;">数量单位:</div>
              <select style="width:80px; height:25px;" class="picture_select01">
                    	<option value="0">烫图类型</option>
                        <option value="1">a</option>
                        <option value="2">b</option>
                    </select>
            </div>
            <div style="float:left; margin-bottom:5px;">
              <div class="sIE_l_01_title" style="line-height:25px;">数量:</div>
              <input type="text" class="sIE_No"  name="quotation_date"  />
            </div>
            
            <div style="float:left; margin-bottom:5px;">
              <div class="sIE_l_01_title">重量单位:</div>
              <select style="width:80px; height:25px;" class="picture_select01">
                    	<option value="0">烫图类型</option>
                        <option value="1">a</option>
                        <option value="2">b</option>
                    </select>
            </div>
            <div style="float:left; margin-bottom:5px;">
              <div class="sIE_l_01_title">重量:</div>
              <input type="text" class="sIE_No"  name="customer_name" />
            </div>
            <div style="float:left; margin-bottom:5px;">
              <div class="sIE_l_01_title">单价:</div>
              <input type="text" class="sIE_No"  name="customer_name" />
            </div>
            <div style="float:left; margin-bottom:5px;">
              <div class="sIE_l_01_title">折扣率:</div>
              <input type="text" class="sIE_No"  name="customer_name" />
            </div>
            <div style="float:left; margin-bottom:5px;">
              <div class="sIE_l_01_title">合格率:</div>
              <input type="text" class="sIE_No"  name="customer_name" />
            </div>
            <div style="float:left; margin-bottom:5px;">
              <div class="sIE_l_01_title">是否入库:</div>
              <font style="float:left; line-height:24px;">是</font>
              <input name="SR_Warehousing_02" value="1" type="radio" style="float:left; height:20px; cursor:pointer;" checked="checked"  onclick="SR_whRadio(2,this)" />
              <font style="float:left; line-height:24px;">否</font>
              <input name="SR_Warehousing_02" value="2" type="radio" style="float:left; height:20px; cursor:pointer;" onclick="SR_whRadio(2,this)" />
            </div>
            <div style="float:left; margin-bottom:5px; display:none;" id="SR_whHidden_02">
              <div class="sIE_l_01_title">退、换货:</div>
              <font style="float:left; line-height:24px;">是</font>
              <input name="SR_Returned_02" type="radio"  style="float:left; height:20px; cursor:pointer;" checked="checked" />
              <font style="float:left; line-height:24px;">否</font>
              <input name="SR_Returned_02" type="radio"  style="float:left; height:20px; cursor:pointer;" />
            </div>
            
          </div>          
       
       		<input type="button" value="删除" onclick="getDelSR_Add001(this)" style="cursor:pointer; width:60px; height:24px;" class="sIE_No">
      </div>
      
      	</div>
        

      <div id="pro_war_Add001" style=" width:20px; height:50px;float:left; cursor:pointer; font-size:14px; text-align:center; background:#CCC; line-height:25px; border:solid 1px #000; margin-top:20px;">添加</div>
      
<script>
 var col=$('div.pro_war_001').html();
 
 $("#pro_war_Add001").click(function (){ 
 
 $("#pro_war_Add_Div001").append(col);
   
	});

function getDelSR_Add001(k){

    $(k).parent().remove();    
	
}



function SR_whRadio(a,obj){
	if(obj.checked&&obj.value==1){
		$("#SR_whHidden_0"+a).css("display","none");
	}else{
		$("#SR_whHidden_0"+a).css("display","block");
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