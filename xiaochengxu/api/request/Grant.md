# 弹出授权框,如果拒绝后在弹出系统勾选

- 示例代码:

````
wx.getSetting({
  success(res) {
    if (!res.authSetting['scope.userInfo']) {
      wx.authorize({
        scope: 'scope.userInfo',
        success() {
          // 用户已同意，后续调用 wx.getUserInfo 接口不会弹窗询问
          wx.getUserInfo({
            success: function (res) {
              var userInfo = res.userInfo
              var nickName = userInfo.nickName
              var avatarUrl = userInfo.avatarUrl
              var gender = userInfo.gender //性别 0：未知、1：男、2：女
              var province = userInfo.province
              var city = userInfo.city
              var country = userInfo.country
              wx.request({
                url: 'http://test.com/show',
                data: {
                  'nickName': res.userInfo.nickName,
                  'avatarUrl':res.userInfo.avatarUrl,
                  'gender': res.userInfo.gender,
                  'province': res.userInfo.province,
                  'city': res.userInfo.city,
                  'country': res.userInfo.country,
                },
                success:function(msg){  
                  console.log(msg)

                }
              })
            }
                      
          })
        },
        //点击拒绝后的回调
        fail: function () {
          wx.showModal({
            title: '温馨提示',
            content: '您点击了拒绝授权,将无法正常显示个人信息,点击确定重新获取授权。',
            success: function (res) {
              if (res.confirm) {
                wx.openSetting({
                  success: (res) => {
                    if (res.authSetting["scope.userInfo"]) {////如果用户重新同意了授权登录
                      wx.getUserInfo({
                        success: function (res) {
                          var userInfo = res.userInfo
                          var nickName = userInfo.nickName
                          var avatarUrl = userInfo.avatarUrl
                          var gender = userInfo.gender //性别 0：未知、1：男、2：女
                          var province = userInfo.province
                          var city = userInfo.city
                          var country = userInfo.country
                          wx.request({
                            url: 'http://test.com/show',
                            data: {
                              'nickName': res.userInfo.nickName,
                              'avatarUrl': res.userInfo.avatarUrl,
                              'gender': res.userInfo.gender,
                              'province': res.userInfo.province,
                              'city': res.userInfo.city,
                              'country': res.userInfo.country,
                            },
                            success: function (msg) {
                              console.log(msg)

                            }
                          })
                        }

                      })
                    }
                  }, fail: function (res) {

                  }
                })
              }
            }
          })
        }
      })
    }
  }
})

````