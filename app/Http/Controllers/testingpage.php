<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testingpage extends Controller
{
    public function frontpage(){
        return view('Pages.frontpage');
    }
    public function about(){
        return view('Pages.about');
    }
    public function contact(){
        return view('Pages.contact');
    }
    public function services(){
        $data= array(
            'title' => 'Digital marketing',
            'services'=>['Data analytics','Machine learning']
        );
        return view('Pages.services')->with($data);
    }
}
