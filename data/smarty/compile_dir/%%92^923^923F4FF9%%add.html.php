<?php /* Smarty version 2.6.22, created on 2014-04-29 09:12:22
         compiled from sales_leads/add.html */ ?>
<div class="pageContent">
  <form method="post" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm required-validate" onsubmit="return validateCallback(this, navTabAjaxDone)"  >
    <div class="pageFormContent" layoutH="58">
      <div class="unit">
        <label>客户代码：</label>
        <input type="text" size="30" />
      </div>
      <div class="divider">divider</div>
      <div class="unit">
        <label>客户名：</label>
        <input type="text" size="30" readonly="readonly" />
      </div>
      <div class="divider">divider</div>
      <div class="unit">
        <label>公司：</label>
        <input type="text" size="30" readonly="readonly" />
      </div>
      <div class="divider">divider</div>
      <div class="unit">
        <label>来源方式：</label>
        <input type="text" size="30" readonly="readonly" />
      </div>
      <div class="divider">divider</div>
      <div class="unit">
       <label>开始时间：</label>
       <input type="text"  name="birthday" readonly="true"  class="date required" value="<?php echo $this->_tpl_vars['userinfo']['birthday']; ?>
"/>
      </div>
      <div class="divider">divider</div>
      <div class="unit">
       <label>重要程度：</label>
       <select class="combox">
       <option value="" >请选择</option>
       <option value="1" >一般</option>
       <option value="2" >有意向</option>
       <option value="3" >重点</option>
       <option value="4" >紧急</option>
       </select>
      </div>
      <div class="divider">divider</div>
      <div class="unit">
       <label>销售阶段：</label>
       <select class="combox">
       <option value="" >请选择</option>
       <option value="1" >联系确认</option>
       <option value="2" >初期沟通</option>
       <option value="3" >分析需求</option>
       <option value="4" >设计确定</option>
       <option value="5" >订单流程</option>
       <option value="6" >成交意向</option>
       <option value="7" >等待付款</option>
       </select>
      </div>
      <div class="divider">divider</div>
      <div class="unit">
       <label>成功可能性：</label>
       <select class="combox">
       <option value="" >请选择</option>
       <option value="1" >20%</option>
       <option value="2" >50%</option>
       <option value="3" >80%</option>
       </select>
      </div>
      <div class="divider">divider</div>
      <div class="unit">
       <label>客户需求：</label>
       <select class="combox">
       <option value="" >请选择</option>
       <option value="5" >不明</option>
       <option value="1" >定制烫图</option>
       <option value="2" >stock烫图</option>
       <option value="3" >材料</option>
       <option value="4" >设计方案</option>
       </select>
      </div>
      <div class="divider">divider</div>
      <div class="unit">
       <label>状态：</label>
       <select class="combox">
       <option value="" >跟进中</option>
       <option value="1" >已完成</option>
       <option value="2" >已放弃</option>
       <option value="3" >搁置挂起</option>
       </select>
      </div>
      <div class="divider">divider</div>
  
            
    </div>
    <div class="formBar">
      <ul>
        <li>
          <div class="buttonActive">
            <div class="buttonContent">
              <button type="button"  id="submit_add">确认添加</button>
            </div>
          </div>
        </li>
        <li> </li>
      </ul>
    </div>
  </form>
</div>