<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <!-- Bagian Navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">LaporKep v.1.0</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      </ul>
      <form class="d-flex" role="search">
        <button class="btn btn-sm btn-outline-success" type="button" style="margin-right: 10px;" data-bs-toggle="modal" data-bs-target="#aboutModal">Tentang LaporKep</button>
        <button class="btn btn-sm btn-outline-warning" type="submit" style="margin-right: 10px;">Statistik Laporan</button>
        <button class="btn btn-sm btn-primary" type="submit">Login Pengguna</button>
      </form>
    </div>
  </div>
</nav>

<div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="images/depan1.jpg" class="d-block w-100 border border-primary rounded" alt="...">
                </div>
                <div class="carousel-item">
                <img src="images/depan2.jpg" class="d-block w-100 border border-primary rounded" alt="...">
                </div>
                <div class="carousel-item">
                <img src="images/depan3.jpg" class="d-block w-100 border border-primary rounded" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            </div>
      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Saluran Aspirasi Warga Sekolah</h1>
        <p class="lead">Sampaikan aspirasi Anda baik berupa pengaduan, keluhan, saran dan masukan secara langsung kepada Pimpinan Sekolah demi perbaikan dan peningkatan kualitas layanan pendidikan di SMK Negeri 1 Limboto.</p>
        
      </div>
    </div>
  </div>


  <div class="container">
    <div class="card">
      <div class="card-header text-center">
        <h2>Laporan Anda !</h2>
      </div>
      <div class="card-body">
        <h5 class="card-title">Formulir Laporan/Aspirasi.</h5>
        <hr />
        <form action="" method="post">
          <div class="mb-3">
          <label class="form-check-label"><b>Klasifikasi Laporan : </b></label>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
              <label class="form-check-label" for="inlineRadio1">Pengaduan</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
              <label class="form-check-label" for="inlineRadio2">Saran/Masukan</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
              <label class="form-check-label" for="inlineRadio3">Apresiasi</label>
            </div>
          </div>
          <div class="mb-3">
            <label class="form-check-label"><b>Judul Laporan : </b></label>
            <input type="text" class="form-control" placeholder="Judul Laporan ...">
          </div>
          <div class="mb-3">
            <label class="form-check-label"><b>Isi Laporan : </b></label>
            <textarea class="form-control" name="" id="" rows="5" >Isi Laporan Anda :</textarea>
          </div>
          <div class="mb-3">
            <label class="form-check-label"><b>Waktu Kejadian : </b></label>
            <input type="datetime-local" class="form-control">
          </div>
          <div class="mb-3">
            <label class="form-check-label"><b>Tempat Laporan : </b></label>
            <input type="text" class="form-control" placeholder="Tempat Kejadian ...">
          </div>
          <div class="mb-3">
            <label class="form-check-label"><b>Bukti Laporan : </b></label>
            <input type="file" class="form-control">
          </div>
          <div class="mb-3">
            <label class="form-check-label"><b>Kategori Laporan : </b></label>
            <select class="form-select" aria-label="Default select example">
              <option selected>--Pilih Kategori Laporan--</option>
              <option value="1">Layanan Pembelajaran</option>
              <option value="2">Pungutan</option>
              <option value="3">Perundungan/Bullying/Kekerasan</option>
              <option value="4">Fasilitas Sarana Prasarana</option>
              <option value="5">Layanan Tata Usaha</option>
              <option value="6">Layanan Umum Lainnya</option>
            </select>
          </div>
          <div class="mb-3">
            <label class="form-check-label"><b>Sasaran Laporan : </b></label>
            <select class="form-select" aria-label="Default select example">
              <option selected>--Pilih Lategori Laporan--</option>
              <option value="1">Guru</option>
              <option value="2">Siswa</option>
              <option value="3">Pegawai</option>
              <option value="4">Sarana Prasarana</option>
            </select>
          </div>
          <div class="mb-3">
            <label class="form-check-label"><b>Klasifikasi Pelapor : </b></label>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
              <label class="form-check-label" for="inlineRadio1">Siswa</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
              <label class="form-check-label" for="inlineRadio2">Guru/Pegawai</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
              <label class="form-check-label" for="inlineRadio3">Orang Tua/Wali Siswa</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
              <label class="form-check-label" for="inlineRadio3">Masyarakat</label>
            </div>
          </div>
          <div class="mb-3">
            <label class="form-check-label"><b>Data Pelapor : </b></label>
            <textarea class="form-control" name="" id="" rows="5" >
Nama :
Alamat :
No Hp :
            </textarea>
          </div>
          <div class="mb-3">
            <input type="submit" value="Lapor!" class="btn btn-lg btn-danger form-control">
          </div>
        </form>
      </div>
      <div class="card-footer text-body-secondary text-center">
        Laporan anda akan kami rahasiakan. Terimakasih atas partisipasi anda.
      </div>
    </div>
  </div>

  <div class="container-fluid">
  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <div class="col-md-4 d-flex align-items-center">
      <a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
        <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
      </a>
      <span class="mb-3 mb-md-0 text-body-secondary">© 2025 - 11 RPL</span>
    </div>

    <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
      <li class="ms-3"><a class="text-body-secondary" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"></use></svg></a></li>
      <li class="ms-3"><a class="text-body-secondary" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"></use></svg></a></li>
      <li class="ms-3"><a class="text-body-secondary" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"></use></svg></a></li>
    </ul>
  </footer>
</div>

<!-- Modal -->
<div class="modal fade" id="aboutModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Aplikasi LaporKep v.1.0</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h5>Aplikasi ini adalah hasil pengembangan dari siswa kelas 11 RPL SMKN 1 Limboto tahun 2025</h5>
        Biodata Programmer :<br>
        <ul>
          <li>Nama  : Sandra Bahua</li>
          <li>Kelas : 11 RPL</li>
          <li>Hoby  : Makan</li>
        </ul>
        <img src="images/sandra.jpg" class="border border-primary rounded" width="200px">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>