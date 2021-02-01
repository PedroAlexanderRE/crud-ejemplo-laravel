@extends('layout')

@section('content')
    <form action="{{url('users/'.$employee->id)}}" method="post" enctype="multipart/form-data">
    @method('PUT')
    {{ csrf_field() }}
        
        <img src="{{ asset('storage').'/'. $employee->image}}" alt=""width='200'>
        <br>
        <input type="file" name="image" id="image">
        <br><br>
        <label for="Name">Name</label>
        <input type="text" name="Name" id="Name" Value ="{{$employee->name}}">
        <br>
        <label for="Email">Email</label>
        <input type="email" name="Email" id="Email" Value="{{$employee->email}}">
        <br>
        <label for="About">About</label>
        <input type="text" name="About" id="About" Value="{{$employee->about}}">
        <br>
        <input type="submit" value="Update">
    </form>
@endsection