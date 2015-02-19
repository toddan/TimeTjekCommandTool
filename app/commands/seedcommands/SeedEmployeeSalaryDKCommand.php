<?php
/**
 * Created by PhpStorm.
 * User: tord
 * Date: 2/19/2015
 * Time: 12:02
 */

class SeedEmployeeSalaryDkCommand extends Command implements CommandInterface{

    private function insertSalary()
    {
        foreach(SeedData::EmployeeSalaryDk() as $salary)
        {
            $this->repository->InsertEmployeeSalaryDk($salary);
        }
    }
    public function Task()
    {
        $this->insertSalary();
    }
}