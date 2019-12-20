# 单页数据

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
##### 示例
```
{
    "meta":{
        "code": 200, 
        "message":"success"
    },
    "data": {
         "id":3,
         "title":"每天五分钟，给思想加油",
         "content": "博客中国是中国博客的发源地，自媒体意见领袖在根据地",
         "created_at": "Fri Aug 22 00:00:00 +0800 2014"
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
    <data>
        <id></id>
        <title></title>
        <content></content>
        <created_at></created_at>
    </data>
</result>
```
##### 示例

```
<?xml version="1.0" encoding="utf-8"?> 
<result>
    <meta>
        <code>200</code>
        <message>success</message>
    </meta>
    <data>
        <id>3</id>
        <title>每天五分钟，给思想加油</title>
        <content>博客中国是中国博客的发源地，自媒体意见领袖在根据地</content>
        <created_at>Fri Aug 22 00:00:00 +0800 2014</created_at>
    </data>
</result>
```