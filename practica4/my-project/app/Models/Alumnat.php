<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumnat extends Model
{
    use HasFactory;

    protected $table = 'alumnat';

    // S'indica les dades que es volen omplir amb $fillable
    protected $fillable = [
        'name',
        'surname',
        'email'
    ];

    protected $hidden = [];
}
