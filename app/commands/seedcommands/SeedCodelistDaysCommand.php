<?php

class SeedCodelistDaysCommand extends Command implements CommandInterface {

    private function insertCodelistDays()
    {
        foreach(SeedData::CodelistDays() as $codelistdays)
        {
            $this->repository->InsertCodelistDays($codelistdays);
        }
    }

    public function Task()
    {
        $this->insertCodelistDays();
    }
}