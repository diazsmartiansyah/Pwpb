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
  transition:2.5s;
}
.img:hover{
  opacity:1;
  transition:1.2s;
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
<center>


@if(session('error'))
<div class="alert alert-error col-md-3 mx-5 text-wrap">
    {{ session('error') }}
</div>
@endif

@section('add','active')

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

<div class="mt-3 dark col-md-5 py-3">
    <h1><i class="fas fa-plus-circle mx-2"></i>ADD DATA &emsp; &emsp; &emsp; &emsp; &emsp;<img onmouseover="playAudio6()" onmouseleave="playAudio6()" width="60px;" class="img" src="{{ asset('img/d.png') }}" alt=""></h1>
</div>

<form action="{{ url('siswa',@$siswa->id) }}" method="post">
  <div class="col-md-5 pl-3 p-5 pt-2 bg">
    @csrf

    @if(!empty($siswa))
      @method('PATCH')
    @endif
  <div class="form-group row">
    <label for="nis" class="col-sm-3 col-form-label text-left"><i class="fas fa-id-card mr-2"></i>NIS</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nis" name="nis" value="{{ old('nis', @$siswa->nis) }}" {{ !empty($siswa->nis)?"readonly":"" }} onmouseover="playAudio1()">
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-sm-4 col-form-label text-left" ><i class="fas fa-id-card mr-2"></i>Nama Lengkap</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nama" name="namalengkap" value="{{ old('namalengkap', @$siswa->namalengkap) }}" onmouseover="playAudio1()">
    </div>
  </div>
  <fieldset class="form-group text-left">
    <div class="row">
      <legend class="col-form-label col-sm-4 pt-0"><i class="fas fa-mars mr-2"></i>Jenis Kelamin</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="jenkel" id="gridRadios1" value="P" onclick="playAudio3()" {{ old('jenkel',@$siswa->jenkel)=="P"?"checked":"" }} >
          <label class="form-check-label" for="gridRadios1">
          <i class="fas fa-female mx-2"></i>Perempuan
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="jenkel" id="gridRadios2" value="L" onclick="playAudio3()" {{ old('jenkel',@$siswa->jenkel)=="L"?"checked":"" }}>
          <label class="form-check-label" for="gridRadios2">
          <i class="fas fa-male mx-2"></i>Laki-Laki
          </label>
        </div>
      </div>
    </div>
  </fieldset>

  <div class="form-group row align-items-left ">
    <div class="col-auto my-1">
      <div>
        <label for="customControlAutosizing"><i class="fas fa-briefcase-medical mr-2"></i>Golongan Darah</label>
      </div>
    </div>
    <div class="col-md-10 my-1">
      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="golongan_darah" onclick="playAudio4()">
        <option selected value="">Pilih</option>
        <option value="A" {{ old('golongan_darah',@$siswa->golongan_darah)=="A"?"selected":"" }}>A</option>
        <option value="B" {{ old('golongan_darah',@$siswa->golongan_darah)=="B"?"selected":"" }}>B</option>
        <option value="O" {{ old('golongan_darah',@$siswa->golongan_darah)=="O"?"selected":"" }}>O</option>
        <option value="AB" {{ old('golongan_darah',@$siswa->golongan_darah)=="AB"?"selected":"" }}>AB</option>
      </select>
    </div>
  </div>
  
  <div class="form-group row my-5 text-left">
    <div class="col-sm-10 mb-2">
        <a href="{{ url()->previous() }}"><div class="btn btn-danger" onclick="playAudio2()">Kembali</div></a>
        <button type="submit" class="btn btn-primary" onclick="playAudio2()">Simpan</button>
    </div>
  </div>
  </div
</form>
</center>
@endsection