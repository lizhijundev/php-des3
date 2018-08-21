<?php
/**
 * Created by PhpStorm.
 * User: lizhijun
 * Date: 21/08/2018
 * Time: 3:24 PM
 */

namespace Lizhijun\Des3\Tests;


use Lizhijun\Des3\Des3;
use Lizhijun\Des3\Exceptions\InvalidArgumentException;
use PHPUnit\Framework\TestCase;

class Des3Test extends TestCase
{
    public function testEncrypt(){
        try{
            $d = new Des3("123456789012345678901234","12345678");
            $d->encrypt('test');

        }catch (\Exception $e){
            $this->expectException(InvalidArgumentException::class);
        }



    }

}
