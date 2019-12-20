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