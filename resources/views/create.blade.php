<h1>Create Student</h1>
@if($errors->any())
        <ul>
        @foreach ($errors->all() as $err )
            <li>{{ $err }}</li>
        @endforeach
        </ul>
@endif
<form method="post" action="{{ route('students.store') }}" enctype="multipart/form-data">
    <div>
        <label for="name">Name</label>
        <input id="name" type="text" name="name" placeholder="Student Name" value="{{ old('name') }}" />
    </div>
    <div>
        <label for="email">Email</label>
        <input id="email" type="email" name="email" placeholder="Student Email" value="{{ old('email') }}" />
    </div>
    <div>
        <label for="phone">Phone</label>
        <input id="phone" type="text" name="phone" placeholder="Student Phone" value="{{ old('phone') }}" />
    </div>
    <div>
        <label for="Section">Section</label>
        <input id="section" type="text" name="section" placeholder="Studnet Section" value="{{ old('section') }}" />
    </div>
    <div>
        <label for="description">Description</label>
        <textarea id="description" name="description">{{ @old('description') }}</textarea>
    </div>
    <div>
        <label for="image">Image</label>
        <input id="image" type="file" name="image" />
    </div>
    <div>
        <a href="{{ route('students.index') }}">Cancel</a>
        <button type="submit">Add Student</button>
    </div>
</form>