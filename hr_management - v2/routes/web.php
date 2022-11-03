<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DesignationController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\SalaryController;
use App\Http\Controllers\LeaveController;


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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/',[AdminController::class, 'index'])->name('/');


Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {

    Route::get('/dashboard',[AdminController::class, 'dashboard'])->name('dashboard');
//----------------Company Module-------------------------------
    Route::get('/add-companyInfo',[CompanyController::class, 'addCompanyInfo'])->name('add-companyInfo');
    Route::post('/create-compnayInfo',[CompanyController::class, 'createCompnayInfo'])->name('create-compnayInfo');
    Route::get('/manage-companyInfo',[CompanyController::class, 'manageCompanyInfo'])->name('manage-companyInfo');
    Route::post('/delete-companyInfo',[CompanyController::class, 'deleteCompanyInfo'])->name('delete-companyInfo');
    Route::get('/edit-companyInfo/{id}',[CompanyController::class, 'editCompanyInfo'])->name('edit-companyInfo');
    Route::post('/update-compnayInfo',[CompanyController::class, 'updateCompanyInfo'])->name('update-compnayInfo');

//----------------Department Module-------------------------------
    Route::get('/add-department',[DepartmentController::class, 'addDepartment'])->name('add-department');
    Route::post('/save-department',[DepartmentController::class, 'saveDepartment'])->name('save-department');
    Route::get('/manage-department',[DepartmentController::class, 'manageDepartment'])->name('manage-department');
    Route::post('/delete-department',[DepartmentController::class, 'deleteDepartment'])->name('delete-department');
    Route::get('/edit-department/{id}',[DepartmentController::class, 'editDepartment'])->name('edit-department');
    Route::post('/update-department',[DepartmentController::class, 'updateDepartment'])->name('update-department');

    //--------------Designation Module------------------------------
    Route::get('/add-designation',[DesignationController::class, 'addDesignation'])->name('add-designation');
    Route::post('/save-designation',[DesignationController::class, 'saveDesignation'])->name('save-designation');
    Route::get('/manage-designation',[DesignationController::class, 'manageDesignation'])->name('manage-designation');
    Route::post('/delete-designation',[DesignationController::class, 'deleteDesignation'])->name('delete-designation');
    Route::get('/edit-designation/{id}',[DesignationController::class, 'editDesignation'])->name('edit-designation');
    Route::post('/update-designation',[DesignationController::class, 'updateDesignation'])->name('update-designation');

    //--------------Employee Module------------------------------
    Route::get('/add-employee',[EmployeeController::class, 'addEmployee'])->name('add-employee');
    Route::post('/save-employee',[EmployeeController::class, 'saveEmployee'])->name('save-employee');
    Route::get('/manage-employee',[EmployeeController::class, 'manageEmployee'])->name('manage-employee');
    Route::post('/delete-employee',[EmployeeController::class, 'deleteEmployee'])->name('delete-employee');
    Route::get('/edit-employee/{id}',[EmployeeController::class, 'editEmployee'])->name('edit-employee');
    Route::post('/update-employee',[EmployeeController::class, 'updateEmployee'])->name('update-employee');
    Route::get('/employee-status/{id}',[EmployeeController::class, 'employeeStatus'])->name('employee-status');

    //--------------Attendance Module------------------------------
    Route::get('/add-attendance',[AttendanceController::class, 'addAttendance'])->name('add-attendance');
    Route::post('/save-attendance',[AttendanceController::class, 'saveAttendance'])->name('save-attendance');
    Route::get('/manage-attendance',[AttendanceController::class, 'manageAttendance'])->name('manage-attendance');
    Route::post('/delete-attendance',[AttendanceController::class, 'deleteAttendance'])->name('delete-attendance');
    Route::get('/edit-attendance/{id}',[AttendanceController::class, 'editAttendance'])->name('edit-attendance');
    Route::post('/update-attendance',[AttendanceController::class, 'updateAttendance'])->name('update-attendance');
    Route::get('/leave-status/{id}',[AttendanceController::class, 'LeaveStatus'])->name('leave-status');

    //--------------leave Module------------------------------
        //---------leave Setting-----------
    Route::get('/add-leave',[LeaveController::class, 'addLeave'])->name('add-leave');
    Route::post('/save-leave',[LeaveController::class, 'saveLeave'])->name('save-leave');
    Route::get('/manage-leave',[LeaveController::class, 'manageLeave'])->name('manage-leave');
    Route::post('/delete-leave',[LeaveController::class, 'deleteLeave'])->name('delete-leave');
    Route::get('/edit-leave/{id}',[LeaveController::class, 'editLeave'])->name('edit-leave');
    Route::post('/update-leave',[LeaveController::class, 'updateLeave'])->name('update-leave');

       //---------Apply leave-----------
    Route::get('/add-leaveApply',[LeaveController::class, 'addLeaveApply'])->name('add-leaveApply');
    Route::post('/save-leaveApply',[LeaveController::class, 'saveLeaveApply'])->name('save-leaveApply');
    Route::get('/manage-leaveApply',[LeaveController::class, 'manageLeaveApply'])->name('manage-leaveApply');
    Route::post('/delete-leaveApply',[LeaveController::class, 'deleteLeaveApply'])->name('delete-leaveApply');
    Route::get('/edit-leaveApply/{id}',[LeaveController::class, 'editLeaveApply'])->name('edit-leaveApply');
    Route::post('/update-leaveApply',[LeaveController::class, 'updateLeaveApply'])->name('update-leaveApply');
    Route::get('/leaveApply-status/{id}',[LeaveController::class, 'LeaveApplyStatus'])->name('leaveApply-status');

    //--------------Salary Module------------------------------
    Route::get('/salary-list',[SalaryController::class, 'salaryList'])->name('salary-list');

});
