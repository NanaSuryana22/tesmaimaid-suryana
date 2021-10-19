@extends('layout.master')
@section('title', "Tambah Data User")
@section('content')
<section class="basic-choices">
  <div class="row">
      <div class="col-12">
          <div class="card">
              <div class="card-header">
                <h4 class="card-title">Form Create User</h4>
              </div>
              <div class="card-content">
                  <div class="card-body">
                      <form class="form" action="{{ route('halaman_utama.store') }}" method="post"
                          enctype="multipart/form-data">
                          {{ csrf_field() }}
                          <div class="row">
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label for="fullname">Nama Lengkap (Fullname)</label>
                                      <input type="text" id="fullname"
                                          class="form-control @error('fullname') is-invalid @enderror"
                                          placeholder="ex : Mark Zugerberg.." name="fullname">
                                      @if($errors->has('fullname'))
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{$errors->first('fullname') }}</strong>
                                      </span>
                                      @endif
                                  </div>
                                  <br />
                                  <div class="form-group">
                                    <label for="gender">Jenis Kelamin</label><br />
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="radio" name="gender" id="gender" value="1" checked>
                                      <label class="form-check-label" for="gender">Pria</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="radio" name="gender" id="gender" value="2">
                                      <label class="form-check-label" for="gender">Wanita</label>
                                    </div>
                                    @if($errors->has('gender'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{$errors->first('gender') }}</strong>
                                    </span>
                                    @endif
                                  </div>
                                  <br />
                                  <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" id="password"
                                        class="form-control @error('password') is-invalid @enderror"
                                        placeholder="Masukan Password..." name="password">
                                    @if($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{$errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                  </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="email">Email</label>
                                  <input type="text" id="email"
                                      class="form-control @error('email') is-invalid @enderror"
                                      placeholder="ex : mark@gmail.com" name="email">
                                  @if($errors->has('email'))
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{$errors->first('email') }}</strong>
                                  </span>
                                  @endif
                                </div>
                                <br />
                                <div class="form-group">
                                  <label for="dob">Tanggal Lahir</label>
                                  <input type="date" id="dob"
                                      class="form-control @error('dob') is-invalid @enderror"
                                      placeholder="Masukkan tanggal lahir anda.." name="dob">
                                  @if($errors->has('dob'))
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{$errors->first('dob') }}</strong>
                                  </span>
                                  @endif
                                </div>
                                <p>
                                <div class="form-group">
                                  <label for="password_confirmation">Konfirmasi Password</label>
                                  <input type="password" id="password_confirmation"
                                      class="form-control @error('password_confirmation') is-invalid @enderror"
                                      placeholder="Konfirmasi Password.." name="password_confirmation">
                                  @if($errors->has('password_confirmation'))
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{$errors->first('password_confirmation') }}</strong>
                                  </span>
                                  @endif
                                </div>
                              </div>
                              <div class="col-md-12 mt-3">
                                <div class="form-check">
                                  <input class="form-check-input @error('accept') is-invalid @enderror" type="checkbox" value="true" id="accept" name="accept">
                                  <label class="form-check-label" for="accept">
                                    Saya menerima segala kebijakan dan bersedia tunduk / patuh terhadap segala aturan aplikasi ini.
                                  </label>
                                  @if($errors->has('accept'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{$errors->first('accept') }}</strong>
                                    </span>
                                  @endif
                                </div>
                                
                              </div>
                              <div class="col-md-6 mt-3">
                                <button type="submit" class="btn btn-md btn-primary float-left">Simpan</button>
                                <button type="reset" class="btn btn-md btn-warning float-right">Reset</button>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
@endsection