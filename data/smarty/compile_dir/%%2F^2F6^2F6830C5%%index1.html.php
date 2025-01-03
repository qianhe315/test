<?php /* Smarty version 2.6.22, created on 2015-09-24 11:54:42
         compiled from commission_amount/index1.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/commission_amount/index">
	<input type="hidden" name="pageNum" value="1" />
	<input type="hidden" name="numPerPage" value="<?php echo $this->_tpl_vars['listRows']; ?>
" />
	<input type="hidden" name="orderField" value="group_id" />
	<input type="hidden" name="orderDirection" value="desc" />
    
    <input type="hidden" name="exchangerate_name" value="<?php echo $this->_tpl_vars['exchangerate_name']; ?>
" />
</form>

<div class="pageHeader">
	<form rel="pagerForm" onsubmit="return navTabSearch(this);" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/commission_amount1/index" method="get">
	<div class="searchBar">
		<ul class="searchContent">
			
            <li style="width:90%;">
			<label style="width:300px;">实际成本=生产成本-成本扣减+撤销单打板成本</label>
            <label style="width:250px;">毛利=净收款额-实际成本-运费增添-运费</label>
            <label style="width:300px;">实发金额=毛利*提成比例-其他扣款(提成金额*0.05)</label>
			</li>

            <li style="width:35%;">
			<label style="width:60px;">时间：</label>
            <input type="text" size="20" name="value_date" value="<?php echo $this->_tpl_vars['value_date']; ?>
"  class="date textInput readonly valid" datefmt="yyyy-MM" />
			</li>
            <li style="float:right;"><div class="buttonActive" style="float:right;"><div style="float:right;" class="buttonContent"><button type="submit">检索</button></div></div></li>
		</ul>
        <!--<div class="subBar">
            <ul>
                <li style="float:right;">
                
                </li>
            </ul>
        </div>-->
	</div>
	</form>
</div>
<form action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/commission_amount/commission_xls_export" method="post" id="commssion_export">
<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
        <li class="line">line</li>
        <li><a class="icon" href="#" id="commission_ex" ><span>导出EXCEL</span></a></li> 
		<input type="hidden" name="time" value="<?php echo $this->_tpl_vars['value_date']; ?>
">	
		</ul>
	</div>
	<table class="table" width="1680" layoutH="138">
		<thead>
			<tr>
                <th width="2%"><input type="checkbox" group="group_commission[]" class="checkboxCtrl"></th>
				<th width="2%">编1号</th>
                <th width="4%">姓名</th>
                <th width="5%">已收账款</th>
                <th width="4%">手续费</th>
                <th width="6%">当月汇率(美元)</th>
                <th width="6%">当月汇率(欧元)</th>
                <th width="5%">净收款额</th>
                <th width="5%">生产成本</th>
                <th width="4%">成本扣减</th>
                <th width="4%">销售放图</th>
                <th width="4%">放图成本</th>
                <th width="4%">低于起定量成本扣除</th>
                <th width="6%">撤销单打板成本</th>
                <th width="5%">实际成本</th>
                <th width="4%">运费增添</th>
                <th width="4%">运费支出</th>
                <th width="4%">运费收入位置</th>
                <th width="4%">毛利</th>
                <th width="5%">利润比率</th>
                <th width="5%">提成比例</th>
                <th width="5%">提成金额</th>
                <th width="5%">运费奖惩</th>
                <th width="5%">实发金额</th>
			</tr>
		</thead>
		<tbody>
        <?php if ($this->_tpl_vars['user']): ?>
		<?php $_from = $this->_tpl_vars['user']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['us']):
?>
        <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
">
            <td><input name="group_commission[]" value="<?php echo $this->_tpl_vars['us']['user_id']; ?>
" type="checkbox"></td>
            <td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
            <td><?php echo $this->_tpl_vars['us']['user_name']; ?>
</td>
            <td style="text-align:right;"><?php echo $this->_tpl_vars['us']['amount_payable']; ?>
</td>
            <td style="text-align:right;"><?php echo $this->_tpl_vars['us']['poundage']; ?>
</td>
            <td style="text-align:right;"><?php echo $this->_tpl_vars['us']['exchangerate_finance']; ?>
</td>
            <td style="text-align:right;"><?php echo $this->_tpl_vars['us']['exchangerate_finance01']; ?>
</td>
            <td style="text-align:right;"><?php echo $this->_tpl_vars['us']['jingshoukuane']; ?>
</td>
            <td style="text-align:right;"><?php echo $this->_tpl_vars['us']['factory_total_cost']; ?>
</td>
            <td style="text-align:right;"><?php echo $this->_tpl_vars['us']['chengbenjiankou']; ?>
</td>
            <td style="text-align:right;"><?php echo $this->_tpl_vars['us']['design']; ?>
</td>
            <td style="text-align:right;"><?php echo $this->_tpl_vars['us']['design_num']; ?>
</td>
            <td style="text-align:right;"><?php echo $this->_tpl_vars['us']['chengben_kouchu_num']; ?>
</td>
            <td style="text-align:right;"><?php echo $this->_tpl_vars['us']['chexiao_shuliang']; ?>
</td>
            <td style="text-align:right;"><?php echo $this->_tpl_vars['us']['shijichengben']; ?>
</td>
            <td style="text-align:right;"><?php echo $this->_tpl_vars['us']['yunfeizengtian']; ?>
</td>
            <td style="text-align:right;"><?php echo $this->_tpl_vars['us']['yunfei']; ?>
</td>
            <td style="text-align:right;"><?php echo $this->_tpl_vars['us']['renminbi_yunfei']; ?>
</td>
            <td style="text-align:right;"><?php echo $this->_tpl_vars['us']['maoli']; ?>
</td>
            <td style="text-align:right;"><?php echo $this->_tpl_vars['us']['lirunbilu']; ?>
%</td>
            <td style="text-align:right;"><?php echo $this->_tpl_vars['us']['proportion']; ?>
</td>
            <td style="text-align:right;"><?php echo $this->_tpl_vars['us']['royalty_amount']; ?>
</td>
            <td style="text-align:right;"><?php echo $this->_tpl_vars['us']['yunfei_jiangcheng']; ?>
</td>
            <td style="text-align:right;"><?php echo $this->_tpl_vars['us']['shifaticheng']; ?>
</td>
            
        </tr>
        <?php endforeach; endif; unset($_from); ?>
        <?php endif; ?>
            <td>总计</td>
            <td></td>
            <td></td>
            <td style="text-align:right;">$<?php echo $this->_tpl_vars['shoukuanzongji']; ?>
</td>
            <td style="text-align:right;">$<?php echo $this->_tpl_vars['shouxufeizongji']; ?>
</td>
            <td></td>
            <td></td>
            <td style="text-align:right;"><?php echo $this->_tpl_vars['jingshoukuanezongji']; ?>
</td>
            <td style="text-align:right;"><?php echo $this->_tpl_vars['chengbenzongji']; ?>
</td>
            <td style="text-align:right;"><?php echo $this->_tpl_vars['chengbenjiankou_zongji']; ?>
</td>
            <td style="text-align:right;"><?php echo $this->_tpl_vars['xiaoshoufangtu_zongji']; ?>
</td>
            <td style="text-align:right;"><?php echo $this->_tpl_vars['fangtuchengben_zongji']; ?>
</td>
            <td style="text-align:right;"><?php echo $this->_tpl_vars['chengben_kouchu_num_zongji']; ?>
</td> 
            <td style="text-align:right;"><?php echo $this->_tpl_vars['chexiao_shuliang_zongji']; ?>
</td>
            <td style="text-align:right;"><?php echo $this->_tpl_vars['shijichengben_zongji']; ?>
</td>
            <td style="text-align:right;"><?php echo $this->_tpl_vars['yunfeizengtian_zongji']; ?>
</td>
            <td style="text-align:right;"><?php echo $this->_tpl_vars['yunfei_zongji']; ?>
</td>
            <td style="text-align:right;"><?php echo $this->_tpl_vars['renminbi_yunfei_zongji']; ?>
</td>
            <td style="text-align:right;"><?php echo $this->_tpl_vars['maolizongji']; ?>
</td>
            <td style="text-align:right;"></td>
            <td style="text-align:right;"></td>
            <td style="text-align:right;"><?php echo $this->_tpl_vars['tichengzongji']; ?>
</td>
            <td style="text-align:right;"><?php echo $this->_tpl_vars['yunfei_jiangcheng_zongji']; ?>
</td>
            <td style="text-align:right;"><?php echo $this->_tpl_vars['shifatichengzongji']; ?>
</td>
         </tbody>
	</table>
	<div class="panelBar">
		<div class="pages">
      		  
			<span>   每页显示<?php echo $this->_tpl_vars['listRows']; ?>
条，</span>
			<span>共<?php echo $this->_tpl_vars['total_count']; ?>
条</span>
		</div>
		
		<div class="pagination" targetType="navTab" totalCount="<?php echo $this->_tpl_vars['total_count']; ?>
" numPerPage="<?php echo $this->_tpl_vars['listRows']; ?>
" pageNumShown="10" currentPage="<?php echo $this->_tpl_vars['current_page']; ?>
"></div>

	</div>
</form>
<script language="javascript">

$("#commission_ex").click(function (){
		if($("input[type='checkbox']").is(":checked")){
			alert("即将导出选中数据");
			$("#commssion_export").submit();
		}else{
			alert("请选择导出的数据");
		}
	});
</script>