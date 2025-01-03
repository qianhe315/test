<?php /* Smarty version 2.6.22, created on 2022-08-04 15:05:26
         compiled from web_inquiries_into/edit.html */ ?>
<div class="pageContent">
  <form method="post" action="<?php echo $this->_tpl_vars['act']; ?>
" id="form" class="pageForm" onsubmit="return validateCallback(this, navTabAjaxDone)">
    <div>
          <input type="hidden" name="id" id="" value="<?php echo $this->_tpl_vars['web_quote']['id']; ?>
" />
            <div class="pageFormContent" layoutH="58" style="width:40%; float:left;" >
              <div class="unit">
                <label>询盘时间：</label>
                <input type="text" name="" id="" readonly="readonly" style="width:200px" value="<?php echo $this->_tpl_vars['web_quote']['time']; ?>
"/>
                 </div>
              <div class="divider">divider</div>
              <div class="unit">
                <label>询盘方式：</label>          
                <input type="text" name="" id="" readonly="readonly" style="width:200px" value="<?php echo $this->_tpl_vars['quotecategory_name']; ?>
"/>
              </div>
              <div class="divider">divider</div>
              <div class="unit">
                <label>来自：</label>
                <input type="text" name="" id="" readonly="readonly" style="width:200px" value="<?php echo $this->_tpl_vars['sources_name']; ?>
"/>
              </div>
             
              <div class="divider">divider</div>
              <div class="unit">
                <label>客户名：</label>
                <input type="text" name="" id="" readonly="readonly" style="width:200px" value="<?php echo $this->_tpl_vars['web_quote']['name']; ?>
"/>
             <?php if ($this->_tpl_vars['web_quote']['name'] != ""): ?>   
               <?php if (isset ( $this->_tpl_vars['cc'] )): ?>
               <font color="#FF0000" >客户名重复！<?php echo $this->_tpl_vars['customer_code3']; ?>
</font>
               <?php endif; ?>
             <?php endif; ?>                  
              </div>
              <div class="divider">divider</div>
              <div class="unit">
                <label>公司：</label>
                <input type="text" name="" id="" readonly="readonly" style="width:200px" value="<?php echo $this->_tpl_vars['web_quote']['company']; ?>
"/>
              <?php if ($this->_tpl_vars['web_quote']['company'] != ""): ?>   
               <?php if (isset ( $this->_tpl_vars['bb'] )): ?>
               <font color="#FF0000" >公司重复！<?php echo $this->_tpl_vars['customer_code2']; ?>
&nbsp;&nbsp;<?php echo $this->_tpl_vars['customer_name2']; ?>
</font>
               <?php endif; ?>
               <?php endif; ?> 
              </div>
              <div class="divider">divider</div>
              <div class="unit">
                <label>国家：</label>
                <input type="text" name="" id="" readonly="readonly" style="width:200px" value="<?php echo $this->_tpl_vars['web_quote']['country']; ?>
"/>
              </div>
              <div class="divider">divider</div>
              <div class="unit">
                <label>地址：</label>
                <input type="text" name="" id="" readonly="readonly" style="width:200px" value="<?php echo $this->_tpl_vars['web_quote']['address_delivery']; ?>
"/>
              </div>
              <div class="divider">divider</div>
              <div class="unit">
                <label>邮箱：</label>
               <input type="text" name="" id="" readonly="readonly" style="width:200px" value="<?php echo $this->_tpl_vars['web_quote']['email']; ?>
"/>
               
               <?php if (isset ( $this->_tpl_vars['aa'] ) && $this->_tpl_vars['web_quote']['email'] != ""): ?>
               <font color="#FF0000" >邮箱重复！<?php echo $this->_tpl_vars['customer_code1']; ?>
&nbsp;&nbsp;<?php echo $this->_tpl_vars['customer_name1']; ?>
</font>
               <?php endif; ?>
               
              </div>
              <div class="divider">divider</div>
              <div class="unit">
                <label>电话：</label>
                <input type="text" name="" id="" readonly="readonly" style="width:200px" value="<?php echo $this->_tpl_vars['web_quote']['telephone']; ?>
"/>
                <?php if (isset ( $this->_tpl_vars['dd'] ) && $this->_tpl_vars['web_quote']['email'] != ""): ?>
               <font color="#FF0000" >电话重复！<?php echo $this->_tpl_vars['customer_code5']; ?>
&nbsp;&nbsp;<?php echo $this->_tpl_vars['customer_name5']; ?>
</font>
               <?php endif; ?>
              </div>
              <div class="divider">divider</div>
              <div class="unit">
                <label>IP：</label>
               <input type="text" name="" id="" readonly="readonly" style="width:200px" value="<?php echo $this->_tpl_vars['web_quote']['ip']; ?>
"/>
               <?php if ($this->_tpl_vars['codes'] != ""): ?>
               <font color="#FF0000" ><?php echo $this->_tpl_vars['codes']; ?>
</font>
               <?php endif; ?>
              </div>
              <div class="divider">divider</div>
              <div class="unit">
                <label>IP所在地：</label>
               <input type="text" name="" id="" readonly="readonly" style="width:200px" value="<?php echo $this->_tpl_vars['address_ip']; ?>
"/>
              </div>  
              <div class="divider">divider</div>
              <div class="unit">
               <label>老客户代码：</label>
               <input type="text" name="customer_code" id="customer_code" onkeyup="customer()" style="width:60px" value="<?php echo $this->_tpl_vars['customer_code4']; ?>
"/>
               <input type="text" name="customer_name" id="customer_name" readonly="readonly" style="width:135px" value="<?php echo $this->_tpl_vars['customer_name4']; ?>
"/>
              </div>  
              
              <div class="divider">divider</div>
              
           
            </div>
            <div class="pageFormContent" layoutH="58" style="width:40%; float: left;" >
              <div class="unit">
                <label>商品名：</label>
                <input type="text" name="" id="" readonly="readonly" style="width:200px" value=""/>
              </div>
              <div class="divider">divider</div>
              <div class="unit">
                <label>货号：</label>
                <input type="text" name="" id="" readonly="readonly" style="width:200px" value="<?php echo $this->_tpl_vars['web_quote']['model']; ?>
"/>
              </div>
              <div class="divider">divider</div>
              <div class="unit">
                <label>数量：</label>
                <input type="text" name="" id="" readonly="readonly" style="width:200px" value="<?php echo $this->_tpl_vars['web_quote']['num']; ?>
"/>
              </div>
              <div class="divider">divider</div>
              <div class="unit">
                <label>尺寸：</label>
                <input type="text" name="" id="" readonly="readonly" style="width:200px" value="<?php echo $this->_tpl_vars['web_quote']['size']; ?>
"/>
              </div> 
              <div class="divider">divider</div>
              <div class="unit">
                <label>图片：</label>
                <a target="_blank" href="<?php echo $this->_tpl_vars['web_quote']['image']; ?>
">附件</a>
              </div>
              <div class="divider">divider</div>
              <div class="unit">
                <label>询盘内容：</label>
                <textarea name="" cols="35" rows="12" readonly="readonly"><?php echo $this->_tpl_vars['web_quote']['message']; ?>
</textarea>
              </div>
            </div>
          </div>
    <div class="formBar">
      <ul>
        <li>
          <div class="buttonActive">
            <div class="buttonContent">
              <button type="button" id="send">确认添加</button>
            </div>
          </div>
        </li>
        <li> </li>
      </ul>
    </div>
  </form>
</div>

<!-- {literal} --> 
<script type="text/javascript">
    function customer(){
		var customer_code = $("#customer_code").val();
		$.ajax({
			url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/web_inquiries_into/customer_code',//通过Ajax取数据的目标页面
			data:{"customer_code":customer_code},
			type:'post',//方法，还可以是"post"
			dataType:'json',//数据类型，还有其它的，详见jQuery手册
			success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
			{
				if(locals){
					$("#customer_name").val(locals.customer_name);
				}else{
					$("#customer_name").val('');								
				}
			}								
			
		});	
		
	}
	
$(document).ready(function()  
{
	$("#send").click(function (){
		var customer_name = $("#customer_name").val();
		if(customer_name!=""){
			$("#form").submit();
		}else{
		    alert("老客户名不为空！")	
		}
		
	});	
});
</script> 
<!-- {/literal} -->