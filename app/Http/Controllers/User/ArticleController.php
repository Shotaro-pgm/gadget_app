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

    public function show(Request $request)
    {
      $article = Article::find($request->id);

      return view('user.article.show', compact('article'));
    }

    public function edit(Request $request)
    {
      $article = Article::find($request->id);
      if(empty($article)) {
        abort(404);
      }
      return view('user.article.edit', ['article_form' => $article]);
    }

    public function update(Request $request)
    {
      $this->validate($request, Article::$rules);
      $article = Article::find($request->id);
      $article_form = $request->all();
      if($request->remove == 'true') {
        $article_form['image_path'] = null;
      } elseif($request->file('image')) {
        $path = $request->file('image')->store('public/image');
        $article_form['image_path'] = basename($path);
      } else {
        $article_form['image_path'] = $article->image_path;
      }

      unset($article_form['image']);
      unset($article_form['remove']);
      unset($article_form['_token']);

      $article->fill($article_form)->save();

      return redirect('user/article/edit');
    }

    public function index(Request $request)
    {
      $cond_title = $request->cond_title;
      if($cond_title != '') {
        $posts = Article::where('title', $cond_title)->get();
      } else {
        $posts = Article::all();
      }
      return view('user.article.index', ['posts' => $posts, 'cond_title' => $cond_title]);
    }

    public function delete(Request $request)
    {
      $article = Article::find($request->id);
      $article->delete();
      return redirect('user/article/');
    }

}
