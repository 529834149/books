# event
项目中的Event和Job


### 事件列表

| event             |  描述        |  ** |
| :--------         | :---------       |:----------------|
|ArticleNumEvent|发表文章或删除文章时用户文章数，个人分类文章数增减|**|
|SignInEvent|登录后创建并存储jwt令牌|**|
|UserLogEvent|写用户相关日志|**|
|TimelineEvent|有相关事件时，把我的动态入库|**|
|NotificationEvent|入库通知同时未读通知数+1|**|
|SendEmail[job]|发送各邮件|**|

### 使用方法：

event 示例

```php
<?php

    public function getEvent(Request $request)
    {
        $data = [
            'uid' => 31,
            'nid'=>11,
            'num' => 1,
        ];
        return \Event::fire(new ArticleNumEvent($data));
    }
?>
```

job 示例


```php

<?php
    public function getJob(Request $request)
    {
        $data = [
            'view'=>'pwd_reset',
            'subject' => '找回密码',
            'email'=>$request->input('email','entere@qq.com'),
            'code'=>strtolower(md5(uniqid())),
            'add_time'=>time(),
            'expire' => time()+ intval(env('MAIL_CODE_EXPIRE',60*60*24*30)),//30天后过期
            'ip'=>$request->input('ip',\Request::ip()),//发邮件产生的ip
            'active_time'=>0,//新密码产生时间
            'active_ip'=>'',//新密码产生时的ip
        ];


        //把任务推送到指定队列
        $job = (new SendEmail($data))->onQueue('v5:emails');
        $r = $this->dispatch($job);
        return $r;
    }
?>
```

