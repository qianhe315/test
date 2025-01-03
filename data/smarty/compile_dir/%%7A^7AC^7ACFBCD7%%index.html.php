<?php /* Smarty version 2.6.22, created on 2014-03-25 13:40:03
         compiled from contact_frequency_statistics/index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/contact_record/index">
	<input type="hidden" name="pageNum" value="1" />
	<input type="hidden" name="numPerPage" value="<?php echo $this->_tpl_vars['listRows']; ?>
" />
	<input type="hidden" name="orderField" value="group_id" />
	<input type="hidden" name="orderDirection" value="desc" />
</form>

<div class="pageHeader">
	<form rel="pagerForm" onsubmit="return navTabSearch(this);" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/contact_record/index" method="get">
	<div class="searchBar">
		<ul class="searchContent">
			<li style="width: 15%;">
                <label style="width:60px;">业务员：</label>
                <select class="combox" name="sale_user_id">
                <option value="" >全部</option>
                </select>
            </li>
            <li style="width:25%;">
                    <label style="width:60px;">登记时间：</label>
                    <input type="text" name="start_time" value="<?php echo $this->_tpl_vars['start_time']; ?>
"  class="date" readonly="readonly" style="width:70px;" />-<input type="text" name="end_time" value="<?php echo $this->_tpl_vars['end_time']; ?>
"  class="date" readonly="readonly" style="width:70px;"/>
            </li>
            <li style="width: 20%;">
                <label style="width:60px;">客户需求：</label>
                <select class="combox" name="sale_user_id">
                <option value="" >全部</option>
                </select>
            </li>
            <li style="width: 20%;">
                <label style="width:60px;">状态：</label>
                <select class="combox" name="sale_user_id">
                <option value="" >全部</option>
                </select>
            </li>
            <li style="width: 20%;">
                <label style="width:60px;">类型：</label>
                <select class="combox" name="sale_user_id">
                <option value="" >全部</option>
                </select>
            </li>
            <li style="width:15%">
				<label style="width:60px;">客户代码：</label>
				<input type="text" name="coding" value="<?php echo $this->_tpl_vars['coding']; ?>
"  style="width:50px;" />
			</li>
			<li style="width:25%">
				<label style="width:60px;">客户名：</label>
				<input type="text" name="keywords" value="<?php echo $this->_tpl_vars['keywords']; ?>
"  style="width:80px;" />
			</li>
            <li style="width:20%">
				<label style="width:60px;">公司：</label>
				<input type="text" name="keywords" value="<?php echo $this->_tpl_vars['keywords']; ?>
"  style="width:80px;" />
			</li>
             
            <li style="float:right;"><div class="buttonActive" style="float:right;"><div style="float:right;" class="buttonContent"><button type="submit">检索</button></div></div></li>
			
		</ul>
		
		
	</div>
	</form>
</div>
<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
        <li class="line">line</li>
			<li><a class="add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/contact_record/add/" target="navTab" rel="page1"><span>添加</span></a></li>
			
			<li class="line">line</li>
		</ul>
	</div>
	<table class="table" width="100%" layoutH="158">
		<thead>
			<tr>
				<th colspan="4">客户信息</th>
				<th colspan="5">第一个月</th>
				<th colspan="3">第二个月</th>
                <th colspan="2">第三个月</th>
			</tr>
			<tr>
				<th width="80">业务员</th>
				<th width="100">客户代码</th>
				<th width="100">客户名</th>
                <th width="100">公司</th>
				<th width="100">数量</th>
				<th width="100">1次跟进</th>
                <th width="100">2次跟进</th>
                <th width="100">3次跟进</th>
                <th width="100">4次跟进</th>
                <th width="100">数量</th>
                <th width="100">5次跟进</th>
                <th width="100">6次跟进</th>
                <th width="100">数量</th>
                <th width="100">7次跟进</th>
				<th width="100">询盘状态</th>
			</tr>
            
		</thead>
        <tbody>
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