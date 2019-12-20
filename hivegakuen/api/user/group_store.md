# 申请入群

- URL:http://hiveapi.blogchina.com/api/group

- HTTP请求方式：post

- 是否登陆：是

- 请求参数：
 
```
{ 
    token:xxx // 必传参数
    city_id:xxx  // 必传参数      城市id
}
```

- 返回结果：

```
{
	"meta": {
		"code": 200, 200成功 /500 服务器错误
		"message": "OK"
	}
}
```