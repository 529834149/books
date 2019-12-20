# 签名说明
 
#### 作用 
- API接口保障安全性原则：1.有调用者身份2.请求的唯一性3.请求的参数不能被篡改4.请求的有效时间 http://blog.csdn.net/kebi007/article/details/72861532

- 请求参数：
 
```
{ 
    "token":xxxxxxxxxx//非参数，比如注册 登录 找回密码 Token的作用的就是判断请求是否是系统用户发出的，这样能有效识别请求用户的身份信息
    "sign":xxx //接口参数的key,value的记录，防止参数值被篡改，防止伪装请求 
    "tamptimes":xxx //防止恶意攻击
}
```
#### sign算法
比如有这样一个接口http:127.0.0.1/api/product?&type=zl&p1=value1&p2=value2&p3=&sign=signValue
- 第一步：拼接参数字符串，除去sign参数本身和为空值的p3，那么剩下的就是字符串type=zl&p1=value1&p2=value2,然后按参数名字符升（降）序，得到字符串 p1=value1&p2=value2&type=zl
- 第二步：然后做参数名和值的拼接，得到字符串p1value1p2value2type=zl,注意编码，不能出现这种&quot; ,要转码后“后拼接 拼接过程中添加一个约定的默认参数值 app与接口约定
- 第三步：将字符串加密（md5）
- 第四步：在接口中我们会接收到参数名sign的参数值 与第三步的值进行比较，如果不一样则说明参数的循序不一样，参数的值就一定是被修改过了
- 第五步：系统时间- 参数中提供的时间 如果大于某个值时  说明超时

- 列：

```
{
	$validator = \Validator::make($request->all(), [
        'sign' => 'required',
        'tamptimes' => 'required', 
    ]);
    if ($validator->fails()) {
    	return response()->json([
            'meta'=>[
                'code'=>400,
                'message'=>$validator->errors()->all(),
           ]
        ]);  
    }
	$params = $request->all();
	$params['uniquevalue'] = env('SIGN_UNIQUE_VALUE','1e9fca0c9a938694e6574551b46760bf');
	$sign = $params['sign'];
	unset($params['sign']); 
	ksort($params); 
	$new_params = http_build_query($params); 
	$new_sign = md5(urlencode($new_params)); 
	if($new_sign !== $sign){
		return response()->json([
            'meta'=>[
                'code'=>401,
                'message'=>'Unauthorized, sign error',
           ]
        ]); 
	}
	
	$tamptimes = intval($params['tamptimes']); 
	if((time() - $tamptimes) > 120){
		return response()->json([
            'meta'=>[
                'code'=>401,
                'message'=>'Unauthorizedrequest timeout',
           ]
        ]); 
	}  
}


```