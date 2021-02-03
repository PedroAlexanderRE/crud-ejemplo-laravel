@extends('layout')

@section('content')
<br>
    <a class="btn btn-primary" href="{{route('addemployee')}}">Add Employee</a>
    <br><br>
    <table class="table" >
        <thead>
            <tr>
                <th>id</th>
                <th>Foto</th>
                <th>Nombre</th>
                <th>Email</th>
                <th></th>
                <th></th>
            </tr>
                
        </thead>
        <tbody>
        @foreach($employees as $employee)
            <tr>
                <td>{{$employee->id}}</td>
                <td><img class="img-thumbnail" src="{{ asset('storage').'/'.$employee->image}}" alt=""width='100'></td>
                <td>{{$employee->name}}</td>
                <td>{{$employee->email}}</td>
                <td><a class="btn btn-success" href="{{route('users.show',$employee->id)}}">Editar</a>
                </td>
                <td>  
                        <form method="post" action="{{url('users/'.$employee->id)}}">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Borrar?')">Borrar</button>
                        </form>
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>
    
@endsection