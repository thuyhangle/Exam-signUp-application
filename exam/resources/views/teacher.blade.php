@extends('layout')

@section('content')

    <div class="panel-body">
        <h1>Teacher Page</h1>
        <!-- New Exam Form -->
        <form action="{{url('teacher')}}" method="POST"  class="form-horizontal">
            {{ csrf_field() }}
            <h2>Create a new Exam</h2>
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
                        <i class="fa fa-plus"></i> Add Exam
                    </button>

        </form>
    </div>
    <br>
    <!--Current Exams -->
    @if (count($exams) > 0)
       <div class="panel panel-default">
           <div class="panel-heading">
               <h2> Current Exams </h2>
           </div>

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
                       <th>&nbsp;</th>
                       <th>&nbsp;</th>
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

                               <td>
                                   <form action="{{url('signupList')}}/{{ $exam->id }}" method="GET">
                                   <button> See More </button>
                                    </form>
                               </td>
                               <td>
                                   <!--  Delete Button -->

                                   <form action="{{url('exam')}}/{{ $exam->id }}" method="POST">
                                       {{ csrf_field() }}
                                       {{ method_field('DELETE') }}

                                       <button>Delete Exam</button>
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
