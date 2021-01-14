@extends('layouts.master')

@section('content')
<style>
        body {
        height: 100%;
        }

        .vertical-center {
        min-height: 100%;  /* Fallback for browsers do NOT support vh unit */
        min-height: 100vh; /* These two lines are counted as one :-)       */
        width: 100%;
        display: flex;
        align-items: center;
        }
</style>

    @if(session('success'))
        <div class="alert alert-success" role="alert">
            {{session('success')}}
        </div>
    @endif
    @if(session('fail'))
        <div class="alert alert-danger" role="alert">
            {{session('fail')}}
        </div>
    @endif

    {{-- <div class="row text-center vertical-center">
        <div class="col">
            <h1 class="mb-2 display-4">Welcome, {{auth()->user()->name}}!</h1>
            <blockquote class="blockquote">
            <p class="mb-2">Thought is the wind, knowledge the sail, and mankind the vessel.</p>
            <footer class="blockquote-footer"><cite title="Source Title">Augustus Hare</cite></footer>
            </blockquote>
        </div>
    </div> --}}

    <div class="container">
        <div class="row justify-content-md-center text-center vertical-center">
            {{-- <div class="container"> --}}
                <div class="container col-md-auto">
                    <div class="pricing-header px-3 py-3 pt-md-3 pb-md-3 mx-auto text-center">
                        <div class="px-3 py-3 pt-md-3 pb-md-3">
                            <img src="https://cdn.shopify.com/s/files/1/1241/7134/products/screenshot129_2000x.png?v=1567239029"
                            class="img-fluid" style="width: auto; height: 300px;">
                        </div>

                        <h1 class="display-4">25 : 00 : 00</h1>

                        <button type="button" class="btn btn-primary m-3" data-toggle="button" aria-pressed="false" autocomplete="off">
                            Start
                        </button>

                        <div>
                            <div class="btn-group btn-group-toggle mt-3" data-toggle="buttons">
                            <label class="btn btn-secondary active">
                                <input type="radio" name="options" id="option1" autocomplete="off" checked> Pomodoro
                            </label>
                            <label class="btn btn-secondary">
                                <input type="radio" name="options" id="option2" autocomplete="off"> Short Break
                            </label>
                            <label class="btn btn-secondary">
                                <input type="radio" name="options" id="option3" autocomplete="off"> Long Break
                            </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container col-md-auto">
                    <h1 class="px-3 py-3 pt-md-5 pb-md-4 display-4">Hello, Steve.</i></h1>
                    {{-- <h1 class="mb-2 display-4">Welcome, {{auth()->user()->name}}!</h1> --}}
                <div class="card-deck mb-3 text-center">
                        <div class="card mb-4 box-shadow">
                        <div class="card-header">
                            <h4 class="my-0 font-weight-normal">Tasks</h4>
                        </div>
                        <div class="card-body">
                            <ul class="list-group mt-3 mb-4 text-left">
                                <li class="list-group-item d-flex justify-content-between">Learning Grafkom
                                    <span class="iconify align-self-center" data-icon="bi-three-dots" data-inline="false"></span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between disabled">Finishing Mockup
                                    <span class="iconify align-self-center" data-icon="bi-three-dots" data-inline="false"></span>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-lg btn-block btn-outline-primary">Add task</button>
                        </div>
                        </div>

                    </div>
                </div>
            {{-- </div> --}}


            {{-- <div class="container">
                <div class="card-deck mb-3 text-center">
                    <div class="card mb-4 box-shadow">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">Free</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">$0 <small class="text-muted">/ mo</small></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                        <li>10 users included</li>
                        <li>2 GB of storage</li>
                        <li>Email support</li>
                        <li>Help center access</li>
                        </ul>
                        <button type="button" class="btn btn-lg btn-block btn-outline-primary">Sign up for free</button>
                    </div>
                    </div>

                </div>
            </div> --}}
        </div>

    </div>

@endsection
@section('scripts')
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/101/three.min.js"></script> --}}
    {{-- <script src="{{ asset('js/build/GLTFLoader.js') }}"></script> --}}
    {{-- <script src="{{ asset('js/build/OrbitControl.js') }}"></script> --}}
    <script type="module" src="{{ asset('js/main.js') }}"></script>
@endsection


