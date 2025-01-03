<?php /* Smarty version 2.6.22, created on 2014-09-03 15:05:05
         compiled from old_sale_detail/index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/old_sale_detail/index">
	<input type="hidden" name="pageNum" value="1" />
	<input type="hidden" name="numPerPage" value="<?php echo $this->_tpl_vars['listRows']; ?>
" />
	<input type="hidden" name="orderField" value="group_id" />
	<input type="hidden" name="orderDirection" value="desc" />
    
    <input type="hidden" name="area_name" value="<?php echo $this->_tpl_vars['area_name']; ?>
" />
    <input type="hidden" name="code" value="<?php echo $this->_tpl_vars['code']; ?>
" />
</form>

<div class="pageHeader">
	<form rel="pagerForm" onsubmit="return navTabSearch(this);" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/old_sale_detail/index" method="get">
	<div class="searchBar">
		<ul class="searchContent">
			<li style="width:22%;">
            <label style="width:60px;">时间：</label>
            <input type="text" name="start_time" value="<?php echo $this->_tpl_vars['start_time']; ?>
"  class="date" readonly="readonly" style="width:70px;" />-<input type="text" name="end_time" value="<?php echo $this->_tpl_vars['end_time']; ?>
" class="date" readonly="readonly" style="width:70px;"/>
        </li>
          <li style="width:23%;">
          <label style="width:60px;">客户代码：</label>
          <input type="text" name="customer_code" value="<?php echo $this->_tpl_vars['customer_code']; ?>
"  style="width:120px;"  />
        </li>
        </li>
                <li style="width:20%;">
				<label style="width:120px;">付款状态：</label>
				<select class="combox" name="payment">
                <option value="">全部</option>
              	<option value="-1" <?php if ($this->_tpl_vars['payment'] == '-1'): ?>selected="selected"<?php endif; ?>>已付款</option>
                <option value="-2" <?php if ($this->_tpl_vars['payment'] == '-2'): ?>selected="selected"<?php endif; ?>>未付款</option>
                </select>
			</li>
   
			
		</ul>
        <div class="subBar">
        <ul>
            <li style="float:right;">
                <div class="buttonActive" style="float:right;">
                  <div class="buttonContent" style="float:right;">
                    <button type="submit">检索</button>
                  </div>
                </div>
              </li>
		</ul>
        </div>
	</div>
	</form>
</div>
<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
        <!--  <li class="line">line</li>
         <li><a class="add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/old_sale_detail/edit/" target="navTab" rel="old_sale_detail"><span>添加</span></a></li>
        <li class="line">line</li>
			-->
           <!-- <li class="line">line</li> 
<a class="edit" title="同步数据?" posttype="string" rel="page1" target="ajaxTodo" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/old_sale_detail/old/">
<span>同步数据</span>
</a>        
        <li class="line">line</li>          -->  
		</ul>
	</div>
	<table class="table" width="100%" layoutH="138">
		<thead>
			<tr>
               
                <th width="5%">编号</th>
                <th width="5%">时间</th>
                <th width="5%">业务员</th>
                <th width="5%">客户代码</th>
                <th width="5%">客户名</th>
                <th width="5%">公司</th>
                <th width="5%">发票号</th>
                <th width="5%">货币</th>
                <th width="5%">运费</th>
                <th width="5%">总价</th>
                <th width="5%">手续费</th>
                <th width="5%">付款状态</th>
                <th width="5%">付款时间</th>
                <th width="5%">付款方式</th>
                <th width="5%">财务备注</th>
                <th width="5%">销售备注</th>
                <th width="5%">操作</th>
                
			</tr>
		</thead>
		<tbody>
        <?php if ($this->_tpl_vars['salesdetails_old']): ?>
			 <?php $_from = $this->_tpl_vars['salesdetails_old']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['sdo']):
?>
              <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
" >
                <td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
                <td><?php echo $this->_tpl_vars['sdo']['date']; ?>
</td>
                <td><?php echo $this->_tpl_vars['sdo']['Sales']; ?>
</td>
                <td><?php echo $this->_tpl_vars['sdo']['code']; ?>
</td>
                <td><?php echo $this->_tpl_vars['sdo']['Company']; ?>
</td>
                <td><?php echo $this->_tpl_vars['sdo']['Customer']; ?>
</td>
                <td><?php echo $this->_tpl_vars['sdo']['InvoiceNo']; ?>
</td>
                <td><?php echo $this->_tpl_vars['sdo']['Currency']; ?>
</td>
                <td><?php echo $this->_tpl_vars['sdo']['Freight']; ?>
</td>
                <td><?php echo $this->_tpl_vars['sdo']['Amount']; ?>
</td>
                <td><?php echo $this->_tpl_vars['sdo']['cut']; ?>
</td>
                <td><?php echo $this->_tpl_vars['sdo']['pay']; ?>
</td>
                <td><?php echo $this->_tpl_vars['sdo']['PaymentDate']; ?>
</td>
                <td><?php echo $this->_tpl_vars['sdo']['name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['sdo']['NotesAccount']; ?>
</td>
                <td><?php echo $this->_tpl_vars['sdo']['NotesSales']; ?>
</td>
                <td>
                <?php if ($this->_tpl_vars['group_id'] == '5' || $this->_tpl_vars['user_id'] == '51'): ?>
                <a title="编辑" target="navTab" rel="old_sale_detailMod_edit" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/old_sale_detail/edit-ID-<?php echo $this->_tpl_vars['sdo']['ID']; ?>
.html" class="btnEdit">编辑</a> 
                <?php endif; ?>
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
</div>