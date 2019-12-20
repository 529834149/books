# 获取单个专题

- URL：/collection/647752712 

- HTTP请求方式：GET

- 是否登陆：否

- 请求参数：

```
{
    "page":1
    "limit":10
}

```

- 返回结果：

```
{
    "meta":{
        "code": 200,
        "message":"OK"
    },
    "data": [
    "collection": {
      "cid": 731564544,
      "user_id": 463203336,
      "name": "关于中国扼杀女权的外媒看法",
      "summary": "当然是真的漏",
      "cover": "78/e4/6d/0_0.28118100 1453977276.jpg",
      "allow_contribute": "y",
      "need_audit": "y",
      "add_time": 1453977275,
      "color": "#cccccc",
      "admin": [
        {
          "c_id": 731564544,
          "m_id": 463203336,
          "is_owner": "y",
          "add_time": 1453977275,
          "nickname": "小冬瓜"
        },
        {
          "c_id": 731564544,
          "m_id": 605809664,
          "is_owner": "n",
          "add_time": 1453978032,
          "nickname": "entere_weixin"
        }
      ]
    },
    "article": [
      {
        "aid": 496757760,
        "user_id": 605809664,
        "notebook_id": 1,
        "title": "我在2012年10月至2015",
        "subtitle": "我在2012年10月至2015",
        "add_time": 1453976813,
        "update_time": 1453976813,
        "from": "blogchina",
        "word_count": 1774,
        "pics": {
          "exists": "y",
          "url": [
            "http://upload-images.jianshu.io/upload_images/1211570-c8513bd342b6536e?imageMogr2/auto-orient/strip%7CimageView2/2/w/1240"
          ]
        },
        "videos": {
          "exists": "n"
        },
        "tag": null,
        "state": "a",
        "allow": {
          "comment": "y",
          "reward": "n",
          "love": "y",
          "display": "y"
        },
        "monitor": {
          "is_audit": "n",
          "is_pending": "n",
          "is_hidden": "n",
          "is_del": "n"
        },
        "userinfo": {
          "uid": 605809664,
          "accout": "",
          "name": "",
          "nickname": "entere_weixin",
          "email": "entere@qq.com",
          "avatar": "http://wx.qlogo.cn/mmopen/OVIiaibib5kicTjFyDjvs85XZHqu2eWs8jduYKamlnkerkKa2yg32txQRiaFm8icrXPzDBK3GWkEjm1phTDPiafnCsaicRND96UyiaXGp/0",
          "add_time": 1453966183,
          "reg_from": "weixinweb",
          "intro": "总有一天，我会看破红尘，削发为僧！你信吗？我也不信！",
          "homepage": "",
          "rank": ""
        },
        "nums": {
          "click": "14",
          "support": "1",
          "oppose": 0,
          "comment": 0
        }
      },
      {
        "aid": 513534976,
        "user_id": 605809664,
        "notebook_id": 1,
        "title": "博客中国markdown编辑器",
        "subtitle": "博客中国markdown编辑器",
        "add_time": 1453977203,
        "update_time": 1453977203,
        "from": "blogchina",
        "word_count": 1639,
        "pics": {
          "exists": "n"
        },
        "videos": {
          "exists": "n"
        },
        "tag": null,
        "state": "a",
        "allow": {
          "comment": "y",
          "reward": "n",
          "love": "y",
          "display": "y"
        },
        "monitor": {
          "is_audit": "n",
          "is_pending": "n",
          "is_hidden": "n",
          "is_del": "n"
        },
        "userinfo": {
          "uid": 605809664,
          "accout": "",
          "name": "",
          "nickname": "entere_weixin",
          "email": "entere@qq.com",
          "avatar": "http://wx.qlogo.cn/mmopen/OVIiaibib5kicTjFyDjvs85XZHqu2eWs8jduYKamlnkerkKa2yg32txQRiaFm8icrXPzDBK3GWkEjm1phTDPiafnCsaicRND96UyiaXGp/0",
          "add_time": 1453966183,
          "reg_from": "weixinweb",
          "intro": "总有一天，我会看破红尘，削发为僧！你信吗？我也不信！",
          "homepage": "",
          "rank": ""
        },
        "nums": {
          "click": "12",
          "support": 0,
          "oppose": 0,
          "comment": 0
        }
      }
    ],
    "collection_nums": {
      "c_article": "2",
      "c_fans": 0
    }
  }
    ]   
}

```

- 关于错误返回值与错误代码，参见 [错误代码说明](../README.md)