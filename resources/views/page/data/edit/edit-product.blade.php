@extends('layout')
@section('content')
    <div class="page-content">
        <div class="container-fluid">
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
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    {{-- data akan dibawa mengikuti id dari index dan diteruskan ke proses edit-product --}}
                                    <form class="needs-validation"
                                        action="{{ route('update-product', $product->id_product) }}" method="POST">
                                        @csrf
                                        <div class="form-group row">
                                            <label for="name" class="col-sm-2 col-form-label text-right">Name of
                                                Product
                                            </label>
                                            {{-- untuk atribut value akan diisi dengan data dari tabel saat ini --}}
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text"
                                                    placeholder="Masukkan nama produk" value="{{ $product->name }}"
                                                    name="name" id="name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="description" class="col-sm-2 col-form-label text-right">Description
                                                of
                                                Product
                                            </label>
                                            <div class="col-sm-10">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                    </div>
                                                    <textarea class="form-control" aria-label="With textarea" name="description"
                                                        placeholder="Masukkan deskripsi dari produk"> {{ old('description', $product->description) }}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="price" class="col-sm-2 col-form-label text-right">Price</label>
                                            <div class="col-sm-10">
                                                <div class="input-group">
                                                    <span class="input-group-text">Rp.</span>
                                                    <input class="form-control" type="number"
                                                        placeholder="Masukkan nominal" value="{{ $product->price }}"
                                                        name="price" id="price" required>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Button --}}
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
            </div><!--end row-->
        </div><!-- container -->
    @endsection
