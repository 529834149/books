#站内专栏升级
### `普通用户或第三方用户专栏升级` 
- URL：/apply

- HTTP请求方式：POST

- 对应数据库：columnsapply
- 请求参数：是否必须参数 ：y 

```
{ 
    'user_id' => xxx,//站内升级user_id存在  （站外注册url:http://post.blogchina.com/apply user_id为0,现站外注册暂未开放）
    'email' => 'xxxxxxx@xx',//邮箱 y 
    'mobile' => 'xxxxxxxxxx', // 手机号码 y
    'realname' => "xxx", //真实姓名 y
    'gender' => 1,//性别 y
    'qq' => 'xxxxxxxxx',
    'ip' => 'xxxxx',
    'add_time' => 'xxxxx',//添加时间
    'code' => 'xxxxxx',//code唯一码
    'expire' => 'xxxxxx',//过期时间，2天后过期
    'homepage' => 'xxxxxx',//个人博客地址
    'intro' => 'xxxxxx',//个人简介
    'magnumopus' => 'xxxxxx',//代表作
    'is_register' => 'y/n',//是否完成注册成功，完成注册后更新这个字段
    'active_time' => 'xxxxx',//通过和未通过时间
    'active_ip' => 'xxxxx',//通过和未通过编辑ip 
    'operator' => 'xxxxx',//审核人员姓名
    'reason' => 'xxxxx',//通过，未通过的原因
    'state' => 'a/b/c',//a 审核中，b 通过 c 未通过  
}
```

- 返回结果：

```
{
    "meta":{
        "code": 200,   
        "message":"OK"
    } 
}
```


- 关于错误返回值与错误代码，参见 [错误代码说明](../README.md)