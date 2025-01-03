<?php /* Smarty version 2.6.22, created on 2024-09-02 16:13:58
         compiled from newcustomer/index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/newcustomer/index">
  <input type="hidden" name="pageNum" value="1" />
  <input type="hidden" name="numPerPage" value="<?php echo $this->_tpl_vars['listRows']; ?>
" />
  <input type="hidden" name="orderField" value="group_id" />
  <input type="hidden" name="orderDirection" value="desc" />
  
  <input type="hidden" name="customer_name" value="<?php echo $this->_tpl_vars['customer_name']; ?>
" />
    <input type="hidden" name="email" value="<?php echo $this->_tpl_vars['email']; ?>
" />
    <input type="hidden" name="company" value="<?php echo $this->_tpl_vars['company']; ?>
" />
    <input type="hidden" name="start_time" value="<?php echo $this->_tpl_vars['start_time']; ?>
" />
    <input type="hidden" name="end_time" value="<?php echo $this->_tpl_vars['end_time']; ?>
" />
    <input type="hidden" name="sale_user_id" value="<?php echo $this->_tpl_vars['sale_user_id']; ?>
" />
    <input type="hidden" name="customer_status" value="<?php echo $this->_tpl_vars['customer_status']; ?>
" />
</form>
<div class="pageHeader">
  <form rel="pagerForm" onSubmit="return navTabSearch(this);" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/newcustomer/index" method="get">
    <div class="searchBar">
      <ul class="searchContent">
       <?php if ($this->_tpl_vars['user_hidden']['group_id'] == '5' || $this->_tpl_vars['user_hidden']['group_id'] == '50'): ?>
       <li>
			<label style="width:60px;">业务员：</label>
			<select class="combox" name="sale_user_id">
            <option value="" >全部</option>
            <option value="0" <?php if ($this->_tpl_vars['sale_user_id'] == '0'): ?>selected="selected"<?php endif; ?>>空</option>
             <?php $_from = $this->_tpl_vars['sales_user']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['su']):
?>
                 <option value="<?php echo $this->_tpl_vars['su']['user_id']; ?>
" <?php if ($this->_tpl_vars['su']['user_id'] == $this->_tpl_vars['sale_user_id']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['su']['user_name']; ?>
</option>
             <?php endforeach; endif; unset($_from); ?>
            </select>
	    </li>
        <?php endif; ?>
        
        <li>
          <label style="width:60px;">客户名：</label>
          <input type="text" name="customer_name" value="<?php echo $this->_tpl_vars['customer_name']; ?>
"  style="width:120px;" />
        </li>
        <li>
          <label style="width:60px;">客户代码：</label>
          <input type="text" name="customer_code" value="<?php echo $this->_tpl_vars['customer_code']; ?>
"  style="width:120px;" />
          <input type='radio' name='standard' value='1' <?php if ($this->_tpl_vars['standard'] == 1 || empty ( $this->_tpl_vars['standard'] )): ?>checked='checked'<?php endif; ?> >精确 <input type='radio' name='standard' value='2' <?php if ($this->_tpl_vars['standard'] == 2): ?>checked='checked'<?php endif; ?> >模糊
        </li>
        <li>
          <label style="width:60px;">客户公司：</label>
          <input type="text" name="company" value="<?php echo $this->_tpl_vars['company']; ?>
" alt="" style="width:120px;" />
        </li>
       <li>
          <label style="width:50px;">邮箱：</label>
          <input type="text" name="email" value="<?php echo $this->_tpl_vars['email']; ?>
" alt="" style="width:120px;" />
        </li>
        <li>
				<label style="width:60px;">询盘时间：</label>
				<input type="text" name="start_time" value="<?php echo $this->_tpl_vars['start_time']; ?>
"  class="date" readonly="readonly" style="width:70px;" />-<input type="text" name="end_time" value="<?php echo $this->_tpl_vars['end_time']; ?>
"  class="date" readonly="readonly" style="width:70px;"/>
        </li>
        
        
        <li>
            	<label style="width:60px;">反馈状态：</label>
                <select class="combox" name="feedback_state">
                    <?php if ($this->_tpl_vars['feedback_state'] == '1'): ?>
                    <option value="" >全部</option>
                       <option selected="selected" value="1" >未回复</option>
                       <option value="2" >发送失败</option>
                       <option value="3" >已回复</option>
                       <option value="4" >已反馈</option>
                    <?php elseif ($this->_tpl_vars['feedback_state'] == '2'): ?>
                    <option value="" >全部</option>
                       <option value="1" >未回复</option>
                       <option selected="selected" value="2" >发送失败</option>
                       <option value="3" >已回复</option>
                       <option value="4" >已反馈</option>
                    <?php elseif ($this->_tpl_vars['feedback_state'] == '3'): ?>
                    <option value="" >全部</option>
                       <option value="1" >未回复</option>
                       <option value="2" >发送失败</option>
                       <option selected="selected" value="3" >已回复</option>
                       <option value="4" >已反馈</option>
                     <?php elseif ($this->_tpl_vars['feedback_state'] == '4'): ?>
                    <option value="" >全部</option>
                       <option value="1" >未回复</option>
                       <option value="2" >发送失败</option>
                       <option value="3" >已回复</option>
                       <option selected="selected" value="4" >已反馈</option>
                    <?php else: ?>   
                        <option value="" >全部</option>
                       <option value="1" >未回复</option>
                       <option value="2" >发送失败</option>
                       <option value="3" >已回复</option>
                       <option value="4" >已反馈</option>                        
                    <?php endif; ?>     
                </select>
            </li>
            <li>
            	<label style="width:60px;">报价状态：</label>
                <select class="combox" name="baojia_status">
                    <option value="">全部</option>
                    <option value="1" <?php if ($this->_tpl_vars['baojia_status'] == '1'): ?>selected="selected"<?php endif; ?>>否</option>
                    <option value="2"<?php if ($this->_tpl_vars['baojia_status'] == '2'): ?>selected="selected"<?php endif; ?>>是</option>
                </select>
            </li>
            
            <li>
				<label style="width:60px;">询盘来源：</label>
				<select class="combox" name="laiyuan">
                	<option value="">全部</option>
                    <option value="22" <?php if ($this->_tpl_vars['laiyuan'] == '22'): ?>selected="selected"<?php endif; ?>>网站SEO</option>
                	<option value="23" <?php if ($this->_tpl_vars['laiyuan'] == '23'): ?>selected="selected"<?php endif; ?>>网站自然</option>
                    <option value="25"<?php if ($this->_tpl_vars['laiyuan'] == '25'): ?>selected="selected"<?php endif; ?>>谷歌付费</option>
                    <!--<option value="24"<?php if ($this->_tpl_vars['laiyuan'] == '24'): ?>selected="selected"<?php endif; ?>>必应付费</option>
                    <option value="26"<?php if ($this->_tpl_vars['laiyuan'] == '26'): ?>selected="selected"<?php endif; ?>>谷歌付费-加拿大</option>
                    <option value="27"<?php if ($this->_tpl_vars['laiyuan'] == '27'): ?>selected="selected"<?php endif; ?>>谷歌付费-法国</option>
                    <option value="28"<?php if ($this->_tpl_vars['laiyuan'] == '28'): ?>selected="selected"<?php endif; ?>>谷歌付费-英国</option>
                    <option value="29"<?php if ($this->_tpl_vars['laiyuan'] == '29'): ?>selected="selected"<?php endif; ?>>谷歌付费-澳大利亚</option>-->
                </select>			
            </li>
            
            <li>
				<label style="width:60px;">成交状态：</label>
				<select class="combox" name="cus_status">
                	<option value="">未成交</option>
                </select>
			</li>
            
            <li>
				<label style="width:60px;">会员等级：</label>
				<select class="combox" name="score">
                	<option value="">D</option>
                </select>
			</li>
        
        <!--<li style="width:14%;">
          <label style="width:60px;">客户状态：</label>
           <select  name="activation" style="font-size:12px;" class="combox">
          <option value="">全部</option>
          <option value="1" <?php if ($this->_tpl_vars['activation'] == '1'): ?>selected="selected"<?php endif; ?> >无</option>
          <option value="2" <?php if ($this->_tpl_vars['activation'] == '2'): ?>selected="selected"<?php endif; ?> >已激活</option>
          <option value="3" <?php if ($this->_tpl_vars['activation'] == '3'): ?>selected="selected"<?php endif; ?> >未激活</option>
          
        </select>
        </li>
        <li style="width:23%;">
          <label style="width:60px;">备用邮箱：</label>
          <input type="text" name="reserve_email" value="<?php echo $this->_tpl_vars['reserve_email']; ?>
" alt="" style="width:120px;" />
        </li><li style="width: 16%;">
            <label style="width:60px;">电话：</label>
            <select class="combox" name="contact">
                <option value="">全部</option>
                <option value="有" <?php if ($this->_tpl_vars['contact'] == '有'): ?>selected="selected"<?php endif; ?>>有</option>
                <option value="无"<?php if ($this->_tpl_vars['contact'] == '无'): ?>selected="selected"<?php endif; ?>>无</option>
            </select>
        </li>
         <li style="width: 25%;">
             <label style="width:60px;">询盘状态：</label>
            <select class="combox" name="xunpan_status">
                <option value="">全部</option>
                <option value="1" <?php if ($this->_tpl_vars['xunpan_status'] == '1'): ?>selected="selected"<?php endif; ?>>未回复</option>
                <option value="2"<?php if ($this->_tpl_vars['xunpan_status'] == '2'): ?>selected="selected"<?php endif; ?>>已回复</option>
            </select> 

        </li>-->
        <li style="float:right; margin-left:10px; width:100px;"><a class="button" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/newcustomer/search/" target="dialog" mask="true" title="查询框"><span>高级检索</span></a></li> 
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
/newcustomer/xls_export" method="post" id="new_export_new">
  <div class="pageContent">
  <div class="panelBar">
    <ul class="toolBar">
    <li class="line">line</li>
      <!--<?php if ($this->_tpl_vars['user_hidden']['group_id'] == '5' || $this->_tpl_vars['user_hidden']['group_id'] == '50' || $this->_tpl_vars['user_hidden']['group_id'] == '53' || $this->_tpl_vars['user_hidden']['group_id'] == '68'): ?>
      <li><a class="add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/newcustomer/add/" target="navTab" rel="newcustomeradd"><span>添加</span></a></li>
      <li class="line">line</li>
      <?php endif; ?>
       <li><a class="add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/newcustomer/add_quote/" target="navTab" rel="newcustomeradd"><span>批量添加询盘</span></a></li>
      <li class="line">line</li>
      <?php if ($this->_tpl_vars['user_hidden']['group_id'] == '5'): ?>
      <li><a title="批量转为老客户？" target="selectedTodo" rel="customer_ids[]" postType="string" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/newcustomer/change_to_old_customer" class="edit"><span>转为老客户</span></a></li>
      <li class="line">line</li>
      <?php endif; ?>-->
      <?php if ($this->_tpl_vars['user_hidden']['group_id'] == '5'): ?>
      
      <li><a title="批量分配客户？" href="#" class="edit" id="newpiliang"><span>分配客户</span></a>
        <select name="userid" style="font-size:13px;" id="newtouid_new">
          <?php $_from = $this->_tpl_vars['user_lists']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['qf']):
?>
          <option value="<?php echo $this->_tpl_vars['qf']['user_id']; ?>
"><?php echo $this->_tpl_vars['qf']['user_name']; ?>
</option>
          <?php endforeach; endif; unset($_from); ?>
        </select>
      </li>
       <li class="line">line</li>
      <?php endif; ?>
      <!--<li>
      <a title="批量修改客户状态？" href="#" class="edit" id="customer_newpiliang"><span>修改客户状态</span></a>
        <select name="customer_newtouid" style="font-size:13px;" id="customer_newtouid_new">
          <option value="2">已激活</option>
          <option value="3">未激活</option>
          
        </select>
      </li>
      <li class="line">line</li>-->

          <!--<li><a class="icon" href="#" id="new_ex" ><span>导出EXCEL</span></a></li>
          <li class="line">line</li>-->

    </ul>
  </div>
  <table class="table" width="98%" layoutH="138">
    <thead>
      <tr>
        <th width="2%"><input type="checkbox" group="customer_ids[]" class="checkboxCtrl" id="check_all_new"  ></th>
        <th width="2%">编号</th>
        <th width="5%">添加日期</th>
        <th width="5%">询盘日期</th>
        <th width="4%">来源渠道</th> 
        <th width="4%">询盘来源</th>         
        <th width="5%">询盘方式</th>
        <th width="3%">询盘数量</th>
        <th width="4%">客户代码</th>
        <th width="8%">客户名</th>
        <th width="8%">邮箱</th>
        <th width="5%">公司</th>
        <th width="3%">首月发信次数</th>
        <th width="3%">反馈状态</th>
        <th width="3%">报价状态</th>
        <th width="3%">成交状态</th>
        <th width="3%">客户分组</th> 
        <th width="2%">客户等级</th>
        <th width="4%">业务员</th>
        <th width="4%">操作</th>
      </tr>
    </thead>
    <tbody>
    <?php if ($this->_tpl_vars['newcustomer_list']): ?>
    <?php $_from = $this->_tpl_vars['newcustomer_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['ug']):
?>

    <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
">
      <td><input name="customer_ids[]" value="<?php echo $this->_tpl_vars['ug']['id']; ?>
" type="checkbox" ></td>
      <td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
      <td><?php echo $this->_tpl_vars['ug']['insert_time']; ?>
</td>
      <td><?php echo $this->_tpl_vars['ug']['quote_time_c']; ?>
</td>
      <td><?php echo $this->_tpl_vars['ug']['sources_name']; ?>
</td>
      <td><?php echo $this->_tpl_vars['ug']['xply_name']; ?>
</td>
      <td><?php echo $this->_tpl_vars['ug']['project_name']; ?>
</td>
      <td><?php if ($this->_tpl_vars['ug']['customer_code_num'] == '0'): ?>
          <?php else: ?>
              <a class="edit" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/web_inquiries_into/processed-customer_code-<?php echo $this->_tpl_vars['ug']['customer_code']; ?>
.html" target="navTab" rel="yidong"><?php echo $this->_tpl_vars['ug']['customer_code_num']; ?>
</a>
          <?php endif; ?> 
      </td>
      <td><?php echo $this->_tpl_vars['ug']['customer_code']; ?>
</td>
      <td><?php echo $this->_tpl_vars['ug']['customer_name']; ?>
</td>
      <td><?php echo $this->_tpl_vars['ug']['email']; ?>
</td>
      <td><?php echo $this->_tpl_vars['ug']['company']; ?>
</td>
  	  <td><?php echo $this->_tpl_vars['ug']['email_count']; ?>
</td>
      <td>
      <?php if ($this->_tpl_vars['ug']['feedback_state'] == '1'): ?>                
         未回复
      <?php elseif ($this->_tpl_vars['ug']['feedback_state'] == '2'): ?>
         发送失败
      <?php elseif ($this->_tpl_vars['ug']['feedback_state'] == '3'): ?>
          已回复     
      <?php elseif ($this->_tpl_vars['ug']['feedback_state'] == '4'): ?>
          已反馈
      <?php else: ?>
         
      <?php endif; ?>    
      </td>
      <td><?php if ($this->_tpl_vars['ug']['baojia_status'] == '1'): ?>否<?php elseif ($this->_tpl_vars['ug']['baojia_status'] == '2'): ?>是<?php endif; ?></td>
      <td>未成交</td>
      <td align=center><?php echo $this->_tpl_vars['ug']['group_id']; ?>
</td>
      <td>D</td>
      <td><?php echo $this->_tpl_vars['ug']['yewu_name']; ?>
</td> 
      <td>
      	<?php if (( $this->_tpl_vars['user_hidden']['group_id'] == '5' || $this->_tpl_vars['user_hidden']['group_id'] == '50' )): ?>
      	<a title="删除吗？" target="ajaxTodo" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/newcustomer/del-id-<?php echo $this->_tpl_vars['ug']['id']; ?>
.html" class="btnDel">删除</a>
        <?php endif; ?>
        <a title="编辑" target="navTab" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/quotecustomer/edit-id-<?php echo $this->_tpl_vars['ug']['id']; ?>
.html" class="btnEdit" rel="newcustomeradd">编辑</a>
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
</form>
<!--<form action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/newcustomer/change_to_other_user" id="ctou" method="post" onSubmit="return navTabSearch(this);">
  <input type="hidden" name="check_arr" id="check_arr" value="" />
  <input type="hidden" name="touid" id="touids" value="" />
</form>-->
</div>
<!-- {literal} --> 
<script language="javascript">
	$("#new_ex").click(function (){
		if($("input[type='checkbox']").is(":checked")){
			alert("即将导出选中数据");
			$("#new_export_new").submit();
		}else{
			alert("请选择导出的数据");
		}
	});
$(document).ready(function()
{	
	//var check_arr = [];
	$("#newpiliang").click(function (){
			var touid = $("#newtouid_new").val();
			var check_arr = '';
			$("input[name='customer_ids[]']:checkbox:checked").each(function(){ //由于复选框一般选中的是多个,所以可以循环输出
				if(check_arr == ''){
					check_arr += $(this).val();
				}else{
					check_arr += ','+$(this).val();
				}
			});	
			
			var p = 'check_arr-'+check_arr+'-touid-'+touid+'.html';
			
			if(check_arr ==''){
				alert('必须选择客户');
			}else{
				$.ajax({
					url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/newcustomer/change_to_other_user-'+p,
					type:'get', 
					dataType:'json',
					data:p,
					success:check_back
				});
/*				$("#check_arr").val(check_arr);
				$("#touids").val(touid);
				$("#ctou").submit();*/
			}
			
		});
		
		
		
		$("#customer_newpiliang").click(function (){
			var touid = $("#customer_newtouid_new").val();
			var check_arr = '';
			$("input[name='customer_ids[]']:checkbox:checked").each(function(){ //由于复选框一般选中的是多个,所以可以循环输出
				if(check_arr == ''){
					check_arr += $(this).val();
				}else{
					check_arr += ','+$(this).val();
				}
			});	
			
			var p = 'check_arr-'+check_arr+'-touid-'+touid+'.html';
			
			if(check_arr ==''){
				alert('必须选择客户');
			}else{
				$.ajax({
					url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/newcustomer/change_customer_status-'+p,
					type:'get', 
					dataType:'json',
					data:p,
					success:check_back
				});
/*				$("#check_arr").val(check_arr);
				$("#touids").val(touid);
				$("#ctou").submit();*/
			}
			
		});
});
		
		
		function check_back(data)
		{
			if(data==1)
			{
				//$("#dialog").css("display","none");
				alert("失败");
			}
			else
			{
				
				//$("#dialog").css("display","none");
				navTabPageBreak();
				//window.location = "<?php echo $this->_tpl_vars['__ROOT__']; ?>
/#newcustomer";
			}
		}
</script> 
<!-- {/literal} -->