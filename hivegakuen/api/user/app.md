# APP版本号升级

- URL:api/app_version_upgrade

- HTTP请求方式：get
   
- 请求参数：
 
```
{
    "version":'0.1.1'//必传参数
    "type"  :2//选填 //版本类型 1 => '开发测试版', 2 => '稳定版'
    "device" ：  1 //选填 1 => 'Android', 2 => 'Ios'
}
```

- 返回结果：

```
{
	"meta": {
		"code": 200,
		"message": "存在版本号"
	},
	"data": {
		"app_name": "进化学院",
		"server_version": "1.0.1",
		"update_url": "http:\/\/laravelacademy.org\/tags\/laravel",
		"upgrade_info": "更新版本错误",
		"type": 2,
		"device": 1,
                "is_update" : true/false  //true表示客户端需要更新,false表示客户端已是最新版,不需要更新
		"operation_time": "2018-03-07 03:53:58"
	}
}

```

