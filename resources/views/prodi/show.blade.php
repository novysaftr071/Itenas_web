@extends('layouts.koor')

@section('content')
    <div class="container" style="margin-top: 6%">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card">
                    <div class="card-header" style="background-color: rgba(253, 117, 41, 0.98); color: #000000;">
                        Data Prodi
                    </div>
                    <div class="card-body" style="background-color: rgba(253, 152, 79, 0.57);">
                        <div class="mb-3">
                            <label class="form-label">Nama</label>
                            <input type="text" class="form-control" name="name" value="{{ $prodi->name }}" readonly>
                        </div>

                        <div class="mb-3">
                            <div class="d-grid gap-2">
                                <a href="{{ route('prodi.index') }}" class="btn btn-light">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
