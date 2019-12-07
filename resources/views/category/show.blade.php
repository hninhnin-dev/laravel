@extends('layouts.app')
@section('title')Category Details@stop
@section('body')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">Details Category</div>
                    <div class="card-body">
                        {{ $info->title }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
