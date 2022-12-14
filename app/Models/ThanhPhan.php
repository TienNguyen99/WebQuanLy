<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThanhPhan extends Model
{
    public $timestamps = false;
    public $table = "thanhphans";
    use HasFactory;
}
