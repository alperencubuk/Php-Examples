<?php

namespace spec;

use FizzBuzz;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FizzBuzzSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(FizzBuzz::class);
    }

    function it_is_test_runFizzBuzz_1_5()
    {
        $this->runFizzBuzz(1, 5)->shouldReturn
        (
            [
                1,
                2,
                "Fizz",
                4,
                "Buzz"
            ]
        );
    }

    function it_is_test_runFizzBuzz_1_15()
    {
        $this->runFizzBuzz(1, 15)->shouldReturn
        (
            [
                1,
                2,
                "Fizz",
                4,
                "Buzz",
                "Fizz",
                7,
                8,
                "Fizz",
                "Buzz",
                11,
                "Fizz",
                13,
                14,
                "FizzBuzz"
            ]
        );
    }

    function it_is_test_runFizzBuzz_15_30()
    {
        $this->runFizzBuzz(15, 30)->shouldReturn
        (
            [
                "FizzBuzz",
                16,
                17,
                "Fizz",
                19,
                "Buzz",
                "Fizz",
                22,
                23,
                "Fizz",
                "Buzz",
                26,
                "Fizz",
                28,
                29,
                "FizzBuzz"
            ]
        );
    }
}
