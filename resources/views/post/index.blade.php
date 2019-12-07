@extends('layouts.app')
@section('title') Post Lists @stop
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
                        <li class="breadcrumb-item active" aria-current="page">Post</li>
                    </ol>
                </nav>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header text-uppercase">
                        <div class="d-flex justify-content-between align-items-center">
                            <span>Post Lists</span>
                            <div class="">
                                <a href="{{ route('post.create') }}" class="btn btn-outline-secondary btn-icon btn-sm">
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
                                <th>Category</th>
                                @if(Auth::user()->role == 0)
                                    <th>Posted By</th>
                                @endif
                                <th>Controls</th>
                                <th>Reg Time</th>
                                {{--                                <th>Reg Date</th>--}}
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($lists as $l)
                                <tr>
                                    <td>{{ $l->id }}</td>
                                    <td class="mm">{!! substr(strip_tags($l->title), 0, 30) !!}...</td>
{{--                                    <td>{{ $categories->find($l->category_id)->title }}</td>--}}
                                    <td>{{ $l->getCategory->title }}</td>
                                    @if(Auth::User()->role == 0 )
                                        <td>{{ $l->getUser->name }}</td>
                                    @endif
                                    <td>
                                        <div class="cat d-flex justify-content-start">
                                            <a href="{{ route('post.show', $l->id) }}" class="btn btn-outline-secondary btn-sm mr-2"><i class="fa fa-info-circle"></i></a>
                                            <a href="{{ route('post.edit', $l->id) }}" class="btn btn-outline-secondary btn-sm mr-2"><i class="fa fa-edit"></i></a>
                                            <form class="form-inline" action="{{ route('post.destroy', $l->id) }}" method="post">
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
                        <div class="mt-3">
                            {{ $lists->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
