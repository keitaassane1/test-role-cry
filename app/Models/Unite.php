<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unite extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'direction_id'
    ];

    public function direction()
    {
        return $this->belongsTo(Direction::class);
    }
}
