<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>@yield('title')</title>
</head>
<body>
@yield('content')
<table class="table">
    <tr>
        <th>STT</th>
        <th>Name</th>
        <th>Age</th>
        <th>Email</th>
    </tr>
    @foreach($student as $key=>$value)
    <tr>
        <td>{{++$key}}</td>
        <td>{{$value->name}}</td>
        <td>{{$value->age}}</td>
        <td>{{$value->email}}</td>
        <td><a href="{{route('student.edit', $value->id)}}">Update</a> </td>
        <td><a href="{{route('student.delete',['id'=>$value->id])}}">Delete</a> </td>
    </tr>
    @endforeach
</table>
<button><a href="{{route('student.create')}}"> Add Student</a></button>
</body>
</html>
