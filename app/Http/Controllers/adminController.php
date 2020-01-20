<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Noticia;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;


class adminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
}
