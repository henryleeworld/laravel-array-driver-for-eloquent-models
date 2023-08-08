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
        echo '查詢名稱：' . $name . PHP_EOL;
        $user = User::whereName($name)->first();
        echo '符合查詢名稱第一筆資料的名稱：「' . $user->name . '」、聲優：「' . $user->cv . '」、所屬宿舍：「' . $user->affiliation . '」、機體：「' . $user->mobile_suit . '」、資料：「' . $user->data . '」' . PHP_EOL;  
    }
}
