<?php /* Smarty version 2.6.22, created on 2015-07-15 10:35:42
         compiled from cargo_picking/order_list.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cargo_picking/order_list">
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
	<form rel="pagerForm" onsubmit="return navTabSearch(this);" id="mark_acquisition_new" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cargo_picking/order_list" method="get">
	<div class="searchBar">
		<ul class="searchContent">
			<li style="width:15%;">
				<label style="width:60px;">材料名称：</label>
				<input type="text" name="material_name" style="width:100px;" value="<?php echo $this->_tpl_vars['material_name']; ?>
" />               
			</li>
            <li style="width:15%;">
				<label style="width:60px;">颜色：</label>
				<input type="text" name="material_color" style="width:100px;" value="<?php echo $this->_tpl_vars['material_color']; ?>
" />               
			</li>
            <li style="width:20%;">
				<label style="width:50px;">尺寸：</label>
				<input type="text" name="material_size" style="width:100px;" value="<?php echo $this->_tpl_vars['material_size']; ?>
" />               
			</li>

            <li style="width:20%;">
				<label style="width:60px;">订单号：</label>
				<input type="text" name="order_number" style="width:100px;" value="<?php echo $this->_tpl_vars['order_number']; ?>
" />
                
			</li>
             <li style="width:25%;">
				<label style="width:50px;">做货时间：</label>
				<input type="text" name="start_zuohuo_time" class="date" readonly="true" style="width:70px;" value="<?php echo $this->_tpl_vars['start_zuohuo_time']; ?>
" />-<input type="text" name="end_zuohuo_time" class="date" readonly="true" style="width:70px;" value="<?php echo $this->_tpl_vars['end_zuohuo_time']; ?>
" />
                
			</li>
           
		</ul>
         <div class="subBar">
			<ul>
             <li style="float:right;"><div class="buttonActive" style="float:right;"><div style="float:right;" class="buttonContent"><button type="submit">检索</button></div></div></li>
            </ul>
		</div>
	</div>
	</form>
</div>
<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
            <!--<input type="button" id="print_content" value="导出打印内容" />-->
            <li><a class="icon" href="#" id="get_cargo_picking_excel" ><span>导出EXCEL</span></a></li> 
         
			<li class="line">line</li>
		</ul>
	</div>
 
  <form action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cargo_picking/get_cargo_excel" method="post" id="submit_cargo_picking_export">

	<table class="table" width="100%" layoutH="138">
		<thead>
       		
			<tr>
				<th width="3%"><input type="checkbox" group="group_id[]" class="checkboxCtrl"></th>
               <th width="5">编号</th>
                <th width="30">时间</th>
                <th width="30">名称</th>
                <th width="30">颜色</th>
                <th width="30">尺寸</th>
                <th width="30">数量</th>
                <th width="30">总数量</th>
                <th width="30">订单号</th>
                <th width="30">片数</th>
                <th width="30">做货时间</th>
			</tr>
		</thead>
		<tbody>
        <?php if ($this->_tpl_vars['order']): ?>
			 <?php $_from = $this->_tpl_vars['order']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['od']):
?>
              <tr target="sid_user" rel="<?php echo $this->_tpl_vars['od']['id']; ?>
" >
                <td><input name="group_id[]" value="<?php echo $this->_tpl_vars['od']['id']; ?>
" type="checkbox"></td>
                <td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
                <td><?php echo $this->_tpl_vars['od']['insert_time']; ?>
</td>
                <td><?php echo $this->_tpl_vars['od']['name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['od']['color']; ?>
</td>
                <td><?php echo $this->_tpl_vars['od']['size']; ?>
</td>
                <td><?php echo $this->_tpl_vars['od']['number']; ?>
</td>
                <td><?php echo $this->_tpl_vars['od']['all_number']; ?>
</td>
                <td><?php echo $this->_tpl_vars['od']['order_number']; ?>
</td>
                <td><?php echo $this->_tpl_vars['od']['pianshu']['number']; ?>
</td>
                <td><?php echo $this->_tpl_vars['od']['goods_time']; ?>
</td>
              </tr>
              
             <?php endforeach; endif; unset($_from); ?>
             <?php endif; ?>
		</tbody>
	</table>
</form>    
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
</div>
<script type="text/javascript" language="javascript">



 $(document).ready(function(){
	 
	$("#cargo_picking_submit").click(function (){

			var check_arr = '';
			var lingliao_status = '';
			$("input[name='group_idss[]']:checkbox:checked").each(function(){ //由于复选框一般选中的是多个,所以可以循环输出
				if(check_arr == ''){
					check_arr += $(this).val();
					lingliao_status += $("#lingliao_status" + $(this).val()).val();
				}else{
					check_arr += '|'+$(this).val();
					lingliao_status += '|'+$("#lingliao_status" + $(this).val()).val();
				}
			});

		lingliao_status=lingliao_status.split("|");	
		if(check_arr!=''){
			
			for(var i=0;i<lingliao_status.length;i++){
	
				if(lingliao_status[i]=='1'){
					var a = '1';
					alert("已领料不能重复添加！");
					break;		
				}
			}			
			
			if(!a){
				$("#mark_acquisition_new_1").submit();
			}
			
		}else{
			alert("请选择信息！");
		}
//var price = $("#price"+key).val();
		
		//$("#mark_acquisition_new").submit();
	});	 
	 
	 
	//var check_arr = [];
	$("#mark_acquisition_add").click(function(){

			var check_arr1 = '';
	        var Acquisition_state = '';
			$("input[name='group_ids[]']:checkbox:checked").each(function(){ //由于复选框一般选中的是多个,所以可以循环输出
				if(check_arr1 == ''){
					check_arr1 += $(this).val();
					Acquisition_state += $("#Acquisition_state" + $(this).val()).val();
				}else{
				      check_arr1 += ','+$(this).val();
					  Acquisition_state += '|'+$("#Acquisition_state" + $(this).val()).val();
				}
			});	
			
			
			var p = 'check_arr1-'+check_arr1+'.html';

			if(check_arr1 ==''){
				alert('必须选择客户');
			}else{
				
					$.ajax({
						url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/cargo_picking/mark_acquisition-'+p,
						type:'get', 
						dataType:'json',
						data:p,
						//success:check_back
					});
				
			}			
			
/*			Acquisition_state=Acquisition_state.split("|");
            for(var i=0;i<Acquisition_state.length;i++){

				if(Acquisition_state[i]=='1'){
					var a = '1';
				    alert("已领料的不能再领！");break;	
				}
			  }
			  //alert(check_arr1)
			if(check_arr1 ==''){
				alert('必须选择信息');
			}else{
			     if(!a){
					 
					
				}
			}*/
		
		});
	
});

//导出Excel的js
$("#get_cargo_picking_excel").click(function (){
		if($("input[type='checkbox']").is(":checked")){
			
			alert("即将导出选中数据");
			$("#submit_cargo_picking_export").submit();
		}else{
			alert("请选择导出的数据");
		}
	});
</script>