<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserOwnedDeck extends Model
{
    use HasFactory;
    public $table = "userowned_deck";
}
