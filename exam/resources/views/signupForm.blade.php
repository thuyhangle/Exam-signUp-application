@extends('layout')

@section('content')
    <h1>Student Page</h1>
    <div class="panel-body">
        <h2> SIGN UP FORM </h2>
        <!-- New Sign Up Form -->
        <form action="{{url('student')}}/{{ $id }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            <!-- Sign Up  Information input -->
            <div class="form-group">
                <label for="signup" class="col-sm-3 control-label"> Please fill your exactly information about: </label>
                    <br>
                    Student ID <input type="text" name="studentID" id="studentID" class="form-control"> <br>
                    First Name <input type="text" name="firstName" id="firstName" class="form-control">
                    Last Name <input type="text" name="lastName" id="lastName" class="form-control"> <br>
                    Group <input type="text" name="group" id="group" class="form-control">

            </div>

            <!-- Submit SignUp Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-default">Submit Sign Up</button>
                </div>
            </div>
        </form>
    </div>

@endsection
