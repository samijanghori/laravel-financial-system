<?php

namespace App\Repositories;

use App\Models\Account;
use App\Repositories\Interfaces\AccountRepositoryInterface;

class AccountRepository implements AccountRepositoryInterface
{
    public function create(array $data): Account
    {
        return Account::create($data);
    }

    public function findById(int $id): ?Account
    {
        return Account::find($id);
    }

    public function updateBalance(Account $account, float $amount): Account
    {
        $account->balance += $amount;
        $account->save();

        return $account;
    }
}
