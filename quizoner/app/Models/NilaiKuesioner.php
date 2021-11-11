<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NilaiKuesioner extends Model
{
    public $keterangan = [
        'Sangat Baik',
        'Baik',
        'Cukup Baik',
        'Cukup',
        'Tidak Baik Sama Sekali'
    ];
}
