@extends('layout')

@section('content')

    <h1>Student Page</h1>

    <h2>Remove Your Sign Up </h2>

    <!-- Remove SignUp Form -->
    <form action="{{url('student')}}/{{ $id }}" method="POST" class="form-horizontal">
        {{ csrf_field() }}
        Student ID <input type="text" name="studentID" id="studentID" class="form-control"> <br>

        <div class="col-sm-offset-3 col-sm-6">
            {{ method_field('DELETE') }}
            <button type="submit" class="btn btn-default">Remove</button>
        </div>
    </form>

@endsection
