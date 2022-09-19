<!DOCTYPE html>
<html>
<head>
	<title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
	<style>
	table {
	  border-collapse: collapse;
	  width: 50%;
	}

	th, td {
	  text-align: center;
	  padding: 8px;
	}

	tr{
		background-color: #ffffff;
	}

	th {
	  background-color: yellow;
	  color: black;
	}

	</style>
</head>
<body>
    <div class="container">
        <a href="{{route('create')}}" class="btn btn-primary mt-3">Tambah Data</a>
        <table align="center" border="2">
            <tr>
                <th>No</th>
                <th>Nama Mahasiswa</th>
                <th>Username</th>
                <th>Email</th>
                <th>Foto Profil</th>
                <th>Aksi</th>
            </tr>
            @foreach($data as $list)
            <?php $no=1 ?>
            <tr>
                <td>{{$no++}}</td>
                <td>{{$list->name}}</td>
                <td>{{$list->username}}</td>
                <td>{{$list->email}}</td>
                <td><img class="img-preview img-fluid" src="{{ asset('storage/'.$list->avatar) }}" 
                style="max-width: 100px;"></td>
                <td>
                    <a href="/mahasiswa/edit/{{$list->id_mahasiswa}}" class="btn btn-success">Edit</a>
                    <a href="/mahasiswa/delete/{{$list->id_mahasiswa}}" class="btn btn-danger" onclick="return confirm('Hapus data mahasiswa {{ $list->name }}?')">Hapus</a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>