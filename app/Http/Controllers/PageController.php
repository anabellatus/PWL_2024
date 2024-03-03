<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return ('Selamat Datang');
    }

    public function about() {
        return ('NIM : 2241720095 <br> Nama : Ana Bellatus Mustaqfiro');
    }

    public function articles($id) {
        return 'Halaman Artikel dengan ID ' . $id;
    }
}
