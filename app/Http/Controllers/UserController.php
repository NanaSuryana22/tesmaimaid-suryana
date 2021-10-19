<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
      $response = Http::post('http://52.221.6.233:8006/user/read', [
        'page' => $request->page,
        'offset' => $request->offset,
      ]);
      
      dd($response);

      return view('welcome')->with('response', $response);
    }
}
