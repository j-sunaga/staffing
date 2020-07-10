@extends('layouts.app')

@section('content')
<div class="container">
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
          <form method="POST" action="{{route('contact.update',['id'=>$contact->id])}}">
            @csrf
            氏名
            <input type="text" name="name" value="{{$contact->name}}"><br>
            タイトル
            <input type="text" name="title" value="{{$contact->title}}"><br>
            Email
            <input type="email" name="email" value="{{$contact->email}}"><br>
            URL
            <input type="url" name="url" value="{{$contact->url}}"><br>
            性別
            <input type="radio" name="gender" value="0" {{ $contact->gender == '0' ? 'checked' : '' }}>男性</input>
            <input type="radio" name="gender" value="1" {{ $contact->gender == '1' ? 'checked' : '' }}>女性</input><br>
            年齢
            <select name=" age">
              <option value="">選択してください</option>
              <option value="1" {{ $contact->age == '1' ? 'selected' : '' }}>~19歳</option>
              <option value="2" {{ $contact->age == '2' ? 'selected' : '' }}>20歳~29歳</option>
              <option value="3" {{ $contact->age == '3' ? 'selected' : '' }}>30歳~39歳</option>
              <option value="4" {{ $contact->age == '4' ? 'selected' : '' }}>40歳~49歳</option>
              <option value="5" {{ $contact->age == '5' ? 'selected' : '' }}>50歳~59歳</option>
            </select></br>
            <input class="btn btn-info" type="submit" value="登録する">
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection