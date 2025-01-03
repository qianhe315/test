<?php /* Smarty version 2.6.22, created on 2014-10-08 14:36:20
         compiled from picture_type/index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/picture_type/index">
    <input type="hidden" name="pageNum" value="1" />
	<input type="hidden" name="numPerPage" value="<?php echo $this->_tpl_vars['listRows']; ?>
" />
</form>
  <form rel="pagerForm" onSubmit="return navTabSearch(this);" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/picture_type/index" method="get">
  <div class="pageHeader">
      <div class="searchBar">
		<ul class="searchContent">
        <li style="width:23%;">
			<label style="width:70px;">属性分类：</label>
			<select class="combox" name="type">
            <option value="" >全部</option>
            <option value="0" <?php if ($this->_tpl_vars['nature_id'] == '0'): ?>selected="selected"<?php endif; ?> >无</option>
             <?php $_from = $this->_tpl_vars['nature_classify']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ta']):
?>
            <option value="<?php echo $this->_tpl_vars['ta']['id']; ?>
"  <?php if ($this->_tpl_vars['ta']['id'] == $this->_tpl_vars['nature_id']): ?>selected="selected"<?php endif; ?> >&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->_tpl_vars['ta']['name']; ?>
</option>
            	<?php if ($this->_tpl_vars['ta']['erji']): ?>
                  <?php $_from = $this->_tpl_vars['ta']['erji']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['p']):
?>
                  <option value="<?php echo $this->_tpl_vars['p']['id']; ?>
" <?php if ($this->_tpl_vars['p']['id'] == $this->_tpl_vars['nature_id']): ?>selected="selected"<?php endif; ?> >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->_tpl_vars['p']['name']; ?>
</option>
                    <?php if ($this->_tpl_vars['p']['sanji']): ?>
                      <?php $_from = $this->_tpl_vars['p']['sanji']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['m']):
?>
                      <option value="<?php echo $this->_tpl_vars['m']['id']; ?>
" <?php if ($this->_tpl_vars['m']['id'] == $this->_tpl_vars['nature_id']): ?>selected="selected"<?php endif; ?> >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->_tpl_vars['m']['name']; ?>
</option>
                         <?php if ($this->_tpl_vars['m']['siji']): ?>
                           <?php $_from = $this->_tpl_vars['m']['siji']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['n']):
?>
                           <option value="<?php echo $this->_tpl_vars['n']['id']; ?>
" <?php if ($this->_tpl_vars['n']['id'] == $this->_tpl_vars['nature_id']): ?>selected="selected"<?php endif; ?>>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->_tpl_vars['n']['name']; ?>
</option>
                           <?php endforeach; endif; unset($_from); ?>
                         <?php endif; ?>
                      <?php endforeach; endif; unset($_from); ?>
                    <?php endif; ?>
                  <?php endforeach; endif; unset($_from); ?>
            	<?php endif; ?>
            <?php endforeach; endif; unset($_from); ?>
            </select>
	    </li>
        
        <li style="width: 23%;">
			<label style="width:70px;">来源分类：</label>
			<select class="combox" name="laiyuan">
            <option value="" >全部</option>
            <option value="0" <?php if ($this->_tpl_vars['come_id'] == '0'): ?>selected="selected"<?php endif; ?> >无</option>
             <?php $_from = $this->_tpl_vars['come_classify']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ta']):
?>
               <option  value="<?php echo $this->_tpl_vars['ta']['id']; ?>
" <?php if ($this->_tpl_vars['ta']['id'] == $this->_tpl_vars['come_id']): ?>selected="selected"<?php endif; ?> >&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->_tpl_vars['ta']['name']; ?>
</option>
            	<?php if ($this->_tpl_vars['ta']['erji']): ?>
                  <?php $_from = $this->_tpl_vars['ta']['erji']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['p']):
?>
                  <option value="<?php echo $this->_tpl_vars['p']['id']; ?>
" <?php if ($this->_tpl_vars['p']['id'] == $this->_tpl_vars['come_id']): ?>selected="selected"<?php endif; ?> >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->_tpl_vars['p']['name']; ?>
</option>
                    <?php if ($this->_tpl_vars['p']['sanji']): ?>
                      <?php $_from = $this->_tpl_vars['p']['sanji']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['m']):
?>
                      <option value="<?php echo $this->_tpl_vars['m']['id']; ?>
" <?php if ($this->_tpl_vars['m']['id'] == $this->_tpl_vars['come_id']): ?>selected="selected"<?php endif; ?>>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->_tpl_vars['m']['name']; ?>
</option>
                         <?php if ($this->_tpl_vars['m']['siji']): ?>
                           <?php $_from = $this->_tpl_vars['m']['siji']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['n']):
?>
                           <option value="<?php echo $this->_tpl_vars['n']['id']; ?>
"<?php if ($this->_tpl_vars['n']['id'] == $this->_tpl_vars['come_id']): ?>selected="selected"<?php endif; ?>>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->_tpl_vars['n']['name']; ?>
</option>
                           <?php endforeach; endif; unset($_from); ?>
                         <?php endif; ?>
                      <?php endforeach; endif; unset($_from); ?>
                    <?php endif; ?>
                  <?php endforeach; endif; unset($_from); ?>
            	<?php endif; ?>
            <?php endforeach; endif; unset($_from); ?>
            </select>
	    </li>
        </ul>
       
   <div class="subBar">
           <ul>
			<li style="float:right;"><div class="buttonActive" style="float:right;"><div style="float:right;" class="buttonContent"><button type="submit">检索</button></div></div></li>
		   </ul>
   </div>
  </div>
  </div>
  </form>
 <button id="button" type="button" rel="group_ids[]" postType="string"   style="margin-left:12px;">修改</button>
 <a class="edit" title="更新最新图片信息?" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/picture_type/update_picture/"  posttype="string" rel="page1" target="ajaxTodo" ><button>更新最新图片信息</button></a>
 <a class="add" href="#" id="information" style="margin-left:143px;" ><button>查看详细信息</button></a>  
<form rel="pagerForm" style="float:left; width:100%;" onsubmit="return validateCallback(this, navTabAjaxDone)" enctype="multipart/form-data" id="shuxing" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/picture_type/update_type" method="post">
<div class="stkInfEnter" layoutH="100">
<input type="hidden" id="group_authority" value="<?php echo $this->_tpl_vars['group_authority']; ?>
" name="authority1" />
<div style="float:left; width:290px;">
  <div style="display:block; float:left; margin:8px; overflow:auto;width:270px; height:250px; border:solid 1px #CCC; line-height:21px; background:#FFF;">
     <label>属性分类：</label>
      <?php if ($this->_tpl_vars['yiji']): ?>
        <ul class="tree treeFolder treeCheck expand" oncheck="kkk">
            <?php $_from = $this->_tpl_vars['yiji']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k1'] => $this->_tpl_vars['yj']):
?> 
                      <li><a tname="<?php echo $this->_tpl_vars['yj']['id']; ?>
" tvalue="<?php echo $this->_tpl_vars['yj']['id']; ?>
|<?php echo $this->_tpl_vars['yj']['name']; ?>
" ><?php echo $this->_tpl_vars['yj']['name']; ?>
</a>
                       <?php if ($this->_tpl_vars['yj']['erji']): ?>
                        <ul>
                          <?php $_from = $this->_tpl_vars['yj']['erji']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k2'] => $this->_tpl_vars['ej']):
?>
                             <li><a tname="<?php echo $this->_tpl_vars['ej']['id']; ?>
" tvalue="<?php echo $this->_tpl_vars['ej']['id']; ?>
|<?php echo $this->_tpl_vars['ej']['name']; ?>
"><?php echo $this->_tpl_vars['ej']['name']; ?>
</a>
                               <?php if ($this->_tpl_vars['ej']['sanji']): ?>
                                 <ul>
                                   <?php $_from = $this->_tpl_vars['ej']['sanji']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k3'] => $this->_tpl_vars['sj']):
?>  
                                     <li><a tname="<?php echo $this->_tpl_vars['sj']['id']; ?>
" tvalue="<?php echo $this->_tpl_vars['sj']['id']; ?>
|<?php echo $this->_tpl_vars['sj']['name']; ?>
" ><?php echo $this->_tpl_vars['sj']['name']; ?>
</a>
                                        <?php if ($this->_tpl_vars['sj']['siji']): ?>
                                          <ul>
                                          <?php $_from = $this->_tpl_vars['sj']['siji']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k4'] => $this->_tpl_vars['sij']):
?>
                                               <li><a tname="<?php echo $this->_tpl_vars['sij']['id']; ?>
" tvalue="<?php echo $this->_tpl_vars['sij']['id']; ?>
|<?php echo $this->_tpl_vars['sij']['name']; ?>
" ><?php echo $this->_tpl_vars['sij']['name']; ?>
</a></li>
                                            <?php endforeach; endif; unset($_from); ?>
                                         </ul>
                                        <?php endif; ?>
                                     </li>
                                 <?php endforeach; endif; unset($_from); ?> 
                               </ul>
                               <?php endif; ?>
                            </li>
                           <?php endforeach; endif; unset($_from); ?>
                         </ul>
                       <?php endif; ?>
                     </li>
              <?php endforeach; endif; unset($_from); ?>
           </ul>
         <?php endif; ?>
         </div>
        <div style="display:block; float:left; margin:10px; overflow:auto; margin-top:10px;width:270px; height:250px; border:solid 1px #CCC; line-height:11px; background:#FFF;">
        <label>来源分类：</label>
        <?php if ($this->_tpl_vars['yiji_1']): ?>
        <ul class="tree treeFolder treeCheck expand" oncheck="aaa">
           <?php $_from = $this->_tpl_vars['yiji_1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k1'] => $this->_tpl_vars['yi1']):
?> 
                    <li><a  tname="<?php echo $this->_tpl_vars['yi1']['id']; ?>
" tvalue="<?php echo $this->_tpl_vars['yi1']['id']; ?>
|<?php echo $this->_tpl_vars['yi1']['name']; ?>
" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/picture_type/index-id_1-<?php echo $this->_tpl_vars['yi1']['id']; ?>
-name_1-<?php echo $this->_tpl_vars['yi1']['name']; ?>
" target="ajax" rel="dis"><?php echo $this->_tpl_vars['yi1']['name']; ?>
</a>
                    <?php if ($this->_tpl_vars['yi1']['erji1']): ?>
                     <ul>
                       <?php $_from = $this->_tpl_vars['yi1']['erji1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k2'] => $this->_tpl_vars['ej1']):
?>
                                  <li><a tname="<?php echo $this->_tpl_vars['ej1']['id']; ?>
" tvalue="<?php echo $this->_tpl_vars['ej1']['id']; ?>
|<?php echo $this->_tpl_vars['ej1']['name']; ?>
"><?php echo $this->_tpl_vars['ej1']['name']; ?>
</a>
                                   <?php if ($this->_tpl_vars['ej1']['sanji1']): ?>
                                   <ul>
                                     <?php $_from = $this->_tpl_vars['ej1']['sanji1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k3'] => $this->_tpl_vars['sj1']):
?>  
                                                  <li><a tname="<?php echo $this->_tpl_vars['sj1']['id']; ?>
" tvalue="<?php echo $this->_tpl_vars['sj1']['id']; ?>
|<?php echo $this->_tpl_vars['sj1']['name']; ?>
"><?php echo $this->_tpl_vars['sj1']['name']; ?>
</a>
                                                   <?php if ($this->_tpl_vars['sj1']['siji1']): ?>
                                                     <ul>
                                                      <?php $_from = $this->_tpl_vars['sj1']['siji1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k4'] => $this->_tpl_vars['sij1']):
?>
                                                            <li><a tname="<?php echo $this->_tpl_vars['sij1']['id']; ?>
" tvalue="<?php echo $this->_tpl_vars['sj1']['id']; ?>
|<?php echo $this->_tpl_vars['sij1']['name']; ?>
"><?php echo $this->_tpl_vars['sij1']['name']; ?>
</a></li>
                                                         <?php endforeach; endif; unset($_from); ?>
                                                     </ul>
                                                    <?php endif; ?> 
                                                  </li>
                                              <?php endforeach; endif; unset($_from); ?> 
                                     </ul>
                                     <?php endif; ?>
                                  </li>
                               <?php endforeach; endif; unset($_from); ?>
                       </ul>
                       <?php endif; ?>
                    </li>
                <?php endforeach; endif; unset($_from); ?>        
           </ul>
          <?php endif; ?>
     </div>
</div>
     <div id="dis" style="display:block; margin-left:10px; margin-top:10px; overflow:auto; float:left;width:60%; height:515px; border:solid 1px #000; line-height:11px; background:#FFF;">
        <?php if ($this->_tpl_vars['pic_nature']): ?>
			 <?php $_from = $this->_tpl_vars['pic_nature']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['dis']):
?>
               <div style="float:left; width:120px; height:130px; margin-bottom:5px; margin-right:10px; margin-left:10px;">
                  <input name="group_ids[]" style="margin-top:45%; float:left;" value="<?php echo $this->_tpl_vars['dis']['id']; ?>
" type="checkbox">
                <a style="float:left;" href="#"><img src="<?php echo $this->_tpl_vars['dis']['upload_jpg']; ?>
" width="100px" height="100px" ></a>
               <font style="float:left; width:120px; text-align:center; line-height:30px;"><?php echo $this->_tpl_vars['dis']['name']; ?>
</font>
               </div>
            <?php endforeach; endif; unset($_from); ?>
        <?php endif; ?>
        <?php if ($this->_tpl_vars['total_count'] > 50): ?>
        <div class="pageContent" style="width:100%;">
        <div class="panelBar" >
		 <div class="pages" style="width:25%; ">
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
		<div class="pagination" style="width:70%;" targetType="navTab" totalCount="<?php echo $this->_tpl_vars['total_count']; ?>
" numPerPage="<?php echo $this->_tpl_vars['listRows']; ?>
" pageNumShown="10" currentPage="<?php echo $this->_tpl_vars['current_page']; ?>
"></div>

	   </div>
        </div>
        <?php endif; ?>
   </div>
   </div>
</form>
<script language="javascript">

$("#button").click(function (){
		$("#shuxing").submit();

});
 $("#information").click(function (){
		//var touid = $("#newtouid").val();
			var check_arr = '';
			$("input[name='group_ids[]']:checkbox:checked").each(function(){ //由于复选框一般选中的是多个,所以可以循环输出
				if(check_arr == ''){
					check_arr += $(this).val();
				}else{
					check_arr += '#'+$(this).val();
				}
			});
			
			var p = 'ids-'+check_arr+'.html';
			if(check_arr ==''){
				alert('必须选择图片信息');
			}else{
				var patt = new RegExp('#');
				if(patt.test(check_arr)){
					alert('只能选择一张图片查看信息');
				}else{
				    window.open('<?php echo $this->_tpl_vars['__ROOT__']; ?>
/picture_type/information-'+p);
				}
			}
		});	
		
</script>
<script type="text/javascript">
function aaa(){
	var chk_value1 =[];
	var json = arguments[0], result="";
    $(".ckbox.checked>input").each(function(){    
	   chk_value1.push($(this).val());    
	});  
	$("#group_authority").val(chk_value1);
	$("#resultBox").html(result);
}
</script>
<script type="text/javascript">
function kkk(){
	var chk_value =[];
	var json = arguments[0], result="";
    $(".ckbox.checked>input").each(function(){    
	   chk_value.push($(this).val());    
	});  
	$("#group_authority").val(chk_value);
	$("#resultBox").html(result);
}  
</script> 