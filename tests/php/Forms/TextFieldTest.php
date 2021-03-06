<?php declare(strict_types = 1);

namespace SilverStripe\Forms\Tests;

use SilverStripe\Dev\SapphireTest;
use SilverStripe\Forms\TextField;
use SilverStripe\Forms\RequiredFields;

class TextFieldTest extends SapphireTest
{

    /**
     * Tests the TextField Max Length Validation Failure
     */
    public function testMaxLengthValidationFail()
    {
        $textField = new TextField('TestField');
        $textField->setMaxLength(5);
        $textField->setValue("John Doe"); // 8 characters, so should fail
        $result = $textField->validate(new RequiredFields());
        $this->assertFalse($result);
    }

    /**
     * Tests the TextField Max Length Validation Success
     */
    public function testMaxLengthValidationSuccess()
    {
        $textField = new TextField('TestField');
        $textField->setMaxLength(5);
        $textField->setValue("John"); // 4 characters, so should pass
        $result = $textField->validate(new RequiredFields());
        $this->assertTrue($result);
    }
}
