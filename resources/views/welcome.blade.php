@extends('layout')

@section('content')
<h4 class="text-primary">Welcome to your students management system</h4>
<div class="home-container">
    <a href={{ route('students.create') }}>
        <img class="home-icon" src="{{ asset('icons/my-icons/add.png') }}"  alt="Add student icon"/>
    </a>
    <a href="{{ route('students.index') }}" >
        <img class="home-icon" src="{{ asset('icons/my-icons/manage.png') }}" alt="All students icon" />
    </a>
</div>
@endsection