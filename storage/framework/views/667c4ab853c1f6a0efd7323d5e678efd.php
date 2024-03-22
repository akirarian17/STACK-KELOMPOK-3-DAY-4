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
        <a class="navbar-brand" href="index.html">
          <img
            src="/assets/icon.png"
            alt=""
            width="30"
            class="d-inline-block align-text-top me-3"
          />Lafor
        </a>
        
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
            <span></span>
          </div>
        </div>

        <div class="card mt-3 custom-card">
          <div class="card-header custom-column"></div>
          <div class="card-body">
            <form>
              <div class="mb-3">
              </div>
              
              <table border="1" style="width:100%">
                <tr>
                  <th style="width:30%">Judul Aspirasi 1</th>
                  <th>Oleh A</th>
                  <th>Kategori X</th>
                  
                </tr>
                <?php $__currentLoopData = $aspirasi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <th style="width:30%"><?php echo e($a['Judul']); ?></th>
                  <th><?php echo e($a['Nama']); ?></th>
                  <th><?php echo e($a['Kategori']); ?></th>
                  <th><a href="/Edit_Laporan/<?php echo e($a['id']); ?>">Edit</a></th>
                  
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </table>
              <div class="mb-3">   
              </div>
              <div class="mb-3">    
              </div>
              <div class="col-12">
                <label class="visually-hidden" for="inlineFormSelectPref"
                  >Preference</label
                >
              </div>
            </form>
            <!-- button -->
            <div class="upload">
              
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
<?php /**PATH C:\xampp\htdocs\Stack_Real 1.1\resources\views/Hasil_Laporan.blade.php ENDPATH**/ ?>