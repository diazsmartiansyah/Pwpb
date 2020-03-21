@extends('template.main')

@section('title','PWPB Diazs Martiansyah')
<style type="text/css">
    	.card{
    		border :3px solid #595959;
    		border-radius: 10px;
    		background-color: #595959;
    		width: 19rem;
    	}
    	.display-4{
    		font-weight: bold;
    	}
    	.card-body-icon{
    		position: absolute;
    		z-index: 0;
    		top: 30px;
    		right: 15px;
    		opacity: 0.4;
    		font-size: 80px;
    	}
    	.card-body-icon{
    		position: absolute;
    		z-index: 0;
    		top: 30px;
    		right: 15px;
    		opacity: 0.4;
    		font-size: 80px;
    	}
	</style>
@section('title','dashboard')
@section('container')
<div class="col-md-10 mx-4">
    <h2><i class="fas fa-chart-pie mr-2"></i>DASHBOARD</h2><hr class="mr-1 bg-dark">
	<div class="row">
	
	
		<div class="row my-3  mx-3 text-dark" >
			<div class="card ml-3 bg-gray-100"  style="background-color: #00BFFF;">
				<div class="card-body ml-1">
				  	<div class="card-body-icon ">
				  		<i class="fas fa-user-graduate mt-4 mr-3"></i>
				  	</div>
				    <h5 class="card-title text-dark">JUMLAH SISWA</h5>
				    <div class="display-4 mb-3 ml-2 text-dark"><strong>{{ $jumlahSiswa }}</strong> <font size="5"> siswa </font></div>
				    <a href="{{url('/siswa')}}" ><p class="card-text text-dark ml-1">Lihat Detail<i class="fas fa-angle-double-right ml-2"></i></p></a>
				</div>
			</div>
		</div>

        <div class="row my-3  mx-3 text-dark" >
			<div class="card ml-3 bg-gray-100"  style="background-color: #00BFFF;">
				<div class="card-body ml-1">
				  	<div class="card-body-icon">
				  		<i class="fas fa-chalkboard-teacher mt-4 mr-3"></i>
				  	</div>
				    <h5 class="card-title text-dark">JUMLAH KELAS</h5>
				    <div class="display-4 mb-3 ml-2 text-dark"><strong>{{ $jumlahKelas }}</strong> <font size="5"> kelas </font> </div>
				    <a href="{{url('/siswa')}}" ><p class="card-text text-dark ml-1">Lihat Detail<i class="fas fa-angle-double-right ml-2"></i></p></a>
				</div>
			</div>
		</div>

	</div>
</div>
@endsection