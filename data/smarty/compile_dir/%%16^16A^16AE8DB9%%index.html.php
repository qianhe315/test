<?php /* Smarty version 2.6.22, created on 2024-10-16 16:10:15
         compiled from quotecustomer/index.html */ ?>
<?php if ($this->_tpl_vars['customer_status'] > 1): ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/quotecustomer/index-customerstatus-<?php echo $this->_tpl_vars['customer_status']; ?>
">
<?php else: ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/quotecustomer/index">
<?php endif; ?>
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
</form>

<div class="pageHeader">
    
	<form rel="pagerForm" onSubmit="return navTabSearch(this);" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/quotecustomer/index" method="get">
	<input type="hidden" name="customer_status" value="<?php echo $this->_tpl_vars['customer_status']; ?>
" />
        <input type="hidden" name="flag" value="<?php echo $this->_tpl_vars['flag']; ?>
" />
	<div class="searchBar">
		<ul class="searchContent">
            <?php if ($this->_tpl_vars['customer_status'] != 3): ?>
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
" style="width:120px;" />
			</li>
            <li>
				<label style="width:60px;">客户代码：</label>
				<input type="text" name="customer_code" value="<?php echo $this->_tpl_vars['customer_code']; ?>
" style="width:120px;" />
                <input type='radio' name='standard' value='1' <?php if ($this->_tpl_vars['standard'] == 1 || empty ( $this->_tpl_vars['standard'] )): ?>checked='checked'<?php endif; ?> >精确 <input type='radio' name='standard' value='2' <?php if ($this->_tpl_vars['standard'] == 2): ?>checked='checked'<?php endif; ?> >模糊
			</li>
            <li>
				<label style="width:60px;">客户公司：</label>
				<input type="text" name="company" value="<?php echo $this->_tpl_vars['company']; ?>
" style="width:120px;" />
			</li>
            <li>
				<label style="width:60px;">邮箱：</label>
				<input type="text" name="email" value="<?php echo $this->_tpl_vars['email']; ?>
" style="width:120px;" />
			</li>
            
            <li>
				<label style="width:60px;">询盘时间：</label>
				<input type="text" name="start_time" class="date" readonly style="width:70px;" value="<?php echo $this->_tpl_vars['start_time']; ?>
" />-<input type="text" name="end_time" class="date" readonly style="width:70px;" value="<?php echo $this->_tpl_vars['end_time']; ?>
" />
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
                    <option value="32"<?php if ($this->_tpl_vars['laiyuan'] == '32'): ?>selected="selected"<?php endif; ?>>FB广告</option>
                    <option value="24"<?php if ($this->_tpl_vars['laiyuan'] == '24'): ?>selected="selected"<?php endif; ?>>必应付费</option>
                    <!--<option value="26"<?php if ($this->_tpl_vars['laiyuan'] == '26'): ?>selected="selected"<?php endif; ?>>谷歌付费-加拿大</option>
                    <option value="27"<?php if ($this->_tpl_vars['laiyuan'] == '27'): ?>selected="selected"<?php endif; ?>>谷歌付费-法国</option>
                    <option value="28"<?php if ($this->_tpl_vars['laiyuan'] == '28'): ?>selected="selected"<?php endif; ?>>谷歌付费-英国</option>
                    <option value="29"<?php if ($this->_tpl_vars['laiyuan'] == '29'): ?>selected="selected"<?php endif; ?>>谷歌付费-澳大利亚</option>-->
                </select>			
            </li>
            
            <li>
				<label style="width:60px;">成交状态：</label>
				<select class="combox" name="cus_status">
                	<option value="">全部</option>
                	<option value="1" <?php if ($this->_tpl_vars['cus_status'] == '1'): ?>selected="selected"<?php endif; ?>>未成交</option>
                    <option value="2"<?php if ($this->_tpl_vars['cus_status'] == '2'): ?>selected="selected"<?php endif; ?>>已成交</option>
                </select>
			</li>
            
            <li>
				<label style="width:60px;">会员等级：</label>
				<select class="combox" name="score">
                	<option value="">全部</option>
                	<option value="A" <?php if ($this->_tpl_vars['score'] == 'A'): ?>selected="selected"<?php endif; ?>>A</option>
                    <option value="B"<?php if ($this->_tpl_vars['score'] == 'B'): ?>selected="selected"<?php endif; ?>>B</option>
                    <option value="C"<?php if ($this->_tpl_vars['score'] == 'C'): ?>selected="selected"<?php endif; ?>>C</option>
                    <option value="D"<?php if ($this->_tpl_vars['score'] == 'D'): ?>selected="selected"<?php endif; ?>>D</option>
                </select>
			</li>
            
            <!--<li style="width: 12%;">
				<label style="width:60px;">电话：</label>
				<select class="combox" name="contact">
                	<option value="">全部</option>
                	<option value="有" <?php if ($this->_tpl_vars['contact'] == '有'): ?>selected="selected"<?php endif; ?>>有</option>
                    <option value="无"<?php if ($this->_tpl_vars['contact'] == '无'): ?>selected="selected"<?php endif; ?>>无</option>
                </select>
			</li>
            
            <li style="width: 18%;">
				<label style="width:60px;">备用邮箱：</label>
				<input type="text" name="reserve_email" value="<?php echo $this->_tpl_vars['reserve_email']; ?>
" style="width:120px;" />
			</li>-->
             
<!--            <li style="width: 20%;">
				<label style="width:60px;">固定电话：</label>
				<input type="text" name="telephone" value="<?php echo $this->_tpl_vars['telephone']; ?>
" style="width:80px;" />
			</li>-->
            <!--<li style="width: 20%;">
				<label style="width:60px;">手机：</label>
				<input type="text" name="cellphone" value="<?php echo $this->_tpl_vars['cellphone']; ?>
" style="width:80px;" />
			</li>   -->
            <li style="float:right; margin-left:10px; width:100px;"><a class="button" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/quotecustomer/search/" target="dialog" mask="true" title="查询框"><span>高级检索</span></a></li>    
            <li style="float:right;"><div class="buttonActive" style="float:right;"><div class="buttonContent" style="float:right;"><button type="submit">检索</button></div></div>
            </li>
              
		</ul>
		<!--<div class="subBar">
        <ul>
			
            </ul>
		</div>-->
		
	</div>
	</form>
    
</div>

<form action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/quotecustomer/xls_export" method="post" id="quoteexport">
<div class="pageContent" style="position:relative;">
 
	<div class="panelBar">
		<ul class="toolBar">
        <li class="line">line</li>
        	<?php if (( $this->_tpl_vars['user_hidden']['group_id'] == '5' || $this->_tpl_vars['user_hidden']['group_id'] == '50' || $this->_tpl_vars['user_hidden']['group_id'] == '53' || $this->_tpl_vars['user_hidden']['group_id'] == '68' ) && $this->_tpl_vars['customer_status'] < 2): ?>
			   <li><a class="add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/quotecustomer/add/" target="navTab" rel="quotecustomeradd"><span>添加客户</span></a></li>
              
               <li class="line">line</li>
               <li><a class="add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/quotecustomer/add_quote/" target="navTab" rel="quotecustomeradd"><span>批量添加客户</span></a></li>
      <li class="line">line</li>
               <?php endif; ?>

            <?php if ($this->_tpl_vars['user_hidden']['group_id'] == '5' || $this->_tpl_vars['user_hidden']['group_id'] == '50' || $this->_tpl_vars['user_hidden']['group_id'] == '53' || $this->_tpl_vars['user_hidden']['group_id'] == '68'): ?>
            <?php if (( $this->_tpl_vars['user_hidden']['group_id'] == '5' || $this->_tpl_vars['user_hidden']['group_id'] == '50' || $this->_tpl_vars['user_hidden']['user_id'] == '122' ) && $this->_tpl_vars['customer_status'] < 2): ?>
			<li><a class="add" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/findcustomer/change/" target="dialog" rel="page1"><span>客户信息变更</span></a></li>	
			<li class="line">line</li>
			<?php endif; ?>
			<?php if ($this->_tpl_vars['customer_status'] == 3): ?>
			<li><a class="edit" href="#" id="change_user"><span>批量客户领取</span></a>
			<?php if ($this->_tpl_vars['user_hidden']['group_id'] == '5'): ?>
				<select name="userid" style="font-size:13px;" id="change_user_new">
                   <?php $_from = $this->_tpl_vars['user_lists']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['qf']):
?>
                       <option value="<?php echo $this->_tpl_vars['qf']['user_id']; ?>
"><?php echo $this->_tpl_vars['qf']['user_name']; ?>
</option>
                   <?php endforeach; endif; unset($_from); ?>
                </select>
            <?php endif; ?>
			</li>	
			<li class="line">line</li>
			
			<?php endif; ?>
		<?php endif; ?>
			<!--<li><a class="icon" href="#" id="quoteex" ><span>导出EXCEL</span></a></li>
			<li class="line">line</li>-->
			<?php if ($this->_tpl_vars['customer_status'] == 3): ?>
			<li><span>已认领未成交客户：<?php echo $this->_tpl_vars['unpaid_count']; ?>
</span></li>
			<li><span>已认领成交客户：<?php echo $this->_tpl_vars['paid_count']; ?>
</span></li>
			<li class="line">line</li>
			<li><a href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/quotecustomer/change_list" target="navTab" rel="change_list" fresh="true" ><span>认领客户列表</span></a></li>
			<li class="line">line</li>
			<?php endif; ?>
			<?php if (( $this->_tpl_vars['user_hidden']['group_id'] == '5' || $this->_tpl_vars['user_hidden']['group_id'] == '50' || $this->_tpl_vars['user_hidden']['group_id'] == '53' || $this->_tpl_vars['user_hidden']['group_id'] == '68' ) && $this->_tpl_vars['customer_status'] != 3): ?>
			<?php if ($this->_tpl_vars['customer_status'] != 2): ?>
			<li><a class="icon" href="javascript:;"  id="reasonbtn"><span>变成无效客户</span></a></li>
			<div class="reason" style="display:none;">
				<input type="radio" name="reasonra" value="1" checked="checked">联系不到  
				<input type="radio" name="reasonra" value="2">无需求  
				<input type="radio" name="reasonra" id="other" value="3">其他
				<input type="text" style="width:400px;" name="reason" id="reason"><input type="button" id="button" value="提交移出原因">
			</div>
			<li class="line">line</li>
			<?php else: ?>
			<li><a class="icon" href="javascript:;"  id="youxiaoreasonbtn"><span>变成有效客户</span></a></li>
			<li class="line">line</li>	
			<?php endif; ?>
			<?php endif; ?>
			
            <!--<li><a class="icon" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/quotecustomer/ar/"  ><span>ar</span></a></li>-->
		</ul>
	</div>

	<table class="table" asc="asc" desc="desc" width="98%" layoutH="138">
		<thead>
			<tr>
				<th width="1%"><input type="checkbox" group="customer_ids[]" class="checkboxCtrl" id="check_all"  ></th>
                <th width="2%">编号</th>
                <?php if ($this->_tpl_vars['customer_status'] == 2): ?>
                <th width="5%">无效原因</th>
                <?php endif; ?>
                <th width="4%">添加日期</th>
                <th width="7%" orderField="quote_time" class="asc">询盘日期</th>
                <th width="4%">来源渠道</th> 
                <th width="4%">询盘来源</th>         
                <th width="5%">询盘方式</th>
                <th width="3%">询盘数量</th>
                <th width="3%">客户代码</th>
                <?php if ($this->_tpl_vars['user_hidden']['user_id'] != '113'): ?>
                <?php if ($this->_tpl_vars['customer_status'] != 3 || $this->_tpl_vars['user_hidden']['user_id'] == '1'): ?>
                    <th width="5%">客户名</th>
                    <th width="4%">邮箱</th>
                    <th width="7%">公司</th>
                <?php endif; ?>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['clue'] == 1): ?>
                <th width="5%">培育内容</th>
                <th width="5%">线索数量</th>
                <?php endif; ?>
                <th width="3%">首月发信次数</th>
                <th width="3%">反馈状态</th>
                <th width="3%">报价状态</th>
                <th width="3%">成交状态</th>
                <th width="3%">客户分组</th> 
                <th width="2%">客户等级</th>
                <th width="8%">客户类型</th>
                <?php if ($this->_tpl_vars['clue'] == 1): ?>
                <th width="3%">客户分类</th>
                <?php else: ?>
                    <?php if ($this->_tpl_vars['customer_status'] == 3): ?>
                    <th width="3%">前任业务员</th>
                    <?php else: ?>
                    <th width="3%">业务员</th>
                    <?php endif; ?>
                <?php endif; ?>
                <th width="3%">操作</th>
                
                <!--<th width="3%">广告系列</th>
                <th width="3%">广告组</th>
                <th width="3%">关键词</th>
                <th width="2%">匹配方式</th>
                <th width="2%">电话</th>
                <th width="5%">国家</th> -->
                
                
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
                <?php if ($this->_tpl_vars['customer_status'] == 2): ?>
                <td><?php echo $this->_tpl_vars['ug']['backup']; ?>
</td>
                <?php endif; ?>
                  <?php if ($this->_tpl_vars['clue'] == 1): ?>
                  <td><?php echo $this->_tpl_vars['ug']['updatetime']; ?>
</td>
                  <?php else: ?>
                <td><?php echo $this->_tpl_vars['ug']['insert_time']; ?>
</td>
                  <?php endif; ?>
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
                <?php if ($this->_tpl_vars['user_hidden']['user_id'] != '113'): ?>
                <?php if ($this->_tpl_vars['customer_status'] != 3 || $this->_tpl_vars['user_hidden']['user_id'] == '1'): ?>
                    <td><?php echo $this->_tpl_vars['ug']['customer_name']; ?>
</td>
                    <td style="word-wrap: break-word;"><?php echo $this->_tpl_vars['ug']['email']; ?>
</td>
                    <td><?php echo $this->_tpl_vars['ug']['company']; ?>
</td>
                <?php endif; ?>
                <?php endif; ?>
                  <?php if ($this->_tpl_vars['clue'] == 1): ?>
                  <td><?php echo $this->_tpl_vars['ug']['customer_cultivate']; ?>
</td>
                  <td><?php echo $this->_tpl_vars['ug']['customer_clue_count']; ?>
</td>
                  <?php endif; ?>
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
                <td><?php if ($this->_tpl_vars['ug']['status'] == '1'): ?>未成交<?php elseif ($this->_tpl_vars['ug']['status'] == '2'): ?>已成交<?php endif; ?></td>
                <td align=center><?php echo $this->_tpl_vars['ug']['group_id']; ?>
</td>
                <td>
                	<?php if ($this->_tpl_vars['ug']['score'] >= 743): ?>
                	A
                	<?php elseif (empty ( $this->_tpl_vars['ug']['score'] )): ?>
                	D
                	<?php elseif ($this->_tpl_vars['ug']['score'] <= 75): ?>
                	C
                	<?php elseif ($this->_tpl_vars['ug']['score'] < 743 && $this->_tpl_vars['ug']['score'] > 75): ?>
                	B               	                	
                	<?php endif; ?>
                </td>
                  <td><?php echo $this->_tpl_vars['ug']['customer_background_info']; ?>
</td>
                  <?php if ($this->_tpl_vars['clue'] == 1): ?>
                    <td><?php echo $this->_tpl_vars['ug']['customer_type']; ?>
</td>
                  <?php else: ?>
                      <?php if ($this->_tpl_vars['customer_status'] == 3): ?>
                      <td><?php echo $this->_tpl_vars['ug']['oldsaleman']; ?>
</td>
                      <?php else: ?>
                      <td><?php echo $this->_tpl_vars['ug']['yewu_name']; ?>
</td>
                      <?php endif; ?>
                  <?php endif; ?>
                <td>
                <?php if ($this->_tpl_vars['session_name'] == '助理' && $this->_tpl_vars['ug']['yewu_name'] == '助理'): ?>
                    <a title="编辑" target="navTab" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/quotecustomer/edit-id-<?php echo $this->_tpl_vars['ug']['id']; ?>
.html" class="btnEdit" rel="quotecustomeradd">编辑</a>
                <?php else: ?>
                	<?php if (( $this->_tpl_vars['session_name'] == $this->_tpl_vars['ug']['yewu_name'] || $this->_tpl_vars['user_hidden']['group_id'] == '5' || $this->_tpl_vars['user_hidden']['group_id'] == '50' || $this->_tpl_vars['user_hidden']['group_id'] == '58' || $this->_tpl_vars['user_hidden']['group_id'] == '59' ) && $this->_tpl_vars['session_name'] != '助理'): ?>
                    <?php if (( $this->_tpl_vars['user_hidden']['group_id'] == '5' )): ?>
                    <?php if ($this->_tpl_vars['ug']['status'] == '1'): ?>
                    <a title="删除吗？" target="ajaxTodo" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/quotecustomer/del-id-<?php echo $this->_tpl_vars['ug']['id']; ?>
.html" class="btnDel">删除</a>
                    <?php endif; ?>
                    <?php endif; ?>
                    <a title="编辑" target="navTab" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/quotecustomer/edit-id-<?php echo $this->_tpl_vars['ug']['id']; ?>
.html" class="btnEdit" rel="quotecustomeradd">编辑</a>
                    <?php endif; ?>
                <?php endif; ?>
                </td>
                
                <!--<td><?php echo $this->_tpl_vars['ug']['campaign']; ?>
</td>
                <td><?php echo $this->_tpl_vars['ug']['adgroup']; ?>
</td>
                <td><?php echo $this->_tpl_vars['ug']['keyword']; ?>
</td>
                <td><?php echo $this->_tpl_vars['ug']['criteriontype']; ?>
</td>
                <td><?php echo $this->_tpl_vars['ug']['dianhua']; ?>
</td>
                <td><?php echo $this->_tpl_vars['ug']['country']; ?>
</td>-->
                
                
                
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

<!-- {literal} -->
<script language="javascript">
$("#quoteex").click(function (){
		if($("input[type='checkbox']").is(":checked")){
			alert("即将导出选中数据");
			$("#quoteexport").submit();
		}else{
			alert("请选择导出的数据");
		}
	});
$(document).ready(function()
{	
	$("#reason").focus(function(){
	    $("#other").attr("checked",true); ;
	  });
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
	
	$("#change_user").click(function (){
		var i = 0;
		var check_arr = '';
		var touid = $("#change_user_new").val();
		$("input[name='customer_ids[]']:checkbox:checked").each(function(){ //由于复选框一般选中的是多个,所以可以循环输出
			if(check_arr == ''){
				check_arr += $(this).val();
			}else{
				check_arr += ','+$(this).val();
			}
			++i;
		});	
		
		if(touid){
			var p = 'check_arr-'+check_arr+'-touid-'+touid+'.html';
		}else{
			var p = 'check_arr-'+check_arr+'.html';
		}
		
		if(check_arr ==''){
			alert('必须选择客户');
		}else{
			if(i>50){
				alertMsg.confirm("最多十个客户!");
			}else{
				$.ajax({
					url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/findcustomer/change_add-'+p,
					type:'get', 
					dataType:'json',
					success:function (data, textStatus, jqXHR) {
		                DWZ.ajaxDone(data);
		                navTabPageBreak();
		            }
				});
			}
			
/*				$("#check_arr").val(check_arr);
			$("#touids").val(touid);
			$("#ctou").submit();*/
		}
		
	});
	
	$("#reasonbtn").click(function (){
		
		var touid = $("#newtouid_new").val();
		var check_arr = '';
		$("input[name='customer_ids[]']:checkbox:checked").each(function(){ //由于复选框一般选中的是多个,所以可以循环输出
			if(check_arr == ''){
				check_arr += $(this).val();
			}else{
				check_arr += ','+$(this).val();
			}
		});	
		
		var p = 'check_arr-'+check_arr;
		
		if(check_arr ==''){
			alert('必须选择客户');
		}else{
			$(".reason").css("display","block");
			$("#button").click(function (){
				var reason = $("#reason").val();
				var reasonra = $("input[name='reasonra']:radio:checked").val();
				$(".reason").css("display","none");
				$.ajax({
					url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/quotecustomer/modify_customer',
					type:'get', 
					dataType:'json',
					data:{check_arr:check_arr,reason:reason,reasonra:reasonra},
					success:check_back
				}); 
	/*				$("#check_arr").val(check_arr);
				$("#touids").val(touid);
				$("#ctou").submit();*/
			});
		}
		
	});
	
$("#youxiaoreasonbtn").click(function (){
		var check_arr = '';
		$("input[name='customer_ids[]']:checkbox:checked").each(function(){ //由于复选框一般选中的是多个,所以可以循环输出
			if(check_arr == ''){
				check_arr += $(this).val();
			}else{
				check_arr += ','+$(this).val();
			}
		});	
		
		var p = 'check_arr-'+check_arr;
		
		if(check_arr ==''){
			alert('必须选择客户');
		}else{
			
				$.ajax({
					url:'<?php echo $this->_tpl_vars['__ROOT__']; ?>
/quotecustomer/modify_customer1',
					type:'get', 
					dataType:'json',
					data:{check_arr:check_arr},
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
				navTabPageBreak();
				//$("#dialog").css("display","none");
				//alert("成功，请手动刷新该页面");
				//window.location = "<?php echo $this->_tpl_vars['__ROOT__']; ?>
/#newcustomer";
			}
		}
</script>
<!-- {/literal} -->