# 注册 
### `普通用户邮箱注册` 
- URL：/sign/registeremail 

- HTTP请求方式：POST

- 是否登陆：否
- 对应数据库：emailreg
- 请求参数：是否必须参数 ：y 

```
{
    "accout": "entere@126.com", //y
    "password": "xxxxxx",  //y
    "nickname": "entere",   //y
    'code'=>"xxxxxxxxxxxxxxxxxxxxxxxxx",   
    'add_time' =>time(), 
    'expire' => time()+ intval(60*60*24), 
    'is_employ' => 'y/n',//是否已经开通专栏  
}
```

- 返回结果：

```
{
    "meta":{
        "code": 200,   
        "message":"OK"
    },
    "data":"a0b58ac221c6510ef16b0d5abe115947"
    
}
```

### `邮箱注册审核通过 and 手机注册`
- URL：/sign/up
- HTTP请求方式：POST
- 对应数据库：user
- 请求参数：必传参数 ：y 
- 是否登陆：否

users表
```
{
    'uid'=> intval(1), 
    'auto_uid'=>intval(1), 
    'accout' => "xxxxx",//y 邮箱注册 accout为xxxxx@xx.com  手机注册为 xxxxxxxxxxx
    'email' =>"xxxxx@xx.com",//accout为xxxxx@xx.com时，y
    'mobile'=>"xxxxxxxxxxx", //accout为手机号码时 y
    'name'  =>"xiaoming, 

    'nickname'  => "小敏",//昵称 y
    'realname' => '',//真实姓名  
    'password' => md5(111111),//密码 md5加密 y
    'avatar'   =>'', //头像  
    'avatar_by_editor' => '', 
    'ip'    => "127.0.0.1",
    'add_time' =>time(),
    
    'is_valid_email'=>"y/n",  //邮箱是否绑定
    'is_valid_mobile'=>"y/n",//手机号是否绑定
    'is_avatar_uploaded'=>"y/n",//是否上传头像

    
    'allow_comment'=>'y/n',//是否允许评论
    'moidify_time' => [
        'email' => 0,//是否在允许时间段内修改邮箱
        'nickname' => 0,//暂时不允许修改笔名
        'mobile' =>0,//是否在允许时间段内修改手机号码
    ], 
    
   
    'reward' => [
        'allow' => 'y/n',//是否开通赞赏
        'time' => 0,
        'default_amount' => 200,//200分=2元
        'desc'=>'',//描述
    ],
    'reg_from'=>"blogchina",//来自什么平台 【1,blogchina（博客中国） 2,weibo（微博） 3,weixinweb（微信）】
    'intro'=>"张三 来自北京", //个人介绍
    'homepage'=>'http://xxxxx', //博客地址
    'numbers'=>[    //该数据暂未用上
                'followers'=>0,//粉丝数，
                'friends'=>0,//关注数
        'blog'=>0
    ], 
    
    'gender'=> 1,//1男 2女 3保密  
    'passport'=>'',//护照
    'idcard' => '',//身份证
    'rank'=>'',//暂无描述
    'blog_name'=>'方兴东',//专栏名
    
    'db_id'=>0,//在第几个数据库下 当前仅0库
    
    'group_id' => 100,//['100'=>'评论用户','200'=>'专栏作家',300=>普通用户]
    
    
    //监管操作
    'monitor'=>[
        'is_audit'=>'y',
        'is_pending'=>'n',
        'is_lock'=>'n',
        'is_del'=>'n',
    ],
    
    'birthday'=>[
        'year'=>'',
        'month'=>'',
        'day'=>'',
    ],
    'address'=>[
        'resideprovince'=>'',
        'residecity'=>'',
        'residecounty'=>'',
        'corporation'=>'',
        'custom'=>'',
    ],
    'contact'=>[
        'qq' => $request->input('qq',''),
        'weixin'=>'',
        'tel'=>'',
    ],
    'magnumopus'=>'张三事迹',//代表作
    'privacy'=>[
    ],
    
    'setting'=>[	//私信设置
        'letter' =>[	
            'letter'	=>'public',	//in [public,protected,private]
        ],
        
        'email'=>[	 //邮件设置
            'receive_selected'=> 'n',	//是否接受每日精选邮件
            'receive_subject'=>'n',	//是否接收新专题邮件
        ],
        
        'notification'=>[
            'follow_me' =>[	//有人关注了我
                'notification' => 'public',	//public:接收所有人消息,protected:只接收关注人的消息,private:不接收任何消息
                'email' => 'y/n',	//有消息时邮件提醒我
            ],
            
            'article_recommend' =>[	//我的文章被推荐到首页
                'notification' => 'public',	//public:接收所有人消息,protected:只接收关注人的消息,private:不接收任何消息
                'email' => 'y/n',	//有消息时邮件提醒我
            ],
            
            'comment' =>[	//评论我
                'notification' => 'public',	//public:接收所有人消息,protected:只接收关注人的消息,private:不接收任何消息
                'email' => 'y/n',	//有消息时邮件提醒我
            ],
            
            'article_love'=>[	//我的文章有人点赞
                'notification' => 'public',	//public:接收所有人消息,protected:只接收关注人的消息,private:不接收任何消息
                'email' => 'y/n',	//有消息时邮件提醒我
            ],
            
            'article_commented'=>[	//我评论的文章有新评论
                'notification' => 'public',	//public:接收所有人消息,protected:只接收关注人的消息,private:不接收任何消息
                'email' => 'y/n',	//有消息时邮件提醒我
            ],
            
            'at' =>[	//有人@了我
                'notification' => 'public',	//public:接收所有人消息,protected:只接收关注人的消息,private:不接收任何消息
                'email' => 'y/n',	//有消息时邮件提醒我
            ], 
            
            'comment_love' =>[	//喜欢（赞同）了我的评论
                'notification' => 'public',	//public:接收所有人消息,protected:只接收关注人的消息,private:不接收任何消息
                'email' => 'y/n',	//有消息时邮件提醒我
            ],
        
            'new_article'=>[ 	//我关注的专栏有新文章
                'notification' => 'public',	//public:接收所有人消息,protected:只接收关注人的消息,private:不接收任何消息
                'email' => 'y/n',	//有消息时邮件提醒我
            ],
            
            'article_reward' =>[	//打赏了我的文章
                'notification' => 'public',	//public:接收所有人消息,protected:只接收关注人的消息,private:不接收任何消息
                'email' => 'y/n',	//有消息时邮件提醒我
            ],
        ], 
    ], 
}
 
users_bind表 
{
    'openid'=>11234,//当为第三方用户登录 为openid  否则为uid
    'u_id'=>intval(11234),//uid
    'service'=>"blogchina",//来自什么平台 blogchina weibo weixinweibo    y
    'token'=>'xxxxxxxxxxxxxxxxxxxx',//当为第三方用户登录 为token  否则为空
    'nickname'=>trim(张三), //昵称
    'is_mainuser'=>"y/n",//是否为第三方主账号  y
    'unionid'=>'xxxxxxxxxxxxxxxxxxxxx',//仅微信存在该值 否则为空
    'is_show_platform'=> 0,  //用户首页是否显示平台 暂没用上    
}
```

- 返回结果：

```
{
    "meta":{
        "code": 200,   
        "message":"OK"
    },
    "data":{
        "uid":11234,
        "accout":"11111111@qq.com",
        "nickname":"小敏"
    } 
}
```

 























































- 关于错误返回值与错误代码，参见 [错误代码说明](../README.md)



