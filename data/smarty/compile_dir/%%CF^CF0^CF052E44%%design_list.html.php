<?php /* Smarty version 2.6.22, created on 2024-10-24 13:47:18
         compiled from finishdesign/design_list.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/uncheckdesign/design_list">
	<input type="hidden" name="pageNum" value="1" />
	<input type="hidden" name="numPerPage" value="<?php echo $this->_tpl_vars['listRows']; ?>
" />
	<input type="hidden" name="orderField" value="group_id" />
	<input type="hidden" name="orderDirection" value="desc" />
    
    <input type="hidden" name="design_user" value="<?php echo $this->_tpl_vars['design_user']; ?>
" />
    <input type="hidden" name="salesman_id" value="<?php echo $this->_tpl_vars['salesman_id']; ?>
" />
    <input type="hidden" name="start_time" value="<?php echo $this->_tpl_vars['start_time']; ?>
" />
    <input type="hidden" name="end_time" value="<?php echo $this->_tpl_vars['end_time']; ?>
" />
    
</form>

<div class="pageHeader">
	<form rel="pagerForm" onsubmit="return navTabSearch(this);" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/uncheckdesign/design_list" method="get">
	<div class="searchBar">
		<ul class="searchContent">
			
            
		</ul>
		
		<div class="subBar">
	
		</div>
        <div class="subBar">
	
		</div>
	</div>
	</form>
</div>

<div class="pageContent">

	<div class="panelBar">
		<?php if ($this->_tpl_vars['design']['design_user_name'] == $this->_tpl_vars['user_info']['user_name']): ?>
			<ul class="toolBar">
				<li><a class="add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/unfinishdesign/design_content_add-design_id-<?php echo $this->_tpl_vars['design_id']; ?>
-design_content_count-<?php echo $this->_tpl_vars['design_content_count']; ?>
.html" target="navTab" rel="design_content_edit" ><span>添加版图</span></a></li>
				<li class="line">line</li>
				<?php if ($this->_tpl_vars['reviewed'] == 1): ?>
				<li><a class="icon" id="design_pdf"><span>导出设计单</span></a></li>
				<li class="line">line</li>
				<?php endif; ?>
			</ul>
		<?php else: ?>
			<?php if ($this->_tpl_vars['all_design'] != 1): ?>
			<ul class="toolBar">
				<?php if ($this->_tpl_vars['reviewed'] == 1): ?>
				<li><a class="icon" id="design_pdf"><span>导出设计单</span></a></li>
				<li class="line">line</li>
				<?php endif; ?>

				<li>
					<input type="hidden" id="design_id" value="<?php echo $this->_tpl_vars['design_id']; ?>
">
					<input type="hidden" id="customer_code" value="<?php echo $this->_tpl_vars['design']['customer_code']; ?>
">
					<input type="hidden" id="design_content_code" value="<?php echo $this->_tpl_vars['design_content_code']; ?>
">
					<input type="hidden" id="add_content" value="1">
					<input type="text" style="width:400px;" id="design_content_verify_note"><input type="button" id="button" value="加版返回">
				</li>
				<li class="line">line</li>
				<?php if ($this->_tpl_vars['design']['design_category'] == 3): ?>
				<li>
					<?php if ($this->_tpl_vars['is_paid'] == 1): ?>
					<a  target="navTab" rel="design_content_edit" class="icon" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/unfinishdesign/design_content_add-flag-1-design_id-<?php echo $this->_tpl_vars['design_id']; ?>
"><span>换色加版</span></a>
					<?php else: ?>
					<a  target="navTab" rel="design_content_edit" class="icon" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/unfinishdesign/design_content_add-flag-2-design_id-<?php echo $this->_tpl_vars['design_id']; ?>
"><span>换色加版</span></a>
					<?php endif; ?>
				</li>
				<li class="line">line</li>
				<?php endif; ?>
			</ul>
			<script>
				$("#button").click(function (){
					var design_content_code = $("#design_content_code").val();
					var design_content_verify_note = $("#design_content_verify_note").val();
					var design_id = $("#design_id").val();
					var add_content = $("#add_content").val();
					var customer_code = $("#customer_code").val();

					$.ajax({
						url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/unfinishdesign/act_design_content_add',
						type:'post',
						data:{customer_code:customer_code,add_content:add_content,design_id:design_id,design_content_verify_note:design_content_verify_note,design_content_code:design_content_code},
						dataType:'json',
						success:function(data){
							navTabAjaxDone(data);
						}
					});
				});
			</script>
			<?php endif; ?>
		<?php endif; ?>
	</div>

	<table class="table" width="100%" layoutH="138">
		<thead>
			<tr>
				<th width="1%"><input type="checkbox" group="group_ids_dc[]" class="checkboxCtrl"></th>
                <th width="2%">编号</th>
                <th width="8%">缩略图</th>
                <th width="4%">客户代码</th>
                <th width="5%">设计审核状态</th>
                <th width="5%">业务审核状态</th>
                <th width="8%">版图编号</th>
                <th width="10%">材料</th>
                <th width="10%">颜色</th>
                <th width="10%">尺寸</th>
                <th width="8%">设计备注</th>
                <th width="5%">检验备注</th>
                <th width="8%">销售评语</th>
                <!--<th width="5%">邮件状态</th>
                <th width="12%">邮件发送时间</th>-->
                <th width="5%">订单状态</th>
                <th width="5%">钻版上传人</th>
                <?php if ($this->_tpl_vars['is_paid'] == 1): ?>
                <th width="5%">付款状态</th>
                <?php endif; ?>
                <th width="5%">操作</th>
			</tr>
		</thead>
		<tbody>
			<?php if ($this->_tpl_vars['stock_manage']): ?>
			 <?php $_from = $this->_tpl_vars['stock_manage']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['dis']):
?>
              <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
" style="height:100px;">
                <td><input name="group_ids_dc[]" value="<?php echo $this->_tpl_vars['dis']['id']; ?>
" type="checkbox"></td>
                <td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
                <td style="height:100px;"><img src="<?php echo $this->_tpl_vars['dis']['upload_jpg']; ?>
" width="100px" height="100px" ></td>
                <td><?php echo $this->_tpl_vars['dis']['customer_code']; ?>
</td>
                <td>
 					<?php if ($this->_tpl_vars['dis']['status'] == 1): ?>
 						设计中
 					<?php elseif ($this->_tpl_vars['dis']['status'] == 2): ?>
 						待审核
 					<?php elseif ($this->_tpl_vars['dis']['status'] == 3): ?>
 						修改
 					<?php elseif ($this->_tpl_vars['dis']['status'] == 4): ?>
 						审核通过
 					<?php endif; ?>
                </td>
                <td>
                	<?php if ($this->_tpl_vars['dis']['check_status'] == 2): ?>
 						废弃
                	<?php elseif ($this->_tpl_vars['dis']['saleman_check_status'] == 4): ?>
 						审核通过
 					<?php endif; ?>
                </td>
 				<td><?php echo $this->_tpl_vars['dis']['design_content_code']; ?>
</td>
 				
                <td><?php echo $this->_tpl_vars['dis']['materials']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['color']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['sizes']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['design_note']; ?>
</td>
              <td><?php echo $this->_tpl_vars['dis']['design_content_verify_note']; ?>
</td>
              <td><?php echo $this->_tpl_vars['dis']['sales_comments']; ?>
</td>
              <!--<td><?php if ($this->_tpl_vars['dis']['email_status'] == 1): ?>发送成功<?php elseif ($this->_tpl_vars['dis']['email_status'] == ''): ?>未发送<?php else: ?>发送失败<?php endif; ?></td>
              <td><?php echo $this->_tpl_vars['dis']['check_time']; ?>
</td>-->
              <td><?php echo $this->_tpl_vars['dis']['order_status']; ?>
</td>
              <td><?php echo $this->_tpl_vars['dis']['upload_design_user_name']; ?>
</td>
              
              <?php if ($this->_tpl_vars['is_paid'] == 1): ?>
              <td><?php if ($this->_tpl_vars['dis']['is_paid'] == 1): ?>已付款<?php endif; ?></td>
              <?php endif; ?>
              
              <td>
				  <?php if ($this->_tpl_vars['dis']['group_id'] == 53): ?>
              <a title="删除吗？" target="ajaxTodo" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/unfinishdesign/del_design_content-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" class="btnDel">删除</a>
				  <?php endif; ?>
               <?php if ($this->_tpl_vars['dis']['upload_design_user_name'] == ''): ?>
				  <?php if ($this->_tpl_vars['all_design'] == 1): ?>
				  <a title="编辑" target="navTab" rel="design_content_edit" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/finishdesign/edit_design_content-all_design-1-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
-design_id-<?php echo $this->_tpl_vars['design_id']; ?>
.html" class="btnEdit">查看</a>
				  <?php else: ?>
				  <a title="编辑" target="navTab" rel="design_content_edit" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/finishdesign/edit_design_content-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
-design_id-<?php echo $this->_tpl_vars['design_id']; ?>
-reviewed-<?php echo $this->_tpl_vars['reviewed']; ?>
.html" class="btnEdit">编辑</a>
				  <?php endif; ?>
                <?php else: ?>
                    <a title="下载" target="_blank" rel="design_content_add" href=".<?php echo $this->_tpl_vars['dis']['upload_cdr']; ?>
" class="btnAttach">下载</a>
                <?php endif; ?>

              </td>
              </tr>
              
             <?php endforeach; endif; unset($_from); ?>
			<?php endif; ?>
		</tbody>
	</table>
	<div class="panelBar">
		<div class="pages">
			
			<span>共<?php echo $this->_tpl_vars['total_count']; ?>
条</span>
		</div>
		
		<div class="pagination" targetType="navTab" totalCount="<?php echo $this->_tpl_vars['total_count']; ?>
" numPerPage="<?php echo $this->_tpl_vars['listRows']; ?>
" pageNumShown="10" currentPage="<?php echo $this->_tpl_vars['current_page']; ?>
"></div>

	</div>
</div>

<script type="text/javascript" language="javascript">
$(document).ready(function()
{

	$("#design_pdf").click(function (){
		if($("input[type='checkbox']").is(":checked")){
			var check_arr = '';
			
			$("input[name='group_ids_dc[]']:checkbox:checked").each(function(){ //由于复选框一般选中的是多个,所以可以循环输出
			
				if(check_arr == ''){
					check_arr += $(this).val();
				}else{
					check_arr += '|'+$(this).val();
				}
			});
			
			
			var p = 'design_id-<?php echo $this->_tpl_vars['design_id']; ?>
-group_ids-'+check_arr+'-pdf_btn-1.html';
			window.open('<?php echo $this->_tpl_vars['__ROOT__']; ?>
/finishdesign/design_sheet_pdf-'+p);
			
		}else{
			alert("请选择版图");
		}
	});
});
</script>