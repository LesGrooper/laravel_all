@extends('templates/main')

@section('title', 'Daftar Mahasiswa')

@section('container')

<div class="container">
	<div class="row">
		<div class="col-6">
			<h2>Daftar Mahasiswa</h2>

				<div class="container">
					<div class="row">
						<div class="col">
							<h1>Detail Mahasiswa</h1>
							<div class="card" style="width: 18rem;">
							  <div class="card-body">
							    <h5 class="card-title">{{$student->nama}}</h5>
							    <h6 class="card-subtitle mb-2 text-muted">{{$student->email}}</h6>
							    <p class="card-subtitle mb-2 text-muted">{{$student->nrp}}</p>
							    <p class="card-subtitle mb-2 text-muted">{{$student->jurusan}}</p>
							    <a href="#" class="btn btn-success">Edit</a>
							    <a href="#" class="btn btn-danger">Delete</a>
							    <a href="{{url('student/')}}" class="card-link">kembali</a>
							  </div>
							</div>
						</div>
					</div>
				</div>

		</div>
	</div>
</div>

@endsection