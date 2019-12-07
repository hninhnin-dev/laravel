@extends('layouts.app')
@section('title')Update Post @stop
@section('body')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <span>Update Post</span>
                            <div>
                                <a href="{{ route('post.index') }}" class="btn btn-outline-secondary btn-icon btn-sm">
                                    <i class="fa fa-list"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('post.update', $info->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-12 col-md-9">
                                    <div class="form-group">
                                        <label for="">Post Title</label>
                                        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title')?old('title'):$info->title }}" placeholder="Post Name">
                                    </div>
                                    @error('title')
                                    <small class="text-danger font-weight-bold">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-12 col-md-3">
                                    <label for="">Select Category</label>
                                    <select name="category_id" id="" class="form-control @error('title') is-invalid @enderror">
                                        @foreach($categories as $c)
                                            <option value="{{ $c->id }}" {{ $c->id == $info->category_id ? "selected" : "" }}>{{ $c->title }}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                    <small class="text-danger font-weight-bold">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Description</label>
                                <textarea name="description" id="description" class="form-control @error('title') is-invalid @enderror">{{ $info->description }}</textarea>
                            </div>
                            @error('description')
                            <small class="text-danger font-weight-bold">{{ $message }}</small>
                            @enderror
                            <div class="form-group">
                                @error('image.*')
                                <small class="text-danger font-weight-bold">{{ $message }}</small>
                                @enderror
                                <div class="preview w-100 border border-muted p-2">
                                    <p>Image Preview <i class="fa fa-image"></i> </p>
                                    <hr>
                                    {{ asset($info->location) }}
                                    <div class="temp-view">
                                        <img src="{{ asset($info->location) }}" class="d-block w-100" alt="">
                                    </div>
                                </div>
                                <br>
                                <input type="file" name="image[]" id="image" class=" d-none form-control p-2" accept="image/jpeg,image/png" multiple>
                                <button class="btn btn-primary">
                                    <i class="mdi mdi-newspaper"></i> Update Post
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('foot')
    <script>
        $('#description').summernote({
            placeholder: 'Type Here.....',
            tabsize: 2,
            height: 300
        });
    </script>
@endsection
