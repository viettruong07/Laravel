<?php
namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
class HomeController extends BaseController{
    public function showWelcome(){
        return 'Home Controller TCV';
    }
}
