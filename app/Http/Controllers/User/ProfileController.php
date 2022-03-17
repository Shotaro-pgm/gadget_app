<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function add()
    {
      return view('user.profile.create');
    }

    public function create()
    {
      return redirect('user/profile/create');
    }

    public function edit()
    {
      return view('user.profile.edit');
    }

    public function update()
    {
      return redirect('user/profile/edit');
    }
}
