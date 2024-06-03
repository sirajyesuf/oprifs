<?php

use App\Http\Controllers\ContactUsController;
use App\Livewire\AboutUsPage;
use App\Livewire\ComingSoon;
use App\Livewire\ContactUs;
use App\Livewire\DocumentPage;
use App\Livewire\DonateDetailPage;
use App\Livewire\DonatePage;
use App\Livewire\GalleryPage;
use App\Livewire\HomePage;
use App\Livewire\NewsDetailPage;
use App\Livewire\NewsPage;
use App\Livewire\PartnersPage;
use App\Livewire\ProgramsPage;
use App\Livewire\ProjectPage;
use App\Livewire\Projects;
use App\Livewire\VolunterPage;
use Illuminate\Support\Facades\Route;

use App\Models\NewsLetterSubscriber;
use App\Mail\ContentPublishedNotification;
use App\Models\News;
use Illuminate\Support\Facades\Mail;

Route::get('/', HomePage::class);
Route::get('/contactus', ContactUs::class);
Route::get('/gallery', GalleryPage::class);
Route::get('/volunter', VolunterPage::class);

Route::get('/contents', NewsPage::class);
Route::get('/contents/{slug}', NewsDetailPage::class)->name('content_detail')
->middleware('increment.view');

Route::get('donate',DonatePage::class);
Route::get('donate/{slug}',DonateDetailPage::class)->name('donate.detail');

Route::get('aboutus',AboutUsPage::class);
Route::get('resources',DocumentPage::class);


Route::get('/projects',ProjectPage::class);
Route::get('/partners',PartnersPage::class);
Route::get('/programs',ProgramsPage::class);