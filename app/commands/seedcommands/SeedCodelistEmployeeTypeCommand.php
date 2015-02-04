<?php
class SeedCodelistEmployeeTypeCommand extends Command implements CommandInterface {

    private function insertCodelistEmplyeeType()
    {
        foreach(SeedData::CodelistEmployeeType() as $codelistemplyeetype)
        {
            $this->repository->InsertCodelistDays($codelistemplyeetype);
        }
    }

    public function Task()
    {
        $this->insertCodelistEmplyeeType();
    }
}