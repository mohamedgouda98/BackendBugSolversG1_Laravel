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

<h5><a href="{{route('categories.create')}}">Create Category</a></h5>

@if(session()->has('message'))
    <h3 style="background-color: #5dff00">{{session('message')}}</h3>
@endif

@if($errors->any())
    @foreach($errors->all() as $error)
        <h3 style="background-color: #f00">{{$error}}</h3>
    @endforeach
@endif

<table border="1px">
    <thead>
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Slug</td>
        <td>Description</td>
        <td>Edit</td>
        <td>Actions</td>
    </tr>
    </thead>

    <tbody>
       @foreach($categories as $category)
           <tr>
               <td>{{$category->id}}</td>
               <td>{{$category->name}}</td>
               <td>{{$category->slug}}</td>
               <td>{{$category->description}}</td>
               <td><a href="{{route('categories.edit',[$category->id])}}">Edit</a></td>
               <td>
                   <form method="post" action="{{route('categories.delete')}}">
                       @csrf
                       <input type="hidden" value="{{$category->id}}" name="category_id">
                       <button type="submit">Delete</button>
                   </form>
               </td>
           </tr>
       @endforeach
    </tbody>
</table>

</body>
</html>
