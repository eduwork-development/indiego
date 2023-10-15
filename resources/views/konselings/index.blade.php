<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="assets/logoblack.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <title>Dashboard Admin</title>
</head>
<body>
    <h2>Admin Dashboard</h2>
    <a class="btn btn-success" href="{{ url('/admin/artikel') }}">List Artikel</a>
    <a class="btn btn-success" href="{{ url('/admin/konseling') }}">List Konseling</a>
    <div class="container" style="margin: 5%">
        <div>
            <h2>LIST KONSELING</h2>
        </div>
        <table class="table table-striped">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Jenis Konseling</th>
                <th>Nomor Telepon</th>
                <th>Tanggal Konseling</th>
                <th>Jam Konseling</th>
                <th>Deskripsi</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @php
                $count = 1;
            @endphp
            @foreach($konselings as $konseling )
                <tr>
                    <td>{{$count++}}</td>
                    <td>{{$konseling->nama}}</td>
                    <td>{{$konseling->email}}</td>
                    <td>{{$konseling->jenis}}</td>
                    <td>{{$konseling->telp}}</td>
                    <td>{{$konseling->tgl_konseling}}</td>
                    <td>{{$konseling->jam}}</td>
                    <td>{{$konseling->deskripsi}}</td>
                    <td>
                        {{-- <a href="{{route('konseling.edit', ['konseling' => $konseling])}}">Edit</a> --}}
                    </td>
                    <td>
                        {{-- <form method="post" action="{{route('konseling.destroy', ['konseling' => $konseling])}}">
                            @csrf 
                            @method('delete')
                            <input type="submit" value="Delete" />
                        </form> --}}
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>