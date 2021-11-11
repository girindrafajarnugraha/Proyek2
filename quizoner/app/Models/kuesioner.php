<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kuesioner extends Model
{
    protected $table = 'kuesioner';
    protected $fillable = ['A1','A2','B1','B2'];
}
