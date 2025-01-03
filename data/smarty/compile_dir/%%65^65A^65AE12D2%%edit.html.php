<?php /* Smarty version 2.6.22, created on 2015-01-08 11:08:55
         compiled from customer_cooperation_details/edit.html */ ?>
<div class="pageContent">
<div class="tabs" currentIndex="0" eventType="click">
  <div class="tabsHeader">
    <div class="tabsHeaderContent">
      <ul>
        <li><a href="javascript:;"><span>基本信息</span></a></li>
        <li><a href="javascript:;"><span>优惠明细</span></a></li>
        <li><a href="javascript:;"><span>优惠使用明细</span></a></li>
        <li><a href="javascript:;"><span>预存款明细</span></a></li>
        <li><a href="javascript:;"><span>预存款使用明细</span></a></li>
        <li><a href="javascript:;"><span>订单详细</span></a></li>
        <li><a href="javascript:;"><span>发票详细</span></a></li>
        <li><a href="javascript:;"><span>销售明细详细</span></a></li>
        <li><a href="javascript:;"><span>往来账务</span></a></li>
      </ul>
    </div>
  </div>
  <form method="post" id="newcustomer_edit" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, navTabAjaxDone)">
    <div class="tabsContent" layoutH="70" >
    
        <div class="pageFormContent" layoutH="100">
         <div>
          <input type="hidden" name="" id="" value="" />
            <div class="pageFormContent" layoutH="58" style="width:40%; float:left;" >
            
              <div class="unit">
                <label>询盘日期：</label>
                <input type="text" name="" id="" readonly="readonly" style="width:120px" value="<?php echo $this->_tpl_vars['customers']['quote_time_c']; ?>
"/>
                 </div>
              <div class="divider">divider</div>
              <div class="unit">
                <label>询盘来源：</label>          
                <input type="text" name="" id="" readonly="readonly" style="width:120px" value="<?php echo $this->_tpl_vars['sources_name']; ?>
"/>
              </div>
              <div class="divider">divider</div>
              <div class="unit">
                <label>客户名称：</label>
                <input type="text" name="" id="" readonly="readonly" style="width:120px" value="<?php echo $this->_tpl_vars['customers']['customer_name']; ?>
"/>
              </div>
             
              <div class="divider">divider</div>
              <div class="unit">
                <label>主邮箱：</label>
                <input type="text" name="" id="" readonly="readonly" style="width:120px" value="<?php echo $this->_tpl_vars['customers']['email']; ?>
"/>
              </div>
              <div class="divider">divider</div>
              <div class="unit">
                <label>备用邮箱：</label>
                <input type="text" name="" id="" readonly="readonly" style="width:120px" value="<?php echo $this->_tpl_vars['customers']['reserve_email']; ?>
"/>
              </div>
              <div class="divider">divider</div>
              <div class="unit">
                <label>公司：</label>
                <input type="text" name="" id="" readonly="readonly" style="width:120px" value="<?php echo $this->_tpl_vars['customers']['company']; ?>
"/>
              </div>
              <div class="divider">divider</div>
              <div class="unit">
                <label>所属国家：</label>
               <input type="text" name="" id="" readonly="readonly" style="width:120px" value="<?php echo $this->_tpl_vars['area_name']; ?>
"/>
              </div>
              <div class="divider">divider</div>
              <div class="unit">
                <label>询盘方式：</label>
                <input type="text" name="" id="" readonly="readonly" style="width:120px" value="<?php echo $this->_tpl_vars['quotecategory_name1']; ?>
"/>
              </div>
              <div class="divider">divider</div>
              <div class="unit">
                <label>询盘状态：</label>
               <input type="text" name="" id="" readonly="readonly" style="width:120px" value=""/>
              </div>
                
              <div class="divider">divider</div>
              <div class="unit">
                <label>询盘内容：</label>
                <textarea name="" cols="30" rows="4" readonly="readonly"><?php echo $this->_tpl_vars['quote']; ?>
</textarea>
              </div>
              <div class="divider">divider</div>
              
              
           
            </div>
            <div class="pageFormContent" layoutH="58" style="width:40%; float: left;" >
              <div class="unit">
                <label>固定电话：</label>
                <input type="text" name="" id="" readonly="readonly" style="width:120px" value="<?php echo $this->_tpl_vars['customers']['cellphone']; ?>
"/>
              </div>
              <div class="divider">divider</div>
              <div class="unit">
                <label>手机：</label>
                <input type="text" name="" id="" readonly="readonly" style="width:120px" value="<?php echo $this->_tpl_vars['customers']['telephone']; ?>
"/>
              </div>
              <div class="divider">divider</div>
              <div class="unit">
                <label>传真：</label>
                <input type="text" name="" id="" readonly="readonly" style="width:120px" value="<?php echo $this->_tpl_vars['customers']['fax']; ?>
"/>
              </div>
              <div class="divider">divider</div>
              <div class="unit">
                <label>地址：</label>
                <input type="text" name="" id="" readonly="readonly" style="width:120px" value="<?php echo $this->_tpl_vars['area_name']; ?>
 <?php echo $this->_tpl_vars['area_name1']; ?>
 <?php echo $this->_tpl_vars['area_name2']; ?>
"/>
              </div> 
              <div class="divider">divider</div>
              <div class="unit">
                <label>邮编：</label>
               <input type="text" name="" id="" readonly="readonly" style="width:120px" value="<?php echo $this->_tpl_vars['customers']['zip_code']; ?>
"/>
              </div>
              <div class="divider">divider</div>
              <div class="unit">
                <label>网址：</label>
                <input type="text" name="" id="" readonly="readonly" style="width:120px" value="<?php echo $this->_tpl_vars['customers']['website']; ?>
"/>
              </div>
              <div class="divider">divider</div>
              <div class="unit">
                <label>生日：</label>
                <input type="text" name="" id="" readonly="readonly" style="width:120px" value="<?php echo $this->_tpl_vars['customers']['birthday']; ?>
"/>
              </div>
              <div class="divider">divider</div>
              <div class="unit">
                <label>性别：</label>
                <input type="text" name="" id="" readonly="readonly" style="width:120px" value="<?php echo $this->_tpl_vars['sex']; ?>
"/>
              </div>
              <div class="divider">divider</div>
              <div class="unit">
                <label>身高：</label>
                <input type="text" name="" id="" readonly="readonly" style="width:120px" value="<?php echo $this->_tpl_vars['customers']['height']; ?>
"/>
                <label>CM</label>
              </div>
              <div class="divider">divider</div>
              <div class="unit">
                <label>体重：</label>
                <input type="text" name="" id="" readonly="readonly" style="width:120px" value="<?php echo $this->_tpl_vars['customers']['weight']; ?>
"/>
                <label>KG</label>
              </div>
              <div class="divider">divider</div>
              <div class="unit">
                <label>备注：</label>
                <textarea name="note" id="" cols="30" rows="2" readonly="readonly"><?php echo $this->_tpl_vars['customers']['note']; ?>
</textarea>
              </div>
              <div class="divider">divider</div>
           
            </div>
          </div>
        </div>  
        <div class="pageFormContent" layoutH="100">
         <div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
        <li class="line">line</li>
			<li><a class="add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/customer_cooperation_details/add_youhui-id-<?php echo $this->_tpl_vars['id']; ?>
.html/" target="dialog" rel="page1"><span>添加</span></a></li>
			
			<li class="line">line</li>  
		</ul>
	</div>
	<table class="table" width="1200" layoutH="170">
		<thead>
			<tr>
                <th width="2%">编号</th>
                <th width="5%">时间</th>
               <th width="5%">状态</th>
                <th width="5%">名称</th>
                <th width="5%">类别</th>
                <th width="5%">内容</th>
                <th width="10%">次数</th>
                <th width="10%">有效期</th>
                <th width="5%">备注</th>
                <th width="9%">操作</th>
           
               
			</tr>
		</thead>
		<tbody>
         <?php if ($this->_tpl_vars['save_detail']): ?>
			 <?php $_from = $this->_tpl_vars['save_detail']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['s']):
?>
              <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
" >
               <td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
               <td><?php echo $this->_tpl_vars['s']['time']; ?>
</td>
               <td><?php echo $this->_tpl_vars['s']['status1']; ?>
</td>
               <td><?php echo $this->_tpl_vars['s']['name']; ?>
</td>
               <td><?php echo $this->_tpl_vars['s']['category']; ?>
</td>
               <td><?php echo $this->_tpl_vars['s']['save_money1']; ?>
</td>
               <td><?php echo $this->_tpl_vars['s']['number']; ?>
</td>
               <td><?php echo $this->_tpl_vars['s']['usetime']; ?>
</td>
               <td><?php echo $this->_tpl_vars['s']['Account']; ?>
</td>
               <td> 
               <a title="删除吗？" target="ajaxTodo" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/customer_cooperation_details/del-id-<?php echo $this->_tpl_vars['s']['id']; ?>
.html" class="btnDel">删除</a> <a title="编辑" target="dialog" rel="supplier_attributes_edit" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/customer_cooperation_details/edit_youhui-id-<?php echo $this->_tpl_vars['s']['id']; ?>
.html" class="btnEdit">编辑</a> 
               </td>
                
              </tr>
              
             <?php endforeach; endif; unset($_from); ?>
             <?php endif; ?>
        
		</tbody>
	</table>
	<div class="panelBar">
		<div class="pages">
			
			<span></span>
		</div>
	</div>
</div>       
        </div>    
        <div class="pageFormContent" layoutH="100">
         <div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
        
		</ul>
	</div>
	<table class="table" width="100%" layoutH="170">
		<thead>
			<tr>
                <th width="2%">编号</th>
                <th width="5%">时间</th>
                <th width="5%">发票号</th>
                <th width="5%">发票状态</th>
                <th width="5%">申请内容</th>
                <th width="10%">总价</th>
                <th width="10%">应付款</th>
                <th width="9%">已付款</th>
           	    <th width="10%">付款状态</th>
                <th width="10%">折扣信息</th>
                <th width="9%">折扣金额</th>
               
			</tr>
		</thead>
		<tbody>
         <?php if ($this->_tpl_vars['save_detail_list']): ?>
			 <?php $_from = $this->_tpl_vars['save_detail_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['s']):
?>
              <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
" >
               <td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
               <td><?php echo $this->_tpl_vars['s']['insert_time']; ?>
</td>
               <td><?php echo $this->_tpl_vars['s']['invoice_number']; ?>
</td>
               <td>
                   <?php if ($this->_tpl_vars['dis']['invoice_status'] == 5): ?>
                    
                   <?php elseif ($this->_tpl_vars['dis']['invoice_status'] == 1): ?>
                       无需审核
                   <?php elseif ($this->_tpl_vars['dis']['invoice_status'] == 2): ?>
                       审核中
                   <?php elseif ($this->_tpl_vars['dis']['invoice_status'] == 3): ?> 
                       审核通过
                   <?php elseif ($this->_tpl_vars['dis']['invoice_status'] == 4): ?>  
                       驳回
                   <?php endif; ?>
                </td>
               <td>
                <?php if ($this->_tpl_vars['s']['content'] == '1'): ?>
                     先做货后付款
                <?php elseif ($this->_tpl_vars['s']['content'] == '2'): ?>
                     先发货后付款
                <?php elseif ($this->_tpl_vars['s']['content'] == '3'): ?>
                     部分付款后做货
                <?php elseif ($this->_tpl_vars['s']['content'] == '4'): ?>
                     部分付款后发货
                <?php elseif ($this->_tpl_vars['s']['content'] == '5'): ?>
                     免费重新做货
                <?php else: ?>
                
                <?php endif; ?>
                </td>
               
               <td><?php echo $this->_tpl_vars['s']['total']; ?>
</td>
               <td><?php echo $this->_tpl_vars['s']['yingfu']; ?>
</td>
               <?php if ($this->_tpl_vars['s']['paid_money'] != ""): ?>
               <td><?php echo $this->_tpl_vars['s']['paid_money']; ?>
</td>
               <?php else: ?>
               <td>0</td>
               <?php endif; ?>
               <td>
					<?php if ($this->_tpl_vars['s']['paid_status'] == 1): ?>
                         未付款 
                    <?php elseif ($this->_tpl_vars['s']['paid_status'] == 2): ?>    
                         未完成
                    <?php elseif ($this->_tpl_vars['s']['paid_status'] == 3): ?>     
                         已付款 
                    <?php elseif ($this->_tpl_vars['s']['paid_status'] == 4): ?>     
                         退款中
                    <?php elseif ($this->_tpl_vars['s']['paid_status'] == 5): ?>     
                         已退款
                    <?php elseif ($this->_tpl_vars['s']['paid_status'] == 6): ?>
                         特殊审批通过                                                  
                    <?php endif; ?> 
                    </td>
               <td><?php echo $this->_tpl_vars['s']['discount_detail']; ?>
</td>
                <td><?php echo $this->_tpl_vars['s']['discount']; ?>
</td>
              </tr>
              
             <?php endforeach; endif; unset($_from); ?>
             <?php endif; ?>
		</tbody>
	</table>
	
</div>         
        </div>
        <div class="pageFormContent" layoutH="100">
         <div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
        <li class="line">line</li>
			<li><a class="add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/customer_cooperation_details/add_yucun-id-<?php echo $this->_tpl_vars['id']; ?>
.html/" target="dialog" rel="page1"><span>添加</span></a></li>
			
			<li class="line">line</li>  
		</ul>
	</div>
	<table class="table" width="100%" layoutH="170">
		<thead>
			<tr>
                <th width="1%">编号</th>
                <th width="2%">时间</th>
                <th width="3%">审核状态</th>
                <th width="3%">使用状态</th>
                <th width="2%">货币</th>
                <th width="2%">金额</th>
                <th width="1%">操作</th>           
			</tr>
		</thead>
		<tbody>
        <?php if ($this->_tpl_vars['deposit_advance']): ?>
			 <?php $_from = $this->_tpl_vars['deposit_advance']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['da']):
?>
              <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
" >
               <td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
               <td><?php echo $this->_tpl_vars['da']['time']; ?>
</td>
               <td><?php echo $this->_tpl_vars['da']['status1']; ?>
</td>
               <td><?php echo $this->_tpl_vars['da']['usestatus1']; ?>
</td>
               <td><?php echo $this->_tpl_vars['da']['name']; ?>
</td>
               <td><?php echo $this->_tpl_vars['da']['audit_price']; ?>
</td>
               <td> 
               <a title="删除吗？" target="ajaxTodo" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/customer_cooperation_details/del_yucun-id-<?php echo $this->_tpl_vars['da']['id']; ?>
.html" class="btnDel">删除</a> <a title="编辑" target="dialog" rel="supplier_attributes_edit" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/customer_cooperation_details/edit_yucun-id-<?php echo $this->_tpl_vars['da']['id']; ?>
.html" class="btnEdit">编辑</a> 
               </td>
                
              </tr>
              
             <?php endforeach; endif; unset($_from); ?>
             <?php endif; ?>
		</tbody>
	</table>
	<div class="panelBar">
		<div class="pages">
			
			<span></span>
		</div>
	</div>
</div>           
        </div>
        <div class="pageFormContent" layoutH="100">
         <div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">

		</ul>
	</div>
	<table class="table" width="1200" layoutH="170">
		<thead>
			<tr>
                <th width="2%">编号</th>
                <th width="5%">时间</th>
                <th width="5%">发票号</th>
                <th width="5%">发票状态</th>
                <th width="5%">申请内容</th> 
                <th width="5%">总价</th>
                <th width="5%">应付款</th>
                <th width="5%">已付款</th>
                <th width="5%">付款状态</th>
                <th width="5%">预存款使用金额</th>
                <th width="5%">预存款余额</th>          
			</tr>
		</thead>
		<tbody>
         <?php if ($this->_tpl_vars['deposit_advance_list']): ?>
			 <?php $_from = $this->_tpl_vars['deposit_advance_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['da']):
?>
              <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
" >
               <td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
               <td><?php echo $this->_tpl_vars['da']['insert_time']; ?>
</td>
               <td><?php echo $this->_tpl_vars['da']['invoice_number']; ?>
</td>
            
                <td>
                   <?php if ($this->_tpl_vars['da']['invoice_status'] == 5): ?>
                    
                   <?php elseif ($this->_tpl_vars['da']['invoice_status'] == 1): ?>
                       无需审核
                   <?php elseif ($this->_tpl_vars['da']['invoice_status'] == 2): ?>
                       审核中
                   <?php elseif ($this->_tpl_vars['da']['invoice_status'] == 3): ?> 
                       审核通过
                   <?php elseif ($this->_tpl_vars['da']['invoice_status'] == 4): ?>  
                       驳回
                   <?php endif; ?>
                </td>
                   <td>
                <?php if ($this->_tpl_vars['da']['content'] == '1'): ?>
                     先做货后付款
                <?php elseif ($this->_tpl_vars['da']['content'] == '2'): ?>
                     先发货后付款
                <?php elseif ($this->_tpl_vars['da']['content'] == '3'): ?>
                     部分付款后做货
                <?php elseif ($this->_tpl_vars['da']['content'] == '4'): ?>
                     部分付款后发货
                <?php elseif ($this->_tpl_vars['da']['content'] == '5'): ?>
                     免费重新做货
                <?php else: ?>
                
                <?php endif; ?>
                </td>
               <td><?php echo $this->_tpl_vars['da']['total']; ?>
</td>
               <td><?php echo $this->_tpl_vars['da']['yingfu']; ?>
</td>
               <?php if ($this->_tpl_vars['da']['paid_money'] != ""): ?>
               <td><?php echo $this->_tpl_vars['da']['paid_money']; ?>
</td>
               <?php else: ?>
               <td>0</td>
               <?php endif; ?>
               <td>
					<?php if ($this->_tpl_vars['da']['paid_status'] == 1): ?>
                         未付款 
                    <?php elseif ($this->_tpl_vars['da']['paid_status'] == 2): ?>    
                         未完成
                    <?php elseif ($this->_tpl_vars['da']['paid_status'] == 3): ?>     
                         已付款 
                    <?php elseif ($this->_tpl_vars['da']['paid_status'] == 4): ?>     
                         退款中
                    <?php elseif ($this->_tpl_vars['da']['paid_status'] == 5): ?>     
                         已退款
                    <?php elseif ($this->_tpl_vars['da']['paid_status'] == 6): ?>
                         特殊审批通过                                                  
                    <?php endif; ?> 
                    </td>
              <td><?php echo $this->_tpl_vars['da']['yucun']; ?>
</td>
              <td>$<?php echo $this->_tpl_vars['da']['yue']; ?>
</td>
              </tr>
              
             <?php endforeach; endif; unset($_from); ?>
             <?php endif; ?>
		</tbody>
	</table>
	<div class="panelBar">
	

	</div>
</div>
        </div>
        <div class="pageFormContent" layoutH="100">
         <div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">

		</ul>
	</div>
	<table class="table" width="1200" layoutH="170">
		<thead>
			<tr>
                <th width="2%">编号</th>
                <th width="5%">时间</th>
                <th width="5%">订单属性</th>
                <th width="5%">分批审核状态</th>
                <th width="5%">发票状态</th> 
                <th width="5%">交货期</th>
                <th width="5%">订单号</th>
                <th width="5%">返单号</th>
                <th width="5%">报价编号</th>
                <th width="5%">设计名称</th> 
                <th width="5%">尺寸</th>
                <th width="5%">版费</th>
                <th width="5%">数量</th>        
			</tr>
		</thead>
		<tbody>
         <?php if ($this->_tpl_vars['order']): ?>
			 <?php $_from = $this->_tpl_vars['order']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['or']):
?>
              <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
" >
             
                <td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
                <td><?php echo $this->_tpl_vars['or']['order_time']; ?>
</td>
                
                <?php if ($this->_tpl_vars['or']['status'] == '1'): ?>
                   <td>烫图订单</td>
                <?php elseif ($this->_tpl_vars['or']['status'] == '2'): ?>
                   <td>烫钻订单</td>
                <?php elseif ($this->_tpl_vars['or']['status'] == '3'): ?>
                   <td>外发订单</td>
                <?php else: ?>   
                   <td></td>
                <?php endif; ?>
                
                <?php if ($this->_tpl_vars['or']['cla_status'] == '1'): ?>
                	<td>审核中</td>
                <?php elseif ($this->_tpl_vars['or']['cla_status'] == '2'): ?>
                   <td>审核通过</td>
                <?php elseif ($this->_tpl_vars['or']['cla_status'] == '3'): ?>
                   <td>驳回</td>
                <?php else: ?>   
                   <td></td>
                <?php endif; ?>
                
              
 				<td>
                <?php if ($this->_tpl_vars['or']['invoice_status'] == 0): ?>
                    未生成发票
                <?php else: ?>
                    已生成发票
                <?php endif; ?>                
               </td>
                
                <td><?php echo $this->_tpl_vars['or']['deliver_goods']; ?>
</td>
                <td><?php echo $this->_tpl_vars['or']['order_number']; ?>
</td>               
                <td><?php echo $this->_tpl_vars['or']['return_number']; ?>
</td>
                <td><?php echo $this->_tpl_vars['or']['quotation_code']; ?>
</td>
                <td><?php echo $this->_tpl_vars['or']['design_name']; ?>
</td>
                
                 <?php if ($this->_tpl_vars['or']['size'] != ""): ?>
                    <td><?php echo $this->_tpl_vars['or']['size']; ?>
</td>
                <?php else: ?>
                    <?php if ($this->_tpl_vars['or']['cm_w'] != ""): ?>
                       <td><?php echo $this->_tpl_vars['or']['cm_w']; ?>
X<?php echo $this->_tpl_vars['or']['cm_h']; ?>
</td>
                    <?php else: ?>
                       <td></td>
                    <?php endif; ?>   
                <?php endif; ?>
                
                <td><?php echo $this->_tpl_vars['or']['edition_price']; ?>
</td>
                <td><?php echo $this->_tpl_vars['or']['number']; ?>
</td>
              </tr>
              
             <?php endforeach; endif; unset($_from); ?>
             <?php endif; ?>
        
		</tbody>
	</table>
	<div class="panelBar">
		<div class="pages">
			
			<span></span>
		</div>
		
		

	</div>
</div> 
        </div>
        <div class="pageFormContent" layoutH="100">
         <div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">

		</ul>
	</div>
	<table class="table" width="1200" layoutH="170">
		<thead>
			<tr>
                <th width="2%">编号</th>
                <th width="5%">时间</th>
                <th width="5%">申请内容</th>
                <th width="5%">发票状态</th>
                <th width="5%">销售明细</th> 
                <th width="5%">发票号</th>
                <th width="5%">订单号</th>
                <th width="5%">小计</th>
                <th width="5%">运费</th> 
                <th width="5%">版费</th>
                <th width="5%">总计</th>
                <th width="5%">折扣</th>
                <th width="5%">应付款</th>        
			</tr>
		</thead>
		<tbody>
         <?php if ($this->_tpl_vars['invoice_1']): ?>
			 <?php $_from = $this->_tpl_vars['invoice_1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['in']):
?>
              <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
" >
                <td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
                <td><?php echo $this->_tpl_vars['in']['time']; ?>
</td>
 				<td>
                <?php if ($this->_tpl_vars['in']['audit_type'] == '1'): ?>
                     先做货后付款
                <?php elseif ($this->_tpl_vars['in']['audit_type'] == '2'): ?>
                     先发货后付款
                <?php elseif ($this->_tpl_vars['in']['audit_type'] == '3'): ?>
                     部分付款后做货
                <?php elseif ($this->_tpl_vars['in']['audit_type'] == '4'): ?>
                     部分付款后发货
                <?php elseif ($this->_tpl_vars['in']['audit_type'] == '5'): ?>
                     免费重新做货
                <?php else: ?>
                <?php endif; ?>
                </td>
                <td>
                   <?php if ($this->_tpl_vars['in']['status'] == 5): ?>
                    
                   <?php elseif ($this->_tpl_vars['in']['status'] == 1): ?>
                       无需审核
                   <?php elseif ($this->_tpl_vars['in']['status'] == 2): ?>
                       审核中
                   <?php elseif ($this->_tpl_vars['in']['status'] == 3): ?> 
                       审核通过
                   <?php elseif ($this->_tpl_vars['in']['status'] == 4): ?>  
                       驳回
                   <?php endif; ?>
                </td>
                 <td>
                <?php if ($this->_tpl_vars['in']['sales_status'] == '1'): ?>
                    未加入明细
                <?php else: ?>
                    已加入明细
                <?php endif; ?>
                </td>
                <td><?php echo $this->_tpl_vars['in']['invoice_number']; ?>
</td>
                <td><?php echo $this->_tpl_vars['in']['order_n']; ?>
</td>
                <td><?php echo $this->_tpl_vars['in']['subtotal']; ?>
</td>
                <td>
                <?php if ($this->_tpl_vars['in']['freight'] != ""): ?>
                     <?php echo $this->_tpl_vars['in']['one']; ?>
<?php echo $this->_tpl_vars['in']['freight']; ?>

                <?php else: ?>    
                     <?php echo $this->_tpl_vars['in']['freight']; ?>

                <?php endif; ?>       
                </td>
                  <td><?php echo $this->_tpl_vars['in']['one']; ?>
<?php echo $this->_tpl_vars['in']['edition_price']; ?>
</td>
              <td><?php echo $this->_tpl_vars['in']['total']; ?>
</td>
                <td>
               
                    <?php echo $this->_tpl_vars['in']['rebate']; ?>
 
                
                </td>
                <td><?php echo $this->_tpl_vars['in']['due']; ?>
</td>
                
              </tr>
              
             <?php endforeach; endif; unset($_from); ?>
             <?php endif; ?>
        
		</tbody>
	</table>
	<div class="panelBar">
		<div class="pages">
			
			<span></span>
		</div>
		
		

	</div>
</div> 
        </div>
        <div class="pageFormContent" layoutH="100">
         <div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">

		</ul>
	</div>
	<table class="table" width="1200" layoutH="170">
		<thead>
			<tr>
                <th width="2%">编号</th>
                <th width="5%">时间</th>
                <th width="5%">发票状态</th>
                <th width="5%">发票号</th>
                <th width="5%">总价</th> 
                <th width="5%">应付金额</th>
                <th width="5%">已付金额</th>
                <th width="5%">余额</th>
                <th width="5%">付款时间</th>
                <th width="5%">申请内容</th>
                <th width="5%">付款状态</th> 
                <th width="5%">付款方式</th>
                <th width="5%">财务备注</th>
                <th width="5%">发货属性</th>        
			</tr>
		</thead>
		<tbody>
     
             <?php if ($this->_tpl_vars['sale_detail']): ?>
              <?php $_from = $this->_tpl_vars['sale_detail']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['sdo']):
?>
              <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
" >
              <td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
               <td><?php echo $this->_tpl_vars['sdo']['detail_time']; ?>
</td>
               <td></td>
               <td><?php echo $this->_tpl_vars['sdo']['invoice_number']; ?>
</td>
               <td style="text-align:right;">$<?php echo $this->_tpl_vars['sdo']['paid_money_us']; ?>
</td>
               <td style="text-align:right;">$<?php echo $this->_tpl_vars['sdo']['paid_money_us']; ?>
</td>
               <?php if ($this->_tpl_vars['sdo']['paid_status'] == '3'): ?><td style="text-align:right;">$<?php echo $this->_tpl_vars['sdo']['paid_money_us']; ?>
</td>
               <?php else: ?><td></td><?php endif; ?>
               <td></td>
               <td><?php echo $this->_tpl_vars['sdo']['paid_time']; ?>
</td>
               <td></td>
               <td><?php echo $this->_tpl_vars['sdo']['payment1']; ?>
</td>
               <td><?php echo $this->_tpl_vars['sdo']['paid_type']; ?>
</td>
               <td><?php echo $this->_tpl_vars['sdo']['financial_note']; ?>
</td>
               <td></td>
             </tr>
              <?php endforeach; endif; unset($_from); ?> 
              <?php endif; ?>
             <?php if ($this->_tpl_vars['sale_detail'] != ""): ?>
			 <?php $_from = $this->_tpl_vars['sale_detail']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['sd']):
?>
              <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
" >
              
                <td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
                <td><?php echo $this->_tpl_vars['sd']['time']; ?>
</td>
 				<td><?php if ($this->_tpl_vars['sd']['invoice_status'] == 1): ?>
                         
                    <?php elseif ($this->_tpl_vars['sd']['invoice_status'] == 2): ?>
                         审核中
                    <?php elseif ($this->_tpl_vars['sd']['invoice_status'] == 3): ?>
                         审核通过
                    <?php elseif ($this->_tpl_vars['sd']['invoice_status'] == 4): ?>     
                         驳回
                    <?php endif; ?> 
                </td>                
                <td><?php echo $this->_tpl_vars['sd']['invoice_number']; ?>
</td>
                <td style="text-align:right;"><?php echo $this->_tpl_vars['sd']['due']; ?>
</td>
                <td style="text-align:right;"><?php echo $this->_tpl_vars['sd']['amount_payable']; ?>
</td>
                <td style="text-align:right;"><?php echo $this->_tpl_vars['sd']['paid_money']; ?>
</td>
                <td style="text-align:right;"><?php echo $this->_tpl_vars['sd']['balance']; ?>
</td>
                <td><?php echo $this->_tpl_vars['sd']['paid_time']; ?>
</td>
                <td><?php echo $this->_tpl_vars['sd']['audit_type']; ?>
</td>
                <td>
					<?php if ($this->_tpl_vars['sd']['paid_status'] == 1): ?>
                         未付款 
                    <?php elseif ($this->_tpl_vars['sd']['paid_status'] == 2): ?>    
                         未完成
                    <?php elseif ($this->_tpl_vars['sd']['paid_status'] == 3): ?>     
                         已付款 
                    <?php elseif ($this->_tpl_vars['sd']['paid_status'] == 4): ?>     
                         退款中
                    <?php elseif ($this->_tpl_vars['sd']['paid_status'] == 5): ?>     
                         已退款
                    <?php elseif ($this->_tpl_vars['sd']['paid_status'] == 6): ?>
                         特殊审批通过                                                  
                    <?php endif; ?>
                </td>
                <td><?php echo $this->_tpl_vars['sd']['audit_type1']; ?>
</td>                
                <td><?php echo $this->_tpl_vars['sd']['financial_note']; ?>
</td>
                <td>
					<?php if ($this->_tpl_vars['sd']['delivery_completely'] == 1): ?>
                         未发货 
                    <?php elseif ($this->_tpl_vars['sd']['delivery_completely'] == 2): ?>    
                         未完成
                    <?php elseif ($this->_tpl_vars['sd']['delivery_completely'] == 3): ?>     
                         已发货                                                  
                    <?php endif; ?>
                                
                </td>                
               
              </tr>
              
             <?php endforeach; endif; unset($_from); ?>
             <?php endif; ?>
		</tbody>
	</table>
	<div class="panelBar">
		<div class="pages">
			
			<span></span>
		</div>
		
	

	</div>
</div> 
        </div>
        <div class="pageFormContent" layoutH="100">
         <div>
          <input type="hidden" name="" id="" value="" />
            <div class="pageFormContent" layoutH="58" style="width:20%; float:left;" >
              <div class="divider">divider</div>
              <div class="unit">
                <label style="width:80px">合计款项：</label>          
                <input type="text" name="" id="" readonly="readonly" style="width:80px" value="<?php echo $this->_tpl_vars['count1']; ?>
"/>笔
              </div>
              <div class="divider">divider</div>
              <div class="unit">
                <label style="width:80px">已结款项：</label>
                <input type="text" name="" id="" readonly="readonly" style="width:80px" value="<?php echo $this->_tpl_vars['count2']; ?>
"/>笔
              </div>
              <div class="divider">divider</div>
              <div class="unit">
                <label style="width:80px">未结款项：</label>
                <input type="text" name="" id="" readonly="readonly" style="width:80px" value="<?php echo $this->_tpl_vars['count3']; ?>
"/>笔
              </div>
              <div class="divider">divider</div>
            </div>
            <div class="pageFormContent" layoutH="58" style="width:60%; float: left;" >
            <div class="divider">divider</div>
              <div class="unit">
                <label style="width:60px">合计：</label>
                <input type="text" name="" id="" readonly="readonly" style="width:80px;" value="<?php echo $this->_tpl_vars['leijia000']; ?>
"/>
                <label style="width:20px">$</label>
                <input type="text" name="" id="" readonly="readonly" style="width:80px; margin-left:5px;" value="<?php echo $this->_tpl_vars['leijia111']; ?>
"/>
                <label style="width:20px">€</label>
                <input type="text" name="" id="" readonly="readonly" style="width:80px; margin-left:5px;" value="<?php echo $this->_tpl_vars['leijia222']; ?>
"/>
                <label style="width:20px">￥</label>
              </div>
              <div class="divider">divider</div>
              <div class="unit">
                <label style="width:60px">合计：</label>
                <input type="text" name="" id="" readonly="readonly" style="width:80px;" value="<?php echo $this->_tpl_vars['yifu000']; ?>
"/>
                <label style="width:20px">$</label>
                <input type="text" name="" id="" readonly="readonly" style="width:80px; margin-left:5px;" value="<?php echo $this->_tpl_vars['yifu111']; ?>
"/>
                <label style="width:20px">€</label>
                <input type="text" name="" id="" readonly="readonly" style="width:80px; margin-left:5px;" value="<?php echo $this->_tpl_vars['yifu222']; ?>
"/>
                <label style="width:20px">￥</label>
              </div>
              <div class="divider">divider</div>
              <div class="unit">
                <label style="width:60px">合计：</label>
                <input type="text" name="" id="" readonly="readonly" style="width:80px;" value="<?php echo $this->_tpl_vars['yifu333']; ?>
"/>
                <label style="width:20px">$</label>
                <input type="text" name="" id="" readonly="readonly" style="width:80px; margin-left:5px;" value="<?php echo $this->_tpl_vars['yifu444']; ?>
"/>
                <label style="width:20px">€</label>
                <input type="text" name="" id="" readonly="readonly" style="width:80px; margin-left:5px;" value="<?php echo $this->_tpl_vars['yifu555']; ?>
"/>
                <label style="width:20px">￥</label>
              </div>
              <div class="divider">divider</div>
            </div>
          </div>
         </div> 
          
      </div>
      <div class="tabsFooter">
        <div class="tabsFooterContent"> </div>
      </div>
      
    
    <!--<div class="formBar">
      <ul>
        <li>
          <div class="buttonActive">
            <div class="buttonContent">
              <button type="button" id="submit_new_customer_edit" >确定</button>
            </div>
          </div>
        </li>
        <li> 
        <div class="buttonActive">
            <div class="buttonContent">
              <button type="button" class="close" >取消</button>
            </div>
          </div>
        </li>
      </ul>
    </div>-->
  </form>
</div>
</div>
<!-- {literal} --> 