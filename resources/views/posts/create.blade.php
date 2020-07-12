@extends('layouts.app')

@section('content')

<div class="container-fluid">
  <h4>ポスト登録</h4>

  <form method="POST" action="{{route('posts.store')}}">
    @csrf
    <div class="row">
      <div class="form-group col-md-6">
        <label>タイトル</label>
        <input type="text" class="form-control" name="title">
      </div>
    </div>

    <div class="row">
      <div class="form-group col-md-6">
        <label>詳細</label>
        <textarea class="form-control" name="detail" rows="5"></textarea>
      </div>
    </div>

    <div class="row">
      <div class="form-group col-md-6">
        <label>終了期限</label>
        <input type="date" class="form-control" name="deadline">
      </div>
    </div>

    <div class="row">
      <div class="form-group col-md-6">
        <label>ステータス</label>
        <select class="form-control input-form" name="status">
          <option value="0">未着手</option>
          <option value="1">着手中</option>
          <option value="2">完了</option>
        </select>
      </div>
    </div>

    <div class="row">
      <div class="form-group col-md-6">
        <label>優先順位</label>
        <select class="form-control input-form" name="priority">
          <option value="0">低</option>
          <option value="1">中</option>
          <option value="2">高</option>
        </select>
      </div>
    </div>

    <div class="form-group col-md-6">
      <button type="submit" class="btn btn-primary" name="commit">登録</button>
    </div>

</div>
@endsection