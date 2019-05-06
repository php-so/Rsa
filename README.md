# PHP - Rsa
### rsa加解密库

### 一个直接调用C的动态库 , 速度比PHP框架自带的快。

## 功能特点

* 支持公钥加密

* 支持私钥解密

##  安装使用
## 依赖软件
##### 一般依赖

* PHP 7.0+

### 1、linux 安装
#### I、下载 git clone https://github.com/php-so/Rsa.git
``` linux
[root@test1 usr]# pwd
/usr
[root@test1 usr]# git clone https://github.com/php-so/Rsa.git
Cloning into 'Rsa'...
remote: Enumerating objects: 10, done.
remote: Counting objects: 100% (10/10), done.
remote: Compressing objects: 100% (7/7), done.
remote: Total 10 (delta 0), reused 4 (delta 0), pack-reused 0
Unpacking objects: 100% (10/10), done.
```
#### II、切换目录、复制动态库到PHP的扩展中、修改php.ini
``` linux
[root@test1 usr]# cd Rsa/

[root@test1 Rsa]# cp ./rsa.so /usr/local/php/lib/php/extensions/no-debug-non-zts-20170718/

[root@test1 Rsa]# vim /usr/local/php/etc/php.ini
最下面添加2行
[Rsa]
extension=rsa.so

记得重新 php-fpm

查看模块
php -m 
```

### 2、使用案例

```linux
[root@test1 Rsa]# pwd
/usr/Rsa

[root@test1 Rsa]# cd test

/usr/local/php/bin/php rsa-test.php

```
#### 成功响应
```linux
       _             ____            
 _ __ | |__  _ __   |  _ \ ___  __ _ 
| '_ \| '_ \| '_ \  | |_) / __|/ _` |
| |_) | | | | |_) | |  _ <\__ \ (_| |
| .__/|_| |_| .__/  |_| \_\___/\__,_|
|_|         |_|                      

string(29) "l love you! this is rsa test."

string(171) "YlrrEbSczaDzMDTbSrzNP3JHSt0Yo8HRcMh6n95SUOFXtusiRg1HpMi3MFam7wcGxTNR5vRFuAzSKn6FCS1oIEo3aFAbTHz15MDvUW027Q3OvweTGO5DSzYqmxZJdCRUDBFrsiWD77dKRmi/NInUya7pPrBEcOwt6yIcbfSKBv8"

string(29) "l love you! this is rsa test."
```

## 协议

[![996.icu](https://img.shields.io/badge/link-996.icu-red.svg)](https://996.icu)
[![LICENSE](https://img.shields.io/badge/license-Anti%20996-blue.svg)](https://github.com/996icu/996.ICU/blob/master/LICENSE)

[MIT : license](https://github.com/m-sql/msql/blob/master/LICENSE)
