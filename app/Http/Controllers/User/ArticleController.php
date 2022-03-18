<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Article;

class ArticleController extends Controller
{
    public function add()
    {
      return view('user.article.create');
    }

    public function create(Request $request)
    {
      $this->validate($request, Article::$rules);

      $article = new Article;
      $form = $request->all();

      if (isset($form['image'])) {
        $path = $request->file('image')->store('public/image');
        $article->image_path = basename($path);
      } else {
        $article->image_path = null;
      }

      unset($form['_token']);
      unset($form['image']);

      $article->fill($form);
      $article->save();

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
