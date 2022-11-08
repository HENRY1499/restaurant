<?php

namespace App\Http\Controllers\newPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class mainController extends Controller
{
    public function index()
    {
        return view('newPage.pages.welcome');
    }
}
