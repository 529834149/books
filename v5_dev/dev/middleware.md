# middleware
中间件


### JwtAuthenticate
jwt中间件的作用：验证登录用户的token是否有效，有效放行并传输token;未登录或无效阻断返回错误码
   

### SafeFilterMiddleware
safe中间件作用：如果是ajax请求api,那么只能是指定referer的ajax才可以进行请求
