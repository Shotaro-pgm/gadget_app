@extends('layouts.user')
@section('title', '記事の詳細')

@section('content')
  <div class="container">
    <div class="row">
      <div class="headline col-md-10 mx-auto">
        <div class="row">
          <div class="col-md-6">
            <div class="caption mx-auto">
              <div class="image">
                @if($article->image_path)
                  <img src="{{ asset('storage/image/' . $article->image_path) }}" />
                @else
                  <img src="{{ asset('storage/image/' . 'noimage-760x460.png') }}" />
                @endif
              </div>
              <div class="title p-2">
                <h1>{{ Str::limit($article->title, 70) }}</h1>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <p class="body mx-auto">{{ Str::limit($article->body, 650)}}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
