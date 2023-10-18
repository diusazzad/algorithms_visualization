<?php

use App\Http\Controllers\Auth\AdminController;
use App\Http\Controllers\Auth\EditorController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\SuperAdminController;
use App\Http\Controllers\Auth\UserController;
use App\Http\Controllers\SuperAdminRoleController;
use App\Http\Controllers\User\AlgorithmController;
use App\Http\Controllers\User\AlgorithmVisualization;
use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\User\Ds\NonLinearDataStructureController;
use App\Http\Controllers\User\DsController;
use App\Http\Controllers\User\ProfileController;
use App\Http\Controllers\User\TaskController;
use App\Http\Controllers\VisitController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     $cacheKey = 'welcome_page';

//     // Check if the cached view exists
//     if (Cache::has($cacheKey)) {
//         // Retrieve the cached view and return it
//         $view = Cache::get($cacheKey);
//         return $view;
//     }

//     // Render the view
//     $view = view('welcome')->render();

//     // Store the view in the cache
//     Cache::put($cacheKey, $view, 60); // Cache for 60 seconds

//     return $view;
// });

// Route::get('/', [VisitController::class, 'trackVisit'])->name('home');



// Route::get('/visit-count', function () {
//     $visitCount = App\Models\Visit::count();
//     return response()->json(['count' => $visitCount]);
// });


// Route::get('/list', function () {
//     return view('list');

// });


// // ----------------------------------------------------------------
// // Login
// // Route::post('/login', [LoginController::class, 'showLoginForm'])->middleware('auth')->name('login');

// // Authentication
// Route::get('/login', [LoginController::class, 'showLoginForm'])->name('auth.login');
// Route::post('/login', [LoginController::class, 'login']);
// // Registration
// // Route::get('/register', [RegisterController::class, 'register'])->middleware('guest');
// Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('auth.register');
// Route::post('/register', [RegisterController::class, 'register']);

// // Routes for Super Admin Dashboard
// Route::middleware(['auth', 'role:superadmin'])->group(function () {
//     Route::get('/superadmin/dashboard', [SuperAdminController::class, 'dashboard'])->name('auth.superadmin.dashboard');

//     // Assign roles
//     Route::resource('superadmin/roles', SuperAdminRoleController::class);

// });

// // Routes for Admin Dashboard
// Route::middleware(['auth', 'role:admin'])->group(function () {
//     Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('auth.admin.dashboard');
// });

// // Routes for Editor Dashboard
// Route::middleware(['auth', 'role:editor'])->group(function () {
//     Route::get('/editor/dashboard', [EditorController::class, 'dashboard'])->name('auth.editor.dashboard');
// });

// // Routes for User Dashboard
// Route::middleware(['auth', 'role:user'])->group(function () {
//     Route::get('/user/dashboard', [UserController::class, 'dashboard'])->name('auth.user.dashboard');
//     // Dashboard
//     Route::get('/user/dashboard/view', [DashboardController::class, 'view'])->name('user.dashboard');
//     // Algorithm
//     Route::get('/user/dashboard/algorithms', [AlgorithmController::class, 'dashboard'])->name('user.algorithms');
//     // Route::get('/user/dashboard/algorithms',[AlgorithmController::class,'algorithmsearch']);
//     Route::get('/user/dashboard/algorithms/action', [AlgorithmController::class, 'algorithmsearch'])->name('user.algorithmsearch');
//     // Community

//     // Task
//     Route::prefix('/user/dashboard')->name('user.')->group(function () {
//         Route::resource('/tasks', TaskController::class);
//     });
//     // learn
//     Route::get('/user/dashboard/learn', [AlgorithmVisualization::class, 'index'])->name('user.learn');
//     // Ds
//     Route::get('/user/dashborad/ds', [DsController::class, 'index'])->name('user.ds');
//     Route::get('/user/dashboard/ds/non_linear_data_structure/submit',[NonLinearDataStructureController::class,'submit'])->name('non_linear_data_structure.submit');
//     // Profile
//     Route::get('/user/dashboard/profile', [ProfileController::class, 'profile'])->name('user.profile'); //Profile
//     Route::get('/user/dashboard/settings', [ProfileController::class, 'settings'])->name('user.settings'); //Setting

//     Route::get('/logout', [\App\Http\Controllers\User\UserController::class, 'logout'])->name('user.logout'); //Logout
// });



// Route::fallback(function () {
//     return view('error');
// });
