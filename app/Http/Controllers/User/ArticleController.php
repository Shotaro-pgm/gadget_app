<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function add()
    {
      return view('user.article.create');
    }

    public function create()
    {
      return redirect('user/article/create');
    }

    public function edit()
    {
      return view('user.article.edit');
    }

    public function update()
    {
      return redirect('user/article/edit');
    }
}
