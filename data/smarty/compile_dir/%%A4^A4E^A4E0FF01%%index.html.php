<?php /* Smarty version 2.6.22, created on 2015-04-21 11:28:34
         compiled from salary_information/index.html */ ?>
<form id="pagerForm" method="post" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/salary_information/index">
	<input type="hidden" name="pageNum" value="1" />
	<input type="hidden" name="numPerPage" value="<?php echo $this->_tpl_vars['listRows']; ?>
" />
	<input type="hidden" name="orderField" value="group_id" />
	<input type="hidden" name="orderDirection" value="desc" />
    
    <input type="hidden" name="date" value="<?php echo $this->_tpl_vars['date']; ?>
" />
</form>

<div class="pageHeader">
	<form rel="pagerForm" onsubmit="return navTabSearch(this);" action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/salary_information/index" method="get">
	<div class="searchBar">
		<ul class="searchContent">
			<li style="width:25%;">
			<label style="width:60px;">时间：</label>
            <input type="text" size="20" name="date" value="<?php echo $this->_tpl_vars['date']; ?>
"  class="date textInput readonly valid" datefmt="yyyy-MM" />
			</li>
            <li style="float:right;"><div class="buttonActive" style="float:right;"><div style="float:right;" class="buttonContent"><button type="submit">检索</button></div></div></li>
		</ul>
        <div class="subBar">
        <ul>
			<li style="float:right;">
            
            </li>
		</ul>
        </div>
	</div>
	</form>
</div>
<form action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/commission_amount/commission_xls_export" method="post" id="commssion_export">
<div class="pageContent">
<!--	<div class="panelBar">
		<ul class="toolBar">
        <li class="line">line</li>
        <li><a class="icon" href="#" id="commission_ex" ><span>导出EXCEL</span></a></li> 
		<input type="hidden" name="time" value="<?php echo $this->_tpl_vars['value_date']; ?>
">	
		</ul>
	</div>-->
	<table class="list" asc="asc" desc="desc" width="3000" layoutH="138">
		<thead>
        	<tr>
            	<th colspan="9">&nbsp;</th>
                <th colspan="10">补贴及奖金</th>
                <th colspan="1">&nbsp;</th>
                <th colspan="3">扣款</th>
                <th colspan="3">税款</th>
                <th colspan="1">&nbsp;</th>
                <th colspan="1">&nbsp;</th>
                <th colspan="3">&nbsp;</th>
            </tr>
			<tr>
                <th width="1%"><input type="checkbox" group="group_commission[]" class="checkboxCtrl"></th>
				<th width="2%">部门</th>
                <th width="2%">序号</th>
                <th width="3%">月份</th>
                <th width="4%">岗位</th>
                <th width="3%">姓名</th>
                <th width="4%">入职日期</th>
                <th width="3%">基本工资</th>
                <th width="4%">当月级别工资</th>
                <th width="3%">技能补贴</th>
                <th width="3%">岗位补贴</th>
                <th width="3%">工龄工资</th>
                <th width="3%">绩效工资</th>
                <th width="3%">提成总额</th>
                <th width="3%">其它奖励</th>
                <th width="3%">加班费</th>
                <th width="3%">午餐补贴</th>
                <th width="3%">满勤奖</th>
                <th width="3%">小计</th>
                <th width="5%">应发工资合计</th>
                <th width="4%">考勤扣款</th>
                <th width="4%">请假扣款</th>
                <th width="3%">小计</th>
                <th width="4%">社保缴费</th>
                <th width="4%">公积金缴费</th>
                <th width="4%">个人缴费小计</th>
                <th width="4%">税前应发工资合计</th>
                <th width="3%">实发总计</th>
                <th width="3%">税前应发</th>
                <th width="2%">个税</th>
                <th width="5%">税后实发(招商)</th>
			</tr>
		</thead>
		<tbody>
        <?php if ($this->_tpl_vars['salary_list']): ?>
		<?php $_from = $this->_tpl_vars['salary_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['us']):
?>
        <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
">
            <td><input name="group_commission[]" value="<?php echo $this->_tpl_vars['us']['user_id']; ?>
" type="checkbox"></td>
            <td><?php echo $this->_tpl_vars['us']['department']; ?>
</td>
            <td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
            <td><?php echo $this->_tpl_vars['us']['date']; ?>
</td>
            <td><?php echo $this->_tpl_vars['us']['post']; ?>
</td>
            <td><?php echo $this->_tpl_vars['us']['name']; ?>
</td>
            <td><?php echo $this->_tpl_vars['us']['time']; ?>
</td>
            <td style="text-align:right;"><?php echo $this->_tpl_vars['us']['base_pay']; ?>
</td>
            <td style="text-align:right;"><?php echo $this->_tpl_vars['us']['month_money']; ?>
</td>
            <td style="text-align:right;"><?php echo $this->_tpl_vars['us']['skill_money']; ?>
</td>
            <td style="text-align:right;"><?php echo $this->_tpl_vars['us']['post_money']; ?>
</td>
            <td style="text-align:right;"><?php echo $this->_tpl_vars['us']['seniority_pay']; ?>
</td>
            <td style="text-align:right;"><?php echo $this->_tpl_vars['us']['fudong']; ?>
</td>
            <td style="text-align:right;"><?php echo $this->_tpl_vars['us']['tichengzonge']; ?>
</td>
            <td style="text-align:right;"><?php echo $this->_tpl_vars['us']['qitabutie']; ?>
</td>
            <td style="text-align:right;"><?php echo $this->_tpl_vars['us']['jiabanfei']; ?>
</td>
            <td style="text-align:right;"><?php echo $this->_tpl_vars['us']['wucanbutie']; ?>
</td>
            <td style="text-align:right;"><?php echo $this->_tpl_vars['us']['manqinjiang']; ?>
</td>
            <td style="text-align:right;"><?php echo $this->_tpl_vars['us']['jiangjinxiaoji']; ?>
</td>
            <td style="text-align:right;"><?php echo $this->_tpl_vars['us']['yingfagongzi']; ?>
</td>
            <td style="text-align:right;"><?php echo $this->_tpl_vars['us']['kaoqinkoufei']; ?>
</td>
            <td style="text-align:right;"><?php echo $this->_tpl_vars['us']['qingjiakoufei']; ?>
</td>
            <td style="text-align:right;"><?php echo $this->_tpl_vars['us']['koufeixiaoji']; ?>
</td>
            <td style="text-align:right;"><?php echo $this->_tpl_vars['us']['shebaofei']; ?>
</td>
            <td style="text-align:right;"><?php echo $this->_tpl_vars['us']['gongjijin']; ?>
</td>
            <td style="text-align:right;"><?php echo $this->_tpl_vars['us']['gerenxiaoji']; ?>
</td>
            <td style="text-align:right;"><?php echo $this->_tpl_vars['us']['shuiqiangongziheji']; ?>
</td>
            <td style="text-align:right;"><?php echo $this->_tpl_vars['us']['shifazongji']; ?>
</td>
            <td style="text-align:right;"><?php echo $this->_tpl_vars['us']['shuiqianyingfa']; ?>
</td>
            <td style="text-align:right;"><?php echo $this->_tpl_vars['us']['geshui']; ?>
</td>
            <td style="text-align:right;"><?php echo $this->_tpl_vars['us']['shuihouyingfa']; ?>
</td>

        </tr>
        <?php endforeach; endif; unset($_from); ?>
        <?php endif; ?>
            
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