# 交易详情


- URL：/wallet/walletmanage/detail

- HTTP请求方式：GET

- 是否登陆：是

- 请求参数：

```
{
    "deal_id" : "020420170615092413256", // 交易号   
}
```

- 返回结果：

```
return view('walletmanage.detail', ['deal_data' => $deal_data]);

deal_data : {
    'deal_id' : "020420170615092413256", //交易号
    'order_id' : "03052017061509142523456",//订单号
    'total_amount' : 100,//交易金额
    'pay_time' : 1497510588123,//交易时间
    'type' : 3,//交易类型 : 红包
}


```


