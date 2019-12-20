#站内完善注册
### `普通用户或第三方用户专栏升级` 
- URL：/sign/columnup

- HTTP请求方式：POST

- 对应数据库：users
- 请求参数：是否必须参数 ：y 

```
{ 
    'accout' => 'xxxxx',// y
    'email' =>'xxxxx',// y
    'mobile'=>'xxxxxxxxxx', //y
    'name'  =>'xxxxx', //y
    'nickname'  => 'xxxxx', //y
    'is_valid_email'=>'y',
    'is_valid_mobile'=>'y',
    'blog_name'=>'xxxxx', //y
    'intro'=>'xxxxx', //个人简介
    'homepage'=>'xxxxx', //博客地址 
    'gender'=> 1,//1男 2女 3保密 
    'realname'=>'xxxxx',//真实姓名
    'group_id' => 200,//['100'=>'评论用户','200'=>'专栏作家']
    'magnumopus'=>'xxxxx',//代表作
    'contact.qq'=>'xxxxx',
    'state' => 'y/n',//当state等于y时为站内用户申请完善注册，否则为站外注册（http://post.blogchina.com/apply 暂未开放）
    'password' => 'xxxxx',//当第三方用户在设置中设置过密码 则不需要填写 否则需要该项
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