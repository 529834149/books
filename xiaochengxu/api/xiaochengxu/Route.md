# 小程序底部导航路径跳转

- 首先要在根目录APP.json里配置路径列如：

````
{
  "pages": [
    "pages/page10000/page10000",
    "pages/page10001/page10001",
    "pages/page10002/page10002",
    "pages/page10003/page10003"
   //每一个页面都需要在这里配置路径
  ],
  
  //window : 设置小程序的状态栏、导航条、标题、以及窗口背景颜色
  
  "window": {
    "enablePullDownRefresh": true,//自带下拉刷新效果 开启true，关闭false
  },
  
  
  //tabBar : 用于页面切换，适用于常规的Tab应用，
  可置于顶部或者底部，是一个数组只支持2-5个tab
  {
     "tabBar": {
      "color": "#fff",              // tab 上的文字默认颜色
      "selectedColor": "#fff",      // 文字选中时的颜色
      "backgroundColor": "#000",    // tab 的背景色
      "borderStyle": "white",       // tabbar上边框的颜色， 仅支持 black/white
      "position": "bottom",         // tabbar的位置，可选值 bottom、top
      "list": [{
        "pagePath": "pages/index/index", // 页面路径，必须在 pages 中先定义
        "text": "首页",                   // tab 上按钮文字
        "iconPath": "img/a.png",         // 图片路径，icon 大小限制为40kb，建议尺寸为 81px * 81px
        "selectedIconPath": "img/b.png"  // 选中时的图片路径
      }, {
        "pagePath": "pages/logs/logs",
        "text": "日志",
        "iconPath": "img/a.png",
        "selectedIconPath": "img/b.png"
      }]
    },
  }
  //networkTimeout : 配置小程序网络请求的超时时间
    "networkTimeout": {
    "request": 10000,
    "connectSocket": 10000,
    "uploadFile": 10000,
    "downloadFile": 10000
  },
  //debug : 调试模式开关，开发时开启，发布时关闭
  "debug": true
}

````