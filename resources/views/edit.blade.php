@extends('layouts.default')

@section('content')
    <div class="vertical-center">
        <form method="POST" action="/students/{{$student->id}}">
			@method('PUT')
            @csrf

            <!-- 2 column grid layout with text inputs for the first and last names -->
            <div class="row mb-4">
                <div class="col">
                    <div class="form-outline">
                        <label class="form-label" for="first_name">First name</label>
                        <input type="text" id="first_name" class="form-control" name="first_name" value="{{ $student->first_name }}" />

                    </div>
                </div>
                <div class="col">
                    <div class="form-outline">
                        <label class="form-label" for="last_name">Last name</label>
                        <input type="text" id="last_name" class="form-control" name="last_name" value="{{ $student->last_name }}" />
                    </div>
                </div>
            </div>
    
            <!-- Text input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="class">Class</label>
                <input type="text" id="class" class="form-control" name="class" value="{{ $student->class }}" />
            </div>

            <div class="form-outline mb-4">
                <label class="form-label" for="dob">birth day</label>
                <input type="date" id="dob" class="form-control" name="dob" value="{{ $student->dob }}" />
            </div>

            <div class="form-outline mb-4">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="male" value="Male" {{ ($student->gender === "Male") ? "checked" : ""; }}>
                    <label class="form-check-label" for="male">Male</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="female" value="Female" {{ ($student->gender === "Female") ? "checked" : ""; }}>
                    <label class="form-check-label" for="female">Female</label>
                </div>
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4">
                Edit student
            </button>
        </form>
    </div>
@endsection