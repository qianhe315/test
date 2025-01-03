<?php /* Smarty version 2.6.22, created on 2015-12-10 16:45:27
         compiled from six_quotation/index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/six_quotation/index">
	<input type="hidden" name="pageNum" value="1" />
	<input type="hidden" name="numPerPage" value="<?php echo $this->_tpl_vars['listRows']; ?>
" />
	<input type="hidden" name="orderField" value="group_id" />
	<input type="hidden" name="orderDirection" value="desc" />
    
    <input type="hidden" name="stock_code" value="<?php echo $this->_tpl_vars['stock_code']; ?>
" />
     <input type="hidden" name="ids" value="222" />
    
</form>
<div class="pageHeader">
	<form rel="pagerForm" onsubmit="return navTabSearch(this);" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/six_quotation/index" method="get">
	<div class="searchBar">
		<ul class="searchContent">
        <?php if ($this->_tpl_vars['user_hidden']['group_id'] != '53' || $this->_tpl_vars['user_hidden']['group_id'] != '68'): ?>
            <li style="width:15%;">
				<label style="width:50px;">业务员：</label>
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
            <li style="width:25%;">
				<label style="width:60px">时间：</label>
				<input type="text" name="time_start" value="<?php echo $this->_tpl_vars['time_start']; ?>
" class="date" readonly="true" style="width:70px"/>-<input type="text" name="time_end" style="width:70px" value="<?php echo $this->_tpl_vars['time_end']; ?>
" class="date" readonly="true"/>
                
			</li>
            <li style="width:20%;">
				<label style="width:60px;">设计属性：</label>
				<select class="combox" name="quotation_status">
                <option value="">全部</option>
              	<option value="1" <?php if ($this->_tpl_vars['quotation_status'] == '1'): ?>selected="selected"<?php endif; ?>>无设计</option>
                <option value="2" <?php if ($this->_tpl_vars['quotation_status'] == '2'): ?>selected="selected"<?php endif; ?>>有设计</option>
                </select>
			</li>
            <li style="width:20%;">
				<label style="width:60px;">系数状态：</label>
				<select class="combox" name="ratio_status">
                <option value="">全部</option>
              	<option value="0" <?php if ($this->_tpl_vars['ratio_status'] == '0'): ?>selected="selected"<?php endif; ?>>无需审核</option>
                <option value="1" <?php if ($this->_tpl_vars['ratio_status'] == '1'): ?>selected="selected"<?php endif; ?>>未审核</option>
                <option value="2" <?php if ($this->_tpl_vars['ratio_status'] == '2'): ?>selected="selected"<?php endif; ?>>审核通过</option>
                <option value="3" <?php if ($this->_tpl_vars['ratio_status'] == '3'): ?>selected="selected"<?php endif; ?>>驳回</option>
                </select>
			</li>
            <li style="width:20%;">
				<label style="width:70px;">备损申请：</label>
				<select class="combox" name="loss_status">
                <option value="">全部</option>
              	<option value="0" <?php if ($this->_tpl_vars['loss_status'] == '0'): ?>selected="selected"<?php endif; ?>>无需审核</option>
                <option value="1" <?php if ($this->_tpl_vars['loss_status'] == '1'): ?>selected="selected"<?php endif; ?>>未审核</option>
                <option value="2" <?php if ($this->_tpl_vars['loss_status'] == '2'): ?>selected="selected"<?php endif; ?>>审核通过</option>
                <option value="3" <?php if ($this->_tpl_vars['loss_status'] == '3'): ?>selected="selected"<?php endif; ?>>驳回</option>
                </select>
			</li>            
            <li style="width:15%;">
				<label style=" width:50px">客户名：</label>
				<input type="text" name="customer_name" style="width:80px;" value="<?php echo $this->_tpl_vars['customer_name']; ?>
" />
                
			</li>
            <li style="width:25%;">
				<label style="width:60px;">客户代码：</label>
				<input type="text" name="customer_code" style="width:80px;" value="<?php echo $this->_tpl_vars['customer_code']; ?>
" />
                
			</li>
            <li style="width:20%;">
				<label style="width:60px;">设计名称：</label>
				<input type="text" name="design_pic_name" style="width:80px;" value="<?php echo $this->_tpl_vars['design_pic_name']; ?>
" />
                
			</li>
            <li style="width:20%;">
				<label style="width:60px;">报价编号：</label>
				<input type="text" name="quotation_code" style="width:110px;" value="<?php echo $this->_tpl_vars['quotation_code']; ?>
" />    
			</li>
            <li style="float:right;"><div class="buttonActive" style="float:right;"><div style="float:right;" class="buttonContent"><button type="submit">检索</button></div></div></li>
		</ul>
	</div>
	</form>
</div>
<form action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/six_quotation/xls_export" method="post" id="quotation_delete">
<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
            <li class="line">line</li>
           
             <li><a class="add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/six_quotation/add/" target="navTab" rel="six_quotation_add" ><span>添加</span></a></li>
             <li class="line">line</li>
              <li><a class="add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/six_quotation/add_old/" target="navTab" rel="six_quotation_add" ><span>添加返单</span></a></li>
             <li class="line">line</li>
             <li><a class="add" href="#" id="six_quotation"><span>601报价单</span></a></li>
             <li class="line">line</li>
             <li><a class="add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/six_quotation/add_all_order/"  target="selectedTodo"  rel="group_ids_six[]" postType="string" title="确定要批量添加订单？"><span>批量添加订单</span></a></li>
		</ul>
	</div>
	<table class="table" width="1500" layoutH="138">
		<thead>
			<tr>
				<th width="2%"><input type="checkbox" group="group_ids_six[]" class="checkboxCtrl"></th>
                <th width="3%">编号</th>
                <th width="7%">时间</th>
                <th width="4%">设计属性</th>               
                <th width="3%">业务员</th>
                <th width="4%">客户代码</th>
                <th width="7%">订单状态</th>
                <th width="7%">报价编号</th>
                <th width="5%">601设计编号</th>
                <th width="5%">设计名称</th>
                <th width="6%">尺寸</th>
                <th width="6%">颜色</th>
                <th width="4%">数量</th>
                <th width="4%">系数模板</th>
                <th width="4%">报价系数</th>
                <th width="4%">报价</th>
                <th width="4%">合计</th>
                <th width="8%">操作</th>
			</tr>
		</thead>
		<tbody>
        <?php if ($this->_tpl_vars['quotation_sheet']): ?>
			 <?php $_from = $this->_tpl_vars['quotation_sheet']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['dis']):
?>
              <tr target="sid_user" rel="<?php echo $this->_tpl_vars['dis']['id']; ?>
" >
                <td><input name="group_ids_six[]" id="c_id" value="<?php echo $this->_tpl_vars['dis']['id']; ?>
" type="checkbox"></td>
                <td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['quotation_date']; ?>
</td>
                <?php if ($this->_tpl_vars['dis']['quotation_category'] == 9): ?>
                   <td>有设计</td>
                   <?php else: ?>
                   <td>无设计</td>
                <?php endif; ?>
                <td><?php echo $this->_tpl_vars['dis']['saleman_name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['customer_code']; ?>
</td>
                <?php if ($this->_tpl_vars['dis']['order_status'] == '2'): ?>
                <td>未生成订单</td>
                <?php else: ?>
                <td>已生成订单</td>
                <?php endif; ?>
                <td><?php echo $this->_tpl_vars['dis']['quotation_code']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['601_design_number']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['design_pic_name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['size']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['material_color']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['pcs']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['quote_factor']; ?>
</td>
                 <td><?php echo $this->_tpl_vars['dis']['unite_quote']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['final_quote']; ?>
</td>
                
                <td>
                
                <a title="删除吗？" target="ajaxTodo" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/six_quotation/del-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" class="btnDel">删除</a>
               <?php if ($this->_tpl_vars['dis']['return_ord'] == 0): ?>
               <a title="编辑" onclick="document.getElementById('ttbjd_wsj').style.display='none';document.getElementById('ttbjd_ysj').style.display='block';" target="navTab" rel="hotfix_quotation_add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/six_quotation/edit-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" class="btnEdit">编辑</a>
               <?php else: ?>
               <a title="编辑"  target="navTab" rel="hotfix_quotation_add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/six_quotation/edit_old-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" class="btnEdit">编辑</a>
               <?php endif; ?>
               <?php if ($this->_tpl_vars['dis']['order_status'] == 2): ?>
                <a title="添加订单" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/six_quotation/add_production_order-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html"  target="navTab" rel="group_ids_six" class="btnAdd" ><span>添加订单</span></a>
               <?php endif; ?>
                </td>
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
</form>     
</div>
<script language="javascript">
$(document).ready(function(e) {
    //导出pdf
	$("#six_quotation").click(function (){
		var check_arr = '';
		$("input[name='group_ids_six[]']:checkbox:checked").each(function(){ //由于复选框一般选中的是多个,所以可以循环输出
			if(check_arr == ''){
				check_arr += $(this).val();
			}else{
				check_arr += '#'+$(this).val();
			}
		});
		var p = 'ids-'+check_arr+'.html';
		
		if(check_arr ==''){
			alert('必须选择客户');
		}else{
			var patt = new RegExp('#');
			if(patt.test(check_arr)){
				alert('只能选择一条信息');
			}else{
				window.open('<?php echo $this->_tpl_vars['__ROOT__']; ?>
/six_quotation/six_quotation-'+p);
			}
		}
	});
	
});
	
</script>