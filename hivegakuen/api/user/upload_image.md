# 上传头像

- URL:api/hiveimage

- HTTP请求方式：post
   
- 请求参数：
 
```
{
    "hive_image_token":'afjkegkgjsss348@4@#asefksjyusrfg'//必传参数 固定值
              图片上传信息 如：临时文件 type。。。
}
```

- 返回结果：

```
{
    "meta": {
        "code": 200,
        "message": "OK"
    }
    "data":{
    	"pic":"/hive_image/5a5853d02c3081515738064.jpg"
    }
}

```

