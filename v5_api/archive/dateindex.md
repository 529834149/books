# 日期归档个人首页列表

- URL：/user/1111/date-article

- HTTP请求方式：GET

- 是否登陆：否
- 参数  是否必传 y
```
{
	'user_id' => xxxxx, //参数见路由  y
	'type' => 'date-article', //参数见路由  y
    'date' => 1425685692,
	'show_summary' => 'y/n',
	'page' => 1,
	'limit' => 10, 
}
```

 

- 返回结果：

```
{
    "meta":{
        "code": 200,
        "message":"OK"
    },
    "data": {
    "user_id": xxxxx,
    "type": "date-article",
    "user_article_num":xxx ,//用户文章总数
    "date":'xxx' //日期
    "lists": [
      {
        "aid": 656140808,
        "user_id": 614198272,
        "notebook_id": 1,
        "title": "1月27日，东风日产新楼兰联合",
        "subtitle": "",
        "summary": "1月27日，东风日产新楼兰联合新京报共同打造的适大五座SUV的新风潮，对于打破固有格局，启发汽车美学设计新思路具有至关重要的示范意义。",
        "add_time": 1453976212,
        "update_time": 1453976212,
        "pics": {
          "exists": "n",
          "url":{}
        },
        "is_recommend":"y/n", //是否上首页 
        "notebook_name": 'xxx',
        "nums": {
          "aid":xxx,//文章id
          "click": "9",
          "support": 0,
          "oppose": 0,
          "comment": 0
        }
        "gsh_add_time":'xxxxx',//格式化的发文时间
        "user_url":'xxxxx',//用户首页路径
        "article_url":'xxxxxx',//文章路径
      },
      {
        "aid": 656140808,
        "user_id": 614198272,
        "notebook_id": 1,
        "title": "1月27日，东风日产新楼兰联合",
        "subtitle": "",
        "summary": "1月27日，东风日产新楼兰联合新京报共同打造的适大五座SUV的新风潮，对于打破固有格局，启发汽车美学设计新思路具有至关重要的示范意义。",
        "add_time": 1453976212,
        "update_time": 1453976212,
        "pics": {
          "exists": "n",
          "url":{}
        },
        "is_recommend":"y/n", //是否上首页 
        "notebook_name": 'xxx',
        "nums": {
          "aid":xxx,//文章id
          "click": "9",
          "support": 0,
          "oppose": 0,
          "comment": 0
        }
        "gsh_add_time":'xxxxx',//格式化的发文时间
        "user_url":'xxxxx',//用户首页路径
        "article_url":'xxxxxx',//文章路径
      }...
    ], 
    
    "archive":{
    	"user_id":xxxxx,
    	"year_lists":{
    	["year"]=>
          int(2016)
          ["china_year"]=>
          string(9) "丙申年"
          ["yearnum"]=>
          int(49)
          ["month_lists"]=>
          array(3) {
            [0]=>
            array(2) {
              ["month"]=>
              int(12)
              ["monthnum"]=>
              int(2)
            }
            [1]=>
            array(2) {
              ["month"]=>
              int(11)
              ["monthnum"]=>
              int(46)
            }
            [2]=>
            array(2) {
              ["month"]=>
              int(10)
              ["monthnum"]=>
              int(1)
            }... 
    	} 
    } 
}

```

- 关于错误返回值与错误代码，参见 [错误代码说明](../README.md)