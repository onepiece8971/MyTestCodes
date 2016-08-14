<?php
/**
 * Created by PhpStorm.
 * User: ubuntu
 * Date: 14-12-9
 * Time: 下午5:23
 */
$phone = '';
//初始化
$ch = curl_init();
//设置选项，包括URL
curl_setopt($ch, CURLOPT_URL, "http://wap.keepc.com/wap/index.act");
// 获取头部信息
curl_setopt($ch, CURLOPT_HEADER, 1);
// 返回原生的（Raw）输出
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

//执行并获取HTML文档内容
$output = curl_exec($ch);
curl_close($ch);
// 解析HTTP数据流
list($header, $body) = explode("\r\n\r\n", $output);
// 解析COOKIE
preg_match("/set\-cookie:([^\r\n]*)/i", $header, $cookie);
$cookie = $cookie[1];
//释放curl句柄
$pattern = '/<input.*id="sign".*value="(\w*)".*>/';
preg_match($pattern, $output, $matches);

$ch = curl_init();
$url = "http://wap.keepc.com/wap/regMobile.act";
$post_data = array("mobile" => $phone, "sign" => $matches[1]);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// post数据
curl_setopt($ch, CURLOPT_POST, 1);
// post的变量
curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
curl_setopt($ch, CURLOPT_COOKIE, $cookie);
$a = curl_exec($ch);
curl_close($ch);
print_r($a);
//echo "ok";