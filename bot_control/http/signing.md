# 签名 URL 请求

建议使用 HTTPS 协议传输 URL 请求。SSL 可以加密传输，从而保护请求或响应，避免数据在传输过程中被查看、篡改。

# 为什么要签名请求？

1、验证请求者的身份。确保该请求是来自 Blogchina 授权的开发者程序

2、保护传输中的数据。为了防止URL在传输时参数值被恶意篡改、注入，API URL请求的参数被要求进行哈希（摘要）计算，得到的哈希值被包括在请求中的sign参数。服务问收到请求时，将基于相同签名方法重新计算哈希，并将其与请求中包括的哈希值进行匹配。如果哈希值不匹配，服务器将返回 401（未授权被拒绝）错误码。

3、防止潜在的 URL 重放攻击。被签名的URL被要求必须在5分钟内到达 Blogchina 的服务器，逾期将返回 403（请求超时被拒绝）错误码。

# 如何签名？

签名的机制是由开发者在 API 客户端计算出系列参数组合的哈希值，将产生的信息添加到 URL 请求的 sign 参数。

例如 API 请求参数如下:

```json
{
    "access_key":"7576762362",
    "timestamp":"1439279383630",
    "screen_name":"entere",
    "format":"json"
}
```

1、按参数名进行升序排列 

access_key, timestamp, screen_name, format 其中不包括空值参数

排序后的参数为:

```json
{
    "access_key":"7576762362",
    "format":"json",
    "screen_name":"entere",
    "timestamp":"1438279283630",
    
}
```

2、构造签名串 

以secret字符串开头，追加排序后参数名称和值，格式：
    
    secretkey1value1key2value2...
    
    
假设 secret的值为 `f827182b1051075e601c73ac1ae329fa` 应用到上述示例得到签名串为：

    f827182b1051075e601c73ac1ae329faaccess_key7576762362formatjsonscreen_nameenteretimestamp1438279283630



3、计算签名 

对上面的签名串进行 md5 签名：

    md5(f827182b1051075e601c73ac1ae329faaccess_key7576762362formatjsonscreen_nameenteretimestamp1438279283630)

并把值转成小写：

    927c0fc11caaf98840ed7773b348685c

4、添加签名 

将计算的签名值以 sign 参数名，附加到 URL 请求中。一个典型的 API 请求如下所示

    https://xxx.com/xxx?access_key=7576762362&format=json&screen_name=entere&timestamp=1438279283630&sign=927c0fc11caaf98840ed7773b348685c


5、服务器验证

验证请求者的身份：简单判断 access_key。

防止重放攻击：服务器端首先验证时间戳 timestamp 是否有效，比如是服务器时间戳 5 分钟之前的请求视为无效。

保护传输中的数据：服务端收到请求时，将基于相同签名方法（去掉 sign 参数）重新计算哈希，并将其与请求中包括的哈希值进行匹配。如果哈希值不匹配，服务器将返回 401（未授权被拒绝）错误码。


6、快速开始

好消息，我把以上功能进行了封装，你可以点以下链接下载使用
[https://github.com/entere/sign](https://github.com/entere/sign)




