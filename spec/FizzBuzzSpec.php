<?php

namespace spec;

use FizzBuzz;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FizzBuzzSpec extends ObjectBehavior
{
    public function it_return_1_for_1()
    {
        $this->execute(1)->shouldReturn(1);
    }

    public function it_return_2_for_2()
    {
        $this->execute(2)->shouldReturn(2);
    }

    public function it_return_Fizz_for_3()
    {
        $this->execute(3)->shouldReturn("Fizz");
    }

    public function it_return_Buzz_for_5()
    {
        $this->execute(5)->shouldReturn("Buzz");
    }

    public function it_return_Fizz_for_9()
    {
        $this->execute(9)->shouldReturn("Fizz");
    }

    public function it_return_Buzz_for_10()
    {
        $this->execute(10)->shouldReturn("Buzz");
    }

    public function it_return_FizzBuzz_for_15()
    {
        $this->execute(15)->shouldReturn("FizzBuzz");
    }

    public function it_return_FizzBuzz_for_30()
    {
        $this->execute(30)->shouldReturn('FizzBuzz');
    }

    public function it_execute_a_range_of_number_up_to_15()
    {
        $this->executeUpTo(15)->shouldReturn([1,2,"Fizz",4,"Buzz","Fizz",7,8,"Fizz","Buzz",11,"Fizz",13,14,"FizzBuzz"]);
    }

    public function it_exception_negative_number()
    {
        $this->shouldThrow(new \InvalidArgumentException("should be not negative number"))->duringExecute(-1);
    }

    public function it_exception_not_a_number()
    {
        $this->shouldThrow(new \InvalidArgumentException("should be a number"))->duringExecute("A");
    }

    public function it_exception_negative_number_for_ExecuteUpTO()
    {
        $this->shouldThrow(new \InvalidArgumentException("should be not negative number"))->duringExecuteUpTo(-1);
    }

    public function it_exception_not_a_number_for_ExecuteUpTo()
    {
        $this->shouldThrow(new \InvalidArgumentException("should be a number"))->duringExecuteUpTo("A");
    }
}
