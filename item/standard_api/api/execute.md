# Execute(CUD)

用于client向server发起的POST、PUT和DELETE请求

### JSON
##### 参考
```
{
    "meta":{
        "code": 200,   //结果码，int 型，必需。客户端应首先根据此项结果进行相应处理。
        "message":"***"
    },
    "data": {
        "***":"***",
    }
}
```


### XML
##### 参考
```
<?xml version="1.0" encoding="utf-8"?> 
<result>
    <meta>
        <code></code>
        <message></message>
    </meta>
    <data></data>
</result>
```
