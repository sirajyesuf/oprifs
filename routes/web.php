<?php

use App\Http\Controllers\ContactUsController;
use App\Livewire\AboutUsPage;
use App\Livewire\ContactUs;
use App\Livewire\DocumentPage;
use App\Livewire\DonateDetailPage;
use App\Livewire\DonatePage;
use App\Livewire\GalleryPage;
use App\Livewire\HomePage;
use App\Livewire\NewsDetailPage;
use App\Livewire\NewsPage;
use App\Livewire\VolunterPage;
use Illuminate\Support\Facades\Route;

Route::get('/', HomePage::class);
Route::get('/contactus', ContactUs::class);
// Route::post('contactus_via_email',[ContactUsController::class,'sendEmail']);
Route::get('/gallery', GalleryPage::class);
Route::get('/volunter', VolunterPage::class);

Route::get('/contents', NewsPage::class);
Route::get('/contents/{slug}', NewsDetailPage::class)->name('content_detail')
->middleware('increment.view');

Route::get('donate',DonatePage::class);
Route::get('donate/{slug}',DonateDetailPage::class)->name('donate.detail');
Route::get('aboutus',AboutUsPage::class);
Route::get('documents',DocumentPage::class);