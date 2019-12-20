# 消息通知流程

### 1.概述

以用户A向用户B发通知为例

A向B发通知，系统先判断B有没有在线，如果B不在线，通知存下来，暂不发送

B在线分几种情况：web在线（chrome在线、safari在线），移动在线；如果果同时在线，通知都要推送到

B退出也分几种情况：比如B只退出的chrome,safari还登录着，清理在线时就是区分对待了

### 2.数据结构
用redis来存储 用户id(uid),socketid(sid),channelid(cid)之前的关系解释一下uid,cid和sid

> * uid:登陆用户的唯一id

> * cid:cid是为了解决这样一个问题如下问题:用户用多个浏览器都登录了，如果用户在某一个浏览器点退出登录时，需要当前浏览器所有的socket连接全部断开，在onclose清理时，无法判断需要清理那些socket。为了解决这个问题，我在redis中引入的cid那么cid如何赋值呢?
    >> 1.用sessionid,因为登录不同终端产生的sessionid都不一样
    >> 2. 用特定的cookid,比如uid+microtime(true),因为用户每次登录的时间戳不一样,文档约定cookie值格式为:$_COOKIE['__BCCK'] = '33.1440575849.7297',其中33为uid

> * sid:socketid

数结结构示范

```
smembers msg_uid:33
1) "33.1440577128.5168"
2) "33.1440575849.7297"


smembers msg_cid:33.1440577128.5168
1) "307"
2) "309"

smembers msg_cid:33.1440575849.7297
1) "305"
2) "306"
```
