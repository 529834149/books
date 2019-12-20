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

        









