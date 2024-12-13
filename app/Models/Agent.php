<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'postnom',
        'prenom',
        'fonction',
        'institution',
        'direction_id',
        'unite_id',
        'telephone',
        'email',
    ];


    public function direction(){
        return $this->belongsTo(Direction::class);
    }

    public function unite(){
        return $this->belongsTo(Unite::class);
    }


}
