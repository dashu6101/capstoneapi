<?php
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
| 
*/


/*
 * Quiz
 */

Route::resource('quizzes', 'QuizController');
Route::post('/quizzes/{quiz}/copy', 'QuizController@copy');
Route::get('/quizzes/create', 'QuizController@create');

Route::resource('/', 'DashboardController');

Route::post('/qa', 'CheckAnswerController@index');
Route::post('/qa/answer', 'CheckAnswerController@answer');
Route::get('/api/protected', 'DashboardController@index');
Route::resource('users', 'UserController');
Route::get('/users/{user}/reset','UserController@reset');
Route::get('/users/{user}/performance', 'UserController@performance');
Route::post('/users/{user}/diagnostic', 'UserController@diagnostic');
Route::get('/users/{user}/report', 'DiagnosticController@report');
Route::post('courses/{courses}', 'CourseController@copy');
Route::get('questions/search_init', 'QuestionController@search_init');
Route::post('questions/search', 'QuestionController@search');
Route::resource('courses', 'CourseController');
Route::resource('difficulties', 'DifficultyController');
Route::resource('fields', 'FieldController');
Route::resource('houses', 'HouseController');
//Route::resource('videos', 'VideoController', ['except' =>['create', 'edit']]);
Route::resource('levels', 'LevelController', ['except' =>['create', 'edit']]);
Route::resource('permissions', 'PermissionController', ['except' =>['create', 'edit']]);
Route::resource('roles', 'RoleController', ['except' =>['create', 'edit']]);
Route::resource('units', 'UnitController', ['except' =>['create', 'edit']]);
Route::resource('courses.houses', 'CourseHouseController', ['except' => ['edit', 'create']]);
Route::resource('courses.users', 'CourseUserController', ['except' => ['edit', 'create']]);
Route::resource('houses.users', 'HouseUserController', ['except' => ['edit', 'create']]);
Route::resource('courses.tracks', 'CourseTrackController', ['except' => ['edit', 'create']]);
Route::delete('houses/{house}/tracks','HouseTrackController@deleteAll');
Route::resource('houses.tracks', 'HouseTrackController', ['except' => ['edit', 'create']]);
Route::resource('users.tests', 'UserTestController', ['except' => ['edit', 'create']]);
Route::resource('tracks', 'TrackController', ['except' =>['edit']]);
Route::resource('tests', 'TestController', ['except' =>['create', 'edit']]);
Route::resource('types', 'TypeController');
Route::post('skills/{skills}/copy', 'SkillController@copy');
Route::get('skills/{skills}/passed','SkillController@usersPassed');
Route::post('skills/search', 'SkillController@search');
Route::get('skills/{skill}/tracks', 'TrackSkillController@list_tracks');
Route::delete('skills/{skill}/tracks', 'TrackSkillController@deleteTracks');
Route::resource('skills', 'SkillController', ['except' =>['edit']]);
Route::resource('questions', 'QuestionController', ['except' =>['edit']]);
Route::resource('enrolments', 'EnrolmentController');
Route::resource('skills.questions', 'SkillQuestionsController', ['except' => ['edit', 'create']]);
Route::delete('tracks/{track}/skills','TrackSkillController@deleteSkills');
Route::resource('tracks.skills', 'TrackSkillController', ['except' => ['edit', 'create']]);
Route::get('/enrols/users', 'EnrolmentController@user_houses');
Route::get('/enrols/teachers', 'EnrolmentController@teacher_houses');

Route::get('users/{username}/logs','LogController@show');
Route::get('logs', 'LogController@index');

Route::post('/test/protected', 'DiagnosticController@index');
Route::post('test/mastercode', 'DiagnosticController@store');
Route::post('/test/answers', 'DiagnosticController@answer');



