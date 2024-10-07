<?php

namespace Smenaquispe\Mathly\Contracts;

interface MathOperation
{
    public function run(float ...$numbers): float;
}
?>