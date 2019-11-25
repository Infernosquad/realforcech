<?php

namespace App\Calculator;

use App\Model\Money;
use App\Model\User;

class SalaryCalculator
{
    const COUNTRY_TAX_PERCENT = 20;
    const AGE_SUBSIDY_THRESHOLD = 50;
    const AGE_SUBSIDY_PERCENT = 7;
    const KIDS_FEE_REDUCE_THRESHOLD = 2;
    const KIDS_FEE_REDUCE = 2;
    const COMPANY_CAR_DEDUCTION = 50000;

    /**
     * @param User $user
     *
     * @return User
     */
    public function calculate(User $user)
    {
        $user->setTax(self::COUNTRY_TAX_PERCENT);

        if ($user->getAge() >= self::AGE_SUBSIDY_THRESHOLD) {
            $user->setSalary(($user->getSalary()->multiply(1 + self::AGE_SUBSIDY_PERCENT / 100)));
        }

        if ($user->getKidsCount() > self::KIDS_FEE_REDUCE_THRESHOLD) {
            $user->setTax($user->getTax() - self::KIDS_FEE_REDUCE);
        }

        if ($user->isCompanyCar()) {
            $user->setSalary($user->getSalary()->subtract(self::COMPANY_CAR_DEDUCTION));
        }

        $user->setSalary($user->getSalary()->multiply((1 - $user->getTax() / 100)));
        $user->setSalaryCalculated(true);

        return $user;
    }
}