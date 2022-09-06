<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return view('admin.pages.user.index');
    }

    public function passwordIndex()
    {
        return view('admin.pages.user.password');
    }

}
