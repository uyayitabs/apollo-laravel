<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Breakdown extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'values',
        'random_id'
    ];

    public $timestamps = false;

    public function random()
    {
        return $this->belongsTo(Random::class, 'random_id');
    }
}
