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
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        {{-- tampilan untuk informasi berhasil/gagal --}}
                        @if ($errors->any())
                            <div class="col-12">
                                @foreach ($errors->all() as $error)
                                    <div class="alert alert-danger">{{ $error }}</div>
                                @endforeach
                            </div>
                        @endif
                        {{-- tampilan gagal --}}

                        @if (session()->has('error'))
                            <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif
                        {{-- tampilan berhasil --}}

                        @if (session()->has('success'))
                            <div class="alert alert-info">{{ session('success') }}</div>
                        @endif
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    {{-- data input akan diteruskan ke proses buat-product untuk dibuat data baru --}}
                                    <form class="needs-validation" action="{{ route('buat-product') }}" method="POST">
                                        @csrf
                                        {{-- Form nama produk --}}
                                        <div class="form-group row">
                                            <label for="name" class="col-sm-2 col-form-label text-right">Name of
                                                Product
                                            </label>
                                            {{-- menggunakan atribut 'name' agar inputan dapat diterima oleh proses create atau delete --}}
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text"
                                                    placeholder="Masukkan nama produk" value="" name="name"
                                                    id="name">
                                            </div>
                                        </div>
                                        {{-- Form deskripsi dari produk --}}
                                        <div class="form-group row">
                                            <label for="description" class="col-sm-2 col-form-label text-right">Description
                                                of
                                                Product
                                            </label>
                                            <div class="col-sm-10">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                    </div>
                                                    <textarea class="form-control" aria-label="With textarea" type="" name="description"
                                                        placeholder="Masukkan deskripsi dari produk"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Form harga dari produk --}}
                                        <div class="form-group row">
                                            <label for="price" class="col-sm-2 col-form-label text-right">Price</label>
                                            <div class="col-sm-10">
                                                <div class="input-group">
                                                    <span class="input-group-text">Rp.</span>
                                                    <input class="form-control" type="number"
                                                        placeholder="Masukkan nominal" value="" name="price"
                                                        id="price" required>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Tombol kirim data --}}
                                        <button class="btn btn-primary" type="submit">
                                            Kirim Data
                                        </button>
                                        <a type="button" href="{{ route('product') }}" class="btn btn-danger">Batal</a>
                                    </form>
                                </div>
                            </div>
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->
            </div><!-- container -->
        </div>
    </div>
@endsection
