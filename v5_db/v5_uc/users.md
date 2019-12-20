# users
用户表，第三方登录用户，专栏用户

### 数据结构

```json

{
    "_id" : ObjectId("5677730046d81242120041a7"),
    "uid" : NumberLong(605735432),
    "deprecated_uid" : NumberLong(605735432),
    "auto_uid" : NumberLong(14),
    "accout" : "entere@126.com",
    "email" : "entere@126.com",
    "mobile" : "",
    "name" : "",
    "nickname" : "hello",
    "password" : "111111",
    "avatar" : "",
    "avatar_by_editor" : "",
    "ip" : "127.0.0.1",
    "add_time" : NumberLong(1450668800),
    "is_valid_email" : "n",
    "is_valid_mobile" : "n",
    "is_avatar_uploaded" : "n",
    "allow_comment" : "y",//新文章默认开启评论 
    "moidify_time": {//最后一次修改时间
        "email":0,//
        "nickname":0,
        "mobile":0,
        
    },
    "reward" : {
        "allow":"n",//为全部文章开启打赏
        "time" : 1432456543,//开通时间
        "default_amount":200,//200分=2元
        "desc": "如果你觉得好请随意打赏",
    },
    "reg_from" : "blogchina",
    "intro" : "",
    "homepage" : "",
    //numbers 在redis中
    "gender" : NumberLong(3),//1男 2女 3保密
    "realname" : "",
    "passport":",//护照
    "idcard":",//身份证
    "rank" : "",
    "blog_name" : "",
    "deprecated_db_id" : NumberLong(0),
    "ywt_id" : "",
    "contact" : {
        "qq" : "",
        "weixin" : "",
        "tel" : "", //电话
        "other_email" : "",
    },
    "birthday" : {
        "year" : "",
        "month" : "",
        "day" : ""
    },
    "address" : {
        "resideprovince" : "",
        "residecity" : "",
        "residecounty" : "",
        "corporation" : ""
    },
    "magnumopus" : "",
    "privacy" : "",
    "group_id" : 100,//['100'=>'评论用户','200'=>'专栏作家']
    
    "monitor" : {
        "is_audit" : "y",
        "is_pending" : "n",
        "is_lock" : "n",
        "is_del" : "n"
    },
    "setting":{
        "letter":{//私信设置
            "letter":"private",//in [public,protected,private]
        },
        "email":{ //邮件设置
            "receive_selected":"n",//是否接受每日精选邮件
            "receive_subject":"n", //是否接收新专题邮件
        },
        "notification":{ //消息设置
            "follow_me":{ //有人关注了我
                "notification":"public",//public:接收所有人消息,protected:只接收关注人的消息,private:不接收任何消息
                "email":"n",//y有消息时邮件提醒我
            },
            "article_recommend":{ //我的文章被推荐到首页
                "notification":"public",//public:接收所有人消息,protected:只接收关注人的消息,private:不接收任何消息
                "email":"n",//y有消息时邮件提醒我
            },
            "comment":{ //我的文章有了新评论
                "notification":"public",//public:接收所有人消息,protected:只接收关注人的消息,private:不接收任何消息
                "email":"n",//y有消息时邮件提醒我
            },
            "article_love":{ //我的文章有人点赞
                "notification":"public",//public:接收所有人消息,protected:只接收关注人的消息,private:不接收任何消息
                "email":"n",//y有消息时邮件提醒我
            },

            "article_commented":{ //我评论的文章有新评论
                "notification":"public",//public:接收所有人消息,protected:只接收关注人的消息,private:不接收任何消息
                "email":"n",//y有消息时邮件提醒我
            },

            "at":{ //有人@了我
                "notification":"public",//public:接收所有人消息,protected:只接收关注人的消息,private:不接收任何消息
                "email":"n",//y有消息时邮件提醒我
            },

            "comment_love":{ //喜欢（赞同）了我的评论
                "notification":"public",//public:接收所有人消息,protected:只接收关注人的消息,private:不接收任何消息
                "email":"n",//y有消息时邮件提醒我
            },

            "new_article":{ //我关注的专样有新文章
                "notification":"public",//public:接收所有人消息,protected:只接收关注人的消息,private:不接收任何消息
                "email":"n",//y有消息时邮件提醒我
            },
            
            
            "article_reward":{ //打赏了我的文章
                "notification":"public",//public:接收所有人消息,protected:只接收关注人的消息,private:不接收任何消息
                "email":"n",//y有消息时邮件提醒我
            },
            
            

        },
    }

    
    
    
}

```
## 索引信息

```
db.users.ensureIndex({"uid":1},{"unique":true},{"background":true}); 
db.users.ensureIndex({"accout":1},{"background":true}); 
db.users.ensureIndex({"email":1},{"background":true}); 
db.users.ensureIndex({"mobile":1},{"background":true}); 
db.users.ensureIndex({"name":1},{"background":true}); 


```
