@extends('layout')

@section('content')

    <h1>Student Page</h1>
    <!--Current Exams -->

    @if (count($exams) > 0)
       <div class="panel panel-default">
           <h2 class="panel-heading">
               Current Exams
           </h2>

           <div class="panel-body">
               <table class="table table-striped Exam-table" border="1">

                   <!-- Table Headings -->
                   <thead>
                       <th>Exam Name</th>
                       <th>Course Code</th>
                       <th> Course Name</th>
                       <th>Date of Exam</th>
                       <th>Time </th>
                       <th>Place </th>
                       <th>Sign Up</th>
                       <th>Remove SignUp</th>
                   </thead>

                   <!-- Table Body -->
                   <tbody>
                       @foreach ($exams as $exam)
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

                               {{-- Signup  Button--}}
                               <td>
                                   <form action="{{url('/student')}}/{{$exam->id}}" method="GET">
                                       {{ csrf_field() }}
                                       <button>Sign Up</button>
                                   </form>
                               </td>

                               <td>
                                   {{-- Delete Sign Up Button --> --}}

                                   <form action="{{url('/removeSignup')}}/{{ $exam->id }}" method="GET">
                                       {{ csrf_field() }}
                                       <button>Remove</button>
                                   </form>
                               </td>
                           </tr>
                       @endforeach
                   </tbody>
               </table>
           </div>
       </div>
   @endif
@endsection
