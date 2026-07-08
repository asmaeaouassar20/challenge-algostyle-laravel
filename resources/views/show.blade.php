@extends('layout')

@section('content')

<div class="d-flex gap-3">
    <div>
        <img src="{{asset('photos/'.$student->image)}}" alt="user photo" />
    </div>
    <div>
        <table class="table">
            <tr>
                <td  class="p-3"><strong>ID</strong></td>
                <td class="p-3"> {{ $student->id }}</td>
            </tr>
            <tr>
                <td class="p-3"><strong>Name</strong></td>
                <td class="p-3">{{ $student->name }}</td>
            </tr>
             <tr>
                <td class="p-3"><strong>Email</strong></td>
                <td class="p-3">{{ $student->email }}</td>
            </tr>
             <tr>
                <td class="p-3"><strong>Phone</strong></td>
                <td class="p-3">{{ $student->phone }}</td>
            </tr>
             <tr>
                <td class="p-3"><strong>Section</strong></td>
                <td class="p-3">{{ $student->section }}</td>
            </tr>
             <tr>
                <td class="p-3"><strong>Description</strong></td>
                <td class="p-3">{{ $student->description }}</td>
            </tr>
        </table>
        <a class="btn btn-success" href="{{ route('students.edit' , $student) }}">Edit</a>
    </div>
</div>
@endsection