
@extends('dashboard')
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>List Artikel</h2>
                </div>
                <div class="pull-right" style="margin-bottom:10px;">
                <a class="btn btn-success" href="{{ url('/admin/artikel/create') }}"> Create New Artikel</a>
                </div>
            </div>
        </div>
         
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
     
        <table class="table table-striped">
            <tr>
                <th>No</th>
                <th>Image</th>
                <th>Judul</th>
                <th>Narasi</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($artikels as $artikel)
            <tr>
                <td>{{ ++$i }}</td>
                <td><img src="/images/{{ $artikel->image }}" width="100px"></td>
                <td>{{ $artikel->judul }}</td>
                <td style="display: -webkit-box;
                -webkit-line-clamp: 2;
                -webkit-box-orient: vertical;
                overflow: hidden;
                text-overflow: ellipsis;">{{ $artikel->narasi }}</td>
                <td>
                    <form action="{{ route('artikel.destroy',$artikel->id) }}" method="POST">
          
                        <a class="btn btn-info"  href="{{ route('artikel.show',$artikel->id) }}" target="_blank">Show</a>
           
                        <a class="btn btn-primary" href="{{ route('artikel.edit',$artikel->id) }}">Edit</a>
          
                        @csrf
                        @method('DELETE')
             
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
         
        {!! $artikels->links() !!}
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

{{-- <!DOCTYPE html>
<html>
<head>
    <title>Admin Artikel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <h2>Admin Dashboard</h2>
    <a class="btn btn-success" href="{{ url('/admin/artikel') }}">List Artikel</a>
    <a class="btn btn-success" href="{{ url('/admin/konseling') }}">List Konseling</a>
<div class="container">
    
</div>
</body>
</html> --}}