<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
   
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="../assets/logoblack.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <title>Formulir</title>
</head>
<body style="background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.50) 0%, rgba(0, 0, 0, 0.50) 100%), url('../assets/konseling.jpeg');background-size: cover; ">
    <div  style="background-color: white;margin:5%; padding:5% 5% 5% 5%">
        <div class="d-flex justify-content-center"><p style="font-size: 40px; font-weight:bold">Konseling</p></div>
        <div class="d-flex justify-content-center text-center"><p>Silahkan isi form terlebih dahulu untuk membuat janji</p></div>
        


       
    <form class="row g-3" method="post" action="{{route('konseling.store')}}">
        @csrf 
        @method('post')
        <div class="col-md-6">
          <label for="inputNama" class="form-label">Nama</label>
          <input type="text" name="nama" class="form-control" id="inputNama" placeholder="Masukan nama">
          @if($errors->has('nama'))
                    <div class="alert alert-danger" role="alert" style="margin-top: 5px">
                        {{ $errors->first('nama') }}
                    </div>
                @endif
        </div>
        <div class="col-md-6">
          <label for="Email" class="form-label">Email</label>
          <input type="email" name="email" class="form-control" id="Email" placeholder="Masukan email">
          @if($errors->has('email'))
                    <div class="alert alert-danger" role="alert" style="margin-top: 5px">
                        {{ $errors->first('email') }}
                    </div>
                @endif
        </div>
        <div class="col-md-6">
            <label for="inputJenis" class="form-label">Jenis Konseling</label>
            <select id="inputJenis" name="jenis" class="form-select">
              <option selected value="">Pilih Jenis Konseling</option>
              <option value="Konseling">Konseling</option>
              <option value="HRD">HRD</option>
              <option value="Tumbuh Kembang Anak">Tumbuh Kembang Anak</option>
              <option value="Konsultasi Properti">Konsultasi Properti</option>
            </select>
            @if($errors->has('jenis'))
                    <div class="alert alert-danger" role="alert" style="margin-top: 5px">
                        {{ $errors->first('jenis') }}
                    </div>
                @endif
          </div>
        <div class="col-md-6">
          <label for="inputTelp" class="form-label">No Telepon</label>
          <input type="number" name="telp" class="form-control" id="inputTelp" placeholder="Masukan nomor telepon">
          @if($errors->has('telp'))
                    <div class="alert alert-danger" role="alert" style="margin-top: 5px">
                        {{ $errors->first('telp') }}
                    </div>
                @endif
        </div>
        <div class="col-md-6">
          <label for="inputTanggal" class="form-label">Tanggal</label>
          <input type="date" name="tgl_konseling" class="form-control" id="inputTanggal">
          @if($errors->has('tgl_konseling'))
                    <div class="alert alert-danger" role="alert" style="margin-top: 5px">
                        {{ $errors->first('tgl_konseling') }}
                    </div>
                @endif
        </div>
        <div class="col-md-6">
          <label for="inputJam" class="form-label">Jam</label>
          <input type="text" name="jam" class="form-control" id="inputJam" placeholder="08:00 WIB">
          @if($errors->has('jam'))
                    <div class="alert alert-danger" role="alert" style="margin-top: 5px">
                        {{ $errors->first('jam') }}
                    </div>
                @endif
        </div>
        <div class="col">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea class="form-control" name="deskripsi" placeholder="Ceritakan tujuan anda secara singkat" id="deskripsi"></textarea>
            @if($errors->has('deskripsi'))
                    <div class="alert alert-danger" role="alert" style="margin-top: 5px">
                        {{ $errors->first('deskripsi') }}
                    </div>
                @endif
          </div>
          
        <div class="mb-3" style="width: 100%">
          <button type="submit" class="btn btn-dark" style="align-self: stretch;width: 100%; border-radius:26px;padding: 14px 11px;">Kirim</button>
        </div>
      </form>
    </div>
</body>

</html>

