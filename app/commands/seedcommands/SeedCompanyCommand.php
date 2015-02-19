<?php
/**
 * Created by PhpStorm.
 * User: tord
 * Date: 2/7/2015
 * Time: 13:00
 */

class SeedCompanyCommand extends Command implements CommandInterface{
    private function insertCompanies()
    {
        foreach(SeedData::Companies() as $company)
        {
            $this->repository->InsertCompany($company);
        }
    }

    public function Task()
    {
        $this->insertCompanies();
    }
}