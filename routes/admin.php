<?php

use App\Http\Controllers\Admin\AboutUsController;
use App\Http\Controllers\Admin\ConstructionClassificationController;
use App\Http\Controllers\Admin\ConstructionController;
use App\Http\Controllers\Admin\ConstructionImageController;
use App\Http\Controllers\Admin\ContractingController;
use App\Http\Controllers\Admin\MainPageController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\ProductClassificationController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SystemController;
use App\Http\Controllers\Admin\WhySolarSystemController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');








 Route::group(
    [
        'prefix' =>  LaravelLocalization::setLocale(),

        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' , 'auth']
    ], function(){ //...

//    Route::get('/' , function (){
//
//        $name = json_encode( [
//            'en' => 'Name in Englijkjjjjjkjjjjjjjjjjjjjjjjjsh',
//            'ar' => 'Naam in hetooooooooooooooooooooooooooooo Nederlands'
//        ] , true);
//      $m =  \App\Models\ProductClassification::create([
//            'name' => $name ,
//          'user_id' => auth()->id()
//         ]);
// //        dd(\App\Models\ProductClassification::get());
//        return view('front/index');
//    });


    /*************test**************/
    Route::get('back-index' , function (){
        return view('admin/auth/sign-up') ;
    });

    Route::get('back-login' , function (){
        return view('admin/auth/login') ;
    });

    Route::get('add_product' , function (){
        return view('admin/products/add');
    });
    /******************end test***********/



    Route::get('product-classification' , [ProductClassificationController::class , 'index']);
    Route::get('product-classification-create' , [ProductClassificationController::class , 'create']);
    Route::post('product-classification-store' , [ProductClassificationController::class , 'store'])->name('product_classification.store');
    Route::get('product-classification-edit/{id}' , [ProductClassificationController::class , 'edit'])->name('product_classification.edit');
    Route::put('product-classification-update/{id}' , [ProductClassificationController::class , 'update'])->name('product_classification.update');



    Route::resource('product' , ProductController::class);
    Route::resource('main-page' , MainPageController::class);
    Route::resource('systems' , SystemController::class);
    Route::resource('about-us' , AboutUsController::class);
    Route::resource('why-solar-system' , WhySolarSystemController::class);
    Route::resource('construction-classification' , ConstructionClassificationController::class);
    Route::resource('construction' , ConstructionController::class);
    Route::resource('partners' , ContractingController::class);


//     Route::get('construction-image/{id}' , [ConstructionImageController::class , 'index'])->name('construction-image.index');
     Route::post('construction-image-store/{id}' , [ConstructionImageController::class , 'store'])->name('construction-image.store');
     Route::get('construction-image-edit/{id}/{bigId}' , [ConstructionImageController::class , 'edit'])->name('construction-image.edit');
     Route::put('construction-image-update/{id}/{bigId}' , [ConstructionImageController::class , 'update'])->name('construction-image.update');


     Route::resource('news' , NewsController::class);
     Route::resource('quotation' , \App\Http\Controllers\Admin\QuotationController::class)->except('show' , 'edit');
     Route::get('quotation-edit/{type}/{id}' , [\App\Http\Controllers\Admin\QuotationController::class , 'edit'])->name('quotation.edit');
     Route::get('quotation/{type}/{id}' , [\App\Http\Controllers\Admin\QuotationController::class , 'show'])->name('quotation.show');


//     <form action="{{route('quotation.update' ,[ 'construction',  $quotation->id])}}" method="post" class="theme-form mega-form"  >
//     @csrf
//                                            @method('put')

 });



