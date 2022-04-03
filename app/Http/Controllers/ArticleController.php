<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\HTML;

use App\Models\Article;

class ArticleController extends Controller
{
    public function index(Request $request)
    {
      $cond_title = $request->cond_title;

      if ($cond_title != '') {
        $posts = Article::where('title', $cond_title) . orderBy('updated_at', 'desc')->get();
      } else {
        $posts = Article::all()->sortByDesc('update_at');
      }

      if (count($posts) > 0) {
        $headline = $posts->shift();
      } else {
        $headline = null;
      }

      return view('article.index', ['headline' => $headline, 'posts' => $posts, 'cond_title' => $cond_title]);
    }
}
