@extends('teacher/home')
@section('title')
    Danh Sach Giao Vien
    @endsection
@section('content')
    <table class="table">
        <tr>
            <th>STT</th>
            <th>Name</th>
            <th>Age</th>
        </tr>
        @foreach($teacher as $key=>$value)
            <tr>
                <td>{{++$key}}</td>
                <td>{{$value->name}}</td>
                <td>{{$value->age}}</td>
                <td><a href="{{route('teacher.update',$value->id)}}">Update</a></td>
                <td><a href="{{route('teacher.delete',$value->id)}}">Delete</a></td>
            </tr>
        @endforeach
    </table>
    <button><a href="{{route('teacher.create')}}"> Add Teacher</a></button>
    @endsection
