<?php /* Smarty version 2.6.22, created on 2016-06-13 11:34:06
         compiled from newcustomer_quotecustomer_thirtyday/index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/newcustomer_quotecustomer_thirtyday/index">
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
/newcustomer_quotecustomer_thirtyday/index" method="get">
	<div class="searchBar">
		<ul class="searchContent">
			<!--<li style="width:25%;">
			<label style="width:60px;">时间：</label>
            <input type="text" size="20" name="value_date" value="<?php echo $this->_tpl_vars['value_date']; ?>
"  class="date textInput readonly valid" datefmt="yyyy-MM" />
			</li>-->
<!--            <?php if ($this->_tpl_vars['user_hidden']['group_id'] != '53' || $this->_tpl_vars['user_hidden']['group_id'] != '68'): ?>
                <li style="width:15%;">
                    <label style="width:50px;">业务员：</label>
                    <select class="combox" name="sale_user">
                    <option value="">全部</option>
                    <?php $_from = $this->_tpl_vars['user_hidden']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['du']):
?>
                    <option value="<?php echo $this->_tpl_vars['du']['user_name']; ?>
" <?php if ($this->_tpl_vars['du']['user_name'] == $this->_tpl_vars['sale_user']): ?> selected <?php endif; ?> > <?php echo $this->_tpl_vars['du']['user_name']; ?>
 </option>
                    <?php endforeach; endif; unset($_from); ?>
                    </select>
                </li>
           <?php endif; ?>-->
<!--            <li style="float:right;"><div class="buttonActive" style="float:right;"><div style="float:right;" class="buttonContent"><button type="submit">检索</button></div></div></li>
-->		</ul>
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
				<th width="2%">编号</th>
                <th width="15%">时间</th>
                <th width="10%">业务员</th>
                <th width="10%">公司询盘数量</th>
                <th width="5%">公司新客户</th>
                <th width="5%">公司新客户转化率</th>
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
            <td><?php echo $this->_tpl_vars['thirty_days_ago']; ?>
至<?php echo $this->_tpl_vars['today']; ?>
</td>
            <td><?php echo $this->_tpl_vars['us']['user_name']; ?>
</td>
            <td ><a title="" style="text-decoration:underline;" rel="number_q<?php echo $this->_tpl_vars['us']['id']; ?>
" target="navTab" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/newcustomer_quotecustomer_thirtyday/number_q-id-<?php echo $this->_tpl_vars['us']['user_id']; ?>
.html" ><?php echo $this->_tpl_vars['us']['number_q']; ?>
</a></td>
            <td ><a title="" style="text-decoration:underline;" rel="number_p<?php echo $this->_tpl_vars['us']['id']; ?>
" target="navTab" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/newcustomer_quotecustomer_thirtyday/number_p-id-<?php echo $this->_tpl_vars['us']['user_id']; ?>
.html" ><?php echo $this->_tpl_vars['us']['number_p']; ?>
</td>
            <td ><?php echo $this->_tpl_vars['us']['zhuanghualv']; ?>
%</td>
        </tr>
        <?php endforeach; endif; unset($_from); ?>
        <?php endif; ?>
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