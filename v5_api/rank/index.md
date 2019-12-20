# 个人排行列表

- URL：/user/614198272/hot-article

- HTTP请求方式：GET

- 是否登陆：否 

- 返回结果：
- 请求参数 是否必传参数 y

```
{ 
    'show_summary' => 'y/n', //是否显示摘要
    'user_id' => intval(xxx),//见路由 //y
    'type' => 'xxx',//见路由 //y
}
```


```
{
    "meta":{
        "code": 200,
        "message":"OK"
    },
    "data": {
    {
        "user_id":614198272
        'click':{
        	{
                ["aid"]=>
                int(656140808)
                ["title"]=>
                string(39) "1月27日，东风日产新楼兰联合"
                ["subtitle"]=>
                string(39) "1月27日，东风日产新楼兰联合"
                ["summary"]=>
                string(4203) "1月2为现中国美”旨在为中国原创及时	范意义。"
                ["nums"]=>
                array(4) {
                      ["click"]=>
                      string(1) "9"
                      ["support"]=>
                      int(0)
                      ["aid"]=>
                      int(0)
                      ["oppose"]=>
                      int(0)
                      ["comment"]=>
                      int(0)  
                  },
               ["gsh_add_time"]=>
               "1970.01.01 08:00"
               ["user_url"]=>
               "http://entere.blogcore.cn"
               ["article_url"]=>
               "http://entere.blogcore.cn/888112.html"
           },{
                ["aid"]=>
                int(656140808)
                ["title"]=>
                string(39) "1月27日，东风日产新楼兰联合"
                ["subtitle"]=>
                string(39) "1月27日，东风日产新楼兰联合"
                ["summary"]=>
                string(4203) "1月2为现中国美”旨在为中国原创及时	范意义。"
                ["nums"]=>
                array(4) {
                      ["click"]=>
                      string(1) "9"
                      ["support"]=>
                      int(0)
                      ["aid"]=>
                      int(0)
                      ["oppose"]=>
                      int(0)
                      ["comment"]=>
                      int(0)  
                  },
               ["gsh_add_time"]=>
               "1970.01.01 08:00"
               ["user_url"]=>
               "http://entere.blogcore.cn"
               ["article_url"]=>
               "http://entere.blogcore.cn/888112.html"
           }...
        },
        'support':{
            {
                ["aid"]=>
                int(656140808)
                ["title"]=>
                string(39) "1月27日，东风日产新楼兰联合"
                ["subtitle"]=>
                string(39) "1月27日，东风日产新楼兰联合"
                ["summary"]=>
                string(4203) "1月2为现中国美”旨在为中国原创及时	范意义。"
                ["nums"]=>
                array(5) {
                  ["support"]=>
                  string(3) "xxx"
                  ["aid"]=>
                  string(6) "xxx"
                  ["oppose"]=>
                  string(2) "xxx"
                  ["comment"]=>
                  string(1) "xxx"
                  ["click"]=>
                  string(4) "xxx"
                },
               ["gsh_add_time"]=>
               "1970.01.01 08:00"
               ["user_url"]=>
               "http://entere.blogcore.cn"
               ["article_url"]=>
               "http://entere.blogcore.cn/888112.html"
           },{
                ["aid"]=>
                int(656140808)
                ["title"]=>
                string(39) "1月27日，东风日产新楼兰联合"
                ["subtitle"]=>
                string(39) "1月27日，东风日产新楼兰联合"
                ["summary"]=>
                string(4203) "1月2为现中国美”旨在为中国原创及时	范意义。"
                ["nums"]=>
                array(5) {
                  ["support"]=>
                  string(3) "xxx"
                  ["aid"]=>
                  string(6) "xxx"
                  ["oppose"]=>
                  string(2) "xxx"
                  ["comment"]=>
                  string(1) "xxx"
                  ["click"]=>
                  string(4) "xxx"
                },
               ["gsh_add_time"]=>
               "1970.01.01 08:00"
               ["user_url"]=>
               "http://entere.blogcore.cn"
               ["article_url"]=>
               "http://entere.blogcore.cn/888112.html"
           }...
        },
        'comment':{
            {
                ["aid"]=>
                int(656140808)
                ["title"]=>
                string(39) "1月27日，东风日产新楼兰联合"
                ["subtitle"]=>
                string(39) "1月27日，东风日产新楼兰联合"
                ["summary"]=>
                string(4203) "1月2为现中国美”旨在为中国原创及时	范意义。"
                ["nums"]=>
                array(5) {
                  ["support"]=>
                  string(3) "xxx"
                  ["aid"]=>
                  string(6) "xxx"
                  ["oppose"]=>
                  string(2) "xxx"
                  ["comment"]=>
                  string(1) "xxx"
                  ["click"]=>
                  string(4) "xxx"
                },
               ["gsh_add_time"]=>
               "1970.01.01 08:00"
               ["user_url"]=>
               "http://entere.blogcore.cn"
               ["article_url"]=>
               "http://entere.blogcore.cn/888112.html"
           },{
                ["aid"]=>
                int(656140808)
                ["title"]=>
                string(39) "1月27日，东风日产新楼兰联合"
                ["subtitle"]=>
                string(39) "1月27日，东风日产新楼兰联合"
                ["summary"]=>
                string(4203) "1月2为现中国美”旨在为中国原创及时	范意义。"
                ["nums"]=>
                array(5) {
                  ["support"]=>
                  string(3) "xxx"
                  ["aid"]=>
                  string(6) "xxx"
                  ["oppose"]=>
                  string(2) "xxx"
                  ["comment"]=>
                  string(1) "xxx"
                  ["click"]=>
                  string(4) "xxx"
                },
               ["gsh_add_time"]=>
               "1970.01.01 08:00"
               ["user_url"]=>
               "http://entere.blogcore.cn"
               ["article_url"]=>
               "http://entere.blogcore.cn/888112.html"
           }...
        } 
    }, 
  }   
}

```

- 关于错误返回值与错误代码，参见 [错误代码说明](../README.md)