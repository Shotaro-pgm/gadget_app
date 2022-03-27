@extends('layouts.app')
@section('title', '記事詳細')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-10 mx-auto">
        <h2>{{ $article->title }}</h2>
      </div>
      <div class="col-md-10 mx-auto">
        <p>
          {{ $article->body }}
        </p>
      </div>
    </div>
  </div>
