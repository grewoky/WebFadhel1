<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Menampilkan Data Anggota</title>
</head>
<body>
    <div class="container">
        <div class="d-flex justify-content-between align-items-center my-4">
            <h3 class="mb-3">DATA ANGGOTA PERPUSTAKAAN</h3>
            <a href="#" class="btn btn-primary">Tambah Anggota</a>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>NO ANGGOTA</th>
                    <th>NAMA</th>
                    <th>ALAMAT</th>
                    <th>JURUSAN</th>
                    <th>TANGGAL MASUK</th>
                    <th>NOMOR TELEPON</th>
                    <th>CREATED_AT</th>
                    <th>UPDATED_AT</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($anggotas as $anggota)
                <tr>
                    <td>{{ $anggota->noanggota }}</td>
                    <td>{{ $anggota->nama }}</td>
                    <td>{{ $anggota->alamat }}</td>
                    <td>{{ $anggota->jurusan }}</td>
                    <td>{{ $anggota->tgl_masuk }}</td>
                    <td>{{ $anggota->notelp }}</td>
                    <td>{{ $anggota->created_at }}</td>
                    <td>{{ $anggota->updated_at }}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="8" class="text-center">TIDAK ADA DATA</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
