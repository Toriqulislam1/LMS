<?php

use Illuminate\Support\Facades\Route;
use App\Modules\provider\setting\Controllers\GeneralSettingController;


Route::group([],function () {

    Route::prefix('settings')->name('settings-')->group(function () {

    // General Settings
    Route::get('/general', [GeneralSettingController::class, 'general'])->name('general');
    Route::post('/general', [GeneralSettingController::class, 'updateGeneral'])->name('general-update');

    // SEO Settings
    // Route::get('/seo', [SettingController::class, 'seo'])->name('seo');
    // Route::post('/seo', [SettingController::class, 'updateSeo'])->name('seo.update');

    // // Email Settings
    // Route::get('/email', [SettingController::class, 'email'])->name('email');
    // Route::post('/email', [SettingController::class, 'updateEmail'])->name('email.update');

    // // Social Settings
    // Route::get('/social', [SettingController::class, 'social'])->name('social');
    // Route::post('/social', [SettingController::class, 'updateSocial'])->name('social.update');

    // // Security Settings
    // Route::get('/security', [SettingController::class, 'security'])->name('security');
    // Route::post('/security', [SettingController::class, 'updateSecurity'])->name('security.update');

    // // Payment Settings (Optional)
    // Route::get('/payment', [SettingController::class, 'payment'])->name('payment');
    // Route::post('/payment', [SettingController::class, 'updatePayment'])->name('payment.update');
});

});
