<?php

namespace Smenaquispe\Mathly\Exceptions;

use InvalidArgumentException;

/**
 * Class NoNumbersToOperateException.
 *
 * Exception thrown when no numbers are provided for mathematical operations.
 *
 * @category Math
 *
 * @author   Sergio Mena <sergiosantosmenaq@gmail.com>
 * @license  MIT
 *
 * @link     http://example.com
 */
class NoNumbersToOperateException extends InvalidArgumentException
{
    /**
     * Creates a new instance of NoNumbersToOperateException.
     *
     * @return NoNumbersToOperateException The exception instance.
     */
    public static function create()
    {
        return new static('There are not any numbers to operate');
    }
}
