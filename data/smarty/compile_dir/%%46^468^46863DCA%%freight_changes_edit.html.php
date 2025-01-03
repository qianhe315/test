<?php /* Smarty version 2.6.22, created on 2023-02-14 10:25:34
         compiled from sale_detail/freight_changes_edit.html */ ?>
<div class="pageContent">
  <form method="post" id="submit_freight_changes" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, dialogAjaxDone)">
    <div class="pageFormContent" layoutH="58">
      <div class="unit">
       <label>快递公司：</label>
		<select class="combox" name="shipping_company_edit" id="shipping_company_edit">
                <option value="">全部</option>
              	<option value="UPS" <?php if ($this->_tpl_vars['company'] == 'UPS'): ?>selected="selected"<?php endif; ?>>UPS</option>
                <option value="DHL" <?php if ($this->_tpl_vars['company'] == 'DHL'): ?>selected="selected"<?php endif; ?>>DHL</option>
                <option value="Fedex" <?php if ($this->_tpl_vars['company'] == 'Fedex'): ?>selected="selected"<?php endif; ?>>Fedex</option>
                
        </select>
    
    </div>
    
      <div class="divider">divider</div>
        <div class="unit">
      	<label>箱数：</label>
        <select class="combox" name="number" id="number" onchange="number_oclick()" >
                <option value="">全部</option>
                
                <?php unset($this->_sections['loop']);
$this->_sections['loop']['name'] = 'loop';
$this->_sections['loop']['loop'] = is_array($_loop=18) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['loop']['show'] = true;
$this->_sections['loop']['max'] = $this->_sections['loop']['loop'];
$this->_sections['loop']['step'] = 1;
$this->_sections['loop']['start'] = $this->_sections['loop']['step'] > 0 ? 0 : $this->_sections['loop']['loop']-1;
if ($this->_sections['loop']['show']) {
    $this->_sections['loop']['total'] = $this->_sections['loop']['loop'];
    if ($this->_sections['loop']['total'] == 0)
        $this->_sections['loop']['show'] = false;
} else
    $this->_sections['loop']['total'] = 0;
if ($this->_sections['loop']['show']):

            for ($this->_sections['loop']['index'] = $this->_sections['loop']['start'], $this->_sections['loop']['iteration'] = 1;
                 $this->_sections['loop']['iteration'] <= $this->_sections['loop']['total'];
                 $this->_sections['loop']['index'] += $this->_sections['loop']['step'], $this->_sections['loop']['iteration']++):
$this->_sections['loop']['rownum'] = $this->_sections['loop']['iteration'];
$this->_sections['loop']['index_prev'] = $this->_sections['loop']['index'] - $this->_sections['loop']['step'];
$this->_sections['loop']['index_next'] = $this->_sections['loop']['index'] + $this->_sections['loop']['step'];
$this->_sections['loop']['first']      = ($this->_sections['loop']['iteration'] == 1);
$this->_sections['loop']['last']       = ($this->_sections['loop']['iteration'] == $this->_sections['loop']['total']);
?>
                
               	<option value="<?php echo $this->_sections['loop']['index']+1; ?>
" <?php if ($this->_tpl_vars['sale_detail_deliver']['box'] == $this->_sections['loop']['index']+1): ?>selected="selected"<?php endif; ?>><?php echo $this->_sections['loop']['index']+1; ?>
</option>
                <?php endfor; endif; ?>
        </select>
      </div>
      <div class="divider">divider</div>
      <input type="hidden" name="mid"  id="mid" style="width:100px" value="<?php echo $this->_tpl_vars['id']; ?>
" class="required" />
     
      
      <?php if ($this->_tpl_vars['sale_detail_deliver']['net1'] != "" || $this->_tpl_vars['sale_detail_deliver']['gross1'] != "" || $this->_tpl_vars['sale_detail_deliver']['specifications1'] != "" || $this->_tpl_vars['sale_detail_deliver']['volume1'] != ""): ?>
            <div id="x1" style="display:block;">
                  <div class="unit" >
                  <label>总净重1：</label>
                  <input type="text" name="net_weight_1"  id="net_weight_1" style="width:100px" value="<?php echo $this->_tpl_vars['sale_detail_deliver']['net1']; ?>
" class="" />
                  <input type="hidden" name="mid"  id="mid" style="width:100px" value="<?php echo $this->_tpl_vars['id']; ?>
" class="required" />
                  </div>
                  <div class="unit" >
                  <label>总毛重1：</label>
                  <input type="text" name="gt_1"  id="gt_1" style="width:100px" value="<?php echo $this->_tpl_vars['sale_detail_deliver']['gross1']; ?>
" class="" />
                  </div>
                  <div class="unit" >
                      <label>箱规1：</label>
                      <font style="float:left; line-height:24px; width:15px; margin-top:5px;">L:</font>
                      <input type="text" name="L1" id="L1" class="sIE_No" value="<?php echo $this->_tpl_vars['specifications1'][0]; ?>
" style="width:30px;" />
                      <font style="float:left; margin-right:10px; line-height:24px; width:15px;margin-top:5px;"> cm </font>
                      <font style="float:left; margin-right:10px; line-height:24px; width:10px; margin-top:5px;"> * </font>
                      <font style="float:left; margin-right:10px; line-height:24px; width:10px; margin-top:5px;">W:</font>
                      <input type="text" name="W1" id="W1" class="sIE_No" value="<?php echo $this->_tpl_vars['specifications1'][1]; ?>
"  style="width:30px;" />
                       <font style="float:left; margin-right:10px; line-height:24px; width:15px;margin-top:5px;"> cm </font>
                      <font style="float:left; margin-right:10px; line-height:24px; width:10px;margin-top:5px;"> * </font>
                      <font style="float:left; margin-right:10px; line-height:24px; width:10px; margin-top:5px;">H:</font>
                      <input type="text" name="H1" id="H1" class="sIE_No" value="<?php echo $this->_tpl_vars['specifications1'][2]; ?>
" style="width:30px;" />
                      <font style="float:left; margin-right:10px; line-height:24px; width:10px;margin-top:5px;"> cm </font>
                  </div>
                  <div class="divider">divider</div>
            </div>
       <?php else: ?>
            <div id="x1" style="display:none;">
                  <div class="unit" >
                  <label>总净重1：</label>
                  <input type="text" name="net_weight_1"  id="net_weight_1" style="width:100px" value="" class="" />
                  <input type="hidden" name="mid"  id="mid" style="width:100px" value="<?php echo $this->_tpl_vars['id']; ?>
" class="" />
                  </div>
                  <div class="unit" >
                  <label>总毛重1：</label>
                  <input type="text" name="gt_1"  id="gt_1" style="width:100px" value="" class="required" />
                  </div>
                  <div class="unit" >
                      <label>箱规1：</label>
                      <font style="float:left; line-height:24px; width:15px; margin-top:5px;">L:</font>
                      <input type="text" name="L1" id="L1" class="sIE_No" value="" style="width:30px;" />
                      <font style="float:left; margin-right:10px; line-height:24px; width:15px;margin-top:5px;"> cm </font>
                      <font style="float:left; margin-right:10px; line-height:24px; width:10px; margin-top:5px;"> * </font>
                      <font style="float:left; margin-right:10px; line-height:24px; width:10px; margin-top:5px;">W:</font>
                      <input type="text" name="W1" id="W1" class="sIE_No" value=""  style="width:30px;" />
                       <font style="float:left; margin-right:10px; line-height:24px; width:15px;margin-top:5px;"> cm </font>
                      <font style="float:left; margin-right:10px; line-height:24px; width:10px;margin-top:5px;"> * </font>
                      <font style="float:left; margin-right:10px; line-height:24px; width:10px; margin-top:5px;">H:</font>
                      <input type="text" name="H1" id="H1" class="sIE_No" value="" style="width:30px;" />
                      <font style="float:left; margin-right:10px; line-height:24px; width:10px;margin-top:5px;"> cm </font>
                  </div>
                  <div class="divider">divider</div>
            </div>
       <?php endif; ?>
       <?php if ($this->_tpl_vars['sale_detail_deliver']['net2'] != "" || $this->_tpl_vars['sale_detail_deliver']['gross2'] != "" || $this->_tpl_vars['sale_detail_deliver']['specifications2'] != "" || $this->_tpl_vars['sale_detail_deliver']['volume2'] != ""): ?>
            <div id="x2" style="display:block;">
                  <div class="unit" >
                  <label>总净重2：</label>
                  <input type="text" name="net_weight_2"  id="net_weight_2" style="width:100px" value="<?php echo $this->_tpl_vars['sale_detail_deliver']['net2']; ?>
" class="" />
                  </div>
                  <div class="unit">
                  <label>总毛重2：</label>
                  <input type="text" name="gt_2"  id="gt_2" style="width:100px" value="<?php echo $this->_tpl_vars['sale_detail_deliver']['gross2']; ?>
" class=""  />
                  </div>
                  <div class="unit" >
                      <label>箱规2：</label>
                      <font style="float:left; line-height:24px; width:15px; margin-top:5px;">L:</font>
                      <input type="text" name="L2" id="L2" class="sIE_No" value="<?php echo $this->_tpl_vars['specifications2'][0]; ?>
" style="width:30px;" />
                      <font style="float:left; margin-right:10px; line-height:24px; width:15px;margin-top:5px;"> cm </font>
                      <font style="float:left; margin-right:10px; line-height:24px; width:10px; margin-top:5px;"> * </font>
                      <font style="float:left; margin-right:10px; line-height:24px; width:10px; margin-top:5px;">W:</font>
                      <input type="text" name="W2" id="W2" class="sIE_No" value="<?php echo $this->_tpl_vars['specifications2'][1]; ?>
"  style="width:30px;" />
                      <font style="float:left; margin-right:10px; line-height:24px; width:15px;margin-top:5px;"> cm </font>
                      <font style="float:left; margin-right:10px; line-height:24px; width:10px;margin-top:5px;"> * </font>
                      <font style="float:left; margin-right:10px; line-height:24px; width:10px; margin-top:5px;">H:</font>
                      <input type="text" name="H2" id="H2" class="sIE_No" value="<?php echo $this->_tpl_vars['specifications2'][2]; ?>
" style="width:30px;" />
                      <font style="float:left; margin-right:20px; line-height:24px; width:20px;margin-top:5px;"> cm </font>
                  </div>
                  <div class="divider">divider</div>
            </div>
        <?php else: ?>
            <div id="x2" style="display:none;">
                  <div class="unit" >
                  <label>总净重2：</label>
                  <input type="text" name="net_weight_2"  id="net_weight_2" style="width:100px" value="" class="" />
                  </div>
                  <div class="unit">
                  <label>总毛重2：</label>
                  <input type="text" name="gt_2"  id="gt_2" style="width:100px" value="" class=""  />
                  </div>
                  <div class="unit" >
                      <label>箱规2：</label>
                      <font style="float:left; line-height:24px; width:15px; margin-top:5px;">L:</font>
                      <input type="text" name="L2" id="L2" class="sIE_No" value="" style="width:30px;" />
                      <font style="float:left; margin-right:10px; line-height:24px; width:15px;margin-top:5px;"> cm </font>
                      <font style="float:left; margin-right:10px; line-height:24px; width:10px; margin-top:5px;"> * </font>
                      <font style="float:left; margin-right:10px; line-height:24px; width:10px; margin-top:5px;">W:</font>
                      <input type="text" name="W2" id="W2" class="sIE_No" value=""  style="width:30px;" />
                      <font style="float:left; margin-right:10px; line-height:24px; width:15px;margin-top:5px;"> cm </font>
                      <font style="float:left; margin-right:10px; line-height:24px; width:10px;margin-top:5px;"> * </font>
                      <font style="float:left; margin-right:10px; line-height:24px; width:10px; margin-top:5px;">H:</font>
                      <input type="text" name="H2" id="H2" class="sIE_No" value="" style="width:30px;" />
                      <font style="float:left; margin-right:20px; line-height:24px; width:20px;margin-top:5px;"> cm </font>
                  </div>
                  <div class="divider">divider</div>
             </div>
        <?php endif; ?>
        <?php if ($this->_tpl_vars['sale_detail_deliver']['net3'] != "" || $this->_tpl_vars['sale_detail_deliver']['gross3'] != "" || $this->_tpl_vars['sale_detail_deliver']['specifications3'] != "" || $this->_tpl_vars['sale_detail_deliver']['volume3'] != ""): ?>
            <div id="x3" style="display:block;">    
                  <div class="unit" >
                  <label>总净重3：</label>
                  <input type="text" name="net_weight_3"  id="net_weight_3" style="width:100px" value="<?php echo $this->_tpl_vars['sale_detail_deliver']['net3']; ?>
" class="" />
                  </div>
                  <div class="unit" >
                  <label>总毛重3：</label>
                  <input type="text" name="gt_3"  id="gt_3" style="width:100px" value="<?php echo $this->_tpl_vars['sale_detail_deliver']['gross3']; ?>
" class=""  />
                  </div>
                  <div class="unit" >
                      <label>箱规3：</label>
                      <font style="float:left; line-height:24px; width:15px; margin-top:5px;">L:</font>
                      <input type="text" name="L3" id="L3" class="sIE_No" value="<?php echo $this->_tpl_vars['specifications3'][0]; ?>
" style="width:30px;" />
                      <font style="float:left; margin-right:10px; line-height:24px; width:15px;margin-top:5px;"> cm </font>
                      <font style="float:left; margin-right:10px; line-height:24px; width:10px; margin-top:5px;"> * </font>
                      <font style="float:left; margin-right:10px; line-height:24px; width:10px; margin-top:5px;">W:</font>
                      <input type="text" name="W3" id="W3" class="sIE_No" value="<?php echo $this->_tpl_vars['specifications3'][1]; ?>
"  style="width:30px;" />
                      <font style="float:left; margin-right:10px; line-height:24px; width:15px;margin-top:5px;"> cm </font>
                      <font style="float:left; margin-right:10px; line-height:24px; width:10px;margin-top:5px;"> * </font>
                      <font style="float:left; margin-right:10px; line-height:24px; width:10px; margin-top:5px;">H:</font>
                      <input type="text" name="H3" id="H3" class="sIE_No" value="<?php echo $this->_tpl_vars['specifications3'][2]; ?>
" style="width:30px;" />
                      <font style="float:left; margin-right:20px; line-height:24px; width:20px;margin-top:5px;"> cm </font>
                  </div>
                  <div class="divider">divider</div>
             </div>
          <?php else: ?> 
             <div id="x3" style="display:none;">    
                  <div class="unit" >
                  <label>总净重3：</label>
                  <input type="text" name="net_weight_3"  id="net_weight_3" style="width:100px" value="" class="" />
                  </div>
                  <div class="unit" >
                  <label>总毛重3：</label>
                  <input type="text" name="gt_3"  id="gt_3" style="width:100px" value="" class=""  />
                  </div>
                  <div class="unit" >
                      <label>箱规3：</label>
                      <font style="float:left; line-height:24px; width:15px; margin-top:5px;">L:</font>
                      <input type="text" name="L3" id="L3" class="sIE_No" value="" style="width:30px;" />
                      <font style="float:left; margin-right:10px; line-height:24px; width:15px;margin-top:5px;"> cm </font>
                      <font style="float:left; margin-right:10px; line-height:24px; width:10px; margin-top:5px;"> * </font>
                      <font style="float:left; margin-right:10px; line-height:24px; width:10px; margin-top:5px;">W:</font>
                      <input type="text" name="W3" id="W3" class="sIE_No" value=""  style="width:30px;" />
                      <font style="float:left; margin-right:10px; line-height:24px; width:15px;margin-top:5px;"> cm </font>
                      <font style="float:left; margin-right:10px; line-height:24px; width:10px;margin-top:5px;"> * </font>
                      <font style="float:left; margin-right:10px; line-height:24px; width:10px; margin-top:5px;">H:</font>
                      <input type="text" name="H3" id="H3" class="sIE_No" value="" style="width:30px;" />
                      <font style="float:left; margin-right:20px; line-height:24px; width:20px;margin-top:5px;"> cm </font>
                  </div>
                  <div class="divider">divider</div>
             </div>
          <?php endif; ?>
          <?php if ($this->_tpl_vars['sale_detail_deliver']['net4'] != "" || $this->_tpl_vars['sale_detail_deliver']['gross4'] != "" || $this->_tpl_vars['sale_detail_deliver']['specifications4'] != "" || $this->_tpl_vars['sale_detail_deliver']['volume4'] != ""): ?> 
             <div id="x4" style="display:block;">       
                  <div class="unit" >
                  <label>总净重4：</label>
                  <input type="text" name="net_weight_4"  id="net_weight_4" style="width:100px" value="<?php echo $this->_tpl_vars['sale_detail_deliver']['net4']; ?>
" class=""  />
                  </div>
                  <div class="unit" >
                  <label>总毛重4：</label>
                  <input type="text" name="gt_4"  id="gt_4" style="width:100px" value="<?php echo $this->_tpl_vars['sale_detail_deliver']['gross4']; ?>
" class=""  />
                  </div>
                  <div class="unit" >
                      <label>箱规4：</label>
                      <font style="float:left; line-height:24px; width:15px; margin-top:5px;">L:</font>
                      <input type="text" name="L4" id="L4" class="sIE_No" value="<?php echo $this->_tpl_vars['specifications4'][0]; ?>
" style="width:40px;" />
                      <font style="float:left; margin-right:10px; line-height:24px; width:15px;margin-top:5px;"> cm </font>
                      <font style="float:left; margin-right:10px; line-height:24px; width:10px; margin-top:5px;"> * </font>
                      <font style="float:left; margin-right:10px; line-height:24px; width:10px; margin-top:5px;">W:</font>
                      <input type="text" name="W4" id="W4" class="sIE_No" value="<?php echo $this->_tpl_vars['specifications4'][1]; ?>
"  style="width:40px;" />
                      <font style="float:left; margin-right:10px; line-height:24px; width:15px;margin-top:5px;"> cm </font>
                      <font style="float:left; margin-right:10px; line-height:24px; width:10px;margin-top:5px;"> * </font>
                      <font style="float:left; margin-right:10px; line-height:24px; width:10px; margin-top:5px;">H:</font>
                      <input type="text" name="H4" id="H4" class="sIE_No" value="<?php echo $this->_tpl_vars['specifications4'][2]; ?>
" style="width:40px;" />
                     <font style="float:left; margin-right:20px; line-height:24px; width:20px;margin-top:5px;"> cm </font>
                   </div>
                  <div class="divider">divider</div>
              </div> 
           <?php else: ?> 
              <div id="x4" style="display:none;">       
                  <div class="unit" >
                  <label>总净重4：</label>
                  <input type="text" name="net_weight_4"  id="net_weight_4" style="width:100px" value="" class=""  />
                  </div>
                  <div class="unit" >
                  <label>总毛重4：</label>
                  <input type="text" name="gt_4"  id="gt_4" style="width:100px" value="" class=""  />
                  </div>
                  <div class="unit" >
                      <label>箱规4：</label>
                      <font style="float:left; line-height:24px; width:15px; margin-top:5px;">L:</font>
                      <input type="text" name="L4" id="L4" class="sIE_No" value="" style="width:40px;" />
                      <font style="float:left; margin-right:10px; line-height:24px; width:15px;margin-top:5px;"> cm </font>
                      <font style="float:left; margin-right:10px; line-height:24px; width:10px; margin-top:5px;"> * </font>
                      <font style="float:left; margin-right:10px; line-height:24px; width:10px; margin-top:5px;">W:</font>
                      <input type="text" name="W4" id="W4" class="sIE_No" value=""  style="width:40px;" />
                      <font style="float:left; margin-right:10px; line-height:24px; width:15px;margin-top:5px;"> cm </font>
                      <font style="float:left; margin-right:10px; line-height:24px; width:10px;margin-top:5px;"> * </font>
                      <font style="float:left; margin-right:10px; line-height:24px; width:10px; margin-top:5px;">H:</font>
                      <input type="text" name="H4" id="H4" class="sIE_No" value="" style="width:40px;" />
                     <font style="float:left; margin-right:20px; line-height:24px; width:20px;margin-top:5px;"> cm </font>
                   </div>
                  <div class="divider">divider</div>
              </div> 
           <?php endif; ?>
           <?php if ($this->_tpl_vars['sale_detail_deliver']['net5'] != "" || $this->_tpl_vars['sale_detail_deliver']['gross5'] != "" || $this->_tpl_vars['sale_detail_deliver']['specifications5'] != "" || $this->_tpl_vars['sale_detail_deliver']['volume5'] != ""): ?>
              <div id="x5" style="display:block;">    
                    <div class="unit">
                    <label>总净重5：</label>
                    <input type="text" name="net_weight_5"  id="net_weight_5" style="width:100px" value="<?php echo $this->_tpl_vars['sale_detail_deliver']['net5']; ?>
" class=""  />
                    </div>
                    <div class="unit">
                    <label>总毛重5：</label>
                    <input type="text" name="gt_5"  id="gt_5" style="width:100px" value="<?php echo $this->_tpl_vars['sale_detail_deliver']['gross5']; ?>
" class="" />
                    </div>
                    <div class="unit" >
                        <label>箱规5：</label>
                        <font style="float:left; line-height:24px; width:15px; margin-top:5px;">L:</font>
                        <input type="text" name="L5" id="L5" class="sIE_No" value="<?php echo $this->_tpl_vars['specifications5'][0]; ?>
" style="width:50px;" />
                         <font style="float:left; margin-right:10px; line-height:24px; width:15px;margin-top:5px;"> cm </font>
                        <font style="float:left; margin-right:10px; line-height:24px; width:10px; margin-top:5px;"> * </font>
                        <font style="float:left; margin-right:10px; line-height:24px; width:10px; margin-top:5px;">W:</font>
                        <input type="text" name="W5" id="W5" class="sIE_No" value="<?php echo $this->_tpl_vars['specifications5'][1]; ?>
"  style="width:50px;" />
                        <font style="float:left; margin-right:10px; line-height:24px; width:15px;margin-top:5px;"> cm </font>
                        <font style="float:left; margin-right:10px; line-height:24px; width:10px;margin-top:5px;"> * </font>
                        <font style="float:left; margin-right:10px; line-height:24px; width:10px; margin-top:5px;">H:</font>
                        <input type="text" name="H5" id="H5" class="sIE_No" value="<?php echo $this->_tpl_vars['specifications5'][2]; ?>
" style="width:50px;" />
                        <font style="float:left; margin-right:20px; line-height:24px; width:20px;margin-top:5px;"> cm </font>
                    </div>
                </div>
             <?php else: ?>
                <div id="x5" style="display:none;">    
                      <div class="unit">
                      <label>总净重5：</label>
                      <input type="text" name="net_weight_5"  id="net_weight_5" style="width:100px" value="" class=""  />
                      </div>
                      <div class="unit">
                      <label>总毛重5：</label>
                      <input type="text" name="gt_5"  id="gt_5" style="width:100px" value="" class="" />
                      </div>
                      <div class="unit" >
                          <label>箱规5：</label>
                          <font style="float:left; line-height:24px; width:15px; margin-top:5px;">L:</font>
                          <input type="text" name="L5" id="L5" class="sIE_No" value="" style="width:50px;" />
                           <font style="float:left; margin-right:10px; line-height:24px; width:15px;margin-top:5px;"> cm </font>
                          <font style="float:left; margin-right:10px; line-height:24px; width:10px; margin-top:5px;"> * </font>
                          <font style="float:left; margin-right:10px; line-height:24px; width:10px; margin-top:5px;">W:</font>
                          <input type="text" name="W5" id="W5" class="sIE_No" value=""  style="width:50px;" />
                          <font style="float:left; margin-right:10px; line-height:24px; width:15px;margin-top:5px;"> cm </font>
                          <font style="float:left; margin-right:10px; line-height:24px; width:10px;margin-top:5px;"> * </font>
                          <font style="float:left; margin-right:10px; line-height:24px; width:10px; margin-top:5px;">H:</font>
                          <input type="text" name="H5" id="H5" class="sIE_No" value="" style="width:50px;" />
                          <font style="float:left; margin-right:20px; line-height:24px; width:20px;margin-top:5px;"> cm </font>
                      </div>
                  </div>
             <?php endif; ?>
             <?php if ($this->_tpl_vars['sale_detail_deliver']['net6'] != "" || $this->_tpl_vars['sale_detail_deliver']['gross6'] != "" || $this->_tpl_vars['sale_detail_deliver']['specifications6'] != "" || $this->_tpl_vars['sale_detail_deliver']['volume6'] != ""): ?>
              <div id="x6" style="display:block;">    
                    <div class="unit">
                    <label>总净重6：</label>
                    <input type="text" name="net_weight_6"  id="net_weight_6" style="width:100px" value="<?php echo $this->_tpl_vars['sale_detail_deliver']['net6']; ?>
" class=""  />
                    </div>
                    <div class="unit">
                    <label>总毛重6：</label>
                    <input type="text" name="gt_6"  id="gt_6" style="width:100px" value="<?php echo $this->_tpl_vars['sale_detail_deliver']['gross6']; ?>
" class="" />
                    </div>
                    <div class="unit" >
                        <label>箱规6：</label>
                        <font style="float:left; line-height:24px; width:15px; margin-top:5px;">L:</font>
                        <input type="text" name="L6" id="L6" class="sIE_No" value="<?php echo $this->_tpl_vars['specifications6'][0]; ?>
" style="width:50px;" />
                         <font style="float:left; margin-right:10px; line-height:24px; width:15px;margin-top:5px;"> cm </font>
                        <font style="float:left; margin-right:10px; line-height:24px; width:10px; margin-top:5px;"> * </font>
                        <font style="float:left; margin-right:10px; line-height:24px; width:10px; margin-top:5px;">W:</font>
                        <input type="text" name="W6" id="W6" class="sIE_No" value="<?php echo $this->_tpl_vars['specifications6'][1]; ?>
"  style="width:50px;" />
                        <font style="float:left; margin-right:10px; line-height:24px; width:15px;margin-top:5px;"> cm </font>
                        <font style="float:left; margin-right:10px; line-height:24px; width:10px;margin-top:5px;"> * </font>
                        <font style="float:left; margin-right:10px; line-height:24px; width:10px; margin-top:5px;">H:</font>
                        <input type="text" name="H6" id="H6" class="sIE_No" value="<?php echo $this->_tpl_vars['specifications6'][2]; ?>
" style="width:50px;" />
                        <font style="float:left; margin-right:20px; line-height:24px; width:20px;margin-top:5px;"> cm </font>
                    </div>
                </div>
             <?php else: ?>
                <div id="x6" style="display:none;">    
                      <div class="unit">
                      <label>总净重6：</label>
                      <input type="text" name="net_weight_6"  id="net_weight_6" style="width:100px" value="" class=""  />
                      </div>
                      <div class="unit">
                      <label>总毛重6：</label>
                      <input type="text" name="gt_6"  id="gt_6" style="width:100px" value="" class="" />
                      </div>
                      <div class="unit" >
                          <label>箱规6：</label>
                          <font style="float:left; line-height:24px; width:15px; margin-top:5px;">L:</font>
                          <input type="text" name="L6" id="L6" class="sIE_No" value="" style="width:50px;" />
                           <font style="float:left; margin-right:10px; line-height:24px; width:15px;margin-top:5px;"> cm </font>
                          <font style="float:left; margin-right:10px; line-height:24px; width:10px; margin-top:5px;"> * </font>
                          <font style="float:left; margin-right:10px; line-height:24px; width:10px; margin-top:5px;">W:</font>
                          <input type="text" name="W6" id="W6" class="sIE_No" value=""  style="width:50px;" />
                          <font style="float:left; margin-right:10px; line-height:24px; width:15px;margin-top:5px;"> cm </font>
                          <font style="float:left; margin-right:10px; line-height:24px; width:10px;margin-top:5px;"> * </font>
                          <font style="float:left; margin-right:10px; line-height:24px; width:10px; margin-top:5px;">H:</font>
                          <input type="text" name="H6" id="H6" class="sIE_No" value="" style="width:50px;" />
                          <font style="float:left; margin-right:20px; line-height:24px; width:20px;margin-top:5px;"> cm </font>
                      </div>
                  </div>
             <?php endif; ?>
             <?php if ($this->_tpl_vars['sale_detail_deliver']['net7'] != "" || $this->_tpl_vars['sale_detail_deliver']['gross7'] != "" || $this->_tpl_vars['sale_detail_deliver']['specifications7'] != "" || $this->_tpl_vars['sale_detail_deliver']['volume7'] != ""): ?>
              <div id="x7" style="display:block;">    
                    <div class="unit">
                    <label>总净重7：</label>
                    <input type="text" name="net_weight_7"  id="net_weight_7" style="width:100px" value="<?php echo $this->_tpl_vars['sale_detail_deliver']['net7']; ?>
" class=""  />
                    </div>
                    <div class="unit">
                    <label>总毛重7：</label>
                    <input type="text" name="gt_7"  id="gt_7" style="width:100px" value="<?php echo $this->_tpl_vars['sale_detail_deliver']['gross7']; ?>
" class="" />
                    </div>
                    <div class="unit" >
                        <label>箱规7：</label>
                        <font style="float:left; line-height:24px; width:15px; margin-top:5px;">L:</font>
                        <input type="text" name="L7" id="L7" class="sIE_No" value="<?php echo $this->_tpl_vars['specifications7'][0]; ?>
" style="width:50px;" />
                         <font style="float:left; margin-right:10px; line-height:24px; width:15px;margin-top:5px;"> cm </font>
                        <font style="float:left; margin-right:10px; line-height:24px; width:10px; margin-top:5px;"> * </font>
                        <font style="float:left; margin-right:10px; line-height:24px; width:10px; margin-top:5px;">W:</font>
                        <input type="text" name="W7" id="W7" class="sIE_No" value="<?php echo $this->_tpl_vars['specifications7'][1]; ?>
"  style="width:50px;" />
                        <font style="float:left; margin-right:10px; line-height:24px; width:15px;margin-top:5px;"> cm </font>
                        <font style="float:left; margin-right:10px; line-height:24px; width:10px;margin-top:5px;"> * </font>
                        <font style="float:left; margin-right:10px; line-height:24px; width:10px; margin-top:5px;">H:</font>
                        <input type="text" name="H7" id="H7" class="sIE_No" value="<?php echo $this->_tpl_vars['specifications7'][2]; ?>
" style="width:50px;" />
                        <font style="float:left; margin-right:20px; line-height:24px; width:20px;margin-top:5px;"> cm </font>
                    </div>
                </div>
             <?php else: ?>
                <div id="x7" style="display:none;">    
                      <div class="unit">
                      <label>总净重7：</label>
                      <input type="text" name="net_weight_7"  id="net_weight_7" style="width:100px" value="" class=""  />
                      </div>
                      <div class="unit">
                      <label>总毛重7：</label>
                      <input type="text" name="gt_7"  id="gt_7" style="width:100px" value="" class="" />
                      </div>
                      <div class="unit" >
                          <label>箱规7：</label>
                          <font style="float:left; line-height:24px; width:15px; margin-top:5px;">L:</font>
                          <input type="text" name="L7" id="L7" class="sIE_No" value="" style="width:50px;" />
                           <font style="float:left; margin-right:10px; line-height:24px; width:15px;margin-top:5px;"> cm </font>
                          <font style="float:left; margin-right:10px; line-height:24px; width:10px; margin-top:5px;"> * </font>
                          <font style="float:left; margin-right:10px; line-height:24px; width:10px; margin-top:5px;">W:</font>
                          <input type="text" name="W7" id="W7" class="sIE_No" value=""  style="width:50px;" />
                          <font style="float:left; margin-right:10px; line-height:24px; width:15px;margin-top:5px;"> cm </font>
                          <font style="float:left; margin-right:10px; line-height:24px; width:10px;margin-top:5px;"> * </font>
                          <font style="float:left; margin-right:10px; line-height:24px; width:10px; margin-top:5px;">H:</font>
                          <input type="text" name="H7" id="H7" class="sIE_No" value="" style="width:50px;" />
                          <font style="float:left; margin-right:20px; line-height:24px; width:20px;margin-top:5px;"> cm </font>
                      </div>
                  </div>
             <?php endif; ?>
             <?php if ($this->_tpl_vars['sale_detail_deliver']['net8'] != "" || $this->_tpl_vars['sale_detail_deliver']['gross8'] != "" || $this->_tpl_vars['sale_detail_deliver']['specifications8'] != "" || $this->_tpl_vars['sale_detail_deliver']['volume8'] != ""): ?>
              <div id="x8" style="display:block;">    
                    <div class="unit">
                    <label>总净重8：</label>
                    <input type="text" name="net_weight_8"  id="net_weight_8" style="width:100px" value="<?php echo $this->_tpl_vars['sale_detail_deliver']['net8']; ?>
" class=""  />
                    </div>
                    <div class="unit">
                    <label>总毛重8：</label>
                    <input type="text" name="gt_8"  id="gt_8" style="width:100px" value="<?php echo $this->_tpl_vars['sale_detail_deliver']['gross8']; ?>
" class="" />
                    </div>
                    <div class="unit" >
                        <label>箱规8：</label>
                        <font style="float:left; line-height:24px; width:15px; margin-top:5px;">L:</font>
                        <input type="text" name="L8" id="L8" class="sIE_No" value="<?php echo $this->_tpl_vars['specifications8'][0]; ?>
" style="width:50px;" />
                         <font style="float:left; margin-right:10px; line-height:24px; width:15px;margin-top:5px;"> cm </font>
                        <font style="float:left; margin-right:10px; line-height:24px; width:10px; margin-top:5px;"> * </font>
                        <font style="float:left; margin-right:10px; line-height:24px; width:10px; margin-top:5px;">W:</font>
                        <input type="text" name="W8" id="W8" class="sIE_No" value="<?php echo $this->_tpl_vars['specifications8'][1]; ?>
"  style="width:50px;" />
                        <font style="float:left; margin-right:10px; line-height:24px; width:15px;margin-top:5px;"> cm </font>
                        <font style="float:left; margin-right:10px; line-height:24px; width:10px;margin-top:5px;"> * </font>
                        <font style="float:left; margin-right:10px; line-height:24px; width:10px; margin-top:5px;">H:</font>
                        <input type="text" name="H8" id="H8" class="sIE_No" value="<?php echo $this->_tpl_vars['specifications8'][2]; ?>
" style="width:50px;" />
                        <font style="float:left; margin-right:20px; line-height:24px; width:20px;margin-top:5px;"> cm </font>
                    </div>
                </div>
             <?php else: ?>
                <div id="x8" style="display:none;">    
                      <div class="unit">
                      <label>总净重8：</label>
                      <input type="text" name="net_weight_8"  id="net_weight_8" style="width:100px" value="" class=""  />
                      </div>
                      <div class="unit">
                      <label>总毛重8：</label>
                      <input type="text" name="gt_8"  id="gt_8" style="width:100px" value="" class="" />
                      </div>
                      <div class="unit" >
                          <label>箱规8：</label>
                          <font style="float:left; line-height:24px; width:15px; margin-top:5px;">L:</font>
                          <input type="text" name="L8" id="L8" class="sIE_No" value="" style="width:50px;" />
                           <font style="float:left; margin-right:10px; line-height:24px; width:15px;margin-top:5px;"> cm </font>
                          <font style="float:left; margin-right:10px; line-height:24px; width:10px; margin-top:5px;"> * </font>
                          <font style="float:left; margin-right:10px; line-height:24px; width:10px; margin-top:5px;">W:</font>
                          <input type="text" name="W8" id="W8" class="sIE_No" value=""  style="width:50px;" />
                          <font style="float:left; margin-right:10px; line-height:24px; width:15px;margin-top:5px;"> cm </font>
                          <font style="float:left; margin-right:10px; line-height:24px; width:10px;margin-top:5px;"> * </font>
                          <font style="float:left; margin-right:10px; line-height:24px; width:10px; margin-top:5px;">H:</font>
                          <input type="text" name="H8" id="H8" class="sIE_No" value="" style="width:50px;" />
                          <font style="float:left; margin-right:20px; line-height:24px; width:20px;margin-top:5px;"> cm </font>
                      </div>
                  </div>
             <?php endif; ?>
             <?php if ($this->_tpl_vars['sale_detail_deliver']['net9'] != "" || $this->_tpl_vars['sale_detail_deliver']['gross9'] != "" || $this->_tpl_vars['sale_detail_deliver']['specifications9'] != "" || $this->_tpl_vars['sale_detail_deliver']['volume9'] != ""): ?>
              <div id="x9" style="display:block;">    
                    <div class="unit">
                    <label>总净重9：</label>
                    <input type="text" name="net_weight_9"  id="net_weight_9" style="width:100px" value="<?php echo $this->_tpl_vars['sale_detail_deliver']['net9']; ?>
" class=""  />
                    </div>
                    <div class="unit">
                    <label>总毛重9：</label>
                    <input type="text" name="gt_9"  id="gt_9" style="width:100px" value="<?php echo $this->_tpl_vars['sale_detail_deliver']['gross9']; ?>
" class="" />
                    </div>
                    <div class="unit" >
                        <label>箱规9：</label>
                        <font style="float:left; line-height:24px; width:15px; margin-top:5px;">L:</font>
                        <input type="text" name="L9" id="L9" class="sIE_No" value="<?php echo $this->_tpl_vars['specifications9'][0]; ?>
" style="width:50px;" />
                         <font style="float:left; margin-right:10px; line-height:24px; width:15px;margin-top:5px;"> cm </font>
                        <font style="float:left; margin-right:10px; line-height:24px; width:10px; margin-top:5px;"> * </font>
                        <font style="float:left; margin-right:10px; line-height:24px; width:10px; margin-top:5px;">W:</font>
                        <input type="text" name="W9" id="W9" class="sIE_No" value="<?php echo $this->_tpl_vars['specifications9'][1]; ?>
"  style="width:50px;" />
                        <font style="float:left; margin-right:10px; line-height:24px; width:15px;margin-top:5px;"> cm </font>
                        <font style="float:left; margin-right:10px; line-height:24px; width:10px;margin-top:5px;"> * </font>
                        <font style="float:left; margin-right:10px; line-height:24px; width:10px; margin-top:5px;">H:</font>
                        <input type="text" name="H9" id="H9" class="sIE_No" value="<?php echo $this->_tpl_vars['specifications9'][2]; ?>
" style="width:50px;" />
                        <font style="float:left; margin-right:20px; line-height:24px; width:20px;margin-top:5px;"> cm </font>
                    </div>
                </div>
             <?php else: ?>
                <div id="x9" style="display:none;">    
                      <div class="unit">
                      <label>总净重9：</label>
                      <input type="text" name="net_weight_9"  id="net_weight_9" style="width:100px" value="" class=""  />
                      </div>
                      <div class="unit">
                      <label>总毛重9：</label>
                      <input type="text" name="gt_9"  id="gt_9" style="width:100px" value="" class="" />
                      </div>
                      <div class="unit" >
                          <label>箱规9：</label>
                          <font style="float:left; line-height:24px; width:15px; margin-top:5px;">L:</font>
                          <input type="text" name="L9" id="L9" class="sIE_No" value="" style="width:50px;" />
                           <font style="float:left; margin-right:10px; line-height:24px; width:15px;margin-top:5px;"> cm </font>
                          <font style="float:left; margin-right:10px; line-height:24px; width:10px; margin-top:5px;"> * </font>
                          <font style="float:left; margin-right:10px; line-height:24px; width:10px; margin-top:5px;">W:</font>
                          <input type="text" name="W9" id="W9" class="sIE_No" value=""  style="width:50px;" />
                          <font style="float:left; margin-right:10px; line-height:24px; width:15px;margin-top:5px;"> cm </font>
                          <font style="float:left; margin-right:10px; line-height:24px; width:10px;margin-top:5px;"> * </font>
                          <font style="float:left; margin-right:10px; line-height:24px; width:10px; margin-top:5px;">H:</font>
                          <input type="text" name="H9" id="H9" class="sIE_No" value="" style="width:50px;" />
                          <font style="float:left; margin-right:20px; line-height:24px; width:20px;margin-top:5px;"> cm </font>
                      </div>
                  </div>
             <?php endif; ?>
             <?php if ($this->_tpl_vars['sale_detail_deliver']['net10'] != "" || $this->_tpl_vars['sale_detail_deliver']['gross10'] != "" || $this->_tpl_vars['sale_detail_deliver']['specifications10'] != "" || $this->_tpl_vars['sale_detail_deliver']['volume10'] != ""): ?>
              <div id="x10" style="display:block;">    
                    <div class="unit">
                    <label>总净重10：</label>
                    <input type="text" name="net_weight_10"  id="net_weight_10" style="width:100px" value="<?php echo $this->_tpl_vars['sale_detail_deliver']['net10']; ?>
" class=""  />
                    </div>
                    <div class="unit">
                    <label>总毛重10：</label>
                    <input type="text" name="gt_10"  id="gt_10" style="width:100px" value="<?php echo $this->_tpl_vars['sale_detail_deliver']['gross10']; ?>
" class="" />
                    </div>
                    <div class="unit" >
                        <label>箱规10：</label>
                        <font style="float:left; line-height:24px; width:15px; margin-top:5px;">L:</font>
                        <input type="text" name="L10" id="L10" class="sIE_No" value="<?php echo $this->_tpl_vars['specifications10'][0]; ?>
" style="width:50px;" />
                         <font style="float:left; margin-right:10px; line-height:24px; width:15px;margin-top:5px;"> cm </font>
                        <font style="float:left; margin-right:10px; line-height:24px; width:10px; margin-top:5px;"> * </font>
                        <font style="float:left; margin-right:10px; line-height:24px; width:10px; margin-top:5px;">W:</font>
                        <input type="text" name="W10" id="W10" class="sIE_No" value="<?php echo $this->_tpl_vars['specifications10'][1]; ?>
"  style="width:50px;" />
                        <font style="float:left; margin-right:10px; line-height:24px; width:15px;margin-top:5px;"> cm </font>
                        <font style="float:left; margin-right:10px; line-height:24px; width:10px;margin-top:5px;"> * </font>
                        <font style="float:left; margin-right:10px; line-height:24px; width:10px; margin-top:5px;">H:</font>
                        <input type="text" name="H10" id="H10" class="sIE_No" value="<?php echo $this->_tpl_vars['specifications10'][2]; ?>
" style="width:50px;" />
                        <font style="float:left; margin-right:20px; line-height:24px; width:20px;margin-top:5px;"> cm </font>
                    </div>
                </div>
                
             <?php endif; ?>
             <?php if ($this->_tpl_vars['sale_detail_deliver']['net11'] != "" || $this->_tpl_vars['sale_detail_deliver']['gross11'] != "" || $this->_tpl_vars['sale_detail_deliver']['specifications11'] != "" || $this->_tpl_vars['sale_detail_deliver']['volume11'] != ""): ?>  
            <div id="x11" style="display:block;">    
            <div class="unit">
            <label>总净重11：</label>
            <input type="text" name="net_weight_11"  id="net_weight_11" style="width:100px" value="<?php echo $this->_tpl_vars['sale_detail_deliver']['net11']; ?>
" class="required"  />
            </div>
            <div class="unit">
            <label>总毛重11：</label>
            <input type="text" name="gt_11"  id="gt_11" style="width:100px" value="<?php echo $this->_tpl_vars['sale_detail_deliver']['gross11']; ?>
" class="required" />
            </div>
            <div class="unit" >
                <label>箱规11：</label>
                <font style="float:left; line-height:24px; width:15px; margin-top:5px;">L:</font>
                <input type="text" name="L11" id="L11" class="sIE_No" value="<?php echo $this->_tpl_vars['specifications11'][0]; ?>
" style="width:50px;" />
                 <font style="float:left; margin-right:10px; line-height:24px; width:15px;margin-top:5px;"> cm </font>
                <font style="float:left; margin-right:10px; line-height:24px; width:10px; margin-top:5px;"> * </font>
                <font style="float:left; margin-right:10px; line-height:24px; width:10px; margin-top:5px;">W:</font>
                <input type="text" name="W11" id="W11" class="sIE_No" value="<?php echo $this->_tpl_vars['specifications11'][1]; ?>
"  style="width:50px;" />
                <font style="float:left; margin-right:10px; line-height:24px; width:15px;margin-top:5px;"> cm </font>
                <font style="float:left; margin-right:10px; line-height:24px; width:10px;margin-top:5px;"> * </font>
                <font style="float:left; margin-right:10px; line-height:24px; width:10px; margin-top:5px;">H:</font>
                <input type="text" name="H11" id="H11" class="sIE_No" value="<?php echo $this->_tpl_vars['specifications11'][2]; ?>
" style="width:50px;" />
                <font style="float:left; margin-right:20px; line-height:24px; width:20px;margin-top:5px;"> cm </font>
            </div>
        </div>
      </div>
      <?php endif; ?>
             <?php if ($this->_tpl_vars['sale_detail_deliver']['net12'] != "" || $this->_tpl_vars['sale_detail_deliver']['gross12'] != "" || $this->_tpl_vars['sale_detail_deliver']['specifications12'] != "" || $this->_tpl_vars['sale_detail_deliver']['volume12'] != ""): ?>
      <div id="x12" style="display:block;">    
            <div class="unit">
            <label>总净重12：</label>
            <input type="text" name="net_weight_12"  id="net_weight_12" style="width:100px" value="<?php echo $this->_tpl_vars['sale_detail_deliver']['net12']; ?>
" class="required"  />
            </div>
            <div class="unit">
            <label>总毛重12：</label>
            <input type="text" name="gt_12"  id="gt_12" style="width:100px" value="<?php echo $this->_tpl_vars['sale_detail_deliver']['gross12']; ?>
" class="required" />
            </div>
            <div class="unit" >
                <label>箱规12：</label>
                <font style="float:left; line-height:24px; width:15px; margin-top:5px;">L:</font>
                <input type="text" name="L12" id="L12" class="sIE_No" value="<?php echo $this->_tpl_vars['specifications12'][0]; ?>
" style="width:50px;" />
                 <font style="float:left; margin-right:10px; line-height:24px; width:15px;margin-top:5px;"> cm </font>
                <font style="float:left; margin-right:10px; line-height:24px; width:10px; margin-top:5px;"> * </font>
                <font style="float:left; margin-right:10px; line-height:24px; width:10px; margin-top:5px;">W:</font>
                <input type="text" name="W12" id="W12" class="sIE_No" value="<?php echo $this->_tpl_vars['specifications12'][1]; ?>
"  style="width:50px;" />
                <font style="float:left; margin-right:10px; line-height:24px; width:15px;margin-top:5px;"> cm </font>
                <font style="float:left; margin-right:10px; line-height:24px; width:10px;margin-top:5px;"> * </font>
                <font style="float:left; margin-right:10px; line-height:24px; width:10px; margin-top:5px;">H:</font>
                <input type="text" name="H12" id="H12" class="sIE_No" value="<?php echo $this->_tpl_vars['specifications12'][2]; ?>
" style="width:50px;" />
                <font style="float:left; margin-right:20px; line-height:24px; width:20px;margin-top:5px;"> cm </font>
            </div>
        </div>
      </div>
      <?php endif; ?>
             <?php if ($this->_tpl_vars['sale_detail_deliver']['net13'] != "" || $this->_tpl_vars['sale_detail_deliver']['gross13'] != "" || $this->_tpl_vars['sale_detail_deliver']['specifications13'] != "" || $this->_tpl_vars['sale_detail_deliver']['volume13'] != ""): ?>
      <div id="x13" style="display:block;">    
            <div class="unit">
            <label>总净重13：</label>
            <input type="text" name="net_weight_13"  id="net_weight_13" style="width:100px" value="<?php echo $this->_tpl_vars['sale_detail_deliver']['net13']; ?>
" class="required"  />
            </div>
            <div class="unit">
            <label>总毛重13：</label>
            <input type="text" name="gt_13"  id="gt_13" style="width:100px" value="<?php echo $this->_tpl_vars['sale_detail_deliver']['gross13']; ?>
" class="required" />
            </div>
            <div class="unit" >
                <label>箱规13：</label>
                <font style="float:left; line-height:24px; width:15px; margin-top:5px;">L:</font>
                <input type="text" name="L13" id="L13" class="sIE_No" value="<?php echo $this->_tpl_vars['specifications13'][0]; ?>
" style="width:50px;" />
                 <font style="float:left; margin-right:10px; line-height:24px; width:15px;margin-top:5px;"> cm </font>
                <font style="float:left; margin-right:10px; line-height:24px; width:10px; margin-top:5px;"> * </font>
                <font style="float:left; margin-right:10px; line-height:24px; width:10px; margin-top:5px;">W:</font>
                <input type="text" name="W13" id="W13" class="sIE_No" value="<?php echo $this->_tpl_vars['specifications13'][1]; ?>
"  style="width:50px;" />
                <font style="float:left; margin-right:10px; line-height:24px; width:15px;margin-top:5px;"> cm </font>
                <font style="float:left; margin-right:10px; line-height:24px; width:10px;margin-top:5px;"> * </font>
                <font style="float:left; margin-right:10px; line-height:24px; width:10px; margin-top:5px;">H:</font>
                <input type="text" name="H13" id="H13" class="sIE_No" value="<?php echo $this->_tpl_vars['specifications13'][2]; ?>
" style="width:50px;" />
                <font style="float:left; margin-right:20px; line-height:24px; width:20px;margin-top:5px;"> cm </font>
            </div>
        </div>
      </div>
      <?php endif; ?>
             <?php if ($this->_tpl_vars['sale_detail_deliver']['net14'] != "" || $this->_tpl_vars['sale_detail_deliver']['gross14'] != "" || $this->_tpl_vars['sale_detail_deliver']['specifications14'] != "" || $this->_tpl_vars['sale_detail_deliver']['volume14'] != ""): ?>
      <div id="x14" style="display:block;">    
            <div class="unit">
            <label>总净重14：</label>
            <input type="text" name="net_weight_14"  id="net_weight_14" style="width:100px" value="<?php echo $this->_tpl_vars['sale_detail_deliver']['net14']; ?>
" class="required"  />
            </div>
            <div class="unit">
            <label>总毛重14：</label>
            <input type="text" name="gt_14"  id="gt_14" style="width:100px" value="<?php echo $this->_tpl_vars['sale_detail_deliver']['gross14']; ?>
" class="required" />
            </div>
            <div class="unit" >
                <label>箱规14：</label>
                <font style="float:left; line-height:24px; width:15px; margin-top:5px;">L:</font>
                <input type="text" name="L14" id="L14" class="sIE_No" value="<?php echo $this->_tpl_vars['specifications14'][0]; ?>
" style="width:50px;" />
                 <font style="float:left; margin-right:10px; line-height:24px; width:15px;margin-top:5px;"> cm </font>
                <font style="float:left; margin-right:10px; line-height:24px; width:10px; margin-top:5px;"> * </font>
                <font style="float:left; margin-right:10px; line-height:24px; width:10px; margin-top:5px;">W:</font>
                <input type="text" name="W14" id="W14" class="sIE_No" value="<?php echo $this->_tpl_vars['specifications14'][1]; ?>
"  style="width:50px;" />
                <font style="float:left; margin-right:10px; line-height:24px; width:15px;margin-top:5px;"> cm </font>
                <font style="float:left; margin-right:10px; line-height:24px; width:10px;margin-top:5px;"> * </font>
                <font style="float:left; margin-right:10px; line-height:24px; width:10px; margin-top:5px;">H:</font>
                <input type="text" name="H14" id="H14" class="sIE_No" value="<?php echo $this->_tpl_vars['specifications14'][2]; ?>
" style="width:50px;" />
                <font style="float:left; margin-right:20px; line-height:24px; width:20px;margin-top:5px;"> cm </font>
            </div>
        </div>
      </div>
      <?php endif; ?>
             <?php if ($this->_tpl_vars['sale_detail_deliver']['net15'] != "" || $this->_tpl_vars['sale_detail_deliver']['gross15'] != "" || $this->_tpl_vars['sale_detail_deliver']['specifications15'] != "" || $this->_tpl_vars['sale_detail_deliver']['volume15'] != ""): ?>
      <div id="x15" style="display:block;">    
            <div class="unit">
            <label>总净重15：</label>
            <input type="text" name="net_weight_15"  id="net_weight_15" style="width:100px" value="<?php echo $this->_tpl_vars['sale_detail_deliver']['net15']; ?>
" class="required"  />
            </div>
            <div class="unit">
            <label>总毛重15：</label>
            <input type="text" name="gt_15"  id="gt_15" style="width:100px" value="<?php echo $this->_tpl_vars['sale_detail_deliver']['gross15']; ?>
" class="required" />
            </div>
            <div class="unit" >
                <label>箱规15：</label>
                <font style="float:left; line-height:24px; width:15px; margin-top:5px;">L:</font>
                <input type="text" name="L15" id="L15" class="sIE_No" value="<?php echo $this->_tpl_vars['specifications15'][0]; ?>
" style="width:50px;" />
                 <font style="float:left; margin-right:10px; line-height:24px; width:15px;margin-top:5px;"> cm </font>
                <font style="float:left; margin-right:10px; line-height:24px; width:10px; margin-top:5px;"> * </font>
                <font style="float:left; margin-right:10px; line-height:24px; width:10px; margin-top:5px;">W:</font>
                <input type="text" name="W15" id="W15" class="sIE_No" value="<?php echo $this->_tpl_vars['specifications15'][1]; ?>
"  style="width:50px;" />
                <font style="float:left; margin-right:10px; line-height:24px; width:15px;margin-top:5px;"> cm </font>
                <font style="float:left; margin-right:10px; line-height:24px; width:10px;margin-top:5px;"> * </font>
                <font style="float:left; margin-right:10px; line-height:24px; width:10px; margin-top:5px;">H:</font>
                <input type="text" name="H15" id="H15" class="sIE_No" value="<?php echo $this->_tpl_vars['specifications15'][2]; ?>
" style="width:50px;" />
                <font style="float:left; margin-right:20px; line-height:24px; width:20px;margin-top:5px;"> cm </font>
            </div>
        </div>
      </div>
      <?php endif; ?>
             <?php if ($this->_tpl_vars['sale_detail_deliver']['net16'] != "" || $this->_tpl_vars['sale_detail_deliver']['gross16'] != "" || $this->_tpl_vars['sale_detail_deliver']['specifications16'] != "" || $this->_tpl_vars['sale_detail_deliver']['volume16'] != ""): ?>
      <div id="x16" style="display:block;">    
            <div class="unit">
            <label>总净重16：</label>
            <input type="text" name="net_weight_16"  id="net_weight_16" style="width:100px" value="<?php echo $this->_tpl_vars['sale_detail_deliver']['net16']; ?>
" class="required"  />
            </div>
            <div class="unit">
            <label>总毛重16：</label>
            <input type="text" name="gt_16"  id="gt_16" style="width:100px" value="<?php echo $this->_tpl_vars['sale_detail_deliver']['gross16']; ?>
" class="required" />
            </div>
            <div class="unit" >
                <label>箱规16：</label>
                <font style="float:left; line-height:24px; width:15px; margin-top:5px;">L:</font>
                <input type="text" name="L16" id="L16" class="sIE_No" value="<?php echo $this->_tpl_vars['specifications16'][0]; ?>
" style="width:50px;" />
                 <font style="float:left; margin-right:10px; line-height:24px; width:15px;margin-top:5px;"> cm </font>
                <font style="float:left; margin-right:10px; line-height:24px; width:10px; margin-top:5px;"> * </font>
                <font style="float:left; margin-right:10px; line-height:24px; width:10px; margin-top:5px;">W:</font>
                <input type="text" name="W16" id="W16" class="sIE_No" value="<?php echo $this->_tpl_vars['specifications16'][1]; ?>
"  style="width:50px;" />
                <font style="float:left; margin-right:10px; line-height:24px; width:15px;margin-top:5px;"> cm </font>
                <font style="float:left; margin-right:10px; line-height:24px; width:10px;margin-top:5px;"> * </font>
                <font style="float:left; margin-right:10px; line-height:24px; width:10px; margin-top:5px;">H:</font>
                <input type="text" name="H16" id="H16" class="sIE_No" value="<?php echo $this->_tpl_vars['specifications16'][2]; ?>
" style="width:50px;" />
                <font style="float:left; margin-right:20px; line-height:24px; width:20px;margin-top:5px;"> cm </font>
            </div>
        </div>
      </div>
      <?php endif; ?>
             <?php if ($this->_tpl_vars['sale_detail_deliver']['net17'] != "" || $this->_tpl_vars['sale_detail_deliver']['gross17'] != "" || $this->_tpl_vars['sale_detail_deliver']['specifications17'] != "" || $this->_tpl_vars['sale_detail_deliver']['volume17'] != ""): ?>
      <div id="x17" style="display:block;">    
            <div class="unit">
            <label>总净重17：</label>
            <input type="text" name="net_weight_17"  id="net_weight_17" style="width:100px" value="<?php echo $this->_tpl_vars['sale_detail_deliver']['net17']; ?>
" class="required"  />
            </div>
            <div class="unit">
            <label>总毛重17：</label>
            <input type="text" name="gt_17"  id="gt_17" style="width:100px" value="<?php echo $this->_tpl_vars['sale_detail_deliver']['gross17']; ?>
" class="required" />
            </div>
            <div class="unit" >
                <label>箱规17：</label>
                <font style="float:left; line-height:24px; width:15px; margin-top:5px;">L:</font>
                <input type="text" name="L17" id="L17" class="sIE_No" value="<?php echo $this->_tpl_vars['specifications17'][0]; ?>
" style="width:50px;" />
                 <font style="float:left; margin-right:10px; line-height:24px; width:15px;margin-top:5px;"> cm </font>
                <font style="float:left; margin-right:10px; line-height:24px; width:10px; margin-top:5px;"> * </font>
                <font style="float:left; margin-right:10px; line-height:24px; width:10px; margin-top:5px;">W:</font>
                <input type="text" name="W17" id="W17" class="sIE_No" value="<?php echo $this->_tpl_vars['specifications17'][1]; ?>
"  style="width:50px;" />
                <font style="float:left; margin-right:10px; line-height:24px; width:15px;margin-top:5px;"> cm </font>
                <font style="float:left; margin-right:10px; line-height:24px; width:10px;margin-top:5px;"> * </font>
                <font style="float:left; margin-right:10px; line-height:24px; width:10px; margin-top:5px;">H:</font>
                <input type="text" name="H17" id="H17" class="sIE_No" value="<?php echo $this->_tpl_vars['specifications17'][2]; ?>
" style="width:50px;" />
                <font style="float:left; margin-right:20px; line-height:24px; width:20px;margin-top:5px;"> cm </font>
            </div>
        </div>
      </div>
      <?php endif; ?>
             <?php if ($this->_tpl_vars['sale_detail_deliver']['net18'] != "" || $this->_tpl_vars['sale_detail_deliver']['gross18'] != "" || $this->_tpl_vars['sale_detail_deliver']['specifications18'] != "" || $this->_tpl_vars['sale_detail_deliver']['volume18'] != ""): ?>
      <div id="x18" style="display:block;">    
            <div class="unit">
            <label>总净重18：</label>
            <input type="text" name="net_weight_18"  id="net_weight_18" style="width:100px" value="<?php echo $this->_tpl_vars['sale_detail_deliver']['net18']; ?>
" class="required"  />
            </div>
            <div class="unit">
            <label>总毛重18：</label>
            <input type="text" name="gt_18"  id="gt_18" style="width:100px" value="<?php echo $this->_tpl_vars['sale_detail_deliver']['gross18']; ?>
" class="required" />
            </div>
            <div class="unit" >
                <label>箱规18：</label>
                <font style="float:left; line-height:24px; width:15px; margin-top:5px;">L:</font>
                <input type="text" name="L18" id="L18" class="sIE_No" value="<?php echo $this->_tpl_vars['specifications18'][0]; ?>
" style="width:50px;" />
                 <font style="float:left; margin-right:10px; line-height:24px; width:15px;margin-top:5px;"> cm </font>
                <font style="float:left; margin-right:10px; line-height:24px; width:10px; margin-top:5px;"> * </font>
                <font style="float:left; margin-right:10px; line-height:24px; width:10px; margin-top:5px;">W:</font>
                <input type="text" name="W18" id="W18" class="sIE_No" value="<?php echo $this->_tpl_vars['specifications18'][1]; ?>
"  style="width:50px;" />
                <font style="float:left; margin-right:10px; line-height:24px; width:15px;margin-top:5px;"> cm </font>
                <font style="float:left; margin-right:10px; line-height:24px; width:10px;margin-top:5px;"> * </font>
                <font style="float:left; margin-right:10px; line-height:24px; width:10px; margin-top:5px;">H:</font>
                <input type="text" name="H18" id="H18" class="sIE_No" value="<?php echo $this->_tpl_vars['specifications18'][2]; ?>
" style="width:50px;" />
                <font style="float:left; margin-right:20px; line-height:24px; width:20px;margin-top:5px;"> cm </font>
            </div>
        </div>  
         
             <?php endif; ?>
       </div>
         
     </form>
    <div class="formBar">
      <ul>
        <li>
          <div class="buttonActive">
            <div class="buttonContent">
              <button type="button" id="freight_changes">确认添加</button>
            </div>
          </div>
        </li>
        <li> </li>
      </ul>
    </div>
 
</div>

<script type="text/javascript" language="javascript">
 
function number_oclick()
{
   var number=$("#number").val();
   
   for(var i=1;i<=18;i++){
	   if(number >= i){
		   $('#x'+i).css("display","block");
	   }
	   else{
		  $('#x'+i).css("display","none"); 
	   }
   }
   
}
$("#freight_changes").click(function (){
	var number=$("#number").val();
	

	
	var net_weight_1=$("#net_weight_1").val();
	var gt_1=$("#gt_1").val();
	var L1=$("#L1").val();
	var W1=$("#W1").val();
	var H1=$("#H1").val();
	
	var net_weight_2=$("#net_weight_2").val();
	var gt_2=$("#gt_2").val();
	var L2=$("#L2").val();
	var W2=$("#W2").val();
	var H2=$("#H2").val();
	
	var net_weight_3=$("#net_weight_3").val();
	var gt_3=$("#gt_3").val();
	var L3=$("#L3").val();
	var W3=$("#W3").val();
	var H3=$("#H3").val();
	
	var net_weight_4=$("#net_weight_4").val();
	var gt_4=$("#gt_4").val();
	var L4=$("#L4").val();
	var W4=$("#W4").val();
	var H4=$("#H4").val();
	
	var net_weight_5=$("#net_weight_5").val();
	var gt_5=$("#gt_5").val();
	var L5=$("#L5").val();
	var W5=$("#W5").val();
	var H5=$("#H5").val();
	 
	var net_weight_6=$("#net_weight_6").val();
	var gt_6=$("#gt_6").val();
	var L6=$("#L6").val();
	var W6=$("#W6").val();
	var H6=$("#H6").val();
	
	var net_weight_7=$("#net_weight_7").val();
	var gt_7=$("#gt_7").val();
	var L7=$("#L7").val();
	var W7=$("#W7").val();
	var H7=$("#H7").val();
	
	var net_weight_8=$("#net_weight_8").val();
	var gt_8=$("#gt_8").val();
	var L8=$("#L8").val();
	var W8=$("#W8").val();
	var H8=$("#H8").val();
	
	var net_weight_9=$("#net_weight_9").val();
	var gt_9=$("#gt_9").val();
	var L9=$("#L9").val();
	var W9=$("#W9").val();
	var H9=$("#H9").val();
	
	var net_weight_10=$("#net_weight_10").val();
	var gt_10=$("#gt_10").val();
	var L10=$("#L10").val();
	var W10=$("#W10").val();
	var H10=$("#H10").val(); 
	
	var net_weight_11=$("#net_weight_11").val();
	var gt_11=$("#gt_11").val();
	var L11=$("#L11").val();
	var W11=$("#W11").val();
	var H11=$("#H11").val();
	
	var net_weight_12=$("#net_weight_12").val();
	var gt_12=$("#gt_12").val();
	var L12=$("#L12").val();
	var W12=$("#W12").val();
	var H12=$("#H12").val();
	
	var net_weight_13=$("#net_weight_13").val();
	var gt_13=$("#gt_13").val();
	var L13=$("#L13").val();
	var W13=$("#W13").val();
	var H13=$("#H13").val();
	
	var net_weight_14=$("#net_weight_14").val();
	var gt_14=$("#gt_14").val();
	var L14=$("#L14").val();
	var W14=$("#W14").val();
	var H14=$("#H14").val();
	
	var net_weight_15=$("#net_weight_15").val();
	var gt_15=$("#gt_15").val();
	var L15=$("#L15").val();
	var W15=$("#W15").val();
	var H15=$("#H15").val();
	
	var net_weight_16=$("#net_weight_16").val();
	var gt_16=$("#gt_16").val();
	var L16=$("#L16").val();
	var W16=$("#W16").val();
	var H16=$("#H16").val();
	
	var net_weight_17=$("#net_weight_17").val();
	var gt_17=$("#gt_17").val();
	var L17=$("#L17").val();
	var W17=$("#W17").val();
	var H17=$("#H17").val();
	
	var net_weight_18=$("#net_weight_18").val();
	var gt_18=$("#gt_18").val();
	var L18=$("#L18").val();
	var W18=$("#W18").val();
	var H18=$("#H18").val();
	
	
	if(number==1){
		
	 
	     if ((isNaN(net_weight_1) || net_weight_1<=0 ) && net_weight_1!='') {
　　　     　 alert("净重为大于0的数字");
　　      　}else if((isNaN(gt_1) || gt_1<=0) && gt_1!=''){
	       　alert("毛重为大于0的数字");
	     }else if((isNaN(L1) || L1<=0)&& L1!=''){
	       　alert("箱规数据为大于0的数字");
	     }else if((isNaN(W1) || W1<=0)&& W1!=''){
	       　alert("箱规数据为大于0的数字");
	     }else if((isNaN(H1) || H1<=0) && H1!=''){
	       　alert("箱规数据为大于0的数字");
	     }else{
		     $("#submit_freight_changes").submit();
	     }
	}else if(number==2){
	    if ((isNaN(net_weight_1) || net_weight_1<=0 ) && net_weight_1!='') {
　　　     　 alert("净重为大于0的数字");
　　   　}else if((isNaN(gt_1) || gt_1<=0) && gt_1!=''){
	       　alert("毛重为大于0的数字");
	    }else if((isNaN(L1) || L1<=0)&& L1!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(W1) || W1<=0)&& W1!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(H1) || H1<=0) && H1!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if ((isNaN(net_weight_2) || net_weight_2<=0) && net_weight_2!='') {
　　　     　 alert("净重为大于0的数字");
　　   　}else if((isNaN(gt_2) || gt_2<=0) && gt_2!=''){
	       　alert("毛重为大于0的数字");
	    }else if((isNaN(L2) || L2<=0) && L2!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(W2) || W2<=0) && W2!='' ){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(H2) || H2<=0) && H2!=''){
	       　alert("箱规数据为大于0的数字");
	    }else{
		    $("#submit_freight_changes").submit();
	    }
	}else if(number==3){
	    if ((isNaN(net_weight_1) || net_weight_1<=0 ) && net_weight_1!='') {
　　　     　 alert("净重为大于0的数字");
　　   　}else if((isNaN(gt_1) || gt_1<=0) && gt_1!=''){
	       　alert("毛重为大于0的数字");
	    }else if((isNaN(L1) || L1<=0)&& L1!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(W1) || W1<=0)&& W1!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(H1) || H1<=0) && H1!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if ((isNaN(net_weight_2) || net_weight_2<=0) && net_weight_2!='') {
　　　     　 alert("净重为大于0的数字");
　　   　}else if((isNaN(gt_2) || gt_2<=0) && gt_2!=''){
	       　alert("毛重为大于0的数字");
	    }else if((isNaN(L2) || L2<=0) && L2!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(W2) || W2<=0) && W2!='' ){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(H2) || H2<=0) && H2!=''){
	       　alert("箱规数据为大于0的数字");
		}else if ((isNaN(net_weight_3) || net_weight_3<=0 ) && net_weight_3!='') {
　　　     　 alert("净重为大于0的数字");
　　   　}else if((isNaN(gt_3) || gt_3<=0) && gt_3!=''){
	       　alert("毛重为大于0的数字");
	    }else if((isNaN(L3) || L3<=0)&& L3!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(W3) || W3<=0)&& W3!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(H3) || H3<=0) && H3!=''){
	       　alert("箱规数据为大于0的数字")
		}else{
		    $("#submit_freight_changes").submit();
	    }
	}else if(number==4){
	    if ((isNaN(net_weight_1) || net_weight_1<=0 ) && net_weight_1!='') {
　　　     　 alert("净重为大于0的数字");
　　   　}else if((isNaN(gt_1) || gt_1<=0) && gt_1!=''){
	       　alert("毛重为大于0的数字");
	    }else if((isNaN(L1) || L1<=0)&& L1!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(W1) || W1<=0)&& W1!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(H1) || H1<=0) && H1!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if ((isNaN(net_weight_2) || net_weight_2<=0) && net_weight_2!='') {
　　　     　 alert("净重为大于0的数字");
　　   　}else if((isNaN(gt_2) || gt_2<=0) && gt_2!=''){
	       　alert("毛重为大于0的数字");
	    }else if((isNaN(L2) || L2<=0) && L2!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(W2) || W2<=0) && W2!='' ){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(H2) || H2<=0) && H2!=''){
	       　alert("箱规数据为大于0的数字");
		}else if ((isNaN(net_weight_3) || net_weight_3<=0 ) && net_weight_3!='') {
　　　     　 alert("净重为大于0的数字");
　　   　}else if((isNaN(gt_3) || gt_3<=0) && gt_3!=''){
	       　alert("毛重为大于0的数字");
	    }else if((isNaN(L3) || L3<=0)&& L3!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(W3) || W3<=0)&& W3!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(H3) || H3<=0) && H3!=''){
	       　alert("箱规数据为大于0的数字")
	    }else if ((isNaN(net_weight_4) || net_weight_4<=0 ) && net_weight_4!='') {
　　　     　 alert("净重为大于0的数字");
　　   　}else if((isNaN(gt_4) || gt_4<=0) && gt_4!=''){
	       　alert("毛重为大于0的数字");
	    }else if((isNaN(L4) || L4<=0)&& L4!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(W4) || W4<=0)&& W4!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(H4) || H4<=0) && H4!=''){
	       　alert("箱规数据为大于0的数字");
		}else{
		     $("#submit_freight_changes").submit();
	    }
	}else if(number==5){
	  if ((isNaN(net_weight_1) || net_weight_1<=0 ) && net_weight_1!='') {
　　　     　 alert("净重为大于0的数字");
　　   　}else if((isNaN(gt_1) || gt_1<=0) && gt_1!=''){
	       　alert("毛重为大于0的数字");
	    }else if((isNaN(L1) || L1<=0)&& L1!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(W1) || W1<=0)&& W1!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(H1) || H1<=0) && H1!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if ((isNaN(net_weight_2) || net_weight_2<=0) && net_weight_2!='') {
　　　     　 alert("净重为大于0的数字");
　　   　}else if((isNaN(gt_2) || gt_2<=0) && gt_2!=''){
	       　alert("毛重为大于0的数字");
	    }else if((isNaN(L2) || L2<=0) && L2!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(W2) || W2<=0) && W2!='' ){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(H2) || H2<=0) && H2!=''){
	       　alert("箱规数据为大于0的数字");
		}else if ((isNaN(net_weight_3) || net_weight_3<=0 ) && net_weight_3!='') {
　　　     　 alert("净重为大于0的数字");
　　   　}else if((isNaN(gt_3) || gt_3<=0) && gt_3!=''){
	       　alert("毛重为大于0的数字");
	    }else if((isNaN(L3) || L3<=0)&& L3!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(W3) || W3<=0)&& W3!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(H3) || H3<=0) && H3!=''){
	       　alert("箱规数据为大于0的数字")
	    }else if ((isNaN(net_weight_4) || net_weight_4<=0 ) && net_weight_4!='') {
　　　     　 alert("净重为大于0的数字");
　　   　}else if((isNaN(gt_4) || gt_4<=0) && gt_4!=''){
	       　alert("毛重为大于0的数字");
	    }else if((isNaN(L4) || L4<=0)&& L4!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(W4) || W4<=0)&& W4!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(H4) || H4<=0) && H4!=''){
	       　alert("箱规数据为大于0的数字");
		}else if ((isNaN(net_weight_5) || net_weight_5<=0 ) && net_weight_5!='') {
　　　     　 alert("净重为大于0的数字");
　　   　}else if((isNaN(gt_5) || gt_5<=0) && gt_5!=''){
	       　alert("毛重为大于0的数字");
	    }else if((isNaN(L5) || L5<=0)&& L5!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(W5) || W5<=0)&& W5!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(H5) || H5<=0) && H5!=''){
	       　alert("箱规数据为大于0的数字");
	    }else{
		$("#submit_freight_changes").submit();
	    }
	}else if(number==6){
	  if ((isNaN(net_weight_1) || net_weight_1<=0 ) && net_weight_1!='') {
　　　     　 alert("净重为大于0的数字");
　　   　}else if((isNaN(gt_1) || gt_1<=0) && gt_1!=''){
	       　alert("毛重为大于0的数字");
	    }else if((isNaN(L1) || L1<=0)&& L1!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(W1) || W1<=0)&& W1!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(H1) || H1<=0) && H1!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if ((isNaN(net_weight_2) || net_weight_2<=0) && net_weight_2!='') {
　　　     　 alert("净重为大于0的数字");
　　   　}else if((isNaN(gt_2) || gt_2<=0) && gt_2!=''){
	       　alert("毛重为大于0的数字");
	    }else if((isNaN(L2) || L2<=0) && L2!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(W2) || W2<=0) && W2!='' ){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(H2) || H2<=0) && H2!=''){
	       　alert("箱规数据为大于0的数字");
		}else if ((isNaN(net_weight_3) || net_weight_3<=0 ) && net_weight_3!='') {
　　　     　 alert("净重为大于0的数字");
　　   　}else if((isNaN(gt_3) || gt_3<=0) && gt_3!=''){
	       　alert("毛重为大于0的数字");
	    }else if((isNaN(L3) || L3<=0)&& L3!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(W3) || W3<=0)&& W3!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(H3) || H3<=0) && H3!=''){
	       　alert("箱规数据为大于0的数字")
	    }else if ((isNaN(net_weight_4) || net_weight_4<=0 ) && net_weight_4!='') {
　　　     　 alert("净重为大于0的数字");
　　   　}else if((isNaN(gt_4) || gt_4<=0) && gt_4!=''){
	       　alert("毛重为大于0的数字");
	    }else if((isNaN(L4) || L4<=0)&& L4!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(W4) || W4<=0)&& W4!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(H4) || H4<=0) && H4!=''){
	       　alert("箱规数据为大于0的数字");
		}else if ((isNaN(net_weight_5) || net_weight_5<=0 ) && net_weight_5!='') {
　　　     　 alert("净重为大于0的数字");
　　   　}else if((isNaN(gt_5) || gt_5<=0) && gt_5!=''){
	       　alert("毛重为大于0的数字");
	    }else if((isNaN(L5) || L5<=0)&& L5!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(W5) || W5<=0)&& W5!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(H5) || H5<=0) && H5!=''){
	       　alert("箱规数据为大于0的数字");
		}else if ((isNaN(net_weight_6) || net_weight_6<=0 ) && net_weight_6!='') {
　　　     　 alert("净重为大于0的数字");
　　   　}else if((isNaN(gt_6) || gt_6<=0) && gt_6!=''){
	       　alert("毛重为大于0的数字");
	    }else if((isNaN(L6) || L6<=0)&& L6!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(W6) || W6<=0)&& W6!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(H6) || H6<=0) && H6!=''){
	       　alert("箱规数据为大于0的数字");
		}else{
		$("#submit_freight_changes").submit();
	    }
	}else if(number==7){
	  if ((isNaN(net_weight_1) || net_weight_1<=0 ) && net_weight_1!='') {
　　　     　 alert("净重为大于0的数字");
　　   　}else if((isNaN(gt_1) || gt_1<=0) && gt_1!=''){
	       　alert("毛重为大于0的数字");
	    }else if((isNaN(L1) || L1<=0)&& L1!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(W1) || W1<=0)&& W1!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(H1) || H1<=0) && H1!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if ((isNaN(net_weight_2) || net_weight_2<=0) && net_weight_2!='') {
　　　     　 alert("净重为大于0的数字");
　　   　}else if((isNaN(gt_2) || gt_2<=0) && gt_2!=''){
	       　alert("毛重为大于0的数字");
	    }else if((isNaN(L2) || L2<=0) && L2!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(W2) || W2<=0) && W2!='' ){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(H2) || H2<=0) && H2!=''){
	       　alert("箱规数据为大于0的数字");
		}else if ((isNaN(net_weight_3) || net_weight_3<=0 ) && net_weight_3!='') {
　　　     　 alert("净重为大于0的数字");
　　   　}else if((isNaN(gt_3) || gt_3<=0) && gt_3!=''){
	       　alert("毛重为大于0的数字");
	    }else if((isNaN(L3) || L3<=0)&& L3!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(W3) || W3<=0)&& W3!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(H3) || H3<=0) && H3!=''){
	       　alert("箱规数据为大于0的数字")
	    }else if ((isNaN(net_weight_4) || net_weight_4<=0 ) && net_weight_4!='') {
　　　     　 alert("净重为大于0的数字");
　　   　}else if((isNaN(gt_4) || gt_4<=0) && gt_4!=''){
	       　alert("毛重为大于0的数字");
	    }else if((isNaN(L4) || L4<=0)&& L4!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(W4) || W4<=0)&& W4!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(H4) || H4<=0) && H4!=''){
	       　alert("箱规数据为大于0的数字");
		}else if ((isNaN(net_weight_5) || net_weight_5<=0 ) && net_weight_5!='') {
　　　     　 alert("净重为大于0的数字");
　　   　}else if((isNaN(gt_5) || gt_5<=0) && gt_5!=''){
	       　alert("毛重为大于0的数字");
	    }else if((isNaN(L5) || L5<=0)&& L5!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(W5) || W5<=0)&& W5!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(H5) || H5<=0) && H5!=''){
	       　alert("箱规数据为大于0的数字");
		}else if ((isNaN(net_weight_6) || net_weight_6<=0 ) && net_weight_6!='') {
　　　     　 alert("净重为大于0的数字");
　　   　}else if((isNaN(gt_6) || gt_6<=0) && gt_6!=''){
	       　alert("毛重为大于0的数字");
	    }else if((isNaN(L6) || L6<=0)&& L6!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(W6) || W6<=0)&& W6!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(H6) || H6<=0) && H6!=''){
	       　alert("箱规数据为大于0的数字");
		}else if ((isNaN(net_weight_7) || net_weight_7<=0 ) && net_weight_7!='') {
　　　     　 alert("净重为大于0的数字");
　　   　}else if((isNaN(gt_7) || gt_7<=0) && gt_7!=''){
	       　alert("毛重为大于0的数字");
	    }else if((isNaN(L7) || L7<=0)&& L7!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(W7) || W7<=0)&& W7!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(H7) || H7<=0) && H7!=''){
	       　alert("箱规数据为大于0的数字");
		}else{
		$("#submit_freight_changes").submit();
	    }
	}else if(number==8){
	  if ((isNaN(net_weight_1) || net_weight_1<=0 ) && net_weight_1!='') {
　　　     　 alert("净重为大于0的数字");
　　   　}else if((isNaN(gt_1) || gt_1<=0) && gt_1!=''){
	       　alert("毛重为大于0的数字");
	    }else if((isNaN(L1) || L1<=0)&& L1!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(W1) || W1<=0)&& W1!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(H1) || H1<=0) && H1!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if ((isNaN(net_weight_2) || net_weight_2<=0) && net_weight_2!='') {
　　　     　 alert("净重为大于0的数字");
　　   　}else if((isNaN(gt_2) || gt_2<=0) && gt_2!=''){
	       　alert("毛重为大于0的数字");
	    }else if((isNaN(L2) || L2<=0) && L2!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(W2) || W2<=0) && W2!='' ){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(H2) || H2<=0) && H2!=''){
	       　alert("箱规数据为大于0的数字");
		}else if ((isNaN(net_weight_3) || net_weight_3<=0 ) && net_weight_3!='') {
　　　     　 alert("净重为大于0的数字");
　　   　}else if((isNaN(gt_3) || gt_3<=0) && gt_3!=''){
	       　alert("毛重为大于0的数字");
	    }else if((isNaN(L3) || L3<=0)&& L3!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(W3) || W3<=0)&& W3!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(H3) || H3<=0) && H3!=''){
	       　alert("箱规数据为大于0的数字")
	    }else if ((isNaN(net_weight_4) || net_weight_4<=0 ) && net_weight_4!='') {
　　　     　 alert("净重为大于0的数字");
　　   　}else if((isNaN(gt_4) || gt_4<=0) && gt_4!=''){
	       　alert("毛重为大于0的数字");
	    }else if((isNaN(L4) || L4<=0)&& L4!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(W4) || W4<=0)&& W4!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(H4) || H4<=0) && H4!=''){
	       　alert("箱规数据为大于0的数字");
		}else if ((isNaN(net_weight_5) || net_weight_5<=0 ) && net_weight_5!='') {
　　　     　 alert("净重为大于0的数字");
　　   　}else if((isNaN(gt_5) || gt_5<=0) && gt_5!=''){
	       　alert("毛重为大于0的数字");
	    }else if((isNaN(L5) || L5<=0)&& L5!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(W5) || W5<=0)&& W5!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(H5) || H5<=0) && H5!=''){
	       　alert("箱规数据为大于0的数字");
		}else if ((isNaN(net_weight_6) || net_weight_6<=0 ) && net_weight_6!='') {
　　　     　 alert("净重为大于0的数字");
　　   　}else if((isNaN(gt_6) || gt_6<=0) && gt_6!=''){
	       　alert("毛重为大于0的数字");
	    }else if((isNaN(L6) || L6<=0)&& L6!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(W6) || W6<=0)&& W6!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(H6) || H6<=0) && H6!=''){
	       　alert("箱规数据为大于0的数字");
		}else if ((isNaN(net_weight_7) || net_weight_7<=0 ) && net_weight_7!='') {
　　　     　 alert("净重为大于0的数字");
　　   　}else if((isNaN(gt_7) || gt_7<=0) && gt_7!=''){
	       　alert("毛重为大于0的数字");
	    }else if((isNaN(L7) || L7<=0)&& L7!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(W7) || W7<=0)&& W7!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(H7) || H7<=0) && H7!=''){
	       　alert("箱规数据为大于0的数字");
		}else if ((isNaN(net_weight_8) || net_weight_8<=0 ) && net_weight_8!='') {
　　　     　 alert("净重为大于0的数字");
　　   　}else if((isNaN(gt_8) || gt_8<=0) && gt_8!=''){
	       　alert("毛重为大于0的数字");
	    }else if((isNaN(L8) || L8<=0)&& L8!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(W8) || W8<=0)&& W8!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(H8) || H8<=0) && H8!=''){
	       　alert("箱规数据为大于0的数字");
		}else{
		$("#submit_freight_changes").submit();
	    }
	}else if(number==9){
	  if ((isNaN(net_weight_1) || net_weight_1<=0 ) && net_weight_1!='') {
　　　     　 alert("净重为大于0的数字");
　　   　}else if((isNaN(gt_1) || gt_1<=0) && gt_1!=''){
	       　alert("毛重为大于0的数字");
	    }else if((isNaN(L1) || L1<=0)&& L1!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(W1) || W1<=0)&& W1!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(H1) || H1<=0) && H1!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if ((isNaN(net_weight_2) || net_weight_2<=0) && net_weight_2!='') {
　　　     　 alert("净重为大于0的数字");
　　   　}else if((isNaN(gt_2) || gt_2<=0) && gt_2!=''){
	       　alert("毛重为大于0的数字");
	    }else if((isNaN(L2) || L2<=0) && L2!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(W2) || W2<=0) && W2!='' ){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(H2) || H2<=0) && H2!=''){
	       　alert("箱规数据为大于0的数字");
		}else if ((isNaN(net_weight_3) || net_weight_3<=0 ) && net_weight_3!='') {
　　　     　 alert("净重为大于0的数字");
　　   　}else if((isNaN(gt_3) || gt_3<=0) && gt_3!=''){
	       　alert("毛重为大于0的数字");
	    }else if((isNaN(L3) || L3<=0)&& L3!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(W3) || W3<=0)&& W3!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(H3) || H3<=0) && H3!=''){
	       　alert("箱规数据为大于0的数字")
	    }else if ((isNaN(net_weight_4) || net_weight_4<=0 ) && net_weight_4!='') {
　　　     　 alert("净重为大于0的数字");
　　   　}else if((isNaN(gt_4) || gt_4<=0) && gt_4!=''){
	       　alert("毛重为大于0的数字");
	    }else if((isNaN(L4) || L4<=0)&& L4!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(W4) || W4<=0)&& W4!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(H4) || H4<=0) && H4!=''){
	       　alert("箱规数据为大于0的数字");
		}else if ((isNaN(net_weight_5) || net_weight_5<=0 ) && net_weight_5!='') {
　　　     　 alert("净重为大于0的数字");
　　   　}else if((isNaN(gt_5) || gt_5<=0) && gt_5!=''){
	       　alert("毛重为大于0的数字");
	    }else if((isNaN(L5) || L5<=0)&& L5!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(W5) || W5<=0)&& W5!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(H5) || H5<=0) && H5!=''){
	       　alert("箱规数据为大于0的数字");
		}else if ((isNaN(net_weight_6) || net_weight_6<=0 ) && net_weight_6!='') {
　　　     　 alert("净重为大于0的数字");
　　   　}else if((isNaN(gt_6) || gt_6<=0) && gt_6!=''){
	       　alert("毛重为大于0的数字");
	    }else if((isNaN(L6) || L6<=0)&& L6!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(W6) || W6<=0)&& W6!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(H6) || H6<=0) && H6!=''){
	       　alert("箱规数据为大于0的数字");
		}else if ((isNaN(net_weight_7) || net_weight_7<=0 ) && net_weight_7!='') {
　　　     　 alert("净重为大于0的数字");
　　   　}else if((isNaN(gt_7) || gt_7<=0) && gt_7!=''){
	       　alert("毛重为大于0的数字");
	    }else if((isNaN(L7) || L7<=0)&& L7!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(W7) || W7<=0)&& W7!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(H7) || H7<=0) && H7!=''){
	       　alert("箱规数据为大于0的数字");
		}else if ((isNaN(net_weight_8) || net_weight_8<=0 ) && net_weight_8!='') {
　　　     　 alert("净重为大于0的数字");
　　   　}else if((isNaN(gt_8) || gt_8<=0) && gt_8!=''){
	       　alert("毛重为大于0的数字");
	    }else if((isNaN(L8) || L8<=0)&& L8!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(W8) || W8<=0)&& W8!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(H8) || H8<=0) && H8!=''){
	       　alert("箱规数据为大于0的数字");
		}else if ((isNaN(net_weight_9) || net_weight_9<=0 ) && net_weight_9!='') {
　　　     　 alert("净重为大于0的数字");
　　   　}else if((isNaN(gt_9) || gt_9<=0) && gt_9!=''){
	       　alert("毛重为大于0的数字");
	    }else if((isNaN(L9) || L9<=0)&& L9!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(W9) || W9<=0)&& W9!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(H9) || H9<=0) && H9!=''){
	       　alert("箱规数据为大于0的数字");
		}else{
		$("#submit_freight_changes").submit();
	    }
	}else if(number==10){
	  if ((isNaN(net_weight_1) || net_weight_1<=0 ) && net_weight_1!='') {
　　　     　 alert("净重为大于0的数字");
　　   　}else if((isNaN(gt_1) || gt_1<=0) && gt_1!=''){
	       　alert("毛重为大于0的数字");
	    }else if((isNaN(L1) || L1<=0)&& L1!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(W1) || W1<=0)&& W1!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(H1) || H1<=0) && H1!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if ((isNaN(net_weight_2) || net_weight_2<=0) && net_weight_2!='') {
　　　     　 alert("净重为大于0的数字");
　　   　}else if((isNaN(gt_2) || gt_2<=0) && gt_2!=''){
	       　alert("毛重为大于0的数字");
	    }else if((isNaN(L2) || L2<=0) && L2!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(W2) || W2<=0) && W2!='' ){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(H2) || H2<=0) && H2!=''){
	       　alert("箱规数据为大于0的数字");
		}else if ((isNaN(net_weight_3) || net_weight_3<=0 ) && net_weight_3!='') {
　　　     　 alert("净重为大于0的数字");
　　   　}else if((isNaN(gt_3) || gt_3<=0) && gt_3!=''){
	       　alert("毛重为大于0的数字");
	    }else if((isNaN(L3) || L3<=0)&& L3!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(W3) || W3<=0)&& W3!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(H3) || H3<=0) && H3!=''){
	       　alert("箱规数据为大于0的数字")
	    }else if ((isNaN(net_weight_4) || net_weight_4<=0 ) && net_weight_4!='') {
　　　     　 alert("净重为大于0的数字");
　　   　}else if((isNaN(gt_4) || gt_4<=0) && gt_4!=''){
	       　alert("毛重为大于0的数字");
	    }else if((isNaN(L4) || L4<=0)&& L4!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(W4) || W4<=0)&& W4!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(H4) || H4<=0) && H4!=''){
	       　alert("箱规数据为大于0的数字");
		}else if ((isNaN(net_weight_5) || net_weight_5<=0 ) && net_weight_5!='') {
　　　     　 alert("净重为大于0的数字");
　　   　}else if((isNaN(gt_5) || gt_5<=0) && gt_5!=''){
	       　alert("毛重为大于0的数字");
	    }else if((isNaN(L5) || L5<=0)&& L5!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(W5) || W5<=0)&& W5!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(H5) || H5<=0) && H5!=''){
	       　alert("箱规数据为大于0的数字");
		}else if ((isNaN(net_weight_6) || net_weight_6<=0 ) && net_weight_6!='') {
　　　     　 alert("净重为大于0的数字");
　　   　}else if((isNaN(gt_6) || gt_6<=0) && gt_6!=''){
	       　alert("毛重为大于0的数字");
	    }else if((isNaN(L6) || L6<=0)&& L6!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(W6) || W6<=0)&& W6!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(H6) || H6<=0) && H6!=''){
	       　alert("箱规数据为大于0的数字");
		}else if ((isNaN(net_weight_7) || net_weight_7<=0 ) && net_weight_7!='') {
　　　     　 alert("净重为大于0的数字");
　　   　}else if((isNaN(gt_7) || gt_7<=0) && gt_7!=''){
	       　alert("毛重为大于0的数字");
	    }else if((isNaN(L7) || L7<=0)&& L7!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(W7) || W7<=0)&& W7!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(H7) || H7<=0) && H7!=''){
	       　alert("箱规数据为大于0的数字");
		}else if ((isNaN(net_weight_8) || net_weight_8<=0 ) && net_weight_8!='') {
　　　     　 alert("净重为大于0的数字");
　　   　}else if((isNaN(gt_8) || gt_8<=0) && gt_8!=''){
	       　alert("毛重为大于0的数字");
	    }else if((isNaN(L8) || L8<=0)&& L8!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(W8) || W8<=0)&& W8!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(H8) || H8<=0) && H8!=''){
	       　alert("箱规数据为大于0的数字");
		}else if ((isNaN(net_weight_9) || net_weight_9<=0 ) && net_weight_9!='') {
　　　     　 alert("净重为大于0的数字");
　　   　}else if((isNaN(gt_9) || gt_9<=0) && gt_9!=''){
	       　alert("毛重为大于0的数字");
	    }else if((isNaN(L9) || L9<=0)&& L9!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(W9) || W9<=0)&& W9!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(H9) || H9<=0) && H9!=''){
	       　alert("箱规数据为大于0的数字");
		}else if ((isNaN(net_weight_10) || net_weight_10<=0 ) && net_weight_10!='') {
　　　     　 alert("净重为大于0的数字");
　　   　}else if((isNaN(gt_10) || gt_10<=0) && gt_10!=''){
	       　alert("毛重为大于0的数字");
	    }else if((isNaN(L10) || L10<=0)&& L10!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(W10) || W10<=0)&& W10!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(H10) || H10<=0) && H10!=''){
	       　alert("箱规数据为大于0的数字");
		}else{
		$("#submit_freight_changes").submit();
	    }
		
	}else if(number==11){
	    if ((isNaN(net_weight_11) || net_weight_11<=0 ) && net_weight_11!='') {
　　　     　 alert("净重为大于0的数字");
　　   　}else if((isNaN(gt_11) || gt_11<=0) && gt_11!=''){
	       　alert("毛重为大于0的数字");
	    }else if((isNaN(L11) || L11<=0)&& L11!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(W11) || W11<=0)&& W11!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(H11) || H11<=0) && H11!=''){
	       　alert("箱规数据为大于0的数字");
	    }else{
		    $("#submit_freight_changes").submit();
	    }
	}else if(number==12){
	    if ((isNaN(net_weight_12) || net_weight_12<=0 ) && net_weight_12!='') {
　　　     　 alert("净重为大于0的数字");
　　   　}else if((isNaN(gt_12) || gt_12<=0) && gt_12!=''){
	       　alert("毛重为大于0的数字");
	    }else if((isNaN(L12) || L12<=0)&& L12!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(W12) || W12<=0)&& W12!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(H12) || H12<=0) && H12!=''){
	       　alert("箱规数据为大于0的数字");
	    }else{
		    $("#submit_freight_changes").submit();
	    }
	}else if(number==13){
	    if ((isNaN(net_weight_13) || net_weight_13<=0 ) && net_weight_13!='') {
　　　     　 alert("净重为大于0的数字");
　　   　}else if((isNaN(gt_13) || gt_13<=0) && gt_13!=''){
	       　alert("毛重为大于0的数字");
	    }else if((isNaN(L13) || L13<=0)&& L13!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(W13) || W13<=0)&& W13!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(H13) || H13<=0) && H13!=''){
	       　alert("箱规数据为大于0的数字");
	    }else{
		    $("#submit_freight_changes").submit();
	    }
	}else if(number==14){
	    if ((isNaN(net_weight_14) || net_weight_14<=0 ) && net_weight_14!='') {
　　　     　 alert("净重为大于0的数字");
　　   　}else if((isNaN(gt_14) || gt_14<=0) && gt_14!=''){
	       　alert("毛重为大于0的数字");
	    }else if((isNaN(L14) || L14<=0)&& L14!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(W14) || W14<=0)&& W14!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(H14) || H14<=0) && H14!=''){
	       　alert("箱规数据为大于0的数字");
	    }else{
		    $("#submit_freight_changes").submit();
	    }
	}else if(number==15){
	    if ((isNaN(net_weight_15) || net_weight_15<=0 ) && net_weight_15!='') {
　　　     　 alert("净重为大于0的数字");
　　   　}else if((isNaN(gt_15) || gt_15<=0) && gt_15!=''){
	       　alert("毛重为大于0的数字");
	    }else if((isNaN(L15) || L15<=0)&& L15!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(W15) || W15<=0)&& W15!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(H15) || H15<=0) && H15!=''){
	       　alert("箱规数据为大于0的数字");
	    }else{
		    $("#submit_freight_changes").submit();
	    }
	}else if(number==16){
	    if ((isNaN(net_weight_16) || net_weight_16<=0 ) && net_weight_16!='') {
　　　     　 alert("净重为大于0的数字");
　　   　}else if((isNaN(gt_16) || gt_16<=0) && gt_16!=''){
	       　alert("毛重为大于0的数字");
	    }else if((isNaN(L16) || L16<=0)&& L16!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(W16) || W16<=0)&& W16!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(H16) || H16<=0) && H16!=''){
	       　alert("箱规数据为大于0的数字");
	    }else{
		    $("#submit_freight_changes").submit();
	    }
	}else if(number==17){
	    if ((isNaN(net_weight_17) || net_weight_17<=0 ) && net_weight_17!='') {
　　　     　 alert("净重为大于0的数字");
　　   　}else if((isNaN(gt_17) || gt_17<=0) && gt_17!=''){
	       　alert("毛重为大于0的数字");
	    }else if((isNaN(L17) || L17<=0)&& L17!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(W17) || W17<=0)&& W17!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(H17) || H17<=0) && H17!=''){
	       　alert("箱规数据为大于0的数字");
	    }else{
		    $("#submit_freight_changes").submit();
	    }
	}else if(number==18){
	    if ((isNaN(net_weight_18) || net_weight_18<=0 ) && net_weight_18!='') {
　　　     　 alert("净重为大于0的数字");
　　   　}else if((isNaN(gt_18) || gt_18<=0) && gt_18!=''){
	       　alert("毛重为大于0的数字");
	    }else if((isNaN(L18) || L18<=0)&& L18!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(W18) || W18<=0)&& W18!=''){
	       　alert("箱规数据为大于0的数字");
	    }else if((isNaN(H18) || H18<=0) && H18!=''){
	       　alert("箱规数据为大于0的数字");
	    }else{
		    $("#submit_freight_changes").submit();
	    }
	}
	
	
	
});
</script>
<!-- {/literal} -->