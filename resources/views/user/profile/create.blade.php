@extends('layouts.profile')
@section('title', 'プロフィールの新規作成')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 mx-auto">
        <h2>プロフィールを作成する</h2>
        <form action="{{ action('App\Http\Controllers\User\ProfileController@create') }}" method="post" enctype="multipart/form-data">
          @if(count($errors) > 0)
            <ul>
              @foreach($errors->all() as $e)
                <li>{{ $e }}</li>
              @endforeach
            </ul>
          @endif
          <div class="form-group row">
            <label class="col-md-2">名前</label>
            <div class="col-md-10">
              <input type="text" class="form-control" name="title" value="{{ old('title') }}" />
            </div>
          </div>
          <div class="form-group row">
            <label class="col-md-2">自己紹介</label>
            <div class="col-md-10">
              <textarea class="form-control" name="body" rows="20">{{ old('body') }}</textarea>
            </div>
          </div>
          {{ csrf_field() }}
          <input type="submit" class="btn btn-primary" value="作成" />
        </form>
      </div>
    </div>
  </div>
@endsection
