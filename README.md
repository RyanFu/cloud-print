<p align="center">
	<strong>云小票机SDK-cloud-print</strong>
</p>

<p align="center">
<p align="center">
	<strong>开源地址：</strong> <a target="_blank" href='https://gitee.com/whereof/cloud-print'>Gitee</a> | <a target="_blank" href='https://github.com/whereof/cloud-print'>Github</a> 
</p>
<p align="center">
	<strong>开发者文档：</strong> <a target="_blank" href='https://github.com/whereof/cloud-print/wiki'>wiki</a>
</p>
</p>


<p align="center">
    <a href="https://github.com/whereof/cloud-print/actions"><img src="https://github.com/whereof/cloud-print/workflows/Tester/badge.svg" alt="Linter Status"></a>
<a href="https://packagist.org/packages/whereof/cloud-print" rel="nofollow"><img src="http://poser.pugx.org/whereof/cloud-print/v" alt="Latest Stable Version" data-canonical-src="http://poser.pugx.org/whereof/cloud-print/v" style="max-width: 100%;"></a> <a href="https://packagist.org/packages/whereof/cloud-print" rel="nofollow"><img src="http://poser.pugx.org/whereof/cloud-print/downloads" alt="Total Downloads" data-canonical-src="http://poser.pugx.org/whereof/cloud-print/downloads" style="max-width: 100%;"></a> <a href="https://packagist.org/packages/whereof/cloud-print" rel="nofollow"><img src="http://poser.pugx.org/whereof/cloud-print/v/unstable" alt="Latest Unstable Version" data-canonical-src="http://poser.pugx.org/whereof/cloud-print/v/unstable" style="max-width: 100%;"></a> <a href="https://packagist.org/packages/whereof/cloud-print" rel="nofollow"><img src="http://poser.pugx.org/whereof/cloud-print/license" alt="License" data-canonical-src="http://poser.pugx.org/whereof/cloud-print/license" style="max-width: 100%;"></a> <a href="https://packagist.org/packages/whereof/cloud-print" rel="nofollow"><img src="http://poser.pugx.org/whereof/cloud-print/require/php" alt="PHP Version Require" data-canonical-src="http://poser.pugx.org/whereof/cloud-print/require/php" style="max-width: 100%;"></a>
</p>



> 非官方云小票机SDK，支持飞鹅云，芯烨云，易联云，快递100，映美云，中午云，佳博云，优声云，365智能云打印等


## 安装

~~~~
composer require whereof/cloud-print
~~~~

基于[365智能云打印](http://printcenter.cn/)的 PHP 接口组件

~~~
$printer = \whereof\cloudPrint\Factory::Printcenter([
    'key' => '',
])->printer;
~~~

基于[中午云](http://www.zhongwu.co/)的 PHP 接口组件

~~~
$printer = \whereof\cloudPrint\Factory::Zhongwuyun([
    'appid'     => '******',
    'appsecret' => '******',
])->printer;
~~~

基于 [优声云](https://www.ushengyun.com/) 的 PHP 接口组件

~~~
$printer = \whereof\cloudPrint\Factory::Ushengyun([
    'appId'     => '10001',
    'appSecret' => '**********',
])->printer;
~~~

基于[佳博云](https://dev.poscom.cn/)的 PHP 接口组件

~~~
$printer = \whereof\cloudPrint\Factory::Poscom([
    'memberCode' => '',
    'apiKey'     => '',
])->printer;
~~~

基于[快递100](https://api.kuaidi100.com/document/5f0ff6adbc8da837cbd8aef8)的 PHP 接口组件

~~~
$printer = \whereof\cloudPrint\Factory::Kuaidi100([
    'key' => '',
    'secret' => '',
])->printer;
~~~

基于[易联云](https://www.yilianyun.net/)的 PHP 接口组件

~~~
$printer = \whereof\cloudPrint\Factory::Yilianyun([
    'client_id'     => '',
    'client_secret' => '',
])->printer;
~~~

基于[映美云](http://open.jolimark.com/)的 PHP 接口组件

~~~
$printer = \whereof\cloudPrint\Factory::Jolimark([
    'app_id'  => '',
    'app_key' => '',
])->printer;
~~~

基于 [芯烨云](https://www.xpyun.net/open/index.html) 的 PHP 接口组件

~~~
$printer = \whereof\cloudPrint\Factory::Xpyun([
    'user'    => '',
    'userKey' => '',
])->printer;
~~~

基于 [飞鹅云](http://help.feieyun.com/document.php) 的 PHP 接口组件

~~~
$printer = \whereof\cloudPrint\Factory::Feieyun([
    'user' => '',
    'ukey' => '',
])->printer;
~~~


## 支持厂商

- [飞鹅云](http://help.feieyun.com/document.php) 
- [芯烨云](https://www.xpyun.net/open/index.html)
- [易联云](https://www.yilianyun.net/)
- [快递100](https://api.kuaidi100.com/document/5f0ff6a32977d50a94e10235)
- [映美云](http://open.jolimark.com/)
- [佳博云](https://dev.poscom.cn/)
- [365智能云打印](http://printcenter.cn/)
- [中午云](http://www.zhongwu.co/)
- [优声云](https://www.ushengyun.com/)


## LICENSE

MIT

