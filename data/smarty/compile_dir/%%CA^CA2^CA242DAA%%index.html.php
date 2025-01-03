<?php /* Smarty version 2.6.22, created on 2015-05-21 10:03:51
         compiled from material_goods_monthly/index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/material_goods_monthly/index">
	<input type="hidden" name="pageNum" value="1" />
	<input type="hidden" name="numPerPage" value="<?php echo $this->_tpl_vars['listRows']; ?>
" />
	<input type="hidden" name="orderField" value="group_id" />
	<input type="hidden" name="orderDirection" value="desc" />
    
    
</form>

<div class="pageHeader">
	<form rel="pagerForm" onsubmit="return navTabSearch(this);" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/material_goods_monthly/index" method="get">
	<div class="searchBar">
		<ul class="searchContent">
			<li style="width:15%;">
				<label style="width:50px;">名称：</label>
               <input type="text" name="pd_name" id="pd_name" style="width:80px;" value="<?php echo $this->_tpl_vars['pd_name']; ?>
" />
			</li>
            <li style="width:15%;">
                <label style="width:50px;">颜色：</label>
				<input type="text" name="pd_color" id="pd_color" style="width:80px;" value="<?php echo $this->_tpl_vars['pd_color']; ?>
" />
			</li>
            <li style="width:15%;">
               
				<label style="width:50px;">尺寸：</label>
				<input type="text" name="pd_size" id="pd_size" style="width:80px;" value="<?php echo $this->_tpl_vars['pd_size']; ?>
" />
			</li>

           
            <li style="float:right;"><div class="buttonActive" style="float:right;"><div style="float:right;" class="buttonContent"><button type="submit">检索</button></div></div></li>
		</ul>
         <div class="subBar">
			
		</div>
	</div>
	</form>
</div>
<form action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/material_goods_monthly/xls_export" method="post" id="new_export_new">
<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
        	<li class="line">line</li>
			<li><a class="add" id="goods_time"  title="获取此时间的材料做货信息?" ><span>获取此时间的材料做货信息</span></a></li>
            <input type="text" size="15" readonly="readonly" name="insert_time" id="insertGoodsTime" value="<?php echo $this->_tpl_vars['nowTime']; ?>
"  class="date textInput readonly valid" datefmt="yyyy-MM" />
            <!--<li><a class="delete" href="*" target="navTab" rel="mark_acquisition"  ><span>删除</span></a></li>
			<li class="line">line</li>-->
           <!--<li><a class="icon" href="#" id="new_ex" ><span>导出EXCEL</span></a></li>
			<li class="line">line</li>
            <li><a class="add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/material_goods_monthly/materials_exit" target="navTab" rel="tongbu_add"  ><span>材料扫码出库</span></a></li>-->
		</ul>
	</div>
	<table class="table" width="1000" layoutH="138">
		<thead>
       		
			<tr>
				<th width="22"><input type="checkbox" group="group_ids[]" class="checkboxCtrl"></th>
                <th width="30">做货日期</th>
                <th width="30">材料名称</th>
                <th width="30">颜色</th>
                <th width="30">尺寸</th>               
                <th width="30">数量</th>
			</tr>
		</thead>
		<tbody>
      
        <?php if ($this->_tpl_vars['purchase_details']): ?>
			 <?php $_from = $this->_tpl_vars['purchase_details']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['pd']):
?>
              <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
" >
                <td><input name="group_ids[]" value="<?php echo $this->_tpl_vars['pd']['id']; ?>
" type="checkbox"> <?php echo $this->_tpl_vars['k']+1; ?>
</td>
                <td><?php echo $this->_tpl_vars['pd']['time']; ?>
</td>
                <td><?php echo $this->_tpl_vars['pd']['name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['pd']['color']; ?>
</td>
                <td><?php echo $this->_tpl_vars['pd']['size']; ?>
</td>
                <td><?php echo $this->_tpl_vars['pd']['quantity']; ?>
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
</form>
<script>
$(document).ready(function(e) {
	$("#goods_time").click(function (){
		var instime	=	$("#insertGoodsTime").val();
		//alert(instime);
		$.ajax({
			url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/material_goods_monthly/add',//通过Ajax取数据的目标页面
			data:{"insertTime":instime},
			type:'post',//方法，还可以是"post"
			dataType:'text',//数据类型，还有其它的，详见jQuery手册
			success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
			{
				alert(locals);
			}
	    });		
	});
	
});
</script>