<?php /* Smarty version 2.6.22, created on 2023-03-20 09:40:25
         compiled from customer_sales_charts/index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/oldcustomer/index">
  <input type="hidden" name="pageNum" value="1" />
  <input type="hidden" name="numPerPage" value="<?php echo $this->_tpl_vars['listRows']; ?>
" />
  <input type="hidden" name="orderField" value="group_id" />
  <input type="hidden" name="orderDirection" value="desc" />
</form>
<div class="pageHeader">
  <form rel="pagerForm" onSubmit="return navTabSearch(this);" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/customer_sales_charts/index" method="get">
    <div class="searchBar">
      <ul class="searchContent">

        <li style="width:25%;">
            <label style="width:80px;">排名时间：</label>
            <input type="text" name="start_time1" value="<?php echo $this->_tpl_vars['start_time1']; ?>
"  class="date" readonly="readonly" style="width:70px;" />-<input type="text" name="end_time1" value="<?php echo $this->_tpl_vars['end_time1']; ?>
" class="date" readonly="readonly" style="width:70px;"/>(默认去年当月)
        </li>
        <li style="width:25%;">
            <label style="width:80px;">查询时间：</label>
            <input type="text" name="start_time2" value="<?php echo $this->_tpl_vars['start_time2']; ?>
"  class="date" readonly="readonly" style="width:70px;" />-<input type="text" name="end_time2" value="<?php echo $this->_tpl_vars['end_time2']; ?>
" class="date" readonly="readonly" style="width:70px;"/>(默认今年当月)
        </li>
        <li style="width:15%;">
          <label style="width:50px;">业务员：</label>
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
        <li style="width:80%;">
            <label style="width:1000px;">注：排名时间：查询这段时间交易金额TOP客户排序；查询时间：查询客户在排行榜中的查询时间内交易金额。</label>

        </li>
       <li style="float:right;">
                    <div class="buttonActive" style="float:right;">
                          <div class="buttonContent" style="float:right;">
                            <button type="submit">检索</button>
                          </div>
                    </div>
                </li>
      </ul>

    </div>
  </form>
</div>
<form action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/customer_sales_charts/xls_export" method="post" id="new_export_old">
  <div class="pageContent">
  <div class="panelBar">
    
  </div>
  
  <table class="table" width="1300" layoutH="138">
    <thead>
      <tr>
        <th width="1%">编号</th>
        <th width="5%">业务员</th>
        <th width="5%">客户代码</th>
        <th width="5%">客户名</th>
        <th width="5%">公司</th>
        <th width="2%">交易次数</th>
        <th width="5%">$交易金额</th>
        <th width="2%">查询次数</th>
        <th width="5%">$查询金额</th>
      </tr>
	</thead>
    <tbody>
      <?php $_from = $this->_tpl_vars['sale_detail']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['dis']):
?>
      <tr rel="<?php echo $this->_tpl_vars['k']+1; ?>
">
        <td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
        <td><?php echo $this->_tpl_vars['dis']['user_name']; ?>
</td>
        <td><?php echo $this->_tpl_vars['dis']['customer_code']; ?>
</td>
        <td><?php echo $this->_tpl_vars['dis']['customer_name']; ?>
</td>
        <td><?php echo $this->_tpl_vars['dis']['company']; ?>
</td>
        <td align="right"><?php echo $this->_tpl_vars['dis']['count']; ?>
</td>
        <td style="text-align:right;"><?php echo $this->_tpl_vars['dis']['paid_money']; ?>
</td>
        <td align="right"><?php echo $this->_tpl_vars['dis']['count2']; ?>
</td>
        <td style="text-align:right;"><?php echo $this->_tpl_vars['dis']['sharch_money']; ?>
</td>
      </tr>
     <?php endforeach; endif; unset($_from); ?> 
    </tbody>
    
  </table>
  
  <div class="panelBar">
    <div class="pages"> <span> 每页显示<?php echo $this->_tpl_vars['listRows']; ?>
条，</span> <span>共<?php echo $this->_tpl_vars['total_count']; ?>
条</span> </div>
    <div class="pagination" targetType="navTab" totalCount="<?php echo $this->_tpl_vars['total_count']; ?>
" numPerPage="<?php echo $this->_tpl_vars['listRows']; ?>
" pageNumShown="10" currentPage="<?php echo $this->_tpl_vars['current_page']; ?>
"></div>
  </div>
  
</form>
<!--<form action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/newcustomer/change_to_other_user" id="ctou" method="post" onSubmit="return navTabSearch(this);">
  <input type="hidden" name="check_arr" id="check_arr" value="" />
  <input type="hidden" name="touid" id="touids" value="" />
</form>-->
</div>
<!-- {literal} --> 