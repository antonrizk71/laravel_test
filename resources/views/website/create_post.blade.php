<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('post.store')}}" method="post">
        @csrf
        Title:<input type="text" name="title" id="" placeholder="enter title">
        Content:<textarea name="content" id="" cols="30" rows="10"placeholder="enter content"></textarea>
        <input type="submit" value="add">
    </form>
</body>
</html>