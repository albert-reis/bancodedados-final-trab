<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
    use HasFactory;
    protected $connection = 'mongodb';
    protected $collection = 'usuarios';

    protected $fillable = [
        'nome', 'senha', 'description',
    ];
}
