<?php /* Smarty version 2.6.22, created on 2024-10-23 08:42:23
         compiled from finishdesign/index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/finishdesign/index">
	<input type="hidden" name="pageNum" value="1" />
	<input type="hidden" name="numPerPage" value="<?php echo $this->_tpl_vars['listRows']; ?>
" />
	<input type="hidden" name="orderField" value="group_id" />
	<input type="hidden" name="orderDirection" value="desc" />
    
    <input type="hidden" name="design_user" value="<?php echo $this->_tpl_vars['design_user']; ?>
" />
    <input type="hidden" name="salesman_id" value="<?php echo $this->_tpl_vars['salesman_id']; ?>
" />
    <input type="hidden" name="start_time" value="<?php echo $this->_tpl_vars['start_time']; ?>
" />
    <input type="hidden" name="end_time" value="<?php echo $this->_tpl_vars['end_time']; ?>
" />
    <input type="hidden" name="design_code" value="<?php echo $this->_tpl_vars['design_code']; ?>
" />
    
    <input type="hidden" name="status" value="<?php echo $this->_tpl_vars['status']; ?>
" />
</form>

<div class="pageHeader">
	<form rel="pagerForm" onsubmit="return navTabSearch(this);" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/finishdesign/index" method="get">
        <input type="hidden" name="all_design" value="<?php echo $this->_tpl_vars['all_design']; ?>
"  />
	<div class="searchBar">
		<ul class="searchContent">
        	
            <li>
				<label style="width:50px;">时间：</label>
				<input type="text" name="start_time" class="date" readonly style="width:70px;" value="<?php echo $this->_tpl_vars['start_time']; ?>
"  />-<input type="text" name="end_time" class="date" readonly style="width:70px;" value="<?php echo $this->_tpl_vars['end_time']; ?>
" />
                
			</li>
            
            
            </li>
              <li>
				<label style="width:70px;">客户代码：</label>
				<input type="text" name="customer_code" style="width:90px;" value="<?php echo $this->_tpl_vars['customer_code']; ?>
"  />
                
			</li>
            
			<li>
				<label style="width:70px;">设计人员：</label>
				<select class="combox" name="design_user">
                <option value="">全部</option>
                <?php $_from = $this->_tpl_vars['design_users']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['du']):
?>
                <option value="<?php echo $this->_tpl_vars['du']['user_id']; ?>
" <?php if ($this->_tpl_vars['du']['user_id'] == $this->_tpl_vars['design_user']): ?> selected <?php endif; ?> > <?php echo $this->_tpl_vars['du']['user_name']; ?>
 </option>
                <?php endforeach; endif; unset($_from); ?>
                </select>
			</li>
            <li>
				<label style="width:60px;">业务员：</label>
				<select class="combox" name="salesman_id">
                <option value="">全部</option>
                <?php $_from = $this->_tpl_vars['sale_users']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['du']):
?>
                <option value="<?php echo $this->_tpl_vars['du']['user_id']; ?>
" <?php if ($this->_tpl_vars['du']['user_id'] == $this->_tpl_vars['salesman_id']): ?> selected <?php endif; ?> > <?php echo $this->_tpl_vars['du']['user_name']; ?>
 </option>
                <?php endforeach; endif; unset($_from); ?>
                </select>
			</li>
            
           <!--  <li style="width:180px;">
				<label style="width:50px;">状态：</label>
				<select class="combox" name="status">
                <option value="">全部</option>
                <option value="3" <?php if ($this->_tpl_vars['status'] == '3'): ?> selected <?php endif; ?>>已完成</option>
                <option value="4" <?php if ($this->_tpl_vars['status'] == '4'): ?> selected <?php endif; ?>>通过审核</option>
                <option value="6" <?php if ($this->_tpl_vars['status'] == '6'): ?> selected <?php endif; ?>>人工介入</option>
                </select>
                
			</li> -->
            <li>
				<label style="width:50px;">属性：</label>
                <select class="combox" name="design_status">
                    <option value="">全部</option>
                    <option value="1" <?php if ($this->_tpl_vars['design_status'] == 1): ?> selected <?php endif; ?> > 设计排图 </option>
                    <option value="2" <?php if ($this->_tpl_vars['design_status'] == 2): ?> selected <?php endif; ?> > 换色排图 </option>
                    <option value="3" <?php if ($this->_tpl_vars['design_status'] == 3): ?> selected <?php endif; ?> > 版图 </option>
                      <option value="4" <?php if ($this->_tpl_vars['design_status'] == 4): ?> selected <?php endif; ?> > 样图 </option>
                </select>
			</li>
             <li>
				<label style="width:70px;">报价编号：</label>
				<input type="text" name="design_code" style="width:90px;" value="<?php echo $this->_tpl_vars['design_code']; ?>
"  />
                
			</li>
            <li>
				<label style="width:70px;">设计名称：</label>
				<input type="text" name="design_name" style="width:90px;" value="<?php echo $this->_tpl_vars['design_name']; ?>
"  />
                
			
            <li>
				<label style="width:70px;">设计数量：</label>
				<input type="text" name="design_count" style="width:90px;" disabled="disabled" value="<?php echo $this->_tpl_vars['design_count']; ?>
"  />
                
			</li>
            
            <li>
				<label style="width:70px;">设计类别：</label>
                <select class="combox" name="design_category">
                    <option value="">全部</option>
                    <?php $_from = $this->_tpl_vars['quotation_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ql']):
?>
                    <option value="<?php echo $this->_tpl_vars['ql']['id']; ?>
" <?php if ($this->_tpl_vars['ql']['id'] == $this->_tpl_vars['design_category']): ?> selected <?php endif; ?> > <?php echo $this->_tpl_vars['ql']['quotation_name']; ?>
 </option>
                    <?php endforeach; endif; unset($_from); ?>
                </select>
			</li>
            
             <li style="float:right;"><div class="buttonActive" style="float:right;"><div style="float:right;" class="buttonContent"><button type="submit">检索</button></div></div></li>
            
		</ul>
         
	</div>
	</form>
</div>
<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
			
           <!-- <li><a class="add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/uncheckdesign/verify/" target="navTab" rel="unfinishdesign_add" ><span>审核</span></a></li>-->
			<!--<li>
            <a class="edit" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/finishdesign/shtg/" target="selectedTodo" rel="group_ids[]" postType="string" title="确定返回已完成?" ><span>返回已完成</span></a>
         </li>
			<li class="line">line</li>-->
			
		</ul>
	</div>
	<table class="table" width="100%" layoutH="138">
		<thead>
			<tr>
				<th width="1%"><input type="checkbox" group="group_ids[]" class="checkboxCtrl"></th>
                <th width="2%">编号</th>
                <th width="3%">缩略图</th>
                <!--<th width="4%">状态</th>-->
                <th width="5%">属性</th>
                <th width="4%">客户代码</th>
<!--                <th width="5%">订单状态</th>-->
                <th width="10%">设计名称</th>
                <?php if ($this->_tpl_vars['all_design'] == 1): ?>
                <th width="10%">设计状态</th>
                <?php endif; ?>
                <th width="10%">设计编号</th>
                <th width="5%">设计数量</th>
                <th width="8%">设计类别</th>
                <th width="8%">日期</th>
                <th width="5%">出图周期</th>
                <th width="4%">销售人名</th>
                <th width="4%">设计人名</th>
               <th width="4%">跟单人</th>
                <th width="5%">操作</th>
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
                <?php if ($this->_tpl_vars['dis']['upload_cdr'] && ! strstr ( $this->_tpl_vars['dis']['upload_cdr'] , '.cdr' )): ?>
                <td style="height:100px;"><img src="<?php echo $this->_tpl_vars['dis']['upload_file']; ?>
" width="100px" height="50px" ><img src="<?php echo $this->_tpl_vars['dis']['upload_cdr']; ?>
" width="100px" height="50px" ></td>
                <?php else: ?>
                <td style="height:100px;"><img src="<?php echo $this->_tpl_vars['dis']['upload_file']; ?>
" width="100px" height="100px" ></td>
                <?php endif; ?>
 				<!--<td><?php if ($this->_tpl_vars['dis']['status'] == '1'): ?>未完成<?php elseif ($this->_tpl_vars['dis']['status'] == '2'): ?>未检验<?php elseif ($this->_tpl_vars['dis']['status'] == '3'): ?>已完成<?php elseif ($this->_tpl_vars['dis']['status'] == '4'): ?>通过审核<?php elseif ($this->_tpl_vars['dis']['status'] == '5'): ?>外发已做货<?php elseif ($this->_tpl_vars['dis']['status'] == '6'): ?>人工介入<?php endif; ?></td>-->
                <td><?php if ($this->_tpl_vars['dis']['huanse_status'] == '1'): ?>设计排图<?php elseif ($this->_tpl_vars['dis']['huanse_status'] == '2'): ?>换色排图<?php elseif ($this->_tpl_vars['dis']['huanse_status'] == '3'): ?>版图<?php elseif ($this->_tpl_vars['dis']['huanse_status'] == '4'): ?>样图<?php endif; ?></td>
                <td><?php echo $this->_tpl_vars['dis']['customer_code']; ?>
</td>
<!--                <td><?php echo $this->_tpl_vars['dis']['order_status']; ?>
</td>-->
                <td><?php echo $this->_tpl_vars['dis']['design_name']; ?>
</td>
                  <?php if ($this->_tpl_vars['all_design'] == 1): ?>
                <td><?php echo $this->_tpl_vars['dis']['design_status']; ?>
</td>
                  <?php endif; ?>
                <td><?php echo $this->_tpl_vars['dis']['design_code']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['design_NO']; ?>
</td>
                <td>
                <?php if ($this->_tpl_vars['quotation_list']): ?>
                	<?php $_from = $this->_tpl_vars['quotation_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['val']):
?>
                    	<?php if ($this->_tpl_vars['val']['id'] == $this->_tpl_vars['dis']['design_category']): ?><?php echo $this->_tpl_vars['val']['quotation_name']; ?>
<?php endif; ?>
                    <?php endforeach; endif; unset($_from); ?>
                <?php endif; ?>
                </td>
                <td><?php echo $this->_tpl_vars['dis']['design_date']; ?>
</td>
                <td><?php if ($this->_tpl_vars['dis']['make_pic_time'] == 4): ?>正常<?php elseif ($this->_tpl_vars['dis']['make_pic_time'] == 5): ?>加急<?php endif; ?></td>
                <td><?php echo $this->_tpl_vars['dis']['salesman_user_name']; ?>
</td>
                <td><?php if ($this->_tpl_vars['dis']['design_user_name'] == ''): ?>无<?php else: ?><?php echo $this->_tpl_vars['dis']['design_user_name']; ?>
<?php endif; ?></td>
                <td><?php echo $this->_tpl_vars['dis']['documentary']; ?>
</td>
               
                <td>
                
                <?php if ($this->_tpl_vars['dis']['status'] != '5'): ?>
                    <?php if ($this->_tpl_vars['all_design'] == 1): ?>
                    <a title="已完成-版图管理" target="navTab" rel="finishdesign_verify" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/finishdesign/design_list-all_design-1-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" class="btnInfo" fresh="true" >已完成-版图管理</a>
                    <?php else: ?>
                    <a title="已完成-版图管理" target="navTab" rel="finishdesign_verify" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/finishdesign/design_list-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" class="btnInfo" fresh="true" >已完成-版图管理</a>
                    <?php endif; ?>

                 
                <?php endif; ?>
                
               <!-- <a title="删除吗？" target="ajaxTodo" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/unfinishdesign/del-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" class="btnDel">删除</a> 
                <a title="编辑" target="navTab" rel="unfinishdesign_edit" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/unfinishdesign/edit-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" class="btnEdit">编辑</a>
                <a title="设计-<?php echo $this->_tpl_vars['dis']['design_name']; ?>
" target="navTab" rel="unfinishdesign_design" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/unfinishdesign/design_list-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" class="btnAdd">设计<?php echo $this->_tpl_vars['dis']['design_name']; ?>
</a>-->
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