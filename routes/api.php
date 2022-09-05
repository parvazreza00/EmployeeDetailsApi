<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

//employee information route
Route::get('/allemployee', [EmployeeController::class, 'allEmployee']);
Route::post('/addemployee', [EmployeeController::class, 'addEmployee']);
Route::get('/editemployee/{id}', [EmployeeController::class, 'editEmployee']);
Route::put('/updateemployee/{id}', [EmployeeController::class, 'updateEmployee']);
Route::delete('/deleteemployee/{id}', [EmployeeController::class, 'deleteEmployee']);

//basic information route
Route::get('/allbasicinfo', [EmployeeController::class, 'allBasicInfo']);
Route::post('/addbasicinfo', [EmployeeController::class, 'addBasicInfo']);
Route::get('/editbasicinfo/{id}', [EmployeeController::class, 'editBasicInfo']);
Route::put('/updatebasicinfo/{id}', [EmployeeController::class, 'updateBasicInfo']);
Route::delete('/deletebasicinfo/{id}', [EmployeeController::class, 'deleteBasicInfo']);

//bnak information route
Route::get('/allbankinfo', [EmployeeController::class, 'allBankInfo']);
Route::post('/addbankinfo', [EmployeeController::class, 'addBankInfo']);
Route::get('/editbankinfo/{id}', [EmployeeController::class, 'editBankInfo']);
Route::put('/updatebankinfo/{id}', [EmployeeController::class, 'updateBankInfo']);
Route::delete('/deletebankinfo/{id}', [EmployeeController::class, 'deleteBankInfo']);

//job information route
Route::get('/alljobinfo', [EmployeeController::class, 'allJobInfo']);
Route::post('/addjobinfo', [EmployeeController::class, 'addJobInfo']);
Route::get('/editjobinfo/{id}', [EmployeeController::class, 'editJobInfo']);
Route::put('/updatejobinfo/{id}', [EmployeeController::class, 'updateJobInfo']);
Route::delete('/deletejobinfo/{id}', [EmployeeController::class, 'deleteJobInfo']);

//previous company information route
Route::get('/allpreviouscomp', [EmployeeController::class, 'allPreviousComp']);
Route::post('/addpreviouscomp', [EmployeeController::class, 'addPreviousComp']);
Route::get('/editpreviouscomp/{id}', [EmployeeController::class, 'editPreviousComp']);
Route::put('/updatepreviouscomp/{id}', [EmployeeController::class, 'updatePreviousComp']);
Route::delete('/deletepreviouscomp/{id}', [EmployeeController::class, 'deletePreviousComp']);

//university information route
Route::get('/alluniversity', [EmployeeController::class, 'allUniversity']);
Route::post('/adduniversity', [EmployeeController::class, 'addUniversity']);
Route::get('/edituniversity/{id}', [EmployeeController::class, 'editUniversity']);
Route::put('/updateuniversity/{id}', [EmployeeController::class, 'updateUniversity']);
Route::delete('/deleteuniversity/{id}', [EmployeeController::class, 'deleteUniversity']);

//college information route
Route::get('/allcollege', [EmployeeController::class, 'allCollege']);
Route::post('/addcollege', [EmployeeController::class, 'addCollege']);
Route::get('/editcollege/{id}', [EmployeeController::class, 'editCollege']);
Route::put('/updatecollege/{id}', [EmployeeController::class, 'updateCollege']);
Route::delete('/deletecollege/{id}', [EmployeeController::class, 'deleteCollege']);

//school information route
Route::get('/allschool', [EmployeeController::class, 'allSchooly']);
Route::post('/addschool', [EmployeeController::class, 'addSchooly']);
Route::get('/editschool/{id}', [EmployeeController::class, 'editSchooly']);
Route::put('/updateschool/{id}', [EmployeeController::class, 'updateSchooly']);
Route::delete('/deleteschool/{id}', [EmployeeController::class, 'deleteSchooly']);

//nominee information route
Route::get('/allnominee', [EmployeeController::class, 'allNominee']);
Route::post('/addnominee', [EmployeeController::class, 'addNominee']);
Route::get('/editnominee/{id}', [EmployeeController::class, 'editNominee']);
Route::put('/updatenominee/{id}', [EmployeeController::class, 'updateNominee']);
Route::delete('/deletenominee/{id}', [EmployeeController::class, 'deleteNominee']);



