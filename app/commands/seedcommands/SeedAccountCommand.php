<?php
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
