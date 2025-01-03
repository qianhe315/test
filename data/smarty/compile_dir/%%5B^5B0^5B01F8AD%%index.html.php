<?php /* Smarty version 2.6.22, created on 2017-07-11 11:39:28
         compiled from customer_orders_price_info/index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/customer_orders_price_info/index">
	<input type="hidden" name="pageNum" value="1" />
	<input type="hidden" name="numPerPage" value="<?php echo $this->_tpl_vars['listRows']; ?>
" />
	<input type="hidden" name="orderField" value="" />
	<input type="hidden" name="orderDirection" value="" />
    
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
/customer_orders_price_info/index" method="get">
	<div class="searchBar">
		<ul class="searchContent">
         	<li style="width:25%;">
				<label style="width:70px;">客户代码：</label>
				<input type="text" name="customer_code"  style="width:70px;" value="<?php echo $this->_tpl_vars['customer_code']; ?>
" />
			</li>
            <li style="width:25%; <?php if ($this->_tpl_vars['one'] == 'alone'): ?>display:none;<?php endif; ?>" >
				<label style="width:70px;">业务员：</label>
                <select name="saleman_name" >
                	<option value="">请选择业务员</option>
                    <?php if ($this->_tpl_vars['get_uaer_list']): ?>
                    	<?php $_from = $this->_tpl_vars['get_uaer_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['val']):
?>
                        <option  value="<?php echo $this->_tpl_vars['val']['user_name']; ?>
" <?php if ($this->_tpl_vars['saleman_name'] == $this->_tpl_vars['val']['user_name']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['val']['user_name']; ?>
</option>
                        <?php endforeach; endif; unset($_from); ?>
                    <?php endif; ?>
                </select>
			</li>
            <li style="float:right;"><div class="buttonActive" style="float:right;"><div style="float:right;" class="buttonContent"><button type="submit">检索</button></div></div></li>
		</ul>
	</div>
	</form>
</div>
<form action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/register_storage/xls_export" method="post" id="rsexport">
<div class="pageContent">
	<div class="panelBar" style="height:30px" >
		<ul class="toolBar">
        <?php if ($this->_tpl_vars['user_id'] == 1 || $this->_tpl_vars['group_id'] == 50): ?>
        	<li class="line">line</li>
        	<a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/customer_orders_price_info/get_info" class="edit"  target="ajaxTodo" rel="page1" posttype="string" title="确定获取最新的付款信息?"><button>获取最新的付款信息</button></a>
        	<li class="line">line</li>
            <a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/customer_orders_price_info/update_c_info" class="edit"  target="ajaxTodo" rel="page1" posttype="string" title="确定更新客户对应的业务员?"><button>更新客户对应的业务员</button></a>
        	<li class="line">line</li>
            <a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/customer_orders_price_info/get_ranking" class="edit"  target="ajaxTodo" rel="page1" posttype="string" title="确定获取最新名次?"><button>获取最新名次</button></a>
        	<li class="line">line</li>
            
            <?php if ($this->_tpl_vars['group_id'] == 5): ?>
            <a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/customer_orders_price_info/get_kehu16" class="edit"  target="ajaxTodo" rel="page1" posttype="string" title="确定获取最新名次?"><button>17下单客户分析</button></a>
            <li class="line">line</li>
            <?php endif; ?>
        <?php endif; ?>
		</ul>
	</div>
	<table class="table" width="60%" layoutH="138">
		<thead>
       		
			<tr>
            	<th width="2%"><input type="checkbox" group="group_ids[]" class="checkboxCtrl"></th>
                <th width="3%">编号</th>
                <th width="5%">客户代码</th>
                <th width="5%">客户姓名</th>
                <th width="5%">业务员</th>
                <th width="5%">13年排序</th>
                <th width="8%" orderField="price_13" class="asc">13年成交金额</th>
                <th width="5%">14年排序</th>
                <th width="8%" orderField="price_14" class="asc">14年成交金额</th>
                <th width="5%">15年排序</th>
                <th width="8%" orderField="price_15" class="asc">15年成交金额</th>
                <th width="5%">16年排序</th>
                <th width="8%" orderField="price_16" class="asc">16年成交金额</th>
                <th width="5%">17年排序</th>
                <th width="8%" orderField="price_17" class="asc">17年成交金额</th>
			</tr>
		</thead>
		<tbody>
        	<?php if ($this->_tpl_vars['customers_list']): ?>
			 <?php $_from = $this->_tpl_vars['customers_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['dis']):
?>
              <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
">
              	<td><input name="group_ids[]" value="<?php echo $this->_tpl_vars['dis']['id']; ?>
" type="checkbox"></td>
                <td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['code']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['customer_name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['sale_name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['ranking_2013']; ?>
</td>
                <td><?php if ($this->_tpl_vars['dis']['price_2013'] != 0): ?><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/customer_orders_price_info/price_view-code-<?php echo $this->_tpl_vars['dis']['code']; ?>
-time-2013" target="navTab" rel="price_view" ><?php echo $this->_tpl_vars['dis']['price_2013']; ?>
</a><?php else: ?><?php echo $this->_tpl_vars['dis']['price_2013']; ?>
<?php endif; ?></td>
                <td><?php echo $this->_tpl_vars['dis']['ranking_2014']; ?>
</td>
                <td><?php if ($this->_tpl_vars['dis']['price_2014'] != 0): ?><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/customer_orders_price_info/price_view-code-<?php echo $this->_tpl_vars['dis']['code']; ?>
-time-2014" target="navTab" rel="price_view" ><?php echo $this->_tpl_vars['dis']['price_2014']; ?>
</a><?php else: ?><?php echo $this->_tpl_vars['dis']['price_2014']; ?>
<?php endif; ?></td>
                <td><?php echo $this->_tpl_vars['dis']['ranking_2015']; ?>
</td>
                <td><?php if ($this->_tpl_vars['dis']['price_2015'] != 0): ?><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/customer_orders_price_info/price_view-code-<?php echo $this->_tpl_vars['dis']['code']; ?>
-time-2015" target="navTab" rel="price_view" ><?php echo $this->_tpl_vars['dis']['price_2015']; ?>
</a><?php else: ?><?php echo $this->_tpl_vars['dis']['price_2015']; ?>
<?php endif; ?></td>
                <td><?php echo $this->_tpl_vars['dis']['ranking_2016']; ?>
</td>
                <td><?php if ($this->_tpl_vars['dis']['price_2016'] != 0): ?><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/customer_orders_price_info/price_view-code-<?php echo $this->_tpl_vars['dis']['code']; ?>
-time-2016" target="navTab" rel="price_view" ><?php echo $this->_tpl_vars['dis']['price_2016']; ?>
</a><?php else: ?><?php echo $this->_tpl_vars['dis']['price_2016']; ?>
<?php endif; ?></td>
                <td><?php echo $this->_tpl_vars['dis']['ranking_2017']; ?>
</td>
                <td><?php if ($this->_tpl_vars['dis']['price_2017'] != 0): ?><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/customer_orders_price_info/price_view-code-<?php echo $this->_tpl_vars['dis']['code']; ?>
-time-2017" target="navTab" rel="price_view" ><?php echo $this->_tpl_vars['dis']['price_2017']; ?>
</a><?php else: ?><?php echo $this->_tpl_vars['dis']['price_2017']; ?>
<?php endif; ?></td>
              </tr>
           	<?php endforeach; endif; unset($_from); ?>
           <?php endif; ?>
		</tbody>
	</table>
	<div class="panelBar">
		<!--<div class="pages">
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
-->
	</div>
</div>
</form>
<script type="text/javascript">
$(document).ready(function(e) {

});
</script>