<?php /* Smarty version 2.6.22, created on 2015-04-27 14:15:43
         compiled from customer_contribute/index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/customer_contribute/index">
	<input type="hidden" name="pageNum" value="1" />
	<input type="hidden" name="numPerPage" value="<?php echo $this->_tpl_vars['listRows']; ?>
" />
	<input type="hidden" name="orderField" value="group_id" />
	<input type="hidden" name="orderDirection" value="desc" />
    
    <input type="hidden" name="exchangerate_name" value="<?php echo $this->_tpl_vars['exchangerate_name']; ?>
" />
</form>

<div class="pageHeader">
	<form rel="pagerForm" onSubmit="return navTabSearch(this);" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/customer_contribute/index" method="get">
	<div class="searchBar">
		<ul class="searchContent">
			<li style="width:25%;">
				<label style="width:60px">成交时间：</label>
				<input type="text" name="time_start" value="<?php echo $this->_tpl_vars['time_start']; ?>
" class="date" readonly style="width:70px"/>-<input type="text" name="time_end" style="width:70px" value="<?php echo $this->_tpl_vars['time_end']; ?>
" class="date" readonly/>
                
			</li>
            <li style="width:25%;">
			<label style="width:60px;">客户代码：</label>
            <input type="text" size="20" name="customer_code" value="<?php echo $this->_tpl_vars['customer_code']; ?>
"  />
			</li>
            <li style="width:15%;">
				<label style="width:50px;">业务员：</label>
				<select class="combox" name="saleman_name">
                <option value="">全部</option>
                <?php $_from = $this->_tpl_vars['user_hidden']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['du']):
?>
                <option value="<?php echo $this->_tpl_vars['du']['user_name']; ?>
" <?php if ($this->_tpl_vars['du']['user_name'] == $this->_tpl_vars['saleman_name']): ?> selected <?php endif; ?> > <?php echo $this->_tpl_vars['du']['user_name']; ?>
 </option>
                <?php endforeach; endif; unset($_from); ?>
                </select>
			</li>
            <li style="float:right;"><div class="buttonActive" style="float:right;"><div style="float:right;" class="buttonContent"><button type="submit">检索</button></div></div></li>
		</ul>
        <div class="subBar">
            <ul>
                <li style="float:right;">
                
                </li>
            </ul>
        </div>
	</div>
	</form>
</div>
<form action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/customer_contribute/time_extent_update" method="post" id="update_submit">
<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
           <li class="line">line</li>
            
           <li><a class="add" title="获取成交客户信息?" posttype="string" rel="page1" target="ajaxTodo" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/customer_contribute/get_customer_information"><span>获取成交客户信息</span></a></li>
           <li class="line">line</li>
           
           <input type="text" name="start" id='start' value="<?php echo $this->_tpl_vars['start']; ?>
" class="date" readonly style="width:70px"/>-<input type="text" name="end" id='end'style="width:70px" value="<?php echo $this->_tpl_vars['end']; ?>
" class="date" readonly/>
           <li><a class="add" title="获取此时间段的成本和付款?" id="time_extent_update"><span>获取此时间段的成本和付款</span></a></li>
		</ul>
	</div>
 </form>
	<table class="table" width="100%" layoutH="138">
		<thead>
			<tr>
                <th width="1%"><input type="checkbox" group="group_commission[]" class="checkboxCtrl"></th>
				<th width="1%">编号</th>
                <th width="2%">客户代码</th>
                <th width="2%">业务员</th>
                <th width="3%">询盘时间</th>
                <th width="2%">成交次数</th>
                <th width="3%">首次付款时间</th>
                <th width="3%">首次付款金额</th>
                <th width="3%">显示时间段</th>
                <th width="2%">总成本</th>
                <th width="2%">总付款</th>
                <th width="2%">总利润</th>
                <th width="2%">利润率</th>
            </tr>
		</thead>
		<tbody>
        <?php if ($this->_tpl_vars['customer_contribute']): ?>
              <?php $_from = $this->_tpl_vars['customer_contribute']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['us']):
?>
              <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
">
                  <td><input name="group_commission[]" value="<?php echo $this->_tpl_vars['us']['user_id']; ?>
" type="checkbox"></td>
                  <td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
                  <td><?php echo $this->_tpl_vars['us']['customer_code']; ?>
</td>
                  <td><?php echo $this->_tpl_vars['us']['saleman_name']; ?>
</td>
                   <td><?php echo $this->_tpl_vars['us']['quote_time_c']; ?>
</td>
                  <td><?php echo $this->_tpl_vars['us']['count']; ?>
</td>
                  <td><?php echo $this->_tpl_vars['us']['paid_time_first']; ?>
</td>
                  <?php if ($this->_tpl_vars['us']['paid_money_first'] != ''): ?>
                  <td>￥<?php echo $this->_tpl_vars['us']['paid_money_first']; ?>
</td>
                  <?php else: ?>
                  <td></td>
                  <?php endif; ?>
                  <td><?php echo $this->_tpl_vars['us']['time_extent']; ?>
</td>
                  <?php if ($this->_tpl_vars['us']['factory_cost_total'] != ''): ?>
                     <td>￥<?php echo $this->_tpl_vars['us']['factory_cost_total']; ?>
</td>
                  <?php else: ?>
                  <td></td>
                  <?php endif; ?>
                  <?php if ($this->_tpl_vars['us']['paid_money_total'] != ''): ?>
                  <td>￥<?php echo $this->_tpl_vars['us']['paid_money_total']; ?>
</td>
                  <?php else: ?>
                  <td></td>
                  <?php endif; ?>
                   <?php if ($this->_tpl_vars['us']['gain'] != ''): ?>
                  <td>￥<?php echo $this->_tpl_vars['us']['gain']; ?>
</td>
                  <?php else: ?>
                  <td></td>
                  <?php endif; ?>
                  <?php if ($this->_tpl_vars['us']['lirunlv'] != ''): ?>
                  <td><?php echo $this->_tpl_vars['us']['lirunlv']; ?>
%</td>
                  <?php else: ?>
                  <td></td>
                  <?php endif; ?>
               </tr>
              <?php endforeach; endif; unset($_from); ?>
        <?php endif; ?>
      </tbody>
	</table>
	<div class="panelBar">
		
			<div class="pages">
        <span>显示</span>
			<select class="combox" name="numPerPage" onChange="navTabPageBreak({numPerPage:this.value})">
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
<script language="javascript">
 $("#time_extent_update").click(function (){
		var start_time=$("#start").val();
		var end_time=$("#end").val();
		if(start_time=='' || end_time==''){
			alert("请选择完整的时间范围")
		}else if(start_time<'2014-01-01' || end_time<'2014-01-01'){
			alert("时间必须大于2014-01-01")
		}else{
			$.ajax({
					url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/customer_contribute/time_extent_update',//通过Ajax取数据的目标页面
					data:{"start_time":start_time,"end_time":end_time},
					type:'post',//方法，还可以是"post"
					dataType:'text',//数据类型，还有其它的，详见jQuery手册
					success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
					{
						
							alert("更新成功,请手动刷新页面")
						
						 
						
					}
		   });
			
		}
			//$("#quotation_delete").submit();
		
	});
</script>