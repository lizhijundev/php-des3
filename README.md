# PHP 3DES函数库
基于php的3DES函数库

## 安装
```
$ composer require lizhijun/des3
```

## 使用
```
use Lizhijun\Des3\Des3;

$des = new Des3("123456789012345678901234","12345678");

$des->encrypt("Hello world");

$des->decrypt("");
```