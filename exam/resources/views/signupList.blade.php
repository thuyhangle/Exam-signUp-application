@extends('layout')

@section('content')
    <h1>Teacher Page</h1>

    <table class="table table-striped Exam-table" border="1">

        <!-- Table Headings -->
        <thead>
            <th>Exam Name</th>
            <th>Course Code</th>
            <th> Course Name</th>
            <th>Date of Exam</th>
            <th>Time </th>
            <th>Place </th>
            <th>Delete Exam</th>
        </thead>

        <!-- Table Body -->
        <tbody>
                <tr>
                    <!-- Exam Information -->
                    <td class="table-text">
                        <div>{{ $exam->examName }}</div>
                    </td>

                    <td class="table-text">
                        <div>{{ $exam->courseCode }}</div>
                    </td>

                    <td class="table-text">
                        <div>{{ $exam->courseName }}</div>
                    </td>

                    <td class="table-text">
                        <div>{{ $exam->date }}</div>
                    </td>

                    <td class="table-text">
                        <div>{{ $exam->time }}</div>
                    </td>

                    <td class="table-text">
                        <div>{{ $exam->place }}</div>
                    </td>

                    <td>
                        <!-- : Delete Button -->
                        <form action="{{url('exam')}}/{{ $exam->id }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}

                            <button>Delete This Exam</button>
                        </form>

                    </td>
                </tr>
        </tbody>
    </table>

<h2> List of Students </h2>
<table class="table table-striped Exam-table" border="1">
    <thead>
            <th>
                Student ID
            </th>
            <th>
                Full Name
            </th>
            <th>
                Group
            </th>
    </thead>
    @foreach ($exam->signups as $signup)
            <tr>
                <td>
                    {{ $signup->studentID }}
                </td>
                <td>
                    {{ $signup->firstName }}  {{ $signup->lastName }}
                </td>
                <td>
                    {{ $signup->group }}
                </td>
            </tr>

    @endforeach
<table>

<br>
{{--
Modify Information Form
--}}

<form action="{{url('/exam', [$exam->id])}}" method="POST" class="form-horizontal">
    {{ csrf_field() }}
    {{ method_field('PUT') }}
    <h2> Edit Exam Information </h2>
    <!-- Exam Information input -->
            Exam Name <input type="text" name="examName" id="examName" class="form-control">
            Course Code <input type="text" name="courseCode" id="courseCode" class="form-control">
            Course Name <input type="text" name="courseName" id="courseName" class="form-control">
            Date of Exam <input type="date" name="date" id="date" class="form-control">
            Time <input type="time" name="time" id="time" class="form-control">
            Place <input type="text" name="place" id="place" class="form-control">

    <!-- Add Exam Button -->
        <br>
            <button type="submit" class="btn btn-default">
                <i class="fa fa-plus"></i>Updates
            </button>

</form>
@endsection
