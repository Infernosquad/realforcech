<?php

namespace App\Tests\Calculator;

use App\Calculator\SalaryCalculator;
use App\Model\Money;
use App\Model\User;
use PHPUnit\Framework\TestCase;

class SalaryCalculatorTest extends TestCase
{
    public function testAlice()
    {
        $user = (new User())
            ->setAge(26)
            ->setKidsCount(2)
            ->setSalary(new Money(600000));

        $calculator = new SalaryCalculator();
        $calculator->calculate($user);

        $this->assertEquals(480000, $user->getSalary()->getAmount());
    }

    public function testBob()
    {
        $user = (new User())
            ->setAge(52)
            ->setCompanyCar(true)
            ->setSalary(new Money(400000));

        $calculator = new SalaryCalculator();
        $calculator->calculate($user);

        $this->assertEquals(302400, $user->getSalary()->getAmount());
    }

    public function testCharlie()
    {
        $user = (new User())
            ->setAge(36)
            ->setKidsCount(3)
            ->setCompanyCar(true)
            ->setSalary(new Money(500000));

        $calculator = new SalaryCalculator();
        $calculator->calculate($user);

        $this->assertEquals(369000, $user->getSalary()->getAmount());
    }
}