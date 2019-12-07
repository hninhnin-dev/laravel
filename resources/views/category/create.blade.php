@extends('layouts.app')
@section('title')Create New Category @stop
@section('body')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <nav aria-label="breadcrumb" class="bg-white">
                <ol class="breadcrumb bg-white border border-faded">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('category.index') }}">Category</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Create</li>
                </ol>
            </nav>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <span>Add New Category</span>
                        <div>
                            <a href="{{ route('category.index') }}" class="btn btn-outline-secondary btn-icon btn-sm">
                                <i class="fa fa-list"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('category.store') }}" method="post">
                        @csrf
                        <div class="form-inline">
                            <input type="text" name="title" class="form-control mr-3" placeholder="Category Name">
                            <button type="submit" class="btn btn-outline-secondary">Add Category</button>
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
