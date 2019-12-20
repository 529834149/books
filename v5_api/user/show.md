# 获取用户信息
根据uid获取用户信息

- URL：/user/xxx?type=uid

- HTTP请求方式：GET

- 是否登陆：否

- 请求参数 是否必传 y
```
{
   "type":"xxx"   //in uid,email,name
   'id':'xxx' , y
}
```

- 返回结果：

```
{
    "meta":{
        "code": 200,
        "message":"OK"
    },
    "data": {
    "uid": 59200265,//用户id
    "accout": "tangtangtang",
    "email": "13141223060@189.cn", //邮箱
    "mobile": "xxxxx",//手机号码
    "name": "tangtangtang",//用户名
    "nickname": "糖糖糖",//笔名
    "avatar": "http://avatar.blogchina.com/v5_avatar/578768f5df5cb1468492021.png",//头像
    "avatar_by_editor": "",//编辑头像 暂时未用上
    "add_time": 1437731308,//添加时间
    "is_valid_email": "y",//邮箱是否绑定
    "is_valid_mobile": "y",//手机号码是否绑定
    "reward": {
      "allow": "n" //是否开通赞赏
    },
    "reg_from": "blogchina",//来自平台
    "intro": "唐僧取经",//简介
    "homepage": "",//博客地址
    "gender": 1,//性别
    "realname": "唐启胤",//真实姓名
    "rank": "专栏作家",//头衔
    "blog_name": "",//专栏名
    "contact": {
      "qq": "",
      "weixin": "",
      "tel": ""
    },
    "address": {
      "custom": ""
    },
    "magnumopus": "唐僧取经",//摘要
    'setting':{	//私信设置
        'letter' :{	
            'letter':'public',	//in [public,protected,private]
        },
        
        'email':{ //邮件设置
            'receive_selected': 'n',	//是否接受每日精选邮件
            'receive_subject':'n',	//是否接收新专题邮件
        },
        
        'notification':{
            'follow_me':{	//有人关注了我
                'notification':'public',	//public:接收所有人消息,protected:只接收关注人的消息,private:不接收任何消息
                'email' : 'y/n',	//有消息时邮件提醒我
            },
            
            'article_recommend' :{	//我的文章被推荐到首页
                'notification':'public',	//public:接收所有人消息,protected:只接收关注人的消息,private:不接收任何消息
                'email': 'y/n',	//有消息时邮件提醒我
            },
            
            'comment':{	//评论我
                'notification':'public',	//public:接收所有人消息,protected:只接收关注人的消息,private:不接收任何消息
                'email' : 'y/n',	//有消息时邮件提醒我
            },
            
            'article_love':{	//我的文章有人点赞
                'notification' : 'public',	//public:接收所有人消息,protected:只接收关注人的消息,private:不接收任何消息
                'email' : 'y/n',	//有消息时邮件提醒我
            },
            
            'article_commented':{	//我评论的文章有新评论
                'notification' : 'public',	//public:接收所有人消息,protected:只接收关注人的消息,private:不接收任何消息
                'email' : 'y/n',	//有消息时邮件提醒我
            },
            
            'at' :{	//有人@了我
                'notification' : 'public',	//public:接收所有人消息,protected:只接收关注人的消息,private:不接收任何消息
                'email' : 'y/n',	//有消息时邮件提醒我
            }, 
            
            'comment_love' :{	//喜欢（赞同）了我的评论
                'notification' : 'public',	//public:接收所有人消息,protected:只接收关注人的消息,private:不接收任何消息
                'email' : 'y/n',	//有消息时邮件提醒我
            },
        
            'new_article':{ 	//我关注的专栏有新文章
                'notification': 'public',	//public:接收所有人消息,protected:只接收关注人的消息,private:不接收任何消息
                'email': 'y/n',	//有消息时邮件提醒我
            },
            
            'article_reward' :{	//打赏了我的文章
                'notification' : 'public',	//public:接收所有人消息,protected:只接收关注人的消息,private:不接收任何消息
                'email' : 'y/n',	//有消息时邮件提醒我
            },
        }, 
     }, 
    },
    "moidify_time": {
      "email": 1472021053,//修改绑定邮箱的过期时间 半年修改一次
      "mobile": 1473039543 //修改绑定的手机号码过期时间 半年修改一次
    },
    "group_id": 200,//什么用户  100第三方用户，200专栏作家，300普通用户
    "letter": "糖",//笔名首个文字
    "avatar_color": "e58951",//背景色
    "bind": { 
      "service": "blogchina",//来自什么平台 暂时包含 blogchina weibo weixiweibo
      "is_mainuser": "y"//该帐号是否为主帐号
    },
    "is_pass_empty": "n" //密码是否为空
  }
      
}
```

- 关于错误返回值与错误代码，参见 [错误代码说明](../README.md)