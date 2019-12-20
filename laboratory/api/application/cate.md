# 移动端侧栏分类名称

- URL：api/category

- HTTP请求方式：GET

- 是否登陆：是

- 请求参数：

```
{
    "lang": "en", // en/zh_CN 英文/中文
   
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
        "list": [
            {
                "cate_id": 27,//分类id
                "pid": 0,//0是顶级分类
                "sort": 6,//排序
                "name": "关 于",//分类名称
                "url": "about"//分类跳转的url
            },
            {
                "cate_id": 31,
                "pid": 0,
                "sort": 5,
                "name": "网络空间研究",
                "url": "cyberAffairs"
            },
            {
                "cate_id": 29,
                "pid": 0,
                "sort": 4,
                "name": "核心客户",
                "url": "cores"
            },
            {
                "cate_id": 30,
                "pid": 0,
                "sort": 4,
                "name": "团 队",
                "url": "judges"
            },
            {
                "cate_id": 28,
                "pid": 0,
                "sort": 3,
                "name": "研究内容",
                "url": "business"
            }
        ],
        "sign_name": "互联网实验室" 
    }
}

```
