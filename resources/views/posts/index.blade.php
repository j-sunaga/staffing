@extends('layouts.app')

@section('content')
<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Dashboard</div>

        <div class="card-body">
          @if (session('status'))
          <div class="alert alert-success" role="alert">
            {{ session('status') }}
          </div>
          @endif
          <table class="table">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">ポスト名</th>
                <th scope="col">ポスト詳細</th>
                <th scope="col">終了期限</th>
                <th scope="col">ステータス</th>
                <th scope="col">優先順位</th>
                <th colspan="3"></th>
              </tr>
            </thead>
            <tbody>
              @foreach($posts as $post)
              <tr>
                <td>{{$post->id}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->detail}}</td>
                <td>{{$post->deadline}}</td>
                <td>{{$post->status}}</td>
                <td>{{$post->priority}}</td>
                <td><a href="{{route('posts.show',['post' => $post, 'id' => $post->id])}}">詳細</td>
                <td>編集</td>
                <td>削除</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection