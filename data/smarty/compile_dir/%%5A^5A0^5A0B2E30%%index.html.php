<?php /* Smarty version 2.6.22, created on 2023-03-24 16:26:39
         compiled from ss_freight/index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/ss_freight/index">
  <input type="hidden" name="pageNum" value="1" />
  <input type="hidden" name="numPerPage" value="<?php echo $this->_tpl_vars['listRows']; ?>
" />
  <input type="hidden" name="orderField" value="group_id" />
  <input type="hidden" name="orderDirection" value="desc" />
  

</form>
<div class="pageHeader">
  <form rel="pagerForm" onSubmit="return navTabSearch(this);" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/ss_freight/index" method="get">
    <div class="searchBar">
      <ul class="searchContent">
 		
        <li style="width:15%;">
            <label style="width:50px;">时间：</label>
            <input type="text" name="start_time" class="date" readonly="true" style="width:70px;" value="<?php echo $this->_tpl_vars['start_time']; ?>
" />-<input type="text" name="end_time" class="date" readonly="true" style="width:70px;" value="<?php echo $this->_tpl_vars['end_time']; ?>
" />
        </li>
        <li style="width:15%;">
          <label style="width:60px;">客户代码：</label>
          <input type="text" name="customer_code" value="<?php echo $this->_tpl_vars['customer_code']; ?>
"  style="width:120px;" />
        </li>
        <li style="width:15%;">
          <label style="width:60px;">发票号：</label>
          <input type="text" name="invoice_number" value="<?php echo $this->_tpl_vars['invoice_number']; ?>
" alt="" style="width:120px;" />
        </li>
        
        <li style="width:15%;">
          <label style="width:60px;">订单号：</label>
          <input type="text" name="order_number" value="<?php echo $this->_tpl_vars['order_number']; ?>
" alt="" style="width:120px;" />
        </li>

        <li style="float:right;">
            <div class="buttonActive" style="float:right;">
              <div class="buttonContent" style="float:right;">
                <button type="submit">检索</button>
              </div>
            </div>
          </li>
      </ul>
      
    </div>
  </form>
</div>
<form action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/ss_freight/index" method="post" id="">
  <div class="pageContent">
  <div class="panelBar">
    <ul class="toolBar">

      <li><a class="edit" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/ss_freight/update_ss_invoice/" target="ajaxTodo" rel="page1" postType="string" title="确定获取最新SS数据?"><span>获取最新SS数据</span></a></li>
      <li class="line">line</li>

    </ul>
  </div>
  <table class="table"  width="1200" layoutH="138">
    <thead>
      <tr>
        <th width="1%">编号</th>
        <th width="5%">日期</th>
        <th width="3%">业务员</th>
        <th width="3%">客户代码</th>
        <th width="4%">发票号</th>
        <!--<th width="10%">订单号</th>-->
        <th width="3%">应付款</th>
        <th width="3%">实际运费</th>
      </tr>
    </thead>
    <tbody>
    <?php if ($this->_tpl_vars['ss_invoice_list']): ?>
    <?php $_from = $this->_tpl_vars['ss_invoice_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['fl']):
?>

    <tr style="text-align:right; line-height:26px;" target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
">
      <td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
      <td><?php echo $this->_tpl_vars['fl']['insert_time']; ?>
</td>
      <td><?php echo $this->_tpl_vars['fl']['saleman_name']; ?>
</td>
      <td><?php echo $this->_tpl_vars['fl']['customer_code']; ?>
</td>
      <td><?php echo $this->_tpl_vars['fl']['invoice_number']; ?>
</td>
      <!--<td><?php echo $this->_tpl_vars['fl']['order_number']; ?>
</td>-->
      <td><?php echo $this->_tpl_vars['fl']['total']; ?>
</td>
      
      <?php if ($this->_tpl_vars['fl']['freight'] != ''): ?>
      <td><div id="freight<?php echo $this->_tpl_vars['fl']['id']; ?>
" > <a onclick="return click_a('divOne_<?php echo $this->_tpl_vars['fl']['id']; ?>
','<?php echo $this->_tpl_vars['fl']['id']; ?>
')" style="cursor:pointer;"><?php echo $this->_tpl_vars['fl']['freight']; ?>
</a></div><div id="divOne_<?php echo $this->_tpl_vars['fl']['id']; ?>
" style="display:none;"><input type="text" id="update_freight_<?php echo $this->_tpl_vars['fl']['id']; ?>
" style="width:80px;height:19px;"  value="<?php echo $this->_tpl_vars['fl']['freight']; ?>
" onkeyup="update_freight(<?php echo $this->_tpl_vars['fl']['id']; ?>
)"/> <a style="cursor:pointer;" onclick="return queding('divOne_<?php echo $this->_tpl_vars['fl']['id']; ?>
','<?php echo $this->_tpl_vars['fl']['id']; ?>
')">确定</a></div></td>
      </td>
      <?php else: ?>
      <td><div id="freight<?php echo $this->_tpl_vars['fl']['id']; ?>
" > <a onclick="return click_a('divOne_<?php echo $this->_tpl_vars['fl']['id']; ?>
','<?php echo $this->_tpl_vars['fl']['id']; ?>
')" style="cursor:pointer;">--待填加--</a></div><div id="divOne_<?php echo $this->_tpl_vars['fl']['id']; ?>
" style="display:none;"><input type="text" id="update_freight_<?php echo $this->_tpl_vars['fl']['id']; ?>
" style="width:80px;height:19px;"  value="" onkeyup="update_freight(<?php echo $this->_tpl_vars['fl']['id']; ?>
)"/> <a style="cursor:pointer;" onclick="return queding('divOne_<?php echo $this->_tpl_vars['fl']['id']; ?>
','<?php echo $this->_tpl_vars['fl']['id']; ?>
')">确定</a></div></td>
      </td>
      <?php endif; ?>
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
</form>

</div>
<script>
function click_a(divDisplay,id){
			
	if(document.getElementById(divDisplay).style.display != "block"){
		document.getElementById(divDisplay).style.display = "block";
	}else{
		document.getElementById(divDisplay).style.display = "none";
	}
	$('#freight' + id).css('display','none');
}


function queding(divDisplay,id){
		var freight = $("#update_freight_"+id).val();

			   $.ajax({
					url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/ss_freight/submit_index_update',//通过Ajax取数据的目标页面
					data:{"id":id,"freight":freight},
					type:'post',//方法，还可以是"post"
					dataType:'text',//数据类型，还有其它的，详见jQuery手册
					success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
					{
						
						 locals=locals.split("|");
						 if(locals[0]==1){
							 alert("修改成功");
							 document.getElementById(divDisplay).style.display = "none";
							 $('#freight' + id).css('display','block');
							 document.getElementById("freight"+id).innerHTML="<a  onClick='return click_a(\"divOne_"+id+"\",\""+id+"\" )' style=cursor:pointer;>"+locals[1]+"</a>"
						 }else{
							 alert("修改失败");
							 document.getElementById(divDisplay).style.display = "none";
							 $('#freight' + id).css('display','block');
							 document.getElementById("freight"+id).innerHTML="<a  onClick='return click_a(\"divOne_"+id+"\",\""+id+"\" )' style=cursor:pointer;>"+locals[1]+"</a>"
						 }
						
					}
		   });

		
}   

</script>