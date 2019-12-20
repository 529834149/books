# APP升级

- URL：sr.blogchina.com/api/app/upgrade

- HTTP请求方式：GET

- 是否登陆：否

- 请求参数：

```
{
    "version" : "0.0.1",   //版本号  必须参数
    "type" : "android" ,   //设备类型 默认android  苹果ios
    "status" : "stable"   //状态,默认stable  开发测试版development
}

```
 
- 返回结果：

```
返回结果:
{
    
    "meta": {
        "code": 200,    //结果码，必需
        "message": "ok"
    },
    "data" : {
        "is_update" : true/false  //true表示客户端需要更新,false表示客户端已是最新版,不需要更新
        "app_name": "博客浏览器",
        "server_version": "2.3.2",  //服务器版本号
        "update_url": "http://bot.blogchina.com/download/app/app-debug-V0.0.2.apk",  //app升级请求url
        "upgrade_info": "优化页面  修复xxxxbug"  //升级相关信息
    }
}

App版本注意事项说明:
版本号格式  主版本号.次版本号.修订号   如： 2.3.2
其中次版本号和修订号位置的数值最大为9  如   3.9.9    3.21.5或3.1.15则为不合格版本号

```
- 关于错误返回值与错误代码，参见 [错误代码说明](../README.md)
