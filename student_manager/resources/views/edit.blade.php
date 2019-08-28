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
<div class="container">
    <h2>Update Student</h2>
    <form method="post" action="{{route('student.update')}}">
        @csrf
        <div>
            <input type="hidden" name="id" value="{{request('id')}}">
        </div>
        <div class="form-group">
            <label for="email">Name:</label>
            <input type="text" class="form-control" id="email" placeholder="Enter name" name="name">
        </div>
        <div class="form-group">
            <label for="pwd">Age:</label>
            <input type="text" class="form-control" id="pwd" placeholder="Enter phone" name="age">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
        </div>
        <button type="submit" class="btn btn-dark">Update</button>
    </form>

</div>
</body>
</html>
