<!DOCTYPE html>
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
 
    <table class="table table-bordered">
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
            <td>{{ $artikel->narasi }}</td>
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
</body>
</html>