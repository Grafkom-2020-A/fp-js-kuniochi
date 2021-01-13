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
        <div class="container">
            {{-- bagian kiri --}}
            <div class="row justify-content-md-center text-center vertical-center">
                <div class="container col-md-auto">
                    <div class="pricing-header px-3 py-3 pt-md-3 pb-md-3 mx-auto text-center">
                        <div class="px-3 py-3 pt-md-3 pb-md-3">
                            <img src="https://cdn.shopify.com/s/files/1/1241/7134/products/screenshot129_2000x.png?v=1567239029" 
                            class="img-fluid" style="width: auto; height: 300px;">
                        </div>
                        
                        <h1 class="display-4">25 : 00 : 00</h1>

                        <button type="button" class="btn btn-primary m-3 btn-lg" data-toggle="button" aria-pressed="false" autocomplete="off">
                            Mulai
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
                <div class="container col-md-auto">
                    <h1 class="px-3 py-3 pt-md-5 pb-md-4 display-4">Halo, Steve.</i></h1>
                    {{-- <h1 class="mb-2 display-4">Welcome, {{auth()->user()->name}}!</h1> --}}
                <div class="card-deck mb-3 text-center">
                        <div class="card mb-4 box-shadow">
                        <div class="card-header">
                            <h4 class="my-0 font-weight-normal">Daftar Tugas</h4>
                        </div>
                        <div class="card-body">                            
                            <ul class="list-group mt-3 mb-4 text-left">
                                <li class="list-group-item d-flex justify-content-between">Selesaikan Grafkom
                                    <span type="button" class="iconify align-self-center" data-icon="bi-three-dots" data-inline="false"
                                        data-toggle="modal" data-target="#editTugas"></span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between disabled">Perbaiki Mockup
                                    <span class="iconify align-self-center" data-icon="bi-three-dots" data-inline="false"></span>
                                </li>
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

        <!-- Modal tambah tugas-->
        <div class="modal fade" id="tambahTugas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tugasBaru">Tugas Baru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="taskName" class="form-label">Nama tugas</label>
                    <input type="text" class="form-control" id="taskName" placeholder="Contoh : Memasak telur">
                </div>
                <div class="mb-3">
                    <label for="taskInterval" class="form-label">Interval</label>
                    <input type="text" class="form-control" id="taskInterval" placeholder="Contoh : 1">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button class="btn btn-primary" type="submit" value="Submit">Simpan</button>
            </div>
            </div>
        </div>
        </div>

        
        <!-- Modal edit tugas-->
        <div class="modal fade" id="editTugas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tugasBaru">Edit Tugas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="taskName" class="form-label">Nama tugas</label>
                    <input type="text" class="form-control" id="taskName" placeholder="Memasak telur">
                </div>
                <div class="mb-3">
                    <label for="taskInterval" class="form-label">Interval</label>
                    <input type="text" class="form-control" id="taskInterval" placeholder="1">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button class="btn btn-primary" type="submit" value="Submit">Simpan</button>
            </div>
            </div>
        </div>
        </div>
    </body>
@endsection
    

