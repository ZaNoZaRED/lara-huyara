<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Symfony\Component\Console\Logger\ConsoleLogger;

class LoginController extends Controller
{
    public function showLoginForm() //показ формы входа
    {
        return view('login'); //возвращаем вьюшку с названием  login
    }

    public function login(Request $request) //определяем метод, который принимает объект в  качестве параметра
    //Request это класс, а $request имя переменной которая хранит экземпляр класса
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        
        if (Auth::attempt($request->only('email', 'password'))) {
            //Auth::attempt-метод аутентифицировать пользователя с использованием 
            //только email и password из объекта $request 
            return redirect()->intended('/');
            //если все ок переотправка на страницу
            }

        return back()->withErrors(['email' => 'Неверные учетные данные.']);
        //withErrors сообщение об ошибке
    }

    public function logout ()
    {
        Auth::logout();
        return back();
    }
}
