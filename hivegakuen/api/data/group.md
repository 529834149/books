# 群主信息
group
### 数据结构

```json

{
    "_id" : ObjectId("59f31110ce7d2133d95e7c20"),//MongoDB自带_id
    "city_id ":xxx,//城市id
    "city_name":xxx,//城市名称
    "Initials":xxx,//首字母排序
    "create_time":time()//创建时间
    "group_manage":[
        "group_number" :cbj529834149,//群号
        "group_Administrator" :"JON wANG"//群管理员
        "group_logo" :29834144,//群二维码
        "group_person_num" :500,//群人数
        "create_time":time(),//群创建时间
        "group_member" :[
            { 
               'name':'张三',//成员名字
               'add_time' :time()
            },
            { 
               'name':'张二',//成员名字
               'add_time' :time()
            },
        ]
    ]
 }   

```