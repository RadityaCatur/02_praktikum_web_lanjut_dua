<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about() {
        echo 'Nama: Raditya Catur Narendra<br>';
        echo 'NIM: 2041720198';
    }
}