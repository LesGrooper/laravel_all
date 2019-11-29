@extends('templates/main')

@section('title', 'Daftar Mahasiswa')

@section('container')

<div class="container">
	<div class="row">
		<div class="col-6">

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
							   
							    <a href="{{$student->id}}/edit" class="btn btn-success">Edit</a>

							    <form action="/student/{{$student->id}}" method="post" class="d-inline">
							    	@method('delete')
							    	@csrf
							    	<button type="submit" class="btn btn-danger">Delete</button>
							    </form>

							    <a href="/student" class="card-link">Kembali</a>
							  </div>
							</div>
						</div>
					</div>
				</div>

		</div>
	</div>
</div>

@endsection