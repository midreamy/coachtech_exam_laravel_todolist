<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/reset.css">
  <link rel="stylesheet" href="/css/style.css">
  <title>COACHTECH</title>
</head>

<body>
  <div class="container">
    <div class="card">
      <p class="title">Todo List</p>
      <div class="todo">
        @if (count($errors)>0)
        <ul>
          @foreach ($errors->all() as $error)
          <li>
            {{$error}}
          </li>
          @endforeach
        </ul>
        @endif
        <form action="/todo/create" method="POST" class="flex">
          @csrf
          <input type="text" name="content" class="input-add">
          <input type="submit" value="追加" class="button-add">
        </form>

        <table>
          <tr>
            <th>作成日</th>
            <th>タスク名</th>
            <th>更新</th>
            <th>削除</th>
          </tr>
          @foreach($items as $item)
          <tr>
            <td>
              {{$item->created_at}}
            </td>
            <form action="/todo/update" method="POST">
              @csrf
              <td>
                <input type="text" name="content" value="{{$item->content}}" class="input-update">
              </td>
              <td>
                <input type="submit" value="更新" class="button-update">
              </td>
            </form>
            <form action="/todo/delete/{{$item->id}}" method="POST">
              @csrf
              <td>
                <input type="submit" value="削除" class="button-delete">
              </td>
            </form>
          </tr>
          @endforeach
        </table>
      </div>
    </div>
  </div>
</body>

</html>