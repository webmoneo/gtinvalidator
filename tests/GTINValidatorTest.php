<?php

namespace webmoneo\Validators\Tests;

use webmoneo\Validators\GTINValidator;

// Nasty work around for testing over multiple PHPUnit versions
if (!class_exists('\PHPUnit_Framework_TestCase') && class_exists('\PHPUnit\Framework\TestCase')) {
    class_alias('\PHPUnit\Framework\TestCase', '\PHPUnit_Framework_TestCase');
}

class GTINValidatorTest extends \PHPUnit_Framework_TestCase
{
    // TODO
}