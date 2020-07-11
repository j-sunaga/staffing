<tr>
  <td>{{$post->id}}</td>
  <td>{{$post->title}}</td>
  <td>{{$post->detail}}</td>
  <td>{{explode(" ", $post->deadline)[0]}}</td>

  <!-- status -->
  @if ($post->status === 0)
  <td>未着手</td>
  @elseif ($post->status === 1)
  <td>着手中</td>
  @else
  <td>完了</td>
  @endif

  <!-- priority -->
  @if ($post->priority === 0)
  <td>低</td>
  @elseif ($post->priority === 1)
  <td>中</td>
  @else
  <td>高</td>
  @endif

  <td>
    <a href="{{route('posts.show',['post' => $post, 'id' => $post->id])}}">
      詳細</a>
  </td>
  <td>
    <a href="{{route('posts.edit',['post' => $post, 'id' => $post->id])}}">編集</a>
  </td>
  <td>削除</td>
</tr>