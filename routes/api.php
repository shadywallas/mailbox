<?php

use Illuminate\Http\Request;
Route::get('messages/archived',['uses' => 'MailBox@archived', 'as' => 'api.messages.archived']);
Route::get('messages/{any}/read',['uses' => 'MailBox@read', 'as' => 'api.messages.archived']);
Route::get('messages/{any}/archive',['uses' => 'MailBox@archive', 'as' => 'api.messages.archived']);

Route::resource('messages', 'MailBox');

