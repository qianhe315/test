<?php /* Smarty version 2.6.22, created on 2023-03-17 16:11:52
         compiled from sales_detail_days/index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/sales_detail_days/index">
	<input type="hidden" name="pageNum" value="1" />
	<input type="hidden" name="numPerPage" value="<?php echo $this->_tpl_vars['listRows']; ?>
" />
	<input type="hidden" name="orderField" value="group_id" />
	<input type="hidden" name="orderDirection" value="desc" />
</form>
<style>
table.list td {
	line-height:18px;
}
</style>
<div class="pageHeader">
	<form rel="pagerForm" onsubmit="return navTabSearch(this);" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/sales_detail_days/index" method="get">
	<div class="searchBar">
		<ul class="searchContent">
            
            <li style="width:220px;">
                    <label style="width:40px;">时间：</label>
                    <input type="text" name="start_time" datefmt="yyyy-MM" value="<?php echo $this->_tpl_vars['start_time']; ?>
" class="date" readonly="readonly" style="width:140px;" />
            </li>
            <li style="width:700px; line-height:26px; font-size:14px;">
            	（新客户） <b>业务一部</b>：目标：<?php echo $this->_tpl_vars['mubiao_customer_1']; ?>
, 达成：<?php echo $this->_tpl_vars['num_month_customer1_all']; ?>
 / <b>业务二部</b>：目标：<?php echo $this->_tpl_vars['mubiao_customer_2']; ?>
, 达成：<?php echo $this->_tpl_vars['num_month_customer2_all']; ?>
 / <b>业务三部</b>：目标：<?php echo $this->_tpl_vars['mubiao_customer_3']; ?>
, 达成：<?php echo $this->_tpl_vars['num_month_customer3_all']; ?>

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
	<table  class="list" asc="asc" desc="desc" width="1600" layoutH="34">
		<thead>
        	<tr>
                <th colspan="1" align="center" ></th>
                <th colspan="1" width="4%" align="center" ></th>
                <th colspan="<?php echo $this->_tpl_vars['num_B']+1; ?>
" width="<?php echo $this->_tpl_vars['num_B']+1; ?>
*4%" align="center" >业务一部</th>
                <th colspan="<?php echo $this->_tpl_vars['num_C']+1; ?>
" width="<?php echo $this->_tpl_vars['num_C']+1; ?>
*4%" align="center" >业务二部</th>
                <th colspan="<?php echo $this->_tpl_vars['num_D']+1; ?>
" width="<?php echo $this->_tpl_vars['num_D']+1; ?>
*4%" align="center" >业务三部</th>
                <th colspan="1" width="4%" align="center" ></th>
			</tr>
			<tr>
                <th width="5%" align="right">时间</th>
                <?php $_from = $this->_tpl_vars['user_arr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['dis']):
?>
                	<?php if ($this->_tpl_vars['k'] == 4): ?>
                    <th width="5%" align="right"><?php echo $this->_tpl_vars['dis']['user_name']; ?>
</th>
                    <th width="3%" align="right" >一部业绩</th>
                    <?php elseif ($this->_tpl_vars['k'] == 8): ?>
                    <th width="5%" align="right"><?php echo $this->_tpl_vars['dis']['user_name']; ?>
</th>
                    <th width="3%" align="right" >二部业绩</th>
                    <?php elseif ($this->_tpl_vars['k'] == 12): ?>
                    <th width="5%" align="right"><?php echo $this->_tpl_vars['dis']['user_name']; ?>
</th>
                    <th width="3%" align="right" >三部业绩</th>
                    <?php else: ?>
                    <th width="5%" align="right"><?php echo $this->_tpl_vars['dis']['user_name']; ?>
</th>
                    <?php endif; ?>
  				<?php endforeach; endif; unset($_from); ?>
                	<th  width="5%" align="right">日总计</th>

			</tr>
		</thead>
        <tbody>
        <?php if ($this->_tpl_vars['date_array']): ?>
			 <?php $_from = $this->_tpl_vars['date_array']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['dis']):
?>
              <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
" style="height:auto;">
					<?php $_from = $this->_tpl_vars['date_array1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['kk'] => $this->_tpl_vars['disk']):
?>
                       <?php if ($this->_tpl_vars['k'] == $this->_tpl_vars['kk']): ?>
                          <td width="150px" style="text-align:right;"><?php echo $this->_tpl_vars['disk']; ?>
</td>
                       <?php endif; ?>   
                    <?php endforeach; endif; unset($_from); ?>
                    <?php $_from = $this->_tpl_vars['dis']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k_1'] => $this->_tpl_vars['dis_1']):
?>
                    	<?php if ($this->_tpl_vars['k_1'] == 4): ?>
                	   <td width="150px" style="text-align:right;"><?php echo $this->_tpl_vars['dis_1']['u_price']; ?>
</td> 
                       <td width="150px" style="text-align:right;background-color:#ffeeda;"><?php echo $this->_tpl_vars['dis_1']['u_price_zu1']; ?>
</td> 
                       <?php elseif ($this->_tpl_vars['k_1'] == 8): ?>
                       <td width="150px" style="text-align:right;"><?php echo $this->_tpl_vars['dis_1']['u_price']; ?>
</td> 
                       <td width="150px" style="text-align:right;background-color:#ffeeda;"><?php echo $this->_tpl_vars['dis_1']['u_price_zu2']; ?>
</td> 
                       <?php elseif ($this->_tpl_vars['k_1'] == 12): ?>
                       <td width="150px" style="text-align:right;"><?php echo $this->_tpl_vars['dis_1']['u_price']; ?>
</td> 
                       <td width="150px" style="text-align:right;background-color:#ffeeda;"><?php echo $this->_tpl_vars['dis_1']['u_price_zu3']; ?>
</td> 
                       <?php else: ?>
                       	<td width="150px" style="text-align:right;"><?php echo $this->_tpl_vars['dis_1']['u_price']; ?>
</td> 
                       <?php endif; ?>              
                    <?php endforeach; endif; unset($_from); ?>
                    <?php $_from = $this->_tpl_vars['array_rzj']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k_2'] => $this->_tpl_vars['rz']):
?>
                       <?php if ($this->_tpl_vars['k'] == $this->_tpl_vars['k_2']): ?>
                          <td width="150px" style="text-align:right;background-color:#FFCCCC;"><?php echo $this->_tpl_vars['rz']['rzj']; ?>
</td>
                       <?php endif; ?>   
                    <?php endforeach; endif; unset($_from); ?>
              </tr>
              
             <?php endforeach; endif; unset($_from); ?>
             
			<tr>
                <th width="5%" align="right">月总计</th>
                <?php $_from = $this->_tpl_vars['price_all']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['dis']):
?>
                    
                     <?php if ($this->_tpl_vars['k'] == 4): ?>
                     <td style="text-align:right;background-color:#FFCCCC;"><?php echo $this->_tpl_vars['dis']; ?>
</td>
                     <td width="150px" style="text-align:right;background-color:#ffb1b1;"><?php echo $this->_tpl_vars['u_price_zu_all_1']; ?>
</td> 
                     <?php elseif ($this->_tpl_vars['k'] == 8): ?>
                     <td style="text-align:right;background-color:#FFCCCC;"><?php echo $this->_tpl_vars['dis']; ?>
</td>
                     <td width="150px" style="text-align:right;background-color:#ffb1b1;"><?php echo $this->_tpl_vars['u_price_zu_all_2']; ?>
</td> 
                     <?php elseif ($this->_tpl_vars['k'] == 12): ?>
                     <td style="text-align:right;background-color:#FFCCCC;"><?php echo $this->_tpl_vars['dis']; ?>
</td>
                     <td width="150px" style="text-align:right;background-color:#ffb1b1;"><?php echo $this->_tpl_vars['u_price_zu_all_3']; ?>
</td> 
                     <?php else: ?>
                      <td style="text-align:right;background-color:#FFCCCC;"><?php echo $this->_tpl_vars['dis']; ?>
</td>
                     <?php endif; ?>              
                    
                    
  				<?php endforeach; endif; unset($_from); ?>
                <td style="text-align:right;background-color:#ff9292;"><?php echo $this->_tpl_vars['zongji']; ?>
</td>

			</tr> 
			<tr>
                <th width="5%" align="right">目标</th>
                <?php $_from = $this->_tpl_vars['target']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['dis']):
?>
                    
                     <?php if ($this->_tpl_vars['k'] == 4): ?>
                     <td style="text-align:right;background-color:#ffe9d9;"><?php echo $this->_tpl_vars['dis']; ?>
</td>
                     <td width="150px" style="text-align:right;background-color:#ffd6b8;"><?php echo $this->_tpl_vars['target_all_1']; ?>
</td> 
                     <?php elseif ($this->_tpl_vars['k'] == 8): ?>
                     <td style="text-align:right;background-color:#ffe9d9;"><?php echo $this->_tpl_vars['dis']; ?>
</td>
                     <td width="150px" style="text-align:right;background-color:#ffd6b8;"><?php echo $this->_tpl_vars['target_all_2']; ?>
</td> 
                     <?php elseif ($this->_tpl_vars['k'] == 12): ?>
                     <td style="text-align:right;background-color:#ffe9d9;"><?php echo $this->_tpl_vars['dis']; ?>
</td>
                     <td width="150px" style="text-align:right;background-color:#ffd6b8;"><?php echo $this->_tpl_vars['target_all_3']; ?>
</td> 
                     <?php else: ?>
                      <td style="text-align:right;background-color:#ffe9d9;"><?php echo $this->_tpl_vars['dis']; ?>
</td>
                     <?php endif; ?>              
                    
                    
  				<?php endforeach; endif; unset($_from); ?>
                <td style="text-align:right;background-color:#ffc498;"><?php echo $this->_tpl_vars['zongji_target']; ?>
</td>

			</tr>               
             <tr>
                <th width="5%" align="right">达成比例</th>
                <?php $_from = $this->_tpl_vars['percentage']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['dis']):
?>
                    
                     <?php if ($this->_tpl_vars['k'] == 4): ?>
                     <td style="text-align:right;background-color:#d9dfff;"><?php echo $this->_tpl_vars['dis']; ?>
</td>
                     <td width="150px" style="text-align:right;background-color:#bbc6ff;"><?php echo $this->_tpl_vars['percentage_all_1']; ?>
</td> 
                     <?php elseif ($this->_tpl_vars['k'] == 8): ?>
                     <td style="text-align:right;background-color:#d9dfff;"><?php echo $this->_tpl_vars['dis']; ?>
</td>
                     <td width="150px" style="text-align:right;background-color:#bbc6ff;"><?php echo $this->_tpl_vars['percentage_all_2']; ?>
</td> 
                     <?php elseif ($this->_tpl_vars['k'] == 12): ?>
                     <td style="text-align:right;background-color:#d9dfff;"><?php echo $this->_tpl_vars['dis']; ?>
</td>
                     <td width="150px" style="text-align:right;background-color:#bbc6ff;"><?php echo $this->_tpl_vars['percentage_all_3']; ?>
</td> 
                     <?php else: ?>
                      <td style="text-align:right;background-color:#d9dfff;"><?php echo $this->_tpl_vars['dis']; ?>
</td>
                     <?php endif; ?>              
                    
                    
  				<?php endforeach; endif; unset($_from); ?>
                <td style="text-align:right;background-color:#96a7ff;"><?php echo $this->_tpl_vars['zongji_percentage']; ?>
</td>

			</tr>         
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