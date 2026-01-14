<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Account;
class Transaction extends Model
{
    //
    protected $fillable = [
    'account_id',
    'amount',
    'type',
    'description'
];

    public function account()
    {
        return $this->belongsTo(Account::class);
    }
}
