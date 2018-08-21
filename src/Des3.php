<?php
namespace Lizhijun\Des3;
use Lizhijun\Des3\Exceptions\InvalidArgumentException;

class Des3 {
    // DES3_KEY
    protected $key;
    // DES3_IV
    protected $iv;

    public function __construct($key = "", $iv = "")
    {
        if (strlen($key) != 24){
            throw new InvalidArgumentException("DES3_KEY长度错误，长度为24");
        }
        if (strlen($iv) != 8){
            throw new InvalidArgumentException("DES3_IV长度错误，长度为8");
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