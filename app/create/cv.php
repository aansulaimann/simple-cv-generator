<?php 
   session_start();
   if(!isset($_SESSION["cetak"])) {
      header("Location: http://localhost/cv-generator/app/create/");
   }

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>CREATE CV | CV Generator</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200;600&display=swap" rel="stylesheet">
   <!-- <link rel="stylesheet" href="http://localhost/cv-generator/public/css/style.css"> -->
   <link rel="shortcut icon" href="http://localhost/cv-generator/public/img/resume.png">
</head>
<body data-bs-spy="scroll"> 
   <!-- <header>
      <nav class="navbar navbar-expand-lg navbar-light mt-3">
         <div class="container">
            <a class="navbar-brand" href="http://localhost/cv-generator/"><b>CV Generator</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
               <div class="navbar-nav ms-auto">
                  <a class="nav-link active me-4" aria-current="page" href="#">Home</a>
                  <a class="nav-link me-4" href="#">Features</a>
                  <a class="nav-link me-4" href="#">Pricing</a>
                  <a class="btn btn-outline-warning ms-4 px-4" href="http://localhost/cv-generator/app/create">Create CV</a>
               </div>
            </div>
         </div>
      </nav>
   </header> -->

   <main>
      <section>
         <div class="container mt-5">
            <div class="row">
               <div class="col col-lg-5 bg-light text-center">
               <div class="row">
                  <div class="col">
                     <img src="http://localhost/cv-generator/public/img/resume.png" alt="404" width="140" class="mt-5 mb-3">
                  </div>
               </div>
               <div class="row">
                  <div class="col">
                     <h4 class="mt-5 bg-dark p-3 text-white">Ringkasan Diri</h4>
                     <p class="text-start"><?php echo $_POST["ringkasanDiri"]; ?>.</p>
                  </div>
               </div>
               <div class="row">
                  <div class="col">
                     <h4 class="mt-5 bg-dark p-3 text-white">Hubungi Saya</h4>
                     <p class="text-start mb-1"><b>Email : </b> <?php echo $_POST["email"]; ?></p>
                     <p class="text-start mb-1"><b>Facebook : </b> <?php echo $_POST["fb"]; ?></p>
                     <p class="text-start mb-1"><b>Instagram : </b> <?php echo $_POST["ig"]; ?></p>
                     <p class="text-start mb-1"><b>LinkedIn : </b> <?php echo $_POST["linkedin"]; ?></p>
                  </div>
               </div>
               </div>
               <div class="col text-center">
                  <div class="row bg-dark text-white p-5">
                     <div class="col">
                        <h2 class="mt-4 mb-3">AAN SULAIMAN</h2>
                        <h5>IT WEB DEVELOPER</h5>
                     </div>
                  </div>
                  <div class="row ms-1">
                     <div class="col">
                        <h4 class="mt-5 bg-dark p-3 text-white">Pengalaman Kerja</h4>
                        <p class="fw-bold text-start mb-0">PT. Maju Mundur</p>
                        <p class="fst-italic text-start mb-1">Staff IT | 2 tahun | 2010 - 2012</p>
                        <p class="text-start mb-1">- membuat website statis</p>
                        <p class="text-start mb-1">- membuat website statis</p>
                        <p class="text-start mb-1">- membuat website statis</p>
                     </div>
                  </div>

                  <div class="row ms-1">
                     <div class="col">
                        <h4 class="mt-5 bg-dark p-3 text-white">Latar Belakang Pendidikan</h4>
                        <p class="fw-bold text-start mb-0">Universitas ABcdE</p>
                        <p class="fst-italic text-start mb-1">S1 Teknik Sipil | 2010 - 2014</p>
                        <p class="fw-bold text-start mt-2 mb-0">SMK Abd</p>
                        <p class="fst-italic text-start mb-1">Teknik Komputer Jaringan | 2007 - 2010</p>
                     </div>
                  </div>

                  <div class="row mt-2 ms-1">
                     <div class="col">
                        <h4 class="mt-5 bg-dark p-3 text-white">Skills</h4>
                        <p class="text-start mb-1"><b>Membuat website statis</b> | Expert</p>
                        <p class="text-start mb-1"><b>Bahasa Pemrogramman PHP</b> | Menengah</p>
                        <p class="text-start mb-1"><b>VCS GIT</b> | Pemula</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
   </main>
   
   <!-- <footer>
      <div class="container">
         <div class="row">
            <div class="col text-center text-secondary mt-5">
               <h6>All right Reserved &copy 2021 | Created by aan</h4>
            </div>
         </div>
      </div>
   </footer> -->

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>