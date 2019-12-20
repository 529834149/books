# ping++支付实现步骤

### 1. 微信支付实现

```bash
登录ping++平台，https://dashboard.pingxx.com/login 
``` 
### 2.开通支付渠道
```bash
支付渠道->开通微信公众号支付
```
开通后 就可以下载php sdk包 和client sdk包实现支付流程啦


### 3.设置微信支付目录；
```bash
需要进入你们的微信公众账号，有一个支付设置点击进去，设置你HTML页面的所在目录；
比如域名:https:www.zhaiguang.html/zhifu/ (http协议根据公司需求定义一般都是http)
以后所有的微信支付页面就全部放进zhifu这个目录即可；
设置你的项目域名在微信上的回调地址
```



### 4.下载php sdk包 
```bash
下载地址：https://github.com/PingPlusPlus/pingpp-php
```
 PHP 版本要求 5.3 及以上，你可以使用 Composer 或直接手动引入
 
 
 

### 5. 支付 
```bash
设置ping++平台上的apikey
设置 微信的 app_id app_secret 
设置ping++在项目中的app_id
从服务端发起支付请求，获取支付凭据
将获得的支付凭据传给 Client
接收 Webhooks 通知 可自行处理业务需求
 
```


### 6.获取clinet sdk 添加ping++的js文件 下载地址：https://github.com/PingPlusPlus/pingpp-js
```bash
<script src="../js/pingpp.js?wxhctime=0.1"></script>
//？后面的字符串可以删除掉;我之前是为了避免微信缓存；

``` 

### 7. 支付流程的环节步骤； 
```bash
 首先你需要ajax请求服务端给你返回一个 charge,这个charge也就是唤醒微信支付的凭证；（如果没有让你们的服务端给你返回） 
 拿到charger后进行ping++封装函数的执行即可； 
```