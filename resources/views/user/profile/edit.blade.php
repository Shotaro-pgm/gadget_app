@extends('layouts.profile')
@section('title', 'プロフィールの編集')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 mx-auto">
        <h2>プロフィールを編集</h2>
        <form action="{{ action('App\Http\Controllers\User\ProfileController@edit') }}" method="post" enctype="multipart/form-data">
          @if(count($errors) > 0)
            <ul>
              @foreach($errors->all() as $e)
                <li>{{ $e }}</li>
              @endforeach
            </ul>
          @endif
          <div class="form-group row">
            <label class="col-md-2" for="title">名前</label>
            <div class="col-md-10">
              <input type="text" class="form-control" name="title" value="{{ $profile_form->name }}" />
            </div>
          </div>
          <div class="form-group row">
            <label class="col-md-2" for="body">自己紹介</label>
            <div class="col-md-10">
              <textarea class="form-control" name="body" rows="20">{{ $profile_form->body }}</textarea>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
