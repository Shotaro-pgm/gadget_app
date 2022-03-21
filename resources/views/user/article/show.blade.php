@extends(layouts.show)
@section('title', '{{ Str::limit($article->title, 100) }}')

@section('content')
  <div class="container">
    <div class="row">
      <h2>{{ Str::limit($article->title, 100) }}</h2>
    </div>
  </div>
