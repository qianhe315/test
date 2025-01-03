<?php /* Smarty version 2.6.22, created on 2023-04-04 14:12:24
         compiled from commission_amount_online/index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/commission_amount_online/index">
	<input type="hidden" name="pageNum" value="1" />
	<input type="hidden" name="numPerPage" value="<?php echo $this->_tpl_vars['listRows']; ?>
" />
	<input type="hidden" name="orderField" value="group_id" />
	<input type="hidden" name="orderDirection" value="desc" />
    
    <input type="hidden" name="exchangerate_name" value="<?php echo $this->_tpl_vars['exchangerate_name']; ?>
" />
</form>

<div class="pageHeader">
	<form rel="pagerForm" onsubmit="return navTabSearch(this);" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/commission_amount_online/index" method="get">
	<div class="searchBar">
		<ul class="searchContent">

            <li style="width:35%;">
			<label style="width:60px;">时间：</label>
            <input type="text" size="20" name="value_date" value="<?php echo $this->_tpl_vars['value_date']; ?>
"  class="date textInput readonly valid" datefmt="yyyy-MM" />
			</li>
            <li style="float:right;"><div class="buttonActive" style="float:right;"><div style="float:right;" class="buttonContent"><button type="submit">检索</button></div></div></li>
		</ul>
        <!--<div class="subBar">
            <ul>
                <li style="float:right;">
                
                </li>
            </ul>
        </div>-->
	</div>
	</form>
</div>

<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
		<input type="hidden" name="time" value="<?php echo $this->_tpl_vars['value_date']; ?>
">	
		</ul>
	</div>
	<table class="table" width="1200" layoutH="138">
		<thead>
			<tr style="text-align:center;">
            	<th width="1%">编号</th>
                <th width="3%">姓名</th>
                <th width="3%">已收账款</th>
                <th width="3%">手续费</th>
                <th width="3%">当月汇率(美元)</th>
                <th width="3%">当月汇率(欧元)</th>
                <th width="3%">净收款额</th>
                <th width="3%">生产成本</th>
                <th width="3%">运费</th>
                <th width="3%">毛利</th>
                <th width="2%">利润比率</th>
                <th width="2%">提成比例</th>
                <th width="3%">提成金额</th>
			</tr>
		</thead>
		<tbody>
        
        <?php if ($this->_tpl_vars['user']): ?>
		<?php $_from = $this->_tpl_vars['user']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['us']):
?>
        <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
" style="text-align:right;">
        	<td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
            <td><?php echo $this->_tpl_vars['us']['user_name']; ?>
</td>
            <td>$<?php echo $this->_tpl_vars['us']['online_yifu']; ?>
</td>
            <td>$<?php echo $this->_tpl_vars['us']['online_shouxu']; ?>
</td>
            <td><?php echo $this->_tpl_vars['us']['exchangerate_finance']; ?>
</td>
            <td><?php echo $this->_tpl_vars['us']['exchangerate_finance01']; ?>
</td>
            <td><?php echo $this->_tpl_vars['us']['online_jingshou']; ?>
</td>
            <td><?php echo $this->_tpl_vars['us']['online_chengben']; ?>
</td>
            <td><?php echo $this->_tpl_vars['us']['online_yunfei']; ?>
</td>
            <td><?php echo $this->_tpl_vars['us']['online_maoli']; ?>
</td>
            <td><?php echo $this->_tpl_vars['us']['online_lirunbilu']; ?>
%</td>
            <td><?php echo $this->_tpl_vars['us']['online_pro']; ?>
</td>
            <td><?php echo $this->_tpl_vars['us']['online_ticheng']; ?>
</td>
            
        </tr>
        <?php endforeach; endif; unset($_from); ?>
        <?php endif; ?>


        <tr style="text-align:right; background-color:#FFCCCC;">
            <td>总计</td>
            <td></td>
            <td>$<?php echo $this->_tpl_vars['all_online_yifu']; ?>
</td>
            <td>$<?php echo $this->_tpl_vars['all_online_shouxu']; ?>
</td>
            <td></td>
            <td></td>
            <td><?php echo $this->_tpl_vars['all_online_jingshou']; ?>
</td>
            <td><?php echo $this->_tpl_vars['all_online_chengben']; ?>
</td>
            <td><?php echo $this->_tpl_vars['all_online_yunfei']; ?>
</td>
            <td><?php echo $this->_tpl_vars['all_online_maoli']; ?>
</td>
            <td></td>
            <td></td>
            <td><?php echo $this->_tpl_vars['all_online_ticheng']; ?>
</td>
         </tr>
       </tbody>
	</table>
</div>