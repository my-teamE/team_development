<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>postdata</title>
</head>
<body>
    <h1>画像アップロード+パスのDB保存テストです。</h1>
    <form action="/postdata" method="POST" enctype="multipart/form-data" novalidate>
        @csrf
        <input type="file" name="image">
        <div>
            <button type="submit">送信</button>
        </div>
    </form>
</body>
</html>
