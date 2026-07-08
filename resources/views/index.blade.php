@extends('layout')


@section('content')

@if(session()->has('success'))
<div class="my-3 alert alert-success">
    {{ session('success') }}
</div>
@endif

@if(count($students)>0)
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Image</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Section</th>
            <th>Description</th>
            <th>Created at</th>
            <th>Updated at</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($students as $student)
            <tr>
                <td>{{ $student->id }}</td>
                <td><img class="user-photo" src="{{ asset('photos/' . $student->image) }}" alt="user photo" /></td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->phone }}</td>
                <td>{{ $student->section }}</td>
                <td>{{ $student->description }}</td>
                <td>{{ $student->created_at }}</td>
                <td>{{ $student->updated_at }}</td>
                <td>
                    <a class="btn btn-info" href="{{ route('students.show' , $student) }}" >show</a>
                </td>
                <td>
                    <a class="btn btn-success" href="{{ route('students.edit' , $student) }}">edit</a>
                </td>
                <td>
                    <form method="post" action="{{ route('students.destroy' , $student) }}">
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@else  
<div class="my-3 alert alert-warning w-75"> No student Yet</div>
@endif

<a class="btn btn-primary mb-3" href="{{ route('students.create') }}">Add Student</a>

{{ $students->links() }}
@endsection