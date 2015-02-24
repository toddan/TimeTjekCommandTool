<?php
class SeedEmployeeSalarySeCommand extends Command implements CommandInterface {

    private function insertHolidays()
    {
        foreach(SeedData::Holidays() as $holiday)
        {
            $this->repository->InsertHoliday($holiday);
        }
    }

    public function Task()
    {
        $this->insertHolidays();
    }
}