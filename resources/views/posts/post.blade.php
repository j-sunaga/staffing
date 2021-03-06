<tr>
  <td>{{$post->id}}</td>
  <td>{{$post->title}}</td>
  <td>{{$post->detail}}</td>
  <td>{{$post->deadline->format('Y-m-d')}}</td>

  <!-- status -->
  <td>{{$post->status->description}}</td>

  <!-- priority -->
  <td>{{$post->priority->description}}</td>

  <td>
    @foreach ($post->categories as $category)
    <p>{{ $category->category_name }}</p>
    @endforeach
  </td>

  <td>
    <a href="{{route('posts.show',['post' => $post, 'id' => $post->id])}}">
      詳細</a>
  </td>
  <td>
    <a href="{{route('posts.edit',['post' => $post, 'id' => $post->id])}}">編集</a>
  </td>
  <td>
    <form method="POST" action="{{route('posts.destroy',['post'=>$post,'id'=>$post->id])}}" id="delete_{{$post->id}}">
      @method('DELETE')
      @csrf
      <a href="#" data-id="{{$post->id}}" onclick="deletePost(this);">削除</a>
    </form>
  </td>
</tr>