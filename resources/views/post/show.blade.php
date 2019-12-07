@extends('layouts.app')
@section('title') Post Details @stop
@section('body')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb" class="bg-white">
                    <ol class="breadcrumb bg-white border border-faded">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('post.index') }}">Post</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Details</li>
                    </ol>
                </nav>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="text-uppercase">Post Details</span>
                            <div class="">
                                <a href="{{ route('post.create') }}" class="btn btn-outline-secondary btn-icon btn-sm">
                                    <i class="fa fa-plus"></i>
                                </a>
                                <a href="{{ route('post.index') }}" class="btn btn-outline-secondary btn-icon btn-sm">
                                    <i class="fa fa-list"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h4 class="mm">{!! $info->title !!}</h4>
                        <hr>
                        @if(count($info->getFile) > 0)
                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    @foreach($info->getFile as $key=>$f)
                                        <div class="carousel-item {{ $key == 0 ? "active":"" }}">
                                            <img src="{{ asset($f->location) }}" class="d-block w-100" alt="">
                                        </div>
                                    @endforeach
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        @endif
                        <div class="mm-beauty">
                            {!! $info->description !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
