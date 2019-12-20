# 用户表信息
userbind
### 数据结构

```json

{
    'openid':11234,//当为第三方用户登录 为openid  否则为uid
    'uid':intval(11234),//uid
    'service':"blogchina",//来自什么平台 blogchina weibo weixinweibo   
    'nickname':trim(张三), //昵称 没有为空
    'avatar':xxx,//第三方头像 没有为空
    'is_mainuser':"y/n",//是否为第三方主账号  y
    'unionid':'xxxxxxxxxxxxxxxxxxxxx',//仅微信存在该值 否则为空 
}

```