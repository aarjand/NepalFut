<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    AboutUs,
    ContactUsController,
    FutsalDetailsController,
    FutsaluserController,
    HomeController,
    AdminUserController,
    BookingFutsalsController,
    FutsalController
};

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/aboutus', [AboutUs::class, 'index'])->name('aboutus');
Route::get('/contactus', [ContactUsController::class, 'index'])->name('contactus');
Route::get('/futsals', [FutsalController::class, 'index'])->name('futsals');
Route::get('/futsals/{id}', [FutsalDetailsController::class, 'futsaldetails'])->name('showfutsaldetails');

// Auth::routes();

// Admin specific routes
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [AdminUserController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/futsaldetails', [FutsalDetailsController::class, 'index'])->name('futsaldetails');
    Route::get('/userdetails', [FutsaluserController::class, 'index'])->name('userdetails');
    Route::get('/bookingdetails', [BookingFutsalsController::class, 'book'])->name('bookingdetails');
    Route::delete('/delete/{id}', [FutsaluserController::class, 'futsaldelete']);
    Route::get('/create', [FutsalDetailsController::class, 'create'])->name('create');
    Route::post('/store', [FutsalDetailsController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [FutsalDetailsController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [FutsalDetailsController::class, 'update']);
    Route::delete('/deletefutsaldetails/{id}', [FutsalDetailsController::class, 'destroy']);

    Route::get('/get-time-slots', [FutsalDetailsController::class, 'getTimeSlots'])->name('get.time.slots');
});

// User specific routes

Route::get('/futsaluserregister', function ()
 { return view('futsaluser.register'); });
Route::get('/futsaluserlogin', function ()
 { return view('futsaluser.login'); });
Route::post('/futsaluserlogin', [FutsaluserController::class, 'futsaluserlogin'])->name('futsaluserlogin');
Route::post('/futsaluserregister', [FutsaluserController::class, 'futsaluserregister'])->name('futsaluserregister');
Route::get('/userlogout', [FutsaluserController::class, 'UserLogout'])->name('user.logout');


// Admin login/logout
Route::get('/adminlogin', function ()
{ return view('admin.login'); });
Route::get('/adminlogout', [AdminUserController::class, 'AdminLogout'])->name('admin.logout');
Route::get('/adminregister', function () 
{ return view('admin.register'); });
Route::post('/addUserData', [AdminUserController::class, 'userregister']);
Route::post('/userLogin', [AdminUserController::class, 'userlogin']);

// Add necessary CRUD routes for users
// Route::middleware(['auth'])->group(function () {
//     Route::get('/userdetails', [FutsaluserController::class, 'index'])->name('userdetails');
//     Route::delete('/delete/{id}', [FutsaluserController::class, 'futsaldelete']);
// });
