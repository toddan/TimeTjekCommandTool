<?php
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