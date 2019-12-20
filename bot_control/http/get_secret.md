# 获取密钥

开发者在完成每次 HTTP API 调用前，API 发起的 URL 中需要带上sign参数。sign 参数是秘钥 access_key 和 secret 及参数串的签名。开发者可以向管理员申请 API 密钥，包括访问凭证 ( access_key ) 和 私钥 ( secret )。

|项|   说明|
|:----|:----|
|access_key|  访问凭证。每次 url 请求时必须附带该参数|
|secret|  私钥。用于计算 sign 哈希签名，开发者应妥善保管，不可泄漏|