@extends('layouts.app')

@section('title', 'Informasi Toko')

@section('content')
<div class="container">
    <div class="row">
        <x-sidebar-navigation/>

        <div class="col-lg-10">
            <div class="card">
                <div class="card-header">{{ __('Informasi Toko') }}</div>
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        {{-- <input type="hidden" name="vendor_id" value="{{ $vendor_id }}"> --}}

                        <div class="mb-3 row">
                            <label for="image" class="col-sm-2 col-form-label">{{ __('Gambar Toko') }}</label>
                            <div class="col-sm-10">
                                <img class="mb-3 col-sm-5 img-preview img-fluid">
                                <input class="form-control" type="file" id="image" name="image" onchange="previewImage()">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="store_name" class="col-sm-2 col-form-label">{{ __('Nama Toko') }}</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="store_name" name="store_name" value="{{ $data->store_name }}">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="address" class="col-sm-2 col-form-label">{{ __('Alamat') }}</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="address" name="address" value="{{ $data->address }}">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="phone" class="col-sm-2 col-form-label">{{ __('Nomor HP') }}</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="phone" name="phone" value="{{ $data->phone }}">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="desc" class="col-sm-2 col-form-label">{{ __('Keterangan') }}</label>
                            <div class="col-sm-10">
                                <input type="hidden" name="desc" id="desc" value="{{ $data->desc }}">
                                <trix-editor input="desc"></trix-editor>
                            </div>
                        </div>

                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a class="btn btn-danger me-md-2" href="{{ route('vendor.product.index') }}">{{ __('Cancel') }}</a>
                            <button class="btn btn-primary" type="submit">{{ __('Submit') }}</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

<script>
    function previewImage() {
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');
        imgPreview.style.display = 'block';
        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);
        
        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }
</script>

@endsection