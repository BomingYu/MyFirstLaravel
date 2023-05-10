<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //
    public function controllerTry(){
        return 'This is the try of my first Laravel conntroller page';
    }

    public function aboutPage(){
        $name = 'Review name';
        $js = 'ScriptCodeHere';
        return view('pages.aboutPage',['name'=>$name, 'js'=>$js]);
    }

    public function listShownPage(){
        $myList=['first','second','third','fourth','fifth'];
        return view('pages.anotherPageShow',['myList'=>$myList]);
    }

}
