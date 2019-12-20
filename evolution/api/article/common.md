#写评论:发表评论和回复评论不一样的地方在于：发表文章fid : 0 

- URL：api/reviews

- HTTP请求方式：post

- 是否登陆：是

- 请求参数：

```
{
    "userid" ："1",//当前登录的用户
    "article_id" : "xxx", //对哪篇文章进行回复和/评论
    "fid" :0, // 父级id，注释:存在fid说明是回复  不存在显示0 则是评论
    "body" : "xxx",//当前评论内容
    "rid" :"2154" ,//对哪篇文章下的点评进行评论
}
```

- 返回结果：

```
{"meta":{"code":200,"message":"OK"},"data":{"reviews_id":189}}//reviews_id 评论Id
```