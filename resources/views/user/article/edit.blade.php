@extends('layouts.article')
@section('title', '記事の編集')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 mx-auto">
        <h2>記事を編集</h2>
        <form action="{{ action('App\Http\Controllers\User\ArticleController@edit') }}" method="post" enctype="multipart/form-data">
          @if(count($errors) > 0)
            <ul>
              @foreach($errors->all() as $e)
                <li>{{ $e }}</li>
              @endforeach
            </ul>
          @endif
          <div class="form-group row">
            <label class="col-md-2" for="title">タイトル</label>
            <div class="col-md-10">
              <input type="text" class="form-control" name="title" value="{{ $article_form->title }}" />
            </div>
          </div>
          <div class="form-group row">
            <label class="col-md-2" for="body">本文</label>
            <div class="col-md-10">
              <textarea class="form-control" name="body" rows="20">{{ $article_form->body }}</textarea>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-md-2" for="image">画像</label>
            <div class="col-md-10">
              <input type="file" class="form-control-file" name="image" />
              <div class="form-text text-info">
                設定中：{{ $article_form->image_path }}
              </div>
              <div class="form-check">
                <label class="form-check-label"><input type="checkbox" class="form-check-input" name="remove" value="true" />画像を削除</label>
              </div>
            </div>
          </div>
          <input type="submit" class="btn btn-primary" value="編集" />
        </form>
      </div>
    </div>
  </div>
@endsection
