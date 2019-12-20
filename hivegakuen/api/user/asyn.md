# 支付异步通知

- URL:http://hiveapi.blogchina.com/api/asynconsume

- HTTP请求方式：post

- 是否登陆：否

- 请求参数：
 
```
{ 
    'ticket_id' : 'required',//ticketId
	'pay_at' : 'required',//支付时间
	'result' : 'required',//交易结果 1-等待支付，2-支付成功，10-用户取消
	'trade_msg' : 'required',//交易信息
	'order_id' : 'required',//订单ID
	'amount' : 'required',//交易金额 单位元
	'pay_channel' : 'required',//支付渠道 22-微信 
}
```
 