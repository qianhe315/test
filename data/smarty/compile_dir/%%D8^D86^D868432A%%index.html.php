<?php /* Smarty version 2.6.22, created on 2016-02-01 14:02:37
         compiled from delivery_record/index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/delivery_record/index">
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
	<form rel="pagerForm" onsubmit="return navTabSearch(this);" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/delivery_record/index" method="get">
	<div class="searchBar">
		<ul class="searchContent">
         
             <li style="width:18%;">
				<label style="width:60px">时间：</label>
				<input type="text" name="start_time" class="date" readonly="readonly" style="width:70px;" value="<?php echo $this->_tpl_vars['start_time']; ?>
" />-<input type="text" name="end_time" class="date" readonly="readonly" style="width:70px;" value="<?php echo $this->_tpl_vars['end_time']; ?>
" />
                
			</li>
			
            
             <?php if ($this->_tpl_vars['yewuyuan'] == '2'): ?>
             
                <li style="width:10%;">
                    <label style="width:60px;">业务员：</label>
                    <select class="combox" name="sale_name">
                    <option value="">全部</option>
                    <?php $_from = $this->_tpl_vars['users']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['du']):
?>
                    <option value="<?php echo $this->_tpl_vars['du']['user_name']; ?>
" <?php if ($this->_tpl_vars['sale_name'] == $this->_tpl_vars['du']['user_name']): ?> selected <?php endif; ?> > <?php echo $this->_tpl_vars['du']['user_name']; ?>
 </option>
                    <?php endforeach; endif; unset($_from); ?>
                    </select>
                    
                </li>
             
             <?php endif; ?>
            
             <li style="width:10%;">
				<label style="width:60px;">快递公司：</label>
                <select class="combox" name="shipping_company">
                <option value="">全部</option>
                <option value="UPS" <?php if ($this->_tpl_vars['shipping_company'] == UPS): ?> selected <?php endif; ?>  >UPS</option>
                <option value="DHL" <?php if ($this->_tpl_vars['shipping_company'] == DHL): ?> selected <?php endif; ?>  >DHL</option>
                <option value="Fedex" <?php if ($this->_tpl_vars['shipping_company'] == Fedex): ?> selected <?php endif; ?>  >Fedex</option>
                </select>
			</li>
            
             <li style="width:15%;">
				<label style="width:60px;">快递单号：</label>
				<input type="text" name="shipping_number" value="<?php echo $this->_tpl_vars['shipping_number']; ?>
" style="width:100px;" />
			</li>
            <li style="width:17%;">
				<label style="width:60px;">货品代码：</label>
				<input type="text" name="goods_or_sale" value="<?php echo $this->_tpl_vars['goods_or_sale']; ?>
" style="width:100px;" />
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
        
        <!--<?php if ($this->_tpl_vars['user_hidden']['group_id'] == '5' || $this->_tpl_vars['user_hidden']['group_id'] == '66' || $this->_tpl_vars['user_hidden']['group_id'] == '65'): ?> -->  
        <!-- <?php endif; ?>--> 
            <li class="line">line</li>
			<li><a class="add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/delivery_record/add" target="navTab" rel="supplier_attributes"><span>添加</span></a></li>
            <li class="line">line</li>
            

             
			<li><a class="add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/delivery_record/tongbu_add" target="navTab" rel="tongbu_add"  ><span>设备数据同步</span></a></li>            
            <li class="line">line</li> 
            <li><a  href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/delivery_record/deal_with_information/" class="edit" title="确定处理?" posttype="string" rel="page1" target="ajaxTodo" ><span>处理发货信息</span></a></li>
             
                               
		</ul>
	</div>
	<table class="table" width="1200" layoutH="138">
		<thead>
       		<tr>
                <th width="2%"><input type="checkbox" group="group_ids" class="checkboxCtrl"></th>
                <th width="3%">编号</th>
                <th width="12%">时间</th>
                <th width="6%">处理状态</th>
                <th width="15%">快递单号</th>
                <th width="12%">货品代码或业务代码</th>
                <th width="6%">快递公司</th>
                <th width="6%">业务员</th>
                <th width="6%">货值</th>
                <!--<th width="8%">是否需要报关</th>-->
                <!--<th width="7%">允许发货</th>
                <th width="8%">缘由</th>-->
                <th width="7%">操作</th>
			</tr>
		</thead>
		<tbody>
        <?php if ($this->_tpl_vars['delivery_record']): ?>
			 <?php $_from = $this->_tpl_vars['delivery_record']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['dis']):
?>
              <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
" >
                <td><input name="group_ids" value="<?php echo $this->_tpl_vars['dis']['id']; ?>
" type="checkbox"></td>
                <td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['insert_time']; ?>
</td>
                <td>
                    <?php if ($this->_tpl_vars['dis']['status'] == 0): ?>
                         否
                    <?php else: ?>
                         是
                    <?php endif; ?>
                </td>
                <td><?php echo $this->_tpl_vars['dis']['shipping_no']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['goods_or_sale']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['shipping_company']; ?>
</td>
                 <td><?php echo $this->_tpl_vars['dis']['sale_name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['dis']['huozhi']; ?>
</td>
               <!-- <td>
                <?php if ($this->_tpl_vars['dis']['baoguan_status'] == 0): ?>
                         否
                    <?php else: ?>
                         是
                    <?php endif; ?>
                </td>-->
                <!--<td>
                <?php if ($this->_tpl_vars['dis']['fahuo_status'] == 0): ?>
                         否
                    <?php else: ?>
                         是
                    <?php endif; ?>                
                </td>
               
                <td><?php echo $this->_tpl_vars['dis']['remark']; ?>
</td>-->
                <td>
                
                <?php if ($this->_tpl_vars['user_hidden']['group_id'] == '5' || $this->_tpl_vars['user_hidden']['group_id'] == '66' || $this->_tpl_vars['user_hidden']['group_id'] == '65' || $this->_tpl_vars['user_hidden']['group_id'] == '50'): ?>
                     <a title="删除吗？" target="ajaxTodo" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/delivery_record/del-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" class="btnDel">删除</a> <a title="编辑" target="navTab" rel="delivery_record_edit" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/delivery_record/edit-id-<?php echo $this->_tpl_vars['dis']['id']; ?>
.html" class="btnEdit">编辑</a>
                     
                <?php endif; ?>     
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