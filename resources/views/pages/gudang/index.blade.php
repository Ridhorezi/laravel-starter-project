@extends('layouts.default')

@section('content')
    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Gudang</li>
        </ol>
    </nav>
    <div class="page-heading">
        <h3>Data Gudang</h3>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                <a class="btn btn-primary" href="{{ route('gudang.create') }}"> <i class="bi bi-plus"></i>
                    Tambah DataGudang
                </a>
            </div>
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Kota</th>
                            <th>Propinsi</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($datas as $data)
                            <tr>
                                <td>{{ $data->id }}</td>
                                <td>{{ $data->gudang_nama }}</td>
                                <td>{{ $data->gudang_alamat }}</td>
                                <td>{{ $data->gudang_kota }}</td>
                                <td>{{ $data->gudang_propinsi }}</td>
                                <td>
                                    <a href="{{ route('gudang.edit', $data->id) }}" class="btn btn-success btn-sm">
                                        <i class="bi bi-pencil"> Edit</i>
                                    </a>
                                    <form action="{{ route('gudang.destroy', $data->id) }}" method="post" class="d-inline">
                                        @csrf
                                        <input name="_method" type="hidden" value="DELETE">
                                        <button type="submit" class="btn btn-danger btn-sm show-alert-delete-box btn-sm"
                                            data-toggle="tooltip" title='Hapus'>
                                            <i class="bi bi-trash"> Hapus</i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center p-5">
                                    Data tidak tersedia
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
