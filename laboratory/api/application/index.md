# 移动端首页信息

- URL：api/index

- HTTP请求方式：GET

- 是否登陆：是

- 请求参数：

```
{
    "lang": "en", // en/zh_CN 英文/中文
   
}
```

- 返回结果：

```
{
    "meta": {
        "code": 200,
        "message": "OK"
    },
    "data": {
        "list": [
            {
                "id": 5,
                "carouselfigure": "image/TIM图片20170919185157.png",//图片
                "url": "/articles/7",//图片连接
                "title": "[互联网实验室重磅发布] 中国超级电商平台竞争与垄断研究报告",//标题
                "desc": "在中国《反垄断》法颁布十周年和两反法修订之际，知名网络空间智库互联网实验室正式启动了中国超级网络平台竞争与垄断问题的系列研究与研讨，研究将涉及电子商务、社交媒体、搜索引擎、网约车、数据垄断等领域的互联网巨头，并将陆续推出系列研究报告。近日，首份报告《中国超级电商平台竞争与垄断研究报告》正式发布。" //描述
            },
            {
                "id": 4,
                "carouselfigure": "image/620454c2625a44fee68652071e21b01a.png",
                "url": "/articles/6 ",
                "title": "Greeting Words from Internet Pioneers",
                "desc": "Vint Cerf"
            },
            {
                "id": 3,
                "carouselfigure": "image/4.jpg",
                "url": "articles/4",
                "title": "Ted Nelson: Inventing the documents for the future ",
                "desc": "Ted Nelson has just turned 80. He says he’s terribly busy and doesn’t like to travel. His schedule for the coming six months are all packed. He’s the author of Computer Lib, described by Steven Levy as “the best-selling underground manifesto of the microc"
            },
            {
                "id": 2,
                "carouselfigure": "image/2.jpg",
                "url": "/articles/3",
                "title": "Ted Nelson Predicts the Text in the Future",
                "desc": "Many may assume hypertext is as old as the internet, or at least as old as the World Wide Web. \r\nAn online article with hypertext offers a deep reading experience unmatched by offline one as hypertext contains links to related texts, pictures, and even au"
            },
            {
                "id": 1,
                "carouselfigure": "image/IMG_2526.jpg",
                "url": "",
                "title": "Security Statutes for Critical Information Infrastructure (Exposure Draft)",
                "desc": "\"Security Statutes for Critical Information Infrastructure (Exposure Draft)\" Symposium held by Internet Society of China"
            }
        ],
        "event": "Events",//首页下面的入口文字
        "ohi": "OHI"//首页下面的入口文字
    }
}

```
