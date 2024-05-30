<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePageCon;
use App\Http\Controllers\TicketCon;

Route::get('/',[HomePageCon::class, 'homepage'])->name('homepage');
Route::get('/about-us',[HomePageCon::class,'aboutUs'])->name('about-us');
Route::get('/member/{id}',[HomePageCon::class,'member'])->name('member');
Route::get('/ticket',[TicketCon::class, 'showTicket'])->name('show.ticket');
Route::post('/send-ticket',[TicketCon::class, 'sendTicket'])->name('send.ticket');