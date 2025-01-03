<?php /* Smarty version 2.6.22, created on 2016-01-12 11:51:08
         compiled from materials_cn/index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/materials_cn/index">
	<input type="hidden" name="pageNum" value="1" />
	<input type="hidden" name="numPerPage" value="<?php echo $this->_tpl_vars['listRows']; ?>
" />
	<input type="hidden" name="orderField" value="group_id" />
	<input type="hidden" name="orderDirection" value="desc" />
</form>

<div class="pageHeader">
	<form rel="pagerForm" onSubmit="return navTabSearch(this);" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/materials_cn/index" method="get">
	<div class="searchBar">
		<ul class="searchContent">
			<li style="width:25%;">
				<label>名称：</label>
				<input type="text" name="name" value="<?php echo $this->_tpl_vars['name']; ?>
"/>
			</li>
            <li style="width:25%;">
				<label>颜色：</label>
				<select class="combox" name="color">
                <option value="">全部</option>
                <?php $_from = $this->_tpl_vars['cn_color']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['du']):
?>
              		<option value="<?php echo $this->_tpl_vars['du']['id']; ?>
" <?php if ($this->_tpl_vars['color'] == $this->_tpl_vars['du']['id']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['du']['name']; ?>
</option>
                <?php endforeach; endif; unset($_from); ?>
                </select>
			</li>
            <li style="width:25%;">
				 <label>尺寸：</label>
				 <select class="combox" name="size">
                 <option value="">全部</option>
                 <?php $_from = $this->_tpl_vars['cn_standard']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['du']):
?>
              		<option value="<?php echo $this->_tpl_vars['du']['id']; ?>
" <?php if ($this->_tpl_vars['size'] == $this->_tpl_vars['du']['id']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['du']['name']; ?>
</option>
                 <?php endforeach; endif; unset($_from); ?>
                 </select>
			</li>
            <li style="float:right;"><div class="buttonActive" style="float:right;"><div class="buttonContent" style="float:right;"><button type="submit">检索</button></div></div></li>
			
		</ul>
         <div class="subBar">
			
		</div>
	</div>
	</form>
</div>
<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
        <li class="line">line</li>
			<li><a class="add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/materials_cn/add/" target="navTab" rel="page1"><span>添加</span></a></li>
		<li class="line">line</li>
        	<li><a class="add" href="#" id="create_barcode"><span>生成材料条形码</span></a></li> 
        <li class="line">line</li>
			
		</ul>
	</div>
	<table class="table" width="1200" layoutH="138">
		<thead>
			<tr>
				<th width="5"><input type="checkbox" group="group_ids[]" class="checkboxCtrl"></th>
                <th width="5">id</th>
                <th width="22">时间</th>
                <th width="42">名称</th>
                <th width="16">code金石滩</th>
                <th width="16">code七贤岭</th>
				<th width="22">颜色</th>
                <th width="22">规格</th>
                <th width="22">计量单位</th>
                <th width="22">衣服成本</th>
                <th width="22">衣服售价</th>
                <th width="10">操作</th>
			</tr>
		</thead>
		<tbody>
        <?php if ($this->_tpl_vars['materials_cn_list']): ?>
			 <?php $_from = $this->_tpl_vars['materials_cn_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['ug']):
?>
              <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
">
                <td><input name="group_ids[]" value="<?php echo $this->_tpl_vars['ug']['id']; ?>
" type="checkbox"></td>
                <td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
                <td><?php echo $this->_tpl_vars['ug']['insert_time']; ?>
</td>
                <td><?php echo $this->_tpl_vars['ug']['name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['ug']['code_jst']; ?>
</td>
                <td><?php echo $this->_tpl_vars['ug']['code_qxl']; ?>
</td>
                <td><?php echo $this->_tpl_vars['ug']['color']; ?>
</td>
                <td><?php echo $this->_tpl_vars['ug']['size']; ?>
</td>
                <td><?php echo $this->_tpl_vars['ug']['unit']; ?>
</td>
                <td><?php echo $this->_tpl_vars['ug']['clothes_cost']; ?>
</td>
                <td><?php echo $this->_tpl_vars['ug']['clothes_price']; ?>
</td>
                <td><a title="删除吗？" target="ajaxTodo" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/materials_cn/del-id-<?php echo $this->_tpl_vars['ug']['id']; ?>
.html" class="btnDel">删除</a> <a title="编辑" target="navTab" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/materials_cn/edit-id-<?php echo $this->_tpl_vars['ug']['id']; ?>
.html" class="btnEdit">编辑</a></td>
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
$(document).ready(function()
{	
	   $("#create_barcode").click(function (){

			var check_arr = '';

			$("input[name='group_ids[]']:checkbox:checked").each(function(){ //由于复选框一般选中的是多个,所以可以循环输出
				if(check_arr == ''){
					check_arr += $(this).val();
				}else{
					check_arr += '|'+$(this).val();	
				}
			});			
            var p = 'ids-'+check_arr+'.html';

			if(check_arr ==''){
				alert('必须选择信息！');
			}else{
			    window.open('<?php echo $this->_tpl_vars['__ROOT__']; ?>
/materials_cn/barcode-'+p);
				
			}	
		});
});
</script>