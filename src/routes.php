<?php

use Illuminate\Support\Facades\Route;
use Nyeinchangithub\MyPackage\MyPackageController;

Route::get('my-package', function () {
    return 'Hello from the myPackage package';
});

// Route::get('add/{a}/{b}',[ NyeinChangithub\MyPackage\MyPackageController::class,'add']);
// Route::get('subtract/{a}/{b}',[ NyeinChangithub\MyPackage\MyPackageController::class ,'subtract']);

Route::prefix('mypackage')->group(function () {
    Route::get('/', [MyPackageController::class, 'index']);
    Route::post('/upload', [MyPackageController::class, 'upload'])->name('myPackage.upload');
});

Route::post('/mypackage/cloudflare-upload', [MyPackageController::class, 'uploadToCloudflare'])->name('myPackage.cloudflare.upload');
Route::get('/mypackage/cloudflare-image/{id}', [MyPackageController::class, 'getImageFromCloudflare'])->name('myPackage.cloudflare.image');
Route::delete('/mypackage/cloudflare-delete/{id}', [MyPackageController::class, 'deleteFromCloudflare'])->name('myPackage.cloudflare.delete');
