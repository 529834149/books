# medium-editor
编辑器位置:v5_uc/public/assets/default/meditor

### 安装编辑器

```
cd v5_uc/public/assets/default/meditor
bower install medium-editor-insert-plugin --save //insert pic
bower install font-awesome --save //font lib
bower install MediumButton --save //button extension
```

### 编辑器图片上传
medium-editor 图片上传用了medium-editor-insert-plugin,而这个插件上传图片的服务端用的是https://github.com/blueimp/jQuery-File-Upload/wiki/Options

我们把jQuery-File-Upload服务端的php 代码入到v5_images/v5_image/meditor/fileupload目录下，同时把upyun的phpsdk入到这个目录下面

为了把图片上传到upyun，我们对UploadHandler.php做了如下修改：修改的地方都有 //by entere

修改两项具体功能：
1.文章个传重命名 488 489行 增加
2.上传到服务器后推送到upyun 176 1348-1372的upyun方法








