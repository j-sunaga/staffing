@if($errors->any())
<div class="alert alert-danger">
  <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error  }}</li>
    @endforeach
  </ul>
</div>
@endif

<div class="row">
  <div class="form-group col-md-6">
    <label>タイトル</label>
    <input type="text" class="form-control" value="{{ isset($post->title) ? $post->title : ''}}" name="title">
  </div>
</div>

<div class="row">
  <div class="form-group col-md-6">
    <label>詳細</label>
    <textarea class="form-control" name="detail" rows="5">{{ isset($post->detail) ? $post->detail : ''}}</textarea>
  </div>
</div>

<div class="row">
  <div class="form-group col-md-6">
    <label>終了期限</label>
    <input type="date" class="form-control" value="{{ isset($post->deadline) ? $post->deadline->format('Y-m-d') : ''}}" name="deadline">
  </div>
</div>

<div class="row">
  <div class="form-group col-md-6">
    <label>ステータス</label>
    <select class="form-control input-form" name="status">
      <option value="0" {{ isset($post->priority->value) && $post->priority->value == 0 ? 'selected' : '' }}>未着手</option>
      <option value="1" {{ isset($post->priority->value) && $post->priority->value == 1 ? 'selected' : '' }}>着手中</option>
      <option value="2" {{  isset($post->priority->value) && $post->priority->value == 2 ? 'selected' : '' }}>完了</option>
    </select>
  </div>
</div>

<div class="row">
  <div class="form-group col-md-6">
    <label>優先順位</label>
    <select class="form-control input-form" name="priority">
      <option value="0" {{ isset($post->priority->value) && $post->priority->value == 0 ? 'selected' : '' }}>低</option>
      <option value="1" {{ isset($post->priority->value) && $post->priority->value == 1 ? 'selected' : '' }}>中</option>
      <option value="2" {{  isset($post->priority->value) && $post->priority->value == 2 ? 'selected' : '' }}>高</option>
    </select>
  </div>
</div>

<div class="row">
  <div class="form-group col-md-6">
    <label>カテゴリ</label>
    <div>
      @foreach ($categories as $category)
      <div class="form-check">
        @if ($post->categories->contains('id', $category->id))
        <input name="category[]" type="checkbox" value="{{ $category->id }}" checked>
        @else
        <input name="category[]" type="checkbox" value="{{ $category->id }}">
        @endif
        <label class='badge badge-secondary'>{{ $category->category_name }}</label>
      </div>
      @endforeach
    </div>
  </div>
</div>