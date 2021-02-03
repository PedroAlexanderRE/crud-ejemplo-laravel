@extends('layout')

@section('content')
<br>
<h1>Add New Employee</h1>
    <form action="{{url('/users')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="Name">Name</label>
            <input type="text"class="form-control"  name="Name" id="Name" Value ="">
            <br>
            <label for="Email">Email</label>
            <input type="email" class="form-control" name="Email" id="Email" Value="">
            <br>

            <label for="About">About</label>
            <textarea class="form-control" id="About" name ="About" rows="3"></textarea>
            
            <br>
            <label for="Image">Photo</label>
            <input type="file" class="form-control-file" name="image" id="image" value="">
            <br>
            <input type="submit" class="btn btn-primary" value="Add">
        </div>
    </form>
@endsection