
<div>
    <div>
        <img src="{{asset('photos/'.$student->image)}}" alt="user photo" />
    </div>
    <div>
        <table>
            <tr>
                <td><strong>ID</strong></td>
                <td>{{ $student->id }}</td>
            </tr>
            <tr>
                <td><strong>Name</strong></td>
                <td>{{ $student->name }}</td>
            </tr>
             <tr>
                <td><strong>Email</strong></td>
                <td>{{ $student->email }}</td>
            </tr>
             <tr>
                <td><strong>Phone</strong></td>
                <td>{{ $student->phone }}</td>
            </tr>
             <tr>
                <td><strong>Section</strong></td>
                <td>{{ $student->section }}</td>
            </tr>
             <tr>
                <td><strong>Description</strong></td>
                <td>{{ $student->description }}</td>
            </tr>
        </table>
    </div>
</div>