<!DOCTYPE html>
<html>
<head>
	<title>Cetak Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
	<style>
	table {
	  border-collapse: collapse;
      margin-top: 30px;
	  width: 100%;
	}

	th, td {
	  text-align: center;
      border: 1px solid black;
	  padding: 8px;
	}

	tr{
		background-color: #ffffff;
	}

	th {
	  background-color: white;
	  color: black;
	}

	</style>
</head>
<body>
    <div class="container">
        <table align="center" border="2">
            <tr>
                <th>No</th>
                <th>Nama Mahasiswa</th>
                <th>Username</th>
                <th>Email</th>
                <th>Foto Profil</th>
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
            </tr>
            @endforeach
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script>
        window.print();
    </script>
</body>
</html>