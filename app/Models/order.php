<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    public $table = 'orders';
    use HasFactory;
    public $timestamps =false;
}
