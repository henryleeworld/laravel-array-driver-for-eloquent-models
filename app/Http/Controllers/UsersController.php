<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class UsersController extends Controller
{
    public function show(string $name) 
    {
        echo __('Query name:') . $name . PHP_EOL;
        $user = User::whereName($name)->first();
        echo __('The name that matches the first data of the query name: "') . $user->name . __('", character voice: "') . $user->cv . __('", affiliation: "') . $user->affiliation . __('", mobile suit: "') . $user->mobile_suit . __('", data: "') . $user->data . __('"') . PHP_EOL;  
    }
}
