@extends('layout')

@section('content')
<h4 class="text-primary my-2">Edit Student</h4>
@if($errors->any())
    <div class="my-3 alert alert-danger">
        <ul>
        @foreach ($errors->all() as $err )
            <li>{{ $err }}</li>
        @endforeach
        </ul>
    </div>
@endif
<form class="w-75" method="post" action="{{ route('students.update' , $student) }}" enctype="multipart/form-data">
    @method('PUT')
    <div class="mb-3">
        <label class="form-label" for="name">Name</label>
        <input class="form-control" id="name" type="text" name="name" placeholder="Student Name" value="{{ $student->name }}" />
    </div>
    <div class="mb-3">
        <label class="form-label" for="email">Email</label>
        <input class="form-control" id="email" type="email" name="email" placeholder="Student Email" value="{{ $student->email }}" />
    </div>
    <div class="mb-3">
        <label class="form-label" for="phone">Phone</label>
        <input class="form-control" id="phone" type="text" name="phone" placeholder="Student Phone" value="{{ $student->phone }}" />
    </div>
    <div class="mb-3">
        <label class="form-label" for="Section">Section</label>
        <input class="form-control" id="section" type="text" name="section" placeholder="Studnet Section" value="{{ $student->section }}" />
    </div>
    <div class="mb-3">
        <label class="form-label" for="description">Description</label>
        <textarea class="form-control" id="description" name="description">{{ $student->description }}</textarea>
    </div>
    <div class="mb-3">
        <img class="user-photo-preview" id="preview" src="{{ asset('photos/'.$student->image) }}" alt="user photo preview" />
    </div>
    <div class="mb-3">
        <label class="form-label" for="image">Image</label>
        <input class="form-control" id="image" type="file" name="image" />
    </div>
    <div class="mb-3">
        <a class="btn btn-outline-primary me-3" href="{{ route('students.index') }}">Cancel</a>
        <button class="btn btn-success" type="submit">Update Student</button>
    </div>
</form>
<script>
    document.getElementById('image').addEventListener('change' , function(event){
        $image = event.target.files[0];
        if($image){
            const reader = new FileReader();
            reader.onload = function(e){
                document.getElementById('preview').src=e.target.result;
            }
            reader.readAsDataURL($image);
        }
    })
</script>
@endsection