@extends('layouts.app')

@section('content')

<div class="container-fluid">
  <h4>ポスト登録</h4>

  <form method="POST" action="{{route('posts.store',['post'=>$post])}}">
    @csrf

    @include('posts.form', ['post' => $post])

    <div class="form-group col-md-6">
      <button type="submit" class="btn btn-primary" name="commit">登録</button>
    </div>

</div>
@endsection