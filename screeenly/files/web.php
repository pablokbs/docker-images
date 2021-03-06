<?php

Route::get('/', function () {
    if (! auth()->check()) {
        return view('welcome');
    }

    return redirect('dashboard');
});

Auth::routes(['register' => env('ENABLE_REGISTER', false)]);

if (env('APP_ENV') === 'production') {
    \URL::forceScheme('https');
}

// Looking for Route specific to Screeenly?
// They moved here:
// /modules/Screeenly/Http/routes/
