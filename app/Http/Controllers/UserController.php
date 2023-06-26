<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class UserController extends BaseController
{
    public function getAbout($theAbout){
        return 'Toi la Cong Viet '.$theAbout;
    }
    public function getUser(){
        return 'Toi la Viet';
    }
}
