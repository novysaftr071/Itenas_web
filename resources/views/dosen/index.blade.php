@extends('layouts.koor')
@section('content')
    <div class="container" style="margin-top: 6%">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card border-secondary">
                    <div class="card-header" style="background-color: rgba(253, 117, 41, 0.98); color: #000000;">
                        Data Siswa
                        <a href="{{ route('dosen.create') }}" class="btn btn-sm btn-light" style="float: right">
                            Tambah Data
                        </a>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive" style="background-color: rgba(234, 194, 166, 0.987); color: #000000;">
                            <table class="table align-middle" id="dataTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nip</th>
                                        <th>Prodi</th>
                                        <th>Nama Dosen</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach ($dosen as $data)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $data->user->nomorinduk }}</td>
                                            <td>{{ $data->prodi->nama }}</td>
                                            <td>{{ $data->user->name }}</td>
                                            <td>
                                                <form action="{{ route('dosen.destroy', $data->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <a href="{{ route('dosen.edit', $data->id) }}"
                                                        class="btn btn-sm btn-outline-success">
                                                        Edit
                                                    </a> |
                                                    <a href="{{ route('dosen.show', $data->id) }}"
                                                        class="btn btn-sm btn-outline-primary">
                                                        Show
                                                    </a> |
                                                    <button type="submit" class="btn btn-sm btn-outline-danger"
                                                        onclick="return confirm('Apakah Anda Yakin?')">Delete
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
