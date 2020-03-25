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
		.det{
			color: darkgray;
			text-decoration-color: black;
			transition:1.5s;
		}
		.det:hover{
			padding-right:1rem;
			transition:1.5s;
		}
		i:hover{
			padding-left:1rem;
			transition:1.5s;
		}
		a[
			text-decoration: none;
		]
		a:hover{
			border-bottom:black;
			text-decoration: none;
		}
	</style>
@section('title','dashboard')
@section('container')
<div class="col-md-10 ">
    <h2 class="ml-3"><i class="fas fa-chart-pie mr-2 "></i>DASHBOARD</h2>
	<hr class="bg-dark ml-3" />
	<div class="row">
	
	
		<div class="row my-3 mx-3" >
			<div class="card ml-4 bg-dark" >
				<div class="card-body ml-1">
				  	<div class="card-body-icon ">
				  		<i class="fas fa-user-graduate mt-4 mr-3 text-white"></i>
				  	</div>
				    <h5 class="card-title">JUMLAH SISWA</h5>
				    <div class="display-4 mb-3 ml-2 "><strong>{{ $jumlahSiswa }}</strong> <font size="5"> siswa </font></div>
				    <a href="{{url('/siswa')}}" class="text-decoration-none" ><p class="card-text ml-1 text-decoration-none"><font class="det">Lihat Detail</font><i class="fas fa-angle-double-right ml-2 text-white"></i></p></a>
				</div>
			</div>
		</div>

        <div class="row my-3 mx-3" >
			<div class="card ml-4 bg-dark">
				<div class="card-body ml-1">
				  	<div class="card-body-icon">
				  		<i class="fas fa-chalkboard-teacher mt-4 mr-3 text-white"></i>
				  	</div>
				    <h5 class="card-title">JUMLAH KELAS</h5>
				    <div class="display-4 mb-3 ml-2 "><strong>{{ $jumlahKelas }}</strong> <font size="5"> kelas </font> </div>
				    <a href="{{url('/siswa')}}" class="text-decoration-none" ><p class="card-text ml-1 text-decoration-none"><font class="det">Lihat Detail</font><i class="fas fa-angle-double-right ml-2 text-white"></i></p></a>
				</div>
			</div>
		</div>

	</div>
</div>
@endsection