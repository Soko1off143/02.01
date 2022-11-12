<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestController extends Controller {
    public function show() {
        return 'TestController';
    }

    // Задача 4.1
    public function show1() {
        return view('test.show');
    }

    // Задача 4.2
    public function show2() {
        return view('test.show', ['name'=>'Kirill', 'surname'=>'Sokolov']);
    }

    // Задача 5.1
    public function show3() {
        return view('test.show', ['name'=>'Kirill', 'age'=>18, 'salary'=>188000]);
    }

    // Задача 5.5
    public function show4() {
        return view('test.show', ['text'=>'ОмАЭиП', 'href'=>'https://omacademy.ru/']);
    }

    // Задача 5.6
    public function show5() {
        return view('test.show', ['day'=>20, 'month'=>'09', 'year'=>2021]);
    }

    // Задача 5.7
    public function show6() {
        return view('test.show', ['arr'=>['name'=>'Kirill', 'age'=> 18, 'salary'=>188000]]);
    }

    // Задача 5.8
    public function show7() {
        return view('test.show', ['arr'=>[1,2,1,3,4,5]]); // 6 Элементов
    }

    // Задача 5.9
    public function show8($city='Москва') {
        return view('test.show', ['city'=>$city]);
    }

    // Задача 5.10
    public function show9($country='Франция', $city='Париж') {
        return view('test.show', ['arr'=>['country'=>$country, 'city'=>$city]]);
    }

    /* Проверка на существование и задание 5.11

        @if(isset($year))
            {{$year}}
        @else
            {{date('Y')}}
        @endif
    */
    public function show10() {
        return view('test.show', ['year'=>2000, 'month'=>6, 'day'=>12]);
    }

    // Задача 5.12
    public function show11() {
        return view("test.show", ['str'=>'<h1>Строка</h1>']);
    }

    /* Задача 5.14

        @php
        foreach($arr as $count){
        echo $count."<br>";
        }
        @endphp
    */
    public function show12() {
        return view("test.show", ['arr'=>[1,2,4,5]]);
    }

    /* Задача 6.1 и 6.2

        @if ($num == 6)
            Суббота
        @endif
        @if ($num == 7)
            Воскресенье
        @endif
    */
    public function show13($num) {
        return view('test.show', ['num'=>$num]);
    }

    /* Задача 6.3

        @if ($num >= 6)
            Выходной день
        @elseif ($num <= 5)
            Рабочий день
        @endif
    */
    public function show14($num) {
        return view('test.show', ['num'=>$num]);
    }

    /* Задача 6.4

        @if($num<=2)
            Зима
        @elseif ($num <= 5 || $num <= 3)
            Весна
        @elseif ($num <= 8)
            Лето
        @elseif ($num <= 11)
            Осень
        @else
            Зима
        @endif
    */
    public function show15($num) {
        return view('test.show', ['num'=>$num]);
    }

    /* Задача 6.5

        @unless ($num >= 18)
            Вы несовершеннолетний
        @else
            Вы совершеннолетний
        @endunless
    */
    public function show16($num) {
        return view('test.show', ['num'=>$num]);
    }

    /* Задача 6.6

        @if (count($arr) > 0)
            @php
            $sum = 0;
            @endphp
            @for ($i = 0; $i < count($arr); $i++)
            @php
                $sum += $arr[$i];
            @endphp
            @endfor
            @php
                echo $sum;
            @endphp
            @else
                Количество элементов в массиве = 0
        @endif
    */
    public function show17() {
        return view('test.show', ['arr'=>[1,2,3]]);
    }

    /* Задача 7.1, 7.2 и 7.3

        <ul>
            Квадрат чисел
            @foreach ($arr as $elem)
                <li>{{$elem*$elem}}</li>
            @endforeach
            Квадратный корень чисел
            @foreach ($arr as $elem)
                <li>{{sqrt($elem)}}</li>
            @endforeach
        </ul>
    */
    public function show18() {
        return view('test.show', ['arr'=>[1,2,3,4,5]]);
    }

    /* Задача 7.4 и 7.5

        <ul>
            @foreach ($arr as $key => $elem)
                <li>Ключ: {{$key+1}}, Значение: {{$elem}}</li>
            @endforeach
        </ul>
    */
    public function show19() {
        return view('test.show', ['arr'=>['Привет', 'Это', 'Значения', 'Массива', 'Arr']]);
    }

    /* Задача 7.6

        <ul>
            @foreach ($arr as $elem)
                @if (($elem % 2) == 0)
                    <li>{{$elem}}</li>
                @endif
            @endforeach
        </ul>
    */
    public function show20(){
        return view('test.show', ['arr'=>[1,-2,-3,4,5]]);
    }

    /* Задача 7.7

        @if (is_array($data))
            <ul>
                @foreach ($data as $elem)
                    <li>{{$elem}}</li>
                @endforeach
            </ul>
        @else
            @php
                echo $data;
            @endphp
        @endif
    */
    public function show21() {
        return view('test.show', ['data'=>[1,2,3]]);
    }

    /* Задача 7.8

        <table>
            @foreach ($arr as $subArr)
                <tr>
                    @foreach ($subArr as $elem)
                        <td>{{$elem}}</td>
                    @endforeach
                </tr>
            @endforeach
        </table>
    */
    public function show22() {
        return view('test.show', ['arr'=>[[1,2,3,4,5], [6,7,8,9,10], [11,12,13,14,15], [16,17,18,19,20], [21,22,23,24,25]]]);
    }

    /* Задача 7.9 и 7.10

        <table>
            @foreach ($employees as $subEmployee)
                <tr>
                    @foreach ($subEmployee as $elem)
                        <td>{{$elem}}</td>
                    @endforeach
                </tr>
            @endforeach
        </table>
    */
    public function show23() {
        return view('test.show', ['employees'=> [
            [
                'name' => 'user1',
                'surname' => 'surname1',
                'salary' => 1000,
            ],
            [
                'name' => 'user2',
                'surname' => 'surname2',
                'salary' => 2000,
            ],
            [
                'name' => 'user3',
                'surname' => 'surname3',
                'salary' => 3000,
            ],
        ]]);
    }

    /* Задача 7.11, 7.12 и 7.13

    <style>
    .first {
        color: red;
    }
    .last {
        color: green;
    }
    </style>
        <ul>
            @foreach ($arr as $elem)
                @if ($loop->first)
                    <li class='first'>Значение: {{$elem}}, Итерация + 1: {{$loop->iteration}}
                @elseif ($loop->last)
                    <li class='last'>Значение: {{$elem}}, Итерация + 1: {{$loop->iteration}}</li>
                @else
                    <li>Значение: {{$elem}}, Итерация + 1: {{$loop->iteration}}</li>
                @endif
            @endforeach
        </ul>
    */
    public function show24() {
        return view('test.show', ['arr'=>['First', 'Second', 'Third', 'Fourth', 'Fifth']]);
    }

    /* Задача 7.14
        @foreach ($arr as $elem)
            @if ($loop->remaining <= 2)
                <i>{{$elem}}</i>
            @else
                <b>{{$elem}}</b>
            @endif
        @endforeach
    */
    public function show25() {
        return view('test.show', ['arr'=>[1,2,3,4,5,6,7,8]]);
    }

    /* Задача 7.16
        @forelse ($arr as $elem)
            <p>{{$elem}}</p>
        @empty
            <p>В массиве нет элементов</p>
        @endforelse
    */
    public function show26() {
        return view('test.show', ['arr'=>[1,2,3,4,5]]);
    }

    /* Задача 7.17
        @for ($i=1; $i<11; $i++)
            <p>Число: {{$i}}</p>
        @endfor
    */
    public function show27() {
        return view('test.show');
    }

    // Задача 8.1
    public function show28() {
        return view('layouts.main1', ['aside'=>'Переменная']);
    }

    /* Задача 9.1 и 9.2

        <ul>
            @foreach ($links as $subLinks)
                <li><a href="{{$subLinks['href']}}" target='_blank'>{{$subLinks['text']}}</a></li>
            @endforeach
        </ul>
    */
    public function show29() {
        return view('test.show', ['links' => [
            [
                'text' => 'ОмАЭиП',
                'href' => 'https://omacademy.ru/',
            ],
            [
                'text' => 'ВКонтакте',
                'href' => 'https://vk.com',
            ],
            [
                'text' => 'YouTube',
                'href' => 'https://www.youtube.com/',
            ],
        ]]);
    }

    /* Задача 9.3, 9.4, 9.5 и 9.6

        <table>
            <tr>
                <th>Порядковый номер</th>
                <th>Имя</th>
                <th>Фамилия</th>
                <th>Зарплата</th>
            </tr>
            @foreach ($employees as $subEmployees)
                <tr>
                    @if ($subEmployees['salary'] > 2000)
                        <td>{{$loop->iteration}}</td>
                        @foreach ($subEmployees as $elem)
                            <td>{{$elem}}</td>
                        @endforeach
                    @endif
                </tr>
            @endforeach
        </table>
    */
    public function show30() {
        return view('test.show', ['employees' => [
            [
                'name' => 'user1',
                'surname' => 'surname1',
                'salary' => 1000,
            ],
            [
                'name' => 'user2',
                'surname' => 'surname2',
                'salary' => 2000,
            ],
            [
                'name' => 'user3',
                'surname' => 'surname3',
                'salary' => 3000,
            ],
            [
                'name' => 'user4',
                'surname' => 'surname4',
                'salary' => 4000,
            ],
            [
                'name' => 'user5',
                'surname' => 'surname5',
                'salary' => 5000,
            ],
        ]]);
    }

    /* Задача 9.7 и 9.8

    <style>
        .bad {
            color: red;
        }
        .good {
            color: green
        }
    </style>

        <table>
            <tr>
                <th>Имя</th>
                <th>Фамилия</th>
                <th>Статус</th>
            </tr>
            @foreach ($users as $subUsers)
                <tr>
                    @foreach ($subUsers as $elem)
                        @if ($subUsers['banned'] == true)
                            @if ($loop->iteration % 3 == 0)
                                <td class='bad'>Забанен</td>
                            @else
                                <td class='bad'>{{$elem}}</td>
                            @endif
                        @else
                            @if ($loop->iteration % 3 == 0)
                                <td class='good'>Активен</td>
                            @else
                                <td class='good'>{{$elem}}</td>
                            @endif
                        @endif
                    @endforeach
                </tr>
            @endforeach
        </table>
    */
    public function show31() {
        return view('test.show', ['users' => [
            [
                'name' => 'user1',
                'surname' => 'surname1',
                'banned' => true,
            ],
            [
                'name' => 'user2',
                'surname' => 'surname2',
                'banned' => false,
            ],
            [
                'name' => 'user3',
                'surname' => 'surname3',
                'banned' => true,
            ],
            [
                'name' => 'user4',
                'surname' => 'surname4',
                'banned' => false,
            ],
            [
                'name' => 'user5',
                'surname' => 'surname5',
                'banned' => false,
            ],
        ]]);
    }

    /* Задание 9.9

        @foreach ($arr as $elem)
            <input type="button" value="{{$elem}}"/>
        @endforeach
    */
    public function show32() {
        return view('test.show', ['arr'=>['First', 'Second', 'Third', 'Fourth', 'Fifth']]);
    }

    /* Задание 9.10
        <select>
            @foreach ($arr as $elem)
                <option>{{$elem}}</option>
            @endforeach
        </select>
    */
    public function show33() {
        return view('test.show', ['arr'=>['First', 'Second', 'Third', 'Fourth', 'Fifth']]);
    }

    /* Задание 9.11

    <style>
        .active {
            color: red;
        }
    </style>
        <ul>
            @foreach ($arr as $elem)
                @if ($elem == date("d"))
                    <li class='active'>{{$elem}}</li>
                @else
                    <li>{{$elem}}</li>
                @endif
            @endforeach
        </ul>
    */
    public function show34() {
        return view('test.show', ['arr' => [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31]]);
    }

    /* Задание 11
        1 input */
    public function form(Request $request) {
        //$text = $request->text;

        // Если форма была отправлена и есть поле text:
        if ($request->has('text')){
            var_dump($request->input('text'));
        }
        else {
            echo 'Пусто';
        }
        return view('test.form');
    }

    /* Задание 11.1
        1 input */
    public function form1(Request $request) {
        if ($request->has('text')){
            $num = $request->text;
            echo $num*$num;
        }
        else {
            return view('test.form');
        }
    }

    /* Задание 11.1
        2 input */
    public function form2(Request $request) {
        if ($request->has('text1') && $request->has('text2')){
            $num = $request->text1 + $request->text2;
            echo $num;
        }
        else {
            return view('test.form');
        }
    }

    // Два действия для формы
    public function form3() {
        return view('test.form');
    }

    public function result(Request $request) {
        $text = $request->input('text');
        return view('test.result', ['text' => $text]);
    }

    /* Задание 11.3
        3 input */
    public function form4() {
        return view('test.form');
    }

    public function result1(Request $request) {
        $num1 = $request->input('num1');
        $num2 = $request->input('num2');
        $num3 = $request->input('num3');
        return view('test.result', ['num1' => $num1, 'num2' => $num2, 'num3' => $num3]);
    }

    // Задание 12.1
    public function form5() {
        return view('test.form');
    }

    public function result2(Request $request) {
        $text = $request->input('text');
        return view('test.result', ['text' => $text]);
    }

    // Задание 12.2
    public function form6() {
        return view('test.form');
    }

    public function result3(Request $request) {
        $method = $request->method();
        return view('test.result', ['method' => $method]);
    }

    // Задание 12.3
    // {{ csrf_field() }} Защита от атак на форму
    public function form7() {
        return view('test.form');
    }

    public function result4(Request $request) {
        $method = $request->method();
        return view('test.result', ['method' => $method]);
    }

    // Задание 12.4
    public function form8(Request $request) {
        if ($request->isMethod('get')) {
            return view('test.form');
        }

        if ($request->isMethod('post')) {
            $num1 = $request->input('num1');
            $num2 = $request->input('num2');
            return view('test.result', ['num1' => $num1, 'num2' => $num2]);
        }
    }

    // Задание 13.1
    public function form9(Request $request) {
        if ($request->isMethod('get')) {
            return view('test.form');
        }

        if ($request->isMethod('post')) {
            $data = $request->all();
            return view('test.result', ['data' => $data]);
        }
    }

    // Задание 13.2
    public function form10(Request $request) {
        if ($request->isMethod('get')) {
            return view('test.form');
        }

        if ($request->isMethod('post')) {
            $data = $request->only('name', 'surname', 'login'); // Какие значения хотим получить
            //$data = $request->except('pass', 'email'); //Какие значения исколючить
            return view('test.result', ['data' => $data]);
        }
    }

    // Задание 13.3
    public function form11(Request $request, $name, $surname) {
        if ($request->isMethod('get')) {
            return view('test.form');
        }

        if ($request->isMethod('post')) {
            $data = $request->all();
            return view('test.result', ['data' => $data, 'name' => $name, 'surname' => $surname]);
        }
    }

    // Задание 13.4 - 13.8
    public function form12(Request $request) {
        $path = $request->path();
        $url = $request->url();
        $fullurl = $request->fullUrl();
        $query = $request->fullUrlWithQuery(['page' => 1]);
        return view('test.form', ['path' => $path, 'url' => $url, 'fullurl' => $fullurl, 'query' => $query]);
    }

    // Задание 14.1, 14.2
    public function session(Request $request) {
        $value = $request->session()->get('key');
        if ($value == null) {
            $value = 1;
        } else {
            $value++;
        }
        $request->session()->put('key', $value);
        echo $value;
    }

    // Задание 14.3
    public function session1(Request $request) {
        $value = $request->session()->get('counter', 1);
        echo $value;
        $request->session()->put('counter', $value + 1);
    }

    // Задание 14.4
    public function session2(Request $request) {
        $value = $request->session()->get('timer');
        if ($value == null) {
            $value = time();
            $request->session()->put('timer', $value);
        }
        echo date("H:i:s", $value);
    }

    // Задание 14.5
    public function session3(Request $request) {
        $request->session()->put('arr', ['1', '2', '3']);
        $request->session()->push('arr', '4');
        $value = $request->session()->get('arr');
        foreach ($value as $elem) {
            echo $elem." ";
        }
    }

    // Задание 14.6
    public function session4(Request $request) {
        $request->session()->put('key', 20);
        $value = $request->session()->get('key');
        $request->session()->forget('key');
        $valueForget = $request->session()->get('key');
        echo $value;
        echo $valueForget; // Не появиться т.к. переменная key удалена
    }

    // Задание 14.7
    public function session5Create(Request $request) {
        $request->session()->put('key', 'Переменная');
    }

    public function session5(Request $request) {
        $this->session5Create($request);
        return view('test.session', ['arr' => $request->session()->pull('key')]);
    }

    // Задание 14.8
    public function session6(Request $request) {
        $request->session()->put('key', 'Очистка');
        $value = $request->session()->get('key');
        $request->session()->flush(); // Удаляет все данные в сессии
        $valueFlush = $request->session()->get('key');
        echo $value;
        echo $valueFlush; // Не появиться т.к. все данные сессии удалены
    }

    // Задание 14.9
    public function session7(Request $request) {
        $request->session()->put('key1', 'Первый ключ');
        $request->session()->put('key2', 'Второй ключ');
        $request->session()->put('key3', 'Третий ключ');
        $data = $request->session()->all();
        var_dump($data);
    }

    // Задание 14.10
    public function session8(Request $request) {
        /* Для проверки существования переменной сессии, даже если она равна null,
        можно использовать метод exists. Этот метод вернет true, если переменная
        существует */
        if ($request->session()->has('test')) {
            echo $request->session()->get('test');
        } else {
            $request->session()->put('test', 'Значение');
        }
    }

    // Задание 14.11 и 14.12
    public function session9(Request $request) {
        session(['key' => 'value']); // Сохранение данных в сессию
        $value = session('key'); // Получение данных из сессии
        echo $value;
    }

    // Задание 15.1
    public function redirect(Request $request) {
        if ($request->isMethod('get')) {
            return view('test.redirect.redirect');
        }

        if ($request->isMethod('post') && ($request->input('num') > 10 || $request->input('num') < 1 )) {
            echo 'Введено некорректное число';
            return view('test.redirect.redirect');
        } else {
            return redirect('/test/redirect/result');
        }
    }

    public function redirectResult() {
        return view('test.redirect.result');
    }

    // Задание 15.3
    public function redirect1(Request $request) {
        if ($request->isMethod('get')) {
            return view('test.redirect.redirect');
        }

        if ($request->isMethod('post')) {
            if ($request->has('email')) {
                return redirect()->route('march');
            }
            else {
                return view('test.redirect.redirect');
            }
        }
    }

    public function redirectResult1(Request $request) {
        return view('test.redirect.result');
    }

    // Задание 15.4
    public function redirect2(Request $request) {
        if ($request->isMethod('get')) {
            return view('test.redirect.redirect');
        }

        if ($request->isMethod('post')) {
            if ($request->has('email')) {
                return redirect()->route('march');
            }
            else {
                return view('test.redirect.redirect');
            }
        }
    }

    public function redirectResult2(Request $request) {
        return view('test.redirect.result');
    }
}
