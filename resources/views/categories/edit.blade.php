<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h4>Edit category : {{$category->name}}</h4>
<form method="post" action="{{route('categories.update')}}">
    <input type="hidden" name="category_id" value="{{$category->id}}">
    @include('categories._form')

</form>

</body>
</html>
