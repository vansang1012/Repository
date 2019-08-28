@extends('teacher/home')

@section('title')
    Update Teacher
    @endsection

@section('content')
    <div class="container">
        <h2>Update Teacher</h2>
        <form method="post" action="{{route('teacher.edit')}}">
            @csrf
            <input type="text" name="id" class="form-control" value="{{$teacher->id}}">
            <div class="form-group">
                <label for="email">Name:</label>
                <input type="text" class="form-control" id="email" placeholder="Enter name" name="name" value="{{$teacher->name}}">
            </div>
            <div class="form-group">
                <label for="pwd">Age:</label>
                <input type="text" class="form-control" id="pwd" placeholder="Enter Age" name="age" value="{{$teacher->age}}">
            </div>
            <button type="submit" class="btn btn-dark">Update</button>
        </form>

    </div>
    @endsection
