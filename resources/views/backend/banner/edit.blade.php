@extends('layouts.admin')
@section('content')
    <div class="">
        <div class="row">
            <div class="col-lg-10 m-auto">
                <div class="card">
                    <div class="card-header">
                        <h3>Change Banner Content</h3>
                    </div>
                    <div class="card-body">
                        @if (session('update'))
                            <div class="alert alert-success">{{ session('update') }}</div>
                        @endif
                        <form action="{{ route('banner.update', $banners->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="border p-3">
                                        <div class="mb-3">
                                            <label for="" class="form-label">Banner Image</label>
                                            <input type="file" name="image" class="form-control"
                                                onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                        </div>
                                        <div class="mt-2">
                                            <img width="210" src="{{ asset('uploads/banner/') }}/{{ $banners->image }}"
                                                id="blah">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="border p-3">
                                        <div class="mb-3">
                                            <label for="" class="form-label">Banner Headline</label>
                                            <input type="text" name="headline" class="form-control"
                                                value="{{ $banners->headline }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label">Banner Description</label>
                                            <textarea name="desp" class="form-control" cols="30" rows="10">{{ $banners->desp }}</textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 m-auto">
                                    <div class="mt-5">
                                        <button type="submit" class="btn btn-primary form-control">Update</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
