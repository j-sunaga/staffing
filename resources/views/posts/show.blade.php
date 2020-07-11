@extends('layouts.app')

@section('content')

<div class="container-fluid">
  <h4>ポスト詳細</h4>

  <div class="row">
    <div class="form-group col-md-6">
      <label>タスク</label>
      <input type="text" readonly="" class="form-control" value="{{$post->title}}">
    </div>
  </div>

  <div class="row">
    <div class="form-group col-md-6">
      <label>タスク詳細</label>
      <textarea readonly="" class="form-control" name="task[detail]" rows="5">
      {{$post->detail}}
      </textarea>
    </div>
  </div>

  <div class="row">
    <div class="form-group col-md-6">
      <label>終了期限</label>
      <input type="date" readonly="" class="form-control" value="{{explode(" ", $post->deadline)[0]}}">
    </div>
  </div>

  <div class="row">
    <div class="form-group col-md-6">
      <label>ステータス</label>
      <input type="multiple" readonly="" class="form-control" value="{{$status}}">
    </div>
  </div>

  <div class="row">
    <div class="form-group col-md-6">
      <label>優先順位</label>
      <input type="multiple" readonly="" class="form-control" value="{{$priority}}">
    </div>
  </div>

  <div class="row">
    <div class="form-group col-md-6">
      <a href="{{route('posts.edit',['post' => $post, 'id' => $post->id])}}">編集</a>
      <a href="/posts">戻る</a>
    </div>
  </div>

</div>
@endsection