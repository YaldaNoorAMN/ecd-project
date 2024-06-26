<?php



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\YearController;
use App\Http\Controllers\MonthController;
use App\Http\Controllers\GenderController;
use App\Http\Controllers\FatherOccupationController;
use App\Http\Controllers\FatherQualificationController;
use App\Http\Controllers\MotherOccupationController;
use App\Http\Controllers\MotherQualificationController;

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
// Route::get('/year', [YearController::class, 'store']);


Route::prefix('ECD')->group(function () {
    Route::resources([
        'Year' => YearController::class,
        'Month' => MonthController::class,
        'Gender' => GenderController::class,
        'FatherOccupation' => FatherOccupationController::class,
        'FatherQualification' => FatherQualificationController::class,
        'MotherOccupation' => MotherOccupationController::class,
        'MotherQualification' => MotherQualificationController::class,
        
    ]);


Route::group(['middleware' => 'auth:sanctum'], function () {
    //All secure URL's
   
    //     Route::get('get_loan_bill_number', [LoanController::class, 'get_bill']);
    //     Route::post('all_data', [AuthController::class, 'all_data']);
    //     Route::delete('DeActivateUser/{id}', [AuthController::class, 'DeActivate']);
    //     Route::patch('update_user/{id}', [AuthController::class, 'put']);

    // Route::get('/Logout', [AuthController::class, 'logout']);


});

});
