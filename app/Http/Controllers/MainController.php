<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    function showIndex() {
        return view('home');
    }

    function showArray() {
        $array = [
            ['id' => 1, 'title' => 'продукт 1', 'price' => 500, 'path' => 'pict1.jpg'],
            ['id' => 2, 'title' => 'продукт 2', 'price' => 500, 'path' => 'pict2.jpg'],
            ['id' => 3, 'title' => 'продукт 3', 'price' => 500, 'path' => 'pict3.jpg'],
        ];
        return view('home', compact('array'));
    }
}
