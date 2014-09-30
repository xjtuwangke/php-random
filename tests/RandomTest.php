<?php
/**
 * Created by PhpStorm.
 * User: kevin
 * Date: 14/10/1
 * Time: 03:12
 */

use Xjtuwangke\Random\KRandom;

class RandomTest extends \PHPUnit_Framework_TestCase {

    public function testInt(){
        $int = KRandom::int( 0 , 1 );
        echo $int . "\n";
        $int = KRandom::int();
        echo $int . "\n";
        $int = KRandom::int( 0 , 65535 , range( 0 , 50000 ) );
        echo $int . "\n";
    }

    public function testString(){
        echo KRandom::string( 32 , 'a-z' ) . "\n";
        echo KRandom::string( 32 , 'a-zA-Z0-9' ) . "\n";
        echo KRandom::string( 1 , 'abc' , array('a' , 'b' ) ) . "\n";
    }

    public function testGetRandomStr(){
        echo KRandom::getRandStr() . "\n";
        echo KRandom::getRandStr( 16 ) . "\n";
        echo KRandom::getRandStr( 32 , 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ' ) . "\n";
    }

}