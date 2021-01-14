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
    <head>
        <title>Dashboard</title>
    </head>
    <body>
        @include('dashboard.create')
        @include('dashboard.edit')

        <div class="container">
            {{-- bagian kiri --}}
            <div class="row text-center vertical-center">
                {{-- <div class="container col-sm-6"> --}}
                <div class="col-md-8 order-md-1">
                    <div class="pricing-header px-3 py-3 pt-md-3 pb-md-3 mx-auto text-center">
                        <div class="px-3 py-3 pt-md-3 pb-md-3">
                            <img src="https://cdn.shopify.com/s/files/1/1241/7134/products/screenshot129_2000x.png?v=1567239029" 
                            class="img-fluid" style="width: auto; height: 300px;">
                        </div>
                        
                        <h1 class="display-4 m-2">25 : 00 : 00</h1>

                        <button type="button" class="btn btn-primary m-3 btn-lg" data-toggle="button" aria-pressed="false" autocomplete="off">
                            Mulai
                        </button>
                        <button type="button" class="btn btn-secondary m-3 btn-lg" data-toggle="button" aria-pressed="false" autocomplete="off">
                            Reset
                        </button>

                        <div>
                            <div class="btn-group btn-group-toggle mt-3" data-toggle="buttons">
                            <label class="btn btn-secondary active">
                                <input type="radio" name="options" id="option1" autocomplete="off" checked> Pomodoro
                            </label>
                            <label class="btn btn-secondary">
                                <input type="radio" name="options" id="option2" autocomplete="off"> Istirahat Sejenak
                            </label>
                            <label class="btn btn-secondary">
                                <input type="radio" name="options" id="option3" autocomplete="off"> Istirahat Panjang
                            </label>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- bagian kanan --}}
                {{-- <div class="container col-sm-6"> --}}
                <div class="col-md-4 order-md-2">
                    <h1 class="px-3 py-3 pt-md-5 pb-md-4 display-4">Halo, Steve.</i></h1>
                    {{-- <h1 class="mb-2 display-4">Welcome, {{auth()->user()->name}}!</h1> --}}
                <div class="card-deck mb-3 text-center">
                        <div class="card mb-4 box-shadow">
                        <div class="card-header">
                            <h4 class="my-0 font-weight-normal">Daftar Tugas</h4>
                        </div>
                        <div class="card-body">                            
                            <ul class="list-group mt-3 mb-4 text-left">
                                @foreach ($tasks as $task)
                                <li class="list-group-item d-flex justify-content-between">{{ $task->task_name }}
                                    <div class="d-flex flex-row">
                                        <span type="button" class="iconify align-self-center mr-2" data-icon="bx:bxs-pencil" data-inline="false"
                                            data-toggle="modal" data-target="#editTugas"></span>
                                        <span type="button" class="iconify align-self-center" data-icon="bi:trash-fill" data-inline="false"
                                            data-toggle="modal" data-target="#hapusTugas"></span>
                                    </div>
                                    
                                </li>
                                @endforeach
                            </ul>
                            {{-- button trigger modal --}}
                            <button type="button" class="btn btn-lg btn-block btn-outline-primary" data-toggle="modal" 
                                    data-target="#tambahTugas">Tambah Tugas</button>
                        </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        {{-- Modal hapus tugas --}}
        <div class="modal fade" id="hapusTugas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tugasBaru">Hapus Tugas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
                <div class="alert alert-danger" role="alert">
                Apakah Anda yakin akan menghapus tugas?
                </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>

                @csrf
                @method('DELETE')

                <button class="btn btn-danger" type="submit" value="Submit">Hapus</button>
            </div>
            </div>
        </div>
        </div>
        {{-- <script type="module" src="{{ asset('js/main.js') }}"></script> --}}
    </body>
@endsection
@section('scripts')
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/101/three.min.js"></script> --}}
    {{-- <script src="{{ asset('js/build/GLTFLoader.js') }}"></script> --}}
    {{-- <script src="{{ asset('js/build/OrbitControl.js') }}"></script> --}}
    <script type="module" src="{{ asset('js/main.js') }}"></script>
@endsection

