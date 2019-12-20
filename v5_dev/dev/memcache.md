# memcache
项目中用到memcache的地方

### memcache key 列表  

|memcache_key           |描述  |expire |
|:--------         |:---------|:---------|
|v5:user:uid:176534534|用户详细信息|60x60x24x2|
|v5:user:uid:176534534:fans|用户粉丝列表|60x60x24x2|
|v5:user:uid:176534534:friends|用户偶像列表|60x60x24x2|
|v5:art:aid:256435783|文章详情|60x60x24x2|
|v5:arts:uid:176534534:latest|个人主页列表|60x60x24x2|
|v5:arts:uid:176534534:hot|热门文章列表|60x60x24x2|
|v5:arts:uid:176534534:top|置顶文章列表|60x60x24x2|
|v5:arts:uid:176534534:archive:201501|日期归档文章列表|60x60x24x2|
|v5:arts:nid:376534534|分类下文章列表|60x60x24x2|
|v5:arts:cid:376534534|专题下文章列表|60x60x24x2|
|v5:nbs:uid:176534534|用户全部分类列表notebook[nb]|60x60x24x2|
|v5:cts:uid:176534534|用户全部专题列表collection[ct]|60x60x24x2|
|v5:ogc:topic|最新专题|60x60x24x2|
|v5:ogc:subject|话题|60x60x24x2|
|v5:ogc:comment|评论列表|60x60x24x2|
|v5:ogc:authortop|专栏作家排行|60x60x24x2|
|v5:ogc:newest:newlists|最新文章|60x60x24x2|
|v5:ogc:authorlist:type:IT|专栏作家列表分类|60x60x24x2|
|v5:user:captcha:mobile:13333333333|手机验证码|60x30|
|v5:user:captcha:email:517489131@qq.com|邮箱验证码|60x30|
|weixinapi_access_ticket|微信分享获取ticket|60x60|



