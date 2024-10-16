<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function showIndex(){
        return view("home");
    }

    public function showArray(){
        // return view("array");
        $array = [
            [
                'id' => 1,
                'title' => 'продукт 1',
                'price' => 500,
                'path' => 'img/img1.jfif'
            ],
            [
                'id' => 2,
                'title' => 'продукт 2',
                'price' => 300,
                'path' => 'img/img1.jfif'
            ]
        ];
        return view('array', compact('array'));
    }
}
