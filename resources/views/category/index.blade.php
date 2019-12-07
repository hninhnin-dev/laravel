@extends('layouts.app')
@section('title') Category Lists @stop
@section('head')
    <style>
        td, th {
            vertical-align: middle!important;
        }
    </style>
    @stop
@section('body')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb" class="bg-white">
                    <ol class="breadcrumb bg-white border border-faded">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Category</li>
                    </ol>
                </nav>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header text-uppercase">
                        <div class="d-flex justify-content-between align-items-center">
                            <span>Category Lists</span>
                            <div>
                                <a href="{{ route('category.create') }}" class="btn btn-outline-secondary btn-icon btn-sm">
                                    <i class="fa fa-plus"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped mb-0">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Controls</th>
                                <th>Reg Time</th>
{{--                                <th>Reg Date</th>--}}
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($lists as $l)
                                <tr>
                                    <td>{{ $l->id }}</td>
                                    <td>{{ $l->title }}</td>
                                    <td>
                                        <div class="cat d-flex justify-content-start">
{{--                                            <a href="{{ route('category.show', $l->id) }}" class="btn btn-outline-secondary mr-2"><i class="fa fa-info-circle"></i></a>--}}
                                            <a href="{{ route('category.edit', $l->id) }}" class="btn btn-outline-secondary btn-sm mr-2"><i class="fa fa-edit"></i></a>
                                            <form class="form-inline" action="{{ route('category.destroy', $l->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-outline-secondary btn-sm"><i class="fa fa-trash-o"></i></button>
                                            </form>
                                        </div>
                                    </td>
                                    <td>{{ $l->created_at->diffForHumans() }}</td>
{{--                                    <td>{{ $l->created_at }}</td>--}}
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
