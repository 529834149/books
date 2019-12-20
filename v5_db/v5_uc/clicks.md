# clicks [过期，业务放到文章表中]
表态，如下业务：有那些登录的用户支持、反对、打赏了文章


### 数据结构
表态的类型有如下几种：

|type|说明|
|:---|:---------|
|article_support    |支持这篇文章的用户列表|
|article_oppose     | 反对这篇文章的用户列表|
|article_reward     |打赏这篇文章的用户列表|
|

各类型数据结构：

```json

{
    "_id" : ObjectId("547fd2ed2997cfa475516662"),
    "uid" : 597346824,//登陆用户
    "type": "article_support",
    "id"  : "",//业务id,article_*就是aid
    "add_time" : 1450662531,
    "ip" : "127.0.0.1",
    "is_del":
    
}




```