<?php
@header("Content-type: text/html; charset=utf-8");
 
/*链接数据库*/
$dbname = "admin";//数据库的名称

/*从环境变量里取出数据库连接需要的参数*/
$host = "localhost";
$port = 3306;
$user = "root";//数据库的用户名
$pwd = "root";//数据库的密码





/**
提示：
1.如果你有【已认证】的微信服务号，并且需要借用该服务号的授权信息，请填写该服务号的AppID
和AppSecret

2.用上述服务号的账号密码登陆mp.weixin.qq.com，进入【开发者中心】，找到【网页授权获取用户基本信息】，
把授权网址改为
www.weibiaozhi.com
活动结束后再改原来的，为了避免密钥信息外泄，造成不必要的误会，建议活动后重置密钥

3.以下信息可以不填写，默认借用我们微信号授权，对活动没有影响

**/


$AppID = "11111111111111111111";
$AppSecret = "11111111111111111111";




/**
微博授权提示：
1.如果你需要授权提示使用自己的应用名，请进入http://open.weibo.com/development/fenfu创建新的应用，

2.进入【应用信息】，编辑基本信息，在安全域名那里添加weibiaozhi.com

3.拷贝App Key和App Secret填入下方，为了避免密钥信息外泄，造成不必要的误会，建议活动后重置密钥

4.以下信息可以不填写，默认借用我们微信号授权，对活动没有影响
**/

$appkey = "";

$appsecret = "";





?>