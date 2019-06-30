<?php declare(strict_types = 1);

namespace SilverStripe\Core\Tests\ObjectTest;

class MySubObject extends MyObject
{
    public $title = 'my subobject';
    private static $mystaticProperty = "MySubObject";
    static $mystaticSubProperty = "MySubObject";
    static $mystaticArray = array('two');
}
