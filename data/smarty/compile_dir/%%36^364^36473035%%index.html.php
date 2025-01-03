<?php /* Smarty version 2.6.22, created on 2014-07-31 13:38:47
         compiled from customer_cooperation_details/index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/customer_cooperation_details/index">
	<input type="hidden" name="pageNum" value="1" />
	<input type="hidden" name="numPerPage" value="<?php echo $this->_tpl_vars['listRows']; ?>
" />
	<input type="hidden" name="orderField" value="group_id" />
	<input type="hidden" name="orderDirection" value="desc" />
</form>

<div class="pageHeader">
	<form rel="pagerForm" onsubmit="return navTabSearch(this);" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/customer_cooperation_details/index" method="get">
	<div class="searchBar">
		<ul class="searchContent">
            <li style="width: 15%;">
                <label style="width:60px;">业务员：</label>
                <select class="combox" name="sale_user_id">
                <option value="" >全部</option>
                <option value="0" <?php if ($this->_tpl_vars['sale_user_id'] == '0'): ?>selected="selected"<?php endif; ?>>空</option>
                <?php $_from = $this->_tpl_vars['sales_user']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['su']):
?>
                 <option value="<?php echo $this->_tpl_vars['su']['user_id']; ?>
" <?php if ($this->_tpl_vars['su']['user_id'] == $this->_tpl_vars['sale_user_id']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['su']['user_name']; ?>
</option>
                 <?php endforeach; endif; unset($_from); ?>
                </select>
            </li>
              <li style="width:23%;">
				<label style="width:40px;">时间：</label>
				<input type="text" name="start_time" class="date" readonly style="width:70px;" value="<?php echo $this->_tpl_vars['start_time']; ?>
" />-<input type="text" name="end_time" class="date" readonly style="width:70px;" value="<?php echo $this->_tpl_vars['end_time']; ?>
" />
                
			</li>
            <li style="width:20%">
				<label style="width:40px;">代码：</label>
				<input type="text" name="coding" value="<?php echo $this->_tpl_vars['coding']; ?>
"  style="width:80px;" />
			</li>
			<li style="width:20%">
				<label style="width:50px;">用户名：</label>
				<input type="text" name="customer_name" value="<?php echo $this->_tpl_vars['customer_name']; ?>
"  style="width:80px;" />
			</li>
            <li style="width:20%">
				<label style="width:50px;">公司：</label>
				<input type="text" name="company" value="<?php echo $this->_tpl_vars['company']; ?>
"  style="width:80px;" />
			</li>
             <li style="width: 15%;">
                <label style="width:60px;">客户属性：</label>
               <select class="combox" name="customer_type">
                <option value="">全部</option>
                <option value="1" <?php if ($this->_tpl_vars['customer_type'] == '1'): ?>selected="selected"<?php endif; ?>>新客户</option>
                <option value="2"<?php if ($this->_tpl_vars['customer_type'] == '2'): ?>selected="selected"<?php endif; ?>>老客户</option>
            </select>
            </li>
            <li style="width:25%">
				<label style="width:90px;">成交笔数区间：</label>
				<input type="text" name="count_start" value="<?php echo $this->_tpl_vars['count_start']; ?>
"  style="width:50px;" />-
                <input type="text" name="count_end" value="<?php echo $this->_tpl_vars['count_end']; ?>
"  style="width:50px;" />
			</li>
            <li style="width:20%">
				<label style="width:90px;">成交金额区间：</label>
				<input type="text" name="paid_total_start" value="<?php echo $this->_tpl_vars['paid_total_start']; ?>
"  style="width:50px;" />-
                <input type="text" name="paid_total_end" value="<?php echo $this->_tpl_vars['paid_total_end']; ?>
"  style="width:50px;" />
			</li>
            <li style="float:right;"><div class="buttonActive" style="float:right;"><div style="float:right;" class="buttonContent"><button type="submit">检索</button></div></div></li>
			
		</ul>
		
		
	</div>
	</form>
</div>
<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
       <!-- <li class="line">line</li>
			<li><a class="edit" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/customer_cooperation_details/edit/" target="navTab" rel="page1"><span>修改</span></a></li>
			
			<li class="line">line</li>  -->
		</ul>
	</div>
	<table class="table" width="100%" layoutH="138">
		<thead>
			<tr>
                <th width="2%">编号</th>
                <th width="5%">时间</th>
                <th width="5%">客户代码</th>
                <th width="5%">客户名</th>
                <th width="5%">客户来源</th>
                <th width="10%">公司</th>
                <th width="10%">国家</th>
                <th width="9%">客户属性</th>
                <th width="9%">业务员</th>
                <th width="4%">成交笔数</th>
                <th width="4%">成交金额</th>
                <th width="4%">可享优惠</th>
                <th width="4%">操作</th>
               
			</tr>
		</thead>

		<tbody>
           <?php if ($this->_tpl_vars['customers']): ?>
			 <?php $_from = $this->_tpl_vars['customers']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['cs']):
?>
              <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
" >
                <td><input name="group_ids" value="<?php echo $this->_tpl_vars['cs']['id']; ?>
" type="checkbox"></td>
                <td><?php echo $this->_tpl_vars['cs']['insert_time']; ?>
</td>
                <td><?php echo $this->_tpl_vars['cs']['customer_code']; ?>
</td>
                <td><?php echo $this->_tpl_vars['cs']['customer_name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['cs']['sources_name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['cs']['company']; ?>
</td>
                <td><?php echo $this->_tpl_vars['cs']['area_name']; ?>
</td>
                <?php if ($this->_tpl_vars['cs']['status'] == '1'): ?>
                <td>新客户</td>
                <?php else: ?>
                <td>老客户</td>
                <?php endif; ?>
                <td><?php echo $this->_tpl_vars['cs']['user_name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['cs']['paid_count']; ?>
</td>
                 <?php if ($this->_tpl_vars['cs']['paid_total']): ?>
                <td>$<?php echo $this->_tpl_vars['cs']['paid_total']; ?>
</td>
                 <?php else: ?>
                <td></td>
                <?php endif; ?>
                <td></td>
                <td><a title="编辑" target="navTab" rel="customer_cooperation_details_edit" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/customer_cooperation_details/edit-id-<?php echo $this->_tpl_vars['cs']['id']; ?>
-customer_code-<?php echo $this->_tpl_vars['cs']['customer_code']; ?>
.html" class="btnEdit">编辑</a></td>
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
