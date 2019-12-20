# js封装示例
对js的封装


### 示例1

```javascript

/**
 * 通用的部分
 */
;(function () {
    var Common = {
        init: function () {
            if (location.host.indexOf('dev') == 0) {
                this.apiBase = 'http://xxx.com/';
            } else {
                this.apiBase = 'http://xx.com/';
            }
            //this.adminAccount = ['mockuai_demo', 'mockuai_test'];
            //this.businessAccount1 = ['yangdongxi'];
            //this.businessAccount2 = ['huajishijie'];
            //this.businessAccount3 = ['xcxw'];
            var nb = this.getQuery('nb');
            if (nb) {
                cobra.cookie('nb', nb, { path : "/"})
            }

            this.logout();
            this.setItemDetailLink();
            // this.permission();
        },
        getQuery:function(key){
            var t = {};
            location.search.replace("?","").replace(/&?([^=&]+)=([^=&]*)/g, function($0, $1,$2){ t[$1] = $2; });
            return typeof t[key] === "undefined" ? "" : t[key];
        },
        logout: function () {
            var that = this;
            var logoutUrl = this.apiBase + 'user/logout.do';
            var loginUrl = '../seller_info/seller_login.html';

            $('.j-logout').on('click', function () {
                $.ajax({
                    dataType: 'jsonp',
                    url: logoutUrl,
                    success: function (d) {
                        if (d.code == '10000') {
                            that.referUrlNavigate(loginUrl);
                        } else {
                            alert(d.msg || '抱歉，网络繁忙，请稍后重试!');
                        }
                    }
                });
            })
        },
        
        getGoodsLink: function (data, cb) {
            var api = this.apiBase + 'item/url/get.do';
            $.ajax({
                dataType: 'jsonp',
                url: api,
                async: false,
                data: data,
                success: function (d) {
                    if (d.code == '10000') {
                        var link = d.data;
                        cb(link);
                    } else {
                        alert(d.msg || '抱歉，网络繁忙，请稍后重试!');
                    }
                }
            });
        },
        // <a class="j-goods-link" data-item_id="" data-seller_id=""></a>
        setItemDetailLink: function () {
            var that = this;
            $('body').on('click', '.j-goods-link', function () {
                var $self = $(this);
                var data = {
                    item_id: $self.attr('data-item_id'),
                    seller_id: $self.attr('data-seller_id')
                };

                that.getGoodsLink(data, function (link) {
                    that.referUrlNavigate(link, true);
                });
            })
        },
        // 支持带有refer的跳转，兼容 ie
        referUrlNavigate: function (url, blank) {
            var linka = document.createElement('a');
            linka.href=url;
            if (blank) {
                linka.target = '_blank';
            }
            document.body.appendChild(linka);
            linka.click();
        }
        
    };

    // export
    window.Common = Common;
    $(function () {
        Common.init();
    })
})();

```



### 示例2

```javascript

;(function(){
    var nav = {
        init: function(){
            //测试
            //window.menuDomain = 'http://xx.xx.xx.xx';
            //线上
            //window.menuDomain = 'http://x.x.x.x';
            if( localStorage.navInfo ){
                this.data = JSON.parse(localStorage.navInfo);
            }
            this.shop_type = ''
            this.accountArr = ['huajishijie'];
            var biz_code = cobra.cookie('biz_code');
            //如果是dev
            if (location.host.indexOf('dev') == 0) {
                this.url = '..' + location.href.split(location.host)[1].split('.html')[0] + '.html';
                window.menuDomain = 'http://115.29.191.163';
                //window.menuDomain = 'http://192.168.31.31';
                //window.menuDomain = 'http://192.168.31.182:8081';
                this.apiBase = 'http://boss.mockuai.net:8080/bossmanager/'; //java
            } else {
                this.url = '..' + location.href.split(location.host + '/bossmanager/html')[1].split('.html')[0] + '.html';
                window.menuDomain = 'http://115.29.191.163';
                // window.menuDomain = 'http://192.168.31.182:8081';
                this.apiBase = 'http://' + location.host + '/bossmanager/';
            }
            //如果是登陆不进行渲染 todo 配map
            if( this.url == '../seller_info/seller_login.html' || this.url == '../seller_info/seller_mallConfiguration.html' || this.url == '../seller_info/seller_register.html' || this.url == '../seller_info/register.html' ){
                return false;
            }else{
            }
            this.addEvent();
            this.render(biz_code);

            //判断用户是否有商城权限
            if( cobra.cookie('role_mark') == 3 && cobra.cookie('is_multi_mall') == 1 ){
                $('.seller-nav-main').children('li:last').after('<li class="ui-nav-item j-goto-mall" style="display: list-item;"> <a href="javascript:;">去商城</a></li>')
            }
        },
        render:function(biz_code){
            var that = this;
            if( that.data ){
                var data = that.data;
                var template = _.template($('#j-template-nav').html());
                $('.j-nav-render').html(template({
                    items:data.data.menu_list
                }));
                //if( that.accountArr.indexOf(biz_code) != -1 ){
                    //todo 如果是话机世界
                    var user_type = cobra.cookie("user_type");
                        if (user_type == 1) {
                            $('.ui-nav-item').show();
                        } else {
                            $(".ui-nav-item[data-id=30]").show();
                            $('.button-export-order').remove();
                            that.hideSelectNav('.ui-nav-item', 30, [31, 34, 35, 36]);
                        }
                //}else{
                //    $('.ui-nav-item').show()
                //}

            }
        },
        addEvent: function(){
            var that = this;
            var urlArr = [];
            //导航栏的匹配
            if( that.data ){
                var data  = that.data.data;
                for ( var i = 0;i < data.menu_list.length; i ++ ){
                    if( data.menu_list[i].children ){
                        for( var n = 0;n < data.menu_list[i].children.length; n ++ ){
                            //拿出所有url放入数组
                            urlArr.push(data.menu_list[i].children[n].menu_url);
                            if( data.menu_list[i].children[n].menu_url == that.url ){
                                data.menu_list[i].active = true;
                                data.menu_list[i].children[n].active = true;
                            }
                        }
                    }else{
                        urlArr.push(data.menu_list[i].menu_url);
                    }
                }
                if( data.fun_list ){
                    for( var m = 0 ; m < data.fun_list.length ; m ++ ){
                        $('.j-fun-block[data-fun-name='+data.fun_list[m].menu_title+']').show()
                    }
                }
            }
            //不满足导航情况的菜单子页面
            if( urlArr.indexOf(that.url) == -1 ){
                that.getCurrentId()
            }

            //去商城
            $(document).on('click','.j-goto-mall',function(){
                that._availdMall(function(link){
                    that.gotoMall(link,true)
                })
            })

        },
        // 支持带有refer的跳转，兼容 ie
        gotoMall: function (url, blank) {
            var linka = document.createElement('a');
            linka.href=url;
            if (blank) {
                linka.target = '_blank';
            }
            document.body.appendChild(linka);
            linka.click();
        },
        _availdMall: function(cb){
            $.ajax({
                type:'get',
                dataType:'jsonp',
                data:{
                    //session_key:cobra.cookie('session_key'),
                    role_mark:cobra.cookie('role_mark')
                },
                url: this.apiBase + 'user/direct_to_login.do',
                success:function(d){
                   if ( d.code == 10000 ){
                       var biz_code = cobra.cookie('biz_code');
                       var link = d.data.direct_login_url;
                       cb(link)
                   }
                }
            })
        },
        getCurrentId: function(){
            var that = this;
            if( cobra.cookie('is_multi_mall') == 1  ){      //1是商城 0 是店铺
                that.shop_type = 3
            }else if( cobra.cookie('is_multi_mall') == 0 ){
                that.shop_type = 1
            }
            $.ajax({
                type:'post',
                data:{
                    menu_url:that.url,
                    shop_type:that.shop_type
                },
                url: window.menuDomain + '/auth/get_current_menu',
                success:function(d){
                    var data = JSON.parse(d);
                    if( data.code == 10000 ){
                        //todo 获取当前的二级导航成功
                        var current_id = data.data.current_menu_id;
                        if( current_id != 0 ){
                            $('.ui-nav-subitem[data-id='+current_id+']').addClass('ui-nav-subitem-current');
                            $('.ui-nav-subitem[data-id='+current_id+']').parents('.ui-nav-item').addClass('ui-nav-item-current')
                        }
                    }else{

                    }
                }
            })
        },
        //隐藏被选择的导航
        hideSelectNav: function(elem, p, cArr) {
            var $nav = $(elem + '[data-id=' + p + ']');
            if (cArr) {
                var j = cArr.length;
                for (var i = 0; i < j; i++) {
                    $nav.find('li[data-id=' + cArr[i]+ ']').hide();
                }
            } else {
                $nav.hide();
            }
        }
    };
    //run
    $(function(){
        nav.init();
    })
}());

```

 


        









