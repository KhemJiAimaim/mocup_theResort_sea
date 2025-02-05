<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('/pages/home/home');
});

Route::group(['prefix' => 'room'], function () {
    Route::get('/', function () {
        return view('/pages/room/room');
    })->name('room.index');
    Route::get('/detail', function () {
        return view('/pages/room/detail_room');
    })->name('room.detail');
});

Route::group(['prefix' => 'service'], function () {
    Route::get('/', function () {
        return view('/pages/service_page/service');
    })->name('service.index');

    Route::get('/service-detail', function () {
        return view('/pages/service_page/service_deatil');
    })->name('service.detail');

    Route::get('/service-restaurant', function () {
        return view('pages.service_page.service_deatil', ['title' => 'restaurant']);
    })->name('service.restaurant');
    

    Route::get('/service-swimming', function () {
        return view('/pages/service_page/service_deatil', ['title' => 'Swimming pool']);
    })->name('service.swimming');

    Route::get('/service-wellness', function () {
        return view('/pages/service_page/service_deatil', ['title' => 'wellness & spa']);
    })->name('service.wellness');

    Route::get('/service-bars', function () {
        return view('/pages/service_page/service_deatil', ['title' => 'Bars']);
    })->name('service.bars');

    Route::get('/service-gardens', function () {
        return view('/pages/service_page/service_deatil', ['title' => 'Open Gardens']);
    })->name('service.gardens');

    Route::get('/service-meeting', function () {
        return view('/pages/service_page/service_deatil', ['title' => 'Meeting rooms']);
    })->name('service.meeting');
});



Route::get('/contact', function () {
    return view('/pages/contact/contact');
});

Route::get('/gallery', function () {
    return view('/pages/gallery/gallery');
});

Route::get('/about-us', function () {
    return view('/pages/about_us/about_us');
});
