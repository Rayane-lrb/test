<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index() {
        $name = "Jan";
        $age = 40;
        $hobbies = [
            'Dev',
            'sport',
            'idk'
        ];
        $personInfo = [
                'name' => $name,
                'age' => $age,
                'hobbies' => $hobbies,
        ];
        $safe = '<p>niets te zeggen</p>';
        $unsafe = '<p>niets te zeggen</p>';

        $users = [
            ['name' => 'Bilal', 'email' => 'bilal.user@gmail.com'],
            ['name' => 'Nuseyba', 'email' => 'Nuseyba.user@gmail.com'],
            ['name' => 'Tom', 'email' => 'Tom.user@gmail.com'],
            ['name' => 'Rayane', 'email' => 'rayane.user@gmail.com']
        ];
        return view('about', ['personInfo' => $personInfo, 'safe' => $safe, 'unsafe' => $unsafe, 'users' => $users]);
    }
}
