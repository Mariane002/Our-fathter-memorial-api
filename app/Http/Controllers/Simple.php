<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Simple extends Controller
{
    public function index()
    {
        $fakeData = [
            'id'=> 1,
            'name' => 'Test web',
            'contact' => '09231023'
        ];
        
        return response()-> json($fakeData);
    }
}