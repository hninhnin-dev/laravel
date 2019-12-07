@extends('layouts.app')
@section('title')Update Category @stop
@section('body')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <span>Update Category</span>
                            <div>
                                <a href="{{ route('category.index') }}" class="btn btn-outline-secondary btn-icon btn-sm">
                                    <i class="fa fa-list"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('category.update', $info->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-inline">
                                <input type="text" name="title" class="form-control mr-3" value="{{ old('title') ? old('title'): $info->title }}" placeholder="Category Name">
                                <button type="submit" class="btn btn-outline-secondary">Update Category</button>
                            </div>
                            @error('title')
                            <small class="text-danger font-weight-bold">{{ $message }}</small>
                            @enderror
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
