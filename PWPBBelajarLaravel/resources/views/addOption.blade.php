@extends('template.main')

@section('title','PWPB Diazs Martiansyah')
<style type="text/css">
    .far{
        color: rgb(40, 167, 69);
        opacity:0.7
    }
    .far:hover{
        opacity:1.5;
    }
</style>
@section('container')

@section('add','active')

<div class="col-md-10 mx-4 align-content-center">
    <h2><i class="fas fa-plus-square mr-2"></i>Tambah Data</h2>
    <hr class="bg-dark" />

    <div class="d-flex justify-content-between" >
    <div class="row my-3">

            <div class="card text-center mx-5 bg-dark border-0 my-3" style="width: 18rem;">
                <div class="card-body">
                    <h1 class="card-title">ADD SISWA</h1>
                    <img class="card-img-center my-2 mb-3" width="250" height="175" src="{{ asset('img/students.png') }}">
                    <a href="/siswa/create" class="mt-2"><h1><i class="fas fa-plus-square "></i></h1></a>
                </div>
            </div>

            <div class="card text-center mx-5 bg-dark border-0 my-3" style="width: 18rem;">
                <div class="card-body">
                    <h1 class="card-title">ADD KELAS</h1>
                    <img class="card-img-center my-2" width="250" height="180" src="{{ asset('img/classes.png') }}">
                    <a href="/kelas/create" class="mt-2"><h1><i class="fas fa-plus-square"></i></h1></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection