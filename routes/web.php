<?php

use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

Route::get('users/{name}', [UsersController::class, 'show'])->whereIn('name', [__('Elan Ceres'), __('Guel Jeturk'), __('Miorine Rembran'), __('Shaddiq Zenelli'), __('Suletta Mercury')]);
