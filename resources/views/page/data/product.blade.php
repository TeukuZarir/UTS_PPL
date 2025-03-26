@extends('layout')
@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <div class="row">
                            <div class="col">
                                <h4 class="page-title">{{ $pageTitle }}</h4>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end page-title-box-->
                </div><!--end col-->
            </div><!--end row-->
            {{-- Tampilan data berupa tabel --}}
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            {{-- Kolom tombol tambah data dan informasi jika proses berhasil/gagal --}}
                            <div class="d-flex justify-content-between align-items-center">
                                {{-- Tombol tambah data akan menuju ke view form-product --}}
                                <a class="btn btn-primary mb-3" href="{{ route('form-product') }}">Tambah
                                    Data</a>
                                {{-- Form untuk informasi berhasil/gagal --}}
                                @if ($errors->any())
                                    <div class="col-12">
                                        @foreach ($errors->all() as $error)
                                            <div class="alert alert-danger">{{ $error }}</div>
                                        @endforeach
                                    </div>
                                @endif
                                @if (session()->has('error'))
                                    <div class="alert alert-danger">{{ session('error') }}</div>
                                @endif

                                @if (session()->has('success'))
                                    <div class="alert alert-info">{{ session('success') }}</div>
                                @endif
                            </div>
                            {{-- Tabel --}}
                            <div class="table-responsive">
                                <table class="table  table-bordered" id="makeEditable">
                                    <thead>
                                        <tr>
                                            <th>No. Product</th>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Price</th>
                                            {{-- Kolom action berupa edit dan hapus data --}}
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{-- Menggunakan perulangan foreach untuk menarik data dari database untuk ditampilkan ke front page --}}
                                        @foreach ($product as $p)
                                            <tr>
                                                <td>{{ $p->id_product }}</td>
                                                <td>{{ $p->name }}</td>
                                                <td>{{ $p->description }}</td>
                                                <td>Rp. {{ number_format($p->price, 2, '.', ',') }}</td>
                                                <td>
                                                    {{-- Opsi edit, data akan dibawa mengikuti id dari index dan diteruskan ke view edit-product --}}
                                                    <a href="{{ route('edit-product', $p->id_product) }}"
                                                        class="btn btn-warning waves-effect waves-light">Edit
                                                    </a>
                                                    {{-- Opsi hapus, data akan dibawa mengikuti id dari index --}}
                                                    <a href="{{ route('hapus-product', $p->id_product) }}"
                                                        class="btn btn-danger waves-effect waves-light"
                                                        onclick="return confirm('Apakah anda yakin ingin menghapus data ini?');">Hapus</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div><!-- container -->
    @endsection
