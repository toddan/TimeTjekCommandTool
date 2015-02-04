<?php
/**
 * Created by PhpStorm.
 * User: tord
 * Date: 2/4/2015
 * Time: 20:47
 */

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