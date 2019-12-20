# 从相册或拍照上传

- 代码：

````
 wx.showActionSheet({
       itemList: ['从相册中选择', '拍照'],
       itemColor: "#f7982a",
       success: function (res) {
         if (!res.cancel) {
           if (res.tapIndex == 0) {
             _this.chooseWxImage('album')
           } else if (res.tapIndex == 1) {
             _this.chooseWxImage('camera')
           }
         }
       }
     })  
````