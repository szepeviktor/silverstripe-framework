<?php declare(strict_types = 1);

namespace SilverStripe\ORM\Tests\DataObjectTest;

use SilverStripe\Dev\TestOnly;
use SilverStripe\ORM\DataObject;

class Ploy extends DataObject implements TestOnly
{
    private static $table_name = 'DataObjectTest_Ploy';
}
