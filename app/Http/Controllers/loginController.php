<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\stores;
use App\Models\User;
use Inertia\Inertia;
use Illuminate\Support\Facades\Hash;

class loginController extends Controller
{
    // login Page
    public function index()
    {
        return Inertia::render('admin/login/index');
    }

    public function edit()
    {
        return Inertia::render('./admin/edit/index');
    }
}
