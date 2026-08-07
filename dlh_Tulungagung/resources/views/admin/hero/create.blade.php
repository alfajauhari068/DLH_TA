@extends('layouts.admin')

@section('title', 'Tambah Hero')

@section('content')

<div class="container-fluid">

    <div class="card">

        <div class="card-header">
            <h4 class="mb-0">Tambah Hero</h4>
        </div>

        <div class="card-body">

            <form action="{{ route('admin.hero.store') }}"
                  method="POST"
                  enctype="multipart/form-data">

                @csrf

                <div class="row">

                    <div class="col-lg-8">

                        <div class="mb-3">
                            <label class="form-label">Badge</label>

                            <input
                                type="text"
                                name="badge"
                                class="form-control @error('badge') is-invalid @enderror"
                                value="{{ old('badge') }}">

                            @error('badge')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>


                        <div class="mb-3">
                            <label class="form-label">
                                Judul Hero
                            </label>

                            <input
                                type="text"
                                name="title"
                                class="form-control @error('title') is-invalid @enderror"
                                value="{{ old('title') }}"
                                required>

                            @error('title')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>


                        <div class="mb-3">

                            <label class="form-label">
                                Subtitle
                            </label>

                            <textarea
                                name="subtitle"
                                rows="5"
                                class="form-control @error('subtitle') is-invalid @enderror">{{ old('subtitle') }}</textarea>

                            @error('subtitle')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>

                    </div>

                    <div class="col-lg-4">

                        <div class="card border">

                            <div class="card-header">
                                Background Hero
                            </div>

                            <div class="card-body">

                                <img
                                    id="preview-image"
                                    src="https://placehold.co/600x350/e9ecef/6c757d?text=Preview+Hero"
                                    class="img-fluid rounded border mb-3">

                                <input
                                    id="image"
                                    type="file"
                                    name="image"
                                    accept="image/*"
                                    class="form-control @error('image') is-invalid @enderror">

                                @error('image')
                                    <div class="invalid-feedback d-block">
                                        {{ $message }}
                                    </div>
                                @enderror

                                <small class="text-muted d-block mt-2">
                                    JPG, PNG, WEBP<br>
                                    Maksimal 4 MB
                                </small>

                            </div>

                        </div>

                    </div>

                </div>


                <hr>

                <div class="row">

                    <div class="col-md-6">

                        <div class="mb-3">
                            <label>Button 1</label>

                            <input
                                type="text"
                                name="button_1_text"
                                class="form-control"
                                value="{{ old('button_1_text') }}">
                        </div>

                    </div>

                    <div class="col-md-6">

                        <div class="mb-3">
                            <label>URL Button 1</label>

                            <input
                                type="text"
                                name="button_1_url"
                                class="form-control"
                                value="{{ old('button_1_url') }}">
                        </div>

                    </div>

                </div>


                <div class="row">

                    <div class="col-md-6">

                        <div class="mb-3">
                            <label>Button 2</label>

                            <input
                                type="text"
                                name="button_2_text"
                                class="form-control"
                                value="{{ old('button_2_text') }}">
                        </div>

                    </div>

                    <div class="col-md-6">

                        <div class="mb-3">
                            <label>URL Button 2</label>

                            <input
                                type="text"
                                name="button_2_url"
                                class="form-control"
                                value="{{ old('button_2_url') }}">
                        </div>

                    </div>

                </div>


                <div class="row">

                    <div class="col-md-3">

                        <div class="form-check">

                            <input
                                type="checkbox"
                                class="form-check-input"
                                name="is_active"
                                value="1">

                            <label class="form-check-label">
                                Aktif
                            </label>

                        </div>

                    </div>

                    <div class="col-md-3">

                        <input
                            type="number"
                            name="sort_order"
                            class="form-control"
                            value="1"
                            min="1">

                    </div>

                </div>

                <hr>

                <button
                    type="submit"
                    class="btn btn-success">

                    Simpan Hero

                </button>

            </form>

        </div>

    </div>

</div>

@endsection


@push('scripts')

<script>

document
.getElementById('image')
.addEventListener('change', function(e){

    const file = e.target.files[0];

    if(!file){
        return;
    }

    const reader = new FileReader();

    reader.onload = function(event){

        document
        .getElementById('preview-image')
        .src = event.target.result;

    };

    reader.readAsDataURL(file);

});

</script>

@endpush
