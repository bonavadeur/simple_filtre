<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use App\Models\bill;
use App\Models\category;
use App\Models\item;
use App\Models\user;
use App\Http\Controllers\apiController;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Mail;
use App\Mail\myMail;
use Illuminate\Contracts\Session\Session;

session_start();

class viewController extends Controller
{
    public function filtre(Request $request) {
        return view('test.filtre_2');
    }
}
