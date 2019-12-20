# git:自动化部署（webhooks）

### 1.概述
最终做到的效果就是，每当有新的 commit push 到 master 分支的时候，就自动在测试/生产服务器上进行 git pull 拉取最新的代码，免去了程序猿兼职运维 ssh 上去拉代码部署的重复性工作。

### 2.github后台创建接收通知的url,每当有 push 的时候就自动调用这个脚本。
以v5_uc为例：
You Projects->v5/v5_uc->Settings->Web hooks中的url中添加url:

http://uc5.blogcore.cn/some_shell/gitlab/hook.php?token=xxxxx


### 3.编写hook.php 代码
hook.php主要实现调用git pull 命令

```php
<?php
// 为了安全，不让其它有向此接口提交数据使用
$valid_token = 'xxx';
$valid_ip = array('127.0.0.1','219.238.250.40');
$client_token = $_GET['token'];
$client_ip = $_SERVER['REMOTE_ADDR'];
$fs = fopen('./logs/hook.log', 'a');
fwrite($fs, 'Request on ['.date("Y-m-d H:i:s").'] from ['.$client_ip.']'.PHP_EOL);
// 認證 token
if ($client_token !== $valid_token)
{
    echo "error 10001";
    fwrite($fs, "Invalid token [{$client_token}]".PHP_EOL);
    exit(0);
}
// 为了安全认证 ip
if ( ! in_array($client_ip, $valid_ip))
{
    echo "error 10002";
    fwrite($fs, "Invalid ip [{$client_ip}]".PHP_EOL);
    //exit(0);
}
$json = file_get_contents('php://input');
$data = json_decode($json, true);
fwrite($fs, 'Data: '.print_r($data, true).PHP_EOL);
fwrite($fs, '======================================================================='.PHP_EOL);
$fs and fclose($fs);

exec("./gitpull.sh");

```


### 4.编写gitpull.sh代码

```bash
cd /opt/html2/v5/v5_uc
git checkout bate1
git pull
```

### 5.测试


        









