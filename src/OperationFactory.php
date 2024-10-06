<?php

namespace Smenaquispe\Mathly;

class OperationFactory
{
    private $numbers = [0];

    public function __construct(array $numbers) 
    {
        if ($numbers) {
            $this->numbers = $numbers;    
        }
    }

    public function get_first_number()
    {
        return $this->numbers[0];
    }
}

?>