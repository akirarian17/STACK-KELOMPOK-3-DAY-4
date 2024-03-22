<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />

    <!-- Font Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap"
      rel="stylesheet"
    />

    <!-- My Style -->
    <link rel="stylesheet" href="/assets/Lafor.css" />
    <title>Lafor</title>
  </head>
  <body>
    <!-- Navbar -->
    <nav
      class="navbar navbar-expand-lg navbar-dark bg-body-tertiary position-fixed w-100" style="background-color:  #2d3250;"
    >
      <div class="container">
        <a class="navbar-brand" href="#">
          <img
            src="/assets/icon.png"
            alt=""
            width="30"
            class="d-inline-block align-text-top me-3"
          />Lafor
        </a>
        <div>
          
        </div>
      </div>
    </nav>
    <!-- End Navbar -->

    <!-- Hero Section -->
   
    <!-- End Hero Section -->

    <!-- Form Section -->
    <section id="form">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <h2>Formulir Aspirasi</h2>
            <span>Sampaikan Aspirasi Anda!</span>
          </div>
        </div>

        <div class="card mt-3 custom-card">
          <div class="card-header custom-column"></div>
          <div class="card-body">
            <form>
              <div class="mb-3">
                <input
                  type="text"
                  class="form-control"
                  id="Judul"
                  placeholder="Edit Judul Aspirasi Anda"
                />
              </div>
              <div class="mb-3">
                <textarea
                  class="form-control"
                  id="Pesan"
                  cols="30"
                  rows="10"
                  placeholder="Edit Aspirasi Anda"
                ></textarea>
              </div>
              <div class="mb-3">
                <input
                  type="text"
                  class="form-control"
                  id="Nama"
                  placeholder="Ketik Nama Anda"
                />
              </div>
              <div class="col-12">
                <label class="visually-hidden" for="inlineFormSelectPref"
                  >Preference</label
                >
                <select class="form-select" id="inlineFormSelectPref">
                  <option selected>Pilih Kategori Aspirasi</option>
                  <option value="1">Pelayanan Administrasi</option>
                  <option value="2">Kerjasama dengan Industri/Instansi</option>
                  <option value="3">Fasilitas, Sarana dan Prasarana</option>
                  <option value="4">Kurikulum dan Materi Pembelajaran</option>
                  <option value="5">Konsultasi dan Bimbingan Akademik</option>
                  <option value="6">Lainnya</option>
                </select>
              </div>
            </form>
            <!-- button -->
            <div class="upload">
              <input type="image" src="upload.png" alt="" class="img-upload">
              <button class="button-tertiary">Kirim</button>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Form Section -->

    <!-- Footer -->
    <footer class="d-flex align-items-center">
      <div class="container-fluid">
        <div class="container">
          <div class="row">
            <div class="col-md-7">
              <img src="assets/img/Kotaksuarapng (1) 1.png" alt="" />
              <a href="#">Lafor</a>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- End of Footer -->

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
<?php /**PATH C:\Coding\STACK\Stack_Real\resources\views/Edit_Hasil_Laporan.blade.php ENDPATH**/ ?>