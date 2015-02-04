<?php
/**
 * Created by PhpStorm.
 * User: tord
 * Date: 2/4/2015
 * Time: 20:50
 */

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