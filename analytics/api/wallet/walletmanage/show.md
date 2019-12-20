# 钱包管理信息


- URL：/wallet/walletmanage/show

- HTTP请求方式：GET

- 是否登陆：是

- 请求参数：

```
{
    "page" : 1, // 页码数，不是必传参数，没有传递，默认为1
    "limit" : 10, //一页显示的条数，不是必传参数，没有传递，默认为10
    
}
```

- 返回结果：

```
return view('walletmanage.show', ['wallet_data' => $get_wallet_data, 'deal_data' => $get_deal_data]);
//钱包信息
wallet_data:{
    'balance' : 100, //余额
    'is_random' : 1,//是否是随意金额
    'min_money' : 100,//最小分享红包金额，默认是100分
    'max_money' : 1000,//最大分享红包金额，默认是100分
    'share_money' : 100,//当不是随机金额时，使用这个
}
//交易信息
deal_data:{
    "data" : {
        'deal_id' : '020420170615092413256', // 交易号
        'total_amount' : 100, // 交易金额
        'pay_time' : 1497510588123, // 支付时间
        'type' : 3, //交易类型 : 红包
    },
    "count" : {
        20 //总交易数
    }
}


```


