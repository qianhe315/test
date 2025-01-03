<?php /* Smarty version 2.6.22, created on 2017-06-14 11:45:15
         compiled from t_shirt_quotation/index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/t_shirt_quotation/index">
	<input type="hidden" name="pageNum" value="1" />
	<input type="hidden" name="numPerPage" value="<?php echo $this->_tpl_vars['listRows']; ?>
" />
	<input type="hidden" name="orderField" value="group_id" />
	<input type="hidden" name="orderDirection" value="desc" />
    
    <input type="hidden" name="order_status" value="<?php echo $this->_tpl_vars['order_status']; ?>
" />
    <input type="hidden" name="saleman_user_id" value="<?php echo $this->_tpl_vars['saleman_user_id']; ?>
" />
    <input type="hidden" name="start_time" value="<?php echo $this->_tpl_vars['start_time']; ?>
" />
    <input type="hidden" name="end_time" value="<?php echo $this->_tpl_vars['end_time']; ?>
" />
    <input type="hidden" name="customer_name" value="<?php echo $this->_tpl_vars['customer_name']; ?>
" />
    <input type="hidden" name="customer_code" value="<?php echo $this->_tpl_vars['customer_code']; ?>
" />
    <input type="hidden" name="quotation_code" value="<?php echo $this->_tpl_vars['quotation_code']; ?>
" />
    
</form>

<div class="pageHeader">
	<form rel="pagerForm" onsubmit="return navTabSearch(this);" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/t_shirt_quotation/index" method="get">
	<div class="searchBar">
		<ul class="searchContent">
			
            <?php if ($this->_tpl_vars['user_hidden']['group_id'] != '53' || $this->_tpl_vars['user_hidden']['group_id'] != '68'): ?>
            <li style="width:15%;">
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
            <li style="width:25%;">
				<label style="width:40px;">时间：</label>
				<input type="text" name="start_time" class="date" readonly="true" style="width:70px;" value="<?php echo $this->_tpl_vars['start_time']; ?>
" />-<input type="text" name="end_time" class="date" readonly="true" style="width:70px;" value="<?php echo $this->_tpl_vars['end_time']; ?>
" />
                
			</li>
<!--            <li style="width:20%;">
				<label style="width:70px;">系数状态：</label>
				<select class="combox" name="ratio_status">
                <option value="">全部</option>
              	<option value="0" <?php if ($this->_tpl_vars['ratio_status'] == '0'): ?>selected="selected"<?php endif; ?>>无需审核</option>
                <option value="1" <?php if ($this->_tpl_vars['ratio_status'] == '1'): ?>selected="selected"<?php endif; ?>>未审核</option>
                <option value="2" <?php if ($this->_tpl_vars['ratio_status'] == '2'): ?>selected="selected"<?php endif; ?>>审核通过</option>
                <option value="3" <?php if ($this->_tpl_vars['ratio_status'] == '3'): ?>selected="selected"<?php endif; ?>>驳回</option>
                </select>
			</li>  -->          
            <li style="width:18%;">
				<label style="width:60px;">客户名：</label>
				<input type="text" name="customer_name" style="width:80px;" value="<?php echo $this->_tpl_vars['customer_name']; ?>
" />
                
			</li>
            
             <li style="width:18%;">
				<label style="width:70px;">客户编号：</label>
				<input type="text" name="customer_code" style="width:80px;" value="<?php echo $this->_tpl_vars['customer_code']; ?>
" />
                
			</li>
            
             <li style="width:18%;">
				<label style="width:60px;">报价编号：</label>
				<input type="text" name="quotation_code" style="width:80px;" value="<?php echo $this->_tpl_vars['quotation_code']; ?>
" />
			</li>
            
		</ul>	
			<ul>
           		 <li style="float:right;"><div class="buttonActive" style="float:right;"><div style="float:right;" class="buttonContent"><button type="submit">检索</button></div></div></li>
            </ul>
            
		</div>
	
	</form>
</div>
<form action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/t_shirt_quotation/xls_export" method="post" id="quotation_delete">
<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
        
        <?php if ($this->_tpl_vars['user_hidden']['group_id'] == '53' || $this->_tpl_vars['user_hidden']['group_id'] == '50' || $this->_tpl_vars['user_hidden']['group_id'] == '5' || $this->_tpl_vars['user_hidden']['group_id'] == '68'): ?>
            <li class="line">line</li>
			<li><a class="add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/t_shirt_quotation/add/" target="navTab" rel="t_shirt_quotation_add" ><span>添加</span></a></li>
        <?php endif; ?>
            <li class="line">line</li>
            <!--<li><a class="delete" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/rhinestone_quotation/del/" target="selectedTodo" id="del" rel="group_ids[]" postType="string"><span>删除</span></a></li>
            <li class="line">line</li>-->
             <li><a class="icon" href="#" id="excel"><span>导出EXCEL</span></a></li>
			<li class="line">line</li>
			<li><a class="add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/t_shirt_quotation/add_order/" target="selectedTodo" id="del" rel="group_ids[]" postType="string" title="确定要批量添加做货单？"><span>批量添加做货单</span></a></li>
		</ul>
	</div>
	<table class="table" width="1600" layoutH="138">
		<thead>
       		
			<tr>
				<th width="2%"><input type="checkbox" group="group_ids[]" class="checkboxCtrl"></th>
                <th width="2%">编号</th>
                <th width="6%">时间</th>

                <th width="4%">业务员</th>
                <th width="4%">客户代码</th>
                <th width="8%">客户名</th>
                <th width="8%">公司</th>
                <th width="7%">报价编号</th>
                <th width="8%">设计名称</th>
                <th width="42%" colspan="9">编码&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;||款式&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;||颜色&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;||尺码&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;||系数&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;||数量&nbsp;&nbsp;&nbsp;&nbsp;||喷图尺寸&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;||单价&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;||状态</td>
               
                <th width="5%">合计</th>
                <th width="5%">操作</th>
			</tr>
		</thead>
		<tbody>
        <?php if ($this->_tpl_vars['stock_manage']): ?>
			 <?php $_from = $this->_tpl_vars['stock_manage']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['dis']):
?>
              <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
" >
                <td><input name="group_ids[]" value="<?php echo $this->_tpl_vars['dis']['id']; ?>
" type="checkbox"></td>
                <td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['quotation_date']; ?>
</td>
 				<!--<td><?php if ($this->_tpl_vars['dis']['order_status'] == '2'): ?>未添加<?php else: ?>已添加<?php endif; ?></td>-->

                 <td><?php echo $this->_tpl_vars['dis']['saleman_name']; ?>
</td>
                 <td><?php echo $this->_tpl_vars['dis']['customer_code']; ?>
</td>
                 <td><?php echo $this->_tpl_vars['dis']['customer_name']; ?>
</td>
                 <td><?php echo $this->_tpl_vars['dis']['customer_company']; ?>
</td>
                 <td><?php echo $this->_tpl_vars['dis']['quotation_code']; ?>
</td>
				 <td><?php echo $this->_tpl_vars['dis']['design_pic_name']; ?>
</td>
              
                <td colspan="8">
                <table class="table" width="120">
                <tbody>
               
                 <?php $_from = $this->_tpl_vars['dis']['materils']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?>
                
                 <tr>
               	 <td width="80"><?php echo $this->_tpl_vars['d']['tutu_code']; ?>
</td>
                 <td width="150"><?php echo $this->_tpl_vars['d']['name']; ?>
</td>
                 <td width="50"><?php echo $this->_tpl_vars['d']['color']; ?>
</td>
                 <td width="30"><?php echo $this->_tpl_vars['d']['size']; ?>
</td>
                 <td width="50"><?php echo $this->_tpl_vars['d']['quote_factor']; ?>
</td>
                 <td width="30"><?php echo $this->_tpl_vars['d']['number']; ?>
</td>
                 <td width="80"><?php echo $this->_tpl_vars['d']['chicun']; ?>
</td>
                 <td width="44"><?php echo $this->_tpl_vars['d']['price']; ?>
</td>
                 <td width="75"><?php echo $this->_tpl_vars['d']['status']; ?>
</td>

                 </tr>
                 <?php endforeach; endif; unset($_from); ?>
                </tbody>
                </table>
                </td>

                <td><?php echo $this->_tpl_vars['dis']['heji']; ?>
</td>
                <td>
                
                
                <?php if ($this->_tpl_vars['user_hidden']['user_name'] == $this->_tpl_vars['dis']['saleman_name'] || $this->_tpl_vars['user_hidden']['group_id'] == '5'): ?>
                <a title="删除吗？" target="ajaxTodo" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/t_shirt_quotation/del-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" class="btnDel">删除</a> 
                <?php endif; ?>
                
                <a title="编辑" target="navTab" rel="rhinestone_quotation_add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/t_shirt_quotation/edit-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" class="btnEdit">编辑</a> 
                <a title="是否生成订单" target="ajaxTodo" rel="t_shirt_quotation_add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/t_shirt_quotation/add_production_order_act-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" class="btnAdd">生成订单</a>
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
    $("#excel").click(function (){
		if($("input[type='checkbox']").is(":checked")){
			$("#quotation_delete").submit();
		}else{
			alert("请选择导出的数据");
		}
	});
	
	

</script>