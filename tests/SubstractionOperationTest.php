<?php

namespace Smenaquispe\Mathly\Tests;

use PHPUnit\Framework\TestCase;
use Smenaquispe\Mathly\Operations\SubstractionOperation;
use Smenaquispe\Mathly\Exceptions\NoNumbersToOperateException;

class SubstractionOperationTest extends TestCase 
{
    /** @test */    
    public function test_it_throw_exception_if_no_numbers() 
    {
        $this->expectException(NoNumbersToOperateException::class);

        $substractionOperation = new SubstractionOperation();
        $substractionOperation->run();
    }

    public function test_it_return_same_number_if_unique() 
    {
        $substractionOperation = new SubstractionOperation();
        $result = $substractionOperation->run(10);
        
        $this->assertEquals(10, $result);
    }

    public function test_it_substract_list_of_numbers() 
    {
        $substractionOperation = new SubstractionOperation();
        $result = $substractionOperation->run(10, 5, 5, 5);
        
        $this->assertEquals(-5, $result);
    }
}

?>