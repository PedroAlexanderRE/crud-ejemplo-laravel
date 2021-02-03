@extends('layout')

@section('content')

    <form action="{{url('users/'.$employee->id)}}" method="post" enctype="multipart/form-data">
    @method('PUT')
    {{ csrf_field() }}
        <div class="form-group">
            <br>
            <img class="img-thumbnail" src="{{ asset('storage').'/'. $employee->image}}" alt=""width='200'>
            <br><br>
            <input type="file" class="form-control-file" name="image" id="image">
            <br><br>
            <label for="Name">Name</label>
            <input type="text" class="form-control" name="Name" id="Name" Value ="{{$employee->name}}">
            <br>
            <label for="Email">Email</label>
            <input type="email" class="form-control" name="Email" id="Email" Value="{{$employee->email}}">
            <br>
            <label for="About">About</label>
            <textarea class="form-control" id="About" name ="About" rows="3">{{$employee->about}}</textarea>
            <br>
            <input type="submit" class="btn btn-primary" value="Update">
        </div>
    </form>
@endsection