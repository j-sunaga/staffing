@extends('layouts.app')

@section('content')

<div class="container-fluid">
  <h4>ポスト詳細</h4>

  <form method="POST" action="{{route('posts.update',['post'=>$post,'id'=>$post->id])}}">
    @csrf

    <div class="row">
      <div class="form-group col-md-6">
        <label>タスク</label>
        <input type="text" class="form-control" value="{{$post->title}}">
      </div>
    </div>

    <div class="row">
      <div class="form-group col-md-6">
        <label>タスク詳細</label>
        <textarea class="form-control" name="task[detail]" rows="5">
        {{$post->detail}}
        </textarea>
      </div>
    </div>

    <div class="row">
      <div class="form-group col-md-6">
        <label>終了期限</label>
        <input type="date" class="form-control" value="{{explode(" ", $post->deadline)[0]}}">
      </div>
    </div>

    <div class="row">
      <div class="form-group col-md-6">
        <label>ステータス</label>
        <select class="form-control input-form" name="status">
          <option value="0" {{ $post->status == '0' ? 'selected' : '' }}>未着手</option>
          <option value="1" {{ $post->status == '1' ? 'selected' : '' }}>着手中</option>
          <option value="2" {{ $post->status == '2' ? 'selected' : '' }}>完了</option>
        </select>
      </div>
    </div>

    <div class="row">
      <div class="form-group col-md-6">
        <label>優先順位</label>
        <select class="form-control input-form" name="priority">
          <option value="0" {{ $post->priority == '0' ? 'selected' : '' }}>低</option>
          <option value="1" {{ $post->priority == '1' ? 'selected' : '' }}>中</option>
          <option value="2" {{ $post->priority == '2' ? 'selected' : '' }}>高</option>
        </select>
      </div>
    </div>

    <div class="form-group col-md-6">
      <button type="submit" class="btn btn-primary" name="commit">更新</button>
    </div>

</div>
@endsection