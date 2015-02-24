<?php

class SeedCodelistSalaryType extends Command implements CommandInterface{

    private function insertCodelistSalaryType()
    {
        foreach(SeedData::CodelistSalaryType() as $codelistsalarytype)
        {
            $this->repository->InsertCodelistSalaryType($codelistsalarytype);
        }
    }

    public function Task()
    {
        $this->insertCodelistSalaryType();
    }
}