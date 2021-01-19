<?php

namespace App\Models\Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UserLog.
 */
class UserLog extends Model implements \Altek\Accountant\Contracts\Ledger
{
    use \Altek\Accountant\Ledger;

    protected $table = 'ledgers';

    protected $casts = [
        'properties' => 'json',
        'modified' => 'json',
        'pivot' => 'json',
        'extra' => 'json',
    ];

    // Recordable User
    public function recordableUser()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
