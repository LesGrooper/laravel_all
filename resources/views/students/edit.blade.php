@extends('layout/main')

@section('title', 'Form Ubah Data Mahasiswa')

@section('container')
<div class="container">
	<div class="row">
		<div class="col-8">
			<h1 class="mt-3">Form Ubah Data Mahasiswa</h1>
			<form action="/students/{{$students->id}}" method="post">
				method('patch')
				@csrf
				<div class="form-group">
					<label for="nama">Nama</label>
					<input type="text" class="form-controll @error('nama') is-valid @enderror" id="nama" placeholder="Masukan Nama...">
					@error('nama')
						<div class="invalid-feedback">{{@message}}</div>
					@enderror
				</div>
				<div class="form-group">
					<label for="nrp">NRP</label>
					<input type="text" class="form-controll @error('nrp') is-valid @enderror" id="nrp" placeholder="Masukan NRP...">
					@error('nrp')
						<div class="invalid-feedback">{{@message}}</div>
					@enderror
				</div>
				<div class="form-group">
					<label for="email">Email</label>
					<input type="text" class="form-controll @error('email') is-valid @enderror" id="email" placeholder="Masukan Email...">
					@error('email')
						<div class="invalid-feedback">{{@message}}</div>
					@enderror
				</div>
				<div class="form-group">
					<label for="jurusan">Jurusan</label>
					<input type="text" class="form-controll @error('jurusan') is-valid @enderror" id="jurusan" placeholder="Masukan Nama...">
					@error('jurusan')
						<div class="invalid-feedback">{{@message}}</div>
					@enderror
				</div>
				<button class="btn btn-primary" type="submit">Ubah Data Mahasiswa</button>
			</form>
		</div>
	</div>
</div>

@endsection