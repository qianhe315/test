<?php /* Smarty version 2.6.22, created on 2015-11-19 09:51:02
         compiled from saleman_day_detail/index.html */ ?>
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
/sales_detail_days/index" method="get">
	<div class="searchBar">
		<ul class="searchContent">
            
            <li style="width:30%;">
                    <label style="width:40px;">时间：</label>
                    <input type="text" name="start_time" datefmt="yyyy-MM" value="<?php echo $this->_tpl_vars['start_time']; ?>
" class="date" readonly="readonly" style="width:140px;" />
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
                <th colspan="1" width="4%" align="center" >销售1部主管</th>
                <th colspan="<?php echo $this->_tpl_vars['num_A']-1; ?>
" width="<?php echo $this->_tpl_vars['num_A']-1; ?>
*4%" align="center" >销售1部业务</th>
                <th colspan="1" width="4%" align="center" >销售2部主管</th>
                <th colspan="<?php echo $this->_tpl_vars['num_B']-1; ?>
" width="<?php echo $this->_tpl_vars['num_B']-1; ?>
*4%" align="center" >销售2部业务</th>
                <th colspan="1" width="4%" align="center" >销售3部主管</th>
                <th colspan="<?php echo $this->_tpl_vars['num_C']-1; ?>
" width="<?php echo $this->_tpl_vars['num_C']-1; ?>
*4%" align="center" >销售3部业务</th>
                <th colspan="1" width="4%" align="center" >销售4部主管</th>
                <th colspan="<?php echo $this->_tpl_vars['num_D']-1; ?>
" width="<?php echo $this->_tpl_vars['num_D']-1; ?>
*4%" align="center" >销售4部业务</th>
                <th colspan="<?php echo $this->_tpl_vars['num_NG']; ?>
" align="center" ></th>
			</tr>
			<tr>
                <th width="5%">时间</th>
                <?php $_from = $this->_tpl_vars['user_arr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['dis']):
?>
                    <th width="5%"><?php echo $this->_tpl_vars['dis']['user_name']; ?>
</th>
  				<?php endforeach; endif; unset($_from); ?>

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
                	   <td width="150px" style="text-align:right;"><?php echo $this->_tpl_vars['dis_1']; ?>
</td>
                    <?php endforeach; endif; unset($_from); ?>
                    
              </tr>
              
             <?php endforeach; endif; unset($_from); ?>
             
			<tr>
                <th width="5%">总计</th>
                <?php $_from = $this->_tpl_vars['price_all']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['dis']):
?>
                    <td><?php echo $this->_tpl_vars['dis']; ?>
</td>
  				<?php endforeach; endif; unset($_from); ?>

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