    <?php

use App\Http\Controllers\AboutUs;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\FutsalDetailsController;
use App\Http\Controllers\FutsaluserController;
use App\Models\FutsalDetails;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\FutsalController;
use App\Http\Controllers\ShowUserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('homepage');
});

Route::get('/adminlogin', function () {
    return view('admin.login');
});
Route::get('/adminlogout', [AdminUserController::class, 'AdminLogout'])->
    name('admin.logout');



Route::get('/adminregister', function () {
    return view('admin.register');
});



Route::post('/futsaluserregister', [FutsaluserController::class, 'futsaluserregister'])->name('futsaluserregister');
Route::post('/futsaluserlogin', [FutsaluserController::class, 'futsaluserlogin'])->name('futsaluserlogin');

//crud user//
// Route::middleware(['auth'])->group(function () {

//     Route::get('/dashboard', [FutsaluserController::class, 'userdashboard'])->name('userdashboard');
//     Route::get('/userdetails', [FutsaluserController::class, 'index'])->name('userdetails');
//     Route::delete('/delete/{id}', [FutsaluserController::class, 'destroy']);
// });

//crud user

//user

Route::get('/contactus', [ContactUsController::class, 'index'])->name('contactus');
Route::get('/futsals', [FutsalController::class, 'index'])->name('futsals');
Route::get('/futsals/{id}', [FutsalDetailsController::class, 'futsaldetails'])->name('showfutsaldetails');
Route::get('/aboutus', [AboutUs::class, 'index'])->name('aboutus');

// Route::post('/addUserData', [AdminUserController::class, 'userregister']);
// Route::post('/userLogin', [AdminuserController::class, 'userlogin']);



Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', [AdminUserController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/futsaldetails', [FutsalDetailsController::class, 'index'])->name('futsaldetails');
    Route::get('/userdetails', [FutsaluserController::class, 'index'])->name('userdetails');
    Route::get('/create', [FutsalDetailsController::class, 'create'])->name('create');
    Route::post('/store', [FutsalDetailsController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [FutsalDetailsController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [FutsalDetailsController::class, 'update']);
    Route::delete('/delete/{id}', [FutsaluserController::class, 'futsaldelete']);
    Route::delete('/deletefutsaldetails/{id}', [FutsalDetailsController::class, 'destroy']);
    Route::get('/get-time-slots', [FutsalDetailsController::class, 'getTimeSlots'])->name('get.time.slots');



});
//crud
