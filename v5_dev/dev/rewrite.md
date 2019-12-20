# rewrite
项目中用到rewrite的需注意的地方

用户访问fxd.blogchina.com 实际访问 http://post.blogchina.com/user/1310/latest-article
rewrite 会根据fxd 去redis中找 fxd对应的uid：1310,redis数据结构 v5:name:fxd=>1310

|url               |实际url|
|:--------         |:------|
|http://fxd.blogchina.com |http://post.blogchina.com/user/1310/latest-article
|http://fxd.blogchina.com/656067592.html |http://post.blogchina.com/p/656067592
|http://fxd.blogchina.com/9763_list_1.html |http://post.blogchina.com/user/1310/notebook/9763
|http://fxd.blogchina.com/archive/201606_1.html | http://post.blogchina.com/user/1310/date-article?date=201606


