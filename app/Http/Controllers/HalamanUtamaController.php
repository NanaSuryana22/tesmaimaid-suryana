<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;
use Session;
use App\Http\Requests\UserRequest;

class HalamanUtamaController extends Controller
{
    public function index(Request $request)
    {
      $response = Http::post('http://52.221.6.233:8006/user/read');
      
      $datas = $response['data']['rows'];

      return view('halaman_utama.index')->with('datas', $datas);
    }

    public function create()
    {
        return view('halaman_utama.create');
    }

    public function store(UserRequest $request)
    {
        $response = Http::asForm()->post('http://52.221.6.233:8006/user/create', [
            'fullname' => $request->fullname,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'gender' => $request->gender,
            'dob' => $request->dob
        ]);
        Session::flash("notice", "Berhasil create data.");
        return redirect()->route("halaman_utama.index");
    }

    public function edit($id) {
        $response = Http::asForm()->post('http://52.221.6.233:8006/user/view', [
            'id' => $id
        ]);
        $data = $response['data'];
        return view('halaman_utama.edit')->with('data', $data);
    }

    public function update(UserRequest $request, $id)
    {
        $response = Http::asForm()->post('http://52.221.6.233:8006/user/update', [
            'id' => $id,
            'fullname' => $request->fullname,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'gender' => $request->gender,
            'dob' => $request->dob
        ]);

        Session::flash("notice", "Berhasil update data.");
        return redirect()->route("halaman_utama.index");
    }

    public function show($id)
    {
        $response = Http::asForm()->post('http://52.221.6.233:8006/user/view', [
            'id' => $id
        ]);
        $data = $response['data'];
        return view('halaman_utama.show')->with('data', $data);
    }
}
