<?php /* Smarty version 2.6.22, created on 2014-04-30 11:34:46
         compiled from old_sale_detail/edit.html */ ?>
<div class="pageContent">
  <form method="post"  action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, navTabAjaxDone)">
    <div class="pageFormContent" layoutH="58">
       <input type="hidden" size="30"  name="mid" value="<?php echo $this->_tpl_vars['salesdetails_old']['ID']; ?>
" />
      <div class="unit">
      	<label>时间：</label>
        <input type="text" size="30" class="readonly"  readonly="readonly" name="date"  id="product_name"  readonly-"true" value="<?php echo $this->_tpl_vars['salesdetails_old']['date']; ?>
"/>
      </div>
      <div class="divider">divider</div>
      <!--<div class="unit">
      	<label>商品名称：</label>
        <input type="text" size="30" name="product_name" id="product_name" value="<?php echo $this->_tpl_vars['supplier_management']['product_name']; ?>
"   />
      </div>
      <div class="divider">divider</div>-->
      <div class="unit">
      	<label>业务员：</label>
        <input type="text" size="30" read="readonly" class="readonly" name="sales" readonly="true" value="<?php echo $this->_tpl_vars['salesdetails_old']['Sales']; ?>
" />
      </div>
      <div class="divider">divider</div>
      <div class="unit">
      	<label>客户代码：</label>
        <input type="text" size="30" class="readonly"  name="code" readonly="true" value="<?php echo $this->_tpl_vars['salesdetails_old']['code']; ?>
"/>
      </div>
      <div class="divider">divider</div>
      <div class="unit">
      	<label>客户名：</label>
        <input type="text" size="30" class="readonly" name="Customer" readonly="true" value="<?php echo $this->_tpl_vars['salesdetails_old']['Customer']; ?>
"/>
      </div>
      <div class="divider">divider</div>
      <div class="unit">
      	<label>公司：</label>
        <input type="text" size="30" class="readonly" name="Company" readonly="true" value="<?php echo $this->_tpl_vars['salesdetails_old']['Company']; ?>
" />
      </div>
      <div class="divider">divider</div>
      <div class="unit">
      	<label>发票号：</label>
        <input type="text" size="30" class="readonly" name="InvoiceNo" readonly="true" value="<?php echo $this->_tpl_vars['salesdetails_old']['InvoiceNo']; ?>
"/>
      </div>
      <div class="divider">divider</div>
      <div class="unit">
      	<label>订单号：</label>
        <input type="text" size="30" class="readonly" name="OrderNo" readonly="true" value="<?php echo $this->_tpl_vars['salesdetails_old']['OrderNo']; ?>
"/>
      </div>
      <div class="divider">divider</div>
      <div class="unit">
      	<label>货币：</label>
        <input type="text" size="30" class="readonly" name="Currency" readonly="true" value="<?php echo $this->_tpl_vars['salesdetails_old']['Currency']; ?>
"/>
      </div>
      <div class="divider">divider</div>
      <div class="unit">
      	<label>运费：</label>
        <input type="text" size="30" class="readonly" name="Freight" readonly="true" value="<?php echo $this->_tpl_vars['salesdetails_old']['Freight']; ?>
"/>
      </div>
      <div class="divider">divider</div>
      <div class="unit">
      	<label>总价：</label>
        <input type="text" size="30" class="readonly" name="Amount" readonly="true" value="<?php echo $this->_tpl_vars['salesdetails_old']['Amount']; ?>
"/>
      </div>
      <div class="divider">divider</div>
       <div class="unit">
      	<label>手续费：</label>
        <input type="text" size="30"  name="cut"  value="<?php echo $this->_tpl_vars['salesdetails_old']['cut']; ?>
"/>
      </div>
      <div class="divider">divider</div>
      <div class="unit">
                <label style="width:120px;">付款状态：</label>
                <select class="combox" name="payment">
                 <?php if ($this->_tpl_vars['salesdetails_old']['payment'] == '-1'): ?>
               <option value="-1">已付款</option>
               <option value="0">未付款</option>
                 <?php else: ?>
               <option value="0">未付款</option>
               <option value="-1">已付款</option>
                 <?php endif; ?>
                 </select>

      </div>
      <div class="divider">divider</div> 
     <div class="unit">
      	<label>付款时间：</label>
        <input type="text" size="30" class="required date" name="PaymentDate" readonly="readonly" value="<?php echo $this->_tpl_vars['salesdetails_old']['PaymentDate']; ?>
"/>
      </div>
      <div class="divider">divider</div> 
      <div class="unit">
      	<label>付款方式：</label>
        <select class="combox required" name="PaymentTerm" >
        <?php $_from = $this->_tpl_vars['payment_method']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['pm']):
?>
        <option value="<?php echo $this->_tpl_vars['pm']['id']; ?>
"<?php if ($this->_tpl_vars['salesdetails_old']['PaymentTerm'] == $this->_tpl_vars['pm']['id']): ?> selected="selected" <?php endif; ?>><?php echo $this->_tpl_vars['pm']['payment_methods_name']; ?>
</option>
        <?php endforeach; endif; unset($_from); ?>
        </select>
      </div>
      <div class="divider">divider</div> 
      <div class="unit">
      	<label>财务备注：</label>
        <textarea name="NotesAccount" cols="50" rows="3"><?php echo $this->_tpl_vars['salesdetails_old']['NotesAccount']; ?>
</textarea>
      </div>
      <div class="divider">divider</div> 
      <div class="unit">
      	<label>销售备注：</label>
        <input type="text" size="30" class="readonly" name="NotesSales" readonly="true" value="<?php echo $this->_tpl_vars['salesdetails_old']['NotesSales']; ?>
"/>
      </div>
      <div class="divider">divider</div> 
      <div class="unit">
      	<label>发货时间：</label>
        <input type="text" size="30" class="readonly" name="DeliveryDate" readonly="true" value="<?php echo $this->_tpl_vars['salesdetails_old']['DeliveryDate']; ?>
"/>
      </div>
      <div class="divider">divider</div> 
      <div class="unit">
      	<label>快递单号：</label>
        <input type="text" size="30" class="readonly" name="TrackingNo" readonly="true" value="<?php echo $this->_tpl_vars['salesdetails_old']['TrackingNo']; ?>
" />
      </div>
      <div class="divider">divider</div> 
      <div class="unit">
      	<label>快递公司：</label>
        <input type="text" size="30" class="readonly" name="TrackingCompany" readonly="true" value="<?php echo $this->_tpl_vars['salesdetails_old']['TrackingCompany']; ?>
"/>
      </div>
      <div class="divider">divider</div> 
      <div class="unit">
      	<label>快递称重：</label>
        <input type="text" size="30" class="readonly" name="Weight" readonly="true" value="<?php echo $this->_tpl_vars['salesdetails_old']['Weight']; ?>
"/>
      </div>
      <div class="divider">divider</div> 
    </div>
    
     
   <div class="formBar">
      <ul>
        <li>
          <div class="buttonActive">
            <div class="buttonContent">
              <button type="submit" id="submit_new_supplier_code">确认</button>
            </div>
          </div>
        </li>
        <li>
					<div class="button"><div class="buttonContent"><button type="button" class="close">取消</button></div></div>
				</li>

      </ul>
    </div>
  </form>
</div>
