<?php

namespace src;

class Task12
{
}

class MyCalculator extends Task12
{
    public int $value1;
    public int $value2;
    public float $result;

    public function __construct(int $value1, int $value2)
    {
        $this->value1 = $value1;
        $this->value2 = $value2;
    }

    public function add(): object
    {
        if (isset($this->result)) {
            $this->result = $this->result + $this->value1 + $this->value2;
        } else
            $this->result = $this->value1 + $this->value2;

        return $this;
    }

    public function subtract(): object
    {
        if (isset($this->result)) {
            $this->result = $this->result - $this->value1 - $this->value2;
        } else
            $this->result = $this->value1 - $this->value2;

        return $this;
    }

    public function multiply(): object
    {
        if (isset($this->result)) {
            $this->result = $this->result * $this->value1 * $this->value2;
        } else
            $this->result = $this->value1 * $this->value2;

        return $this;
    }

    public function divideBy(int $num): object
    {
        $this->result = $this->result / $num;

        return $this;
    }

    public function __toString()
    {
        return "{$this->result}";
    }
}

$myCalc = new MyCalculator(19, 6);

echo $myCalc->add()->divideBy(2)->add()->multiply();


