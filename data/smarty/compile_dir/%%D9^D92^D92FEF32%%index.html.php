<?php /* Smarty version 2.6.22, created on 2023-07-20 08:45:49
         compiled from process_information/index.html */ ?>
 <form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/process_information/index">
	<input type="hidden" name="pageNum" value="1" />
	<input type="hidden" name="numPerPage" value="<?php echo $this->_tpl_vars['listRows']; ?>
" />
	<input type="hidden" name="orderField" value="group_id" />
	<input type="hidden" name="orderDirection" value="desc" />
    
    <input type="hidden" name="order_status" value="<?php echo $this->_tpl_vars['order_status']; ?>
" />
    <input type="hidden" name="saleman_user_id" value="<?php echo $this->_tpl_vars['saleman_user_id']; ?>
" />
    <input type="hidden" name="start_time" value="<?php echo $this->_tpl_vars['start_time']; ?>
" />
    <input type="hidden" name="end_time" value="<?php echo $this->_tpl_vars['end_time']; ?>
" />
    <input type="hidden" name="customer_name" value="<?php echo $this->_tpl_vars['customer_name']; ?>
" />
    <input type="hidden" name="customer_code" value="<?php echo $this->_tpl_vars['customer_code']; ?>
" />
    <input type="hidden" name="quotation_code" value="<?php echo $this->_tpl_vars['quotation_code']; ?>
" />
    
</form>

<div class="pageHeader">
	<form rel="pagerForm" onsubmit="return navTabSearch(this);" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/process_information/index" method="get">
	<div class="searchBar">
		<ul class="searchContent">
			<?php if ($this->_tpl_vars['group_id'] != '53' || $this->_tpl_vars['group_id'] != '68'): ?>
            <li style="width:15%;">
				<label style="width:50px;">业务员：</label>
				<select class="combox" name="saleman_name">
                <option value="">全部</option>
                <?php $_from = $this->_tpl_vars['sale_users']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['du']):
?>
                <option value="<?php echo $this->_tpl_vars['du']['user_name']; ?>
" <?php if ($this->_tpl_vars['du']['user_name'] == $this->_tpl_vars['saleman_name']): ?> selected <?php endif; ?> > <?php echo $this->_tpl_vars['du']['user_name']; ?>
 </option>
                <?php endforeach; endif; unset($_from); ?>
                </select>
			</li>
            <?php endif; ?>
            <li style="width:25%;">
				<label style=" width:50px">时间：</label>
				<input type="text" name="start_time" class="date" readonly style="width:70px;" value="<?php echo $this->_tpl_vars['start_time']; ?>
" />-<input type="text" name="end_time" class="date" readonly style="width:70px;" value="<?php echo $this->_tpl_vars['end_time']; ?>
" />
                
			</li>
            <li style="width:18%;">
				<label style=" width:70px">导出状态：</label>
				<select class="combox" name="export_status">
                <option value="">全部</option>
              	<option value="1" <?php if ($this->_tpl_vars['export_status'] == '1'): ?>selected="selected"<?php endif; ?>>未导出</option>
                <option value="2" <?php if ($this->_tpl_vars['export_status'] == '2'): ?>selected="selected"<?php endif; ?>>已导出</option>
                </select>
			</li>
            <li style="width:17%;">
				<label style="width:50px;">订单号：</label>
				<input type="text" name="order_number" style="width:80px;" value="<?php echo $this->_tpl_vars['order_number']; ?>
" />
                
			</li>
            
             <li style="width:15%;">
				<label style="width:50px;">返单号：</label>
				<input type="text" name="return_number" style="width:80px;" value="<?php echo $this->_tpl_vars['return_number']; ?>
" />
                
			</li>
            <li style="float:right;"><div class="buttonActive" style="float:right;"><div style="float:right;" class="buttonContent"><button type="submit">检索</button></div></div></li>
		</ul>
         <div class="subBar">
			
		</div>
	</div>
	</form>
</div>
<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
<!--        <li class="line">line</li>
			<li><a class="add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/process_information/pi_piliang" target="selectedTodo" rel="group_ids[]"  ><span>导出CDR</span></a></li>
            <li class="line">line</li>-->
		</ul>
	</div>
	<table class="table" width="100%" layoutH="138">
		<thead>
       		
			<tr>
                <!--<th width="22"><input type="checkbox" group="group_ids[]" class="checkboxCtrl"></th>-->
                <th width="2%">编号</th>
                <th width="13%">时间</th>
                <th width="10%">缩略图</th>
                <th width="15%">多版下载</th>
                <th width="5%">业务员</th>
                <th width="10%">订单号</th>
                <th width="10%">返单号</th>
                <th width="20%">尺寸</th>
                <th width="10%">数量</th>
               
			</tr>
		</thead>
		<tbody>
       
        <?php if ($this->_tpl_vars['user_group_list']): ?>
			 <?php $_from = $this->_tpl_vars['user_group_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['dis']):
?>

                 <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
" >
                    <td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
                    <!--<td><input name="group_ids[]" value="<?php echo $this->_tpl_vars['dis']['upload_cdr']; ?>
" type="checkbox"></td>-->
                    <td><?php echo $this->_tpl_vars['dis']['new_time']; ?>
</td>
                    
                    <td><?php if ($this->_tpl_vars['dis']['upload_cdr'] != ''): ?><a href="<?php echo $this->_tpl_vars['url']; ?>
<?php echo $this->_tpl_vars['dis']['upload_cdr']; ?>
"><img src="<?php echo $this->_tpl_vars['dis']['upload_jpg']; ?>
" width="100px" height="100px" ></a><?php else: ?><a onclick="sign();"><img src="<?php echo $this->_tpl_vars['dis']['upload_jpg']; ?>
" width="100px" height="100px" ></a><?php endif; ?></td>
                    <!--<td><?php echo $this->_tpl_vars['dis']['upload_cdr']; ?>
</td>-->
                    <td>
                    <?php if ($this->_tpl_vars['dis']['all_img']): ?>
                        <?php $_from = $this->_tpl_vars['dis']['all_img']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['val']):
?>
                        <?php echo $this->_tpl_vars['val']['name']; ?>
:<a href="<?php echo $this->_tpl_vars['val']['upload_jpg']; ?>
" target="_blank" style="color:#03F; font-size:14px; cursor:pointer;">下载jpg</a>&nbsp; &nbsp; <a href="<?php echo $this->_tpl_vars['val']['upload_cdr']; ?>
" style="color:#03F; font-size:14px; cursor:pointer;">下载cdr</a></br>
                        <?php endforeach; endif; unset($_from); ?>
                    <?php endif; ?>
                    </td>
                    <td><?php echo $this->_tpl_vars['dis']['saleman_name']; ?>
</td>
                    <td><?php echo $this->_tpl_vars['dis']['order_number']; ?>
</td>
                    <td><?php echo $this->_tpl_vars['dis']['return_number']; ?>
</td>             
                    <?php if ($this->_tpl_vars['dis']['size'] != ""): ?>
                        <td><?php echo $this->_tpl_vars['dis']['size']; ?>
cm</td>
                    <?php else: ?>
                        <?php if ($this->_tpl_vars['dis']['cm_w'] != ""): ?>
                           <td><?php echo $this->_tpl_vars['dis']['cm_w']; ?>
cmX<?php echo $this->_tpl_vars['dis']['cm_h']; ?>
cm</td>
                        <?php else: ?>
                           <td></td>
                        <?php endif; ?>   
                    <?php endif; ?>
                    <td><?php echo $this->_tpl_vars['dis']['number']; ?>
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
<script language="javascript">
	function sign(){
		alert('此图片的cdr为空！');
	}
</script>