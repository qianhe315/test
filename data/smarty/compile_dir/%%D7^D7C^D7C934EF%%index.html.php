<?php /* Smarty version 2.6.22, created on 2015-11-27 10:58:55
         compiled from template_price/index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/template_price/index">
	<input type="hidden" name="pageNum" value="1" />
	<input type="hidden" name="numPerPage" value="<?php echo $this->_tpl_vars['listRows']; ?>
" />
	<input type="hidden" name="orderField" value="group_id" />
	<input type="hidden" name="orderDirection" value="desc" />
    
    <input type="hidden" name="customer_name" value="<?php echo $this->_tpl_vars['customer_name']; ?>
" />
    <input type="hidden" name="email" value="<?php echo $this->_tpl_vars['email']; ?>
" />
    <input type="hidden" name="company" value="<?php echo $this->_tpl_vars['company']; ?>
" />
    <input type="hidden" name="start_time" value="<?php echo $this->_tpl_vars['start_time']; ?>
" />
    <input type="hidden" name="end_time" value="<?php echo $this->_tpl_vars['end_time']; ?>
" />
    <input type="hidden" name="sale_user_id" value="<?php echo $this->_tpl_vars['sale_user_id']; ?>
" />
</form>

<div class="pageHeader">
	<form rel="pagerForm" onSubmit="return navTabSearch(this);" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/template_price/index" method="get">
	<div class="searchBar">
		<ul class="searchContent">
			<li></li>
		</ul>
		<!--
		<table class="searchContent">
			<tr>
				<td>
					我的客户：<input type="text"/>
				</td>
				<td>
					<select class="combox" name="province">
						<option value="">所有省市</option>
						<option value="北京">北京</option>
						<option value="上海">上海</option>
						<option value="天津">天津</option>
						<option value="重庆">重庆</option>
						<option value="广东">广东</option>
					</select>
				</td>
			</tr>
		</table>
		-->
		<div class="subBar">
			<ul>
				<li></li>
			</ul>
		</div>
	</div>
	</form>
</div>
<form action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/template_price/xls_export" method="post" id="quoteexport">
<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
        <li class="line">line</li>
        <li><a class="add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/template_price/add/" target="navTab" rel="add"><span>添加</span></a></li>	
        <li class="line">line</li>
		</ul>
	</div>
   <div id="w_list_print" style="background-color:#FFF;">
	<table class="list" asc="asc" desc="desc" width="98%" layoutH="138">
		<thead>
        	<tr>
            	<th colspan="5">&nbsp;</th>
                <th colspan="3">第一个</th>
                <th colspan="3">第二个</th>
                <th colspan="3">第三个</th>
                <th colspan="3">第四个</th>
                <th colspan="4">第五个</th>
            </tr>
			<tr>
				<th width="2%"><input type="checkbox" group="template_price_ids[]" class="checkboxCtrl" id="check_all"  ></th>
                <th width="2%">编号</th>
                <th width="6%">时间</th>
                <th width="7%">大于面积(英寸)</th>
                <th width="8%">小于等于面积(英寸)</th>
                <th width="4%">美元</th>                
                <th width="4%">欧元</th>
                <th width="4%">人民币</th>
                <th width="4%">美元</th>
                <th width="4%">欧元</th>
                <th width="4%">人民币</th> 
                <th width="4%">美元</th>            
                <th width="4%">欧元</th>
                <th width="4%">人民币</th>
                <th width="4%">美元</th>            
                <th width="4%">欧元</th>
                <th width="4%">人民币</th>
                <th width="4%">美元</th>            
                <th width="4%">欧元</th>
                <th width="4%">人民币</th>
                <th width="5%">操作</th>
			</tr>
		</thead>
		<tbody>
        <?php if ($this->_tpl_vars['template_price']): ?>
			 <?php $_from = $this->_tpl_vars['template_price']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['tp']):
?>
             
              <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
">
                <td><input name="template_price_ids[]" value="<?php echo $this->_tpl_vars['tp']['id']; ?>
" type="checkbox" ></td>
                <td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
                <td><?php echo $this->_tpl_vars['tp']['insert_time']; ?>
</td>
                <td><?php echo $this->_tpl_vars['tp']['big_area']; ?>
</td>
                <td><?php echo $this->_tpl_vars['tp']['small_area']; ?>
</td>
                <td><?php echo $this->_tpl_vars['tp']['us1']; ?>
</td>
                <td><?php echo $this->_tpl_vars['tp']['eu1']; ?>
</td>
                <td><?php echo $this->_tpl_vars['tp']['rmb1']; ?>
</td>                
                <td><?php echo $this->_tpl_vars['tp']['us2']; ?>
</td>
                <td><?php echo $this->_tpl_vars['tp']['eu2']; ?>
</td>
                <td><?php echo $this->_tpl_vars['tp']['rmb2']; ?>
</td>             
                <td><?php echo $this->_tpl_vars['tp']['us3']; ?>
</td>
                <td><?php echo $this->_tpl_vars['tp']['eu3']; ?>
</td>
                <td><?php echo $this->_tpl_vars['tp']['rmb3']; ?>
</td>
                <td><?php echo $this->_tpl_vars['tp']['us4']; ?>
</td>
                <td><?php echo $this->_tpl_vars['tp']['eu4']; ?>
</td>
                <td><?php echo $this->_tpl_vars['tp']['rmb4']; ?>
</td>
                <td><?php echo $this->_tpl_vars['tp']['us5']; ?>
</td>
                <td><?php echo $this->_tpl_vars['tp']['eu5']; ?>
</td>
                <td><?php echo $this->_tpl_vars['tp']['rmb5']; ?>
</td>
                
                <td>
                
                <a title="删除吗？" target="ajaxTodo" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/template_price/del-id-<?php echo $this->_tpl_vars['tp']['id']; ?>
.html" class="btnDel">删除</a>

                <a title="编辑" target="navTab" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/template_price/edit-id-<?php echo $this->_tpl_vars['tp']['id']; ?>
.html" class="btnEdit" rel="add">编辑</a>

                </td>
                
              </tr>
            
             <?php endforeach; endif; unset($_from); ?>
             <?php endif; ?>
		</tbody>
	</table>
    </div>
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
</form>    

<!-- {literal} -->
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
	$("#newpiliang").click(function (){
			var touid = $("#newtouid_new").val();
			var check_arr = '';
			$("input[name='customer_ids[]']:checkbox:checked").each(function(){ //由于复选框一般选中的是多个,所以可以循环输出
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
/newcustomer/change_to_other_user-'+p,
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
			if(data==1)
			{
				//$("#dialog").css("display","none");
				alert("失败");
			}
			else
			{
				
				//$("#dialog").css("display","none");
				navTabPageBreak();
				//window.location = "<?php echo $this->_tpl_vars['__ROOT__']; ?>
/#newcustomer";
			}
		}
</script>
<!-- {/literal} -->