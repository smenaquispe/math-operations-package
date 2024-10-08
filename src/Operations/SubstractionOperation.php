<?php

namespace Smenaquispe\Mathly\Operations;

use Smenaquispe\Mathly\Contracts\MathOperation;
use Smenaquispe\Mathly\Exceptions\NoNumbersToOperateException;

/**
 * Class SubstractionOperation
 *
 * Implements the subtraction operation defined by the MathOperation interface.
 *
 * @category Math
 * @package  Smenaquispe\Mathly\Operations
 * @author   Tu Nombre <tu.email@example.com>
 * @license  MIT
 * @link     http://example.com
 */
class SubstractionOperation implements MathOperation
{
    /**
     * Executes the subtraction operation on the given numbers.
     *
     * @param float ...$numbers The numbers to subtract.
     * @return float The result of the subtraction.
     * @throws NoNumbersToOperateException If no numbers are provided for the operation.
     */
    public function run(float ...$numbers): float
    {
        if (empty($numbers)) {
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
