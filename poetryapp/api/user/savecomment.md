# 发表评论

- URL:/api/v1/user/comment

- HTTP请求方式：post
   
- 请求参数：
 
```
Header {
        "Authorization" : token  // 登录状态
        }
{
   content:超级三  //评论内容
   userid:11810   //评论人ID
   objectpid:11773 //被评论诗歌ID
   objectrid:11705 //被评论朗诵ID
   type:2       //被评论对象类型：1：诗歌 2：朗诵
   style:2 //表现形式：1：评论 2：回复
   replyid:9296  //回复的评论ID ,默认为0
   nickname:Boy Friend  //评论人昵称
   objectuserid:11810 //被评论者ID
   objectnickname:Boy Friend //被评论者昵称
   level:3  //评论级别：1、2、3级
}
```

- 返回结果：

```
{
    "code": 0,
    "msg": "请求成功"
}

```

