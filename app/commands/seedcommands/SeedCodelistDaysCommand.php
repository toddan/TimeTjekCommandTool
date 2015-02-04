<?php
/**
 * Created by PhpStorm.
 * User: tord
 * Date: 2/4/2015
 * Time: 18:54
 */

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