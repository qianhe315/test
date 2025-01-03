<?php /* Smarty version 2.6.22, created on 2017-02-07 11:23:45
         compiled from admin/sale_manage.html */ ?>
<div class="pageContent">
    <div class="pageFormContent" layoutH="58">
    <label style=" font-size:14px; font-weight: bold;" >系统内金额处理</label>
      <div class="unit">
       <div class="buttonActive">
         <div class="buttonContent">
          <a class="edit" title="获取成本存入订单表?" posttype="string" rel="page1" target="ajaxTodo" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/sale_manage/change_cb"><button type="button">批量成本金额修改</button></a>
         </div>
        </div>
      </div>
      <div class="unit">
       <div class="buttonActive">
         <div class="buttonContent">
          <a class="edit" title="批量把成本获取然后存入发票表?" posttype="string" rel="page1" target="ajaxTodo" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/sale_manage/change"><button type="button">发票成本批量修改</button></a>
         </div>
        </div>
      </div>
      <div class="unit">
       <div class="buttonActive">
         <div class="buttonContent">
          <a class="edit" title="处理多订单和起来的货值?" posttype="string" rel="page1" target="ajaxTodo" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/sale_manage/goods_value"><button type="button">发货货值处理</button></a>
         </div>
        </div>
      </div>
       <div class="unit">
       <div class="buttonActive">
         <div class="buttonContent">
          <a class="edit" title="批量把销售明细表的付款金额去符号转化为美元存入本表?" posttype="string" rel="page1" target="ajaxTodo" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/sale_manage/add_newmoney"><button type="button">美元化付款金额</button></a>
         </div>
        </div>
       <div class="unit">
       <div class="buttonActive">
         <div class="buttonContent">
          <a class="edit" title="批量把新表多条付款求和存入SD表paid_money?" posttype="string" rel="page1" target="ajaxTodo" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/sale_manage/paid_money_num"><button type="button">多条付款求和</button></a>
         </div>
        </div>        
      </div> 
   
      <div class="unit">
       <div class="buttonActive">
         <div class="buttonContent">
          <a class="edit" title="保存成本到明细?" posttype="string" rel="page1" target="ajaxTodo" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/sale_manage/factory_cost_total"><button type="button">保存成本到明细</button></a>
         </div>
        </div>
      </div>
        <div class="divider">divider</div>    
     <label style=" font-size:14px; font-weight: bold;" >系统内数据处理</label>
     <div class="unit">
       <div class="buttonActive">
         <div class="buttonContent">
          <a class="edit" title="更新erp数据库图片相关路径?" posttype="string" rel="page1" target="ajaxTodo" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/sale_manage/erp_change"><button type="button">系统IP变更更新数据库图片IP路径</button></a>
         </div>
        </div>
      </div>
     <div class="unit">
       <div class="buttonActive">
         <div class="buttonContent">
          <a class="edit" title="把已生成发票的订单中存入发票号?" posttype="string" rel="page1" target="ajaxTodo" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/sale_manage/aa"><button type="button">订单同步发票号</button></a>
         </div>
        </div>
      </div>
      <div class="unit">
       <div class="buttonActive">
         <div class="buttonContent">
          <a class="edit" title="批量处理stock的使用状态?" posttype="string" rel="page1" target="ajaxTodo" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/sale_manage/stock_status"><button type="button">stock状态处理</button></a>
         </div>
        </div>
      </div>

      <div class="unit">
       <div class="buttonActive">
         <div class="buttonContent">
          <a class="edit" title="订单做货时间处理，3种不同查询得出，要求按次序1?" posttype="string" rel="page1" target="ajaxTodo" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/sale_manage/order_time1"><button type="button">订单做货时间处理1</button></a>
         </div>
        </div>
      </div>
      <div class="unit">
       <div class="buttonActive">
         <div class="buttonContent">
          <a class="edit" title="订单做货时间处理，3种不同查询得出，要求按次序2?" posttype="string" rel="page1" target="ajaxTodo" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/sale_manage/order_time2"><button type="button">订单做货时间处理2</button></a>
         </div>
        </div>
      </div>
      <div class="unit">
       <div class="buttonActive">
         <div class="buttonContent">
          <a class="edit" title="订单做货时间处理，3种不同查询得出，要求按次序3?" posttype="string" rel="page1" target="ajaxTodo" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/sale_manage/order_time3"><button type="button">订单做货时间处理3</button></a>
         </div>
        </div>
      </div>
      <div class="unit">
       <div class="buttonActive">
         <div class="buttonContent">
          <a class="edit" title="把导入表中的DHL和UPS的时间处理为系统规范时间?" posttype="string" rel="page1" target="ajaxTodo" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/sale_manage/processing_time_express"><button type="button">快递时间处理</button></a>
         </div>
        </div>
      </div>
      <div class="unit">
       <div class="buttonActive">
         <div class="buttonContent">
          <a class="edit" title="确定处理旧销售明细导入?" posttype="string" rel="page1" target="ajaxTodo" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/sale_manage/old_sale_detail"><button type="button">旧销售明细导入</button></a>
         </div>
        </div>
      </div>    
      <div class="unit">
       <div class="buttonActive">
         <div class="buttonContent">
          <a class="edit" title="点击修改客户表老客户变更时间，获取付款最小时间?" posttype="string" rel="page1" target="ajaxTodo" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/sale_manage/old_change_time"><button type="button">变老客户时间更新</button></a>
         </div>
        </div>
      </div>
      <div class="unit">
       <div class="buttonActive">
         <div class="buttonContent">
          <a class="edit" title="点击添加销售明细最早的付款时间?" posttype="string" rel="page1" target="ajaxTodo" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/sale_manage/new_sale_detail_time"><button type="button">销售明细表付款时间添加</button></a>
         </div>
        </div>
      </div>                    
   <div class="unit">
       <div class="buttonActive">
         <div class="buttonContent">
          <a class="edit" title="同步报价表的订单号?" posttype="string" rel="page1" target="ajaxTodo" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/sale_manage/order_number_insert"><button type="button">同步报价表的订单号</button></a>
         </div>
        </div>
      </div>
    
      <div class="unit">
       <div class="buttonActive">
         <div class="buttonContent">
          <a class="edit" title="获得销售明细表的最小付款时间?" posttype="string" rel="page1" target="ajaxTodo" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/sale_manage/sale_time_min"><button type="button">明细表最小时间</button></a>
         </div>
        </div>
      </div>    
    <div class="divider">divider</div>
   <label style=" font-size:14px; font-weight: bold;" >数据插入网站</label>
   <div class="unit">
       <div class="buttonActive">
         <div class="buttonContent">
          <a class="edit" title="清空网站订单表和发票中状态为2的，然后把系统插入网站?" posttype="string" rel="page1" target="ajaxTodo" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/sale_manage/invoice_old"><button type="button">系统订单发票插入网站</button></a>
         </div>
        </div>
      </div>
     <div class="unit">
       <div class="buttonActive">
         <div class="buttonContent">
          <a class="edit" title="比对customer_id表的发票id最大值，没有的发票号存入网站的发票表和订单表?" posttype="string" rel="page1" target="ajaxTodo" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/sale_manage/invoice_new"><button type="button">系统订单发票查询插入网站</button></a>
         </div>
        </div>
      </div> 
      
       <div class="unit">
       <div class="buttonActive">
         <div class="buttonContent">
          <a class="edit" title="先循环发票表把6个金额相关查询插入网站，再循环销售明细表把4个金额相关查询插入网站?" posttype="string" rel="page1" target="ajaxTodo" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/sale_manage/invoice_old_1"><button type="button">发票销售明细金额相关查询插入</button></a>
         </div>
        </div>
      </div>
       <div class="unit">
       <div class="buttonActive">
         <div class="buttonContent">
          <a class="edit" title="发货信息插入网站shipping表?" posttype="string" rel="page1" target="ajaxTodo" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/sale_manage/shipping"><button type="button">发货信息插入网站</button></a>
         </div>
        </div>
      </div> 
      <div class="unit">
       <div class="buttonActive">
         <div class="buttonContent">
          <a class="edit" title="网站订单先清空再循环插入系统中有发票号的订单?" posttype="string" rel="page1" target="ajaxTodo" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/sale_manage/insertion_order_cycle"><button type="button">网站订单循环插入</button></a>
         </div>
        </div>
      </div> 
      <div class="unit">
       <div class="buttonActive">
         <div class="buttonContent">
          <a class="edit" title="清空发票表后把旧系统信息插入网站发票表?" posttype="string" rel="page1" target="ajaxTodo" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/sale_manage/old"><button type="button">旧系统信息插入网站</button></a>
         </div>
        </div>
      </div>
      <div class="unit">
       <div class="buttonActive">
         <div class="buttonContent">
          <a class="edit" title="更新erp_web的发票表的付款信息?" posttype="string" rel="page1" target="ajaxTodo" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/sale_manage/erp_web"><button type="button">付款信息插入网站发票表</button></a>
         </div>
        </div>
      </div>    
     <div class="divider">divider</div>
	 <label style=" font-size:14px; font-weight: bold;" >获取601图片</label>
     <div class="unit">
       <div class="buttonActive">
         <div class="buttonContent">
          <a class="edit" title="获取601图片数据?" posttype="string" rel="page1" target="ajaxTodo" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/sale_manage/image_601"><button type="button">获取601图片数据</button></a>
         </div>
        </div>
      </div> 
	  
      <div class="divider">divider</div>
       <label style=" font-size:14px; font-weight: bold;  width:300px" >601报价里面需要的图片路径插入数据库</label>
      <div class="unit">
       <div class="buttonActive">
         <div class="buttonContent">
          <a class="edit" title="获取601图片?" posttype="string" rel="page1" target="ajaxTodo" href="<?php echo $this->_tpl_vars['__ROOT__']; ?>
/sale_manage/insert_image_way"><button type="button">获取601图片按钮</button></a>
         </div>
        </div>
      </div> 
	  
   </div>
 </div>


<script type="text/javascript" language="javascript">
</script>