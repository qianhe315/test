<?php /* Smarty version 2.6.22, created on 2023-03-07 09:07:22
         compiled from web_inquiries_into/view.html */ ?>
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
              <?php if ($this->_tpl_vars['quotecategory_name'] == '定制询盘'): ?>
              
              <div class="divider">divider</div>
              <div class="unit">
                <label>定制类型：</label> 
                <input type="text" name="" id="" readonly="readonly" style="width:200px" value="<?php echo $this->_tpl_vars['web_quote']['project_name']; ?>
"/>
              </div>
              
              <div class="divider">divider</div>
              <div class="unit">
              	<?php if ($this->_tpl_vars['web_quote']['project_name'] == '刺绣章定制'): ?>
                <label>章属性：</label>
                 <?php else: ?>
                 <label>材料颜色：</label>
                 <?php endif; ?>
                <textarea name="" cols="35" rows="4" readonly="readonly"><?php echo $this->_tpl_vars['web_quote']['color_materials']; ?>
</textarea>
              </div>
              
              <?php endif; ?>
              
              
              
              
              <?php if ($this->_tpl_vars['quotecategory_name'] == '专题表单'): ?>
              
              <div class="divider">divider</div>
              <div class="unit">
                <label>专题类型：</label> 
                <input type="text" name="" id="" readonly="readonly" style="width:200px" value="<?php echo $this->_tpl_vars['web_quote']['project_name']; ?>
"/>
              </div>
              <?php endif; ?>
              
               <?php if ($this->_tpl_vars['quotecategory_name'] == '原材料产品'): ?>
              
              <div class="divider">divider</div>
              <div class="unit">
                <label>分类名：</label> 
                <input type="text" name="" id="" readonly="readonly" style="width:200px" value="<?php echo $this->_tpl_vars['web_quote']['category_name']; ?>
"/>
              </div>
              <?php endif; ?>
              
              
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
              </div>
              <div class="divider">divider</div>
              <div class="unit">
                <label>公司：</label>
                <input type="text" name="" id="" readonly="readonly" style="width:200px" value="<?php echo $this->_tpl_vars['web_quote']['company']; ?>
"/>
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
              </div>
              <div class="divider">divider</div>
              <div class="unit">
                <label>电话：</label>
                <input type="text" name="" id="" readonly="readonly" style="width:200px" value="<?php echo $this->_tpl_vars['web_quote']['telephone']; ?>
"/>
              </div>
              <div class="divider">divider</div>
              <div class="unit">
                <label>IP：</label>
               <input type="text" name="" id="" readonly="readonly" style="width:200px" value="<?php echo $this->_tpl_vars['web_quote']['ip']; ?>
"/>
              </div>
              <div class="divider">divider</div>
              <div class="unit">
                <label>IP所在地：</label>
               <input type="text" name="" id="" readonly="readonly" style="width:200px" value="<?php echo $this->_tpl_vars['address_ip']; ?>
"/>
              </div>  
              <div class="divider">divider</div>
              <div class="unit">
               <label>客户代码：</label>
               <input type="text" name="customer_code" id="customer_code" onkeyup="customer()" style="width:60px" value="<?php echo $this->_tpl_vars['web_quote']['customer_code']; ?>
"/>
               <input type="text" name="customer_name" id="customer_name" readonly="readonly" style="width:135px" value="<?php echo $this->_tpl_vars['web_quote']['customer_name']; ?>
"/>
              </div>  
              
              <div class="divider">divider</div>
               <div class="unit">
               <label>客户性质：</label>
               <input type="text" name="customer_status" id="customer_status" readonly="readonly" style="width:135px" value="<?php if ($this->_tpl_vars['customers']['status'] == 1): ?>未成交<?php else: ?>已成交<?php endif; ?>"/>
              </div>  
              
              <div class="divider">divider</div>
           
            </div>
            <div class="pageFormContent" layoutH="58" style="width:40%; float: left;" >
              <div class="unit">
                <label>货号：</label>
                <input type="text" name="" id="" readonly="readonly" style="width:200px" value="<?php echo $this->_tpl_vars['web_quote']['model']; ?>
"/>
              </div>
              <div class="divider">divider</div>
              <div class="unit">
                <label>数量/人数：</label>
                <input type="text" name="" id="" readonly="readonly" style="width:200px" value="<?php echo $this->_tpl_vars['web_quote']['num']; ?>
"/>
              </div>
              <div class="divider">divider</div>
              <div class="unit">
                <label>尺寸：</label>
                <input type="text" name="" id="" readonly="readonly" style="width:200px" value="<?php echo $this->_tpl_vars['web_quote']['size']; ?>
"/>
              </div> 
              <?php if ($this->_tpl_vars['web_quote']['business_type'] != ""): ?>
              <div class="divider">divider</div>
              <div class="unit">
                <label>业务类别：</label>
                <input type="text" name="" id="" readonly="readonly" style="width:200px" value="<?php echo $this->_tpl_vars['web_quote']['business_type']; ?>
"/>
              </div>
              <?php endif; ?>
              <?php if ($this->_tpl_vars['web_quote']['products_needed'] != ""): ?>
              <div class="divider">divider</div>
              <div class="unit">
                <label>还需要什么产品：</label>
                <input type="text" name="" id="" readonly="readonly" style="width:200px" value="<?php echo $this->_tpl_vars['web_quote']['products_needed']; ?>
"/>
              </div>
              <?php endif; ?>
              <?php if ($this->_tpl_vars['web_quote']['where_to_buy'] != ""): ?>
              <div class="divider">divider</div>
              <div class="unit">
                <label>是否有实体店：</label>
                <input type="text" name="" id="" readonly="readonly" style="width:200px" value="<?php echo $this->_tpl_vars['web_quote']['where_to_buy']; ?>
"/>
              </div>
              <?php endif; ?>
              <?php if ($this->_tpl_vars['web_quote']['category'] != ""): ?>
              <div class="divider">divider</div>
              <div class="unit">
                <label>stock 类别：</label>
                <input type="text" name="" id="" readonly="readonly" style="width:200px" value="<?php echo $this->_tpl_vars['web_quote']['category']; ?>
"/>
              </div> 
              <?php endif; ?>
              
              <div class="divider">divider</div>
              <div class="unit">
                <label>图片：</label>
                 <a target="_blank" href="<?php echo $this->_tpl_vars['web_quote']['image']; ?>
">附件</a>
              </div>
              <div class="divider">divider</div>
               <div class="divider">divider</div>
              <div class="unit">
                <label>背景：</label>
                <input type="text" name="" id="" readonly="readonly" style="width:200px" <?php if ($this->_tpl_vars['web_quote']['proportion_back'] == 1): ?>value="去除"<?php else: ?>value="不去除"<?php endif; ?>/>
              </div>
              <div class="divider">divider</div>
              <div class="unit">
                <label>询盘内容：</label>
                <textarea name="" cols="35" rows="12" readonly="readonly"><?php echo $this->_tpl_vars['web_quote']['message']; ?>
</textarea>
              </div>
              <div class="unit">
                <label>其他产品：</label>
                <textarea name="" cols="35" rows="3" readonly="readonly"><?php echo $this->_tpl_vars['web_quote']['other_product']; ?>
</textarea>
              </div>
              <?php if ($this->_tpl_vars['web_quote']['project_name'] == "购物车"): ?>
              <div class="divider">divider</div>
              <div class="unit">
                <label>产品链接：</label>
                <?php if (strstr ( $this->_tpl_vars['web_quote']['model'] , 'OFC' )): ?>
                <a href="https://www.cstown.com/index.php?route=account/customdesignlist/info&order_id=<?php echo $this->_tpl_vars['web_quote']['cstown_order_id']; ?>
&flag=1&design=<?php echo $this->_tpl_vars['web_quote']['product_id']; ?>
" target="_blank">点击</a>
                <?php else: ?>
                <a href="https://www.cstown.com/index.php?route=product/product&product_id=<?php echo $this->_tpl_vars['web_quote']['product_id']; ?>
" target="_blank">点击</a>
                <?php endif; ?>
              </div>
              <?php endif; ?>
               <div class="divider">divider</div>
              <div class="unit">
                <label>Contact：</label>
                <input type="text" name="" id="" readonly="readonly" style="width:200px" value="<?php echo $this->_tpl_vars['web_quote']['contact']; ?>
"/>
              </div>
               <div class="divider">divider</div>
              <div class="unit">
                <label>Account：</label>
                <input type="text" name="" id="" readonly="readonly" style="width:200px" value="<?php echo $this->_tpl_vars['web_quote']['account']; ?>
" />
              </div>
            </div>
          </div>
<!--    <div class="formBar">
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
    </div>-->
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