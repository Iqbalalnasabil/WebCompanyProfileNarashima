<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Homepage extends Model
{
    protected $table = 'homepage';
    protected $fillable = [
        'imagee', 'deskripsii'
    ];
}
