<?php

use App\Http\Controllers\VisitsController;
use Illuminate\Support\Facades\Route;

Route::get('admin/activity', [VisitsController::class, 'index']);

Route::get('/{any}', function () {
    abort(404);
})->where('any', '.*');
