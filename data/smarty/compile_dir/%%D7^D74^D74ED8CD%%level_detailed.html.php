<?php /* Smarty version 2.6.22, created on 2023-03-17 17:07:04
         compiled from sales_detail_month/level_detailed.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/sales_detail_month/customer_level_detailed">
	<input type="hidden" name="pageNum" value="1" />
	<input type="hidden" name="numPerPage" value="<?php echo $this->_tpl_vars['listRows']; ?>
" />
	<input type="hidden" name="orderField" value="group_id" />
	<input type="hidden" name="orderDirection" value="desc" />
</form>

<div class="pageHeader">
	<form rel="pagerForm" onsubmit="return navTabSearch(this);" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/sales_detail_month/customer_level_detailed" method="get">
	<div class="searchBar">
		<ul class="searchContent">
            
			<li style="width: 16%;">
				<label style="width:60px;">业务员：</label>
				<select class="combox" name="sale_user_id">
                <option value="" >全部</option>
                
                <option value="0" <?php if ($this->_tpl_vars['sale_user_id'] == '0'): ?>selected="selected"<?php endif; ?>>空</option>
                
                <?php $_from = $this->_tpl_vars['sales_user']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['su']):
?>
                 <option value="<?php echo $this->_tpl_vars['su']['user_name']; ?>
" <?php if ($this->_tpl_vars['su']['user_name'] == $this->_tpl_vars['sale_user_id']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['su']['user_name']; ?>
</option>
                <?php endforeach; endif; unset($_from); ?>
                </select>
			</li>
            <li style="width:25%;">
				<label style="width:60px;">客户代码：</label>
				<input type="text" name="customer_code" style="width:70px;" value="<?php echo $this->_tpl_vars['customer_code']; ?>
" />
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
                <th align="center" width="70px">客户代码</th>
                <th align="center" width="90px">客户等级</th>
                <th align="center" width="100px">客户得分</th>
                <th align="center" width="100px">R距离上一次交易的时间（天）</th>
                <th align="center" width="70px">F消费次数（次）</th>  
                 <th align="center" width="70px">M消费总金额（$）</th>  
                  <th align="center" width="70px"> B最大一笔消费金额（$）</th>  
                 <th align="center" width="70px">A件均（$）</th>             
			</tr>
		</thead>
        <tbody align="right">
            <?php $_from = $this->_tpl_vars['customer_level_base']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['us']):
?>
            <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
">
                <td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
                <td><?php echo $this->_tpl_vars['us']['user_name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['us']['customer_code']; ?>
</td>
                <td><?php echo $this->_tpl_vars['us']['customer_level']; ?>
</td>
                <td><?php echo $this->_tpl_vars['us']['score']; ?>
</td>
                <td><?php echo $this->_tpl_vars['us']['insert_time']; ?>
</td>
                <td><?php echo $this->_tpl_vars['us']['paid_count']; ?>
</td>
                <td><?php echo $this->_tpl_vars['us']['total_money']; ?>
</td>
                <td><?php echo $this->_tpl_vars['us']['paid_max']; ?>
</td>
                <td><?php echo $this->_tpl_vars['us']['piece_average']; ?>
</td>
            </tr>
            <?php endforeach; endif; unset($_from); ?>           
        </tbody>

	</table>
	<div class="panelBar">
		<div class="pagination" targetType="navTab" totalCount="<?php echo $this->_tpl_vars['total_count']; ?>
" numPerPage="<?php echo $this->_tpl_vars['listRows']; ?>
" pageNumShown="10" currentPage="<?php echo $this->_tpl_vars['current_page']; ?>
"></div>
	</div>
</div>