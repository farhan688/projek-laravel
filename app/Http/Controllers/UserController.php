<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function ViewContact()
    {
        return view('contact', compact('data'));
    }

    public function detailAbout(User $user)
    {
        return view('Admin.detail-user', compact('user'));
    }
    public function ViewDescription()
    {
        $database = User::all();
        return view('description', compact('database'));
    }
    public function ViewAbout()
    {
        $name = 'Harry Maguire';
        $npm = '2015061000';
        $isitabel = User::all();
        return view('about', compact('name', 'npm', 'isitabel'));
    }
    public function ViewProfile()
    {
        return view('admin_dashboard');

    }

}