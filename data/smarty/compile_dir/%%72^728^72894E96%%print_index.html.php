<?php /* Smarty version 2.6.22, created on 2014-11-06 09:37:28
         compiled from cargo_picking/print_index.html */ ?>
<form id="pagerForm" method="post" action="w_list.html">
	<input type="hidden" name="pageNum" value="1" />
	<input type="hidden" name="numPerPage" value="${model.numPerPage}" />
	<input type="hidden" name="orderField" value="${param.orderField}" />
	<input type="hidden" name="orderDirection" value="${param.orderDirection}" />
</form>
<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
        <li class="line">line</li>
		<li><a class="icon" href="javascript:$.printBox('w_list_print')"><span>打印</span></a></li>
		</ul>
	</div>

	<div id="w_list_print">
	<table class="list" width="98%" targetType="navTab" asc="asc" desc="desc" layoutH="55">
		<thead>
			<tr>
				<th width="150" >名称</th>
				<th width="70" >颜色</th>
				<th width="80">尺寸</th>
				<th width="50"> 数量</th>
				<th width="80">领料人</th>
			</tr>
		</thead>
		<tbody>
             <?php if ($this->_tpl_vars['material_acquisition']): ?>
			  <?php $_from = $this->_tpl_vars['material_acquisition']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['od']):
?>
                  <tr target="sid_user" rel="<?php echo $this->_tpl_vars['od']['id']; ?>
" >
                    <td><?php echo $this->_tpl_vars['od']['material_name']; ?>
</td>
                    <td><?php echo $this->_tpl_vars['od']['material_color']; ?>
</td>
                    <td><?php echo $this->_tpl_vars['od']['material_size']; ?>
</td>
                    <td><?php echo $this->_tpl_vars['od']['material_quantity']; ?>
</td>
                    <td><?php echo $this->_tpl_vars['od']['lingliao_man']; ?>
</td>
                  </tr>
              <?php endforeach; endif; unset($_from); ?>
             <?php endif; ?>
		</tbody>
	</table>
	</div>
	
	<div class="panelBar" >
		

</div>