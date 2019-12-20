# 发起请求

- wx.request(OBJECT)

````
 
  onLoad: function () {
    console.log('onLoad')
    var that = this
    wx.request({  
      url: 'http://test.com/weixin', //调用的接口，数据库信息
      data: {},请求的参数
      header: {
        'content-type': 'application/json'//设置请求的 header
      },
      success: function (res) {
      //收到开发者服务成功返回的回调函数
        console.log(res.data)
        that.setData({
          Industry: res.data //在WXML页面中用 <block wx:for ="{{Industry}}"循环出数据，title ="{{item.字段名}}"渲染到页面上
        })     
      },
      fail: function (err) {
        console.log(err)//接口调用失败的回调函数
      }
    })
  
  },
````