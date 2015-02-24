<?php

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