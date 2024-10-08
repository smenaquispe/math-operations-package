<?php

namespace Smenaquispe\Mathly\Operations;

use Smenaquispe\Mathly\Contracts\MathOperation;
use Smenaquispe\Mathly\Exceptions\NoNumbersToOperateException;

/**
 * Class SumOperation
 *
 * Implements the addition operation defined by the MathOperation interface.
 *
 * @category Math
 * @package  Smenaquispe\Mathly\Operations
 * @author   Tu Nombre <tu.email@example.com>
 * @license  MIT
 * @link     http://example.com
 */
class SumOperation implements MathOperation
{
    /**
     * Executes the addition operation on the given numbers.
     *
     * @param float ...$numbers The numbers to add.
     * @return float The result of the addition.
     * @throws NoNumbersToOperateException If no numbers are provided for the operation.
     */
    public function run(float ...$numbers): float
    {
        if (empty($numbers)) {
            throw new NoNumbersToOperateException();
        }

        return array_sum($numbers);
    }
}
?>
