<?php
namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

class UserLogoutController extends Controller
{
    public function post()
    {
        $this->removeUserFromSession();
        return redirect()->route('home');
    }
}
