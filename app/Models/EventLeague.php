<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventLeague extends Model
{
    use HasFactory;
    public $table = "event_league";
    protected $primaryKey = 'eventID';
    public $timestamps = false;

    protected $fillable = ['eventName', 'reqStart', 'reqEnd', 'startDate', 'endDate', 'reqCoin', 'playCoin', 'eventID'];

    public function modify($data = [])
    {
        if (empty($data)) return false;
        $fields = config('self.evenleague.fields');

        $data = array_intersect_key($data, array_flip($fields));
        $update = $this->update($data);

        return $update;
    }
}
