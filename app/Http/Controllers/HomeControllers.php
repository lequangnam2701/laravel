<?php
namespace App\Htpp\Controllers;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;


class HomeController  extends BaseController {

    public function showWelcome() {
        return 'Home Controller';
    }
}