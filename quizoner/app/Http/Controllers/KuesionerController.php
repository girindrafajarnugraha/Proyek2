<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Models\kuesioner;
use App\Models\Models\NilaiKuesioner;

class KuesionerController extends Controller
{
    public function createStep1(Request $request)
    {
        $value = new NilaiKuesioner();
        return view('kuesioner.create-step1');
    }
}
