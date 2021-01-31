@extends('layout')

@section('content')
    <form action="{{url('/users')}}" method="post">
        {{ csrf_field() }}
        <label for="Name">Name</label>
        <input type="text" name="Name" id="Name" Value ="">
        <br>
        <label for="Email">Email</label>
        <input type="email" name="Email" id="Email" Value="">
        <br>

        <label for="About">About</label>
        <input type="text" name="About" id="About" Value="">
        <input type="submit" value="Add">
    </form>
@endsection