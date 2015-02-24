<?php
class SeedEmployeeSalarySeCommand extends Command implements CommandInterface {
    private function insertSickDays()
    {
        foreach(SeedData::SickDays() as $sickday)
        {
            $this->repository->InsertSickDays($sickday);
        }
    }

    public function Task()
    {
        $this->insertSickDays();
    }
}