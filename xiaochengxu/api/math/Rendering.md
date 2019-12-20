# 列表渲染

- 例如：

````
//page.wxml
<view wx:for="{{array}}"> {{item}} </view>

//page.js
Page({
  data: {
    array: [1, 2, 3, 4, 5]
  }
})
````