# Lab11 设计文档
佘家瑞 19302010035 6月12日

## The function of cookie and session
由于HTTP本身是无状态协议，为了在web会话中进行状态管理，保持信息，就有了`cookie`和`session`。

`cookie`的作用是在客户端存储用户访问网站的一些信息，应用在记录密码、自动登录，购物车功能等方面；

`session`保存在服务端，可以用来判断用户是否登录。

## The advantages & disadvantages of cookie and session.  
`cookie`的优点是文件小；缺点是会在请求过程中造成安全性问题，且有时存储受限制，另外有可能会被禁用。

`session`的优点是安全；缺点是由于存储在服务器端，占用服务器资源，有时会影响各台服务器端的工作平衡。