@extends('../template.main')

@section('title','Add Data')
<style>
.bg{
    background: rgba(211,211,211,0.4);
    position:absolute;
    height:85%;
}
.dark{
  background: rgba(52, 58, 64,0.6);
}
.img{
  opacity:0;
  transition:3s;
}
.img:hover{
  opacity:1;
  transition:2s;
}
input, select{
  opacity:0.7;
}

option:checked{
  background:rgba(52, 58, 64,0.6);
}

input:hover, select:hover{
  opacity:1;
}
</style>

@section('container')

@if(session('error'))
<div class="alert alert-error col-md-3 mx-5 text-wrap">
    {{ session('error') }}
</div>
@endif


@if(count($errors)>0)
<div class="alert alert-danger col-md-3 mx-2 text-wrap">
    <strong>Perhatian</strong><br />
    <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="mx-3 mt-3 dark col-md-5 py-3">
    <h1><i class="fas fa-plus-circle mx-2"></i>ADD DATA &emsp; &emsp; &emsp; &emsp; &emsp;<img onmouseover="playAudio6()" onmouseleave="playAudio6()" width="60px;" class="img" src="{{ asset('img/d.png') }}" alt=""></h1>
</div>

<form class="col-md-5 mx-3 p-5 pt-2 bg" action="{{ url('kelas',@$kelas->id) }}" method="post"> 
    @csrf

    @if(!empty($kelas))
      @method('PATCH')
    @endif
  <div class="form-group row">
    <label for="nama_kelas" class="col-sm-3 col-form-label"><i class="fas fa-id-card mr-2"></i>Nama Kelas</label>
    <div class="col-sm-10">
      <input type="text" onmouseover="playAudio1()" class="form-control" id="nama_kelas" name="nama_kelas" value="{{ old('nama_kelas',@$kelas->nama_kelas) }}">
    </div>
  </div>
  <div class="form-group row">
    <label for="ruangan" class="col-sm-4 col-form-label" ><i class="fas fa-id-card mr-2"></i>Ruangan</label>
    <div class="col-sm-10">
      <input type="text" onmouseover="playAudio1()" class="form-control" id="ruangan" name="lokasi_ruangan" value="{{ old('lokasi_ruangan',@$kelas->lokasi_ruangan) }}">
    </div>
  </div>
  <div class="form-group row">
    <label for="walikelas" class="col-sm-4 col-form-label" ><i class="fas fa-id-card mr-2"></i>Wali Kelas</label>
    <div class="col-sm-10">
      <input type="text" onmouseover="playAudio1()" class="form-control" id="walikelas" name="nama_wali_kelas" value="{{ old('ruangan',@$kelas->nama_wali_kelas) }}">
    </div>
  </div>
  <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-4 pt-0"><i class="fas fa-icons mr-2"></i>Jurusan</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="jurusan" id="rpl" value="Rekayasa Perangkat Lunak" onclick="playAudio3()" {{ old('jurusan',@$kelas->jurusan)=="Rekayasa Perangkat Lunak"?"checked":"" }} >
          <label class="form-check-label" for="rpl">
          <i class="fas fa-laptop-code mx-2"></i>Rekayasa Perangkat Lunak
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="jurusan" id="tkj" value="Teknik Komputer Jaringan" onclick="playAudio3()" {{ old('jurusan',@$kelas->jurusan)=="Teknik Komputer Jaringan"?"checked":"" }}>
          <label class="form-check-label" for="tkj">
          <i class="fas fa-network-wired mx-2"></i>Teknik Komputer Jaringan
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="jurusan" id="mm" value="Multimedia" onclick="playAudio3()" {{ old('jurusan',@$kelas->jurusan)=="Multimedia"?"checked":"" }}>
          <label class="form-check-label" for="mm">
          <i class="fas fa-video mx-2"></i>Multimedia
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="jurusan" id="tav" value="Teknik Audio Video" onclick="playAudio3()" {{ old('jurusan',@$kelas->jurusan)=="Teknik Audio Video"?"checked":"" }}>
          <label class="form-check-label" for="tav">
          <i class="fas fa-microchip mx-2"></i>Teknik Audio Video
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="jurusan" id="toi" value="Teknik Otomasi Industri" onclick="playAudio3()" {{ old('jurusan',@$kelas->jurusan)=="Teknik Otomasi Industri"?"checked":"" }}>
          <label class="form-check-label" for="toi">
          <i class="fab fa-steam-symbol mx-2"></i>Teknik Otomasi Industri
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="jurusan" id="titl" value="Teknik Instalasi Tenaga Listrik" onclick="playAudio3()" {{ old('jurusan',@$kelas->jurusan)=="Teknik Instalasi Tenaga Listrik"?"checked":"" }}>
          <label class="form-check-label" for="titl">
          <i class="fas fa-bolt mx-2"></i>Teknik Instalasi Tenaga Listrik
          </label>
        </div>
      </div>
    </div>
  </fieldset>
  
  <div class="form-group row my-3">
    <div class="col-sm-10 mb-2">
        <a href="{{ url()->previous() }}"><div class="btn btn-danger" onclick="playAudio2()">Kembali</div></a>
        <button type="submit" onclick="playAudio2()" class="btn btn-primary">Simpan</button>
    </div>
  </div>
</form>
@endsection