# 城市列表

- URL:http://hiveapi.blogchina.com/api/group/openCity

- HTTP请求方式：get

- 是否登陆：是

- 请求参数：
 
```
{ 
    
}
```

- 返回结果：

```  
{
	"meta": {
		"code": 200, 200成功 /404 没有找到
		"message": "OK"
	},
	"data": [{
		"city_id": 12,//城市id
		"city_name": "河北省" //城市名称
	}, {
		"city_id": 13,
		"city_name": "石家庄"
	}, {
		"city_id": 14,
		"city_name": "邯郸"
	}, {
		"city_id": 15,
		"city_name": "内蒙古自治区"
	}, {
		"city_id": 16,
		"city_name": "赤峰"
	}, {
		"city_id": 17,
		"city_name": "翁牛特旗"
	}, {
		"city_id": 18,
		"city_name": "科尔沁旗"
	}, {
		"city_id": 19,
		"city_name": "北京市"
	}]
}
```