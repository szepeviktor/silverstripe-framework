<?php declare(strict_types = 1);

namespace SilverStripe\Control\Tests;

use SilverStripe\Dev\SapphireTest;
use SilverStripe\Control\NullHTTPRequest;

class NullHTTPRequestTest extends SapphireTest
{

    public function testAllHttpVerbsAreFalse()
    {
        $r = new NullHTTPRequest();
        $this->assertFalse($r->isGET());
        $this->assertFalse($r->isPOST());
        $this->assertFalse($r->isPUT());
        $this->assertFalse($r->isDELETE());
        $this->assertFalse($r->isHEAD());
    }

    public function testGetURL()
    {
        $r = new NullHTTPRequest();
        $this->assertEquals('', $r->getURL());
    }
}
