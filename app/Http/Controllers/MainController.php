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
            ['id' => 1, 'title' => 'Фотка Жорика 1', 'price' => 500, 'path' => 'image1.jpg'],
            ['id' => 2, 'title' => 'Фотка Жорика 2', 'price' => 500, 'path' => 'image2.jpg'],
            ['id' => 3, 'title' => 'Фотка Жорика 3', 'price' => 500, 'path' => 'image3.jpg'],
        ];
        return view('array', compact('array'));
    }
}
