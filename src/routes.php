<?php

use Illuminate\Support\Facades\Route;
use NyeinChangithub\MyPackage\MyPackageController;

Route::get('my-package', function () {
    return 'Hello from the myPackage package';
});
Route::post('/mypackage/cloudflare-upload', [MyPackageController::class, 'uploadToCloudflare'])->name('myPackage.cloudflare.upload');
Route::get('/mypackage/cloudflare-image/{id}', [MyPackageController::class, 'getImageFromCloudflare'])->name('myPackage.cloudflare.image');
Route::delete('/mypackage/cloudflare-delete/{id}', [MyPackageController::class, 'deleteFromCloudflare'])->name('myPackage.cloudflare.delete');
