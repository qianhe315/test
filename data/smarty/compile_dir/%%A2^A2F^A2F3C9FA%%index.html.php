<?php /* Smarty version 2.6.22, created on 2014-08-14 15:22:06
         compiled from memorial_day/index.html */ ?>

<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/h_version_set/index">
	<input type="hidden" name="pageNum" value="1" />
	<input type="hidden" name="numPerPage" value="<?php echo $this->_tpl_vars['listRows']; ?>
" />
	<input type="hidden" name="orderField" value="group_id" />
	<input type="hidden" name="orderDirection" value="desc" />
    
    <input type="hidden" name="exchangerate_name" value="<?php echo $this->_tpl_vars['exchangerate_name']; ?>
" />
</form>

<div class="pageHeader">
		<?php if ($this->_tpl_vars['id'] == '1'): ?>
    <form rel="pagerForm" onsubmit="return navTabSearch(this);" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/memorial_day/memorial_day_january" method="get">
    <?php elseif ($this->_tpl_vars['id'] == '2'): ?>
    <form rel="pagerForm" onsubmit="return navTabSearch(this);" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/memorial_day/memorial_day_february" method="get">
     <?php elseif ($this->_tpl_vars['id'] == '3'): ?>
    <form rel="pagerForm" onsubmit="return navTabSearch(this);" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/memorial_day/memorial_day_march" method="get">
     <?php elseif ($this->_tpl_vars['id'] == '4'): ?>
    <form rel="pagerForm" onsubmit="return navTabSearch(this);" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/memorial_day/memorial_day_april" method="get">
     <?php elseif ($this->_tpl_vars['id'] == '5'): ?>
    <form rel="pagerForm" onsubmit="return navTabSearch(this);" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/memorial_day/memorial_day_may" method="get">
     <?php elseif ($this->_tpl_vars['id'] == '6'): ?>
    <form rel="pagerForm" onsubmit="return navTabSearch(this);" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/memorial_day/memorial_day_june" method="get">
     <?php elseif ($this->_tpl_vars['id'] == '7'): ?>
    <form rel="pagerForm" onsubmit="return navTabSearch(this);" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/memorial_day/memorial_day_july" method="get">
     <?php elseif ($this->_tpl_vars['id'] == '8'): ?>
    <form rel="pagerForm" onsubmit="return navTabSearch(this);" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/memorial_day/memorial_day_august" method="get">
     <?php elseif ($this->_tpl_vars['id'] == '9'): ?>
    <form rel="pagerForm" onsubmit="return navTabSearch(this);" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/memorial_day/memorial_day_september" method="get">
     <?php elseif ($this->_tpl_vars['id'] == '10'): ?>
    <form rel="pagerForm" onsubmit="return navTabSearch(this);" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/memorial_day/memorial_day_october" method="get">
     <?php elseif ($this->_tpl_vars['id'] == '11'): ?>
    <form rel="pagerForm" onsubmit="return navTabSearch(this);" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/memorial_day/memorial_day_november" method="get">
     <?php elseif ($this->_tpl_vars['id'] == '12'): ?>
    <form rel="pagerForm" onsubmit="return navTabSearch(this);" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/memorial_day/memorial_day_december" method="get">
    <?php endif; ?>
	<div class="searchBar">
		<ul class="searchContent">
      
       
                <li style="width:20%;">
                <label>事件：</label>
				<select class="combox" name="shijian">
              	<option value="1" <?php if ($this->_tpl_vars['shijian'] == '1'): ?>selected="selected"<?php endif; ?>>生日</option>
                <option value="2" <?php if ($this->_tpl_vars['shijian'] == '2'): ?>selected="selected"<?php endif; ?>>首付款</option>
                <option value="3" <?php if ($this->_tpl_vars['shijian'] == '3'): ?>selected="selected"<?php endif; ?>>首报价</option>
                </select>
			</li>
        <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['id']; ?>
" />
        <br>
<li style="float:right;"><div class="buttonActive" style="float:right;"><div style="float:right;" class="buttonContent"><button type="submit">检索</button></div></div></li>
		</ul>
		
		
	</div>
	</form>
</div>
<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
       
		 
		</ul>
	</div>
		<table class="table" width="100%" layoutH="120">
		<thead>
			<tr>
				<th width="2%"><input type="checkbox" group="group_ids[]" class="checkboxCtrl"></th>
                <th width="5%">编号</th>
                <th width="5%">询盘时间</th>
                <th width="5%">事件</th>
                <th width="5%">时间</th>
                <th width="5%">客户代码</th>
                <th width="5%">客户名</th>
                <th width="5%">公司</th>
                <th width="5%">业务员</th>
			</tr>
		</thead>
		<tbody>
        <?php if ($this->_tpl_vars['customer_birthday_type']): ?>
			 <?php $_from = $this->_tpl_vars['customer_birthday_type']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['ug']):
?>
              <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
">
               <td><input name="group_ids[]" value="<?php echo $this->_tpl_vars['dis']['id']; ?>
" type="checkbox"></td>
                 <td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
                <td><?php echo $this->_tpl_vars['ug']['insert_time']; ?>
</td>
 				<td>生日</td>
                <td><?php echo $this->_tpl_vars['ug']['time']; ?>
</td>
                <td><?php echo $this->_tpl_vars['ug']['customer_code']; ?>
</td>
                <td><?php echo $this->_tpl_vars['ug']['customer_name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['ug']['company']; ?>
</td>
                <td><?php echo $this->_tpl_vars['ug']['name']; ?>
</td>
              </tr>
              
             <?php endforeach; endif; unset($_from); ?>
             <?php endif; ?>
         
          <?php if ($this->_tpl_vars['saledetail']): ?>
       <?php $_from = $this->_tpl_vars['saledetail']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['sa']):
?>
        <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
">
          <td><input name="group_ids[]" value="<?php echo $this->_tpl_vars['dis']['id']; ?>
" type="checkbox"></td>
           <td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
          <td><?php echo $this->_tpl_vars['sa']['insert_time']; ?>
</td>
          <td><?php echo $this->_tpl_vars['sa']['type']; ?>
</td>
          <td><?php echo $this->_tpl_vars['sa']['time']; ?>
</td>
          <td><?php echo $this->_tpl_vars['sa']['customer_code']; ?>
</td>
          <td><?php echo $this->_tpl_vars['sa']['customer_name']; ?>
</td>
          <td><?php echo $this->_tpl_vars['sa']['company']; ?>
</td>
          <td><?php echo $this->_tpl_vars['sa']['name']; ?>
</td>
        </tr>
        
       <?php endforeach; endif; unset($_from); ?>
       <?php endif; ?>
          <?php if ($this->_tpl_vars['customer_quotation']): ?>
       <?php $_from = $this->_tpl_vars['customer_quotation']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['cq']):
?>
        <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
">
          <td><input name="group_ids[]" value="<?php echo $this->_tpl_vars['dis']['id']; ?>
" type="checkbox"></td>
          <td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
          <td><?php echo $this->_tpl_vars['cq']['insert_time']; ?>
</td>
          <td><?php echo $this->_tpl_vars['cq']['type']; ?>
</td>
          <td><?php echo $this->_tpl_vars['cq']['time']; ?>
</td>
          <td><?php echo $this->_tpl_vars['cq']['customer_code']; ?>
</td>
          <td><?php echo $this->_tpl_vars['cq']['customer_name']; ?>
</td>
          <td><?php echo $this->_tpl_vars['cq']['company']; ?>
</td>
          <td><?php echo $this->_tpl_vars['cq']['name']; ?>
</td>
        </tr>
        
       <?php endforeach; endif; unset($_from); ?>
       <?php endif; ?>    
		</tbody>
	</table>
	<div class="panelBar">
		<div class="pages">
			
			

	</div>
</div>