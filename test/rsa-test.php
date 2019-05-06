<?php
$publicKey  = "-----BEGIN PUBLIC KEY-----
MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDZYFvAVWLtuCo3uAmVK1JzyeE4
D6IdSWaLs0tA5lWX6nkoUi4UR8JN3mgTqiaMQ6AbVZDdE77/bV1iC35VzXxlviwm
q5M0JcGK59rvBJTY2KWQgqWYHH6YV3iHHZq0OEdqQ+ymtlhufn9/bUA2ScQl6kq8
5ilPAk5ZMQ6tK3dPbQIDAQAB
-----END PUBLIC KEY-----";
$privateKey = "-----BEGIN RSA PRIVATE KEY-----
MIICXwIBAAKBgQDZYFvAVWLtuCo3uAmVK1JzyeE4D6IdSWaLs0tA5lWX6nkoUi4U
R8JN3mgTqiaMQ6AbVZDdE77/bV1iC35VzXxlviwmq5M0JcGK59rvBJTY2KWQgqWY
HH6YV3iHHZq0OEdqQ+ymtlhufn9/bUA2ScQl6kq85ilPAk5ZMQ6tK3dPbQIDAQAB
AoGBAMyknHwrZqEpmgUuq0bVrB/51J+0iAhOS84FEzmcHsSQJ1PAWkUZcWFhmlW4
/+VY3Oge2+xlZJCPYzSkYWFhvFNHErWwOnWQhLkNGLU2WGqqPQXs4TZ88iD/yuCv
+t0GVLkQPP3Ab5UikjL1WhyMVwfJ1L4jnFUIg0G4Z/uwL/LBAkEA2szmKnX0IwIS
mJVx0if/V7ehGWa5W+x0mIw6idTfJPZ5A5xz5M56fXoRdJrqDvnb5LpkUo6Xhu67
Dn3BSUuolQJBAP5Ve0MVHC6e7vIQWCGuLe4BizlRLeCs1goCHSXYN7TQZr7ZLoFz
9KRwESvRabZZHSXzXRkIpOPKyqylVdZ83XkCQQC1ce39kEuhLHrXZjc5nEm4KGPE
eNeGT5RxXPi+jHVwZaT9RaUmPcR+gdgv5rfrK3EbQSco/27RSvB8l/TOH5vxAkEA
iWIRcD4R+BkAB5/Oi3rz8nHBC9gPCSMzhzp3Fj9CcBh2t7bHSUQirUSf8eRvzwE6
HorkCibCMw4TBslUocTXOQJBANoUNhrab1yQibks4AYCAwAZ+Yfb8eyXW4/Lnd/w
G8CjjmCVpYFKKV9eWYbLxLvkfUeVH/M9jkVMQHRdyj1LXBA=
-----END RSA PRIVATE KEY-----";

$str = 'l love you! this is rsa test.';

$rsa = new Rsa\Rsa($publicKey,$privateKey);
/**
 * 原始数据
 */
var_dump($str);

$str_publicEncrypt = $rsa->publicEncrypt($str);
/**
 * 公钥加密数据
 */
var_dump($str_publicEncrypt);

$str_privateDecrypt = $rsa->privateDecrypt($str_publicEncrypt);
/**
 * 私钥解密数据
 */
var_dump($str_privateDecrypt);
