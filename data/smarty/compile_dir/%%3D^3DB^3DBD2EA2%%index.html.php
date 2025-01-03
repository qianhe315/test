<?php /* Smarty version 2.6.22, created on 2023-03-17 14:23:22
         compiled from sales_detail_month/index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/sales_detail_days/index">
	<input type="hidden" name="pageNum" value="1" />
	<input type="hidden" name="numPerPage" value="<?php echo $this->_tpl_vars['listRows']; ?>
" />
	<input type="hidden" name="orderField" value="group_id" />
	<input type="hidden" name="orderDirection" value="desc" />
</form>

<div class="pageHeader">
	<form rel="pagerForm" onsubmit="return navTabSearch(this);" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/sales_detail_month/index" method="get">
	<div class="searchBar">
		<ul class="searchContent">
            

            <li style="width:25%;">
				<label style="width:50px;">时间：</label>
				<input type="text" name="start_time" class="date" readonly="true" style="width:70px;" value="<?php echo $this->_tpl_vars['start_time']; ?>
" />-<input type="text" name="end_time" class="date" readonly="true" style="width:70px;" value="<?php echo $this->_tpl_vars['end_time']; ?>
" />(默认当月)
			</li>
<li style="float:right;"><div class="buttonActive" style="float:right;"><div style="float:right;" class="buttonContent"><button type="submit">检索</button></div></div></li>
		</ul>
<!--		<div class="subBar">
			<ul>
            <li style="float:right;"><div class="buttonActive" style="float:right;"><div style="float:right;" class="buttonContent"><button type="submit">检索</button></div></div></li>
            </ul>
		</div>-->
		
	</div>
	</form>
</div>
<div class="pageContent">
<!--	<div class="panelBar">
		<ul class="toolBar">
   
		</ul>
	</div>-->
	<table  class="list" asc="asc" desc="desc" layoutH="34">
		<thead>
        	<tr>
            	<th align="center" width="30px">编号</th>
                <th align="center" width="60px">业务员</th>
                <th align="center" width="70px">新客户数量</th>
                <th align="center" width="90px">新客户销售额</th>
                <th align="center" width="100px">新客户业绩占比</th>
                <th align="center" width="100px">新客户平均贡献度</th>
                <th align="center" width="70px">老客户数量</th>
                <th align="center" width="90px">老客户销售额</th>
                <th align="center" width="100px">老客户业绩占比</th>
                <th align="center" width="100px">老客户平均贡献度</th>
                <th align="center" width="90px">月下单总客户数</th>
                <th align="center" width="90px">月销售总额</th>
                <th align="center" width="100px">月客户平均贡献度</th>
                

			</tr>
		</thead>
        <tbody align="right">
        	<?php if ($this->_tpl_vars['user']): ?>
            <?php $_from = $this->_tpl_vars['user']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['us']):
?>
            <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
">
                <td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
                <td><?php echo $this->_tpl_vars['us']['user_name']; ?>
</td>
                <td style="background-color:#fff0f0;"><?php echo $this->_tpl_vars['us']['num_month_customer']; ?>
</td>
                <td><?php echo $this->_tpl_vars['us']['sale_price']; ?>
</td>
                <td><?php echo $this->_tpl_vars['us']['new_bi']; ?>
</td>
                <td><?php echo $this->_tpl_vars['us']['new_pingjun']; ?>
</td>
                <td style="background-color:#fff0f0;"><?php echo $this->_tpl_vars['us']['old_num_month_customer']; ?>
</td>
                <td><?php echo $this->_tpl_vars['us']['old_sale_price']; ?>
</td>
                <td><?php echo $this->_tpl_vars['us']['old_bi']; ?>
</td>
                <td><?php echo $this->_tpl_vars['us']['old_pingjun']; ?>
</td>
                <td style="background-color:#fff0f0;"><?php echo $this->_tpl_vars['us']['customer_number_all']; ?>
</td>
                <td>$<?php echo $this->_tpl_vars['us']['sale_price_all']; ?>
</td>
                <td><?php echo $this->_tpl_vars['us']['yue_pingjun']; ?>
</td>
            </tr>
            <?php endforeach; endif; unset($_from); ?>
            <?php endif; ?>
            <tr>
            	<td></td>
                <td>电商</td>
                <td style="background-color:#fff0f0;"><?php echo $this->_tpl_vars['dianshang_customer_num']; ?>
</td>
                <td>$<?php echo $this->_tpl_vars['dianshang_zonge']; ?>
</td>
                <td>100%</td>
                <td><?php echo $this->_tpl_vars['dianshang_pingjun']; ?>
</td>
                <td style="background-color:#fff0f0;">0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td style="background-color:#fff0f0;"><?php echo $this->_tpl_vars['dianshang_customer_num']; ?>
</td>
                <td>$<?php echo $this->_tpl_vars['dianshang_zonge']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dianshang_pingjun']; ?>
</td>
            </tr>
            
            <tr style="background-color:#FFCCCC;">
            	<td colspan="2"><b>小计</b></td>
                <td><?php echo $this->_tpl_vars['num_month_customer_all']; ?>
</td>
                <td><?php echo $this->_tpl_vars['sale_price_all']; ?>
</td>
                <td><?php echo $this->_tpl_vars['new_bi_all']; ?>
</td>
                <td><?php echo $this->_tpl_vars['new_pingjun_all']; ?>
</td>
                <td><?php echo $this->_tpl_vars['old_num_month_customer_all']; ?>
</td>
                <td><?php echo $this->_tpl_vars['old_sale_price_all']; ?>
</td>
                <td><?php echo $this->_tpl_vars['old_bi_all']; ?>
</td>
                <td><?php echo $this->_tpl_vars['old_pingjun_all']; ?>
</td>
                <td><?php echo $this->_tpl_vars['yue_customer_all']; ?>
</td>
                <td><?php echo $this->_tpl_vars['num_month_customer_all_all']; ?>
</td>
                <td><?php echo $this->_tpl_vars['yue_pingjun']; ?>
</td>
                
            </tr>
            
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