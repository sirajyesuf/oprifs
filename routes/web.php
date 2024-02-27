<?php

use App\Http\Controllers\ContactUsController;
use App\Livewire\HomePage;
use App\Livewire\ContactUs;
use App\Livewire\GalleryPage;
use App\Livewire\NewsPage;
use App\Livewire\VolunterPage;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;



Route::get("/", HomePage::class);
Route::get("/contactus",ContactUs::class);
// Route::post('contactus_via_email',[ContactUsController::class,'sendEmail']);
Route::get("/gallery",GalleryPage::class);
Route::get("/volunter",VolunterPage::class);

Route::get("/news-stories",NewsPage::class);