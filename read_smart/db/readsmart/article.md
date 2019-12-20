# article

### 描述


### 网站抓取  数据结构

```json
{
    'aid':xxx,//文章id
	'title':xxx,//文章标题
	'weblink':xxx,//原文URL 
	'category':xxx,//文章分类
	'tags':[],//文章分类
	'summary':xxx,//文章摘要 
	'platform_id':xxx //平台
	'webauthor':xxx,//原文作者 
	'webauthor_add_time':xxx,//作者发布时间
	'videos':'xxx',              //文章视频 
	'musics':'xxx',             //文章音频  
	'images':[              //文章图片 	如果图片超过20张 不记录入库
	    'urls':[
	        { 
	           'url:'xxx',
	           'height':'xx',
	           'width':'xx',
	           'is_grab_image':'y/n',//图片是否抓取正常 或  是否已抓取（n:未抓取 原图片错误）
	        },{
	           'url:'xxx',
	           height:'xx',
	           'width':'xx',
	           'is_grab_image':'y/n',//图片是否抓取正常 或  是否已抓取（n:未抓取 原图片错误）
	        }{
	           'url':'xxx',
	           'height':'xx',
	           'width':'xx',
	           'is_grab_image':'y/n',//图片是否抓取正常 或  是否已抓取（n:未抓取 原图片错误）
	        }...
	    ]
	],
	'covers':[              //文章头图 
	    'url:'xx',//头图url
	    'height':'xx',
	    'width':'xx',
	    'is_grab_image':'y/n',//图片是否抓取正常 或  是否已抓取（未抓取 原图片错误）
	], 
	'content':xxx,//正文  
	'word_count':xxx,//文章总字数 
	'add_time':xxx,//添加时间 
	'is_del':'y/n'//是否删除
	'topic':'sr_article',
	'template_style':1//1:文章列表样式为大图  ,2:小图,3:没图, 4:图集,5:视频
}

```

### 注意事项

```json
抓取过程中 针对rss 解析xml 当标签遇到冒号 （<dc:creator>李帅飞</dc:creator> or <content:encoded>）使用 PHP SimpleXMLElemenX children 的參數
demo:
<?php
$rss = simplexml_load_file('http://feeds.feedburner.com/tsungblog');
foreach ($rss->channel->item as $i => $item) {
    $ns_content = $item->children('content', true);
    echo $ns_content->encoded;
}
?>
详见https://blog.longwin.com.tw/2016/11/php-simplexml-parse-xml-colon-node-2016/
```




 
 