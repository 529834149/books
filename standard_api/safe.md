# 安全规范

### 1.签名算法

签名生成的通用步骤如下：

第一步，设所有发送或者接收到的数据为集合M，将集合M内非空参数值的参数按照参数名ASCII码从小到大排序（字典序），使用URL键值对的格式（即key1=value1&key2=value2…）拼接成字符串stringA。
特别注意以下重要规则：
> * 参数名ASCII码从小到大排序（字典序）；
> * 如果参数的值为空不参与签名；
> * 参数名区分大小写；
> * 验证调用返回或主动通知签名时，传送的sign参数不参与签名，将生成的签名与该sign值作校验。
> * 接口可能增加字段，验证签名时必须支持增加的扩展字段

第二步，在stringA最后拼接上key得到stringSignTemp字符串，并对stringSignTemp进行MD5运算，再将得到的字符串所有字符转换为大写，得到sign值signValue。

举例，假设传送的参数如下：

```php
<?php
$id = '380840976';
$author_id = '1000000';
$body = 'test';
$date = gmdate('D, d M Y H:i:s \G\M\T');
```
第一步：对参数按照key=value的格式，并按照参数名ASCII字典序排序如下：

```php
<?php
$stringA= "id=".$id."&author_id=".$author_id."&body=".$body."&date=".$date;
```
第二步：拼接API密钥并进行签名：

```php
<?php
$stringSignTemp=$stringA."&key=302006259b3c09247ec02edaf64f6a5f";
$sign=strtoupper(MD5($stringSignTemp));
```
最终得到最终发送的数据

### 2.发送请求
将上一步生成的签名，放到 HTTP 消息头中。如果没有签名或者签名错误，则会导致接口调用失败，服务端会返回 HTTP 状态码 401

格式如下：

```php
<?php
$headers = [
        "Date: ".$date, // header 中使用的时间必须和生成签名的时间$date相同
        "Authorization: Blogchina $appid:".$sign,//$appid 为开发者申请的appid
    ];
$body = [
    'id'=>$id,
    'author_id'=>$author_id,
    'body'=>$body,
    'date'=>$date,
];

$response = Unirest\Request::post("http://api.blogchina.com/", $headers, $body);
$response->raw_body;
```


### 3.回调API安全
在普通的网络环境下，HTTP请求存在DNS劫持、运营商插入广告、数据被窃取，正常数据被修改等安全风险。用户回调接口使用HTTPS协议可以保证数据传输的安全性。所以建议用户回调采用HTTPS协议。