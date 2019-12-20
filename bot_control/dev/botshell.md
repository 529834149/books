# 机器人后台脚本


###开启机器人

######start.sh

```
#!/bin/bash

export PYTHONIOENCODING=UTF-8

cd /opt/html/blogchina/bot_control/tools/WeixinBot
nohup /usr/local/python-3.5.3/bin/python3 ./weixin.py &>>./out.log &

```

######PHP调用start.sh
```
$cmd = "cd /opt/html/blogchina/bot_control/tools/WeixinBot && sh start.sh";
system($cmd, $status);
```


###关闭机器人

######stop.sh
```
#!/bin/bash

export PYTHONIOENCODING=UTF-8

/bin/ps -ef |grep weixin.py|grep -v grep|awk '{print $2}'|xargs kill -9
```

######PHP调用stop.sh
```
$cmd = "cd /opt/html/blogchina/bot_control/tools/WeixinBot && sh stop.sh";
system($cmd, $status);
```