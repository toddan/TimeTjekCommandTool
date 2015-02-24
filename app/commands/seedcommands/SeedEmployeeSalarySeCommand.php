<?php
class SeedEmployeeSalarySeCommand extends Command implements CommandInterface {
    private function insertSalary()
    {
        foreach(SeedData::EmployeeSalarySe() as $salary)
        {
            $this->repository->InsertEmployeeSalarySe($salary);
        }
    }

    public function Task()
    {
        $this->insertSalary();
    }
}