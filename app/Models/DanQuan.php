<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class DanQuan extends Model
{
    
    /**
     * Indicates if the model should be timestamped.
     *
     * @var boolean
     */
    public $timestamps = false;
    public $table = "danquans";
    use HasFactory;
    public function thanhphan()
    {
        return $this->belongsTo(ThanhPhan::class, 'thanhphan_id');
    }
    public function getRemainingDaysAttribute()
{

    if ($this->vaonam) {
        $remaining_days = Carbon::now()->diffInDays(Carbon::parse($this->vaonam));
    } else {
        $remaining_days = 0;
    }
    return $remaining_days;
}
}
