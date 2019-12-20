# 个人所有分类

- URL：/notebook

- HTTP请求方式：GET

- 是否登陆：否

```
{
    "user_id":614198272, //必传参数一
}
```

 

- 返回结果：

```
{
    "meta":{
        "code": 200,
        "message":"OK"
    },
   "data":
     { 
      {
        "_id"：object(MongoId)#481 (1) {
          "$id"：string(24) "578662f5897e842e4f3e5f7c"
        }
        "nid":int(1048224),//分类id
        "name"：string(12) "默认栏目",//分类名
        "user_id"：int(xxxxx),//用户id
        "state"：string(1) "a" //用户自己操作a正常b隐藏 c删除 
        "monitor"：{ //监管操作
          "is_hidden":string(1) "y/n",//是否隐藏
          "is_del":string(1) "y/n"//是否删除
        }
        "articlenum":int(1265),    //分类下的文章总数 
        "fans":int(0),          //分类下的关注数 
      },{
        "_id"：object(MongoId)#481 (1) {
          "$id"：string(24) "578662f5897e842e4f3e5f7c"
        }
        "nid":int(1048224),//分类id
        "name"：string(12) "默认栏目",//分类名
        "user_id"：int(xxxxx),//用户id
        "state"：string(1) "a" //用户自己操作a正常b隐藏 c删除 
        "monitor"：{ //监管操作
          "is_hidden":string(1) "y/n",//是否隐藏
          "is_del":string(1) "y/n"//是否删除
        }
        "articlenum":int(1265),    //分类下的文章总数 
        "fans":int(0),          //分类下的关注数 
      },{
        "_id"：object(MongoId)#481 (1) {
          "$id"：string(24) "578662f5897e842e4f3e5f7c"
        }
        "nid":int(1048224),//分类id
        "name"：string(12) "默认栏目",//分类名
        "user_id"：int(xxxxx),//用户id
        "state"：string(1) "a" //用户自己操作a正常b隐藏 c删除 
        "monitor"：{ //监管操作
          "is_hidden":string(1) "y/n",//是否隐藏
          "is_del":string(1) "y/n"//是否删除
        }
        "articlenum":int(1265),    //分类下的文章总数 
        "fans":int(0),          //分类下的关注数 
      }...
     }
}

```

- 关于错误返回值与错误代码，参见 [错误代码说明](../README.md)