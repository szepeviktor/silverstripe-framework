<?php declare(strict_types = 1);

namespace SilverStripe\Control\Tests\RequestHandlingTest;

use SilverStripe\Dev\TestOnly;
use SilverStripe\View\ViewableData;

class ControllerFailover extends ViewableData implements TestOnly
{
    public function failoverMethod()
    {
        return "failoverMethod";
    }
}
