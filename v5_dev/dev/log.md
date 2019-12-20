# log
需要写日志的地方：

### 日志列表

| 类型        |   描述                |  ** |
| :--------   | :---------  |:----------------|
|sign-in|登录成功|     |
|sign-out|登出成功|n     |
|moving-store|博客搬家|n     |
|writer-publish|发表文章|     |
|article-nums-support|支持|n     |
|article-nums-oppose|反对|n     |
|post-top|文章置顶|n     |
|post-visiable|设为隐私|n     |
|post-soft-destroy|删除到回收站|     |
|post-destroy|从回收站删除|     |
|post-put-back|从回收站恢复|     |
|discuss-store|发表评论|     | 
|follow-destroy|取消关注[用户]|     |
|disucss-likes|评论喜欢|     |
|disucss-cancel-likes|评论取消喜欢|     |
|disucss-destroy|删除自己发表的|     |
|search-show|用户搜索|n     |
|ogc-recommend|文章被推荐到首页|     |
|ogc-updateuserinfo|更改用户信息|     |
|ogc-changeuser|审核用户|     |
|ogc-changearticle|审核文章|     |
|ogc-changecomment|审核评论|     |
|ogc-complainarticle|操作申诉文章|     |
|ogc-reward|审核赞赏|     |
|apply_success|站外注册审核通过|     | 
|apply_refused|站外注册审核拒绝通过|     |
|pwd_reset|重置密码|		|
|mail_confirm|验证邮箱|		|
|follow-store|添加关注|		|
|follow-destory|删除关注|		|
|moving-store|博客搬家|		|  
|user-email-update|修改邮箱|		|
|user-mobile-update|修改手机号|		| 
|upgrade-columnist|升级为专栏作家|		|
|domestic-consumer|注册为普通用户|		|
|user-update|修改用户表通知状态|		|







### 传给UserLogEvent的参数：

sign-in

```php
     <?php
        $data = [
            //base
            'uid' => '',
            'type'=> 'sign-in' ,//日志类型
            'add_time' => time(),
            'ip' => $request->input('ip','127.0.0.1'),
            'agent' => $request->input('agent',''),

            //extend
            //'aid' => '',//文章id
        ];
    ?>

```


writer-publish

```php
     <?php
        $data = [
            //base
            'uid' => '',
            'type'=> 'writer-publish' ,//日志类型
            'add_time' => time(),
            'ip' => $request->input('ip','127.0.0.1'),
            'agent' => $request->input('agent',''),

            //extend
            'aid' => '',//文章id
        ];
    ?>

```

post-soft-destroy/post-destroy/post-put-back

```php
     <?php
        $data = [
            //base
            'uid' => '',
            'type'=> 'post-soft-destroy/post-destroy/post-put-back' ,//日志类型
        
            'add_time' => time(),
            'ip' => $request->input('ip','127.0.0.1'),
            'agent' => $request->input('agent',''),

            //extend
            'aid' => '',//文章id
        ];
    ?>

```

discuss-store

```php
     <?php
        $data = [
            //base
            'uid' => '',
            'type'=> 'discuss-store' ,//日志类型
            'add_time' => time(),
            'ip' => $request->input('ip','127.0.0.1'),
            'agent' => $request->input('agent',''),

            //extend
            'aid' => '',//文章id
            'author_id' => '',//文章作者id
            'did' => '' //评论id
        ];
    ?>

```
 

follow-destroy

```php
     <?php
        $data = [
            //base
            'uid' => '',
            'type'=>'follow-destroy',
            
            'add_time' => time(),
            'ip' => $request->input('ip','127.0.0.1'),
            'agent' => $request->input('agent',''),

            //extend
            'friend_uid' => $params['friend_uid'],

        ];
    ?>

```

ogc-updateuserinfo

```php
     <?php
        $data = [
            //base
            'uid' => '',
            'type'=> 'ogc-updateuserinfo' ,//日志类型
            'add_time' => time(),
            'ip' => $request->input('ip','127.0.0.1'),
            'agent' => $request->input('agent',''),

            //extend
            'user_id' => '',//被操作的用户
            'operate' => '',//修改的什么信息
        ];
    ?>

```


ogc-changeuser

```php
     <?php
        $data = [
            //base
            'uid' => '',
            'type'=> 'ogc-changeuser' ,//日志类型
            'add_time' => time(),
            'ip' => $request->input('ip','127.0.0.1'),
            'agent' => $request->input('agent',''),

            //extend
            'user_id' => '',//被操作的用户
            'operate' => '',//操作的动作 通过:pass,拒绝:reject,解锁:unlock,锁定:lock,删除:delete,未申:unaudit,恢复正常:normal
        ];
    ?>

```

ogc-changearticle

```php
     <?php
        $data = [
            //base
            'uid' => '',
            'type'=> 'ogc-changearticle' ,//日志类型
            'add_time' => time(),
            'ip' => $request->input('ip','127.0.0.1'),
            'agent' => $request->input('agent',''),

            //extend
            'article_id' => '',//被操作的文章
            'operate' => '',//操作的动作 通过:pass,未申:unaudit,删除:delete,隐藏:hidden
        ];
    ?>

```


ogc-changecomment

```php
     <?php
        $data = [
            //base
            'uid' => '',
            'type'=> 'ogc-changecomment' ,//日志类型
            'add_time' => time(),
            'ip' => $request->input('ip','127.0.0.1'),
            'agent' => $request->input('agent',''),

            //extend
            'comment_id' => '',//被操作的评论
            'operate' => '',//操作的动作 通过:pass,未申:unaudit,删除:delete
        ];
    ?>

```

ogc-complainarticle

```php
     <?php
        $data = [
            //base
            'uid' => '',
            'type'=> 'ogc-complainarticle' ,//日志类型
            'add_time' => time(),
            'ip' => $request->input('ip','127.0.0.1'),
            'agent' => $request->input('agent',''),

            //extend
            'article_id' => '',//被操作的评论
            'operate' => '',//操作的动作 通过:pass,拒绝:reject
        ];
    ?>

```

ogc-recommend

```php
     <?php
        $data = [
            //base
            'uid' => '',
            'type'=> 'ogc-recommend' ,//日志类型
            'add_time' => time(),
            'ip' => $request->input('ip','127.0.0.1'),
            'agent' => $request->input('agent',''),

            //extend
            'article_id' => '',//被操作的评论
            'operate' => 'recommend',//操作的动作 发布:recommend,取消发布:unrecommend
        ];
    ?>

```

ogc-reward

```php
     <?php
        $data = [
            //base
            'uid' => '',
            'type'=> 'ogc-reward' ,//日志类型
            'add_time' => time(),
            'ip' => $request->input('ip','127.0.0.1'),
            'agent' => $request->input('agent',''),

            //extend
            'user_id' => '',//被操作的评论
            'operate' => '',//操作的动作 通过:pass,拒绝:reject
        ];
    ?>

```


```php
$data = [
            'uid' => 0,
            'email'=>$request->input('email'),
            'view' => 'apply_success',
            'add_time'=>time(),
            'expire' => strtotime('+2 day'),//2天后过期
            'ip'=>$request->input('ip',\Request::ip()),//发邮件产生的ip
            'active_time'=>0,//新密码产生时间
            'active_ip'=>'',//新密码产生时的ip
            'code'=> $request->input('code'),
        ];
```



```php
$data = [
            'uid' => 0,
            'email'=>$request->input('email'),
            'code'=>strtolower(md5(uniqid())),
            'view' => 'apply_refused',
            'add_time'=>time(),
            'expire' => time()+ intval(env('MAIL_CODE_EXPIRE',60*60*24*30)),//30天后过期
            'ip'=>$request->input('ip',\Request::ip()),//发邮件产生的ip
            'active_time'=>0,//新密码产生时间
            'active_ip'=>'',//新密码产生时的ip
            'extend'=> $request->input('reason'),
        ];
```

```php
$data = [
            'uid'=>intval($result['uid']),
            'email'=>$request->input('email'),
            'view'=>'pwd_reset',//邮件模板名称
            'code'=>strtolower(md5(uniqid())),
            'add_time'=>time(),
            'expire' => time()+ intval(env('MAIL_CODE_EXPIRE',60*60*24*30)),//30天后过期
            'ip'=>$request->input('ip',\Request::ip()),//发邮件产生的ip
            'active_time'=>0,//新密码产生时间
            'active_ip'=>'',//新密码产生时的ip
        ];
```


```php
$data = [
            'uid'=>intval($request->input('uid')),
            'email'=>$request->input('email'),
            'view'=>'mail_confirm',//邮件模板名称
            'code'=>strtolower(md5(uniqid())),
            'add_time'=>time(),
            'expire' => time()+ intval(env('MAIL_CODE_EXPIRE',60*60*24*30)),//30天后过期
            'ip'=>$request->input('ip',\Request::ip()),//发邮件产生的ip
            'active_time'=>0,//新密码产生时间
            'active_ip'=>'',//新密码产生时的ip
        ];
```

```php
$data = [
            'uid'=>$user_id,
            'email'=>$params['newemail'],
            'view'=>'email_reset',//邮件模板名称
            'code'=>strtolower(md5($params['newemail'].time().uniqid())),
            'add_time'=>time(),
            'expire' => time()+intval(60*60*24*2),// intval(env('MAIL_CODE_EXPIRE',60*60*24*2)),//2天后过期
            'ip'=>$request->input('ip',\Request::ip()),//发邮件产生的ip
            'active_time'=>0,//新密码产生时间
            'active_ip'=>'',//新密码产生时的ip
        ];
```
```php
 UserLog::create([
		            'uid' => $params['fans_uid'],
		            'type'=>'follow-store',
		            'controller'=>'follow',
		            'action'=>'store',
		            'desc' => '添加关注',//日志描述
		            'add_time' => time(),
		            'ip' => $params['ip'],
		            'agent' => $request->input('agent',\Agent::getUserAgent()), 
		            'friend_uid' => $params['friend_uid'],
		        ]);

```


```php
UserLog::create([
            'uid' => $params['fans_uid'],
            'type'=>'follow-destory',
            'controller'=>'follow',
            'action'=>'destory',
            'desc' => '取消关注',//日志描述
            'add_time' => time(),
            'ip' => $params['ip'],
            'agent' => $request->input('agent',\Agent::getUserAgent()), 
            'friend_uid' => $params['friend_uid'],
        ]);

```


```php
UserLog::create([
                //base
                'uid' => $user_id,
                'type'=> 'moving-store' ,//日志类型
                'add_time' => time(),
                'ip' => $request->input('ip','127.0.0.1'),
                'agent' => $request->input('agent',\Agent::getUserAgent()),
                //extend
                'aid' => intval($aid),
                
            ]);

```
 

  
```php
UserLog::create([
            'uid' => intval($user_id),
            'type'=>'user-email-update',
            'controller'=>'user',
            'action'=>'upresetyzmail',
            'desc' => '修改用户邮箱',//日志描述
            'add_time' => time(), 
            'prev_email' => $useremail,
            'agent' => $request->input('agent',\Agent::getUserAgent()),  
        ]); 
```
```php
UserLog::create([
            'uid' => intval($user_id),
            'type'=>'user-mobile-update',
            'controller'=>'user',
            'action'=>'verifyresetphone',
            'desc' => '修改用户手机号码',//日志描述
            'add_time' => time(), 
            'prev_mobile' => $prevmobile,
            'ip' => $request->input('ip',$request->ip()),
            'agent' => $request->input('agent',\Agent::getUserAgent()),  
        ]);  
``` 
```php
UserLog::create([
		            'uid' => intval($uid),
		            'type'=>'upgrade-columnist',
		            'controller'=>'sign',
		            'action'=>'postcolumnup',
		            'desc' => '升级为专栏作家',//日志描述
		            'add_time' => time(),
		            'ip' => $request->input('ip',$request->ip()), 
		            'agent' => $request->input('agent',\Agent::getUserAgent()),
		        ]);
```
```php
UserLog::create([
            'uid' => intval($uid),
            'type'=>'domestic-consumer',
            'controller'=>'sign',
            'action'=>'postup',
            'service'=>$request->input('reg_from'),
            'desc' => '普通用户',//日志描述
            'add_time' => time() ,
            'ip' => $request->input('ip',$request->ip()), 
		    'agent' => $request->input('agent',\Agent::getUserAgent()),
        ]); 
```
```php
UserLog::create([
		            'uid' => $id,
		            'type'=>'user-update',
		            'controller'=>'user',
		            'action'=>'update',
		            'desc' => '修改用户表',//日志描述
		            'add_time' => time(), 
		            'agent' => $request->input('agent',\Agent::getUserAgent()),  
		        ]); !
``` 




































