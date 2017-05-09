<?php namespace SimilarText\Test;

use \SimilarText\Finder;

/**
 * Class FinderTest
 * @package SimilarText\Test
 */
class FinderTest extends \PHPUnit_Framework_TestCase
{
    public function testOk() {
        $this->assertTrue(true);
    }

    public function testEssai(){
        $a = new Finder('banane',['Kiwi', 'banane']);
        // echo $a->first();
        $this->assertEquals('Ok', $a->first());
    }
}
