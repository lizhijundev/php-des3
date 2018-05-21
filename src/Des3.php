<?php
namespace lizhijun\utils;
class Des3 {
    // DES3_KEY
    var $key;
    // DES3_IV
    var $iv;

    public function __construct($key = "gO6ufduPBAJXIXWDO2yVPAQv", $iv = "20170901")
    {
        if (strlen($key) != 24){
            throw new \Exception("DES3_KEY长度错误，长度为24");
        }
        if (strlen($iv) != 8){
            throw new \Exception("DES3_IV长度错误，长度为8");
        }
        $this->key = $key;
        $this->iv = $iv;
    }


    public function encrypt($input){
        return base64_encode(openssl_encrypt($input, "des-ede3-cbc", $this->key, OPENSSL_RAW_DATA, $this->iv));
    }

    public function decrypt($encrypted){
        return openssl_decrypt(base64_decode($encrypted), 'des-ede3-cbc', $this->key, OPENSSL_RAW_DATA, $this->iv);
    }

}