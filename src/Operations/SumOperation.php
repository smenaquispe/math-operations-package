<?php

namespace Smenaquispe\Mathly\Operations;

use Smenaquispe\Mathly\Contracts\MathOperation;
use Smenaquispe\Mathly\Exceptions\NoNumbersToOperateException;

class SumOperation implements MathOperation
{
    public function run(float ...$numbers): float {
        if(empty($numbers)) {
            throw new NoNumbersToOperateException();
        }

        return array_sum($numbers);
    }
}

?>