<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */
function cannotProcessData(){
	return response("Cannot Process Data",412);
}

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: *');
header('Access-Control-Allow-Headers: *');

Route::get('/', function () {
    return View::make('index');
});


Route::get('/testPartial', function () {
    return view('partials/testPartial');
});

Route::get('/testTemplate', function(){
    return view('templates/testTemplate');
});

Route::post('/register','LoginController@register');        //Registartion page route

Route::post('/aicte/addComment', 'AicteController@addComment');




Route::middleware('auth.basic')->group(function(){
    Route::resource('/grievances', 'grievanceController');
	Route::post('/login','LoginController@checkAuth');
    Route::get('/grievance/{type}','grievanceController@statistics');       //For grievance statistics in dashboard
    Route::get('/grievanceSearch/{id}','grievanceController@show');         //For fetching student's my grievance
    Route::post('/grievances/updateStatus','grievanceController@updateStatus');         //For Updating status of grievance from raised to inaction
    Route::get('/grievance/student/{type}','grievanceController@grievanceDetails');  //For student My grievances data
    Route::get('/grievance/remarks/{id}','grievanceController@getRemarks');        //For fetching remarks
    Route::post('grievance/addComment', 'grievanceController@addRemarks');          //Adding remarks for student
    Route::get('/grievance/aicte/statistics/{type}','AicteDashBoardController@getStatistics');          //For statistics panel

    Route::get('/aicte/grievances', 'AicteController@index');       //AICTE grievances
    Route::get('/aicte/grievanceSearch', 'AicteController@searchGrievances');       //AICTE Search Grievances
    Route::post('/aicte/addComment', 'AicteController@addComment');         //AICTE Add Comments

});


Route::get('/grievance/aicte/chart/year','AicteDashBoardController@getYearStatistics');             //for chart using year
Route::get('/grievance/aicte/chart/state','AicteDashBoardController@getStateStatistics');           //for chart using state
Route::get('/grievance/aicte/chart/college','AicteDashBoardController@getCollegeStatistics');       //for chart using college
Route::get('/grievance/aicte/chart/department','AicteDashBoardController@getGrievanceTypeStatistics');      //for chart using department
Route::get('grievance/aicte/importantinfo/university/{id}','AicteDashBoardController@getUniversityDetails');           //For university details
Route::get('grievance/aicte/importantinfo/institute/{id}','AicteDashBoardController@getCollegeDetails');
 Route::get('/grievance/download/documents/{path}','grievanceController@download');     //Document Download request


Route::get('/ui_gridSample', function(){
    return view('templates/ui_gridSample');
});

