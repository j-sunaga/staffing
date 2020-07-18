@extends('layouts.app')

@section('content')

<div class="container-fluid">
  <h4>ポスト詳細</h4>

  <form method="POST" action="{{route('posts.update',['post'=>$post,'id'=>$post->id])}}">
    @method('PUT')
    @csrf

    @include('posts.form', ['post' => $post])

    <div class="form-group col-md-6">
      <button type="submit" class="btn btn-primary" name="commit">更新</button>
    </div>

</div>
@endsection