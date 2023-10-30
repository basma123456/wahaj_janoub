<?php

 use App\Http\Controllers\Front\AboutUsController;
use App\Http\Controllers\Front\ConstructionController;
use App\Http\Controllers\Front\MainPageController;
use App\Http\Controllers\Front\ProductController;
use App\Http\Controllers\Front\SystemController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
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


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');








Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){ //...

    Route::get('/test' , function (){
         return view('front/index');
    });


//    /*************test**************/
//    Route::get('back-index' , function (){
//        return view('admin/auth/sign-up') ;
//    });
//
//    Route::get('back-login' , function (){
//        return view('admin/auth/login') ;
//    });
//
//    Route::get('add_product' , function (){
//        return view('admin/products/add');
//    });
//    /******************end test***********/

//
//
//    Route::get('product-classification' , [ProductClassificationController::class , 'index']);
//    Route::get('product-classification-create' , [ProductClassificationController::class , 'create']);
//    Route::post('product-classification-store' , [ProductClassificationController::class , 'store'])->name('product_classification.store');
//    Route::get('product-classification-edit/{id}' , [ProductClassificationController::class , 'edit'])->name('product_classification.edit');
//    Route::put('product-classification-update/{id}' , [ProductClassificationController::class , 'update'])->name('product_classification.update');
//
//
//
//    Route::resource('product' , ProductController::class);

/*************************************/
    Route::get('/' , [ MainPageController::class , 'index']);
    Route::get('products-list/{id}' ,[ProductController::class , 'index'])->name('products_list.index');
    Route::get('product-show/{id}' , [ProductController::class , 'show'])->name('products_show.front');
    Route::get('product-classifications-list' , [ProductController::class , 'allClassifications'])->name('product_classifications_list.show');
    Route::get('about-our-company' , [AboutUsController::class , 'index']);
    Route::get('systems-list' , [SystemController::class , 'index']);
    Route::get('systems-details/{id}' , [SystemController::class , 'show']);

//    <!------------------------------------------------------->
    Route::get('construction-list-all' ,[ConstructionController::class , 'index'])->name('constructions_list_all.index');
    Route::get('construction-list/{id}' ,[ConstructionController::class , 'indexByClassification'])->name('constructions_list.index');
    Route::get('construction-show/{id}' , [ConstructionController::class , 'show'])->name('constructions_show.front');
 //<!------------------------------------------------------->



//        <!--------------------------------------------->
    Route::get('news-list' , [\App\Http\Controllers\Front\NewsController::class , 'index']);
    Route::get('news-details/{id}' , [\App\Http\Controllers\Front\NewsController::class , 'show']);


//        <!------------------------------------------->

    Route::get('why-solar-system-page' , [\App\Http\Controllers\Front\WhySolarSystemController::class , 'index'])->name('why_solar_system_page.front');


    /************************************/
    Route::post('promotion_client_requirement' , [\App\Http\Controllers\Front\MainPageController::class , 'promotionClientRequirement'])->name('promotion.client.requirement');
    //for constructions

    Route::post('promotion_client_requirement_product' , [\App\Http\Controllers\Front\MainPageController::class , 'promotionClientRequirementProduct'])->name('promotion.client.requirement.product');

    Route::get('contact-us' , [\App\Http\Controllers\Front\ContactUsController::class , 'index'])->name('contact_us_front.index');

    /***********************************/
    Route::get('kk' , function (){
        return view('admin/auth/auth_layouts/login');
    });

    Route::get('logout-now' , function (){
        Session::flush();

        Auth::logout();
        return redirect('/');

    });


});

Auth::routes();

