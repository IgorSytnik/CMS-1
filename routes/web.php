<?php

use Illuminate\Support\Facades\Route;
// use App\Models\motocycle;

// Route::get('/', 'MotocycleController@land'
// )->name('landing');

// Route::get('/motonews', function () {
//     return view('motonews');
// })->name('motonews');

// Route::get('/motoinfo', function () {
//     return view('motoinfo');
// })->name('motoinfo');

// Route::get('/motocontainer', function () {
//     return view('motocontainer');
// })->name('motocontainer');

// Route::get('/motostories', function () {
//     return view('motostories');
// })->name('motostories');

// Route::get('/motocontacts', function () {
//     return view('motocontacts');
// })->name('motocontacts');

// Route::get('/motoconteiner', function () {
//     return view('motoconteiner');
// })->name('motoconteiner');

// // список мотоциклов
// Route::get('/buying', 'MotocycleController@allMoto')->name('cards');

// // мотоцикл
// Route::get('/motobuying/{id}', 'MotocycleController@buying'
// )->name('motobuying');

// // список новостей
// Route::get('/news', 'MotocycleController@allNews')->name('cardsnews');

// // новость
// Route::get('/motosnews/{id}', 'MotocycleController@news1'
// )->name('motosnews');

// // список аксессуаров
// Route::get('/accs', 'MotocycleController@allAccs')->name('cardsac');

// // аксессуар
// Route::get('/motosacc/{id}', 'MotocycleController@acc1'
// )->name('motosacc');


Route::redirect('/', '/landing');

Route::resource('page', 'PageRes'
);

Route::redirect('/encyclopedia', '/encyclopedia/Bruh');

Route::get('/encyclopedia/{page}/{lan?}', 'PagesPathController@encLang'
)->name('encyclopedia');

Route::get('/{page}/{lan?}', 'PagesPathController@pagesLang'
)->name('pages');

