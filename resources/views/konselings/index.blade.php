
@extends('dashboard')
@section('content')
<div class="content-header">
    <div class="container-fluid">
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
                {{-- <th>Edit</th> --}}
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
                    {{-- <td>
                        <a href="{{route('konseling.edit', ['konseling' => $konseling])}}">Edit</a>
                    </td> --}}
                    <td>
                        <form method="post" action="{{route('konseling.destroy', ['konseling' => $konseling])}}">
                            @csrf 
                            @method('delete')
                            <input type="submit" value="Delete" class="btn btn-danger"/>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</div>

@endsection
{{-- <!DOCTYPE html>
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
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
                <div class="position-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="btn btn-success" href="{{ url('/admin/konseling') }}">List Konseling</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-success" href="{{ url('/admin/artikel') }}">List Artikel</a>
                        </li>
                    </ul>
                </div>
            </nav>
    
            <!-- Page Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
               
            </main>
        </div>
    </div>
    
</body>
</html> --}}