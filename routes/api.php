<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\BrandsController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\CountriesController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\OneToMannyController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\OwnersController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductBrandOwnerCountry;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RateController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\VideoFeedBackRateController;
use App\Http\Controllers\VideoRateController;
use App\Models\Countries;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('user', UserController::class);
Route::apiResource('profile', ProfileController::class);
Route::get('searchprofile/{id}', [ProfileController::class, 'getUserRoles']);
// Roles
Route::post('saveroles', [RolesController::class, 'store']);

// Many to Many
Route::post('userroles/save', [OneToMannyController::class, 'store']);
Route::get('getuserRoles/{getUsersWithRoles}', [OneToMannyController::class, 'getUsersWithRoles']);
Route::put('update/user/roles/{id}', [OneToMannyController::class, 'updateUserRoles']);
Route::delete('delete/user/{id}',[OneToMannyController::class,'deleteUser']);
// post comment and rate
Route::post('save/post',[PostController::class,'savepost']);
Route::post('save/comment',[CommentsController::class,'savecomment']);
Route::post('save/rate',[RateController::class,'saverate']);
Route::get('/users/{id}/with-posts-comments-rates',[UserController::class,'getUserWithPostsCommentsAndRates']);
// videos feedback rate
Route::post('save/video', [VideoController::class,'saveVideo']);
Route::post('save/feedback', [FeedbackController::class,'saveVideoFeedBack']);
Route::post('save/rate', [VideoRateController::class,'saveVideoRate']);
Route::get('show/video/feedback/rate/{id}', [VideoFeedBackRateController::class,'getUserWithVideoFeedBackAndRates']);
// Product Brand Owner Country
Route::post('save/product',[ProductController::class,'saveproduct']);
Route::post('save/brand',[BrandController::class,'storebrand']);
Route::post('save/country',[CountryController::class,'savecountry']);
Route::post('save/owner',[OwnerController::class,'storeowner']);
Route::get('show/product/brand/owner/{id}',[ProductBrandOwnerCountry::class,'completeDetails']);
