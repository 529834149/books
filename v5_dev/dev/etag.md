# etag
`Http` 缓存 `Etag` 在`php`中的应用

### 服务器与浏览器的交互流程

1. 客户端向服务器请求资源`S`

2. 服务器返回数据，并带上一个`Etag`

3. 客户端再次请求资源S，由于上次服务器给他返回了一个`Etag`，这次请求的时候他会带上这个`Etag`

4. 服务器发现请求中包含 Etag，判断是否过期，没过期则返回`304 Not Modified`

5. 客户端强制刷新，请求中剔除`Etag`

6. 服务器未发现请求中包含 `Etag`，返回资源`S`，并带上一个`Etag`

### php代码实现

```php

<?php
public function getEtag(Request $request)
{
    $data = [
        'name'=>'fxd',
        'age'=>'30',
    ];
    $etag = md5(json_encode($data));
    
    if(array_key_exists('HTTP_IF_NONE_MATCH', $request->server()) && ($request->server('HTTP_IF_NONE_MATCH') == $etag))
    {
        header("HTTP/1.1 304 Not Modified");
        exit();
    }

    return response($data, 200)
          ->header('Etag', $etag);
    
}
?>

```
`Etag`是一个字符串，我们一般使用该请求对应响应输出的 md5 值作为 `Etag`，可以简单地理解为文件的版本号。

首先判断在请求中是否包含 `HTTP_IF_NONE_MATCH` 这个 `key`，如果包含并且其值为之前的 md5 值，则返回 304，否则输出`Etag`以及内容。


etag在uc5项目中的实现：

```php
<?php
public function etag($data, $notModifiedExit = true)
{
    $jdata = json_encode($data);
    $etag = md5($jdata);
    if ($notModifiedExit && array_key_exists('HTTP_IF_NONE_MATCH', \Request::server()) && (\Request::server('HTTP_IF_NONE_MATCH') == $etag)) {
        header("HTTP/1.1 304 Not Modified");
        exit();
    }
    return response($this->returnCode(200,'',$data),200)->header('Etag',$etag);
}
?>


//用法：
<?php
public function getEtag(Request $request)
{
    $data = [
        'name'=>'fxdcd',
        'age'=>'32',
    ];
    return $this->etag($data);
    
    
}
?>


```

