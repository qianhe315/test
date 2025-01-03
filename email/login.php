<?php


/**
 * 单点登录
 */
date_default_timezone_set("PRC");

//私钥，请使用企业自己生成的私钥
$prikey = '-----BEGIN RSA PRIVATE KEY-----
MIICXAIBAAKBgQDVPIRpiMW7RN2Y1UKPzjFRQTNgmcKtzJZGMYmMmrAWc+Ur6cT4
4PyjuRGFoWAIvICkCZ5AipBv2PpD4NAlWHVS6AAi17z3fSk4eG73LFOgwK4S3Vfv
evOvCzOqjGXPsd8ehczflZ8wtCBuXQUYeCKhAv5M+P4j05BI4P7JWkq62wIDAQAB
AoGAHkkGFWcTjlFtl7NSTNJgNsYn4eR0vfJ8tWN7wbiGoem79syw6RgrSaWTU4Nj
/Fmpe6LSEyCa+we6I8HeTi+OGgHcMjameeeJeWpLMbuJnFIY5LXTRugHkjQDbKqm
45n4+b712mYOGibr11zsn+8owrEuEWNIjP+IG6b8s8CtBcECQQD2IeueMzoAO4wX
O34bdc5dJV6xhLvx68vkdEDNxRRQciJPjDJdmWBbTMFkz+KnywHhJxpcginWHuSR
5FsvIWnDAkEA3cj7MH9+ZS7GWV+WXTvG2HG+cAiJlZ05MV/LDId6HoWixfDFGBru
Pgn1jpiHOrSkP9ptblXngW2QVstdoPbBCQJBANNnexrcYPsGKmNiBATOALvcdyL+
IPe/UdcdSvPyTGp0PagZgMEIFc0Vdh6Ct+jq4uhiT7AZVJnG2we8Hd2zU0UCQEcX
9e1F8S5eIBbmHT0lvEgFrhYbpn7fN0Ysfto1U2AVVmg9FfD0MQqSBrT/D9oxrbUK
P6nuv5ctl+c6qXi/oIECQCPvlp04Cw0oZDvqrUjfNzWT9Ia83Zr/SWfsWjimU0Kq
ogDVtzmh0zciKobyyp7qZCTyi87PH3+M4+drnQeUfTM=
-----END RSA PRIVATE KEY-----';

//域名，请使用企业自己域名
$domain = "cstown.com";
//登录账号，如需单点登录到 test001@test.com，只填写@前信息即可
$account_name = "service";

$time = date(time()) . '000';
//语言，0-中文，1-英文，可以不传此参数，默认为0
$lang = "0";
$src = $account_name . $domain . $time;
$res = openssl_pkey_get_private($prikey);
if (openssl_sign($src, $out, $res)) {
	$enc = bin2hex($out);
	//单点登录
	$url = "https://entry.qiye.163.com/domain/oa/Entry?domain=" . $domain . "&account_name=" . $account_name . "&time=" . $time . "&enc=" . $enc . "&lang=" . $lang;
	
	//单点登录至指定邮件
	//$mid = "ACkA2QDlAMoN1CcJ*MOA*Krl";//通过/mailbox/listMessages接口，获取对应邮件的id
	//$url = "https://entry.qiye.163.com/domain/oa/Entry?domain=" . $domain . "&account_name=" . $account_name . "&time=" . $time . "&enc=" . $enc . "&lang=" . $lang . "&mid=" . $mid;
	
	//单点登录至指定文件夹
	//$module = "mbox.ListModule|{\"fid\":1,\"order\":\"date\",\"desc\":true}";
	//$url = "https://entry.qiye.163.com/domain/oa/Entry?domain=" . $domain . "&account_name=" . $account_name . "&time=" . $time . "&enc=" . $enc . "&lang=" . $lang . "&module=" . $module ;
	
	echo "<script language='javascript' type='text/javascript'>";
	echo "window.location.href='$url'";
	echo "</script>";
}
?>
