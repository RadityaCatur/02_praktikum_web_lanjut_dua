<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat Datang!';
    }

    
    public function about() {
        echo 'Nama: Raditya Catur Narendra<br>';
        echo 'NIM: 2041720198';
    }
}
