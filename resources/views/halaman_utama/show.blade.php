@extends('layout.master')
@section('title', "Data User")
@section('content')
  <br />
  @include('layout.notice')
  <div class="card">
    <div class="card-header">
      Detail Information
    </div>
    <div class="card-body">
      <p class="card-text">Fullname : {{ $data['fullname'] }}</p>
      <p class="card-text">Email : {{ $data['email'] }}</p>
      <p class="card-text">Gender : {{ $data['gender'] == 1 ? 'Pria' : 'Wanita' }}</p>
      <p class="card-text">Date Of Brithday : {{ $data['dob'] }}</p>
      <p class="card-text">Join Date : {{ $data['created_date'] }}</p>
      <a href="{{route('halaman_utama.index')}}" class="btn btn-primary pull-right">Kembali</a>
    </div>
  </div>
@endsection
