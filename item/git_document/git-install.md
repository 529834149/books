 
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