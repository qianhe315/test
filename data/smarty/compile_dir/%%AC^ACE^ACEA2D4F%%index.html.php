<?php /* Smarty version 2.6.22, created on 2014-12-15 16:41:30
         compiled from standard_paper_set/index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/standard_paper_set/index">
	<input type="hidden" name="pageNum" value="1" />
	<input type="hidden" name="numPerPage" value="<?php echo $this->_tpl_vars['listRows']; ?>
" />
	<input type="hidden" name="orderField" value="group_id" />
	<input type="hidden" name="orderDirection" value="desc" />
    
    
</form>

<div class="pageHeader">
	<form rel="pagerForm" onsubmit="return navTabSearch(this);" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/standard_paper_set/index" method="get">
	<div class="searchBar">
		<ul class="searchContent">
		
			
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
/standard_paper_set/add/" target="dialog" rel="page1"><span>添加</span></a></li>
			
			<li class="line">line</li>

		</ul>
	</div>
	<table class="list" width="1000" layoutH="88">
		<thead>
            <tr>
            	<th colspan="5" align="center" ></th>
				<th colspan="4" align="center" ><?php echo $this->_tpl_vars['m']; ?>
二等分</th>
				<th colspan="4" align="center" ><?php echo $this->_tpl_vars['m']; ?>
三等分</th>
				<th colspan="2" align="center" ><?php echo $this->_tpl_vars['m']; ?>
四等分</th>
                <th colspan="1" align="center" ></th>
            </tr>
            
			<tr>	
                <th width="39" >编号</th>
                <th width="39" >名称</th>
                <th width="38" >W</th>
                <th width="40" >H</th>
                <th width="40" >形状</th>
                <th width="40" >W1</th>
                <th width="30" >H1</th>
                <th width="40" >W2</th>
                <th width="40" >H2</th>
                				

                <th width="40" >W1</th>
                <th width="30" >H1</th>
                <th width="40" >W2</th>
                <th width="40" >H2</th>
             
                <th width="40" >W1</th>
				<th width="40" >H1</th>

				<th width="40" >编辑</th>
            </tr>
            <?php $_from = $this->_tpl_vars['standard_paper_set']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['dis']):
?>
                <tr>	
                    <td width="39" ><?php echo $this->_tpl_vars['k']+1; ?>
</td>
                    <td width="39" ><?php echo $this->_tpl_vars['dis']['name']; ?>
</td>
                    <td width="38" ><?php echo $this->_tpl_vars['dis']['w']; ?>
</td>
                    <td width="40" ><?php echo $this->_tpl_vars['dis']['h']; ?>
</td>
                    
                         <?php if ($this->_tpl_vars['dis']['status'] == '1'): ?>
                              <td width="40" >
                                  正方形
                              </td>
                         <?php else: ?>
                              <td width="40" >
                                  长方形
                              </td>                         
                         <?php endif; ?>
                    
                    <td width="40" ><?php echo $this->_tpl_vars['dis']['w21']; ?>
</td>
                    <td width="40" ><?php echo $this->_tpl_vars['dis']['h21']; ?>
</td>
                    <td width="30" ><?php echo $this->_tpl_vars['dis']['w22']; ?>
</td>
                    <td width="40" ><?php echo $this->_tpl_vars['dis']['h22']; ?>
</td>
                    <td width="40" ><?php echo $this->_tpl_vars['dis']['w31']; ?>
</td>
                                    
    
                    <td width="40" ><?php echo $this->_tpl_vars['dis']['h31']; ?>
</td>
                    <td width="30" ><?php echo $this->_tpl_vars['dis']['w32']; ?>
</td>
                    <td width="40" ><?php echo $this->_tpl_vars['dis']['h32']; ?>
</td>
                    <td width="40" ><?php echo $this->_tpl_vars['dis']['w4']; ?>
</td>
                 
                    <td width="40" ><?php echo $this->_tpl_vars['dis']['h4']; ?>
</td>
                    
    
                    <td width="40" >
                    <a title="删除吗？" target="ajaxTodo" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/standard_paper_set/del-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" class="btnDel">删除</a> <a title="编辑" target="dialog" rel="standard_paper_set" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/standard_paper_set/edit-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" class="btnEdit">编辑</a> 
                    </td>
                </tr>            
            <?php endforeach; endif; unset($_from); ?>
		</thead>
		<tbody>
            
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