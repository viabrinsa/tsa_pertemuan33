<!DOCTYPE html>
<html>
<head>
	<title>Tambah Mahasiswa</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    	<a href="{{route('index')}}" class="btn btn-danger mt-3">Kembali</a>
        <h2> Tambah Mahasiswa </h2>
        @if(isset($success))
            <h4>{{$success}}</h4>
        @endif
        <form method="post" action="{{route('store')}}" enctype="multipart/form-data">
        	@csrf
        	<div class="form-floating mb-3">
			  <input type="text" class="form-control" name="name" id="name" placeholder="Nama Mahasiswa">
			  <label for="floatingInput">Nama Mahasiswa</label>
			</div>
			<div class="form-floating mb-3">
			  <input type="text" class="form-control" name="username" id="username" placeholder="Username">
			  <label for="floatingPassword">Username</label>
			</div>
            <div class="form-floating mb-3">
			  <input type="email" class="form-control" name="email" id="email" placeholder="Email">
			  <label for="floatingPassword">Email</label>
			</div>
            <div class="form-floating mb-3">
			  <input type="password" class="form-control" name="password" id="password" placeholder="Password">
			  <label for="floatingPassword">Password</label>
			</div>
			<div class="mb-3">
			  <label for="formFile" class="form-label">Foto Profil</label>
			  <input class="form-control" name="avatar" type="file" id="formFile" accept="image/*">
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
        </form>
        @if(isset($error))
            {{ $error }}
        @endif
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>