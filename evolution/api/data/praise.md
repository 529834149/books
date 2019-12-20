# praise
点赞表

### 数据结构

```json

{
    "_id" : ObjectId("59c1e4cdbbf0433192181421"),
    "form_user" : 54145874,//评论id
    "to_user" : 541542, //form_uid 点赞了 to_uid
    "type" : "remark",//remark推荐点评   reviews 评论
    "type_id"："type对应的id",//见下面注释
    "addtime" :13458759896,
    "is_del" :'y'
}
注释:
if(type =="推荐点评 "){
    type_id="文章id";
}else{
    type_id ="当前评论的id";
}

//form_user对to_user里面的评论(type)为1223(type_id)的数据进行点赞
在反给列表时判断当前用户是否对点评/评论 进行有点赞操作，存在反给y|n状态

```