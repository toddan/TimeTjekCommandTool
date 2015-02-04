<?php
/**
 * Created by PhpStorm.
 * User: tord
 * Date: 2/4/2015
 * Time: 21:43
 */

class SeedCodelistTimeregStatusCommand extends Command implements CommandInterface{
    private function insertCodelistTimeregStatusCommand()
    {
        foreach(SeedData::CodelistTimeregStatus() as $codelisttimeregstatus)
        {
            $this->repository->InsertCodelistTimeregStatus($codelisttimeregstatus);
        }
    }
    public function Task()
    {
        $this->insertCodelistTimeregStatusCommand();
    }
}