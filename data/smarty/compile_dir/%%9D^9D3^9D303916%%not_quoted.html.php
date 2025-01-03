<?php /* Smarty version 2.6.22, created on 2024-10-23 13:09:29
         compiled from procure_outgoing/not_quoted.html */ ?>
<script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/procure_outgoing/not_quote.js" type="text/javascript"></script>
<!-- <link href="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/css/cstown_sys.css" rel="stylesheet" type="text/css" media="screen"/> -->
<div class="pageHeader">
    <form rel="pagerForm" onsubmit="return navTabSearch(this);" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/procure_outgoing/not_quoted" method="get">
        <div class="searchBar">
            <ul class="searchContent">
                <li style="width:auto">
                    <label style="width:60px;">询价时间：</label>
                    <input type="text" name="time_start" value="<?php echo $this->_tpl_vars['time_start']; ?>
" class="date" readonly style="width:70px;" />-<input type="text" value="<?php echo $this->_tpl_vars['time_end']; ?>
" name="time_end" class="date" readonly style="width:70px;" />
                </li>
                <li style="width:auto">
                    <label style="width:50px;">业务员：</label>
                    <select class="combox" name="sale_user">
                        <option value="">全部</option>
                        <?php $_from = $this->_tpl_vars['sale_users']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['du']):
?>
                            <option value="<?php echo $this->_tpl_vars['du']['user_name']; ?>
" 
                              <?php if ($this->_tpl_vars['du']['user_name'] == $this->_tpl_vars['sale_user']): ?> selected <?php endif; ?>> <?php echo $this->_tpl_vars['du']['user_name']; ?>

                            </option>
                        <?php endforeach; endif; unset($_from); ?>
                    </select> 
                </li> 
                <li style="width:auto">
                    <label style="width:60px;">客户代码：</label>
                    <input type="text" name="customer_code" value="<?php echo $this->_tpl_vars['customer_code']; ?>
" style="width:70px;" />
                </li>
                <li style="width:auto">
                    <label style="width:60px;">报价名称：</label>
                    <input type="text" name="design_name" value="<?php echo $this->_tpl_vars['design_name']; ?>
" style="width:70px;" />
                </li>
                <li style="width:auto">
                    <label style="width:60px;">报价编号：</label>
                    <input type="text" name="quotation_code" value="<?php echo $this->_tpl_vars['quotation_code']; ?>
" style="" />
                </li>
                <li style="float:right;">
                    <div class="buttonActive" style="float:right;">
                        <div style="float:right;" class="buttonContent"><button type="submit">检索</button></div>
                    </div>
                </li>
            </ul>
        </div>
    </form>
</div>
<div class="pageContent">
    <div class="panelBar">
    </div>
    <table class="table" width="100%" layoutH="138">
        <thead>
            <tr style="text-align: center;">
                <th width="1%"><input type="checkbox" group="procure_outgoing_ids[]" class="checkboxCtrl"></th>
                <th width="2%">编号</th>
                <th width="7%">缩略图</th>
                <th width="5%">时间</th>
                <th width="4%">业务员</th>
                <th width="4%">客户代码</th>
                <th width="4%">客户名</th>
                <th width="7%">报价名称</th>
                <th width="4%">类型</th>
                <th width="10%">报价编号</th>
                <th width="5%">报关类型</th>
                <th width="5%">做货类型</th>
                <th width="5%">交货期</th>
                <th width="3%">数量</th>
                <th width="7%">备注</th>
                <th width="4%">操作</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($this->_tpl_vars['procure_outgoing']): ?>
                <?php $_from = $this->_tpl_vars['procure_outgoing']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['dis']):
?>
                    <tr style="text-align: center;" target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
">
                        <td><input name="procure_outgoing_ids[]" value="<?php echo $this->_tpl_vars['dis']['id']; ?>
" type="checkbox"></td>
                        <td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
                        <td><img src="<?php echo $this->_tpl_vars['dis']['image']; ?>
" width="100px" height="100px" /></td>
                        <td><?php echo $this->_tpl_vars['dis']['q_time']; ?>
</td>
                        <td><?php echo $this->_tpl_vars['dis']['saleman_name']; ?>
</td>
                        <td><?php echo $this->_tpl_vars['dis']['customer_code']; ?>
</td>
                        <td><?php echo $this->_tpl_vars['dis']['customer_name']; ?>
</td>
                        <td><?php echo $this->_tpl_vars['dis']['design_name']; ?>
</td>
                        <td>
                            <?php if ($this->_tpl_vars['dis']['type'] == 1): ?>
                                有设计
                            <?php else: ?>
                                无设计
                            <?php endif; ?>
                        </td>
                        <td><?php echo $this->_tpl_vars['dis']['quotation_code']; ?>
</td>
                        <td><?php echo $this->_tpl_vars['dis']['order_category']; ?>
</td>
                        <td><?php echo $this->_tpl_vars['dis']['goods_type']; ?>
</td>
                        <td><?php echo $this->_tpl_vars['dis']['deliver_goods']; ?>
</td>
                        <td><?php echo $this->_tpl_vars['dis']['number']; ?>
</td>
                        <td>
                          <div id="note_a_<?php echo $this->_tpl_vars['dis']['id']; ?>
">
                              <a onclick="return click_note_a('<?php echo $this->_tpl_vars['dis']['id']; ?>
')" style="cursor:pointer;"><?php echo $this->_tpl_vars['dis']['remark']; ?>
</a>
                          </div>
                          <div id="note_input_<?php echo $this->_tpl_vars['dis']['id']; ?>
" style="display:none;">
                              <textarea style="width:100px;" id="note_val_<?php echo $this->_tpl_vars['dis']['id']; ?>
"><?php echo $this->_tpl_vars['dis']['remark']; ?>
</textarea>
                              <a style="cursor:pointer;" onclick="return submit_change_note('<?php echo $this->_tpl_vars['dis']['id']; ?>
')">确定</a>
                          </div>
                        </td>
                        <td>
                          <a title="填写报价" target="navTab" rel="stock_manage_edit" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/procure_outgoing/edit-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" class="btnEdit">编辑</a>
                          <a title="打印询价单" target="_blank" rel="" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/procure_outgoing/generate_outgoing_inquiry_sheet-ids-<?php echo $this->_tpl_vars['dis']['id']; ?>
-invoice_pdf_btn-1.html" class="btnView">打印询价单</a>
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
      <form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/procure_outgoing/not_quoted">
        <input type="hidden" name="pageNum" value="1" />
        <input type="hidden" name="numPerPage" value="<?php echo $this->_tpl_vars['listRows']; ?>
" />
        <input type="hidden" name="orderField" value="group_id" />
        <input type="hidden" name="orderDirection" value="desc" />
        <input type="hidden" name="stock_code" value="<?php echo $this->_tpl_vars['stock_code']; ?>
" />
      </form>
      <div class="pagination" targetType="navTab" totalCount="<?php echo $this->_tpl_vars['total_count']; ?>
" numPerPage="<?php echo $this->_tpl_vars['listRows']; ?>
" pageNumShown="10" currentPage="<?php echo $this->_tpl_vars['current_page']; ?>
"></div>
    </div>
</div>
<script type="text/javascript">


//备注显示
    function click_note_a(id){
		$('#note_a_' + id).css('display','none');
		$('#note_input_' + id).css('display','block');
    }
	
	//备注修改提交
	function submit_change_note(id){
		
		var note_val	=$("#note_val_"+id).val();
		if(note_val!=''){
			$.ajax({
					url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/procure_outgoing/update_note',//通过Ajax取数据的目标页面
					data:{"note_val":note_val,"id":id},
					type:'post',//方法，还可以是"post"
					dataType:'text',//数据类型，还有其它的，详见jQuery手册
					success:function(locals)//成功后执行的语句，这里是一个函数，"locals"是返回的数据
					{
				
						 if(locals==1){
							 alert("修改成功");
							 $('#note_a_' + id).css('display','block');
							 $('#note_input_' + id).css('display','none');
							 document.getElementById("note_a_"+id).innerHTML="<a  onClick='return click_note_a(\""+id+"\" )' style=cursor:pointer;>"+note_val+"</a>"
						 }else{
							 alert("修改失败");
							 $('#note_input_' + id).css('display','none');
							 $('#note_a_' + id).css('display','block');
							 document.getElementById("note_a_"+id).innerHTML="<a  onClick='return click_note_a(\""+id+"\" )' style=cursor:pointer;>"+note_val+"</a>"
						 }
						
					}
		   });
			
		}
	}
</script>