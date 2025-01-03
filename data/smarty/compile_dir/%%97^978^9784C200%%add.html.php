<?php /* Smarty version 2.6.22, created on 2014-08-04 13:25:37
         compiled from contact_record/add.html */ ?>
<div class="pageContent">
  <form method="post" action="<?php echo $this->_tpl_vars['act']; ?>
" class="pageForm required-validate" onsubmit="return validateCallback(this, navTabAjaxDone)"  >
    <div class="pageFormContent" layoutH="58" style="width:40%; float:left;">
      <div class="unit">
        <label>客户代码：</label>
        <input type="text" size="30" />
      </div>
      <div class="divider">divider</div>
      <div class="unit">
       <label>时间：</label>
       <input type="text"  name="birthday" readonly="true"  class="date required" value="<?php echo $this->_tpl_vars['userinfo']['birthday']; ?>
"/>
      </div>
       <div class="divider">divider</div>
      <div class="unit">
       <label>客户需求：</label>
       <select class="combox">
       <option value="" >请选择</option>
       <option value="1" >销售机会中选择的客户需求</option>
       </select>
      </div>
      <div class="divider">divider</div>
      <div class="unit">
       <label>销售类型：</label>
       <select class="combox">
       <option value="" >请选择</option>
       <option value="1" >销售联系</option>
       <option value="2" >客户关怀</option>
       <option value="3" >售后回访</option>
       <option value="4" >投诉回访</option>
       <option value="5" >售后回访</option>
       <option value="6" >服务支持</option>
       <option value="7" >维修维护</option>
       <option value="8" >客户投诉</option>
       </select>
      </div>
      <div class="divider">divider</div>
      <div class="unit">
       <label>联系方式：</label>
       <select class="combox">
       <option value="" >请选择</option>
       <option value="1" >邮件</option>
       <option value="2" >电话</option>
       <option value="3" >上门</option>
       </select>
      </div>
      <div class="divider">divider</div>
      <div class="unit">
       <label>联系状态：</label>
       <select class="combox">
       <option value="" >请选择</option>
       <option value="1" >邮件未回复</option>
       <option value="1" >邮件回复</option>
       <option value="1" >电话留言</option>
       <option value="2" >电话接听</option>
       </select>
      </div>
      <div class="divider">divider</div>
      <div class="unit">
       <label>联系结果：</label>
       <select class="combox">
       <option value="" >请选择</option>
       <option value="1" >不明</option>      
       <option value="2" >无意向</option>
       <option value="3" >有意向</option>
       <option value="4" >成功</option>
       </select>
      </div>
      <div class="divider">divider</div>
          <div class="unit">
                <label>联系纪要：</label>
                <textarea name="quote_content" cols="30" rows="4"></textarea>
          </div>
      <div class="divider">divider</div>   
    </div>
    <div class="pageFormContent" layoutH="58" style="width:40%; float:left;">
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
       <label>重要程度：</label>
 	   <input type="text" size="30" readonly="readonly" />
      </div>
      <div class="divider">divider</div>
      <div class="unit">
       <label>销售阶段：</label>
 	   <input type="text" size="30" readonly="readonly" />
      </div>
      <div class="divider">divider</div>
      <div class="unit">
       <label>成功可能性：</label>
	   <input type="text" size="30" readonly="readonly" />
      </div>
      <div class="divider">divider</div>
      <div class="unit">
       <label>需求类型：</label>
       <input type="text" size="30" readonly="readonly" />
      </div>
      <div class="divider">divider</div>
      <div class="unit">
       <label>合作意向：</label>
	   <input type="text" size="30" readonly="readonly" />
      </div>
      <div class="divider">divider</div>
      <div class="unit">
       <label>预计金额：</label>
       <input type="text" style="width:120px" readonly="readonly"/>
       <input type="text" style="width:50px" value="美元" readonly="readonly" />
      </div>
      <div class="divider">divider</div>
      <div class="unit">
       <label>状态：</label>
       <input type="text" size="30" readonly="readonly" />
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