# remark
推荐点评

### 数据结构

```json

{
    "_id" : ObjectId("59ddd5e8c86e9b308c0059d3"),
    "rid" : 4,点评id
    "aid" : 521849344,对应的文章id
    "uid" : 488303617,对应的用户id
    "body" : "ss个点评",点评内容
    "publish_time"=1384574145142,
    "is_publish":"y",
    "is_del" : "n",是否删除	
    "monitor" : {			监管动作
        "examine" : {		是否审核 a 未审核 b 审核通过 c 拒绝,
            "is" : "a",
            "time" : 1507710440000
        },
        "hidden" : {	是否隐藏
            "is" : "n",
            "time" : 1507710440000
        },
        "del" : {		是否删除
            "is" : "n",
            "time" : 1507710440000
        }
    },
    "add_time" : 1507710440000,添加时间
    "update_time" : 1507710440000	更新时间
}

```