@extends('layouts.default')

@section('content')
    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('gudang.index') }}">Gudang</a></li>
            <li class="breadcrumb-item active" aria-current="page">Create</li>
        </ol>
    </nav>
    <div class="page-heading">
        <h3>Create Data Gudang</h3>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-content">
                <div class="card-body">
                    <form class="form" action="{{ route('gudang.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 col-12">
                                <div class="form-group">
                                    <label for="gudang_nama">Nama Gudang</label>
                                    <input type="text" name="gudang_nama" value="{{ old('gudang_nama') }}"
                                        class="form-control" @error('gudang_nama') is-invalid @enderror
                                        placeholder="Nama Gudang" required>
                                    @error('gudang_nama')
                                        <div class="text-muted">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12 col-12">
                                <div class="form-group">
                                    <label for="gudang_alamat">Alamat Gudang</label>
                                    <textarea name="gudang_alamat" value="{{ old('gudang_alamat') }}" id="exampleFormControlTextarea1" rows="3"
                                        class="form-control" @error('gudang_alamat') is-invalid @enderror placeholder="Alamat Gudang" required></textarea>
                                    @error('gudang_alamat')
                                        <div class="text-muted">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12 col-12">
                                <div class="form-group">
                                    <label for="gudang_kota">Kota Gudang</label>
                                    <input type="text" name="gudang_kota" value="{{ old('gudang_kota') }}"
                                        class="form-control" @error('gudang_kota') is-invalid @enderror
                                        placeholder="Kota Gudang" required>
                                    @error('gudang_kota')
                                        <div class="text-muted">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12 col-12">
                                <div class="form-group">
                                    <label for="gudang_propinsi">Propinsi Gudang</label>
                                    <input type="text" name="gudang_propinsi" value="{{ old('gudang_propinsi') }}"
                                        class="form-control" @error('gudang_propinsi') is-invalid @enderror
                                        placeholder="Propinsi Gudang" required>
                                    @error('gudang_propinsi')
                                        <div class="text-muted">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
