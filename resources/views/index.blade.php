@extends('layouts.default')

@section('content')
    <div class="container-xl">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Manage <b>Students</b></h2>
                        </div>
                        <div class="col-sm-6">
                            <a href="/students/create" class="btn btn-success">
                                <i class="material-icons">&#xE147;</i> 
                                <span>Add New Student</span>
                            </a>					
                        </div>
                    </div>
                </div>

                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Last Name</th>
                            <th>First Name</th>
                            <th>Class</th>
                            <th>DOB</th>
                            <th>Gender</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $student)
                            <tr>
                                <td>{{ $student->last_name }}</td>
                                <td>{{ $student->first_name }}</td>
                                <td>{{ $student->class }}</td>
                                <td>{{ $student->dob }}</td>
                                <td>{{ $student->gender }}</td>
                                <td>
                                    <a href="/students/{{$student->id}}/edit" class="edit">
                                        <i class="material-icons" title="Edit">&#xE254;</i>
                                    </a>
                                    <!-- Delete Form -->
                                    <form method="POST" action='/students/{{ $student->id }}'>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit">
                                            <i class="material-icons" title="Delete">&#xE872;</i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>        
    </div>
@endsection