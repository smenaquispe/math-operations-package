<?php

namespace Smenaquispe\Mathly\Tests;
use PHPUnit\Framework\TestCase;

use Smenaquispe\Mathly\OperationFactory;

class OperationFactoryTest extends TestCase 
{
    /** @test */
    public function it_returns_first_number() 
    {
        $operation = new OperationFactory([1]);
        $first_number = $operation->get_first_number();    
    
        $this->assertSame(1, $first_number);
    }
}

?>