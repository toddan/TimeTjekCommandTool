<?php

class SeedCodelistMonthsCommand extends Command implements CommandInterface {

    private function insertcodelistMonths()
    {
        foreach(SeedData::CodelistMonths() as $codelistmonth)
        {
            $this->repository->InsertCodelistDays($codelistmonth);
        }
    }

    public function Task()
    {
        $this->insertcodelistMonths();
    }
}