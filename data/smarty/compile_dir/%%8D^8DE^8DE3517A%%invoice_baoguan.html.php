<?php /* Smarty version 2.6.22, created on 2024-10-12 17:30:08
         compiled from sale_detail/invoice_baoguan.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/jquery-1.7.2.min.js" type="text/javascript"></script>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>报关单</title>
<link href="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/css/cstown_sys.css" rel="stylesheet" type="text/css" media="screen"/>
</head>


<body>
	<div class="wrap">
    	<div class="QuoteK" style="width:800px;">
       	  
       	 
       	  <div style="width:100%; text-align:center; font-size:14px;">中华人民共和国海关出口货物报关单</div>
          
          <table cellspacing="0" style="border:none; width:100%; margin-top:10px;">
          	<tr>
            	<td colspan="5">预录入编号:</td>
                <td colspan="5">海关编号:</td>
            </tr>
          </table>
          
          <div  class="baoguan">
                	<table class="baoguan" cellspacing="0" border="1" style="border:solid 1px  #000; width:100%; margin-top:10px;">
                    	<tr>
                        	<!-- 所属公司判断 -->
                        	<?php if ($this->_tpl_vars['sale_detail_deliver']['gongsi'] == '小布涂涂'): ?>
                            	<td colspan="3"><b>发货人</b> 2102361253<br />小布涂涂文化创意（大连）股份有限公司</td>
                            <?php elseif ($this->_tpl_vars['sale_detail_deliver']['gongsi'] == '涂涂记'): ?>
                            	<td colspan="3"><b>发货人</b> 2115960J74<br />涂涂记文化创意（大连）有限公司</td>
                            <?php elseif ($this->_tpl_vars['sale_detail_deliver']['gongsi'] == '赛思通'): ?>
                            	<td colspan="3"><b>发货人</b> 2102360J94<br />赛思通（大连）网络科技有限公司</td>
                            <?php else: ?>
                            	<td colspan="3"><b>发货人</b> 2102361253<br />小布涂涂文化创意（大连）股份有限公司</td>
                            <?php endif; ?>
                            
                            <td colspan="3"><b>出口海岸</b><br />上海</td>
                            <td style="width:50px;" colspan="2"><b>出口日期</b><br />&nbsp;</td>
                            <td colspan="2"><b>申报日期</b><br />&nbsp;</td>
                        </tr>
                        <tr>
                        	<td colspan="3"><b>生产销售单位</b> <?php echo $this->_tpl_vars['xinyong_cord']; ?>
<br /><?php echo $this->_tpl_vars['qiye']; ?>
</td>
                            
                            <td colspan="3"><b>运输方式</b><br />航空运输</td>
                            <td colspan="1"><b>运输工具名称</b><br />&nbsp;</td>
                            <td colspan="3"><b>提运单号</b><br />&nbsp;<?php echo $this->_tpl_vars['sale_detail_deliver']['shipping_number']; ?>
</td>
                        </tr>
                        <tr>
                            <td colspan="3"><b>申报单位</b><br />&nbsp;</td>
                            <td colspan="3"><b>监管方式</b><br /><input type="text" value="<?php if ($this->_tpl_vars['sale_detail_deliver']['mianfei']): ?>其他进出口免费<?php else: ?>一般货易<?php endif; ?>" style="border:none;" /></td>
                            <td colspan="2"><b>征免性质</b><br />&nbsp;</td>
                            <td colspan="2"><b>备案号</b><br />&nbsp;</td>
                        </tr>
                        <tr>
                            <td colspan="3"><b>货易国(地区)</b><br /> &nbsp;<?php echo $this->_tpl_vars['area_level_one_id']; ?>
</td>
                            <td colspan="3"><b>运抵国</b><br />&nbsp;<?php echo $this->_tpl_vars['area_level_one_id']; ?>
</td>
                            <td colspan="2"><b>指运港</b><br />&nbsp;</td>
                            <td colspan="2"><b>境内货源地</b><br /><?php echo $this->_tpl_vars['chandi']; ?>
</td>
                        </tr>
                        <tr>
                            <td colspan="2"><b>许可证号</b><br />&nbsp; </td>
                            <?php if ($this->_tpl_vars['freight'] != '' && $this->_tpl_vars['freight'] != 0): ?>
                              <td colspan="2"><b>成交方式</b><br /><input style="border:none;" value="C&F" /></td>
                              <td colspan="2"><b>运费</b><br /><input style="border:none;" value="<?php echo $this->_tpl_vars['currency']; ?>
 <?php echo $this->_tpl_vars['freight']; ?>
" /></td>
                           <?php else: ?>
                              <td colspan="2"><b>成交方式</b><br /><input style="border:none;" value="FOB" /></td>
                              <td colspan="2"><b>运费</b><br />&nbsp; </td>
                           <?php endif; ?>
                            
                            
                            
                            <td colspan="2"><b>保费</b><br />&nbsp;</td>
                            <td colspan="2"><b>杂费</b><br />&nbsp;</td>
                        </tr>
                        <tr>
                            <td colspan="2"><b>合同协议号</b><br /> <?php echo $this->_tpl_vars['sale_detail_deliver']['invoice_number']; ?>
</td>
                            <td colspan="2"><b>件数</b><br />&nbsp;
                            <?php if ($this->_tpl_vars['sale_detail_deliver']['box'] == ""): ?>
                                     1
                                <?php else: ?>
                                     <?php echo $this->_tpl_vars['sale_detail_deliver']['box']; ?>

                                <?php endif; ?>
                            </td>
                            <td colspan="2"><b>包装种类</b><br />纸箱</td>
                            <td colspan="2"><b>毛重(公斤)</b><br />&nbsp;<?php echo $this->_tpl_vars['gross']; ?>
</td>
                            <td colspan="2"><b>净重(公斤)</b><br />&nbsp;<?php echo $this->_tpl_vars['net']; ?>
</td>
                        </tr>
                        <tr>
                            <td colspan="2"><b>集装箱号</b><br />&nbsp; </td>
                            <td colspan="4"><b>境外收货公司</b><br /><?php echo $this->_tpl_vars['sale_detail_deliver']['company']; ?>
</td>
                            <td colspan="4"><b>随附单证</b><br />&nbsp;</td>
                        </tr>
                        <tr>
                            <td colspan="10"><b>标记唛码及备注</b><br />N/M</td>
                        </tr>
                        <tr>
                            <td><b>项号</b></td>
                            <td><b>商品编号</b></td>
                            <td><b>商品名称</b></td>
                            <td><b>规格型号</b></td>
                            <td><b>数量及单位</b></td>
                            <td><b>最终目的国(地区)</b></td>
                            <td><b>单价</b></td>
                            <td><b>总价</b></td>
                            <td><b>币制</b></td>
                            <td><b>备注</b></td>
                        </tr>
                        
                        <?php if ($this->_tpl_vars['order_list']): ?>
                        	<?php $_from = $this->_tpl_vars['order_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['ol']):
?>
                            <tr>
                            	<td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
                            	<td><input type="text" value="<?php echo $this->_tpl_vars['ol']['guonei_code']; ?>
" style="border:none; width:90px;" /></td>
                                <td><input type="text" style="resize:none; width:100px; border:none; font-size:12px;" value="<?php echo $this->_tpl_vars['ol']['name']; ?>
" /><br /><input type="text" style="resize:none; width:100px; border:none; font-size:12px;" value="<?php echo $this->_tpl_vars['ol']['c_name']; ?>
" /><br /><textarea style="width:150px; min-height:110px; border:none; font-size:12px; line-height:18px; overflow:hidden;"><?php echo $this->_tpl_vars['ol']['yaosu']; ?>
</textarea></td>
                                <?php if ($this->_tpl_vars['ol']['order_category'] == 13): ?>
                                <td>
                                <?php if ($this->_tpl_vars['ol']['order_category'] == 13): ?>
                                规格:<br />33cm*13cm<br />型号:<br />13043
                                <?php else: ?>
                                CMA
                                <?php endif; ?>
                                
                                </td>
                                <?php else: ?>
                                <td>无型号</td>
                                <?php endif; ?>
                                <td><input style='border-left:0px;border-top:0px;border-right:0px;border-bottom:1px; width:30px;' value="<?php echo $this->_tpl_vars['ol']['number']; ?>
" /><?php echo $this->_tpl_vars['ol']['unit']; ?>
</td>
                                <td><?php echo $this->_tpl_vars['area_level_one_id']; ?>
</td>
                                <td><input style='border-left:0px;border-top:0px;border-right:0px;border-bottom:1px;' size="4" value="<?php echo $this->_tpl_vars['ol']['currency']; ?>
"><input style='border-left:0px;border-top:0px;border-right:0px;border-bottom:1px;' size="10" value="<?php echo $this->_tpl_vars['ol']['price']; ?>
"></td>
                                <td><input style='border-left:0px;border-top:0px;border-right:0px;border-bottom:1px;' size="4" value="<?php echo $this->_tpl_vars['ol']['currency']; ?>
"><input style='border-left:0px;border-top:0px;border-right:0px;border-bottom:1px;' size="10" value="<?php echo $this->_tpl_vars['ol']['bidding_price']; ?>
"></td>
                                <td><input style='border-left:0px;border-top:0px;border-right:0px;border-bottom:1px;' size="4" value="<?php echo $this->_tpl_vars['ol']['currency']; ?>
"></td>
                                <td>
                                    <?php if ($this->_tpl_vars['ol']['order_category'] == 13): ?>
                                    	<input style='border-left:0px;border-top:0px;border-right:0px;border-bottom:1px;' size="8" value="净重："><br />
                                        <input style='border-left:0px;border-top:0px;border-right:0px;border-bottom:1px;' size="8" value="<?php echo $this->_tpl_vars['zhuangshi']; ?>
"><br />
                                    <?php else: ?>
                                    	<input style='border-left:0px;border-top:0px;border-right:0px;border-bottom:1px;' size="8" value=""><br />
                                        <input style='border-left:0px;border-top:0px;border-right:0px;border-bottom:1px;' size="8" value=""><br />
                                	<?php endif; ?>
                                	
                                	
                                </td>
                            </tr>
                            <?php endforeach; endif; unset($_from); ?>
                        <?php endif; ?>
                        
                        <!--<tr>
                        		<td>1</td>
                                <td><input style="border:none; width:80px;"  value="70189000.00" /></td>
                                <td>
                                <?php if ($this->_tpl_vars['sale_detail_deliver']['production_name'] == 'Imitation Semi-precious stones'): ?>
                                <?php echo $this->_tpl_vars['sale_detail_deliver']['production_name']; ?>
<br />
                                玻璃烫钻饰品<br />
                                0 | 2 装饰服装用 | 灯工方法 | 2MM，3MM，4MM | 铅晶玻璃 | 无品<br />
                                <?php else: ?>
                                <input style="width:110px; border:none;" value="<?php echo $this->_tpl_vars['sale_detail_deliver']['production_name']; ?>
" /><br />
                                <input style="width:100px; border:none;"  value="玻璃烫钻饰品" />
                                <input style="width:100px; border:none;"  value="" />
                                <?php endif; ?>
                                </td>
                                
                                <td>无型号</td>

                                <td><input style="border:none; width:40px;"  value="<?php echo $this->_tpl_vars['number']; ?>
" /> 
                                <?php if ($this->_tpl_vars['sale_detail_deliver']['production_name'] == 'cotton T-shirt'): ?>
                                <input style="border:none; width:40px;" value="件" />
                                <?php else: ?>
                                <input style="border:none; width:40px;" value="个" />
                                <?php endif; ?>
                                </td>
                                <td><?php echo $this->_tpl_vars['area_level_one_id']; ?>
</td>
                                <td><input style='border-left:0px;border-top:0px;border-right:0px;border-bottom:1px;' size="3" value="<?php echo $this->_tpl_vars['currency']; ?>
"><input style='border-left:0px;border-top:0px;border-right:0px;border-bottom:1px; width:50px;' id="price_a"  value="<?php echo $this->_tpl_vars['price']; ?>
" onkeyup="price11();"></td>
                                
                                
                                <td><input style='border-left:0px;border-top:0px;border-right:0px;border-bottom:1px;' size="3" value="<?php echo $this->_tpl_vars['currency']; ?>
"><input style='border-left:0px;border-top:0px;border-right:0px;border-bottom:1px; width:50px;' id="num" value="<?php echo $this->_tpl_vars['goods_value']; ?>
"></td>
                                <td><input style="border:none; width:30px;"  value="USD" /></td>
                                <td>&nbsp;</td>
                            </tr>
                        
                        <tr>-->
                        	<td colspan="10">
                            	<b>特殊关系</b>: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            	<b>价格影响确认</b>：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <b>支持特许权使用费确认</b>：
                            </td>
                        </tr>
                      	<tr>
                        	<td colspan="2"><b>录入员</b><br />&nbsp;</td>
                            <td colspan="2"><b>录入单位</b><br />&nbsp;</td>
                            <td colspan="4"><b>慈申明对以上内容如实申报、依法纳税之法律责任</b><br />&nbsp;</td>
                            <td colspan="2"><b>海关批注及签章</b><br />&nbsp;</td>
                        </tr>
                        <tr>
                        	<td colspan="10"><b>报关人员</b><br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <b>申报单位(签章)</b><br /><br /><br />
                            </td>
                        </tr>
                    </table>
 
                    
                    
                    
                    
                      
       
                                	  
          </div>
          
          
        </div>
</div>

</body>
</html>