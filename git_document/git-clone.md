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

        









