<?php /* Smarty version 2.6.22, created on 2023-06-15 17:08:40
         compiled from quotecustomer/edit.html */ ?>
<link href="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/css/cstown_sys.css" rel="stylesheet" type="text/css" media="screen"/>
	
<div class="pageContent" style="float:left; width:100%;">
      
      <form method="post" id="quote_edit_form" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, navTabAjaxDone)">

	  <script>
	  	 $("#quote_info").click(function(){
	  		 $(".list").hide();
	  		 $("#quote_list").show();
	  	 });
	  	 $("#customer_info").click(function(){
	  		 $(".list").hide();
	  		 $("#customer_list").show();
	  	 });
	  	 $("#company_info").click(function(){
	  		 $(".list").hide();
	  		 $("#company_list").show();
	  	 });
	  	$("#background_info").click(function(){
	  		 $(".list").hide();
	  		 $("#background_list").show();
	  	 });
	  </script>
		<input type="hidden" name="customer_id" id="customer_id" value="<?php echo $this->_tpl_vars['quote_info_1']['id']; ?>
" />
		<div class="pageFormContent" layoutH="58">
        	<div class="table_tag" style="min-width:360px;">
            <ul>
              <li id="quote_info">询盘信息</li>
              <li id="customer_info">个人信息</li>
              <li id="company_info">公司信息</li>
              <li id="background_info">背景调查</li>
            </ul>
          </div>
        	<div id="quote_list" class="list">
				<div class="unit">
				   <label>客户代码：</label>
				   <input type="text" size="25" name="customer_code" disabled id="customer_code" value='<?php echo $this->_tpl_vars['newcustomer']['customer_code']; ?>
'  />
				   <span id="customer_code_result_edit" class="error" style="display:none;"></span>
				</div>
				<div class="divider">divider</div>
				<div class="unit">
				  <label>询盘日期：</label>
				  <input type="text" name="quote_time" datefmt="yyyy-MM-dd HH:mm:ss" id="quote_time" value="<?php echo $this->_tpl_vars['quote_info_1']['quote_time_c']; ?>
" class="date textInput readonly valid combox required" readonly="true" />         
				  </div>
				<div class="divider">divider</div>
				<div class="unit">
				  <label>添加日期：</label>
				  <input type="text" name="insert_time" datefmt="yyyy-MM-dd HH:mm:ss" id="insert_time" value="<?php echo $this->_tpl_vars['quote_info_1']['insert_time']; ?>
" class="textInput readonly valid combox" readonly="true" />
				  
				  </div>
				<div class="divider">divider</div>
            	<div class="unit">
		            <label>来源渠道：</label>
		            <?php if ($this->_tpl_vars['quote_info_1']['quotefrom_id'] == ''): ?>
		                <select class="combox required" name="quotefrom_id" onchange="qc_webChange_edit(this.value)" id="quotefrom_select" >
		                  <option value="">请选择询盘来源</option>
		                  <?php $_from = $this->_tpl_vars['quotefromlist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['qf']):
?> <option value="<?php echo $this->_tpl_vars['qf']['id']; ?>
" <?php if ($this->_tpl_vars['quote_info_1']['quotefrom_id'] == $this->_tpl_vars['qf']['id']): ?> selected="selected" <?php endif; ?> ><?php echo $this->_tpl_vars['qf']['quotefrom_name']; ?>

		                  </option>
		                  <?php endforeach; endif; unset($_from); ?>
		                </select>
		            <?php else: ?>
		                <?php $_from = $this->_tpl_vars['quotefromlist1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['qfl']):
?>
		                    <?php if ($this->_tpl_vars['quote_info_1']['quotefrom_id'] == $this->_tpl_vars['qfl']['id']): ?>
		                        <input type="text"  readonly="readonly" value="<?php echo $this->_tpl_vars['qfl']['quotefrom_name']; ?>
"  />
		                        <input type="hidden" name="" readonly="readonly" id="quotefrom_id_new" value="<?php echo $this->_tpl_vars['qfl']['id']; ?>
"  />
		                    <?php endif; ?>
		                <?php endforeach; endif; unset($_from); ?>
		            <?php endif; ?>
		            <?php if ($this->_tpl_vars['newcustomer']['quotefrom_id'] == 6 || $this->_tpl_vars['newcustomer']['quotefrom_id'] == 16 || $this->_tpl_vars['newcustomer']['quotefrom_id'] == 23): ?>
		                <div id="rfq" style="float:left;">
		                <input type="radio" name="ali_project_name" value="RFQ" style="margin-left:20px;"  <?php if ($this->_tpl_vars['newcustomer']['project_name'] == 'RFQ'): ?> checked="checked" <?php endif; ?> />RFQ
		                <input type="radio" name="ali_project_name" value="潜在客户" style="margin-left:20px;"  <?php if ($this->_tpl_vars['newcustomer']['project_name'] == '潜在客户'): ?> checked="checked" <?php endif; ?> />潜在客户
		                <input type="radio" name="ali_project_name" value="啦啦产品" style="margin-left:20px;"  <?php if ($this->_tpl_vars['newcustomer']['project_name'] == '啦啦产品'): ?> checked="checked" <?php endif; ?> />啦啦产品
		                </div>
		            <?php elseif ($this->_tpl_vars['newcustomer']['quotefrom_id'] == 18): ?>
		            	<div id="jiemao_type" style="float:left;">
		                    <select class="required combox" name="jiemao_quotefrom" id="jiemao_quotefrom" svalue="" >
		                      <option value="">请选择询盘方式</option>
		                      <option value="盒子定制" <?php if ($this->_tpl_vars['newcustomer']['project_name'] == '盒子定制'): ?> selected="selected" <?php endif; ?>>盒子定制</option>
		                      <option value="询价注册" <?php if ($this->_tpl_vars['newcustomer']['project_name'] == '询价注册'): ?> selected="selected" <?php endif; ?>>询价注册</option>
		                      <option value="联系我们" <?php if ($this->_tpl_vars['newcustomer']['project_name'] == '联系我们'): ?> selected="selected" <?php endif; ?>>联系我们</option>
		                      <option value="免费样品" <?php if ($this->_tpl_vars['newcustomer']['project_name'] == '免费样品'): ?> selected="selected" <?php endif; ?>>免费样品</option>
		                      <option value="咨询申请" <?php if ($this->_tpl_vars['newcustomer']['project_name'] == '咨询申请'): ?> selected="selected" <?php endif; ?>>咨询申请</option>
		                      </option>
		                    </select>
		                </div>
		            <?php endif; ?>
		            <span id="quotefrom_id_result_edit" class="error" style="display:none;"></span>
		            <input name="customer_code" id="customer_code" style="display:none;" value="<?php echo $this->_tpl_vars['newcustomer']['customer_code']; ?>
" readonly="readonly" />
		            <!--<select id="customer_code" name="customer_code" class="combox required">
		              <option value="">请选择</option>
		              <option value="<?php echo $this->_tpl_vars['newcustomer']['customer_code']; ?>
" selected="selected"><?php echo $this->_tpl_vars['newcustomer']['customer_code']; ?>
</option>
		            </select>-->
		         </div>
            	<div class="divider">divider</div>
		           <div class="unit">
		            <label>询盘来源：</label>
		            <select id="quote_sources_select" class="combox required" name="quote_sources">
		            <option value="">请选择</option>
		              <?php $_from = $this->_tpl_vars['sources_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['qd']):
?>
		              <option value="<?php echo $this->_tpl_vars['qd']['id']; ?>
" <?php if ($this->_tpl_vars['customer']['sources_id'] == $this->_tpl_vars['qd']['id']): ?> selected="selected" <?php endif; ?>><?php echo $this->_tpl_vars['qd']['sources_name']; ?>

		              </option>
		              <?php endforeach; endif; unset($_from); ?>
		            </select>
		          </div>
		          <div class="divider">divider</div>
		          <div class="unit">
		            <label>询盘数量：</label>
		            <input type="text" size="25" value="<?php echo $this->_tpl_vars['newcustomer']['customer_code_num']; ?>
" class="" />
		            <div id="select_list" style="display:none;position: absolute;z-index: 9999; background-color:#FFFFFF;border:1px solid #0099FF;"></div>
		            <span id="project_name_result_edit_edit" class="error" style="display:none;"></span>
		            </div>
		          <div class="divider">divider</div>
		           <div class="unit">
			            <label>首月发信次数：</label>
			            <input type="text" size="25" value="<?php echo $this->_tpl_vars['newcustomer']['email_count']; ?>
" class="" />
			            <div id="select_list" style="display:none;position: absolute;z-index: 9999; background-color:#FFFFFF;border:1px solid #0099FF;"></div>
			            <span id="project_name_result_edit_edit" class="error" style="display:none;"></span>
			            </div>
		            <div class="divider">divider</div>
			          <div class="unit">
			            <label>反馈状态：</label>       
			            <input type="text" size="25" value=" <?php if ($this->_tpl_vars['newcustomer']['feedback_state'] == '1'): ?>未回复<?php elseif ($this->_tpl_vars['newcustomer']['feedback_state'] == '2'): ?>发送失败 <?php elseif ($this->_tpl_vars['newcustomer']['feedback_state'] == '3'): ?>已回复 <?php elseif ($this->_tpl_vars['newcustomer']['feedback_state'] == '4'): ?>	已反馈<?php else: ?><?php endif; ?>" class="" />
			            <div id="select_list" style="display:none;position: absolute;z-index: 9999; background-color:#FFFFFF;border:1px solid #0099FF;"></div>
			            <span id="project_name_result_edit_edit" class="error" style="display:none;"></span>
			            </div>
			          <div class="divider">divider</div>
			          <div class="unit">
			            <label>报价状态：</label>       
			            <input type="text" size="25" value="<?php if ($this->_tpl_vars['newcustomer']['baojia_status'] == '1'): ?>否<?php elseif ($this->_tpl_vars['newcustomer']['baojia_status'] == '2'): ?>是<?php endif; ?>" class="" />
			            <div id="select_list" style="display:none;position: absolute;z-index: 9999; background-color:#FFFFFF;border:1px solid #0099FF;"></div>
			            <span id="project_name_result_edit_edit" class="error" style="display:none;"></span>
			            </div>
		              <div class="divider">divider</div>
			          <div class="unit">
			            <label>成交状态：</label>       
			            <input type="text" size="25" value="<?php if ($this->_tpl_vars['newcustomer']['status'] == '1'): ?>未成交<?php elseif ($this->_tpl_vars['newcustomer']['status'] == '2'): ?>已成交<?php endif; ?>" class="" />
			            <div id="select_list" style="display:none;position: absolute;z-index: 9999; background-color:#FFFFFF;border:1px solid #0099FF;"></div>
			            <span id="project_name_result_edit_edit" class="error" style="display:none;"></span>
			            </div>
		               <div class="divider">divider</div>
			          <div class="unit">
			            <label>客户分组：</label>       
			            <input type="text" size="25" value="<?php echo $this->_tpl_vars['newcustomer']['group_id']; ?>
" class="" />
			            <div id="select_list" style="display:none;position: absolute;z-index: 9999; background-color:#FFFFFF;border:1px solid #0099FF;"></div>
			            <span id="project_name_result_edit_edit" class="error" style="display:none;"></span>
			            </div>
		               <div class="divider">divider</div>
			          <div class="unit">
			            <label>客户等级：</label>       
			            <input type="text" size="25" value="<?php if ($this->_tpl_vars['newcustomer']['score'] >= 743): ?>A<?php elseif (empty ( $this->_tpl_vars['newcustomer']['score'] )): ?>D<?php elseif ($this->_tpl_vars['newcustomer']['score'] <= 75): ?>C<?php elseif ($this->_tpl_vars['newcustomer']['score'] < 743 && $this->_tpl_vars['newcustomer']['score'] > 75): ?>B<?php endif; ?>" class="" />
			            <div id="select_list" style="display:none;position: absolute;z-index: 9999; background-color:#FFFFFF;border:1px solid #0099FF;"></div>
			            <span id="project_name_result_edit_edit" class="error" style="display:none;"></span>
			            </div>
			          <div class="divider">divider</div>
			          <div class="unit">
			            <label>分配业务员：</label>
			            	<select class="combox required" name="userid" id="userid_edit">
			                <option value="">请选择</option>
			                    <?php $_from = $this->_tpl_vars['user_lists']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['qf']):
?>
			                    <option value="<?php echo $this->_tpl_vars['qf']['user_id']; ?>
" <?php if ($this->_tpl_vars['newcustomer']['user_id'] == $this->_tpl_vars['qf']['user_id']): ?> selected="selected" <?php endif; ?> ><?php echo $this->_tpl_vars['qf']['user_name']; ?>
</option>
			                    <?php endforeach; endif; unset($_from); ?>
			                </select>
			<!--                <span id="userid_result_edit" class="error" style="display:none;"></span>-->
			          </div>
			          <div class="divider">divider</div>
			          <div class="unit">
			            <label>询盘方式：</label>
			            <input type="text" size="25" name="project_name" id="project_name" value="<?php echo $this->_tpl_vars['newcustomer']['project_name']; ?>
"  onkeyup="get_same_company(event)"   class="" />
			            <div id="select_list" style="display:none;position: absolute;z-index: 9999; background-color:#FFFFFF;border:1px solid #0099FF;"></div>
			            <span id="project_name_result_edit_edit" class="error" style="display:none;"></span>
			 
			            
			         <!--    <?php $_from = $this->_tpl_vars['quotecategory_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['qf']):
?>
			           <div style="width:100px; float:left;">
			           <?php if (in_array ( $this->_tpl_vars['qf']['id'] , $this->_tpl_vars['quotecategory_id_group'] )): ?>     
			           <input name="quotecategory_id[]" type="checkbox" checked="checked" value="<?php echo $this->_tpl_vars['qf']['id']; ?>
" /><?php echo $this->_tpl_vars['qf']['quotecategory_name']; ?>

			           <?php else: ?>
			               <input name="quotecategory_id[]" type="checkbox" value="<?php echo $this->_tpl_vars['qf']['id']; ?>
" /><?php echo $this->_tpl_vars['qf']['quotecategory_name']; ?>

			           <?php endif; ?>         
			             
			           </div>
			           <?php endforeach; endif; unset($_from); ?> -->
			            
			            
			            
			            <!--<select class="combox required" name="quotecategory_id">
			            <option value="">无</option>
			              <?php $_from = $this->_tpl_vars['quotecategory_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['qf']):
?> 
			              <option value="<?php echo $this->_tpl_vars['qf']['id']; ?>
" <?php if ($this->_tpl_vars['quote_info']['quotecategory_id'] == $this->_tpl_vars['qf']['id']): ?> selected="selected" <?php endif; ?> ><?php echo $this->_tpl_vars['qf']['quotecategory_name']; ?>

			              </option>
			              <?php endforeach; endif; unset($_from); ?>
			            </select>-->
			          </div>
			          <div class="divider">divider</div>
          	</div>
          <div id="customer_list" class="list"  style="display:none;">
	          <div class="unit">
	            <label>客户名称：</label>
	            <input type="text" size="25" class="required" name="customer_name" id="customer_name" value='<?php echo $this->_tpl_vars['newcustomer']['customer_name']; ?>
'  />
	            <span id="customer_name_result_edit" class="error" style="display:none;"></span>
	          </div>
	          <div class="divider">divider</div>       
	          <div class="unit">
	            <label>主邮箱：</label>
	            <input type="text" size="25" name="email" id="email" value="<?php echo $this->_tpl_vars['newcustomer']['email']; ?>
"  class="required email" />
	            <span id="email_result_edit" class="error" style="display:none;"></span>
	          </div>
	          <div class="divider">divider</div>     
	          <div class="unit">
	            <label>备用邮箱：</label>
	            <input type="text" size="25" name="reserve_email" id="reserve_email" value="<?php echo $this->_tpl_vars['newcustomer']['reserve_email']; ?>
" />
	            <!-- <span id="reserve_email_result_edit" class="error" style="display:none;"></span> -->
	          </div>
	          <div class="divider">divider</div>  
	          <div class="unit">
	            <label>固定电话：</label>
	            <input type="text" size="25" name="telephone" id="qc_telephone"  value="<?php echo $this->_tpl_vars['newcustomer']['telephone']; ?>
" />
	          </div>
	          <div class="divider">divider</div>  
	          <div class="unit">
	            <label>手机：</label>
	            <input type="text" size="25" name="cellphone" id="qc_cellphone" class="phone" value="<?php echo $this->_tpl_vars['newcustomer']['cellphone']; ?>
" />
	          </div>
	          <div class="divider">divider</div>          
	           
	          <div class="unit">
	            <label>所属国家：</label>
	            <select class="combox required" name="country">
	            <option value="">无</option>
	              <?php $_from = $this->_tpl_vars['country_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['qf']):
?> <option value="<?php echo $this->_tpl_vars['qf']['area_id']; ?>
" <?php if ($this->_tpl_vars['newcustomer']['country_id'] == $this->_tpl_vars['qf']['area_id']): ?> selected="selected" <?php endif; ?>><?php echo $this->_tpl_vars['qf']['area_name']; ?>

	              </option>
	              <?php endforeach; endif; unset($_from); ?>
	            </select>
	          </div>
	          <div class="divider">divider</div>
	           <div class="unit">
	            <label>生日：</label>
	            <input type="text" size="25" name="birthday" id="qc_birthday" value="<?php echo $this->_tpl_vars['newcustomer']['birthday']; ?>
" />
	          </div>
	          <div class="divider">divider</div>
	          <div class="unit">
	            <label>WhatsApp：</label>
	            <input type="text" size="25" name="whatsapp" id="qc_whatsapp" value="<?php echo $this->_tpl_vars['newcustomer']['whatsapp']; ?>
" />
	          </div>
	          <div class="divider">divider</div>
	           <div class="unit">
	            <label>性别：</label>
	            <input type="radio" name="sex" <?php if ($this->_tpl_vars['newcustomer']['sex'] == 1): ?>checked<?php endif; ?> value="1"/>男
	            <input type="radio" name="sex" <?php if ($this->_tpl_vars['newcustomer']['sex'] == 2): ?>checked<?php endif; ?> value="2"/>女
	          </div>
	          <div class="divider">divider</div>
	          <div class="unit">
	            <label>部门：</label>
	            <input type="text" size="25" name="department" id="qc_department" value="<?php echo $this->_tpl_vars['newcustomer']['department']; ?>
" />
	          </div>
	          <div class="divider">divider</div>
	          <div class="unit">
	            <label>职位：</label>
	            <input type="text" size="25" name="position" id="qc_position" value="<?php echo $this->_tpl_vars['newcustomer']['position']; ?>
" />
	          </div>
	          <div class="divider">divider</div>
	          <div class="unit">
	            <label>备注：</label>
	            <input type="text" size="25" name="note" id="qc_note" value="<?php echo $this->_tpl_vars['newcustomer']['note']; ?>
" />
	          </div>
	          <div class="divider">divider</div>
	                    <div class="unit">
          	<div style="float:left; width:96%;">
            	<input type="button" style="cursor:pointer; float:left;" onclick="addrow()" value="添加联系人" />
            </div>
          	

            	<ul id="customer_contact">
            		 <?php $_from = $this->_tpl_vars['customer_contact']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['cc']):
?>
            		<li style="float:left; margin-top:10px; width:96%;" id="<?php echo $this->_tpl_vars['cc']['id']; ?>
">
                    <label style="width:50px; text-align:right;">姓名:</label>
                    <input type="text" name="contact[<?php echo $this->_tpl_vars['cc']['id']; ?>
][nickname]" value="<?php echo $this->_tpl_vars['cc']['nickname']; ?>
">
                    <label style="width:50px; text-align:right;">邮箱:</label>
                    <input type="text" style="width:160px;" name="contact[<?php echo $this->_tpl_vars['cc']['id']; ?>
][email]" value="<?php echo $this->_tpl_vars['cc']['email']; ?>
">
                    <label style="width:50px; text-align:right;">电话:</label>
                    <input type="text" name="contact[<?php echo $this->_tpl_vars['cc']['id']; ?>
][telephone]" value="<?php echo $this->_tpl_vars['cc']['telephone']; ?>
">
                    <label style="width:80px; text-align:right;">主要联系人:</label>
                    <input type="radio" style="float:left;" name="contact[<?php echo $this->_tpl_vars['cc']['id']; ?>
][primary_contact]" id="n<?php echo $this->_tpl_vars['cc']['id']; ?>
" onclick="selected('n<?php echo $this->_tpl_vars['cc']['id']; ?>
')" <?php if ($this->_tpl_vars['cc']['primary_contact'] == 1): ?> checked="checked" value='1' <?php endif; ?> >
                    <!--<span onclick='del(<?php echo $this->_tpl_vars['cc']['id']; ?>
)' style="cursor:pointer;">删除</span>-->
                    <input type="button" style="cursor:pointer; float:left; margin-left:10px;"  onclick="del(<?php echo $this->_tpl_vars['cc']['id']; ?>
)" value="删除" />
                    </li>
            		<?php endforeach; endif; unset($_from); ?>
            	</ul>
            	<script>
            		function selected(id){
            			$("input[type='radio']").each(function(){
            				if($(this).attr('id')==id){
            					$(this).attr('checked','checked');
            					$(this).val('1');
            				}else{
            					$(this).removeAttr('checked');
            				}
            			})
            		}
            		var row=1;
            		
            		function addrow(){
            			
            			html='<li style="float:left; margin-top:10px; width:96%;" id="n'+row+'"><label style="width:50px; text-align:right;">姓名:</label><input type="text" name="contact[n'+row+'][nickname]" class="textInput"><label style="width:50px; text-align:right;">邮箱:</label><input type="text" style="width:160px;" name="contact[n'+row+'][email]" class="textInput"><label style="width:50px; text-align:right;">电话:</label><input type="text" name="contact[n'+row+'][telephone]" class="textInput"><label style="width:80px; text-align:right;">主要联系人:</label><input type="radio" style="float:left; margin-left:30px;" name="contact[n'+row+'][primary_contact]" id="n'+row+'" onclick=selected("n'+row+'")><input type="button" style="cursor:pointer; float:left;"  onclick="del(("n'+row+'")" value="删除" /></li>';
            			++row;
            			$('#customer_contact').append(html);
            		}
            		function del(id){
            			$('#'+id).remove();
            			$.ajax({
            				 type: 'POST',
            				 url: '/quotecustomer/del_contact',
            				 data: {id:id},
            				 dataType: 'text',
            				 success: function(data){
            	      
            	             }
            			});
            		}
            	</script>
          </div>
          <div class="divider">divider</div>
	          <?php if ($this->_tpl_vars['quote_info_1']['quotefrom_id'] == 7 || $this->_tpl_vars['quote_info_1']['quotefrom_id'] == 25): ?>
	          <div id="qc_webChange_edit" style="display:block;">
	          <?php else: ?>
	          <div id="qc_webChange_edit" style="display:block;">
	          <?php endif; ?>	         
	          </div>
          </div>
          
          <div id="company_list" style="display:none" class="list">
	          <div class="unit">
	            <label>公司：</label>
	            <input type="text" size="25" name="company" id="company" value="<?php echo $this->_tpl_vars['newcustomer']['company']; ?>
"  onkeyup="get_same_company(event)"   class="required" />
	            <div id="select_list" style="display:none;position: absolute;z-index: 9999; background-color:#FFFFFF;border:1px solid #0099FF;"></div>
	            <span id="company_result_edit_edit" class="error" style="display:none;"></span>
	          </div>
	          <div class="divider">divider</div>
	          <div class="unit">
	            <label>网址：</label>
	            <input type="text" size="25" name="website" id="qc_website" class="url" value="<?php echo $this->_tpl_vars['newcustomer']['website']; ?>
" />
	          </div>
	          <div class="divider">divider</div>
	          <div class="unit">
	            <label>Facebook：</label>
	            <input type="text" size="25" name="facebook" id="qc_facebook" value="<?php echo $this->_tpl_vars['newcustomer']['facebook']; ?>
" />
	          </div>
	          <div class="divider">divider</div>  
	          <div class="unit">
	            <label>Instagram：</label>
	            <input type="text" size="25" name="instagram" id="qc_instagram" value="<?php echo $this->_tpl_vars['newcustomer']['instagram']; ?>
" />
	          </div>
	          <div class="divider">divider</div>
	          <div class="unit">
	            <label>Tiktok：</label>
	            <input type="text" size="25" name="tiktok" id="qc_tiktok" value="<?php echo $this->_tpl_vars['newcustomer']['tiktok']; ?>
" />
	          </div>
	          <div class="divider">divider</div>  
	          <div class="unit">
	            <label>地址：</label>
	            <input type="text" size="25" name="address" id="qc_address" value="<?php echo $this->_tpl_vars['newcustomer']['address']; ?>
" />
	          </div>
	          <div class="divider">divider</div>  
	          <div class="unit">
	            <label>成立年份：</label>
	            <input type="text" name="year_established" datefmt="yyyy" id="year_established" value="<?php echo $this->_tpl_vars['newcustomer']['year_established']; ?>
" class="date textInput readonly valid combox" />         
	          </div>
	          <div class="divider">divider</div>
	          <div class="unit">
	            <label>年营业额：</label>
	            <input type="text" size="25" name="annual_avenue" id="qc_annual_avenue" value="<?php echo $this->_tpl_vars['newcustomer']['annual_avenue']; ?>
" />
	          </div>
	          <div class="divider">divider</div>
	          <div class="unit">
	            <label>主要客群：</label>
	            <input type="text" size="100" name="key_customer_groups" id="qc_key_customer_groups" value="<?php echo $this->_tpl_vars['newcustomer']['key_customer_groups']; ?>
" />
	          </div>
	          <div class="divider">divider</div>
	          <div class="unit">
	            <label>公司简介：</label>
	            <input type="text" size="100" name="company_introduction" id="qc_company_introduction" value="<?php echo $this->_tpl_vars['newcustomer']['company_introduction']; ?>
" />
	          </div>
	          <div class="divider">divider</div>
	          <div class="unit">
	            <label>VAT号：</label>
	            <input type="text" size="25" name="vat" id="qc_vat" value="<?php echo $this->_tpl_vars['newcustomer']['vat']; ?>
" />
	          </div>
	          <div class="divider">divider</div>
	          <div class="unit">
	            <label>公司类型：</label>
	            <input type="checkbox" name="business_type[]" <?php if (! empty ( $this->_tpl_vars['business_type1'] )): ?>checked<?php endif; ?> value="1" />制造商
	            <input type="checkbox" name="business_type[]" <?php if (! empty ( $this->_tpl_vars['business_type2'] )): ?>checked<?php endif; ?> value="2" />贸易公司
	            <input type="checkbox" name="business_type[]" <?php if (! empty ( $this->_tpl_vars['business_type3'] )): ?>checked<?php endif; ?> value="3" />经销商/批发商
	            <input type="checkbox" name="business_type[]" <?php if (! empty ( $this->_tpl_vars['business_type4'] )): ?>checked<?php endif; ?> value="4" />采购办事处/代理
	            <input type="checkbox" name="business_type[]" <?php if (! empty ( $this->_tpl_vars['business_type5'] )): ?>checked<?php endif; ?> value="5" />商业服务
	            <input type="checkbox" name="business_type[]" <?php if (! empty ( $this->_tpl_vars['business_type6'] )): ?>checked<?php endif; ?> value="6" />协会/组织
	            <input type="checkbox" name="business_type[]" <?php if (! empty ( $this->_tpl_vars['business_type7'] )): ?>checked<?php endif; ?> value="7" />政府机关
	            <input type="checkbox" name="business_type[]" id="business_type_other" <?php if (! empty ( $this->_tpl_vars['business_type8'] )): ?>checked<?php endif; ?> value="8" />其它
                <input type="text" style="float:none; <?php if (empty ( $this->_tpl_vars['newcustomer']['business_type_message'] )): ?>display:none;<?php endif; ?> width:200px;" id="business_type_message" name="business_type_message" value="<?php echo $this->_tpl_vars['newcustomer']['business_type_message']; ?>
" />
	          </div>
	          <div class="divider">divider</div>
	          <div class="unit">
	            <label>主要产品：</label>
	            <input type="text" size="100" name="main_products" id="qc_main_products" value="<?php echo $this->_tpl_vars['newcustomer']['main_products']; ?>
" />
	          </div>
	          <div class="divider">divider</div>
	           <div class="unit">
	            <label>次要产品：</label>
	            <input type="text" size="100" name="other_products" id="qc_other_products" value="<?php echo $this->_tpl_vars['newcustomer']['other_products']; ?>
" />
	          </div>
	          <div class="divider">divider</div>
	          <div class="unit">
	            <label>主要销售渠道：</label>
	            <input type="checkbox" name="platforms_selling[]" <?php if (! empty ( $this->_tpl_vars['platforms_selling8'] )): ?>checked<?php endif; ?> value="8" />实体店铺
	            <input type="checkbox" name="platforms_selling[]" <?php if (! empty ( $this->_tpl_vars['platforms_selling9'] )): ?>checked<?php endif; ?> value="9" />线上店铺
	            <input type="checkbox" name="platforms_selling[]" <?php if (! empty ( $this->_tpl_vars['platforms_selling10'] )): ?>checked<?php endif; ?> value="10" />独立网站
	            <input type="checkbox" name="platforms_selling[]" id="platforms_selling_other" <?php if (! empty ( $this->_tpl_vars['platforms_selling11'] )): ?>checked<?php endif; ?> value="11" />其它
                <input type="text" style="float:none; <?php if (empty ( $this->_tpl_vars['newcustomer']['platforms_selling_message'] )): ?>display:none;<?php endif; ?> width:200px;" size="" id="platforms_selling_message" name="platforms_selling_message" value="<?php echo $this->_tpl_vars['newcustomer']['platforms_selling_message']; ?>
" />
	          </div>
	          <div class="divider">divider</div>	          
          <div class="unit">
            <label>UPS收货人账号：</label>
            <input type="text" name="consignee_account_ups" value="<?php echo $this->_tpl_vars['newcustomer']['consignee_account_ups']; ?>
" />
          </div>
          <div class="divider">divider</div>
          <div class="unit">
            <label>UPS收货人邮箱：</label>
            <input type="text" name="consignee_email_ups" value="<?php echo $this->_tpl_vars['newcustomer']['consignee_email_ups']; ?>
" />
          </div>
          <div class="divider">divider</div>
          <div class="unit">
            <label>DHL收货人账号：</label>
            <input type="text" name="consignee_account_dhl" value="<?php echo $this->_tpl_vars['newcustomer']['consignee_account_dhl']; ?>
" />
          </div>
          <div class="divider">divider</div>
          <div class="unit">
	            <label>DHL收货人邮箱：</label>
	             <input type="text" name="RegistrationNumber_dhl" value="<?php echo $this->_tpl_vars['newcustomer']['RegistrationNumber_dhl']; ?>
" />
	          </div>
	          
	          <div class="divider">divider</div>
	          <div class="unit">
	            <label>采购目的：</label>
	            <input type="checkbox" name="purpose[]" <?php if (! empty ( $this->_tpl_vars['purpose11'] )): ?>checked<?php endif; ?> value="11" />公司内部使用
	            <input type="checkbox" name="purpose[]" <?php if (! empty ( $this->_tpl_vars['purpose12'] )): ?>checked<?php endif; ?> value="12" />销售
	            <input type="checkbox" name="purpose[]" <?php if (! empty ( $this->_tpl_vars['purpose13'] )): ?>checked<?php endif; ?> value="13" />生产用
	            <input type="checkbox" name="purpose[]" <?php if (! empty ( $this->_tpl_vars['purpose14'] )): ?>checked<?php endif; ?> value="14" />自用
	            <input type="checkbox" name="purpose[]" <?php if (! empty ( $this->_tpl_vars['purpose15'] )): ?>checked<?php endif; ?> value="15" />其它
	          </div>
	          <div class="divider">divider</div>
	          <div class="unit">
	            <label>采购频率：</label>
	            <input type="checkbox" name="frequency[]" <?php if (! empty ( $this->_tpl_vars['frequency16'] )): ?>checked<?php endif; ?> value="16" />每周一次
	            <input type="checkbox" name="frequency[]" <?php if (! empty ( $this->_tpl_vars['frequency17'] )): ?>checked<?php endif; ?> value="17" />一月一次
	            <input type="checkbox" name="frequency[]" <?php if (! empty ( $this->_tpl_vars['frequency18'] )): ?>checked<?php endif; ?> value="18" />一季度一次
	            <input type="checkbox" name="frequency[]" <?php if (! empty ( $this->_tpl_vars['frequency19'] )): ?>checked<?php endif; ?> value="19" />一年一次
	            <input type="checkbox" name="frequency[]" <?php if (! empty ( $this->_tpl_vars['frequency20'] )): ?>checked<?php endif; ?> value="20" />按需采购
	          </div>
	          <div class="divider">divider</div>
	          <div class="unit">
	            <label>年采购额：</label>
	            <input type="checkbox" name="purchasing_volume[]" <?php if (! empty ( $this->_tpl_vars['purchasing_volume21'] )): ?>checked<?php endif; ?> value="21" />一千美金以下
	            <input type="checkbox" name="purchasing_volume[]" <?php if (! empty ( $this->_tpl_vars['purchasing_volume22'] )): ?>checked<?php endif; ?> value="22" />1001-10000
	            <input type="checkbox" name="purchasing_volume[]" <?php if (! empty ( $this->_tpl_vars['purchasing_volume23'] )): ?>checked<?php endif; ?> value="23" />10001-10万
	            <input type="checkbox" name="purchasing_volume[]" <?php if (! empty ( $this->_tpl_vars['purchasing_volume24'] )): ?>checked<?php endif; ?> value="24" />100001-1百万
	            <input type="checkbox" name="purchasing_volume[]" <?php if (! empty ( $this->_tpl_vars['purchasing_volume25'] )): ?>checked<?php endif; ?> value="25" />1百万以上
	          </div>
	          <div class="divider">divider</div>
	           <div class="unit">
	            <label>采购品类：</label>
	            <input type="text" size="100" name="purchasing_category" id="qc_purchasing_category" value="<?php echo $this->_tpl_vars['newcustomer']['purchasing_category']; ?>
" />
	          </div>
	          <div class="divider">divider</div>
      	  </div>
      	  <div id="background_list" style="display:none" class="list">
      	  	<div class="unit">
	            <label>来源网址：</label>
	            <input type="text" size="50" name="source_url" id="qc_source_url" value="<?php echo $this->_tpl_vars['newcustomer']['source_url']; ?>
" />
	          </div>
	          <div class="divider">divider</div>
	          <div class="unit">	         
	             <label>统计类型：</label>
	             <?php $_from = $this->_tpl_vars['attribute_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['al']):
?>
	              <?php if (in_array ( $this->_tpl_vars['al']['id'] , $this->_tpl_vars['attribute_id'] )): ?>
	            <input type="radio" name="attribute" id="qc_attribute<?php echo $this->_tpl_vars['al']['id']; ?>
" checked onclick="background_choice(<?php echo $this->_tpl_vars['al']['id']; ?>
)" value="<?php echo $this->_tpl_vars['al']['id']; ?>
" /><?php echo $this->_tpl_vars['al']['type']; ?>

	            	<?php else: ?>
	            	<input type="radio" name="attribute" id="qc_attribute<?php echo $this->_tpl_vars['al']['id']; ?>
" onclick="background_choice(<?php echo $this->_tpl_vars['al']['id']; ?>
)" value="<?php echo $this->_tpl_vars['al']['id']; ?>
" /><?php echo $this->_tpl_vars['al']['type']; ?>

	            	<?php endif; ?>
	            <?php endforeach; endif; unset($_from); ?>
	          </div>
	          <script>
	          		function background_choice(id){
	          			if(id==1){
	          				$('.service_list').hide();
		          			$('.product_list').show(300);
	          			}else if(id==2){
	          				$('.product_list').hide();
		          			$('.service_list').show(300);
	          			}	          			
	          		}
	          </script>
	          <div class="divider">divider</div>
	          <?php $_from = $this->_tpl_vars['attribute_option_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['aol']):
?>
	          <?php if ($this->_tpl_vars['aol']['attribute_id'] == 1): ?>
	          <div id="product_list_<?php echo $this->_tpl_vars['k']+1; ?>
" class="product_list" <?php if (! in_array ( $this->_tpl_vars['aol']['attribute_id'] , $this->_tpl_vars['attribute_id'] )): ?> style="display:none" <?php endif; ?> >
	          <?php elseif ($this->_tpl_vars['aol']['attribute_id'] == 2): ?>  
	           <div id="service_list_<?php echo $this->_tpl_vars['k']+1; ?>
" class="service_list" <?php if (! in_array ( $this->_tpl_vars['aol']['attribute_id'] , $this->_tpl_vars['attribute_id'] )): ?> style="display:none" <?php endif; ?> >
	           <?php endif; ?>    
	          <div class="unit">           
	             <label><?php echo $this->_tpl_vars['aol']['name']; ?>
：</label>
	             <?php $_from = $this->_tpl_vars['attribute_option_value_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['aovl']):
?>
	             <?php if ($this->_tpl_vars['aol']['id'] == $this->_tpl_vars['aovl']['attribute_option_id']): ?>
	             <?php if (in_array ( $this->_tpl_vars['aovl']['id'] , $this->_tpl_vars['attribute_option_value_id'] )): ?>
	             <input type="checkbox" name="attribute_option_value[<?php echo $this->_tpl_vars['aol']['id']; ?>
][]" id="qc_attribute" checked value="<?php echo $this->_tpl_vars['aovl']['id']; ?>
" /><?php echo $this->_tpl_vars['aovl']['name']; ?>

	             <?php else: ?>
	            <input type="checkbox" name="attribute_option_value[<?php echo $this->_tpl_vars['aol']['id']; ?>
][]" id="qc_attribute" value="<?php echo $this->_tpl_vars['aovl']['id']; ?>
" /><?php echo $this->_tpl_vars['aovl']['name']; ?>

	            <?php endif; ?>
	            <?php endif; ?>
	            <?php endforeach; endif; unset($_from); ?>
	          </div>
	          <div class="divider">divider</div>
	          </div>
	          <?php endforeach; endif; unset($_from); ?>
	          	<div class="unit">
	            <label>产品：</label>
	            <div id="product_list" style="float:left; width:100%;">
	            	<?php $this->assign('attribute_row', '1'); ?>
	            	<?php $_from = $this->_tpl_vars['product_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['cid'] => $this->_tpl_vars['pi']):
?>
	            	 <input type="button" value="删除" id="attribute-row-<?php echo $this->_tpl_vars['attribute_row']; ?>
" onclick="addAttribute_del(<?php echo $this->_tpl_vars['attribute_row']; ?>
)"> 
		            	<div id="attribute-row<?php echo $this->_tpl_vars['attribute_row']; ?>
" style="float:left; margin-bottom:10px;  margin-top:20px;">	            	
			          	<?php $_from = $this->_tpl_vars['product_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['pl']):
?>
			          	<?php if ($this->_tpl_vars['pl']['id'] == $this->_tpl_vars['pi']): ?>
			          	<input type="radio"  name="product_attribute<?php echo $this->_tpl_vars['attribute_row']; ?>
" onclick="addAttribute_option(<?php echo $this->_tpl_vars['pl']['id']; ?>
,<?php echo $this->_tpl_vars['attribute_row']; ?>
);" value="<?php echo $this->_tpl_vars['pl']['id']; ?>
" checked placeholder="Attribute" class="form-control" /><?php echo $this->_tpl_vars['pl']['product_name']; ?>
 	
			          	<?php else: ?>
			          	<input type="radio"  name="product_attribute<?php echo $this->_tpl_vars['attribute_row']; ?>
" onclick="addAttribute_option(<?php echo $this->_tpl_vars['pl']['id']; ?>
,<?php echo $this->_tpl_vars['attribute_row']; ?>
);" value="<?php echo $this->_tpl_vars['pl']['id']; ?>
" placeholder="Attribute" class="form-control" /><?php echo $this->_tpl_vars['pl']['product_name']; ?>
 	
			          	<?php endif; ?>		          	
			          	<?php endforeach; endif; unset($_from); ?>
			            </div>

			            <?php $_from = $this->_tpl_vars['product_option_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['pol']):
?> 
		          			<?php if ($this->_tpl_vars['pi'] == $this->_tpl_vars['pol']['product_id']): ?>
                            	<div class="divider attribute_row_<?php echo $this->_tpl_vars['attribute_row']; ?>
">divider</div>
                                <div id="attribute-option-row<?php echo $this->_tpl_vars['attribute_row']; ?>
"  class="attribute_row_<?php echo $this->_tpl_vars['attribute_row']; ?>
">
		          				<label><?php echo $this->_tpl_vars['pol']['name']; ?>
</label>
                                    <div id="" style="float:left; width:80%;">
                                        <div id="div_attribute-option-row_<?php echo $this->_tpl_vars['attribute_row']; ?>
">
                                        <?php $_from = $this->_tpl_vars['product_option_value_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['povl']):
?> 
                                            <?php if ($this->_tpl_vars['pol']['id'] == $this->_tpl_vars['povl']['product_option_id']): ?>
                                                 <?php if (in_array ( $this->_tpl_vars['povl']['id'] , $this->_tpl_vars['product_option_value_id'][$this->_tpl_vars['cid']] )): ?>	          	
                                                <input type="checkbox" name="product_option_value[<?php echo $this->_tpl_vars['attribute_row']; ?>
][<?php echo $this->_tpl_vars['pi']; ?>
][<?php echo $this->_tpl_vars['pol']['id']; ?>
][<?php echo $this->_tpl_vars['povl']['id']; ?>
]" checked value="<?php echo $this->_tpl_vars['povl']['id']; ?>
" placeholder="Attribute" class="form-control" /><?php echo $this->_tpl_vars['povl']['name']; ?>
 
                                                <?php else: ?>
                                                <input type="checkbox" name="product_option_value[<?php echo $this->_tpl_vars['attribute_row']; ?>
][<?php echo $this->_tpl_vars['pi']; ?>
][<?php echo $this->_tpl_vars['pol']['id']; ?>
][<?php echo $this->_tpl_vars['povl']['id']; ?>
]" value="<?php echo $this->_tpl_vars['povl']['id']; ?>
" placeholder="Attribute" class="form-control" /><?php echo $this->_tpl_vars['povl']['name']; ?>
       
                                                <?php endif; ?>
                                            <?php endif; ?>
                                        <?php endforeach; endif; unset($_from); ?>
                                        </div>
                                    </div>
			             		</div>
		          			<?php endif; ?>
			        	<?php endforeach; endif; unset($_from); ?> 
			        	
			        <!--<?php echo $this->_tpl_vars['attribute_row']++; ?>
-->
                      <div class="divider attribute_row">divider</div>      
		        	<?php endforeach; endif; unset($_from); ?>
	            </div>
	            <input type="button" class="addAttribute_btn" value="添加" onclick="addAttribute();">
	          </div>
	          <script>
	          	  if(<?php echo $this->_tpl_vars['attribute_row']; ?>
 > 1){
	          		var attribute_row = <?php echo $this->_tpl_vars['attribute_row']; ?>
;
	          	  }else{
	          		var attribute_row = 1;
	          	  }
		          
	
		          function addAttribute() {	      
		        	  
		        	  html  = '<input type="button" value="删除" id="attribute_row' + attribute_row + '" onclick="addAttribute_del(' + attribute_row + ')"><div id="attribute-row' + attribute_row + '"style="float:left; margin-bottom:10px;">';
		          	<?php $_from = $this->_tpl_vars['product_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['pl']):
?>
		          	html += '  <input type="radio"  onclick="addAttribute_option(<?php echo $this->_tpl_vars['pl']['id']; ?>
,' + attribute_row + ');" name="product_attribute' + attribute_row + '" value="" placeholder="Attribute" class="form-control" /><?php echo $this->_tpl_vars['pl']['product_name']; ?>
';
		          	<?php endforeach; endif; unset($_from); ?>          		
		            html += '</div><div id="div_attribute-option-row_' + attribute_row + '"></div>';
	
		          	$('#product_list').append(html);
		          	attribute_row++;
		          }
	          

	          	function addAttribute_option(id,attribute_row) {
	          		$(".attribute_row_"+attribute_row).remove();
	          		$("#attribute_row"+attribute_row).attr("onclick","addAttribute_del("+attribute_row+","+id+")");
	          		<?php $_from = $this->_tpl_vars['product_option_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['pol']):
?> 
	          			if(id==<?php echo $this->_tpl_vars['pol']['product_id']; ?>
){
							
							html  = '<div class="divider attribute_row_'+attribute_row+'">divider</div>';
						   	html  += '<div id="attribute-option-row' + attribute_row + '"  class="attribute_row_'+attribute_row+'">';
							html  += '<label><?php echo $this->_tpl_vars['pol']['name']; ?>
：</label>';
							html += '<div id="div_attribute-option-row_' + attribute_row + '_<?php echo $this->_tpl_vars['k']+1; ?>
" style="float:left; width:80%;">';
							<?php $_from = $this->_tpl_vars['product_option_value_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['povl']):
?> 
	          					<?php if ($this->_tpl_vars['pol']['id'] == $this->_tpl_vars['povl']['product_option_id']): ?>         	
		          					html += '  <input type="checkbox" name="product_option_value['+attribute_row+']['+id+'][<?php echo $this->_tpl_vars['pol']['id']; ?>
][<?php echo $this->_tpl_vars['povl']['id']; ?>
]" value="<?php echo $this->_tpl_vars['povl']['id']; ?>
" placeholder="Attribute" class="form-control" /><?php echo $this->_tpl_vars['povl']['name']; ?>
 ';
		          				<?php endif; ?>
		          			<?php endforeach; endif; unset($_from); ?>
							html += '</div>';
		             		html += '</div>';
		          			$("#attribute-row"+attribute_row).append(html);
	          			}
		        	<?php endforeach; endif; unset($_from); ?>
		        	html1='<div style="float:left; margin-bottom:50px;"></div>';
		        	$("#attribute-row"+attribute_row).append(html1);
		        }
	          	
	          	function addAttribute_del(attribute_row,attribute_option_row){
	          		$("#attribute_row"+attribute_row).remove();
	          		$("#attribute-row"+attribute_row).remove();
	          		$("#attribute-row-"+attribute_row).remove();
					$("#div_attribute-option-row_"+attribute_row).remove();
	          		$(".attribute_row_"+attribute_row).remove();
	          	}
	          </script>
	          <div class="divider">divider</div>
      	  </div>
      	</div>
          
<!--           <div class="unit">
            <label>询盘内容：</label>
            <textarea name="quote_content" cols="50" rows="4"><?php echo $this->_tpl_vars['quote_info_1']['quote_content']; ?>
</textarea>
          </div>
           <div class="divider">divider</div> -->
          
          
         

          </div>
        </form>
          <div class="formBar">
              <ul>
                <li>
                  <div class="buttonActive">
                    <div class="buttonContent">
                      <button type="button" id="submit_quotecustomer_edit" >确定</button>
                    </div>
                  </div>
                </li>
                <li> 
                <div class="buttonActive">
                    <div class="buttonContent">
                      <button type="button" class="close">取消</button>
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
	$("#submit_quotecustomer_edit").click(function (){
		
		if($("#quotefrom_select").val() == ''){
			alert("请选择来源渠道");
			/*$("#quotefrom_id_result_edit").css("display","block");
			$("#quotefrom_id_result_edit").html("请选择询盘来源");*/
		}
		else if($("#customer_name").val() == ''){
			alert("请填写客户名");
		}
		else if($('#email').val()==''){
			alert('请填写主邮箱');
		}
		else if($('#email_result_edit').html()!=''){
			alert('请修改主邮箱错误！');
		}/* else if($('#reserve_email_result_edit').html()!=''){
			alert('请修改备用邮箱错误！');
		} */else if($("#company_result_edit_edit").html()!=''){
			alert('请修改公司错误！');
		}else if($('#reserve_email').val()==$('#email').val()){
			alert('主邮箱与备用邮箱不能重复！');
		}
		else if($('#company').val()==''){
			alert('请填写公司名');
		}
		else{
			$("#quotefrom_id_result_edit").css("display","none");
			<!--$("#userid_result_edit").css("display","none");-->
			var xuan = 1;
			
			if($(".product_list").is(':visible')){
				for(i=1;i<=5;i++){
					if(xuan == 1){
						if($("#product_list_"+i+" input[type='checkbox']:checked").length > 0){
							xuan = 1;
							continue;
						}
						else{
							xuan = 2;
						}
					}
					else{
						break;
					}
				}
			}
			
			if(xuan == 1){
				if($(".service_list").is(':visible')){
					for(i=6;i<=9;i++){
						if(xuan == 1){
							if($("#service_list_"+i+" input[type='checkbox']:checked").length > 0){
								xuan = 1;
								continue;
							}
							else{
								xuan = 2;
							}
						}
						else{
							break;
						}
					}
				}
			}
			
			
			if(xuan == 1){
				for(i=1;i<=10;i++){
					if($("#div_attribute-option-row_"+i).is(':visible')){
						for(j=1;j<=200;j++){
							if($("#div_attribute-option-row_"+i+"_"+j).is(':visible')){
								if(xuan == 1){
									if($("#div_attribute-option-row_"+i+"_"+j+" input[type='checkbox']:checked").length > 0){
										xuan = 1;
										continue;
									}
									else{
										xuan = 2;
									}
								}
								else{
									break;
								}
							}
						}
					}
				}
			}
			
			/* 判断背景调查是否选择 */
			if(xuan == 2){
				alert("请选全背景调查选项");
			}
			else{
				$("#quote_edit_form").submit();
			}
		}
		
	});
		
	var customer_id = $("#customer_id").val();
	$('input').blur(function(){
     
   		if(this.id == 'customer_name'){
			if(this.value==''){
				
			}
			else{
				$('#customer_name_result_edit').html('');
				p='customer_name='+this.value+'&customer_id='+customer_id;
     			$.ajax({url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/check_customer_name',type:'post', dataType:'json',data:p,success:check_customer_name_back});
			}
		}
		
		if(this.id == 'company'){
			if(this.value==''){
				
			}
			else{
				$('#select_list').css("display","none");
				$('#select_list').html('');
				$('#company_result_edit').html('');
				p='company='+this.value+'&customer_id='+customer_id;
     			$.ajax({url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/check_company',type:'post', dataType:'json',data:p,success:check_company_back});
			}
		}
		
		if(this.id == 'email'){
			if(this.value==''){
				
			}
			else{
				$('#email_result_edit').html('');
				p='email='+this.value+'&customer_id='+customer_id;
     			$.ajax({url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/check_customer_email',type:'post', dataType:'json',data:p,success:check_email_back});
			}
		}
		/* if(this.id == 'reserve_email'){
			if(this.value==''){
				
			}
			else{
				$('#reserve_email_result_edit').html('');
				p='reserve_email='+this.value+'&customer_id='+customer_id;
     			$.ajax({url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/basemethod/check_customer_reserve_email_1',type:'post', dataType:'json',data:p,success:check_reserve_email_back});
			}
		} */
		
	});
	
	$("#business_type_other").click(function (){
		if($("#business_type_message").is(':hidden')){
			$("#business_type_message").fadeIn(200);
		}
		else {
			$("#business_type_message").hide();
		}
	});
	$("#platforms_selling_other").click(function (){
		if($("#platforms_selling_message").is(':hidden')){
			$("#platforms_selling_message").fadeIn(200);
		}
		else {
			$("#platforms_selling_message").hide();
		}
	});
	
	
	
});


	function qc_webChange_edit(val){
		if(val == 7 || val == 15 || val == 25 ){
			$("#qc_webChange_edit").css("display","block");
		}else{
			$("#qc_webChange_edit").css("display","none");
		}
	}
	
	function check_email_back(data)
	{
		if(data.type_email==1){
			if(data.customer_code!= undefined)
			{
				$('#email_result_edit').css("display","block");
				$('#email_result_edit').css("background-color","#F00");
				$('#email_result_edit').css("color","#FFF");
				$('#email_result_edit').html('该邮箱已经被使用' + ' ' + data.customer_code);
			}
			else
			{
				$('#email_result_edit').css("display","none");
				$('#email_result_edit').css("background-color","#6F0");
				$('#email_result_edit').css("color","#000");
				$('#email_result_edit').html('');
			}
		}else{
			$('#email_result_edit').css("display","block");
			$('#email_result_edit').css("background-color","#F00");
			$('#email_result_edit').css("color","#FFF");
			$('#email_result_edit').html('该邮箱不可用！');	
		}
	}
	
	function check_reserve_email_back(data)
	{
/* 		if(data.type_email==1){
			if(data.customer_code!= undefined)
			{
				$('#reserve_email_result_edit').css("display","block");
				$('#reserve_email_result_edit').css("background-color","#F00");
				$('#reserve_email_result_edit').css("color","#FFF");
				$('#reserve_email_result_edit').html('该邮箱已经被使用' + ' ' + data.customer_code);
			}
			else
			{
				$('#reserve_email_result_edit').css("display","none");
				$('#reserve_email_result_edit').css("background-color","#6F0");
				$('#reserve_email_result_edit').css("color","#000");
				$('#reserve_email_result_edit').html('');
			}
		}else{
			$('#reserve_email_result_edit').css("display","block");
			$('#reserve_email_result_edit').css("background-color","#F00");
			$('#reserve_email_result_edit').css("color","#FFF");
			$('#reserve_email_result_edit').html('该邮箱不可用！');	
		} */
		
	}
	
	
	function check_customer_name_back(data)
	{
		
		if(data>= 1)
		{
			$('#customer_name_result_edit').css("display","block");
			$('#customer_name_result_edit').css("background-color","#FF0000");
			$('#customer_name_result_edit').css("color","#FFF");
			$('#customer_name_result_edit').html('该客户名已经被使用');
		}
		else
		{
			$('#customer_name_result_edit').css("display","none");
			$('#customer_name_result_edit').css("background-color","#6F0");
			$('#customer_name_result_edit').css("color","#000");
			$('#customer_name_result_edit').html('');
		}
	}
	
	function check_company_back(data)
	{
		if(data > 1||data == 1)
		{
			$('#company_result_edit_edit').css("display","block");
			$('#company_result_edit_edit').css("background-color","#FF0000");
			$('#company_result_edit_edit').css("color","#FFF");
			$('#company_result_edit_edit').html('该公司已经被使用');
		}
		else
		{
			$('#company_result_edit_edit').css("display","none");
			$('#company_result_edit_edit').css("background-color","#6F0");
			$('#company_result_edit_edit').css("color","#000");
			$('#company_result_edit_edit').html('');
		}
	}

	//获取名字类似的公司
	function get_same_company(event){
		var company	=	$("#company").val();
		var select_list	=	$('#select_list');
		if(event.keyCode > 40 || event.keyCode == 8 || event.keyCode ==32){
			$.ajax({
				url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/quotecustomer/get_same_company',
				data:{'company':company},
				dataType:"json",
				type:"post",
				success: function(data){
					select_list.css("display","none");
					select_list.html('');
					if(data[0]!=undefined){
						var ypos = $("#company").position().top; 
						var xpos = $("#company").position().left; 
						select_list.css('width',$("#company").css('width')); 
						select_list.css({'positionuu':'relative','left':(xpos+1) + "px",'top':(ypos+22) +"px"}); 
						var li	='';
						for(var i=0;i<data.length;i++){
							li	+=	'<li style="list-style-type:none;">'+data[i].company+'</li>';
						}
						select_list.append(li);
						select_list.css("display","block");
					}
				}	
			});
		}
	}
	
	
   


</script> 
<!-- {/literal} -->