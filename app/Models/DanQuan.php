<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DanQuan extends Model
{
    public $timestamps = false;
    public $table = "danquans";
    use HasFactory;
    public function thanhphan()
    {
        return $this->belongsTo(ThanhPhan::class, 'thanhphan_id');
    }
}
