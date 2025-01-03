<?php /* Smarty version 2.6.22, created on 2024-08-27 13:42:22
         compiled from inquiry_content/index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/inquiry_content/index">
	<input type="hidden" name="pageNum" value="1" />
	<input type="hidden" name="numPerPage" value="<?php echo $this->_tpl_vars['listRows']; ?>
" />
	<input type="hidden" name="orderField" value="group_id" />
	<input type="hidden" name="orderDirection" value="desc" />
    
    <input type="hidden" name="discount_name" value="<?php echo $this->_tpl_vars['discount_name']; ?>
" />
    
</form>

<div class="pageHeader">
	<form rel="pagerForm" onsubmit="return navTabSearch(this);" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/inquiry_content/index" method="get">
	<div class="searchBar">
		<ul class="searchContent">
        
        
        
        <?php if ($this->_tpl_vars['user_hidden']['group_id'] == '68' || $this->_tpl_vars['user_hidden']['group_id'] == '50' || $this->_tpl_vars['user_hidden']['group_id'] == '5'): ?>
        
			<li>
				<label style="width:60px;">业务员：</label>
				<select class="combox" name="sale_user">
                <option value="">全部</option>
                <?php $_from = $this->_tpl_vars['sale_users']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['du']):
?>
                     <option value="<?php echo $this->_tpl_vars['du']['user_name']; ?>
" <?php if ($this->_tpl_vars['du']['user_name'] == $this->_tpl_vars['sale_user']): ?> selected <?php endif; ?> > <?php echo $this->_tpl_vars['du']['user_name']; ?>
 </option>
                <?php endforeach; endif; unset($_from); ?>
                </select>
			</li>
          
        <?php endif; ?> 
          
          
        	<li>
                <label style="width:40px;">时间：</label>
                <input type="text" name="start_time" value="<?php echo $this->_tpl_vars['start_time']; ?>
"  class="date" readonly style="width:70px;" />-<input type="text" name="end_time" value="<?php echo $this->_tpl_vars['end_time']; ?>
"  class="date" readonly style="width:70px;"/>
            </li>
            <li style="width: 18%;">
                <label style="width:60px;">询盘方式：</label>
                <select class="combox" name="project_name">
                <option value="" >全部</option>
                <?php $_from = $this->_tpl_vars['quotecategory2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['dis']):
?>
                    <?php if ($this->_tpl_vars['quote_way'] == $this->_tpl_vars['dis']['project_name']): ?>
                       <option selected="selected" value="<?php echo $this->_tpl_vars['dis']['project_name']; ?>
" ><?php echo $this->_tpl_vars['dis']['project_name']; ?>
</option>
                    <?php else: ?>
                       <option value="<?php echo $this->_tpl_vars['dis']['project_name']; ?>
" ><?php echo $this->_tpl_vars['dis']['project_name']; ?>
</option>
                    <?php endif; ?>   
                <?php endforeach; endif; unset($_from); ?>   
                </select>
            </li>
            <li>
                <label style="width:40px;">来自：</label>
                <select class="combox" name="sources">
                <option value="" >全部</option>
                <?php $_from = $this->_tpl_vars['sources']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['dis']):
?>
                    <?php if ($this->_tpl_vars['sources_way'] == $this->_tpl_vars['dis']['id']): ?>
                       <option selected="selected" value="<?php echo $this->_tpl_vars['dis']['id']; ?>
" ><?php echo $this->_tpl_vars['dis']['sources_name']; ?>
</option>
                    <?php else: ?>
                       <option value="<?php echo $this->_tpl_vars['dis']['id']; ?>
" ><?php echo $this->_tpl_vars['dis']['sources_name']; ?>
</option>
                    <?php endif; ?>   
                <?php endforeach; endif; unset($_from); ?>                 
                </select>
            </li>
            <li>
            	<label style="width:60px;">回复状态：</label>
                <select class="combox" name="sendstatus">
                    <?php if ($this->_tpl_vars['sendstatus'] == '1'): ?>
                    <option value="" >全部</option>
                       <option selected="selected" value="1" >1小时内</option>
                       <option value="2" >8小时内</option>
                       <option value="3" >24小时内</option>
                       <option value="4" >24小时外</option>
                     <?php elseif ($this->_tpl_vars['sendstatus'] == '2'): ?>
                    <option value="" >全部</option>
                       <option value="1" >1小时内</option>
                       <option selected="selected" value="2" >8小时内</option>
                       <option value="3" >24小时内</option>
                       <option value="4" >24小时外</option>
                       <?php elseif ($this->_tpl_vars['sendstatus'] == '3'): ?>
                    <option value="" >全部</option>
                       <option value="1" >1小时内</option>
                       <option value="2" >8小时内</option>
                       <option selected="selected" value="3" >24小时内</option>
                       <option value="4" >24小时外</option>
                       <?php elseif ($this->_tpl_vars['sendstatus'] == '4'): ?>
                    <option value="" >全部</option>
                       <option value="1" >1小时内</option>
                       <option value="2" >8小时内</option>
                       <option value="3" >24小时内</option>
                       <option selected="selected" value="4" >24小时外</option>
                    <?php else: ?>   
                        <option value="" >全部</option>
                       <option value="1" >1小时内</option>
                       <option value="2" >8小时内</option>
                       <option value="3" >24小时内</option>
                       <option value="4" >24小时外</option>                      
                    <?php endif; ?>     
                </select>
				<label style="width:60px;">反馈状态：</label>
                <select class="combox" name="status">
                    <?php if ($this->_tpl_vars['status'] == '1'): ?>
                    <option value="" >全部</option>
                       <option selected="selected" value="1" >未回复</option>
                       <option value="2" >发送失败</option>
                       <option value="3" >已回复</option>
                       <option value="4" >已反馈</option>
                    <?php elseif ($this->_tpl_vars['status'] == '2'): ?>
                    <option value="" >全部</option>
                       <option value="1" >未回复</option>
                       <option selected="selected" value="2" >发送失败</option>
                       <option value="3" >已回复</option>
                       <option value="4" >已反馈</option>
                    <?php elseif ($this->_tpl_vars['status'] == '3'): ?>
                    <option value="" >全部</option>
                       <option value="1" >未回复</option>
                       <option value="2" >发送失败</option>
                       <option selected="selected" value="3" >已回复</option>
                       <option value="4" >已反馈</option>
                     <?php elseif ($this->_tpl_vars['status'] == '4'): ?>
                    <option value="" >全部</option>
                       <option value="1" >未回复</option>
                       <option value="2" >发送失败</option>
                       <option value="3" >已回复</option>
                       <option selected="selected" value="4" >已反馈</option>
                    <?php else: ?>   
                        <option value="" >全部</option>
                       <option value="1" >未回复</option>
                       <option value="2" >发送失败</option>
                       <option value="3" >已回复</option>
                       <option value="4" >已反馈</option>                        
                    <?php endif; ?>     
                </select>
                
			</li> 
			<li>
				<label style="width:50px;">客户名：</label>
				<input type="text" name="name" value="<?php echo $this->_tpl_vars['name']; ?>
" style="width:100px;"/>
			</li>
            <li>
				<label style="width:60px;">客户代码：</label>
				<input type="text" name="customer_code" value="<?php echo $this->_tpl_vars['customer_code']; ?>
" style="width:100px;" />
			</li>
            <li>
				<label style="width:40px;">公司：</label>
				<input type="text" name="company" value="<?php echo $this->_tpl_vars['company']; ?>
" style="width:100px;" />
			</li>
            <li>
				<label style="width:40px;">邮箱：</label>
				<input type="text" name="email" value="<?php echo $this->_tpl_vars['email']; ?>
" style="width:100px;" />
			</li>
            <li>
				<label style="width:40px;">电话：</label>
				<input type="text" name="telephone" value="<?php echo $this->_tpl_vars['telephone']; ?>
" style="width:100px;" />
			</li>
                                   
            <li style="float:right;"><div class="buttonActive" style="float:right;"><div style="float:right;" class="buttonContent"><button type="submit">检索</button></div></div></li>
		</ul>

	</div>
	</form>
</div>
<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
              <li>
              <a title="批量修改客户状态？" href="#" class="edit" id="customer_newpiliang"><span>修改询盘状态</span></a>
                <select name="customer_newtouid" style="font-size:13px;" id="customer_newtouid_new">
                  <option value="1">未处理</option>
                  <option value="2">已处理</option>
                  
                </select>
              </li>				
		<li class="line">line</li>
		<?php if ($this->_tpl_vars['user_hidden']['group_id'] == '5'): ?>
	    	<li><a class="add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/web_inquiries_into/delete_web/" target="selectedTodo" id="del" rel="group_ids_i_c[]" postType="string" title="确定加入回收站?"><span>加入回收站</span></a></li>				
		<li class="line">line</li>
        	<li><a class="edit" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/web_inquiries_into/recycle/" target="navTab" rel="return_delete"><span>查看回收站</span></a></li>
        <?php elseif ($this->_tpl_vars['user_hidden']['user_id'] == '117'): ?>
        	<li><a class="edit" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/web_inquiries_into/recycle/" target="navTab" rel="return_delete"><span>查看回收站</span></a></li>
        <?php endif; ?>
		</ul>
	</div>
	<table class="table" width="100%" layoutH="138">
		<thead>
			<tr>
				<th width="1%"><input type="checkbox" group="group_ids_i_c[]" class="checkboxCtrl"></th>
                <th width="2%">编号</th>
                <th width="7%">询盘时间</th>
                <th width="7%">回复时间</th>
                <th width="3%">业务员</th>
                <th width="3%">缩略图</th>
                <th width="4%">询盘方式</th>
                <th width="4%">询盘方式细分</th>
                <th width="4%">来自</th>
                <th width="3%">广告系列</th>
                <th width="3%">广告组</th>
                <th width="3%">关键词</th>
                <th width="3%">匹配方式</th>
                <th width="3%">回复状态</th>
                <th width="3%">反馈状态</th>
                <?php if ($this->_tpl_vars['user_hidden']['user_id'] != '113'): ?>
                <th width="6%">客户名</th>                
                <th width="8%">公司</th>
                <th width="8%">邮箱</th>
                <th width="5%">电话</th>  
                 <?php endif; ?>               
                <th width="3%">客户代码</th>
                <th width="3%">业务类型</th>
                <?php if ($this->_tpl_vars['user_hidden']['user_id'] != '113'): ?>
                <th width="2%">操作</th>
                 <?php endif; ?>  
			</tr>
		</thead>
		<tbody>
        <?php if ($this->_tpl_vars['web_quote_list']): ?>
			 <?php $_from = $this->_tpl_vars['web_quote_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['dis']):
?>
              <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
">
                <td><input name="group_ids_i_c[]" id="c_id" value="<?php echo $this->_tpl_vars['dis']['id']; ?>
" type="checkbox"></td>
                <td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['time']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['send_email_time']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['user_name']; ?>
</td>
                <td>
                <?php if ($this->_tpl_vars['dis']['image'] != ""): ?>
                   <?php if (strpos ( $this->_tpl_vars['dis']['image'] , 'ttps:' )): ?>
                  	 <a target="_blank" href="<?php echo $this->_tpl_vars['dis']['image']; ?>
">图片地址</a>
                   <?php else: ?>
                  	 <a target="_blank" href="https://www.cstown.com/<?php echo $this->_tpl_vars['dis']['image']; ?>
">图片地址</a>
                   <?php endif; ?>
                <?php else: ?>   
                   无
                <?php endif; ?>
                </td>
 				<td><?php echo $this->_tpl_vars['dis']['quotecategory_name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['project_name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['sources_name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['campaign']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['adgroup']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['keyword']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['criteriontype']; ?>
</td>
                <td>
                 <?php echo $this->_tpl_vars['dis']['send_email_status']; ?>

                 
                </td>
                <td>
                 <?php if ($this->_tpl_vars['dis']['feedback_state'] == '2'): ?>
                    发送失败
                <?php elseif ($this->_tpl_vars['dis']['feedback_state'] == '1'): ?>
                    未回复
				<?php elseif ($this->_tpl_vars['dis']['feedback_state'] == '3'): ?>
                    已回复
				<?php elseif ($this->_tpl_vars['dis']['feedback_state'] == '4'): ?>
                    已反馈
                <?php else: ?>
                    
                <?php endif; ?>
                </td>
                <?php if ($this->_tpl_vars['user_hidden']['user_id'] != '113'): ?>
                <td><?php echo $this->_tpl_vars['dis']['name']; ?>
</td>
                               
                <td><?php echo $this->_tpl_vars['dis']['company']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['email']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['telephone']; ?>
</td>
                <?php endif; ?>
                <td><?php echo $this->_tpl_vars['dis']['customer_code']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['business_type']; ?>
</td>
                <?php if ($this->_tpl_vars['user_hidden']['user_id'] != '113'): ?>
                <td><a title="询盘内容" target="navTab" rel="stock_manage_edit" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/web_inquiries_into/view-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" class="btnEdit">编辑</a>

                </td>   
                <?php endif; ?>             
              </tr>

            <?php endforeach; endif; unset($_from); ?>
            <?php endif; ?>                     
		</tbody>
	</table>
	<div class="panelBar">
		<div class="pages">
			<span>显示</span>
			<select class="combox" name="numPerPage" onchange="navTabPageBreak({numPerPage:this.value})">
            <?php if ($this->_tpl_vars['listRows'] == 50): ?>
				<option value="50" selected="selected">50</option>
				<option value="100">100</option>
				<option value="200">200</option>
                <option value="<?php echo $this->_tpl_vars['total_count']; ?>
"><?php echo $this->_tpl_vars['total_count']; ?>
</option>
            <?php elseif ($this->_tpl_vars['listRows'] == 100): ?>
            	<option value="50">50</option>
				<option value="100" selected="selected">100</option>
				<option value="200">200</option>
                <option value="<?php echo $this->_tpl_vars['total_count']; ?>
"><?php echo $this->_tpl_vars['total_count']; ?>
</option>
			
            <?php elseif ($this->_tpl_vars['listRows'] == 200): ?>
            	<option value="50">50</option>
				<option value="100">100</option>
				<option value="200" selected="selected">200</option>
                <option value="<?php echo $this->_tpl_vars['total_count']; ?>
"><?php echo $this->_tpl_vars['total_count']; ?>
</option>
            <?php elseif ($this->_tpl_vars['listRows'] == $this->_tpl_vars['total_count']): ?>
            	<option value="50">50</option>
				<option value="100">100</option>
				<option value="200">200</option>
                <option value="<?php echo $this->_tpl_vars['total_count']; ?>
" selected="selected"><?php echo $this->_tpl_vars['total_count']; ?>
</option>
            <?php endif; ?>
            </select>
			<span>共<?php echo $this->_tpl_vars['total_count']; ?>
条</span>
		</div>
		
		<div class="pagination" targetType="navTab" totalCount="<?php echo $this->_tpl_vars['total_count']; ?>
" numPerPage="<?php echo $this->_tpl_vars['listRows']; ?>
" pageNumShown="10" currentPage="<?php echo $this->_tpl_vars['current_page']; ?>
"></div>

	</div>
</div>
<script language="javascript">
$("#quoteex").click(function (){
		if($("input[type='checkbox']").is(":checked")){
			alert("即将导出选中数据");
			$("#quoteexport").submit();
		}else{
			alert("请选择导出的数据");
		}
	});
$(document).ready(function()
{	
	//var check_arr = [];
	$("#customer_newpiliang").click(function (){
			var touid = $("#customer_newtouid_new").val();
			
			var check_arr = '';
			$("input[name='group_ids_i_c[]']:checkbox:checked").each(function(){ //由于复选框一般选中的是多个,所以可以循环输出
				if(check_arr == ''){
					check_arr += $(this).val();
				}else{
					check_arr += ','+$(this).val();
				}
			});	
			
			var p = 'check_arr-'+check_arr+'-touid-'+touid+'.html';

			if(check_arr ==''){
				alert('必须选择客户');
			}else{
				$.ajax({
					url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/inquiry_content/change_to_other_user-'+p,
					type:'get', 
					dataType:'json',
					data:p,
					success:check_back
				});
/*				$("#check_arr").val(check_arr);
				$("#touids").val(touid);
				$("#ctou").submit();*/
			}
			
		});
		
});
function check_back(data)
		{
			if(data.error==1)
			{
				//$("#dialog").css("display","none");
				alert("失败");
			}
			else
			{
				navTabPageBreak();
				//$("#dialog").css("display","none");
				//alert("成功，请手动刷新该页面");
				//window.location = "<?php echo $this->_tpl_vars['__ROOT__']; ?>
/#newcustomer";
			}
		}
</script>