<html>
    <head>
        <style>
            table{
                width: 100%;
                border: 1px solid black;
            }
            th, td{
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
        <h2>Laporan Data Mahasiswa</h2>
        <table>
            <thead>
                <tr>
                <th>No</th>
                <th>Nama Mahasiswa</th>
                <th>Username</th>
                <th>Email</th>
                <th>Foto Profil</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $i => $d)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $d->nama }}</td>
                    <td>{{ $d->username}}</td>
                    <td>{{ $d->email}}</td>
                <td><img class="img-preview img-fluid" src="{{ asset('storage/'.$list->avatar) }}" 
                style="max-width: 100px;"></td>
                <td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>