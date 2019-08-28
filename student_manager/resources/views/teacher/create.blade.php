@extends('teacher/home')
@section('title')
    Create Teacher
    @endsection
@section('content')
    <div class="container">
        <h2>Create Teacher</h2>
        <form method="post" action="{{route('teacher.store')}}">
            @csrf
            <div class="form-group">
                <label for="email">Name:</label>
                <input type="text" class="form-control" id="email" placeholder="Enter name" name="name">
            </div>
            <div class="form-group">
                <label for="pwd">Age:</label>
                <input type="text" class="form-control" id="pwd" placeholder="Enter Age" name="age">
            </div>
            <button type="submit" class="btn btn-dark">Create</button>
        </form>

    </div>

    @endsection
