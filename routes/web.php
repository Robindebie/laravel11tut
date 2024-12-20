<?php

use Illuminate\Support\Facades\Route;
use App\Models\job;





Route::get('/', function ()  {
   return view('home');
});

Route::get('/jobs', function () {
    $jobs = Job::with('employer')->latest()->simplePaginate(3); 

    return view('jobs.index', [
        'jobs' => $jobs
         
    ]);
});
Route::get('/jobs/create', function() {
    return view('jobs.create');  
});

Route::get('/jobs/{id}', function ($id)  {
    
      $job = job::find($id);


    return view('jobs.show', ['job' => $job]);
});

Route::post('/jobs', function () {
 //validation

 job::create([
    'title' => 'title',
    'salary' => 'title',
    'employer' => 1
 ]);

 return redirect('/jobs');
});

Route::get('/contact', function () {
    return view('contact');
});

