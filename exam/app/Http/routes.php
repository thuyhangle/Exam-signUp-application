<?php
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/teacher', function () {
    $exams = \App\Exam::all();

    return view('teacher', [
        'exams' => $exams
    ]);
});
/**
 * Add A New Exam
 */
Route::post('/teacher', function (Request $request) {
    $exam = new \App\Exam();
    $exam->examName = $request->input('examName');
    $exam->courseCode = $request->input('courseCode');
    $exam->courseName = $request->input('courseName');
    $exam->date = $request->input('date');
    $exam->time = $request->input('time');
    $exam->place = $request->input('place');
    $exam->save();
    return redirect('teacher');

});

Route::get('/signupList/{id}', function ($id) {
    $exam = \App\Exam::Find($id);

    return view('signupList', [
        'exam' => $exam
    ]);
});

/**
 * Delete An Existing Exam
 */
Route::delete('/exam/{id}', function ($id) {
    \App\Exam::findOrFail($id)->delete();
    return redirect('/teacher');
});

Route::put('/exam/{id}', function(Request $request, $id){

    $exam = \App\Exam::Find($id);
    $exam->examName = $request->input('examName');
    $exam->courseCode = $request->input('courseCode');
    $exam->courseName = $request->input('courseName');
    $exam->date = $request->input('date');
    $exam->time = $request->input('time');
    $exam->place = $request->input('place');

    $exam->save();
    return redirect('/teacher');
});

Route::get('/student', function() {
    $exams = \App\Exam::all();

    return view('student', [
        "exams" => $exams
    ]);
});

Route::get('/student/{id}', function($id) {
    $exams = \App\Exam::all();

    return view('signupForm', [
        "id" => $id
    ]);
});

Route::post('/student/{id}', function (Request $request, $id) {
    $exam = \App\Exam::Find($id);
    $signup = new \App\Signup();
    $signup->exam_id = $id;
    $signup->studentID = $request->input('studentID');
    $signup->firstName = $request->input('firstName');
    $signup->lastName = $request->input('lastName');
    $signup->group = $request->input('group');

    $signup->save();
    // $signup->exam()->save($exam);

    // $exam = \App\Exam::Find($id);
    // $signup = new \App\Signup();
    // $signup->exam = $exam;
    // $signup->save();

    return redirect('/student');
    //
});

Route::get('/removeSignup/{id}', function($id) {

    return view('removeSignup', [
        "id" => $id
    ]);
});

Route::delete('/student/{id}', function(Request $request, $id){
    \App\Signup::where('exam_id', $id)
        ->where('studentID', $request->input('studentID'))
        ->delete();

    return redirect('/student');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {

});
