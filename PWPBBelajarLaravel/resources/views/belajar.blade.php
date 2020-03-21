@extends('template.main')

@section('title','Daftar Siswa')

<style>
.table{
    background: rgba(211,211,211,0.2);
}

.dark{
  background: rgba(52, 58, 64,0.8);
}

.btn-success{
    opacity:0.5;
}
.btn-success:hover{
    opacity:1;
}
.right{
    float:right;
}
</style>

@section('header')
<div class="mt-2 dark col-md-9 py-3">
    DATA SISWA
</div>
@endsection


@section('container')
@if(session('success'))
<center>
    <div class="alert alert-success col-md-3 mx-5 text-wrap">
        {{ session('success') }} <i class="ml-1 fas fa-check"></i>
    </div>
</center>
@endif

@if(session('error'))
<center>
    <div class="alert alert-error col-md-3 mx-5 text-wrap">
        {{ session('error') }} <i class="ml-1 fas fa-times"></i>
    </div>
</center>
@endif

@section('siswa','active')

<div class="container">
    <div class="d-flex justify-content-center" >
        <div class="btn btn-success text-center mb-3" onclick="playAudio2()">
            <a href="{{ url('/siswa/create') }}" class="text-decoration-none">
                <h2>
                    <i class="fas fa-user-plus mx-2 text-white"></i><font class="mr-2 text-white">ADD</font>
                </h2>
            </a>
        </div>

        <div class="btn btn-success text-center mb-3 ml-5" onclick="playAudio2()">
            <a href="{{ url('/siswa/create') }}" class="text-decoration-none">
                <h2>
                <i class="fas fa-sort-alpha-down mx-2 text-white"></i><font class="mr-2 text-white">ASC</font>
                </h2>
            </a>
        </div>

        <div class="btn btn-success text-center mb-3 mx-5" onclick="playAudio2()">
            <a href="{{ url('/siswa/create') }}" class="text-decoration-none">
                <h2>
                <i class="fas fa-sort-alpha-up mx-2 text-white"></i><font class="mr-2 text-white">DESC</font>
                </h2>
            </a>
        </div>
        

        <div class="btn btn-success text-center mb-3 " onclick="playAudio2()">
            <a href="{{ url('siswa') }}" class="text-decoration-none">
                <h2>
                    <i class="far fa-eye mr-2 text-white"></i><font class="text-white">SHOW</font>
                </h2>
            </a>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-hover text-center my-2 " border="3">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nis</th>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Golongan Darah</th>
                    <th scope="col" >Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($siswa as $row)
                <tr>
                    <th scope="row">{{ isset($i)? ++$i : $i=1 }}</th>
                    <td>{{ $row->nis }}</td>
                    <td>{{ $row->namalengkap }}</td>
                    <td>{{ $row->jenkel }}</td>
                    <td>{{ $row->golongan_darah }}</td>
                    <td>
                    <div class="d-inline">
                        <form action="{{ url('/siswa/'.$row->id) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <a href="{{ url('/siswa/'.$row->id.'/edit') }}"><div class="btn btn-primary my-2 mx-1" onclick="playAudio2()"><h6><i class="fas fa-pen text-center"></i></h6></div></a>
                            <button class="btn btn-danger mx-1" onclick="playAudio2()"><h6><i class="fas fa-trash-alt"></i></h6></button>
                        </form>
                    </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>    
@endsection