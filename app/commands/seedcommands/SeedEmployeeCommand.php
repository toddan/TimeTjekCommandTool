<?php
class SeedEmployeeCommand extends Command implements CommandInterface {

    private function insertEmployees()
    {
        foreach(SeedData::Employees() as $employee)
        {
            $this->repository->InsertEmployee($employee);
        }
    }

    public function Task()
    {
        $this->insertEmployees();
    }

}