#评论点赞:当前用户点给哪篇文章下的哪条评论点赞

- URL：api/addpraise

- HTTP请求方式：get

- 是否登陆：是

- 请求参数：

```
{
    "userid" ："1",//当前登录的用户
    "type" :remark",//remark推荐点评点赞   reviews 评论点赞
    "type_id" :"xxx",//文章id||评论id    文章id改成点评rid   10.31新增
    "status" :"1",//1喜欢 0 取消喜欢 //
   
}
注释:对哪篇文章下的点评进行点赞


注释:
推荐点评点赞  type_id = 文章id
评论点赞    type_id = 评论id
```

- 返回结果：

```
{
    "meta": {
        "code": 200,
        "message": "OK"
    },
    "data": {
        "num": 8
    }
}
```
- redis点赞规则:
```
1、点评点赞/取消点赞
    $key = 'ev:num:remark:'.$remark;
    $act = 'click';
    $num = 1点赞 -1取消点赞
    注释:incrRemarkNum($remark（文章id）,$act,$num)
2、用户总赞数
    $key = 'ev:num:uid:'.$uid;
    $act = 'total';
    $num = 1点赞 -1取消点赞
3、评论点赞/取消点赞
    $key = 'ev:num:reviews:'.$did;($did评论id)
    $act = 'comment';
    $num = 1点赞 -1取消点赞
4、文章下的评论个数
    $key = 'ev:num:commentid:'.$aid;
    $act = 'total';
    $num = 1点赞 -1取消点赞

```
