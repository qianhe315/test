<?php


/**
 * 更新部门
 */
//需设置页面编码为utf8，php文件编码为utf8，中文参数urlencode时才能为utf8编码。
header("Content-type: text/html; charset=utf-8");
date_default_timezone_set("PRC");

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

$domain = "abc.com";
$product = "abc_com";
$time = date(time()) . '000';
$unit_desc = "华北分部";
$unit_id = "667456";
$unit_name = "华北分部";

$res = openssl_pkey_get_private($prikey);
$src = "domain=" . $domain . "&product=" . $product . "&time=" . $time . "&unit_desc=" . $unit_desc . "&unit_id=" . $unit_id . "&unit_name=" . $unit_name;

if (openssl_sign($src, $out, $res)) {
	$sign = bin2hex($out);
	$url = "http://apibj.qiye.163.com/qiyeservice/api/unit/updateUnit";
	$pram = "domain=" . $domain . "&product=" . $product . "&time=" . $time . "&unit_desc=" . urlencode($unit_desc) . "&unit_id=" . $unit_id . "&unit_name=" . urlencode($unit_name) . "&sign=" . $sign;

	echo $url . "?" . $pram . "<br>";

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $pram);

	$data = curl_exec($ch);
	echo $data;
	curl_close($ch);
}
?>