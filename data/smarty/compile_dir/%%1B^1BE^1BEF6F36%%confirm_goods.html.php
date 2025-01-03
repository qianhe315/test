<?php /* Smarty version 2.6.22, created on 2014-01-09 15:01:09
         compiled from procure_outgoing/confirm_goods.html */ ?>

<div class="pageContent">
  <form method="post" id="take_number_form_po" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm" onsubmit="return validateCallback(this, dialogAjaxDone)">
    <div class="pageFormContent" layoutH="58">
      <div class="unit">
      	<label>收货单号：</label>
        <input type="text" size="25" name="customer_name" id="customer_name" value="<?php echo $this->_tpl_vars['order_number']; ?>
" readonly />
        <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['id']; ?>
">
        <input type="hidden" name="number" id="number" value="<?php echo $this->_tpl_vars['number']; ?>
" />
        <input type="hidden" name="status" value="<?php echo $this->_tpl_vars['status']; ?>
" />
      </div>
      <div class="divider">divider</div>
      <div class="unit">
       <label>是否全部收货：</label>
        <?php if ($this->_tpl_vars['take_status'] == '1'): ?>
            <label><input type="radio" id="d_yes" name="r1" value="1" />是</label>
            <label><input type="radio" id="d_no" name="r1" value="2" checked="checked" />否</label>
        <?php elseif ($this->_tpl_vars['take_status'] == '2'): ?>    
            <label><input type="radio" id="d_yes" name="r1" value="1" />是</label>
            <label><input type="radio" id="d_no" name="r1" value="2" checked="checked" />否</label>        
        <?php elseif ($this->_tpl_vars['take_status'] == '3'): ?>
            <label><input type="radio" id="d_yes" name="r1" value="1" checked="checked" />是</label>
            <label><input type="radio" id="d_no" name="r1" value="2" />否</label>        
        <?php else: ?>
            <label><input type="radio" id="d_yes" name="r1" value="1" />是</label>
            <label><input type="radio" id="d_no" name="r1" value="2" checked="checked" />否</label>            
        <?php endif; ?>  
      </div>
      <?php if ($this->_tpl_vars['status'] != 2): ?>
      <div class="divider">divider</div>
      <div class="unit">
      	<label>收货数量：</label>
        <?php if ($this->_tpl_vars['take_status'] == '3'): ?>
            <input type="text" size="25" readonly name="take_number" value="<?php echo $this->_tpl_vars['take_number']; ?>
" id="take_number" />
        <?php else: ?>
            <input type="text" size="25" name="take_number" value="<?php echo $this->_tpl_vars['take_number']; ?>
" id="take_number" />
        <?php endif; ?>
        <span id="result" class="error" style="display:none;">发货数量不能大于总数量</span>
        <span id="result_a" class="error" style="display:none;">数量不为空</span>          
      </div>
      <?php endif; ?>
      <div class="divider">divider</div>  
    </div>
     </form>
    <div class="formBar">
      <ul>
        <li>
          <div class="buttonActive">
            <div class="buttonContent">
              <button type="button" id="submit_po" >确定</button>
            </div>
          </div>
        </li>
        <li>
		   <div class="button"><div class="buttonContent"><button type="button" class="close">取消</button></div></div>
		</li>
      </ul>
    </div>
 
</div>
<?php if ($this->_tpl_vars['status'] != '2'): ?>
<script type="text/javascript">
$(document).ready(function(){
	$("#d_yes").click(function(){
		var d_yes = $("#d_yes").val(); 
		$("#take_number").attr("readonly","readonly");
		$('#take_number').val("");
		$('#result_a').css('display','none');
		$('#result').css('display','none');
	});
	 
	$("#d_no").click(function(){
		var d_no = $("#d_no").val(); 
		$("#take_number").removeAttr("readonly","readonly");
	});	 
	 
	$("#submit").click(function(){
        var r1 = $("input[name='r1']:checked").val();
		if(r1=='2'){
			var number = $("#number").val();
			var take_number = $("#take_number").val();

			if(take_number == ""){
			    $('#result_a').css('display','block');
				$('#result').css('display','none');
			}else if(parseInt(number) > parseInt(take_number)){
				$('#result').css('display','none');
				$("#take_number_form_po").submit();
			}else{
				$('#result').css('display','block');
				$('#result_a').css('display','none');
			}
		}else{
			$("#take_number_form_po").submit();
		}
		
	});
	
 });
</script>
<?php else: ?>
<script type="text/javascript">
$(document).ready(function(){
	$("#submit_po").click(function(){
		$("#take_number_form_po").submit();
	});
	
 });
</script>
<?php endif; ?>