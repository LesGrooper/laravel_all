@extends('templates/main')

@section('title', 'Daftar Mahasiswa')

@section('container')

<div class="container">
	<div class="row">
		<div class="col-6">

				<div class="container">
					<div class="row">
						<div class="col">
							<h1>Daftar Mahasiswa</h1>

							<table class="table table-striped">
							  <thead class="thead-dark">
							    <tr>
							      <th scope="col">#</th>
							      <th scope="col">Nama</th>
							      <th scope="col">Action</th>
							    </tr>
							  </thead>
							  <tbody>
							  @foreach ($students as $student)
							    <tr>
							      <th scope="row">{{$loop->iteration}}</th>
							      <td>{{$student->nama}}</td>
							      <td><a href="{{url('students/' . $student->id) }}" class="badge badge-success">Show Detail</a>
							      </td>
							    </tr>
							   @endforeach
							  </tbody>
							</table>

						</div>
					</div>
				</div>

		</div>
	</div>
</div>

@endsection