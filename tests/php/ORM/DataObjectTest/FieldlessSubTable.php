<?php declare(strict_types = 1);

namespace SilverStripe\ORM\Tests\DataObjectTest;

use SilverStripe\Dev\TestOnly;

class FieldlessSubTable extends Team implements TestOnly
{
    private static $table_name = 'DataObjectTest_FieldlessSubTable';
}
