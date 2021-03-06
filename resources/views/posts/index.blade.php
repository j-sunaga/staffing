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
                <th scope="col">カテゴリ</th>
                <th colspan="3"></th>
              </tr>
            </thead>
            <tbody>
              @foreach($posts as $post)
              @include('posts.post', ['post' => $post])
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  function deletePost(e) {
    'use_strict';
    if (confirm('本当に削除してよろしいですか？')) {
      document.getElementById('delete_' + e.dataset.id).submit();
    }
  }
</script>
@endsection