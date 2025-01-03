<?php /* Smarty version 2.6.22, created on 2023-06-19 09:52:37
         compiled from stock_manage/index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/stock_manage/index">
	<input type="hidden" name="pageNum" value="1" />
	<input type="hidden" name="numPerPage" value="<?php echo $this->_tpl_vars['listRows']; ?>
" />
	<input type="hidden" name="orderField" value="group_id" />
	<input type="hidden" name="orderDirection" value="desc" />
    
    <input type="hidden" name="stock_code" value="<?php echo $this->_tpl_vars['stock_code']; ?>
" />
    
</form>

<div class="pageHeader">
	<form rel="pagerForm" onsubmit="return navTabSearch(this);" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/stock_manage/index" method="get">
	<div class="searchBar">
		<ul class="searchContent">
			
             <li style="width:25%;">
				<label style="width:50px">时间：</label>
				<input type="text" name="start_time" class="date" readonly="true" style="width:70px;" value="<?php echo $this->_tpl_vars['start_time']; ?>
" />-<input type="text" name="end_time" class="date" readonly="true" style="width:70px;" value="<?php echo $this->_tpl_vars['end_time']; ?>
" />
                </li>
            <li style="width:25%;">
				<label>STOCK编号：</label>
				<input type="text" name="stock_code" style="width:100px;" value="<?php echo $this->_tpl_vars['stock_code']; ?>
"/>
			</li>
		</ul>
		<div class="subBar">
        <ul>
			<li style="float:right;"><div class="buttonActive" style="float:right;"><div class="buttonContent" style="float:right;"><button type="submit">检索</button></div></div></li>
            </ul>
		</div>
		
	</div>
	</form>
</div>
<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
            <li class="line">line</li>
			<li><a class="add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/stock_manage/add/" target="navTab" rel="stock_manage_add" ><span>添加STOCK</span></a></li>
			<li class="line">line</li>
            <?php if ($this->_tpl_vars['user_hidden']['user_id'] == '1' || $this->_tpl_vars['user_hidden']['user_id'] == '2'): ?>
            <li><a class="add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/stock_manage/update_use/" target="selectedTodo" id="del" rel="group_ids[]" postType="string" title="确定改为使用报价系数？"><span>使用报价系数</span></a></li>
            
        
            <li class="line">line</li>
            <li><a class="add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/stock_manage/update_no_use/" target="selectedTodo" id="del" rel="group_ids[]" postType="string" title="确定改为不使用报价系数？"><span>不使用报价系数</span></a></li>
            <?php endif; ?>
		</ul>
	</div>
	<table class="table" width="100%" layoutH="138">
		<thead>
			<tr>
				<th width="2%"><input type="checkbox" group="group_ids[]" class="checkboxCtrl"></th>
                <th width="2%">编号</th>
                <th width="8%">缩略图</th>
                <th width="8%">时间</th>
                <th width="8%">设计人名</th>
                <th width="8%">STOCK编号</th>
                <th width="8%">STOCK类型</th>
                <th width="8%">烫图尺寸</th>
                <th width="8%">报价系数状态</th>
                <th width="8%">报价系数值</th>
                <th width="8%">操作</th>
			</tr>
		</thead>
		<tbody>
        <?php if ($this->_tpl_vars['stock_manage']): ?>
			 <?php $_from = $this->_tpl_vars['stock_manage']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['dis']):
?>
              <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
" style="height:100px;">
                <td><input name="group_ids[]" value="<?php echo $this->_tpl_vars['dis']['id']; ?>
" type="checkbox"></td>
                <td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
                <td style="height:100px;"><img src="<?php echo $this->_tpl_vars['dis']['image_jpg']; ?>
" width="100px" height="100px" ></td>
 				<td><?php echo $this->_tpl_vars['dis']['insert_time']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['design_user_name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['stock_code']; ?>
</td>
                <td>
                	<?php if ($this->_tpl_vars['dis']['stock_type'] == '1'): ?>
                    烫图
                    <?php elseif ($this->_tpl_vars['dis']['stock_type'] == '2'): ?>
                    指甲贴
                    <?php elseif ($this->_tpl_vars['dis']['stock_type'] == '2'): ?>
                    T恤
                    <?php endif; ?>
                </td>
                <td><?php echo $this->_tpl_vars['dis']['size_inch_w']; ?>
*<?php echo $this->_tpl_vars['dis']['size_inch_h']; ?>
 inch</td>
                <?php if ($this->_tpl_vars['dis']['coefficient_state'] == '1'): ?>
                 <td>不可使用</td>
                <?php elseif ($this->_tpl_vars['dis']['coefficient_state'] == '2'): ?>
                 <td>可使用</td>
                 <?php endif; ?>
                 <?php if ($this->_tpl_vars['dis']['coefficient_quotation'] == ''): ?>
                 <td>1</td>
                 <?php else: ?>
                 <td><?php echo $this->_tpl_vars['dis']['coefficient_quotation']; ?>
</td>
                 <?php endif; ?>
                <td>
                <?php if ($this->_tpl_vars['dis']['use_status'] != '1'): ?>
                <?php if ($this->_tpl_vars['dis']['quotation_code'] == '' || $this->_tpl_vars['user_hidden']['group_id'] == '5'): ?>
                <a title="删除吗？" target="ajaxTodo" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/stock_manage/del-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" class="btnDel">删除</a>
                <?php endif; ?>
                 <?php endif; ?>
                <!--<?php if ($this->_tpl_vars['dis']['quotation_code'] == '' || $this->_tpl_vars['user_hidden']['group_id'] == '5' || $this->_tpl_vars['user_hidden']['group_id'] == '50'): ?><?php endif; ?>-->
                <a title="编辑" target="navTab" rel="stock_manage_edit" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/stock_manage/edit-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" class="btnEdit">编辑</a>
                
                </td>
              </tr>
              
             <?php endforeach; endif; unset($_from); ?>
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