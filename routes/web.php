<?php

use Illuminate\Support\Facades\Route;

    /* START OF PAYROLL CONTROLLER */

use App\Http\Controllers\Payroll\AddBudgetController;
use App\Http\Controllers\Payroll\AddCharityController;
use App\Http\Controllers\Payroll\AddEmployeeController;
use App\Http\Controllers\Payroll\EditEmployeeController;
use App\Http\Controllers\Payroll\AddPayrollController;
use App\Http\Controllers\Payroll\CalcPaymentController;
use App\Http\Controllers\Payroll\AddPaymentController;
use App\Http\Controllers\Payroll\MainPayrollController;
    /* START OF PAYROLL CONTROLLER */

    /* START OF PAYROLL CONTROLLER */

use App\Http\Controllers\Perdiem\RequestPerdiemController;
use App\Http\Controllers\Perdiem\ProcessPerdiemController;

    /* START OF PAYROLL CONTROLLER */
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', 'App\Http\Controllers\Auth\LoginController@home')->name('home');
Route::group(['middleware' => ['auth']], function ()
{
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
});

Route::resource('/admin/add_college', 'App\Http\Controllers\Admin\AddCollegeController', ['as'=>'admin']);

Route::resource('/admin/add_department', 'App\Http\Controllers\Admin\AddDepartmentController', ['as'=>'admin']);

Route::resource('/perdiem/fin_dir_process_request', 'App\Http\Controllers\Perdiem\Finance\FinanceDirectorProcessRequestController', ['as'=>'perdiem']);

Route::get('/admin.register-new-user', 'App\Http\Controllers\Auth\RegisteredUserController@create')->name('register_new_user');

Route::post('/admin.register-new-user', 'App\Http\Controllers\Auth\RegisteredUserController@store')->name('register_new_user');

Route::get('/admin.list-user', 'App\Http\Controllers\Admin\AdminRegisterController@userlist')->name('admin.list_user');
Route::get('/admin.update-user', 'App\Http\Controllers\Admin\AdminRegisterController@userupdate')->name('admin.update_user');
Route::get('/admin.notification', 'App\Http\Controllers\Admin\AdminRegisterController@notify')->name('admin.notification');
Route::get('/admin.update_password', 'App\Http\Controllers\Auth\NewPasswordController@create')->name('update_password');
Route::post('/admin.update_password', 'App\Http\Controllers\Auth\NewPasswordController@store')->name('update_password');

/*

Route::get('/payroll.list-employee', 'App\Http\Controllers\Payroll\AddEmployeeController@list_employee')->name('list_employee');

Route::get('/payroll.add-new-employee', 'App\Http\Controllers\Payroll\AddEmployeeController@new_employee')->name('add_new_employee');

Route::post('/payroll.add-new-employee', 'App\Http\Controllers\Payroll\AddEmployeeController@add_employee')->name('add_employee');

Route::get('/payroll.edit-employee/{id_number}', 'App\Http\Controllers\Payroll\AddEmployeeController@edit_emp')->name('edit_employee');

Route::post('/payroll.edit-employee/{id_number}', 'App\Http\Controllers\Payroll\AddEmployeeController@store_edit_emp')->name('edit_employee');



Route::resource('/payroll/employee', 'App\Http\Controllers\Payroll\EmployeeController', ['as'=>'payroll']);



Route::get('/payroll.list_payroll', 'App\Http\Controllers\Payroll\AddEmployeeController@payroll')->name('list_payroll');

Route::resource('/payroll/budget', 'App\Http\Controllers\Payroll\AddBudgetController', ['as'=>'payroll']);

Route::resource('/payroll/charity', 'App\Http\Controllers\Payroll\AddCharityController', ['as'=>'payroll']);

Route::resource('/payroll/payroll', 'App\Http\Controllers\Payroll\PayrollController', ['as'=>'payroll']);

                // perdiem related to college Cashier

Route::resource('/perdiem/col_cash_process_request', 'App\Http\Controllers\Perdiem\CollegeCashier\CollegeCashierProcessRequestController', ['as'=>'perdiem']);

                // perdiem related to college finance

Route::resource('/perdiem/col_fin_process_request', 'App\Http\Controllers\Perdiem\CollegeFinance\CollegeFinanceProcessRequestController', ['as'=>'perdiem']);

Route::resource('/perdiem/col_fin_prepare_abell', 'App\Http\Controllers\Perdiem\CollegeFinance\CollegeFinancePrepareAbellController', ['as'=>'perdiem']);

Route::resource('/perdiem/col_fin_abell_mawerareja', 'App\Http\Controllers\Perdiem\CollegeFinance\CollegeFinanceAbellMawerarejaController', ['as'=>'perdiem']);

                // perdiem related to college dean

Route::resource('/perdiem/col_dean_process_request', 'App\Http\Controllers\Perdiem\Dean\CollegeDeanProcessRequestController', ['as'=>'perdiem']);

Route::resource('/perdiem/col_dean_gizyi_abell', 'App\Http\Controllers\Perdiem\Dean\CollegeDeanGizyiAbellController', ['as'=>'perdiem']);

Route::resource('/perdiem/col_dean_guzo_abell', 'App\Http\Controllers\Perdiem\Dean\CollegeDeanMeskGuzoController', ['as'=>'perdiem']);

                // perdiem related to finance director

Route::resource('/perdiem/fin_dir_process_request', 'App\Http\Controllers\Perdiem\Finance\FinanceDirectorProcessRequestController', ['as'=>'perdiem']);

Route::resource('/perdiem/fin_dir_gizyi_abell', 'App\Http\Controllers\Perdiem\Finance\FinanceDirectorGizyiAbellController', ['as'=>'perdiem']);

Route::resource('/perdiem/fin_dir_guzo_abell', 'App\Http\Controllers\Perdiem\Finance\FinanceDirectorMeskGuzoController', ['as'=>'perdiem']);

                // perdiem related to finance team

Route::resource('/perdiem/fin_team_process_request', 'App\Http\Controllers\Perdiem\FinanceTeam\FinanceTeamProcessRequestController', ['as'=>'perdiem']);

                // perdiem related to accademic vice president

Route::resource('/perdiem/ac_vpres_process_request', 'App\Http\Controllers\Perdiem\VicePresident\AccademicPresidentProcessRequestController', ['as'=>'perdiem']);

Route::resource('/perdiem/ac_vpres_gizyi_abell', 'App\Http\Controllers\Perdiem\VicePresident\AccademicPresidentGizyiAbellController', ['as'=>'perdiem']);

Route::resource('/perdiem/ac_vpres_guzo_abell', 'App\Http\Controllers\Perdiem\VicePresident\AccademicPresidentMeskGuzoController', ['as'=>'perdiem']);

Route::resource('/perdiem/record_office_process_request', 'App\Http\Controllers\Perdiem\RecordOffice\RecordOfficeProcessRequestController', ['as'=>'perdiem']);

*/

// start of payroll related route 

Route::get('/payroll/new_budget/', [AddBudgetController::class, 'get_budget']) 
                                                                ->name('budget');

Route::post('/payroll/new_budget/', [AddBudgetController::class, 'add_budget'])
                                                                ->name('budget');

Route::get('/payroll/new_charity/', [AddCharityController::class, 'get_charity']) 
                                                                ->name('charity');

Route::post('/payroll/new_charity/', [AddCharityController::class, 'add_charity'])
                                                                ->name('charity');

Route::get('/payroll/new_employee/', [AddEmployeeController::class, 'get_employee']) 
                                                                ->name('employee');

Route::post('/payroll/new_employee/', [AddEmployeeController::class, 'add_employee'])
                                                                ->name('employee');

Route::get('/payroll/info_employee/{id}', [EditEmployeeController::class, 'info_employee']) 
                                                                ->name('info_employee');

Route::get('/payroll/edit_employee/{id}', [EditEmployeeController::class, 'edit_employee']) 
                                                                ->name('edit_employee');

Route::put('/payroll/update_employee/', [AddEmployeeController::class, 'update_employee'])
                                                                ->name('update_employee');

Route::get('/payroll/deactive_employee/{id}', [EditEmployeeController::class, 'deactive_employee']) 
                                                                ->name('deactive_employee');

Route::put('/payroll/deactivate_employee/', [AddEmployeeController::class, 'deactivate_employee'])
                                                                ->name('deactivate_employee');

Route::get('/payroll/reactive_employee/{id}', [EditEmployeeController::class, 'reactive_employee']) 
                                                                ->name('reactive_employee');

Route::put('/payroll/reactivate_employee/', [AddEmployeeController::class, 'reactivate_employee'])
                                                                ->name('reactivate_employee');

Route::get('/payroll/new_payroll/', [AddPayrollController::class, 'get_payroll']) 
                                                                ->name('payroll');

Route::post('/payroll/new_payroll/', [AddPayrollController::class, 'add_payroll'])
                                                                ->name('payroll');

Route::get('/payroll/load_payroll/{id}', [AddPayrollController::class, 'load_payroll']) 
                                                                ->name('load_payroll');

Route::post('/payroll/cal_payroll/', [CalcPaymentController::class, 'cal_payroll'])
                                                                ->name('cal_payroll');

Route::get('/payroll/edit_payroll/{id}', [CalcPaymentController::class, 'edit_payroll']) 
                                                                ->name('edit_payroll');

Route::put('/payroll/update_payroll/', [CalcPaymentController::class, 'update_payroll'])
                                                                ->name('update_payroll');

Route::get('/payroll/delete_payroll/{id}', [CalcPaymentController::class, 'delete_payroll']) 
                                                                ->name('delete_payroll');

Route::post('/payroll/remove_payroll/', [CalcPaymentController::class, 'remove_payroll'])
                                                                ->name('remove_payroll');

Route::get('/payroll/new_payment/', [AddPaymentController::class, 'get_payment']) 
                                                                ->name('payment');

Route::get('/payroll/info_payment/{id}', [MainPayrollController::class, 'info_payment']) 
                                                                ->name('info_payment');

Route::get('/payroll/main_payment/', [MainPayrollController::class, 'main_payment']) 
                                                                ->name('main');

// end of payroll related route

// start of perdiem related route

Route::get('/perdiem/request_perdiem/', [RequestPerdiemController::class, 'get_request']) 
                                                                    ->name('request');

Route::get('/perdiem/process_perdiem/', [ProcessPerdiemController::class, 'get_processed']) 
                                                                    ->name('process');

// end of perdiem related route
require __DIR__.'/auth.php';
