# pjax 
`PJAX`的基本思路是，用户点击一个链接，通过ajax更新页面变化的部分，然后使用`HTML5`的`pushState`修改浏览器的`URL`地址，这样有效地避免了整个页面的重新加载。


### 如何处理页面刷新的问题

问题：

  > `pjax`使用有这样的一个场景:用户点击一个链接，通过`ajax`更新页面变化的部分,然后使用`HTML5`的`pushState`修改浏览器的URL地址为：`xxx.pajx.html`;那么当用户在浏览器点刷新时，`xxx.pajx.html`只显示的是一个`html`片段，并不显示整个页面，这当然不是我们预期的！

解决：

  > 服务端接收到`xxx.pajx.html`的请求时，就要根据header判断是`pajx`请求，还是用户刷新，根据不同的`header` 返回不同的数据

例如：

```php
<?php

function is_pjax(){
  return array_key_exists('HTTP_X_PJAX', $_SERVER) && $_SERVER['HTTP_X_PJAX'];
} 
if(is_pjax()) {
  return 'veiw1';
}
return 'view2';
?>  
```

### 项目中用到pjax的地方
请开发人员补充

### 注意 
项目中使用[jquery-pjax](https://github.com/defunkt/jquery-pjax)
如果出现pajx请求出问题尝试设置下timeout 把timeout的值设置大点

> $.pjax.defaults.timeout = 1200


