<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class Test extends Controller{
    // Задача 3.8
    public function sum($num1, $num2){
        return $num1+$num2;
    }
}