<?php

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