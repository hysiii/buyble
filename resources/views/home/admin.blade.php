<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>buyble</title>

</head>
<body>
<h1>buyble管理画面</h1>
<p><a href="{{ route('textbooks.index') }}">教科書一覧</a></p>
<p><a href="{{ route('home') }}">会員管理</a></p>
<form action="{{ route('logout') }}" name="logout" method="post">
      <input type="submit" value="ログアウト">
</form>

    
</body>
</html>

