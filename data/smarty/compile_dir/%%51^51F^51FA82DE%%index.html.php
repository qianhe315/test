<?php /* Smarty version 2.6.22, created on 2023-04-04 14:49:48
         compiled from newcustomer_transactions/index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/newcustomer_transactions/index">
	<input type="hidden" name="pageNum" value="1" />
	<input type="hidden" name="numPerPage" value="<?php echo $this->_tpl_vars['listRows']; ?>
" />
	<input type="hidden" name="orderField" value="group_id" />
	<input type="hidden" name="orderDirection" value="desc" />
    
    
</form>

<div class="pageHeader">
	<form rel="pagerForm" onsubmit="return navTabSearch(this);" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/newcustomer_transactions/index" method="get">
	<div class="searchBar">
		<ul class="searchContent">
            <?php if ($this->_tpl_vars['user_hidden']['group_id'] != '53' || $this->_tpl_vars['user_hidden']['group_id'] != '68'): ?>
                <li style="width:10%;">
                    <label style="width:40px;">业务员：</label>
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
            <?php if ($this->_tpl_vars['user_hidden']['group_id'] != '53' || $this->_tpl_vars['user_hidden']['group_id'] != '68'): ?>
                <li style="width:15%;">
                    <label style="width:60px;">业务分组：</label>
                    <select class="combox" name="little_group">
                    <option value="">全部</option>
                    <option value="A" <?php if ($this->_tpl_vars['little_group'] == 'A'): ?> selected <?php endif; ?> > 销售1部 </option>
                    <option value="B" <?php if ($this->_tpl_vars['little_group'] == 'B'): ?> selected <?php endif; ?> > 销售2部 </option>
                    <option value="C" <?php if ($this->_tpl_vars['little_group'] == 'C'): ?> selected <?php endif; ?> > 销售3部 </option>
                    <option value="D" <?php if ($this->_tpl_vars['little_group'] == 'D'): ?> selected <?php endif; ?> > 销售4部 </option>
                    </select>
                </li>
            <?php endif; ?>
            <li style="width:25%;">
				<label style="width:60px">提交时间：</label>
				<input type="text" name="start_time" value="<?php echo $this->_tpl_vars['start_time']; ?>
" class="date" readonly="true" style="width:70px"/>-<input type="text" name="end_time" style="width:70px" value="<?php echo $this->_tpl_vars['end_time']; ?>
" class="date" readonly="true"/>
                
			</li>
            <li style="width:25%;">
				<label style="width:60px">询盘时间：</label>
				<input type="text" name="start_q_time" value="<?php echo $this->_tpl_vars['start_q_time']; ?>
" class="date" readonly="true" style="width:70px"/>-<input type="text" name="end_q_time" style="width:70px" value="<?php echo $this->_tpl_vars['end_q_time']; ?>
" class="date" readonly="true"/>
                
			</li>
            <li style="width:25%;">
				<label style="width:60px">付款时间：</label>
				<input type="text" name="start_paid_time" value="<?php echo $this->_tpl_vars['start_paid_time']; ?>
" class="date" readonly="true" style="width:70px"/>-<input type="text" name="end_paid_time" style="width:70px" value="<?php echo $this->_tpl_vars['end_paid_time']; ?>
" class="date" readonly="true"/>
                
			</li>
			<li style="width:20%;">
				<label style="width:60px;">发票号：</label>
				<input type="text" name="invoice_number" style="width:100px;" value="<?php echo $this->_tpl_vars['invoice_number']; ?>
" />
                </li>
                <li style="width:20%;">
				<label style="width:60px;">客户代码：</label>
				<input type="text" name="customer_code" style="width:70px;" value="<?php echo $this->_tpl_vars['customer_code']; ?>
" />
                
			</li>
            <li style="width: 18%;">
				<label style="width:60px;">询盘来源：</label>
				<select class="combox" name="laiyuan">
                	<option value="">全部</option>
                    <option value="22" <?php if ($this->_tpl_vars['laiyuan'] == '22'): ?>selected="selected"<?php endif; ?>>网站SEO</option>
                	<option value="23" <?php if ($this->_tpl_vars['laiyuan'] == '23'): ?>selected="selected"<?php endif; ?>>网站自然</option>
                    <option value="25"<?php if ($this->_tpl_vars['laiyuan'] == '25'): ?>selected="selected"<?php endif; ?>>谷歌付费</option>
                    <option value="24"<?php if ($this->_tpl_vars['laiyuan'] == '24'): ?>selected="selected"<?php endif; ?>>必应付费</option>
                    <option value="26"<?php if ($this->_tpl_vars['laiyuan'] == '26'): ?>selected="selected"<?php endif; ?>>谷歌付费-加拿大</option>
                    <option value="27"<?php if ($this->_tpl_vars['laiyuan'] == '27'): ?>selected="selected"<?php endif; ?>>谷歌付费-法国</option>
                    <option value="28"<?php if ($this->_tpl_vars['laiyuan'] == '28'): ?>selected="selected"<?php endif; ?>>谷歌付费-英国</option>
                    <option value="29"<?php if ($this->_tpl_vars['laiyuan'] == '29'): ?>selected="selected"<?php endif; ?>>谷歌付费-澳大利亚</option>
                </select>			
            </li>
                <li style="width:20%;">
				<label style="width:60px;">询盘方式：</label>
				<input type="text" name="quotecategory_name" style="width:100px;" value="<?php echo $this->_tpl_vars['quotecategory_name']; ?>
" />
                </li> 
		
            <li style="float:right;"><div class="buttonActive" style="float:right;"><div style="float:right;" class="buttonContent"><button type="submit">检索</button></div></div></li>
		</ul>
	</div>
	</form>
</div>
<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
        
			
		</ul>
	</div>
	<table class="table" width="100%" layoutH="138">
		<thead>
			<tr>
				<th width="2%">编号</th>
                <th width="8%">明细时间</th>
                <th width="13%">询盘时间</th>
                <th width="8%">付款时间</th>
                <th width="5%">业务员</th>
                <th width="5%">客户代码</th>
                <th width="8%">来源渠道</th>
                <th width="8%">首次询盘方式</th>
                <th width="5%">成交次数</th>
                <th width="10%">客户名</th>
                <th width="10%">发票号</th>
                <!--<th width="10%">总价</th>
                <th width="10%">应付金额</th>-->
                <th width="8%">首笔金额</th>
                <th width="8%">付款总额</th>
			</tr>
		</thead>
		<tbody>
        <?php if ($this->_tpl_vars['sale_detail_list']): ?>
			 <?php $_from = $this->_tpl_vars['sale_detail_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['dis']):
?>
              <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
">
                <td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['info_time']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['add_time']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['p_time']; ?>
</td>
 				<td><?php echo $this->_tpl_vars['dis']['sale_name']; ?>
</td>
                <input type="hidden" name="sd_saleman_name" id="sd_saleman_name<?php echo $this->_tpl_vars['dis']['id']; ?>
" value="<?php echo $this->_tpl_vars['dis']['saleman_name']; ?>
" />
                <td><?php echo $this->_tpl_vars['dis']['cus_code']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['sources_name']; ?>
</td>
                <!--<td><?php echo $this->_tpl_vars['dis']['quotecategory_name1']; ?>
</td>-->
                <td><?php echo $this->_tpl_vars['dis']['project_name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['number']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['cus_name']; ?>
</td>
                            
                <td><?php echo $this->_tpl_vars['dis']['invoice_num']; ?>
</td>
                <!--<td><?php echo $this->_tpl_vars['dis']['due']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['amount_payable']; ?>
</td>-->
                <td style="text-align:right;"><?php echo $this->_tpl_vars['dis']['invoice_due']; ?>
</td>
                <td style="text-align:right;"><?php echo $this->_tpl_vars['dis']['total_1']; ?>
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