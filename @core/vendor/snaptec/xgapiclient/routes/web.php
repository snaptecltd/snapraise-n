<?php

Route::get('/license-activation', [\Snaptec\XgApiClient\Http\Controllers\ActivationController::class, 'licenseActivation'])->name('license.activation');
Route::post('/license-activation-update', [\Snaptec\XgApiClient\Http\Controllers\ActivationController::class, 'licenseActivationUpdate'])->name('license.activation.update');
Route::get('/check-update', [\Snaptec\XgApiClient\Http\Controllers\SystemUpgradeController::class, 'checkSystemUpdate'])->name('check.system.update');
Route::post('/download-update/{productId}/{tenant}', [\Snaptec\XgApiClient\Http\Controllers\SystemUpgradeController::class, 'updateDownloadLatestVersion'])->name('update.download');

