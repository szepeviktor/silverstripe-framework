<?php declare(strict_types = 1);

namespace SilverStripe\Core\Tests\Injector\AopProxyServiceTest;

class SampleService
{
    public $constructorVarOne;
    public $constructorVarTwo;

    public function __construct($v1 = null, $v2 = null)
    {
        $this->constructorVarOne = $v1;
        $this->constructorVarTwo = $v2;
    }
}
