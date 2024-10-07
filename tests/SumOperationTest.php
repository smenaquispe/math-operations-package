<?php

namespace Smenaquispe\Mathly\Tests;

use PHPUnit\Framework\TestCase;
use Smenaquispe\Mathly\Operations\SumOperation;
use Smenaquispe\Mathly\Exceptions\NoNumbersToOperateException;

class SumOperationTest extends TestCase 
{
    /** @test */    
    public function test_it_throw_exception_if_no_numbers() 
    {
        $this->expectException(NoNumbersToOperateException::class);

        $sumOperation = new SumOperation();
        $sumOperation->run();
    }

    public function test_it_sum_list_of_numbers() 
    {
        $sumOperation = new SumOperation();
        $result = $sumOperation->run(1.4, 2.4, 1.1);
        
        $this->assertEquals(4.9, $result);
    }
}

?>