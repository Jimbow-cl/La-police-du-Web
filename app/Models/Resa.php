<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resa extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'name',
        'age',
        'travel'
    ];
    }