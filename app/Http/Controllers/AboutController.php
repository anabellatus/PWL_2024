<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function __invoke()
    {
        return ('NIM : 2241720095 <br> Nama : Ana Bellatus Mustaqfiro');
    }
}
