@extends('template.master')
@section('content')
    <div class="row">
        <div class="col-12 col-md-8">
            <div class="card">
                <div class="card-header mm">{{ $info->title }}</div>
                <div class="card-body mm-beauty">
                    {!! $info->description !!}
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="card menu">
                <div class="card-body">
                    <h4 class="font-weight-bold text-uppercase">Category Lists</h4>
                    <hr>
                    @foreach($categories as $c)
                        <a href="{{ route('categoralize', $c->id) }}" class="btn btn-outline-secondary d-block mt-2">
                            {{ $c->title }}
                        </a>
                    @endforeach
                </div>
                <div class="card-body">
                    <h4 class="font-weight-bold text-uppercase">Recent Post</h4>
                    <hr>
                    @foreach($recent as $r)
                        <a href="" class=" btn-link text-left d-block mt-2" style="word-wrap: break-word;" >
                            {{ $r->title }}
                        </a>
                        <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

