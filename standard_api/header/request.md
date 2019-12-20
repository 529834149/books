# request

客户端请求头规范，客户端需按此规范请求API

### 参考

```
curl -X GET \
    http://api.blogchina.com/<path> \
    -H "Accept:application/vnd.<your_team>+json; version=<your_version>"
    -H "Authorization: Blogchina <your_name>: <your_authorization>" \
    -H "Date: Wed, 22 Oct 2015 10:26:46 GMT" \
    -H "Content-Length: <content_length>"
    # 其他参数...
```

### 示例

```
curl -X GET \
    http://api.blogchina.com/<path> \
    -H "Accept:application/vnd.blogchina+json;version=1.1"
    -H "Authorization: Blogchina fxd:aheka3k4fjaaefeqefefaekde" \
    -H "Date: Wed, 22 Oct 2015 10:26:46 GMT" \
    -H "Content-Length: 0"
```
