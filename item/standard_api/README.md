# 介绍

此文档为博客中国技术部 REST API 开发规范，技术部后端开发人员须按此规范进行开发。此文档正在完善中，大家在使用的过程中发现有不合理的地方或需要补充的地方，请与我联系:entere@126.com 谢谢

# API设计理念

1.将涉及的实体抽象成资源, 即按id访问资源, 在url上做文章, 以后再也不用为url起名字而苦恼了.

2.使用HTTP动词对资源进行CRUD(增删改查); get->查, post->增, put->改, delete->删.

3.URL命名规则, 对于资源无法使用一个单数名词表示的情况, 我使用中横线(-)连接.

    > 资源采用名词命名, e.g: 产品 -> product
    > 新增资源, e.g: 新增产品, url -> /product , verb -> POST
    > 修改资源, e.g: 修改产品, url -> /products/{id} , verb -> PUT
    > 资源详情, e.g: 指定产品详情, url -> /products/{id} , verb -> GET
    > 删除资源, e.g: 删除产品, url -> /products/{id} , verb -> DELETE
    > 资源列表, e.g: 产品列表, url -> /products , verb -> GET
    > 资源关联关系, e.g: 收藏产品, url -> /products/{id}/star , verb -> PUT
    > 资源关联关系, e.g: 删除收藏产品, url -> /products/{id}/star , verb -> DELETE


写此文档的目的，在于统计后端api风格，减少API维护成本，提高团队开发效率。




PI必须遵循以下规则

### 接口规则：

| 传输方式 | 为保证交易安全性，建议采用HTTPS传输 |
| :------ | :------------ |
| 提交方式 | 采用HTTP协议中的方法提交 |
| 数据格式 | 提交和返回数据都为json格式 |
| 字符编码 | 统一采用UTF-8字符编码 |
| 签名算法 | MD5 |
| 签名要求 | 请求和接收数据均需要校验签名，详细方法请参考[安全规范-签名算法](../chapter4/aqgf.md) |

### 相关约定

常用字段示例

sortby=name 
order=asc/desc
prefix
suffix

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

# 分页数据

### JSON
##### 参考
```
{
    "meta": {
        "code": 200,   //结果码，int 型，必需。客户端应首先根据此项结果进行相应处理。
        "message": "***"
    },
    
    "data" :{
        "page":{
            "limit": 10,    //每页记录条数
            "page": 2,    //当前页码
            "total": 280 //总记录数

        },
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
        "page":{
            "limit": 10,    //每页记录条数
            "page": 2,    //当前页码
            "total": 280 //总记录数

        },
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
        <page>
            <limit></limit>
            <page></page>
            <total></total>
        </page>
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
        <page>
            <limit>20</limit>
            <page>1</page>
            <total>200</total>
        </page>
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

# 错误信息

### JSON
##### 参考
```
{
  "meta": {
    "code": 200,    //结果码，int 型，必需。客户端应首先根据此项结果进行相应处理。
    "message": "***"
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
</result>
```

# request

客户端请求头规范，客户端需按此规范请求API

### 参考

```
curl -X GET \
    http://api.blogchina.com/<path> \
    -H "Accept:application/vnd.<your_team>+json; version=<your_version>"
    -H "Authorization: Blogchina <your_name>: <your_authorization>" \
    -H "Date: Wed, 22 Oct 2015 10:26:46 GMT" \
    -H "Content-Length: <content_length>"
    # 其他参数...
```

### 示例

```
curl -X GET \
    http://api.blogchina.com/<path> \
    -H "Accept:application/vnd.blogchina+json;version=1.1"
    -H "Authorization: Blogchina fxd:aheka3k4fjaaefeqefefaekde" \
    -H "Date: Wed, 22 Oct 2015 10:26:46 GMT" \
    -H "Content-Length: 0"
```


# response

#####服务端响应

