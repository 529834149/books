# 修改头像

- URL:/api/updatent

- HTTP请求方式：PUT

- 是否登陆：是

- 请求参数：

```
{
    "token":xxxxxxx//必传参数
    "avatar":xxxxxx //必传参数,修改的头像信息
}
```

- 返回结果：

```
{
    "meta": {
        "code": 200,
        "message": "OK"
    },
    
    	"data": "http:\/\/images.blogchina.com\/v5_ogc\/59d2fdb1282401506999729.jpg!m150"  //修改的图片路径
    }
    
}

```