# 公共交流列表

- URL：evapi.blogcore.cn/api/common/lists

- HTTP请求方式：GET

- 是否登陆：是

- 请求参数：

```
{
    "uid" : 216542    //必传参数 
    "last_time" : 0    //下拉加载 第一次传入时间戳为0
}
```

- 返回结果：

```
{
    "meta": {
        "code": 200,
        "message": "OK"
    },
    "data": {
        "lists":[
                    {
                        "rid": 1,     //点评id
                        "aid": 622578688,      //点评的文章id
                        "body": "这是我对带当前文章进行的推荐点评的内容",    //点评的内容
                        "title": "雷军一定后悔将小米MIX2价格定低了",        //点评文章的题目
                        "comment": "我感兴趣的是小米MIX2的价格",        //最新的一条评论
                        "comment_username": "好神奇",                  //最新评论人的真是姓名
                        "comment_company": "博客中国",               //最新评论人的公司
                        "addtime": "2018-11-16 16:21",              //发布时间
                        "commentnumber": 51,                    //评论总条数
                        "userid":  488303617,                 //点评人id
                        "username": "方新东",               //点评人姓名
                        "usercompany": "博客中国",          //点评人公司
                        "useravatar": "http://avatar.blogchina.com/HeadPic/df180ec376b3d26b1340607288428d28",    //点评人头像
                        "comment_isclick": "y", //最新评论是否被点击过y/n,y表示点击过，n表示未点击过
                        "remark_isclick": "n",  //最新点评是否被点击过y/n,y表示点击过，n表示未点击过
                        "red_mark": "y", //是否有红点标记y/n,y表示有，n表示没有
                        "sorttime": 1343134134   //排序时间，下次加载服务器需要最后一条的时间
                    },
                    {
                        "rid": 1,
                        "aid": 622578688,
                        "body": "这是我对带当前文章进行的推荐点评的内容",
                        "title": "雷军一定后悔将小米MIX2价格定低了",
                        "comment": "我感兴趣的是小米MIX2的价格",
                        "comment_username": "好神奇",                  //最新评论人的真是姓名
                        "comment_company": "博客中国",               //最新评论人的公司
                        "addtime": "2018-11-16 16:21",
                        "commentnumber": 51,
                        "userid":  488303617,                 //点评人id
                        "username": "方新东",
                        "usercompany": "博客中国",
                        "useravatar": "http://avatar.blogchina.com/HeadPic/df180ec376b3d26b1340607288428d28",
                        "comment_isclick": "y", //最新评论是否被点击过y/n,y表示点击过，n表示未点击过
                        "remark_isclick": "n",  //最新点评是否被点击过y/n,y表示点击过，n表示未点击过
                        "red_mark": "y",   //是否有红点标记y/n,y表示有，n表示没有
                        "sorttime": 1343134134   //排序时间,下次加载服务器需要最后一条的时间
                    },......
                ],
                "relateme_mark": "y"    //与我相关模块是否有小红点显示y/n,y表示有小红点，n表示没有小红点
    }
}
```