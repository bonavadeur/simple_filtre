<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

use App\Models\product;
use App\Models\bill;
use App\Models\User;
use App\Models\admin;

use App\Mail\myMail;
use Illuminate\Support\Facades\Mail;

session_start();

class adminController extends Controller
{
    public function index() {
        if(session()->get('admin_id')) {
            return Redirect::to('admin/dashboard');
        }
        return view('admin.login');
    }
}
