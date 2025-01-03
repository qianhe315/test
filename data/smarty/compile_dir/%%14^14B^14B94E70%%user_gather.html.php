<?php /* Smarty version 2.6.22, created on 2023-03-17 14:24:15
         compiled from sales_detail_month/user_gather.html */ ?>
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
/sales_detail_month/customer_level_gather" method="get">
	<div class="searchBar">
		<ul class="searchContent">
            

            <li style="width:25%;">
				<label style="width:50px;">时间：</label>
				<input type="text" name="start_time" class="date" readonly="true" style="width:70px;" value="<?php echo $this->_tpl_vars['start_time']; ?>
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
                <th align="center" width="70px">未成交客户</th>
                <th align="center" width="90px">已成交客户</th>
                <th align="center" width="100px">已成交A客户</th>
                <th align="center" width="100px">已成交B客户</th>
                <th align="center" width="70px">已成交C客户</th>              
			</tr>
		</thead>
        <tbody align="right">
            <?php $_from = $this->_tpl_vars['user_gather']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['us']):
?>
            <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
">
                <td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
                <td><?php echo $this->_tpl_vars['us']['user_name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['us']['d_level']; ?>
</td>
                <td><?php echo $this->_tpl_vars['us']['a_level']+$this->_tpl_vars['us']['b_level']+$this->_tpl_vars['us']['c_level']; ?>
</td>
                <td><?php echo $this->_tpl_vars['us']['a_level']; ?>
</td>
                <td><?php echo $this->_tpl_vars['us']['b_level']; ?>
</td>
                <td><?php echo $this->_tpl_vars['us']['c_level']; ?>
</td>
            </tr>
            <?php endforeach; endif; unset($_from); ?>           
            <tr style="background-color:#FFCCCC;">
            	<td colspan="2"><b>小计</b></td>
                <td><?php echo $this->_tpl_vars['total_d_level']; ?>
</td>
                <td><?php echo $this->_tpl_vars['total_pay_level']; ?>
</td>
                <td><?php echo $this->_tpl_vars['total_a_level']; ?>
</td>
                <td><?php echo $this->_tpl_vars['total_b_level']; ?>
</td>
                <td><?php echo $this->_tpl_vars['total_c_level']; ?>
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