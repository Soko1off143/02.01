<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class Page extends Controller{
    // Задача 3.2
    public function showOne(){
        return 'Привет!';
    }

    // Задача 3.3
    public function showAll(){
        return 'Hello!';
    }

    // Задача 3.4
    public function showOne1($id=0){
        return $id;
    }

    // Задача 3.5 и 3.6
    public function showOne2($id=0){
        return $id*$id;
    }

    // Задача 3.7
    public function showOne3($id=0){
        $pages=[
            1=>'Страница 1',
            2=>'Страница 2',
            3=>'Страница 3',
            4=>'Страница 4',
            5=>'Страница 5',];
        if ($id>5){
            return 'Страница с таким номером не существует.';
        }
        else{
            return $pages[$id];
        }
        
    }
}
