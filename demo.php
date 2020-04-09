<?php
/**
 * Create By PhpStorm
 * Author : Tanson Wang
 * Date   : 2020/4/9
 * Time   : 19:03
 */

require_once "./vendor/autoload.php";

use sdb\MyHelloWorld;
class demo
{
    public static function test(){
        $hello = new MyHelloWorld();
        return $hello->hello();
    }
}

echo demo::test();
