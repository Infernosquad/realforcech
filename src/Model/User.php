<?php

namespace App\Model;

class User
{
    /**
     * @var int
     */
    private $kidsCount = 0;

    /**
     * @var bool
     */
    private $companyCar = false;

    /**
     * @var int
     */
    private $age = 0;

    /**
     * @var Money|null
     */
    private $salary = null;

    /**
     * @var int
     */
    private $tax = 0;

    /**
     * @var bool
     */
    private $salaryCalculated = false;

    public function __construct()
    {
        $this->salary = new Money(0);
    }

    /**
     * @return int
     */
    public function getKidsCount(): int
    {
        return $this->kidsCount;
    }

    /**
     * @param int $kidsCount
     * @return User
     */
    public function setKidsCount(int $kidsCount): User
    {
        $this->kidsCount = $kidsCount;

        return $this;
    }

    /**
     * @return bool
     */
    public function isCompanyCar(): bool
    {
        return $this->companyCar;
    }

    /**
     * @param bool $companyCar
     * @return User
     */
    public function setCompanyCar(bool $companyCar): User
    {
        $this->companyCar = $companyCar;

        return $this;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @param int $age
     * @return User
     */
    public function setAge(int $age): User
    {
        $this->age = $age;

        return $this;
    }

    /**
     * @return int
     */
    public function getTax(): int
    {
        return $this->tax;
    }

    /**
     * @param int $tax
     * @return User
     */
    public function setTax(int $tax): User
    {
        $this->tax = $tax;

        return $this;
    }

    /**
     * @return Money|null
     */
    public function getSalary(): ?Money
    {
        return $this->salary;
    }

    /**
     * @param Money|null $salary
     * @return User
     */
    public function setSalary(?Money $salary): User
    {
        $this->salary = $salary;

        return $this;
    }

    /**
     * @return bool
     */
    public function isSalaryCalculated(): bool
    {
        return $this->salaryCalculated;
    }

    /**
     * @param bool $salaryCalculated
     * @return User
     */
    public function setSalaryCalculated(bool $salaryCalculated): User
    {
        $this->salaryCalculated = $salaryCalculated;

        return $this;
    }
}