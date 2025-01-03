<?php /* Smarty version 2.6.22, created on 2017-05-10 15:13:36
         compiled from web_inquiries_into/recycle.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/web_inquiries_into/recycle">
	<input type="hidden" name="pageNum" value="1" />
	<input type="hidden" name="numPerPage" value="<?php echo $this->_tpl_vars['listRows']; ?>
" />
	<input type="hidden" name="orderField" value="group_id" />
	<input type="hidden" name="orderDirection" value="desc" />
    
    <input type="hidden" name="discount_name" value="<?php echo $this->_tpl_vars['discount_name']; ?>
" />
    
</form>

<div class="pageHeader">
	<form rel="pagerForm" onsubmit="return navTabSearch(this);" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/web_inquiries_into/recycle" method="get">
	<div class="searchBar">
		<ul class="searchContent">
        	<li style="width:25%;">
                <label style="width:40px;">时间：</label>
                <input type="text" name="start_time" value="<?php echo $this->_tpl_vars['start_time']; ?>
"  class="date" readonly="readonly" style="width:70px;" />-<input type="text" name="end_time" value="<?php echo $this->_tpl_vars['end_time']; ?>
"  class="date" readonly="readonly" style="width:70px;"/>
            </li>
            <li style="width: 20%;">
                <label style="width:60px;">询盘方式：</label>
                <select class="combox" name="quotecategory">
                <option value="" >全部</option>
                <?php $_from = $this->_tpl_vars['quotecategory']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['dis']):
?>
                    <?php if ($this->_tpl_vars['quote_way'] == $this->_tpl_vars['dis']['id']): ?>
                       <option selected="selected" value="<?php echo $this->_tpl_vars['dis']['id']; ?>
" ><?php echo $this->_tpl_vars['dis']['quotecategory_name']; ?>
</option>
                    <?php else: ?>
                       <option value="<?php echo $this->_tpl_vars['dis']['id']; ?>
" ><?php echo $this->_tpl_vars['dis']['quotecategory_name']; ?>
</option>
                    <?php endif; ?>   
                <?php endforeach; endif; unset($_from); ?>   
                </select>
            </li>
            <li style="width: 20%;">
                <label style="width:40px;">来自：</label>
                <select class="combox" name="sources">
                <option value="" >全部</option>
                <?php $_from = $this->_tpl_vars['sources']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['dis']):
?>
                    <?php if ($this->_tpl_vars['sources_way'] == $this->_tpl_vars['dis']['id']): ?>
                       <option selected="selected" value="<?php echo $this->_tpl_vars['dis']['id']; ?>
" ><?php echo $this->_tpl_vars['dis']['sources_name']; ?>
</option>
                    <?php else: ?>
                       <option value="<?php echo $this->_tpl_vars['dis']['id']; ?>
" ><?php echo $this->_tpl_vars['dis']['sources_name']; ?>
</option>
                    <?php endif; ?>   
                <?php endforeach; endif; unset($_from); ?>
                </select>
            </li>
			<li style="width:20%";>
				<label style="width:50px;">客户名：</label>
				<input type="text" name="name" value="<?php echo $this->_tpl_vars['name']; ?>
" style="width:100px;"/>
			</li>
            <li style="width:25%";>
				<label style="width:40px;">公司：</label>
				<input type="text" name="company" value="<?php echo $this->_tpl_vars['company']; ?>
" style="width:100px;" />
			</li>
            <li style="width:20%";>
				<label style="width:40px;">邮箱：</label>
				<input type="text" name="email" value="<?php echo $this->_tpl_vars['email']; ?>
" style="width:100px;" />
			</li>
            <li style="width:20%";>
				<label style="width:40px;">电话：</label>
				<input type="text" name="telephone" value="<?php echo $this->_tpl_vars['telephone']; ?>
" style="width:100px;" />
			</li>
            <li style="width:20%";>
				<label style="width:50px;">Ip：</label>
				<input type="text" name="ip" value="<?php echo $this->_tpl_vars['ip']; ?>
" style="width:100px;" />
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
/web_inquiries_into/return_delete/" target="selectedTodo" id="del" rel="group_ids_recycle[]" postType="string" title="确定移出回收站?"><span>移出回收站</span></a></li>				
		<li class="line">line</li>
<!--        	<li><a class="delete"><span>永久删除</span></a></li>
		<li class="line">line</li>-->
		</ul>
	</div>
	<table class="table" width="1300" layoutH="138">
		<thead>
			<tr>
				<th width="1%"><input type="checkbox" group="group_ids_recycle[]" class="checkboxCtrl"></th>
                <th width="7%">时间</th>
                <th width="4%">缩略图</th>
                <th width="4%">询盘方式</th>
                <th width="4%">来自</th>
                <th width="6%">客户名</th>
                <th width="8%">公司</th>
                <th width="8%">邮箱</th>
                <th width="6%">电话</th>
                <th width="5%">IP</th>
                <th width="3%">操作</th>
			</tr>
		</thead>
		<tbody>
        <?php if ($this->_tpl_vars['web_quote_list']): ?>
			 <?php $_from = $this->_tpl_vars['web_quote_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['dis']):
?>
              <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
">
                <td><input name="group_ids_recycle[]" id="c_id" value="<?php echo $this->_tpl_vars['dis']['id']; ?>
" type="checkbox"></td>
                <td><?php echo $this->_tpl_vars['dis']['time']; ?>
</td>
                <td>
                <?php if ($this->_tpl_vars['dis']['image'] != ""): ?>
                   <a target="_blank" href="http://www.cstown.com/<?php echo $this->_tpl_vars['dis']['image']; ?>
">图片地址</a>
                <?php else: ?>   
                   无
                <?php endif; ?>
                </td>
 				<td><?php echo $this->_tpl_vars['dis']['quotecategory_name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['sources_name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['name']; ?>
</td>               
                <td><?php echo $this->_tpl_vars['dis']['company']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['email']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['telephone']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['ip']; ?>
</td>
                <td><a title="发货列表" target="navTab" rel="stock_manage_edit" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/web_inquiries_into/view-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" class="btnEdit">编辑</a>

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