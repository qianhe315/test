<?php /* Smarty version 2.6.22, created on 2016-03-05 09:06:06
         compiled from cn_unfinishdesign/index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_unfinishdesign/index">
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
    
     <input type="hidden" name="design_code" value="<?php echo $this->_tpl_vars['design_code']; ?>
" />
    
</form>

<div class="pageHeader">
	<form rel="pagerForm" onsubmit="return navTabSearch(this);" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_unfinishdesign/index" method="get">
	<div class="searchBar">
		<ul class="searchContent">
        
			<li style="width:15%;">
				<label style="width:100px;">国内设计部人员：</label>
				<select class="combox" name="design_user">
                <option value="">全部</option>
                <?php $_from = $this->_tpl_vars['design_users']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['du']):
?>
                <option value="<?php echo $this->_tpl_vars['du']['user_id']; ?>
" <?php if ($this->_tpl_vars['du']['user_id'] == $this->_tpl_vars['design_user']): ?> selected <?php endif; ?> > <?php echo $this->_tpl_vars['du']['user_name']; ?>
 </option>
                <?php endforeach; endif; unset($_from); ?>
                </select>
			</li>
          
            <li style="width:15%;">
				<label style="width:100px;">国内销售部人员：</label>
				<select class="combox" name="salesman_id">
                <option value="">全部</option>
                <?php $_from = $this->_tpl_vars['sale_users']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['du']):
?>
                <option value="<?php echo $this->_tpl_vars['du']['user_id']; ?>
" <?php if ($this->_tpl_vars['du']['user_id'] == $this->_tpl_vars['salesman_id']): ?> selected <?php endif; ?> > <?php echo $this->_tpl_vars['du']['user_name']; ?>
 </option>
                <?php endforeach; endif; unset($_from); ?>
                </select>
			</li>
           
            <li style="width:25%;">
				<label style="width:50px;">时间：</label>
				<input type="text" name="start_time" style="width:70px;" class="date" readonly="true" value="<?php echo $this->_tpl_vars['start_time']; ?>
" />-<input type="text" name="end_time" class="date" readonly="true" style="width:70px;" value="<?php echo $this->_tpl_vars['end_time']; ?>
" />
                
			</li>
             <li style="width:20%;">
				<label style="width:70px;">设计编号：</label>
				<input type="text" name="design_code" value="<?php echo $this->_tpl_vars['design_code']; ?>
"  />
                
			</li>
             <li style="width:20%;">
				<label style="width:70px;">客户代码：</label>
				<input type="text" name="customer_code" value="<?php echo $this->_tpl_vars['customer_code']; ?>
"  />
                
			</li>
            <li style="float:right; margin-right:20px; margin-bottom:5px;"><div class="buttonActive" style="float:right;"><div style="float:right;" class="buttonContent"><button type="submit">检索</button></div></div></li>
            
		</ul>
        
	</div>
	</form>
</div>
<div class="pageContent" id="aa">
	<div class="panelBar">
		<ul class="toolBar">
        <?php if ($this->_tpl_vars['user_hidden']['group_id'] != '57' && $this->_tpl_vars['user_hidden']['group_id'] != '56'): ?>
        	<li class="line">line</li>
			<li><a class="add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_unfinishdesign/add/" target="navTab" rel="cn_unfinishdesign_change" ><span>添加设计</span></a></li>
         <?php endif; ?>
           <!-- <li><a class="add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/unfinishdesign/design/" target="navTab" rel="unfinishdesign_add" ><span>设计</span></a></li>-->
           <?php if ($this->_tpl_vars['user_hidden']['group_id'] == '56' || $this->_tpl_vars['user_hidden']['group_id'] == '5'): ?>
           <li class="line">line</li>
			<li><a title="批量分配客户？" href="#" class="edit" id="newpiliang_design"><span>批量分配设计</span></a>
                <select  name="userid" style="font-size:13px;" id="newtouid">
                  <?php $_from = $this->_tpl_vars['user_lists']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['qf']):
?>
                  <option value="<?php echo $this->_tpl_vars['qf']['user_id']; ?>
"><?php echo $this->_tpl_vars['qf']['user_name']; ?>
</option>
                  <?php endforeach; endif; unset($_from); ?>
                </select>
            </li>
           <?php endif; ?>
			<li class="line">line</li>
			
		</ul>
	</div>
	<table class="table" width="100%" layoutH="138">
		<thead>
			<tr>
				<th width="5%"><input type="checkbox" group="design_ids[]" class="checkboxCtrl"></th>
                <th width="2%">编号</th>
                <th width="8%">缩略图</th>
                <th width="8%">日期</th>
                <th width="5%">状态</th>
                <th width="5%">客户代码</th>
                <th width="12%">设计名称</th>
                <th width="12%">设计编号</th>
                <th width="5%">销售人名</th>
                <th width="5%">设计人名</th>
                <!--<th width="8%">尺寸</th>
                <th width="10%">颜色</th>-->
                <th width="12%">销售备注</th>
               
                <th width="8%">操作</th>
			</tr>
		</thead>
		<tbody>
        	<?php if ($this->_tpl_vars['stock_manage']): ?>
			 <?php $_from = $this->_tpl_vars['stock_manage']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['dis']):
?>
              <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
" style="height:100px;">
                <td><input name="design_ids[]" value="<?php echo $this->_tpl_vars['dis']['id']; ?>
" type="checkbox"></td>
                <td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
                <td style="height:100px;"><img src="<?php echo $this->_tpl_vars['dis']['upload_file']; ?>
" width="100px" height="100px" ></td>
                <td><?php echo $this->_tpl_vars['dis']['design_date']; ?>
</td>
 				<td><?php if ($this->_tpl_vars['dis']['status'] == '1'): ?>未完成<?php elseif ($this->_tpl_vars['dis']['status'] == '2'): ?>未检验<?php elseif ($this->_tpl_vars['dis']['status'] == '3'): ?>已完成<?php endif; ?></td>
                <td><?php echo $this->_tpl_vars['dis']['customer_code']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['design_name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['design_code']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['salesman_name']; ?>
</td>
                <td><?php if ($this->_tpl_vars['dis']['design_user_name'] == ''): ?><?php else: ?><?php echo $this->_tpl_vars['dis']['design_user_name']; ?>
<?php endif; ?></td>
<!--                <td><?php echo $this->_tpl_vars['dis']['size_w_inch']; ?>
*<?php echo $this->_tpl_vars['dis']['size_h_inch']; ?>
 inch</td>
                <td><?php echo $this->_tpl_vars['dis']['color']; ?>
</td>-->
                <td><p><?php if ($this->_tpl_vars['dis']['note'] != ''): ?><?php echo $this->_tpl_vars['dis']['note']; ?>
<?php else: ?><?php endif; ?></p></td>
               
                <td>
                <?php if ($this->_tpl_vars['user_hidden']['group_id'] != '57' || $this->_tpl_vars['user_hidden']['group_id'] == '5'): ?>
                     <?php if ($this->_tpl_vars['dis']['design_user_name'] == '' || $this->_tpl_vars['user_hidden']['group_id'] == '5' || $this->_tpl_vars['user_hidden']['group_id'] == '56'): ?>
                    <a title="删除吗？" target="ajaxTodo" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_unfinishdesign/del-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" class="btnDel">删除</a> 
                    <?php endif; ?>

                       <a title="编辑" target="navTab" rel="cn_unfinishdesign_change" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_unfinishdesign/edit-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" class="btnEdit">编辑</a>

                <?php endif; ?>


                <?php if ($this->_tpl_vars['dis']['design_user_name'] != ''): ?>
                <a title="设计-<?php echo $this->_tpl_vars['dis']['design_user_name']; ?>
" target="navTab" rel="cn_unfinishdesign_change_<?php echo $this->_tpl_vars['dis']['id']; ?>
" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_unfinishdesign/design_list-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" class="btnAdd" fresh="true" >设计<?php echo $this->_tpl_vars['dis']['design_user_name']; ?>
</a>
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
<!-- {literal} --> 
<script language="javascript">
$(document).ready(function()
{	
	//var check_arr = [];
	$("#newpiliang_design").click(function (){
			var touid = $("#newtouid").val();
			var check_arr = '';
			$("input[name='design_ids[]']:checkbox:checked").each(function(){ //由于复选框一般选中的是多个,所以可以循环输出
				if(check_arr == ''){
					check_arr += $(this).val();
				}else{
					check_arr += ','+$(this).val();
				}
			});	
			
			var p = 'check_arr-'+check_arr+'-touid-'+touid+'.html';
			
			if(check_arr ==''){
				alert('必须选择设计');
			}else{
				$.ajax({
					url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cn_unfinishdesign/change_to_other_user-'+p,
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
				//$("#aa").html(data);//要刷新的div
				//location.replace(document.referrer);
				//$("#dialog").css("display","none");
				//alert("成功，请手动刷新该页面");
				//window.location = "<?php echo $this->_tpl_vars['__ROOT__']; ?>
/#newcustomer";
			}
		}
</script>
<!-- {/literal} --> 