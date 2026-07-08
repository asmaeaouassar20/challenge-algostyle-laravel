@extends('layout')

@section('content')
<h4 class="text-primary my-2">Create Student</h4>
@if($errors->any())
    <div class="py-4 alert alert-danger">
        <ul>
        @foreach ($errors->all() as $err )
            <li>{{ $err }}</li>
        @endforeach
        </ul>
    </div>
@endif
<form class="w-75" method="post" action="{{ route('students.store') }}" enctype="multipart/form-data">
    <div class="mb-3">
        <label class="form-label" for="name">Name</label>
        <input class="form-control" id="name" type="text" name="name" placeholder="Student Name" value="{{ old('name') }}" />
    </div>
    <div class="mb-3">
        <label class="form-label" for="email">Email</label>
        <input class="form-control" id="email" type="email" name="email" placeholder="Student Email" value="{{ old('email') }}" />
    </div>
    <div class="mb-3">
        <label class="form-label" for="phone">Phone</label>
        <input class="form-control" id="phone" type="text" name="phone" placeholder="Student Phone" value="{{ old('phone') }}" />
    </div>
    <div class="mb-3">
        <label class="form-label" for="Section">Section</label>
        <input class="form-control" id="section" type="text" name="section" placeholder="Studnet Section" value="{{ old('section') }}" />
    </div>
    <div class="mb-3">
        <label class="form-label" for="description">Description</label>
        <textarea class="form-control" id="description" name="description">{{ @old('description') }}</textarea>
    </div>
    <div class="mb-3">
        <label class="form-label" for="image">Image</label>
        <input class="form-control" id="image" type="file" name="image" />
    </div>
    <div class="mb-3">
        <a class="btn btn-outline-primary me-3" href="{{ route('students.index') }}">Cancel</a>
        <button class="btn btn-primary" type="submit">Add Student</button>
    </div>
</form>
@endsection