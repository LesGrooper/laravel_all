@extends('templates/main')

@section('title','Daftar Mahasiswa')

@section('container')

<div class="container">
	<div class="row">
		<div class="col">
			<h1>Daftar Mahasiswa</h1>

			<table class="table table-striped">
			  <thead class="thead-dark">
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">Nama</th>
			      <th scope="col">NRP</th>
			      <th scope="col">Email</th>
			      <th scope="col">Jurusan</th>
			      <th scope="col">Action</th>
			    </tr>
			  </thead>
			  <tbody>
			  <?php foreach ($mahasiswa as $mhs) :?>
			    <tr>
			      <th scope="row">{{$mhs->id}}</th>
			      <td>{{$mhs->nama}}</td>
			      <td>{{$mhs->nrp}}</td>
			      <td>{{$mhs->email}}</td>
			      <td>{{$mhs->jurusan}}</td>
			      <td><a href="" class="badge badge-success">Tambah</a>
			      	<a href="" class="BADGE badge-danger">Delete</a></td>
			    </tr>
			   <?php endforeach; ?>
			  </tbody>
			</table>

		</div>
	</div>
</div>


@endsection