@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="border-radius: 30px;">
                <div style="margin-left:auto; margin-right:auto; margin-top:20px;">
                    <a>
                        <img src="icon/profile-svgrepo-com.svg" style="margin-left: 8px;">
                        <p class="">REGISTRASI</p>
                    </a>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                    
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('NAMA') }}</label>

                            <div class="col-md-6">
                                <select name="id_users" class="form-control @error('id_users') is-invalid @enderror"
                                    id="">
                                    @foreach ($user as $data)
                                        <option value="{{ $data->id }}">{{ $data->name }}</option>
                                    @endforeach
                                </select>
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="nomorinduk" class="col-md-4 col-form-label text-md-end">{{ __('NRP') }}</label>

                            <div class="col-md-6">
                                <select name="nrp" class="form-control @error('nrp') is-invalid @enderror"
                                    id="">
                                    @foreach ($user as $data)
                                        <option value="{{ $data->id }}">{{ $data->nomorinduk }}</option>
                                    @endforeach
                                </select>
                                @error('nomorinduk')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <select name="email" class="form-control @error('email') is-invalid @enderror"
                                    id="">
                                    @foreach ($user as $data)
                                        <option value="{{ $data->id }}">{{ $data->email }}</option>
                                    @endforeach
                                </select>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="username" class="col-md-4 col-form-label text-md-end">{{ __('Username') }}</label>

                            <div class="col-md-6">
                                <select name="username" class="form-control @error('username') is-invalid @enderror"
                                    id="">
                                    @foreach ($user as $data)
                                        <option value="{{ $data->id }}">{{ $data->username }}</option>
                                    @endforeach
                                </select>
                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="id_users" class="col-md-4 col-form-label text-md-end">{{ __('No Tlp') }}</label>

                            <div class="col-md-6">
                                <select name="id_users" class="form-control @error('idz-prodis') is-invalid @enderror"
                                    id="">
                                    @foreach ($user as $data)
                                        <option value="{{ $data->id }}">{{ $data->no_tlp }}</option>
                                    @endforeach
                                </select>
                                @error('id_users')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="id_prodis" class="col-md-4 col-form-label text-md-end">{{ __('Prodi') }}</label>
                            <select name="id_prodis" class="form-control @error('id_prodis') is-invalid @enderror"
                                id="">
                                @foreach ($prodi as $data)
                                    <option value="{{ $data->id }}">{{ $data->nama }}</option>
                                @endforeach
                            </select>
                            @error('id_prodis')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        {{-- <div class="mb-3">
                            <label for="no_tlp" class="col-md-4 col-form-label text-md-end">{{ __('Kelas') }}</label>
                            <select name="id_kelas" class="form-control @error('id_kelas') is-invalid @enderror"
                                id="">
                                @foreach ($kelas as $data)
                                    <option value="{{ $data->id }}">{{ $data->nama_kls }}</option>
                                @endforeach
                            </select>
                            @error('id_kelas')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div> --}}

                        {{-- <div class="mb-3">
                            <label for="no_tlp" class="col-md-4 col-form-label text-md-end">{{ __('Semester') }}</label>
                            <select name="id_semesters" class="form-control @error('id_semesters') is-invalid @enderror"
                                id="">
                                @foreach ($semester as $data)
                                    <option value="{{ $data->id }}">{{ $data->tingkat }}</option>
                                @endforeach
                            </select>
                            @error('id_semesters')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div> --}}


                        {{-- <div class="row mb-3">
                            <label for="foto" class="col-md-4 col-form-label text-md-end">{{ __('foto') }}</label>

                            <div class="col-md-6">
                                <input id="foto" type="text" class="form-control @error('foto') is-invalid @enderror" name="foto" value="{{ old('foto') }}" required autocomplete="foto" autofocus>

                                @error('foto')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> --}}

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
