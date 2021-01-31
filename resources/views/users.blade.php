@extends('layout')

@section('content')
    <h1>Users</h1>
    <a href="{{route('addemployee')}}">Add Empleado</a>
    <table >
        <thead>
            <tr>
                <th>id</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
                
        </thead>
        <tbody>
        @foreach($employees as $employee)
            <tr>
                <td>{{$employee->id}}</td>
                <td>{{$employee->name}}</td>
                <td>{{$employee->email}}</td>
                <td> <a href="{{route('users.show',$employee->id)}}">Editar</a> 
                        <form method="post" action="{{url('users/'.$employee->id)}}">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                            <button type="submit" onclick="return confirm('Borrar?')">Borrar</button>
                        </form>
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>
    
@endsection