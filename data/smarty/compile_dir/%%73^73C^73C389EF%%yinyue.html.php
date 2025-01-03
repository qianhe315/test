<?php /* Smarty version 2.6.22, created on 2024-08-27 09:16:49
         compiled from sale_detail/yinyue.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--<meta http-equiv="refresh" content="310">-->
<title>导出发货订单</title>
<script src="<?php echo $this->_tpl_vars['__PUBLIC__']; ?>
/js/jquery-1.7.2.min.js" type="text/javascript"></script>
</head>

<script type="text/javascript">
var myVar = setInterval(getnums, 1000);

function getnums(){
	$.ajax({
		  type: 'POST',
		  url: 'http://192.168.2.4:8000/audio/search-flag-auto',
		  dataType: 'text',
		  success: function(data){
			  if(data==1){
				  window.open('http://192.168.2.4:8000/aip/immediate-flag-auto');
				  clearInterval(myVar);
				  window.opener=null;window.open('','_self');window.close();
			  }
		  }
		});
}
/* var int=self.setInterval("clock()",50)
function clock(){
	var t=new Date()
	document.getElementById("clock").value=t
	
}
//window.onload=function(){
//假设这里每个五分钟执行一次test函数
 
publicBusi();
personBusi();
//}
function publicBusi(){
   	<?php if ($this->_tpl_vars['ce'] == 1): ?>
    	setTimeout(publicBusi,1000*20);//这里的1000表示1秒有1000毫秒,1分钟有60秒,7表示总共7分钟
    <?php else: ?>
        setTimeout(personBusi,10000000000*3);//1000*300
    <?php endif; ?>
	
    $.post('<?php echo $this->_tpl_vars['__ROOT__']; ?>
/sale_detail/aa2',
	
	function(data){
		if(data!=""){
		    data=data.split("|");
		    
			//for(var i=0;i<data.length;i++){
				var audio = document.createElement('audio');
				audio.src = data[0];//这里放音乐的地址
				audio.autoplay = 'autoplay';
				audio.onended = function() {
					
					 var audio1 = document.createElement('audio');
					audio1.src = data[1];//这里放音乐的地址
					audio1.autoplay = 'autoplay';  
				};
				
				//document.body.appendChild(audio);
				//$("#content").html('<bgsound loop=0 src=http://localhost/63a9c115903f4759a384f0016b3ce497.mp3 />');
					//alert(data)
				
			//}
			$("#content").append('<div>' + data[1] + '</div>');
			
		}
			
    });
}
function personBusi(){
	<?php if ($this->_tpl_vars['ce'] == 1): ?>
    	setTimeout(personBusi,1000*20);//这里的1000表示1秒有1000毫秒,1分钟有60秒,7表示总共7分钟
    <?php else: ?>
        setTimeout(personBusi,10000000000*3);//1000*300
    <?php endif; ?>
}
function send(){
	location.replace('<?php echo $this->_tpl_vars['__ROOT__']; ?>
/sale_detail/yinyue');
	window.close();
}
this.window.opener = null;  

window.close();   */
</script>
<script type="text/javascript">
/*var timestamp = 0;
var url = 'index.php?route=common/home/aa1';
//var error = false;
	function connect(){ 
		$.ajax({ 
			data : {'timestamp' : timestamp}, 
			url : url,
			type : 'get',
			timeout : 0,
			success : function(response){
					alert(33)
				   // var data = eval('('+response+')');
					//error = false;
					//timestamp = data.timestamp;
					//$("#content").append('<div>' + response + '</div>');
			},
          

        })
    }
	 
	function send(msg){
        $.ajax({
            data : {'msg' : msg},
            type : 'get',
            url : url
        })
    }
	
	$(document).ready(function(){
        connect();
    })*/
    </script>
  </head>
  <body>

<!--     <a onclick="send()" style="color:#F00; cursor:pointer;">终止声音</a>
  <input type="text" id="clock" size="35" />
  <div id="content">
  </div> -->

  
  </body>
</html>