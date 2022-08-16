<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountData extends Model
{
    use HasFactory;
    public $table = "accountdata";
    protected $primaryKey = 'uID';
    public $timestamps = false;

    protected $fillable = [
        'uID',
        'UserID',
        'UserCode',
        'loginKey',
        'NickName',
        'Avatar_index',
        'accountLevel',
        'accountExp',
        // 'Cash',
        // 'Gold',
        'leagueTier',
        'isBlock',
        'registerDate',
        'lastAccessDate',
        'pendingGold',
    ];
    
    public function modify($data = []){
        if (empty($data)) return false;
        $fields = config('self.account.fields');

        $data = array_intersect_key($data, array_flip($fields));
        $update = $this->update($data);
        
        return $update;
    }
}
