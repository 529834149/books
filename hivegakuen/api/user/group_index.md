# 单个群与选择群展示页

- URL:http://hiveapi.blogchina.com/api/group

- HTTP请求方式：get

- 是否登陆：是

- 请求参数：
 
```
{ 
    token:xxx // 必传参数
    city_id:xxx  //可传可不传  当不传递的时候直接进入群组管理页面   当传递的时候为选择城市后回跳到的群组管理页
}
```

- 返回结果：

```
{
	"meta": {
		"code": 200, 200成功 /404没找到城市  /500 服务器错误
		"message": "OK"
	},
	"data": {
		"group_id": 1,//群id
		"group_name": "北京群",//群名称
		"group_introduce": "是大V阿斯顿发斯蒂芬撒地方撒旦发斯蒂芬阿斯蒂芬士大夫阿斯蒂芬发",//群简介
		"city_id": 19,//城市id
		"city_name": "北京市",//城市名称
		"status": 0,//入群状态  0为未申请 1为审核中 2为通过 3为拒绝
		"people_count": 1//对应的群下面人数
	}
}
```