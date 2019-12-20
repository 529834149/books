# laravel5.1

### 1.命令

```
php artisan key:generate //生成key
php artisan config:cache //生产环境把config合并并缓存起来
php artisan config:clear 
php artisan route:cache
php artisan route:clear

php artisan optimize --force  //在bootstrap/cache目录生成compiled.php
php artisan clear-compiled //删除在bootstrap/cache目录生成在compiled.php

composer dumpautoload

```

### 2.laravel自定义函数放哪儿
我们的应用里经常会有一些全局都可能会用的函数，我们应该怎么放置它会比较好呢？以下有一种推荐的方式：

#### 2.1.创建文件 app/helpers.php

```php
// 示例函数
function foo() {
    return "foo";
}

```

#### 2.2.修改项目composer.json
在项目 composer.json 中 autoload 部分里的 files 字段加入该文件即可：

```
{
    ...

    "autoload": {
        "files": [
            "app/helpers.php"
        ]
    }
    ...
}

```

#### 2.3 运行以下命令

```bash
composer dump-autoload
```

OK，然后你就可以在任何地方用到 app/helpers.php 中的函数了。


