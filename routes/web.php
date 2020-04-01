<?php
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

/** --- EN --- **/
Route::group(['prefix' => '{lang}'], function ($lang) {

    Route::get('/', function ($lang) {
        \App::setLocale($lang);
        return view('fe.pages.home.index');
    })->name('index');

    Route::get('/home', function ($lang) {
        \App::setLocale($lang);
        return view('fe.pages.home.index');
    })->name('home');

    Route::get('/about', function ($lang) {
        \App::setLocale($lang);
        return view('fe.pages.about.index');
    })->name('about');

    Route::get('/about/company', function ($lang) {
        \App::setLocale($lang);
        return view('fe.pages.about.company.index');
    })->name('about.company');

    Route::get('/about/member', function ($lang) {
        \App::setLocale($lang);
        return view('fe.pages.about.member.index');
    })->name('about.member');

    Route::get('/about/access', function ($lang) {
        \App::setLocale($lang);
        return view('fe.pages.about.access.index');
    })->name('about.access');


    Route::get('/product', function ($lang) {
        \App::setLocale($lang);
        return view('fe.pages.product.index');
    })->name('product');


    Route::get('/product/consulting', function ($lang) {
        \App::setLocale($lang);
        return view('fe.pages.product.consulting.index');
    })->name('product.consulting');

    Route::get('/product/integrator', function ($lang) {
        \App::setLocale($lang);
        return view('fe.pages.product.integrator.index');
    })->name('product.integrator');


    Route::get('/service', function ($lang) {
        \App::setLocale($lang);
        return view('fe.pages.service.index');
    })->name('service');


   /*  Route::get('/service/consulting', function ($lang) {
         \App::setLocale($lang);
         return view('fe.pages.service.consulting.index');
     })->name('service.consulting');*/


    // Route::get('/service/integrator', function ($lang) {
    //     \App::setLocale($lang);
    //     return view('fe.pages.service.integrator.index');
    // })->name('service.integrator');


    // Route::get('/service/marketing', function ($lang) {
    //     \App::setLocale($lang);
    //     return view('fe.pages.service.marketing.index');
    // })->name('service.marketing');

    



    Route::get('/contact', function ($lang) {
        \App::setLocale($lang);
        return view('fe.pages.contact.index');
    })->name('contact');
});

Route::get('/', function () {
    return view('fe.pages.home.index');
})->name('index');

// Route::get('/home', function () {
//     return view('fe.pages.home.index');
// })->name('home');

// Route::get('/about', function () {
//     return view('fe.pages.about.index');
// })->name('about');

// Route::get('/about/company', function () {
//     return view('fe.pages.about.company.index');
// })->name('about.company');

// Route::get('/about/member', function () {
//     return view('fe.pages.about.member.index');
// })->name('about.member');

// Route::get('/about/access', function () {
//     return view('fe.pages.about.access.index');
// })->name('about.access');

// Route::get('/service', function () {
//     return view('fe.pages.service.index');
// })->name('service');

// Route::get('/service/consulting', function () {
//     return view('fe.pages.service.consulting.index');
// })->name('service.consulting');

// Route::get('/service/integrator', function () {
//     return view('fe.pages.service.integrator.index');
// })->name('service.integrator');

// Route::get('/service/marketing', function () {
//     return view('fe.pages.service.marketing.index');
// })->name('service.marketing');

// Route::get('/product', function () {
//     return view('fe.pages.product.index');
// })->name('product');

// Route::get('/contact', function () {
// 	return view('fe.pages.contact.index');
// })->name('contact');