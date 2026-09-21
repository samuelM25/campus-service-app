<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Teams\TeamInvitationController;
use App\Http\Middleware\EnsureTeamMembership;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontrollers;
use App\Http\Controllers\ContactController;

Route::get('/',[Homecontrollers::class,'index'])->name('index');

Route::get('/contact',[Homecontrollers::class,'contact'])->name('contact');
Route::post('/store',[ContactController::class,'store'])->name('contact.store');

