<?php
//从 PayPal 出读取 POST 信息同时添加变量? cmd?
 $req = 'cmd=_notify-validate';
 foreach ($_POST as $key => $value) {
 $value = urlencode(stripslashes($value));
 $req .= "&$key=$value";
 }
 //建议在此将接受到的信息记录到日志文件中以确认是否收到 IPN 信息
 //将信息 POST 回给 PayPal 进行验证
 $header .= "POST /cgi-bin/webscr HTTP/1.0\r\n";
 $header .= "Content-Type:application/x-www-form-urlencoded\r\n";
 $header .= "Content-Length:" . strlen($req) ."\r\n\r\n";
 //在 Sandbox 情况下，设置：
 //$fp = fsockopen(?www.sandbox.paypal.com?,80,$errno,$errstr,30);
 $fp = fsockopen ('www.paypal.com', 80, $errno, $errstr, 30);
 //将 POST 变量记录在本地变量中
 //该付款明细所有变量可参考：
 //https://www.paypal.com/IntegrationCenter/ic_ipn-pdt-variable-reference.html
 $item_name = 'L1139201806011';
 $item_number = '';
 $payment_status = 'Completed';
 $payment_amount = '489.81';
 $payment_currency = 'USD';
 $txn_id = '8XW73404XD127473X';
 $receiver_email = 'payment@cstown.com';
 $payer_email = 'kktoland@msn.com';
 $tax = '';
 $name = 'KARENToland';
 $payer_business_name = 'Virtuous Tees';
 $a = '14.50';
 
 
 $username='root';
 $userpass='123456';
 $dbhost='127.0.0.1';
 $dbdatabase='erp_test';
		
//生成一个连接
$db_connect=mysql_connect($dbhost,$username,$userpass) or die("Unable to connect to the MySQL!");

//中文乱码问题
mysql_query("SET NAMES UTF8");
mysql_query("set character_set_client=utf8"); 
mysql_query("set character_set_results=utf8");	
//选择一个需要操作的数据库
mysql_select_db($dbdatabase,$db_connect);
//查询发票信息
$result 	=	mysql_query('SELECT * FROM cs_invoice WHERE invoice_number = "'.$item_name.'" ');
$get_invoice_info	=	mysql_fetch_array($result);//mysql方法查询的是一条数据
if(empty($get_invoice_info)){
	$get_invoice_info	=	array(
		'customer_code'=>'',
		'saleman_id'=>0,
		'customer_name'=>''
	);
}
//print_r($get_invoice_info);exit;
date_default_timezone_set('PRC');	



//mysql_query("INSERT INTO cs_paypal (item_name,item_number,payment_status,payment_amount,payment_currency,txn_id,receiver_email,payer_email,tax,name,payer_business_name,poundage,insert_time,customer_code,user_id,customer_name) VALUES ('".$item_name."','".$item_number."','".$payment_status."','".$payment_amount."','".$payment_currency."','".$txn_id."','".$receiver_email."','".$payer_email."','".$tax."','".$name."','".$payer_business_name."','".$a."','".date('Y-m-d H:i:s',time())."','".$get_invoice_info['customer_code']."',".$get_invoice_info['saleman_id'].",'".$get_invoice_info['customer_name']."')");



/***************************************标款操作 start***********************************************************/
if(!empty($get_invoice_info)){
	
	$due = $get_invoice_info['due'];
	$due_one = mb_substr($due,0,1,'utf-8');	
	$due_end = str_replace($due_one,"",$due);	
	
if($due_end==$payment_amount){	
	
	$s_d_result	=	mysql_query("SELECT * FROM cs_sale_detail WHERE invoice_number = '".$get_invoice_info['invoice_number']."'",$db_connect);
	$get_sale_detail	=	mysql_fetch_array($s_d_result);
	
	$i_s_result	=	mysql_query("SELECT * FROM cs_invoice_status WHERE invoice_number = '".$get_invoice_info['invoice_number']."'",$db_connect);
	$get_invoice_status	=	mysql_fetch_array($i_s_result);
	
	if(empty($get_sale_detail) && $get_invoice_info['status']=='2'){
			                                      
	}elseif(!empty($get_sale_detail) && $get_invoice_status['type']=='1'){
	        
	}else{
		if(empty($get_sale_detail)){ //属于发票
			$p_d_result	=	mysql_query("SELECT * FROM cs_payment_detail WHERE customer_code = '".$get_invoice_info['customer_code']."'",$db_connect);
			$get_payment_detail	=	mysql_fetch_array($p_d_result);
			
			if(empty($get_payment_detail)){
				//mysql_query("INSERT INTO cs_new_customer (salesman_name,customer_code,yinyue_id,price,status) VALUES ('".$get_invoice_info['saleman_name']."','".$get_invoice_info['customer_code']."','','".substr($get_invoice_info['due'],1)."',3)");

			}else{
				//mysql_query("INSERT INTO cs_new_customer (salesman_name,customer_code,yinyue_id,price,status) VALUES ('".$get_invoice_info['saleman_name']."','".$get_invoice_info['customer_code']."','','".substr($get_invoice_info['due'],1)."',1)");
			   
			}
		}else{
			$p_d_result	=	mysql_query("SELECT * FROM cs_payment_detail WHERE customer_code = '".$get_invoice_info['customer_code']."'",$db_connect);
			$get_payment_detail	=	mysql_fetch_array($p_d_result);
			
			if(empty($get_payment_detail)){
				//mysql_query("INSERT INTO cs_new_customer (salesman_name,customer_code,yinyue_id,price,status) VALUES ('".$get_invoice_info['saleman_name']."','".$get_invoice_info['customer_code']."','','".substr($get_invoice_info['due'],1)."',2)");
			}
		}
		
		if($get_invoice_info['sales_status'] == 1){
			if($get_invoice_info['audit_type']!='0'){
				//mysql_query("UPDATE cs_invoice SET sales_status=2 WHERE id=".$get_invoice_info['id']." ");
		
			}else{
				//mysql_query("UPDATE cs_invoice SET sales_status=2,status=1 WHERE id=".$get_invoice_info['id']." ");
			   		
			}
			
			//mysql_query("INSERT INTO cs_sale_detail (time,detail_time,saleman_name,customer_name,customer_code,invoice_number,due,invoice_id,amount_payable,delivery_completely,audit_type,invoice_type) VALUES ('".date("Y-m-d")."','".date("Y-m-d H:i:s")."','".$get_invoice_info['saleman_name']."','".addslashes($get_invoice_info['customer_name'])."','".addslashes($get_invoice_info['customer_code'])."','".$get_invoice_info['invoice_number']."','".$get_invoice_info['due']."','".$get_invoice_info['id']."','".$get_invoice_info['due']."',1,'".$get_invoice_info['audit_type']."','".$get_invoice_info['invoice_type']."')");

				
		}
		
		$s_d_result_new	=	mysql_query("SELECT * FROM cs_sale_detail WHERE invoice_number = '".$get_invoice_info['invoice_number']."'",$db_connect);
		$get_sale_detail_new	=	mysql_fetch_array($s_d_result_new);
		if($get_sale_detail_new['amount_payable']){
			$amount_payable= $get_sale_detail_new['amount_payable'];
					
		}else{
			if($get_invoice_info['due']){
				$amount_payable = $get_invoice_info['due'];
			}
		}
		$one = mb_substr($get_invoice_info['due'],0,1,'utf-8');
		
		if($one=="￥"){
			$unit = "人民币";
		}elseif($one=="$"){
			$unit = "美元";
		}elseif($one=="€"){
			$unit = "欧元";
			$eur = "EUR";
		}else{
			$unit = "";
		}
		
		if(1/* mysql_query("INSERT INTO cs_payment_detail (saleman_name,insert_time,customer_code,invoice_id,invoice_no,paid_time,paid_type,currency,paid_money,poundage,net_worth,invoice_type) VALUES ('".$get_sale_detail_new['saleman_name']."','".date("Y-m-d H:i:s")."','".$get_sale_detail_new['customer_code']."','".$get_sale_detail_new['invoice_id']."','".$get_sale_detail_new['invoice_number']."','".date("Y-m-d H:i:s")."','17','".$unit."','".$payment_amount."','".$a."','".($payment_amount-$a)."','".($get_sale_detail_new['invoice_type'])."')") */){
			
			$p_d_result_new	=	mysql_query("SELECT * FROM cs_payment_detail WHERE invoice_no = '".$get_sale_detail_new['invoice_number']."'",$db_connect);
			
			if($p_d_result_new){
				while($rows1=mysql_fetch_array($p_d_result_new)){
					$yifu+=$rows1['paid_money'];
				}
			}
			  
			$yingfu=str_replace($one,"",$get_sale_detail_new['amount_payable']);
			$c=(string)$yingfu-(string)$yifu;

			if($yifu>0 && $c>0){
				$date_post_3=array(
				    "paid_status"=>2,
					"paid_money"=>$one.$yifu,
				);
				$paid_status=2;
			}else if($yifu=="" || $yifu==0){
				$date_post_3=array(
					"paid_status"=>1,
					"paid_money"=>$one.$yifu,
				);
				$paid_status=1;
			}else if($c<=0){
				
				$date_post_3=array(
					"paid_status"=>3,
					"paid_money"=>$one.$yifu,
				);
				$paid_status=3;
				
			}
			
			//mysql_query("UPDATE cs_sale_detail SET paid_status=3,paid_money='".$date_post_3['paid_money']."' WHERE invoice_number='".$get_invoice_info['invoice_number']."' ");
			
			$p_d_result_new2	=	mysql_query("SELECT * FROM cs_payment_detail WHERE invoice_no = '".$get_sale_detail_new['invoice_number']."'",$db_connect);
			
			$i_val	=	0;
			$price	=	'';
			while($rows2=mysql_fetch_array($p_d_result_new2)){
				if($i_val==0){		
					$price .= $rows2['paid_money'];//没有货币符号的价钱					 
				}else{
					if($rows2['paid_money']!=""){
						$price .= "+".$value['paid_money'];
					}
				}
				$i_val++;
			}
			$price = eval("return $price;");
			
			if($get_sale_detail_new['paid_status']=='1'){
				$status = '0';
		
			}elseif($get_sale_detail_new['paid_status']=='2' || $get_sale_detail_new['paid_status']=='3'){
				$status = '1';
			}				
			
			if($get_sale_detail_new['paid_status'] == '1'){
				$payment = '0';
			}elseif($get_sale_detail_new['paid_status'] == '3'){
				$payment = '1';
			}elseif($get_sale_detail_new['paid_status'] == '2'){
				$payment = '2';
			}elseif($get_sale_detail_new['paid_status'] == '6'){
				$payment = '6';
			}else{
				$payment = '0';
			} 
			
			
			$p_d_result_new_one	=	mysql_query("SELECT * FROM cs_payment_detail WHERE invoice_no = '".$get_sale_detail_new['invoice_number']."' order by paid_time desc ",$db_connect);
			$get_payment_detail_new_one	=	mysql_fetch_array($p_d_result_new_one);
			
				
			if($get_payment_detail_new_one['paid_type']=='18'){
				$paymentterm = "Wire Transfer";
			}elseif($get_payment_detail_new_one['paid_type']=='17'){
				$paymentterm = "Paypal"; 
			}elseif($get_payment_detail_new_one['paid_type']=='20'){
				$paymentterm = "Other"; 
			}elseif($get_payment_detail_new_one['paid_type']=='19'){
				$paymentterm = "Credit Card"; 
			}elseif($get_payment_detail_new_one['paid_type']=='19'){
				$paymentterm = "Citi"; 
			}elseif($get_payment_detail_new_one['paid_type']=='20'){
				$paymentterm = "Cash"; 
			}else{
				$paymentterm = $get_payment_detail_new_one['PaymentTerm']; 
			}
			
// 			$c_result	=	mysql_query("SELECT * FROM cs_customers WHERE customer_code = '".$get_invoice_info['customer_code']."' ",$db_connect);
// 			$get_customers	=	mysql_fetch_array($c_result);
	
// 			if($get_customers['status'] == '1'){
// 				$data_post_old = array(
// 					 "status"=>2,
// 					 "old_customers_change_time"=>$get_payment_detail_new_one['paid_time'],
// 					 "feedback_state"=>2
// 				);			
				
// 				mysql_query("UPDATE cs_customers SET status=".$data_post_old['status'].",old_customers_change_time='".$data_post_old['old_customers_change_time']."',feedback_state='".$data_post_old['feedback_state']."' WHERE customer_code='".$get_invoice_info['customer_code']."' ");
				
// 			}else{
// 			    $change_count = mysql_query("select count(*) from cs_customer_change where customer_code='".$get_invoice_info['customer_code']."' and modify_time<>''");
// 			    if($change_count and $status_pay==1){
// 			        mysql_query("UPDATE cs_customers SET pay_time='".$get_payment_detail_new_one['paid_time']."',status_pay=2 WHERE customer_code='".$get_invoice_info['customer_code']."' ");
// 			    } 
// 			}
			
			$data_post_sale_detail = array(
				 "paid_time"=>$get_payment_detail_new_one['paid_time']
			);			
			
			if($get_sale_detail_new['paid_time']==""){
				//mysql_query("UPDATE cs_sale_detail SET paid_time='".$data_post_sale_detail['paid_time']."' WHERE invoice_number='".$get_invoice_info['invoice_number']."' ");
								
			}	
			
			
			$s_d_result_money	=	mysql_query("SELECT * FROM cs_sale_detail WHERE invoice_number = '".$get_invoice_info['invoice_number']."' ",$db_connect);
			$get_sale_detail_money	=	mysql_fetch_array($s_d_result_money);
				
			$unit_one=mb_substr($get_sale_detail_money['paid_money'],0,1,'utf-8');
			if($unit_one=='$'){
				$paid_money_us=str_replace($unit_one,"",$get_sale_detail_money['paid_money']);
			}else if($unit_one=="€"){
				$paid_money_us=sprintf("%.2f",str_replace($unit_one,"",$get_sale_detail_money['paid_money'])*7/6);
			}else if($unit_one=="￥"){
				$paid_money_us=sprintf("%.2f",str_replace($unit_one,"",$get_sale_detail_money['paid_money'])/6);
			}

			//mysql_query("UPDATE cs_sale_detail SET paid_money_us='".$paid_money_us."' WHERE invoice_number='".$get_invoice_info['invoice_number']."' ");
				
			if($paid_status=3 && $get_invoice_info['audit_type']!='5'){
				
				$order_number=explode(',',$get_invoice_info['order_number']);
			}
			if($order_number){
				foreach($order_number as $key_order => $value_order){
					
					$o_result	=	mysql_query("SELECT * FROM cs_order WHERE order_number = '".$value_order."' ",$db_connect);
					$get_order	=	mysql_fetch_array($o_result);
					
					if($get_order['new_time']==''){
						//mysql_query("UPDATE cs_order SET new_time='".date("Y-m-d H:i:s")."' WHERE order_number='".$value_order."' ");
					}
					
					$q_s_result	=	mysql_query("SELECT * FROM cs_quotation_sheet WHERE order_number = '".$value_order."' ",$db_connect);
					$get_quotation_sheet	=	mysql_fetch_array($q_s_result);
					
					if($get_quotation_sheet['purchase_status'] == '1'){
						
						//mysql_query("UPDATE cs_quotation_sheet SET purchase_status=2 WHERE order_number='".$value_order."' ");
						
					}
					
				}
			}
			$c_result	=	mysql_query("SELECT * FROM cs_customers WHERE customer_code = '".$get_invoice_info['customer_code']."' ");
			$get_customers	=	mysql_fetch_array($c_result);
			
			//date_default_timezone_set("PRC");
			
			require_once dirname(__FILE__).'/AipSpeech/AipSpeech.php';
			
			// 你的 APPID AK SK
			define('APP_ID','14447805');
			define('API_KEY','y0y6GQgC8LiN1lbRERwqQ2fR');
			define('SECRET_KEY','ixHa8PMHjE2Eb8PP5I0FyzdWOlwnanWj');
			
			$client = new AipSpeech(APP_ID, API_KEY, SECRET_KEY);
			
			//业务员名字
			$user_result	=	mysql_query("SELECT user_name FROM cs_users WHERE user_id= ".$get_customers['user_id']);
			$user_info	=	mysql_fetch_array($user_result);
			
			//新客户数量
			$customer_result	=	mysql_query("SELECT count(*) number FROM cs_customers WHERE user_id= ".$get_customers['user_id']." and DATE_FORMAT( old_customers_change_time, '%Y%m' ) = DATE_FORMAT( CURDATE() , '%Y%m' )");
			$customer_count	=	mysql_fetch_array($customer_result);
			
			//业务员业绩
			$money_result	=	mysql_query("select sum(paid_money) money from cs_payment_detail where DATE_FORMAT( paid_time, '%Y%m' ) = DATE_FORMAT( CURDATE() , '%Y%m' ) and saleman_name = '".$user_info['user_name']."'");
			$money	=	mysql_fetch_array($money_result);
			
			$date=date('YmdHis',time());
			$dir = iconv("UTF-8", "GBK", "./upload/voice/".$get_customers['user_id']);
			if (!file_exists($dir)){
			    mkdir ($dir,0777,true);
			}
			chmod ($dir,0777);
			//$time = time();
			$date_post_3['paid_money'] = substr($date_post_3['paid_money'],1);
			if($get_customers['status'] == '1'){
			    $data_post_old = array(
			        "status"=>2,
			        "old_customers_change_time"=>$get_payment_detail_new_one['paid_time'],
			        "feedback_state"=>2
			    );
			    
			    mysql_query("UPDATE cs_customers SET status=".$data_post_old['status'].",old_customers_change_time='".$data_post_old['old_customers_change_time']."',feedback_state='".$data_post_old['feedback_state']."' WHERE customer_code='".$get_invoice_info['customer_code']."' ");
			    
			    
			    if($date_post_3['paid_money']<200){
			        $result = $client->synthesis('恭喜'.$user_info['user_name'].'刚刚收到新客户'.$get_invoice_info['customer_code'].'的订单~又有'.round($date_post_3['paid_money']).'美元入账啦！'.$user_info['user_name'].'本月已经有'.$customer_count['number'].'位新客户啦！成就需要不断积累，要一起继续加油噢~', 'zh', 1, array(
			            'vol' => 7,'spd'=>5,'pit'=>5,'per'=>4
			        ));
			    }elseif($date_post_3['paid_money']>200){
			        $result = $client->synthesis('恭喜'.$user_info['user_name'].'刚刚收到新客户'.$get_invoice_info['customer_code'].'的订单!这次足足有'.round($date_post_3['paid_money']).'美元揣进小布的口袋噢~好开心~'.$user_info['user_name'].'本月已经有'.$customer_count['number'].'位新客户啦！真是潜力无穷啊！', 'zh', 1, array(
			            'vol' => 7,'spd'=>5,'pit'=>5,'per'=>4
			        ));
			    }
			    
			    if(!is_array($result)){
			        file_put_contents('./upload/voice/'.$get_customers['user_id'].'/'.$date.'_'.$get_invoice_info['customer_code'].'-1.mp3', $result);
			        //插入播放列表
			        mysql_query("insert into cs_yinyue (user_id,audio) values (".$get_customers['user_id'].",'".$date."_".$get_invoice_info['customer_code']."-1.mp3','aa')");
			    }
			    
			}else{
			    $change_count = mysql_query("select count(*) from cs_customer_change where customer_code='".$get_invoice_info['customer_code']."' and modify_time<>''");
			    if($change_count){
			        mysql_query("UPDATE cs_customers SET pay_time='".$get_payment_detail_new_one['paid_time']."',status_pay=2 WHERE customer_code='".$get_invoice_info['customer_code']."' ");
			    }
			    
			    if($date_post_3['paid_money']<1000 and $date_post_3['paid_money']>100){
			        $result = $client->synthesis('小布刚刚收到来自'.$user_info['user_name'].'的客户'.$get_invoice_info['customer_code'].'支付过来的'.round($date_post_3['paid_money']).'美元。这个月他的业绩金额已经达到'.round($money['money'],0).'美元啦，业务能力这么强，小布真是太羡慕了', 'zh', 1, array(
			            'vol' => 7,'spd'=>5,'pit'=>5,'per'=>4
			        ));
			    }elseif($date_post_3['paid_money']>1000){
			        $result = $client->synthesis('太棒了！刚刚'.$user_info['user_name'].'的客户'.$get_invoice_info['customer_code'].' 大手一挥 就是'.round($date_post_3['paid_money']).'美元的订单！连小布都惊呆了！'.$user_info['user_name'].'这个月已经取得了'.round($money['money'],0).'美元的傲人成绩了！恭喜恭喜呀！', 'zh', 1, array(
			            'vol' => 7,'spd'=>5,'pit'=>5,'per'=>4
			        ));
			    }
			    if(!is_array($result)){
			        file_put_contents('./upload/voice/'.$get_customers['user_id'].'/'.$date.'_'.$get_invoice_info['customer_code'].'-2.mp3', $result);
			        //插入播放列表
			        mysql_query("insert into cs_yinyue (user_id,audio,source) values (".$get_customers['user_id'].",'".$date."_".$get_invoice_info['customer_code']."-2.mp3','aa')");
			    }
			    
			}
		}
		
		
		
	}
		
		
}

		
}



/***************************************标款操作 end***********************************************************/








mysql_close($db_connect); 
 
 //…
 //判断回复 POST 是否创建成功
 if (!$fp) {
 //HTTP 错误
 }else {
 //将回复 POST 信息写入 SOCKET 端口
 fputs ($fp, $header .$req);
 //开始接受 PayPal 对回复 POST 信息的认证信息
 while (!feof($fp)) {
 $res = fgets ($fp, 1024);
 //已经通过认证
 if (strcmp ($res, "VERIFIED") == 0) {
 //检查付款状态
 //检查 txn_id 是否已经处理过
 //检查 receiver_email 是否是您的 PayPal 账户中的 EMAIL 地址
 //检查付款金额和货币单位是否正确
 //处理这次付款，包括写数据库
 }else if (strcmp ($res, "INVALID") == 0) {
 //未通过认证，有可能是编码错误或非法的 POST 信息
 }
 }
 fclose ($fp);
}
?>
