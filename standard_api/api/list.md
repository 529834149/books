# 列表数据

### JSON
##### 参考
```
{
    "meta": {
        "code": 200,        //结果码，int 型，必需。客户端应首先根据此项结果进行相应处理。
        "message": "***"
    },
    
    "data" :{

        "***":"***",//需要返回的其它扩展字段
        
        "items":[
            {
                "id":1,
                "title":"每天五分钟，给思想加油",
                "content": "博客中国是中国博客的发源地，自媒体意见领袖在根据地",
                "created_at": "Fri Aug 22 00:00:00 +0800 2014"
            },
            {
                "id":2,
                "title":"胡适“回家”干什么",
                "content": "设若地下有知，我们再去问一问这位适之先生",
                "created_at": "Fri Aug 21 00:00:00 +0800 2014"
                
            }

        ]
    }

    
}
```
##### 示例
```
{
    "meta": {
        "code": 200,   //结果码，必需
        "message": "success"
    },
    
    "data" :{
       
        "items":[
            {
                "id":1,
                "title":"每天五分钟，给思想加油",
                "content": "博客中国是中国博客的发源地，自媒体意见领袖在根据地",
                "created_at": "Fri Aug 22 00:00:00 +0800 2014"
            },
            {
                "id":2,
                "title":"胡适“回家”干什么",
                "content": "设若地下有知，我们再去问一问这位适之先生",
                "created_at": "Fri Aug 21 00:00:00 +0800 2014"
                
            }

        ]
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
        <items>
            <item>
                <id></id>
                <title></title>
                <content></content>
                <created_at></created_at>
            </item>
            <item>
                <id></id>
                <title></title>
                <content></content>
                <created_at></created_at>
            </item>
        </items>
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
        <items>
            <item>
                <id>1</id>
                <title>每天五分钟，给思想加油</title>
                <content>博客中国是中国博客的发源地，自媒体意见领袖在根据地</content>
                <created_at>Fri Aug 22 00:00:00 +0800 2014</created_at>
            </item>
            <item>
                <id>2</id>
                <title>胡适“回家”干什么</title>
                <content>设若地下有知，我们再去问一问这位适之先生地</content>
                <created_at>Fri Aug 21 00:00:00 +0800 2014</created_at>
            </item>
        </items>
    </data>
</result>
```