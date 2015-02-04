<?php
/**
 * Created by PhpStorm.
 * User: tord
 * Date: 2/2/2015
 * Time: 14:58
 */

class SeedAccountCommand extends Command implements CommandInterface {

    private function insertAccount()
    {
        foreach(SeedData::Account() as $account)
        {
            $this->repository->InsertAccount($account);
        }
    }

    public function Task()
    {
        $this->insertAccount();
    }
}