<?php

namespace Smenaquispe\Mathly\Operations;

use Smenaquispe\Mathly\Contracts\MathOperation;
use Smenaquispe\Mathly\Exceptions\NoNumbersToOperateException;

class SubstractionOperation implements MathOperation
{
    public function run(float ...$numbers): float {
        if(empty($numbers)) {
            throw new NoNumbersToOperateException();
        }

        $result = $numbers[0];

        for ($i = 1; $i < count($numbers); $i++) {
            $result -= $numbers[$i];
        }

        return $result;
    }
}

?>