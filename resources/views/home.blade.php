@extends('layouts.app')
@section('title') Dashboard @stop
@section('head')
    <script src="{{ asset('js/chart.js') }}"></script>
    @stop
@section('body')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-3 mb-3">
                <div class="d-flex bg-white justify-content-start align-items-center border border-info p-3 rounded">
                    <div class="icon mr-3 pr-3 border-right border-info">
                        <i class="fa fa-feed fa-3x text-info"></i>
                    </div>
                    <div class="text">
                        <p class="mb-0 h1">{{ \App\Post::all()->count() }}</p>
                        <p class="font-weight-bold text-info mb-0">Total Post</p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-3 mb-3">
                <div class="d-flex bg-white justify-content-start align-items-center border border-success p-3 rounded">
                    <div class="icon mr-3 pr-3 border-right border-success">
                        <i class="fa fa-list fa-3x text-success"></i>
                    </div>
                    <div class="text">
                        <p class="mb-0 h1">{{ \App\Category::all()->count() }}</p>
                        <p class="font-weight-bold text-success mb-0">Total Category</p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-3 mb-3">
                <div class="d-flex bg-white justify-content-start align-items-center border border-danger p-3 rounded">
                    <div class="icon mr-3 pr-3 border-right border-danger">
                        <i class="fa fa-users fa-3x text-danger"></i>
                    </div>
                    <div class="text">
                        <p class="mb-0 h1">{{ \App\User::all()->count() }}</p>
                        <p class="font-weight-bold text-danger mb-0">Total User</p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-3 mb-3">
                <div class="d-flex bg-white justify-content-start align-items-center border border-primary p-3 rounded">
                    <div class="icon mr-3 pr-3 border-right border-primary">
                        <i class="fa fa-image fa-3x text-primary"></i>
                    </div>
                    <div class="text">
                        <p class="mb-0 h1">{{ \App\File::all()->count() }}</p>
                        <p class="font-weight-bold text-primary mb-0">Total Photo</p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6">
                <div class="card">
                    <div class="card-header">Category per Post</div>
                    <div class="card-body">
                        <canvas id="myChart" width="400" height="400"></canvas>
                    </div>
                </div>
            </div>


        </div>
    </div>
@endsection
@section("foot")

{{--    <script>--}}
{{--        $(document).ready(function () {--}}
{{--            var ctx = document.getElementById('myChart').getContext('2d');--}}
{{--            var myChart = new Chart(ctx, {--}}
{{--                type: 'doughnut',--}}
{{--                data: {--}}
{{--                    labels: @json($label),--}}
{{--                    datasets: [{--}}
{{--                        label: 'Post per Category',--}}
{{--                        data:  @json($count),--}}
{{--                        backgroundColor: [--}}
{{--                            'rgba(255, 99, 132, 0.2)',--}}
{{--                            'rgba(54, 162, 235, 0.2)',--}}
{{--                            'rgba(255, 206, 86, 0.2)',--}}
{{--                            'rgba(75, 192, 192, 0.2)',--}}
{{--                            'rgba(153, 102, 255, 0.2)',--}}
{{--                            'rgba(255, 159, 64, 0.2)'--}}
{{--                        ],--}}
{{--                        borderColor: [--}}
{{--                            'rgba(255, 99, 132, 1)',--}}
{{--                            'rgba(54, 162, 235, 1)',--}}
{{--                            'rgba(255, 206, 86, 1)',--}}
{{--                            'rgba(75, 192, 192, 1)',--}}
{{--                            'rgba(153, 102, 255, 1)',--}}
{{--                            'rgba(255, 159, 64, 1)'--}}
{{--                        ],--}}
{{--                        borderWidth: 1--}}
{{--                    }]--}}
{{--                },--}}
{{--                options: {--}}
{{--                    scales: {--}}
{{--                        yAxes: [{--}}
{{--                            ticks: {--}}
{{--                                beginAtZero: true--}}
{{--                            }--}}
{{--                        }]--}}
{{--                    }--}}
{{--                }--}}
{{--            });--}}
{{--        });--}}
{{--    </script>--}}
@stop
