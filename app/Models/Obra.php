<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Obra extends Eloquent
{
    private $connection = 'mongodb';
    private $guarded = [];
    //public $primarykey = 'id_post';
    //protected $collection = 'obras';

    //protected $fillable = [
     //   'title', 'image', 'description',
    //];
}
