<?php

use SebastianBergmann\RecursionContext\InvalidArgumentException;

class FizzBuzz
{
    const FIZZ = "Fizz";
    const BUZZ = "Buzz";
    const FIZZ_BUZZ = "FizzBuzz";
    public function execute($number)
    {
        $this->checkValueNumber($number);
        if ($this->isFizzBuzz($number)) {
            return self::FIZZ_BUZZ;
        }
        
        if ($this->isBuzz($number)) {
            return self::BUZZ;
        }
        if ($this->isFizz($number)) {
            return self::FIZZ;
        }
        return $number;
    }
    /**
     * fucntion check value for exception negative number, not number
     *
     */
    private function checkValueNumber($number)
    {
        if ($number < 0) {
            throw new InvalidArgumentException("should be not negative number");
        }

        if (!is_numeric($number)) {
            throw new InvalidArgumentException("should be a number");
        }
    }
    private function isFizzBuzz($number)
    {
        if ($number % 15 == 0) {
            return true;
        }
    }
    private function isBuzz($number)
    {
        if ($number % 5 == 0) {
            return true;
        }
    }
    private function isFizz($number)
    {
        if ($number % 3 == 0) {
            return true;
        }
    }

    public function executeUpTo($max)
    {
        $result = array();
        $this->checkValueNumber($max);
        $arrayNumbers = range(1, $max);
        foreach ($arrayNumbers as $number) {
            $result[] = $this->execute($number);
        }
        return $result;
    }
}
