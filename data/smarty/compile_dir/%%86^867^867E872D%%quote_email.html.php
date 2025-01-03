<?php /* Smarty version 2.6.22, created on 2019-02-21 10:49:01
         compiled from business_limit/quote_email.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/newcustomer_quotecustomer/index">
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
/business_limit/quote_email" method="get">
	<div class="searchBar">
		<ul class="searchContent">
			<li style="width:25%;">
			<label style="width:60px;">时间：</label>
            <input type="text" size="20" name="value_date" value="<?php echo $this->_tpl_vars['value_date']; ?>
"  class="date textInput readonly valid" datefmt="yyyy-MM" />
			</li>
            <li style="float:right;"><div class="buttonActive" style="float:right;"><div style="float:right;" class="buttonContent"><button type="submit">检索</button></div></div></li>
		</ul>
        <div class="subBar">
        <ul>
			<li style="float:right;">
            
            </li>
		</ul>
        </div>
	</div>
	</form>
</div>
<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
        </ul>
	</div>
	<table class="table" width="80%" layoutH="138">
		<thead>
			<tr>
				<th width="1%">编号</th>
                <th width="3%">业务员</th>
                <th width="3%">询盘数量</th>
                <th width="3%">平均回复时长</th>
                <th width="3%">回复率</th>
                <th width="3%">平均反馈时长</th>
                <th width="3%">反馈率</th>
			</tr>
		</thead>
		<tbody>
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
            <td><?php echo $this->_tpl_vars['us']['number_p']; ?>
</td>
            <td><?php echo $this->_tpl_vars['us']['send_time']; ?>
</td>           
            <td><?php echo $this->_tpl_vars['us']['first_send_time']; ?>
</td>
            <td><?php echo $this->_tpl_vars['us']['feedback_time']; ?>
</td>
            <td><?php echo $this->_tpl_vars['us']['first_feedback_time']; ?>
</td>
        </tr>
        <?php endforeach; endif; unset($_from); ?>
        <?php endif; ?>
        <tr target="sid_user" style='background-color: yellow;'>
            <td>13</td>
            <td>总计</td>
            <td><?php echo $this->_tpl_vars['number_q_total']; ?>
</td>
            <td><?php echo $this->_tpl_vars['send_time_total']; ?>
</td>           
            <td><?php echo $this->_tpl_vars['first_send_time_total']; ?>
</td>
            <td><?php echo $this->_tpl_vars['feedback_time_total']; ?>
</td>
            <td><?php echo $this->_tpl_vars['first_feedback_time_total']; ?>
</td>
        </tr>
       </tbody>
	</table>
	<div class="panelBar">
		<div class="pages">
      		  
			<span>   每页显示<?php echo $this->_tpl_vars['listRows']; ?>
条，</span>
			<span>共<?php echo $this->_tpl_vars['total_count']; ?>
条</span>
		</div>
		
		<div class="pagination" targetType="navTab" totalCount="<?php echo $this->_tpl_vars['total_count']; ?>
" numPerPage="<?php echo $this->_tpl_vars['listRows']; ?>
" pageNumShown="10" currentPage="<?php echo $this->_tpl_vars['current_page']; ?>
"></div>

	</div>