# git:clone项目到一个非空目录

### 1.概述
如果我们往一个非空的目录下 clone git 项目，就会提示错误信息：
fatal: destination path '.' already exists and is not an empty directory.

### 2.解决

> * 进入非空目录，假设是 /v5_uc

> * git clone -b bate1 --no-checkout git@gitlab.blogcore.cn:v5/v5_uc.git tmp
> * git clone --no-checkout git@gitlab.blogcore.cn:v5/v5_uc.git tmp
> * mv tmp/.git .   #将 tmp 目录下的 .git 目录移到当前目录

> * rmdir tmp

> * git reset --hard HEAD

然后就可以进行各种正常操作了。

        

 
# git与SourceTree安装教程

###第一步
-   首先发博客中国邮件,注册邮箱,生成用户名和密码

###第二步
-   下载git安装到本地（安装 直接下一步...）

###第三步
-   开始->查看所有程序->点击git bash-> 输入ssh-keygen -t rsa -f ~/.ssh/id_rsa.gitlab -C "登录的邮箱"，
-   生成SSH keys（C:\Users\Administrator\\.ssh id_rsa.gitlab.pub为密匙文件）

###第四步
进入c盘（C:\Users\Administrator\\.ssh）新建配置文件config（修改文件 chmod 600 ~/.ssh/config window省略）添加内容：
- Host gitlab.blogcore.cn
-    IdentityFile C:\Users\Administrator\\.ssh\id_rsa.gitlab
-    User git
-    RSAAuthentication yes 

###第五步
登录http://gitlab.blogcore.cn 打开http://gitlab.blogcore.cn/profile/keys 点击add ssh key 添加key密匙
-   title:blogchina
-   content:第二步生成的密匙

###第六步
-   下载SourceTree安装

###第七步
-   打开SourceTree 工具->选项->一般 填写全名：（本人姓名）,邮箱：(登录邮箱 ), 
-   ssk密匙：路径选择（第二步生成的密匙）,把生成的密匙保存到指定目录,以ppk结尾的后缀(列：D：/gitl.ppk),
-   ssh客户端选择:Openssh
-   说明：如果打开SourceTree,需要填写ppk密码 则重新选择 工具->选项->ssh客户端:PuTTY/Plink 重启(输入用户名和密码)
-   然后点击工具->创建或导入ssh密匙->Generate->点击Save->复制中间部分生成的key到http://gitlab.blogcore.cn/profile/keys添加key密匙~~~  【private key 保存后缀为ppk的文件(D:/) 可省】
-   把生成的key复制到C:\Users\Administrator\\.ssh 替换id_rsa.gitlab.pub
-   打开SourceTree时,点击克隆/新建url(http://gitlab.blogcore.cn/v5/v5_doc) 输入用户名密码(git登录的用户名和密码) 完成




# SourceTree使用:
```
点击克隆/新建->原路径/url 
输入(列：git@gitlab.blogcore.cn:v5/v5_doc.git（地址来源于http://gitlab.blogcore.cn/v5/v5_doc））
目标路径：文件下载后的保存地址（列: D:\xampp\htdocs\v5_doc） 

文件提交:
b,打开SourceTree界面->文件状态 
查看未暂存文件 点击文件至已暂存文件后 点击左上角提交 输入开发信息 确认提交
再点击推送 文件正式提交上去 ***（提交前 必须先拉取）
 
文件拉取
c,打开SourceTree界面 点击获取 再点击拉取即可 

``` 
#声明:多人开发 禁止同时开发同一文件 拉取时 会冲突


# git:解决本地多个ssh-key的问题

### 1.概述
在用git时，我们有这样的需求，要用github，还要用gitlab,或者github上多个不同的账号，这样，我们本机就需要生成不同的id_ras文件。github官方的说明文档要求备份当前的id_rsa，然后生成一份新的私钥用于github的登陆。如果真这样做，那么新的私钥是无法再继续登陆之前的机器的。这种方法有点暴力…
还好ssh可以让我们通过不同的私钥来登陆不同的域。

### 2.首先，在新增私钥的时候，通过指定不同的文件名来生成不同的私钥文件


```
ssh-keygen -t rsa -f ~/.ssh/id_rsa.gitlab -C "zhanghao@blogchina.com"

ssh-keygen -t rsa -f ~/.ssh/id_rsa.github -C "entere@126.com"

```

### 3.然后，新增ssh的配置文件，并修改权限

```
touch ~/.ssh/config

chmod 600 ~/.ssh/config

```

修改config文件的内容：

```
Host github.com
    IdentityFile ~/.ssh/id_rsa.github
    User git
    
Host gitlab.blogcore.cn
    IdentityFile ~/.ssh/id_rsa.gitlab
    User git
    RSAAuthentication yes

```
这样在登陆的时候，ssh会根据登陆不同的域来读取相应的私钥文件

        



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


        


# gitosis:安装使用

### 1.安装git客户端以及相关工具

```bash
#sudo yum install curl-devel expat-devel gettext-devel openssl-devel zlib-devel perl-devel git
#git --version #如果能显示版本号，即表示成功
```

### 2.安装服务端gitosis，用python安装，download python相关tools

```bash
#sudo yum install python python-setuptools 
#cd /usr/local/src
#git clone git://github.com/res0nat0r/gitosis.git
#cd gitosis
#python setup.py install
```
显示Finished processing dependencies for gitosis==0.2即表示成功

### 3.在开发机(172.16.10.123)上,生产密钥并上传到服务器上

```bash
#ssh-keygen -t rsa //一路回车，不需要设置密码
//上传公钥到服务器(默认SSH端口22)
#scp ~/.ssh/id_rsa.pub zhanghao@172.16.10.70:/tmp
```

### 4.在服务器上添加git用户组和用户

```bash
#groupadd git //git组
#groupadd user //user组
#useradd git -g git -m -s /bin/bash
#usermod -G git,user git //把git同时加入git组和user组
#passwd git #设置密码
//把用户git添加到sudoers用户中去，尽量不要用root操作
#vim /etc/sudoers #加上下面一句 git ALL=(ALL:ALL) ALL
#su - git #切换到git用户下工作
```

### 5.使用git用户并初始化`gitosis`

```bash
#sudo -H -u git gitosis-init < /tmp/id_rsa.pub
#sudo chmod 755 /home/git/repositories/gitosis-admin.git/hooks/post-update
```

### 6.在开发机(172.16.10.123)上clone gitosis管理平台

```bash
#git clone git@172.16.10.70:gitosis-admin.git
#cd gitosis-admin //进入管理平台
```
完成安装，注意：gitosis的管理是在开发机上进行管理，通过修改gitosis-admin管理gitosis用户权限

### 7.安装完成


### 8.实例 目标：添加用户fxd@blogchina.com
通过修改管理员(entere)开发机上的gitosis-admin管理gitosis用户权限

####8.1.用户fxd@blogchina.com在自己开发机上生成的公钥,传给entere

####8.2.entere把公钥放到keydir目录下,并把公钥重命名为fxd@blogchina.com.pub

####8.2.entere修改gitosis.conf 添加用户fxd@blogchina.com

```bash
#vi gitosis.conf 
[group vtwo_reward]
members = entere@localhost-2.local fxd@blogchina.com
writable = vtwo_reward
```

####8.3.修改完后commit，push到git server
```bash
#git add .
#git commit -m 'add new'
#git push
```


### 9.实例 目标：添加仓库 vtwo_reward 到gitosis
#### 9.1.修改配置文件并push

```bash
#vi gitosis.conf 添加 (管理员开发机)
[group vtwo_reward]
members = entere@localhost-2.local
writable = vtwo_reward
```

保存修改，并将修改提交到git server上：

```bash
#git add .
#git commit -m 'add new'
#git push
```

#### 9.2.创建项目vtwo_reward目录(一定要和项目名称一样)和项目文件并push (管理员开发机)

```bash
#mkdir /vtwo_reward
#cd /data/vtwo_reward
#git init
#touch test.txt
#git add .

#git config --global user.email "entere@126.com"
#git config --global user.name "entere"

#git commit -m 'init vtwo_reward'
#git remote add origin git@172.16.10.70:vtwo_reward.git
#git push origin master

#git pull
```

仓库创建完成

#### 9.3.测试：git clone git@172.16.10.70:vtwo_reward.git 代码成功更新下来

参考：http://blog.csdn.net/king_sundi/article/details/7065525

























