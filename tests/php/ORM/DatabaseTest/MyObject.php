<?php declare(strict_types = 1);

namespace SilverStripe\ORM\Tests\DatabaseTest;

use SilverStripe\Dev\TestOnly;
use SilverStripe\ORM\Connect\MySQLSchemaManager;
use SilverStripe\ORM\DataObject;

class MyObject extends DataObject implements TestOnly
{
    private static $table_name = 'DatabaseTest_MyObject';

    private static $create_table_options = array(MySQLSchemaManager::ID => 'ENGINE=InnoDB');

    private static $db = array(
        'MyField' => 'Varchar',
        'MyInt' => 'Int',
        'MyFloat' => 'Float',
        'MyDecimal' => 'Decimal',
        'MyBoolean' => 'Boolean',
    );
}
