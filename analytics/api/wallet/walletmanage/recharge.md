# 充值二维码


- URL：/wallet/walletmanage/recharge

- HTTP请求方式：POST

- 是否登陆：否

- 请求参数：

```
{
    'user_id' ： '123456',
    'pay_money' ： 10000,
}
```

- 返回结果：

```
return view('walletmanage.qrcode', ['qrcode' => $qrcode]);//显示二维码


```


