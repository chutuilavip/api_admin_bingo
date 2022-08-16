<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;
    public $table = "banners";
    protected $primaryKey = 'id';
    protected $fillable = ['title','image','status'];

    public function modify($data = []){
        if (empty($data)) return false;
        $fields = config('self.banner.fields');

        $data = array_intersect_key($data, array_flip($fields));
        $update = $this->update($data);
        
        return $update;
    }
}
