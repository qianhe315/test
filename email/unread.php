<?php


/**
 * 获取未读邮件数
 */
date_default_timezone_set("PRC");

//私钥，请使用企业自己生成的私钥
$prikey = '-----BEGIN RSA PRIVATE KEY-----
MIICXAIBAAKBgQCMRLQAQz/SnMERgjGIHlnUr3xwNf0KgfqGGqa6TJotlqyWl82U
bzRxT4xNoii/B+fC+M9u4k5bqzcbc6L/Q1Ui6xKhG4gHZ8kMn666tmaj/7tPqPwi
hvWeHbF22F74b5tNBH0xqhd5cPUryiMVqAwLAxiT78hGbC23Q3tOOmIJPQIDAQAB
AoGAMOw9g+HwvrqhtEOelwVO+5mBY3nRGfsfr+pXwJ67H69v3s5vi5gFyIegPeuT
Hp3ZPe2eG+Sew+ZBwDdi4HlRleisrlT4D8Uwvh1Tk+p5T6uVbVbiz9GmDfr2M58Z
3pYrGyu2KSSpPkagZgFjpSlDP0KlSQifsrxrPpqeCbzmLFkCQQDa02pfU6ijnDvj
jI51pMv6L9iWaUYZcytDggy3Wr3js+qCANEaSfu22hsLlWQ7VR32VhFUfZv/Svgb
dy6NZ4MTAkEApBjgqLw8NnjkBRGPqOwFFCi9329IhV232kuQU80V4O87XoUxYUC/
KAiDBvlQmvbY6gj1iafDiJJBTAbaOlF8bwJAA7/pq7aARkVwFUccTdHEGQZm3LTz
GY6KqD57P00TweocU5v1+VBZOtnj6r/llsqvl8ADzgHVAXvkYnwZVRz39wJABctD
E3IiBiJamrs2AVbkDwQpQBxjySG3/iMw42SYYyrPQ9UcGzz4AufaCIMBD5errQfH
86ZSxx2y5IZRakG6TQJBAIkBDCaminDS62ua0kr+2QpZdOJH8P4KIrgZV0zX0DYE
sU6IaRBZnjni9CJUi5VvsAMh+d1241gklLd/WpvTJjY=
-----END RSA PRIVATE KEY-----';

//获取未读邮件数账号,如需获取 test001@test.com 未读邮件数,只填写@前信息即可
$account_name = "adminsd";
//域名，请使用企业自己的域名
$domain = "abc.com";
$time = date(time()) . '000';

$src = "account_name=" . $account_name . "&domain=" . $domain . "&time=" . $time;
$res = openssl_pkey_get_private($prikey);

if (openssl_sign($src, $out, $res)) {
	$sign = bin2hex($out);
	$url = "http://cm.qiye.163.com/oaserver/user/getUnreadMsg";

	$pram = $src . "&sign=" . $sign;
	echo $url . "?" . $pram . "<br>";

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $pram);

	$data = curl_exec($ch);
	echo $data . "<br>";
	$unread_json = json_decode($data);
	if ("OK" == $unread_json->status) {
		echo "未读邮件数为：" . $unread_json->count;
	} else {
		echo "获取失败，" . $unread_json->msg;
	}
	curl_close($ch);
}
?>
