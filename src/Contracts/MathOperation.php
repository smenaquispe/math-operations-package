<?php

namespace Smenaquispe\Mathly\Contracts;

/**
 * Interface MathOperation.
 *
 * Defines the contract for mathematical operations.
 *
 * @category Math
 *
 * @author   Sergio Mena <sergiosantosmenaq@gmail.com>
 * @license  MIT
 *
 * @link     http://example.com
 */
interface MathOperation
{
    /**
     * Executes the mathematical operation on the given numbers.
     *
     * @param  float  ...$numbers  The numbers to operate on.
     * @return float The result of the mathematical operation.
     */
    public function run(float ...$numbers): float;
}
