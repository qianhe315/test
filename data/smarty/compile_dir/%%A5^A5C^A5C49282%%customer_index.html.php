<?php /* Smarty version 2.6.22, created on 2016-03-04 14:43:13
         compiled from map/customer_index.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=7" />
<title>西象ERP管理系统</title>
<link href="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/themes/default/style.css" rel="stylesheet" type="text/css" media="screen"/>

<script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/jquery-1.7.2.js" type="text/javascript"></script>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<div class="pageHeader">
 
<form action="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/map/xls_export" method="post" id="new_export_new">
	<a class="icon" href="#" id="create_execl" ><button type="button" ><span>导出EXCEL</span></button></a>
  <div class="pageContent">
  <table class="table" width="1300" layoutH="138" border="1">
    <thead>
      <tr>
        <input type="hidden" name="id" id="area_id" value="<?php echo $this->_tpl_vars['id']; ?>
" />
     
        <th width="3%">编号</th>
        <th width="7%">询盘日期</th>
        <th width="4%">客户代码</th>
        <th width="8%">客户名</th>
        <th width="8%">公司</th>
        <th width="5%">城市</th>
        <th width="8%">地址</th>
        <th width="8%">付款金额（14年）</th>
        <th width="8%">付款金额（15年）</th>
        <th width="8%">付款金额（16年）</th>
        <th width="4%">
        <?php if ($this->_tpl_vars['type'] == 1): ?>
        	业务员
        <?php else: ?>
        	<select style="font-size:20px; font-style:normal; font-weight:100;" id="user_id" onchange="change_name()">
            	<option value="">业务员</option>
                <?php $_from = $this->_tpl_vars['group_u']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['val']):
?>
            	<option <?php if ($this->_tpl_vars['u_id'] == $this->_tpl_vars['val']['user_id']): ?>selected="selected"<?php endif; ?> value="<?php echo $this->_tpl_vars['val']['user_id']; ?>
"><?php echo $this->_tpl_vars['val']['user_name']; ?>
</option>
                <?php endforeach; endif; unset($_from); ?>
            </select>
        <?php endif; ?>
        </th>
      </tr>
    </thead>
    
      <tbody id="list">  
       <?php if ($this->_tpl_vars['c_r_list']): ?>
                 <?php $_from = $this->_tpl_vars['c_r_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['dis']):
?>
                  <tr target="sid_user" rel="<?php echo $this->_tpl_vars['k']+1; ?>
" style="height:auto;">
                   <td><?php echo $this->_tpl_vars['k']+1; ?>
</td>
                    <td><?php echo $this->_tpl_vars['dis']['insert_time']; ?>
</td>
                    <td><?php echo $this->_tpl_vars['dis']['customer_code']; ?>
</td>
                    <td><?php echo $this->_tpl_vars['dis']['customer_name']; ?>
</td>
                    <td><?php echo $this->_tpl_vars['dis']['company']; ?>
</td>
                    <td><?php echo $this->_tpl_vars['dis']['city']; ?>
</td>
                    <td><?php echo $this->_tpl_vars['dis']['address']; ?>
</td>
                    <td><?php echo $this->_tpl_vars['dis']['all_money14']; ?>
</td>
                    <td><?php echo $this->_tpl_vars['dis']['all_money15']; ?>
</td>
                    <td><?php echo $this->_tpl_vars['dis']['all_money16']; ?>
</td>
                    <td><?php echo $this->_tpl_vars['dis']['yewu_name']; ?>
</td>
                  </tr>
                 <?php endforeach; endif; unset($_from); ?>
            <?php endif; ?>
      </tbody>
	</table>
  	<input type="hidden" id="ids" name="all_id" value="<?php echo $this->_tpl_vars['ids']; ?>
" />
</form>
<div id="pagecount"></div> 
</div>

<script type="text/javascript">
//修改业务员名称
function change_name(){
	window.location.href='<?php echo $this->_tpl_vars['__ROOT__']; ?>
/map/customer_index-ids-'+$("#area_id").val()+'-u_id-'+$("#user_id").val()+'.html';
}
$("#create_execl").click(function (){
	if($("#ids").val()!=''){
		alert("即将导出选中数据");
		$("#new_export_new").submit();
	}else{
		alert("请选择导出的数据");
	}
});

/*
var curPage = 1; //当前页码 
var total,pageSize,totalPage; //总记录数，每页显示数，总页数 
//获取数据 
var x = document.getElementsByName("id")[0].value;

function getData(page){  
    $.ajax({ 
        type: 'POST', 
        url: '<?php echo $this->_tpl_vars['__ROOT__']; ?>
/national_distribution/page', 
        data: {'pageNum':page-1,'id':x}, 
        dataType:'json', 
        beforeSend:function(){ 
            $("#list").append("<li id='loading'>loading...</li>");//显示加载动画 
        }, 
        success:function(json){ 
            $("#list").empty();//清空数据区 
            total = json.total; //总记录数 
            pageSize = json.pageSize; //每页显示条数 
            curPage = page; //当前页 
            totalPage = json.totalPage; //总页数 
            var li = ""; 
            var list = json.list; 
            $.each(list,function(index,array){ //遍历json数据列
				li += "<tr target=sid_user>";	
				li += "<td>" + array['id'] + "</td>";
				li += "<td>" + array['time'] + "</td>";
				li += "<td>" + array['customer_code'] + "</td>";
				li += "<td>" + array['customer_name'] + "</td>";
				li += "<td>" + array['company'] + "</td>";
				li += "<td>" + array['country'] + "</td>";
				li += "<td>" + array['sales_name'] + "</td>";				
				li += "</tr>";
               // li += array['author'] + array['time'] + 'at' + array['time1'] + array['text']; 
            }); 
            $("#list").append(li); 
        }, 
        complete:function(){ //生成分页条 
            getPageBar(); 
        }, 
        error:function(){ 
           // alert("数据加载失败"); 
        } 
    }); 
}

//获取分页条 
function getPageBar(){ 

    //页码大于最大页数 
    if(curPage>totalPage) curPage=totalPage; 
    //页码小于1 
    if(curPage<1) curPage=1; 
    pageStr = "<span></span>"; 
     
    //如果是第一页
	
    if(curPage==1){ 
        pageStr += "<span> |< </span><span> < </span>"; 
    }else{ 
        pageStr += "<span><a href='javascript:void(0)' rel='1'> |< </a></span>"; 
        pageStr += "<span><a href='javascript:void(0)' rel='"+(curPage-1)+"'> < </a></span>"; 
    } 
	
	for($i=1;$i<=totalPage;$i++){
		 if($i!=curPage){
		    pageStr +="<span><a href='javascript:void(0)' rel='" + $i + "'> " + $i + "</a></span>";
		 }else{
		    pageStr +="<span> " + $i + "</span>";
		 }
	}	
	
     
    //如果是最后页 
    if(curPage>=totalPage){ 
        pageStr += "<span> > </span><span> >| </span>"; 
    }else{ 
        pageStr += "<span><a href='javascript:void(0)' rel='"+(parseInt(curPage)+1)+"'> > </a></span>";
		
		pageStr += "<span><a href='javascript:void(0)' rel='"+totalPage+"'> >| </a></span>"; 
    } 
         
    $("#pagecount").html(pageStr); 
} 

$(function(){ 
    getData(1); 
    $("#pagecount span a").live('click',function(){ 
        var rel = $(this).attr("rel"); 
        if(rel){ 
            getData(rel); 
        } 
    }); 
});*/

</script>