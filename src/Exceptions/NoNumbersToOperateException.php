<?php
  namespace Smenaquispe\Mathly\Exceptions;
  
  use InvalidArgumentException;
  
  class NoNumbersToOperateException extends InvalidArgumentException
  {
      public static function create()
      {
        return new static("There are not any numbers to operate");
      }
  }
?>