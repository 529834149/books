# 发送通知

- URL:/api/v1/sendMessage

- HTTP请求方式：POST
   
- 请求参数：
 
```

{
  userid:62  // 用户id
  content:订阅了您   // 订阅内容    
  type:3    //类型：1：赞 3：订阅 4：转发 5：系统 6：朗诵 7：一对一通知
  pushuserid:69  //发送消息用户ID 
  pushnickname:青椒 //发送消息用户昵称
}
```

- 返回结果：

```
{
    "code": 0,
    "msg": "请求成功"
}
```

